<?php
require '../server/config.php';
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagsasanay - Tagalog 9 </title>
    <link rel="stylesheet" href="../../../filingua/quiz/css/quiz.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>

<body>
    <div class="stage">
        <div class="label">
            <h2>Aralin 9: Mga Araw at Buwan</h2>
        </div>
        <div class="larrow">
            <a href="../lessons/tagalog/aralin9.php">
                <img src="../images/larrow.png" alt="left arrow">
            </a>
        </div>
    </div>
    <div class="container">
        <form method="post">
            <div class="intro">
                <br>
                <p><b>Practice Tagalog</b></p>
                <p>Translate the following from Tagalog to English and vice versa.</p>
            </div>
            <?php
            $questions = array();
            $lang_id = 1;
            $quiz_id = 9;
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
                            echo '<input type="hidden" value="' . $ques_num . '" name="ques_num_' . $i . '">';
                            echo " <br><br><br><b>Selection $i: &emsp;</b> $question";

                            $stmt_choices = $conn->prepare("SELECT * FROM choices_tbl WHERE quiz_id = ? AND lang_id = ? AND ques_num = ?");
                            $stmt_choices->bind_param('iii', $quiz_id, $lang_id, $ques_num);
                            $stmt_choices->execute();
                            $result_choices = $stmt_choices->get_result();

                            echo ' <br><br> <b>Translation: &emsp;</b> <select class="form-select"  name="answer_' . $i . '" >
                                    <option value="" disabled selected color="#ffffff">Select an answer</option>
                            ';


                            if ($result_choices->num_rows > 0) {
                                while ($data_choices = $result_choices->fetch_assoc()) {
                                    $choices = $data_choices['choices'];
                                    echo '
                                        <option value="' . $choices . '" >' . $choices . '</option>
                                    ';
                                }
                                echo '</select> <br><br><br>';
                            }
                        }
                    }
                }
            }
            ?>
            <br><br><br>
            <input type="submit" value="Submit" name="submit_ans">
        </form>
        <?php
        if (isset($_POST['submit_ans'])) {
            $quesions = isset($_SESSION['q_array']) ? $_SESSION['q_array'] : null;

            $cur_question_arr = array();

            for ($i = 1; $i <= $max_num_question; $i++) {
                $answer_id = 'answer_' . $i;
                $answer = isset($_POST[$answer_id]) ? $_POST[$answer_id] : "No Answer";

                $ques_num_id = 'ques_num_' . $i;
                $ques_num = isset($_POST[$ques_num_id]) ? intval($_POST[$ques_num_id]) : "1";
                //echo $ques_num; checker
                array_push($cur_question_arr, $ques_num);

                $stmt = $conn->prepare("SELECT * FROM answer_tbl WHERE user_id = ? AND quiz_id = ? AND lang_id = ? AND ques_num = ?");
                $stmt->bind_param('iiii', $user_id, $quiz_id, $lang_id, $ques_num);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $stmt = $conn->prepare("UPDATE answer_tbl SET answer = ? WHERE user_id = ? AND quiz_id = ? AND lang_id = ? AND ques_num = ?");
                    $stmt->bind_param('siiii', $answer, $user_id, $quiz_id, $lang_id, $ques_num);
                    $stmt->execute();
                } else {
                    $stmt = $conn->prepare("INSERT INTO answer_tbl (user_id, quiz_id, lang_id, ques_num, answer) VALUES (?,?,?,?,?)");
                    $stmt->bind_param('iiiis', $user_id, $quiz_id, $lang_id, $ques_num, $answer);
                    $stmt->execute();
                }
            }

            $_SESSION['max_num_question'] = $max_num_question;
            $_SESSION['lang_id'] = $lang_id;
            $_SESSION['quiz_id'] = $quiz_id;
            $_SESSION['cur_question_arr'] = $cur_question_arr;
            echo '<script>window.location.href="../registered/result.php";</script>';
        }
        ?>
    </div>
</body>

</html>
