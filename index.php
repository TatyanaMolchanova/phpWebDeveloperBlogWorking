<!-- <?php
    // $cookie_name = "user";
    // $cookie_value = "cookie user";
    // setcookie($cookie_name, $cookie_value, time() +86400);

    // counter of page visiting
    $counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
    $counter++;
    setcookie("counter", $counter);
    echo $counter;
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    // if (!isset($_COOKIE[$cooke_name])) {
    //     echo "cookie name $cookie_name";
    //     echo "cookie value $cookie_value";
    // }

    // delete cookie
    // setcookie($cookie_name, $cookie_value, time() -3600);

    // if (count($_COOKIE) > 0) {
    //     echo "cookie are enabled";
    // } else {
    //     echo "cookie are disabled";
    // }

?>

</body>
</html>
















<!-- <?php
    $dat = date("d.m.y");
    echo "$dat";
?>
<br>
<?php 
    $dat_cur = date("h.i.s");
    echo "$dat_cur";
?>
<br>
<?php 
    for ($i = 1; $i <= 5; $i++) {
        echo ($i * $i * $i);
    }
?> -->
    
<!-- <?php 
    $MY_VAR = 5.24;
    echo gettype($MY_VAR);
    $my_var = false;
    echo gettype($my_var);

    // check variable if exists
    $var = 5;
    if (isset($var)) {
        echo "Variable exists - $var";
    } else {
        echo "No variable";
    }
?> -->

<!-- annul variable - null -->
<?php
    // $var_var = 5;
    // echo $var_var;
    // unset($var_var);
    // echo $var_var;

    // const pi - for example
    // define("pi", 3.14);
    // echo pi;
?>
<!-- debug error -->

<!-- <?php 
    $a = array('a' => 'apple',
                'b' => 'car',
                'c' => 'dog');
    print_r($a);
?> -->

<?php
    // $a = 5;
    // $b = $a;

    // $a = ($b = 10);
    // echo $b;


    // screening
    // $a = 'd\'Artanian';
    // echo $a;
    // $b ='two slash \\ are one';
    // echo $b;
    // $c = '$';
    // echo $c;
    // $cdc = "\n";
    // echo $cdc;
    // $cd = '\$a';
    // echo $cd;

    // // interpoling
    // $d = "Hello";
    // echo "$d world";

    // concatenation
    // $d = "Hello"." world";
    // echo $d;

    // $d = "Hello";
    // echo $d[1];

    // condition operator

//    $x = -17;
//    $x = $x < 0  ? -$x : $x;
//    echo $x;

// cycle if else

    // $items = 8;
    // if ($items < 10) {
    //     echo "You get 10% discount";
    // } else {
    //     echo "You get 5% discount";
    // }


// while

    // while ($i < 32) {
    //     echo $i += 1;
    // }

// do while

    // $x = 1;
    // do {
    //     echo $x;
    // } 

    // while ($x++ < 10);

    // for

// for ($x = 0; $x++ < 10;) // 10 last
// for ($x = 0; $x < 10; $x++) // 9 last
//         echo $x;


// foreach
// foreach ($_SERVER as $k => $v)
//     echo "<b>$k</b> => <b>$v</b><br />";

    // $name[0] = "Alex";
    // $name[1] = "Jeff";
    // $name[2] = "Harvey";

    //  it's the same as above

    
    // $name[] = "Alex";
    // $name[] = "Jeff";
    // $name[] = "Harvey";

    // echo $name[2];

    // for ($i = 0; $i < count($name); $i++)
    //         echo $name[$i];
    

    // associative massive

    // $name["Ivanov"] = "Alex";
    // $name["Wilsher"] = "Jeff";
    // $name["Kozlov"] = "Harvey";

    // echo $name["Kozlov"];
    // define('masiv',
    //     ["ivanova" => ["name"=>"ivan","born"=>"12-03-1990"]]
    // );
    // echo masiv["ivanova"]["name"];


    // count

    // $name["Ivanov"] = "Alex";
    // $name["Wilsher"] = "Jeff";
    // $name["Kozlov"] = "Harvey";

    // echo $name["Kozlov"];
    // $number = count($name);
    // echo $number;

    // merge arrays

    // $first = ["first", "second"];
    // $second = ["dog", "cat"];
    // $all = $first + $second;
    // echo $all;
    // echo $first;
    // echo $second;

    // iterating array

    // $birth = [
    //     "Thomas"=>"1980-11-18",
    //     "John"  =>"1992-04-28"
    // ];
    // // echo $birth;
    // foreach ($birth as $k => $v)
    //     echo "$k was born $v <br />";

?>

<?php

// for activate header and footer apart
    // require "head.html";
    // require "footer.html";

    // on error doesn't end working

    // include "head.html";
    // include "footer.html";

    // require_once if file was plugged in already it does nothing
        // it's recommended to use
    // require_once "head.html";
    // require_once "footer.html";

    // it's recommended to use
    // include_once "head.html";
    // include_once "footer.html";
?>

<!-- <?php

include_once "head.html";

// function 1

// function mySqr($n) {
//     return $n * $n;
// }
// // $value = mySqr(5);
// // echo $value;

// echo mySqr(12);

// static variable

function funcCount() {
    static $count = 0;
    $count++;
    echo $count;
}

for ($i = 0; $i < 5; $i++)
    funcCount();





include_once "footer.html";

?> -->

<!-- // output of form data with post method -->
<!-- 
<form action="" method="post">
    <p>Your name: <input type="text" name="name"/></p>
    <p>Your age: <input type="text" name="age"/></p>
    <p><input type="submit"></p>
</form>
Hello, <?php echo htmlspecialchars($_POST['name']);?>.
You are  <?php echo (int)($_POST['age']);?> years old. -->
<!-- 
// output of form data with get method -->

<!-- <form action="" method="get">
    <p>Your name: <input type="text" name="name"/></p>
    <p>Your age: <input type="text" name="age"/></p>
    <p><input type="submit"></p>
</form>
Hello, <?php echo htmlspecialchars($_GET['name']);?>.
You are  <?php echo (int)($_GET['age']);?> years old. -->

<!-- Get data from URL string -->

<!-- <?php
    echo "Data from address string: {$_SERVER['QUERY_STRING']}";

?> -->

<!-- form with few options and array -->

<form action="" <?php echo htmlentities($_SERVER['PHP_SELF']) ?> method="post">
    <fieldset>
        <legend>Choose animal</legend>
        <label for="dog">
            <input type="checkbox" id="dog" name="animal[]" value="sobaka">
            Sobaken
        </label>
        <label for="cat">
            <input type="checkbox" id="cat" name="animal[]" value="koshka">
            koshak
        </label>
        <label for="fox">
            <input type="checkbox" id="fox" name="animal[]" value="lisa">
            lisenok
        </label>
        <label for="pig">
            <input type="checkbox" id="pig" name="animal[]" value="svynya">
            svintus
        </label>
    </fieldset>
    <input type="submit" value="send">
</form>


<?php 
$animal = isset($_POST['animal']) ? $_POST['animal'] : '';
if (!empty($animal)) {
    echo '<br><br> Are choosed: ';
    foreach ($animal as $a) {
        echo "<span style=\"color:green\">".$a."</span>";
    }
}
?> 

