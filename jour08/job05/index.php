<!DOCTYPE html>
<html>
    <head>
        <!--Import Font awesome Icon Font-->
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

            body {
                justify-content: center;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                align-items:center;
        }
            header{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 8px;
                top: 0;
                color: black;
                font-family:'Kaushan Script', cursive;
                list-style: none;
            }
            header .Onglet{
                display: flex;
                flex-wrap: wrap;
            }
            header .Onglet li a{
                font-size: 17px;
                margin-right: 10px;
                cursor: pointer;
                color: black;
                list-style: none;
                text-decoration: none;
            }

            header .Onglet li a:hover{
                color:#8d6e63;
                border-radius: 15px;
                box-shadow:none;
            }
            
            .logo {
                float:none;
                color:black;
                width:125px;
                height:125px;
            }
            /*fin du header */
            .container{
                width:90%;
                margin:50px auto;
            }
            .heading{
                text-align:center;
                font-size:30px;
                margin-bottom: 50px;
            }
            .row{
            display:flex;
            flex-direction:row;
            justify-content:space-around;
            flex-flow:wrap;
            }
            .row1{
                display:flex;
                flex-direction:row;
                justify-content:space-around;
                flex-flow:wrap; 

            }
            .card{
                width: 20%;
                background: #fff;
                border: 1px solid #ccc;
                margin-bottom: 50px;
                transition: 0.3s;
                margin-top:125px;
            }
            .card-big{
                width: 40%;
                background: #fff;
                border: 1px solid #ccc;
                margin-bottom: 50px;
                transition: 0.3s;
            }
            .card-big2{
                width: 40%;
                background: #fff;
                border: 1px solid #ccc;
                margin-bottom: 50px;
                transition: 0.3s;
            }
            .card-header{
                text-align: center;
                padding: 30px 10px;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                color: #fff;
            }
            .card-header-big{
                text-align: center;
                padding: 50px 10px;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                color: #fff;
            }
            .card-header-big2{
                text-align: center;
                padding: 50px 10px;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                color: #fff;
            }
            .card-body{
                padding: 30px 20px;
                text-align: center;
                font-size: 18px;
            }
            .card-body .btn{
                display: block;
                color: #fff;
                text-align: center;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                margin-top: 30px;
                text-decoration:none;
            }
            .card:hover{
                transform: scale(1.05);
                box-shadow: 00 40px -10px rgba(0, 0, 0, 0.25);
            }
            .card-body-big{
                padding: 30px 20px;
                text-align: center;
                font-size: 18px;
            }
            .card-body-big .btn{
                display: block;
                color: #fff;
                text-align: center;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                margin-top: 30px;
                text-decoration:none;
            }
            .card-big:hover{
                transform: scale(1.05);
                box-shadow: 00 40px -10px rgba(0, 0, 0, 0.25);
            }
            .card-body-big2{
                padding: 30px 20px;
                text-align: center;
                font-size: 18px;
            }
            .card-body-big2 .btn{
                display: block;
                color: #fff;
                text-align: center;
                background: linear-gradient(to right, #ff416c, #ff4b2b);
                margin-top: 30px;
                text-decoration:none;
            }
            .card-big2:hover{
                transform: scale(1.05);
                box-shadow: 00 40px -10px rgba(0, 0, 0, 0.25);
            }
            /*Responsive media queries */
            @media screen and (max-width:1000px){
                .card{
                    width:40%;
                }
            }
            @media screen and (max-width:620px){
                
                .container{
                    width: 100%;
                }

                .heading{
                    padding: 20px;
                    font-size: 20px;
                }
                .card{
                    width: 55%;
                }
            }
            @media screen and (max-width:1000px){
                .card-big, .card-big2{
                    width:45%;
                }
            }
            @media screen and (max-width:620px){
                
                .container{
                    width: 100%;
                }

                .heading{
                    padding: 20px;
                    font-size: 20px;
                }
                .card-big, .card-big2{
                    width: 80%;
                }
            }
            @media screen and (max-width:810px){
                
                .container{
                    width: 100%;
                }

                .heading{
                    padding: 20px;
                    font-size: 20px;
                }
                .card-big, .card-big2{
                    width: 80%;
                }
            }
            .container1{
                width: 90%;
                max-width: 1400px;
                margin: auto;
            }
            h1{
                color:#1a2f42;
                margin: 20px 0;
                padding-bottom: 20px;
                border-bottom: 1px dashed gray;
            }
            h1 span {
                display:block;
            }
            h1 span:nth-child(1) {
                font-weight: normal;
                color:#ed5d34;
            }

            .card-container {
                display: grid;
                grid-template-columns: repeat(auto-fill,
                minmax(350px, 1fr));
                grid-gap: 30px;
                margin: 80px 0;
            }
            .card-wrapper {
                position: relative;
                min-height: 350px;
                perspective:2000px;
                perspective-origin: top;
            }
            .card-wrapper:hover .card1 {
                transform: rotateY(180deg);
            }
            .card1{
                position: relative;
                height: 100%;
                transform-style: preserve-3d;
                transition: transform 0.8s cubic-bezier(0.86,0,0.07,1);
                color:white;
                font-weight: bold;
            }
            .card-front,
            .card-back {
                position: absolute;
                height: 100%;
                width: 100%;
                padding: 30px;
                border-radius: 8px;
                backface-visibility: hidden;
                -webkit-backface-visibility: hidden;
            }
            .card-front{
                background:#ed5d34;
                display: flex;
                flex-direction : column;
                justify-content: space-between;
            }
            .card-wrapper:nth-child(even) .card-front {
                background: #1a2f42;
            }
            .card-front p{
                font-size: 25px;
                line-height: 35px;
            }
            .material-icons{
                position: absolute;
                right: 30px;
                bottom: 30px;
            }
            .card-price p {
                font-size: 25px;
            }
            .card-back {
                background: #ed5d34;
                transform: rotateY(180deg);
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card-wrapper:nth-child(even) .card-back {
                background: #1a2f42;
            }
            .card-wrapper:nth-child(odd) .card-back
            a:hover{
                background: #1a2f42;
                color:#fff;
            }
            .card-wrapper:nth-child(even) .card-back
            a:hover{
                background: #ed5d34;
                color:#fff;
            }
            .card-back .btn1:hover{
                color:red;
            }
            .img{
                width:180px;
                height: 180px;
            }
            .img2{
                width:90%;
                height: 250px;
            }
            
</style>
<header class="grey lighten-3">
    <div class="logo">
    <img src="./coffee-time.png" alt="coffee" width="120px" height="120px">
    </div>
                <div class="Onglet">
                    <li> <a href="inscription.html">Inscription</a></li>
                    <li> <a href="Connexion.html">Connexion</a></li>
                    <li> <a href="Paiement.html">Paiements</a></li>
                    <li> <a href="Services.html">Services +</a></li>
                </div>
</header>
<div class="container">
    <div class="heading">
        <h1> Bienvenue au Coffee-Time</p>
    </div>
    <div class="row1">
<!--Début des grandes cards---->
    <div class="card-big">
            <div class="card-header-big">
            <img src="dej-entreprise.jpg" class="img2">
            </div>
            <div class="card-body-big">
                <p>
                    Petit déjeuner d'entreprise
                    50 € pour  20 personnes
                </p>
                <a href="#" class="btn hoverable">Valider</a>
            </div>
        </div>
    <div class="card-big2">
            <div class="card-header-big2">
            <img src="petit-dej-groupe.jpg" class="img2">
            </div>
            <div class="card-body-big2">
                <p>
                    Petit déjeuner au Choix
                    10 € pour 5 personnes
                </p>
                <a href="#" class="btn hoverable">Valider</a>
            </div>
        </div>
        <!---Début petite card--->
        <div class="row">
        <div class="card">
            <div class="card-header">
                <img src="cafe-pain-au-chocolat.jpg" class="img">
            </div>
            <div class="card-body">
                <p>
                    Café + Pain au Chocolat
                    4€50.
                </p>
                <a href="#" class="btn hoverable">Valider</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
            <img src="thé-pain.jpg" class="img">
            </div>
            <div class="card-body">
                <p>
                    Nouveauté : Thé au choix + 2 pains au chocolat 6€50
                </p>
                <a href="#" class="btn hoverable">Valider</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
            <img src="formule-petit-dejeuner.jpg" class="img">
            </div>
            <div class="card-body">
                <p>
                    Formule Petit déjeuner : jus au choix + café + croissant + pain beurre et confiture.
                </p>
                <a href="#" class="btn hoverable"></a>
            </div>
        </div>
        <!---Fin petite card--->

        <!---Début cartes tournantes-->
    <div class="container1">
        <h1>
            <span>Les variétés de café disponible !</span>
            <span>Les offres disponibles</span>
        </h1>
        <div class="card-container">
            <div class="card-wrapper">
                <div class="card1">
                    <div class="card-front">
                        <P>Vous avez plusieurs choix de café</p>
                        <p class="card-price">
                            10 € les 5 cafés
                        </p>
                        <i class="material-icons">arrow_forward</i>
                    </div>
                    <div class="card-back">
                        <a href="#" class="btn hoverable">Je commande ici !</a>
                    </div>
                </div>
            </div>

            <div class="card-wrapper">
                <div class="card1">
                    <div class="card-front">
                        <P>Vous avez plusieurs choix de café</p>
                        <p class="card-price">
                            10 € les 5 cafés
                        </p>
                        <i class="material-icons">arrow_forward</i>
                    </div>
                    <div class="card-back">
                        <a href="#" class="btn hoverable">Je commande ici !</a>
                    </div>
                </div>
            </div>
            <!---Fin cartes tournantes-->
<!--Import jQuery before materialize.js-->
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    </body>
</html>