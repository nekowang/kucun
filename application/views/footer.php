<div class="footer">
    <br/>
    <br/>
        <form style="float:left"> 
            <fieldset style="float:left">
                <div style="float:left">
                    <label class="checkbox inline">
                        <button class="btn" type="button">筛选</button>
                    </label>
                </div>
                
                <div style="float:left;padding-left: 10px">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><font size='2px'>起始时间 - 结束时间</font></span><input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="2015-01-01 - <?php echo date('Y-m-d'); ?> " /> 
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
                            
                            $("#applyDateBtn").click(function(){
                                var setime = $("#reservation").attr("value");
                                
                                $.post("/kucun/index/",
                                {
                                  date: setime
                                });
                              });
                           });      
                    </script>

                </div>   
                
                <div style="float:left;padding-left: 10px">
                    <span>付款：</span>
                    <label class="radio inline">
                        <input type="radio" name="pay" id="pay0" value="0" checked>全部
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
                <div style="float:left;padding-left: 10px">                      
                    <span>利润：</span>
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
            </fieldset>
        </form>
                
    <form style="float:left" action="/kucun/index" method="post">
            <fieldset style="float:left">
                <div style="float:left;padding-left: 10px">  
                    <select class="span2" name="title">
                        <option value="Code">产品编号</option>
                        <option value="BuyingDate">采购日期</option>
                    </select>
                </div>
                <div style="float:left;padding-left: 5px">
                        <div class="input-append" style="float:left">
                            <input type="text" class="span2" name='search' style="float:left"/><span style="float:left;padding-left: 5px"> &nbsp;</span>
                            <button type="submit" class="btn btn-small btn-primary" style="float:left">筛选</button>
                        </div>
                </div>
            </fieldset>
        </form>
    <br/>
    <br/>
    <br/>
    <br/>
        <form align="left">
            <fieldset>
                <div>
                    <label class="checkbox inline">
                         <button class="btn" type="button">排序</button>
                        <span>&nbsp;日期&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <a href="/kucun/index/asc"><img src='/img/sec_down.gif'></img></a>
                        <span>&nbsp;</span>
                        <a href="/kucun/index/desc"><img src='/img/sec_up.gif'></img></a>
                    </label>
                </div>
            </fieldset>
        </form>


</body>
</html>
