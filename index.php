<?php
    include("bs-code/encabezado.php");
?>

<?php
    include("bs-code/name-line.php");
?>
<?php //Cuerpo de seccion: Inicio?>
<main>

    <section class="main-content-index d-flex justify-content-between" style="margin-top: 95px;" >
        <!-- promo slider start -->
        <div id="index-slider" class="carousel slide" data-bs-ride="carousel"> 
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#index-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#index-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#index-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner"  style="max-width:1920px; max-height:620px !important;">
                    <div class="carousel-item active">
                    <img src="img/banner-template.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/banner-template.jpg" class="d-block w-100 img-fluid"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="img/banner-template.jpg" class="d-block w-100 img-fluid"  alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#index-slider" data-bs-slide="prev">
                    <span aria-hidden="true"><i class="fa-solid fa-caret-left fa-beat-fade fa-2xl" style="color: #ffffff;"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#index-slider" data-bs-slide="next">
                    <span aria-hidden="true"><i class="fa-solid fa-caret-right fa-beat-fade fa-2xl" style="color: #ffffff;"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
        <!-- promo slider end -->
    </section>

    <!-- information card start -->
    <div class="container-fluid">
        <div class="texto">
               
        </div>
    </div>
    <!-- information card end -->
    

</main>
<?php //Cuerpo de seccion: Final?>

<?php
    include("bs-code/footer.php");
?>