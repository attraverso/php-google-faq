<?php include 'faqs.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;600&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div id="header-up">
      <img id="brand-logo" src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png" alt="google logo">
      <span>Privacy & Terms</span>
    </div>
    <div id="header-low">
      <div id="header-low-lx">
      <ul>
        <li>Overview</li>
        <li>Privacy Policy</li>
        <li>Terms of Service</li>
        <li>Technologies</li>
        <li>FAQ</li>
      </ul>
      </div>
      <div id="header-low-rx">
        <span>prova@gmail.com</span>
      </div>
    </div>
  </header>
  <main class="container">
  <?php foreach ($faqs as $faq) {/* For every answer, explode and separate every time I find a para marker ('-NEWPARA-'). */
    $q_pieces = explode('-NEWPARA-',$faq['answer']);?>
    <div class="question">
      <h2><?php echo $faq['question'] /* print question */ ?></h2>
      <?php
        foreach ($q_pieces as $q_piece) { /* print answer in single/multiple paras depending on nr */
          ?><p><?php echo $q_piece; ?></p><?php
        };
      ?>
    </div>
    
  <?php
  }

  ?>
  </main>
  <footer class="container"></footer>
</body>
</html>
