<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contac-title">
       <h1>Say Hallo</h1>
       <h2>We are always ready to serve you</h2>
    </div>
    <div class="contact-form">
       <form id="contact-form"  action="contact-form-handler.php" method="post">
       <input class="form-control" type="text" name="name" placeholder="Your Name" required><br>
       <input class="form-control" type="text" name="mail" placeholder="Your E-mail">
       <input class="form-control" type="text" name="subject" placeholder="subject"><br>
       <textarea class="form-control" name="message" placeholder="Message" rows="4" required></textarea><br>
       <button type="submit" class="submit" value="Send Message"></button> 
       </form>
        
    </div>
</body>
</html>
