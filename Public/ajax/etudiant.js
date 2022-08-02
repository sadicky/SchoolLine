function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $("#formulaire").submit(function () {
    var mat = $("#mat").val();
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var dob = $("#dob").val();
    var sexe = $("#sexe").val();
    var tel = $("#tel").val();
    var email = $("#email").val();
    var aa = $("#aa").val();
    var niv = $("#niv").val();
    var eco = $("#eco").val();
    $.ajax({
      url: "Public/script/addetud.php",
      method: "POST",
      data: {
        mat: mat,
        nom: nom,
        prenom: prenom,
        dob: dob,
        sexe: sexe,
        tel: tel,
        email: email,
        niv: niv,
        eco: eco,
        aa: aa,
      },
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#formulaire")[0].reset();
        $("#Ajouter").modal("hide");
        setInterval(refreshPage, 1000);
      }
    });
  });
  $('.resultats').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/vieweleveres.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#reseleve').html(data);
        $("#Resultats").modal("show"); 
      }
    });
  });
  
  $('.notesind').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewelevenotesi.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#notesindi').html(data);
        $("#NotesInd").modal("show"); 
      }
    });
  });

  $(document).on('click','.valider',function () {
    $.ajax({
      url: "Public/script/addelevenotesi.php",
      method: "POST",
      data: $("#formnotesi").serialize(),
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#NotesInd").modal("hide");        
        setInterval(refreshPage, 1000);
      }
    });
    return false;
  });

  $('.view_data').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewelevedet.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#art_details').html(data);
        $("#Afficher").modal("show"); 
      }
    });
  });

  $('.payer').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/vieweleveins.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#art_detail').html(data);
        $("#Payer").modal("show"); 
      }
    });
  });

  
  $(document).on('click','.submit',function () {
    $.ajax({
      url: "Public/script/addeleveins.php",
      method: "POST",
      data: $("#formeleveins").serialize(),
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#Payer").modal("hide");        
        window.location.href='index.php?page=recu'; 
      }
    });
    return false;
  });
  
  // $(document).on("click", ".delete", function () {
  //   let id = $(this).attr("id");
  //   if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
  //     $.ajax({
  //       url: "Public/script/deleteetud.php",
  //       method: "POST",
  //       data: {
  //         id: id
  //       },
  //       success: function (data) {
  //         $("#message")
  //           .html(data)
  //           .slideDown();
  //         setInterval(refreshPage, 1000);
  //       }
  //     });
  //   } else {
  //     return false;
  //   }
  // });

  // $(document).on("click", ".update", function () {
  //   var id = $(this).attr("id");
  //   $.ajax({
  //     url: "Public/script/updateadmin.php",
  //     method: "POST",
  //     data: {
  //       id: id
  //     },
  //     dataType: "json",
  //     success: function (data) {
  //       $("#Update").modal("show");
  //       $("#login").val(data.LOGIN);
  //       $("#nom").val(data.NOM);
  //       $("#prenom").val(data.PRENOM);
  //       $("#tel").val(data.TEL);
  //       $("#email").val(data.EMAIL);
  //       $(".modal-title").text("Modifier Admin");
  //       $("#id").val(id);
  //     }
  //   });
  // });

  // $(document).on("click", ".activer", function (event) {
  //   event.preventDefault();
  //   afterDel();
  //   var id = $(this).attr("id");
  //   if (confirm("Voulez-vous activer cet utilisateur ? ")) {
  //     $.ajax({
  //       url: "Public/script/activetud.php",
  //       method: "POST",
  //       data: {
  //         id: id
  //       },
  //       success: function (data) {
  //         getEtudiant();
  //       }
  //     });
  //   } else {
  //     return false;
  //   }
  // });

  // $(document).on("click", ".desactiver", function (event) {
  //   event.preventDefault();
  //   afterDel();
  //   var id = $(this).attr("id");
  //   if (confirm("Voulez-vous desactiver cet utilisateur ? ")) {
  //     $.ajax({
  //       url: "Public/script/desactivetud.php",
  //       method: "POST",
  //       data: {
  //         id: id
  //       },
  //       success: function (data) {
  //         setInterval(refreshPage, 1000);
  //       }
  //     });
  //   } else {
  //     return false;
  //   }
  // });

});