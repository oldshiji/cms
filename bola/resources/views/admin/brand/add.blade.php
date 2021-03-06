
  @extends("admin.layout.main")
@section("content")
  <div class="right_col" role="main">

    <div class="container cropper">
      <div class="row">
        <div class="col-md-9">
          <div class="img-container">
            <img id="image" src="http://www.baidu.com/images/logo.jpg" alt="Picture" class="cropper-hidden"><div class="cropper-container cropper-bg" style="display:none;width: 662px; height: 516px;"><div class="cropper-wrap-box"><div class="cropper-canvas" style="width: 339.981px; height: 191.239px; left: 14.5261px; top: -3.13255px;"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="width: 339.981px; height: 191.239px; margin-left: 0px; margin-top: 0px; transform: none;"></div></div><div class="cropper-drag-box cropper-modal cropper-crop"></div><div class="cropper-crop-box" style="width: 398.213px; height: 223.995px; left: 6.01818px; top: 0px;"><span class="cropper-view-box"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="width: 339.981px; height: 191.239px; margin-left: 8.50796px; margin-top: -3.13255px; transform: none;"></span><span class="cropper-dashed dashed-h"></span><span class="cropper-dashed dashed-v"></span><span class="cropper-center"></span><span class="cropper-face cropper-move"></span><span class="cropper-line line-e" data-action="e"></span><span class="cropper-line line-n" data-action="n"></span><span class="cropper-line line-w" data-action="w"></span><span class="cropper-line line-s" data-action="s"></span><span class="cropper-point point-e" data-action="e"></span><span class="cropper-point point-n" data-action="n"></span><span class="cropper-point point-w" data-action="w"></span><span class="cropper-point point-s" data-action="s"></span><span class="cropper-point point-ne" data-action="ne"></span><span class="cropper-point point-nw" data-action="nw"></span><span class="cropper-point point-sw" data-action="sw"></span><span class="cropper-point point-se" data-action="se"></span></div></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="docs-preview clearfix">
            <div class="img-preview preview-lg" style="width: 263px; height: 147.938px;"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="display: block; width: 224.541px; height: 126.304px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: 5.61909px; margin-top: -2.0689px; transform: none;"></div>
            <div class="img-preview preview-md" style="width: 138.667px; height: 78px;"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="display: block; width: 118.389px; height: 66.5938px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: 2.96266px; margin-top: -1.09082px; transform: none;"></div>
            <div class="img-preview preview-sm" style="width: 69px; height: 38.8125px;"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="display: block; width: 58.9099px; height: 33.1368px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: 1.47421px; margin-top: -0.54279px; transform: none;"></div>
            <div class="img-preview preview-xs" style="width: 35px; height: 19.6875px;"><img src="https://colorlib.com/polygon/gentelella/images/cropper.jpg" style="display: block; width: 29.8818px; height: 16.8085px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: 0.747787px; margin-top: -0.275328px; transform: none;"></div>
          </div>

          <div class="docs-data" style="display:none;">
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataX">X</label>
              <input type="text" class="form-control" id="dataX" placeholder="x">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataY">Y</label>
              <input type="text" class="form-control" id="dataY" placeholder="y">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataWidth">Width</label>
              <input type="text" class="form-control" id="dataWidth" placeholder="width">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataHeight">Height</label>
              <input type="text" class="form-control" id="dataHeight" placeholder="height">
              <span class="input-group-addon">px</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataRotate">Rotate</label>
              <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
              <span class="input-group-addon">deg</span>
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataScaleX">ScaleX</label>
              <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
            </div>
            <div class="input-group input-group-sm">
              <label class="input-group-addon" for="dataScaleY">ScaleY</label>
              <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9 docs-buttons">
          <!-- <h3 class="page-header">Toolbar:</h3> -->

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                            <span class="fa fa-arrows"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                            <span class="fa fa-crop"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, 0.1)">
                            <span class="fa fa-search-plus"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, -0.1)">
                            <span class="fa fa-search-minus"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, -10, 0)">
                            <span class="fa fa-arrow-left"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 10, 0)">
                            <span class="fa fa-arrow-right"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 0, -10)">
                            <span class="fa fa-arrow-up"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;move&quot;, 0, 10)">
                            <span class="fa fa-arrow-down"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, -45)">
                            <span class="fa fa-rotate-left"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;rotate&quot;, 45)">
                            <span class="fa fa-rotate-right"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;scaleX&quot;, -1)">
                            <span class="fa fa-arrows-h"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;scaleY&quot;, -1)">
                            <span class="fa fa-arrows-v"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;crop&quot;)">
                            <span class="fa fa-check"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;clear&quot;)">
                            <span class="fa fa-remove"></span>
                          </span>
            </button>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;disable&quot;)">
                            <span class="fa fa-lock"></span>
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;enable&quot;)">
                            <span class="fa fa-unlock"></span>
                          </span>
            </button>
          </div>


          <div class="btn-group">
            <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;reset&quot;)">
                            <span class="fa fa-refresh"></span>
                          </span>
            </button>
            <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
              <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
              <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="Import image with Blob URLs">
                            <span class="fa fa-upload"></span>
                          </span>
            </label>
            <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;destroy&quot;)">
                            <span class="fa fa-power-off"></span>
                          </span>
            </button>
          </div>
          <!--图像处理-->

          <div class="btn-group btn-group-crop" style="display:none;">
            <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;)">
                            Get Cropped Canvas
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                            160×90
                          </span>
            </button>
            <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                            320×180
                          </span>
            </button>
          </div>

          <!-- Show the cropped image in modal -->

       <div class="modal fade docs-cropped"  id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
             </div>
             <div class="modal-body"></div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
             </div>
           </div>
         </div>
       </div><!-- /.modal -->
        </div><!-- /.docs-toggles -->
      </div>
    </div>

    <form method="post" action="{:U('brand/insert')}" id="postform" data-parsley-validate class="form-horizontal form-label-left">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="hidden" name="image" value="" id="imgdata">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">所属分类 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select name="pid">
             @foreach ($classify as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">链接 <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="last-name" name="url" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">是否显示</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="gender" class="btn-group" data-toggle="buttons">
            <input type="radio" name="status" value="1"> &nbsp; 开启 &nbsp;
            <input type="radio" name="status" value="0"> 禁用
          </div>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <button class="btn btn-primary" type="reset" onclick="javascript:history.back();">取消</button>
              <!--
              <button type="button" onclick="save()"  class="btn btn-success" data-method="getCroppedCanvas">提交</button>
              -->
            <!---插件图片处理的按钮-->
            <div class="btn-group btn-group-crop"  id="savePrevImg" >
              <button type="button" onclick="save()" class="btn btn-primary" data-method="getCroppedCanvas">
                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="提交">
                              提交
                            </span>
              </button>
            </div>
        </div>
      </div>
    </form>

  </div>


  @include("admin.layout.footerjs")
    <script type="text/javascript">
        function save(){
            var form = new FormData(document.getElementById("postform"));
            $.ajax({
                type: 'POST',
                url: "{{url('admin/brand')}}",
                processData:false,
                contentType:false,
                dataType: 'json',
                data: form,
                success: function(data){
                    if(data.status==1){
                        layer.msg(data.message);
                        setTimeout(function(){//两秒后跳转
                            window.location.href = data.url;
                        },1000);
                    }else{
                        alert(data.message);
                    }
                },
                error:function(data){
                    if (data.status == 422) {
                        //console.log(data.status); return false;
                        var json=JSON.parse(data.responseText);
                        json = json.errors;
                        for ( var item in json) {
                            for ( var i = 0; i < json[item].length; i++) {
                                layer.msg(json[item][i],{time:1000});
                                return ; //遇到验证错误，就退出
                            }
                        }
                    } else {
                        layer.msg('服务器连接失败',{time:1000});
                        return ;
                    }
                }
            });
            return false;
            function success(data) {
                if (data.status == 0) {
                    alert(data.message);
                } else {
                    window.location.href = data.url;
                }
            };


        }
    </script>

  @endsection

