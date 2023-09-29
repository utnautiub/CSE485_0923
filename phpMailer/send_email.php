<?php
// Nhập các lớp PHPMailer vào không gian tên toàn cầu
// Những dòng này phải ở đầu mã của bạn, không phải bên trong một hàm
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Tải autoload của Composer
require 'vendor/autoload.php';

// Tạo một thể hiện; đặt `true` để bật việc xử lý các ngoại lệ
$mail = new PHPMailer(true);

try {
    // Cài đặt máy chủ
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  // Bật đầu ra gỡ rối chi tiết
    $mail->isSMTP();                                        // Gửi bằng SMTP
    $mail->Host       = 'smtp.gmail.com';                   // Đặt máy chủ SMTP của Gmail
    $mail->SMTPAuth   = true;                               // Bật xác thực SMTP
    $mail->Username   = 'utnautiub@gmail.com';              // Tên đăng nhập Gmail của bạn
    $mail->Password   = 'ujvc jztn qsfm bhnk';              // Mật khẩu Gmail của bạn (Ở đoạn này nếu viết mật khẩu bth sẽ lỗi)
                                                            // Chúng ta nên vào gmail bật App Password lên rồi thêm Mailer vào để lấy mật khẩu
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        // Bật mã hóa TLS ngầm định
    $mail->Port       = 465;                                // Cổng TCP để kết nối cho giao thức SMTPS (SSL)
    // Người nhận
    $mail->setFrom('utnautiub@gmail.com', 'Bùi Tuấn Tú');
    $mail->addAddress('dungkt@wru.vn', 'Kiều Tuấn Dũng'); // Add a recipient
    $mail->addAddress('buituantucontact@gmail.com'); // Name is optional
    // Tệp đính kèm
    // $mail->addAttachment('/var/tmp/file.tar.gz');               // Thêm tệp đính kèm
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Tên tệp đính kèm (tùy chọn)

    // Nội dung
    $mail->isHTML(true);                                        // Đặt định dạng email thành HTML
    $mail->Subject = 'Điểm Danh 29/09/2023 - Bùi Tuấn Tú - 2151163736';
    $mail->Body    = 'Mailer utnautiub@gmail.com to <b>dungkt@wru.vn</b>';
    $mail->AltBody = 'Mailer utnautiub@gmail.com to dungkt@wru.vn';

    $mail->send();
    echo 'Thư đã được gửi';
} catch (Exception $e) {
    echo "Không thể gửi thư. Lỗi Mailer: {$mail->ErrorInfo}";
}
?>