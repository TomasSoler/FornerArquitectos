    <style>
        ::-moz-selection { background: #e8e0ba; color: #434b53; text-shadow: none; }
        ::selection { background: #e8e0ba; color: #434b53; text-shadow: none; }
    </style>
    <div id="main" role="main" class="container_12">
        <div id="manifesto" class="grid_8 push_2">
            <h1>Contacto</h1>
            <span class="grid_6 push_1 linea" style="margin-bottom: 20px"></span>
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
                <form id="contacto" action="/contacto/send" method="post">
                    <input id="name" type="text" name="nombre" style="height: 40px;" class="grid_5 push_2" placeholder="Nombre"/>
                    <input id="mail" type="text" name="email" style="height: 40px;  margin-top:20px;" class="grid_5 push_2" placeholder="Correo"/>
                    <input type="hidden" id="sent" name="sent" value="1">
                    <textarea id="comentario" name="comentario" style="height:110px;margin-top:20px; margin-left:10px; padding-top: 5px;" class="push_2 grid_5" placeholder="Comentario"></textarea>
                    <div class="clear"></div>
                    <div id="send" class="grid_2 push_5 omega" style="cursor: pointer; background: #434b53; border: 1px solid #b6b39a; text-align: center; padding: 15px 0px; margin-top: 15px;">ENVIAR</div>
                </form>
                <div id="map" class="grid_8 pull_1 omega" style="margin-top: 20px;">
                    <a href="http://g.co/maps/aed76">
                        <img src="http://maps.google.com/maps/api/staticmap?zoom=16&size=620x200&maptype=street&markers=color:0xe8e0ba|label:F|38.267278,-0.698286&sensor=false"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
<?php /*
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
 */ ?>