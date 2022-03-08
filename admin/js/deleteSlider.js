$(".modaldeleteslider").click(function () {
    var id=$(this).attr('data-id');
    $(".confirmdeleteslider").click(function () {
        // console.log('test');

     $.post("function/deleteSlider.php",{id},function (data) {
         console.log(data);
         location.reload();
        })   
    })
})