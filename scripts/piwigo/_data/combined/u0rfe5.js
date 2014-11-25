/*BEGIN header */

/*BEGIN themes/elegant/scripts.js */
﻿(function(){var session_storage=window.sessionStorage||{};var menubar=jQuery("#menubar"),menuswitcher=jQuery("#menuSwitcher"),content=jQuery("#the_page > .content"),pcontent=jQuery("#content");function hideMenu(delay){menubar.hide(delay);menuswitcher.addClass("menuhidden").removeClass("menushown");content.addClass("menuhidden").removeClass("menushown");pcontent.addClass("menuhidden").removeClass("menushown");session_storage['page-menu']='hidden';}
function showMenu(delay){menubar.show(delay);menuswitcher.addClass("menushown").removeClass("menuhidden");content.addClass("menushown").removeClass("menuhidden");pcontent.addClass("menushown").removeClass("menuhidden");session_storage['page-menu']='visible';}
jQuery(function(){if(menubar.length==1&&p_main_menu!="disabled"){menuswitcher.html('<div class="switchArrow">&nbsp;</div>');if(session_storage['page-menu']==undefined&&p_main_menu=='off'){session_storage['page-menu']='hidden';}
if(session_storage['page-menu']=='hidden'){hideMenu(0);}
else{showMenu(0);}
menuswitcher.click(function(e){if(menubar.is(":hidden")){showMenu(0);}
else{hideMenu(0);}
e.preventDefault();});}
else if(menubar.length==1&&p_main_menu=="disabled"){showMenu(0);}});}());

/*BEGIN themes/elegant/js/jquery.jBreadCrumb.js */
(function($)
{var _options={};var _container={};var _breadCrumbElements={};var _autoIntervalArray=[];var _easingEquation;jQuery.fn.jBreadCrumb=function(options)
{_options=$.extend({},$.fn.jBreadCrumb.defaults,options);return this.each(function()
{_container=$(this);setupBreadCrumb();});};function setupBreadCrumb()
{if(typeof(jQuery.easing)=='object')
{_easingEquation='easeOutQuad'}
else
{_easingEquation='swing'}
_breadCrumbElements=jQuery(_container).find('li');jQuery(_container).find('ul').wrap('<div style="overflow:hidden; position:relative;  width: '+jQuery(_container).css("width")+';"><div>');jQuery(_container).find('ul').width(5000);if(_breadCrumbElements.length>0)
{jQuery(_breadCrumbElements[_breadCrumbElements.length-1]).addClass('last');jQuery(_breadCrumbElements[0]).addClass('first');if(_breadCrumbElements.length>_options.minimumCompressionElements)
{compressBreadCrumb();};};};function compressBreadCrumb()
{var finalElement=jQuery(_breadCrumbElements[_breadCrumbElements.length-1]);if(jQuery(finalElement).width()>_options.maxFinalElementLength)
{if(_options.beginingElementsToLeaveOpen>0)
{_options.beginingElementsToLeaveOpen--;}
if(_options.endElementsToLeaveOpen>0)
{_options.endElementsToLeaveOpen--;}}
if(jQuery(finalElement).width()<_options.maxFinalElementLength&&jQuery(finalElement).width()>_options.minFinalElementLength)
{if(_options.beginingElementsToLeaveOpen>0)
{_options.beginingElementsToLeaveOpen--;}}
var itemsToRemove=_breadCrumbElements.length-1-_options.endElementsToLeaveOpen;jQuery(_breadCrumbElements[_breadCrumbElements.length-1]).css({background:'none'});$(_breadCrumbElements).each(function(i,listElement)
{if(i>_options.beginingElementsToLeaveOpen&&i<itemsToRemove)
{jQuery(listElement).find('a').wrap('<span></span>').width(jQuery(listElement).find('a').width()+10);var options={id:i,width:jQuery(listElement).width(),listElement:jQuery(listElement).find('span'),isAnimating:false,element:jQuery(listElement).find('span')};jQuery(listElement).bind('mouseover',options,expandBreadCrumb).bind('mouseout',options,shrinkBreadCrumb);jQuery(listElement).find('a').unbind('mouseover',expandBreadCrumb).unbind('mouseout',shrinkBreadCrumb);listElement.autoInterval=setInterval(function()
{clearInterval(listElement.autoInterval);jQuery(listElement).find('span').animate({width:_options.previewWidth},_options.timeInitialCollapse,_options.easing);},(150*(i-2)));}});};function expandBreadCrumb(e)
{var elementID=e.data.id;var originalWidth=e.data.width;jQuery(e.data.element).stop();jQuery(e.data.element).animate({width:originalWidth},{duration:_options.timeExpansionAnimation,easing:_options.easing,queue:false});return false;};function shrinkBreadCrumb(e)
{var elementID=e.data.id;jQuery(e.data.element).stop();jQuery(e.data.element).animate({width:_options.previewWidth},{duration:_options.timeCompressionAnimation,easing:_options.easing,queue:false});return false;};jQuery.fn.jBreadCrumb.defaults={maxFinalElementLength:400,minFinalElementLength:200,minimumCompressionElements:4,endElementsToLeaveOpen:1,beginingElementsToLeaveOpen:1,timeExpansionAnimation:800,timeCompressionAnimation:500,timeInitialCollapse:600,easing:_easingEquation,overlayClass:'chevronOverlay',previewWidth:40};})(jQuery);

