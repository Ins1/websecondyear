<?php
session_start();
session_unset();
session_destroy();
header('location:https://v.je/admin/index.php?page=admin_home_temp');
 ?>