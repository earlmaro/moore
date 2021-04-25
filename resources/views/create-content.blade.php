<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="step1.css">
  <!-- Font Awesome -->
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
<!-- As a link -->
<!-- Navbar -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>

<div class="jumbotron">
<div class="" style="max-width:50%; margin:auto; margin-top:15px ">
            <form action="/preview" method = "POST" enctype='multipart/form-data'>
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Main Slide 1</label>
    <input type="text" name ="main_slide_1" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>

 
  <div class="form-group">
    <label for="exampleInputEmail1">Main Slide 2</label>
    <input type="text" name ="main_slide_2" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Logo 1</label>
    <input type="text" name ="logo_slide_1" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Logo 2</label>
    <input type="text" name ="logo_slide_2" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Logo 3</label>
    <input type="text" name ="logo_slide_3" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Banner 1</label>
    <input type="text" name ="banner_slide_1" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Banner 2</label>
    <input type="text" name ="banner_slide_2" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Banner 3</label>
    <input type="text" name ="banner_slide_3" value = "" class="form-control" id="" aria-describedby="emailHelp" placeholder=" E.g 'https://mdbootstrap.com/img/new/slides/043.jpg' or './image.jpg'">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Main Video </label>
    <input type="file" accept="video/mp4,video/x-m4v,video/*" name ="main_video" value = "" class="form-control" id="" aria-describedby="emailHelp" >
  </div>

  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Excel file </label>
    <input type="file" accept="video/mp4,video/x-m4v,video/*" name ="excel" value = "" class="form-control" id="" aria-describedby="emailHelp" >
  </div> -->

  <button type="submit" class="btn btn-primary">Preview</button>
</form>
            </div>
<!-- 
            <div class="jumbotron">
<div class="" style="max-width:50%; margin:auto; margin-top:15px ">
            <form action="/excel-upload" method = "POST" enctype='multipart/form-data'>
            @csrf
 

  <div class="form-group">
    <label for="exampleInputEmail1">Excel file </label>
    <input type="file" accept="video/mp4,video/x-m4v,video/*" name ="excel" value = "" class="form-control" id="" aria-describedby="emailHelp" >
  </div>

  <button type="submit" class="btn btn-primary">Upload</button>
</form>
            </div>

</div> -->


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>