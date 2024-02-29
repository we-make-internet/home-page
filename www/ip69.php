<?php
/* Morry's "Does My IP Address Have 69 In It?" */
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Does My IP Address Have 69 In It?</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This website checks if your IP address has 69 in it">
    <meta name="keywords" content="69, the sex number, nice, sixty nine, IP address">
    <meta name="author" content="Morry Kolman aka WTTDOTM">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@WTTDOTM">
    <meta name="twitter:title" content="Does My IP Address Have 69 In It?">
    <meta name="twitter:description" content="This website will tell you if your IP has the number 69 in it.">
    <meta name="twitter:image" content="https://i.imgur.com/JRmD1Og.png">

    <style>

      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 3vh;
      }
        a:link {
      color: black;
      background-color: transparent;
      }

      a:visited {
        color: black;
        background-color: transparent;

      }

      h1 {
        font-size:30vw;
        font-family:helvetica;
        text-align:center;
        margin-bottom: 0px;
        margin-top: 0;
      }

      h3 {
        font-size:6vw;
        font-family:helvetica;
        text-align:center;
        margin-top:10px;
        margin-bottom:10px
      }

      .lowerLinesBigger {
        font-size:2vw;
        margin-top:15px;
        font-family:helvetica;
        text-align:center;
        margin-bottom:1vw
      }

      .lowerLinesSmaller {
        font-size:0.8vw;
        margin-top:5px;
        font-family:helvetica;
        text-align:center
      }
      @media only screen and (max-width: 768px) {
        .container {
          margin-top: 20vh;
          padding-right: 5vw;
          padding-left: 5vw;
        }
        .lowerLinesBigger {
          font-size: 2vh;
          margin-bottom: 4vw;
        }

        .lowerLinesSmaller {
          font-size: 1.5vh;
        }
      }
    </style>
  </head>

  <body class="body" id="body">
    <div class="container">

    <div>
    <?php
    if(strpos($_SERVER['REMOTE_ADDR'], '69') !== false) {
      echo "<h1>Yes</h1><h3>Nice</h3>";
    } else {
      echo "<h1>No</h1><h3>Not Nice</h3>";
    }
    ?>
    </div>

  <h3 class="lowerLinesBigger">
      This public resource was made by <a href="http://www.wttdotm.com">WTTDOTM</a>

  </h3>
  <h3 class="lowerLinesSmaller">
      Go somewhere else for your full IP address nerd

  </h3>
  <h3 class="lowerLinesSmaller">
      Also follow me on <a href="https://www.twitter.com/wttdotm">twitter</a>

  </h3>
</div>

  </body>
</html>
