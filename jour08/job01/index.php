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
                /* Style général */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
:root{
    --clr:#222327;
}
body {
    justify-content: center;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    align-items:center;
    min-height:100vh;
    background: var(--clr);
}
/*Debut de la la navbar*/
nav{
    position:relative;
    display: flex;
    align-items:center;
    justify-content: center;
    top: 0;
    font-family:'Kaushan Script', cursive;
    height:70px;
    width:400px;
    border-radius:10px;
    margin: 40px auto;
    align-content: center;
    flex-direction: column;
}
nav ul{
    display:flex;
    width:350px;
}
nav ul li{
    position:relative;
    list-style:none;
    width:70px;
    height:70px;
    z-index: 1;
}
nav ul li a{
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction: column;
    width: 100%;
    text-align:center;
    font-weight:500;
}
nav ul li a .material-icons{
    
    line-height: 75px;
    font-size: 1.5em;
    text-align:center;
    transition: 0.5s;
    color: var(--clr);

}
nav ul li.active a .material-icons{
    transform: translateY(-32px);
}
nav ul li a .text{
    position:absolute;
    color: var(--clr);
    font-weight:400;
    font-size: 0.75em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    opacity: 0;
    transform:translateY(30px);
}
nav ul li.active a .text{
    opacity:1;
    transform:translateY(10px);

}
.indicator{
    position:absolute;
    top: -50%;
    width:70px;
    height:70px;
    background:#29fd53;
    border-radius:50%;
    border: 6px solid var(--clr);
    transition:0.5s;
}
.indicator:before{
    content:'';
    position:absolute;
    top:48%;
    left: -23px;
    width:22px;
    height:22px;
    background:transparent;
    border-top-right-radius:20px;
    box-shadow:0px -10px 0 0 var(--clr);
}
.indicator:after{
    content:'';
    position:absolute;
    top:48%;
    right: -22px;
    width:22px;
    height:20px;
    background:transparent;
    border-top-left-radius:20px;
    box-shadow:0px -10px 0 0 var(--clr);
}
nav ul li:nth-child(1).active ~ .indicator{
    transform: translateX(calc(70px * 0));
}
nav ul li:nth-child(2).active ~ .indicator{
    transform: translateX(calc(70px * 1));
}
nav ul li:nth-child(3).active ~ .indicator{
    transform: translateX(calc(70px * 2));
}
nav ul li:nth-child(4).active ~ .indicator{
    transform: translateX(calc(70px * 3));
}
/*Fin de la navbar*/
.white{
    margin: 40px auto;
    display: flex;
    align-content: center;
    flex-direction: column;
    border-radius:10px;
    width:550px;
}

header h1{
    font-size:22px;
}

.card-panel{
    display: flex;
    flex-wrap: wrap;
}



        /*Partie du formulaire*/
        .card-panel {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 20px auto;
            margin-top:160px;
            display: flex;
            align-content: center;
            flex-direction: column;
            width: 40%;
            border-radius:10px;
            -webkit-box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
            -moz-box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
            box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
        }
        .card-panel i{
            font-size:20px;
            margin:10px;
        }
        .box-input {
            font-size: 14px;
            background: #fff;
            color:black;
            border: 1px solid #ddd;
            padding-left:10px;
            border-radius: 5px;
            width: 50%;
            height: 4%;
            align-items:center;
        }
        .box-input:focus {
            outline: none;
            border-color:#5c7186;
        }
        p{
            margin-top:12px;
        }
        label{
            color:black;
            font-size:16px;
        }
        button {
                background-color: red;
                color: white;
                padding: 8%;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                text-align: center;
                margin-top:8px;
        }
        button i{
            font-size:16px;
        }
        button:hover {
            color: black;
        }
        /*Fin de la partie du formulaire */

        /*Début du contenu du footer*/
        .container {
            border-radius: 5px;
            background-color:#b0bec5;
            margin: 20px auto;
            display: flex;
            align-content: center;
            flex-direction: column;
            width: 40%;
            height:15%;
            -webkit-box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
            -moz-box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
            box-shadow: 10px 10px 1px -6px rgba(0, 0, 0, 0.36);
        }
        .container h5{
            margin-top:-70px;
        }
        p .black-text{
            font-size:14px;
        }
        .container i{
            font-size:20px;
            text-align:center;
        }
        .footer-copyright i{
            font-size:16px;
        }
        </style>
        <div class="row">
            <header class="white darken-1">
                <h1 class="black-text text-lighten-1 center-align">Bienvenue sur le formulaire</h1>
        </header>
    </div>

    <nav class="grey lighten-5">
                <ul>
                    <li class="list active">
                        <a href="#">
                        <span class="material-icons">home</span>            
                            <span class="text">Accueil</span>
                        </a>
            </li>
            <li class="list">
                        <a href="#">
                        <span class="material-icons">person_add</span>
                            <span class="text">Inscription</span>
                        </a>
            </li>
            <li class="list">
                        <a href="#">
                        <span class="material-icons">person_outline</span>
                            <span class="text">Connexion</span>
                        </a>
            </li>
            <li class="list">
                        <a href="#">
                        <span class="material-icons">search</span>
                            <span class="text">Rechercher</span>
                        </a>
            </li>
            <div class="indicator"></div>
                </ul>
    </div>
