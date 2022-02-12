<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!--Lato (WRG Homepage font)-->
    <link href='https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap' rel='stylesheet'> <!--Stardos Stencil (A-Team lookalike font)-->
    <title>T-Team - Startseite</title>
</head>
<div id='content'>
    <body>   
        <div id='navbar'>
            <div class='menucontainer' onclick='myFunction(this)'>
                <div class='bar1'></div>
                <div class='bar2'></div>
                <div class='bar3'></div>
            </div>
            <div class='navbaritem'>
                <a href='index.php'>Start&shy;sei&shy;te</a>
            </div>
            <div class='navbaritem'>
                <a href=''>FAQ</a>
            </div>
            <div class='navbaritem'>
                <a href=''>WRG</a>
            </div>
            <div class='navbaritem'>
                <a href=''>Über uns</a>
            </div>
        </div>
        <br>
        <div id='welcomeDiv'>
            <div>
                <img class='img' src='media/krombiCropped.jpg' alt='"Krombacher Krokodil" mit Brille'>
            </div>
            <div class=text>    
                <h1>T-TEAM</h1>
                Willkommen auf der Website des T-Teams!
                <br>
                Sie haben ein technisches Problem? Dann sind sie hier genau richtig! Wir kümmern uns gerne um all Ihre Technikfragen.
                <br>
                Falls Sie einen spezifischen Auftrag aufgeben wollen, haben Sie hier die Möglichkeit ein kurzes Formular auszufüllen um uns von Ihrer Problematik zu berichten, woraufhin sich ein T-Team Mitglied mit dieser befassen wird.
                <!--fix this weird linebreak stuff-->
                <br>
                <br>
                <!--<button onclick='location.href='#formcontainer'' type='button' class='btn'>Zum Formular</button>-->
                <a href='#formcontainer' class='btn'>Wei&shy;ter zum For&shy;mu&shy;lar</a>
                <br>
                <br>
                Sollten Sie eine allgemeine Frage haben, welche auch andere Lehrer betreffen könnte, so können sie diese im Forum stellen und wir werden versuchen Ihnen eine Erklärung zur Lösung des Problems zu liefern.
                <br>
                <br>
                <a href='FAQ.php' class='btn'>Wei&shy;ter zum For&shy;um/FAQ</a>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div id='formcontainer'>
            <div class='text'>
                <h1>Auf&shy;trags&shy;for&shy;mu&shy;lar</h1>
                <form class='form' action='confirmation.php' method='POST'>
                        <label for='name'>Name:</label>
                        <input class='inputbox' placeholder='Mustermann' type='text' id='name' name='name'>
                        <label for='email'>Email:</label>
                        <input class='inputbox' placeholder='max.mustermann@mail.de' type='email' id='email' name='email'>
                        <label for='category'>Ka&shy;te&shy;go&shy;rie:</label>
                        <select style='text-align: center; color: var(--text)' class='inputbox' name='category' id='category'>
                            <option value=''>Wählen Sie eine Kategorie</option>
                            <option value='red'>Audio</option>
                            <option value='green'>Video</option>
                            <option value='blue'>Software</option>
                            <option value='blue'>Anderes</option>
                        </select>
                        <label for='room'>Raum:</label>
                        <input class='inputbox' placeholder='z.B. 212' type='number' min='1' max='350' id='room' name='room'>
                        <label for='problem'>Pro&shy;blem:</label>
                        <textarea style='font-family: "Font Name", lato' class='inputbox' placeholder='Ihr technisches Problem' id='problem' name='problem'></textarea>
                    <button class='btn' type='submit'>Ab&shy;sen&shy;den</button>
                </form>
                <br>
            </div>  
        </div>
        <br>
    </body>
    <footer>
        <div class='footerrow'>
            <a href='#top'>Zu&shy;rück nach oben</a>
        </div>
        <br>
        <div class='footerrow'>
            <a>Im&shy;pres&shy;sum</a>
            <a>Haf&shy;tungs&shy;aus&shy;schluss</a>
            <a>Da&shy;ten&shy;schutz</a>
            <a>Über uns</a>
        </div>
    </footer>
</div>
<script>
    function myFunction(x) {
        x.classList.toggle('change');
}
</script>
</html>