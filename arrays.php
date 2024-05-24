<h1>Arrays</h1>
       <?php
       //Indexxed or numeric Arrays
       $fname = ["Benvictor", "Mwangi"];
        print_r($fname);
        echo '<br>';
        $colors = array("Black","Green","Yellow","White","Red","Blue");
  ?>
  <pre>
    <?php print_r($colors);
    ?>
  
</pre>
<?php 
print $fname[1];
?>
<?php
//Associative arrays
$user =[
    "fullname" => "Benvictor",
    "lastname" => "Mwangi",
    "age" => 20,
    "email" => "benvictor.com",
    "password" => "123"
];
?>

<pre>
<?php print_r($user); 
?>
</pre>
<?php
//Multidimentional Arrays
$user_details = [
    "Manager" => array(
        "fullname" => "Benvictor",
        "lastname" => "Mwangi",
        "age" => 20,
        "email" => "benvictor.com",
        "password" => "123",
        "address" => [
            "city" => "Nairobi",
            "country" => "Kenya"
         
            ]
           
    )
    ];
    ?>