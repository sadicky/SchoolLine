$(document).ready(function () {

$('#sem').on('change', function() {
    var sem = $(this).val();
    if (sem) {
      $.ajax({
        type: 'POST',
        url: 'Public/script/notejoin.php',
        data: 'sem=' + sem,
        success: function(d) {
          $('#periode').html(d);
        }
      });
    } else {
      $('#periode').html("<option value=''>periode non disponible</option>");
    }

  });

  
});