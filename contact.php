<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php
    include_once 'header.php';
  ?>
  <main id="contact-main">
    <section id="contact-wrapper">
      <div id="contact-left">
        <h1>CONTACT ME</h1>
        <p>I am always open to hear your ideas.</p>
        <form action="contact-action.php" method="POST" id="contact-form">
          <label for="contact-sender-name">You full name</label>
          <input type="text" id="contact-sender-name" name="name" placeholder="John Smith">
          <label for="contact-sender-subject">Subject</label>
          <input type="text" id="subject" placeholder="Colab">
          <label for="contact-sender-email">Email</label>
          <input type="email" name="" id="contact-sender-email" name="email" placeholder="JohnSmith@email.com">
          <label for="contact-sender-message">Message</label>
          <textarea name="" id="contact-sender-message" cols="50" rows="10" name="message"
            placeholder="Hi! My name is John Smith, let`s work togethor!" style="resize: none"></textarea>
          <input type="submit" value="Send" name="submit" id="contact-form-btn">
        </form>
      </div>
      <div id="contact-right">
        <img src="sprites/ImgProfil3.jpg" alt="" id="contact-picture">
      </div>
    </section>
  </main>
  <?php
    include_once 'footer.php';
  ?>
</body>

</html>