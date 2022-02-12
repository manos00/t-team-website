<!DOCTYPE html>
<html lang='de'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='login.css'>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!--Lato (WRG Homepage font)-->
        <link href='https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap' rel='stylesheet'> <!--Stardos Stencil (A-Team lookalike font)-->
        <title>T-Team - Login</title>
    </head>
    <body> 
        <div id='logincontainer'>
            <h1 style='text-align: center; font-family: "Font Name", Stardos Stencil'>Login</h1>
            <form id='loginform' action='confirmation.php' method='POST'>
                <label class='item1' for='username'>Benutzername:</label>
                <input class='inputbox item2' type='text' id='username' name='username'>
                <label class='item3' for='password'>Password:</label>
                <input class='inputbox item4' type='password' id='password' name='password'>
                <input class='btn' type='submit'>
            </form>
        </div>
    </body>
</html>