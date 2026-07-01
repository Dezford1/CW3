<?php

$name = $_POST['name'] ?? '';
$section = $_POST['section'] ?? '';
$cardnumber = $_POST['cardnumber'] ?? '';
$cardtype = $_POST['cardtype'] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy Your Grade</title>
</head>
<body>

<h1>Thanks, sucker!</h1>

<h2>Raw Form Data</h2>

<pre>
<?php print_r($_POST); ?>
</pre>

<h2>Your Information</h2>

<p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>

<p><strong>Section:</strong> <?php echo htmlspecialchars($section); ?></p>

<p><strong>Card Number:</strong> <?php echo htmlspecialchars($cardnumber); ?></p>

<p><strong>Card Type:</strong> <?php echo htmlspecialchars($cardtype); ?></p>

<?php

$record = $name . ";" .
          $section . ";" .
          $cardnumber . ";" .
          $cardtype . PHP_EOL;

file_put_contents("suckers.html", $record, FILE_APPEND);

$database = file_get_contents("suckers.html");

?>

<h2>The current database contains:</h2>

<pre>
<?php echo htmlspecialchars($database); ?>
</pre>

</body>
</html>