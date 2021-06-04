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
    table, td, th {
        border: 1px solid black;
        font-size: 25px;
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
    <title>Document</title>
</head>
<body>
    <div class="display">
        <form action='add_data.php'>
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email id</th>
                    <th>Phone no.</th>
                    <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once 'connect.php';     
                        $result = mysqli_query($con, "SELECT * FROM formdata");
                        $ch = mysqli_num_rows($result);
                        if ($ch > 0){
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr> <td>".$row["ID"]."</td>
                                        <td>".$row["name"]."</td>
                                        <td>".$row["email"]."</td>
                                        <td>".$row["phone"]."</td>
                                        <td>".$row["gender"]."</td>
                                        </tr>";
                            }
                        }
                    ?>
                </tbody>
            </table> 
            <input style='width: 40%; border: 0px; margin: 8px 0; font-size: 20px; border-radius: 20px' action = "add_data.php" type="submit" name="submit" value="Add Data">
    </div>
</body>
</html>