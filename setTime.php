<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SetTimeout</title>
</head>
<body>
    <h1 id="en"></h1>
    <?php 
    function tiempo(){
    ?>
        <script>
            let h1=document.getElementById("en");
            h1.setAttribute("align","center");
            function myFunction(){
           setTimeout(cuenta,2000);
           setTimeout(cinco,4000);
           setTimeout(cuatro,6000);
           setTimeout(tres,8000);
           setTimeout(dos,10000);
           setTimeout(uno,12000);
           setTimeout(cero,14000);
           setTimeout(anithing,16000);
           }

           cuenta=()=> h1.innerHTML="Cuenta regresiva"; 
           cinco=()=> h1.innerHTML=5;
           cuatro=()=> h1.innerHTML=4;
           tres=()=> h1.innerHTML=3;
           dos=()=> h1.innerHTML=2;
           uno=()=> h1.innerHTML=1;
           cero=()=> h1.innerHTML=0;
           anithing=()=> h1.innerHTML="";
           myFunction();
        </script>
    <?php } tiempo();?>
</body>
</html>