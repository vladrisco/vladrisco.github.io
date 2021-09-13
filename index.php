<?php
    $ip = getenv('HTTP_CLIENT_IP')?:
          getenv('HTTP_X_FORWARDED_FOR')?:
          getenv('HTTP_X_FORWARDED')?:
          getenv('HTTP_FORWARDED_FOR')?:
          getenv('HTTP_FORWARDED')?:
          getenv('REMOTE_ADDR');

?>

<!DOCTYPE html>
<html>
<head>
    <title> Hello World! </title>
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/typed.js"></script>
    <script type="text/javascript" src="js/my.js"></script>
    <script>
       var clientIp = <?php echo json_encode($ip) ?>;
    </script>
</head>
<body>
    <div class="e1">iAm@r00t ~$&nbsp;</div>
    <div class="e2 nodisplay">iAm@r00t ~$&nbsp;</div>
    <div class="e3 nodisplay">iAm@r00t ~$&nbsp;</div>
</body>
</html>
