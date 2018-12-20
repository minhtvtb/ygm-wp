<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'kiemthu');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1{HJ8Bfi#@4AS|dRW;7o9}T)ThVS1jtg!N6vh|_t%[6mK?aizK2-A8qL O2d5T[=');
define('SECURE_AUTH_KEY',  '58WQ3u_/{TGPAJRt=w`AyhD~z1~8G.~Mz&;W lA]!n w~(o^.+TV/KK>)fv:<3<]');
define('LOGGED_IN_KEY',    '&%] hb,4`#]<3mj4WpwP#Ev=g{|@Co3!EhTN#pDbcr|vr5g^B+r^!f7fIsC,a%G|');
define('NONCE_KEY',        'HV,6&Dk=RN+^<e5pDe=nt(}7.o*:)}ezYYd}%/+fQ>ssJ47e9/ggy4vYn6Okr{T5');
define('AUTH_SALT',        'wVd^&W3pwa?3Mn9l.b)gq27nhx,&UpxF3{?P]q8WFv&RT=NWY0?sm)LuMJ!Tn-Du');
define('SECURE_AUTH_SALT', ';Xdf<92VUx@9`xY&.Vx9kXXk:nD>4X*}$~lf HD%Os99:mWxcUbJ|>vrfV{%Tqhj');
define('LOGGED_IN_SALT',   '-G?U9CZiP/{*4R 6eN$6C}Qv)l!oP,6a& as1$Jk2dO71cS|nVJyinPbzg]o7v%k');
define('NONCE_SALT',       'WlRv%SxhYYnl%WmO#SX/`NiRJ<+jh%}npdsIv8vul,cphRcpuh]rMiA}YE5M)8x[');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
