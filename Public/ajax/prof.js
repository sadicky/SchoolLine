function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $("#formulaire").submit(function () {
    var titre = $("#titre").val();
    var noms = $("#noms").val();
    var dob = $("#dob").val();
    var sexe = $("#sexe").val();
    var tel = $("#tel").val();
    var email = $("#email").val();
    var niveau = $("#niveau").val();
    var pwd = $("#pwd").val();
    $.ajax({
      url: "Public/script/addprof.php",
      method: "POST",
      data: {
        titre: titre,
        noms: noms,
        dob: dob,
        sexe: sexe,
        tel: tel,
        email: email,
        niveau: niveau,
        pwd: pwd
      },
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#formulaire")[0].reset();
        $("#ajoutprof").modal("hide");
        setInterval(refreshPage, 1000);
      }
    });
  });

  $(document).on("click", ".delete", function () {
    let id = $(this).attr("id");
    if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
      $.ajax({
        url: "Public/script/deleteprof.php",
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

  $('.view_data').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewprofbeforedit.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#art_detail').html(data);
        $("#Modifier").modal("show"); 
      }
    });
  });
  
  $('.view_p').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewprofbeforaffect.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#affprof').html(data);
        $("#Affecter").modal("show"); 
      }
    });
  });

  $(document).on('click','.submit',function () {
      $.ajax({
        url: "Public/script/addprofcours.php",
        method: "POST",
        data: $("#formaffcours").serialize(),
        success: function (donnees) {
          $('#message').html(donnees).slideDown();
          $("#Affecter").modal("hide");
          // setInterval(refreshPage, 1000);
        }
      });
      return false;
    });

  $(document).on('click', '.update', function() {
    $.ajax({ 
      url: "Public/script/updateprof.php",
      type: "post",
      data: $("#formprof").serialize(),
      success: function(data) {
        $("#message").html(data).slideDown();
        $("#Modifier").modal('hide');   
        setInterval(refreshPage, 1000);     
      }
    });
    return false;
  });

  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer ce professeur ? ")) {
      $.ajax({
        url: "Public/script/activprof.php",
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
    if (confirm("Voulez-vous desactiver ce professeur ? ")) {
      $.ajax({
        url: "Public/script/desactivprof.php",
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