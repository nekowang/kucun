<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>库存管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="库存管理系统">
        <meta name="author" content="">

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css">
        <link rel="stylesheet" type="text/css" href="/css/admin.css">
        <link rel="stylesheet" type="text/css" media="all" href="/css/daterangepicker-bs3.css" />
        <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/js/moment.js"></script>
        <script type="text/javascript" src="/js/daterangepicker.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"/></script>
    
        <style type="text/css">
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
            
        #nav{position:relative;bottom: 10px;left: 0px;height: 30px;}
        #nav button{position: absolute;right: 100px;top: 0px;}
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script type="text/javascript" src="/js/html5shiv.js"></script>
        <![endif]-->

        <script type="text/javascript">
            function startTime()
            {
                var today = new Date()
                var h = today.getHours()
                var m = today.getMinutes()
                var s = today.getSeconds()
                // add a zero in front of numbers<10
                m = checkTime(m)
                s = checkTime(s)
                document.getElementById('timeclock').innerHTML = h + ":" + m + ":" + s
                t = setTimeout('startTime()', 500)
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i
                }
                return i
            }
        </script>
    </head>

</head>

<body onload="startTime()">

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="/kucun/index">库存管理系统 V1.0</a>
                <div class="nav-collapse collapse">
                    <ul class="nav" style="float:right">
                        <li><a>管理页: admin</a></li>
                        <li><a href="/kucun/index">系统主页</a></li>
                        <li><a href="/login/logoff">退出系统</a></li>
                        <li><a><?php date_default_timezone_set('PRC');
echo date('Y-m-d'); ?> <span id="timeclock"></span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>