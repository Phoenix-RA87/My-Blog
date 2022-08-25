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
define( 'DB_NAME', 'myblog' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'jKK8zdiSZ=2@T?wluud<47oCV(rA<(AF(9Y_QXWv)4f/Rsr~7H)~DSFUkr/-/eQm' );
define( 'SECURE_AUTH_KEY',  '7N:)<q(|u(!vp..C^H]|:3Zp<E?-Hki23()2Z1|}w@[,7@os%E^p HPn[2R.|6jE' );
define( 'LOGGED_IN_KEY',    'uwNhcx;V[TQtMmU8yHwn;)Xw Jt`-@BTxUJ>4}ryNOA-10MM2$Ntezuux@Kpgc!;' );
define( 'NONCE_KEY',        ';K1W:H6mE@AP(F#y:Mjd^8skQm:&Z3L47xCQ>>{Lk&1k*j/Fq0j3O{hz-n2125F&' );
define( 'AUTH_SALT',        '`4EeO,Ih0*FS2zWdVtT-ufHp7@_(*?_Doa5RYsru9DuVi)8l&X3* |47xO>a|W{<' );
define( 'SECURE_AUTH_SALT', 'dBn;)~[J-4?~atG|i.$+8:|*QHhK6w{HUZ]vSZR?wdM (pvo=I%2<ao3c$Pa>^cA' );
define( 'LOGGED_IN_SALT',   'E]A{O)0c6$Dm)aDpLe/y0/a_!<>}o1/(<sb:Q%P?$t]A@hM>;7.9.D_c-`/XJS0t' );
define( 'NONCE_SALT',       'rWTzrvQ@H0#+WxX4y*&G0(iHl]6:$u4ToyX]ia-WF]IozjE/&9rWJ2GW2a3a.;g&' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
