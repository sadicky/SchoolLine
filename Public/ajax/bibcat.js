$(function(){
  getCountcat();
    $("#formcat").submit(function () {
        var cat = $("#cat").val();
        var status = $("#status").val();
        $.ajax({
            url: "Public/script/addbibcat.php",
            method: "POST",
            data: {
    				cat : cat,
    				status : status
			},
            success: function (donnees) {
                $('#message').html(donnees).slideDown();
				        $("#formcat")[0].reset();
                $("#Categories").modal("hide");
            }
        });
    });

    function getCountcat(){
    $.post("Public/script/affcountcat.php", function (data) {
      $("#nbrCat").html(data);
    });
    }
	  //recharger cette fonction toute les secondes
 setInterval(getCountcat, 1000);

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