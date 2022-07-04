
<?php
echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
?>