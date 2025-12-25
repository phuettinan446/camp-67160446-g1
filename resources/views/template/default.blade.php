<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Workshop #HTML - FORM @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        /* --- CSS ที่เพิ่มเข้ามาใหม่ --- */

        /* ข้อความแจ้งเตือนสีแดง (ซ่อนไว้ก่อน) */
        .error-msg {
            color: #dc3545;      /* สีแดง */
            font-size: 0.85rem;
            margin-top: 4px;
            display: none;       /* สำคัญ: ซ่อนเป็นค่าเริ่มต้น */
            font-weight: 500;
        }

        /* กรอบสีแดง (เมื่อกรอกผิด/ไม่กรอก) */
        .input-error {
            border: 2px solid #dc3545 !important;
            background-color: #fff8f8;
        }

        /* กรอบสีเขียว (เมื่อกรอกครบถ้วน) */
        .input-success {
            border: 2px solid #198754 !important;
            background-color: #f8fff9;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="container mt-4">
        <h1></h1>

        
        @yield('content')
    </div>

    @stack('script')
</body>
</html>
