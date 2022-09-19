$(document).ready(function () {
    $('#fac').on('change',function(){
        let fac = $(this).val();
        if(fac){
            $.ajax({
                type:'POST',
                url:'Public/script/join3.php',
                data:'fac='+fac,
                success:function(d){
                    $('#dep').html(d);
                    $('#niv').html("<option value=''>Choisir une option</option>");
                    $('#cours').html("<option value=''>Choisir un cours</option>");
                }

            });
        }else{
             $('#niv').html("<option value=''>Choisir une option</option>");
             $('#cours').html("<option value=''>Choisir une classe</option>");
        }

    });


    $('#dep').on('change',function(){
        let dep = $(this).val();
        if(dep){
            $.ajax({
                type:'POST',
                url:'Public/script/join3.php',
                data:'dep='+dep,
                success:function(d){
                    $('#niv').html(d);
                    $('#cours').html("<option value=''>Choisir une classe</option>");
                }

            });
        }else{
            $('#cours').html("<option value=''>Choisir une classe</option>");
       }
    });

    $('#niv').on('change',function(){
        let niv = $(this).val();
        if(niv){
            $.ajax({
                type:'POST',
                url:'Public/script/join3.php',
                data:'niv='+niv,
                success:function(d){
                    $('#cours').html(d);
                }

            });
        }
    });



});
