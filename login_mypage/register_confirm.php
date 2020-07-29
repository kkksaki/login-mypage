<?php
mb_internal_encoding("utf8");

$temp_pic_name =$_FILES['picture']['tmp_name'];

$original_pic_name =$_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>
<!DOCOTYPE HTML>
<html lang ="ja">
<head>
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    <body>
        <header>
        <img src="4eachblog_logo.jpg">
        </header>
        <main>
        <div class="confirm">
            <h1>会員登録　内容確認</h1><br>
        <p>お問い合わせ内容はこちらで宜しいでしょうか?</p><br>
            <p>氏名
            <br>
                <?php echo $_POST['name'];?>
            </p>
            
            <p>メール
            <br>
                <?php echo $_POST['mail'];?>
            </p>
            
            <p>パスワード
                <br>
                <?php echo $_POST['confirm_password'];?>
            </p>
            
            <p>プロフィール写真
                <br>
                <?php echo $path_filename;?>
            </p>
            
            <p>コメント
            <br>
            <?php echo $_POST['comments'];?>
            </p>
            
            
            <form action="register.php">
            <input type="submit" class="button1" value="戻って修正する"/>
                   </form>
            
            <form action="register_insert.php" method="post">
                <input type="submit" class="button2" value="登録する"/>
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                <input type="hidden" value="<?php echo $path_filename;?>" name="path_filename">
                <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
            </form>
        </div>
        </main>
            <footer>
            ©️ 2018 InterNous.inc. ALL rights reserved
        </footer>
            
    </body>


</html>