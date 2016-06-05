<?PHP

require 'setup_functions.php';

$isSetup = setup_db();

if ($isSetup == 0)
{
  echo 'database set up. Please check that everything is in order, otherwise make a bug report.';
} else {
  echo "database couldn't be set up. Please please please make a bug report.";
}

echo "you can close this window now.";

?>
