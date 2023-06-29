<?php
$conN = mysqli_init();
mysqli_ssl_set($conN,NULL,NULL, "C:\Users\sethm\OneDrive\Documents\DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "cmi-server.mysql.database.azure.com", "smensah", "Iamsaved2day!", "cmi_db", 3306, MYSQLI_CLIENT_SSL);

?>
