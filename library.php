<!DOCTYPE html>
<html>
<head>
<title>Nat's Library</title>
<meta charset="utf-8">
</head>
<body>
<h3>Add a book to our database</h3>
<form method="get" action="saveBook.php" id="form">
Title: <input type="text" name="title" id="title" required><br><br>
Author: <input type="text" name="author" id="author" required><br><br>
Publication Year: 
<select name="year">
<?php
$firstYear = 1800;
$lastYear = 2020;
for ($year = $lastYear; $year >= $firstYear; $year--) {
	echo "<option>$year</option>";
}
?>
</select>
<br><br>
<input type="submit" value="Add Book">
</form>
<script>
// Validate form in case 'required' attribute is not supported.
var form = document.getElementById("form");
var titleField = document.getElementById("title");
var authorField = document.getElementById("author");
form.addEventListener("submit", function(event){
	event.preventDefault();
	if (titleField.value === "") {
		alert("Please enter in the book title.");
		return;
	} else if (authorField === "") {
		alert("Please enter in the author's name.");
		return;
	}	
	form.submit();
});
</script>
</body>
</html>