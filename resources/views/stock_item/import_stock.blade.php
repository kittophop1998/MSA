<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: Helvetica;
    }

    .side-bar-menu {
        background: #00ade5;
        width: 15%;
        height: 100%;
        display: inline-block;
        position: fixed;
    }

    .side-bar-menu ul li {
        list-style-type: none;
        padding: 10px 0;
    }

    .side-bar-menu ul {
        padding: 10px 20px;
        color: #fff;
    }

    .side-bar-menu ul li a {
        text-decoration: none;
        color: #fff;
        transition: all .3s ease-in-out;
    }

    .side-bar-menu ul li a.active {
        color: #002961;
        padding-left: 20px;
        transition: all .3s ease-in-out;
        font-weight: 700;
        border-left: 3px solid #002961;
    }

    .content-main-right {
        width: 80%;
        right: 0;
        padding: 20px 40px;
        display: inline-block;
        float: right;
        box-sizing: border-box;
        color: #636363;
    }

    .logo-wrapper {
        width: 80%;
        margin: 20px auto;
    }

    .logo-wrapper img {
        width: 100%;
        object-fit: cover;
    }

    .container {
        border-bottom: 1px solid #d4d4d4;
        margin: 20px auto;
        padding: 0 0 50px 0;
    }

    .logo-varation-item {
        width: 20%;
        margin: 20px;
        display: inline-block;
    }

    .logo-varation-item img {
        width: 100%;
        object-fit: cover;
    }

    .logo-varation-item img {
        border: 1px solid #eaeaea;
    }

    .logo-varation-item h3 {
        text-align: center;
        font-size: 15px;
    }

    .colour {
        height: 150px;
        width: 100%;
        background: red;
        margin: 0 auto;
    }

    .colour-var-item {
        border: 1px solid #d4d4d4;
        padding: 10px;
        display: inline-block;
        margin: 0 10px;
        width: 20%;
    }

    .colour-var-item h3 {
        font-size: 15px;
    }

    .colour-var-item h4 {
        font-size: 12px;
    }

    .colour-var-item .colour {
        border: 1px solid #d4d4d4;
    }

    .colour-variation-wrapper {
        margin: 40px auto;
    }

    .font-demo {
        font-family: 'Ubuntu', sans-serif;
        padding: 10px 20px;
        border: 1px solid #d4d4d4;
    }

    .img-used-item {
        display: inline-block;
        width: 15%;
        padding: 20px;
        box-sizing: border-box;
        border: 1px solid #d4d4d4;
    }

    .img-used-item img {
        width: 100%;
        object-fit: cover;
    }


    @import url('https://fonts.googleapis.com/css?family=Ubuntu');
</style>

<!-- Button css -->
<style>
    .button {
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
    }

    .button1 {
        background-color: #4CAF50;
    }

    .button2 {
        background-color: #FF3333;
    }
</style>


<html>

<head>
    <title>MSA</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>


    <div class="side-bar-menu">
        <div class="logo-wrapper"><img src="https://www.img.in.th/images/50a64aad21b424a610497a44b27b1986.png" /></div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/stock">Stock Item</a></li>
            <!-- <li><a href="/three">Logos</a></li>
            <li><a href="/four">Typography</a></li>
            <li><a href="/five">Imagery</a></li> -->
        </ul>
    </div>

    <!-- form -->
    <div class="content-main-right">
        <form action="" method="post" name="add" class="form-horizontal" id="add">
            @csrf
            <h1>Import Data Stock Item</h1>
            <p></p>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    Part Number :
                </div>
                <div class="col-sm-2">
                    <input type="text" name="part" id="part" class="form-control" placeholder="Part Number">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    Description :
                </div>
                <div class="col-sm-2">
                    <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    Product Group :
                </div>
                <div class="col-sm-2">
                    <input type="text" name="group" id="group" class="form-control" placeholder="Product Group">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    Vendor :
                </div>
                <div class="col-sm-2">
                    <input type="text" name="vendor" id="vendor" class="form-control" placeholder="Vendor">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 control-label">
                    Remaining Stock :
                </div>
                <div class="col-sm-2">
                    <input type="text" name="remaining" id="remaining" class="form-control" placeholder="ตัวเลขไม่เกิน 5 ตัว">
                </div>
            </div>
        </form>
        <div class="form-group">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-3">
                <input type="submit" class="button button1" id="submit" value="เพิ่ม" onclick="add_stock()"></input>
                <a href="/stock"><input type="button" class="button button2" id="submit" value="ยกเลิก"></input></a>
            </div>
        </div>

    </div>

</body>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    function add_stock() {
        var formData = new FormData(document.forms.namedItem("add"));
        $.ajax({
            url: "add_stock",
            type: 'POST',
            data: formData,
            async: false,
            success: function(data) {
                alert("บันทึกรายการของเข้าระบบเรียบร้อย");
            },
            cache: false,
            contentType: false,
            processData: false
        });

    }
</script>