<?php
/**
 * Series of exercises on PHP conditional structures.
*/  


// 1.1 Clean your room Exercise 
/*
$room_is_filthy = true;

if($room_is_filthy == true){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
*/
 //1.2 Clean your room Exercise, improved

// Create the array of possible states
/*
$possible_states = ["dangerous for health", "dirty","mess","clean" , "perfect"];

 When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == "dirty" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "dangerous for health"){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == "mess"){
	echo "Yuk, Room is dirty : let's clean it up !";

} else {
	echo "<br>Nothing to do, room is neat.";
}
*/

 // 2. "Different greetings according to time" Exercise
/*
$now;  How to get the current time in PHP ? Google is your friend ;-)
$now = date("H:i)");
echo $now;
 Test the value of $now and display the right message according to the specifications.
if( $now > "05:00" and $now < "09:00"){
    echo "Good Morning !";
} else if ($now > "09:01" and $now < "12:00"){
    echo "Good day!";
}
 else if ($now > "12:01" and $now < "16:00"){
    echo "Good Afternoon!";
}
else if ($now > "16:01" and $now < "21h00") {
    echo "Good evening!";
}
 else if ($now > "21:01" and $now < "04:59"){
    echo "Good Night!";
}
*/
// 3. "Different greetings according to note" Exercise
/*
if (isset($_GET['note'])){
	 Form processing
 if($_GET['note'] < 12 ){
    echo "Hello kiddo!";
}
else if($_GET['note'] >= 12 and $_GET['note'] < 18){
    echo "Hello Teenager!";
}
else if($_GET['note'] >= 18 and $_GET['note'] < 115){
    echo "Hello Adult!";
}
else {
    echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
}

<!-- Form (incomplete) -->

<form method="get" action="">
	<label for="note">...</label>
	<input type="" name="note">
	<input type="submit" name="submit" value="Greet me now">
</form>
*/


// 4. Display a different greeting according to the user's note and gender.
// /*
// if (isset($_GET['note'])){
// 	 Form processing
//  if($_GET['note'] >= 18 and $_GET['note'] < 115){
// 	if($_GET['gender'] == 'woman'){
//     $message= "Hello Miss!";
// 	} 
// else { $message= "Hello mister";}
//  }
// else if($_GET['note'] >= 12 and $_GET['note'] < 18){
// 	if($_GET['gender'] == 'woman')
// 	{
// 		$message= "Hello Miss Teen!";
// 	}

// else{
// 	$message= "Hello mister Teen!";
// }
// }
// else if( $_GET['note'] < 12){
//     if($_GET['gender'] == 'woman'){
// 		$message="Hello kiddo girl!";
// 	}
// 	else{
// 		$message= "Hello kiddo boy!";
// 	}

// }
// echo $message;
// }

// <!-- Form (incomplete) -->

// <form method="get" action="">
// 	<label for="note">your note</label>
// 	<input type="" name="note">
// 	<label for="gender">Your Gender:</label>
// 	<select name="gender">
// 	<option value="woman">Woman</option>
// 	<option value="man">Man</option>
// 	</select>
// 	<input type="submit" name="submit" value="Greet me now">
// </form>
// */

// 5- Display a different greeting according to the user's note, gender and mothertongue.


//  if (isset($note) && isset($gender) && isset($gender)){
//  	$note = $_GET['note'];
//  	$gender = $_GET['gender'];
//  	$English = $_GET['English'];
	
//  	 Form processing
//   if($note < 12 && $gender = woman &&  $English = yes){
//  	echo "Hello Girl";
//  	} 
//  else if ($note < 12 && $gender = man &&  $English = yes) {
//  	echo "Hello Boy";
//  }
//  else if ($note < 12 && $gender = woman &&  $English = no) {
//  	echo 'aloha girl';
//   }
//  else if($note < 12 && $gender = man &&  $English = no){
//  	echo 'aloha boy';
	
//  }
//  }

//  <!-- Form (incomplete) -->

//  <!-- <form method="get" action="">
//  	<label for="note">your note</label>
//  	<input type="" name="note">

//  	<label for="gender">Your Gender:</label>
//  	<select name="gender">
//  	<option value="woman">Woman</option>
//  	<option value="man">Man</option>
//  	</select>
//  	<input type="submit" name="submit" value="Greet me now">
//  </br>
//  <p>English</p>
//  Yes:<input type= "radio" name="English" value="yes">
//  No:<input type= "radio" name="English" value="no">
//  	</select>
//  	<input type="submit" name="submit" value="Greet me now">
//  </form> -->

// 6.  The Girl Soccer team
//  if(isset($note) && isset($gender)) {
//  	$note = $_GET['note'];
//  	$gender = $_GET['gender'];
	

//  if ( $note >= 21 and $note <= 40 && $gender = F ){
//  echo "welcome to the team !";
//  } else{
//  echo "Sorry you don't fit the criteria";
//  }
//  }


//  Form (incomplete) 

//    <!-- <form method="get" action="">
//   	<label for="name">your name</label>
//   	<input type="" name="name">

//  	<label for="note">your note</label>
//   	<input type="" name="note">
//  <p>Gender</p>
//   Male:<input type= "radio" name="gender" value="male">
//   Feminine:<input type= "radio" name="gender" value="feminine">
//  		<input type="submit" name="submit" value="Greet me now">
//  </form>


 //8. "School sucks!" Exercise

 if (isset($_GET['note'])) {
	 $note = $_GET['note'];
 
	 if ($note < 4) {
		 echo "This work is really bad. What a dumb kid!";
	 }
	 
	 if ($note >= 4 && $note <= 9) {
		 echo "This is not sufficient. More studying is required.";
	 }
	 
	 if ($note == 10) {
		 echo "Barely enough!";
	 }
	 
	 if ($note >= 11 && $note <= 14) {
		 echo "Not bad!";
	 }
	 
	 if ($note >= 15 && $note <= 18) {
		 echo "Bravo, bravissimo!";
	 }
	 
	 if ($note == 19 or $note == 20) {
		 echo "Too good to be true: confront the cheater!";
	 }
 }
 
 ?>
 
 <!-- Form -->
 
 <form method="get" action="">
	 <label for="note">Your note</label>
	 <input type="text" name="note">
	 <input type="submit" name="submit" value="Evaluation">
 </form>
 





