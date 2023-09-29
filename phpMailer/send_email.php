<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


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
    $mail->addAddress('lethutrang2k3mh@gmail.com'); 
    $mail->addAddress('buituantucontact@gmail.com'); 
    // Tệp đính kèm
    // $mail->addAttachment('/var/tmp/file.tar.gz');               // Thêm tệp đính kèm
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');          // Tên tệp đính kèm (tùy chọn)

    // Nội dung
    $mail->isHTML(true);                                        // Đặt định dạng email thành HTML
    $mail->Subject = 'XỊN VLLLLLLL';
    $mail->Body    = 'Xịn <h1>VOÃI</h1>';  
    $mail->AltBody = 'Xịn VOÃI';

    $mail->send();
    echo 'Thư đã được gửi';
} catch (Exception $e) {
    echo "Không thể gửi thư. Lỗi Mailer: {$mail->ErrorInfo}";
}
?>