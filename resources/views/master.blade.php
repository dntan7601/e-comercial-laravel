<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commercial Project</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
 
        {{View::make('header')}}

        @yield('content')

        {{View::make('footer')}}
  
</body>
<style>
    .custom-login {
        height: 600px;
        padding-top: 100px;
    }
    img.slider-img {
        height: 600px !important;
      
        
    }
    .custom-product {
        height: 400px;
      
    }
    .slider-text{
        background-color: #35443585 !important ;
    }

    .trending-img {
        height: 100px;
    }
    .trending-item{
        float:left;
        width: 20%
    }
    .trending-wrapper {
        margin: 30px;
        padding-bottom: 200px;
    }
    footer {
      min-width: 100%;
    }
    /* a {
      font-size:14px;
      font-weight:700
    }
    .superNav {
      font-size:13px;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }
    @media screen and (max-width:540px){
      .centerOnMobile {
        text-align:center
      }
    } */
</style>
</html>





