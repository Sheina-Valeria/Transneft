<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OpS#$[w1mm?JNy8f_!KtvE$;lIIne ygATe;Y!S[9]anaX3!dAb/,eAD4aK?-AwI' );
define( 'SECURE_AUTH_KEY',  'J*|9eRLihc#CiMn<t#LMLBSelDX3g,|EakuDYQ3MCy0nz2*tVqE,c@x-35#Q?:)A' );
define( 'LOGGED_IN_KEY',    'C{44?H)5ZQ%?c2A|#y=pJc??-,0Wh4t*fk?V3~+qrQq!Wz6 v[6G79fl3fM>[VZy' );
define( 'NONCE_KEY',        'mKRgE>deIXCg%N7-QT~<Oeed,7cI^;b}&nC#);N*l%Gz{eQ@c6m^JI2G4Y>vn*!`' );
define( 'AUTH_SALT',        'ul`h0@!!G$|0dz&PAFPN]3O)NSM4+{,_sB,FQ9i7p@!]im/![P0~p[`u,S;Tc|Rk' );
define( 'SECURE_AUTH_SALT', '6qVm?ye<0^+e:nA{CjmkTNqO}=SiLsga;j05TR{Y_(;lGDAGF#4Fnq$w!u(Q>YXW' );
define( 'LOGGED_IN_SALT',   'kfMn_Z[hA!g-^pnvd?y_]Lp5wD/f-^VS!mD_tqro*a)3lv031,YF^96I4Fi3--;q' );
define( 'NONCE_SALT',       'tK`S:l~JW:v>uz378Y~7%eXl4D Uh(?rTN;cPi(7)>seYxX+6lJ g$zH~uh3G!:t' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
