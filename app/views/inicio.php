    <div id="main" role="main" class="container_12">
        <div id="manifesto"  class="grid_10 push_1">
            <ul>
                <?php 
                $files = glob("static/img/slider/*");
                foreach($files as $file) { ?>
                  <li><img src="<?= $file ?>"/></li>
                <?php } ?>
            </ul>
            <div class="progressBar" style="bottom: 40px; margin: 0px; position: absolute; width: 780px;">
                <div class="progressIndicator" style="top: -10px; left: 0px; height: 6px; background-color: #434B53; margin: 0px; "></div>
            </div>
            <img class="sliderText" src="/static/img/SliderText.png"/>

        </div>
    </div>
    <div class="clear"></div>