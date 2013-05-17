/*! Jquery Pause Plugin */
(function() {
    var $ = jQuery,
        pauseId = 'jQuery.pause',
        uuid = 1,
        oldAnimate = $.fn.animate,
        anims = {};

    function now() { return new Date().getTime(); }

    $.fn.animate = function(prop, speed, easing, callback) {
        var optall = $.speed(speed, easing, callback);
        optall.complete = optall.old; // unwrap callback
        return this.each(function() {
            // check pauseId
            if (! this[pauseId])
                this[pauseId] = uuid++;
            // start animation
            var opt = $.extend({}, optall);
            oldAnimate.apply($(this), [prop, $.extend({}, opt)]);
            // store data
            anims[this[pauseId]] = {
                run: true,
                prop: prop,
                opt: opt,
                start: now(),
                done: 0
            };
        });
    };

    $.fn.pause = function() {
        return this.each(function() {
            // check pauseId
            if (! this[pauseId])
                this[pauseId] = uuid++;
            // fetch data
            var data = anims[this[pauseId]];
            if (data && data.run) {
                data.done += now() - data.start;
                if (data.done > data.opt.duration) {
                    // remove stale entry
                    delete anims[this[pauseId]];
                } else {
                    // pause animation
                    $(this).stop();
                    data.run = false;
                }
            }
        });
    };

    $.fn.resume = function() {
        return this.each(function() {
            // check pauseId
            if (! this[pauseId])
                this[pauseId] = uuid++;
            // fetch data
            var data = anims[this[pauseId]];
            if (data && ! data.run) {
                // resume animation
                data.opt.duration -= data.done;
                data.done = 0;
                data.run = true;
                data.start = now();
                oldAnimate.apply($(this), [data.prop, $.extend({}, data.opt)]);
            }
        });
    };
})();


/**
 * Singleton with "register" functionality.
 *
 * @see http://codereview.stackexchange.com/questions/15166/best-way-to-organize-javascript-for-website
 */

 (function(exports) {

    var initialized,
    registry = []; // Collection of module.

    // Adds module to collection:
    exports.register = function(moduleDeclaration) {
        registry.push(moduleDeclaration); // Add module to registry.
        if (initialized) {
            moduleDeclaration.call(this); // If Phryxus already initialized, register and execute module immediately.
        }
    };
    // Executes every module:
    exports.init = function() {
        initialized = true; // Flippin' switches!
        // Loop through each module and execute:
        for (var i = 0, l = registry.length; i < l; i++) {
            registry[i].call(this); // Call and execute module.
        }
    };
}(window.Phryxus = window.Phryxus || {})); // Use existing namespace or make a new object of that namespace.



Phryxus.register(function() {

    var slides = {

        // Definitions
        $slides : $("#manifesto ul li"),
        $progressBar : $('.progressIndicator'),
        timer : 6000,
        transition: 300,
        
        init : function() {
            // Settings
            this.$slides.hide();
            this.$slides.first().show();
            this.$progressBar.css({width: 0}); // Reset to 0 when the page is loaded
            this.progressEffect(this.timer);
            this.mouseReactions();
        },
        getCurrentWidth: function (ele) {
            var width = ele.width();
            var parentWidth = ele.offsetParent().width();
            var percent = 100*width/parentWidth;

            return percent;
        },
        progressEffect: function () {
            this.$progressBar.animate({width: '100%'}, slides.timer, 'linear', function () {
                slides.nextSlide();
            });

        },
        progressBarFinished: function () {
            if(this.getCurrentWidth(this.$progressBar)  >= '100' ) {
                return true;
            } else {
                return false;
            }
        },
        nextSlide: function () {
           this.$progressBar.stop();
            this.$progressBar.css({width: 0});
            curr = this.$slides.filter(':visible');
            next = (curr.html() == this.$slides.last().html()) ? this.$slides.first() : curr.next();
            curr.fadeOut(this.transition, function() { next.fadeIn(slides.transition); slides.progressEffect(slides.timer); });
        },
        mouseReactions: function () {
            this.$slides.on('mouseenter', function() {
                slides.$progressBar.pause();
            });
            this.$slides.on('mouseleave', function() {
                slides.$progressBar.resume();
            });
        }

    }; // slides

    slides.init();

});

//--------------------------------------------------------------------

/**
 * Register a new module.
 * Just testing the waters.
 */

Phryxus.register(function() {
    var projects = {
        init: function() {
            console.log('loading projects JS...');
        }
    }

    projects.init();
});

//--------------------------------------------------------------------

$(document).ready(function() {

    // /**
    //  * Executing the init.
    //  */

    Phryxus.init();

    // //----------------------------------

    // *
    //  * Register a new module.
    //  * Testing "after" init.


    //  Phryxus.register(function() { console.log('After init...'); });

});