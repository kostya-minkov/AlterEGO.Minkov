<?php

//header('Content-type: image/jpg');
//header('Content-Disposition: attachment; filename=log.jpg');


header('Content-Type: image/png');

header('Content-Disposition: attachment; filename="download.png"');

readfile('img.png');


?>
