<?php
echo navGroup(navItem('/products/index.php', 'Data &amp; Products'),
  navItem('/products/realtime', 'Real-Time HEZF Display') .
  navItem('/products/basic.html', 'Real-Time H Display (by Latitude)') .
  navItem('/products/realtime/', 'Blended Real-Time Data - Preliminary') .
  navItem('/products/downloads.php', 'Download') .
  navItem('/products/storm', 'Magnetic Disturbance Events') .
  navItem('/products/models.php', 'Models') .
  navItem('/products/map', 'Real-Time Geomagnetic Conditions') .
  navItem('/products/dst', 'Real-Time Dst Display') .
  navItem('/products/beta.php', 'Beta Products') .
  navItem('/products/otherdata.php', 'Other Sources of Data')
);
 ?>