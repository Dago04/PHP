<?php
//nombre
class plantilla
{
    //atributos variables

    public $menu;
    public $footer;


    //constructor

    public function __construct()
    {
        $menu =  '<nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>';
$footer= '<footer class="bg-dark text-white pt-5 pb-4">
<div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Proyecto</h5>
            <p>Ejemplo PHP
            </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Estudiante</h5>
            <p>
                Dagoberto Salas Cordero, Estudiante de ultimo año de la carrera de informatica empresarial de la Universidad de Costa Rica.
            </p>

        
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Acerca de</h5>
            <p>
                Proyecto PHP
            </p>

        </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
            <p>
                Copyright 2023 All rights reserved by:
                <a href="#" style="text-decoration: none;">
                    <strong class="text-warning">Dagoberto Salas</strong>
                </a>
            </p>
        </div>
        <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"> 
                        <a href="https://github.com/Dago04/multimedios022023.git" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="bi bi-github"></i></a>
                    </li>
                   
                    <li class="list-inline-item"> 
                        <a href="https://www.linkedin.com/in/dagoberto-salas-cordero-10205521b/" class="btn-floating btn-sm text-white" style="font-size: 23px;"> <i class="bi bi-linkedin"></i></i></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>


</footer>';

        $this->menu = $menu;
        $this->footer =  $footer;
    }

    //set y get que son lsa funciones
    //metodos void
    public function getMenu()
    {
        return $this->menu;
    }
    public function getFooter()
    {
        return $this->footer;
    }
}
?>
