<?php

define("ROOT", __DIR__);
define("HTTP", ($_SERVER["SERVER_NAME"] == "market")
    ? "http://market"
    : "http://market.your-webmasters.com"
);