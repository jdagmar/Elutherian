<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- includes all metatags -->
    <?php require_once 'partials/head.html'; ?>
    <title>Elutherian gym | Priser</title>
</head>

<body>

    <!-- renders the header tag including navbar -->
    <?php require 'partials/header.html'; ?>

    <main> 

        <div class="main-content-container">
            <h1>Medlemskap</h1>
            <p>
                Vi har ett stort utbud av fria vikter, maskiner från star trac, 
                löparband, crosstrainers, stepupmaskiner, cyklar och roddmaskiner.
                Vi har även kläder, kosttillskott och massage. Vid tecknande av
                medlemsskap kan en kostnadsfri introduktion till gymmet ges.
            </p>
        
            <div class="table-container">
                <h2>Här hittar ni alla våra priser:</h2>
                <table>
                    <tr>
                        <th>Gymkort</th>
                        <th>Vuxen</th>
                        <th>Student</th>
                    </tr>
                    <tr>
                        <td>Årskort</td>
                        <td>5000kr</td>
                        <td>4000kr</td>
                    </tr>
                    <tr>
                        <td>Halvårskort</td>
                        <td>3000kr</td>
                        <td>2500kr</td>
                    </tr>
                    <tr>
                        <td>Månadskort</td>
                        <td>600kr</td>
                        <td>500kr</td>
                    </tr>
                    <tr>
                        <td>Veckorkort</td>
                        <td>300kr</td>
                        <td>250kr</td>
                    </tr>
                    <tr>
                        <td>Engångsträning</td>
                        <td>120kr</td>
                        <td>100kr</td>
                    </tr>
                    <tr>
                        <td>Autogiro*</td>
                        <td>400kr/mån</td>
                        <td>350kr/mån</td>
                    </tr>
                </table>

                <p class="table-conditions">*Startavgift för autogiro: 200kr</p>
                <p class="table-conditions">*Uppsägningstid: 3 månader</p>

            </div>

            <h2>PT tjänster</h2>

            <p>
                Vi har mer än 20 års erfarenhet vad gäller träning och kost. 
                Våra personliga tränare erbjuder olika paket för att skräddarsy
                träning och kostupplägg som passar just dig för att nå dina mål. 
                Boka en kostnadsfri konsultation i receptionen.
            </p>
        </div>

    </main>

    <?php require 'partials/footer.html'; ?>

    <script src="functions.js"></script>

</body>
</html>