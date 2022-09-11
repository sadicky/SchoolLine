<?php
require_once '../../Model/notes.class.php';
$notes = new Note();
// $id = $_POST['idp'];
$id = 5;
$getN = $notes->getNotesPeriode($id, 1);
// $getInsc = $getEleve->getEleveIns($id);
var_dump($getN);
?>
<table class="table table-bordered table-condensed table-stripped">
    <thead style="text-align:'center'">
    <th>Cours</th>
    <th>Demandé</th>
    <th>Obtenu</th>
    </thead>
    <tbody>
        <?php foreach($getN as $n):?>
        <tr>
        <td><?=$n->COURS?></td>
        <td><?=$n->NOTED?></td>
        <td><?=$n->NOTES?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>