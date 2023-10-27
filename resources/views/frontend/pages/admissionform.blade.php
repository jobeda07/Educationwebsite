<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend/cs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/cs/responsive.css') }}">

</head>
<style>
    body {
        padding: 10px;
        /* Adjust padding for smaller screens */
    }

    .img-area {
        position: relative;
        width: 116px;
        height: 106px;
        background: white;
        margin-bottom: 30px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: pointer;
        border: 1px dotted rgb(98, 97, 97);
    }

    .img-area1 {
        position: relative;
        width: 750px;
        height: 106px;
        background: white;
        margin-bottom: 20px;
        margin-top: 30px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: pointer;
        border: 1px dotted rgb(98, 97, 97);
    }

    .img-area .icon {
        font-size: 100px;
    }

    .img-area img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 100;
        cursor: pointer;
    }

    .img-area::before {
        content: attr(data-img);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        color: #fff;
        font-weight: 500;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        transition: all .3s ease;
        z-index: 200;
        cursor: pointer;
    }

    .img-area.active:hover::before {
        opacity: 1;
    }

    .img-area1 .icon {
        font-size: 100px;
    }

    .img-area1 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 100;
        cursor: pointer;
    }

    .img-area1::before {
        content: attr(data-img);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        color: #fff;
        font-weight: 500;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        transition: all .3s ease;
        z-index: 200;
        cursor: pointer;
    }

    .img-area1.active:hover::before {
        opacity: 1;
    }

    .select-image {
        display: block;
        border-radius: 18px;
        background: #030ad0;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: all .3s ease;
        padding-left: 10px;
        padding-right: 10px;
        margin-top: 4px;
        z-index: 102;
    }

    input {
        border: 1px dotted gray;
        width: 100%;
        outline: none;
        padding-top: 3px;
        padding-bottom: 2px;
        padding-left: 10px;
        padding-right: 5px;
    }

    .form-group1 input {
        border: none !important;
    }

    .from-group3 input {
        border: none !important;
        width: 100%;
        padding-left: 275px;
    }

    #uploadBtn {
        display: none;
    }

    #customBtn {
        padding: 15px;
        background-color: #fff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    #customBtn:hover {
        background-color: #eef1f3;
    }

    .name-sch h2 {
        font-size: 19px;
        /* Adjust font size for smaller screens */
    }

    .name-sch h5 {
        font-size: 19px;
    }

    .name-sch h6 {
        font-size: 15px;
        font-weight: 500;
    }

    .heading {
        border: 1px solid #ccc;
        width: 100%;
        padding: 15px;
    }

    .form-group1 {
        border: 1px dotted gray;
        height: 94px;
        width: 94px;
    }

    .form-group2 {
        border: 1px dotted gray;
        padding: 10px;
        margin: 10px 0;
        width: 100%;
    }

    .container {
        width: 65%;
        margin: 0 auto;
        margin-top: 10px;
        /* Adjust margin for smaller screens */
        padding: 10px;
        box-shadow: -1px 2px 7px 1px gray;
    }

    .box {
        padding: 26px;
        border: 1px solid #ccc;
        width: 100%;
        margin: 0 auto;
    }

    #adm-from {
        background-color: blue;
        margin-top: 10px;
        padding: 5px 10px;
        border: none;
        color: white;
        border-radius: 2px;
        width: 100%;
    }

    .form-group span {
        color: rgb(252, 6, 6);
    }

    .from-group3 {
        border: 1px dotted gray;
        padding: 44px;
        margin: 10px 0;
        width: 100%;
    }

    label {
        display: inline-flex;
    }

    #image-preview {
        display: none;
        width: 100%;
        height: 200px;
        background-position: center center;
        background-size: cover;
        margin-top: 10px;
        background-color: white;
    }

    select {
        border: 1px dotted gray;
        padding: 2px 142px;
    }

    select:focus {
        outline: none;
    }

    #language {
        border-bottom: 1px dotted gray;
    }
</style>

</head>

