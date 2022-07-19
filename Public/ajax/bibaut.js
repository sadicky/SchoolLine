$(function(){
  getCountAut();
    $("#formaut").submit(function () {
        var aut = $("#aut").val();
        $.ajax({
            url: "Public/script/addbibaut.php",
            method: "POST",
            data: {
    				aut : aut
			},
            success: function (donnees) {
                $('#messageaut').html(donnees)
                .slideDown();
				        $("#formaut")[0].reset();
                $("#Auteur").modal("hide");
            }
        });
    });

    function getCountAut(){
    $.post("Public/script/affcountaut.php", function (data) {
      $("#nbrAut").html(data);
    });
    }
	  //recharger cette fonction toute les secondes
setInterval(getCountAut, 1000);

 $(document).on("click", ".delete", function () {
  getAut();
  let id = $(this).attr("id");
  if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
    $.ajax({
      url: "Public/script/deletebibcat.php",
      method: "POST",
      data: {
        id: id
      },
      success: function (data) {
        $("#message")
          .html(data)
          .slideDown();
        getAut();
      }
    });
  } else {
    return false;
  }
});
});