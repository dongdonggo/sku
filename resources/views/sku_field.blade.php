<div class="{{$viewClass['form-group']}}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">
        {{--        <textarea id="{{$id}}" name="{{$name}}">{{ old($column, $value) }}</textarea>--}}

        <div class="sku_warp {{$class}}">
            <input type="hidden" class="Js_sku_input" name="{{$name}}" value="{{old($column, $value)}}">
            <div class="sku_attr_select">
                <span class="btn btn-success Js_single_btn" data-type="single">单规格</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="btn btn-default Js_many_btn" data-type="many">多规格</span>
            </div>
            <!-- 单规格 -->
            <div class="single_row">
                <table class="table table-bordered" style="width: auto">
                    <thead>
                    <tr>
                        <th>规格名</th>
                        <th style="width: 100px">图片 </th>
                        <th style="width: 100px">卖价 </th>
                        <th style="width: 100px">原价 </th>
                        <th style="width: 100px">库存 </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-field="single_name"> <input value="默认" type="text" class="form-control"> </td>
                        <td data-field="pic">
                            <input value="" type="hidden" class="form-control">
                            <span class="Js_sku_upload upload_single">+</span><span class="Js_sku_del_pic clear_single">清空</span>
                        </td>
                        <td data-field="price">
                            <input value="0" type="text" class="form-control">
                        </td>
                        <td data-field="price_old">
                            <input value="0" type="text" class="form-control">
                        </td>
                        <td data-field="stock">
                            <input value="0" type="text" class="form-control">
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div><!-- end 单规格 -->

            <div class="sku_attr_key_val" style="display: none">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 100px">规格名</th>
                        <th>规格值</th>
                        <th style="width: 100px">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td>
                            <div class="sku_attr_val_warp">
                                <div class="sku_attr_val_item">
                                    <div class="sku_attr_val_input">
                                        <input type="text" class="form-control">
                                    </div>
                                    <span class="btn btn-danger Js_remove_attr_val"><i
                                                class="glyphicon glyphicon-remove"></i></span>
                                </div>
                                <div class="sku_attr_val_item Js_add_attr_val" style="padding-left: 10px">
                                    <span class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="btn btn-success Js_add_attr_name">添加</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- 操作SKU -->
            <div class="sku_edit_warp" style="display: none">
                <table class="table table-bordered" style="width: auto">
                    <thead></thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

    </div>
</div>
