<!DOCTYPEhtml>
<html>
<head>
    <h1>This sprint starts here</h1>
</head>
<body>
<p>
    <?php
    echo "Good morning <br>";
    echo "My very first php trial, simply trying to make it right as expected and I am excited it seems to be working";
    ?>
</p>
<p>
    <?php
    echo "Hello, world!<br>";
    echo "Hello," . " " . "world" . "!";
    ?>
</p>
<p>
    <?php
    echo "5*7<br>";
    echo 5 * 8;
    ?>
</p>
<p>
    <?php
    $myname = "ernest";
    $myage = "19";
    echo "my name is not " . $myname . " and I am" . $myage . "years old";
    ?>
</p>
<p>
    <?php
    $name = "simon";
    if ($name == "simon")
        print "who are you!";
    else print "I know you";
    ?>
</p>
<p>
    <?php
    $age = "18";
    if ($age >= "16" and $age <= "18") print "buy specs";
    else if ($age > "18" and $age <= "21") print "buy mugs";
    else if ($age > "21") print "buy sausage rolls";
    ?>
</p>
<p>
    <?php
    $wantedgood = "sausa";
    switch ($wantedgood) {
        case mugs:
            echo "over 16";
            break;
        case specs:
            echo " between 18 and 21";
            break;
        case sausages:
            echo "over 21";
            break;
        default:
            echo "error";
    }
    ?>
</p>
<?php
$user = "irene";
switch ($user){
    case ernest:
        echo "you are a valid user";
        break;
    case irene:
        echo "you are not allowed access";
        break;
    case brian:
        echo "access denied";
        break;
    case marce:
        echo "access forbidden";
        break;
    default:
        echo "please enter your name";
}
?>
</body>
</html>