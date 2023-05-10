<?php
// this file defines all values at the start of the code

// Run `node -e "console.log(require('crypto').randomBytes(32).toString('hex'))"`
// in terminal to generate secret
define('APPLICATION_NAME', 'cocktails_db');
define('JWT_SECRET', 'your_jwt_secret_here');


// Set database connection info here
// global variable - accessable from anywhere
// saves important and secret code
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'cocktails_db');