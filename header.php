<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Photography</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="menu">
        <header>
          <img class="menu-head" src="#">
            <span>Photography</span>
            <nav id="menu-list">
              <ul class="collapsibleList">
                <li>
                  <label for="menulist">Menu</label>
                  <input type="checkbox" id="menulist" />
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="work.php">Work</a></li>
                      <li><a href="about.php">Locations</a></li>
                    </ul>
                  </li>
                </ul>
            </nav>
        </header>
        <div id="PageContent">
