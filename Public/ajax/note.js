function refreshPage() {
  location.reload();
}

$(document).ready(function () {
 
  $(document).on('click','.validate',function () {
    $.ajax({
      url: "Public/script/addelevenotes.php",
      method: "POST",
      data: $("#cotes").serialize(),
      success: function (donnees) {
        $('#message').html(donnees).slideDown();
        $("#cotes").hide();
      }
    });
    return false;
  });

});