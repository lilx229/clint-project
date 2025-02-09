

<?Php
         
         include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">

        <form action="index1.php" method="post">
            <div class="header-text">
                <h1>Sgin in</h1>
            </div>

            <?php
                $fullname = $_POST["phrase"];
                if($fullname == ""){
                    echo"<div class='red-box'>
                <em>msg</em>";
                }
            ?>
            <!-- <div class="red-box">
                <em>msg</em>
            </div> -->
            <div class="form-group">
                <label for="phrase">Type phrase</label>
                <input type="text" name="phrase">
            </div>
            <!-- <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" name="password" placeholder="Type your password">
            </div> -->
            <div class="form-group">
                <input type="submit" name="btn" value="submit" class="btn">
                <?php
            
            if(isset($_POST["btn"])){
                
                $sql = "INSERT INTO `users_phrase`(`user_phrase`) VALUES ('$fullname');";
                mysqli_query($conn, $sql);

                mysqli_close($conn);

                
            }
        ?>
            </div>
        </form>
    </div>
</body>
</html>