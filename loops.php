<h1>
    loops
</h1>
<h4>
    While loops
</h4>
<?php
// while loop
$init =0;
while ($init <= 10) {
    echo $init;
    echo '<br>';
    $init++;
}
?>
<?php
//Do while loop
$i =11;
do {
    echo $i;
    echo '<br>';
    $i++;
} while ($i <= 20);
?>
<h4>
    For loop
</h4>
<?php
for ($s = 45; $s <55; $s+=2) {
    print $s."<br>";
}
?>
<h4>
    For each
</h4>
<?php
$months =[ "January","February","March","April","June","July","August","September","October","November","December"];
foreach ($months as $month) {
    print $month. ",";
}
?>
<h4>
    While loop
</h4>
<?php
// $init = 2015;
// while ($init < 2030){
//     print "<option value='$init'>$init</option>";
//     $init++;
// }
?>
<form action="">
    <select name="" id="">
    <option value="">--Months--</option>
    <?php
        $init = 2015;
        while ($init < 2030){
            print "<option value=''>$init</option>";
            $init++;
        }
?>
    </select>
</form>