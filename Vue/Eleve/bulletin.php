
<?php if(isset($_SESSION['logged'])) { ?>
<?php $title = "Bulletin - " . $getE->NOM . " " . $getE->PRENOM;
include 'Public/includes/header.php';
?>
	<body>
		<div class="row" style="padding-top: 60px;margin: 8px;">
			<?php include 'Public/includes/menuadmin.php'; ?>
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-bordered table-condensed">
						<?php
						// var_dump($pond);
						?>
						<tr>
							<td colspan="13">
								<div class="row">
									<div class="col-md-2"> </div>
									<div class="col-md-8" align="center">
										<b>REPUBLIQUE DEMOCRATIQUE DU CONGO<br>
											MINISTERE DE L'ENSEIGNEMENT PRIMAIRE, SECONDAIRE<br> ET PROFESSIONNEL</b> <br>&nbsp;
									</div>
									<div class="col-md-2"> </div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="13">
								<div class="row">
									<div class="col-md-2"><b> N ID:</b></div>
									<div class="col-md-8">
										<table class="table table-bordered" border="1px" width="100%">
											<tr>
												<td><b>6</b></td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="col-md-2"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="13">
								<div class="row container">
									<div class="col-md-6">
										<div class="form-group ">
											<span>PROVINCE:</span> <b>SUD-KIVU</b>
										</div>
										<div class="form-group">
											<span>VILLE:</span> <b>UVIRA</b>
										</div>
										<div class="form-group">
											<span>COMMUNE/TER:</span> <b>UVIRA</b>
										</div>
										<div class="form-group">
											<span>ECOLE:</span> <b>INSTITUT MWANGA D'UVIRA</b>
										</div>
										<div class="form-group">
											<span>CODE:</span><b> 2 - 6 3 0 6 0 2 </b>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<span>ELEVE: <b><?php echo strtoupper($getE->NOM) . " " . strtoupper($getE->PRENOM); ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>SEXE: <b><?= $getE->SEXE ?></b>
										</div>
										<div class="form-group">
											<span>NE(E) A: <b><?= strtoupper($getE->EMAIL) ?></b> &nbsp;&nbsp;&nbsp;LE <b><?= strtoupper($getE->DOB) ?></b></span>
										</div>
										<div class="form-group">
											<span>CLASSE: </span><b><?= strtoupper($getE->CLASSE) ?></b>
										</div>
										<div class="form-group">
											<span>NUM PERM: </span>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="13" align='center'><span>BULLETIN DE LA <b><?= strtoupper($getE->CLASSE) ?> - <?= strtoupper($getE->OPT) ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ANNEE SCOLAIRE:<b><?= $getE->AS ?></b></span></td>
						</tr>
						<tr>
							<td colspan="2" rowspan="2">
								<h4><br>BRANCHES</h4>
							</td>
							<td colspan="4" align="center"><b>PREMIER SEMESTRE</b></td>
							<td colspan="4" align="center"><b>DEUXIEME SEMESTRE</b></td>
							<td align="center"><b>TOTAL</b></td>
							<td colspan="2" align="center"><b>REPECHAGE</b></td>
						</tr>
						<tr>
							<td>1èP</td>
							<td>2èP</td>
							<td>Exam</td>
							<td>Tot</td>
							<td>3èP</td>
							<td>4èP</td>
							<td>Exam</td>
							<td>Tot</td>
							<td>Pts</td>
							<td>%</td>
							<td>Prof</td>
						</tr>

						<?php
						$var = 0;
						$pond = 0;
						$pond2 = 0;
						$top1 = 0;
						$top2 = 0;
						$top3 = 0;
						$maxg = 0;
						$pour = 0;
						$total = 0;
						$total1 = 0;
						$total2 = 0;
						$total3 = 0;
						$total4 = 0;
						$total5 = 0;
						foreach ($getCC as $a) {
							$pond = $a->POND;
							$maxg += $a->POND;
							if ($var == 0) { ?>
								<tr>
									<th colspan="2">MAXIMA</th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 4 ?></td>
									<th><?= $pond / 2 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 4 ?></td>
									<th><?= $pond / 2 ?></th>
									<th><?= $pond ?></th>
									<th colspan="2" style="background-color:gray ;"></th>
								</tr>
								<tr>
									<td colspan="2"><?= $a->COURS ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 1);
									// var_dump($notes1->NOTES);
									$total += $top1 = intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?> </td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 2);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total1 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 3);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total2 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top1; ?></td>

									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 4);
									// var_dump($notes1->NOTES);
									$top2 = intval(@$notes1->NOTES);
									$total3 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 5);
									// var_dump($notes1->NOTES);
									$top2 += intval(@$notes1->NOTES);
									$total4 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 6);
									// var_dump($notes1->NOTES);
									$top2 = $top2 + intval(@$notes1->NOTES);
									$total5 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top2; ?></td>
									<td><?= intval($top2) + intval($top1); ?></td>
									<td></td>
									<td></td>
								</tr>
							<?php
								$var = 1;
								$pond2 = $a->POND;
							} elseif ($pond == $pond2) { ?>
								<tr>
									<td colspan="2"><?= $a->COURS ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 1);
									// var_dump($notes1->NOTES);
									$total += $top1 = intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?> </td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 2);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total1 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 3);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total2 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top1; ?></td>

									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 4);
									// var_dump($notes1->NOTES);
									$top2 = intval(@$notes1->NOTES);
									$total3 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 5);
									// var_dump($notes1->NOTES);
									$top2 += intval(@$notes1->NOTES);
									$total4 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 6);
									// var_dump($notes1->NOTES);
									$top2 = $top2 + intval(@$notes1->NOTES);
									$total5 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top2; ?></td>
									<td><?= intval($top2) + intval($top1); ?></td>
									<td></td>
									<td></td>
								</tr>

							<?php } else { ?>

								<tr>
									<th colspan="2">MAXIMA</th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 4 ?></td>
									<th><?= $pond / 2 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 8 ?></th>
									<th><?= $pond / 4 ?></td>
									<th><?= $pond / 2 ?></th>
									<th><?= $pond ?></th>
									<th colspan="2" style="background-color:gray ;"></th>
								</tr>
								<tr>
									<td colspan="2"><?= $a->COURS ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 1);
									// var_dump($notes1->NOTES);
									$total += $top1 = intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?> </td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 2);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total1 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 3);
									// var_dump($notes1->NOTES);
									$top1 = $top1 + intval(@$notes1->NOTES);
									$total2 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top1; ?></td>

									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 4);
									// var_dump($notes1->NOTES);
									$top2 = intval(@$notes1->NOTES);
									$total3 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 5);
									// var_dump($notes1->NOTES);
									$top2 += intval(@$notes1->NOTES);
									$total4 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<?php
									$notes = new Note();
									$notes1 = $notes->getNotes($getE->MATRICULE, $a->ID, 6);
									// var_dump($notes1->NOTES);
									$top2 = $top2 + intval(@$notes1->NOTES);
									$total5 += intval(@$notes1->NOTES);
									?>
									<td><?php if (@$notes1->NOTES) echo @$notes1->NOTES;
										else echo '-'; ?></td>
									<td><?= $top2; ?></td>
									<td><?= intval($top2) + intval($top1); ?></td>
									<td></td>
									<td></td>
								</tr>

						<?php
								$pond2 = $a->POND;
							}
						} ?>
						<tr>
							<td colspan="2"><b>MAX. GENERAUX</b></td>
							<th><?= $maxg / 8 ?></td>
							<th><?= $maxg / 8 ?></th>
							<th><?= $maxg / 4 ?></td>
							<th><?= $maxg / 2 ?></th>
							<th><?= $maxg / 8 ?></td>
							<th><?= $maxg / 8 ?></th>
							<th><?= $maxg / 4 ?></td>
							<th><?= $maxg / 2 ?></th>
							<th><?= $maxg ?></th>
							<td rowspan="6" colspan="2">
								<ul>
									<li>Passe
										<span><input type="checkbox" name="" id="" checked></span>
									</li>
									<li>Double</li>
									<li>A echoué</li>
								</ul>
								<span>Le <?php echo date('d-m-Y'); ?></span> <br>
								LE CHEF D'ETABL.<br>
								<h6>Sceau de l'Ecole</h6>
							</td>
						</tr>
						<tr>
							<td colspan="2"><b>TOTAUX</b></td>
							<td><?= $total ?></td>
							<td><?= $total1 ?></td>
							<td><?= $total2 ?></td>
							<td><?php $tot1 = intval($total) + intval($total1) + intval($total2);
								echo $tot1; ?></td>
							<td><?= $total3 ?></td>
							<td><?= $total4 ?></td>
							<td><?= $total5 ?></td>
							<td><?php $tot2 = intval($total3) + intval($total4) + intval($total5);
								echo $tot2;  ?></td>
							<td><?= intval($tot1) + intval($tot2) ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>POURCENTAGE</b></td>
							<td>
								<b>
									<?php $maxg1 = ($maxg / 8);
									$pour = ($total * 100) / ($maxg1);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg2 = ($maxg / 8);
									$pour = ($total1 * 100) / ($maxg2);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg3 = ($maxg / 4);
									$pour = ($total2 * 100) / ($maxg3);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg4 = ($maxg / 2);
									$pour = ($tot1 * 100) / ($maxg4);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg5 = ($maxg / 8);
									$pour = ($total3 * 100) / ($maxg5);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg6 = ($maxg / 8);
									$pour = ($total4 * 100) / ($maxg6);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg7 = ($maxg / 4);
									$pour = ($total5 * 100) / ($maxg7);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $maxg8 = ($maxg / 2);
									$pour = ($tot2 * 100) / ($maxg8);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
							<td>
								<b>
									<?php $t = $tot1 + $tot2;
									$pour = ($t * 100) / ($maxg);
									$nb = 0;
									$nb = number_format($pour, 2, ',', ' ');
									echo $nb . "%";
									?>
								</b>
							</td>
						</tr>
						<tr>
							<td colspan="2"><b>PLACE/NbrE</b></td>
							<td><?php
								$place = $notes->getRank($getE->IDCLA, $getE->MATRICULE, '1');
								echo $pond;
								?>
							</td>
							<td>10</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td colspan="2"><b>APPLICATION</b></td>
							<td>6</td>
							<td>10</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td colspan="2"><b>CONDUITE</b></td>
							<td>6</td>
							<td>10</td>
							<td>1</td>
							<td></td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
						</tr>
						<tr>
							<td colspan="2"><b>SIGN. RESPO.</b></td>
							<td colspan="4"></td>
							<td colspan="4"></td>
							<td></td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td colspan="13">
								<div class="row container"><br>
									<p style="margin-left:20px"> L'élève ne pourra passer dans la classe supérieure s'il n'a pas subi avec succès un examen de
										2<sup>e</sup> session en <br>
										............................................................................................................................................................
									</p>
									<div class="col-md-4"><br>
										<span>L'ELEVE PASSE DANS LA CLASSE SUPERIEURE <input type="checkbox" name="" id="" checked></span><br>
										<span for="">L'ELEVE A ECHOUE</span><br>
										<span for="">L'ELEVE DOUBLE LA CLASSE</span>
										<hr>
										<div class="row">
											<div class="col-md-6">
												<h5>Signature de l'Elève</h5>
											</div>
											<div class="col-md-6"></div>
										</div>
									</div>
									<div class="col-md-4"><br><br><br><br><br><br>
										<h5>Sceau de l'Ecole</h5>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>FAIT A UVIRA,LE <?php echo date('d-m-Y'); ?></span>
										</div><br><br>
										<div align="center" class="form-group">
											<span>LE CHEF D'ETABLISSEMENT<br>NOM ET SIGNATURE</span>
										</div><br><br><br>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
<?php } else {
	header('Location:index.php?page=non');
} ?>

</html>
<?php
include_once 'Public/modals/reseleve.php';
// include_once 'Public/modals/paieleve.php'; 
?>
<script type="text/javascript" src="Public/ajax/etudiant.js"></script>
<script type="text/javascript" src="Public/ajax/joinniv.js"></script>