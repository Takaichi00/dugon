<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ジュゴン 飲食店様</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--validation CSS-->
    <link href="./jQuery-Validation-Engine/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Navigation -->
    <?php
        require_once "./header.php";
    ?>
    <!-- Page Content -->
    <div class="container">

        <h2>飲食店様 新規会員登録</h2>

        <form class="form-horizontal" action="./registerStoreCfm.php" method="post" id="registerStoreFrom">
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputStoreName">店舗名</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control validate[required]" id="InputStoreName" name="storeName" placeholder="店舗名">
        		</div>
        	</div>
            <div class="form-group">
                <label for="zipcode" class="col-sm-2 control-label">郵便番号</label>
                <div class="col-sm-2">
                    <div class="input-group">
                        <span class="input-group-addon">〒</span>
                        <input type="text" name="zipcode" id="zipcode" class="form-control validate[required,custom[integer],minSize[7],maxSize[7]]" name="zipcode" placeholder="半角英数字(7桁)">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="pref" class="col-sm-2 control-label">住所</label>
                <div class="col-sm-2">
                    <select name="pref" id="pref" name="pref" class="form-control">
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input type="text" name="addr1" id="addr1" class="form-control validate[required]" name="addr1" placeholder="市区町村名">
                    <p class="help-block">住所は2つに分けてご記入ください。</p>
                    <input type="text" name="addr2" id="addr2" class="form-control validate[required]" name="addr2" placeholder="番地・ビル名">
                    <p class="help-block">マンション名は必ず記入してください。</p>
                </div>
            </div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputTel">電話番号</label>
        		<div class="col-sm-10">
        			<input type="tel" class="form-control validate[required,custom[integer]]" id="InputTel" name="tel" placeholder="電話番号">
        		</div>
        	</div>
        	<div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">メールアドレス</label>
        		<div class="col-sm-10">
        			<input type="email" class="form-control validate[required,custom[email]]" id="InputEmail" name="mailAddress" placeholder="メールアドレス">
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">メールアドレス(確認)</label>
        		<div class="col-sm-10">
        			<input type="email" class="form-control validate[required,equals[InputEmail]]" id="re_InputEmail" name="re_mailAddress" placeholder="メールアドレス(確認)">
        		</div>
        	</div>
        	<div class="form-group">
        		<label class="col-sm-2 control-label" for="InputPassword">パスワード</label>
        		<div class="col-sm-10">
        			<input type="password" class="form-control validate[required]" id="InputPassword" name="password" placeholder="パスワード">
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputPassword">パスワード(確認)</label>
        		<div class="col-sm-10">
        			<input type="password" class="form-control validate[required,equals[InputPassword]]" id="re_InputPassword" name="re_password" placeholder="パスワード(確認)">
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">確認</button>
        			<a href="./loginStore.php" class="btn btn-default">ログイン画面へ</a>
        		</div>
        	</div>
        </form>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!--validation js-->
    <script src="./jQuery-Validation-Engine/js/jquery.validationEngine.js"></script>
    <script src="./jQuery-Validation-Engine/js/languages/jquery.validationEngine-ja.js"></script>
    <script>
    $(function(){
        jQuery("#registerStoreFrom").validationEngine('attach', {
            promptPosition:"inline"
        });
    });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
