<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style_keiji.css">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from diworks_keijiban");
        
        ?>
        
        <img src = "diblog_logo.jpg">
        
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        
        <main>
            <div class = "left">
                <h1>プログラミングに役立つ掲示板</h1>
                
                <form method = "post" action = "insert_keiji.php">
                    
                    <h2>入力フォーム</h2>
            
                    <div>
                        <label>ハンドルネーム</label><br>
                        <input type = "text" name = "handlename" size = "50">
                    </div>
        
                    <div>
                        <label>タイトル</label><br>
                        <input type = "text" name = "title" size = "50">
                    </div>
            
                    <div>
                        <label>コメント</label><br>
                        <textarea name = "comments" rows = "7" cols = "50"></textarea>
                    </div>
                    
                    <form action = "index_keiji.php">
            
                        <div>
                            <input type = "submit" value = "投稿する">
                        </div>
                        
                    </form>
            
                </form>
                
                
                <?php
                
                while ($row = $stmt->fetch()){
                    echo "<div class = \"keijiban\">";
                    
                    echo "<div class='title'>";
                    echo "<h4>".$row['title']."</h4>";
                    echo "<div class='comments'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                
                ?>
                    
                    
        
            </div>
            
            <div class = "right">
                
                <h3>人気の記事</h3>
                
                <div class = "kiji">
                    PHPオススメ本<br>
                    PHP　MyAdminの使い方<br>
                    いま人気のエディタTops<br>
                    HTMLの基礎
                </div>
                
                <h3>オススメリンク</h3>
                
                <div class = "link">
                    D.I.Works株式会社<br>
                    XAMPPのダウンロード<br>
                    Eclipseのダウンロード<br>
                    Bracketsのダウンロード
                </div>
                
                <h3>カテゴリ</h3>
                
                <div class = "category">
                    HTML<br>
                    PHP<br>
                    MySQL<br>
                    JavaScript
                </div>
            
            </div>
    
        
        
        </main>
        
        <footer>
            Copyright D.I.Works| D.I.Blog is the one which provides A to Z about programming
        </footer>
                
    </body>
