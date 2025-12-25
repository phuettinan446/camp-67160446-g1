@extends('template.default')

@section('title', 'myview')
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

    // แก้: ประกาศตัวแปร array ก่อนใช้ (Best Practice)
    $myarry = [];
    $myarry[] = Array(1,2,3,4);

    $myarry2 = [1,2,3,4];

    $myarry3 = [];
    $myarry3[] = 1;
    $myarry3[] = 2;
    $myarry3[2] = 3;
    $myarry3[] = 4;

    echo "<br>";
    // แก้จุดที่ 1: echo array ไม่ได้ ต้องใช้ print_r หรือ var_dump
    print_r($myarry);
    echo "<br>";

    // แก้จุดที่ 2: prin_r พิมพ์ผิด แก้เป็น print_r
    print_r($myarry2);
    echo "<br>";

    var_dump($myarry3);
?>

<?php
    $myarry4 = [
        "name" => "John",
        "age" => 30,
        "city" => "New York",
        0
    ];

    echo "<br><br>";
    print_r($myarry4);

    // แก้จุดที่ 3: ต้องเพิ่ม $key => เข้าไป ไม่งั้น $key ในลูปจะ error
    foreach ($myarry4 as $key => $value) {
        echo "<br>Key " .$key . " Value " . $value;
    }

    foreach ($myarry4 as $value) {
        echo "<br>Value: " . $value;
    }

    $myval = "A";

    // แก้จุดที่ 4: ใน loop for ต้องใช้เครื่องหมาย < ไม่ใช่ ,
    echo "<br><br>";
    for($i=0; $i < 10; $i++){
        echo $myval++;
        echo "<br>";
    }

    // แก้จุดที่ 5: ฟังก์ชันต้องอยู่ในแท็ก PHP และระวังเรื่องการประกาศซ้ำใน View
    if (!function_exists('myFunction')) {
        function myFunction(){
            return "My Function Called";
        }
    }
    echo myFunction();
?>

@endsection  
