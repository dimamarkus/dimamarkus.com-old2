<?php

define('WP_HOME', 'http://wordtest.dubspot.com');
define('WP_SITEURL', WP_HOME . '/site/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content/');
define('WP_CONTENT_URL', WP_HOME . '/content/');

// define('WP_DEBUG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dusbpot_clone');

/** MySQL database username */
define('DB_USER', 'dima');

/** MySQL database password */
define('DB_PASSWORD', 'asdf123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5LP|Rq!i)k3]7n=`b(A?CYxrG|+KW9/G(+ V)y#ZbfcN7o$*cVv]e7aL-8d$RH|R');
define('SECURE_AUTH_KEY',  'Pp`vef#G-K,oi}>)j<qab4ZHLoyN@C~(z|!.b5Hl+Ji.`HcsWv0u?Ge+{q_ojYh;');
define('LOGGED_IN_KEY',    'ei9HG$Qqg-;kj+Y,X[lM1M-lp-1yZz8|E-wSBrp:@)$|NasR0}Oeaz%r|j4|g/7X');
define('NONCE_KEY',        ',!@~V8UWSz/t0J:pIcan3U =`72}vN]GSa.8ZfFVYE0{@as2ONpdLY|z(|=:_bQa');
define('AUTH_SALT',        '(d><b8+vcKESrei>n|9ZJ.Mp-u/2/@BINots?H`zDqy|+/`S1o)DUC?Se{Fz-Ov~');
define('SECURE_AUTH_SALT', 'G}o=.[0X-8={A2$X0A<nO9zO1pY+ZPfzXD4C*NLqHV;|H953n|IL]eMC|[:ZJ(t&');
define('LOGGED_IN_SALT',   'FA2~5K7sBA ]9i3>}1lsYvH`gsAABo9 MTI3xH0Ob0gcKJ[SgLLJ@|7z y1*De1t');
define('NONCE_SALT',       'zf:CYS`4EVP653Z}B`83P(Gdjtj|>?)ecb~&[-w#Aj0kp.M UY~DbpDz@NIX--lc');

/**#@-*/