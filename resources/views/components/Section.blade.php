<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
        #icon{
    font-size: 2rem;
     color: cornflowerblue;
  }
  
  #text{
    font-size: 30px;
    color: rgb(177, 0, 0);
  }
  
  
  
  #textnavbar{
    font-size: 50px;
    color: white;
  }
  
  #Gymnav{
    color: rgb(0, 0, 0);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  #bars{
    background-color: white;
    
  }
  
  #inicio{
    color: white;
    font-size: 20px;
    background-color: black;
  }
  .black{
      background: rgba(255, 255, 255, 0.487);
      
  }
  #navbar{
    margin-top: -1px;
  }
  
  /* Section  */
  #Titulo{
    font-size: 50px;
    margin:100px;
    color: white;
  }
  .card{
    color: white;
    background: rgba(216, 90, 90, 0.487);
  }
  
  #hr{
    height: 10px;
    background-color: white;
  }
  
  #img{
    width: 5rem;
  }
  #Text_relleno{
    color: white;
    font-size: 20px;
  }
  
  /* Footer  */
  
  #Footer{
    background-color: rgba(0, 0, 0, 0.05);
  }
  
  
  /* Compras.js creacion de estilos */
  
  #card-group{
    margin: 50px;
  }
  
  /* Home.js creacion de estilos  */
  
  #titulo-Home{
      font-size: 35px;
      color: white;
      margin: 20px;
  }
  
  /* Horarios para el usuario  */
  
  #text-horario{
    color: white;
  }

  a{
    color: white;
    text-decoration: none;
  }
    </style>


<body background="https://fondosmil.com/fondo/4031.jpg " class="fixed-static">


<nav class="navbar navbar-expand-lg navbar- bg-">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}"><img src="https://1000marcas.net/wp-content/uploads/2021/06/Crunch-Fitness-Logo.png" style="width:8rem;"  alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a type="button" class="btn btn-danger"class="nav-link active" aria-current="page" href="{{url('/compras')}}">Compras</a>
                    </li>
                    
                </ul>
                </div>
                   @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a type="button" class="btn btn-danger" class="nav-link" href="{{url('/Section')}}">Clases</a>     
                        <a href="{{ url('/home') }}" type="button" class="btn btn-danger">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" type="button" class="btn btn-danger">Unete</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button" class="btn btn-danger">Reistrate</a>
                        @endif
                    @endauth
                </div>
            @endif 
            </div>
            </nav>


                    <h1 id="Titulo">Clases De Gym Style</h1>
                    <br />
                    <br />
                    <br />

                <h3 id="titulo-Home"> Preciona sobre el Horario y el Dia en el cual vas a reservar su clase </h3>
                <div className="container">
                <table class="table table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lunes</th>
                            <th scope="col">Martes</th>
                            <th scope="col">Miercoles</th>
                            <th scope="col">Jueves</th>
                            <th scope="col">Viernes</th>
                            <th scope="col">Sabados</th>
                            <th scope="col">Domingos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="Tabla">
                            <th scope="row">Mañana</th>
                            <td><a class="link" href="{{url('/Mañana')}}">6:30 Am 12:00 Pm </a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">6:30 Am 12:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">6:30 Am 12:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">7:30 Am 12:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">6:30 Am 12:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">8:00 Am 12:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Mañana')}}">8:00 Am 12:00 Pm</a></td>
                        </tr>
                        <tr id="Tabla">
                            <th scope="row">Tarde</th>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                            <td><a class="link" href="{{url('/Tarde')}}">2:00 Pm 8:00 Pm</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="8">Larry the Bird</td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <br />
                    <br />
                    <br />
                </body>

                <div>
                    <!-- *  Footer  -->
                    <footer class="text-center text-lg-start bg-light text-muted">
                  
                        <section
                            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                        >
                        
                            <div class="me-5 d-none d-lg-block">
                                <span>Este es un espacio publicitario de Gym Style:</span>
                            </div>
                           
                            <div>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="" class="me-4 text-reset">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                     
                        </section>
                  
                        <section class="">
                            <div class="container text-center text-md-start mt-5">
                          
                                <div class="row mt-3">
                              
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                              
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            <i class="fas fa-gem me-3"></i>GYM STYLE
                                        </h6>
                                        <p>
                                            Esta empresa quiere que tus mas intimos sueños se cumplan 
                                        </p>
                                    </div>
                                 

                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                     
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Productos
                                        </h6>
                                        <p>
                                            <a href="#!" class="text-reset">Pesas</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Caminadoras</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Banco press</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Prensa de piernas</a>
                                        </p>
                                    </div>
                                
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                     
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Atencion al Cliente
                                        </h6>
                                        <p>
                                            <a href="#!" class="text-reset">Precios</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Configuraciones</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Pedidos</a>
                                        </p>
                                        <p>
                                            <a href="#!" class="text-reset">Ayudas</a>
                                        </p>
                                    </div>
                                  
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                       
                                        <h6 class="text-uppercase fw-bold mb-4">
                                            Contactos
                                        </h6>
                                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                        <p>
                                            <i class="fas fa-envelope me-3"></i>
                                            GymStyle@gmail.com
                                        </p>
                                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                                    </div>
                                 
                                </div>
                              
                            </div>
                        </section>
                        
                        <div class="text-center p-4" id="Footer">
                            © 2021 Copyright:
                            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Gym Style</a>
                        </div>
                      
                    </footer>
                 
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  
</body>
</html>