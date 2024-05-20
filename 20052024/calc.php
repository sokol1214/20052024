<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="skrypt.js"></script>
    <title>Projekt webowy inf 03</title>
</head>
<body>
    <div class="menu">
        <h3>Menu</h3>
        <ul>
            <li><a href="calc.php">Kalkulator spalania</a></li>
            <li><a href="cars.php">Informacje nt. pojazdu</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
        <br>
            <div class="wynik">
                
            </div>
    </div>
    <div class="window">
        <div class="header">
            <?php include_once("header.php"); ?>
            
        </div>
        <div class="content">
            <div class="calcForm">
            <form id="formCalc">
                <label for="paliwo">Spalanie na l/100km</label>    
                <input type="number" min=0 id="paliwo">
                <br>
                <label for="paliwo">Pokonany dystans w km</label>    
                <input type="number" min=0 id="dystans">
                <br>
                <label for="paliwo">Cena paliwa</label>    
                <input type="number" min=0 id="cena">
                <br> 
            </form>

            <button class="btnOblicz" onclick="oblicz();">OBLICZ</button>

            </div>
        </div>
        <div class="footer">
        <?php include_once("footer.php"); ?>
        </div>
    </div>    
</body>
</html>