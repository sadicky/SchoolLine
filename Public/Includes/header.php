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
      <link rel="stylesheet" href="Public/Bootstrap-3/assets/font-awesome/css/font-awesome.min.css">

      <!-- DataTables CSS -->
      <link href="Public/Bootstrap-3/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <!-- <link href="Public/Bootstrap-3/css/dataTables/jquery.dataTables.min.css" rel="stylesheet"> -->
      <!-- DataTables Responsive CSS -->
      <link href="Public/Bootstrap-3/css/dataTables/dataTables.responsive.css" rel="stylesheet">

      <link rel="stylesheet" href="Public/Bootstrap-3/css/sidebarNavigation.css">
      <link rel="stylesheet" href="Public/Bootstrap-3/css/smart_wizard.css">

      <!-- select2 CSS -->
      <link href="Public/Bootstrap-3/select/css/select2.css" rel="stylesheet" type="text/css" />
      <link href="Public/Bootstrap-3/select/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!--Alert -->
      <link rel="stylesheet" href="Public/Bootstrap-3/alert/dist/sweetalert2.min.css">


      <!-- js -->
      <script src="Public/Bootstrap-3/js/jquery.js"></script>
      <!-- <script src="Public/Bootstrap-3/js/jquery-ui.js"></script> -->
      <script src="Public/Bootstrap-3/js/bootstrap.min.js"></script>
      <!-- <script src="Public/Bootstrap-3/js/jquery.smartWizard.js"></script> -->
      <script src="Public/Bootstrap-3/js/dataTables/jquery.dataTables.min.js"></script>
      <script src="Public/Bootstrap-3/js/dataTables/dataTables.bootstrap.min.js"></script>
      <!-- <script src="Public/Bootstrap-3/dialog/js/dialogify.min.js"></script> -->

      <!-- Drop-down -->
      <script src="Public/Bootstrap-3/assets/js/dropdown-menu/dropdown-menu.js"></script>

      <!-- Fancybox -->
      <script src="Public/Bootstrap-3/assets/js/fancybox/jquery.fancybox.pack.js"></script>
      <script src="Public/Bootstrap-3/assets/js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->

      <!-- Responsive videos -->
      <script src="Public/Bootstrap-3/assets/js/jquery.fitvids.js"></script>

      <script src="Public/Bootstrap-3/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="Public/Bootstrap-3/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="Public/Bootstrap-3/jszip/dist/jszip.min.js"></script>
      <script src="Public/Bootstrap-3/pdfmake/build/pdfmake.min.js"></script>
      <script src="Public/Bootstrap-3/pdfmake/build/vfs_fonts.js"></script>

      <script src="Public/Bootstrap-3/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="Public/Bootstrap-3/datatables.net-buttons/js/buttons.print.min.js"></script>
      <!-- <script src="Public/Bootstrap-3/js/export-table-data.js"></script> -->

      <!-- Audio player -->
      <script src="Public/Bootstrap-3/assets/js/audioplayer/audioplayer.min.js"></script>

      <!-- Pie charts -->
      <script src="Public/Bootstrap-3/assets/js/jquery.easy-pie-chart.js"></script>
      <!-- alert -->
      <script src="Public/Bootstrap-3/alert/dist/sweetalert2.min.js"></script>

		<!-- Select2 JavaScript -->
        <script src="Public/Bootstrap-3/select/js/select2.js" ></script>
    <script src="Public/Bootstrap-3/select/select2-init.js" ></script>
      <script>
        $(document).ready(function() {
          $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
            ]
          });
        });        
            // For select 2
            $(".select2").select2();
      </script>
    </head>