 
<?php $__env->startSection('title'); ?>

Webcam
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 

<h1>Immagini</h1>

<style>
.carousel {
  width:auto;
}
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="3.jpg" alt="Immagine mancante :)">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</br>
<div class="well">
<h1>Presentazione</h1>
<p>Io sono</p>
</div>

<?php $__env->stopSection(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>










<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>