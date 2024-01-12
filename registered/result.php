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

    if ($lang_id == 1) {
        $quizColumn = "L" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM tagalog_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE tagalog_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO tagalog_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }

        // Calculate the total score from t1 to t9
        $stmt_total = $conn->prepare("SELECT L1, L2, L3, L4, L5, L6, L7, L8, L9 FROM tagalog_tbl WHERE user_id = ?");
        $stmt_total->bind_param('i', $user_id);
        $stmt_total->execute();
        $result_total = $stmt_total->get_result();

        if ($result_total->num_rows > 0) {
            $row = $result_total->fetch_assoc();
            $totalScore = ($row['L1'] + $row['L2'] + $row['L3'] + $row['L4'] + $row['L5'] + $row['L6'] + $row['L7'] + $row['L8'] + $row['L9']) / 90 * 100;

            // Insert or update the total score into the progress_tbl
            $stmt_progress = $conn->prepare("INSERT INTO progress_tbl (user_id, tagalog) VALUES (?, ?) ON DUPLICATE KEY UPDATE tagalog = ?");
            $stmt_progress->bind_param('iii', $user_id, $totalScore, $totalScore);
            $stmt_progress->execute();
        }
    }
    if ($lang_id == 2) {
        $quizColumn = "b" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM score_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE score_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO score_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }
    }
    if ($lang_id == 3) {
        $quizColumn = "c" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM score_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE score_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO score_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }
    }
    if ($lang_id == 4) {
        $quizColumn = "i" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM score_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE score_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO score_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }
    }
    if ($lang_id == 5) {
        $quizColumn = "k" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM score_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE score_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO score_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }
    }
    if ($lang_id == 6) {
        $quizColumn = "p" . $quiz_id;

        // Check if the row exists
        $stmt_check = $conn->prepare("SELECT * FROM score_tbl WHERE user_id = ?");
        $stmt_check->bind_param('i', $user_id);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            // If the row exists, update it with the new score
            $stmt_update = $conn->prepare("UPDATE score_tbl SET $quizColumn = ? WHERE user_id = ?");
            $stmt_update->bind_param('ii', $score, $user_id);
            $stmt_update->execute();
        } else {
            // If the row doesn't exist, insert a new one with the score
            $stmt_insert = $conn->prepare("INSERT INTO score_tbl (user_id, $quizColumn) VALUES (?, ?)");
            $stmt_insert->bind_param('ii', $user_id, $score);
            $stmt_insert->execute();
        }
    }
?>
</div>
</body>
</html>