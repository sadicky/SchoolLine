<?php
require_once '../../Model/prof.class.php';
$prof = new Prof();
$id=isset($_POST['id'])?$_POST['id']:'';
if($id)
{
    $output = '';
    $popProf = $prof->getProfId($id);
     foreach($popProf as $v){
        $output ="
        <table class='table table-bordered table-condensed table-stripped'>
        <tr>
            <td>MATRICULE</td>
            <td><label>".$v->MATRICULE."</label></td>
        </tr>
        <tr>
            <td>NOMS</td>
            <td><label>".$v->NOMS."</label></td>
        </tr>
        <tr>
            <td>SEXE</td>
            <td><label>".$v->SEXE."</label></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><label>".$v->EMAIL."</label></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><label>".$v->DOB."</label></td>
        </tr>
        <tr>
            <td>TEL</td>
            <td><label>".$v->TEL."</label></td>
        </tr>
        <tr>
            <td>DATE AJOUT</td>
            <td><label>".$v->DATEINS."</label></td>
        </tr>
        <tr>
            <td>ACCESS</td>
            <td><label>".$v->ACCESS."</label></td>
        </tr>
        </table>";
    }
    echo $output;
}
?>
