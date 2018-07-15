<!DOCTYPE html>
<html>
<head>
<title>Nat's Library</title>
<meta charset="utf-8">
</head>
<body>
<h3>Add a book to our database</h3>
<form method="get" action="saveBook.php">
Title: <input type="text" name="title"><br><br>
Author: <input type="text" name="author"><br><br>
Publication Year: 
<select name="year">
<?php
$firstYear = 1800;
$lastYear = 2020;
for ($year = $lastYear; $year >= $firstYear; $year--) {
	echo "<option>".$year."</option>";
}
?>
</select>
<br><br>

<input type="submit" value="Add Book">
</form>
</body>
</html>
