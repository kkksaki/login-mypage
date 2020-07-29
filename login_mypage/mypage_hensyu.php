<?php
mb_internal_encoding("utf8");

session_start();
if(empty($_SESSION['id'])){
    header("Location:login_error.php");
}
?>
<!DOCOTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    <body>
            <header>
        <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <form action="mypage_update.php" method="post">
            <div class="mypage">
                <h2>会員情報</h2>
                <p>こんにちは！<?php echo $_SESSION['name']; ?>さん</p>
                <img class="profile" src="<?php echo $_SESSION['picture']; ?>">
                <div class="naiyou">
                    <p>氏名:<input type="text" class="formbox" size="40" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                    <p>メール:<input type="text" class="formbox" size="40" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                        <p>パスワード:<input type="text" class="formbox" size="40" value="<?php echo $_SESSION['password']; ?>"  name="password"></p>
                </div>
                <div class="comments">
                    <textarea rows="3" cols="75"  value="<?php echo $_SESSION['comments'];?>" name="comments"></textarea>
                </div>
                <div class="hensyu">
                    <input type="submit" class="submit_button" name="henkou" value="この内容に変更する">
                </div>
                </div>
            </form>
        </main>
        <footer>
            ©️ 2018 InterNous.inc. ALL rights reserved
        </footer>
    </body>
</html>