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
 * * Настройки базы данных
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
define( 'DB_NAME', 'Gold' );

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
define( 'AUTH_KEY',         '>E@!Cd?P^{+<Uu-0s&kL6v-NLJT$YsbD/sk5d@Lk3+89CKR)^S+$r#?G)pU-gXtO' );
define( 'SECURE_AUTH_KEY',  'jX,- ;126Ehx/PF(Q]{O#yt<y<R7PF[u*PD$:td$yw4Xd)Fxu&P{!dv*z]1mze!(' );
define( 'LOGGED_IN_KEY',    'atI?|e[t,KWc.38fQna^yA@AkV`wfUH:s8bAxc8Ks/zw(87x_^]O&c 7}moN&8ly' );
define( 'NONCE_KEY',        'GYIl4?*v2{;]uDr#^xYXx/l2Z}EG)=)BxB,fg@N<]O4}QMo`}  KzayNZTB#m8>g' );
define( 'AUTH_SALT',        'Tb4Q.#}plSZEaEcE$uYs!YS hkiOaf({f?_%Mm,4(1`~C><DGq!wBF{d%47_B+@>' );
define( 'SECURE_AUTH_SALT', 'R(RuB[Q7q6c&3ms^I0=EOnBH7l,d5ki@L0r1D}-yBA``%}KKwoi^b1NeRw1m<=cM' );
define( 'LOGGED_IN_SALT',   'On]ecYbXS3}c7x]W)n3D2J`xVeAPTPo U;ublk+S.Y$nMxqM~#yBj!4?pHMw(.^r' );
define( 'NONCE_SALT',       'h33ui hRagJT9qCgImEJ>d@QR!qxt3!l=%7Jc~Lzizj ?=D^I5nKg}3deX[=lRHH' );

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
