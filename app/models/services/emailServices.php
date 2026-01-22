<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require_once __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/Exception.php';
    require_once __DIR__ . '/../../../vendor/phpmailer/phpmailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class EmailServices {
        private PHPMailer $mail;

        public function __construct() {
            $this->mail = new PHPMailer(true);

            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = 'menerva005@gmail.com'; // بدّلها
            $this->mail->Password   = 'wzqo yrvu lfnk tktd';         // App Password
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port       = 587;

            // إعدادات عامة
            $this->mail->CharSet = 'UTF-8';
            $this->mail->setFrom('menerva005@gmail.com', 'Minerva LMS');
        }

        public function send(string $to, string $password) {
            try {
                $this->mail->clearAddresses();
                $this->mail->addAddress($to);

                $this->mail->isHTML(true);
                $this->mail->Subject = "Votre Menerva mot de passe";
                $this->mail->Body    = "
                    <h2>Bonjour,</h2>

                    <p>
                    Nous vous informons que votre compte sur la plateforme
                    <strong>Minerva</strong> a été créé avec succès.
                    </p>

                    <p>Veuillez trouver ci-dessous vos identifiants de connexion :</p>

                    <ul>
                        <li><strong>Adresse e-mail :</strong> $to</li>
                        <li><strong>Mot de passe :</strong> <strong>$password</strong></li>
                    </ul>

                    <p>
                    Pour des raisons de sécurité, nous vous recommandons vivement
                    de modifier votre mot de passe lors de votre première connexion.
                    </p>

                    <p>
                    👉 <a href='https://minerva.com/login'>Accéder à la plateforme</a>
                    </p>

                    <p>
                    Cordialement,<br>
                    <strong>L’équipe Minerva</strong>
                    </p>
                    ";
                $this->mail->send();
                return true;

            } catch (Exception $e) {
                // تقدر تسجّل الخطأ ف log
                error_log($this->mail->ErrorInfo);
                return false;
            }
        }
    }