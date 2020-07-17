<?php
session_start();
unset($_SESSION['name']);
echo"<script>window.open('index.php','_self')</script>";

?>