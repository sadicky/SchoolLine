function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $(document).on('click','.valider',function () {
    $.ajax({
      url: "Public/script/addcais.php",
      method: "POST",
      data:$("#formcais").serialize(),
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#ajoutcais").modal("hide");
        setInterval(refreshPage, 1000);
      }
    });
  });

  // $('.view_data').click(function(event) {
  //   event.preventDefault();
  //   var id = $(this).attr("id");
  //   $.ajax({
  //     url: "Public/script/viewencbeforedit.php",
  //     method: "post",
  //     data: {
  //       id: id
  //     },
  //     success: function(data) {
  //       $('#art_detail').html(data);
  //       $("#Modifier").modal("show"); 
  //     }
  //   });
  // });
  
  // $('.view_p').click(function(event) {
  //   event.preventDefault();
  //   var id = $(this).attr("id");
  //   $.ajax({
  //     url: "Public/script/viewencbeforaffect.php",
  //     method: "post",
  //     data: {
  //       id: id
  //     },
  //     success: function(data) {
  //       $('#affprof').html(data);
  //       $("#Affecter").modal("show"); 
  //     }
  //   });
  // });


  // $(document).on('click', '.update', function() {
  //   $.ajax({ 
  //     url: "Public/script/updateenc.php",
  //     type: "post",
  //     data: $("#formprof").serialize(),
  //     success: function(data) {
  //       $("#message").html(data).slideDown();
  //       $("#Modifier").modal('hide');   
  //       setInterval(refreshPage, 1000);     
  //     }
  //   });
  //   return false;
  // });

  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cet encodeur ? ")) {
      $.ajax({
        url: "Public/script/activenc.php",
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
    if (confirm("Voulez-vous desactiver cet encodeur ? ")) {
      $.ajax({
        url: "Public/script/desactivenc.php",
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