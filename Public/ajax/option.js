function refreshPage() {
  location.reload();
}

$(document).ready(function () {
  $("#formulaire").submit(function (event) {
    event.preventDefault();
    let fac = $("#fac").val();
    let dep = $("#dep").val();

    $.post(
      "Public/script/addopt.php", {
        fac: fac,
        dep: dep
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

  $(document).on("click", ".det", function () {
    let id = $(this).attr("id");
    $.ajax({
      url: "Public/script/affafacid.php",
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
        $("#fac").val(data.FACULTE);
        $("#doyen").val(data.IDDOYEN);
        $("#aa").val(data.AA);
        $("#update").modal("show");
        $(".modal-title").text("Modifier Admin");
        $("#id").val(id);
      }
    });
  });

  $(document).on("click", ".activer", function (event) {
    event.preventDefault();
    var id = $(this).attr("id");
    if (confirm("Voulez-vous activer cette option ? ")) {
      $.ajax({
        url: "Public/script/activopt.php",
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
    if (confirm("Voulez-vous desactiver cette option ? ")) {
      $.ajax({
        url: "Public/script/desactivopt.php",
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