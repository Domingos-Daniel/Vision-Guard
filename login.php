<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <style>
    /* Estilo adicional para o botão flutuante */
    .floating-button {
      position: fixed;
      top: 20px;
      right: 10px;
    }
  </style>
</head>
<!-- Botão flutuante para voltar -->
<!-- Botão flutuante para voltar à última página -->
<a href="javascript:history.back()" style="font-weight: 600;" class="btn btn-danger py-2 px-4 floating-button">Voltar</a>


<section class="vh-100" style="background-color: #e6a800;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Entrar</h3>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Palavra Passe</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Lembrar palavra passe </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Entrar com google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Entrar com facebook</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>