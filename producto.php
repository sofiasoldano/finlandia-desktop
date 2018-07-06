<?php $page_name = "producto" ?>
<?php include('header.php'); ?>


<div class="splash">
    <div class="background clasico">
    <div class="main-title"><span>Finlandia</span>
    <div class="type clasico">Finlandia Clásico</div></div>
</div>

<div class="container">
    <div class="white-box">
        <div class="top-absolute">
            <div class="product large">
                <img src="img/finlandia-clasico.png" alt="Pote Finlandia" width="203">
            </div>
        </div>
        <div class="desc">
            <p>Un queso diferente, perfecto para acompañar tu día y el de tu familia. El Queso Finlandia Clásico es un queso untable con textura suave, muy buen sabor, sin acidez y alta cremosidad. Ideal para sumar calcio y proteínas a tu alimentación.</p>
        </div>
        <div class="bottom">
            <div class="desc half">
                <h4 class="section-subtitle">Formato</h4>
                <p>Pote de 200 y 300 gr</p>
            </div>
            <div class="desc half">
                <h4 class="section-subtitle">Uso</h4>
                <p>Ideal para desayunos, meriendas y preparaciones varias en la cocina.</p>
            </div>
            <div class="desc half">
                <h4 class="section-subtitle">Presentación</h4>
                <p>Para Untar</p>
            </div>
            
            <div class="desc half">
                <h4 class="section-subtitle">Este producto es apto para celíacos</h4>
            </div>
        </div>
    </div>
</div>

<?php require 'fold.inc.php' ?>
<div class="container">
    <div class="nutricional">
        <h3 class="section-title">Tabla nutricional</h3>
        <table  class="tabla-nutricional">
            <thead>
                <tr>
                    <th></th>
                    <th>Cant. por porción (30g)</th>
                    <th>%VD (*)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th >Valor energético</th>
                    <td>86kcal / 355kj</td>
                    <td>4</td>
                </tr>
                <tr>
                    <th >Carbohidratos</th>
                    <td>1,0g</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th>Proteínas</th>
                    <td>2,1g</td>
                    <td>3</td>
                </tr>
                <tr>
                    <th >Grasas totales</th>
                    <td>8,2g</td>
                    <td>15</td>
                </tr>
                <tr>
                    <th >Grasas saturadas</th>
                    <td>4,8g</td>
                    <td>22</td>
                </tr>
                <tr>
                    <th >Grasas trans</th>
                    <td>0,3g</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th >Fibra alimentaria</th>
                    <td>0,0g</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th >Sodio</th>
                    <td>123mg</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th >Calcio</th>
                    <td>98mcg</td>
                    <td>10</td>
                </tr>
                <tr>
                    <th >Vitamina A</th>
                    <td>143mcg</td>
                    <td>24</td>
                </tr>
                <tr>
                    <th >Vitamina D</th>
                    <td>0,74mcg</td>
                    <td>15</td>
                </tr>
            </tbody>
        </table>
        <p class="table-desc">* Valores diarios con base a una dieta de 200kcal u 8400kj. Sus valores diarios pueden ser mayores o menores dependiendo de sus necesidades energéticas.</p>
    </div>
</div>
    <div class="slider gray-bg">
        <div class="container">
        <h2 class="title">Recetas <span>Finlandia clásico</span></h2>
        <div class="flexslider recetas-slider">
            <ul class="slides">
              <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas1.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
            </ul>
        </div>
        </div>
    </div>

   <?php include('form-suscription.php'); ?>
    

<?php include('menu.php'); ?>
<?php include('footer.php'); ?>