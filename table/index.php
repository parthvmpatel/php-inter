<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <div class="Table">
            <form method="POST" action='index.php'>
                <th>
                    <p>Enter the no. </p>
                    <input type="int" name="num" placeholder="Enter the no.">
                    <input type="submit" name="submit">
                </th>
                <?php
                    if(isset($_POST['submit'])){
                        $no=$_POST['num'];
                        echo "<tr>";
                        for($i=1; $i<=10; $i++){
                            echo "<tr>";
                            $ans=$no*$i;
                            echo "<td>$i x $no = $ans</td>";
                            echo "<tr/>";
                        }        
                    }
                ?>
            </form>
        </div>
    </table>
</body>
</html>
