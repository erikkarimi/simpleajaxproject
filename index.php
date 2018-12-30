<html>
<head>
<title>ajax</title>
<script src="jquery-1.8.3.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function clicked(){
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var dataString="fname="+fname +"&lname="+lname;
    $.ajax({
        type:"POST",
        url:"res.php",
        data:dataString,
        cache:false,
        success:function(){
            window.location.href('success.php');
        }
    });
}


</script>


</head>
<body><form>
<input type="text" id="fname"/>
<input type="text" id="lname"/>
<button type="submit" onclick="return clicked()">enter</button>

<div id="new"></div>
<button type="submit" onclick="sweetalert()">enter</button>
<script>
function sweetalert(){
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
}
</script>
</body>
</html>