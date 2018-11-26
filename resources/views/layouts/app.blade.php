<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>-->

    <!-- This site is optimized with the Yoast SEO Premium plugin v8.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="HackerRank is a technology hiring platform that is the standard for assessing developer skills for over 1,000 companies around the world."/>
    <link rel="canonical" href="https://www.hackerrank.com/about-us/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="About Us - HackerRank" />
    <meta property="og:description" content="HackerRank is a technology hiring platform that is the standard for assessing developer skills for over 1,000 companies around the world." />
    <meta property="og:url" content="https://www.hackerrank.com/about-us/" />
    <meta property="og:site_name" content="HackerRank" />
    <meta property="article:publisher" content="https://www.facebook.com/hackerrank/" />
    <meta property="og:image" content="https://www.hackerrank.com/wp-content/uploads/2018/08/hackerrank_share-image_4_aboutus.png" />
    <meta property="og:image:secure_url" content="https://www.hackerrank.com/wp-content/uploads/2018/08/hackerrank_share-image_4_aboutus.png" />
    <meta property="og:image:width" content="1400" />
    <meta property="og:image:height" content="717" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="HackerRank is a technology hiring platform that is the standard for assessing developer skills for over 1,000 companies around the world." />
    <meta name="twitter:title" content="About Us - HackerRank" />
    <meta name="twitter:site" content="@hackerrank" />
    <meta name="twitter:image" content="https://www.hackerrank.com/wp-content/uploads/2018/08/hackerrank_share-image_4_aboutus.png" />
    <meta name="twitter:creator" content="@hackerrank" />
    <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"Organization","url":"https:\/\/www.hackerrank.com\/","sameAs":["https:\/\/www.facebook.com\/hackerrank\/","https:\/\/www.instagram.com\/hackerrank\/","https:\/\/www.linkedin.com\/company\/hackerrank","https:\/\/twitter.com\/hackerrank"],"@id":"https:\/\/www.hackerrank.com\/#organization","name":"HackerRank","logo":"https:\/\/marketing.hackerrank.com\/wp-content\/uploads\/2018\/08\/hackerrank_logo.png"}</script>
    <!-- / Yoast SEO Premium plugin. -->
    
    <link rel='dns-prefetch' href='//www.hackerrank.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="HackerRank &raquo; Feed" href="https://www.hackerrank.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="HackerRank &raquo; Comments Feed" href="https://www.hackerrank.com/comments/feed/" />
            <script type="text/javascript">
                window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.hackerrank.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
                !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
            </script>
            <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='fl-builder-layout-800-css'  href='https://www.hackerrank.com/wp-content/uploads/bb-plugin/cache/800-layout.css?ver=928a4acd22805416bf03e8f8ef1d17d8' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='https://www.hackerrank.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
    <link rel='stylesheet' id='hackerrank-custom-style-css'  href='https://www.hackerrank.com/wp-content/themes/hackerrank/assets/css/style.css?ver=1542257864' type='text/css' media='all' />
    <link rel='stylesheet' id='hackerrank-style-css'  href='https://www.hackerrank.com/wp-content/themes/hackerrank/style.css?ver=1535394332' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='https://www.hackerrank.com/wp-content/plugins/bbpowerpack/assets/css/animate.min.css?ver=3.5.1' type='text/css' media='all' />
    <script type='text/javascript' src='https://www.hackerrank.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='https://www.hackerrank.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.hackerrank.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.hackerrank.com/wp-includes/wlwmanifest.xml" /> 
    <meta name="generator" content="WordPress 4.9.8" />
    <link rel='shortlink' href='https://www.hackerrank.com/?p=800' />
            <style>
            form[class*="fl-builder-pp-"] .fl-lightbox-header h1:before {
                content: "PowerPack ";
                position: relative;
                display: inline-block;
                margin-right: 5px;
            }
            </style>
                    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
            <link rel="icon" href="https://www.hackerrank.com/wp-content/uploads/2018/07/hackerrank-favicon.png" sizes="32x32" />
    <link rel="icon" href="https://www.hackerrank.com/wp-content/uploads/2018/07/hackerrank-favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://www.hackerrank.com/wp-content/uploads/2018/07/hackerrank-favicon.png" />
    <meta name="msapplication-TileImage" content="https://www.hackerrank.com/wp-content/uploads/2018/07/hackerrank-favicon.png" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45092266-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-969548168');

      gtag('config', 'UA-45092266-1');

      gtag('config', 'UA-45092266-11', {
      'custom_map': {'dimension1': 'h_r',
                    'dimension2': 'h_l',
                    'dimension3': 'h_v',
                    'dimension4': 'Event Category 2',
                    'dimension5': 'Event File Type'}
      });

      gtag('config', 'UA-45092266-16', {
      'custom_map': {'dimension1': 'h_r',
                    'dimension2': 'h_l',
                    'dimension3': 'h_v',
                    'dimension4': 'Event Category 2',
                    'dimension5': 'Event File Type'}
      });

      gtag('event', 'internal_referrer_dimension', {
        'h_r': document.documentElement.dataset['h_r'] ? document.documentElement.dataset['h_r'] : '', 
        'h_l': document.documentElement.dataset['h_l'] ? document.documentElement.dataset['h_l'] : '', 
        'h_v': document.documentElement.dataset['h_v'] ? document.documentElement.dataset['h_v'] :  ''
      });
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '265287730544127'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=265287730544127&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code --><!-- Hotjar Tracking Code -->
    <script>
    (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:532110};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script><!-- LinkedIn Insight Pixel -->
    <script type="text/javascript">
    _linkedin_data_partner_id = "47770";
    </script><script type="text/javascript">
    (function(){var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);})();
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=47770&fmt=gif" />
    </noscript><!-- Twitter universal website tag code -->
    <script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init','nxpu7');
    twq('track','PageView');
    </script>
    <!-- End Twitter universal website tag code --><!-- Marketo Munchkin code-->

    <script type="text/javascript">
    (function() {
      var didInit = false;
      function initMunchkin() {
        if(didInit === false) {
          didInit = true;
          Munchkin.init('487-WAY-049');
        }
      }
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//munchkin.marketo.net/munchkin.js';
      s.onreadystatechange = function() {
        if (this.readyState == 'complete' || this.readyState == 'loaded') {
          initMunchkin();
        }
      };
      s.onload = initMunchkin;
      document.getElementsByTagName('head')[0].appendChild(s);
    })();
    </script><!-- start Mixpanel -->
    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
    0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("bcb75af88bccc92724ac5fd79271e1ff");</script>
    <!-- end Mixpanel -->      <!-- jsCookies -->
            <script type="text/javascript">
          if(function(factory){if("function"==typeof define&&define.amd)define(factory);else if("object"==typeof exports)module.exports=factory();else{var OldCookies=window.Cookies,api=window.Cookies=factory();api.noConflict=function(){return window.Cookies=OldCookies,api}}}(function(){function extend(){for(var i=0,result={};i<arguments.length;i++){var attributes=arguments[i];for(var key in attributes)result[key]=attributes[key]}return result}function init(converter){function api(key,value,attributes){var result;if("undefined"!=typeof document){if(arguments.length>1){if(attributes=extend({path:"/"},api.defaults,attributes),"number"==typeof attributes.expires){var expires=new Date;expires.setMilliseconds(expires.getMilliseconds()+864e5*attributes.expires),attributes.expires=expires}try{result=JSON.stringify(value),/^[\{\[]/.test(result)&&(value=result)}catch(e){}return value=converter.write?converter.write(value,key):encodeURIComponent(String(value)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),key=encodeURIComponent(String(key)),key=key.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),key=key.replace(/[\(\)]/g,escape),document.cookie=[key,"=",value,attributes.expires&&"; expires="+attributes.expires.toUTCString(),attributes.path&&"; path="+attributes.path,attributes.domain&&"; domain="+attributes.domain,attributes.secure?"; secure":""].join("")}key||(result={});for(var cookies=document.cookie?document.cookie.split("; "):[],rdecode=/(%[0-9A-Z]{2})+/g,i=0;i<cookies.length;i++){var parts=cookies[i].split("="),cookie=parts.slice(1).join("=");'"'===cookie.charAt(0)&&(cookie=cookie.slice(1,-1));try{var name=parts[0].replace(rdecode,decodeURIComponent);if(cookie=converter.read?converter.read(cookie,name):converter(cookie,name)||cookie.replace(rdecode,decodeURIComponent),this.json)try{cookie=JSON.parse(cookie)}catch(e){}if(key===name){result=cookie;break}key||(result[name]=cookie)}catch(e){}}return result}}return api.set=api,api.get=function(key){return api(key)},api.getJSON=function(){return api.apply({json:!0},[].slice.call(arguments))},api.defaults={},api.remove=function(key,attributes){api(key,"",extend(attributes,{expires:-1}))},api.withConverter=init,api}return init(function(){})}),"undefined"==typeof jsCookies&&"undefined"!=typeof Cookies)var jsCookies={get:function(c_name){return Cookies.get(c_name)},set:function(c_name,value,expiredays,expirehours,expiremins,expiresecs,options){var exdate=new Date;exdate.setDate(exdate.getDate()+(expiredays||0)),exdate.setHours(exdate.getHours()+(expirehours||0)),exdate.setMinutes(exdate.getMinutes()+(expiremins||0)),exdate.setSeconds(exdate.getSeconds()+(expiresecs||0));var set_expire_time=!(null==expiredays&&null==expiresecs&&null==expiremins&&null==expirehours),config=options||{};set_expire_time&&(config.expires=exdate),Cookies.set(c_name,value,config)},check:function(c_name){return!!Cookies.get(c_name)},destroy:function(c_name){Cookies.remove(c_name)}};
    </script>
          <!-- end jsCookies --><!-- hr_metrics -->
      <script type="text/javascript">
    !function(obj){window.hr_metrics=obj,obj.externalService=function(event_type,event_value,attrs,service){attrs="undefined"!=typeof attrs?attrs:{},attrs.session_id=jsCookies.get("session_id"),service="undefined"!=typeof service?service:"mixpanel:heap",external_services=service.split(":"),-1!=jQuery.inArray("mixpanel",external_services)&&mixpanel.push([event_type,event_value,attrs]),-1!=jQuery.inArray("heap",external_services)&&"track"==event_type&&heap.track(event_value,attrs)},obj.track=function(event_name,event_value,attrs){metrics_endpoint="https://metrics.hackerrank.com/metrics",window.HR&&window.HR.development&&(metrics_endpoint="/metrics"),common_attrs={session_id:jsCookies.get("session_id")},attrs=jQuery.extend({},attrs,common_attrs),jQuery.ajax({type:"POST",url:metrics_endpoint,crossDomain:!0,xhrFields:{withCredentials:!0},data:{event_name:event_name,event_value:event_value,uid:jsCookies.get("hackerrank_mixpanel_token"),uid_token:jsCookies.get("metrics_user_identifier"),params:attrs}})},obj.track_dwell_time=function(pathname){if(window.navigation_data&&window.navigation_data.page==pathname){var time_now=(new Date).getTime();hr_metrics.track("DwellTime",pathname,{attribute7:parseInt((time_now-(window.navigation_data.time||time_now))/1e3)})}},obj.set_navigation_data=function(pathname){window.navigation_data={page:pathname||document.location.pathname,time:(new Date).getTime()}},obj.set_scrolling_data=function(){var _pathname=document.location.pathname,_window_height=$(window).height(),_document_height=$(document).height(),_scrollable_height=_document_height-_window_height+1,_scrolled_height=$(document).scrollTop(),_scrolled_percentage=parseInt(100*_scrolled_height/_scrollable_height);(!hr_metrics.scroll_data||hr_metrics.scroll_data.pathname!=_pathname||hr_metrics.scroll_data.scrolled_percentage<_scrolled_percentage||hr_metrics.scroll_data.scrolled_height<_scrolled_height)&&(hr_metrics.scroll_data={pathname:_pathname,scrollable_height:_scrollable_height,scrolled_height:_scrolled_height,scrolled_percentage:_scrolled_percentage,window_height:_window_height,document_percentage:100*(_window_height+_scrolled_height)/(_document_height+1),scroll_tracked:!1})}}(window.hr_metrics||{}),function(){"function"==typeof $&&$(document).ready(function(){var _pathname=document.location.pathname;if(hr_metrics.track("PageLoad",_pathname+document.location.search,{attribute1:_pathname}),hr_metrics.track_dwell_time&&(hr_metrics.track_dwell_time(_pathname),hr_metrics.set_navigation_data()),$(window).on("beforeunload",function(){var _pathname=document.location.pathname;hr_metrics.track("PageClose",_pathname+document.location.search,{attribute2:_pathname}),hr_metrics.track_dwell_time&&hr_metrics.track_dwell_time(_pathname),window.HR&&window.HR.time_to_solve&&window.HR.time_to_solve.finish&&window.HR.time_to_solve.finish(),window.typingTimeout&&(window.clearTimeout(window.typingTimeout),window.triggerTypingEvent&&window.typingEventEnabled&&window.triggerTypingEvent())}),window.HR.pause_event=function(){window.HR&&window.HR.time_to_solve&&window.HR.time_to_solve.pause&&window.HR.time_to_solve.pause()},window.HR.unpause_event=function(){window.HR&&window.HR.time_to_solve&&window.HR.time_to_solve.unpause&&window.HR.time_to_solve.unpause()},window.HR.throttled_time_to_solve_unpause=_.throttle(function(){window.HR&&window.HR.time_to_solve&&(window.HR.time_to_solve.paused&&window.HR.time_to_solve.unpause(),window.HR.time_to_solve.update(),window.HR.time_to_solve_timeout&&window.clearTimeout(window.HR.time_to_solve_timeout),window.HR.time_to_solve_timeout=window.setTimeout(function(){window.HR&&window.HR.pause_event&&window.HR.pause_event()},3e4))},2e3),$(window).on("blur",function(){window.HR.pause_event()}),$(window).on("focus",function(){window.HR.unpause_event()}),$(window).on("keydown mousemove scroll",function(){window.HR.throttled_time_to_solve_unpause()}),"function"==typeof _){var throttled_scroll=_.throttle(function(){hr_metrics.set_scrolling_data(),hr_metrics.scroll_data&&!hr_metrics.scroll_data.scroll_tracked&&(hr_metrics.scroll_data.scroll_tracked=!0,hr_metrics.track("PageScroll",hr_metrics.scroll_data.pathname+document.location.search,{attribute1:hr_metrics.scroll_data.pathname,attribute2:hr_metrics.scroll_data.window_height,attribute7:hr_metrics.scroll_data.scrolled_percentage,attribute8:hr_metrics.scroll_data.scrolled_height,attribute9:hr_metrics.scroll_data.scrollable_height,attribute10:hr_metrics.scroll_data.document_percentage}))},2e3),throttled_data_set=_.throttle(hr_metrics.set_scrolling_data,200);$(window).on("scroll",function(){throttled_data_set(),throttled_scroll()}),$("body,html").on("scroll",function(){throttled_data_set(),throttled_scroll()})}})}();
    </script>
</head>
<body>
        <nav class="navbar navbar-expand-md navbar-light bg-primary fixed-top" {{-- style="background-color: #e3f2fd; --}}">
                <div class="container">
                <a class="mr-4 text-white" href="{{ url('/') }}" style="font-size: 20px"><b>NETIJEN</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                                  Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="NavbarDropdown">
                                
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='1')}}" >Story</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='2')}}">Hobby</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='3')}}" >Games</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='4')}}">Entertainment</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='5')}}" >Female</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='6')}}">Tech</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='7')}}" >Automotive</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='8')}}">Sports</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='9')}}" >Food & Drink</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='10')}}">Travel</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='7')}}" >News</a>
                                
                                </div>
                              </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link mr-3" href="{{ route('home.index') }}" style="font-size: 16px">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3" href="{{ route('post.create') }}" style="font-size: 16px">{{ __('Write a Blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3" href="{{ route('post.index') }}" style="font-size: 16px">Posts</a>
                            </li>
                        @endguest
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size: 16px">{{ __('Login') }}</a>
                            </li>  
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}" style="font-size: 16px">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                                  Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="NavbarDropdown">
                                    {{-- <a href="{{ route('post.edit', $post)}}">Edit</a> --}}
                                <form action="" method="get">
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='1')}}">Story</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='2')}}">Hobby</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='3')}}">Games</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='4')}}">Entertainment</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='5')}}">Female</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='6')}}">Tech</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='7')}}">Automotive</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='8')}}">Sports</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='9')}}">Food & Drink</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='10')}}">Travel</a>
                                    <a class="dropdown-item" href="{{route('kategori.search', $category='7')}}">News</a>
                                  {{-- <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a> --}}
                                </form>
                                </div>
                              </li>
                            {{-- <li class="nav-item">
                                <img src="{{ asset('storage/'.auth()->user()->avatar)}}" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px">
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" nav-link dropdown-toggle ml-4 mr-4" style="font-size: 16px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="nav-link dropdown-item" href="{{ route('user.edit') }}">{{ __('Edit Profile') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <form class="form-inline" action="{{route('post.cari')}}" method="get">
                                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search Username" aria-label="Search">
                                <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br><br>
        <main class="py-4">
            @include('layouts.partials._alerts')
            @yield('content')
        </main>
        <br><br><br><br><br>
        <footer class="bg-black small text-center text-dark">
                  <div class="container" style="font-size: 16px">
                    Copyright &copy; NETIJEN 2018
                  </div>
                </footer>
                <br><br>
</body>
</html>
