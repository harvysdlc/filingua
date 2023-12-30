<?php 
    require '../server/config.php';
    session_start();

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
    $lang_id = isset($_SESSION['lang_id']) ? $_SESSION['lang_id'] : 0;
    $max_num_question = isset($_SESSION['max_num_question']) ? $_SESSION['max_num_question'] : 0;
    $quiz_id = isset($_SESSION['quiz_id']) ? $_SESSION['quiz_id'] : 0; 
    $question_arr = isset($_SESSION['cur_question_arr']) ? $_SESSION['cur_question_arr'] : null; 
    //echo $lang_id;
    //echo $quiz_id ; 
    //var_dump($question_arr);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagsasanay - Resulta</title>
    <link rel="stylesheet" href="../../filingua/css/result.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>
<body>
    <div class="stage">
        <div class="label">
            <h2>Resulta</h2>
        </div>
        <div class="larrow">
            <a href="../lessons/tagalog/landing.php">
                <img src="../images/larrow.png" alt="left arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../filingua/registered/practice.php">
                <img src="../images/home.png" alt="home">
            </a>
        </div>
    </div>
    <div class="result">
<?php 
    //echo 'Language id: '. $lang_id; 
    //echo '<br>Quiz id: '. $quiz_id;
    echo '<h3>Quiz Summary</h3>';
    $score = 0;
    echo '<br>';
    for($i = 0; $i<$max_num_question; $i++){

        $ques_num = $question_arr[$i];

        $stmt = $conn->prepare("SELECT * FROM answer_tbl WHERE user_id = ? AND quiz_id = ? AND lang_id = ? AND ques_num = ?");
        $stmt->bind_param('iiii', $user_id, $quiz_id, $lang_id, $ques_num);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        // USER ANSWER
        $user_ans = $data['answer'];

        $stmt = $conn->prepare("SELECT * FROM questions_tbl WHERE quiz_id = ? AND lang_id = ? AND ques_num = ?");
        $stmt->bind_param('iii',$quiz_id, $lang_id, $ques_num);
        $stmt->execute();
        $result = $stmt->get_result();
        $data_ans = $result->fetch_assoc();
        // CHEAT SHEET
        $l_id = $data_ans['lang_id'];
        $q_id = $data_ans['quiz_id'];
        $ques = $data_ans['ques'];
        $q_num = $data_ans['ques_num'];
        $ans = $data_ans['answer'];
        $check_ans = strcmp($ans, $user_ans);

        if ($check_ans == 0) {
            $check_ans = "Correct";
            $score++;
        }
        
        else {
            $check_ans = "Wrong";
        }
        echo '<br><b>Translate:</b> '.$ques.'<br><b>Outcome:</b> '.$check_ans.'<br>';
    }
    echo '<br><br><b><h3>' . $score . '/' . $max_num_question . '</h3>';
?>
</div>
</body>
</html>