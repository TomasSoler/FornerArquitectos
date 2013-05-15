
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


// place any jQuery/helper plugins in here, instead of separate, slower script files.

$(window).load(function() {
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
  
   $('<span class="placeholder"/>').text(options.text).
   css({
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

});
if($(window).height()< 840) {
			$('#map').empty().append('<a href="http://g.co/maps/aed76"><img src="http://maps.google.com/maps/api/staticmap?zoom=16&size=650x75&maptype=street&markers=color:0xe8e0ba|label:F|38.267278,-0.698286&sensor=false"/></a>');
		}