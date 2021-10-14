<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: Helvetica;
    }

    .side-bar-menu {
        background: #00ade5;
        width: 20%;
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
        <div id="one" class="container">
            <h2>Introduction</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum augue sit amet dui mollis, vel congue justo tristique. Nulla facilisi. Vivamus tincidunt cursus nisi, non auctor eros varius lobortis. Etiam finibus justo vel dolor facilisis consectetur quis vitae libero. Aenean eget mattis orci. Vivamus vehicula tortor a posuere porttitor. Donec malesuada bibendum lorem, at accumsan orci hendrerit eu. Donec placerat neque consectetur sem pellentesque sollicitudin. Aenean nisl velit, consequat et suscipit eu, porttitor vel quam. Vivamus ut justo placerat, tempor nunc eu, ultrices neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut ultrices diam. Curabitur cursus, massa in vehicula mollis, quam est mollis risus, eu venenatis ipsum lorem sed augue. Sed eu leo vel orci ullamcorper imperdiet quis et ex. Fusce at felis semper, elementum massa quis, porttitor diam.</p>
        </div>

        <div id="two" class="container">
            <h3>Colours</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum augue sit amet dui mollis.</p>
            <div class="colour-variation-wrapper">
                <h3>Primary Colours</h3>
                <div class="colour-var-item">
                    <div class="colour" style="background-color: #00ADE5"></div>
                    <h3>Name: Cerulean</h3>
                    <h4>Hex Code: #00ADE5</h4>
                    <h4>RGB Code: 0,173,229</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #002961"></div>
                    <h3>Name: Midnight Blue</h3>
                    <h4>Hex Code: #002961</h4>
                    <h4>RGB Code: 0,41,97</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #fff"></div>
                    <h3>Name: White</h3>
                    <h4>Hex Code: #ffffff</h4>
                    <h4>RGB Code: 255, 255, 255</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #000"></div>
                    <h3>Name: Black</h3>
                    <h4>Hex Code: #000000</h4>
                    <h4>RGB Code: 0, 0, 0</h4>
                </div>
            </div>

            <div class="colour-variation-wrapper">
                <h3>Secondary Colours</h3>
                <div class="colour-var-item">
                    <div class="colour" style="background-color: #fff"></div>
                    <h3>Name: White</h3>
                    <h4>Hex Code: #000000</h4>
                    <h4>RGB Code: 255, 255, 255</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #bfdfff"></div>
                    <h3>Name: French Pass</h3>
                    <h4>Hex Code: #bfdfff</h4>
                    <h4>RGB Code: 191,223,255</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #8ac5ff"></div>
                    <h3>Name: Anakiwa</h3>
                    <h4>Hex Code: #8ac5ff</h4>
                    <h4>RGB Code: 138,197,255</h4>
                </div>

                <div class="colour-var-item">
                    <div class="colour" style="background-color: #0178f0"></div>
                    <h3>Name: Azure Radiance</h3>
                    <h4>Hex Code: #0178f0</h4>
                    <h4>RGB Code: 1,120,240</h4>
                </div>
            </div>
        </div>

        <div id="three" class="container">
            <h2>Logos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum augue sit amet dui mollis.</p>
            <div class="logos-variations-wrapper">
                <div class="logo-varation-item">
                    <h3>Logo 1 Varation 1</h3><img src="https://image.ibb.co/g42kfR/Logo_1.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 1 Varation 2</h3><img src="https://image.ibb.co/cmKnum/Logo_1a.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 1 Varation 3</h3><img src="https://preview.ibb.co/fEsU76/Logo_1b.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 2 Varation 1</h3><img src="https://image.ibb.co/hLVhS6/Logo_2.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 2 Varation 2</h3><img src="https://image.ibb.co/i2AhS6/Logo_2a.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 3 Varation 1</h3><img src="https://image.ibb.co/eErd0R/Logo_3.png">
                </div>
                <div class="logo-varation-item">
                    <h3>Logo 1 Varation 2</h3><img src="https://preview.ibb.co/ncW0Em/Logo_3a.png">
                </div>

            </div>
        </div>

        <div id="four" class="container">
            <h3>Typography: Ubuntu</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum augue sit amet dui mollis.</p>
            <div class="font-demo">
                <h1>Heading 1<h1>
                        <h2>Heading 2</h2>
                        <h3>Heading 3</h3>
                        <p>The quick brown fox jumps over the lazy dog</p>
                        <p>A​‌B​‌C​‌Ć​‌Č​‌D​‌Đ​‌E​‌F​‌G​‌H​‌I​‌J​‌K​‌L​‌M​‌N​‌O​‌P​‌Q​‌R​‌S​‌Š​‌T​‌U​‌V​‌W​‌X​‌Y​‌Z​‌Ž​‌a​‌b​‌c​‌č​‌ć​‌d​‌đ​‌e​‌f​‌g​‌h​‌i​‌j​‌k​‌l​‌m​‌n​‌o​‌p​‌q​‌r​‌s​‌š​‌t​‌u​‌v​‌w​‌x​‌y​‌z​‌ž​‌А​‌Б​‌В​‌Г​‌Ґ​‌Д​‌Ђ​‌Е​‌Ё​‌Є​‌Ж​‌З​‌Ѕ​‌И​‌І​‌Ї​‌Й​‌Ј​‌К​‌Л​‌Љ​‌М​‌Н​‌Њ​‌О​‌П​‌Р​‌С​‌Т​‌Ћ​‌У​‌Ў​‌Ф​‌Х​‌Ц​‌Ч​‌Џ​‌Ш​‌Щ​‌Ъ​‌Ы​‌Ь​‌Э​‌Ю​‌Я​‌а​‌б​‌в​‌г​‌ґ​‌д​‌ђ​‌е​‌ё​‌є​‌ж​‌з​‌ѕ​‌и​‌і​‌ї​‌й​‌ј​‌к​‌л​‌љ​‌м​‌н​‌њ​‌о​‌п​‌р​‌с​‌т​‌ћ​‌у​‌ў​‌ф​‌х​‌ц​‌ч​‌џ​‌ш​‌щ​‌ъ​‌ы​‌ь​‌э​‌ю​‌я​‌Α​‌Β​‌Γ​‌Δ​‌Ε​‌Ζ​‌Η​‌Θ​‌Ι​‌Κ​‌Λ​‌Μ​‌Ν​‌Ξ​‌Ο​‌Π​‌Ρ​‌Σ​‌Τ​‌Υ​‌Φ​‌Χ​‌Ψ​‌Ω​‌α​‌β​‌γ​‌δ​‌ε​‌ζ​‌η​‌θ​‌ι​‌κ​‌λ​‌μ​‌ν​‌ξ​‌ο​‌π​‌ρ​‌σ​‌τ​‌υ​‌φ​‌χ​‌ψ​‌ω​‌ά​‌Ά​‌έ​‌Έ​‌έ​‌Ή​‌ί​‌ϊ​‌ΐ​‌Ί​‌ό​‌Ό​‌ύ​‌ΰ​‌ϋ​‌Ύ​‌Ϋ​‌ὰ​‌ά​‌ὲ​‌έ​‌ὴ​‌ή​‌ὶ​‌ί​‌ὸ​‌ό​‌ὺ​‌ύ​‌ὼ​‌ώ​‌Ώ​‌1​‌2​‌3​‌4​‌5​‌6​‌7​‌8​‌9​‌0​‌‘​‌?​‌’​‌“​‌!​‌”​‌(​‌%​‌)​‌[​‌#​‌]​‌{​‌@​‌}​‌/​‌&​‌\​‌<​‌-​‌+​‌÷​‌×​‌=​‌>​‌®​‌©​‌$​‌€​‌£​‌¥​‌¢​‌:​‌;​‌,​‌.​‌*</p>
            </div>
        </div>

        <div id="five" class="container">
            <h3>Imagery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum augue sit amet dui mollis.</p>
            <div class="imagery-used-wrapper">
                <div class="img-used-item"><img src="https://image.ibb.co/is9num/1.png" /></div>
                <div class="img-used-item"><img src="https://image.ibb.co/ie2kfR/2.png" /></div>
                <div class="img-used-item"><img src="https://image.ibb.co/dYtDZm/3.png" /></div>
                <div class="img-used-item"><img src="https://image.ibb.co/mqODZm/4.png" /></div>
            </div>
        </div>
    </div>

</body>


<script>
    $(document).ready(function() {
        $(document).on("scroll", onScroll);

        //smoothscroll
        // $('a[href^="#"]').on('click', function(e) {
        //     e.preventDefault();
        //     $(document).off("scroll");

        //     $('a').each(function() {
        //         $(this).removeClass('active');
        //     })
        //     $(this).addClass('active');

        //     var target = this.hash,
        //         menu = target;
        //     $target = $(target);
        //     $('html, body').stop().animate({
        //         'scrollTop': $target.offset().top + 2
        //     }, 500, 'swing', function() {
        //         window.location.hash = target;
        //         $(document).on("scroll", onScroll);
        //     });
        // });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $('ul li a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('ul li a').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }
</script>