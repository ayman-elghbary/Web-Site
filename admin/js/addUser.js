let id=$('tr:last td:first').text();
// console.log(id);

$('.formadmin').submit(function(e){
    e.preventDefault();

    let data={};
    let input=$('.modal-body input,select').not('input:last');
    input.each((index,item)=>{
        let key=$(item).attr('name');
        // console.log(key);
        let value=$(item).val();
        data[key] = value ;
        
    })
    // console.log(data)
    $.post('function/doAddUser.php',data,function(data1){
         console.log(data1);

        location.reload();

    })

   
})