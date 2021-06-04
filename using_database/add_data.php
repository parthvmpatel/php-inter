<style>
	body{
		background: url(tree.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.display {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align:center;
	}
    .display input[type="text"], input[type="email"], input[type="int"]{
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        color: green;
        font-size: 16px;
        width: 100%;
        margin-bottom: 20px;   
    }
    .display input[type=submit]:hover{
        background-color: green;
        color: white;
        border: 2px solid #4CAF50;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add info</title>
</head>
<body>
<div class="display">
        <h1>Add Data</h1>
        <form method = "POST"> 
            <input type="text" name="Name" size=35 placeholder="Enter Name"> <br>
            <input type="email" name="email" size=35 placeholder="Enter Email id"> <br>
            <input type="int" name="phone" size=35 placeholder="Enter Phone no."> <br>
            <p><input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female</p><br>
            <input style='width: 40%; border: 0px; margin: 8px 0; font-size: 20px; border-radius: 20px' action = "add_data.php" type="submit" name="submit" value="Submit">
            <input style='width: 40%; border: 0px; margin: 8px 0; font-size: 20px; border-radius: 20px' formaction="http://localhost/php_initer/using_database/" type="submit" name="submit" value="View Data">
        </form>
        <?php
            include_once 'connect.php'; 
            if(isset($_POST['submit'])){
                $name = $_POST['Name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];
                $result = mysqli_query($con, "INSERT INTO `formdata` (`ID`, `name`, `email`, `phone`, `gender`) VALUES (NULL, '$name', '$email', '$phone', '$gender')");
            }
        ?>
    </div>
</body>
</html>