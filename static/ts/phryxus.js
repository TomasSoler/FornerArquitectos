((function (exports) {
    var initialized, registry = [];
    exports.register = function (moduleDeclaration) {
        registry.push(moduleDeclaration);
        if(initialized) {
            moduleDeclaration.call(this);
        }
    };
    exports.init = function () {
        initialized = true;
        for(var i = 0, l = registry.length; i < l; i++) {
            registry[i].call(this);
        }
    };
})(window.Phryxus = Phryxus || {
}));
Phryxus.register(function () {
    var slides = {
        $slides: $("#manifesto ul li"),
        $progressBar: $('.progressIndicator'),
        timer: 1000,
        init: function (timer) {
            this.timer = timer;
            this.$slides.hide();
            this.$slides.first().show();
            this.$progressBar.css({
                width: 0
            });
            console.log(this.getCurrentWidth);
        },
        getCurrentWidth: function () {
            var width = this.timer.width();
            var parentWidth = this.timer.offsetParent().width();
            var percent = 100 * width / parentWidth;
            return percent;
        }
    };
    slides.init(300);
});
Phryxus.register(function () {
    var Singleton = (function () {
        var instantiated;
        function init() {
            return {
                publicWhatever: function () {
                    console.log('whatever');
                },
                publicProperty: 2
            };
        }
        return {
            getInstance: function () {
                if(!instantiated) {
                    instantiated = init();
                }
                return instantiated;
            }
        };
    })();
    Singleton.getInstance().publicWhatever();
});
