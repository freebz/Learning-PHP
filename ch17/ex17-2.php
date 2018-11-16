// 예제 17-2 SMTP 전송 객체 생성

$transport = Swift_SmtpTransport::newInstance('smtp.example.com', 25);
$mailer = SwiftMailer::newInstance($transport);
