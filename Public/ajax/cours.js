function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let cours = $("#cours").val();
    let pond = $("#pond").val();
    let nbh = $("#nbh").val();
    let aa = $("#aa").val();
    let niv = $("#niv").val();

    $.post(
      "public/script/addcours.php", {
        cours: cours,
        pond: pond,
        nbh: nbh,
        aa: aa,
        niv: niv
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



$(document).on("click", ".update", function () {
  var id = $(this).attr("id");
  $.ajax({
    url: "public/script/affcoursmod.php",
    method: "POST",
    data: {
      id: id
    },
    dataType: "json",
    success: function (data) {
      $("#fac").val(data.FACULTE);
      $("#doyen").val(data.IDDOYEN);
      $("#aa").val(data.AA);
      $("#update").modal("show");
      $(".modal-title").text("Modifier Admin");
      $("#id").val(id);
    }
  });
});
  
});