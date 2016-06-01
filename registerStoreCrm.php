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
        <?php var_dump($_POST); ?>
        <h2>飲食店様 新規会員登録 確認</h2>
        <form class="form-horizontal" action="./registerStoreCrm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">店舗名</label>
        		<div class="col-sm-10">
                    <p><?php echo $_POST["storeName"]; ?></p>
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">店舗住所</label>
        		<div class="col-sm-10">
                    <p><?php echo $_POST["storeAddress"]; ?></p>
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputEmail">メールアドレス</label>
        		<div class="col-sm-10">
                    <p><?php echo $_POST["mailAddress"]; ?></p>
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputTel">電話番号</label>
        		<div class="col-sm-10">
                    <p><?php echo $_POST["tel"]; ?></p>
        		</div>
        	</div>
            <div class="form-group">
        		<label class="col-sm-2 control-label" for="InputPassword">パスワード</label>
        		<div class="col-sm-10">
                    <p><?php echo $_POST["password"]; ?></p>
        		</div>
        	</div>

            <table class="table table-striped table-bordered">
            	<tbody>
            		<tr>
            			<th>店舗名</th>
            			<td><?php echo $_POST["storeName"]; ?></td>
            		</tr>
            		<tr>
            			<th>郵便番号</th>
            			<td><?php echo $_POST["storeAddress"]; ?></td>
            		</tr>
            		<tr>
            			<th>住所</th>
            			<td><?php echo $_POST["storeAddress"]; ?></td>
            		</tr>
            		<tr>
            			<th>メールアドレス</th>
            			<td><?php echo $_POST["mailAddress"]; ?></td>
            		</tr>
            		<tr>
            			<th>電話番号</th>
            			<td><?php echo $_POST["tel"]; ?></td>
            		</tr>
                    <tr>
            			<th>パスワード</th>
            			<td><?php echo $_POST["password"]; ?></td>
            		</tr>
            	</tbody>
            </table>

        </form>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
