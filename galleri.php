<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- includes all metatags -->
    <?php require_once 'partials/head.html'; ?>
    <title>Elutherian gym | Galleri</title>
</head>

<body>

    <!-- renders the header tag including navbar -->    
    <?php require 'partials/header.html'; ?>

    <main>

        <div class="carousel">
            <figure>
                <img class="carousel__image" src="images/leg-push.jpeg" 
                alt="Kvinna gör benpress med gymutrustning"/>
            </figure>
            <div class="navigation">
                <div class="navigation__background--previous">
                    <button class="carousel__chevron carousel__previous-btn" aria-label="klicka för att se föregående bild">
                        <i class="fa fa-chevron-left carousel__chevron" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="navigation__background--next">
                    <button class="carousel__chevron carousel__next-btn" aria-label="klicka för att se nästa bild">
                        <i class="fa fa-chevron-right carousel__chevron" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="gallery">
            <ul class="gallery__slides">
                <li class="gallery__slide">
                    <figure class="figure--inline">
                        <img class="gallery__image" src="images/leg-push.jpeg" 
                        alt="Kvinna gör benpress med gymutrustning"/>
                    </figure>
                </li>
                <li class="gallery__slide">
                    <figure class="figure--inline">
                        <img class="gallery__image" src="images/kettelbells.jpeg" 
                        alt="Ett dussin uppradade kettelbells"/>
                    </figure>
                </li>
                <li class="gallery__slide">
                    <figure class="figure--inline">
                        <img class="gallery__image" src="images/barbell.jpeg" 
                        alt="En man lastar på en skivstång med vikt"/>
                    </figure>
                </li>
                <li class="gallery__slide">
                    <figure class="figure--inline">
                        <img class="gallery__image" src="images/plates.jpeg" 
                        alt="Viktplattor utspridda på ett golv"/>
                    </figure>
                </li>
                <li class="gallery__slide">
                    <figure class="figure--inline">
                        <img class="gallery__image" src="images/boxing-sack.jpeg"
                        alt="En man är mitt i ett hopp siktandes mot en boxningssäck"/>
                    </figure>
                </li>
            </ul>
        </div>

        <p class="gallery-text">
            Har ni vägarna förbi Eleutherian gym får ni mer än gärna komma in och ta en titt själv. 
            Eller varför inte ta en provträning som vi ger alla under januari som inte varit tidigare medlemmar.
        </p>

    </main>

    <?php require 'partials/footer.html'; ?>

    <script src="functions.js"></script>

</body>
</html>