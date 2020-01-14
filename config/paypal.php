<?php
return array(

/** set your paypal credential **/

'client_id' =>'ARhrRE0dKJoByYJSkseJ5lYXIQ8fLtc4TAovRegy9TgVVh86nHLWUWn_ONRkxQAeZofbJ2eeB1Z7ZEDB',

'secret' => 'EGYZGcDx7AOOUYR_1cJGwjrpzdm_O_l-KrfEhkUXvjXKA4Oyh4kOh0VpspPGuOpuW4eY3VwTRlfs2QP_',

/**

* SDK configuration 

*/

'settings' => array(

/**

* Available option 'sandbox' or 'live'

*/

'mode' => 'sandbox',

/**

* Specify the max request time in seconds

*/

'http.ConnectionTimeOut' => 1000,

/**

* Whether want to log to a file

*/

'log.LogEnabled' => true,

/**

* Specify the file that want to write on

*/

'log.FileName' => storage_path() . '/logs/paypal.log',

/**

* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'

*

* Logging is most verbose in the 'FINE' level and decreases as you

* proceed towards ERROR

*/

'log.LogLevel' => 'FINE'

),
);