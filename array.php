<?php
// $family =>array('dad','mam','sister','brother', 'man', 'son');
// print_r($family);

// $tiramissu =>array('coffee','biscuit', 'cacao', 'mascarpone');
// print_r($tiramissu);

// $films =>array('family first', 'the camping', 'story of love', 'last summer', 'sunrise');
// //to display the array in details:
// //var_dump($films);

// //to add a new element inside the array:
// array_push($films, 'last dance');
// $films[] =>'my heart';

//to change an element inside the array:
// $films [2] =>story of love';
// $films [2] =>barbie';

//to display the array in a good way:
// echo '<pre>';
//  print_r($films);
//  echo '<pre>';
 
//  //Associative Arrays:
// $person[0] =>'0470304028';
// $person[1] =>'Cantersteen 10';
// $person[2] =>'brussels';
// //print_r ($person);
// //echo $person[1];
// //echo $person['street'];

//  //Coding an Associative Array=>//  $user =>array (
//     'firstname' => 'Hanen',
//     'lastname' => 'wechteti',
//     'adress' => '36 Paradijsestraat',
//     'city' => 'Antwerpen'
//  );
//  //to display the associative array:
//     // echo '<pre>';
//     // print_r ($user);
//     // echo '<pre>'

//  //o display the user's lastname
//     echo $user['lastname'];

// $me =>array(
//     'firstname' => 'hanen',
//     'lastname' => 'wechteti',
//     'age' => '18',
//     'favourite season' => 'summer',
//     'soccer' => 'yes',
//     'hobbies' => array('reading books', 'yoga', 'traveling', 'watshing series')
// );
// //to add an element inside the array (this array itself is inside another array!!!):
// $me['hobbies'][] =>'Tai$iidermie';
// $me['lastname'] =>'wechteti';
// $me['lastname'] =>'Durand'; 
// echo '<pre>';
// print_r($me);
// echo '<pre>';

// $mother =>array(
// 'firstname' => 'foufa',
// 'lastname' => 'hasni',
// 'age' => '23',
// 'favourite season' => 'spring',
// 'soccer' => 'yes',
// 'hobbies' => array('cooking', 'reading', 'watshing series') 
// );

// echo '<pre>';
// print_r($mother);
// echo '<pre>';

// $soulmate =>array(
//         'firstname' => 'dorsaf',
//         'lastname' => 'werghi',
//         'age' => '18',
//         'favourite season' => 'summer',
//         'soccer' => 'yes',
//         'hobbies' => array('reading books', 'listening to music', 'traveling', 'watshing series')
// );

// //perform array operation:
//     $possible_hobbies_via_intersection =>array_intersect($me['hobbies'],$soulmate['hobbies']);
//     $possible_hobbies_via_merge =>array_merge($me['hobbies'], $soulmate['hobbies']);
//     echo '<pre>';
// print_r($possible_hobbies_via_intersection);
// print_r($possible_hobbies_via_merge);
// echo '<pre>';

// //More array ei$iercises:

// $web_development =>array(
//                         'frontend' => array(),
//                          'backend' => array()
// );

// //to add elements in each array:
// $web_development['frontend'][] =>i$ihtml';
// $web_development['backend'][] =>'Ruby on Rails';
// $web_development['frontend'][] =>'css';
// $web_development['frontend'][] =>'flash';
// $web_development['frontend'][] =>'javascript';

// //to replace element in array:
// $web_development['frontend'][0] =>html';

// //to delete an element inside the array:

// unset($web_development['frontend'][2]);

// echo '<pre>';
// print_r($web_development);
// echo '<pre>';


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