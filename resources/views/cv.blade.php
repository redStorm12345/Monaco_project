
@extends("layouts.template")

@section("corps")
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MON SITE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset("assets/Style.css") }}">
    <link rel='stylesheet' type='text/css' media='screen' >
    <script src='main.js'></script>
</head>

<body>
    <div class="entete">
        <div class="identite">
            <h4>
                Monaco David
            </h4>
            <h4>
                web developper
            </h4>
            <h5 class="photo">
                <img src="{{ asset("assets/Picture 2023-12-13 15-16-23.png") }}" alt="Dr Monaco" height="200" width="200">
            </h5>
        </div>
    </div>
    <div class="contenu">
        <div class="menu1">
            <h5>
                MENU
            </h5>
            <h5>
                <ul>
                    <li>
                        <a href="#information">INFORMATIONS PERSONNELLES</a>
                    </li>
                    <li>
                        <a href="#competence">COMPETENCE</a>
                    </li>
                    <li>
                        <a href="#experience professionnelle">EXPERIENCE PROFESSIONNELLE</a>
                    </li>
                    <li>
                       <a href="#cursus">CURSUS SCOLAIRE</a>
                    </li>
                    <li>
                        <a href="#loisir">LOISIR</a>
                    </li>
                    <li>
                        <a href="#langue">LANGUE</a>
                    </li>
                </ul>
            </h5>
        </div>
        <div class="corps">
            <div id="information">
                <h3>
                    INFORMATIONS PERSONNELLES
                </h3>
                <br>
                <br>
                <h4>
                    <ul>
                        <li>
                            <p><strong>Nom:</strong> Monaco Xavier Guy David Aime</p>
                        </li>
                        <li>
                            <p><strong>Âge:</strong> 20 ans</p>
                        </li>
                        <li>
                            <p><strong>Email:</strong> davidmonaco841@gmail.com</p>
                        </li>
                        <li>
                            <p><strong>Téléphone:</strong> +225 0142803338</p>
                        </li>
                        <li>
                            <p><strong>Adresse:</strong> 390 Abidjan, Côte d'Ivoire</p>
                        </li>
                    </ul>
                </h4>
                <br>
                <br>
                <br>
            </div>
            <div id="competence">
                <h3>
                    COMPETENCE
                </h3>
                <br>
                <br>
                <ul>
                    <li>
                        <h4>
                            Développement Web
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Création d'une Base de Données
                        </h4>           
                    </li>
                    <li>
                        <h4>
                            Administration Réseau
                        </h4>
                    </li>
                </ul>
                <br>
                <br>
                <br>
            </div>
            <div id="experience professionnelle">
                <h3>
                    EXPERIENCE PROFESSIONNELLE
                </h3>
                <br>
                <br>
                <ul>
                    <li>
                        <h4>
                            AUCUNE
                        </h4>
                    </li>
                </ul>
                <br>
                <br>
                <br>
            </div>
            <div id="cursus">
                <h3>
                    CURSUS SCOLAIRE
                </h3>
                <br>
                <br>
                <ul>
                    <li>
                        <h4>
                            CEP (Certificat d'Études Primaires)
                        </h4>
                        <h4>
                            Ecole privé catholique Saint Kizito Abidjan
                        </h4>
                        <h4>
                            (2008-2009; 2013-2014)
                        </h4>
                    </li>
                    <li>
                        <h4>
                            BEPC (Brevet d'Études du Premier Cycle)
                        </h4>
                        <h4>
                            Collège moderne le panthéon 2 Abidjan
                        </h4>
                        <h4>
                            (2014-2015; 2017-2018)
                        </h4>
                    </li>
                    <li>
                        <h4>
                            BAC D(Baccalauréat Scientifique)
                        </h4>
                        <h4>
                            Lycée Municipal d’Adjamé Williamsville Abidjan
                        </h4>
                        <h4>
                            (2018-2019; 2020-2021)
                        </h4>
                    </li>
                </ul>
                <br>
                <br>
                <br>
            </div>
            <div id="loisir">
                <h3>
                    LOISIR
                </h3>
                <br>
                <br>
                <ul>
                    <li>
                        <h4>
                            Voyage
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Sport
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Apprentissage
                        </h4>
                    </li>
                </ul>
                <br>
                <br>
                <br>
            </div>
            <div id="langue">
                <h3>
                    LANGUE
                </h3>
                <br>
                <br>
                <ul>
                    <li>
                        <h4>
                            Français
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Anglais
                        </h4>
                    </li>
                    <li>
                        <h4>
                            Russe
                        </h4>
                    </li>
                </ul>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
