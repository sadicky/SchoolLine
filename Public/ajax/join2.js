$(document).ready(function () {

    $('#fac').on('change',function(){
        let fac = $(this).val();
        if(fac){
            $.ajax({
                type:'POST',
                url:'Public/script/join2.php',
                data:'fac='+fac,
                success:function(d){
                    $('#dep').html(d);
                    $('#niv').html("<option value=''>Choisir un departement</option>");
                }

            });
        }else{
             $('#niv').html("<option value=''>Choisir un departement</option>");
        }

    });


    $('#dep').on('change',function(){
        let dep = $(this).val();
        if(dep){
            $.ajax({
                type:'POST',
                url:'Public/script/join2.php',
                data:'dep='+dep,
                success:function(d){
                    $('#niv').html(d);
                }

            });
        }
    });



});
