<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo 'This is my first php code';//Displaying a string
        echo '<br>';//Using the html break line tag
        $fname = "Benvictor";
        echo "Today is <span style = 'color:red;'> Tuesday</span>";//Using css in a sentence
        echo '<br>';//Using the html be=reak line tag
        echo 45611;//This is an integer
        echo '<br>';//using html break line tag
        echo 4+8;
        echo '<br>';
        echo "8+6";//This is a string
        echo '<br>';
        echo date('Y');
        echo '<br>';
        echo date('l');
        echo '<br>';
        echo date('l',strtotime('+5 months'));
        echo '<br>';
        echo date('l, d-m-y');
        echo date('l, jS F Y', strtotime('+3days'));
        date_default_timezone_set("Africa/Nairobi");
        $fname=" Benvictor";
        echo '<br>';
        $yob = 2005;
        echo '<br>';
        $current_year = date('Y');//Declaring the current year
        echo $current_year;
        echo '<br>';
        //Using the subtraction operator to find the user's age
        $age = $current_year - $yob;
        echo $age;
        $user_dob ="2005-05-27";
        echo $user_dob;
        $birthday = new DateTime($user_dob);
        $today = new DateTime('today');
        $interval = $birthday->diff($today);
        echo '<br>';
        echo '<pre>';
        print_r($interval);
        echo '</pre>';
        echo $fname. " is ". $age. " Years old";
  ?>
</body>
</html>