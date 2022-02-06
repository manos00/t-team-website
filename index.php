<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!--Lato (WRG Homepage font)-->
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet"> <!--Stardos Stencil (A-Team lookalike font)-->
    <title>T-Team - Startseite</title>
</head>
<div id='content'>
    <body>   
        <div id='navbar'>
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
                <img class="img" src='media/krombiCropped.jpg'>
            </div>
            <div class=text>    
                <h1>T-TEAM</h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti sit inventore quae, expedita libero quia repellat molestias incidunt, magnam obcaecati esse numquam fugit necessitatibus, consequatur rem laudantium tempora accusantium quasi?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam laborum minus repellendus sapiente atque quidem corrupti temporibus in qui aliquam labore esse unde neque quia, inventore soluta quasi illum quae perferendis culpa quaerat consectetur dolore. Totam aut exercitationem blanditiis numquam.
                <!--fix this weird linebreak stuff-->
                <br>
                <br>
                <!--<button onclick='location.href='main.php#formcontainer'' type='button' class='btn'>Zum Formular</button>-->
                <a href='main.php#formcontainer' class='btn'>Weiter zum Formular</a>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div id='formcontainer'>
            <div class='text'>
                <h1>For&shy;mu&shy;lar</h1>
                <form class="form" action="confirmation.php" method="POST">
                    <div class="formelement">
                        <label for="name">Name:</label>
                        <input class="inputbox" placeholder="Mustermann"type="text" id="name" name="name">
                    </div>
                    <div class="formelement">
                        <label for="email">Email:</label>
                        <input class="inputbox" placeholder="max.mustermann@mail.de" type="email" id="email" name="email">
                    </div>
                    <div class="formelement">
                        <label for="category">Kategorie:</label>
                        <select style="text-align: center; color: var(--text)" class="inputbox" name="category" id="category">
                            <option value="">Wählen Sie eine Kategorie</option>
                            <option value="red">Audio</option>
                            <option value="green">Video</option>
                            <option value="blue">Software</option>
                            <option value="blue">Anderes</option>
                        </select>
                    </div>
                    <div class="formelement">
                        <label for="room">Raum:</label>
                        <input class="inputbox" placeholder="z.B. 212" type="number" min="1" max="350" id="room" name="room">
                    </div>
                    <div class="formelement">
                        <label for="problem">Problem:</label>
                        <textarea style="font-family: 'Font Name', lato" class="inputbox" placeholder="Ihr technisches Problem" id="problem" name="problem"></textarea>
                    </div>
                    <button class="btn" type="submit">Absenden</button>
                </form>
                <br>
            </div>
        </div>
        <br>
    </body>
    <footer>
        <div class='footerrow'>
            <a href='index.php#top'>Zu&shy;rück nach oben</a>
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
</html>