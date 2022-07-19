    <!DOCTYPE html>
    <html lang="fr">

    <head>
      <meta charset="utf-8">
      <title><?= $title ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="Public/Images/logo.jpg" type="image/x-icon">
      <!-- css -->
      <link rel="stylesheet" href="Public/Bootstrap-3/css/bootstrap.css">

      <!-- DataTables CSS -->
      <link href="Public/Bootstrap-3/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="Public/Bootstrap-3/css/dataTables/dataTables.responsive.css" rel="stylesheet">

      <link rel="stylesheet" href="Public/Bootstrap-3/css/sidebarNavigation.css">
      <link rel="stylesheet" href="Public/Bootstrap-3/css/smart_wizard.css">

      <!--Alert -->
      <link rel="stylesheet" href="Public/Bootstrap-3/alert/dist/sweetalert2.min.css">


      <!-- js -->
      <script src="Public/Bootstrap-3/js/jquery.js"></script>
      <script src="Public/Bootstrap-3/js/jquery-ui.js"></script>
      <script src="Public/Bootstrap-3/js/bootstrap.min.js"></script>
      <script src="Public/Bootstrap-3/js/jquery.smartWizard.js"></script>
      <script src="Public/Bootstrap-3/js/dataTables/jquery.dataTables.min.js"></script>
      <script src="Public/Bootstrap-3/js/dataTables/dataTables.bootstrap.min.js"></script>
      <script src="Public/Bootstrap-3/dialog/js/dialogify.min.js"></script>
      <!-- alert -->
      <script src="Public/Bootstrap-3/alert/dist/sweetalert2.min.js"></script>
      <script>
        $(document).ready(function() {
          $('#dataTables-example').DataTable({
            responsive: true
          });
        });
      </script>
    </head>