<?php

return new PDO("mysql:host=db;dbname=sampledb", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
