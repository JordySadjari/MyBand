<?php

$result = $mysqli->query("SELECT * FROM animearticles");

convertResultToArray($result);
