{"changed":false,"filter":false,"title":"database.php","tooltip":"/application/config/database.php","value":"<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');\n/*\n| -------------------------------------------------------------------\n| DATABASE CONNECTIVITY SETTINGS\n| -------------------------------------------------------------------\n| This file will contain the settings needed to access your database.\n|\n| For complete instructions please consult the 'Database Connection'\n| page of the User Guide.\n|\n| -------------------------------------------------------------------\n| EXPLANATION OF VARIABLES\n| -------------------------------------------------------------------\n|\n|\t['hostname'] The hostname of your database server.\n|\t['username'] The username used to connect to the database\n|\t['password'] The password used to connect to the database\n|\t['database'] The name of the database you want to connect to\n|\t['dbdriver'] The database type. ie: mysql.  Currently supported:\n\t\t\t\t mysql, mysqli, postgre, odbc, mssql, sqlite, oci8\n|\t['dbprefix'] You can add an optional prefix, which will be added\n|\t\t\t\t to the table name when using the  Active Record class\n|\t['pconnect'] TRUE/FALSE - Whether to use a persistent connection\n|\t['db_debug'] TRUE/FALSE - Whether database errors should be displayed.\n|\t['cache_on'] TRUE/FALSE - Enables/disables query caching\n|\t['cachedir'] The path to the folder where cache files should be stored\n|\t['char_set'] The character set used in communicating with the database\n|\t['dbcollat'] The character collation used in communicating with the database\n|\t\t\t\t NOTE: For MySQL and MySQLi databases, this setting is only used\n| \t\t\t\t as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7.\n| \t\t\t\t There is an incompatibility in PHP with mysql_real_escape_string() which\n| \t\t\t\t can make your site vulnerable to SQL injection if you are using a\n| \t\t\t\t multi-byte character set and are running versions lower than these.\n| \t\t\t\t Sites using Latin-1 or UTF-8 database character set and collation are unaffected.\n|\t['swap_pre'] A default table prefix that should be swapped with the dbprefix\n|\t['autoinit'] Whether or not to automatically initialize the database.\n|\t['stricton'] TRUE/FALSE - forces 'Strict Mode' connections\n|\t\t\t\t\t\t\t- good for ensuring strict SQL while developing\n|\n| The $active_group variable lets you choose which connection group to\n| make active.  By default there is only one group (the 'default' group).\n|\n| The $active_record variables lets you determine whether or not to load\n| the active record class\n*/\n\n$active_group = 'default';\n$active_record = TRUE;\n\n$db['default']['hostname'] = '0.0.0.0';\n$db['default']['username'] = 'thducuit';\n$db['default']['password'] = '';\n$db['default']['database'] = 'c9';\n$db['default']['dbdriver'] = 'mysql';\n$db['default']['dbprefix'] = '';\n$db['default']['pconnect'] = TRUE;\n$db['default']['db_debug'] = TRUE;\n$db['default']['cache_on'] = FALSE;\n$db['default']['cachedir'] = '';\n$db['default']['char_set'] = 'utf8';\n$db['default']['dbcollat'] = 'utf8_general_ci';\n$db['default']['swap_pre'] = '';\n$db['default']['autoinit'] = TRUE;\n$db['default']['stricton'] = FALSE;\n\n\n/* End of file database.php */\n/* Location: ./application/config/database.php */","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":506,"scrollleft":0,"selection":{"start":{"row":50,"column":30},"end":{"row":50,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":35,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1443003021156}