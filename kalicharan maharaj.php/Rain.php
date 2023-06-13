<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="CSS/L.css">  -->
    <!--<script src="js/script.js"></script>-->
    <title>Animated rain</title>
    <style type="text/css">
body{

    background: url(index.php);
    background-size:cover;
    /* background-color:black; */
}

  section{
    top:40%;
    right:50%;
    transform:translate(50%,-50%);
    position:relative;
    width:100%;
    height:100%;
    text-align:center;

  }
.r1{
    background: url(Images/r1.png);
    background-repeat: repeat;
    background-size:30px; 
    filter:blur(1px); 
    width:100%;
    height:400px;
    position:absolute;
    transform: rotate(0deg);
    animation:animateone 5s infinite linear;
 


 }
.r2{
    
    background: url(Images/r1.png);
    background-repeat: repeat;
     background-size:50px;   
    filter:blur(1px);
    position:absolute;
    width:100%;
    height:800px;
    animation:animatetwo 7s infinite linear;
}
/* 
.r3{
    
    background: url(Images/r1.png);
    background-repeat: repeat;
    background-size:80px; 
    width:100%;
    height:650px;
    position:absolute;
    animation:animatethree 2s infinite linear;
}  */

@keyframes animateone{
0%{
    background-position: 10px -100px;
}
100%{
    background-position:100px 500px;
}

}


@keyframes animatetwo{
0%{
    background-position: 10px -300px;
}
100%{
    background-position:100px 500px;
}

}

@keyframes animatethree{
0%{
    background-position: 0px 10px;
}
100%{
    background-position:100px 500px;
}

}

    </style>          
</head>
<body>
    <section>
        <div class="r1">
        <div class="r2">
        <div class="r3"> 
        </div>
     </div>
     </div>

    </section>

</body>
</html>