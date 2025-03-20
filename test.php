<?php
if (function_exists('mysqli_connect')) {
    echo "MySQLi está ativado!";
} else {
    echo "MySQLi NÃO está ativado!";
}

phpinfo(); 

?>
