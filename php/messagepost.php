

<?php

$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' );
}
//connect table
// mysqli_query($con,"SET NAMES utf8");
mysqli_select_db($con,"gbook");

$sql = "CREATE TABLE IF NOT EXISTS message(
id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
name varchar(15) NOT NULL,
email varchar(15) NOT NULL,
content varchar(100) NOT NULL
 )";
mysqli_query($con, $sql);

$name =  $_POST['name'] ;
$email =  $_POST['email'];
$content = $_POST['content'];

$sql1 = "INSERT INTO message(name,email,content)
VALUES( '$name', '$email','$content')";

mysqli_query($con,$sql1);

echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>content</th>
</tr>";

$result = mysqli_query($con,"SELECT * FROM message");

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['content'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>