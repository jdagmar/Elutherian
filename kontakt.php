<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- includes all metatags -->
    <?php require_once 'partials/head.html'; ?>
    <title>Elutherian gym | Kontakt</title>
</head>

<body>

    <!-- renders the header tag including navbar -->
    <?php require 'partials/header.html'; ?>

    <main>

        <h1 class="contact-info__header">Kontakta oss</h1>

        <div class="flex-container">
            <div class="contact-info">
                <figure>
                    <img class="contact-info__image" src="images/building.jpg" 
                    alt="Tegelbyggnad sedd nedifrån"/>
                </figure>
                <h2 class="contact-info__heading">Eleutherian Gym</h2>
                <p class="contact-info__text--padding">Gymvägen 40, 177 65 Stockholm</p>
                <p class="contact-info__text--padding">E-post: info@eleutherian.nu</p>
                <p class="contact-info__text--padding">Telefon: 070-9990099</p>
            </div>
            
            <div class="contact-info contact-info--margin"> 
                <p class="contact-info__text">
                    Har ni några frågor?
                    Du är välkommen att ringa, maila eller skicka formuläret till oss.
                </p>
                <form>
                    <fieldset>
                        <label for="name">Ditt namn (obligatoriskt):</label>
                        <input type="text" id="name"/>
                        <label for="email">Din e-post (obligatoriskt):</label>
                        <input type="text" id="email"/>
                        <label for="subject">Ämne:</label>
                        <input type="text" id="subject"/>
                        <label for="message">Meddelande:</label>
                        <textarea rows="7" id="message"></textarea>
                        <button class="send-btn" type="submit" value="Submit">Skicka</button>
                    </fieldset>
                </form>
            </div>
        </div>
    
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.8931080150792!2d18.055846215583877!3d59.33473841763157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d6726696f3f%3A0x5cdf2d4d5e71644d!2sApelbergsgatan+62%2C+111+37+Stockholm!5e0!3m2!1ssv!2sse!4v1516742389209" 
            width="800" height="600" style="border: 0" allowfullscreen></iframe>
        </div>

    </main>

    <?php require 'partials/footer.html'; ?>

    <script src="functions.js"></script>

</body>
</html>