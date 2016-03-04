<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"></meta>
<title>Quiz</title>
</head>

<body>

<?php

	$answer1 = $_POST["q1"];
	$answer2 = $_POST["q2"];
	$answer3 = $_POST["q3"];
	$answer4 = $_POST["q4"];
	$answer5 = $_POST["q5"];
	
	$a1 = "Neptune";
	$a2 = "Nevada";
	$a3 = "Sarah Michelle Gellar";
	$a4 = "John F. Kennedy";
	$a5 = "SuperBowl";
	
	$correct = 0;
	
	echo "Question 1: Who was the Roman god of the sea?<br>You Answered: " . $answer1 . "<br>Correct answer: ". $a1 ."<br><br>";
	
	echo "Question 2: In what state would you find the supposed UFO site named 'Area 51'?<br>You Answered: " . $answer2 . "<br>Correct answer: Nevada<br><br>";
	
	echo "Question 3: Who starred as Buffy in the TV show 'Buffy the Vampire Slayer'?<br>You Answered: " . $answer3 . "<br>Correct answer: Sarah Michelle Gellar<br><br>";
	
	echo "Question 4: Who was president of the US when congress passed the first Clean Air Act?<br>You Answered: " . $answer4 . "<br>Correct answer: John F. Kennedy<br><br>";
	
	echo "Question 5: What rubber Wham-O toy inspired the name of one of the world's largest sporting events?<br>You Answered: " . $answer5 . "<br>Correct answer: SuperBowl<br><br>";
	
	if ($answer1 === $a1){$count++;};
	if ($answer2 === $a2){$count++;};
	if ($answer3 === $a3){$count++;};
	if ($answer4 === $a4){$count++;};
	if ($answer5 === $a5){$count++;};
	
	echo "You answered " . $count . " out of 5 Correctly<br>";
	
	echo "And received a score of " . $count * 20 . "%";
	

?>
</body>
</html>