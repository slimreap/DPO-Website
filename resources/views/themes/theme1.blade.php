<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Wmsu DPO</title>

<style>
  .news-img {
    width: 250px;
}

body {
 
    background-image:url("{{asset('/storage/images/wmsu-cover.jpg')}}");
    background-repeat:no-repeat;
    background-size: cover;
    min-height: 100vh;  
    background-color: rgba(255,255,255,0.6);
    background-blend-mode: lighten;


}

.carousel .carousel-item {
  height: 400px;
  
}

.carousel {
  width: 95%;
}


.carousel-item img {
    position: absolute;
 
    top: 0;
    left: 0;
    object-fit: fill;
    object-position: center;
    height: 100vh;
    overflow: hidden;
    

}

.logo {
    max-width: 60%;
    max-height: 15%;
    border-radius: -10px;
}


.navbar-scroll {
  transform: translateY(-100px);
}

</style>
</head>

<body class="d-flex flex-column">
  
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container-fluid crimson">


          <div class="flex flex-column mx-auto">

            <div class="container mx-auto text-center mb-2">
              <a class="navbar-brand mx-auto" href="#">
                <img src="{{asset('/storage/images/WMSU.png')}}" class=" img-thumbnail rounded-circle border border-0 px-auto" width="100px" height="100px" alt="">
    
              </a>
            </div>
  
  
            <div class="d-block">
              <span class="text-center">
                <h3 class="text-white">WESTERN MINDANAO STATE UNIVERSITY</h3>
                
              </span>
              <span class="text-center">
                <h3 class="text-white">DATA PROTECTION OFFICE</h3>
                
              </span>
  
            </div>

            
          <button class="navbar-toggler d-block mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><box-icon type='solid' name='chevrons-down'></box-icon></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav d-flex flex-row gap-3 fs-3 justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Privacy Policies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">InfoSec</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">About UDPO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Contact UDPO</a>
                </li>
                
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> --}}
              </ul>
            </div>

          </div>



        
        </div>
      </nav>


{{-- Carousel --}}




<section class="mt-3 mb-5" id="carouselsection">

  <div id="carouselExampleIndicators" class="carousel slide mx-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('/storage/images/picko.jpg')}}" class="d-block img-fluid w-100" style="width: 100%; height: 100%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/storage/images/picko.jpg')}}" class="d-block w-100 img-fluid" style="width: 100%; height: 100%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('/storage/images/picko.jpg')}}" class="d-block w-100 img-fluid" style="width: 100%; height: 100%" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container position-relative mt-4">
    <h2>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, veritatis.
    </h2>

    <p class="text-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid magni dignissimos delectus maiores quo nemo facere provident rem pariatur laborum, quis sint commodi ad repudiandae necessitatibus, voluptas cumque saepe cum?</p>
  </div>
</section>



      {{-- News Section --}}
<section class="mt-5">

  
  <h3 class="d-block p-2 ms-2 text-center">
    News and Updates
  </h3>

  <div class="container sm:m-4 m-auto">
    <div class="row row-cols-sm-1 row-cols-md-2 justify-content-center p-2 d-flex flex-wrap">

      <div class="col d-flex justify-content-center">
        
          <img src="{{asset('/storage/images/picko.jpg')}}" class="news-img img-thumbnail" alt="">
    

      </div>


      <div class="col d-flex align-items-center">
        <h5 class="text-black">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo non illo ratione, dolorem iusto minima earum culpa blanditiis. Recusandae quos distinctio labore perferendis tempora incidunt excepturi consequatur fuga aliquam eligendi.
        </h5>
      </div>


    </div>

    <div class="btn flex d-block align-items-end">
      <span>Read More</span>

    </div>
  </div>

</section>


{{-- Magazine --}}

<section class="">
  <div class="container m-auto">

    <h3 class="h1">
      Adios!
    </h3>

    <h3>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, saepe.
    </h3>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quod ex aliquam voluptatem excepturi ratione ullam velit atque sint esse?
    </p>

  </div>
</section>

{{-- Data Privacy Section --}}


<section class="">

  <div class="container mb-2 text-center">

  <h2 class="d-block text-dark">THE DPO</h2>

  <div class="row gap-1 mx-5 row-cols-sm-2 d-flex justify-content-center">
    <div class="card col p-2" style="width: 18rem;">
      <img src="{{asset('/storage/images/picko.jpg')}}" class="card-img-top d-block" alt="...">
      <div class="card-body">
        <p class="card-text">DPO Director</p>
      </div>
    </div>


    <div class="card col p-2" style="width: 18rem;">
      <img src="{{asset('/storage/images/picko.jpg')}}" class="card-img-top d-block" alt="...">
      <div class="card-body">
        <p class="card-text">Admin</p>
      </div>
    </div>


    <div class="card col p-2" style="width: 18rem;">
      <box-icon type='solid' class="mx-auto" name='user'></box-icon>
      <div class="card-body">
        <p class="card-text">Subadmin</p>
      </div>
    </div>




  </div>

  </div>

</section>


<footer class="flex fixed-buttom border-top border-dark">
  <div class="container-fluid d-flex crimson justify-content-center mt-auto">
    
<div class="d-flex flex-row">
  <div class="p-1">
    <img src="{{asset('/storage/images/WMSU.png')}}" class="img-thumbnail rounded-circle border border-0" width="80px" height="80px" alt="">

  </div>

  <div class="p-1 text-center text-white">
    <span class="h3">
      WESTERN MINDANAO STATE UNIVERSITY
    </span>
    <p>
      Normal Road, Baliwasan
      7000 Zamboanga City
      Philippines
    </p>
  </div>
</div>

</footer>

      <script src="{{asset('js/app.js')}}"></script>
      <script src="{{asset('js/script.js')}}"></script>
</body>
</html>