<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageinscription.css">
    <link rel="stylesheet" href="{{ asset("assets/pageinscription.css") }}">
    <title>Document</title>
</head>
<body>
    <div class="rectangle">
        <div class="rectangle_junior">

            <form action="#">
                <div class="formulaire">
                    <header>Connexion</header>
                    <div classe="nom">
                        <label for="">Nom</label>

                        <input type="text">
                    </div>



                        <label for="">Mot de passe</label>
                    <div class="motpasse">
                        <input type="text">
                    </div>
                    <div class="envoie">
                        <div class="cinter1">
                             <footer> <input type="submit" ></footer>
                         </div>
                         <nobr>---Si vous n'avez pas de  compte?---</nobr>
                         <div class="cinter2">

                            <button type="submit"><a href="{{route('ma-page2')}}"> Inscription</a></button>
                         </div>

                     </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
