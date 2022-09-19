<?php @$title = $_SESSION['NOMS'];
include 'public/includes/header.php'; ?>

<?php  if (isset($_SESSION['logged'])){ ?>
	<body > 
		<div class="row">  
			</div><br>
				 <?php include 'Public/includes/menuencodeur.php';?>
				<div class="container">  
				
				</div>
    </body>
	
<?php }else{ 
header('Location:index.php?page=non_a');
 } ?>
  
    </html>  