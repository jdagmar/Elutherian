
<!DOCTYPE html>
<html lang="sv">

<head> 
    <!-- includes all metatags -->
    <?php require_once 'partials/head.html'; ?>
    <title>Elutherian gym | Hem</title>
</head>

<body>

    <!-- renders the header tag including navbar -->
    <?php require 'partials/header.html'; ?>

    <main>

        <div class="hero__container">
            <figure>
                <img class="hero__image" src="images/straps.jpeg" alt="kvinna tränar med träningsband"/>
            </figure>
        </div>

        <div class="page-introduction">
            <h1 class="page-introduction__header">Välkommen till Elutherian gym!</h1>
            <p class="page-introduction__text">
                Eleutherian är en plats för alla. Det spelar ingen roll om du är nybörjare, 
                bodybuilder eller någonstans mitt
                emellan. Gymmet riktar sig till alla som vill träna på ett bra gym med bra utrustning.
            </p>
        </div>

        <div class="promotion-banner">
            <figure>
                <img class="promotion-banner__image" src="images/gloves.jpeg" 
                 alt="träningshandksar och skivstänger utspridda på ett golv"/>
            </figure>
            <div class="promotion-banner__text-container">
                <span class="promotion-banner__text">Bli medlem redan idag</span>
                <i class="fa fa-heart-o promotion-banner__icon" aria-hidden="true"></i>
            </div>
        </div>

        <div class="page-introduction">
            <p class="page-introduction__text">
                På Eleutherian tränar du på den senaste styrketränings och kardioutrustningen. 
                Vi erbjuder alla våra kunder gratis gymintroduktion och ett grundtränings-program så att du kan 
                komma igång med träningen på ett bra sätt och snabbt få resultat. Med hjälp av ett kortsystem kan 
                vi erbjuda generösa öppettider: Alla dagar i veckan: 04.00-24.00
            </p>
        </div>

    </main>

    <?php require 'partials/footer.html'; ?>

    <script src="functions.js"></script>

</body>
</html>