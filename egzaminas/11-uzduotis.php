<?php
session_start();

if (!isset($_SESSION['IMONES'])) $_SESSION['IMONES'] = [];

$_SESSION['IMONES'][] = $_POST;

header('location: 11.html');