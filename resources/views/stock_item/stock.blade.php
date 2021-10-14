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
        background-color: #008CBA;
    }
</style>


<html>

<head>
    <title>Clean Streets - Style Guide</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php

    use Illuminate\Support\Facades\DB;
    ?>

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

    <div class="content-main-right">
        <center>
            <h1>ระบบ Stock เก็บของ Accellum Technology</h1>
        </center><br><br>

        <h4>ตารางรายการของที่มี</h4>
        <a href="/import_stock"><button class="button button1" style="float: right;">Add Data</button></a>

        <table class="table table-bordered">
            <tr>
                <td>ลำดับ</td>
                <td>Product</td>
                <td>Part number</td>
                <td>ตั้งต้น</td>
                <td>ซื้อเพิ่ม</td>
                <td>ขายออก</td>
                <td>คงเหลือ</td>
                <td>last date</td>
                <td>ต้องสั่งเพิ่ม</td>
            </tr>

            <?php

            $users = DB::select('select * from stock_item');

            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user->id_stock; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->part_number; ?></td>
                    <td><?php echo $user->number_first; ?></td>
                    <td><?php echo $user->buy; ?></td>
                    <td><?php echo $user->sale; ?></td>
                    <td><?php echo $user->number_last; ?></td>
                    <td><?php echo $user->edit_date; ?></td>
                    <td><?php echo $user->status; ?></td>
                </tr>
            <?php
            }
            ?>


        </table>
    </div>

</body>