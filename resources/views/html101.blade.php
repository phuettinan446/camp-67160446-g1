@extends('template.default')
@section('title', 'Workshop FORM')

@section('content')

<div class="container mt-5" style="max-width: 800px;">
    <h1 class="mb-4">Workshop #HTML - FORM</h1>

    {{-- 1. เพิ่ม ID ให้ Form เพื่อเรียกใช้ใน JS --}}
    <form action="#" method="post" enctype="multipart/form-data" id="workshopForm">

        <div class="mb-3">
            <label for="firstname" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
            {{-- ส่วนแสดงข้อความ Error (เพิ่มให้ครบทุกช่อง) --}}
            <small class="error-msg" id="err_firstname">กรุณากรอกชื่อจริง</small>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
            <small class="error-msg" id="err_lastname">กรุณากรอกนามสกุล</small>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">วัน/เดือน/ปีเกิด</label>
            <input type="date" class="form-control" id="dob" name="dob">
            <small class="error-msg" id="err_dob">กรุณาระบุวันเกิด</small>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">อายุ</label>
            <input type="number" class="form-control" id="age" name="age">
            <small class="error-msg" id="err_age">กรุณาระบุอายุ</small>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">เพศ</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">หญิง</label>
            </div>
            <div class="error-msg" id="err_gender">กรุณาเลือกเพศ</div>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">อัปโหลดรูปโปรไฟล์</label>
            <input class="form-control" type="file" id="photo" name="photo">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่</label>
            <textarea class="form-control" id="address" name="address" rows="5"></textarea>
            <small class="error-msg" id="err_address">กรุณากรอกที่อยู่</small>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">สีที่ชอบ</label>
            <select class="form-select" id="color" name="color">
                <option value="" selected disabled>กรุณาเลือกสี...</option>
                <option value="red">สีแดง</option>
                <option value="green">สีเขียว</option>
                <option value="blue">สีน้ำเงิน</option>
            </select>
            <small class="error-msg" id="err_color">กรุณาเลือกสีที่ชอบ</small>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">แนวเพลงที่ชอบ</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="life" value="life">
                <label class="form-check-label" for="life">เพื่อชีวิต</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="lukthung" value="lukthung">
                <label class="form-check-label" for="lukthung">ลูกทุ่ง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="music" id="others" value="others">
                <label class="form-check-label" for="others">อื่นๆ</label>
            </div>
        </div>

        <hr>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="consent">
            <label class="form-check-label fw-bold" for="consent">ยินยอมให้เก็บข้อมูล</label>
            <div class="error-msg" id="err_consent">คุณต้องกดยินยอมก่อนส่งข้อมูล</div>
        </div>

        <div class="mt-4">
            <button type="reset" class="btn btn-secondary me-2">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>

@endsection

@push('script')
    <script>
        // 2. สคริปต์ตรวจสอบข้อมูล
        document.getElementById('workshopForm').addEventListener('submit', function(event) {
            let isValid = true; // ตัวแปรเช็คสถานะรวม

            // ฟังก์ชันสำหรับ Input ทั่วไป (Text, Date, Number, Select, Textarea)
            function checkInput(inputId, errorId) {
                const input = document.getElementById(inputId);
                const errorMsg = document.getElementById(errorId);

                if (input.value.trim() === "") {
                    // ไม่ผ่าน: แสดง Error, ใส่กรอบแดง, ลบกรอบเขียว
                    errorMsg.style.display = 'block';
                    input.classList.add('input-error');
                    input.classList.remove('input-success');
                    isValid = false;
                } else {
                    // ผ่าน: ซ่อน Error, ลบกรอบแดง, ใส่กรอบเขียว
                    errorMsg.style.display = 'none';
                    input.classList.remove('input-error');
                    input.classList.add('input-success');
                }
            }

            // เรียกใช้ฟังก์ชันตรวจสอบรายตัว
            checkInput('firstname', 'err_firstname');
            checkInput('lastname', 'err_lastname');
            checkInput('dob', 'err_dob');
            checkInput('age', 'err_age');
            checkInput('address', 'err_address');
            checkInput('color', 'err_color');

            // ตรวจสอบ Radio Button (เพศ)
            const genderOptions = document.getElementsByName('gender');
            let isGenderSelected = false;
            for (let radio of genderOptions) {
                if (radio.checked) {
                    isGenderSelected = true;
                    break;
                }
            }
            if (!isGenderSelected) {
                document.getElementById('err_gender').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('err_gender').style.display = 'none';
            }

            // ตรวจสอบ Checkbox (ยินยอม)
            const consent = document.getElementById('consent');
            if (!consent.checked) {
                document.getElementById('err_consent').style.display = 'block';
                consent.classList.add('input-error'); // ใส่ขอบแดงให้ checkbox (ถ้า browser รองรับ)
                isValid = false;
            } else {
                document.getElementById('err_consent').style.display = 'none';
                consent.classList.remove('input-error');
                consent.classList.add('input-success');
            }

            // ถ้ามีช่องไหนไม่ผ่าน isValid จะเป็น false -> สั่งห้ามส่งฟอร์ม
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
@endpush
