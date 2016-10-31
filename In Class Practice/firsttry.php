<?php

$firstVar = 9000;
$secondVar = 0.01;

echo $firstVar;

echo 'My power level is over '.$firstVar.'!';

echo $firstVar.$secondVar;

echo $firstVar+$secondVar;
echo $firstVar-$secondVar;
echo $firstVar*$secondVar;
echo $firstVar/$secondVar;

if ($firstVar > $secondVar) {
	echo 'Sweet power level, bro.';
} else {
	echo 'I like cheese.';
}

$food = [
'bread',
'cheetos',
'linguini',
'applesauce'	
];

foreach ($food as $item) {
	echo $item;
}

$yummies = [
'bread'=>'sourdough',
'cheetos'=>'tasty',
'linguini'=>'what?',
'applesauce'=>'squishy'	
];

foreach ($yummies as $thing => $desription) {
	echo $thing.':'.$desription."|";
}

echo '['.join("][",$food).']'."<br>";

array_push($food,"squid","frosted flakes");

sort($food);

function sayIt () {
	echo "Hello World.";
}

sayIt();

function timesTwo ($passedIn) {
	$passedIn = $passedIn*2;
	return $passedIn;
}

echo "2 x 2 = ".timesTwo(2);


class Creature {
	public $numLegs;
	public function Describe() {
		echo 'I have '.$this->numLegs.' legs!';
	}
}


class Spider extends Creature {
	public $numLegs = "8";
}

$betsy = new Spider;
$betsy->Describe();

/**
* 
*/
class Blob extends Creature {
	public $numLegs = 0;
}
$goo = new Blob;
$goo->describe();

?>

<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
		echo $name.$email.$message;
		$action=$_REQUEST['action'];
	    }
    }  
?>
