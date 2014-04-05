<?php

define('WP_HOME', 'http://dimamarkus.com');
define('WP_SITEURL', WP_HOME . '/site/');

define('WP_CONTENT_DIR', APP_ROOT . '/public/content/');
define('WP_CONTENT_URL', WP_HOME . '/content/');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_dima');

/** MySQL database username */
define('DB_USER', 'wp_dima');

/** MySQL database password */
define('DB_PASSWORD', 'wp_dima');

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
define('AUTH_KEY',         '@As:v+]+<)(?jxy.j@+3.u32<EFmA#H=[hx`zR$+w av^4[oL[(e.,CIBr[4T4^ ');
define('SECURE_AUTH_KEY',  '/j]E3ksH:vU~%%P-m8b}dW3DaJP*)L!o*A;V63k$?%m9DyY>]|vq%@A?B2`.u>a=');
define('LOGGED_IN_KEY',    '-t*%t9l+hK#{5mK0.KVbS;*UwTgW58`Xxp+MWxHi9TeB+`[[;pUY]HNl<q(;],f<');
define('NONCE_KEY',        ',uI[0=[d8w7b 6dS+G.RC7PoNPK_;xf6U7LJPwhIy=p)|R-jcY4}R.O+i:r/G=q:');
define('AUTH_SALT',        '7@d:xMyz:C:`~-K$FL/Gj+{iq|7=bZSZhN+K&r_C]tPRJyS7?2DHO_kio=qDK#He');
define('SECURE_AUTH_SALT', 'X{6+sTt!B35{izB/znM|hH4V!+Z3x-?EaPKAzh.MdkC^{.%;k0B:y:,f ,. }>vj');
define('LOGGED_IN_SALT',   'oe(3~N|*^t9s|7N5rc)&3/4M2bsz!G]Oli-GRdNK_%*nc,T_0#Tcg#J-`=U$[v%B');
define('NONCE_SALT',       'MH10JU2.Jg#e./PW/f=:#vX?1TUeMsEs9.)SCa^ujz+/q&%iri({ WGh;$z#.deI');
