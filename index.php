<?php
ob_start();
//commit modified connected with webserver
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($data['sendlogin'])) {
  $ddd =  $data['ddd'];
  $phone = $data['phone'];
  $url = "https://api.whatsapp.com/send?phone=$ddd$phone";
  header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    
    <title>WhatsApp</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet"href="include/style.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link rel="manifest" href="manifest.json" />
<!-- ios support -->
<link rel="apple-touch-icon" href="imgs/img_72.png" />
<link rel="apple-touch-icon" href="imgs/img_96.png" />
<link rel="apple-touch-icon" href="imgs/img_128.png" />
<link rel="apple-touch-icon" href="imgs/img_144.png" />
<link rel="apple-touch-icon" href="imgs/img_152.png" />
<link rel="apple-touch-icon" href="imgs/img_192.png" />
<link rel="apple-touch-icon" href="imgs/img_384.png" />
<link rel="apple-touch-icon" href="imgs/img_512.png" />
<meta name="apple-mobile-web-app-status-bar" content="#db4938" />
<meta name="theme-color" content="#db4938" />
    
</head>

  <body>
  <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="post">
        <h3>WhatsApp - ContactLess</h3>

        <label for="ddd">DDD</label>
        <input type="text" placeholder="Insira o DDD" id="ddd" name="ddd">

        <label for="phone">Digite o Telefone</label>
        <input type="text" placeholder="Digite o Telefone" id="phone" name="phone">

        <button  type="submit" name="sendlogin" value="access" >Enviar Mensagem Agora!</button>
    </form>
  
  <script src="include/app.js"></script>
  </body>
</html>