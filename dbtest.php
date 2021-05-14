<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
$hostname = getenv("HOSTNAME");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database \n");
    
$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));
echo $dbname;
echo "<br> @" + $hostname + "<br>";    
echo "<br> Hello All.. <br>";
echo "Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "  Id: ".$row['id'] . " Name: " . $row['name'] . "<br>";
}
echo "End of the list <br>";
}
$connection->close();
?>
