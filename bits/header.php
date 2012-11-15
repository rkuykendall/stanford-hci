<?php
  
function i_am_at($page) {
    $current = $_SERVER['REQUEST_URI'];
    $current = str_replace('.php','',$current);
    $current = str_replace('stanford-hcicopy','',$current);
    $current = str_replace('/','',$current);
    if ($current == $page) {
      return true;
    } else {
      return false;
    }
}
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stanford HCI Prototype</title>
        <!-- meta name="viewport" content="width=device-width" -->
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
        <link href='bits/reset.css' rel='stylesheet' type='text/css'>
        <link href='bits/style.css' rel='stylesheet' type='text/css'>

        <!-- http://www.colourlovers.com/palette/1565190/Reasonr F0F2F7 0B62A4 C0D0F0 FF9900 FFC200 -->
        <link href='bits/uni-form.css' rel='stylesheet' type='text/css'>
        <link href='bits/default.uni-form.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="bits/jquery-1.8.2.min.js"></script> 
        <script type="text/javascript" src="bits/raphael-min.js"></script>
        <script type="text/javascript" src="bits/morris.min.js"></script>
        <script type="text/javascript" src="bits/uni-form.jquery.min.js"></script>
        <script>
          $(document).ready(function() {
            $('form.uniForm').uniform();
          });
        </script>

        <link media="screen and (max-width: 620px)" href='bits/mobile.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <navigation>
          <h1>Kick Me</h1>
          <ol>
            <?php if (i_am_at('') or i_am_at('index')) { ?>
              <li class="current"><a href="index.php">Get Started</a></li>
              <li class="inactive">Track Work</li>
              <li class="inactive">See Progress</li>
            <?php } elseif (i_am_at('track')) { ?>
              <li><a href="edit.php">Edit Information</a></li>
              <li class="current"><a href="track.php">Track Work</a></li>
              <li><a href="progress.php">See Progress</a></li>
            <?php } elseif (i_am_at('track-populated')) { ?>
              <li><a href="edit.php">Edit Information</a></li>
              <li class="current"><a href="track-populated.php">Track Work</a></li>
              <li><a href="progress.php">See Progress</a></li>
            <?php } elseif (i_am_at('progress')) { ?>
              <li><a href="edit.php">Edit Information</a></li>
              <li><a href="track.php">Track Work</a></li>
              <li class="current"><a href="progress.php">See Progress</a></li>
            <?php } elseif (i_am_at('edit')) { ?>
              <li class="current"><a href="edit.php">Edit Information</a></li>
              <li><a href="track.php">Track Work</a></li>
              <li><a href="progress.php">See Progress</a></li>
            <?php } ?>
          </ol>
        </navigation>
href="progress.php">See Progress</a></li>
            <?php } ?>
          </ol>
        </navigation>
