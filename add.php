<?php
include_once("functions.php");
if (isset($_POST["submit"])) {
	addRecord($_POST["name"], $_POST["genre"], $_POST["reflection"], $_POST["rating"], $_POST["recommend"]);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Reading Record - Add Record</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>
		<div class="sitename">
			<a href="index.php">My Reading Record</a>
		</div>
		<div class="search">
			<span class="search-input"><input type="text" name="search" placeholder="search">
		</div>
	</header>
	<div class="container">
		<h1>Add record</h1>
		<div class="box">
			<form method="post">
				<label for="name">Book name</label>
			  <input type="text" name="name" id="name">
			  <label for="genre">Genre</label>
				<select name="genre" id="genre">
				  <option value=""></option>
					<option value="Action and adventure">Action and adventure</option>
					<option value="Art">Art</option>
					<option value="Autobiography">Autobiography</option>
					<option value="Biography">Biography</option>
					<option value="Book review">Book review</option>
					<option value="Cookbook">Cookbook</option>
					<option value="Comic book">Comic book</option>
					<option value="Diary">Diary</option>
					<option value="Dictionary">Dictionary</option>
					<option value="Crime">Crime</option>
					<option value="Encyclopedia">Encyclopedia</option>
					<option value="Drama">Drama</option>
					<option value="Fairytale">Fairytale</option>
					<option value="Health">Health</option>
					<option value="Fantasy">Fantasy</option>
					<option value="History">History</option>
					<option value="Journal">Journal</option>
					<option value="Math">Math</option>
					<option value="Horror">Horror</option>
					<option value="Mystery">Mystery</option>
					<option value="Textbook">Textbook</option>
					<option value="Poetry">Poetry</option>
					<option value="Review">Review</option>
					<option value="Science">Science</option>
					<option value="Romance">Romance</option>
					<option value="Travel">Travel</option>
					<option value="Thriller">Thriller</option>
				</select>
				<label for="reflection">My reflection</label>
			  <textarea name="reflection" id="reflection" cols="70" rows="6"></textarea>
			  <label for="rating">Rating</label>
				<select name="rating" id="rating">
				  <option value="-1"></option>
				  <option value="0">0</option>
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
			  <label for="recommend">Recommended</label>
				<select name="recommend" id="recommend">
				  <option value="-1"></option>
				  <option value="1">Yes</option>
				  <option value="0">No</option>
				</select>
			  <input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
	<footer>
		<div class="container">Created by Gabriel (Lee Chi Hong) for SCC130 Term 3 Assessment @ Lancaster University.</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>