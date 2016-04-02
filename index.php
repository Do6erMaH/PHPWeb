<?php include_once 'php/action.php';?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
    <link rel="stylesheet" href="CSS/bootstrap.css" class="rev class">
    <link rel="stylesheet" href="CSS/bootstrap-theme.css">
    <script type="text/javascript" src="js/jquery-1.12.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/scrollT.js"></script>
    <title>New HMTL document by NewJect</title>

</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="container clearFix">
           <?PHP echo $nav?>
        </div>
    </div>
    <div id="home" name="home">
          <?PHP echo $home?>
    </div>
    <div id="service" class="box">
            <?PHP echo $service?>
    </div>
    <div id="portfolio" class="box">
          <?php echo $portfolio ?>
    </div>

    <div id="about" name="about" class="box">
          <?php echo $about ?>
    </div>
    <div id="team"  class="box">
          <?php echo $team ?>
    </div>
    <div id="brend">
          <?php echo $brend ?>
    </div>
    <div id="contact" name="contact" class="box">
          <?php echo $contact ?>
    </div>
    <div id="footer">
          <?php echo $footer ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("a").click(function() {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $('html, body').animate({ scrollTop: destination}, 1100);
            return false;
        });
    });

</script>
<script type="text/javascript">
    (function($) {
        $.lockfixed("#header",{offset: {top: 5, bottom: 10}});

    })(jQuery);
</script>

</body>
</html>