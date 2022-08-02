$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let datedeb = $("#datedeb").val();
    let motif = $("#motif").val();
    let datefin = $("#datefin").val();
    $.post(
      "public/script/addjc.php", {
       datedeb: datedeb,
        motif: motif,
        datefin: datefin
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

  $('.view_jc').click(function(event) {
    event.preventDefault();
    var id = $(this).attr("id");
    $.ajax({
      url: "Public/script/viewjcbeforeup.php",
      method: "post",
      data: {
        id: id
      },
      success: function(data) {
        $('#affjc').html(data);
        $("#Modifier").modal("show"); 
      }
    });
  });

  $(document).on('click','.submit',function () {
      $.ajax({
        url: "Public/script/modjc.php",
        method: "POST",
        data: $("#formjc").serialize(),
        success: function (donnees) {
          $('#message').html(donnees).slideDown();
          $("#Modifier").modal("hide");
          setInterval(refreshPage, 1000);
        }
      });
      return false;
    });

    function refreshPage() {
      location.reload();
    }
 
});