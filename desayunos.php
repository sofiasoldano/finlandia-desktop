<?php $page_name = "desayunos" ?>
<?php include('header.php'); ?>

<div class="splash large gradient">
    <img class="background img-responsive" src="img/splash-desayunos.png" alt="Desayunos image">
    <div class="icon-scroll"></div>
</div>

<?php require 'fold.inc.php' ?>

<div class="desayuno">
    <div class="container">
        <h2 class="title">Desayunos con <span>Finlandia Clásico</span></h2>
        <div class="img-container">
            <a href="#"><img src="img/desayuno1.png" alt="Waffles con frutos rojos" class="img-responsive"></a>
        </div>
        <div class="img-container">
            <a href="#"><img src="img/desayuno1b.png" alt="Carrot mug cake" class="img-responsive"></a>
        </div>
    </div>
</div>
<div class="desayuno">
    <div class="container">
        <h2 class="title">Desayunos con <span>Finlandia Balance</span></h2>
        <div class="img-container">
            <a href="#"><img src="img/desayuno2.png" alt="Bagel integral" class="img-responsive"></a>
        </div>
        <div class="img-container">
            <a href="#"><img src="img/desayuno2b.png" alt="Tostada con palta" class="img-responsive"></a>
        </div>
    </div>
</div>
<div class="desayuno">
    <div class="container">
        <h2 class="title">Desayunos con <span>Finlandia Light</span></h2>
        <div class="img-container">
           <a href="#"><img src="img/desayuno3.png" alt="Tostadas con salmon" class="img-responsive"></a>
        </div>
        <div class="img-container">
            <a href="#"><img src="img/desayuno3b.png" alt="Cheesecake smoothie de frutilla" class="img-responsive"></a>
        </div>
    </div>
</div>

<div class="social-banner">
    <div class="banner-image">Somos lo que desayunamos</div>
    <p>Compartí <span class="red">nuestros desayunos</span> con tus amigos</p>
    <ul class="social-media">
        <li>
            <a href="#" class="fb">Facebook logo</a>
        </li>
        <li>
            <a href="#" class="tw">Twitter logo</a>
        </li>
        <li>
            <a href="#" class="go">Google+ logo</a>
        </li>
        <li>
            <a href="#" class="pin">Pinterest logo</a>
        </li>
    </ul>
</div>


<div class="slider">
    <div class="container">
        <h2 class="title">Nuestros <span>productos</span></h2>
        <div class="flexslider productos-slider">
            <ul class="slides">
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos1.png" alt="Finlandia light" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos2.png" alt="Finlandia light salmón" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos3.png" alt="Finlandia light balance" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos4.png" alt="Finlandia clásico" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos5.png" alt="Finlandia cheddar" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos6.png" alt="Finlandia light gruyere" class="img-responsive">
                </div>
                </a>
              </li>
            </ul>
        </div>
    </div>
    <div class="gray-bg">
        <?php include('form-suscription.php'); ?>
    </div>
</div>

<?php include('menu.php'); ?>
<?php include('footer.php'); ?>