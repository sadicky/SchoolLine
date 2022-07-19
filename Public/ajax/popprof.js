$(document).ready(function() {
  $('.afficher').popover({
    content: fetch,
    html: true,
    trigger: "hover",
    placement: "right"
  });

  function fetch() {
    var fetchData = "";
    var elmt = $(this);
    var id = elmt.attr("id");
    $.ajax({
      url: "Public/script/affprofid.php",
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
