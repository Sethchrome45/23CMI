<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "cmi-server.mysql.database.azure.com", "smensah", "Iamsaved2day!", "cmi_db", 3306, MYSQLI_CLIENT_SSL);


?>
