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
</head>
<body>

    <style>
        .button { margin-left: 20px; padding: 10px 10px; background-color: #00a844; border-radius: 4px; width: fit-content; display: flex; cursor: pointer; color: white; text-decoration: underline; }
        .button:hover { margin-left: 20px; padding: 10px 10px; background-color: #00d844; border-radius: 4px; width: fit-content; display: flex; cursor: pointer; -webkit-transition: background-color 200ms ease-in; }
        .button:visited {color: white; text-decoration: underline;}
    </style>

    <div style="width: 100%; background-color: #00a244; height: 44px; color: white; justify-content: left; display: flex;">
    <a class="button" href="/">Shop</a>
    <a class="button" >Über uns</a>
    <a class="button" >FAQ</a>
    <a class="button" href="https://katzer.netlify.app/ja4.html">Impressum</a>
    <img src="https://cdn-icons-png.flaticon.com/512/69/69986.png?w=360" style="margin-left: auto; padding-right: 20px; float: right; cursor:url(https://dwarslooper.com/images/cursor.gif), auto;" onclick="basket();">
    </div>

</body>

    <script>
    function basket() {
    window.location.href = "/";
    }
    </script>

</html>
