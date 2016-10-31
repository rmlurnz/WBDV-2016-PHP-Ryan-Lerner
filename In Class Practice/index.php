<h1>Hello World!</h1>

<?php 
// sdfkjhksjdh

/* sdkfjhskdjfh */



echo '<h2>Hello World...</h2>'.date('H:i:s');
echo '<h3>Nice Day</h3>';

$name = 'Ryan';

echo '<p>'.$name.'</p>';
echo "<p>$name</p>";

echo 2+3;
echo 2*3;
$a = 2;
$b = 3;
$c = 4;

echo 2+3-4*5/6;
echo $a+$b-$c;

$d = 'hello';
$e = true;
$f = 2.5;

$g = [];
$h = new stdClass();

var_dump($a, $b, $c, $d, $e, $f, $g, $h);

if ($e) {
	echo 'true';
} 
else if ($a) {
	echo 'poop';
} else {
	echo 'false';
}
/// tests for same type

for ($i=0; $i < 10; $i++) { 
	echo $i;
}

$j = 0;

while ($j <= 10) {
	echo $j;
	$j++;
}

$array = [
'sdf',
234,
true,
new stdClass
];

// sort($array);

var_dump($array);

/*
foreach ($array as $string) {
	echo $string."\";
}
*/

$hash = [
'name' => 'Ryan',
'id' => '1',
'address' => 'somewhere'
];

// sort($hash);

foreach ($hash as $key => $string) {
	echo $key.'->'.$string."|";
}

function bob() {
	echo 'hi';
}

bob();

?>

