<html>
  <head>
    <title> contact form </title>
    <style>
      input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 10px auto;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 10%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      #contact_form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 50rem;
        margin: auto auto;
        text-align: center;
      }
    </style>
  </head>

  <body>
    <center>
      <h2 style="color:green"> Contact Form </h2>
    </center>
    <div id="after_submit">
      <center>
        <h3 style="color:red">
          <?php echo $error; ?>
        </h3>
      </center>
    </div>
    <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

      <div class="row">
        <label class="required" for="name">Your name:</label><br />
        <input id="name" class="input" name="name" type="text" value="<?php echo remember_value("name") ?>"
          size="30" /><br />

      </div>
      <div class="row">
        <label class="required" for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="<?php echo remember_value("email") ?>"
          size="30" /><br />
      </div>
      <div class="row">
        <label class="required" for="message">Your message:</label><br />
        <textarea id="message" class="input" name="message" rows="7"
          cols="30"><?php echo remember_value("message") ?></textarea><br />

      </div>

      <input id="submit" type="submit" value="Send" />


    </form>
  </body>

</html>