<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>

   <!-- Carousel wrapper -->
   <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>


<div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img
        src="{{$main_slide_1}}"
        class="d-block w-100"
        alt="..."
      />
    </div>
    <div class="carousel-item" data-mdb-interval="50000">
    <video controls autoplay>
  <source src="" type="video/mp4">
  Your browser does not support the video tag.
</video>
    </div>
    <div class="carousel-item">
      <img
        src= "{{$main_slide_2}}"
        class="d-block w-100"
        alt="..."
      />
    </div>
  </div>
  <button
    class="carousel-control-prev"
    data-mdb-target="#carouselExampleInterval"
    type="button"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    data-mdb-target="#carouselExampleInterval"
    type="button"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="info">
<div class="row" >
    <div class="col-sm-3" style ="margin-top:80px; ">
<!-- Carousel wrapper -->
<div
  id="carouselBasicExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img
        src="{{$logo_slide_1}}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="{{$logo_slide_2}}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="{{$logo_slide_3}}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
 
    </div>


    <div class="col-sm-6">
    <div class="row">
    <marquee  width = "50%"> <h4> This is basic example of marquee </h4></marquee>
    </div>
    <div class="row">

    <div class="p-5 text-center bg-light">
    <div
  id="carouselExampleFade"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="{{$banner_slide_1}}"
        class="d-block w-100"
        alt="..."
      />
    </div>
    <div class="carousel-item">
      <img
        src="{{$banner_slide_2}}"
        class="d-block w-100"
        alt="..."
      />
    </div>
    <div class="carousel-item">
      <img
        src="{{$banner_slide_3}}"
        class="d-block w-100"
        alt="..."
      />
    </div>
  </div>
  <button
    class="carousel-control-prev"
    data-mdb-target="#carouselExampleFade"
    type="button"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    data-mdb-target="#carouselExampleFade"
    type="button"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
  </div>
   
    </div>
    </div>


    <div class="col-sm-3">

    <div class="row">
    <div class="p-5 text-center bg-light" style="min-height:70px">
  <div style="background-color:white; margin-top:20px;margin-bottom:0px; padding:20px; ">
  
    <h2> <b> Enter your Email Address to subscribe to our news field</b></h2>
    <form action=""> 
    <div class="form-outline mb-4">
    <input type="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Email address</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  <h4 style="margin:20px"> <b> Thursday, 22 April.</b></h4>
  
  </div>
   
  </div>
    
    </div>
    <!-- <div class="row"> -->
    <!-- <div class="card" style="background-color:white"> -->
  <!-- <div class="card-body text-center" style="margin-top:0px">
    <blockquote class="blockquote mb-0">
    <p> <b> Thursday, 22 April.</b></p>
    </blockquote>
  </div> -->
<!-- </div> -->
    <!-- </div> -->

  



    </div>


  </div>

  </div>




<style>

*.info{
    margin: 10px;
    margin-top:10px,
    padding: 5px;
    box-sizing: border-box;
}

.container{
    width: 100%;
    height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px;
    padding: 10px;
    box-sizing: border-box;
}

.container .slider{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.container ul{
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 20;
}

.container ul li{
    list-style: none;
    cursor: pointer;
    margin: 10px;
}


.container ul li video{
    width: 200px;
    transition: all 0.3s;
}
.container ul li video:hover{
    transform: scale(1.1);
}

video{
    width: 100%;
    height: 100%;
}
</style>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>
