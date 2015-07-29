<style>
    #footer{position: relative; bottom: 20px; left: 0;height: 120px; width: 1300px;margin: 20px 0 20px; padding: 5px;}
    #order{height: 50px; margin: 5px;}
    #filter{float: left;margin: 5px;height: 50px;}
    #filter div{float: left;display: inline-block;}
    #filter form{float: left;display: inline-block;}
    #date{margin-left: 20px;}
    #pay{margin-left: 50px;}
    #search{margin-left: 50px;}
</style>
<div id="footer">  
            <div id="order">
                <label class="checkbox inline">
                        <div class="input-prepend input-group" style="display:inline">
                            <span class="add-on input-group-addon"><font size='2px'>按采购日期排序</font></span>
                        </div>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                    <a href="/kucun/index/desc/1"><img src='/img/sec_down.gif'></img></a>
                    <span>&nbsp;</span>
                    <a href="/kucun/index/asc/1"><img src='/img/sec_up.gif'></img></a>
                </label>
            </div>
        <div id="filter">
            <form id="form1" action="/kucun/index" method="post"> 
                <div id="date" class="control-group">
                    <div class="controls">
                        <div class="input-prepend input-group">
                            <span class="add-on input-group-addon"><font size='2px'>起始时间 - 结束时间</font></span><input type="text" style="width: 200px" name="date" id="reservation"  /> 
                        </div>
                    </div>
                </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#reservation').val("<?php echo isset($date)?$date:"1949-01-01 - ".date('Y-m-d');?>");
                                    $('#pay input').eq(<?php echo isset($pay) ? $pay : 0;?>).attr('checked', 'true');
                                    $('#submitform1').click(function(){
                                        $('#form1').submit();
                                    });
                                    $('#reservation').daterangepicker(null, function(start, end, label) {
                                        console.log(start.toISOString(), end.toISOString(), label);
                                    });
        //                            $("#form1").change(function(){
        //                                $('#form1').submit();
        ////                                $.ajax({
        ////                                    cache: true,
        ////                                    type: "POST",
        ////                                    url:ajaxCallUrl,
        ////                                    data:$('#form1').serialize(),// 你的formid
        ////                                    async: false,
        ////                                    error: function(request) {
        ////                                        alert("Connection error");
        ////                                    },
        ////                                    success: function(data) {
        ////                                        $("#commonLayout_appcreshi").parent().html(data);
        ////                                    }
        ////                                });
        //                              });
        //                              $('#applyDateBtn').click(function(){
        //                                  $('#form1').submit();
        //                              });
                                   });      
                            </script>
                        <div id="pay">
                            <span style="vertical-align: bottom">付款：</span>
                            <label class="radio inline">
                                <input type="radio" name="pay" id="pay0" value="0">全部
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="pay" id="pay1" value="1"><font color='green'>已付清</font>
                            </label>                 
                            <label class="radio inline">
                                <input type="radio" name="pay" id="pay2" value="2"><font color='red'>未付清</font>
                            </label>
                        </div>
                            <script type="text/javascript">
                                $(document).ready(function() {

                                    $("#pay0").click(function(){
                                        var payinfo = $("#pay0").attr("value");
                                        $.post("/kucun/index/",
                                        {
                                          pay: payinfo
                                        });
                                      });
                                    $("#pay1").click(function(){
                                        var payinfo = $("#pay1").attr("value");
                                        $.post("/kucun/index/",
                                        {
                                          pay: payinfo
                                        });
                                      }); 
                                    $("#pay2").click(function(){
                                        var payinfo = $("#pay2").attr("value");
                                        $.post("/kucun/index/",
                                        {
                                          pay: payinfo
                                        });
                                      });                          
                                  });      
                            </script>
                        <div style="display: none">                      
                            <span style="vertical-align: bottom">利润：</span>
                            <label class="radio inline">
                                <input type="radio" name="lirun" id="lirun0" value="0">全部
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="lirun" id="lirun1" value="1"><font color='green'>正</font>
                            </label>                 
                            <label class="radio inline">
                                <input type="radio" name="lirun" id="lirun2" value="2"><font color='red'>负</font>
                            </label>
                        </div>
                        <div>
                            <label class="checkbox">
                                <button type="submit" class="btn btn-small btn-primary" style="height: 30px">筛选</button>&nbsp;
                                <button class="btn btn-small" type="button" id="cancelsx" style="height: 30px">取消筛选</button>
                            </label>
                        </div>
                </form>
             <script type="text/javascript">
                $(document).ready(function(){
                   $("#cancelsx").click(function(){
                        location.href = "/kucun/index";  
                   });
                });
            </script>
            
            <div id="search">
                <form  action="/kucun/index" method="post">
                    <div>  
                        <select class="span2" name="title">
                            <option value="Code">产品编号</option>
                            <option value="BuyingDate">采购日期</option>
                        </select>
                    </div>
                    <div>
                            <div class="input-append">
                                <input type="text" class="span2" name='search'/>&nbsp;<span> &nbsp;&nbsp;</span>&nbsp;
                                <button type="submit" class="btn btn-small btn-primary" style="height: 30px">搜索</button>
                            </div>
                    </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>
