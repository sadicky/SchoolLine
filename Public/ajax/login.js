$(document).ready(function () {
    var messageret;
    $("#connexion").click(function (e) {
        e.preventDefault();
        var login = $('#login').val();
        var pwd = $('#pwd').val();

        $.post('public/script/login.php', {
            login: login,
            pwd: pwd
        }, function (donnees) {
            messageret = donnees;
            if (messageret == 1) {
                window.location = "index.php?page=accueilAdmin";
            } else {
                alert("Échec!", messageret + "!", "error");
            }
        });
        return false;
    });
});