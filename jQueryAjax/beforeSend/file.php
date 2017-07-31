<?php
sleep(2);
$fullname = $_GET['fullname'];
$lastseen = $_GET['lastseen'];
echo "Last seen of {$fullname} at {$lastseen}";
