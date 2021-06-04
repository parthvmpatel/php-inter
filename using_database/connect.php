<?php	
$DBHOST = "localhost";
$DBUSERNAME = "investment";
$DBPASSWORD = "parth123";
$DBDATABASE = "phpinter";

/* Connect to DB */
$con = mysqli_connect($DBHOST, $DBUSERNAME, $DBPASSWORD, $DBDATABASE);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>