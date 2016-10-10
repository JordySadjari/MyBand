<?php

$result = $mysqli->query("SELECT * FROM bandarticles");

convertResultToArray($result);
