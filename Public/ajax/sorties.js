$(document).ready(function () {
  getSortie();
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let con = $("#con").val();
    let des = $("#des").val();
    let dat = $("#dat").val();
    let niv = $("#niv").val();
    $.post(
      "public/script/addsorties.php", {
       con: con,
        des: des,
        dat: dat,
        niv: niv
      },
      function (donnees) {
        $("#message")
          .html(donnees)
          .slideDown();
         $("#formulaire")[0].reset();
        $("#Ajouter").modal("hide");
        getSortie();
      }
    );
    return false;
  });

  function getSortie() {
    $.post("public/script/affsorties.php", function (data) {
      $("#sorties").html(data);
    });
  }
  

  //recharger cette fonction toute les secondes
  setInterval(getSortie, 1000);
 
});