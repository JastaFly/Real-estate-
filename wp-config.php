<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'vigrum-test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dc@Pq<6f(JXTR[0O1<}|,?Bcm _C`hRR8*EP5]MU?W^:k$$GMq,V[]0xSB`>*k+B' );
define( 'SECURE_AUTH_KEY',  '{-0auTK?7+C.n4#Fa!M[lCicL4Gd>[qbZp,[:!+tc+u eI]m^e54#Pr@W5#bj-ap' );
define( 'LOGGED_IN_KEY',    'I$@,1egQV^ZH8+VX+U}Ava&$qrCu]!2|}uwoI;RN7IAV=BG={qtNz3e9@#LvRIg/' );
define( 'NONCE_KEY',        'Sn?O`kuf~ve2]$oOoy303xT{4bgXFoC|kPnI4fCFQJPZW?tDtfp]7Pr| <?qQm!F' );
define( 'AUTH_SALT',        'DKYreFy7VLNR+Ps-Fd?./nZLAeb!p%]1KV<GAP,5W)/OxbQ;.QoYS@Dl]t<Q1dc-' );
define( 'SECURE_AUTH_SALT', '{pavyC/O6U*z>!-eo5GASvxX%lD<?;jqn<YqLju9?+p={`yo-@<alI`5F>YGSQV`' );
define( 'LOGGED_IN_SALT',   'M!=.k#QC!:{E1K$jBXZ7XD_(i`N(fr.(hOiF]MH9j;.$/gMM#t|OZ5:zQx:_x^]|' );
define( 'NONCE_SALT',       'l0vTo*!3U:0-~-Q52{dT0bz_c@W)D{GX-@d<O4D?$+T^4@$K=r$XWfbRLcS:TWk)' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
