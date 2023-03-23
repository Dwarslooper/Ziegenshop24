<?php
$id = $_GET['id']
?>
<!DOCTYPE html>
<html lang="de" id="thehtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Ziegenshop24 - Nur das beste für die Ziege</title>
    <meta content="Ziegenshop" property="og:title" />
    <meta content="Jetzt nicht shoppen und dabei kein geld verlieren" property="og:description" />
    <meta content="https://ziegenshop24.de" property="og:url" />
    <meta content="https://cdn.discordapp.com/attachments/850636447744262154/926462497031069696/unknown.png" property="og:image" />
    <meta content="#00cc70" data-react-helmet="true" name="theme-color" />
</head>
    <!>
    <!>
<body>
    <?php require('../menu.php')?>
    <div style="background-color: green; color: black; width: fit-content; height: fit-content">
    </div>
<h1 id="title"></h1>
<div class="news">
    <h2 id="itemprice"></h2>
</div>

    <a style="text-align: center; align-content: center">
<div class="center view">
<img src="https://static.wikia.nocookie.net/minecraft_gamepedia/images/f/f8/Goat_JE1_BE1.png" width="100px" height="100px">
<h2 id="buynow" style="color: red"></h2>
<h2 id ="desc"></h2>
<img id="viewimg">

</div>
<br>
<br>
<style>
.btn { width: 200px; height: 80px; font-size: 20px; text-align: center; line-height: 60px; background-color: #ff2929; transition: background-color 0.2s, transform 0.2s; border: none; cursor:url(https://dwarslooper.com/images/cursor.gif), auto;}
.btn:hover { width: 200px; height: 80px; font-size: 20px; text-align: center; line-height: 60px; background-color: #cd2828; transform: scale(1.04); cursor:url(https://dwarslooper.com/images/cursor.gif), auto;}
</style>
<button type="submit" class="view center btn">In den Warenkorb</button><br><button type="submit" class="view center btn" onclick="buynow();">Sofort Kaufen</button>
<script> function buynow() { window.location.href = "/buy/?id=" + <?php echo $id ?>; }</script>
    </a>

<div id="sandbox"></div>



    <br>
    <br>
    <br>
    <h1 style="font-size: 40px">Kundenrezensionen</h1>
    <br>
    <div id="replyholder"></div>
    <br>
    <br>

</body>
<script src="../items.js"></script>
<script>
    try{
    var id = "<?php echo $id ?>";
    console.log(id);
    function getRandomArbitrary(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
    }
    var title = document.getElementById('buynow');
    title.innerHTML = "Kaufe " + i.get(id)[0] + " und bekomme " + getRandomArbitrary(10, 200) + " Ziegenshop24 Coins!";
    var title = document.getElementById('title');
    title.innerHTML = i.get(id)[0];
    var title = document.getElementById('viewimg');
    title.innerHTML = i.get(id)[4];
    var title = document.getElementById('desc');
    title.innerHTML = i.get(id)[3];
    var title = document.getElementById('itemprice');
    title.innerHTML = i.get(id)[1];

          let value = i.get(id)
          //console.log(value)
          //console.log(value[5][0].name)
          for(let n = 0; n < value[5].length ; n++){
            console.log(value[5][n].name)
            var parent = document.getElementById("replyholder");
            var item = document.createElement("div");
            var name = value[5][n].name;
            var msg = value[5][n].msg;
            var stars = value[5][n].stars
            if(stars == 1) starDisplay = "⭐";
            if(stars == 2) starDisplay = "⭐⭐";
            if(stars == 3) starDisplay = "⭐⭐⭐";
            if(stars == 4) starDisplay = "⭐⭐⭐⭐";
            if(stars == 5) starDisplay = "⭐⭐⭐⭐⭐";

            item.className = "center view"
            //item.onclick = function() {window.location.href = "view/?id=" + key;};

            item.innerHTML = "<h2>" + name + "</h2><a>" + starDisplay + "</a> <br> <a>" + msg + "</a>"

            parent.appendChild(item)
          }


       } catch {
           window.location.href = "/";
           console.log("lel");
           document.getElementById("thehtml").innerHTML = ""
    }
</script>
</html>
