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
        <link rel="stylesheet" type="text/css" media="all" href="/css/daterangepicker-bs3.css" />
        <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/moment.js"></script>
        <script type="text/javascript" src="/js/daterangepicker.js"></script>

        <style type="text/css">
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
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
                <a class="brand" href="/admin/index">库存管理系统 V1.0</a>
                <div class="nav-collapse collapse">
                    <ul class="nav" style="float:right">
                        <li><a>管理页: admin</a></li>
                        <li><a href="/admin/index">系统主页</a></li>
                        <li><a href="/login/index">退出系统</a></li>
                        <li><a><?php date_default_timezone_set('PRC');
echo date('Y-m-d'); ?> <span id="timeclock"></span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div>
        <ul class="nav nav-tabs">
            <li><a></a></li>
            <li class="active"><a href="#">发货</a></li>
            <li><a href="#">库存</a></li>
            <li><a href="#">仓库</a></li>
            <li><a href="#">供应商</a></li>
            <li><a href="#">客户</a></li>
            <li><a href="#">业务员</a></li>
            <li><a href="#">系统管理</a></li>
        </ul>
    </div>

    <div class="dataform">
        <table class="table table-bordered table-striped table-condensed table-hover">
            <thead>
                <tr>
                    <th>发货单号</th><th>产品编号</th><th>记录日期</th><th>客户名称</th><th>出发仓库</th>
                    <th>重量(吨)</th><th>合同单价</th><th>应收金额</th><th>优惠金额</th><th>总应收款</th>
                    <th>税金</th><th>运费</th><th>加工费</th><th>出倒库费</th><th>账期利息</th><th>其他费用</th>
                    <th>利润</th><th>实收金额</th><th>剩余金额</th><th>收款详情</th><th>操作</th><th>备注</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pagination pagination-small">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">前一页</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">后一页</a></li>
            <li><a href="#">末页</a></li>
            <li><?php echo "<font size='2px'>&nbsp;&nbsp;共有<font color='red'> 650 </font>条数据</font>"; ?></li>
        </ul>        
        <span class="buttontianjia"></span>
        <button class="btn btn-primary  btn-small" type="button">+ 添加库存</button>
    </div>

    <div>
        <form>
            <fieldset>
                <div style="float:left">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">筛选
                    </label>
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2">排序
                    </label>
                </div>
                <div style="float:left">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><font size='2px'>起始时间 - 结束时间</font></span><input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="2014-5-21 - 2014-6-21" /> 
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#reservation').daterangepicker(null, function(start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>

                </div>
                <div style="float:left">
                    <div style="float:left">
                        <font size='2px'> 付款：</font>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>全部
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><font color='green'>已付清</font>
                        </label>                 
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><font color='red'>未付清</font>
                        </label>
                        <font size='2px'> 利润：</font>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>全部
                        </label>
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><font color='green'>正</font>
                        </label>                 
                        <label class="radio inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><font color='red'>负</font>
                        </label>
                        <select class="span2">
                            <option>发货单号</option>
                            <option>产品日期</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div style="float:left">
                        <form class="form">
                            <div class="input-append">
                                <input type="text" class="span2">
                                <button type="submit" class="btn btn-small btn-primary">筛选</button>
                            </div>
                        </form>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>


</body>
</html>
