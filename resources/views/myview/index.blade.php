@extends('template.default')

@section('title', 'my view')

@section('content')
<h1>My view</h1>

<?php
echo "My View Content";
echo "<br>";
echo "Line 2";
?>

<br>

<?php
$myval = "Hello PHP";
?>

<br>

<?php
$myval = 1;
echo $myval;

$myarry  = array(1, 2, 3, 4);
$myarry2 = [1, 2, 3, 4];

$myarry3[] = 1;
$myarry3[] = 2;
$myarry3[2] = 3;
$myarry3[] = 4;

echo "<br>";
echo $myarry[0];
echo "<br>";

print_r($myarry2);
echo "<br>";

var_dump($myarry3);
?>

<?php
$myarry4 = [
    "name" => "John",
    "age"  => 30,
    "city" => "New York",
    0,
    1
];
?>

<br>
<?php print_r($myarry4); ?>

<br>

{{-- foreach แบบ key => value --}}
@foreach ($myarry4 as $key => $value)
    <br>Key: {{ $key }} Value: {{ $value }}
@endforeach

<br>

{{-- foreach แบบ value อย่างเดียว --}}
@foreach ($myarry4 as $value)
    <br>Value: {{ $value }}
@endforeach

<br>

<?php
$myval = "A";
$myVal = "F";

for ($i = 0; $i < 10; $i++) {
    echo $myval++;
    echo "<br>";
}

function myFunction()
{
    return "My Function Called";
}

echo myFunction();
?>

@endsection
    