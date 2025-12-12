@extends('template.default')
@section('title' , 'Workshop FORM')
@section('content')
<h1>Workshop #HTML - FORM</h1>
        <form action="#" method="post" enctype="multipart/form-data">


            <div class="row">
                <div class="col-label">ชื่อ</div>
                <div class="col">
                    <input type="text" id="firstname" name="firstname" class="input-std" style="width: 170px;">
                </div>
            </div>

            <div class="row">
                <div class="col-label">สกุล</div>
                <div class="col">
                    <input type="text" id="lastname" name="lastname" class="input-std" style="width: 170px;">
                </div>
            </div>

            <div class="row">
                <div class="col-label">วัน/เดือน/ปีเกิด</div>
                <div class="col">
                    <input type="date" id="dob" name="dob" style="width: 125px;">
                </div>
            </div>

            <div class="row">
                <div class="col-label">อายุ</div>
                <div class="col">
                    <input type="text" id="age" name="age" class="input-std" style="width: 170px;">
                </div>
            </div>

            <div class="row">
                <div class="col-label">เพศ</div>
                <div class="col">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male" style="margin-right: 10px;">ชาย</label>

                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">หญิง</label>
                </div>
            </div>

            <div class="row">
                <div class="col-label">รูป</div>
                <div class="col">
                    <input type="file" id="photo" name="photo">
                </div>
            </div>

            <div class="row">
                <div class="col-label">ที่อยู่</div>
                <div class="col">
                    <textarea id="address" name="address" rows="5" class="input-std" style="width: 225px;"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-label">สีที่ชอบ</div>
                <div class="col">
                    <select id="color" name="color" style="width: 100px;">
                        <option value="red">สีแดง</option>
                        <option value="green">สีเขียว</option>
                        <option value="blue">สีน้ำเงิน</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-label">แนวเพลงที่ชอบ</div>
                <div class="col">
                    <input type="radio" name="music" id="life" value="life">
                    <label for="life" style="margin-right: 25px;">เพื่อชีวิต</label>

                    <input type="radio" name="music" id="lukthung" value="lukthung">
                    <label for="lukthung" style="margin-right: 25px;">ลูกทุ่ง</label>

                    <input type="radio" name="music" id="others" value="others">
                    <label for="others">อื่นๆ</label>
                </div>
            </div>

            <br>

            <div class="row mt-3">
                <div class="col-12">
                    <input type="checkbox" id="consent">
                    <label for="consent" style="font-weight: bold;">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-label">
                    <button type="reset" style="padding: 2px 8px;">Reset</button>
                </div>
                <div class="col">
                    <button type="submit" style="padding: 2px 6px; margin-left: 95px;">Submit</button>
                </div>
            </div>
        </form>


@endsection


@push('script')
    <script>
        let clickMe = function(){
            console.log(document.getElementById('firstname'))
            firstnam.value = "from ClickMe"
            console.log();

        }

        let myFunc = (callback) =>{
            callback("in Callback")
        }
        callMe = (param) => {
            console.log(param);
        }

        myFunc(callMe)

        let myvar1 = 1
        let myvar2 = "1"

        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1 + "\n\n\nทดสอบ");
        console.log(1 === '1');

    </script>
@endpush
