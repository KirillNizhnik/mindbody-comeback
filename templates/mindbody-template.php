<?php
/**
 * Template Name: Mindbody Page Template
 * Description: A template for pages using Mindbody blocks with proper layout.
 */

get_header(); ?>

<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/mindbody-template-style.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="mindbody-container mindbody-container-hidden">
        <div class="mindbody-inner">
            <?php
            the_content();
            ?>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function(){
            let el = document.querySelector('.mindbody-container.mindbody-container-hidden');
            el.classList.remove('mindbody-container-hidden');
        }
    </script>


<?php get_footer(); ?>


<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wix.com Website Builder"/>

    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/media/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png/v1/fill/w_32%2ch_32%2clg_1%2cusm_0.66_1.00_0.01/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/media/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png/v1/fill/w_32%2ch_32%2clg_1%2cusm_0.66_1.00_0.01/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png" type="image/png"/>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/media/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png/v1/fill/w_32%2ch_32%2clg_1%2cusm_0.66_1.00_0.01/d56505_6ca398afd96a44bda8d7ac18df6ec08b_mv2.png" type="image/png"/>

    <?php echo get_field('head', 'option'); ?>

    <!-- Initial CSS -->

    <style>
        @font-face {
            font-family: 'Mona Sans';
            src:
                    url('https://www.isielitetraining.com/cdn/fonts/mona-sans/Mona-Sans.woff2') format('woff2 supports variations'),
                    url('https://www.isielitetraining.com/cdn/fonts/mona-sans/Mona-Sans.woff2') format('woff2-variations');
            font-weight: 200 900;
            font-stretch: 75% 125%;
        }

        .TFOeq0,
        .kclxHl {
            font-family: 'Mona Sans', sans-serif !important; /* Replace 'sans-serif' with the appropriate fallback fonts */
            font-weight: 700 !important;
            font-size: 16px !important;
            letter-spacing: normal;
            line-height: auto;
        }

        .TFOeq0 {
            align-items: center;
            box-sizing: border-box;
            display: flex;
            justify-content: var(--label-align);
            text-align: initial;
            width: max-content;
        }

        @media (max-width: 1400px) {
            .TFOeq0,
            .kclxHl {
                font-size: 13px !important; /* Adjusts font size for tablet screens */
            }
        }

        @media (max-width: 768px) {
            .TFOeq0,
            .kclxHl {
                font-size: 12px !important; /* Reduces font size on small screens */
            }

            .gydiew .TFOeq0 {
                width: 90px !important;
                padding-left: 5px !important;
                padding-right: 5px !important;
            }
        }
    </style>
    <style>a,abbr,acronym,address,applet,b,big,blockquote,body,button,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,footer,form,h1,h2,h3,h4,h5,h6,header,html,i,iframe,img,ins,kbd,label,legend,li,nav,object,ol,p,pre,q,s,samp,section,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,title,tr,tt,u,ul,var{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:transparent}body{font-size:10px;font-family:Arial,Helvetica,sans-serif}input,select,textarea{font-family:Helvetica,Arial,sans-serif;box-sizing:border-box}ol,ul{list-style:none}blockquote,q{quotes:none}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}a{cursor:pointer;text-decoration:none}body,html{height:100%}body{overflow-x:auto;overflow-y:scroll}.testStyles{overflow-y:hidden}.reset-button{background:none;border:0;outline:0;color:inherit;font:inherit;line-height:normal;overflow:visible;padding:0;-webkit-appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}:focus{outline:none}body.device-mobile-optimized{overflow-x:hidden;overflow-y:scroll}body.device-mobile-optimized:not(.responsive) #SITE_CONTAINER{width:320px;overflow-x:visible;position:relative;margin-left:auto;margin-right:auto}body.device-mobile-optimized:not(.responsive):not(.blockSiteScrolling) #SITE_CONTAINER{margin-top:0}body.device-mobile-optimized>*{max-width:100%!important}body.device-mobile-optimized #site-root{overflow-x:hidden;overflow-y:hidden}@supports (overflow:clip){body.device-mobile-optimized.dont-overflow-hidden-site-root #site-root{overflow-x:clip;overflow-y:clip}}body.device-mobile-non-optimized #SITE_CONTAINER #site-root{overflow-x:hidden;overflow-y:auto}body.device-mobile-non-optimized.fullScreenMode{background-color:#5f6360}body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,body.device-mobile-non-optimized.fullScreenMode #site-root,body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,body.fullScreenMode #WIX_ADS{visibility:hidden}body.fullScreenMode{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode.device-mobile-optimized #TINY_MENU{opacity:0;pointer-events:none}body.fullScreenMode-scrollable.device-mobile-optimized{overflow-x:hidden!important;overflow-y:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,body.fullScreenMode-scrollable.device-mobile-optimized #site-root{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND{height:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout{height:0!important}body.blockSiteScrolling{position:fixed;width:100%;overflow:hidden}body.blockSiteScrolling #SITE_CONTAINER{margin-top:calc(var(--blocked-site-scroll-margin-top) * -1)}body.blockSiteScrolling:not(.responsive) #WIX_ADS{margin-top:var(--blocked-site-scroll-margin-top)}.fullScreenOverlay{z-index:1005;position:fixed;left:0;top:-60px;right:0;bottom:0;display:flex;justify-content:center;overflow-y:hidden}.fullScreenOverlay>.fullScreenOverlayContent{margin:0 auto;position:absolute;right:0;top:60px;left:0;bottom:0;overflow:hidden;transform:translateZ(0)}[data-mesh-id$=centeredContent],[data-mesh-id$=form],[data-mesh-id$=inlineContent]{position:relative;pointer-events:none}[data-mesh-id$=-gridWrapper],[data-mesh-id$=-rotated-wrapper]{pointer-events:none}[data-mesh-id$=-gridContainer]>*,[data-mesh-id$=-rotated-wrapper]>*,[data-mesh-id$=inlineContent]>:not([data-mesh-id$=-gridContainer]){pointer-events:auto}.device-mobile-optimized #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID{-ms-grid-row:2;grid-area:2/1/3/2;position:relative}#masterPage.mesh-layout{display:-ms-grid;display:grid;-ms-grid-rows:max-content max-content min-content max-content;grid-template-rows:-webkit-max-content -webkit-max-content -webkit-min-content -webkit-max-content;grid-template-rows:max-content max-content min-content max-content;-ms-grid-columns:100%;grid-template-columns:100%;align-items:start;justify-content:stretch}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #SITE_FOOTER-placeholder,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER,#masterPage.mesh-layout #SITE_HEADER-placeholder,#masterPage.mesh-layout #SITE_HEADER_WRAPPER,#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer,#masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView]{-ms-grid-column:1;-ms-grid-row-align:start;-ms-grid-column-align:start}#masterPage.mesh-layout #SITE_HEADER-placeholder,#masterPage.mesh-layout #SITE_HEADER_WRAPPER{-ms-grid-row:1;grid-area:1/1/2/2}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer{-ms-grid-row:3;grid-area:3/1/4/2}#masterPage.mesh-layout #soapAfterPagesContainer,#masterPage.mesh-layout #soapBeforePagesContainer{width:100%}#masterPage.mesh-layout #PAGES_CONTAINER{align-self:stretch}#masterPage.mesh-layout main#PAGES_CONTAINER{display:block}#masterPage.mesh-layout #SITE_FOOTER-placeholder,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER{-ms-grid-row:4;grid-area:4/1/5/2}#masterPage.mesh-layout #SITE_PAGES,#masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERcenteredContent],#masterPage.mesh-layout [data-mesh-id=PAGES_CONTAINERinlineContent]{height:100%}#masterPage.mesh-layout.desktop>*{width:100%}#masterPage.mesh-layout #masterPageinlineContent,#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #SITE_FOOTER,#masterPage.mesh-layout #SITE_FOOTER_WRAPPER,#masterPage.mesh-layout #SITE_HEADER,#masterPage.mesh-layout #SITE_HEADER_WRAPPER,#masterPage.mesh-layout #SITE_PAGES,#site-root{position:relative}#site-root{top:var(--wix-ads-top-height);min-height:100%;margin:0 auto}#site-root img:not([src]){visibility:hidden}#site-root svg img:not([src]){visibility:visible}body:not(.responsive) #site-root{width:100%;min-width:var(--site-width)}#SITE_CONTAINER{position:relative}.auto-generated-link{color:inherit}body:not([data-js-loaded]) [data-hide-prejs]{visibility:hidden}#SCROLL_TO_BOTTOM,#SCROLL_TO_TOP{height:0}.has-click-trigger{cursor:pointer}[data-z-counter]{z-index:0}[data-z-counter="0"]{z-index:auto}.wixSiteProperties{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}</style>


    <meta name="viewport" content="width=device-width,maximum-scale=1.0"/>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&amp;display=swap" rel="stylesheet">



    <!-- render-head end -->

    <style>.StylableButton2545352419__root{-archetype:box;border:none;box-sizing:border-box;cursor:pointer;display:block;height:100%;min-height:10px;min-width:10px;padding:0;width:100%}.StylableButton2545352419__root[disabled]{pointer-events:none}.StylableButton2545352419__root.StylableButton2545352419--hasBackgroundColor{background-color:var(--corvid-background-color)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderColor{border-color:var(--corvid-border-color)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderRadius{border-radius:var(--corvid-border-radius)!important}.StylableButton2545352419__root.StylableButton2545352419--hasBorderWidth{border-width:var(--corvid-border-width)!important}.StylableButton2545352419__root.StylableButton2545352419--hasColor,.StylableButton2545352419__root.StylableButton2545352419--hasColor .StylableButton2545352419__label{color:var(--corvid-color)!important}.StylableButton2545352419__link{-archetype:box;box-sizing:border-box;color:#000;text-decoration:none}.StylableButton2545352419__container{align-items:center;display:flex;flex-basis:auto;flex-direction:row;flex-grow:1;height:100%;justify-content:center;overflow:hidden;transition:all .2s ease,visibility 0s;width:100%}.StylableButton2545352419__label{-archetype:text;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(first);max-width:100%;min-width:1.8em;overflow:hidden;text-align:center;text-overflow:ellipsis;transition:inherit;white-space:nowrap}.StylableButton2545352419__root.StylableButton2545352419--isMaxContent .StylableButton2545352419__label{text-overflow:unset}.StylableButton2545352419__root.StylableButton2545352419--isWrapText .StylableButton2545352419__label{min-width:10px;overflow-wrap:break-word;white-space:break-spaces;word-break:break-word}.StylableButton2545352419__icon{-archetype:icon;-controller-part-type:LayoutChildDisplayDropdown,LayoutFlexChildSpacing(last);flex-shrink:0;height:50px;min-width:1px;transition:inherit}.StylableButton2545352419__icon.StylableButton2545352419--override{display:block!important}.StylableButton2545352419__icon svg,.StylableButton2545352419__icon>div{display:flex;height:inherit;width:inherit}.Vd6aQZ{overflow:hidden;padding:0;pointer-events:none;white-space:nowrap}.mHZSwn{display:none}.nDEeB0{cursor:pointer}.lvxhkV{bottom:0;left:0;position:absolute;right:0;top:0;width:100%}.QJjwEo{transform:translateY(-100%);transition:.2s ease-in}.kdBXfh{transition:.2s}.MP52zt{opacity:0;transition:.2s ease-in}.MP52zt.Bhu9m5{z-index:-1!important}.LVP8Wf{opacity:1;transition:.2s}.VrZrC0{height:auto}.VrZrC0,.cKxVkc{position:relative;width:100%}:host(:not(.device-mobile-optimized)) .vlM3HR,body:not(.device-mobile-optimized) .vlM3HR{margin-left:calc((100% - var(--site-width))/2);width:var(--site-width)}.AT7o0U[data-focuscycled=active]{outline:1px solid transparent}.AT7o0U[data-focuscycled=active]:not(:focus-within){outline:2px solid transparent;transition:outline .01s ease}.AT7o0U .vlM3HR{bottom:0;left:0;position:absolute;right:0;top:0}.HlRz5e{display:block;height:100%;width:100%}.HlRz5e img{max-width:var(--wix-img-max-width,100%)}.HlRz5e[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.HlRz5e[data-animate-blur] img[data-load-done]{filter:none}.I5zqsT{display:block;height:100%;width:100%}.WzbAF8 .mpGTIt .O6KwRn{display:var(--item-display);height:var(--item-size);margin:var(--item-margin);width:var(--item-size)}.WzbAF8 .mpGTIt .O6KwRn:last-child{margin:0}.WzbAF8 .mpGTIt .O6KwRn .oRtuWN{display:block}.WzbAF8 .mpGTIt .O6KwRn .oRtuWN .YaS0jR{height:var(--item-size);width:var(--item-size)}.WzbAF8 .mpGTIt{height:100%;position:absolute;white-space:nowrap;width:100%}:host(.device-mobile-optimized) .WzbAF8 .mpGTIt,body.device-mobile-optimized .WzbAF8 .mpGTIt{white-space:normal}.sNF2R0{opacity:0}.hLoBV3{transition:opacity var(--transition-duration) cubic-bezier(.37,0,.63,1)}.Rdf41z,.hLoBV3{opacity:1}.ftlZWo{transition:opacity var(--transition-duration) cubic-bezier(.37,0,.63,1)}.ATGlOr,.ftlZWo{opacity:0}.KQSXD0{transition:opacity var(--transition-duration) cubic-bezier(.64,0,.78,0)}.KQSXD0,.pagQKE{opacity:1}._6zG5H{opacity:0;transition:opacity var(--transition-duration) cubic-bezier(.22,1,.36,1)}.BB49uC{transform:translateX(100%)}.j9xE1V{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.ICs7Rs,.j9xE1V{transform:translateX(0)}.DxijZJ{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.B5kjYq,.DxijZJ{transform:translateX(-100%)}.cJijIV{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.cJijIV,.hOxaWM{transform:translateX(0)}.T9p3fN{transform:translateX(100%);transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.qDxYJm{transform:translateY(100%)}.aA9V0P{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.YPXPAS,.aA9V0P{transform:translateY(0)}.Xf2zsA{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.Xf2zsA,.y7Kt7s{transform:translateY(-100%)}.EeUgMu{transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}.EeUgMu,.fdHrtm{transform:translateY(0)}.WIFaG4{transform:translateY(100%);transition:transform var(--transition-duration) cubic-bezier(.87,0,.13,1)}body:not(.responsive) .JshATs{overflow-x:clip}.fcNEqv{display:grid;grid-template-columns:1fr;grid-template-rows:1fr;height:100%}.fcNEqv>div{align-self:stretch!important;justify-self:stretch!important}.u9k3ts{bottom:0;left:0;position:absolute;right:0;top:0}.WQ4fSJ{cursor:pointer}.aizuI7{-webkit-tap-highlight-color:rgba(0,0,0,0);fill:var(--fill);fill-opacity:var(--fill-opacity);stroke:var(--stroke);stroke-opacity:var(--stroke-opacity);stroke-width:var(--stroke-width);filter:var(--drop-shadow,none);opacity:var(--opacity);transform:var(--flip)}.aizuI7,.aizuI7 svg{bottom:0;left:0;position:absolute;right:0;top:0}.aizuI7 svg{height:var(--svg-calculated-height,100%);margin:auto;padding:var(--svg-calculated-padding,0);width:var(--svg-calculated-width,100%)}.TcoJIb *{vector-effect:non-scaling-stroke}.R8rhQA svg,.elfY4_ svg{overflow:visible!important}@supports(-webkit-hyphens:none){.aizuI7.elfY4_{will-change:filter}}ol.font_100,ul.font_100{color:#080808;font-family:"Arial, Helvetica, sans-serif",serif;font-size:10px;font-style:normal;font-variant:normal;font-weight:400;letter-spacing:normal;line-height:normal;margin:0;text-decoration:none}ol.font_100 li,ul.font_100 li{margin-bottom:12px}ol.wix-list-text-align,ul.wix-list-text-align{list-style-position:inside}ol.wix-list-text-align h1,ol.wix-list-text-align h2,ol.wix-list-text-align h3,ol.wix-list-text-align h4,ol.wix-list-text-align h5,ol.wix-list-text-align h6,ol.wix-list-text-align p,ul.wix-list-text-align h1,ul.wix-list-text-align h2,ul.wix-list-text-align h3,ul.wix-list-text-align h4,ul.wix-list-text-align h5,ul.wix-list-text-align h6,ul.wix-list-text-align p{display:inline}.dZ1L9N{cursor:pointer}.m0paWe{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.tz5f0K [data-attr-richtext-marker=true] table{border-collapse:collapse;margin:15px 0;width:100%}.tz5f0K [data-attr-richtext-marker=true] table td{padding:12px;position:relative}.tz5f0K [data-attr-richtext-marker=true] table td:after{border-bottom:1px solid currentColor;border-left:1px solid currentColor;bottom:0;content:"";left:0;opacity:.2;position:absolute;right:0;top:0}.tz5f0K [data-attr-richtext-marker=true] table tr td:last-child:after{border-right:1px solid currentColor}.tz5f0K [data-attr-richtext-marker=true] table tr:first-child td:after{border-top:1px solid currentColor}.Mpd2QF{min-height:var(--min-height);min-width:var(--min-width)}.Mpd2QF .RpJUy_{word-wrap:break-word;height:100%;overflow-wrap:break-word;position:relative;width:100%}.Mpd2QF .RpJUy_ ul{list-style:disc inside}.Mpd2QF .RpJUy_ li{margin-bottom:12px}.BaOVQ8 blockquote,.BaOVQ8 h1,.BaOVQ8 h2,.BaOVQ8 h3,.BaOVQ8 h4,.BaOVQ8 h5,.BaOVQ8 h6,.BaOVQ8 p{letter-spacing:normal;line-height:normal}.KriRUO{min-height:var(--min-height);min-width:var(--min-width)}.KriRUO .RpJUy_{word-wrap:break-word;height:100%;overflow-wrap:break-word;position:relative;width:100%}.KriRUO .RpJUy_ ol,.KriRUO .RpJUy_ ul{letter-spacing:normal;line-height:normal;margin-left:.5em;padding-left:1.3em}.KriRUO .RpJUy_ ol[dir=rtl],.KriRUO .RpJUy_ ul[dir=rtl]{margin-right:.5em;padding-right:1.3em}.KriRUO .RpJUy_ ul{list-style-type:disc}.KriRUO .RpJUy_ ol{list-style-type:decimal}.KriRUO .RpJUy_ ol[dir=rtl],.KriRUO .RpJUy_ ul[dir=rtl]{margin-right:.5em;padding-right:1.3em}.KriRUO .RpJUy_ ol ul,.KriRUO .RpJUy_ ul ul{line-height:normal;list-style-type:circle}.KriRUO .RpJUy_ ol ol ul,.KriRUO .RpJUy_ ol ul ul,.KriRUO .RpJUy_ ul ol ul,.KriRUO .RpJUy_ ul ul ul{line-height:normal;list-style-type:square}.KriRUO .RpJUy_ li{font-style:inherit;font-weight:inherit;letter-spacing:normal;line-height:inherit}.KriRUO .RpJUy_ h1,.KriRUO .RpJUy_ h2,.KriRUO .RpJUy_ h3,.KriRUO .RpJUy_ h4,.KriRUO .RpJUy_ h5,.KriRUO .RpJUy_ h6,.KriRUO .RpJUy_ p{letter-spacing:normal;line-height:normal;margin:0}.KriRUO .RpJUy_ a{color:inherit}.BaOVQ8,.KcpHeO{word-wrap:break-word;min-height:var(--min-height);min-width:var(--min-width);overflow-wrap:break-word;pointer-events:none;text-align:start}.BaOVQ8>*,.KcpHeO>*{pointer-events:auto}.BaOVQ8 li,.KcpHeO li{font-style:inherit;font-weight:inherit;letter-spacing:normal;line-height:inherit}.BaOVQ8 ol,.BaOVQ8 ul,.KcpHeO ol,.KcpHeO ul{letter-spacing:normal;line-height:normal;margin-left:.5em;margin-right:0;padding-left:1.3em;padding-right:0}.BaOVQ8 ul,.KcpHeO ul{list-style-type:disc}.BaOVQ8 ol,.KcpHeO ol{list-style-type:decimal}.BaOVQ8 ol ul,.BaOVQ8 ul ul,.KcpHeO ol ul,.KcpHeO ul ul{list-style-type:circle}.BaOVQ8 ol ol ul,.BaOVQ8 ol ul ul,.BaOVQ8 ul ol ul,.BaOVQ8 ul ul ul,.KcpHeO ol ol ul,.KcpHeO ol ul ul,.KcpHeO ul ol ul,.KcpHeO ul ul ul{list-style-type:square}.BaOVQ8 ol[dir=rtl],.BaOVQ8 ol[dir=rtl] ol,.BaOVQ8 ol[dir=rtl] ul,.BaOVQ8 ul[dir=rtl],.BaOVQ8 ul[dir=rtl] ol,.BaOVQ8 ul[dir=rtl] ul,.KcpHeO ol[dir=rtl],.KcpHeO ol[dir=rtl] ol,.KcpHeO ol[dir=rtl] ul,.KcpHeO ul[dir=rtl],.KcpHeO ul[dir=rtl] ol,.KcpHeO ul[dir=rtl] ul{margin-left:0;margin-right:.5em;padding-left:0;padding-right:1.3em}.BaOVQ8 blockquote,.BaOVQ8 h1,.BaOVQ8 h2,.BaOVQ8 h3,.BaOVQ8 h4,.BaOVQ8 h5,.BaOVQ8 h6,.BaOVQ8 p,.KcpHeO blockquote,.KcpHeO h1,.KcpHeO h2,.KcpHeO h3,.KcpHeO h4,.KcpHeO h5,.KcpHeO h6,.KcpHeO p{margin:0}.BaOVQ8 a,.KcpHeO a{color:inherit}.big2ZD{display:grid;grid-template-columns:1fr;grid-template-rows:1fr;height:calc(100% - var(--wix-ads-height));left:0;margin-top:var(--wix-ads-height);position:fixed;top:0;width:100%}.SHHiV9,.big2ZD{pointer-events:none;z-index:var(--pinned-layer-in-container,var(--above-all-in-container))}</style>
    <style>.LHrbPP{background:#fff;border-radius:24px;color:#116dff;cursor:pointer;font-family:Helvetica,Arial,メイリオ,meiryo,ヒラギノ角ゴ pro w3,hiragino kaku gothic pro,sans-serif;font-size:14px;height:0;left:50%;margin-left:-94px;opacity:0;padding:0 24px 0 24px;pointer-events:none;position:absolute;top:60px;width:0;z-index:9999}.LHrbPP:focus{border:2px solid;height:40px;opacity:1;pointer-events:auto;width:auto}</style>
    <style>@supports(-webkit-touch-callout:none){._xg6_p{-webkit-overflow-scrolling:touch;overflow:scroll}}.SMuTIa{height:100%;width:100%}.wuksD5{position:absolute}</style>
    <style>.aVng1S{border-top:var(--lnw,2px) solid rgba(var(--brd,var(--color_15)),var(--alpha-brd,1));box-sizing:border-box;height:0}</style>
    <style>.R7lArd{overflow-x:hidden}.R7lArd .l9EQj1{display:flex;flex-direction:column;height:100%;width:100%}.R7lArd .l9EQj1 .WNM2rt{flex:1}.R7lArd .l9EQj1 .DN7syf{height:calc(100% - (var(--menuTotalBordersY, 0px)));overflow:visible;white-space:nowrap;width:calc(100% - (var(--menuTotalBordersX, 0px)))}.R7lArd .l9EQj1 .DN7syf .rqt3qI{display:inline-block}.R7lArd .l9EQj1 .DN7syf .d4jfwp{display:block;width:100%}.R7lArd .JdScD2{display:block;opacity:1;z-index:99999}.R7lArd .JdScD2 .k8K0Wj{display:inherit;overflow:visible;visibility:inherit;white-space:nowrap;width:auto}.R7lArd .JdScD2._3URS4{transition:visibility;transition-delay:.2s;visibility:visible}.R7lArd .JdScD2 .iryznZ{display:inline-block}.R7lArd .BKX7vq{display:none}.BSjLjI>nav{bottom:0;left:0;right:0;top:0}.BSjLjI .DN7syf,.BSjLjI .JdScD2,.BSjLjI>nav{position:absolute}.BSjLjI .JdScD2{margin-top:7px;visibility:hidden}.BSjLjI .JdScD2[data-dropMode=dropUp]{margin-bottom:7px;margin-top:0}.BSjLjI .k8K0Wj{background-color:rgba(var(--bgDrop,var(--color_11)),var(--alpha-bgDrop,1));border-radius:var(--rd,0);box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6))}.RfkZFw,.vDnwi4{box-sizing:border-box;height:100%;overflow:visible;position:relative;width:auto}.RfkZFw[data-state~=header] a,.RfkZFw[data-state~=header] div,[data-state~=header].vDnwi4 a,[data-state~=header].vDnwi4 div{cursor:default!important}.RfkZFw .lY3Nwh,.vDnwi4 .lY3Nwh{display:inline-block;height:100%;width:100%}.vDnwi4{--display:inline-block;cursor:pointer;display:var(--display);font:var(--fnt,var(--font_1))}.vDnwi4 .rBTT56{padding:0 var(--pad,5px)}.vDnwi4 .foFAdY{color:rgb(var(--txt,var(--color_15)));display:inline-block;padding:0 10px;transition:var(--trans,color .4s ease 0s)}.vDnwi4[data-state~=drop]{display:block;width:100%}.vDnwi4[data-state~=drop] .foFAdY{padding:0 .5em}.vDnwi4[data-state~=link]:hover .foFAdY,.vDnwi4[data-state~=over] .foFAdY{color:rgb(var(--txth,var(--color_14)));transition:var(--trans,color .4s ease 0s)}.vDnwi4[data-state~=selected] .foFAdY{color:rgb(var(--txts,var(--color_14)));transition:var(--trans,color .4s ease 0s)}.P0dCOY .PJ4KCX{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1));bottom:0;left:0;overflow:hidden;position:absolute;right:0;top:0}</style>
    <style>.TFOeq0{align-items:center;box-sizing:border-box;display:flex;justify-content:var(--label-align);min-width:100%;text-align:initial;width:-moz-max-content;width:max-content}.TFOeq0:before{max-width:var(--margin-left,0)}.TFOeq0:after,.TFOeq0:before{align-self:stretch;content:"";flex-grow:1}.TFOeq0:after{max-width:var(--margin-right,0)}.gydiew{--display:grid;display:var(--display);grid-template-columns:minmax(0,1fr)}.gydiew .TFOeq0{border-radius:var(--corvid-border-radius,var(--rd,0));box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6));padding-bottom:var(--verticalPadding,0);padding-left:var(--horizontalPadding,0);padding-right:var(--horizontalPadding,0);padding-top:var(--verticalPadding,0);position:relative;transition:var(--trans1,border-color .4s ease 0s,background-color .4s ease 0s);width:auto}.gydiew .TFOeq0:before{flex-shrink:0;width:var(--margin-left,0)}.gydiew .TFOeq0:after{flex-shrink:0;width:var(--margin-right,0)}.gydiew .kclxHl{color:var(--corvid-color,rgb(var(--txt,var(--color_15))));font:var(--fnt,var(--font_5));position:relative;transition:var(--trans2,color .4s ease 0s)}.gydiew[aria-disabled=false] .TFOeq0{background-color:var(--corvid-background-color,rgba(var(--bg,var(--color_17)),var(--alpha-bg,1)));border:solid var(--corvid-border-color,rgba(var(--brd,var(--color_15)),var(--alpha-brd,1))) var(--corvid-border-width,var(--brw,0));cursor:pointer!important}:host(.device-mobile-optimized) .gydiew[aria-disabled=false]:active .TFOeq0,body.device-mobile-optimized .gydiew[aria-disabled=false]:active .TFOeq0{background-color:rgba(var(--bgh,var(--color_18)),var(--alpha-bgh,1));border-color:rgba(var(--brdh,var(--color_15)),var(--alpha-brdh,1))}:host(.device-mobile-optimized) .gydiew[aria-disabled=false]:active .kclxHl,body.device-mobile-optimized .gydiew[aria-disabled=false]:active .kclxHl{color:rgb(var(--txth,var(--color_15)))}:host(:not(.device-mobile-optimized)) .gydiew[aria-disabled=false]:hover .TFOeq0,body:not(.device-mobile-optimized) .gydiew[aria-disabled=false]:hover .TFOeq0{background-color:rgba(var(--bgh,var(--color_18)),var(--alpha-bgh,1));border-color:rgba(var(--brdh,var(--color_15)),var(--alpha-brdh,1))}:host(:not(.device-mobile-optimized)) .gydiew[aria-disabled=false]:hover .kclxHl,body:not(.device-mobile-optimized) .gydiew[aria-disabled=false]:hover .kclxHl{color:rgb(var(--txth,var(--color_15)))}.gydiew[aria-disabled=true] .TFOeq0{background-color:rgba(var(--bgd,204,204,204),var(--alpha-bgd,1));border-color:rgba(var(--brdd,204,204,204),var(--alpha-brdd,1))}.gydiew[aria-disabled=true] .kclxHl{color:rgb(var(--txtd,255,255,255))}.gydiew .kclxHl{text-align:var(--label-text-align)}</style>
    <style>.S6Dcte{pointer-events:var(--ref-container-pointer-events)!important}.S6Dcte>*{pointer-events:auto}</style>
    <style>.O7Ybkb,.xuzjBY{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1))}.V7OeEw{transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.V7OeEw.BHIo43{transform:var(--scrolled-transform)}.V7OeEw.UvF1nu{opacity:var(--scrolled-opacity)}.V7OeEw.YzrQFb{transition-delay:0s}.KJgt14{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1));transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.VTwcX7.KJgt14{background-color:rgba(var(--bg-scrl,var(--color_11)),var(--alpha-bg-scrl,1))}.HlRz5e{display:block;height:100%;width:100%}.HlRz5e img{max-width:var(--wix-img-max-width,100%)}.HlRz5e[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.HlRz5e[data-animate-blur] img[data-load-done]{filter:none}.I5zqsT{display:block}.I5zqsT,.MW5IWV{height:100%;width:100%}.MW5IWV{left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0}.MW5IWV.N3eg0s{clip:rect(0,auto,auto,0)}.MW5IWV .Kv1aVt{height:100%;position:absolute;top:0;width:100%}.MW5IWV .dLPlxY{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.MW5IWV .dLPlxY img{height:100%;width:100%}@supports(-webkit-hyphens:none){.MW5IWV.N3eg0s{clip:auto;-webkit-clip-path:inset(0)}}.VgO9Yg{height:100%}.LWbAav{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient)}.K_YxMd,.yK6aSC{opacity:var(--fill-layer-video-opacity)}.NGjcJN{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.mNGsUM{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.K_YxMd{height:100%;position:relative;width:100%}.bX9O_S{-webkit-clip-path:var(--fill-layer-clip);clip-path:var(--fill-layer-clip)}.Z_wCwr,.bX9O_S{position:absolute;top:0}.Jxk_UL img,.Z_wCwr,.bX9O_S{height:100%;width:100%}.K8MSra{opacity:0}.K8MSra,.YTb3b4{position:absolute;top:0}.YTb3b4{height:0;left:0;overflow:hidden;width:0}.SUz0WK{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.FNxOn5,.SUz0WK,.m4khSP{height:100%;top:0;width:100%}.FNxOn5{position:absolute}.m4khSP{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.m4khSP{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}.dkukWC{--divider-pin-height__:min(1,calc(var(--divider-layers-pin-factor__) + 1));--divider-pin-layer-height__:var(--divider-layers-pin-factor__);--divider-pin-border__:min(1,calc(var(--divider-layers-pin-factor__) / -1 + 1));height:calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))}.dkukWC,.dkukWC .FRCqDF{left:0;position:absolute;width:100%}.dkukWC .FRCqDF{--divider-layer-i__:var(--divider-layer-i,0);background-position:left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;background-repeat:repeat-x;border-bottom-style:solid;border-bottom-width:calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));height:calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));opacity:calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))}.xnZvZH{--divider-height__:var(--divider-top-height,auto);--divider-offset-x__:var(--divider-top-offset-x,0px);--divider-layers-size__:var(--divider-top-layers-size,0);--divider-layers-y__:var(--divider-top-layers-y,0px);--divider-layers-x__:var(--divider-top-layers-x,0px);--divider-layers-pin-factor__:var(--divider-top-layers-pin-factor,0);border-top:var(--divider-top-padding,0) solid var(--divider-top-color,currentColor);opacity:var(--divider-top-opacity,1);top:0;transform:var(--divider-top-flip,scaleY(-1))}.xnZvZH .FRCqDF{background-image:var(--divider-top-image,none);background-size:var(--divider-top-size,contain);border-color:var(--divider-top-color,currentColor);bottom:0}.MBOSCN{--divider-height__:var(--divider-bottom-height,auto);--divider-offset-x__:var(--divider-bottom-offset-x,0px);--divider-layers-size__:var(--divider-bottom-layers-size,0);--divider-layers-y__:var(--divider-bottom-layers-y,0px);--divider-layers-x__:var(--divider-bottom-layers-x,0px);--divider-layers-pin-factor__:var(--divider-bottom-layers-pin-factor,0);border-bottom:var(--divider-bottom-padding,0) solid var(--divider-bottom-color,currentColor);bottom:0;opacity:var(--divider-bottom-opacity,1);transform:var(--divider-bottom-flip,none)}.MBOSCN .FRCqDF{background-image:var(--divider-bottom-image,none);background-size:var(--divider-bottom-size,contain);border-color:var(--divider-bottom-color,currentColor);bottom:0}</style>
    <style>.O7Ybkb,.xuzjBY{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1))}.V7OeEw{transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.V7OeEw.BHIo43{transform:var(--scrolled-transform)}.V7OeEw.UvF1nu{opacity:var(--scrolled-opacity)}.V7OeEw.YzrQFb{transition-delay:0s}.KJgt14{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1));transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.VTwcX7.KJgt14{background-color:rgba(var(--bg-scrl,var(--color_11)),var(--alpha-bg-scrl,1))}.HlRz5e{display:block;height:100%;width:100%}.HlRz5e img{max-width:var(--wix-img-max-width,100%)}.HlRz5e[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.HlRz5e[data-animate-blur] img[data-load-done]{filter:none}.I5zqsT{display:block}.I5zqsT,.MW5IWV{height:100%;width:100%}.MW5IWV{left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0}.MW5IWV.N3eg0s{clip:rect(0,auto,auto,0)}.MW5IWV .Kv1aVt{height:100%;position:absolute;top:0;width:100%}.MW5IWV .dLPlxY{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.MW5IWV .dLPlxY img{height:100%;width:100%}@supports(-webkit-hyphens:none){.MW5IWV.N3eg0s{clip:auto;-webkit-clip-path:inset(0)}}.VgO9Yg{height:100%}.LWbAav{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient)}.K_YxMd,.yK6aSC{opacity:var(--fill-layer-video-opacity)}.NGjcJN{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.mNGsUM{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.K_YxMd{height:100%;position:relative;width:100%}.bX9O_S{-webkit-clip-path:var(--fill-layer-clip);clip-path:var(--fill-layer-clip)}.Z_wCwr,.bX9O_S{position:absolute;top:0}.Jxk_UL img,.Z_wCwr,.bX9O_S{height:100%;width:100%}.K8MSra{opacity:0}.K8MSra,.YTb3b4{position:absolute;top:0}.YTb3b4{height:0;left:0;overflow:hidden;width:0}.SUz0WK{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.FNxOn5,.SUz0WK,.m4khSP{height:100%;top:0;width:100%}.FNxOn5{position:absolute}.m4khSP{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.m4khSP{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}.dkukWC{--divider-pin-height__:min(1,calc(var(--divider-layers-pin-factor__) + 1));--divider-pin-layer-height__:var(--divider-layers-pin-factor__);--divider-pin-border__:min(1,calc(var(--divider-layers-pin-factor__) / -1 + 1));height:calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))}.dkukWC,.dkukWC .FRCqDF{left:0;position:absolute;width:100%}.dkukWC .FRCqDF{--divider-layer-i__:var(--divider-layer-i,0);background-position:left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;background-repeat:repeat-x;border-bottom-style:solid;border-bottom-width:calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));height:calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));opacity:calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))}.xnZvZH{--divider-height__:var(--divider-top-height,auto);--divider-offset-x__:var(--divider-top-offset-x,0px);--divider-layers-size__:var(--divider-top-layers-size,0);--divider-layers-y__:var(--divider-top-layers-y,0px);--divider-layers-x__:var(--divider-top-layers-x,0px);--divider-layers-pin-factor__:var(--divider-top-layers-pin-factor,0);border-top:var(--divider-top-padding,0) solid var(--divider-top-color,currentColor);opacity:var(--divider-top-opacity,1);top:0;transform:var(--divider-top-flip,scaleY(-1))}.xnZvZH .FRCqDF{background-image:var(--divider-top-image,none);background-size:var(--divider-top-size,contain);border-color:var(--divider-top-color,currentColor);bottom:0}.MBOSCN{--divider-height__:var(--divider-bottom-height,auto);--divider-offset-x__:var(--divider-bottom-offset-x,0px);--divider-layers-size__:var(--divider-bottom-layers-size,0);--divider-layers-y__:var(--divider-bottom-layers-y,0px);--divider-layers-x__:var(--divider-bottom-layers-x,0px);--divider-layers-pin-factor__:var(--divider-bottom-layers-pin-factor,0);border-bottom:var(--divider-bottom-padding,0) solid var(--divider-bottom-color,currentColor);bottom:0;opacity:var(--divider-bottom-opacity,1);transform:var(--divider-bottom-flip,none)}.MBOSCN .FRCqDF{background-image:var(--divider-bottom-image,none);background-size:var(--divider-bottom-size,contain);border-color:var(--divider-bottom-color,currentColor);bottom:0}</style>
    <style>.KLO7MJ{-webkit-tap-highlight-color:rgba(0,0,0,0);opacity:0;visibility:hidden}.KLO7MJ.a6BVa5{opacity:1;visibility:visible}.KLO7MJ[data-undisplayed=true]{display:none}.KLO7MJ:not([data-is-mesh]) .qNR7mP,.KLO7MJ:not([data-is-mesh]) .vyb81L{bottom:0;left:0;position:absolute;right:0;top:0}.oOL4sX{background-color:rgba(var(--bg,var(--color_15)),var(--alpha-bg,1));display:initial;height:100%;left:0;opacity:0;position:fixed;top:0;width:100%}.oOL4sX.AESkWR{display:none}:host(.device-mobile-optimized) .oOL4sX,body.device-mobile-optimized .oOL4sX{height:100vh;left:calc((100% - var(--screen-width))/2);width:var(--screen-width)}:host(.device-mobile-optimized) .KLO7MJ.AESkWR,body.device-mobile-optimized .KLO7MJ.AESkWR{left:calc((100% - var(--screen-width))/2)}:host(.device-mobile-optimized) .KLO7MJ.I2F1wm,body.device-mobile-optimized .KLO7MJ.I2F1wm{height:100vh}:host(:not(.device-mobile-optimized)) .KLO7MJ.I2F1wm,body:not(.device-mobile-optimized) .KLO7MJ.I2F1wm{height:100vh}.asChkN.I2F1wm,.asChkN.I2F1wm>:first-child{height:calc(var(--menu-height) - var(--wix-ads-height))}.asChkN.I2F1wm>:first-child{margin-top:var(--wix-ads-height)}.KLO7MJ.I2F1wm{top:0}.KLO7MJ.nIzsA4{z-index:calc(var(--above-all-z-index) - 1)}.HKnX4d{-webkit-tap-highlight-color:rgba(0,0,0,0);opacity:0;visibility:hidden}.HKnX4d.URR62M{opacity:1;visibility:visible}.HKnX4d[data-undisplayed=true]{display:none}.HKnX4d:not([data-is-mesh]) .BDZcgu,.HKnX4d:not([data-is-mesh]) .UjpP2K{bottom:0;left:0;position:absolute;right:0;top:0}.SaGcIp{background-color:rgba(var(--bg,var(--color_15)),var(--alpha-bg,1));display:initial;height:100%;left:0;opacity:0;position:fixed;top:0;width:100%}.SaGcIp.naw_Hj{display:none}:host(.device-mobile-optimized) .SaGcIp,body.device-mobile-optimized .SaGcIp{height:100vh;left:calc((100% - var(--screen-width))/2);width:var(--screen-width)}:host(.device-mobile-optimized) .HKnX4d.naw_Hj,body.device-mobile-optimized .HKnX4d.naw_Hj{left:calc((100% - var(--screen-width))/2)}:host(.device-mobile-optimized) .HKnX4d.Bh1f0N,body.device-mobile-optimized .HKnX4d.Bh1f0N{height:100vh}:host(:not(.device-mobile-optimized)) .HKnX4d.Bh1f0N,body:not(.device-mobile-optimized) .HKnX4d.Bh1f0N{height:100vh}.RcfHS8.Bh1f0N,.RcfHS8.Bh1f0N>:first-child{height:calc(var(--menu-height) - var(--wix-ads-height))}.RcfHS8.Bh1f0N>:first-child{margin-top:var(--wix-ads-height)}.HKnX4d.Bh1f0N{top:0}.AVLx_K{background-color:rgba(var(--containerBackground,var(--color_11)),var(--alpha-containerBackground,1));bottom:0;left:0;position:absolute;right:0;top:0}.RcfHS8{height:100%}</style>
    <style>.O7Ybkb,.xuzjBY{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1))}.V7OeEw{transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.V7OeEw.BHIo43{transform:var(--scrolled-transform)}.V7OeEw.UvF1nu{opacity:var(--scrolled-opacity)}.V7OeEw.YzrQFb{transition-delay:0s}.KJgt14{background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1));transition-delay:var(--transition-delay);transition-duration:var(--transition-duration);transition-property:var(--transition-property);transition-timing-function:var(--transition-timing-function)}.VTwcX7.KJgt14{background-color:rgba(var(--bg-scrl,var(--color_11)),var(--alpha-bg-scrl,1))}.HlRz5e{display:block;height:100%;width:100%}.HlRz5e img{max-width:var(--wix-img-max-width,100%)}.HlRz5e[data-animate-blur] img{filter:blur(9px);transition:filter .8s ease-in}.HlRz5e[data-animate-blur] img[data-load-done]{filter:none}.I5zqsT{display:block}.I5zqsT,.MW5IWV{height:100%;width:100%}.MW5IWV{left:0;-webkit-mask-image:var(--mask-image,none);mask-image:var(--mask-image,none);-webkit-mask-position:var(--mask-position,0);mask-position:var(--mask-position,0);-webkit-mask-repeat:var(--mask-repeat,no-repeat);mask-repeat:var(--mask-repeat,no-repeat);-webkit-mask-size:var(--mask-size,100%);mask-size:var(--mask-size,100%);overflow:hidden;pointer-events:var(--fill-layer-background-media-pointer-events);position:absolute;top:0}.MW5IWV.N3eg0s{clip:rect(0,auto,auto,0)}.MW5IWV .Kv1aVt{height:100%;position:absolute;top:0;width:100%}.MW5IWV .dLPlxY{height:var(--fill-layer-image-height,100%);opacity:var(--fill-layer-image-opacity)}.MW5IWV .dLPlxY img{height:100%;width:100%}@supports(-webkit-hyphens:none){.MW5IWV.N3eg0s{clip:auto;-webkit-clip-path:inset(0)}}.VgO9Yg{height:100%}.LWbAav{background-color:var(--bg-overlay-color);background-image:var(--bg-gradient)}.K_YxMd,.yK6aSC{opacity:var(--fill-layer-video-opacity)}.NGjcJN{bottom:var(--media-padding-bottom);height:var(--media-padding-height);position:absolute;top:var(--media-padding-top);width:100%}.mNGsUM{transform:scale(var(--scale,1));transition:var(--transform-duration,transform 0s)}.K_YxMd{height:100%;position:relative;width:100%}.bX9O_S{-webkit-clip-path:var(--fill-layer-clip);clip-path:var(--fill-layer-clip)}.Z_wCwr,.bX9O_S{position:absolute;top:0}.Jxk_UL img,.Z_wCwr,.bX9O_S{height:100%;width:100%}.K8MSra{opacity:0}.K8MSra,.YTb3b4{position:absolute;top:0}.YTb3b4{height:0;left:0;overflow:hidden;width:0}.SUz0WK{left:0;pointer-events:var(--fill-layer-background-media-pointer-events);position:var(--fill-layer-background-media-position)}.FNxOn5,.SUz0WK,.m4khSP{height:100%;top:0;width:100%}.FNxOn5{position:absolute}.m4khSP{background-color:var(--fill-layer-background-overlay-color);opacity:var(--fill-layer-background-overlay-blend-opacity-fallback,1);position:var(--fill-layer-background-overlay-position);transform:var(--fill-layer-background-overlay-transform)}@supports(mix-blend-mode:overlay){.m4khSP{mix-blend-mode:var(--fill-layer-background-overlay-blend-mode);opacity:var(--fill-layer-background-overlay-blend-opacity,1)}}.dkukWC{--divider-pin-height__:min(1,calc(var(--divider-layers-pin-factor__) + 1));--divider-pin-layer-height__:var(--divider-layers-pin-factor__);--divider-pin-border__:min(1,calc(var(--divider-layers-pin-factor__) / -1 + 1));height:calc(var(--divider-height__) + var(--divider-pin-height__)*var(--divider-layers-size__)*var(--divider-layers-y__))}.dkukWC,.dkukWC .FRCqDF{left:0;position:absolute;width:100%}.dkukWC .FRCqDF{--divider-layer-i__:var(--divider-layer-i,0);background-position:left calc(50% + var(--divider-offset-x__) + var(--divider-layers-x__)*var(--divider-layer-i__)) bottom;background-repeat:repeat-x;border-bottom-style:solid;border-bottom-width:calc(var(--divider-pin-border__)*var(--divider-layer-i__)*var(--divider-layers-y__));height:calc(var(--divider-height__) + var(--divider-pin-layer-height__)*var(--divider-layer-i__)*var(--divider-layers-y__));opacity:calc(1 - var(--divider-layer-i__)/(var(--divider-layer-i__) + 1))}.xnZvZH{--divider-height__:var(--divider-top-height,auto);--divider-offset-x__:var(--divider-top-offset-x,0px);--divider-layers-size__:var(--divider-top-layers-size,0);--divider-layers-y__:var(--divider-top-layers-y,0px);--divider-layers-x__:var(--divider-top-layers-x,0px);--divider-layers-pin-factor__:var(--divider-top-layers-pin-factor,0);border-top:var(--divider-top-padding,0) solid var(--divider-top-color,currentColor);opacity:var(--divider-top-opacity,1);top:0;transform:var(--divider-top-flip,scaleY(-1))}.xnZvZH .FRCqDF{background-image:var(--divider-top-image,none);background-size:var(--divider-top-size,contain);border-color:var(--divider-top-color,currentColor);bottom:0}.MBOSCN{--divider-height__:var(--divider-bottom-height,auto);--divider-offset-x__:var(--divider-bottom-offset-x,0px);--divider-layers-size__:var(--divider-bottom-layers-size,0);--divider-layers-y__:var(--divider-bottom-layers-y,0px);--divider-layers-x__:var(--divider-bottom-layers-x,0px);--divider-layers-pin-factor__:var(--divider-bottom-layers-pin-factor,0);border-bottom:var(--divider-bottom-padding,0) solid var(--divider-bottom-color,currentColor);bottom:0;opacity:var(--divider-bottom-opacity,1);transform:var(--divider-bottom-flip,none)}.MBOSCN .FRCqDF{background-image:var(--divider-bottom-image,none);background-size:var(--divider-bottom-size,contain);border-color:var(--divider-bottom-color,currentColor);bottom:0}</style>
    <style>.Z5xE6X{--container-corvid-border-color:rgba(var(--brd,var(--color_15)),var(--alpha-brd,1));--container-corvid-border-size:var(--brw,1px);--container-corvid-background-color:rgba(var(--bg,var(--color_11)),var(--alpha-bg,1))}.OSxohk{background-color:var(--container-corvid-background-color,rgba(var(--bg,var(--color_11)),var(--alpha-bg,1)));border:var(--container-corvid-border-width,var(--brw,1px)) solid var(--container-corvid-border-color,rgba(var(--brd,var(--color_15)),var(--alpha-brd,1)));border-radius:var(--rd,5px);bottom:0;box-shadow:var(--shd,0 1px 4px rgba(0,0,0,.6));left:0;position:absolute;right:0;top:0}.nDEeB0{cursor:pointer}</style>
    <style>.c1rIl3{display:contents}</style>
    <style>._2PSyL{height:auto!important}</style>
    <title>Find Your Location | ISI Elite Training</title>
    <meta name="description" content="Find your location! – Download our app and book your first workout today!"/>
    <link rel="canonical" href="locations.html"/>
    <meta property="og:title" content="Find Your Location | ISI Elite Training"/>
    <meta property="og:description" content="Find your location! – Download our app and book your first workout today!"/>
    <meta property="og:image" content="https://static.wixstatic.com/media/d56505_ada646ae514a4b05a796958efba464ee%7Emv2.jpg/v1/fit/w_2500,h_1330,al_c/d56505_ada646ae514a4b05a796958efba464ee%7Emv2.jpg"/>
    <meta property="og:image:width" content="2500"/>
    <meta property="og:image:height" content="1330"/>
    <meta property="og:url" content="https://www.isielitetraining.com/locations"/>
    <meta property="og:site_name" content="ISI Elite Training"/>
    <meta property="og:type" content="website"/>
    <meta name="fb_admins_meta_tag" content="ISIeliteHQ"/>
    <meta name="google-site-verification" content="BK8boYN6YUZ2R5wIU_3ivreriDlj8CKaOcSEfcWgfCk"/>
    <meta property="fb:admins" content="ISIeliteHQ"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Find Your Location | ISI Elite Training"/>
    <meta name="twitter:description" content="Find your location! – Download our app and book your first workout today!"/>
    <meta name="twitter:image" content="https://static.wixstatic.com/media/d56505_ada646ae514a4b05a796958efba464ee%7Emv2.jpg/v1/fit/w_2500,h_1330,al_c/d56505_ada646ae514a4b05a796958efba464ee%7Emv2.jpg"/>

