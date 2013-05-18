        <div id="main" role="main" class="container_12">
            <div id="manifesto"  class="grid_10 push_1">
                <ul>
<?php 
                $files = glob("static/img/slider/*");
                foreach($files as $file) { ?>
                    <li><img src="<?= $file ?>"/></li>
<?php } ?>
                </ul>
                <div class="progressBar">
                    <div class="progressIndicator"></div>
                </div>
                <img class="sliderText" src="/static/img/SliderText.png"/>
            </div>
        </div>
        <div class="clear"></div>
