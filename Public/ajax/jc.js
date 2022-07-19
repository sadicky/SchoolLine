$(document).ready(function () {
  getJC();
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let datedeb = $("#datedeb").val();
    let motif = $("#motif").val();
    let datefin = $("#datefin").val();
    $.post(
      "public/script/addjc.php", {
       datedeb: datedeb,
        motif: motif,
        datefin: datefin
      },
      function (donnees) {
        $("#message")
          .html(donnees)
          .slideDown();
         $("#formulaire")[0].reset();
        $("#Ajouter").modal("hide");
        getJC();
      }
    );
    return false;
  });

  function getJC() {
    $.post("public/script/affjc.php", function (data) {
      $("#jc").html(data);
    });
  }
  

  //recharger cette fonction toute les secondes
  setInterval(getJC, 1000);
 
});