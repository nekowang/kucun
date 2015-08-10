<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div id="blue"><div id="login">
            <div id="version"></div>
            <form action="/login/verify" method="post">
                <div id="username">
                    用户名&nbsp;&nbsp;&nbsp;<input type="text" name="username" />
                </div>
                <div id="pwd">
                    密&nbsp;&nbsp;&nbsp;码&nbsp;&nbsp;&nbsp;<input type="password" name="password" />
                </div>
                <div id="logininfo">                    
                    <?php
                    $error = $this->input->get('error');
                    if (!empty($error)) {
                        echo "<font size='1px' color='red' style='padding-left:145px;'> 用户名或密码错误</font>";
                    }
                    ?></div>
                <input type="submit" value="登&nbsp&nbsp;录" id="submit" />
            </form>
        </div></div>
        	
    </body>
    <style>
        input{outline:none;

        }
        input:-webkit-autofill {-webkit-box-shadow: 0 0 0px 1000px white inset;}
        body{background:#808080 no-repeat;}
        #login{
            position:relative;left:35%;top:-10%;
            height:350px;width:500px;
            background:#dddddd;
            border-radius:4px;
            box-shadow:0	0 10px #ffffff;
        }
        #version{
            position:absolute;top:-100px;left:-50;height:100px;width:1000px;background:url('/img/version.png') no-repeat;
        }
        #blue{
            position:absolute;left:0;top:38%;width:100%;height:300px;background:#0088cc;
        }
        #submit{
            position:absolute;left:100px;bottom:40px;
            display:block;width:300px;height:40px;background:orange;border:0; 
            font: 20px/38px Microsoft YaHei;color:#efefef;
            border-radius:3px;
            box-shadow:0	0 1px 1px #888888;
        }
        #submit:active {background:#c37e00;color:#cdcdcd;}
        #username{
            float:left;
            height:50px;width:380px;
            margin:70px 70px 20px;
            color:#888888;
            font:bold 20px/48px Microsoft YaHei;
        }
        #username input {background:#efefef;height:40px;width:280px;border:1px #0088cc solid;border-radius:2px;
                         font:bold 20px/40px Microsoft YaHei;
                         color:#555555;
                         padding-left:5px;
        }
        #pwd{
            float:left;
            margin:20px 70px 20px;
            height:50px;width:380px;
            color:#888888;
            font:bold 20px/48px Microsoft YaHei;
        }
        #pwd input {background:#efefef;height:40px;width:281px;border:1px #0088cc solid;border-radius:2px;
                    font:bold 20px/40px Microsoft YaHei;
                    color:#555555;
                    padding-left:5px;
        }
    </style>
</html>