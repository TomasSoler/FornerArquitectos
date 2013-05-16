<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>FornerArquitectos</title>
<meta name="description" content=""/>
<meta name="author" content=""/>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="assets/css/style_inv.css">
<link rel="stylesheet" href="assets/css/960.css">
<script>document.write('<link rel="stylesheet" href="assets/css/lavalampInv.css">');</script>
<script type="text/javascript">
    current = 0;

    //$('body').hide();
    WebFontConfig = {
        google: { families: [ 'Abel::latin' ] }
    };

    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); 
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="assets/js/plugins.js"></script>
    

</head>

<body>

  <div id="container" >
    <header class="container_12">
        <div id="logo" class="grid_3">
        </div>
        <div id="nav" class="push_5 grid_4">
            <ul class="nav">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="proyectos.html">Proyectos</a></li>
                <li><a href="contacto.html" class="current">Contacto</a></li>
            </ul>
        </div>
    </header>
    <div id="main" role="main" class="container_12">
        <div id="manifesto" class="grid_8 push_2">
            <h1>Contacto</h1>
            <h2 id="linea" class="grid_6 push_1"></h2>
        </div>
        <div id="contactoContent" class="container_12">
            <div class="clear"></div>
            <div id="direccionContent" class="grid_3 push_2 omega" style="height:225px;">
                <p><strong>jm&amp;d Forner&acute;s Arquitectos</strong></p>
                <p>C/ Uberna N&deg;6 AC 03202</p>
                <p>Elche (Alicante) Espa&ntilde;a</p>
                <p><strong>TLF/FAX</strong> 0034 965 453 944</p>
                <h2 id="" style="width:100px; margin-top: 0px; border-top: 1px solid #e8e0ba;"></h2>
                <p>info@fornerarquitectos.es</p>
                <p>diana@fornerarquitectos.es</p>
                <p>jm@fornerarquitectos.es</p>
            </div>
            <div id="formulario" class="grid_5">
                <form id="contacto" action="assets/bin/form.php" method="post">
                    <input id="name" type="text" name="nombre" style="height: 40px;" class="grid_5 push_2" />
                    <input id="mail" type="text" name="Email" style="height: 40px;  margin-top:20px;" class="grid_5 push_2" />
                    <textarea id="comentario" name="comentario" style="height:110px;margin-top:20px; margin-left:10px;" class="push_2 grid_5"></textarea>
                    <div class="clear"></div>
                    <div id="send" class="grid_2 push_5 omega" style="background: #434b53; border: 1px solid #b6b39a; text-align: center; padding: 15px 0px; margin-top: 15px;">ENVIAR</div>
                </form>
                <div id="map" class="grid_8 pull_1 omega" style="margin-top: 20px;">
                    <a href="http://g.co/maps/aed76">
                    <img src="http://maps.google.com/maps/api/staticmap?zoom=16&size=620x200&maptype=street&markers=color:0xe8e0ba|label:F|38.267278,-0.698286&sensor=false"/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <footer>
        <div id="palmericas"></div>
        <div id="footer_bg_container" class="container_12">
            <div id="footer_grid" class="container_12">
                <div id="copyright" class="grid_7">
                    <p>jm&amp;d Forner&acute;s Arquitectos 2011. Todos los derechos reservados.</p>
                </div>
                <div id="social" class="grid_2 push_3">
                    <ul>
                        <li id="f_icon"><a href="http://www.facebook.com/pages/FornerArquitectos-JMD/312709282080447" target="_blank"></a></li>
                        <li id="t_icon"><a href="http://twitter.com/fornerarquitect" target="_blank"></a></li>
                        <li id="v_icon"><a href="http://vimeo.com/FornerArquitectos" target="_blank"></a></li>
                        <li id="y_icon"><a href="http://www.youtube.com/user/FornerArquitectos" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
  </div> <!--! end of #container -->
    <script src="assets/js/script.js"></script>
  <script type="text/javascript">

  jQuery(document).ready(function($) {
    $('#send').click(function(){
            $("#contacto").submit();
        });
            
        var v, elem = $('#name');
        window.setTimeout(function() {
            v = elem.position().left;
            console.log(v);
            if (v) {
                return false;
            }
            window.setTimeout(arguments.callee, 1);
        }, 1);


       //MEH 
       
        $.fn.placeholder = function(options) {
        var that = this;
        var defaults = {
             text: 'Placeholder'
        };
          
        options = $.extend(defaults, options);
          
        if(navigator.userAgent.indexOf('Mac') != -1) {
            var top = that.offset().top + 23;
            var left = that.offset().left;
        } else {
            var top = that.offset().top + 23;
            var left = that.offset().left;
        }
        return that.each(function() {
          
            $('<span class="placeholder"/>').text(options.text)
                .css({
                    position: 'absolute',
                    top: top,
                    left: left
                }).insertAfter(that);

            that.focus(function() {
                that.next('span.placeholder').hide();
            });

            that.blur(function() {
                if(that.val() == '') {
                    that.next('span.placeholder').show();
                }
            }); 
        });
    };

    if ($(window).height() < 840) {
        $('#map').empty().append('<a href="http://g.co/maps/aed76"><img src="http://maps.google.com/maps/api/staticmap?zoom=16&size=650x75&maptype=street&markers=color:0xe8e0ba|label:F|38.267278,-0.698286&sensor=false"/></a>');
    } 

    $(window).load(function(){
        var t = setTimeout("placeholder()", 600);
    });
});
         
 </script>
 <script type="text/javascript">
        setTimeout("lavaLamp('inv')", 2500);
    </script>
</body>
</html>
