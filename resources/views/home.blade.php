<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
   
    <title>Dota 2 Heroes</title>
    <link rel="icon" type="image/pic1.png" href="/images/pic1.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   
  
      <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?f amily=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css"> 
  

   



  </head>
  <body>

    
        
    <nav class="navbar navbar-expand-lg navbar-dark">
   
      <div class="container-fluid">
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
              <a  class="nav-link active" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contactus">Contact Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="#aboutus">About Us</a> 
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
                         
         
          
        
         
        </div>
      </div>
      
    </nav>
    

    

  <main class="container text-white">



    <p>From magical tacticians to fierce brutes and cunning rogues, Dota 2's hero pool is massive and limitlessly diverse. </br>  Unleash incredible abilities and devastating ultimates on your way to victory.</p>
    <h1>CHOOSE YOUR HERO</h1>
  </main>
  
  
  </br></br></br>

<div class="main">
  
<div class="card-list">

<div class="card-container">
  <img class="box" src="images/abaddon.png" alt="">   
  <div class="bobo">ABADDON</div>
</div>

<div class="card-container">
  <img class="box" src="images/alchemist.png" alt="">   
  <div class="bobo">ALCHEMIST</div>
</div>

<div class="card-container">
 <img class="box" src="images/ancient.png" alt="">   
  <div class="bobo">APPA</div>
</div>

<div class="card-container">
<img class="box" src="images/antimage.png" alt="">
  <div class="bobo">ANTI-MAGE</div>
</div>

<div class="card-container">
  <img class="box" src="images/arc.png" alt="">
  <div class="bobo">ARC WARDEN</div>
</div>

<div class="card-container">
  <img class="box" src="images/axe.png" alt="">
  <div class="bobo">AXE</div>
</div>

<div class="card-container">
  <img class="box" src="images/bane.png" alt="">
  <div class="bobo">BANE</div>
</div>

<div class="card-container">
  <img class="box" src="images/bat.png" alt="">
  <div class="bobo">BATRIDER</div>
</div>

<div class="card-container">
  <img class="box" src="images/beastmaster.png" alt="">
  <div class="bobo">BEASTMASTER</div>
</div>

<div class="card-container">
  <img class="box" src="images/bloodseeker.png" alt="">
  <div class="bobo">BLOODSEEKER</div>
</div>

<div class="card-container">
  <img class="box" src="images/bounty.png" alt="">
  <div class="bobo">BOUNTY</div>
</div>

<div class="card-container">
  <img class="box" src="images/brewmaster.png" alt="">
  <div class="bobo">BREWMASTER</div>
</div>

<div class="card-container">
  <img class="box" src="images/bristleback.png" alt="">
  <div class="bobo">BRISTLEBACK</div>
</div>

<div class="card-container">
  <img class="box" src="images/broodmother.png" alt="">
  <div class="bobo">BROODMOTHER</div>
</div>

<div class="card-container">
  <img class="box" src="images/centaur.png" alt="">
  <div class="bobo">CENTAUR</div>
</div>

<div class="card-container">
  <img class="box" src="images/chaos.png" alt="">
  <div class="bobo">CHAOS</div>
</div>

<div class="card-container">
  <img class="box" src="images/chen.png" alt="">
  <div class="bobo">CHEN</div>
</div>

<div class="card-container">
  <img class="box" src="images/Clinkz.png" alt="">
  <div class="bobo">CLINKZ</div>
</div>

<div class="card-container">
  <img class="box" src="images/Clockwerk.png" alt="">
  <div class="bobo">CLOCKWERK</div>
</div>

<div class="card-container">
  <img class="box" src="images/Crystal.png" alt="">
  <div class="bobo">CRYSTAL MAIDEN</div>
</div>

<div class="card-container">
  <img class="box" src="images/dark.png" alt="">
  <div class="bobo">DARK SEER</div>
</div>

<div class="card-container">
  <img class="box" src="images/darkwillow.png" alt="">
  <div class="bobo">DARKWILLOW</div>
</div>

<div class="card-container">
  <img class="box" src="images/Dawnbreaker.png" alt="">
  <div class="bobo">DAWNBREAKER</div>
</div>

<div class="card-container">
  <img class="box" src="images/Dazzle.png" alt="">
  <div class="bobo">DAZZLE</div>
</div>

<div class="card-container">
  <img class="box" src="images/death.png" alt="">
  <div class="bobo">DEATH PROPHET</div>
</div>


</div>
</div>


 
    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    
    
   




    <!-- footer -->
    
<footer id="aboutus">

<p class="text">Dota and the Dota logo are trademarks and/or registered trademarks of Valve <br> Corporation. 2023 Valve Corporation, all rights reserved.</p> <br>
  <a href="https://en.wikipedia.org/wiki/Dota_2">
    <img  src="images/footerlogo.png" alt="">
   
  </a>

</footer>

<br><br><br><br>



<div id="contactus">

        <div class="container-fluid pt-3 bg-dark">
            <div class="row text-center">
                <div class="col">
                    <p class="text-white">Contact Us</p>
                    <a href="https://www.facebook.com/dota2/"><button type="button" class="btn btn-outline-primary">Facebook</button></a>
                    <a href="https://twitter.com/DOTA2?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><button type="button" class="btn btn-outline-info">Twitter</button></a>
                    <a href="https://www.tiktok.com/tag/dota2?lang=en"><button type="button" class="btn btn-outline-warning">Tiktok</button></a>
                </div>
            </div>
        </div>

</div>
            


       


            
  










    
</div>  
  </body>
</html>