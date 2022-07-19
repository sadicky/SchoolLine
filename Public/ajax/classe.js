    function refreshPage() {
    location.reload();
  }

$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let niv = $("#niv").val();
    let dep = $("#dep").val();

    $.post(
      "Public/script/addcla.php", {
        niv: niv,
        dep: dep,
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





// $(document).on("click", ".det", function () {
//   afterDel();
//   let id = $(this).attr("id");
//     $.ajax({
//       url: "public/script/affafacid.php",
//       method: "POST",
//       data: {
//         id: id
//       },
//       success: function (data) {
//       $("#details").modal("show");
//         $("#adminid")
//           .html(data)
//           .slideDown();
        
//       }
//     });
//   });


// $(document).on("click", ".update", function () {
//   var id = $(this).attr("id");
//   $.ajax({
//     url: "public/script/affadidmod.php",
//     method: "POST",
//     data: {
//       id: id
//     },
//     dataType: "json",
//     success: function (data) {
//       $("#fac").val(data.FACULTE);
//       $("#doyen").val(data.IDDOYEN);
//       $("#aa").val(data.AA);
//       $("#update").modal("show");
//       $(".modal-title").text("Modifier Admin");
//       $("#id").val(id);
//     }
//   });
// });
  
  $(document).on("click", ".activer", function (event) {
  event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cette Classe ? ")) {
      $.ajax({
        url: "Public/script/activcla.php",
        method: "POST",
        data: {
          id: id
        },
        success: function (data) {
          setInterval(refreshPage, 1000);
        }
      });
    } else {
      return false;
    }
  });
  
  $(document).on("click", ".desactiver", function (event) {
	event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous desactiver cette classe? ")) {
      $.ajax({
        url: "Public/script/desactivcla.php",
        method: "POST",
        data: {
          id: id
        },
        success: function (data) {
          setInterval(refreshPage, 1000);
        }
      });
    } else {
      return false;
    }
  });
});