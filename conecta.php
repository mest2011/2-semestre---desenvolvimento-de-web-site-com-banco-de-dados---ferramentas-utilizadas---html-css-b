<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"CONCESSIONARIA") or
 die("erro ao conectar ao banco" . mysql_error($con));
