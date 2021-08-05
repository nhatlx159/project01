<?php
session_start();
if(session_destroy())
{
header("Location: http://localhost:8888/project/index/login.html");
}
?>