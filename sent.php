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
        <div class = "thanks-message">お問い合わせありがとうございます。</div>
        <div class = "display-contact">
            <div class = "form-title">入力内容</div>
            
            <div class = "form-item">名前</div>
            <?php echo $_POST ['name']; ?>

            <div class = "form-item">年齢</div>
            <?php echo $_POST ['age']; ?>
            
            <div class = "form-item">お問い合わせ種類</div>
            <!--categoryを受け取り--> 
            <?php echo $_POST ['category']; ?>

            <div class = "form-item">内容</div>
            <?php echo $_POST ['body']; ?>
        </div>
    </div>

</body>
</html>