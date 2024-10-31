<?php

return new PDO("mysql:host=db;dbname=sample_db", "sample_user", "sample_password", [PDO::ATTR_PERSISTENT => true]);
