/// <reference path="jquery.d.ts" />
/**
 * Singleton with "register" functionality.
 *
 * @see http://codereview.stackexchange.com/questions/15166/best-way-to-organize-javascript-for-website
 */

(function(exports) {

    var initialized,
    registry = []; // Collection of module.

    // Adds module to collection:
    exports.register = function (moduleDeclaration) {
        registry.push(moduleDeclaration); // Add module to registry.
        if (initialized) {
            moduleDeclaration.call(this); // If Phryxus already initialized, register and execute module immediately.
        }
    };
    // Executes every module:
    exports.init = function () {
        initialized = true; // Flippin' switches!
        // Loop through each module and execute:
        for (var i = 0, l = registry.length; i < l; i++) {
            registry[i].call(this); // Call and execute module.
        }
    };
} (window.Phryxus = Phryxus || {})); // Use existing namespace or make a new object of that namespace.

//--------------------------------------------------------------------

/**
 * Init page as a module
 * Slides Effect
 */

/*
TEMP
*/



// jQuery(document).ready(function($) {

//     homeEffect.init($('.timer'), $('.bgContainer'), $('.slide_text'));
//     $('#slide_info .slide_text:first-child').addClass('active');// aadd this to the init routine.
//     $('#slideshow > :first-child ').addClass('active'); // aadd this to the init routine.
//     $('#slider_index > :first-child').addClass('active'); // aadd this to the init routine.

// });

// var homeEffect = {
//     // TODO: Discover the random bug where the effect just stops
//     init: function(timer, bgList, contentContainer) {
//         this.timer              = timer;
//         this.bgList             = bgList;
//         this.bgLength           = this.bgList.length;
//         this.bgLast             = this.bgList.last();
//         this.progressStep       = 6000 / (10);
//         //this.pbinterval           = this.progressBar(this.progressStep);
//         this.timer.css({width:0});
//         $('.slider_thumb').click(function(){homeEffect.indexImage($(this).attr('data-id'))});
//         console.log('bgLength: ' + this.bgLength); // Start checking if only 1 image, effect = off.
//     },
//     getCurrentWidth: function () {
//         var width = this.timer.width();
//         var parentWidth = this.timer.offsetParent().width();
//         var percent = 100*width/parentWidth;

//         return percent;
//     },
//     fadeEffect: function(from, to) {
//         to.addClass('next-active').css({ opacity:1 });
//         from.animate({opacity: 0.0}, 1000, function() {
//             from.removeClass('active');
//             to.removeClass('next-active').addClass('active').css({opacity: 1});
//         });
//         this.contentEffect(to.attr('data-id'));
//         this.timer.css({width:0});  
//     },
//     contentEffect: function(id) {
//         $('.slide_text.active, .slider_thumb.active').removeClass('active');
//         $('[data-id=' + id + ']').addClass('active');
//     },
//     indexImage: function(id) {
//         clearInterval(this.progressBar);
//         $('.slide_text.active, .slider_thumb.active').removeClass('active');
//         $('.slide_text[data-id=' + id + '], .slider_thumb[data-id=' + id + ']').addClass('active');
//         this.fadeEffect($('.bgContainer.active'), $('.bgContainer[data-id=' + id + ']'));   
//     },
//     progressBar: function(time) {

//         timer = setInterval(function () {
//             var nextwidth   = homeEffect.getCurrentWidth() + 0.4 + "%",
//                 from        = $('.bgContainer.active'),
//                 to          = $('.bgContainer.active').next();

//             homeEffect.timer.width( nextwidth );
//             if (homeEffect.getCurrentWidth() >= '100') {
//                 homeEffect.index = from.parent().children('div').index(from)+1;
//                 if(homeEffect.index == homeEffect.bgLength) {
//                     to = homeEffect.bgList.first(); 
//                     homeEffect.index = 1;
//                 }
//                 homeEffect.fadeEffect(from, to);
//             }
//         }, 25); // Calculate "time" and replace this... 

//         $('#slider_container').hover(function(){
//             clearInterval(timer);
//         }, function() {
//             clearInterval(timer);
//             homeEffect.progressBar(homeEffect.progressStep);
//         });
//     },
// };





Phryxus.register(function () {

    var slides = {

        // Definitions
        $slides: $("#manifesto ul li"),
        $progressBar: $('.progressIndicator'),
        timer: 1000,

        init: function (timer) {
            // Settings
            this.timer = timer;
            this.$slides.hide();
            this.$slides.first().show();
            this.$progressBar.css({ width: 0 });

            /* Start the "setinterval" here for the progressbar. */

            console.log(this.getCurrentWidth);



        },

        getCurrentWidth: function () {
            var width = this.timer.width();
            var parentWidth = this.timer.offsetParent().width();
            var percent = 100 * width / parentWidth;

            return percent;
        },

    }; // slides

    slides.init(300);

});

//--------------------------------------------------------------------

/**
 * Register a new module.
 * Just testing the waters.
 */

Phryxus.register(function () {

    // http://www.hardcode.nl/subcategory_1/article_526-singleton-examples-in-javascript.htm
    var Singleton = (function () {

        var instantiated;

        function init() {

            // All singleton code goes here:

            return {

                publicWhatever: function () {

                    console.log('whatever');

                },
                publicProperty: 2

            };

        }

        return {

            getInstance: function () {

                if (!instantiated) {

                    instantiated = init();

                }

                return instantiated;

            }

        };

    })();

    // To call public methods now use:
    Singleton.getInstance().publicWhatever();

});

//--------------------------------------------------------------------
