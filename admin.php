<html>
<head>
<title>Stdent Registration Detail</title>
</head>
<body>
<form action="qwert.php" method="post">
<select id="eventlist" name="eventlist">
<?php
include_once 'dbConnection.php';
$query="SELECT * FROM  `events`";
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){
echo "<option value='".$row['e_id']."'>".$row['e_name']."</option>";
}
}
?>
</select>
<input type="submit"/>
</form>
</body>
</html>
