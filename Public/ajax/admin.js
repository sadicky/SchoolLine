$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let nom = $("#nom").val();
    let prenom = $("#prenom").val();
    let tel = $("#tel").val();
    let login = $("#login").val();
    let email = $("#email").val();
    let dateins = $("#dateins").val();

    $.post(
      "Public/script/addadmin.php", {
        login: login,
        nom: nom,
        email: email,
        dateins: dateins,
        prenom: prenom,
        tel: tel
      },
      function (donnees) {
        $('#message').html(donnees).slideDown();
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

  //recharger cette fonction toute les secondes
  //setInterval(getAdmin, 1000);


$(document).on("click", ".det", function () {
  let id = $(this).attr("id");
    $.ajax({
      url: "Public/script/affadminid.php",
      method: "POST",
      data: {
        id: id
      },
      success: function (data) {
      $("#details").modal("show");
        $("#adminid")
          .html(data)
          .slideDown();
          setInterval(refreshPage, 1000);        
      }
    });
  });

$(document).on("click", ".delete", function () {
  let id = $(this).attr("id");
  if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
    $.ajax({
      url: "Public/script/deleteadmin.php",
      method: "POST",
      data: {
        id: id
      },
      success: function (data) {
        $("#message")
          .html(data)
          .slideDown();
          setInterval(refreshPage, 1000);
      }
    });
  } else {
    return false;
  }
});

$(document).on("click", ".update", function () {
  var id = $(this).attr("id");
  $.ajax({
    url: "Public/script/affadidmod.php",
    method: "POST",
    data: {
      id: id
    },
    dataType: "json",
    success: function (data) {
      $("#login").val(data.LOGIN);
      $("#nom").val(data.NOM);
      $("#prenom").val(data.PRENOM);
      $("#tel").val(data.TEL);
      $("#email").val(data.EMAIL);
      $("#Update").modal("show");
      $(".modal-title").text("Modifier Admin");
      $("#id").val(id);
    }
  });
});
  
  $(document).on("click", ".activer", function (event) {
  event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cet utilisateur ? ")) {
      $.ajax({
        url: "Public/script/activadmin.php",
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
    if (confirm("Voulez-vous desactiver cet utilisateur ? ")) {
      $.ajax({
        url: "public/script/desactivadmin.php",
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