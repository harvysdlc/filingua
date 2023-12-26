<?php
require '../server/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
<?php 

$questions = array();
$lang_id = 1;
$quiz_id = 1;
$max_num_question = 10;

for ($i = 1; $i <= $max_num_question; $i++) {

    $question_num = rand(1, 10);

    while (in_array($question_num, $questions)) {
        $question_num = rand(1, 10);
    }

    if (!in_array($question_num, $questions)) {

        array_push($questions, $question_num);

        $stmt = $conn->prepare("SELECT * FROM questions_tbl WHERE quiz_id = ? AND lang_id = ? AND  ques_num = ?");
        $stmt->bind_param('iii', $quiz_id, $lang_id, $question_num);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
                $question = $data['ques'];
                $answer = $data['answer'];
                $ques_num = $data['ques_num'];
                echo "Question $i : $question ($ques_num) ";

                $stmt_choices = $conn->prepare("SELECT * FROM choices_tbl WHERE quiz_id = ? AND lang_id = ? AND ques_num = ?");
                $stmt_choices->bind_param('iii', $quiz_id, $lang_id, $ques_num);
                $stmt_choices->execute();
                $result_choices = $stmt_choices->get_result();

                echo ' <select class="form-select"  name="answer_'.$i.'" >';

                if ($result_choices->num_rows > 0) {
                    while ($data_choices = $result_choices->fetch_assoc()) {
                        $choices = $data_choices['choices'];
                        echo '
                            <option value="' . $choices . '" >' . $choices . '</option>
                        ';
                    }
                    echo '</select> <br>';

                }
            }

        }
    }
}
?>
<input type="submit" value="submit" name="submit_ans">

<?php 

if(isset($_POST['submit_ans'])){
    for($i=1; $i<=$max_num_question; $i++){
        $answer_id = 'answer_'.$i;
        $answer = isset($_POST[$answer_id]) ? $_POST[$answer_id] : "1";
        
        $ques_num = $questions[$i-1];

        $stmt = $conn->prepare("SELECT * FROM answer_tbl WHERE user_id = ? AND quiz_id = ? AND lang_id = ? AND ques_num = ?");
        $stmt->bind_param('iiii', $user_id, $quiz_id, $lang_id, $ques_num);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $stmt = $conn->prepare("UPDATE answer_tbl SET answer = ? WHERE user_id = ? AND quiz_id = ? AND lang_id = ? AND ques_num = ?");
            $stmt->bind_param('siiii', $answer, $user_id, $quiz_id, $lang_id, $ques_num);
            $stmt->execute();
            //header("location: home.php");
        }
        else{
            $stmt = $conn->prepare("INSERT INTO answer_tbl (user_id, quiz_id, lang_id, ques_num, answer) VALUES (?,?,?,?,?)");
            $stmt->bind_param('iiiis', $user_id, $quiz_id, $lang_id, $ques_num, $answer);
            $stmt->execute();

            //header("location: home.php");
        }

    }
}
?>
</form>
</body>
</html>