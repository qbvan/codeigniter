<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <script type="text/javascript" src="<?php echo base_url()?>vendor/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>1.js"></script>
        <link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url()?>vendor/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url()?>1.css">
    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: https://www.jssor.com -->
        <script src="<?php echo base_url()?>js/jssor.slider-27.0.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        jssor_1_slider_init = function() {
        var jssor_1_SlideshowTransitions = [
        {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];
        var jssor_1_options = {
        $AutoPlay: 1,
        $Cols: 1,
        $Align: 0,
        $SlideshowOptions: {
        $Class: $JssorSlideshowRunner$,
        $Transitions: jssor_1_SlideshowTransitions,
        $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
        $Class: $JssorThumbnailNavigator$,
        $Cols: 1,
        $Orientation: 2,
        $Align: 0,
        $NoDrag: true
        }
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        /*#region responsive code begin*/
        var MAX_WIDTH = 980;
        function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;
        if (containerWidth) {
        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
        jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
        window.setTimeout(ScaleSlider, 30);
        }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
        };
        </script>
        <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        }
        @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
        }
        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
        </style>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url()?>img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
<?php foreach ($mangdl as $key => $value) {?>
						                <div data-p="170.00">
						                    <img data-u="image" src="<?php echo $value['image'];?>" />
						                    <div u="thumb"><?php echo $value['tieude'];?></div>
						                </div>
	<?php }?></div>
            <!-- Thumbnail Navigator -->
            <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                <div u="slides">
                    <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                        <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                    </div>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
        </svg>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
<div class="alert alert-info col-sm-5 push-sm-4">
    <strong>Slide image using json.</strong>
</div>
<div class="push-sm-4 col-sm-6">
    <a href="<?php echo base_url();?>slide/">add</a>
</div>
</body>
</html>