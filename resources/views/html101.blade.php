@extends('template.default')

@section('title','Workshop FORM')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<form action="/me" method="post" enctype="multipart/form-data" novalidate>
    @csrf


    {{-- ชื่อ --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="fname" class="form-label">ชื่อ</label>
        </div>
        <div class="col">
            <input id="fname" name="fname" class="form-control check">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    {{-- สกุล --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="lname" class="form-label">สกุล</label>
        </div>
        <div class="col">
            <input id="lname" name="lname" class="form-control check">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    {{-- วันเกิด --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="birthdate" class="form-label">วัน/เดือน/ปีเกิด</label>
        </div>
        <div class="col">
            <input type="date" id="birthdate" name="birthdate" class="form-control check">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกวันเกิด</div>
        </div>
    </div>

    {{-- อายุ --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="age" class="form-label">อายุ</label>
        </div>
        <div class="col">
            <input type="number" id="age" name="age" class="form-control check">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    {{-- เพศ --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label class="form-label">เพศ</label>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input check" type="radio" name="gender" value="male">
                <label class="form-check-label">ชาย</label>
            </div>
            <div class="form-check">
                <input class="form-check-input check" type="radio" name="gender" value="female">
                <label class="form-check-label">หญิง</label>
            </div>
        </div>
    </div>

    {{-- รูป --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="photo" class="form-label">รูป</label>
        </div>
        <div class="col">
            <input type="file" id="photo" name="photo" class="form-control check">
            <div class="invalid-feedback">โปรดเลือกรูป</div>
        </div>
    </div>

    {{-- ที่อยู่ --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="address" class="form-label">ที่อยู่</label>
        </div>
        <div class="col">
            <textarea id="address" name="address" class="form-control check"></textarea>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    {{-- สีที่ชอบ --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="color" class="form-label">สีที่ชอบ</label>
        </div>
        <div class="col">
            <select id="color" name="color" class="form-select check">
                <option value="">-- เลือกสี --</option>
                <option>ชมพู</option>
                <option>เหลือง</option>
                <option>ฟ้า</option>
            </select>
            <div class="invalid-feedback">โปรดเลือกสี</div>
        </div>
    </div>

    {{-- แนวเพลง --}}
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="music" class="form-label">แนวเพลงที่ชอบ</label>
        </div>
        <div class="col">
            <select id="music" name="music" class="form-select check">
                <option value="">-- เลือกแนวเพลง --</option>
                <option>K-Pop</option>
                <option>ลูกทุ่ง</option>
                <option>สากล</option>
            </select>
            <div class="invalid-feedback">โปรดเลือกแนวเพลง</div>
        </div>
    </div>

    {{-- ยินยอม --}}
    <div class="form-check mb-3">
        <input class="form-check-input check" type="checkbox" id="agree" name="agree">
        <label class="form-check-label" for="agree">
            ยินยอมให้เก็บข้อมูล
        </label>
        <div class="invalid-feedback">ต้องยินยอมก่อนส่งข้อมูล</div>
    </div>

    {{-- ปุ่ม --}}
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary ms-3">Submit</button>

</form>
@endsection


@push('scripts')
<script>
function clickMe(){

    let valid = true;

    // ---------- input / textarea / select ----------
    let inputs = document.querySelectorAll('.check');

    inputs.forEach(input => {

        // ข้าม radio เดี๋ยวตรวจแยก
        if (input.type === 'radio') return;

        // checkbox
        if (input.type === 'checkbox') {
            if (!input.checked) {
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
                valid = false;
            } else {
                input.classList.add('is-valid');
                input.classList.remove('is-invalid');
            }
            return;
        }

        // file
        if (input.type === 'file') {
            if (input.files.length === 0) {
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
                valid = false;
            } else {
                input.classList.add('is-valid');
                input.classList.remove('is-invalid');
            }
            return;
        }

        // text / number / date / textarea / select
        if (input.value.trim() === "") {
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
            valid = false;
        } else {
            input.classList.add('is-valid');
            input.classList.remove('is-invalid');
        }
    });

    // ---------- radio (เพศ) ----------
    let radios = document.querySelectorAll('input[name="gender"]');
    let checkedRadio = document.querySelector('input[name="gender"]:checked');

    if (!checkedRadio) {
        radios.forEach(r => {
            r.classList.add('is-invalid');
            r.classList.remove('is-valid');
        });
        valid = false;
    } else {
        radios.forEach(r => {
            r.classList.add('is-valid');
            r.classList.remove('is-invalid');
        });
    }

}
</script>


@endpush
