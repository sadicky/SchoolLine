$(document).ready(function () {
    // $('#aa').on('change',function(){
    //     let aa = $(this).val();
    //     if(aa){
    //         $.ajax({
    //             type:'POST',
    //             url:'public/script/join.php',
    //             data:'aa='+aa,
    //             success:function(d){
    //                 $('#fac').html(d);
    //                 $('#dep').html("<option value=''>Choisir une faculte</option>");
    //                 $('#niv').html("<option value=''>Choisir un departement</option>");
    //             }

    //         });
    //     }else{
    //          $('#dep').html("<option value=''>Choisir une faculte</option>");
    //          $('#niv').html("<option value=''>Choisir un departement</option>");
    //     }

    // });



    $('#fac').on('change',function(){
        let fac = $(this).val();
        if(fac){
            $.ajax({
                type:'POST',
                url:'public/script/join.php',
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
                url:'public/script/join.php',
                data:'dep='+dep,
                success:function(d){
                    $('#niv').html(d);
                }

            });
        }
    });



});
