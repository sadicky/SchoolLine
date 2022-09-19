<?php $title = 'Non Autorisé';
include 'public/includes/header.php'; ?>

<body>
  <div class="row">
  </div><br>
  <div class="container" style="margin-top:60px">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Accès non autorisé</b></div>
          <div class="panel-body" style="text-align:center;">
            <main>
              <div class="page-error tile">
                <h3><span class="glyphicon glyphicon-exclamation"></span> Vous n'avez pas droit d'accéder à cette page. Si vous êtes reconnu, vous devez vous connecter d'abord pour avoir cet accès,si non contacter l'administration pour plus d'information.</h3>
                <hr> <p><a class="btn btn-primary btn-md" href="index.php?page=login"><span class="glyphicon glyphicon-home"></span> Aller à la page de connexion</a></p>
              </div>
            </main>
          </div>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
</body>

</html>