<?php
require '../server/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    if ($action == "toggle_block") {
        // Toggle block/unblock action
        $user_id_to_update = $_POST["userId"];
        $result = mysqli_query($conn, "SELECT progress FROM tb_user WHERE user_id = '$user_id_to_update'");
        $row = mysqli_fetch_assoc($result);
        $new_progress = ($row['progress'] == 1) ? 0 : 1;
        mysqli_query($conn, "UPDATE tb_user SET progress = $new_progress WHERE user_id = '$user_id_to_update'");
        echo json_encode(['status' => ($new_progress ? 'Blocked' : 'Unblocked')]);
    } elseif ($action == "toggle_developer") {
        // Toggle make developer/make user action
        $user_id_to_update = $_POST["userId"];
        $result = mysqli_query($conn, "SELECT AccType FROM tb_user WHERE user_id = '$user_id_to_update'");
        $row = mysqli_fetch_assoc($result);
        $new_AccType = ($row['AccType'] == 'developer') ? 'user' : 'developer';
        mysqli_query($conn, "UPDATE tb_user SET AccType = '$new_AccType' WHERE user_id = '$user_id_to_update'");
        echo json_encode(['status' => $new_AccType]);    
    } 

    elseif ($action == "system_update") {
        $user_id_to_update = $_POST["userId"];
        $result = mysqli_query($conn, "SELECT progress FROM tb_user WHERE user_id = '$user_id_to_update'");
        $row = mysqli_fetch_assoc($result);
        $progress = $row['progress'];

        if ($progress == 1) {
            $noChangeQuery = "UPDATE tb_user SET progress = 1 WHERE AccType != 'developer' AND progress = 1";
            $noChangeResult = mysqli_query($conn, $noChangeQuery);
            
            if (!$noChangeResult) {
                echo json_encode(['error' => mysqli_error($conn)]);
            } else {
                echo json_encode(['success' => true]);
            }
            exit();
        }

        if ($progress == 0) {
            $updateQuery = "UPDATE tb_user SET progress = 2 WHERE AccType != 'developer' AND progress = 0";
            $updateResult = mysqli_query($conn, $updateQuery);

            if (!$updateResult) {
                echo json_encode(['error' => mysqli_error($conn)]);
            } else {
                echo json_encode(['success' => true]);
            }
            exit();
        }
    }

    elseif ($action == "toggle_remove") {
        $user_id_to_remove = $_POST["userId"];
        $result = mysqli_query($conn, "DELETE FROM tb_user WHERE user_id = '$user_id_to_remove'");
        
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['error' => mysqli_error($conn)]);
        }
    }
}
?>
