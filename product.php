<!DOCTYPE html>
<html lang="pt">
   
   <!-- body -->
   <body class="main-layout product_page">
      
   <?php $paginaAtual = 'cursos'; include_once './header-main.php' ?>
      <!-- end header -->
       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nossos Cursos</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     
                     <span>Trazemos para si os melhores cursos profissionais, à um preço que cabe no seu bolso, corra e marque a sua vaga!</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  
                  <div class="card" style="width: 18rem;">
                     <img src="./images/contabilidade-min-1920x1280.webp" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Contabilidade Geral</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning text-white">Go somewhere</a>
                     </div>
                  </div>
               </div>
              
              
               
               </div>
            </div>
         </div>
        
      </div>
      <!--  footer --> 
      
   <?php include_once "./footer.php"; ?>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>