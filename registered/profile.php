<?php
require '../server/config.php';

if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];
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
                  document.getElementById('profileImage').src = 'img/$newImageName';
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Profile</title>
    <link rel="stylesheet" href="../../filingua/css/profile.css">
    <link rel="icon" type="image/png" href="/filingua/images/logo.png">
    <style>
        body { background-color: #ffffff; }
    </style>
</head>
<body>
    <div class="stage">
        <div class="logo">
            <img src="../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../filingua/registered/mainpage.php'">Mag-Aral</button>
            <button onclick="window.location.href='../../filingua/registered/practice.php'">Magsanay</button>
            <button onclick="window.location.href='../../filingua/registered/profile.php'">Profile</button>
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div>    

    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
        <div class="upload">
            <img src="img/<?php echo $profile_image_path; ?>" width=400 height=400 id="profileImage">
            <div class="round">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <img src="../../filingua/images/add.png" alt="Change Photo">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
            <div class="details">
                <?php
                    $sql = "SELECT AccType FROM tb_user WHERE email = '$email'";
                    $sqlresult = mysqli_query($conn, $sql);
                    $sqldisplay = mysqli_fetch_assoc($sqlresult);
                    $Acctype = $sqldisplay['AccType'];

                    echo '<div class="user-details">';
                    echo '<h1>' . $first_name . '</h1>';

                    if ($Acctype == "developer") {
                        echo '<img src="../../filingua/images/developer.png" alt="System Developer" class="verified-badge">';
                    } else {
                        // You can add an alternative image or content here if the user is not a developer.
                    }

                    echo '</div>';
                ?>
                <p>
                    <?php
                    echo '<b>' .$email . '</b><br><br>';
                    echo $bio;
                    ?>
                <p>
                <div class="updates"> 
                    <a href="../../filingua/registered/update.php">baguhin</a>
                </div>
            </div>
            <div class="credentials">
                <p>
                    <?php
                    echo '<b>Pangalan: </b>'. '<br>' .$first_name . ' ' .$last_name . '<br><br>'; 
                    echo '<b>Sulatroniko: </b>'. '<br>' .$email . '<br><br>'; 
                    echo '<b>Edad: </b>'. '<br>' .$age .' taong gulang' . '<br><br>'; 
                    echo '<b>Kasarian: </b>'. '<br>' .$sex . '<br><br>';
                    echo '<b>Nasyonalidad: </b>'. '<br>' .$nationality . '<br>';            
                    ?>
                </p>
            </div>
        </div>
    </form>
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
</body>
</html>