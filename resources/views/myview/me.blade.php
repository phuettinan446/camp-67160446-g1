@extends('template.default')

@section('title', 'my view')

@section('content')
<h2>ข้อมูลที่คุณกรอก</h2>

<ul>
    <li>ชื่อ: {{ $fname }}</li>
    <li>สกุล: {{ $lname }}</li>
    <li>วันเกิด: {{ $birthdate }}</li>
    <li>อายุ: {{ $age }}</li>
    <li>เพศ: {{ $gender }}</li>
    <li>ที่อยู่: {{ $address }}</li>
    <li>สี: {{ $color }}</li>
    <li>เพลง: {{ $music }}</li>
</ul>

<a href="/">กลับไปกรอกใหม่</a>
@endsection
