<?php include('../Templates/cabecera.php'); ?>

<style> 

body{
    background-color:lightgrey;
    font-family: sans-serif;
  }

  .container{
    margin:  auto;
    /* background-color: white; */
    width: 850px;
    padding: 100px;
  }

  ul,li{

    list-style: none;
    padding: 0;
    margin: 0;
  }

  ul.slider{
    position: relative;
    width: 500px;
    height: 600px;
  }

  ul.slider li{
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    height: inherit;
    width: inherit;
    background-color: lightgrey;
    transition: opacity .5s;
   }

   ul.slider li img{
    width: 130%;
    height: 100%;
    object-fit: cover;
    }

    ul.slider li:first-child{
        opacity: 1;
    }

    ul.slider li:target{
        opacity: 1;
    }

    .menu{
        text-align: center;
        margin: 20px;
    }

    .menu li{
        display: inline-block;
        text-align: center;
    }

    .menu li a{
        display: inline-block;
        width: 40px;
        height: 45px;
        padding: 10px;
        color: white;
        background-color: grey;
        text-decoration: none;
        border-radius: 100%;
        padding: 10px;
        font-size: 20px;
        border-radius: 100%;
        
    }
    

</style>



 <div class="container">

        <!-- Indicators -->
        <ul class="slider">
            <li id="slide1">  <img src="../img/Bienvenido2.png"/></li>
            <li id="slide2">  <img src="../img/psicologia4.jpg"/></li>
            <li id="slide3">  <img src="../img/logo11.png"/></li>
            <li id="slide4">  <img src="../img/pensamiento2.jpg"/></li>
            <li id="slide5">  <img src="../img/pensamiento3.jpg"/></li>
            <li id="slide6">  <img src="../img/pensamiento4.jpg"/></li>
            </li>
        </ul>

        
        <ul class="menu">
            <li><a href="#slide1">1</a></li>   
            <li><a href="#slide2">2</a></li> 
            <li><a href="#slide3">3</a></li>
            <li><a href="#slide4">4</a></li>
            <li><a href="#slide5">5</a></li>
            <li><a href="#slide6">6</a></li>
        </ul>

        
        </div>

 <?php include('../Templates/pie.php'); ?>