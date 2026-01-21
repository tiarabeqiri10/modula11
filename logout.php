<?php

session_start();

include_once('config.php');

session_destory();

header("Location:login.php");