</head>
<body class='responsive' >
<?php echo get_field('body_start', 'option'); ?>


<pages-css id="pages-css"><style id="css_masterPage">
        :root{--color_0:255,255,255;--color_27:171,184,153;--color_1:255,255,255;--color_2:0,0,0;--color_3:237,28,36;--color_4:0,136,203;--color_5:255,203,5;--color_6:114,114,114;--color_7:176,176,176;--color_8:255,255,255;--color_28:127,148,99;--color_9:114,114,114;--color_10:176,176,176;--color_11:255,255,255;--color_12:232,230,230;--color_13:199,199,199;--color_14:117,117,117;--color_15:24,24,24;--color_16:238,187,170;--color_17:222,150,127;--color_18:205,73,29;--color_29:85,99,66;--color_19:137,49,19;--color_20:68,24,10;--color_21:242,222,204;--color_22:194,178,163;--color_23:145,133,122;--color_24:97,89,82;--color_25:48,44,41;--color_30:42,49,33;--color_31:199,211,213;--color_32:154,169,172;--color_33:103,126,130;--color_34:69,84,87;--color_35:34,42,43;--font_0:normal normal normal 35px/1.4em wfont_d56505_9aaf2248f85f4cc3942094a054624529,wf_9aaf2248f85f4cc3942094a05,orig_sf_pro_display_bold;--font_1:normal normal normal 16px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;--font_2:normal normal normal 60px/1.4em 'arial black',arial-w01-black,arial-w02-black,'arial-w10 black',sans-serif;--font_3:normal normal normal 50px/1.4em caudex,serif;--font_4:normal normal normal 40px/1.4em caudex,serif;--font_5:normal normal bold 30px/1.4em caudex,serif;--font_6:normal normal normal 22px/1.4em caudex,serif;--font_7:normal normal normal 16px/1.4em wfont_76d905_a35e98b29c354da09e5772a81dd259d8,wf_a35e98b29c354da09e5772a81,orig_scania_sans_cy_headline_regular;--font_8:normal normal normal 14px/1.4em wfont_d56505_09b416d242e1435ab0553723d3c2a92e,wf_09b416d242e1435ab0553723d,orig_scania_sans_cy_condensed_regular;--font_9:normal normal normal 16px/1.4em wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;--font_10:normal normal normal 12px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;--wix-ads-height:0px;--wix-ads-top-height:0px;--site-width:980px;--above-all-z-index:100000;--portals-z-index:100001;--minViewportSize:320;--color_26:209,219,195;--maxViewportSize:1920}.font_0{font:var(--font_0);color:rgb(var(--color_15));letter-spacing:0em}.font_1{font:var(--font_1);color:rgb(var(--color_14));letter-spacing:0em}.font_2{font:var(--font_2);color:rgb(var(--color_15));letter-spacing:0em}.font_3{font:var(--font_3);color:rgb(var(--color_15));letter-spacing:0em}.font_4{font:var(--font_4);color:rgb(var(--color_15));letter-spacing:0em}.font_5{font:var(--font_5);color:rgb(var(--color_15));letter-spacing:0em}.font_6{font:var(--font_6);color:rgb(var(--color_15));letter-spacing:0em}.font_7{font:var(--font_7);color:rgb(var(--color_15));letter-spacing:0em}.font_8{font:var(--font_8);color:rgb(var(--color_15));letter-spacing:0em}.font_9{font:var(--font_9);color:rgb(var(--color_15));letter-spacing:0em}.font_10{font:var(--font_10);color:rgb(var(--color_14));letter-spacing:0em}.color_0{color:rgb(var(--color_0))}.color_1{color:rgb(var(--color_1))}.color_2{color:rgb(var(--color_2))}.color_3{color:rgb(var(--color_3))}.color_4{color:rgb(var(--color_4))}.color_5{color:rgb(var(--color_5))}.color_6{color:rgb(var(--color_6))}.color_7{color:rgb(var(--color_7))}.color_8{color:rgb(var(--color_8))}.color_9{color:rgb(var(--color_9))}.color_10{color:rgb(var(--color_10))}.color_11{color:rgb(var(--color_11))}.color_12{color:rgb(var(--color_12))}.color_13{color:rgb(var(--color_13))}.color_14{color:rgb(var(--color_14))}.color_15{color:rgb(var(--color_15))}.color_16{color:rgb(var(--color_16))}.color_17{color:rgb(var(--color_17))}.color_18{color:rgb(var(--color_18))}.color_19{color:rgb(var(--color_19))}.color_20{color:rgb(var(--color_20))}.color_21{color:rgb(var(--color_21))}.color_22{color:rgb(var(--color_22))}.color_23{color:rgb(var(--color_23))}.color_24{color:rgb(var(--color_24))}.color_25{color:rgb(var(--color_25))}.color_26{color:rgb(var(--color_26))}.color_27{color:rgb(var(--color_27))}.color_28{color:rgb(var(--color_28))}.color_29{color:rgb(var(--color_29))}.color_30{color:rgb(var(--color_30))}.color_31{color:rgb(var(--color_31))}.color_32{color:rgb(var(--color_32))}.color_33{color:rgb(var(--color_33))}.color_34{color:rgb(var(--color_34))}.color_35{color:rgb(var(--color_35))}.backcolor_0{background-color:rgb(var(--color_0))}.backcolor_1{background-color:rgb(var(--color_1))}.backcolor_2{background-color:rgb(var(--color_2))}.backcolor_3{background-color:rgb(var(--color_3))}.backcolor_4{background-color:rgb(var(--color_4))}.backcolor_5{background-color:rgb(var(--color_5))}.backcolor_6{background-color:rgb(var(--color_6))}.backcolor_7{background-color:rgb(var(--color_7))}.backcolor_8{background-color:rgb(var(--color_8))}.backcolor_9{background-color:rgb(var(--color_9))}.backcolor_10{background-color:rgb(var(--color_10))}.backcolor_11{background-color:rgb(var(--color_11))}.backcolor_12{background-color:rgb(var(--color_12))}.backcolor_13{background-color:rgb(var(--color_13))}.backcolor_14{background-color:rgb(var(--color_14))}.backcolor_15{background-color:rgb(var(--color_15))}.backcolor_16{background-color:rgb(var(--color_16))}.backcolor_17{background-color:rgb(var(--color_17))}.backcolor_18{background-color:rgb(var(--color_18))}.backcolor_19{background-color:rgb(var(--color_19))}.backcolor_20{background-color:rgb(var(--color_20))}.backcolor_21{background-color:rgb(var(--color_21))}.backcolor_22{background-color:rgb(var(--color_22))}.backcolor_23{background-color:rgb(var(--color_23))}.backcolor_24{background-color:rgb(var(--color_24))}.backcolor_25{background-color:rgb(var(--color_25))}.backcolor_26{background-color:rgb(var(--color_26))}.backcolor_27{background-color:rgb(var(--color_27))}.backcolor_28{background-color:rgb(var(--color_28))}.backcolor_29{background-color:rgb(var(--color_29))}.backcolor_30{background-color:rgb(var(--color_30))}.backcolor_31{background-color:rgb(var(--color_31))}.backcolor_32{background-color:rgb(var(--color_32))}.backcolor_33{background-color:rgb(var(--color_33))}.backcolor_34{background-color:rgb(var(--color_34))}.backcolor_35{background-color:rgb(var(--color_35))}#SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus, #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus ~ .wixSdkShowFocusOnSibling{box-shadow:0 0 0 1px #ffffff, 0 0 0 3px #116dff !important;z-index:1}[data-mesh-id=SITE_HEADERinlineContent]{height:auto;width:100%;position:static;min-height:111px}[data-mesh-id=SITE_FOOTERinlineContent]{height:auto;width:100%;position:static;min-height:132px}
        @font-face {
            font-family: wf_9aaf2248f85f4cc3942094a05;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9aaf2248f85f4cc3942094a054624529/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9aaf2248f85f4cc3942094a054624529/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9aaf2248f85f4cc3942094a054624529/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-display: block;
            font-family: "DIN-Next-W01-Light";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc176270-17fa-4c78-a343-9fe52824e501.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3516f91d-ac48-42cd-acfe-1be691152cc4.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d1b1e866-a411-42ba-8f75-72bf28e23694.svg#d1b1e866-a411-42ba-8f75-72bf28e23694") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "DIN-Next-W02-Light";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbfd41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbfd41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/07d62b21-8d7a-4c36-be86-d32ab1089972.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0050890-bbed-44b9-94df-2611d72dbb06.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9f774d17-c03a-418e-a375-34f3beecbc7a.svg#9f774d17-c03a-418e-a375-34f3beecbc7a") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "DIN-Next-W10-Light";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530bd41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530bd41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9e95a29-98a7-404a-90ee-1929ad09c696.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a7663fd-eae8-4e50-a67a-225271f8cceb.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58ae9be9-5d95-44b6-8b6c-e6da6a46822c.svg#58ae9be9-5d95-44b6-8b6c-e6da6a46822c") format("svg");
        }
        @font-face {
            font-display: block;
            font-family:"Arial-W01-Black";
            src:url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daad41d.eot?#iefix");
            src:url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daad41d.eot?#iefix") format("eot"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6f5bcd6-66fc-44af-be95-bb1f2b38d080.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7b5b436b-a511-402a-88d6-dbac700cee36.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5adcd35-c36a-4b18-953d-47c029de4ef6.svg#a5adcd35-c36a-4b18-953d-47c029de4ef6") format("svg");
        }
        @font-face {
            font-display: block;
            font-family:"Arial-W02-Black";
            src:url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9d41d.eot?#iefix");
            src:url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9d41d.eot?#iefix") format("eot"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/41280d6d-9240-4d82-9e98-3ea1a1913501.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc33f504-28ac-46ae-b258-d4fd1f599c47.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0faa6338-fe10-42e6-9346-2c6626ddcd73.svg#0faa6338-fe10-42e6-9346-2c6626ddcd73") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 400;
            src: local('Caudex Italic'), local('Caudex-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDS311QOP6BJUr4yMKPtbosEJimIMs.woff2") format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 400;
            src: local('Caudex Italic'), local('Caudex-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDS311QOP6BJUr4yMKAtbosEJimIMs.woff2") format('woff2');
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 400;
            src: local('Caudex Italic'), local('Caudex-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDS311QOP6BJUr4yMKNtbosEJimIMs.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 400;
            src: local('Caudex Italic'), local('Caudex-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDS311QOP6BJUr4yMKDtbosEJim.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 700;
            src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDV311QOP6BJUr4yMo4kK8NMpWMGsLAjdA.woff2") format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 700;
            src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDV311QOP6BJUr4yMo4kK8CMpWMGsLAjdA.woff2") format('woff2');
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 700;
            src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDV311QOP6BJUr4yMo4kK8PMpWMGsLAjdA.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: italic;
            font-weight: 700;
            src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDV311QOP6BJUr4yMo4kK8BMpWMGsLA.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 400;
            src: local('Caudex'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDQ311QOP6BJUr4wfKBv70OEqin.woff2") format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 400;
            src: local('Caudex'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDQ311QOP6BJUr4zvKBv70OEqin.woff2") format('woff2');
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 400;
            src: local('Caudex'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDQ311QOP6BJUr4w_KBv70OEqin.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 400;
            src: local('Caudex'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDQ311QOP6BJUr4zfKBv70OEg.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 700;
            src: local('Caudex Bold'), local('Caudex-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDT311QOP6BJUrwdteUnp8DOJKuGPLB.woff2") format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 700;
            src: local('Caudex Bold'), local('Caudex-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDT311QOP6BJUrwdteUkZ8DOJKuGPLB.woff2") format('woff2');
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 700;
            src: local('Caudex Bold'), local('Caudex-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDT311QOP6BJUrwdteUnJ8DOJKuGPLB.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Caudex';
            font-style: normal;
            font-weight: 700;
            src: local('Caudex Bold'), local('Caudex-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Caudex/v9/esDT311QOP6BJUrwdteUkp8DOJKuGA.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: wf_a35e98b29c354da09e5772a81;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_a35e98b29c354da09e5772a81dd259d8/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_a35e98b29c354da09e5772a81dd259d8/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_a35e98b29c354da09e5772a81dd259d8/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_09b416d242e1435ab0553723d;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_09b416d242e1435ab0553723d3c2a92e/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_09b416d242e1435ab0553723d3c2a92e/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_09b416d242e1435ab0553723d3c2a92e/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_23e86fa6ee9c40099dbc21bee;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_e4e7587d8e4f450f9ecbaa90d;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W01-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4021a3b9-f782-438b-aeb4-c008109a8b64.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/669f79ed-002c-4ff6-965c-9da453968504.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d17bc040-9e8b-4397-8356-8153f4a64edf.svg#d17bc040-9e8b-4397-8356-8153f4a64edf") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W02-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53ed41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53ed41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b56b944e-bbe0-4450-a241-de2125d3e682.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7da02f05-ae8b-43a1-aeb9-83b3c0527c06.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/66cac56e-d017-4544-9d0c-f7d978f0c5c2.svg#66cac56e-d017-4544-9d0c-f7d978f0c5c2") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-LT-W10-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3cd41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3cd41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6f8d1983-4d34-4fa4-9110-988f6c495757.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7903ee3f-e9ab-4bdc-b7d2-d232de2da580.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0.svg#9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3K8-C8CSKlvPfE.woff2") format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3K9-C8CSKlvPfE.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3Kz-C8CSKlv.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: wf_86847e70a91c4fed9c4c3f992;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_0b61635ecf0847fc992c89610;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_f4796404c8a74007894a55bb5;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949NpRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949NpS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-weight: 700;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-SRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-SS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-700-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-style: italic;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-italic-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-weight: 700;
            font-style: italic;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdCha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdCtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-700-italic-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLucXtAOvWDSHFF.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLufntAOvWDSHFF.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLucHtAOvWDSA.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VFteOYktMqlap.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VGdeOYktMqlap.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VF9eOYktMqg.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W01-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012ad41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012ad41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5749443-93da-4592-b794-42f28d62ef72.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73805f15-38e4-4fb7-8a08-d56bf29b483b.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/874bbc4a-0091-49f0-93ef-ea4e69c3cc7a.svg#874bbc4a-0091-49f0-93ef-ea4e69c3cc7a") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W02-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/192dac76-a6d9-413d-bb74-22308f2e0cc5.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47584448-98c4-436c-89b9-8d6fbeb2a776.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/375c70e5-6822-492b-8408-7cd350440af7.svg#375c70e5-6822-492b-8408-7cd350440af7") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-LT-W10-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a3939d0-3833-4db3-8b85-f64c2b3350d2.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b128d6d-126f-4c9c-8f87-3e7d30a1671c.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b791c850-fde1-48b3-adf0-8998d55b0866.svg#b791c850-fde1-48b3-adf0-8998d55b0866") format("svg");
        }
        @font-face {
            font-family: wf_9a53f98a74d54a44820832500;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_7d98c64a8d574764b272be6d7;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/ttf/file.ttf") format("ttf");
        }

        #SITE_PAGES { --transition-duration:0ms }#BACKGROUND_GROUP { --transition-duration:0ms }
    </style>
    <style id="css_men9r">#men9r{height:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#men9r .men9r-container{position:relative;box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:calc(max(70px,70px)) auto auto auto;grid-template-columns:minmax(0px,1fr);--container-display:grid;}#men9r:not(.men9r-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 1000px){#men9r .men9r-container{grid-template-rows:55px auto auto auto;}}@media screen and (min-width: 320px) and (max-width: 750px){#men9r .men9r-container{grid-template-rows:60px auto auto auto;}}#comp-kmmbcjrq{height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:4/1/5/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmmbcjrq-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmmbcjrq:not(.comp-kmmbcjrq-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}#comp-k6gjwdge{height:400px;min-height:400px;max-height:400px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:3/1/4/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-k6gjwdge-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-k6gjwdge:not(.comp-k6gjwdge-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-k6gjwdge{max-height:1150px;height:1150px;min-height:1150px;}}#comp-kcbzvgln{min-height:200px;--l_display:unset;height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:start;justify-self:stretch;margin-left:2.9997723132969036%;margin-right:2.9997723132969036%;margin-top:55px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kcbzvgln-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:minmax(294px,max-content);grid-template-columns:0.9999798151063743fr 1fr 1fr 1fr 1fr 1fr;--container-display:grid;}#comp-kcbzvgln:not(.comp-kcbzvgln-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 1000px){.comp-kcbzvgln-container{grid-template-rows:minmax(294px,max-content);grid-template-columns:1.0469362356939687fr 0.9602131917556914fr 1fr 1fr 1fr 1fr;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kcbzvgln{min-height:1050px;height:1000px;min-width:0px;align-self:end;margin-left:16px;margin-right:16px;margin-top:0px;margin-bottom:40px;}.comp-kcbzvgln-container{grid-template-rows:minmax(190px,190px) minmax(190px,190px) minmax(190px,190px) minmax(190px,190px) minmax(140px,140px) minmax(100px,100px);grid-template-columns:1fr;}}#comp-kmm6q2uo{--l_display:unset;height:auto;width:87.98522376309575%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0%;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm6q2uo{width:85%;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm6q2uo{width:35%;margin-left:0px;margin-top:2px;}}#comp-kmm6vpv3{--l_display:unset;height:auto;width:87.98522376309575%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0%;margin-bottom:0px;grid-area:1/2/2/3;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm6vpv3{margin-left:0px;margin-top:0px;grid-area:2/1/3/2;}}#comp-kmm6xq68{--l_display:unset;height:auto;width:87.98522376309575%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0%;margin-bottom:0px;grid-area:1/3/2/4;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm6xq68{width:auto;justify-self:stretch;margin-left:0%;margin-top:0%;grid-area:1/3/2/4;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm6xq68{width:49.75466844512195%;justify-self:start;margin-left:0px;margin-top:0px;grid-area:3/1/4/2;}}#comp-kmm6z3sh{--l_display:unset;height:auto;width:87.98522376309575%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:0.006055468087683178%;margin-right:0%;margin-top:0%;margin-bottom:0px;grid-area:1/4/2/5;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm6z3sh{margin-left:0%;margin-top:0%;grid-area:1/4/2/5;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm6z3sh{margin-left:0px;margin-top:0px;grid-area:4/1/5/2;}}#comp-kmm70f6s{--l_display:unset;height:auto;width:87.98522376309575%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0%;margin-bottom:0px;grid-area:1/5/2/6;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm70f6s{width:54.167466257276274%;margin-left:0%;margin-top:0%;grid-area:1/5/2/7;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm70f6s{margin-left:0px;margin-top:0px;grid-area:5/1/6/2;}}#comp-kmm72oxg{--l_display:unset;height:auto;width:100%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:end;justify-self:start;margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm72oxg{width:65.63213757893323%;margin-bottom:0px;grid-area:1/1/2/3;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm72oxg{margin-bottom:-50px;grid-area:6/1/7/2;}}#comp-kmm7wd8y{--l_display:none;height:5px;width:90%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:0px;margin-right:17.466406250000034px;margin-top:118.81971153846143px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm7wd8y{height:0px;width:0%;align-self:start;justify-self:start;margin-left:-23.03125px;margin-right:0px;margin-top:-681.53125px;margin-bottom:0px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm7wd8y{--l_display:unset;width:100%;height:5px;align-self:end;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:10px;}}#comp-kmm7y0y8{--l_display:none;height:5px;width:90%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:0px;margin-right:17.466406250000034px;margin-top:118.81971153846143px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm7y0y8{height:0px;width:0%;align-self:start;justify-self:start;margin-left:-23.03125px;margin-right:0px;margin-top:-681.53125px;margin-bottom:0px;grid-area:1/1/2/2;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm7y0y8{--l_display:unset;width:100%;height:5px;align-self:end;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:10px;grid-area:2/1/3/2;}}#comp-kmm7yhzo{--l_display:none;height:5px;width:90%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:0px;margin-right:17.466406250000034px;margin-top:118.81971153846143px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm7yhzo{height:0px;width:0%;align-self:start;justify-self:start;margin-left:-23.03125px;margin-right:0px;margin-top:-681.53125px;margin-bottom:0px;grid-area:1/1/2/2;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm7yhzo{--l_display:unset;width:100%;height:5px;align-self:end;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:10px;grid-area:3/1/4/2;}}#comp-kmm7ztsp{--l_display:none;height:5px;width:90%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:0px;margin-right:17.466406250000034px;margin-top:118.81971153846143px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm7ztsp{height:0px;width:0%;align-self:start;justify-self:start;margin-left:-23.03125px;margin-right:0px;margin-top:-681.53125px;margin-bottom:0px;grid-area:1/1/2/2;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm7ztsp{--l_display:unset;width:100%;height:5px;align-self:end;justify-self:start;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:10px;grid-area:4/1/5/2;}}#comp-kmm89q0q{min-height:32px;--l_display:unset;height:31.828125px;min-width:155px;width:155.328125px;max-width:155.328125px;max-height:31.828125px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-left:0%;margin-right:0px;margin-top:0px;margin-bottom:0px;grid-area:1/6/2/7;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmm89q0q{min-height:20px;height:20px;min-width:79.953125px;width:88.953125px;grid-area:1/6/2/7;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm89q0q{min-height:20.10696652223578px;height:23.28125px;min-width:97.59929404177188px;width:113.15927450339339px;grid-area:1/1/2/2;}}#comp-ko09ig4x{--l_display:unset;height:auto;width:100%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-left:0%;margin-right:0%;margin-top:40px;margin-bottom:0px;grid-area:1/6/2/7;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-ko09ig4x{width:90.29384995449226%;margin-top:40px;grid-area:1/6/2/7;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-ko09ig4x{width:57.926829268292686%;margin-top:30px;grid-area:1/1/2/2;}}#comp-ko0a3she{--l_display:unset;height:auto;width:28%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:6.738655002733735%;margin-right:0%;margin-top:80px;margin-bottom:0px;grid-area:1/6/2/7;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#comp-ko0a3she::before{--aspect-ratio:0.38831756478815943;content:attr(x);display:block;padding-top:calc(var(--aspect-ratio) * 100%);}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-ko0a3she{width:60.75412665554705%;align-self:start;justify-self:end;margin-left:0%;margin-right:0%;margin-top:110px;margin-bottom:0px;grid-area:1/6/2/7;}#comp-ko0a3she::before{--aspect-ratio:0.3879925945517116;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-ko0a3she{width:26%;min-height:26px;align-self:end;justify-self:end;margin-left:0%;margin-right:177.21372329711915px;margin-top:0px;margin-bottom:28.99304962158203px;grid-area:1/1/2/2;}#comp-ko0a3she::before{--aspect-ratio:0.33673301529856886;}}#comp-ko0a418c{--l_display:unset;height:auto;width:29%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-left:0%;margin-right:0%;margin-top:80px;margin-bottom:0px;grid-area:1/6/2/7;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#comp-ko0a418c::before{--aspect-ratio:0.37343215507411087;content:attr(x);display:block;padding-top:calc(var(--aspect-ratio) * 100%);}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-ko0a418c{width:60.61875677059961%;align-self:start;margin-right:0%;margin-top:150px;margin-bottom:0px;grid-area:1/6/2/7;}#comp-ko0a418c::before{--aspect-ratio:0.37302248126561305;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-ko0a418c{width:27%;min-height:25.770465546096148px;align-self:end;margin-right:0px;margin-top:0px;margin-bottom:29px;grid-area:1/1/2/2;}#comp-ko0a418c::before{--aspect-ratio:0.33583908980089394;}}#comp-kp72821f{--l_display:unset;height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:end;justify-self:stretch;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:0px;grid-area:1/2/2/5;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kp72821f{align-self:end;margin-left:8.969728806881607%;margin-top:0px;margin-bottom:2.5px;grid-area:1/2/2/6;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kp72821f{align-self:start;margin-left:0%;margin-top:-10px;margin-bottom:0px;grid-area:6/1/7/2;}}#comp-kmmbck1f{height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:start;justify-self:end;margin-top:0px;margin-right:0px;grid-area:1/1/2/2;pointer-events:auto;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmmbck1f-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmmbck1f:not(.comp-kmmbck1f-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}#comp-kmmbck1f-pinned-layer{position:fixed;left:0;width:100%;display:grid;grid-template-columns:1fr;grid-template-rows:1fr;top:0;bottom:unset;height:calc(100% - var(--wix-ads-height));margin-top:var(--wix-ads-height);}#comp-kjwul7q7{height:100vh;width:300px;min-height:100vh;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#comp-kjwul7q7 .comp-kjwul7q7-overflow-wrapper{position:absolute;top:0;left:0;width:100%;height:100%;display:grid;grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);overflow-x:hidden;overflow-y:scroll;scrollbar-width:none;overflow:-moz-scrollbars-none;-ms-overflow-style:none;}#comp-kjwul7q7 .comp-kjwul7q7-container{position:relative;box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kjwul7q7:not(.comp-kjwul7q7-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}#comp-kjwul7q7 .comp-kjwul7q7-overflow-wrapper::-webkit-scrollbar{width:0;height:0;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kjwul7q7{min-width:40vw;width:40vw;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kjwul7q7{width:100vw;}#comp-kjwul7q7 .comp-kjwul7q7-container{grid-template-rows:8vh 92vh;}}#comp-kjwul8dc{height:18px;width:18px;--l_display:unset;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-left:0%;margin-right:30px;margin-top:30px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kjwul8dc{min-height:18px;min-width:18px;max-width:19.5625px;max-height:19.5625px;justify-self:start;margin-left:25px;margin-right:0px;margin-top:25px;}}#comp-kmm9soym{min-height:280px;--l_display:none;height:auto;width:34%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:center;justify-self:center;margin-left:0%;margin-right:8.061848958333321%;margin-top:-314.5492788461538px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmm9soym-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmm9soym:not(.comp-kmm9soym-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm9soym{min-height:290px;--l_display:unset;width:auto;align-self:start;justify-self:stretch;margin-left:25px;margin-right:25px;margin-top:0px;grid-area:2/1/3/2;}}#comp-kmm9u2l4{--l_display:none;height:auto;width:80%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:4.629956317204295%;margin-right:0%;margin-top:104.8581730769231px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmm9u2l4{--l_display:unset;width:100%;margin-left:0%;margin-top:0px;}}#comp-kmma3fys{min-height:280px;--l_display:none;height:auto;width:34%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:center;justify-self:center;margin-left:0%;margin-right:8.061848958333321%;margin-top:-314.5492788461538px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmma3fys-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmma3fys:not(.comp-kmma3fys-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmma3fys{min-height:200px;--l_display:unset;height:200px;width:auto;max-height:200px;align-self:start;justify-self:stretch;margin-left:25px;margin-right:25px;margin-top:370px;grid-area:2/1/3/2;}}#comp-kmma3g17{--l_display:none;height:auto;width:79.99495967741936%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-left:0%;margin-right:7.741935483870968%;margin-top:26px;margin-bottom:240.265625px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmma3g17{--l_display:unset;justify-self:start;margin-right:0%;margin-top:30px;margin-bottom:0px;}}#comp-kmma29ui{--l_display:none;height:5px;width:100%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:center;margin-right:0px;margin-left:0px;margin-top:26.734375px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmma29ui{--l_display:unset;width:auto;align-self:end;justify-self:stretch;margin-left:0%;margin-right:0%;margin-top:0px;}}#comp-kmmai23v{--l_display:none;height:auto;width:10%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-right:37.428647933467744%;margin-left:0%;margin-top:61.79390519230765px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#comp-kmmai23v::before{--aspect-ratio:0.9411765;content:attr(x);display:block;padding-top:calc(var(--aspect-ratio) * 100%);}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmmai23v{min-height:32px;--l_display:unset;width:42.815912378975%;align-self:stretch;justify-self:start;margin-right:0%;margin-top:152.109375px;margin-bottom:10px;}#comp-kmmai23v::before{--aspect-ratio:unset;}}#comp-kmmbcu6n{height:100vh;min-height:100vh;max-height:100vh;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:3/1/4/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmmbcu6n-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmmbcu6n:not(.comp-kmmbcu6n-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmmbcu6n{min-height:0px;height:auto;max-height:99999px;}}#comp-kmmbd4x5{min-height:0px;--l_display:unset;height:auto;min-width:0px;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:stretch;justify-self:stretch;position:relative;margin-left:0px;margin-right:0px;margin-top:0px;margin-bottom:8px;grid-area:1/1/2/2;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmmbd4x5{min-height:unset;align-self:start;margin-left:0%;margin-right:0%;margin-bottom:0px;}}#comp-kmmcplmt{height:auto;min-height:200px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:2/1/3/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmmcplmt-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmmcplmt:not(.comp-kmmcplmt-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmmcplmt{min-height:200px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmmcplmt{min-height:150px;}}#comp-kmxndj44{--l_display:unset;height:auto;width:57.55839445153061%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:center;justify-self:center;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmxndj44{width:86.67195638020833%;align-self:end;margin-bottom:54px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmxndj44{width:90%;align-self:end;margin-bottom:35px;}}#comp-ko31ypy4{--l_display:unset;height:5px;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:end;justify-self:stretch;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}#comp-kmmbcje0{height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:start;justify-self:stretch;margin-left:0%;margin-right:0%;margin-bottom:0%;margin-top:calc(0px);grid-area:1/1/2/2;pointer-events:auto;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmmbcje0-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmmbcje0:not(.comp-kmmbcje0-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}#comp-kmmbcje0-pinned-layer{position:fixed;left:0;width:100%;display:grid;grid-template-columns:1fr;grid-template-rows:1fr;top:0;bottom:unset;height:calc(100% - var(--wix-ads-height));margin-top:var(--wix-ads-height);}#comp-k6gjwdd6{min-height:70px;height:70px;min-width:0px;width:auto;max-width:99999px;max-height:70px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:stretch;justify-self:stretch;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-k6gjwdd6-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-k6gjwdd6:not(.comp-k6gjwdd6-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 2200px){#comp-k6gjwdd6{min-height:62.00000190734863px;height:70.5px;max-height:125px;}}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-k6gjwdd6{height:55px;min-height:55px;max-height:55px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-k6gjwdd6{min-height:60px;height:60px;max-height:60px;}}#comp-kjwulflv{height:35px;width:35px;--l_display:none;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:end;margin-left:0%;margin-right:8.333333%;margin-top:30.5px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kjwulflv{--l_display:unset;height:13.444547069745596px;width:24.19738085754004px;justify-self:start;margin-left:12px;margin-right:0px;margin-top:24px;}}#comp-kmf5ajqg{--l_display:none;height:auto;width:51.97900978915663%;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:15%;margin-right:0%;margin-top:30px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmf5ajqg{width:56.687418619791664%;justify-self:end;margin-left:0%;margin-right:5.078125%;margin-top:20px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmf5ajqg{--l_display:none;}}#comp-kmf6curq{min-height:80px;--l_display:unset;height:80px;width:200px;max-height:80px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));align-self:end;justify-self:end;margin-left:0%;margin-right:0%;margin-top:0px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}.comp-kmf6curq-container{box-sizing:border-box;display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:1fr;--container-display:grid;}#comp-kmf6curq:not(.comp-kmf6curq-container){display:var(--l_display,var(--container-display));grid-template-rows:1fr;grid-template-columns:minmax(0, 1fr);--container-display:grid;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmf6curq{min-height:55px;height:55px;width:19.53125%;max-height:55px;align-self:start;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmf6curq{min-height:60px;height:60px;width:30%;max-height:60px;align-self:start;}}#comp-kmxst89d{min-height:42px;--l_display:unset;height:auto;width:auto;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:end;justify-self:stretch;margin-left:10%;margin-right:10%;margin-top:0px;margin-bottom:23px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmxst89d{margin-bottom:8px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmxst89d{min-height:35px;margin-bottom:12px;}}#comp-kmgm30vd{min-height:27.581006490485606px;--l_display:unset;height:26.514979383288605px;min-width:165.4983135341421px;width:159.10167646857155px;max-width:180px;max-height:30px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:20px;margin-right:0%;margin-top:21px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmgm30vd{min-height:30px;height:30px;min-width:169.828125px;width:169.828125px;max-width:181.2421875px;max-height:30px;margin-left:7%;margin-top:12px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmgm30vd{min-height:21.954703999999992px;height:22px;min-width:130px;width:130px;max-width:130.15625px;max-height:22px;margin-left:45px;margin-top:18px;}}#comp-kmqqj0cg{height:35px;width:35px;--l_display:none;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:2.9296875%;margin-right:0%;margin-top:7.5px;margin-bottom:0px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kmqqj0cg{--l_display:unset;height:24.0234375px;width:24.0234375px;margin-left:2%;margin-top:15px;}}@media screen and (min-width: 320px) and (max-width: 750px){#comp-kmqqj0cg{--l_display:none;}}#comp-kokfwcck{min-height:30px;--l_display:unset;height:30px;min-width:810px;width:810px;max-width:810px;max-height:30px;top:calc(var(--top) + var(--sticky-top) + var(--wix-ads-top-height) * var(--is-sticky));display:var(--l_display,var(--display));align-self:start;justify-self:start;margin-left:200px;margin-right:0%;margin-top:19.578125px;margin-bottom:30.421875px;grid-area:1/1/2/2;position:relative;--is-sticky:0;--sticky-top:0px;--top:0px;}@media screen and (min-width: 320px) and (max-width: 2200px){#comp-kokfwcck{height:30px;min-width:810px;width:810px;max-width:810px;align-self:start;margin-left:200px;margin-right:0%;margin-top:20px;margin-bottom:0px;}}@media screen and (min-width: 320px) and (max-width: 1164px){#comp-kokfwcck{height:30px;min-width:550px;width:700.5px;max-width:701.5px;align-self:start;margin-left:180px;margin-right:0px;margin-top:20px;margin-bottom:0px;}}@media screen and (min-width: 320px) and (max-width: 1000px){#comp-kokfwcck{width:68.89851888020833%;height:60px;--l_display:none;align-self:end;margin-left:10.3759765625%;margin-right:0%;margin-top:0px;margin-bottom:0px;}}
        #comp-kmmbcjrq{z-index:50;--above-all-in-container:10000}#comp-kmmbck1f-pinned-layer{z-index:53;--above-all-in-container:10000}#PAGE_SECTIONSmen9r{--pinned-layer-in-container:49;--above-all-in-container:49}#comp-kmmbcje0-pinned-layer{z-index:55;--above-all-in-container:10000}
        @font-face {
            font-family: wf_e4e7587d8e4f450f9ecbaa90d;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/452c86_e4e7587d8e4f450f9ecbaa90dba8db65/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W01-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4021a3b9-f782-438b-aeb4-c008109a8b64.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/669f79ed-002c-4ff6-965c-9da453968504.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d17bc040-9e8b-4397-8356-8153f4a64edf.svg#d17bc040-9e8b-4397-8356-8153f4a64edf") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W02-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53ed41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53ed41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b56b944e-bbe0-4450-a241-de2125d3e682.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7da02f05-ae8b-43a1-aeb9-83b3c0527c06.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/66cac56e-d017-4544-9d0c-f7d978f0c5c2.svg#66cac56e-d017-4544-9d0c-f7d978f0c5c2") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-LT-W10-Roman";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3cd41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3cd41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6f8d1983-4d34-4fa4-9110-988f6c495757.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7903ee3f-e9ab-4bdc-b7d2-d232de2da580.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0.svg#9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3K8-C8CSKlvPfE.woff2") format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3K9-C8CSKlvPfE.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Anton';
            font-style: normal;
            font-weight: 400;
            src: local('Anton Regular'), local('Anton-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Anton/v11/1Ptgg87LROyAm3Kz-C8CSKlv.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: wf_23e86fa6ee9c40099dbc21bee;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/76d905_23e86fa6ee9c40099dbc21bee6d8e653/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_86847e70a91c4fed9c4c3f992;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/8db4ea_86847e70a91c4fed9c4c3f992452ad8d/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_e621d01c7137419fb755b32ac;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_e621d01c7137419fb755b32ac14d44e3/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_e621d01c7137419fb755b32ac14d44e3/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_e621d01c7137419fb755b32ac14d44e3/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_0b61635ecf0847fc992c89610;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_0b61635ecf0847fc992c896100ef36e6/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_f4796404c8a74007894a55bb5;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_f4796404c8a74007894a55bb56df1b43/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949NpRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/9VWMTeb5jtXkNoTv949NpS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-weight: 700;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-SRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/aDjpMND83pDErGXlVEr-SS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-700-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-style: italic;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/RbebACOccNN-5ixkDIVLjdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-italic-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Poppins-SemiBold";
            font-weight: 700;
            font-style: italic;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdCha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/c4FPK8_hIFKoX59qcGwdCtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins-semibold/v5/poppins-semibold-700-italic-Svg.svg") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLucXtAOvWDSHFF.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLufntAOvWDSHFF.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            src: local('Poppins Italic'), local('Poppins-Italic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiGyp8kv8JHgFVrJJLucHtAOvWDSA.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VFteOYktMqlap.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VGdeOYktMqlap.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VF9eOYktMqg.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: local('Poppins Regular'), local('Poppins-Regular'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2") format('woff2');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2") format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-display: block;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: local('Poppins Bold'), local('Poppins-Bold'), url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/santa-resources/dist/viewer/user-site-fonts/fonts/Poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2") format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W01-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012ad41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012ad41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5749443-93da-4592-b794-42f28d62ef72.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73805f15-38e4-4fb7-8a08-d56bf29b483b.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/874bbc4a-0091-49f0-93ef-ea4e69c3cc7a.svg#874bbc4a-0091-49f0-93ef-ea4e69c3cc7a") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-W02-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/192dac76-a6d9-413d-bb74-22308f2e0cc5.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47584448-98c4-436c-89b9-8d6fbeb2a776.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/375c70e5-6822-492b-8408-7cd350440af7.svg#375c70e5-6822-492b-8408-7cd350440af7") format("svg");
        }
        @font-face {
            font-display: block;
            font-family: "Helvetica-LT-W10-Bold";
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190d41d.eot?#iefix");
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190d41d.eot?#iefix") format("eot"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a3939d0-3833-4db3-8b85-f64c2b3350d2.woff") format("woff"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b128d6d-126f-4c9c-8f87-3e7d30a1671c.ttf") format("truetype"),url("<?php echo get_stylesheet_directory_uri(); ?>/static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b791c850-fde1-48b3-adf0-8998d55b0866.svg#b791c850-fde1-48b3-adf0-8998d55b0866") format("svg");
        }
        @font-face {
            font-family: wf_9a53f98a74d54a44820832500;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_9a53f98a74d54a44820832500af6fcee/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_7d98c64a8d574764b272be6d7;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_7d98c64a8d574764b272be6d7da22ca7/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_25c24c04095041fc8c01754ad;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_25c24c04095041fc8c01754ad6393b8b/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_25c24c04095041fc8c01754ad6393b8b/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_25c24c04095041fc8c01754ad6393b8b/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_6ef847f46bbe4cd79f38060e6;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_6ef847f46bbe4cd79f38060e666e20b1/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_6ef847f46bbe4cd79f38060e666e20b1/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_6ef847f46bbe4cd79f38060e666e20b1/ttf/file.ttf") format("ttf");
        }
        @font-face {
            font-family: wf_b4b03681d48e46af826b28b47;
            src: url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_b4b03681d48e46af826b28b473d1b08d/woff2/file.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_b4b03681d48e46af826b28b473d1b08d/woff/file.woff") format("woff"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/static.wixstatic.com/ufonts/d56505_b4b03681d48e46af826b28b473d1b08d/ttf/file.ttf") format("ttf");
        }

        #comp-kmxndj44 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:center;--fontFamily:wfont_d56505_25c24c04095041fc8c01754ad6393b8b,wf_25c24c04095041fc8c01754ad,orig_joyride;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:48px;--fontWeight:normal }#comp-kmxndj44 p,#comp-kmxndj44 h1,#comp-kmxndj44 h2,#comp-kmxndj44 h3,#comp-kmxndj44 h4,#comp-kmxndj44 h5,#comp-kmxndj44 h6,#comp-kmxndj44 ul,#comp-kmxndj44 ol { color:#181818;font-family:wfont_d56505_25c24c04095041fc8c01754ad6393b8b,wf_25c24c04095041fc8c01754ad,orig_joyride;font-weight:normal;font-size:48px;font-style:normal;text-align:center;letter-spacing:0em;line-height:1.3 }#comp-ko31ypy4 { --lnw:1px;--brd:var(--color_12);--alpha-brd:0.72;transform-origin:center 0.5px }#comp-kjwul8dc { --stroke-width:0;--fill-opacity:1;--stroke:#ED1566;--stroke-opacity:1;--fill:#94E522 }#comp-kjwulflv { --stroke-width:1;--fill-opacity:1;--stroke:#C7C7C7;--stroke-opacity:1;--fill:#C7C7C7;--svg-calculated-padding:0px 1px 1px 0px;--svg-calculated-width:calc(100% - 1px);--svg-calculated-height:calc(100% - 1px) }#comp-kmf5ajqg { --fontStyle:normal;--color:0,0,0;--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard;--letterSpacing:0.01em;--lineHeight:1.3em;--fontSize:12px;--fontWeight:normal }#comp-kmf5ajqg p,#comp-kmf5ajqg h1,#comp-kmf5ajqg h2,#comp-kmf5ajqg h3,#comp-kmf5ajqg h4,#comp-kmf5ajqg h5,#comp-kmf5ajqg h6,#comp-kmf5ajqg ul,#comp-kmf5ajqg ol { color:#000000;font-family:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard;font-weight:normal;font-size:12px;font-style:normal;text-align:left;letter-spacing:0.01em;line-height:1.3 }#comp-kmgm30vd { --opacity:1 }#comp-kmqqj0cg { --stroke-width:0;--fill-opacity:1;--stroke:#5E97FF;--stroke-opacity:1;--fill:#181818;--flip:scale(-1, 1) }#comp-kokfwcck { --menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:255,255,255;--rd:0px;--shd:none;--fnt:normal normal normal 13px/1.4em wfont_d56505_6ef847f46bbe4cd79f38060e666e20b1,wf_6ef847f46bbe4cd79f38060e6,orig_scania_sans_cy_condensed_bold;--pad:5px;--txt:0,0,0;--alpha-txt:1;--trans:color 0.4s ease 0s;--txth:148,229,34;--alpha-txth:1;--txts:148,229,34;--alpha-txts:1;--alpha-bgDrop:1;--boxShadowToggleOn-shd:none }#comp-kmm6q2uo { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:12px;--fontWeight:normal;--textDecoration:none }#comp-kmm6q2uo p,#comp-kmm6q2uo h1,#comp-kmm6q2uo h2,#comp-kmm6q2uo h3,#comp-kmm6q2uo h4,#comp-kmm6q2uo h5,#comp-kmm6q2uo h6,#comp-kmm6q2uo ul,#comp-kmm6q2uo ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:12px;font-style:normal;text-decoration:none;text-align:left;letter-spacing:0em;line-height:1 }#comp-kmm6vpv3 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:12px;--fontWeight:normal }#comp-kmm6vpv3 p,#comp-kmm6vpv3 h1,#comp-kmm6vpv3 h2,#comp-kmm6vpv3 h3,#comp-kmm6vpv3 h4,#comp-kmm6vpv3 h5,#comp-kmm6vpv3 h6,#comp-kmm6vpv3 ul,#comp-kmm6vpv3 ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:12px;font-style:normal;text-align:left;letter-spacing:0em;line-height:1 }#comp-kmm6xq68 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:12px;--fontWeight:normal;--textDecoration:none }#comp-kmm6xq68 p,#comp-kmm6xq68 h1,#comp-kmm6xq68 h2,#comp-kmm6xq68 h3,#comp-kmm6xq68 h4,#comp-kmm6xq68 h5,#comp-kmm6xq68 h6,#comp-kmm6xq68 ul,#comp-kmm6xq68 ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:12px;font-style:normal;text-decoration:none;text-align:left;letter-spacing:0em;line-height:1 }#comp-kmm6z3sh { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:14px;--fontWeight:normal;--textDecoration:none }#comp-kmm6z3sh p,#comp-kmm6z3sh h1,#comp-kmm6z3sh h2,#comp-kmm6z3sh h3,#comp-kmm6z3sh h4,#comp-kmm6z3sh h5,#comp-kmm6z3sh h6,#comp-kmm6z3sh ul,#comp-kmm6z3sh ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:14px;font-style:normal;text-decoration:none;text-align:left;letter-spacing:0em;line-height:1 }#comp-kmm70f6s { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:12px;--fontWeight:normal;--textDecoration:none }#comp-kmm70f6s p,#comp-kmm70f6s h1,#comp-kmm70f6s h2,#comp-kmm70f6s h3,#comp-kmm70f6s h4,#comp-kmm70f6s h5,#comp-kmm70f6s h6,#comp-kmm70f6s ul,#comp-kmm70f6s ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:12px;font-style:normal;text-decoration:none;text-align:left;letter-spacing:0em;line-height:1 }#comp-kmm72oxg { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1.25em;--fontSize:11px;--fontWeight:normal }#comp-kmm72oxg p,#comp-kmm72oxg h1,#comp-kmm72oxg h2,#comp-kmm72oxg h3,#comp-kmm72oxg h4,#comp-kmm72oxg h5,#comp-kmm72oxg h6,#comp-kmm72oxg ul,#comp-kmm72oxg ol { color:#181818;font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;font-weight:normal;font-size:11px;font-style:normal;text-align:left;letter-spacing:0em;line-height:1.25 }#comp-kmm7wd8y { --lnw:2px;--brd:64,64,78;--alpha-brd:1;transform-origin:center 1px }#comp-kmm7y0y8 { --lnw:2px;--brd:64,64,78;--alpha-brd:1;transform-origin:center 1px }#comp-kmm7yhzo { --lnw:2px;--brd:64,64,78;--alpha-brd:1;transform-origin:center 1px }#comp-kmm7ztsp { --lnw:2px;--brd:64,64,78;--alpha-brd:1;transform-origin:center 1px }#comp-kmm89q0q { --opacity:1 }#comp-ko09ig4x { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:right;--fontFamily:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard;--letterSpacing:0em;--lineHeight:1.25em;--fontSize:12px;--fontWeight:normal }#comp-ko09ig4x p,#comp-ko09ig4x h1,#comp-ko09ig4x h2,#comp-ko09ig4x h3,#comp-ko09ig4x h4,#comp-ko09ig4x h5,#comp-ko09ig4x h6,#comp-ko09ig4x ul,#comp-ko09ig4x ol { color:#181818;font-family:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard;font-weight:normal;font-size:12px;font-style:normal;text-align:right;letter-spacing:0em;line-height:1.25 }#comp-ko0a3she { --opacity:1 }#comp-ko0a418c { --opacity:1 }#comp-kp72821f { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_7d98c64a8d574764b272be6d7da22ca7,wf_7d98c64a8d574764b272be6d7,orig_sf_pro_display_regular;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:8px;--fontWeight:normal }#comp-kp72821f p,#comp-kp72821f h1,#comp-kp72821f h2,#comp-kp72821f h3,#comp-kp72821f h4,#comp-kp72821f h5,#comp-kp72821f h6,#comp-kp72821f ul,#comp-kp72821f ol { color:#181818;font-family:wfont_d56505_7d98c64a8d574764b272be6d7da22ca7,wf_7d98c64a8d574764b272be6d7,orig_sf_pro_display_regular;font-weight:normal;font-size:8px;font-style:normal;text-align:left;letter-spacing:0em;line-height:1.3 }#comp-kmm9u2l4 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:poppins-semibold,poppins,sans-serif;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:28px;--fontWeight:normal }#comp-kmm9u2l4 p,#comp-kmm9u2l4 h1,#comp-kmm9u2l4 h2,#comp-kmm9u2l4 h3,#comp-kmm9u2l4 h4,#comp-kmm9u2l4 h5,#comp-kmm9u2l4 h6,#comp-kmm9u2l4 ul,#comp-kmm9u2l4 ol { color:#181818;font-family:poppins-semibold,poppins,sans-serif;font-weight:normal;font-size:28px;font-style:normal;text-align:left;letter-spacing:0em;line-height:1.3 }#comp-kmma3g17 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:poppins-semibold,poppins,sans-serif;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:28px;--fontWeight:normal }#comp-kmma3g17 p,#comp-kmma3g17 h1,#comp-kmma3g17 h2,#comp-kmma3g17 h3,#comp-kmma3g17 h4,#comp-kmma3g17 h5,#comp-kmma3g17 h6,#comp-kmma3g17 ul,#comp-kmma3g17 ol { color:#181818;font-family:poppins-semibold,poppins,sans-serif;font-weight:normal;font-size:28px;font-style:normal;text-align:left;letter-spacing:0em;line-height:1.3 }#comp-kmma29ui { --lnw:2px;--brd:64,64,78;--alpha-brd:1;transform-origin:center 1px }#comp-kmmai23v { --opacity:1 }#comp-kmxst89d { --rd:8px 8px 8px 8px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:none;--horizontalPadding:0px;--verticalPadding:0px;--fnt:normal normal normal 26px/1.4em wfont_d56505_b4b03681d48e46af826b28b473d1b08d,wf_b4b03681d48e46af826b28b47,orig_zuume_cut_medium_italic;--trans2:color 0.4s ease 0s;--txt:0,0,0;--bg:148,229,34;--brd:24,24,24;--brw:0px;--bgh:var(--color_15);--brdh:50,50,50;--txth:var(--color_11);--bgd:204,204,204;--alpha-bgd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txth:1;--alpha-brdh:0;--alpha-brd:1;--alpha-bg:1;--alpha-bgh:1;--boxShadowToggleOn-shd:none;--alpha-txt:1;--shc-mutated-brightness:74,115,17;--label-align:center;--label-text-align:center }#men9r { --bg:var(--color_11);--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-kmmbcjrq { --alpha-bg:0;--bg:var(--color_11) }#comp-kmmbck1f { --alpha-bg:0;--bg:var(--color_11) }#comp-kmmbcu6n { --bg:var(--color_11);--alpha-bg:0 }#comp-kmmcplmt { --bg:var(--color_11);--alpha-bg:1 }#comp-kmmbcje0 { --alpha-bg:0;--bg:var(--color_11) }#comp-k6gjwdge { --bg:var(--color_11);--alpha-bg:1 }#comp-kjwul7q7 { --containerBackground:var(--color_11);--alpha-containerBackground:1;--bg:var(--color_15);--alpha-bg:0.8;--screen-width:100vw }#comp-k6gjwdd6 { --bg:var(--color_11);--alpha-bg:1 }#comp-kcbzvgln { --brw:0px;--brd:var(--color_12);--bg:var(--color_12);--rd:0px 0px 0px 0px;--shd:none;--alpha-bg:0;--alpha-brd:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:116,115,115 }#comp-kmm9soym { --brw:1px;--brd:var(--color_13);--bg:var(--color_11);--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:128,128,128 }#comp-kmma3fys { --brw:1px;--brd:var(--color_13);--bg:var(--color_11);--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:128,128,128 }#comp-kmf6curq { --brw:0px;--brd:var(--color_13);--bg:148,229,34;--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:74,115,17 }
        @media (min-width: 320px) and (max-width: 2200px) {#comp-kokfwcck { --menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:255,255,255;--rd:0px;--shd:none;--fnt:normal normal normal 13px/1.4em wfont_d56505_6ef847f46bbe4cd79f38060e666e20b1,wf_6ef847f46bbe4cd79f38060e6,orig_scania_sans_cy_condensed_bold;--pad:5px;--txt:35,31,32;--alpha-txt:1;--trans:color 0.4s ease 0s;--txth:148,229,34;--alpha-txth:1;--txts:148,229,34;--alpha-txts:1;--alpha-bgDrop:1;--boxShadowToggleOn-shd:none }#comp-kokfwcck { --minViewportSize:320;--maxViewportSize:2200 }}
        @media (min-width: 320px) and (max-width: 1164px) {#comp-kokfwcck { --menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:255,255,255;--rd:0px;--shd:none;--fnt:normal normal normal 12px/1.4em wfont_d56505_6ef847f46bbe4cd79f38060e666e20b1,wf_6ef847f46bbe4cd79f38060e6,orig_scania_sans_cy_condensed_bold;--pad:5px;--txt:35,31,32;--alpha-txt:1;--trans:color 0.4s ease 0s;--txth:148,229,34;--alpha-txth:1;--txts:148,229,34;--alpha-txts:1;--alpha-bgDrop:1;--boxShadowToggleOn-shd:none }#comp-kokfwcck { --minViewportSize:320;--maxViewportSize:1164 }}
        @media (min-width: 320px) and (max-width: 1000px) {#comp-kmxst89d { --rd:8px 8px 8px 8px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:none;--horizontalPadding:0px;--verticalPadding:0px;--fnt:normal normal normal 24px/1.4em wfont_d56505_b4b03681d48e46af826b28b473d1b08d,wf_b4b03681d48e46af826b28b47,orig_zuume_cut_medium_italic;--trans2:color 0.4s ease 0s;--txt:0,0,0;--bg:148,229,34;--brd:24,24,24;--brw:0px;--bgh:var(--color_15);--brdh:50,50,50;--txth:var(--color_11);--bgd:204,204,204;--alpha-bgd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txth:1;--alpha-brdh:0;--alpha-brd:1;--alpha-bg:1;--alpha-bgh:1;--boxShadowToggleOn-shd:none;--alpha-txt:1;--shc-mutated-brightness:74,115,17;--label-align:center;--label-text-align:center }#comp-kmxst89d { --minViewportSize:320;--maxViewportSize:1000 }}
        @media (min-width: 320px) and (max-width: 750px) {#comp-kmxst89d { --rd:4px 4px 4px 4px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:none;--horizontalPadding:0px;--verticalPadding:0px;--fnt:normal normal normal 16px/1.4em wfont_d56505_b4b03681d48e46af826b28b473d1b08d,wf_b4b03681d48e46af826b28b47,orig_zuume_cut_medium_italic;--trans2:color 0.4s ease 0s;--txt:0,0,0;--bg:148,229,34;--brd:24,24,24;--brw:0px;--bgh:var(--color_15);--brdh:50,50,50;--txth:var(--color_11);--bgd:204,204,204;--alpha-bgd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txth:1;--alpha-brdh:0;--alpha-brd:1;--alpha-bg:1;--alpha-bgh:1;--boxShadowToggleOn-shd:none;--alpha-txt:1;--shc-mutated-brightness:74,115,17;--label-align:center;--label-text-align:center }#comp-k6gjwdd6 { --bg:255,255,255;--alpha-bg:1 }#comp-kmf6curq { --brw:0px;--brd:var(--color_11);--bg:148,229,34;--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:74,115,17 }#comp-k6gjwdd6 { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmf6curq { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmxst89d { --minViewportSize:320;--maxViewportSize:750 }}
        @media (min-width: 320px) and (max-width: 1000px) {#comp-kmm6vpv3 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:13px;--fontWeight:normal }#comp-kmm6vpv3 p,#comp-kmm6vpv3 h1,#comp-kmm6vpv3 h2,#comp-kmm6vpv3 h3,#comp-kmm6vpv3 h4,#comp-kmm6vpv3 h5,#comp-kmm6vpv3 h6,#comp-kmm6vpv3 ul,#comp-kmm6vpv3 ol {font-size:13px !important }#comp-kmm6xq68 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:11px;--fontWeight:normal;--textDecoration:none }#comp-kmm6xq68 p,#comp-kmm6xq68 h1,#comp-kmm6xq68 h2,#comp-kmm6xq68 h3,#comp-kmm6xq68 h4,#comp-kmm6xq68 h5,#comp-kmm6xq68 h6,#comp-kmm6xq68 ul,#comp-kmm6xq68 ol {font-size:11px !important }#comp-kmm6z3sh { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:11px;--fontWeight:normal;--textDecoration:none }#comp-kmm6z3sh p,#comp-kmm6z3sh h1,#comp-kmm6z3sh h2,#comp-kmm6z3sh h3,#comp-kmm6z3sh h4,#comp-kmm6z3sh h5,#comp-kmm6z3sh h6,#comp-kmm6z3sh ul,#comp-kmm6z3sh ol {font-size:11px !important }#comp-kmm70f6s { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1em;--fontSize:11px;--fontWeight:normal;--textDecoration:none }#comp-kmm70f6s p,#comp-kmm70f6s h1,#comp-kmm70f6s h2,#comp-kmm70f6s h3,#comp-kmm70f6s h4,#comp-kmm70f6s h5,#comp-kmm70f6s h6,#comp-kmm70f6s ul,#comp-kmm70f6s ol {font-size:11px !important }#comp-kmm72oxg { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1.25em;--fontSize:8px;--fontWeight:normal }#comp-kmm72oxg p,#comp-kmm72oxg h1,#comp-kmm72oxg h2,#comp-kmm72oxg h3,#comp-kmm72oxg h4,#comp-kmm72oxg h5,#comp-kmm72oxg h6,#comp-kmm72oxg ul,#comp-kmm72oxg ol {font-size:8px !important }#comp-ko09ig4x { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:right;--fontFamily:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard;--letterSpacing:0em;--lineHeight:1.25em;--fontSize:12px;--fontWeight:normal }#comp-ko09ig4x p,#comp-ko09ig4x h1,#comp-ko09ig4x h2,#comp-ko09ig4x h3,#comp-ko09ig4x h4,#comp-ko09ig4x h5,#comp-ko09ig4x h6,#comp-ko09ig4x ul,#comp-ko09ig4x ol {font-family:wfont_d56505_0b61635ecf0847fc992c896100ef36e6,wf_0b61635ecf0847fc992c89610,orig_broadwell_standard !important }#comp-kp72821f { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_7d98c64a8d574764b272be6d7da22ca7,wf_7d98c64a8d574764b272be6d7,orig_sf_pro_display_regular;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:7px;--fontWeight:normal }#comp-kp72821f p,#comp-kp72821f h1,#comp-kp72821f h2,#comp-kp72821f h3,#comp-kp72821f h4,#comp-kp72821f h5,#comp-kp72821f h6,#comp-kp72821f ul,#comp-kp72821f ol {font-size:7px !important }#comp-kmm6vpv3 { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-kmm6xq68 { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-kmm6z3sh { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-kmm70f6s { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-kmm72oxg { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-ko09ig4x { --minViewportSize:320;--maxViewportSize:1000 }
            #comp-kp72821f { --minViewportSize:320;--maxViewportSize:1000 }}
        @media (min-width: 320px) and (max-width: 750px) {#comp-kmm7wd8y { --lnw:1px;--brd:var(--color_13);transform-origin:center 0.5px }#comp-kmm7y0y8 { --lnw:1px;--brd:var(--color_13);transform-origin:center 0.5px }#comp-kmm7yhzo { --lnw:1px;--brd:var(--color_13);transform-origin:center 0.5px }#comp-kmm7ztsp { --lnw:1px;--brd:var(--color_13);transform-origin:center 0.5px }#comp-ko09ig4x { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:right;--fontFamily:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75;--letterSpacing:0em;--lineHeight:1.25em;--fontSize:12px;--fontWeight:normal }#comp-ko09ig4x p,#comp-ko09ig4x h1,#comp-ko09ig4x h2,#comp-ko09ig4x h3,#comp-ko09ig4x h4,#comp-ko09ig4x h5,#comp-ko09ig4x h6,#comp-ko09ig4x ul,#comp-ko09ig4x ol {font-family:wfont_d56505_f4796404c8a74007894a55bb56df1b43,wf_f4796404c8a74007894a55bb5,orig_sequel_100_black_75 !important }#comp-k6gjwdge { --bg:255,255,255;--alpha-bg:1 }#comp-kcbzvgln { --brw:0px;--brd:var(--color_12);--bg:var(--color_12);--rd:0px 0px 0px 0px;--shd:none;--alpha-bg:0;--alpha-brd:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:116,115,115 }#comp-k6gjwdge { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kcbzvgln { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm7wd8y { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm7y0y8 { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm7yhzo { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm7ztsp { --minViewportSize:320;--maxViewportSize:750 }
            #comp-ko09ig4x { --minViewportSize:320;--maxViewportSize:750 }}
        @media (min-width: 320px) and (max-width: 1000px) {#comp-kjwul7q7 { --containerBackground:35,31,32;--alpha-containerBackground:1;--bg:var(--color_15);--alpha-bg:0.8 }#comp-kjwul7q7 { --minViewportSize:320;--maxViewportSize:1000 }}
        @media (min-width: 320px) and (max-width: 750px) {#comp-kmm9u2l4 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:left;--fontFamily:helvetica-w01-bold,helvetica-w02-bold,helvetica-lt-w10-bold,sans-serif;--letterSpacing:0.07em;--lineHeight:2.25em;--fontSize:14px;--fontWeight:normal }#comp-kmm9u2l4 p,#comp-kmm9u2l4 h1,#comp-kmm9u2l4 h2,#comp-kmm9u2l4 h3,#comp-kmm9u2l4 h4,#comp-kmm9u2l4 h5,#comp-kmm9u2l4 h6,#comp-kmm9u2l4 ul,#comp-kmm9u2l4 ol {font-family:helvetica-w01-bold,helvetica-w02-bold,helvetica-lt-w10-bold,sans-serif !important;font-size:14px !important;letter-spacing:0.07em !important;line-height:2.25 !important }#comp-kmma3g17 { --fontStyle:normal;--color:35,31,32;--alpha-color:1;--textAlign:left;--fontFamily:wfont_d56505_9a53f98a74d54a44820832500af6fcee,wf_9a53f98a74d54a44820832500,orig_sf_pro_display_semibold;--letterSpacing:0em;--lineHeight:2em;--fontSize:12px;--fontWeight:normal }#comp-kmma3g17 p,#comp-kmma3g17 h1,#comp-kmma3g17 h2,#comp-kmma3g17 h3,#comp-kmma3g17 h4,#comp-kmma3g17 h5,#comp-kmma3g17 h6,#comp-kmma3g17 ul,#comp-kmma3g17 ol { color:#231F20 !important;font-family:wfont_d56505_9a53f98a74d54a44820832500af6fcee,wf_9a53f98a74d54a44820832500,orig_sf_pro_display_semibold !important;font-size:12px !important;line-height:2 !important }#comp-kmma29ui { --lnw:1px;--brd:var(--color_12);--alpha-brd:0.22;transform-origin:center 0.5px }#comp-kjwul7q7 { --containerBackground:255,255,255;--bg:var(--color_15);--alpha-bg:0;--alpha-containerBackground:1 }#comp-kmm9soym { --brw:0px;--brd:var(--color_13);--bg:var(--color_11);--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:128,128,128 }#comp-kmma3fys { --brw:0px;--brd:var(--color_13);--bg:var(--color_11);--rd:0px;--shd:none;--alpha-brd:1;--alpha-bg:0;--boxShadowToggleOn-shd:none;--shc-mutated-brightness:128,128,128 }#comp-kjwul7q7 { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm9soym { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmma3fys { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmm9u2l4 { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmma3g17 { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmma29ui { --minViewportSize:320;--maxViewportSize:750 }}
        @media (min-width: 320px) and (max-width: 1000px) {#comp-kmxndj44 { --fontStyle:normal;--color:var(--color_15);--alpha-color:1;--textAlign:center;--fontFamily:wfont_d56505_25c24c04095041fc8c01754ad6393b8b,wf_25c24c04095041fc8c01754ad,orig_joyride;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:36px;--fontWeight:normal }#comp-kmxndj44 p,#comp-kmxndj44 h1,#comp-kmxndj44 h2,#comp-kmxndj44 h3,#comp-kmxndj44 h4,#comp-kmxndj44 h5,#comp-kmxndj44 h6,#comp-kmxndj44 ul,#comp-kmxndj44 ol { color:#181818 !important;font-size:36px !important }#comp-kmxndj44 { --minViewportSize:320;--maxViewportSize:1000 }}
        @media (min-width: 320px) and (max-width: 750px) {#comp-kmxndj44 { --fontStyle:normal;--color:0,0,0;--alpha-color:1;--textAlign:center;--fontFamily:wfont_d56505_25c24c04095041fc8c01754ad6393b8b,wf_25c24c04095041fc8c01754ad,orig_joyride;--letterSpacing:0em;--lineHeight:1.3em;--fontSize:20px;--fontWeight:normal }#comp-kmxndj44 p,#comp-kmxndj44 h1,#comp-kmxndj44 h2,#comp-kmxndj44 h3,#comp-kmxndj44 h4,#comp-kmxndj44 h5,#comp-kmxndj44 h6,#comp-kmxndj44 ul,#comp-kmxndj44 ol { color:#000000 !important;font-size:20px !important }#men9r { --bg:var(--color_12);--alpha-bg:0.27;--shc-mutated-brightness:116,115,115 }#comp-kmmcplmt { --bg:255,255,255;--alpha-bg:1 }#men9r { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmmcplmt { --minViewportSize:320;--maxViewportSize:750 }
            #comp-kmxndj44 { --minViewportSize:320;--maxViewportSize:750 }}
    </style></pages-css>
<div id="SITE_CONTAINER">
    <div id="main_MF"><div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region" aria-label="top of page"><span class="mHZSwn">top of page</span></div><div id="site-root"><div id="masterPage" class="masterPage">

                <div id="SITE_PAGES" class="JshATs SITE_PAGES">
                    <div id="men9r" class="P0dCOY men9r">
                        <div class="PJ4KCX" data-testid="page-bg"></div>
                        <div>

                            <div class="men9r-container" data-testid="responsive-container-content">
                                <div id="comp-kmmbcje0-pinned-layer" class="comp-kmmbcje0-pinned-layer big2ZD">
                                    <header id="comp-kmmbcje0" class="comp-kmmbcje0 S6Dcte comp-kmmbcje0-container">
                                        <section id="comp-k6gjwdd6" data-scope="comp-kmmbcje0" class="xuzjBY xuzjBY comp-k6gjwdd6-container undefined" data-testid="section-container" tabindex="-1">
                                            <div id="comp-kjwulflv" data-scope="comp-kmmbcje0" class="comp-kjwulflv">
                                                <div data-testid="svgRoot-comp-kjwulflv" class="aizuI7 TcoJIb R8rhQA WQ4fSJ comp-kjwulflv"><?xml version="1.0" encoding="UTF-8"?>
                                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="26.7 74.6 146.6 50.8" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="26.7 74.6 146.6 50.8" data-type="shape" role=presentation aria-hidden=true aria-labelledby="svgcid-u79xmd5megse"><title id="svgcid-u79xmd5megse"></title>
                                                        <g>
                                                            <path d="M173.3 74.6v14.1H26.7V74.6h146.6z"/>
                                                            <path d="M173.3 111.3v14.1H26.7v-14.1h146.6z"/>
                                                        </g>
                                                    </svg>
                                                </div></div>
                                            <div id="comp-kmf5ajqg" data-scope="comp-kmmbcje0" class="BaOVQ8 tz5f0K comp-kmf5ajqg" data-testid="richTextElement">
                                                <h2 class="font_2">
                                                    <a href="first-timers.html" target="_self">FIRST TIMERS</a>&nbsp; &nbsp; &nbsp;<a href="theworkout.html" target="_self">THE WORKOUT</a>&nbsp;&nbsp; &nbsp; <a href="/locations" target="_self">LOCATIONS</a> &nbsp; &nbsp; <a href="/membership" target="_self">MEMBERSHIP</a> &nbsp;&nbsp; &nbsp;OWN AN ISI&reg;</h2></div><div id="comp-kmf6curq" data-scope="comp-kmmbcje0" class="comp-kmf6curq Z5xE6X comp-kmf6curq-container"><div class="OSxohk"></div><div data-scope="comp-kmmbcje0" class="comp-kmxst89d gydiew" id="comp-kmxst89d" aria-disabled="false"><a data-testid="linkElement" href="/locations" target="_self" class="TFOeq0" aria-disabled="false">

                                                        <span class="kclxHl">START TRIAL</span></a></div></div><div id="comp-kmgm30vd" data-scope="comp-kmmbcje0" class="comp-kmgm30vd"><a data-testid="linkElement" href="/" target="_self" class="u9k3ts"><div data-testid="svgRoot-comp-kmgm30vd" class="aizuI7 TcoJIb comp-kmgm30vd"><?xml version="1.0" encoding="UTF-8"?>
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 -0.002 144.893 26.024" viewBox="0 -0.002 144.893 26.024" xmlns="http://www.w3.org/2000/svg" data-type="color" role=presentation aria-hidden=true aria-labelledby="svgcid-5sf6gq-j2fq0a"><defs><style>#comp-kmgm30vd svg [data-color="2"] {fill: #231F20;}</style></defs><title id="svgcid-5sf6gq-j2fq0a"></title>
                                                            <g>
                                                                <g>
                                                                    <path d="M5.52 0h3.25L3.25 26H0z" fill="#94e522" data-color="1"/>
                                                                    <path d="M16.18 0a2.1 2.1 0 0 1 1.74.8 2.22 2.22 0 0 1 .39 1.91l-1.26 6H13.8l1-4.86c.07-.37-.08-.55-.44-.55h-1.05a.59.59 0 0 0-.63.55l-1 4.66a.46.46 0 0 0 0 .33L15 14.65a3 3 0 0 1 .27 2.35L14 23.26a3.39 3.39 0 0 1-1.22 1.91 3.19 3.19 0 0 1-2.07.8h-3.3a2.08 2.08 0 0 1-1.74-.8 2.11 2.11 0 0 1-.39-1.91l1.26-6h3.25l-1 4.88c-.07.35.07.53.42.53h1.09a.6.6 0 0 0 .65-.53L12 17a.38.38 0 0 0 0-.33l-3.28-5.9a3.18 3.18 0 0 1-.29-2.31l1.21-5.75A3.35 3.35 0 0 1 10.86.8a3.15 3.15 0 0 1 2.07-.8z" fill="#94e522" data-color="1"/>
                                                                    <path d="M20.34 0h3.25l-5.52 26h-3.25z" fill="#94e522" data-color="1"/>
                                                                    <path d="M39.48 0l-.69 3.25h-4.87l-1.61 7.57H35l-.69 3.25h-2.7l-1.84 8.65h4.87L34 26h-8.16l5.52-26zm-13 25.42h7l.52-2.16h-4.87l2.07-9.73h2.7l.46-2.16h-2.71l1.84-8.66h4.86l.48-2.17h-7z" fill="#bcbdbf" data-color="2"/>
                                                                    <path d="M44.18 0l-4.83 22.72h4.87L43.53 26h-8.12l5.52-26zm-8.11 25.42h7l.48-2.16H38.7L43.53.54h-2.16z" fill="#bcbdbf" data-color="2"/>
                                                                    <path d="M50.5 0h3.25l-5.52 26H45zm-4.86 25.42h2.16L53.1.54h-2.16z" fill="#bcbdbf" data-color="2"/>
                                                                    <path d="M63.87 0l-.69 3.25h-2.71L55.64 26h-3.25l4.83-22.75h-2.7L55.21 0zm-8.7 2.71h2.71L53 25.42h2.17L60 2.71h2.7l.51-2.17h-7.57z" fill="#bcbdbf" data-color="2"/>
                                                                    <path d="M73.44 0l-.69 3.25h-4.87l-1.62 7.57H69l-.69 3.25h-2.74l-1.83 8.65h4.87L67.92 26H59.8l5.52-26zm-13 25.42h7l.56-2.16h-4.91l2.07-9.73h2.7l.46-2.16h-2.71l1.84-8.66h4.86l.47-2.17h-7z" fill="#bcbdbf" data-color="2"/>
                                                                    <path d="M83.55 0l-.69 3.25h-2.7L75.33 26h-3.25l4.83-22.75H74.2L74.89 0z" fill="#231f20" data-color="3"/>
                                                                    <path d="M91 0a2.13 2.13 0 0 1 1.75.8 2.25 2.25 0 0 1 .38 1.91l-1.38 6.5a5.88 5.88 0 0 1-1.95 3.23 4 4 0 0 1 .57 3.25L88.15 26H84.9l2.18-10.28a1.27 1.27 0 0 0-1.29-1.62h-.53L82.74 26h-3.25L85 0zm-4.52 10.82a1.94 1.94 0 0 0 1.27-.47 2 2 0 0 0 .71-1.14l1.16-5.41c.07-.37-.07-.55-.44-.55h-1.61L86 10.82z" fill="#231f20" data-color="3"/>
                                                                    <path d="M102.44 0l-3.36 26h-3.25l.42-3.25h-2.44l-1 3.25H89.6l7.68-26zm-7.66 19.49h1.88l1.46-11.3z" fill="#231f20" data-color="3"/>
                                                                    <path d="M106.05 0h3.25l-5.52 26h-3.25z" fill="#231f20" data-color="3"/>
                                                                    <path d="M120 0l-5.53 26h-3.16L111 14.06 108.49 26h-3.25l5.52-26H114l.26 11.37L116.71 0z" fill="#231f20" data-color="3"/>
                                                                    <path d="M121.4 0h3.25l-5.52 26h-3.25z" fill="#231f20" data-color="3"/>
                                                                    <path d="M135.29 0l-5.52 26h-3.16l-.25-11.91L123.83 26h-3.25l5.52-26h3.29l.25 11.37L132.06 0z" fill="#231f20" data-color="3"/>
                                                                    <path d="M142.7 0a2.1 2.1 0 0 1 1.74.8 2.22 2.22 0 0 1 .38 1.91l-1.25 6h-3.25l1-4.86c.07-.37-.08-.55-.44-.55h-1.09a.61.61 0 0 0-.64.55l-3.92 18.39c-.07.35.07.53.42.53h1.09a.6.6 0 0 0 .65-.53l1.73-8.12h-1.09l.69-3.25h4.34l-2.63 12.44a3.39 3.39 0 0 1-1.22 1.91 3.19 3.19 0 0 1-2.07.8h-3.25a2.11 2.11 0 0 1-1.75-.8 2.14 2.14 0 0 1-.38-1.91l4.36-20.55A3.3 3.3 0 0 1 137.38.8a3.15 3.15 0 0 1 2.07-.8z" fill="#231f20" data-color="3"/>
                                                                    <path d="M28.87 1.33a2.51 2.51 0 0 0-.93-.9 2.67 2.67 0 0 0-2.57 0 2.51 2.51 0 0 0-.93.9 2.36 2.36 0 0 0-.34 1.24 2.31 2.31 0 0 0 .34 1.24 2.62 2.62 0 0 0 .93.91 2.67 2.67 0 0 0 2.57 0 2.62 2.62 0 0 0 .93-.91 2.31 2.31 0 0 0 .34-1.24 2.36 2.36 0 0 0-.34-1.24zm-.38 2.27a2.21 2.21 0 0 1-.77.75 2.24 2.24 0 0 1-2.13 0 2.21 2.21 0 0 1-.77-.75 1.92 1.92 0 0 1-.28-1 2 2 0 0 1 .28-1 2.1 2.1 0 0 1 .77-.8 2.17 2.17 0 0 1 2.13 0 2.1 2.1 0 0 1 .77.74 2 2 0 0 1 .28 1 1.92 1.92 0 0 1-.28 1.06z" fill="#94e522" data-color="1"/>
                                                                    <path d="M27.12 2.83a.62.62 0 0 0 .35-.23.7.7 0 0 0 .12-.42.61.61 0 0 0-.22-.5.84.84 0 0 0-.59-.19h-1.12v2.17h.52v-.78h.41l.47.78h.58zM27 2.42a.44.44 0 0 1-.29.09h-.5v-.64h.5A.5.5 0 0 1 27 2a.33.33 0 0 1 .1.23.33.33 0 0 1-.1.19z" fill="#94e522" data-color="1"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div></a></div><div id="comp-kmqqj0cg" data-scope="comp-kmmbcje0" class="comp-kmqqj0cg"><div data-testid="svgRoot-comp-kmqqj0cg" class="aizuI7 TcoJIb WQ4fSJ comp-kmqqj0cg"><?xml version="1.0" encoding="UTF-8"?>
                                                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="44 84 112 32" viewBox="44 84 112 32" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true aria-labelledby="svgcid--u9tq71g3t5tq"><title id="svgcid--u9tq71g3t5tq"></title>
                                                        <g>
                                                            <path d="M156 84v6H44v-6h112z"/>
                                                            <path d="M156 110v6H96v-6h60z"/>
                                                        </g>
                                                    </svg>
                                                </div></div>
                                            <wix-dropdown-menu id="comp-kokfwcck" class="comp-kokfwcck BSjLjI R7lArd hidden-during-prewarmup" tabIndex="-1" dir="ltr" data-stretch-buttons-to-menu-width="true" data-same-width-buttons="false" data-num-items="7" data-menuborder-y="0" data-menubtn-border="0" data-ribbon-els="0" data-label-pad="0" data-ribbon-extra="0" data-dropalign="left">
                                                <nav class="l9EQj1" id="comp-kokfwccknavContainer" aria-label="Site">

                                                    <?php
                                                    //        echo get_field('header_nav', 'options');
                                                    get_template_part( 'nav' );
                                                    ?>

                                                    <div class="JdScD2" id="comp-kokfwcckdropWrapper" data-dropalign="left" data-dropdown-shown="false"><ul class="k8K0Wj" id="comp-kokfwcckmoreContainer"></ul></div>

                                                    <div style="display:none" id="comp-kokfwccknavContainer-hiddenA11ySubMenuIndication">Use tab to navigate through the menu items.</div></nav>

                                            </wix-dropdown-menu></section></header>
                                </div>



                                <main id="PAGE_SECTIONSmen9r" class="PAGE_SECTIONSmen9r c1rIl3" data-main-content-parent="true"><section id="comp-kmmbcu6n" class="comp-kmmbcu6n xuzjBY comp-kmmbcu6n-container undefined" data-testid="section-container" tabindex="-1"><div id="comp-kmmbd4x5" class="comp-kmmbd4x5 _xg6_p">



                                <footer id="comp-kmmbcjrq" class="comp-kmmbcjrq S6Dcte comp-kmmbcjrq-container"><section id="comp-k6gjwdge" data-scope="comp-kmmbcjrq" class="comp-k6gjwdge xuzjBY comp-k6gjwdge-container undefined" data-testid="section-container" tabindex="-1">
                                        <?php echo get_field('footer_html', 'options'); ?>


                                    </section>
                                </footer>

                                <div id="comp-kmmbck1f-pinned-layer" class="comp-kmmbck1f-pinned-layer big2ZD"><div id="comp-kmmbck1f" class="comp-kmmbck1f S6Dcte comp-kmmbck1f-container"><div id="comp-kjwul7q7" tabindex="0" class="KLO7MJ"><div id="overlay-comp-kjwul7q7" class="SaGcIp"></div><div id="container-comp-kjwul7q7" class="UjpP2K"><div class="AVLx_K"></div><div id="inlineContentParent-comp-kjwul7q7" class="RcfHS8"><div class="comp-kjwul7q7-overflow-wrapper RcfHS8" tabindex="0" data-testid="responsive-container-overflow"><div class="comp-kjwul7q7-container" data-testid="responsive-container-content"><div id="comp-kjwul8dc" data-scope="comp-kmmbck1f" class="comp-kjwul8dc"><div data-testid="svgRoot-comp-kjwul8dc" class="aizuI7 TcoJIb WQ4fSJ comp-kjwul8dc"><svg preserveAspectRatio="none" data-bbox="5.5 5.5 49 49" xmlns="http://www.w3.org/2000/svg" viewBox="5.5 5.5 49 49" role=presentation aria-hidden=true aria-labelledby="svgcid-9js7yk-muem0"><title id="svgcid-9js7yk-muem0"></title>
                                                                        <g>
                                                                            <path d="M54.5 47.9L36.5 30l18-17.9-6.6-6.6-17.9 18-17.9-18-6.6 6.6 18 17.9-18 17.9 6.6 6.6 17.9-18 17.9 18 6.6-6.6z"/>
                                                                        </g>
                                                                    </svg>
                                                                </div></div><div id="comp-kmm9soym" data-scope="comp-kmmbck1f" class="comp-kmm9soym Z5xE6X comp-kmm9soym-container"><div class="OSxohk"></div><div id="comp-kmm9u2l4" data-scope="comp-kmmbck1f" class="BaOVQ8 tz5f0K comp-kmm9u2l4" data-testid="richTextElement"><h2 class="font_2" style="font-size:28px;"><span style="font-size:28px;"><span style="letter-spacing:0em;"><span style="font-family:anton,sans-serif;"><a href="locations.html" target="_self"><span style="color:#231F20;">FIND YOUR</span><span class="color_11"> </span><span style="color:#94E522;">LOCATION</span></a></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="index.html" target="_self">HOME</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="first-timers.html" target="_self">FIRST TIMERS</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="theworkout.html" target="_self">THE WORKOUT</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="membership.html" target="_self">MEMBERSHIP</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="locations.html" target="_self">LOCATIONS</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><a href="https://isifranchise.com/" target="_self" rel="noreferrer noopener">OWN AN ISI</a></span></span></span></span></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;"><a href="https://shop.isielitetraining.com/" target="_blank" rel="noreferrer noopener"><span style="color:#231F20;"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;">SHOP ➔</span></span></span></span></a></h2>

                                                                    <h2 class="font_2" style="font-size:17px; line-height:2em;">
                                                                        <a href="https://isielitetraining.app/" target="_blank" rel="noreferrer noopener"><span style="font-size:17px;"><span style="font-family:wfont_76d905_23e86fa6ee9c40099dbc21bee6d8e653,wf_23e86fa6ee9c40099dbc21bee,orig_scania_sans_cy_headline_bold;"><span style="letter-spacing:0em;"><span style="color:#94E522;"><span style="text-decoration:underline;">MY ACCOUNT</span></span></span></span></span>
                                                                        </a></h2></div></div>



                                                            <div id="comp-kmma3fys" data-scope="comp-kmmbck1f" class="comp-kmma3fys Z5xE6X comp-kmma3fys-container"><div class="OSxohk"></div><div id="comp-kmma3g17" data-scope="comp-kmmbck1f" class="BaOVQ8 tz5f0K comp-kmma3g17" data-testid="richTextElement"><h2 class="font_2"><span><a href="first-timers.html" target="_self">ABOUT</a></span></h2>

                                                                    <h2 class="font_2"><span><a href="contact-isi.html" target="_self">CONTACT</a></span></h2>

                                                                    <h2 class="font_2"><span><a href="blank-2.html" target="_self">FAQ&#39;S</a></span></h2>

                                                                    <h2 class="font_2"><span><a href="travel-workouts.html" target="_self">TRAVEL WORKOUTS</a></span></h2></div><div id="comp-kmma29ui" class="comp-kmma29ui aVng1S" data-scope="comp-kmmbck1f"></div><div id="comp-kmmai23v" data-scope="comp-kmmbck1f" class="comp-kmmai23v"><a data-testid="linkElement" href="/" target="_self" class="u9k3ts"><div data-testid="svgRoot-comp-kmmai23v" class="aizuI7 TcoJIb comp-kmmai23v"><?xml version="1.0" encoding="UTF-8"?>
                                                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 -0.002 144.893 26.024" viewBox="0 -0.002 144.893 26.024" xmlns="http://www.w3.org/2000/svg" data-type="color" role=presentation aria-hidden=true aria-labelledby="svgcid-h878qvjmkdb0"><defs><style>#comp-kmmai23v svg [data-color="2"] {fill: #231F20;}
                                                                                        #comp-kmmai23v svg [data-color="3"] {fill: #231F20;}</style></defs><title id="svgcid-h878qvjmkdb0"></title>
                                                                                <g>
                                                                                    <g>
                                                                                        <path d="M5.52 0h3.25L3.25 26H0z" fill="#94e522" data-color="1"/>
                                                                                        <path d="M16.18 0a2.1 2.1 0 0 1 1.74.8 2.22 2.22 0 0 1 .39 1.91l-1.26 6H13.8l1-4.86c.07-.37-.08-.55-.44-.55h-1.05a.59.59 0 0 0-.63.55l-1 4.66a.46.46 0 0 0 0 .33L15 14.65a3 3 0 0 1 .27 2.35L14 23.26a3.39 3.39 0 0 1-1.22 1.91 3.19 3.19 0 0 1-2.07.8h-3.3a2.08 2.08 0 0 1-1.74-.8 2.11 2.11 0 0 1-.39-1.91l1.26-6h3.25l-1 4.88c-.07.35.07.53.42.53h1.09a.6.6 0 0 0 .65-.53L12 17a.38.38 0 0 0 0-.33l-3.28-5.9a3.18 3.18 0 0 1-.29-2.31l1.21-5.75A3.35 3.35 0 0 1 10.86.8a3.15 3.15 0 0 1 2.07-.8z" fill="#94e522" data-color="1"/>
                                                                                        <path d="M20.34 0h3.25l-5.52 26h-3.25z" fill="#94e522" data-color="1"/>
                                                                                        <path d="M39.48 0l-.69 3.25h-4.87l-1.61 7.57H35l-.69 3.25h-2.7l-1.84 8.65h4.87L34 26h-8.16l5.52-26zm-13 25.42h7l.52-2.16h-4.87l2.07-9.73h2.7l.46-2.16h-2.71l1.84-8.66h4.86l.48-2.17h-7z" fill="#bcbdbf" data-color="2"/>
                                                                                        <path d="M44.18 0l-4.83 22.72h4.87L43.53 26h-8.12l5.52-26zm-8.11 25.42h7l.48-2.16H38.7L43.53.54h-2.16z" fill="#bcbdbf" data-color="2"/>
                                                                                        <path d="M50.5 0h3.25l-5.52 26H45zm-4.86 25.42h2.16L53.1.54h-2.16z" fill="#bcbdbf" data-color="2"/>
                                                                                        <path d="M63.87 0l-.69 3.25h-2.71L55.64 26h-3.25l4.83-22.75h-2.7L55.21 0zm-8.7 2.71h2.71L53 25.42h2.17L60 2.71h2.7l.51-2.17h-7.57z" fill="#bcbdbf" data-color="2"/>
                                                                                        <path d="M73.44 0l-.69 3.25h-4.87l-1.62 7.57H69l-.69 3.25h-2.74l-1.83 8.65h4.87L67.92 26H59.8l5.52-26zm-13 25.42h7l.56-2.16h-4.91l2.07-9.73h2.7l.46-2.16h-2.71l1.84-8.66h4.86l.47-2.17h-7z" fill="#bcbdbf" data-color="2"/>
                                                                                        <path d="M83.55 0l-.69 3.25h-2.7L75.33 26h-3.25l4.83-22.75H74.2L74.89 0z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M91 0a2.13 2.13 0 0 1 1.75.8 2.25 2.25 0 0 1 .38 1.91l-1.38 6.5a5.88 5.88 0 0 1-1.95 3.23 4 4 0 0 1 .57 3.25L88.15 26H84.9l2.18-10.28a1.27 1.27 0 0 0-1.29-1.62h-.53L82.74 26h-3.25L85 0zm-4.52 10.82a1.94 1.94 0 0 0 1.27-.47 2 2 0 0 0 .71-1.14l1.16-5.41c.07-.37-.07-.55-.44-.55h-1.61L86 10.82z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M102.44 0l-3.36 26h-3.25l.42-3.25h-2.44l-1 3.25H89.6l7.68-26zm-7.66 19.49h1.88l1.46-11.3z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M106.05 0h3.25l-5.52 26h-3.25z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M120 0l-5.53 26h-3.16L111 14.06 108.49 26h-3.25l5.52-26H114l.26 11.37L116.71 0z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M121.4 0h3.25l-5.52 26h-3.25z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M135.29 0l-5.52 26h-3.16l-.25-11.91L123.83 26h-3.25l5.52-26h3.29l.25 11.37L132.06 0z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M142.7 0a2.1 2.1 0 0 1 1.74.8 2.22 2.22 0 0 1 .38 1.91l-1.25 6h-3.25l1-4.86c.07-.37-.08-.55-.44-.55h-1.09a.61.61 0 0 0-.64.55l-3.92 18.39c-.07.35.07.53.42.53h1.09a.6.6 0 0 0 .65-.53l1.73-8.12h-1.09l.69-3.25h4.34l-2.63 12.44a3.39 3.39 0 0 1-1.22 1.91 3.19 3.19 0 0 1-2.07.8h-3.25a2.11 2.11 0 0 1-1.75-.8 2.14 2.14 0 0 1-.38-1.91l4.36-20.55A3.3 3.3 0 0 1 137.38.8a3.15 3.15 0 0 1 2.07-.8z" fill="#ffffff" data-color="3"/>
                                                                                        <path d="M28.87 1.33a2.51 2.51 0 0 0-.93-.9 2.67 2.67 0 0 0-2.57 0 2.51 2.51 0 0 0-.93.9 2.36 2.36 0 0 0-.34 1.24 2.31 2.31 0 0 0 .34 1.24 2.62 2.62 0 0 0 .93.91 2.67 2.67 0 0 0 2.57 0 2.62 2.62 0 0 0 .93-.91 2.31 2.31 0 0 0 .34-1.24 2.36 2.36 0 0 0-.34-1.24zm-.38 2.27a2.21 2.21 0 0 1-.77.75 2.24 2.24 0 0 1-2.13 0 2.21 2.21 0 0 1-.77-.75 1.92 1.92 0 0 1-.28-1 2 2 0 0 1 .28-1 2.1 2.1 0 0 1 .77-.8 2.17 2.17 0 0 1 2.13 0 2.1 2.1 0 0 1 .77.74 2 2 0 0 1 .28 1 1.92 1.92 0 0 1-.28 1.06z" fill="#94e522" data-color="1"/>
                                                                                        <path d="M27.12 2.83a.62.62 0 0 0 .35-.23.7.7 0 0 0 .12-.42.61.61 0 0 0-.22-.5.84.84 0 0 0-.59-.19h-1.12v2.17h.52v-.78h.41l.47.78h.58zM27 2.42a.44.44 0 0 1-.29.09h-.5v-.64h.5A.5.5 0 0 1 27 2a.33.33 0 0 1 .1.23.33.33 0 0 1-.1.19z" fill="#94e522" data-color="1"/>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div></a></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div><div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role="region" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div></div></div>


<style>
    wix-dropdown-menu#comp-kokfwcck {
        visibility: visible !important;
    }
    .vDnwi4 .foFAdY {
        line-height: 30px;
    }
    wix-dropdown-menu#comp-kokfwcck >nav>ul>li {
        margin-right: 14px;
    }
    #comp-kmmbck1f-pinned-layer{
        z-index: 9999999;
    }
</style>

<?php echo get_field('body_end', 'option'); ?>

</body>

</html>

