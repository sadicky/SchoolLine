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

// $(document).on("click", ".delete", function () {
//     afterDel();
//     let id = $(this).attr("id");
//     if (confirm("Voulez-vous supprimer cet utilisateur ? ")) {
//         $.ajax({
//             url: "public/script/deleteadmin.php",
//             method: "POST",
//             data: {
//                 id: id
//             },
//             success: function (data) {
//                 $("#message")
//                     .html(data)
//                     .slideDown();
//                 afterDel();
//             }
//         });
//     } else {
//         return false;
//     }

//     function afterDel() {
//         $.post("public/script/affadmin.php", function (data) {
//             $("#admin_data").html(data);
//         });
//     }
// });

// $(document).on("click", ".update", function () {
//     var id = $(this).attr("id");
//     $.ajax({
//         url: "public/script/updateadmin.php",
//         method: "POST",
//         data: {
//             id: id
//         },
//         dataType: "json",
//         success: function (data) {
//             $("#Update").modal("show");
//             $("#nom").val(data.NOM);
//             $("#prenom").val(data.PRENOM);
//             $("#tel").val(data.TEL);
//             $("#login").val(data.LOGIN);
//             $("#sexe").val(data.SEXE);
//             $("#photo").val(data.PHOTO);

//             $(".modal-title").text("Modifier Admin");
//             $("#id").val(id);
//             // $("#user_uploaded_image").html(data.user_image);
//         }
//     });
// });