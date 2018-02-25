
<!DOCTYPE html>
<html>
<head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#div1").click(function(){
        $("#temp").load("Right11.php");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#div2").click(function(){
        $("#temp").load("Left11.php");
    });
});
</script>

<script>
$(document).ready(function(){
    $("#div3").click(function(){
        $("#temp").load("Forward11.php");
    });
});
</script>


<script>
$(document).ready(function(){
    $("#div4").click(function(){
        $("#temp").load("Backward11.php");
    });
});
</script>






<script>
$(document).ready(function(){
    $("#div5").click(function(){
        $("#temp").load("Stop11.php");
    });
});
</script>



<style>
#p01 {
    color: white;
    background-color: green;
    font-family: times new roman;
    font-size : 400%;
}


#p02 {
	width: 500px;
	height:300px;
  	float: center;
  	background-color: black;
  	margin-left: 400px;

}

#p03 {
	float: center;
  	background-color: white;
  	  margin-left: 500px;

}

#p04 {
	float: center;
  	background-color: white;
  	  margin-left: 600px;

}

#p05 {
  float: center;
    background-color: white;
      margin-left: 500px;

}



</style>
</head>
<body>

<h1 id="p01" style="width:1350px;height:100px;"> <center>Camera based Internet Controlled Smart Robot </center></h1>

<h1 id="p02" >
<iframe width="500" height="300"
  src="https://www.gruveo.com/embed/?code=iiit"
  frameborder="0" allowfullscreen></iframe>
 </h1>
<h1 id="p03">

    <button type="button" id="div1">Right
    </button>


    <button type="button" id="div2">Left
    </button>


    <button type="button" id="div3">Forward
    </button>


    <button type="button" id="div4">Backward
  </button>


    <button type="button" id="div5">Stop
  </button>

</h1>


<div id="temp"><center><p>DashBoard</p></center></div>

<h5 id="p04" >
<button type="button"  onclick="location.href = 'https://www.google.co.in/android/devicemanager?u=2';"  target="_blank">
Get Location
</button>
</h5>


</body>
</html>
