<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
   
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?f amily=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/homecss.css">

   



  </head>
  <body>

    
        
    <nav class="navbar navbar-expand-lg navbar-dark">
   
      <div class="container">
        <a class="navbar-brand" href="home">
        <img class="logo" src="{{asset('images/pic1.png')}}" alt="" width="70" height="70">
        Dota 2 Heroes
     

        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a  class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contact">Contact Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="#footer">About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="services1">Services1</a></li>
                <li><a class="dropdown-item" href="/services2">Services2</a></li>
                <li><a class="dropdown-item" href="/services3">Services3</a></li>
              </ul>
</li>
            @guest
                         <li class="nav-item">
                             <a class="nav-link " href="{{ route('login') }}">Login</a>
            
                            <li class="nav-item">
                             <a class="nav-link " href="{{ route('registration') }}">Register</a>
              
                         @else
                         <span class="nav-item"><p class="nav-link">{{ auth()->user()->name }}</p></span>
                         <li class="nav-item">
                                <a class="nav-link " href="{{ route('logout') }}">Logout</a>
                            </li>
                         @endguest
                         </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    

  <main class="container text-white">

   
    <h1>SERVICES 3</h1>
  </main>
  
  
  </br></br></br> </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

 


    
    <!-- footer -->
    
<footer id="footer">

<p class="text">Dota and the Dota logo are trademarks and/or registered trademarks of Valve <br> Corporation. 2023 Valve Corporation, all rights reserved.</p> <br>
  <a href="https://en.wikipedia.org/wiki/Dota_2">
    <img src="images/footerlogo.png" alt="">
   
  </a>

  
            
</footer>

            


       


            
  










    
</div>  
  </body>
</html>