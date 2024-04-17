<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&display=swap" rel="stylesheet">
    <style>
        #rotation {
            transition: 200ms;
        }

        #rotation:active {
            transform: rotate(-360deg);
        }


        body {
            margin: 0;
            padding: 0;
        }

        .section1 {
            height: 50vh;
            /* 50% da altura da viewport */
            background-color: #FFF;
            /* Primeira cor */
        }

        .section2 {
            height: 50vh;
            /* 50% da altura da viewport */
            background-color: #EEE;
            /* Segunda cor */
            
       }
       .dropdown-toggle::after {
    border-top: 0em ;
    border-right: 0em;
    border-bottom: 0;
    border-left: 0em ;
}
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.snip1566 {
  position: relative;
  display: inline-block;
  margin: 20px;
  max-width: 190px;
  width: 100%;
  color: #bbb;
  font-size: 16px;
  box-shadow: none !important;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.snip1566 *,
.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 50%;
  content: '';
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: -1;
  border: 2px solid #bbb;
  border-color: transparent #bbb;
}

.snip1566 img {
  max-width: 100%;
  backface-visibility: hidden;
  vertical-align: top;
  border-radius: 50%;
  padding: 10px;
}

.snip1566 figcaption {
  position: absolute;
  top: 5px;
  bottom: 5px;
  left: 5px;
  right: 5px;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.9);
  border-radius: 50%;
}

.snip1566 i {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 4em;
  z-index: 1;
}

.snip1566 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1566:hover figcaption {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.snip1566:hover:before,
.snip1566:hover:after {
  border-width: 10px;
}

.snip1566:hover:before{
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.snip1566:hover:after{
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.nav {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: row;
    justify-content: space-between;
}
#lazardoslar{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: row;
    justify-content: space-between;
}

#lazaro{
    width: 500px;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: row;
    justify-content: flex-end;
}
#lazaro2{
  width: 500px;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: nowrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    flex-direction: row-reverse;
    justify-content: flex-end;}


#Nav {
  font-family: "Honk", system-ui;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
  font-variation-settings:
    "MORF" 35,
    "SHLN" 60;
    font-size: 50px;
}


    </style>
    
    <title>Aradu</title>
</head>

<body>
    <nav class="nav nav-pills nav-fill" style="background-color: #0000FF " >

           <h1 style="padding-left: 40px;"id="Nav">Olimpiadas Arandu</h1>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="lugresponsivo">
            <img src="imgs/download.png" class="rounded-circle" style="width: 40px;height: 40px;" id="rotation">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Cadastrar-se</a>
        </div>
    </nav>

    <?php

    include("home.php");
    ?>