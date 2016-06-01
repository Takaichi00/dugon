<?php
//session_start();

?>
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

</head>

<body>

    <!-- Navigation -->
    <?php
        require_once "./header.php";
    ?>
    <!-- Page Content -->
    <div class="container">

        <h2>飲食店様ログイン</h2>

        <form class="form-horizontal" method="post">
        	<div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">メールアドレス</label>
        		<div class="col-sm-10">
        			<input type="email" class="form-control" id="InputEmail" placeholder="メール・アドレス">
        		</div>
        	</div>
        	<div class="form-group">
        		<label class="col-sm-2 control-label" for="InputPassword">パスワード</label>
        		<div class="col-sm-10">
        			<input type="password" class="form-control" id="InputPassword" placeholder="パスワード">
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10">
        			<button type="submit" class="btn btn-default">ログイン</button>
                    <a href="./registerStore.php" class="btn btn-default">新規会員登録はこちら</a>
        		</div>
        	</div>
        </form>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
