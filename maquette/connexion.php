<?php

$data = [
    "title" => "Header"
];

/// Vue 
ob_start();
?>
<!doctype html>
<html lang="fr">

<?php
include("template/header.html");
?>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    
  <div class="container col-lg-6 offset-lg-5">
    <div class="col-9">
      <div class="card" style="width: 18rem;">
          <div class="card-body ">
            <h5 class="card-title">Connexion</h5>
            <form action="dashboard.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="mdp_oublie.html" class="card-link d-block">Mot de passe oublié ? </a>
            <a href="inscription.html" class="card-link d-block">Se créer un compte</a>
          </div>
      </div>
    </div>    
  </div>

  <?php

include("template/footer.html");
?>

</body>
</html>

<?php
ob_end_flush();

// Retour programme principal