$(document).ready(function() {
 $('.afficher').popover({
    content: afficher,
    html: true,
    trigger: "hover",
    placement: "right"
  });

  function afficher() {
    var fetchData = "";
    var elmt = $(this);
    var id = elmt.attr("id");
    $.ajax({
      url: "public/script/affadminid.php",
      method: "POST",
      async: false,
      data: {
        id: id
      },
      success: function(data) {
        fetchData = data;
      }
    });
    return fetchData;
  } 
});
 