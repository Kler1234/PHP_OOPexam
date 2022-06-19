<?php
require_once 'link.php';
echo (new Link())->setText('1<br>')->setAttr('href', '1.php')->show();
echo (new Link())->setText('2<br>')->setAttr('href', '2.php')->show();
echo (new Link())->setText('3<br>')->setAttr('href', '3.php')->show();
echo (new Link())->setText('4<br>')->setAttr('href', '4.php')->show();
echo (new Link())->setText('5<br>')->setAttr('href', '5.php')->show();
echo '<br>';