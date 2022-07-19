$(document).ready(function () {
  getAdmin();
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let nom = $("#nom").val();
    let prenom = $("#prenom").val();
    let tel = $("#tel").val();
    let login = $("#login").val();
    let email = $("#email").val();
    let dateins = $("#dateins").val();
    let pwd = $("#pwd").val();
    let cpwd = $("#cpwd").val();

    $.post(
      "public/script/addadmin.php", {
        login: login,
        pwd: pwd,
        cpwd: cpwd,
        nom: nom,
        email: email,
        dateins: dateins,
        prenom: prenom,
        tel: tel
      },
      function (donnees) {
        $("#message")
          .html(donnees)
          .slideDown();
        $("#nom").val("");
        $("#prenom").val("");
        $("#tel").val("");
        $("#login").val("");
        $("#pwd").val("");
        $("#cpwd").val("");
        getAdmin();
      }
    );
    return false;
  });

  function getAdmin() {
    $.post("public/script/affadmin.php", function (data) {
      $("#admin_data").html(data);
    });
  }
  

  //recharger cette fonction toute les secondes
  //setInterval(getAdmin, 1000);


$(document).on("click", ".det", function () {
  afterDel();
  let id = $(this).attr("id");
    $.ajax({
      url: "public/script/affadminid.php",
      method: "POST",
      data: {
        id: id
      },
      success: function (data) {
      $("#details").modal("show");
        $("#adminid")
          .html(data)
          .slideDown();
        
      }
    });
  });

$(document).on("click", ".delete", function () {
  afterDel();
  let id = $(this).attr("id");
  if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
    $.ajax({
      url: "public/script/deleteadmin.php",
      method: "POST",
      data: {
        id: id
      },
      success: function (data) {
        $("#message")
          .html(data)
          .slideDown();
        afterDel();
      }
    });
  } else {
    return false;
  }
});
  function afterDel() {
    $.post("public/script/affadmin.php", function (data) {
      $("#admin_data").html(data);
    });
  }


$(document).on("click", ".update", function () {
  var id = $(this).attr("id");
  $.ajax({
    url: "public/script/affadidmod.php",
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
    afterDel();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cet utilisateur ? ")) {
      $.ajax({
        url: "public/script/activadmin.php",
        method: "POST",
        data: {
          id: id
        },
        success: function (data) {
          getAdmin();
        }
      });
    } else {
      return false;
    }
  });
  
  $(document).on("click", ".desactiver", function (event) {
	event.preventDefault();
    afterDel();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous desactiver cet utilisateur ? ")) {
      $.ajax({
        url: "public/script/desactivadmin.php",
        method: "POST",
        data: {
          id: id
        },
        success: function (data) {
          getAdmin();
        }
      });
    } else {
      return false;
    }
  });
 
  
  
  
  
});