<body>
    <section id="admission">
        <div class="container">
            <div class="heading">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-2 col-6">
                        <div class="schl-logo">
                            <img src="{{ asset('frontend/schl-img/clg_logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-6">
                        <div class="name-sch">
                            <h2>BIRSHRESHTHA NOOR MOHAMMAD PUBLIC
                                COLLEGE </h2>
                            <h5>Education Board</h5>
                            <h6>ADMISSION FROM</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <form id="admissionForm" action="{{ route('admission.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf()
                            {{-- 
                            <input type="file" id="image" name="image" accept="image/*" hidden>
                            <div class="img-area uploadimg" data-img="">
                                <i class='bi bi-cloud-arrow-up icon uploadimg'></i>
                                <button class="select-image uploadimg">upload</button>
                            </div> --}}
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="fname">Student's Name<span>*</span>:</label>
                            <input type="text" id="name" name="name" required><br>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 pt-2">
                        <div class="form-group">
                            <label for="fname">Father's Name<span>*</span>:</label>
                            <input type="text" id="fname" name="fathers_name" required><br>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 pt-2">
                        <div class="form-group">
                            <label for="fname">Mother's Name<span>*</span>:</label>
                            <input type="text" id="fname" name="mothers_name" required><br>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="fname">Birth Date:</label>
                        <input type="date" id="fname" name="dob" required>
                    </div>

                    <div class="col-lg-6 col-12 pt-4">
                        <label for="fname">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="male"
                                id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female"
                                id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="fname">Guardian Name:</label>
                        <input type="text" id="guardian_name" name="guardian_name" required>
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="fname">Guardian Number:</label>
                        <input type="text" id="" name="guardian_number" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="fname">Phone Number:</label>
                        <input type="text" id="fname" name="number" required>
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="class">Email-Address:</label>
                        <input type="email" id="fname" name="email" required>
                    </div>
                    <div class="col-lg-6 col-12 pt-3 pt-2">
                        <label for="language">Blood Group:</label>
                        <select name="blood" id="language" class="select-respon">
                            <option>Select one</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-12 pt-3">
                        <label for="class">Nationality:</label>
                        <input type="nationality" id="fname" name="fname">
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="language">Religion:</label>
                        <select name="religion" id="language" class="select-respon" required>
                            <option>Select One</option>
                            <option>Muslim</option>
                            <option>Hindu</option>
                            <option>Boddo</option>
                            <option>Khristan</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-12 pt-2">
                        <label for="language">Class:</label>
                        <select name="Class_id" id="language" class="select-respon" required>
                            <option>Select One</option>
                            <option>Class 1</option>
                            <option>Class 2</option>
                            <option>Class 3</option>
                            <option>Class 4</option>
                            <option>Class 5</option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-12 pt-2">
                        <div class="form-group">
                            <label for="fname">Previous School Name (if any):</label>
                            <input type="text" id="fname" name="pre_school_name"><br>
                        </div>
                    </div>
                </div>
                <div class="form-group2">
                    <div class="row">
                        <div class="col-lg-6 col-12 pt-2">
                            <label for="fname">Division:</label>
                            <input type="text" id="fname" name="division" required>
                        </div>
                        <div class="col-lg-6 col-12 pt-2">
                            <label for="fname">District:</label>
                            <input type="text" id="fname" name="district" required> <br>
                        </div>
                        <div class="col-lg-12 col-12 pt-2">
                            <label for="fname">Address:</label>
                            <input type="text" id="fname" name="address" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="from-group3">
                            <input type="file" id="src-input" name="src_input" />
                            <div id="image-preview"></div>
                        </div>

                    </div>
                </div>

                <button type="submit" id="adm-from">Submit</button>
                </form>
            </div>
        </div>
    </section>
    {{-- <script>
        const selectImage = document.querySelector('.uploadimg');
        const inputFile = document.querySelector('#image');
        const imgArea = document.querySelector('.img-area');

        selectImage.addEventListener('click', function() {
            inputFile.click();
        })

        inputFile.addEventListener('change', function() {
            const image = this.files[0]
            if (image.size < 2000000) {
                const reader = new FileReader();
                reader.onload = () => {
                    const allImg = imgArea.querySelectorAll('img');
                    allImg.forEach(item => item.remove());
                    const imgUrl = reader.result;
                    const img = document.createElement('img');
                    img.src = imgUrl;
                    imgArea.appendChild(img);
                    imgArea.classList.add('active');
                    imgArea.dataset.img = image.name;
                }
                reader.readAsDataURL(image);
            } else {
                alert("Image size more than 2MB");
            }
        })
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/fixed.js"></script>
</body>

</html>
