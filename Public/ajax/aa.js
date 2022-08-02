$(document).ready(function () {
    getAA();
    $("#form").submit(function (event) {
        event.preventDefault();
        let aa = $("#aa").val();
        let id = $("#id").val();
        $.post(
            "public/script/addaa.php", {
                id: id,
                aa: aa
            },
            function (donnees) {
                $("#message")
                    .html(donnees)
                    .slideDown();
                $("#aa").val("");
                $("#form")[0].reset();
                getAA();
            }
        );
        return false;
    });

    function getAA() {
        $.post("public/script/affaa.php", function (data) {
            $("#aa_data").html(data);
        });
    }

    //recharger cette fonction toute les secondes
    setInterval(getAA, 1000);
});

