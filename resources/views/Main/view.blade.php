<!DOCTYPE html>
<html>
<head>
    <title>roommie finder</title>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img style="height: 60px; width: 150px;" src="../../../../../../dist/img/rommate.jpg">
   
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <span style="color: #002266; padding-left: 110px; font-family:Castellar; "> Welcome {{Auth::user()->Name}}</span>
         
     
      </ul>

      <a style="color: black;" class="nav-link" href="/logout">Logout <i style="color: black; font-size:18px;" class="fas fa-sign-out-alt"></i> </a>
       
        
      
    </div>
  </div>
</nav>
<br><br>
 <div class="h1 text-center" >
    <span style="color: #001133;">Roommie</span><span style="color: #002266;">Finder</span> 
    
</div>
<h3 style="text-align: center;">Choose the appropriate roommate:</h3>
<div class="owl-carousel owl-theme mt-5">
    <div class="owl-item">
        <div class="card">
            <div> Hamza Waled </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/hamzapic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description. </div>
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="card">
            <div class="name"> Nizar Sabbar </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/nizarpic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description. </div>
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="card">
            <div class="name"> Achraf Soualhia </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/achrafpic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description. </div>
            
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="card">
            <div class="name"> Walid Mezrioui </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/walidpic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description. </div>
            
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
            
        </div>
    </div>
    <div class="owl-item">
        <div class="card">
            <div class="name"> Yassine El Mechrafi </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/mechrafipic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description.</div>
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="card">
            <div class="name"> Abderahim Outziouar </div>
            <br>
            <div class="img-card"> <img src="../../../../../../dist/img/outzipic.jpg" alt=""> </div>
            <div class="testimonial mt-4 mb-2"> Description Description Description Description Description Description Description Description Description Description Description Description. </div>
            <div> <button style="float: left;" type="button" class="btn btn-danger"> <i class="fa fa-thumbs-down"></i></button> 
                <button style="float: right;"type="button" class="btn btn-success"> <i class="fa fa-thumbs-up"></i></button>
            </div>
        </div>
    </div>
</div>
</body>
 <footer style="background-color: #000d1a;" class="page-footer">
     <div class="container">
         <div class="row">
             <div class="col l6 s12">
                 <div class="h2 text-center" ><span style="color: #800000;">Roommie</span><span style="color:  #b30000;">Finder</span> </div>
                 
                 <p class="grey-text text-lighten-4">This application will help students to find the most suitable roommate. </p>
             </div>
             <div class="col l4 offset-l1 s12">
                <h4 style="color:#a6a6a6;">Contact</h4>
                 
                 <ul>
                     <li>H.waled@aui.ma</li>
                     <li>N.sabbar@aui.ma</li>
                     <li>A.soualhia@aui.ma</li>
                     
                 </ul>
             </div>
             <div class="col l4 offset-l2 s12">
                 <h4 style="color:#a6a6a6;">Policy</h4>
                 <ul>
                     <li>Return</li>
                     <li>Security</li>
                     <li>Privacy</li>
                     
                 </ul>
             </div>
             <div class="col l4 offset-l2 s12">
                <h4 style="color:#a6a6a6;">Social</h4>
                 
                 <ul>
                     <li>Facebook</li>
                     <li>Linkedin</li>
                     <li>Instagram</li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="footer-copyright">
         <div class="container"> © 2021 Copyright Agile Software Engineering and DevO (CSC 4307) 
 </footer>
</html>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif
 }

/* body {
     background: linear-gradient(to right, #101c81, #2a6ba3);
     min-height: 100vh
 }*/

 .owl-carousel .owl-item {
     transition: all 0.3s ease-in-out
 }

 .owl-carousel .owl-item .card {
     padding: 30px;
     position: relative
 }

 .owl-carousel .owl-stage-outer {
     overflow-y: auto !important;
     padding-bottom: 40px
 }

 .owl-carousel .owl-item img {
     height: 200px;
     object-fit: cover;
     border-radius: 6px
 }


 .owl-carousel .owl-item .card {
     opacity: 0.2;
     transform: scale3d(0.8, 0.8, 0.8);
     transition: all 0.3s ease-in-out
 }

 .owl-carousel .owl-item.active.center .card {
     opacity: 1;
     transform: scale3d(1, 1, 1)
 }

 .owl-carousel .owl-dots {
     display: inline-block;
     width: 100%;
     text-align: center
 }

 .owl-theme .owl-dots .owl-dot span {
     height: 20px;
     background: #2a6ba3 !important;
     border-radius: 2px !important;
     opacity: 0.8
 }

 .owl-theme .owl-dots .owl-dot.active span,
 .owl-theme .owl-dots .owl-dot:hover span {
     height: 13px;
     width: 13px;
     opacity: 1;
     transform: translateY(2px);
     background: #83b8e7 !important
 }

 @media(min-width: 480.6px) and (max-width: 575.5px) {
     .owl-carousel .owl-item .card .name {
         left: 24%
     }
 }

 @media(max-width: 360px) {
     .owl-carousel .owl-item .card .name {
         left: 30%
     }
 }







</style>

<script>
    $(document).ready(function () {
var silder = $(".owl-carousel");
silder.owlCarousel({
autoplay: false,

autoplayHoverPause: false,
items: 1,
stagePadding: 20,
center: true,
nav: false,
margin: 50,
dots: true,
loop: true,
responsive: {
0: { items: 1 },
480: { items: 2 },
575: { items: 2 },
768: { items: 2 },
991: { items: 3 },
1200: { items: 4 }
}
});
});
</script>
