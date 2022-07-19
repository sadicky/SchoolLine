$(function () {
  getLivreDispo();
  $("#formliv").submit(function () {
    var cat = $("#cat").val();
    var aut = $("#aut").val();
    var liv = $("#liv").val();
    var isbn = $("#isbn").val();
    $.ajax({
      url: "Public/script/addliv.php",
      method: "POST",
      data: {
        cat: cat,
        aut: aut,
        liv: liv,
        isbn: isbn
      },
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#formliv")[0].reset();
        $("#Livre").modal("hide");
      }
    });
  });

  function getLivreDispo() {
    $.post("Public/script/afflivdispo.php", function (data) {
      $("#nbrlivredispo").html(data);
    });
  }
  //recharger cette fonction toute les secondes
   setInterval(getLivreDispo, 1000);

  //  $(document).on("click", ".delete", function () {
  //   //getbibcat();
  //   let id = $(this).attr("id");
  //   if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
  //     $.ajax({
  //       url: "public/script/deletebibcat.php",
  //       method: "POST",
  //       data: {
  //         id: id
  //       },
  //       success: function (data) {
  //         $("#message")
  //           .html(data)
  //           .slideDown();
  //        // getbibcat();
  //       }
  //     });
  //   } else {
  //     return false;
  //   }
  // });
});