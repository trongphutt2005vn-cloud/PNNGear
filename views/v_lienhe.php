<?php
// File: views/v_contact.php
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/HeaderFooter.css">
    <link rel="stylesheet" href="assets/css/toast.css">

    <link rel="stylesheet" href="assets/css/lienhe.css">

    <title>Liên Hệ - PTGear</title>
</head>

<body>
    <div class="page-wrapper">
        <?php require_once __DIR__ . '/layouts/header.php'; ?>

        <div class="content">
            <div class="contact-container">
                <h1 class="contact-title">Liên Hệ Với Chúng Tôi</h1>

                <div class="contact-layout">
                    <div class="contact-map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7836.837001103788!2d106.77747262247792!3d10.855739753577861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2zSFVURUNIIC0gxJDhuqFpIGjhu41jIEPDtG5nIG5naOG7hyBUUC5IQ00gKFRodSBEdWMgQ2FtcHVzKQ!5e0!3m2!1svi!2s!4v1775129074554!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact-form-container">
                        <h2>Gửi tin nhắn cho chúng tôi</h2>
                        <p>Chúng tôi sẽ phản hồi bạn qua email trong thời gian sớm nhất.</p>

                        <form id="contactForm" method="POST" action="index.php?page=contact_submit">
                            <div class="form-group">
                                <label for="email">Email của bạn <span class="required">*</span></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-input"
                                    placeholder="Nhập địa chỉ email của bạn"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="message">Nội dung <span class="required">*</span></label>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-input form-textarea"
                                    rows="8"
                                    placeholder="Bạn cần chúng tôi hỗ trợ điều gì?"
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn-send">
                                <i class="fa fa-paper-plane"></i> Gửi Tin Nhắn
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once __DIR__ . '/layouts/footer.php'; ?>
    </div>

    <script src="assets/js/toast.js"></script>
    <script src="assets/js/headerFooter.js"></script>
</body>

</html>