$('.modaldeleteadmin').click(function () {
    var id = $(this).attr('data-id');
    $('.confirmdelet').click(function () {
        console.log('test')
        $.post('function/deleteUser.php' , {id} , function(res1){
            console.log(res1);
            location.reload();
  
        })
    })
    

})