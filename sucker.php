<h1>Raw Form Data</h1>
<pre><?php print_r($_POST); ?></pre>

<h1>Form Input Values</h1>

<p>Your Name: <?= htmlspecialchars($_POST['name'] ?? '') ?></p>
<p>Section: <?= htmlspecialchars($_POST['section'] ?? '') ?></p>
<p>Card Number: <?= htmlspecialchars($_POST['cardnumber'] ?? '') ?></p>
<p>Card Type: <?= htmlspecialchars($_POST['cardtype'] ?? '') ?></p>

<?php

$name = trim($_POST['name'] ?? '');
$section = trim($_POST['section'] ?? '');
$cardnumber = trim($_POST['cardnumber'] ?? '');
$cardtype = trim($_POST['cardtype'] ?? '');

$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;

file_put_contents('suckers.html', $line, FILE_APPEND);

$all = file_get_contents('suckers.html');

echo '<h2>The current database contains:</h2>';
echo '<pre>' . htmlspecialchars($all) . '</pre>';

?>