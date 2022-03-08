$(".modaldeletecategory").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeletecategory").click(function () {
        console.log('test');

     $.post("function/deleteCategory.php",{id},function (data) {
         console.log(data);
         location.reload();
        })   
    })
})

