 <?php include "cabecalho.php";?>


<div style="height: 100%; width: 100%; ">
  <center>
  <img src="imagens/tira.JPG" width="100%">

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" width:100%; ">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens/banner1.jpg" alt="First slide">
          <div class="container">

          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/banner2.jpg" alt="Second slide">
          <div class="container">
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagens/banner3.jpg" alt="Third slide">
          <div class="container">

          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
 </div></center>


<?php include "rodape.php";?>
