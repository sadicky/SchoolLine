function refreshPage() {
   location.reload();
 }
 
$(document).ready(function () {   
 $(document).on('click','.validate',function(event){
    event.preventDefault();
   $.ajax({
      url:"Public/script/addabs.php",
      method:'POST',
      data:$("#absences").serialize(),
     success:function(data){
      $("#message")
        .html(data)
        .slideDown();
        window.location.href='index.php?page=detAbs'
       }
  }); 
}); 

});

