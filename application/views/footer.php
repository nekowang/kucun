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
