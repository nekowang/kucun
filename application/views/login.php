<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>库存管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="库存管理系统">
        <meta name="author" content="">

        <link href="/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">

            <form class="form-signin" action="/login/verify" method="post">
                <h2 class="form-signin-heading">库存管理系统 v1.0</h2>
                <input type="text" class="input-block-level" placeholder="用户名" name="username">
                <input type="password" class="input-block-level" placeholder="密码" name="password">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me">记住我 
                    <?php
                    $error = $this->input->get('error');
                    if (!empty($error)) {
                        echo "<font size='1px' color='red' style='padding-left:130px;'> 用户名或密码错误</font>";
                    }
                    ?>
                </label>
                <button class="btn btn-large btn-primary" type="submit">登陆</button>
            </form>

        </div>

    </body>
</html>
