function refreshPage() {
  location.reload();
}

$(function () {
  $("#formulaire").submit(function () {
    var noms = $("#noms").val();
    var dob = $("#dob").val();
    var sexe = $("#sexe").val();
    var tel = $("#tel").val();
    var email = $("#email").val();
    var pwd = $("#pwd").val();
    var mat = $("#mat").val();
    $.ajax({
      url: "Public/script/addbib.php",
      method: "POST",
      data: {
        noms: noms,
        dob: dob,
        sexe: sexe,
        tel: tel,
        email: email,
        pwd: pwd,
        mat: mat
      },
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#formulaire")[0].reset();
        $("#ajoutbib").modal("hide");
        // setInterval(refreshPage, 1000);
      }
    });
  });



  $('.update').click(function() {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewbibbeforedit.php",
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

  $(document).on('click', '.up', function() {
    $.ajax({ 
      url: "Public/script/updatebib.php",
      type: "post",
      data: $("#formbib").serialize(),
      success: function(data) {
        $("#message").html(data).slideDown();
        $("#Modifier").modal('hide');   
        setInterval(refreshPage, 1000);     
      }
    });
    return false;
  });
  

  $(document).on("click", ".delete", function () {
    let id = $(this).attr("id");
    if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
      $.ajax({
        url: "Public/script/deletebib.php",
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


  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cet utilisateur ? ")) {
      $.ajax({
        url: "Public/script/activbib.php",
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
        url: "Public/script/desactivbib.php",
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