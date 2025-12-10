<!DOCTYPE html>
<html>
<head>
    <title>Workshop #HTML - FORM</title>
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
</head>
<body>
    <div class="container mt-4" style="max-width: 600px;">
        <h1 class="mb-4">Workshop #HTML - FORM</h1>
        
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
    </div>
</body>
</html>