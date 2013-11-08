var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-21915157-1']);
_gaq.push(['_setDomainName', 'codemonkey.mx']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

var tpj=jQuery;               // MAKE JQUERY PLUGIN CONFLICTFREE
tpj.noConflict();

tpj(document).ready(function() {

    if (tpj.fn.cssOriginal!=undefined)   // CHECK IF fn.css already extended
        tpj.fn.css = tpj.fn.cssOriginal;

    tpj('.fullwidthbanner').revolution({
        delay:9000,
        startwidth:960,
        startheight:430,

        onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

        thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
        thumbHeight:50,
        thumbAmount:3,

        hideThumbs:0,
        navigationType:"none",				// bullet, thumb, none
        navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

        navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


        navigationHAlign:"center",				// Vertical Align top,center,bottom
        navigationVAlign:"bottom",					// Horizontal Align left,center,right
        navigationHOffset:0,
        navigationVOffset:20,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,

        touchenabled:"on",						// Enable Swipe Function : on/off



        stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
        stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

        hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
        hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
        hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


        fullWidth:"on",

        shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

    });

});