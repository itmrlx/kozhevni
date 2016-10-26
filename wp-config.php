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
define('DB_NAME', 'kozhevni');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F}q6RXmC/Cz:U+loDT^^EAkMcB~GX$f~(ylZPrN.Fb7=g]l4f0?Wq5;HTYT#;(Md');
define('SECURE_AUTH_KEY',  'Yl)PJPwEBV]QYv*SkZ(l0%#~12w>#t6ttbMlSb8p;+T:mD/*5W +ApYu?c0%mf,=');
define('LOGGED_IN_KEY',    'z$ rj[y-$F)X0ASOx,4f`:g>:pEhlSfHa3ki0zRu,CCF~^FmE^yMEh:pO8T-FOfC');
define('NONCE_KEY',        'R)=Pv`hI-K`-!E#irf#[XR+W4F)*&/($S+sin5(wW1,Lp:DB}QYo]eO3Yr8uw!-`');
define('AUTH_SALT',        'GPcEm!j[yNabC*$e>oG406w)Y%quvmMEl[o?L,h`Ufz(0c37^m<d0mfq0ha5#cPt');
define('SECURE_AUTH_SALT', '}?,w+BCt&5l>Z}Zj=7;Fu]`xKTqe,7+ Wq8GLl:>(g,cF(m+$s]o)8.^8gPk<-<N');
define('LOGGED_IN_SALT',   '>PNlI*N4CQ? _gd%K`}H>lK%Qe!7:8bEO%#!h:7BUn@L;o;n,N2lIakV_FP.y2&>');
define('NONCE_SALT',       'b`2p@GA5T0IvzoJ7sq^&h@56ru(iI@o?mP/ l>3!Z;JJVixDkGro%2$erMX{t$M@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'Nj3sdb736dsJPs_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
