<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <div class="header">
    <div class="header-left">TU'THU(Desgin&Art)</div>
    <div class="header-right">
        <ul>
            <li>会社概要</li>
            <li>サービス</li>
            <li class="selected">お問い合わせ</li>
        </ul>
    </div>
    </div>

    <div class="main">
        <div class="contact-form">
            <div class="form-title">お問い合わせ</div>
            <form method="POST" action="sent.php">
                <div class="form-item">名前</div>
                <input type="text" name="name">

                <div class="from-item">年齢</div>
                <select name="age">
                    <option value="未選択">選択してください</option>
                    <!--for文を用いて6歳から100歳までをOptionで選べる-->
                    <?php
                        for($i=6; $i<=100; $i++) {
                            echo "<option value = '{$i}'>{$i}</option>";
                        }
                    ?>
                </select>

                <div class="form-item">お問い合わせの種類</div>
                <?php
                    $types = array('サービスや事業についてのご相談','弊社のサービス内容についてのご質問','料金に関するお問い合わせ','その他のお問い合わせ');
                ?>
                <select name="category">
                    <option value="未選択">選択してください</option>
                    <?php
                        foreach ($types as $type){
                            echo "<option value = '{$type}'>{$type}</option>";
                        }
                    ?>
                </select>
                <div class="form-item">内容</div>
                <textarea name="body"></textarea>
                        <input type="submit" value="送信">
            </form>
        </div>
    </div>

    <div class = "footer">
        <div class = "footer-left">
            <ul>
                <li>会社概要</li>
                <li>サービス</li>
                <li class="selected">お問い合わせ</li>

            </ul>
        </div>
        <div class = "Like-box">
            <iframe src="https://www.facebook.com/">Please Follow us</iframe>

        </div>
    </div>
</body>
</html>
