<?php

$result = $mysqli->query("SELECT * FROM BandArticles");

$result = convertResultToArray($result);
