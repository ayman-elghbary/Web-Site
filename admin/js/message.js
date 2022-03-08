$('.modalbtn').click(function () {
    
    let view=$(this).parent().prev().text();
     if (view== "unread") {
 
         let counter =$('.counter').text();
         $('.counter').text(counter - 1);
         
     }
     
    $(this).parent().prev().text('read');
 
    //get the message id with js
     var id = $(this).attr('data-id');
     // var id = $(this).data('id');
 
 
     $.post('function/editeMessage.php' , {id} , function(res){
         console.log(res);
         // $('.counter').text(res)
     })
 
 
 })