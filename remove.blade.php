<?php
$anything = shell_exec('grep -Ril "Tawk.To" /home/username/public_html');
echo "<pre>$anything</pre>";
?>