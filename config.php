<?php

define("ROOT", __DIR__);
define("HTTP", ($_SERVER["SERVER_NAME"] == "market.local")
    ? "http://market.local"
    : "http://your-webmasters.com/demo/market"
);