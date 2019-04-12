<!DOCTYPE html>
<html>
    <head>
        <title>CinemaMultisala</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" integrity="sha256-aan9tQnm7lVach/6JxYyrQRlheajRD+UBDwwWo3tAHQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	    <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="compera.php" method="POST" onready="choose()">
            <select class="input" name="chooseFilm" id="chooseFilm">
                <option value="0">-- seleziona film --</option>
            </select>
            <select class="input" name="chooseOrario" id="chooseOrario">
                <option value="0">-- selezione orario --</option>
            </select>
            <button class="button is-primary" id="button">Compra</button>
        </form>
    </body>
    <script type="text/javascript">
        function choose(){
            if (document.getElementById("chooseFilm")==0) {
                document.getElementById("chooseOrario").attr(disabled, true);
                document.getElementById("button").attr(disabled, true);
            } else if(document.getElementById("chooseOrario")==0){
                document.getElementById("button").attr(disable, true);
            }else{
                document.getElementById("button").attr(disabled, false);
            }
        }
    </script>
</html>