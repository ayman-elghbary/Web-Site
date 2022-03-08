
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
  /* body{
    background: url(assets/3be1b392-8a65-486d-b274-47f41b4d168a.jpg);background-size: inherit;
  } */
  .table-striped>tbody>tr:nth-of-type(odd)
  {background: #f9d1d1}
  p{font-size: xx-large;color: yellow;}
</style>
</head>


<body>

<p style="text-align: center;color:black">Sent successfull</br> Page Will Be Back Now</p>
<div style=" height:25px;width:95%;margin-left: 15px;" class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1% ; height:50px" >
    1%
  </div>
</div>


<script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript">
  
  var x = 1 ; 
 var q =  setInterval(function(){
    x++
$(".progress-bar").attr("aria-valuenow",x)
$(".progress-bar").attr("style","width:"+x+"%")
$(".progress-bar").html(x+"%")

if (x >=100) {clearInterval(q)}

  },100)


</script>
</body>
</html>