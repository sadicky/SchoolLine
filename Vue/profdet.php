<?php $title = "Détail - Prof";
include 'public/includes/header.php';
?>

<body>
	<div class="row" style="padding-top: 60px;margin: 8px;">
		<?php include 'Public/includes/menuadmin.php'; ?>
		<div class="col-sm-2">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a data-toggle="tab" href="#home">&nbsp;Mes Cours</a></li>
				<li><a data-toggle="tab" href="#menu1">&nbsp;Notification
				<?php $not_read=0; if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo 2; ?></span>
				<?php } ?>
				</a></li>
				<li><a href="teacher_message.php">&nbsp;Message
					
				<?php $not_read=0; if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo 2; ?></span>
				<?php } ?>
				</a></li>
				<li><a href="teacher_backack.php">&nbsp;Backpack</a></li>
				<li><a href="add_downloadable.php">&nbsp;Add Downloadables</a></li>
				<li><a href="add_announcement.php">&nbsp;Add Announcement</a></li>
				<li><a href="add_assignment.php">&nbsp;Add Assignment</a></li>
				<li><a href="teacher_quiz.php">&nbsp;Quiz</a></li>
				<li><a href="teacher_share.php">&nbsp;Shared Files</a></li>
			</ul>
		</div>
		<div class="col-sm-10">			
		<ul class="breadcrumb">
                        <li><a href=""><b>Professeur</b></a><span class="divider"></span></li>
                        <li><a href="#"><?= $getPi->NOMS ?></a></li>
                    </ul>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
						<div class='col-sm-12' id="message"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<h4 class="text-primary">&nbsp;&nbsp;&nbsp;Mes Cours</h4>
									<p>
										<?php if ($getPc == false) {?>											
									<div class="alert alert-info"><span class="glyphicon glyphicon-info-sign"></span> Ce prof n'a aucun cours</div>
										<?php } else {
											foreach ($getPc as $pc) {?>						
												<ul style="text-align:center;display: inline-block;">
												<li style="display: inline;">
												<a href="my_students.php?id=<?php echo 1; ?>">
													<img src="Public/images/thumbnails.jpg" width="124" height="140" class="img-thumbnail" alt="">
													<div>
														<span>
															<p><?php echo $pc->COURS . " - " . $pc->CLASSE;?></p>
														</span>
													</div>
												</a>
												<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>
												</li></ul>
											<?php } 
											}
										?>
									</p>
								</div>
								<div id="menu1" class="tab-pane fade">
									<h3>Menu 1</h3>
									<p>Java is a high level, robust, secured and object-oriented programming language.</p>
								</div>
								<div id="menu2" class="tab-pane fade">
									<h3>Menu 2</h3>
									<p>SQL is just a query language, it is not a database. To perform SQL queries,
										you need to install any database for example Oracle, MySQL, MongoDB, PostGre SQL, SQL Server, DB2 etc.</p>
								</div>
								<div id="menu3" class="tab-pane fade">
									<h3>Menu 3</h3>
									<p>The C Language is developed for creating system applications that direct
										interacts to the hardware devices such as drivers, kernals etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</body>

</html>
<?php
include_once 'Public/modals/addcla.php'; ?>
<script type="text/javascript" src="Public/ajax/prof.js"></script>
<script type="text/javascript" src="Public/ajax/joinniv.js"></script>