$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let montant = $("#montant").val();
    let fac = $("#fac").val();
    let aa = $("#aa").val();
    let dep = $("#dep").val();
    let niv = $("#niv").val();
    $.post(
      "Public/script/addfs.php", {
        montant: montant,
        fac: fac,
        aa: aa,
        niv: niv,
        dep: dep
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

  
function refreshPage() {
  location.reload();
}
  
  $(document).on('click','.validate',function () {
    $.ajax({
      url: "Public/script/addmineleve.php",
      method: "POST",
      data: $("#payer").serialize(),
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        setInterval(refreshPage, 1000);
      }
    });
    return false;
  });



  $(document).on("click", ".update", function () {
    var id = $(this).attr("id");
    $.ajax({
      url: "public/script/afffamod.php",
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