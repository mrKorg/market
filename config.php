<?php

define("ROOT", __DIR__);
define("HTTP", ($_SERVER["SERVER_NAME"] == "market")
    ? "http://market"
    : "http://your-webmasters.com/demo/market"
);