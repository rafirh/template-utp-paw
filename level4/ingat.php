<?php
$masaIngat = 86400 + (2 * 60 * 60) + (22 * 60);
setcookie("nama_pelanggan", $nama, time() + $masaIngat, "/", "", false, true);
