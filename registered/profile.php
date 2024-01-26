<?php
require '../server/config.php';
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $AccType = $_SESSION["AccType"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $age = $row['age'];
        $sex = $row['sex'];
        $profile_image_path = $row['profile_image_path'];
        $nationality = $row['nationality'];
        $bio = $row['bio'];
        $icon_link = 'img/'.$row['profile_image_path'];
    } else {
        header("Location: /filingua/login.php");
        exit;
    }
} else {
    header("Location: /filingua/login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_FILES["image"]["name"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $name = $_POST["email"];
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Image validation
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
    
        if (!in_array(strtolower($imageExtension), $validImageExtension)){
            echo "
            <script>
              alert('Invalid Image Extension');
            </script>
            ";
        } elseif ($imageSize > 1200000){
            echo "
            <script>
              alert('Image Size Is Too Large');
            </script>
            ";
        } else {
            // Create the 'img' directory if it doesn't exist
            $imageDirectory = 'img';
            if (!is_dir($imageDirectory)) {
                mkdir($imageDirectory);
            }

            $newImageName = $email . " - " . date("Y.m.d") . " - " . date("h.i.sa");
            $newImageName .= '.' . $imageExtension;

            $query = "UPDATE tb_user SET profile_image_path = '$newImageName' WHERE email = '$email'";
            mysqli_query($conn, $query);

            // Move the uploaded file to the 'img' directory
            if (move_uploaded_file($tmpName, 'img/' . $newImageName)) {
                // Update the source of the image dynamically
                echo "
                <script>
                    document.getElementById('profileImage').src = 'img/<?php echo $newImageName; ?>?' + new Date().getTime();
                </script>
                ";
            } else {
                echo "
                <script>
                  alert('Failed to move uploaded file');
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
          alert('File upload failed');
        </script>
        ";
    }
} 

$user_id = $row['user_id'];
$query_progress = "SELECT * FROM progress_tbl WHERE user_id = $user_id";
$result_progress = mysqli_query($conn, $query_progress);

if ($row_progress = mysqli_fetch_assoc($result_progress)) {
    $tagalog_progress = $row_progress['tagalog'];
    $bicolano_progress = $row_progress['bicolano'];
    $cebuano_progress = $row_progress['cebuano'];
    $ilocano_progress = $row_progress['ilocano'];
    $kapampangan_progress = $row_progress['kapampangan'];
    $pangasinense_progress = $row_progress['pangasinense'];
} else {
    $tagalog_progress = 0;
    $bicolano_progress = 0;
    $cebuano_progress = 0;
    $ilocano_progress = 0;
    $kapampangan_progress = 0;
    $pangasinense_progress = 0;
}

$sql = "SELECT tagalog, bicolano, cebuano, ilocano, kapampangan, pangasinense FROM progress_tbl WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Calculate the overall sum
    $overall_sum = ($row['tagalog'] + $row['bicolano'] + $row['cebuano'] + $row['ilocano'])/4;

    // Update the overall column for the user
    $update_sql = "UPDATE progress_tbl SET overall = $overall_sum WHERE user_id = $user_id";
    $update_result = $conn->query($update_sql);

    if (!$update_result) {
        echo "Error updating overall column: " . mysqli_error($conn);
    }
} else {
    // If there is no progress data for the user, insert a new record
    $insert_sql = "INSERT INTO progress_tbl (user_id, overall) VALUES ($user_id, 0)";
    $insert_result = $conn->query($insert_sql);

    if (!$insert_result) {
        echo "Error inserting new record: " . mysqli_error($conn);
    }

    // Set overall_sum to 0 for the case where there was no data yet
    $overall_sum = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Profile</title>
    <link rel="stylesheet" href="../../filingua/css/profile.css">
    <link rel="icon" type="image/png" href="/filingua/images/logo.png">
</head>
<body>
    <div class="stage">
        <div class="logo">
            <img src="../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../filingua/registered/mainpage.php'">Learn</button>
            <button onclick="window.location.href='../../filingua/registered/practice.php'">Practice</button>
            <button onclick="window.location.href='../../filingua/registered/profile.php'">Profile</button>
            <?php
            if ($AccType == "developer") {
                echo '<button onclick="window.location.href=\'../../filingua/registered/admin.php\'">Manage</button>';
            }
            ?>
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div> 
    <div class="overall">
        <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
            <div class="upload">
                <img src="<?php echo $icon_link; ?>" width=200 height=200 id="profileImage">
                <div class="round">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <span><b>+</b></span>
                    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                </div>
                <div class="details">
                <?php
                    $sql = "SELECT AccType FROM tb_user WHERE email = '$email'";
                    $sqlresult = mysqli_query($conn, $sql);
                    $sqldisplay = mysqli_fetch_assoc($sqlresult);
                    $Acctype = $sqldisplay['AccType'];

                    echo '<div class="user-details">';
                    echo '<img src="../images/user.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                    echo '<h3>' . $first_name . '</h3>';

                    if ($Acctype == "developer") {
                        echo '&nbsp<img src="../../filingua/images/developer.png" alt="System Developer" class="verified-badge">';
                    } else {
                        // You can add an alternative image or content here if the user is not a developer.
                    }

                    echo '</div>';
                ?>
                <p>
                    <?php
                    echo '<img src="../images/email.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                    echo '<b>' .$email . '</b><br><br>';
                    echo $bio;
                    ?>
                <p>
                <div class="updates"> 
                    <a href="../../filingua/registered/update.php">baguhin</a>
                </div>
                <div class="credentials">
                    <p>
                        <?php
                        echo '<b>Mga Impormasyon</b><br>User Information<br><br>';
                        echo '<img src="../images/user.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo $first_name . ' ' .$last_name . '<br><br>';
                        echo '<img src="../images/age.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp '; 
                        echo $age .' years old' . '<br><br>'; 
                        echo '<img src="../images/gender.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo $sex . '<br><br>';
                        echo '<img src="../images/nationality.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo $nationality . '<br>';            
                        ?>
                    </p>
                </div>
                <div class="progress">
                    <p>
                        <?php
                        echo '<b>Mga Progreso</b><br>Progress<br><br>';
                        echo '<img src="../images/language.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Tagalog: <b>'.$tagalog_progress.'%&nbsp &nbsp &nbsp &nbsp';
                        echo '<img src="../images/language.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp '; 
                        echo '<b>Ilocano: <b>'.$ilocano_progress.'%<br><br>';
                        echo '<img src="../images/language.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Bicolano: <b>'.$bicolano_progress.'%&nbsp &nbsp &nbsp &nbsp &nbsp';   
                        echo '<img src="../images/language.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Cebuano: <b>'.$cebuano_progress.'%&nbsp &nbsp &nbsp &nbsp &nbsp';           
                        ?>
                    </p>
                </div>
                <div class="achievements">
                    <p>
                    <?php
                    $overall_sum = 100;
                    echo '<b>Mga Gawad</b> | Awards<br><br>';
                    if ($overall_sum >= 5){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Letter Learner</b> (05%)<br>';
                    }
                    if ($overall_sum >= 10){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Word Wanderer</b> (10%)<br>';
                    }
                    if ($overall_sum >= 15){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Phonetic Fledgling</b> (15%)<br>';
                    }
                    if ($overall_sum >= 20){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Alphabet Explorer</b> (20%)<br>';
                    }
                    if ($overall_sum >= 25){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Basic Linguist</b> (25%)<br>';
                    }
                    if ($overall_sum >= 30){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Linguistic Novice</b> (30%)<br>';
                    }
                    if ($overall_sum >= 35){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Alphabet Apprentice</b> (35%)<br>';
                    }
                    if ($overall_sum >= 40){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Greetings Master</b> (40%)<br>';
                    }
                    if ($overall_sum >= 45){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Vocabulary Voyager</b> (45%)<br>';
                    }
                    if ($overall_sum >= 50){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Grammar Guardian</b> (50%)<br>';
                    }
                    if ($overall_sum >= 55){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Conversation Cadet</b> (55%)<br>';
                    }
                    if ($overall_sum >= 60){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Cultural Explorer</b> (60%)<br>';
                    }
                    if ($overall_sum >= 65){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Fluency Fledgling</b> (65%)<br>';
                    }
                    if ($overall_sum >= 70){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Syntax Sorcerer</b> (70%)<br>';
                    }
                    if ($overall_sum >= 75){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Linguistic Luminary</b> (75%)<br>';
                    }
                    if ($overall_sum >= 80){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Polyglot Prodigy</b> (80%)<br>';
                    }
                    if ($overall_sum >= 85){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Global Ambassador</b> (85%)<br>';
                    }
                    if ($overall_sum >= 90){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Word Warrior</b> (90%)<br>';
                    }
                    if ($overall_sum >= 95){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Discourse Diplomat</b> (95%)<br>';
                    }
                    if ($overall_sum >= 100){
                        echo '<img src="../images/medal.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp ';
                        echo '<b>Language Olympian</b> (100%)<br>';
                    }
                    ?>
                    </p>
                </div>
            </div>
            </div>
        </form>
    </div>
    <div class="additional-div"></div>
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
</body>
</html>