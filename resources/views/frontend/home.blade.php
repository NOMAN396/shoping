<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('public/assets/css/home.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<script>

document.addEventListener("DOMContentLoaded", function() {
  const sidebarMenu = document.getElementById("sidebarMenu");
  const sidebarToggleBtn = document.getElementById("sidebarToggleBtn");

  function toggleSidebar() {
    sidebarMenu.classList.toggle("show");
    sidebarToggleBtn.classList.toggle("show");
  }

  sidebarToggleBtn.addEventListener("click", toggleSidebar);

  function checkScreenWidth() {
    if (window.innerWidth < 992) {
      sidebarMenu.classList.remove("show");
      sidebarToggleBtn.classList.add("show");
    } else {
      sidebarMenu.classList.add("show");
      sidebarToggleBtn.classList.remove("show");
    }
  }

  // Check screen width on page load and resize
  window.addEventListener("load", checkScreenWidth);
  window.addEventListener("resize", checkScreenWidth);
});

</script>

<body>
<nav class="navbar navbar-expand-lg bg-secondary col-xl-12">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="loimg" src="{{asset('public/assets/img/homeimage/home.jpg')}}" alt="ami" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">My shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <li class="nav-item"><a href="" class="py-5 px-5"><img class="ico" src="{{asset('public/assets/img/icons/login/f.png')}}"  alt="" srcset=""></a></li>
    </div>
  </div>
</nav>



 <button id="sidebarToggleBtn" class="d-lg-none">Toggle Sidebar</button>

<div id=""class="bg-white">
  <div class="row">
    <div id="sidebarMenu"class="position-sticky col-sm-2 col-lg-2 d-lg-block sidebar collapse">
      <div class="list-group list-group-flush mx-2 mt-4">
        <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
          <span class="hober">Female</span>
         </a>  
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                          <span class="hober">Female</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a
                        >
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a
                        >
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a
                        >
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a
                        >
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a
                        >
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                          ><span>Female</span></a>
                      </div>
    </div>
    <div class="col-3 py-3 px-2 wel">
  <img class="wel" src="{{asset('public/assets/img/homeimage/images2.jpg')}}" width="350" height="400" alt="">
    <li><h5>Offer</h5></li>
    <li>20tk</li>
    <li>Add to cart</li>
</div>

 <div class="col-3 py-3 px-3 wel">
 <img class="wel" src="{{asset('public/assets/img/homeimage/images5.jpg')}}" width="300"height="400" alt="">
    <li><h5>Offer</h5></li>
    <li>20tk</li>
    <li>Add to cart</li>
</div>
<div class="col-3 py-3  px-2 wel">
  <img class="wel" src="{{asset('public/assets/img/homeimage/img3.jpg')}}" width="300"height="400" alt="">
      <li><h5>Offer</h5></li>
    <li>20tk</li>
    <li>Add to cart</li>
</div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
<div id="carouselExampleCaptions" class="carouse d-inline-flex" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block" alt="" width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('public/assets/img/homeimage/images2.jpg')}}" class="d-block" alt="..." width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block" alt="..." width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
   <div class="col-md-4">
<div id="carouselExampleCaptions" class="carouse d-inline-flex" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block" alt="" width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('public/assets/img/homeimage/images2.jpg')}}" class="d-block" alt="..." width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block" alt="..." width="300" height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<section class="section popular-catagories">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images9.jpg')}}" class="d-block round" alt="">
               <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a></div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images12.jpg')}}" class="d-block  round" alt="...">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images14.jpg')}}" class="d-block  round" alt="">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images15.jpg')}}" class="d-block  round" alt="">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images4.jpg')}}" class="d-block  round" alt="...">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images13.jpg')}}" class="d-block  round" alt="...">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block round" alt="">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" class="d-block round" alt="">
             <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                  <span class="hober btn btn-primary">Frog Child</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button> -->
    <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
</section>

<section class="newpro">
  <h1 class="new">New Products</h1>
  <div class="card-group m-2 col-12">
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images13.jpg')}}" alt="a snowy mountain with clouds behind it"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice majestic.</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images9.jpg')}}" alt="a mountain range under a thin layer of clouds"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice.</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
 </div>
</section>
<section class="newpro">
  <div class="card-group m-2 col-12">
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images13.jpg')}}" alt="a snowy mountain with clouds behind it"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice majestic.</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
  <div class="card col-4">
    <img src="{{asset('public/assets/img/homeimage/images9.jpg')}}" alt="a mountain range under a thin layer of clouds"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your best</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
 </div>
</section>

<section class="homdecoration">
  <h1 class="decoration">Home & Decoration</h1>
<div class="row py-5 col-12 ">
  <div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6 class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="">New York</h6>
    </div>
  </div>
</div>
</div>
<div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6 class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6>New York</h6>
    </div>
  </div>
</div>
</div>
<div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6 class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6>New York</h6>
    </div>
  </div>
</div>
</div>
<div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6 class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6>New York</h6>
    </div>
  </div>
</div>
</div>
<div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6  class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6  class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="">New York</h6>
    </div>
  </div>
</div>
</div>
<div class="col-lg-2">
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active btn btn-primary">
        <h6 class="m">Los Angeles</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="n">Chicago</h6>
    </div>
    <div class="carousel-item btn btn-primary">
        <h6 class="">New York</h6>
    </div>
  </div>
</div>
</div>
</div>                
</section>
<section class="homedecoration">
 <div class="grid-container">
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images6.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images7.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>  
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images8.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>
  <div class="grid-item">
     <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images9.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
  </div>
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images14.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>  
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images13.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>
  <div class="grid-item"> <div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images12.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>
  <div class="grid-item"><div class="card hcard">
    <img src="{{asset('public/assets/img/homeimage/images5.jpg')}}" alt="a snow-capped mountain range"/>
    <div class="card-body">
      <h2 class="card-title">Wonderfull</h2>
      <p class="card-text">You make your choice</p>
      <a href="#" class="btn btn-secondary">Learn more</a>
    </div>
  </div>
</div>  
</div>
</section>

<section>
  <h1 class="decoration py-5">Life Style-></h1>
<div class="flex-container">
  <div><a class="m" href="">Saree</a></div>
  <div><a class="n" href="">Watch</a></div>
  <div><a class="m" href="">Saree</a></div>  
  <div><a  class="n" href="">Watch</a></div>
  <div ><a class="m"  href="">Saree</a></div>
  <div ><a class="n" href="">Watch</a></div>
  <div ><a class="m" href="">Saree</a></div>
  <div><a  class="n" href="">Watch</a></div>
  <div ><a class="m" href="">Saree</a></div>
  <div ><a class="n" href="">Watch</a></div>
  <div ><a class="m" href="">Saree</a></div>
</div>
</section>

<section>
  <div class="row col-md-12">
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images11.jpg')}}" class="card-img-top" alt="Los Angeles Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images12.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images14.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images15.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
</div>
</section>
<section>
  <div class="row col-md-12">
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images6.jpg')}}" class="card-img-top" alt="Los Angeles Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images7.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images8.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card life">
      <img src="{{asset('public/assets/img/homeimage/images9.jpg')}}" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in 
        </p>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>