</nav>
<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
    }
    list.forEach((item) =>
    item.addEventListener('click',activeLink));
</script>
                
                <section class="card-panel white darken-1 left-align">
                    <form method="post">
                        
                    <label>Civilité :</label><br></br>
                        <p>
                        <i class="material-icons">man</i><label>
                            <input name="group1" type="radio" checked />
                            <span>M.</span>
                        </label>
                        </p>
                        <p>
                        <i class="material-icons">woman</i><label>
                            <input name="group1" type="radio" />
                            <span>Mme</span>
                        </label>
                        </p>
                        <p>
                        <i class="material-icons">woman</i><label>
                        <label>
                            <input class="with-gap" name="group1" type="radio"  />
                            <span>Mlle</span>
                        </label>
                        </p>
                        </br></br>
                        <i class="material-icons">person</i><label>Nom :</label>
                            <input type="text" class="box-input"  name="nom" id="nom" required>
                        </br>
                        <i class="material-icons">face</i><label>Prenom :</label>
                            <input type="text" name="Prenom" class="box-input"  id="prenom" required>
                        </br>
                        <i class="material-icons">location_on</i><label>Adresse Postale :</label>
                            <input type="text" name="Adresse" class="box-input"  id="adresse" required>
                        </br>
                        <i class="material-icons">mails</i><label>Email :</label>
                            <input type="email" name="email" class="box-input"   id="email" required>
                        </br>
                        <i class="material-icons">lock</i><label>Mot De Passe :</label>
                        <input type="password" name="password" class="box-input"   id="password" required>
                        </br>
                        <i class="material-icons">lock</i><label>Confirmez Votre Mot de Passe :</label>
                            <input type="password" name="confirmation_pw" class="box-input"  id="confpw" required>
                            <p>Vos Passions :</p>
                                <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Informatique</span>
                            </label>
                            </p>
                            <p>
                                <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Voyage</span>
                            </label>
                            </p>
                            <p>
                                <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Sport</span>
                            </label>
                            </p>
                            <p>
                            <label>
                                <input type="checkbox" class="filled-in" checked="checked" />
                                <span>Lecture</span>
                            </label>
                            </p>
                        </br>
                            <button type="submit" class="card-panel red accent-4 center-align hoverable" name="Validation">Valider<i class="material-icons">touch_app</i></button>
                        </p>
                    </section>
                    </form>
                </section>
                
        <footer>
            <div class="container white darken-1 center-align hoverable">
            <div class="row">
            <h4 class="black-text center-align">Contact</h4>
            <p class="black-text text-lighten-4 center-align">Emails: Marseille@laplateforme.io</p></br>
            <p class="black-text text-lighten-4 center-align ">Adresse: 8 Rue d'Hozier</p></br>
            <p class="black-text text-lighten-4 center-align ">Ville: Marseille 13002</p>
            </div>
        </div>
            <div class="footer-copyright">
            <div class="container white darken-1 center-align hoverable">
            <p><i class="material-icons">copyright</i>2022 Copyright Text</br></p>
            </div>
        </div>
        </footer>
<!-----Fin du Footeur-->

<!--Import jQuery before materialize.js-->
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    </body>
</html>