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
define( 'DB_NAME', 'languages_school' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'languages-school-admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '95azB60GCo' );

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
define( 'AUTH_KEY',         'GS<^wwM1o:BE/vPg)M_ UKqWBCPz3I0$_lLHBeLM=V2$60A,y(|2)(AY/dtET`=,' );
define( 'SECURE_AUTH_KEY',  'xapf0!5/A3=285/`xebvAn^O7rXXaD?uc}6=v=G:6=I?~PuC|{DRHpcu< ^+{Q9A' );
define( 'LOGGED_IN_KEY',    '+m<0o,_8UVlPsjwrSX e(o-3&>UGgYx$51F_RA*8o,7JT:(hPf(Z-oq{TZD:?m2g' );
define( 'NONCE_KEY',        '/_J ~I3-`Z:^Zn?A?#h~;DgHi.j@x|/2H;JFsJNO?7G%_ioOSDajlo:1U*rH*3{k' );
define( 'AUTH_SALT',        '!(p&jLRjyF>^ngn.0 x-#:Zr!>YEV=9yKZdV/pi-%9WxtZSF-lZJViQjpl^Q)Yrk' );
define( 'SECURE_AUTH_SALT', '5v@)itJ=V~FCQmEyFBkzJ$5W)Y%Kj3;a5L5$8/o1nf H$:<5>3 p?{T$.Xz%cGQf' );
define( 'LOGGED_IN_SALT',   ')RxwcStnkbaYt&xXW$4y0dM(z^&hkS.=|/*PA=c4@ce=tU5*;K2o*%z9cOWq8$`1' );
define( 'NONCE_SALT',       'mJI{D`(]-f0NXPw#nZwVf-r7(-a0OTm.tNVP,|iUBVQjmT!QwcFs;OseqtQV=d`+' );

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
