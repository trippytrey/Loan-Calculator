<?php
define('INTEREST', 0.20);

/** convert strings to numbers */
$balance = floatval($_POST['balance']);
$request = floatval($_POST['request']);

/** checks if balance is less than the request. If so throws error from overdraw.php*/
if ( $balance < $request * (1 + INTEREST) ) {
    header("Location: overdraw.php?balance=$balance&request=$request&interest=" . INTEREST);
}

$request_str = number_format($request, 2);
$due_str = number_format($request * (1 + INTEREST), 2);
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Redirection</title>
</head>
<body>
<p>
    <!-- Prints that the request is approved. -->
    <?php
    echo "    Your request for \$$request_str is approved.<br />";
    echo "    \$$due_str is due in one month.";
    ?>
</p>
</body>
</html>

