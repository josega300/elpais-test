
; This is an ini file
; http://php.net/manual/en/function.parse-ini-file.php

; This is the Database connection settings
; doing it this way, lets the configs be ignored by git, 
; meaning, each user can have separate configs by copying config.sample.php
; and modifying it accordingly

[DB]
host = "localhost"
user = "root"
pass = "root"
database = "elpais_test"
