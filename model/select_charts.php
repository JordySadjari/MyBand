<?php

$result = $mysqli->query("SELECT * FROM charts");

convertResultToArray($result);
