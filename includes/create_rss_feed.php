<?php
    header("Content-Type: application/rss+xml; charset=utf-8");
    $rss_feed = echo '<xml version="1.0"></xml>';
    $rss_feed = echo '<rss version="2.0"></rss>';
    $rss_feed = echo '<channel></channel>';

    foreach ($row as $rss => $value) {
      $rss_feed = echo '<item></item>';
      $rss_feed = echo '<title></title';
      $rss_feed = echo '<description></description>';
      $rss_feed = echo '<link></link>';
    }       

?>
