<?php
	define("DB_NAME",				getenv("MARIADB_DATABASE"));
	define("DB_USER",				getenv("MARIADB_USER"));
	define("DB_PASSWORD",			getenv("MARIADB_PASSWORD"));
	define("DB_HOST",				getenv("WORDPRESS_MARIADB_HOST") . ":3306");
	define("DB_CHARSET",			getenv("MARIADB_CHARSET"));
	define("DB_COLLATE",			getenv("MARIADB_COLLATE"));


#=== for generate my unique security key===  https://www.wpbeginner.com/glossary/security-keys/

    define('AUTH_KEY',         'k<k-ADF)V!avd|DVF&hj82|uX-.iaG]xigcmq!DoipSTP=3j|&:#*?^rdWZB.L-W');
    define('SECURE_AUTH_KEY',  'U,)9[eX%{B&J]Ux_(JrVl4<L$I/38SC||>O=G2}M]#Ss`22`N*=rjZ,gFH`L_1)t');
    define('LOGGED_IN_KEY',    'w-[4JZ>aljTLxt;3/q?&ZooiN6X^%zEP{(*mkw;-||,iFQ/GAt~52<Sd3[]^`xLG');
    define('NONCE_KEY',        'D!*uLNibpEk)mp8Z*+Rtu4!#b>_E^R(UbLL}41CRbk|XTUXV-z*CfSyW;yCSY?=.');
    define('AUTH_SALT',        '.tFP[}]F#87J*fPkIgIw(e5{!_AJG%9}yr{]04Z^P;Ql}X(CvW,v)$%<FGI^%@PG');
    define('SECURE_AUTH_SALT', 'jFE2p6Pt?$OE:syr?+LdXI f.J{u;nl5Fs8zHE!wYpa-_$0]H5#OJ_S!>-du+;M9');
    define('LOGGED_IN_SALT',   'R0e0+J+%fhwh+QA4^1M]z/G-F?h8z-D[!y5ET{.=sUk~Kiq1CwJjl`orx+08!=<|');
    define('NONCE_SALT',       'kn3qZ=|M@:I8T.Qu;FS/CSs->-,p`0.k6 UlPhde-R~|`t5^2`,!W)CU59R?HY%!');

	#== by defining the constant as false you are practically forcing WordPress to load each script 
        #on the administration page individually rater than collectively. So in that case - If one 
        #script fails to load and work correctly, the others can still continue to operate correctly.
	define("CONCATENATE_SCRIPTS",	false);


	$table_prefix =					getenv("MARIADB_PREFIX");
    
    #== WP_DEBUG is a PHP constant (a permanent global variable) that can be used to trigger the 
     #“debug” mode throughout WordPress. It is assumed to be false by default and is usually set
     # to true in the wp-config.php file on development copies of WordPress.
	define("WP_DEBUG", true);
    if (!defined("ABSPATH"))
		define("ABSPATH", __DIR__ . "/");

	require_once ABSPATH . "wp-settings.php";