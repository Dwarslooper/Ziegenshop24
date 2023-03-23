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
    <h2>Kaufen für</h2><h2 id="itemprice"></h2>
</div>

    <a style="text-align: center; align-content: center">
<div class="center view">
<img src="https://static.wikia.nocookie.net/minecraft_gamepedia/images/f/f8/Goat_JE1_BE1.png" width="100px" height="100px">
<h2 id="buynow" style="color: red"></h2>
<h2 id ="desc"></h2>
<img id="viewimg">

<! SANDBOX PAYMENT >
<div id="smart-button-container">
<div style="text-align: center;">
  <div id="paypal-button-container"></div>
</div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
function initPayPalButton() {
paypal.Buttons({
  style: {
    shape: 'rect',
    color: 'black',
    layout: 'vertical',
    label: 'paypal',

  },

  createOrder: function(data, actions) {
    return actions.order.create({
      purchase_units: [{"amount":{"currency_code":"EUR","value":1}}]
    });
  },

  onApprove: function(data, actions) {
    return actions.order.capture().then(function(orderData) {

      // Full available details
      console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

      // Show a success message within this page, e.g.
      const element = document.getElementById('paypal-button-container');
      element.innerHTML = '';
      element.innerHTML = '<h3>Thank you for your payment!</h3>';

      // Or go to another URL:  actions.redirect('thank_you.html');

    });
  },

  onError: function(err) {
    console.log(err);
  }
}).render('#paypal-button-container');
}
initPayPalButton();
</script>

<! SANDBOX PAYMENT >



</div>

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

    let buyprice = i.get(id)[1]
       } catch {
           window.location.href = "/";
           console.log("lel");
           document.getElementById("thehtml").innerHTML = ""
    }
</script>
</html>
