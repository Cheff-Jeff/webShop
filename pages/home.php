<?php
    $Page = "Home";
    $JS = "home";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/home.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="banner">
    <div class="imgWrap">
        <img src="/src/img/banner.PNG" alt="banner image">
    </div>
    <div class="txtWrap">
        <h1>What's new this week?</h1>
    </div>
</section>
<section class="new">
    <div class="container bigger">
        <div class="row">
            <div class="col-12">
                <div class="inner">
                    <div class="comic">
                        <img src="/src/img/ironman.jpg">
                        <p>Iron Man Annual (2021)#1</p>
                    </div>
                    <div class="comic">
                        <img src="/src/img/ironman.jpg">
                        <p>Iron Man Annual (2021)#1</p>
                    </div>
                    <div class="comic">
                        <img src="/src/img/ironman.jpg">
                        <p>Iron Man Annual (2021)#1</p>
                    </div>
                    <div class="comic">
                        <img src="/src/img/ironman.jpg">
                        <p>Iron Man Annual (2021)#1</p>
                    </div>
                    <div class="comic">
                        <img src="/src/img/ironman.jpg">
                        <p>Iron Man Annual (2021)#1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secbanner banner">
    <div class="txtWrap">
        <h2>Popular comis this month.</h2>
    </div>
    <div class="imgWrap">
        <img src="/src/img/secBanner.png">
    </div>
</section>
<section class="popular">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
            <div class="col-md-3 smaller">
                <div class="comic">
                    <img src="/src/img/ironman.jpg">
                    <p>Iron Man Annual <br/> (2021)#1</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>
