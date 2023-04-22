<?php
    include("bs-code/encabezado.php");
?>

<?php
    include("bs-code/name-line.php");
?>
<?php //Cuerpo de seccion: Inicio?>
<main>
    

    <section class="main-content-curses ">
    
        <section class="d-flex flex-column ">
         
                <h1 style="text-align: center;">Cursos de Administración</h1>
           
        </section>

        <div class="main-cursos d-inline-flex ">
            
            <section class="categorias p-4 mb-3  ">
                    <h4 class="mb-3">Categorias</h4>
                    
                    <ul class="list-unstyled">
                        <li>
                            <button class="btn btn-light text-start">Administración</button>
                        </li>
                        <li>
                            <button class="btn btn-light text-start">Recursos Humanos</button>
                        </li>
                        <li>
                            <button class="btn btn-light text-start">Gestión de calidad</button>
                        </li>
                        <li>
                            <button class="btn btn-light text-start">Tecnologías de la información</button>
                        </li>
                        <li>
                            <button class="btn btn-light text-start">Ventas y marketing</button>
                        </li>
                    </ul>

            </section>
        
            <!-- curse info-card start-->
            <div class="tarjetas d-inline-flex flex-wrap  p-2 w-100">
                
                <!-- <div class="card m-2 text-center" style="width: 15rem;">
                    <img src="img/info-template.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="clearfix mb-3"> 
                            <span class="float-start badge bg-success" style="font-size: 15px;">Abierto</span> 
                            <span class="float-end badge bg-secondary" style="font-size: 15px;">$800.00 MXN.</span> 
                        </div>
                        <p class="card-text">Curso de preparación para examen de admisión ITD</p>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Me interesa</a>
                    </div>
                </div>
                <div class="card m-2 text-center" style="width: 15rem;">
                    <img src="img/info-template.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="clearfix mb-3"> 
                            <span class="float-start badge bg-success" style="font-size: 15px;">Abierto</span> 
                            <span class="float-end badge bg-secondary" style="font-size: 15px;">$800.00 MXN.</span> 
                        </div>
                        <h5 class="card-title"></h5>
                        <p class="card-text">Curso de preparación para examen de admisión ITD</p>
                        <a href="#" class="btn btn-primary">Me interesa</a>
                    </div>
                </div> -->
                <div class="container-fluid bg-trasparent my-2 p-3" style="position: relative;">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        
                        <div class="col">
                            <div class="card h-100 shadow-sm"> <img src="img/info-template.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-success">12354.00&euro;</span>
                                        <span class="float-end"><a href="#"class="text-decoration-none">Example</a></span> </div>
                                    <h5 class="card-title">Preparación para examen de admisión ITD</h5>
                                    <div class="d-grid gap-2 my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 shadow-sm"> <img src="img/info-template.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix mb-3">
                                        <span class="float-start badge rounded-pill bg-success">12354.00&euro;</span>
                                        <span class="float-end"><a href="#" class="text-decoration-none">Example</a></span> </div>
                                    <h5 class="card-title">Preparación para examen de admisión ITD</h5>
                                    <div class="d-grid gap-2 my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                
            </div>
            
            <!-- curse info-card end -->
           
        </div>

        
    </section>
</main>
<?php //Cuerpo de seccion: Final?>
<?php
    include("bs-code/footer.php");
?>