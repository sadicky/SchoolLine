function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let montant = $("#montant").val();
    let motif = $("#motif").val();
    let aa = $("#aa").val();
    $.post(
      "Public/script/addaf.php", {
       montant: montant,
        motif: motif,
        aa: aa
      },
      function (donnees) {
        $("#message")
          .html(donnees)
          .slideDown();
         $("#formulaire")[0].reset();
        $("#Ajouter").modal("hide");
        setInterval(refreshPage, 1000);
      }
    );
    return false;
  });
 
});