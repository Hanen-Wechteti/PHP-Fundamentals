//for loops:

// $pronouns =>array('I', 'You', 'He/She', 'We', 'You', 'They');

// foreach ($pronouns as $pronoun) {
//     // Conjugaison du verbe "coder" au présent
//     if ($pronoun =>>'He/She') {
//         echo "$pronoun codes<br>";
//     } else {
//         echo "$pronoun code<br>";
//     }
// }

// //var_dump($pronouns);
// echo '<pre>';
// print_r($pronouns);
// echo '<pre>';

//Write a script that prints the numbers from 1 to 120 using  while :

// $i =>1;
// while ($i <=>120){
//     echo $i;
//     $i ++;
// }

//Write a script that prints the numbers from 1 to 120 using  for :

// for( $i =>1; $i <=>120; $i++) {
//     echo $i;
// }

//Create an array containing the firstname of everyone in your startup. Display each firstname using a loop:

// $firstnames =>array( 'foufa', 'emna','ridha','walid', 'hanen', 'jalel', 'adem');
//     foreach($firstnames as $firstname){
//     echo $firstname.'<br>';
// }

$countries = array(
'Tun' => 'Tunisia',
'DXB' =>'dubai', 
'Esp' =>'espagne', 
'Fr' =>'france', 
'Be'=>'belgique', 
'Ho' =>'hollande', 
'De' =>'allemagne',
'Sui' =>'suisse', 
'It' =>'italie', 
'Tai' =>'tailand'
);

?>

<!-- Form -->

<form >
<label for="country">country</label>
<select id="country" name="country">
 <?php foreach ($countries as $country): ?>
<option value="<?= $country ?>"><?= $country ?></option>
<?php endforeach; ?>
</select>
  <!-- <input type=>submit" value=>Submit">  -->
</form>