$(".modaldeleteabout").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeleteabout").click(function () {
        // console.log('test');

     $.post("function/deleteAbout.php",{id},function (data) {
         console.log(data);
         location.reload();
        })   
    })
})