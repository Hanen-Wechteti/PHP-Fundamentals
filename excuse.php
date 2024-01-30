<?php
$childName = isset($_GET['name']) ? $_GET['name'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$teacherName = isset($_GET['teacherName']) ? $_GET['teacherName'] : '';
$date = date("l, j F Y");
$excuse = isset($_GET['excuse']) ? $_GET['excuse'] : '';

$apologies = '';
switch ($excuse) {
    case 'illness':
        $apologies = "I regret to inform you that $childName is unwell and unable to attend school.";
        break;
    case 'death':
        $apologies = "$childName is dealing with a family loss and won't be able to attend school today.";
        break;
    case 'activity':
        $apologies = "$childName has a significant extra-curricular activity today that requires their participation.";
        break;
    case 'choice':
        $apologies = "$childName won't be able to come to school due to some personal matters.";
        break;
}

$intro = "Dear $gender $teacherName,\n";
$fin = "Please excuse $childName for their absence.\n";
$date_abscence = "Sincerely,\nParent of $childName\n";
?>
<p><?php echo $date ?></p>
<p><?php echo $gender . $teacherName . "," ?></p>
<p><?php echo $intro . $apologies . $fin . $date_abscence ?></p>

<!-- Form -->
<form method="get" action="">
    <label for="name">Name of the child</label>
    <input type="text" name="name"><br>

    <label for="gender">Gender of the child</label>
    <input type="radio" name="gender" value="monsieur"> Male
    <input type="radio" name="gender" value="madame"> Feminine<br>

    <label for="teacherName">Name of the teacher</label>
    <input type="text" name="teacherName"><br>

    <label for="teacherGender">Gender of the teacher</label>
    <input type="radio" name="teacherGender" value="monsieur"> Male
    <input type="radio" name="teacherGender" value="madame"> Feminine<br>

    <label for="excuse">Excuses</label><br>
    <p>Illness</p>
    <input type="radio" name="excuse" value="illness"><br>

    <p>Death of the pet (or a family member)</p>
    <input type="radio" name="excuse" value="death"><br>

    <p>Significant extra-curricular activity</p>
    <input type="radio" name="excuse" value="activity"><br>

    <p>Any other excuse of your choice</p>
    <input type="radio" name="excuse" value="choice"><br>

    <input type="submit" name="submit" value="confirm">
</form>
