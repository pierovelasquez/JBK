<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>| Prueba de bootstrap |</title>

@vite(['resources/js/app.js', 'resources/css/app.scss'])
  </head>
  <body>

    <header>
             <nav class="navbar navbar-dark bg-dark">  
             <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
             <!-- Navbar content -->
             </nav>        
             <div class="container">
             <div class="row align-items-end"><button class="navbar-toggler" class="row align-items-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>   
                </div>
                <img src="http://11.0.0.78/backend/img/logo-dashboard-2.png" class="img-thumbnail" alt="Cinque Terre"  height="auto" >
                </div> 
             <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tabla1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Tabla2</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Deslizante
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Anotaciones</a></li>
                      <li><a class="dropdown-item" href="#">Direcciones</a></li>
                      <li><a class="dropdown-item" href="#">Rutas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              
          </nav>
    </header>


    <script type="text/javascript"
        $('#btn-color-picker').colorpicker();
        $('#btn-color-picker').colorpicker().on(
                        'changeColor',
                        function() {
                                $('#div-bg').css('background-color',
                                                $(this).colorpicker('getValue', '#ffffff'));
                        });
</script>


  </body>
</html>