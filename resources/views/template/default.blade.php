<!DOCTYPE html>
<html>
<head>
    <title>Workshop #HTML - FORM@@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Sarabun", sans-serif;
            color: #000;
        }
        h1 {
            font-family: "Times New Roman", serif;
            font-weight: bold;
            color: #000;
        }
        .row {
            margin-bottom: 5px;
            /* คำสั่งจัดกึ่งกลางแนวตั้ง (สำหรับที่อยู่และหัวข้ออื่นๆ) */
            display: flex;
            align-items: center;
        }
        .col-label {
            width: 150px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            border: 1px solid #767676;
            padding: 2px;
            border-radius: 2px;
        }
        .input-std {
            width: 250px;
        }
    </style>
    @stack('styles')
    </head>
    <body>
    <div class="container mt-4">
        <h1>File Default</h1>
        @yield('content')
    </div>
    @stack('script')
    </body>
</html>
