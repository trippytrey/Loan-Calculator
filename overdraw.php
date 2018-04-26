<?php
$balance = $_GET['balance'];
$balance_str = '$' . number_format(floatval($balance), 2);
$request_str = '$' . number_format(floatval($_GET['request']), 2);
$interest_str = number_format(floatval($_GET['interest'])*100, 1).'%';
?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Redirection</title>
</head>
<body onload="document.getElementById('req').select();">

    <!-- Requests the user to enter a new number.  Loan is too much-->
    <p>
        <?php
        echo "  Your request for a loan of $request_str at " .
            "$interest_str per month<br />\n";
        echo "  would exceed your balance of $balance_str.<br />\n";
        echo "  Request a smaller loan."
        ?>
    </p>

    <form action="loan.php" method="post">
        <p>
            <?php
            echo "  Your balance: <input type='text' name='balance' size='7' value= $balance />";
            ?>
        </p>

    <p>
        Requested loan: <input type="text" id="req" name="request" size="7" />
    </p>

    <p><input type="submit" value="Submit" /></p>

    </form>
</body>
</html>