<?php
// Exercise 5
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo '<h1>Sorry</h1>';
        echo '<p>You did not fill out the form completely. <a href="buyagrade.html">Try again?</a></p>';
        exit;
    }
}
?>

<h1>Raw Form Data</h1>
<pre><?php print_r($_POST); ?></pre>

<h1>Form input values</h1>
<p>Your Name: <?= htmlspecialchars($_POST['name'] ?? '') ?></p>
<p>Section: <?= htmlspecialchars($_POST['section'] ?? '') ?></p>
<p>Card Number: <?= htmlspecialchars($_POST['cardnumber'] ?? '') ?></p>
<p>Card Type: <?= htmlspecialchars($_POST['cardtype'] ?? '') ?></p>

<?php
// Exercise 4
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