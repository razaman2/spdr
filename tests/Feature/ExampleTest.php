<?php

    namespace Tests\Feature;

    use Tests\TestCase;

    class ExampleTest extends TestCase
    {
        /**
         * A basic test example.
         * @return void
         */
        public function testBasicTest() {

            $response = $this->get('/');

            $response->assertStatus(200);
        }

        /**
         * @test
         */
        public function spdr() {

            $document = '
<!DOCTYPE HTML>


        <html lang="en">


            <head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>


    <meta name="keywords" content="SPDR� S&amp;P 500� ETF Trust, SPY, Equity, US78462F1030, 78462F103, SPY US"/>
    <meta name="description" content="The SPDR� S&amp;P 500� ETF Trust seeks to provide investment results that, before expenses, correspond generally to the price and yield..."/>

    <link rel="canonical" href="https://www.ssga.com/us/en/institutional/etfs/funds/spdr-sp-500-etf-trust-spy"/>








<meta name="viewport" content="width=device-width, initial-scale=1"/>




<link rel="stylesheet" href="/etc.clientlibs/ssmp-fund/clientlibs/clientlib-site/ssmp-fund-global.min.css" type="text/css">






<script>
    ssmpConfig = {
        initOnLoad: true,
        showBackground : false,
        clrp: {
            location: "us",
            language: "en",
            role: "individual",
            product: "etfs"
        },
        author: false
    };

</script>






        <meta name="country" content="us"/>
        <meta name="language" content="en"/>
        <meta name="role" content="individual"/>
        <meta name="product" content="etfs"/>
        <script type="text/javascript">
            digitalData = {
                page : {
                    pageInfo : {
                        pageName: "etfs:us:en:individual:funds:SPY: SPDR� S&amp;P 500� ETF Trust",
                        aemPageTitle: "SPY: SPDR� S&amp;P 500� ETF Trust",
                        siteSection : "funds"
                    },

                    attributes : {
                        country : "us",
                        language : "en",
                        role : "individual",
                        productCategory: "etfs"
                    },

                    productInfo : {
                        productName : "SPY: SPDR� S&amp;P 500� ETF Trust",
                        productType : "etfs",
                        assetClass : "Equity",
                        ticker : "SPY",
                        ISIN : ""
                    }
                }
            };
        </script>




    <meta name="ticker" content="SPY"/>
    <meta name="assetClass" content="Equity"/>




    <meta name="endecaTitle" content="SPDR� S&amp;amp;P 500� ETF Trust (SPY)"/>
    <meta property="og:title" content="SPY: SPDR� S&amp;P 500� ETF Trust"/>
    <meta property="og:description" content="The SPDR� S&amp;P 500� ETF Trust seeks to provide investment results that, before expenses, correspond generally to the price and yield..."/>

    <meta name="template" content="fund-page"/>


    <script src="//assets.adobedtm.com/e0be1816c5d4686552aeb5e9bbb92e29e8ab2d29/satelliteLib-cdfa686c5717d8971482d2ca6e9f950a5ad4fd11.js"></script>









    <title>SPY: SPDR� S&amp;P 500� ETF Trust</title>

  <script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"","rua.cook":"false","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false"}]);</script>
  <script>!function(){function o(n,i){if(n&&i)for(var r in i)i.hasOwnProperty(r)&&(void 0===n[r]?n[r]=i[r]:n[r].constructor===Object&&i[r].constructor===Object?o(n[r],i[r]):n[r]=i[r])}try{var n=decodeURIComponent("");if(n.length>0&&window.JSON&&"function"==typeof window.JSON.parse){var i=JSON.parse(n);void 0!==window.BOOMR_config?o(window.BOOMR_config,i):window.BOOMR_config=i}}catch(r){window.console&&"function"==typeof window.console.error&&console.error("mPulse: Could not parse configuration",r)}}();</script>
  <script>!function(e){var a="https://s.go-mpulse.net/boomerang/",t="addEventListener";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,a="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="M8BXQ-HMZ27-V4Q2W-Q5HZQ-2TASL",function(){function n(a){e.BOOMR_onload=a&&a.timeStamp||(new Date).getTime()}if(!e.BOOMR||!e.BOOMR.version&&!e.BOOMR.snippetExecuted){e.BOOMR=e.BOOMR||{},e.BOOMR.snippetExecuted=!0;var i,o,r,_=document.createElement("iframe");if(e[t])e[t]("load",n,!1);else if(e.attachEvent)e.attachEvent("onload",n);_.src="javascript:void(0)",_.title="",_.role="presentation",(_.frameElement||_).style.cssText="width:0;height:0;border:0;display:none;",r=document.getElementsByTagName("script")[0],r.parentNode.insertBefore(_,r);try{o=_.contentWindow.document}catch(O){i=document.domain,_.src="javascript:var d=document.open();d.domain=\'"+i+"\';void(0);",o=_.contentWindow.document}o.open()._l=function(){var e=this.createElement("script");if(i)this.domain=i;e.id="boomr-if-as",e.src=a+"M8BXQ-HMZ27-V4Q2W-Q5HZQ-2TASL",BOOMR_lstart=(new Date).getTime(),this.body.appendChild(e)},o.write("<bo"+\'dy onload="document._l();">\'),o.close()}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var a=""=="true"?1:0,t="",n="mdzlaznyglprkxsv6caq-f-c7ed95403-clientnsv4-s.akamaihd.net",i={"ak.v":25,"ak.cp":"783392","ak.ai":parseInt("518508",10),"ak.ol":"0","ak.cr":18,"ak.ipv":4,"ak.proto":"","ak.rid":"379e109a","ak.r":32194,"ak.a2":a,"ak.m":"dsca","ak.n":"essl","ak.bpcip":"96.242.176.0","ak.cport":49443,"ak.gh":"23.43.58.77","ak.quicv":"","ak.tlsv":"tls1.2","ak.0rtt":"","ak.csrc":"-","ak.acc":"reno","ak.t":"1582690433"};if(""!==t)i["ak.ruds"]=t;var o={i:!1,av:function(a){var t="http.initiator";if(a&&(!a[t]||"spa_hard"===a[t]))i["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(i)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:i,akDNSPreFetchDomain:n,init:function(){if(!o.i){var e=BOOMR.subscribe;e("before_beacon",o.av,null,null),e("onbeacon",o.rv,null,null),o.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script></head>

            <body class="fundpage page basicpage fund-page fund-etfs">


					<div id="ssmp_svgfiles">
                	    <?xml version="1.0" encoding="utf-8" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="0 0 256 256" id="caret-down" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M25 89l103 77 102-77"/></symbol><symbol viewBox="0 0 8 8" id="chart-dot" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h8v8H0z"/></symbol><symbol viewBox="0 0 256 256" id="close" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M25 230L230 25M25 25l205 205"/></symbol><symbol id="download" viewBox="0 0 20 20" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style/><defs><path id="adSVGID_1_" d="M1 19v-1h18v1H1zM15.8 8.5l.8.8-6.3 6.5L4 9.3l.8-.8 5 5.2V1h1.1v12.6l4.9-5.1z"/></defs><g clip-path="url(#adSVGID_2_)"><defs><path id="adSVGID_3_" d="M-5-5h30v30H-5z"/></defs><path clip-path="url(#adSVGID_4_)" d="M-4-4h28v28H-4z"/></g></symbol><symbol id="download-blue" viewBox="0 0 20 20" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style/><defs><path id="aeSVGID_1_" d="M1 19v-1h18v1H1zM15.8 8.5l.8.8-6.3 6.5L4 9.3l.8-.8 5 5.2V1h1.1v12.6l4.9-5.1z"/></defs><g clip-path="url(#aeSVGID_2_)"><defs><path id="aeSVGID_3_" d="M-5-5h30v30H-5z"/></defs><path clip-path="url(#aeSVGID_4_)" d="M-4-4h28v28H-4z"/></g></symbol><symbol viewBox="0 0 18 18" id="external-link" xmlns="http://www.w3.org/2000/svg"><path d="M16.6 1.2H2.8v3.1h8.8L.6 15.2l2.2 2.2 11-11v8.8h2.8z"/></symbol><symbol viewBox="0 0 256 256" id="hamburger" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M25 230h205M25 128h205m0-103H25"/></symbol><symbol id="icon-sort" viewBox="0 0 9 11" xmlns="http://www.w3.org/2000/svg"><defs><style>.ahcls-1{fill:#788e82}</style></defs><path class="ahcls-1" d="M4.49.25L.25 5.01h8.5L4.49.25zm0 10.5L.25 5.99h8.5l-4.26 4.76z"/></symbol><symbol viewBox="0 0 9 11" id="icon-sort-tobottom" xmlns="http://www.w3.org/2000/svg"><path d="M4.49 10.75L.25 5.99h8.5l-4.26 4.76z"/></symbol><symbol viewBox="0 0 9 11" id="icon-sort-totop" xmlns="http://www.w3.org/2000/svg"><path d="M4.49.25L.25 5.01h8.5L4.49.25z"/></symbol><symbol id="icon_blog" viewBox="6 4.5 18 18" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style>.akst1{clip-path:url(#akSVGID_2_);fill:none;stroke:#213f31;stroke-width:3;stroke-miterlimit:10}</style><circle cx="8.4" cy="19.9" r="2.4"/><defs><path id="akSVGID_1_" d="M5.9 3.9h20.2v18.5H5.9z"/></defs><circle class="akst1" cx="5.9" cy="22.3" r="10"/><circle class="akst1" cx="5.9" cy="22.3" r="16"/></symbol><symbol id="icon_blog_white" viewBox="6 4.5 18 18" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style>.alst1{clip-path:url(#alSVGID_2_);fill:none;stroke:#fff;stroke-width:3;stroke-miterlimit:10}</style><circle cx="8.4" cy="19.9" r="2.4"/><defs><path id="alSVGID_1_" d="M5.9 3.9h20.2v18.5H5.9z"/></defs><circle class="alst1" cx="5.9" cy="22.3" r="10"/><circle class="alst1" cx="5.9" cy="22.3" r="16"/></symbol><symbol viewBox="0 0 612 792" id="icon_chart" xmlns="http://www.w3.org/2000/svg"><path d="M489.6 618.546V234.654h-77.891v383.892h-58.418V384.873h-80.673v233.673h-55.636V309.764h-80.673v308.782H83.455v-472.91H55.636v500.727h500.727v-27.817z"/></symbol><symbol viewBox="0 0 22.8 17" id="icon_email" xmlns="http://www.w3.org/2000/svg"><style/><g id="anLayer_1"><defs><path id="anSVGID_1_" d="M235.8 17.7c8.4 0 12.9-6.9 12.9-12.9v-.6c.9-.6 1.7-1.4 2.3-2.4-.8.4-1.7.6-2.6.7.9-.6 1.7-1.5 2-2.5-.9.5-1.8.9-2.9 1.1-.8-.9-2-1.4-3.3-1.4-2.5 0-4.5 2-4.5 4.5 0 .4 0 .7.1 1-3.8-.2-7.1-2-9.4-4.7-.4.7-.6 1.5-.6 2.3 0 1.6.8 3 2 3.8-.7 0-1.4-.2-2.1-.6v.1c0 2.2 1.6 4 3.6 4.5-.4.1-.8.2-1.2.2-.3 0-.6 0-.9-.1.6 1.8 2.3 3.1 4.2 3.2-1.6 1.2-3.5 1.9-5.6 1.9-.4 0-.7 0-1.1-.1 2.1 1.2 4.5 2 7.1 2"/></defs><g clip-path="url(#anSVGID_2_)"><defs><path id="anSVGID_3_" d="M-873.2-295.3h1366v2820h-1366z"/></defs></g><defs><path id="anSVGID_5_" d="M-47.1 17.3c8.4 0 12.9-6.9 12.9-12.9v-.6c.9-.6 1.7-1.4 2.3-2.4-.8.4-1.7.6-2.6.7.9-.6 1.7-1.5 2-2.5-.9.5-1.8.9-2.9 1.1-.8-.9-2-1.4-3.3-1.4-2.5 0-4.5 2-4.5 4.5 0 .4 0 .7.1 1-3.8-.2-7.1-2-9.4-4.7-.4.7-.6 1.5-.6 2.3 0 1.6.8 3 2 3.8-.7 0-1.4-.2-2.1-.6v.1c0 2.2 1.6 4 3.6 4.5-.4.1-.8.2-1.2.2-.3 0-.6 0-.9-.1.6 1.8 2.3 3.1 4.2 3.2-1.6 1.2-3.5 1.9-5.6 1.9-.4 0-.7 0-1.1-.1 2.2 1.3 4.6 2 7.1 2"/></defs><g clip-path="url(#anSVGID_6_)"><defs><path id="anSVGID_7_" d="M-1156-295.7H210v2820h-1366z"/></defs></g><defs><path id="anSVGID_9_" d="M269.5 15h2.7V6.4h-2.7V15zm1.3-12.8c-.9 0-1.5.7-1.5 1.5 0 .9.7 1.5 1.5 1.5.9 0 1.5-.7 1.5-1.5.1-.8-.6-1.5-1.5-1.5zm8.2 4c-1.3 0-2.2.7-2.5 1.4V6.4h-2.6V15h2.7v-4.2c0-1.1.2-2.2 1.6-2.2 1.4 0 1.4 1.3 1.4 2.3V15h2.7v-4.7c-.1-2.3-.6-4.1-3.3-4.1zm4.5-6.5c.7 0 1.3.6 1.3 1.3v15.4c0 .7-.6 1.3-1.3 1.3h-15.3c-.7 0-1.3-.6-1.3-1.3V1c0-.7.6-1.3 1.3-1.3h15.3z"/></defs><g clip-path="url(#anSVGID_10_)"><defs><path id="anSVGID_11_" d="M-762.7-264.9H466.6V2273H-762.7z"/></defs></g><g><defs><path id="anSVGID_37_" d="M-23.3 14.8h2.7V6.2h-2.7v8.6zM-22 2c-.9 0-1.5.7-1.5 1.5 0 .9.7 1.5 1.5 1.5.9 0 1.5-.7 1.5-1.5S-21.2 2-22 2zm8.1 4c-1.3 0-2.2.7-2.5 1.4V6.2H-19v8.6h2.7v-4.2c0-1.1.2-2.2 1.6-2.2 1.4 0 1.4 1.3 1.4 2.3v4.2h2.7v-4.7c-.1-2.4-.6-4.2-3.3-4.2zm4.6-6.5C-8.6-.5-8 .1-8 .8v15.4c0 .7-.6 1.3-1.3 1.3h-15.3c-.7 0-1.3-.6-1.3-1.3V.8c0-.7.6-1.3 1.3-1.3h15.3z"/></defs><g clip-path="url(#anSVGID_14_)"><defs><path id="anSVGID_39_" d="M-1055.6-265.1H173.7v2537.9h-1229.3z"/></defs></g></g><g><path d="M20.6.3H2.2l9.2 7.5L20.6.3z"/><path d="M21.7.9L11.4 9.2 1.1.9c-.4.4-.7 1-.7 1.6v12.1c0 1.2 1 2.2 2.2 2.2h17.6c1.2 0 2.2-1 2.2-2.2V2.5c0-.7-.3-1.2-.7-1.6z"/></g></g></symbol><symbol viewBox="15 215 570 360" id="icon_filter" xmlns="http://www.w3.org/2000/svg"><path d="M16.105 214.011h579.789v32.21H16.105zm128.842 161.052h322.105v32.21H144.947zm96.632 161.053h128.842v32.21H241.579z"/></symbol><symbol viewBox="28 116 556 556" id="icon_info" xmlns="http://www.w3.org/2000/svg"><path d="M306 115.036c-153 0-278.182 125.182-278.182 278.182S153 671.4 306 671.4s278.182-125.183 278.182-278.182c0-153-125.182-278.182-278.182-278.182zm41.728 436.746h-83.455V351.491h83.455v200.291zm0-236.455h-83.455v-83.455h83.455v83.455z"/></symbol><symbol viewBox="120 100 380 590" id="icon_linkedin" xmlns="http://www.w3.org/2000/svg"><defs><path id="aqa" d="M103.074 598.927h86.968V321.916h-86.968v277.011zm41.873-412.295c-28.989 0-48.316 22.547-48.316 48.315 0 28.99 22.547 48.316 48.316 48.316 28.99 0 48.316-22.547 48.316-48.316 3.221-25.768-19.326-48.315-48.316-48.315zm260.906 128.842c-41.874 0-70.863 22.547-80.526 45.095v-38.652H241.58v277.011h86.968V463.643c0-35.432 6.442-70.864 51.537-70.864s45.095 41.874 45.095 74.084v135.284h86.969v-151.39c-3.222-77.304-19.328-135.283-106.296-135.283zm148.168-209.369c22.547 0 41.873 19.326 41.873 41.874v496.042c0 22.547-19.326 41.873-41.873 41.873H57.979c-22.547 0-41.874-19.326-41.874-41.873V147.979c0-22.547 19.326-41.874 41.874-41.874h496.042z"/></defs><g clip-path="url(#aqb)"><defs><path id="aqc" d="M-33144.629-8416.799H6451.769v81747.086h-39596.398z"/></defs><path clip-path="url(#aqd)" d="M-128.842-38.842h869.684v869.684h-869.684z"/></g></symbol><symbol viewBox="0 0 24.116 23.921" id="icon_search" xmlns="http://www.w3.org/2000/svg"><defs><path id="ara" transform="rotate(-134.996 20.156 19.96)" d="M15.358 19.16h9.599v1.601h-9.599z"/></defs><g clip-path="url(#arb)"><defs><path id="arc" d="M-11.2-12.8h48v48h-48z"/></defs><path transform="rotate(-134.999 20.157 19.96)" clip-path="url(#ard)" d="M5.358 9.16h29.599v21.6H5.358z"/></g><defs><path id="are" d="M10.399 20.8C4.669 20.8 0 16.132 0 10.4 0 4.669 4.669 0 10.399 0c5.731 0 10.4 4.669 10.4 10.4.001 5.732-4.668 10.4-10.4 10.4zm0-1.6c4.849 0 8.801-3.952 8.801-8.8 0-4.848-3.952-8.8-8.801-8.8-4.848 0-8.8 3.952-8.8 8.8.001 4.848 3.953 8.8 8.8 8.8z"/></defs><g clip-path="url(#arf)"><defs><path id="arg" d="M-11.2-12.8h48v48h-48z"/></defs><path clip-path="url(#arh)" d="M-10-10h40.8v40.799H-10z"/></g></symbol><symbol viewBox="0 0 612 792" id="icon_table" xmlns="http://www.w3.org/2000/svg"><path d="M55.636 145.636v500.727h500.727V145.636H55.636zm472.91 27.819v66.764H83.455v-66.764h445.091zM272.618 429.382v-66.764h66.764v66.764h-66.764zm66.764 27.818v66.764h-66.764V457.2h66.764zM244.8 429.382h-66.764v-66.764H244.8v66.764zm122.4-66.764h66.764v66.764H367.2v-66.764zm0-27.818v-66.764h66.764V334.8H367.2zm-27.818 0h-66.764v-66.764h66.764V334.8zm-94.582 0h-66.764v-66.764H244.8V334.8zm-94.582 0H83.455v-66.764h66.764V334.8zm0 27.818v66.764H83.455v-66.764h66.763zm0 94.582v66.764H83.455V457.2h66.763zm27.818 0H244.8v66.764h-66.764V457.2zm66.764 94.582v66.764h-66.764v-66.764H244.8zm27.818 0h66.764v66.764h-66.764v-66.764zm94.582 0h66.764v66.764H367.2v-66.764zm0-27.818V457.2h66.764v66.764H367.2zm94.582-66.764h66.764v66.764h-66.764V457.2zm0-27.818v-66.764h66.764v66.764h-66.764zm0-94.582v-66.764h66.764V334.8h-66.764zM83.455 551.782h66.764v66.764H83.455v-66.764zm378.327 66.764v-66.764h66.764v66.764h-66.764z"/></symbol><symbol viewBox="0 0 22.8 19" id="icon_twitter" xmlns="http://www.w3.org/2000/svg"><style/><g id="atLayer_1"><defs><path id="atSVGID_1_" d="M290.1 18.9C298.5 18.9 303 12 303 6v-.6c.9-.6 1.7-1.4 2.3-2.4-.8.4-1.7.6-2.6.7.9-.6 1.7-1.5 2-2.5-.9.5-1.8.9-2.9 1.1-.8-.9-2-1.4-3.3-1.4-2.5 0-4.5 2-4.5 4.5 0 .4 0 .7.1 1-3.8-.2-7.1-2-9.4-4.7-.4.7-.6 1.5-.6 2.3 0 1.6.8 3 2 3.8-.7 0-1.4-.2-2.1-.6v.1c0 2.2 1.6 4 3.6 4.5-.4.1-.8.2-1.2.2-.3 0-.6 0-.9-.1.6 1.8 2.3 3.1 4.2 3.2-1.6 1.2-3.5 1.9-5.6 1.9-.4 0-.7 0-1.1-.1 2.2 1.2 4.6 2 7.1 2"/></defs><g clip-path="url(#atSVGID_2_)"><defs><path id="atSVGID_3_" d="M-818.8-294.1h1366v2820h-1366z"/></defs></g><defs><path id="atSVGID_5_" d="M7.3 18.5c8.4 0 12.9-6.9 12.9-12.9V5c.9-.6 1.7-1.4 2.3-2.4-.8.4-1.7.6-2.6.7.9-.6 1.7-1.5 2-2.5-.9.6-1.9.9-2.9 1.1-.8-.9-2-1.4-3.3-1.4-2.5 0-4.5 2-4.5 4.5 0 .4 0 .7.1 1-3.8-.2-7.1-2-9.4-4.7-.4.7-.6 1.5-.6 2.3 0 1.6.8 3 2 3.8-.7 0-1.4-.2-2.1-.6v.1c0 2.2 1.6 4 3.6 4.5-.4.1-.8.2-1.2.2-.3 0-.6 0-.9-.1.6 1.8 2.3 3.1 4.2 3.2-1.6 1.2-3.5 1.9-5.6 1.9-.4 0-.7 0-1.1-.1 2.1 1.2 4.5 2 7.1 2"/></defs><g clip-path="url(#atSVGID_6_)"><defs><path id="atSVGID_7_" d="M-1101.7-294.5h1366v2820h-1366z"/></defs><path clip-path="url(#atSVGID_8_)" d="M-4.7-4.5h32.1v28H-4.7z"/></g><defs><path id="atSVGID_9_" d="M323.8 16.2h2.7V7.6h-2.7v8.6zm1.4-12.9c-.9 0-1.5.7-1.5 1.5 0 .9.7 1.5 1.5 1.5.9 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5zm8.1 4.1c-1.3 0-2.2.7-2.5 1.4V7.6h-2.6v8.6h2.7V12c0-1.1.2-2.2 1.6-2.2 1.4 0 1.4 1.3 1.4 2.3v4.2h2.7v-4.7c-.1-2.4-.6-4.2-3.3-4.2zm4.5-6.5c.7 0 1.3.6 1.3 1.3v15.4c0 .7-.6 1.3-1.3 1.3h-15.3c-.7 0-1.3-.6-1.3-1.3V2.2c0-.7.6-1.3 1.3-1.3h15.3z"/></defs><g clip-path="url(#atSVGID_10_)"><defs><path id="atSVGID_11_" d="M-708.4-263.7H520.9v2537.9H-708.4z"/></defs></g><g><defs><path id="atSVGID_37_" d="M31 16h2.7V7.4H31V16zm1.3-12.8c-.9 0-1.5.7-1.5 1.5 0 .9.7 1.5 1.5 1.5.9 0 1.5-.7 1.5-1.5.1-.8-.6-1.5-1.5-1.5zm8.2 4c-1.3 0-2.2.7-2.5 1.4V7.4h-2.6V16H38v-4.2c0-1.1.2-2.2 1.6-2.2 1.4 0 1.4 1.3 1.4 2.3V16h2.7v-4.7c0-2.3-.5-4.1-3.2-4.1zM45 .7c.7 0 1.3.6 1.3 1.3v15.4c0 .7-.6 1.3-1.3 1.3H29.7c-.7 0-1.3-.6-1.3-1.3V2c0-.7.6-1.3 1.3-1.3H45z"/></defs><g clip-path="url(#atSVGID_14_)"><defs><path id="atSVGID_39_" d="M-1001.2-263.9H228.1V2274h-1229.3z"/></defs></g></g></g></symbol><symbol id="logo-spdr" viewBox="0 0 440.87 123.3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style>.aust0{fill:#fff}</style><path class="aust0" d="M19.39 92.64c4.76 4.41 9.24 8.33 9.24 16.17 0 8.54-4.34 14.49-14.14 14.49-7 0-13.72-2.94-14.28-13.93L0 105.31l9.45-.49.14 2.59c.28 5.04 2.1 6.65 4.69 6.65 2.24 0 3.29-1.33 3.29-3.92 0-3.57-3.99-6.79-7.84-10.15C4.06 94.95.77 90.68.77 83.19c0-7.7 4.48-13.79 13.86-13.79 7.21 0 12.74 3.15 13.23 13.79l.14 2.94-9.24.49-.07-2.52c-.07-3.15-1.12-5.6-3.92-5.6-1.68 0-3.29 1.05-3.29 3.78 0 3.64 2.24 5.04 7.91 10.36m92.87-13.79h1.47c1.89 0 3.78 1.12 3.78 7.84 0 6.65-2.17 7.7-4.2 7.7h-1.05V78.85zm17.5 43.75l-6.02-23.94c3.64-2.73 5.67-7.56 5.67-13.44 0-9.87-5.39-15.12-13.72-15.12h-15.33v52.5h11.9v-21.21h.98l4.69 21.21h11.83zM84.47 96.28c0 14.49-2.03 17.57-5.46 17.57h-1.75v-35h1.75c3.43 0 5.46 3.01 5.46 17.43M65.36 122.6h15.05c10.57 0 15.96-8.4 15.96-26.32 0-17.85-5.39-26.18-15.96-26.18H65.36v52.5zM50.1 87.39c0 7.35-1.89 8.54-3.85 8.54h-1.68V78.85h1.68c1.96 0 3.85 1.26 3.85 8.54m-2.87 17.29c9.38 0 14.77-5.32 14.77-17.29 0-12.18-5.39-17.29-13.79-17.29H32.67v52.5h11.9v-17.92h2.66zm386.01-69.42c0-1.21.72-1.68 1.46-1.68 1.25 0 1.71 1.09 1.75 2.49l.03 1.12 4.11-.22-.06-1.31c-.22-4.74-2.68-6.14-5.89-6.14-4.17 0-6.17 2.71-6.17 6.14 0 3.33 1.46 5.23 3.99 7.48 1.71 1.5 3.49 2.93 3.49 4.52 0 1.15-.47 1.74-1.46 1.74-1.15 0-1.96-.72-2.09-2.96l-.06-1.15-4.2.22.09 1.81c.25 4.89 3.24 6.2 6.35 6.2 4.36 0 6.29-2.65 6.29-6.45 0-3.49-1.99-5.23-4.11-7.19-2.52-2.38-3.52-3-3.52-4.62m-13.86-1.53h.65c.84 0 1.68.5 1.68 3.49 0 2.96-.97 3.43-1.87 3.43h-.47v-6.92zm7.78 19.47l-2.68-10.65c1.62-1.18 2.52-3.36 2.52-5.98 0-4.39-2.4-6.73-6.1-6.73h-6.82V53.2h5.3v-9.44h.43l2.09 9.44h5.26zm-22.39-3.74c-1.15 0-1.78-1.28-1.78-7.97 0-6.67.62-7.91 1.78-7.91 1.15 0 1.81 1.25 1.81 7.91 0 6.7-.66 7.97-1.81 7.97m0 4.05c4.77 0 7.19-3.27 7.19-12.02 0-8.69-2.43-11.96-7.19-11.96-4.73 0-7.16 3.27-7.16 11.96-.01 8.75 2.42 12.02 7.16 12.02m-16.23-18.25c0-1.21.72-1.68 1.46-1.68 1.24 0 1.71 1.09 1.74 2.49l.03 1.12 4.11-.22-.06-1.31c-.22-4.74-2.68-6.14-5.89-6.14-4.17 0-6.17 2.71-6.17 6.14 0 3.33 1.46 5.23 3.99 7.48 1.71 1.5 3.49 2.93 3.49 4.52 0 1.15-.47 1.74-1.46 1.74-1.15 0-1.96-.72-2.09-2.96l-.06-1.15-4.2.22.09 1.81c.25 4.89 3.24 6.2 6.35 6.2 4.36 0 6.29-2.65 6.29-6.45 0-3.49-1.99-5.23-4.11-7.19-2.51-2.38-3.51-3-3.51-4.62M376.33 53.2h5.3V29.84h-5.3V53.2zm-10.99-23.36h-5.33l3.55 23.36h7.16l3.89-23.36h-5.05l-2.24 19.37-1.98-19.37zm-11.47 11.65c0 6.32-.84 7.66-2.27 7.66h-.78V33.89h.78c1.43 0 2.27 1.31 2.27 7.6m-8.34 11.71h6.7c4.71 0 7.1-3.74 7.1-11.71 0-7.94-2.4-11.65-7.1-11.65h-6.7V53.2zm-10.16-8.29l1.28-11.09 1.15 11.09h-2.43zm3.27 8.29h5.33l-3.46-23.36h-7.35l-3.8 23.36h5.05l.59-5.17h3.12l.52 5.17zm71.8-29.14v-4.05h-3.58V.7h-5.3v23.36h8.88zm-19.03-8.28l1.28-11.09 1.15 11.09h-2.43zm3.27 8.28H400L396.55.7h-7.35l-3.8 23.36h5.05l.59-5.17h3.12l.52 5.17zm-17.88-4.05v-6.7h.56c1.31 0 2.15.62 2.15 3.24 0 2.83-.84 3.46-2.15 3.46h-.56zm2.62-12.77c0 2.18-.72 2.96-1.93 2.96h-.68V4.75h.53c1.27 0 2.08.5 2.08 2.49m-7.92 16.82h6.23c4.71 0 7.07-2.34 7.07-7.29 0-2.27-.84-4.45-3.21-5.48 2.06-.87 2.99-2.77 2.99-4.8 0-3.8-2.18-5.79-6.76-5.79h-6.32v23.36zm-9.16-3.74c-1.15 0-1.77-1.28-1.77-7.97 0-6.67.62-7.91 1.77-7.91s1.81 1.24 1.81 7.91c0 6.7-.65 7.97-1.81 7.97m0 4.05c4.77 0 7.19-3.27 7.19-12.02 0-8.69-2.43-11.96-7.19-11.96-4.73 0-7.16 3.27-7.16 11.96 0 8.75 2.43 12.02 7.16 12.02m-7.87-.31v-4.05h-3.58V.7h-5.3v23.36h8.88zM342.94 7.83l-.06-1.31c-.19-4.02-2.31-6.14-5.64-6.14-4.83 0-7.48 3.83-7.48 11.96 0 8.5 2.65 12.02 6.64 12.02 1.9 0 3.18-.87 3.8-1.99l.93 1.68h1.9V11.54h-6.04v2.8h1.62v4.45c0 1.21-.59 1.53-1.37 1.53-1.15 0-2.02-1.4-2.02-7.97 0-6.64.75-7.91 2.02-7.91.9 0 1.5.72 1.56 2.68l.03.93 4.11-.22zm-44.4 45.37h11.9V9.8h7V.7h-25.9v9.1h7v43.4zm-9.79 0v-9.1H280V29.05h7.35v-7H280V9.8h8.75V.7H268.1v52.5h20.65zm-24.85 0v-9.1h-8.75V29.05h7.35v-7h-7.35V9.8h8.75V.7h-20.65v52.5h20.65zM221.97 9.45h1.47c1.89 0 3.78 1.12 3.78 7.84 0 6.65-2.17 7.7-4.2 7.7h-1.05V9.45zm17.5 43.75l-6.02-23.94c3.64-2.66 5.67-7.56 5.67-13.44C239.12 5.95 233.73.7 225.4.7h-15.33v52.5h11.9V31.99h.98l4.69 21.21h11.83zm-51.1 0h11.9V9.8h7V.7h-25.9v9.1h7v43.4zm-24.85-40.32c0-2.73 1.61-3.78 3.29-3.78 2.8 0 3.85 2.45 3.92 5.6l.07 2.52 9.24-.49-.14-2.94C179.41 3.15 173.88 0 166.67 0c-9.38 0-13.86 6.09-13.86 13.79 0 7.49 3.29 11.76 8.96 16.8 3.85 3.36 7.84 6.58 7.84 10.15 0 2.59-1.05 3.92-3.29 3.92-2.59 0-4.41-1.61-4.69-6.65l-.14-2.59-9.45.49.21 4.06c.56 10.99 7.28 13.93 14.28 13.93 9.8 0 14.14-5.95 14.14-14.49 0-7.84-4.48-11.76-9.24-16.17-5.67-5.32-7.91-6.72-7.91-10.36M136.71 53.2v-9.1h-8.75V29.05h7.35v-7h-7.35V9.8h8.75V.7h-20.65v52.5h20.65zm-43.4 0h11.9V9.8h7V.7h-25.9v9.1h7v43.4zM67.62 34.58l2.87-24.92 2.59 24.92h-5.46zm7.35 18.62h11.97L79.17.7H62.65l-8.54 52.5h11.34l1.33-11.62h7l1.19 11.62zm-38.64 0h11.9V9.8h7V.7h-25.9v9.1h7v43.4zM11.48 12.88c0-2.73 1.61-3.78 3.29-3.78 2.8 0 3.85 2.45 3.92 5.6l.07 2.52 9.24-.49-.14-2.94C27.37 3.15 21.84 0 14.63 0 5.25 0 .77 6.09.77 13.79c0 7.49 3.29 11.76 8.96 16.8 3.85 3.36 7.84 6.58 7.84 10.15 0 2.59-1.05 3.92-3.29 3.92-2.59 0-4.41-1.61-4.69-6.65l-.14-2.59-9.45.49.21 4.06C.77 50.96 7.49 53.9 14.49 53.9c9.8 0 14.14-5.95 14.14-14.49 0-7.84-4.48-11.76-9.24-16.17-5.67-5.32-7.91-6.72-7.91-10.36m128.39 60.97h.68c.43 0 .8.17.8.85 0 .75-.43.88-.83.88h-.65v-1.73zm2.89 5.09l-.78-2.01-.25-.63c.58-.3.98-.88.98-1.66 0-1.2-.68-1.93-2.13-1.93h-2.11v6.22h1.41V76.6h.58l.27.95.53 1.38h1.5zm-2.29-7.91c2.94 0 4.54 2.18 4.54 5.02s-1.61 5.02-4.54 5.02c-3.04 0-4.62-2.18-4.62-5.02s1.59-5.02 4.62-5.02m5.9 5.02c0-3.51-2.26-6.32-5.9-6.32-3.77 0-5.97 2.81-5.97 6.32 0 3.46 2.21 6.32 5.97 6.32 3.64.01 5.9-2.85 5.9-6.32"/></symbol><symbol viewBox="0 0 256 256" id="pause-circle" xmlns="http://www.w3.org/2000/svg"><path d="M63 57h35v146H63V57zm100 0h33v146h-33V57zM117 7.21c-10.55 1.74-20.95 3.43-31 7.21C52.43 27.06 26.32 53.26 14.05 87-9.94 153.01 28.13 228.58 97 245.87c8.22 2.07 17.51 4.03 26 4.13 22.05.25 40.09-2.8 60-12.75 14.78-7.39 25.74-15.93 36.83-28.25 36.65-40.72 40.11-103.9 9.42-149C215.96 40.46 196.8 25.05 175 16.01c-12.21-5.07-29.77-8.99-43-8.8h-15z"/></symbol><symbol viewBox="0 0 256 256" id="play-circle" xmlns="http://www.w3.org/2000/svg"><path d="M63 57l150 71-150 75V57zm54-49.79c-10.55 1.74-20.95 3.43-31 7.21C52.43 27.06 26.32 53.26 14.05 87-9.94 153.01 28.13 228.58 97 245.87c8.22 2.07 17.51 4.03 26 4.13 22.05.25 40.09-2.8 60-12.75 14.78-7.39 25.74-15.93 36.83-28.25 36.65-40.72 40.11-103.9 9.42-149C215.96 40.46 196.8 25.05 175 16.01c-12.21-5.07-29.77-8.99-43-8.8h-15z"/></symbol><symbol id="printer" viewBox="0 0 22 22" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><style/><defs><path id="axSVGID_5_" d="M3 5c-.6 0-1 .4-1 1v10c0 .6.4 1 1 1h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H3zm14 13v-1H5v1H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2h-2z"/></defs><path d="M3 5c-.6 0-1 .4-1 1v10c0 .6.4 1 1 1h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H3zm14 13v-1H5v1H3c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2h-2z" clip-path="url(#axSVGID_2_)" fill="none" stroke-width="2" stroke-miterlimit="10"/><defs><path id="axSVGID_7_" d="M6 1h10c.6 0 1 .4 1 1v3H5V2c0-.6.4-1 1-1z"/></defs><path d="M6 1h10c.6 0 1 .4 1 1v3H5V2c0-.6.4-1 1-1z" clip-path="url(#axSVGID_4_)" fill="none" stroke-width="2" stroke-miterlimit="10"/><path d="M5.4 14h11.3c.5 0 .9.3 1 .7l1.3 5c.1.5-.2 1.1-.7 1.2H4.1c-.6 0-1-.4-1-1v-.3l1.3-5c.1-.3.5-.6 1-.6z"/><defs><path id="axSVGID_9_" d="M5.4 14h11.3c.5 0 .9.3 1 .7l1.3 5c.1.5-.2 1.1-.7 1.2H4.1c-.6 0-1-.4-1-1v-.3l1.3-5c.1-.3.5-.6 1-.6z"/></defs><path d="M5.4 14h11.3c.5 0 .9.3 1 .7l1.3 5c.1.5-.2 1.1-.7 1.2H4.1c-.6 0-1-.4-1-1v-.3l1.3-5c.1-.3.5-.6 1-.6z" clip-path="url(#axSVGID_6_)" fill="none" stroke-width="2" stroke-miterlimit="10"/><g><defs><path id="axSVGID_11_" d="M7 18h8v1H7v-1zm1-1h6v-1H8v1z"/></defs><path clip-path="url(#axSVGID_8_)" d="M2 13h18v11H2z"/></g></symbol><symbol viewBox="0 0 256 256" id="share" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M82.4 106.89L172 67.5m-.5 107l-89.65-43.47M51 89.25c-6.37 1.73-12.27 4.6-16.47 9.79C19.89 117.11 31.2 145 55 145.96c4.66.19 8.72-.4 13-2.31 27.33-12.13 19.94-53.4-10-54.4-2.68-.32-4.37-.15-7 0zm142 67c-6.37 1.73-12.27 4.6-16.47 9.79-14.64 18.07-3.33 45.96 20.47 46.92 4.66.19 8.72-.4 13-2.31 27.33-12.13 19.94-53.4-10-54.4-2.68-.32-4.37-.15-7 0zm0-125c-6.37 1.73-12.27 4.6-16.47 9.79C161.89 59.11 173.2 87 197 87.96c4.66.19 8.72-.4 13-2.31 27.33-12.13 19.94-53.4-10-54.4-2.68-.32-4.37-.15-7 0z"/></symbol><symbol viewBox="0 0 612 792" id="share-blue" xmlns="http://www.w3.org/2000/svg"><path d="M16.105 214.011h579.789v32.21H16.105zm128.842 161.052h322.105v32.21H144.947zm96.632 161.053h128.842v32.21H241.579z"/></symbol><symbol preserveAspectRatio="none" viewBox="0 0 441 54" id="ssga-logo" xmlns="http://www.w3.org/2000/svg"><defs xmlns="http://www.w3.org/1999/xhtml"><style/></defs><path d="M338.64 53.2h5.327l-3.457-23.36h-7.351l-3.8 23.36h5.046l.59-5.17h3.116l.53 5.17zm-3.27-8.285l1.278-11.089 1.152 11.09h-2.43zm10.154 8.285h6.697c4.704 0 7.102-3.738 7.102-11.712 0-7.943-2.398-11.649-7.102-11.649h-6.697V53.2zm8.347-11.712c0 6.322-.84 7.663-2.273 7.663h-.778V33.888h.778c1.433 0 2.273 1.308 2.273 7.6zm11.463-11.649h-5.326l3.55 23.361h7.165l3.894-23.36h-5.047l-2.242 19.373-1.994-19.374zM376.329 53.2h5.296V29.84h-5.296V53.2zm12.21-17.94c0-1.216.717-1.683 1.464-1.683 1.246 0 1.713 1.09 1.745 2.491l.03 1.122 4.112-.219-.062-1.308c-.218-4.734-2.68-6.136-5.887-6.136-4.174 0-6.167 2.71-6.167 6.136 0 3.333 1.464 5.233 3.987 7.475 1.713 1.496 3.488 2.93 3.488 4.518 0 1.151-.467 1.744-1.464 1.744-1.152 0-1.962-.718-2.087-2.959l-.062-1.153-4.205.218.093 1.807c.25 4.89 3.24 6.198 6.355 6.198 4.36 0 6.292-2.647 6.292-6.447 0-3.489-1.994-5.233-4.112-7.195-2.523-2.368-3.52-2.99-3.52-4.61zm16.228 18.251c4.766 0 7.196-3.27 7.196-12.023 0-8.69-2.43-11.96-7.196-11.96-4.734 0-7.164 3.27-7.164 11.96 0 8.753 2.43 12.023 7.164 12.023zm0-4.049c-1.152 0-1.775-1.278-1.775-7.974 0-6.666.623-7.91 1.775-7.91 1.153 0 1.807 1.244 1.807 7.91 0 6.696-.654 7.974-1.807 7.974zm22.395 3.738l-2.678-10.653c1.62-1.183 2.523-3.365 2.523-5.98 0-4.392-2.398-6.728-6.105-6.728h-6.821V53.2h5.295v-9.438h.436l2.087 9.438h5.263zm-7.786-19.468h.654c.84 0 1.682.5 1.682 3.49 0 2.957-.967 3.425-1.87 3.425h-.466v-6.915zm13.86 1.527c0-1.215.717-1.682 1.464-1.682 1.246 0 1.714 1.09 1.745 2.491l.03 1.122 4.112-.219-.062-1.308c-.218-4.734-2.68-6.136-5.887-6.136-4.174 0-6.167 2.71-6.167 6.136 0 3.333 1.464 5.233 3.987 7.475 1.713 1.496 3.488 2.93 3.488 4.518 0 1.151-.467 1.744-1.464 1.744-1.152 0-1.962-.718-2.087-2.959l-.062-1.153-4.205.218.094 1.807c.249 4.89 3.239 6.198 6.354 6.198 4.36 0 6.292-2.647 6.292-6.447 0-3.489-1.994-5.233-4.112-7.195-2.523-2.368-3.52-2.99-3.52-4.61zM342.94 7.833l-.063-1.308c-.187-4.018-2.305-6.136-5.637-6.136-4.829 0-7.478 3.831-7.478 11.961 0 8.503 2.65 12.023 6.637 12.023 1.899 0 3.176-.872 3.8-1.994l.933 1.682h1.9V11.54h-6.041v2.803h1.619v4.454c0 1.215-.593 1.526-1.37 1.526-1.154 0-2.026-1.401-2.026-7.973 0-6.635.748-7.912 2.026-7.912.901 0 1.495.716 1.555 2.679l.032.934 4.113-.218zm11.524 16.228v-4.049h-3.584V.7h-5.294v23.361h8.877zm7.88.312c4.767 0 7.195-3.271 7.195-12.023 0-8.691-2.428-11.961-7.195-11.961-4.734 0-7.164 3.27-7.164 11.961 0 8.752 2.43 12.023 7.163 12.023zm0-4.05c-1.152 0-1.776-1.277-1.776-7.973 0-6.666.624-7.912 1.776-7.912 1.153 0 1.808 1.246 1.808 7.912 0 6.696-.655 7.973-1.808 7.973zm9.158 3.738h6.23c4.701 0 7.07-2.336 7.07-7.288 0-2.274-.841-4.455-3.21-5.483 2.058-.872 2.993-2.772 2.993-4.796 0-3.8-2.181-5.794-6.76-5.794h-6.323v23.361zm7.911-16.82c0 2.181-.716 2.959-1.93 2.959h-.687V4.749h.53c1.277 0 2.087.499 2.087 2.492zm-2.617 12.771v-6.697h.562c1.308 0 2.149.623 2.149 3.24 0 2.834-.84 3.457-2.15 3.457h-.56zm17.879 4.049h5.327L396.543.7h-7.35l-3.8 23.361h5.047l.591-5.17h3.115l.529 5.17zm-3.27-8.285l1.277-11.089 1.152 11.089h-2.428zm19.032 8.285v-4.049h-3.583V.7h-5.296v23.361h8.879zM11.48 12.88c0-2.73 1.61-3.78 3.29-3.78 2.8 0 3.85 2.45 3.92 5.6l.07 2.52 9.24-.49-.14-2.94C27.37 3.15 21.84 0 14.63 0 5.25 0 .77 6.09.77 13.79c0 7.49 3.29 11.76 8.96 16.8 3.85 3.36 7.84 6.58 7.84 10.15 0 2.59-1.05 3.92-3.29 3.92-2.59 0-4.41-1.61-4.69-6.65l-.14-2.59-9.45.49.21 4.06C.77 50.96 7.49 53.9 14.49 53.9c9.8 0 14.14-5.95 14.14-14.49 0-7.84-4.48-11.76-9.24-16.17-5.67-5.32-7.91-6.72-7.91-10.36zM36.33 53.2h11.9V9.8h7V.7h-25.9v9.1h7v43.4zm38.639 0h11.97L79.169.7h-16.52l-8.54 52.5h11.34l1.33-11.62h7l1.19 11.62zm-7.35-18.62l2.87-24.92 2.59 24.92h-5.46zM93.308 53.2h11.9V9.8h7V.7h-25.9v9.1h7v43.4zm43.4 0v-9.1h-8.75V29.05h7.35v-7h-7.35V9.8h8.75V.7h-20.65v52.5h20.65zm26.809-40.32c0-2.73 1.61-3.78 3.29-3.78 2.8 0 3.85 2.45 3.92 5.6l.07 2.52 9.24-.49-.14-2.94C179.407 3.15 173.877 0 166.667 0c-9.38 0-13.86 6.09-13.86 13.79 0 7.49 3.29 11.76 8.96 16.8 3.85 3.36 7.84 6.58 7.84 10.15 0 2.59-1.05 3.92-3.29 3.92-2.59 0-4.41-1.61-4.69-6.65l-.14-2.59-9.45.49.21 4.06c.56 10.99 7.28 13.93 14.28 13.93 9.8 0 14.14-5.95 14.14-14.49 0-7.84-4.48-11.76-9.24-16.17-5.67-5.32-7.91-6.72-7.91-10.36zm24.849 40.32h11.9V9.8h7V.7h-25.9v9.1h7v43.4zm51.1 0l-6.02-23.94c3.64-2.66 5.67-7.56 5.67-13.44 0-9.87-5.39-15.12-13.719-15.12h-15.331v52.5h11.9V31.99h.98l4.69 21.21h11.83zm-17.5-43.75h1.47c1.89 0 3.78 1.12 3.78 7.84 0 6.65-2.17 7.7-4.2 7.7h-1.05V9.45zm41.929 43.75v-9.1h-8.75V29.05h7.35v-7h-7.35V9.8h8.75V.7h-20.65v52.5h20.65zm24.849 0v-9.1h-8.75V29.05h7.35v-7h-7.35V9.8h8.75V.7h-20.65v52.5h20.65zm9.799 0h11.9V9.8h7V.7h-25.9v9.1h7v43.4z" fill-rule="evenodd" xmlns="http://www.w3.org/2000/svg"/></symbol><symbol viewBox="0 0 51.428 36" id="video" xmlns="http://www.w3.org/2000/svg"><defs><path id="bba" d="M20.571 25.714L33.932 18l-13.36-7.714v15.428zM50.354 5.621C51.428 9.632 51.428 18 51.428 18s0 8.368-1.074 12.378a6.44 6.44 0 01-4.547 4.547C41.796 36 25.714 36 25.714 36S9.632 36 5.622 34.925a6.439 6.439 0 01-4.547-4.547C0 26.368 0 18 0 18S0 9.632 1.075 5.621a6.44 6.44 0 014.547-4.546C9.632 0 25.714 0 25.714 0s16.082 0 20.093 1.075a6.441 6.441 0 014.547 4.546z"/></defs><g clip-path="url(#bbb)"><defs><path id="bbc" d="M-1332-530H204v6120h-1536z"/></defs><path clip-path="url(#bbd)" d="M-10-10h71.428v56H-10z"/></g></symbol><clipPath id="adSVGID_2_"><use xlink:href="#adSVGID_1_" overflow="visible"/></clipPath><clipPath id="adSVGID_4_"><use xlink:href="#adSVGID_3_" overflow="visible"/></clipPath><clipPath id="aeSVGID_2_"><use xlink:href="#aeSVGID_1_" overflow="visible"/></clipPath><clipPath id="aeSVGID_4_"><use xlink:href="#aeSVGID_3_" overflow="visible"/></clipPath><clipPath id="akSVGID_2_"><use xlink:href="#akSVGID_1_" overflow="visible"/></clipPath><clipPath id="alSVGID_2_"><use xlink:href="#alSVGID_1_" overflow="visible"/></clipPath><clipPath id="anSVGID_2_"><use xlink:href="#anSVGID_1_" overflow="visible"/></clipPath><clipPath id="anSVGID_4_"><use xlink:href="#anSVGID_3_" overflow="visible"/></clipPath><clipPath id="anSVGID_6_"><use xlink:href="#anSVGID_5_" overflow="visible"/></clipPath><clipPath id="anSVGID_8_"><use xlink:href="#anSVGID_7_" overflow="visible"/></clipPath><clipPath id="anSVGID_10_"><use xlink:href="#anSVGID_9_" overflow="visible"/></clipPath><clipPath id="anSVGID_12_"><use xlink:href="#anSVGID_11_" overflow="visible"/></clipPath><clipPath id="anSVGID_14_"><use xlink:href="#anSVGID_37_" overflow="visible"/></clipPath><clipPath id="anSVGID_16_"><use xlink:href="#anSVGID_39_" overflow="visible"/></clipPath><clipPath id="aqb"><use xlink:href="#aqa" overflow="visible"/></clipPath><clipPath id="aqd"><use xlink:href="#aqc" overflow="visible"/></clipPath><clipPath id="arb"><use xlink:href="#ara" overflow="visible"/></clipPath><clipPath id="ard"><use xlink:href="#arc" overflow="visible"/></clipPath><clipPath id="arf"><use xlink:href="#are" overflow="visible"/></clipPath><clipPath id="arh"><use xlink:href="#arg" overflow="visible"/></clipPath><clipPath id="atSVGID_2_"><use xlink:href="#atSVGID_1_" overflow="visible"/></clipPath><clipPath id="atSVGID_4_"><use xlink:href="#atSVGID_3_" overflow="visible"/></clipPath><clipPath id="atSVGID_6_"><use xlink:href="#atSVGID_5_" overflow="visible"/></clipPath><clipPath id="atSVGID_8_"><use xlink:href="#atSVGID_7_" overflow="visible"/></clipPath><clipPath id="atSVGID_10_"><use xlink:href="#atSVGID_9_" overflow="visible"/></clipPath><clipPath id="atSVGID_12_"><use xlink:href="#atSVGID_11_" overflow="visible"/></clipPath><clipPath id="atSVGID_14_"><use xlink:href="#atSVGID_37_" overflow="visible"/></clipPath><clipPath id="atSVGID_16_"><use xlink:href="#atSVGID_39_" overflow="visible"/></clipPath><clipPath id="axSVGID_2_"><use xlink:href="#axSVGID_5_" overflow="visible"/></clipPath><clipPath id="axSVGID_4_"><use xlink:href="#axSVGID_7_" overflow="visible"/></clipPath><clipPath id="axSVGID_6_"><use xlink:href="#axSVGID_9_" overflow="visible"/></clipPath><clipPath id="axSVGID_8_"><use xlink:href="#axSVGID_11_" overflow="visible"/></clipPath><clipPath id="bbb"><use xlink:href="#bba" overflow="visible"/></clipPath><clipPath id="bbd"><use xlink:href="#bbc" overflow="visible"/></clipPath></svg>
					</div>





<div class="ssmp-page fund-detail-page">
    <div class="root responsivegrid">
<div class="aem-Grid aem-Grid--16 aem-Grid--default--16 ">

    <div class="header aem-GridColumn aem-GridColumn--default--12"><header id="header" class="ssmp-header ssmp-desktop-header ">
    <div class="ssmp-header__container">

        <nav class="ssmp-header__global-nav" data-url-country="us" data-url-language="en" data-url-role="individual" data-url-product="etfs">
            <p id="ssmp-no-cookie-header" style="display: none;">Select a Country and Role</p>
            <ul class="ssmp-header__clr">
                <li class="ssmp-header__clr-item ssmp-header__clr-product">
                    <span class="ssmp-header__clr-item-label"><span class="ssmp-header__clr-item-label-text"></span> <span class="ssmp-header__clr-item-caret"><svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span></span>
                    <div class="ssmp-header__clr-change-popover">
                        <div><strong class="ssmp-header__clr-change-site-label-text"></strong></div>
                        <ul class="ssmp-header__clr-change-popover__group">
                            <!--
                            BEGIN Example Product list item
                            <li class="ssmp-header__clr-change-popover__item">
                                <a href="#" title="Product Name" class="ssmp-header__clr-change-popover__item-link">Product Name</a>
                            </li>
                            END Example Product list item
                            -->
                        </ul>
                    </div>
                </li>
                <li class="ssmp-header__clr-item ssmp-header__clr-language">
                    <span class="ssmp-header__clr-item-label"><span class="ssmp-header__clr-item-label-text"></span> <span class="ssmp-header__clr-item-caret"><svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span></span>
                    <div class="ssmp-header__clr-change-popover">
                        <div><strong class="ssmp-header__clr-change-lang-label-text"></strong></div>
                        <ul class="ssmp-header__clr-change-popover__group">
                            <!--
                            BEGIN Example Language list item
                            <li class="ssmp-header__clr-change-popover__item">
                                <a href="#" title="Language Name" class="ssmp-header__clr-change-popover__item-link">Language Name</a>
                            </li>
                            END Example Language list item
                            -->
                        </ul>
                    </div>
                </li>
                <li class="ssmp-header__clr-item ssmp-header__clr-country">
                    <span class="ssmp-header__clr-item-label"><button type="button" class="ssmp-header__clr-change-clrp-button"></button></span>
                </li>
                <li class="ssmp-header__clr-item ssmp-header__clr-role">
                    <span class="ssmp-header__clr-item-label"><button type="button" class="ssmp-header__clr-change-clrp-button"></button></span>
                </li>
            </ul>
            <div class="ssmp-header__search ssmp-search-box">
                <form action="/us/en/individual/etfs/search-results">
                    <div class="search-box">
                        <button type="submit" class="btn-search"><svg class=\'ssmpsvg icon_search\'><use xlink:href=\'#icon_search\'></use></svg></button>
                        <input class="input-keywords" type="search" name="q" autocomplete="off"/>
                        <svg class=\'ssmpsvg close clear-search-box\'><use xlink:href=\'#close\'></use></svg>
                    </div>
                    <div class="suggestion">
                        <ul></ul>
                        <div class="ssmp-ctalink--button ssmp-more-results">
                            <div class="ssmp-ctalink">
                                <a class="ssmp-ctalink__link" href="#">More Results</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ssmp-header__actions">
                <!-- /* These links will be populated by JavaScript*/ -->
            </div>
        </nav>

        <hr class="ssmp-header__divider"/>

        <nav class="ssmp-header__site-nav">
            <div class="ssmp-header__site-nav-container aem-Grid aem-Grid--12">
                <div class="ssmp-header__logo cmp-image aem-GridColumn aem-GridColumn--tablet--9 aem-GridColumn--phone--9">
                   <a href="/"><img class="cmp-image__image" src="/library-content/images/site/logo-ssga-spdr.svg" alt="State Street Global Advisors"/></a>
                </div>
                <div class="ssmp-header__pages aem-GridColumn aem-GridColumn--tablet--9 aem-GridColumn--phone--12" id="header-navbar"><div class="navigation-container">
<nav class="cmp-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <ul class="cmp-navigation__group">

        <li class="cmp-navigation__item ">



		<a href="/us/en/individual/etfs/fund-finder.html" title="ETF Finder" class="cmp-navigation__item-link" aria-label="ETF Finder">ETF Finder</a>



        </li>

        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Investment Capabilities">Investment Capabilities <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Insights">Insights <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Resources">Resources <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="About Us">About Us <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>

    </ul>
    <div class="nav-sub-panel-container">

        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Investment Capabilities</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Investment Ideas</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/investment-ideas/be-nimble-with-liquid-etfs" title="Be Nimble with Liquid ETFs">Be Nimble with Liquid ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-thematically-in-new-economy-etfs" title="Invest Thematically in New Economy ETFs">Invest Thematically in New Economy ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/uncover-opportunities-in-mid-caps" title="Uncover Opportunities in Mid Caps">Uncover Opportunities in Mid Caps</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/simplify-investing-with-fixed-income-etfs" title="Simplify Investing with Fixed Income ETFs">Simplify Investing with Fixed Income ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-with-sector-etfs" title=" Invest with Sector ETFs"> Invest with Sector ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/build-a-strong-low-cost-core-portfolio" title="Build a Strong Low-Cost Core Portfolio">Build a Strong Low-Cost Core Portfolio</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-in-gold-etfs" title="Invest in Gold ETFs">Invest in Gold ETFs</a></li>








               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Capabilities</div>
                    <ul>


















                            	<li><a href="/us/en/individual/etfs/resources/state-street-etf-model-portfolios" title="ETF Model Portfolios">ETF Model Portfolios</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Insights</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Featured Topics</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/insights/insurance-companies-accelerate-etf-investments" title="Insurance Companies Accelerate ETF Investments">Insurance Companies Accelerate ETF Investments</a></li>





                       		<li><a href="/us/en/individual/etfs/insights/the-big-what-if-amazon-and-blue-origin-disrupt-the-federal-contract-market" title="The Big What If">The Big What If</a></li>










               	</ul>

	               	<div class="view-all">
	                	<a href="/us/en/individual/etfs/insights" title="View All Insights">View All Insights</a>
					</div>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Publications</div>
                    <ul>






                            	<li><a href="/us/en/individual/etfs/insights/2020-market-outlook" title="2020 ETF Market Outlook">2020 ETF Market Outlook</a></li>





                            	<li><a href="/us/en/individual/etfs/insights/uncommon-sense" title="Uncommon Sense">Uncommon Sense</a></li>





                            	<li><a href="/us/en/individual/etfs/insights/market-trends" title="Market Trends">Market Trends</a></li>





                            	<li><a href="/us/en/individual/etfs/insights?g=publications%3Aspdr-blog" title="SPDR Blog">SPDR Blog</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Resources</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">ETF Education</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/resources/education/what-is-an-etf" title="What is an ETF?">What is an ETF?</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/comparing-etfs-mutual-funds-and-stocks" title="Comparing ETFs, Mutual Funds and Stocks">Comparing ETFs, Mutual Funds and Stocks</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/how-etfs-are-created-and-redeemed" title="How ETFs Are Created and Redeemed">How ETFs Are Created and Redeemed</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/how-to-use-etfs-in-a-portfolio" title="How to Use ETFs in a Portfolio">How to Use ETFs in a Portfolio</a></li>




               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Announcements</div>
                    <ul>










                            	<li><a href="/us/en/individual/etfs/resources/documents/dividend-distributions" title="Distributions">Distributions</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>About Us</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Who We Are</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/about-us/who-we-are" title="Overview">Overview</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/awards-and-recognition" title="Awards &amp; Recognition">Awards &amp; Recognition</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/careers" title="Join Our Team">Join Our Team</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/leadership" title="Leadership">Leadership</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/our-history" title="Our History">Our History</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/state-street-etf-press-releases" title="Press Releases">Press Releases</a></li>












               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">What We Stand For</div>
                    <ul>














                            	<li><a href="/us/en/individual/etfs/about-us/what-we-stand-for" title="Overview">Overview</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/asset-stewardship" title="Asset Stewardship">Asset Stewardship</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/asset-stewardship/fearless-girl" title="Fearless Girl">Fearless Girl</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/what-we-stand-for/inclusion-and-diversity" title="Inclusion and Diversity">Inclusion and Diversity</a></li>




					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">
			<div>
	            <div class="nav-sub-group">
					<div class="nav-sub-heading">Who We Serve</div>
                    	<ul>






















                                	<li><a href="/us/en/individual/etfs/about-us/who-we-serve" title="Who We Serve">Who We Serve</a></li>


                    	</ul>


                   	</div>
        		</div>
 	       </div>


        </div>
    </div>
</nav>
<div>

</div></div></div>



                <div class="ssmp-header__search ssmp-search-box aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">
                    <form action="/us/en/individual/etfs/search-results">
                        <div class="search-box">
                            <button type="submit" class="btn-search"><svg class=\'ssmpsvg icon_search\'><use xlink:href=\'#icon_search\'></use></svg></button>
                            <input class="input-keywords" type="search" name="q" autocomplete="off"/>
                            <svg class=\'ssmpsvg close clear-search-box\'><use xlink:href=\'#close\'></use></svg>
                        </div>
                        <div class="suggestion">
                            <ul></ul>
                            <div class="ssmp-ctalink--button ssmp-more-results">
                                <div class="ssmp-ctalink">
                                    <a class="ssmp-ctalink__link" href="#">More Results</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <button type="button" class="ssmp-header__search-open">
                <svg class=\'ssmpsvg ssmpsvg-2x icon_search\'><use xlink:href=\'#icon_search\'></use></svg>
            </button>

            <button type="button" class="ssmp-header__hamburger-open"><svg class=\'ssmpsvg ssmpsvg-2x hamburger\'><use xlink:href=\'#hamburger\'></use></svg></button>
        </nav>
        <div class="ssmp-header__search ssmp-search-box mobile-search-box">
            <form action="/us/en/individual/etfs/search-results">
                <div class="search-box">
                    <input class="input-keywords" type="search" name="q" autocomplete="off"/>
                    <svg class=\'ssmpsvg close clear-search-box\'><use xlink:href=\'#close\'></use></svg>
                </div>
                <div class="suggestion">
                    <ul></ul>
                    <div class="ssmp-ctalink--button ssmp-more-results">
                        <div class="ssmp-ctalink">
                            <a class="ssmp-ctalink__link" href="#">More Results</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="insite-panel-target"></div>

    </div>
    <div>
    <div class="ssmp-header ssmp-mobile-header ssmp-global-modal">
        <div class="ssmp-mobile-header__container">
            <div class="ssmp-modal__page ssmp-modal__navigation-page">
                <div class="ssmp-mobile-header__top">
                    <div class="ssmp-header__site-nav">
                        <div class="ssmp-header__site-nav-container">
                            <div class="ssmp-header__logo cmp-image">
                                <a href="/"><img class="cmp-image__image" src="/library-content/images/site/logo-ssga-spdr.svg" alt="State Street Global Advisors"/></a>
                            </div>
                        </div>
                        <button type="button" class="ssmp-header__hamburger-close"><svg class=\'ssmpsvg ssmpsvg-2x close\'><use xlink:href=\'#close\'></use></svg></button>
                    </div>
                    <div class="ssmp-mobile-header__pages">
                         <div>
<nav class="cmp-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <ul class="cmp-navigation__group">

        <li class="cmp-navigation__item ">



		<a href="/us/en/individual/etfs/fund-finder.html" title="ETF Finder" class="cmp-navigation__item-link" aria-label="ETF Finder">ETF Finder</a>



        </li>

        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Investment Capabilities">Investment Capabilities <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Insights">Insights <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="Resources">Resources <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>


        <li class="cmp-navigation__item cmp-navigation__item--level-0 ">


		<span class="cmp-navigation__item-text" aria-label="About Us">About Us <svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></span>





        </li>

    </ul>
    <div class="nav-sub-panel-container">

        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Investment Capabilities</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Investment Ideas</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/investment-ideas/be-nimble-with-liquid-etfs" title="Be Nimble with Liquid ETFs">Be Nimble with Liquid ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-thematically-in-new-economy-etfs" title="Invest Thematically in New Economy ETFs">Invest Thematically in New Economy ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/uncover-opportunities-in-mid-caps" title="Uncover Opportunities in Mid Caps">Uncover Opportunities in Mid Caps</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/simplify-investing-with-fixed-income-etfs" title="Simplify Investing with Fixed Income ETFs">Simplify Investing with Fixed Income ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-with-sector-etfs" title=" Invest with Sector ETFs"> Invest with Sector ETFs</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/build-a-strong-low-cost-core-portfolio" title="Build a Strong Low-Cost Core Portfolio">Build a Strong Low-Cost Core Portfolio</a></li>





                       		<li><a href="/us/en/individual/etfs/investment-ideas/invest-in-gold-etfs" title="Invest in Gold ETFs">Invest in Gold ETFs</a></li>








               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Capabilities</div>
                    <ul>


















                            	<li><a href="/us/en/individual/etfs/resources/state-street-etf-model-portfolios" title="ETF Model Portfolios">ETF Model Portfolios</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Insights</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Featured Topics</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/insights/insurance-companies-accelerate-etf-investments" title="Insurance Companies Accelerate ETF Investments">Insurance Companies Accelerate ETF Investments</a></li>





                       		<li><a href="/us/en/individual/etfs/insights/the-big-what-if-amazon-and-blue-origin-disrupt-the-federal-contract-market" title="The Big What If">The Big What If</a></li>










               	</ul>

	               	<div class="view-all">
	                	<a href="/us/en/individual/etfs/insights" title="View All Insights">View All Insights</a>
					</div>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Publications</div>
                    <ul>






                            	<li><a href="/us/en/individual/etfs/insights/2020-market-outlook" title="2020 ETF Market Outlook">2020 ETF Market Outlook</a></li>





                            	<li><a href="/us/en/individual/etfs/insights/uncommon-sense" title="Uncommon Sense">Uncommon Sense</a></li>





                            	<li><a href="/us/en/individual/etfs/insights/market-trends" title="Market Trends">Market Trends</a></li>





                            	<li><a href="/us/en/individual/etfs/insights?g=publications%3Aspdr-blog" title="SPDR Blog">SPDR Blog</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>Resources</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">ETF Education</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/resources/education/what-is-an-etf" title="What is an ETF?">What is an ETF?</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/comparing-etfs-mutual-funds-and-stocks" title="Comparing ETFs, Mutual Funds and Stocks">Comparing ETFs, Mutual Funds and Stocks</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/how-etfs-are-created-and-redeemed" title="How ETFs Are Created and Redeemed">How ETFs Are Created and Redeemed</a></li>





                       		<li><a href="/us/en/individual/etfs/resources/education/how-to-use-etfs-in-a-portfolio" title="How to Use ETFs in a Portfolio">How to Use ETFs in a Portfolio</a></li>




               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">Announcements</div>
                    <ul>










                            	<li><a href="/us/en/individual/etfs/resources/documents/dividend-distributions" title="Distributions">Distributions</a></li>


					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">

 	       </div>


        </div>


        <div class="nav-sub-panel  aem-Grid aem-Grid--12">



        <div class="nav-sub-title aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <h3>About Us</h3>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div class="nav-sub-group">
               	<div>
               		<div class="nav-sub-heading">Who We Are</div>
				</div>
				<ul>


                       		<li><a href="/us/en/individual/etfs/about-us/who-we-are" title="Overview">Overview</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/awards-and-recognition" title="Awards &amp; Recognition">Awards &amp; Recognition</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/careers" title="Join Our Team">Join Our Team</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/leadership" title="Leadership">Leadership</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/our-history" title="Our History">Our History</a></li>





                       		<li><a href="/us/en/individual/etfs/about-us/state-street-etf-press-releases" title="Press Releases">Press Releases</a></li>












               	</ul>

			</div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">
			<div>
                <div class="nav-sub-group">
                    <div class="nav-sub-heading">What We Stand For</div>
                    <ul>














                            	<li><a href="/us/en/individual/etfs/about-us/what-we-stand-for" title="Overview">Overview</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/asset-stewardship" title="Asset Stewardship">Asset Stewardship</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/asset-stewardship/fearless-girl" title="Fearless Girl">Fearless Girl</a></li>





                            	<li><a href="/us/en/individual/etfs/about-us/what-we-stand-for/inclusion-and-diversity" title="Inclusion and Diversity">Inclusion and Diversity</a></li>




					</ul>

                </div>
			</div>

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--6 aem-GridColumn--phone--12 ">
			<div>
	            <div class="nav-sub-group">
					<div class="nav-sub-heading">Who We Serve</div>
                    	<ul>






















                                	<li><a href="/us/en/individual/etfs/about-us/who-we-serve" title="Who We Serve">Who We Serve</a></li>


                    	</ul>


                   	</div>
        		</div>
 	       </div>


        </div>
    </div>
</nav>
<div>

</div></div>
                    </div>
                </div>
                <div class="ssmp-mobile-header__bottom">
                    <div class="ssmp-accordion ssmp-accordion--mobile-header">
                            <div class="ssmp-accordion__list">
                                <div class="ssmp-separator ssmp-separator--weight-md">
                                    <hr class="ssmp-separator"/>
                                </div>
                                <div class="ssmp-mobile-header__clr-product">
                                    <div class="ssmp-accordion__item">
                                        <div class="ssmp-accordion__summary">
                                            <div class="ssmp-accordion__summary-text">
                                            </div>
                                            <div class="ssmp-accordion__summary-caret"><svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></div>
                                        </div>
                                        <div class="ssmp-accordion__body">
                                            <ul class="ssmp-mobile-header__accordion-group">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ssmp-separator ssmp-separator--weight-xs">
                                    <hr class="ssmp-separator"/>
                                </div>
                                <div class="ssmp-mobile-header__clr-language">
                                    <div class="ssmp-accordion__item">
                                        <div class="ssmp-accordion__summary">
                                            <div class="ssmp-accordion__summary-text">
                                            </div>
                                            <div class="ssmp-accordion__summary-caret"><svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg></div>
                                        </div>
                                        <div class="ssmp-accordion__body">
                                            <ul class="ssmp-mobile-header__accordion-group">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="ssmp-mobile-header__clr-container">
                        <ul class="ssmp-mobile-header__clr">
                            <li class="ssmp-mobile-header__clr-product-label"></li>
                            <li class="ssmp-mobile-header__clr-country"></li>
                            <li class="ssmp-mobile-header__clr-role"></li>
                        </ul>
                        <a id="ssmp-mobile-header__change-clr-cta" class="ssmp-mobile-header__clr-change-location-role-label-text" href="#"></a>
                    </div>
                    <div class="ssmp-mobile-header__actions">
                        <!-- /* These links will be populated by JavaScript*/ -->
                    </div>
                </div>
            </div>
            <!-- BEGIN SSMP Modal Page for Self Identifier -->

<div class="ssmp-modal__page ssmp-modal__self-identifier-page">
  <div class="ssmp-self-identifier">
  	  <button id="ssmp-self-identifier__close-button" type="button" class="ssmp-self-identifier__close-button"><svg class=\'ssmpsvg ssmpsvg-2x close\'><use xlink:href=\'#close\'></use></svg></button>
      <div class="ssmp-self-identifier__title">
          <strong id=\'js-ssmp-clrTitle\'></strong> <strong id=\'js-ssmp-clrSubTitle\'></strong>
      </div>
      <div class="form-row">
        <div class="ssmp-self-identifier__dropdown-section">
            <label>
                <div id="js-ssmp-clrLocationLabel"></div>
            </label>
            <select id="js-ssmp-locationDrop" class="ssmp-form-custom-select" name="location">
                <option selected id="js-ssmp-clrLocationText"></option>
            </select>
        </div>
        <div class="ssmp-self-identifier__dropdown-section">
            <label>
                <div id="js-ssmp-clrLanguageLabel"></div>
            </label>
            <select id="js-ssmp-languageDrop" class="ssmp-form-custom-select" name="language">
                <option selected id="js-ssmp-clrLanguageText"></option>
            </select>
        </div>
      </div>

      <div class="form-row">
        <div class="ssmp-self-identifier__role-section">
            <fieldset>
                <legend id="js-ssmp-clrRoleLabel"></legend>
                <div id="js-ssmp-roleHTML"></div>
                <div id="roleMobileHTML">
                    <div class="ssmp-self-identifier__dropdown-section">
                        <select id="RoleDrop" class="ssmp-form-custom-select" name="role">
                        </select>
                    </div>
                </div>
            </fieldset>
        </div>
      </div>

      <!-- END ctalink button component-->
      <div class="ssmp-self-identifier__disclosure" id="js-ssmp-disclosure"></div>

      <!-- BEGIN ctalink button component-->

      <div class="form-row">
        <div class="ssmp-ctalink ssmp-self-identifier__related-links">
            <a id="js-ssmp-investorsText" class="ssmp-ctalink__link ssmp-investors-link" href="#"></a>
            <a id="js-ssmp-clrTermsText" class="ssmp-ctalink__link" href="#"></a>
            <a id="js-ssmp-clrPrivacyText" class="ssmp-ctalink__link" href="#"></a>
        </div>

        <div class="ssmp-self-identifier__checkbox-section">
            <div class="ssmp-form-checkbox">
                <label id="js-ssmp-agreement" class="ssmp-form-checkbox__label">
                    <input type="checkbox" class="ssmp-form-checkbox__input" name="ssga-default-profile"/>
                    <div class="ssmp-form-checkbox__description" id="js-ssmp-clrCheckboxLabel"></div>
                </label>
            </div>
        </div>

        <div class="ssmp-self-identifier__button">
            <div class="ssmp-ctalink--button">
                <div class="ssmp-ctalink ssmp-ctalink--button-outlined">
                    <button id="js-ssmp-clrButtonLabel" class="ssmp-ctalink__link disabled"></button>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>




 <!-- END SSMP Modal Page for Self Identifier -->

            <!-- BEGIN SSMP Modal Page for Product Selector -->
<div class="ssmp-modal__page ssmp-modal__self-identifier-product-page">

    <div class="ssmp-self-identifier">
        <div class="aem-Grid aem-Grid--12">
            <div class="aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--tablet--8 aem-GridColumn--phone--12">
                <div class="ssmp-self-identifier__title">
                    <strong id="js-ssmp-clrpTitle"></strong>
                </div>
            </div>
            <div class="aem-GridColumn aem-GridColumn--default--4 aem-GridColumn--tablet--4 aem-GridColumn--phone--12">
                <div class="ssmp-self-identifier__view-all-link">
                    <!-- BEGIN ctalink Component -->
                    <div class="ssmp-ctalink">
                        <a class="ssmp-ctalink__link" href="#" id="js-ssmp-clrPreviousPageText"></a>
                    </div>
                    <!-- END ctalink Component -->
                </div>
            </div>
        </div>

        <div class="ssmp-self-identifier__product-section">
            <fieldset>
                <legend class="ssmp-self-identifier__product-section__legend">Please select a product</legend>
                <div id="js-ssmp-productsHTML"></div>
            </fieldset>
        </div>

        <div class="ssmp-self-identifier__button">
            <!-- BEGIN ctalink button component-->
            <div class="ssmp-ctalink--button">
                <div class="ssmp-ctalink ssmp-ctalink--button-outlined">
                    <button id="js-ssmp-clrButton2Label" class="ssmp-ctalink__link disabled"></button>
                </div>
            </div>
            <!-- END ctalink button component-->
        </div>
    </div>
</div>

 <!-- END SSMP Modal Page for Product Selector -->

        </div>
    </div>
</div>
    <div>
    <div id="ssmp-language-change-modal" class="ssmp-global-modal" data-show-close-button="true">
        <div class="ssmp-global-modal__container">
            <div>
                <p><strong>Are you sure you want to change languages?</strong></p>
                <p>The page you are visiting uses a different locale than your saved profile. Do you want to change your locale?</p>
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--6">
                        <div class="ssmp-ctalink--button">
                            <div class="ssmp-ctalink" id="js-ssmp-clrKeepPreferencesButton">
                                <a class="ssmp-ctalink__link" href="#">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="responsivegrid aem-GridColumn aem-GridColumn--default--6">
                        <div class="ssmp-ctalink--button">
                            <div class="ssmp-ctalink" id="js-ssmp-clrChangePreferencesButton">
                                <a class="ssmp-ctalink__link" href="#">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- /* Escape link modal */ -->
    <div id="ssmp-escape-modal" class="ssmp-global-modal" data-show-close-button="false">
        <div class="ssmp-global-modal__container">
            <div>
                <p><strong>You are leaving SSGA.com</strong></p>
                <p>The website you are accessing is created and maintained by another entity. We make no representation or warranty with respect to the information contained on the site or that it is appropriate in all jurisdictions or countries, or for use by all investors or counterparties. The products and services discussed at this site may not be appropriate for sale or use by all investors or counterparties. By providing this link, we are not providing you with investment advice or offering securities for sale to you. All persons and entities that access this site do so on their own initiative and are responsible for compliance with applicable local laws and regulations.</p>
                <div>
                    <div class="ssmp-ctalink--button">
                        <div class="ssmp-ctalink">
                            <a id="ssmp-escape-accept" class="ssmp-ctalink__link" href="/">Accept</a>
                            <a id="ssmp-escape-cancel" class="ssmp-ctalink__link" href="#">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Leave site modal starts-->
    <div id="ssmp-leaving-site-modal" class="ssmp-global-modal" data-show-close-button="false">
            <div class="ssmp-global-modal__container">
        <div>
               <p><strong>You are leaving SSGA.com</strong></p>
                <p>The website you are accessing is created and maintained by another entity. We make no representation or warranty with respect to the information contained on the site or that it is appropriate in all jurisdictions or countries, or for use by all investors or counterparties. The products and services discussed at this site may not be appropriate for sale or use by all investors or counterparties. By providing this link, we are not providing you with investment advice or offering securities for sale to you. All persons and entities that access this site do so on their own initiative and are responsible for compliance with applicable local laws and regulations.</p><div>
                <div class="ssmp-ctalink--button">
                    <div class="ssmp-ctalink">
                        <a id="ssmp-anonymous-accept" class="ssmp-ctalink__link" href="https://www.ssga.com">Accept</a>
                        <a id="ssmp-anonymous-cancel" class="ssmp-ctalink__link" href="#">Cancel</a>
                    </div>
                </div>
                  </div>
           </div>
        </div>
      </div>
      <!-- Leave site modal ends -->
    <!-- CTA Leave site modal starts-->
    <div id="ssmp-cta-leaving-site-modal" class="ssmp-global-modal" data-show-close-button="false">
        <div class="ssmp-global-modal__container">
            <div>
               <p><strong>You are leaving SSGA.com</strong></p>
                   <p>The website you are accessing is created and maintained by another entity. We make no representation or warranty with respect to the information contained on the site or that it is appropriate in all jurisdictions or countries, or for use by all investors or counterparties. The products and services discussed at this site may not be appropriate for sale or use by all investors or counterparties. By providing this link, we are not providing you with investment advice or offering securities for sale to you. All persons and entities that access this site do so on their own initiative and are responsible for compliance with applicable local laws and regulations.</p>
                   <div>
                    <div class="ssmp-ctalink--button">
                        <div class="ssmp-ctalink">
                            <a id="ssmp-cta-accept" class="ssmp-ctalink__link">Accept</a>
                            <a id="ssmp-cta-cancel" class="ssmp-ctalink__link" href="#">Cancel</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!-- CTA Leave site modal ends -->
      <!--Disabled Cookies modal starts-->
      <div id="ssmp-cookies-message-modal" class="ssmp-global-modal" data-show-close-button="false">
        <div class="ssmp-global-modal__container">
                <div>
                    <p><strong>Cookies are required to enter the site.</strong></p>
                 <p>When entering the site and if cookies are prevented from being saved, a message must be displayed
                    in a popup message box informing the user that their local browser settings are preventing
                    cookies from being saved and that cookies are required for the site to work. Exact text
                    to be provided for UAT. On OK click of the message, the user should be redirected to
                    the global landing page (currently ssga.com).
                 </p>
                 <div class="aem-Grid aem-Grid--12">
                        <div class="aem-GridColumn aem-GridColumn--default--10 aem-GridColumn--tablet--10 aem-GridColumn--phone--12">&nbsp;</div>
                            <div class="aem-GridColumn aem-GridColumn--default--2 aem-GridColumn--tablet--2 aem-GridColumn--phone--12">
                                <div class="ssmp-ctalink--button">
                                    <div class="ssmp-ctalink">
                                        <a id="ssmp-disable-cookies-accept" class="ssmp-ctalink__link" href="https://www.ssga.com">Okay</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
      </div>
      <!--Disabled Cookies modal ends-->
    <!--Investors Disclaimer modal starts-->
    <div id="ssmp-investors-disclaimer-modal" class="ssmp-global-modal" data-show-close-button="false">
        <div class="ssmp-global-modal__container">
            <div>
                <div id="js-ssmp-investors-disclaimer"></div>
                <div class="ssmp-ctalink--button">
                    <div class="ssmp-ctalink">
                        <a id="js-ssmp-clrAcceptLabel" class="ssmp-ctalink__link" href="#"></a>
                        <a id="js-ssmp-clrDeclineLabel" class="ssmp-ctalink__link" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Investors Disclaimer modal ends-->
    <!-- Download confirm modal starts-->
    <div id="ssmp-download-modal" class="ssmp-global-modal" data-show-close-button="true">
        <div class="ssmp-global-modal__container">
            <p class="ssmp-self-identifier__title"><strong>Centralized Systematic Valuation Aggregated Cash Flow (ACF Files) </strong></p>
            <div><p>This information provided is calculated by Bloomberg Finance L.P., a third party not affiliated with SSGA. Neither SSGA nor its affiliates assume any liability for or guarantee the timeliness, accuracy and completeness of the information provided. The information provided is as of the date indicated and is subject to change.</p><p>This analysis or any portion thereof may not be revised or changed in any way, reprinted, sold or redistributed without the written consent of SSGA.</p><p>This cash flow table and the data contained herein (together, &quot;Content&quot;) is provided for informational purposes only, on an &quot;as is&quot; basis. No source of Content, or any of its affiliates (each a &quot;Source&quot;), makes any warranty, express or implied, that the Content is accurate, complete or error-free, and it should not be relied upon as such. No Source guarantees the timeliness, reliability, performance, continued availability, or currency of the Content or any results obtained therefrom. No Source shall be liable for any damages, including without limitation, any special, punitive, indirect, incidental or consequential damages, or any lost profits, arising from the use of or reliance on the Content, even if advised of the possibility of such damages. Nothing in the Content shall constitute or be construed as an offering of financial instruments by any Source, or as investment advice or recommendations by such entities of an investment strategy or whether or not to &quot;buy&quot;, &quot;sell&quot; or &quot;hold&quot; an investment.</p></div>
            <div class="ssmp-ctalink--button">
                <div class="ssmp-ctalink">
                    <a id="ssmp-download-accept" class="ssmp-ctalink__link" href="#">I Agree</a>
                    <a id="ssmp-download-cancel" class="ssmp-ctalink__link" href="#">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Download confirm modal ends-->
</header>
</div>
<div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
<div class="aem-Grid aem-Grid--16 aem-Grid--default--16 ">

    <div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">






















</div>
<div class="fundpageheader fundcomps aem-GridColumn aem-GridColumn--default--12">


        <div class="fund-detail-header">


    <div>
        <div class="ssmp-separator--weight-lg">
            <hr class="ssmp-separator"/>
        </div>
    </div>


            <h1>
                <span>SPDR� S&amp;P 500� ETF Trust</span>


                <span class="ticker">SPY</span>
            </h1>

        </div>


    <input type="hidden" id="fund-info-country" value="us"/>
    <input type="hidden" id="fund-info-language" value="en"/>
    <input type="hidden" id="fund-info-ticker" value="SPY"/>
    <input type="hidden" id="fund-info-role" value="individual"/>
    <input type="hidden" id="fund-info-product" value="etfs"/>
    <input type="hidden" id="fund-quick-info" value="{&#34;label&#34;:&#34;Fund Quick Info&#34;,&#34;asOfDate&#34;:&#34;as of Feb 25 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 25 2020&#34;,&#34;attrs&#34;:{&#34;fund-investment-vehicle&#34;:{&#34;label&#34;:&#34;Investment Vehicle&#34;,&#34;value&#34;:&#34;Exchange Traded Fund&#34;},&#34;fund-assetclass&#34;:{&#34;label&#34;:&#34;Asset Class&#34;,&#34;value&#34;:&#34;Equity&#34;},&#34;investment-style&#34;:{&#34;label&#34;:&#34;Investment Style&#34;,&#34;value&#34;:&#34;Index&#34;},&#34;investment-geography&#34;:{&#34;label&#34;:&#34;Investment Geography&#34;,&#34;value&#34;:&#34;United States&#34;},&#34;fund-domicile&#34;:{&#34;label&#34;:&#34;Domicile&#34;,&#34;value&#34;:&#34;UNITED STATES&#34;},&#34;fund-domicile-simple&#34;:{&#34;label&#34;:&#34;Domicile Simple&#34;,&#34;value&#34;:&#34;US&#34;},&#34;expense-ratio&#34;:{&#34;label&#34;:&#34;Expense Ratio&#34;,&#34;value&#34;:&#34;0.0945%&#34;},&#34;benchmark-family&#34;:{&#34;label&#34;:&#34;Benchmark Family&#34;,&#34;value&#34;:&#34;S&amp;P Dow Jones&#34;},&#34;primary-exchange-name&#34;:{&#34;label&#34;:&#34;Primary Exchange Name&#34;,&#34;value&#34;:&#34;NYSE ARCA EXCHANGE&#34;},&#34;asof-format&#34;:{&#34;label&#34;:&#34;Asof Format&#34;,&#34;value&#34;:&#34;MMM dd yyyy&#34;},&#34;supported-language&#34;:{&#34;label&#34;:&#34;Supported Language&#34;,&#34;value&#34;:&#34;en&#34;},&#34;performance-inception-date&#34;:{&#34;label&#34;:&#34;Performance Inception Date&#34;,&#34;value&#34;:&#34;Jan 22 1993&#34;},&#34;fund-name&#34;:{&#34;label&#34;:&#34;Fund Name&#34;,&#34;value&#34;:&#34;SPDR� S&amp;P 500� ETF Trust&#34;},&#34;fund-name-simple&#34;:{&#34;label&#34;:&#34;Fund Name Simple&#34;,&#34;value&#34;:&#34;SPDR� S&amp;P 500� ETF Trust&#34;},&#34;fund-name-en&#34;:{&#34;label&#34;:&#34;Fund Name&#34;,&#34;value&#34;:&#34;SPDR� S&amp;P 500� ETF Trust&#34;},&#34;inception-date&#34;:{&#34;label&#34;:&#34;Inception Date&#34;,&#34;value&#34;:&#34;Jan 22 1993&#34;},&#34;fund-ticker&#34;:{&#34;label&#34;:&#34;Ticker&#34;,&#34;value&#34;:&#34;SPY&#34;},&#34;gross-expense-ratio&#34;:{&#34;label&#34;:&#34;Gross Expense Ratio&#34;,&#34;value&#34;:&#34;0.0945%&#34;,&#34;glossary&#34;:&#34;&lt;p>&lt;strong>?Gross Expense Ratio&lt;/strong>&lt;/p>&lt;p>The fund&#39;s total annual operating expense ratio. It is gross of any fee waivers or expense reimbursements. It can be found in the fund&#39;s most recent prospectus.&lt;/p>&#34;},&#34;nav&#34;:{&#34;label&#34;:&#34;NAV&#34;,&#34;value&#34;:&#34;$322.41&#34;,&#34;asOfDate&#34;:&#34;as of Feb 24 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 24 2020&#34;,&#34;glossary&#34;:&#34;&lt;p>&lt;strong>NAV&lt;/strong>&lt;/p>&lt;p>The market value of a mutual fund&#39;s or ETFs total assets, minus liabilities, divided by the number of shares outstanding.&lt;/p>&#34;},&#34;aum&#34;:{&#34;label&#34;:&#34;Assets Under Management&#34;,&#34;value&#34;:&#34;$301,608.87 M&#34;,&#34;asOfDate&#34;:&#34;as of Feb 24 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 24 2020&#34;},&#34;listing-date&#34;:{&#34;label&#34;:&#34;Listing Date&#34;,&#34;value&#34;:&#34;Jan 22 1993&#34;},&#34;nav-date&#34;:{&#34;label&#34;:&#34;NAV Date&#34;,&#34;value&#34;:&#34;24-Feb-2020&#34;}},&#34;childCompCodes&#34;:[&#34;fund-net-asset-value&#34;,&#34;index-quick-info&#34;]}"/>
    <input type="hidden" id="index-quick-info" value="{&#34;label&#34;:&#34;Index Quick Info&#34;,&#34;asOfDate&#34;:&#34;as of Feb 25 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 25 2020&#34;,&#34;attrs&#34;:{&#34;index-name&#34;:{&#34;label&#34;:&#34;Primary Index Name&#34;,&#34;value&#34;:&#34;S&amp;P 500 Index&#34;},&#34;index-name-simple&#34;:{&#34;label&#34;:&#34;Primary Benchmark&#34;,&#34;value&#34;:&#34;S&amp;P 500 Index&#34;}}}"/>

    <input type="hidden" id="decimal-point" value="."/>
    <input type="hidden" id="thousands-sep" value=","/>
</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">








    <div class="ssmp-risk-info" data-fundComponent="true">
        <div class="aem-Grid aem-Grid--12">
            <div class="info-pane aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">

                <h2 class="active"><svg class=\'ssmpsvg caret-down\'><use xlink:href=\'#caret-down\'></use></svg><span>Important Risk Disclosure</span></h2>


                    <div class="info" style="display: none;"><p>In general, ETFs can be expected to move up or down in value with the value of the applicable index. Although ETF shares may be bought and sold on the exchange through any brokerage account, ETF shares are not individually redeemable from the Fund. Investors may acquire ETFs and tender them for redemption through the Fund in Creation Unit Aggregations only. Please see the prospectus for more details.</p><p><strong>Equity securities</strong> may fluctuate in value in response to the activities of individual companies and general market and economic conditions.</p><p>The municipal market is volatile and can be significantly affected by adverse tax, legislative or political changes and the financial condition of the issuers of municipal securities. Interest rate increases can cause the price of a debt security to decrease. A portion of the dividends you receive may be subject to federal, state, or local income tax or may be subject to the federal alternative minimum tax..</p><p>Income exempt from federal income tax may be subject to state or local tax and the Federal Alternative Minimum Tax (AMT).</p><p>Non-diversified funds that focus on a relatively small number of securities tend to be more volatile than diversified funds and the market as a whole.</p><p><strong>Passively managed funds</strong> hold a range of securities that, in the aggregate, approximates the full Index in terms of key risk factors and other characteristics. This may cause the fund to experience tracking errors relative to performance of the index.</p><p>While the shares of ETFs are tradable on secondary markets, they may not readily trade in all market conditions and may trade at significant discounts in periods of <strong>market stress</strong>.</p><p><strong>ETFs</strong> trade like stocks, are subject to investment risk, fluctuate in market value and may trade at prices above or below the ETFs net asset value. Brokerage commissions and ETF expenses will reduce returns.</p><p><strong>Before investing, consider the funds\' investment objectives, risks, charges and expenses. To obtain a prospectus or summary prospectus which contains this and other information, call 1-866-787-2257 download a <a href="https://www.ssga.com/etfs/fund-finder?tab=documents" target="_blank"><strong>prospectus or summary prospectus</strong></a><strong> now, or talk to your financial advisor. Read it carefully before investing.</strong></strong></p></div>

            </div>
        </div>
    </div>







</div>
<div class="fundpagenav aem-GridColumn aem-GridColumn--default--12">






        <div class="fund-nav">
            <ul>
                <li class="active"><a href="#overview" data-tab-name="#overview">Overview</a></li>
                <li><a href="#performance" data-tab-name="#performance">Performance</a></li>
                <li><a href="#holdings" data-tab-name="#holdings">Holdings</a></li>

                <li><a href="#documents" data-tab-name="#documents">Document</a></li>

                    <li><a href="#how-to-buy" data-tab-name="#how-to-buy">Purchase Information</a></li>

            </ul>



        </div>

        <div class="fund-content aem-GridColumn aem-GridColumn--default--12">



    <div id="overview" class="overview aem-Grid aem-Grid--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="fundsnapshot aem-GridColumn aem-GridColumn--default--12">



        <div class="snapshot aem-Grid aem-Grid--12">


    <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--phone--12" data-fundComponent="true">
        <div class="key-values">


            <div class="value">
                <div class="label">

                        NAV
                        <div class="info">
                            <svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg>
                            <div class="tooltip"><div class="content"><p><strong>NAV</strong></p><p>The market value of a mutual fund\'s or ETFs total assets, minus liabilities, divided by the number of shares outstanding.</p></div></div>
                        </div>

                </div>

                <p class="points">$322.41</p>



                <p class="label">as of Feb 24 2020</p>
            </div>



            <div class="value">
                <div class="label">

                        Base Currency


                </div>

                <p class="points">USD</p>




            </div>



            <div class="value">
                <div class="label">

                        Assets Under Management


                </div>

                <p class="points">$301,608.87 M</p>



                <p class="label">as of Feb 24 2020</p>
            </div>



            <div class="value">
                <div class="label">

                        Gross Expense Ratio
                        <div class="info">
                            <svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg>
                            <div class="tooltip"><div class="content"><p><strong>?Gross Expense Ratio</strong></p><p>The fund\'s total annual operating expense ratio. It is gross of any fee waivers or expense reimbursements. It can be found in the fund\'s most recent prospectus.</p></div></div>
                        </div>

                </div>

                <p class="points">0.0945%</p>




            </div>
        </div>

    </div>

                <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="funddocsection aem-GridColumn aem-GridColumn--default--12">

    <div class="literature quick-links fund-section" data-fundComponent="true">
        <p>Quick Links</p>
        <div>
            <ul>
                <li><a href="/library-content/products/factsheets/etfs/us/factsheet-us-en-spy.pdf" target="_blank">Factsheet</a></li>

                <li><a href="/library-content/products/fund-docs/etfs/us/ps/SPDR_500-TRUST_PROSPECTUS.pdf" target="_blank">Prospectus</a></li>

                <li><a href="/us/en/individual/etfs/resources/documents/dividend-distributions">ETF Historical Distributions</a></li>
            </ul>
        </div>
    </div>
</div>


</div>
                </div>


        </div>

</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class=" comp-text aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>





                <h2 class="ssmp-d-mobile-none"><span>Key Features</span></h2>


                <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Key Features</span></p>


                <div class="content"><ul><li>The SPDR<sup>�</sup> S&amp;P 500<sup>�</sup> ETF Trust seeks to provide investment results that, before expenses, correspond generally to the price and yield performance of the S&amp;P 500<sup>�</sup> Index (the &quot;Index&quot;)</li><li>The S&amp;P 500 Index is a diversified large cap U.S. index that holds companies across all eleven GICS sectors</li><li>Launched in January 1993, SPY was the very first exchange traded fund listed in the United States</li></ul></div>


        </div>
    </div>






</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">
















</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class=" comp-text aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>





                <h2 class="ssmp-d-mobile-none"><span>About this Benchmark</span></h2>


                <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>About this Benchmark</span></p>


                <div class="content"><p>The S&amp;P 500<sup>�</sup> Index is composed of five hundred (500) selected stocks, all of which are listed on national stock exchanges and spans over approximately�24 separate industry groups.</p></div>


        </div>
    </div>






</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">
















</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">







    <div class="aem-Grid aem-Grid--12 comp-table fund-info" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Fund Information <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Information <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Benchmark</th>

                            <th>Inception Date</th>

                            <th>Options Available</th>

                            <th>Gross Expense Ratio<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Gross Expense Ratio</strong></p><p>The fund\'s total annual operating expense ratio. It is gross of any fee waivers or expense reimbursements. It can be found in the fund\'s most recent prospectus.</p></div></div></div></th>

                            <th>Base Currency</th>

                            <th>Trustee</th>

                            <th>Marketing Agent</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>S&amp;P 500 Index</td>

                            <td>Jan 22 1993</td>

                            <td>Yes</td>

                            <td>0.0945%</td>

                            <td>USD</td>

                            <td>State Street Global Advisors Trust Company</td>

                            <td>State Street Global Advisors Funds Distributors, LLC</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Benchmark</td>
                            <td>S&amp;P 500 Index</td>
                        </tr>

                        <tr>
                            <td>Inception Date</td>
                            <td>Jan 22 1993</td>
                        </tr>

                        <tr>
                            <td>Options Available</td>
                            <td>Yes</td>
                        </tr>

                        <tr>
                            <td>Gross Expense Ratio<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Gross Expense Ratio</strong></p><p>The fund\'s total annual operating expense ratio. It is gross of any fee waivers or expense reimbursements. It can be found in the fund\'s most recent prospectus.</p></div></div></div></td>
                            <td>0.0945%</td>
                        </tr>

                        <tr>
                            <td>Base Currency</td>
                            <td>USD</td>
                        </tr>

                        <tr>
                            <td>Trustee</td>
                            <td>State Street Global Advisors Trust Company</td>
                        </tr>

                        <tr>
                            <td>Marketing Agent</td>
                            <td>State Street Global Advisors Funds Distributors, LLC</td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Distributor</th>

                            <th>Distribution Frequency</th>

                            <th></th>

                            <th></th>

                            <th></th>

                            <th></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ALPS Distributors, Inc.</td>

                            <td>Quarterly</td>

                            <td></td>

                            <td></td>

                            <td></td>

                            <td></td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Distributor</td>
                            <td>ALPS Distributors, Inc.</td>
                        </tr>

                        <tr>
                            <td>Distribution Frequency</td>
                            <td>Quarterly</td>
                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>






</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">








    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Listing Information <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Listing Information <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Exchange</th>

                            <th>Listing Date</th>

                            <th>Trading Currency</th>

                            <th>Ticker</th>

                            <th>CUSIP</th>

                            <th>ISIN</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>NYSE ARCA EXCHANGE</td>

                            <td>Jan 22 1993</td>

                            <td>USD</td>

                            <td>SPY</td>

                            <td>78462F103</td>

                            <td>US78462F1030</td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Exchange</td>
                            <td>NYSE ARCA EXCHANGE</td>
                        </tr>

                        <tr>
                            <td>Listing Date</td>
                            <td>Jan 22 1993</td>
                        </tr>

                        <tr>
                            <td>Trading Currency</td>
                            <td>USD</td>
                        </tr>

                        <tr>
                            <td>Ticker</td>
                            <td>SPY</td>
                        </tr>

                        <tr>
                            <td>CUSIP</td>
                            <td>78462F103</td>
                        </tr>

                        <tr>
                            <td>ISIN</td>
                            <td>US78462F1030</td>
                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>





</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">








    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Fund Characteristics <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Characteristics <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Est. 3-5 Year EPS Growth<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Estimated 3-5 Year EPS Growth</strong></p><p>Based on the underlying holdings of the fund. The actual earnings estimates for the underlying holdings are provided by FactSet, First Call, I/B/E/S Consensus, and Reuters and are used to calculate a mean 3-5 year EPS growth rate estimate.</p></div></div></div></th>

                            <th>Number of Holdings</th>

                            <th>Price/Book Ratio<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Price/Book Ratio</strong></p><p>The weighted harmonic average of closing market price divided by the most recent reported book value for each security in the fund\'s portfolio as calculated for the last twelve months.</p></div></div></div></th>

                            <th>Price/Earnings Ratio FY1<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Price/Earnings Ratio FY1</strong></p><p>The weighted harmonic average of current share price divided by the forecasted one year earnings per share for each security in the fund. Negative and positive outliers are included in the calculation.</p></div></div></div></th>

                            <th>Weighted Average Market Cap</th>

                            <th></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>11.62%</td>

                            <td>505</td>

                            <td>3.35</td>

                            <td>18.84</td>

                            <td>$306,180.50 M</td>

                            <td></td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Est. 3-5 Year EPS Growth<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Estimated 3-5 Year EPS Growth</strong></p><p>Based on the underlying holdings of the fund. The actual earnings estimates for the underlying holdings are provided by FactSet, First Call, I/B/E/S Consensus, and Reuters and are used to calculate a mean 3-5 year EPS growth rate estimate.</p></div></div></div></td>
                            <td>11.62%</td>
                        </tr>

                        <tr>
                            <td>Number of Holdings</td>
                            <td>505</td>
                        </tr>

                        <tr>
                            <td>Price/Book Ratio<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Price/Book Ratio</strong></p><p>The weighted harmonic average of closing market price divided by the most recent reported book value for each security in the fund\'s portfolio as calculated for the last twelve months.</p></div></div></div></td>
                            <td>3.35</td>
                        </tr>

                        <tr>
                            <td>Price/Earnings Ratio FY1<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Price/Earnings Ratio FY1</strong></p><p>The weighted harmonic average of current share price divided by the forecasted one year earnings per share for each security in the fund. Negative and positive outliers are included in the calculation.</p></div></div></div></td>
                            <td>18.84</td>
                        </tr>

                        <tr>
                            <td>Weighted Average Market Cap</td>
                            <td>$306,180.50 M</td>
                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>





</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Index Characteristics <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Index Characteristics <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Est. 3-5 Year EPS Growth</th>

                            <th>Number of Holdings</th>

                            <th>Price/Cash Flow</th>

                            <th>Price/Earnings</th>

                            <th>Price/Earnings Ratio FY1</th>

                            <th></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>11.62%</td>

                            <td>505</td>

                            <td>13.37</td>

                            <td>21.46</td>

                            <td>18.84</td>

                            <td></td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Est. 3-5 Year EPS Growth</td>
                            <td>11.62%</td>
                        </tr>

                        <tr>
                            <td>Number of Holdings</td>
                            <td>505</td>
                        </tr>

                        <tr>
                            <td>Price/Cash Flow</td>
                            <td>13.37</td>
                        </tr>

                        <tr>
                            <td>Price/Earnings</td>
                            <td>21.46</td>
                        </tr>

                        <tr>
                            <td>Price/Earnings Ratio FY1</td>
                            <td>18.84</td>
                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>




</div>
<div class="indexstatistics fundcomps aem-GridColumn aem-GridColumn--default--12">





    <div class="aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12">
            <div class="aem-Grid aem-Grid--12 comp-table index-statistics">
                <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


                    <h2 class="ssmp-d-mobile-none">
                        <span>Index Statistics <span class="date">as of Feb 24 2020</span>
                        </span>
                    </h2>
                    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg>
                        <span>Index Statistics <span class="date">as of Feb 24 2020</span>
                        </span>
                    </p>
                    <div class="statistics-info">
                        <table class="ssmp-d-tablet-none ssmp-d-mobile-none">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th colspan="2">
                                        <div>Average Size</div>
                                    </th>
                                    <th colspan="2">
                                        <div>Size Range</div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Weighted Average Market Cap</th>
                                    <th>Mean</th>
                                    <th>Median</th>
                                    <th>Largest</th>
                                    <th>Smallest</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$306,106.38 M</td>
                                    <td>$58,128.49 M</td>
                                    <td>$23,557.47 M</td>
                                    <td>$1,307,507.00 M</td>
                                    <td>$3,954.78 M</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                            <tbody>
                                <tr>
                                    <td>Weighted Average Market Cap</td>
                                    <td>$306,106.38 M</td>
                                </tr>

                                    <tr class="sub-title">
                                        <td colspan="2">Average Size</td>
                                    </tr>
                                    <tr>
                                        <td>Mean</td>
                                        <td>$58,128.49 M</td>
                                    </tr>
                                    <tr>
                                        <td>Median</td>
                                        <td>$23,557.47 M</td>
                                    </tr>


                                    <tr class="sub-title">
                                        <td colspan="2">Size Range</td>
                                    </tr>
                                    <tr>
                                        <td>Largest</td>
                                        <td>$1,307,507.00 M</td>
                                    </tr>
                                    <tr>
                                        <td>Smallest</td>
                                        <td>$3,954.78 M</td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Yields <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Yields <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>30 Day SEC Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><span id="_mce_caret"><strong>?30 Day SEC Yield</strong></span></p><p>(Also known as Standardized Yield) An annualized yield that is calculated by dividing the net investment income earned by the fund over the most recent 30-day period by the current maximum offering price.</p></div></div></div></th>

                            <th>Fund Dividend Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Fund Dividend Yield</strong></p><p>The sum of the most recent 12 dividends within the past 365 days divided by Net Asset Value per share, expressed as a percentage.</p></div></div></div></th>

                            <th>Index Dividend Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Index Dividend Yield</strong></p><p>The weighted average of the underlyings\' indicated annual dividend divided by price, expressed as a percentage.</p></div></div></div></th>

                            <th></th>

                            <th></th>

                            <th></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.72%</td>

                            <td>1.74%</td>

                            <td>1.86%</td>

                            <td></td>

                            <td></td>

                            <td></td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>30 Day SEC Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><span id="_mce_caret"><strong>?30 Day SEC Yield</strong></span></p><p>(Also known as Standardized Yield) An annualized yield that is calculated by dividing the net investment income earned by the fund over the most recent 30-day period by the current maximum offering price.</p></div></div></div></td>
                            <td>1.72%</td>
                        </tr>

                        <tr>
                            <td>Fund Dividend Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Fund Dividend Yield</strong></p><p>The sum of the most recent 12 dividends within the past 365 days divided by Net Asset Value per share, expressed as a percentage.</p></div></div></div></td>
                            <td>1.74%</td>
                        </tr>

                        <tr>
                            <td>Index Dividend Yield<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Index Dividend Yield</strong></p><p>The weighted average of the underlyings\' indicated annual dividend divided by price, expressed as a percentage.</p></div></div></div></td>
                            <td>1.86%</td>
                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>




</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">







    <div class="aem-Grid aem-Grid--12 comp-table fund-info" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Fund Market Price <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Market Price <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Bid/Ask<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Bid/Ask Mid Point</strong></p><p>(Also known as Mid Price) The price between the best price of the sellers for a trading unit of a given security and the best price of the buyer of a trading unit of a given a given security.</p></div></div></div></th>

                            <th>Closing Price<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Closing Price</strong></p><p>Market Price of last reported trade on the exchange.</p></div></div></div></th>

                            <th>Day High</th>

                            <th>Day Low</th>

                            <th>Exchange Volume (Shares)<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>Exchange Volume (shares)</strong></p><p>Represents the volume of shares traded on the ETF\'s�primary exchange throughout the previous business day.</p></div></div></div></th>

                            <th>Premium/Discount<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Premium/Discount to NAV</strong></p><p>Shows the comparison of the daily net asset value (NAV) and the Midpoint of the closing bid/ask for each of the funds calculated as ((4PM Bid/Ask - Closing NAV)  /  Closing NAV * 100)</p></div></div></div></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>$322.40</td>

                            <td>$322.42</td>

                            <td>$325.84</td>

                            <td>$321.25</td>

                            <td>33,172,468</td>

                            <td>0.00%</td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Bid/Ask<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Bid/Ask Mid Point</strong></p><p>(Also known as Mid Price) The price between the best price of the sellers for a trading unit of a given security and the best price of the buyer of a trading unit of a given a given security.</p></div></div></div></td>
                            <td>$322.40</td>
                        </tr>

                        <tr>
                            <td>Closing Price<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Closing Price</strong></p><p>Market Price of last reported trade on the exchange.</p></div></div></div></td>
                            <td>$322.42</td>
                        </tr>

                        <tr>
                            <td>Day High</td>
                            <td>$325.84</td>
                        </tr>

                        <tr>
                            <td>Day Low</td>
                            <td>$321.25</td>
                        </tr>

                        <tr>
                            <td>Exchange Volume (Shares)<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>Exchange Volume (shares)</strong></p><p>Represents the volume of shares traded on the ETF\'s�primary exchange throughout the previous business day.</p></div></div></div></td>
                            <td>33,172,468</td>
                        </tr>

                        <tr>
                            <td>Premium/Discount<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>?Premium/Discount to NAV</strong></p><p>Shows the comparison of the daily net asset value (NAV) and the Midpoint of the closing bid/ask for each of the funds calculated as ((4PM Bid/Ask - Closing NAV)  /  Closing NAV * 100)</p></div></div></div></td>
                            <td>0.00%</td>
                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>




                <div class="premium-history-chart">
                    <h3 class="chart-name">Premium Discount to Nav </h3>
                    <div class="chart-info">
                        <div class="quarter-select">
                            <div>Quarter</div>
                            <div class="select-dropdown">
                                <div class="select-head"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg></div>
                                <ul class="option"></ul>
                            </div>
                        </div>
                        <div class="axis">
                            <div>x axis: # of days</div>
                            <div>y axis: # Premium/Discount percentage</div>
                        </div>
                    </div>
                    <div class="chart-container">
                        <div class="chart-holder" data-chart-source="premium-history-chart" data-chart-type="NAV-BAR" data-highcharts-chart="0"></div>
                    </div>
                    <input id="premium-history-chart" type="hidden" value="{&#34;2019 - Q4&#34;:[{&#34;lowerLimit&#34;:-5.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-5.0 to -4.5&#34;},{&#34;lowerLimit&#34;:-4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.5 to -4.0&#34;},{&#34;lowerLimit&#34;:-4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.0 to -3.5&#34;},{&#34;lowerLimit&#34;:-3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.5 to -3.0&#34;},{&#34;lowerLimit&#34;:-3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.0 to -2.5&#34;},{&#34;lowerLimit&#34;:-2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.5 to -2.0&#34;},{&#34;lowerLimit&#34;:-2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.0 to -1.5&#34;},{&#34;lowerLimit&#34;:-1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.5 to -1.0&#34;},{&#34;lowerLimit&#34;:-1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.0 to -0.5&#34;},{&#34;lowerLimit&#34;:-0.5,&#34;value&#34;:64,&#34;name&#34;:&#34;-0.5 to 0.5&#34;},{&#34;lowerLimit&#34;:0.5,&#34;value&#34;:0,&#34;name&#34;:&#34;0.5 to 1.0&#34;},{&#34;lowerLimit&#34;:1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;1.0 to 1.5&#34;},{&#34;lowerLimit&#34;:1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;1.5 to 2.0&#34;},{&#34;lowerLimit&#34;:2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;2.0 to 2.5&#34;},{&#34;lowerLimit&#34;:2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;2.5 to 3.0&#34;},{&#34;lowerLimit&#34;:3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;3.0 to 3.5&#34;},{&#34;lowerLimit&#34;:3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;3.5 to 4.0&#34;},{&#34;lowerLimit&#34;:4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;4.0 to 4.5&#34;},{&#34;lowerLimit&#34;:4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;4.5 to 5.0&#34;}],&#34;2019 - Q3&#34;:[{&#34;lowerLimit&#34;:-5.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-5.0 to -4.5&#34;},{&#34;lowerLimit&#34;:-4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.5 to -4.0&#34;},{&#34;lowerLimit&#34;:-4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.0 to -3.5&#34;},{&#34;lowerLimit&#34;:-3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.5 to -3.0&#34;},{&#34;lowerLimit&#34;:-3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.0 to -2.5&#34;},{&#34;lowerLimit&#34;:-2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.5 to -2.0&#34;},{&#34;lowerLimit&#34;:-2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.0 to -1.5&#34;},{&#34;lowerLimit&#34;:-1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.5 to -1.0&#34;},{&#34;lowerLimit&#34;:-1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.0 to -0.5&#34;},{&#34;lowerLimit&#34;:-0.5,&#34;value&#34;:64,&#34;name&#34;:&#34;-0.5 to 0.5&#34;},{&#34;lowerLimit&#34;:0.5,&#34;value&#34;:0,&#34;name&#34;:&#34;0.5 to 1.0&#34;},{&#34;lowerLimit&#34;:1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;1.0 to 1.5&#34;},{&#34;lowerLimit&#34;:1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;1.5 to 2.0&#34;},{&#34;lowerLimit&#34;:2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;2.0 to 2.5&#34;},{&#34;lowerLimit&#34;:2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;2.5 to 3.0&#34;},{&#34;lowerLimit&#34;:3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;3.0 to 3.5&#34;},{&#34;lowerLimit&#34;:3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;3.5 to 4.0&#34;},{&#34;lowerLimit&#34;:4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;4.0 to 4.5&#34;},{&#34;lowerLimit&#34;:4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;4.5 to 5.0&#34;}],&#34;2019 - Q2&#34;:[{&#34;lowerLimit&#34;:-5.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-5.0 to -4.5&#34;},{&#34;lowerLimit&#34;:-4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.5 to -4.0&#34;},{&#34;lowerLimit&#34;:-4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.0 to -3.5&#34;},{&#34;lowerLimit&#34;:-3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.5 to -3.0&#34;},{&#34;lowerLimit&#34;:-3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.0 to -2.5&#34;},{&#34;lowerLimit&#34;:-2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.5 to -2.0&#34;},{&#34;lowerLimit&#34;:-2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.0 to -1.5&#34;},{&#34;lowerLimit&#34;:-1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.5 to -1.0&#34;},{&#34;lowerLimit&#34;:-1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.0 to -0.5&#34;},{&#34;lowerLimit&#34;:-0.5,&#34;value&#34;:63,&#34;name&#34;:&#34;-0.5 to 0.5&#34;},{&#34;lowerLimit&#34;:0.5,&#34;value&#34;:0,&#34;name&#34;:&#34;0.5 to 1.0&#34;},{&#34;lowerLimit&#34;:1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;1.0 to 1.5&#34;},{&#34;lowerLimit&#34;:1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;1.5 to 2.0&#34;},{&#34;lowerLimit&#34;:2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;2.0 to 2.5&#34;},{&#34;lowerLimit&#34;:2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;2.5 to 3.0&#34;},{&#34;lowerLimit&#34;:3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;3.0 to 3.5&#34;},{&#34;lowerLimit&#34;:3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;3.5 to 4.0&#34;},{&#34;lowerLimit&#34;:4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;4.0 to 4.5&#34;},{&#34;lowerLimit&#34;:4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;4.5 to 5.0&#34;}],&#34;2019 - Q1&#34;:[{&#34;lowerLimit&#34;:-5.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-5.0 to -4.5&#34;},{&#34;lowerLimit&#34;:-4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.5 to -4.0&#34;},{&#34;lowerLimit&#34;:-4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-4.0 to -3.5&#34;},{&#34;lowerLimit&#34;:-3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.5 to -3.0&#34;},{&#34;lowerLimit&#34;:-3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-3.0 to -2.5&#34;},{&#34;lowerLimit&#34;:-2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.5 to -2.0&#34;},{&#34;lowerLimit&#34;:-2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-2.0 to -1.5&#34;},{&#34;lowerLimit&#34;:-1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.5 to -1.0&#34;},{&#34;lowerLimit&#34;:-1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;-1.0 to -0.5&#34;},{&#34;lowerLimit&#34;:-0.5,&#34;value&#34;:61,&#34;name&#34;:&#34;-0.5 to 0.5&#34;},{&#34;lowerLimit&#34;:0.5,&#34;value&#34;:0,&#34;name&#34;:&#34;0.5 to 1.0&#34;},{&#34;lowerLimit&#34;:1.0,&#34;value&#34;:0,&#34;name&#34;:&#34;1.0 to 1.5&#34;},{&#34;lowerLimit&#34;:1.5,&#34;value&#34;:0,&#34;name&#34;:&#34;1.5 to 2.0&#34;},{&#34;lowerLimit&#34;:2.0,&#34;value&#34;:0,&#34;name&#34;:&#34;2.0 to 2.5&#34;},{&#34;lowerLimit&#34;:2.5,&#34;value&#34;:0,&#34;name&#34;:&#34;2.5 to 3.0&#34;},{&#34;lowerLimit&#34;:3.0,&#34;value&#34;:0,&#34;name&#34;:&#34;3.0 to 3.5&#34;},{&#34;lowerLimit&#34;:3.5,&#34;value&#34;:0,&#34;name&#34;:&#34;3.5 to 4.0&#34;},{&#34;lowerLimit&#34;:4.0,&#34;value&#34;:0,&#34;name&#34;:&#34;4.0 to 4.5&#34;},{&#34;lowerLimit&#34;:4.5,&#34;value&#34;:0,&#34;name&#34;:&#34;4.5 to 5.0&#34;}]}"/>
                </div>





                        <a href="/library-content/products/fund-data/etfs/us/pdhist-us-en-spy.xlsx">Fund Data</a>



                <div class="disclosure-items"><p>The above information is provided to show the comparison of the daily net asset value (NAV) and the Midpoint of the closing bid/ask for each of the funds.</p><p><strong>Before investing, consider the funds\' investment objectives, risks, charges and expenses. To obtain a prospectus or summary prospectus which contains this and other information, call 1-866-787-2257 download a <a href="https://www.ssga.com/etfs/fund-finder?tab=documents" target="_blank"><strong>prospectus or summary prospectus</strong></a><strong> now, or talk to your financial advisor. Read it carefully before investing.</strong></strong></p></div>
            </div>
        </div>
    </div>






</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Fund Net Cash Amount <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Net Cash Amount <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="1">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>Net Cash Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>$812,539,622.60</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>Net Cash Amount</td>
                            <td>$812,539,622.60</td>
                        </tr>
                        </tbody>
                    </table>







            </div>
        </div>
    </div>




</div>
<div class="keyvalue fundcomps aem-GridColumn aem-GridColumn--default--12">








    <div class="aem-Grid aem-Grid--12 comp-table " data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>



                <h2 class="ssmp-d-mobile-none"><span>Fund Net Asset Value <span class="date">as of Feb 24 2020</span></span></h2>
                <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Net Asset Value <span class="date">as of Feb 24 2020</span></span></div>


            <div class="table-items" data-columnlength="7">

                    <table class="ssmp-d-mobile-none ssmp-d-tablet-none">
                        <thead>
                        <tr>
                            <th>NAV<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>NAV</strong></p><p>The market value of a mutual fund\'s or ETFs total assets, minus liabilities, divided by the number of shares outstanding.</p></div></div></div></th>

                            <th>Shares Outstanding</th>

                            <th>Assets Under Management</th>

                            <th></th>

                            <th></th>

                            <th></th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>$322.41</td>

                            <td>935.48M</td>

                            <td>$301,608.87 M</td>

                            <td></td>

                            <td></td>

                            <td></td>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ssmp-d-desktop-none ssmp-d-large-screen-none">
                        <tbody>
                        <tr>
                            <td>NAV<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p><strong>NAV</strong></p><p>The market value of a mutual fund\'s or ETFs total assets, minus liabilities, divided by the number of shares outstanding.</p></div></div></div></td>
                            <td>$322.41</td>
                        </tr>

                        <tr>
                            <td>Shares Outstanding</td>
                            <td>935.48M</td>
                        </tr>

                        <tr>
                            <td>Assets Under Management</td>
                            <td>$301,608.87 M</td>
                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>

                        <tr>


                        </tr>
                        </tbody>
                    </table>








                        <a href="/library-content/products/fund-data/etfs/us/navhist-us-en-spy.xlsx">Most Recent NAV / NAV History</a>






            </div>
        </div>
    </div>





</div>


</div>
    </div>




    <div id="performance" class="performance aem-Grid aem-Grid--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="performancechart fundcomps aem-GridColumn aem-GridColumn--default--12">
























    <div class="performance-chart comp-chart comp-table aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


            <h2 class="ssmp-d-mobile-none">
                <span>Fund Performance</span>
                <div class="view-as">
                    <span>View as</span>
                    <div class="tab-nav" data-tab-type="tab-view-as">
                        <a href="#" class="tab-nav-link icon-table" data-tab-name="tab-panel-tables"><svg class="ssmpsvg icon_table"><use xlink:href="#icon_table"></use></svg></a>
                        <a href="#" class="tab-nav-link icon-chart" data-tab-name="tab-panel-charts"><svg class="ssmpsvg icon_chart"><use xlink:href="#icon_chart"></use></svg></a>
                    </div>
                </div>
            </h2>
            <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none">
                <svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg>
                <span>Fund Performance</span></p>
            <div class="items table-items">
                <ul class="inception-date">
                    <li>Fund Inception Date: <span>Jan 22 1993</span></li>





                </ul>
                <div class="timeline tab-nav" data-tab-type="tab-timeline">


                    <a href="#" class="tab-nav-link" data-tab-name="tab-panel-ann">Performance</a>

                </div>
                <div class="table-chart">

                    <div class="table-chart-content tab-panel tab-timeline" data-tab-name="tab-panel-ann">
                        <div class="end tab-nav" data-tab-type="tab-end-ann">
                            <a href="#" class="tab-nav-link" data-tab-name="tab-panel-mth">Month End</a>
                            <a href="#" class="tab-nav-link" data-tab-name="tab-panel-qtr">Quarter End</a>
                        </div>
                        <div class="tab-panel tab-view-as tables" data-tab-name="tab-panel-tables">
                            <table class="tab-panel tab-end-ann" data-tab-name="tab-panel-mth">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>As Of</th>

                                            <th>1 Month</th>

                                            <th>QTD</th>

                                            <th>YTD</th>

                                            <th>1 Year</th>

                                            <th>3 Year</th>

                                            <th>5 Year</th>

                                            <th>10 Year</th>

                                            <th>Since Inception<br />Jan 22 1993</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="sub-head">
                                        <th>Fund Before Tax</th>
                                        <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                    </tr>

                                        <tr>
                                            <td>NAV</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>21.47%</td>

                                                <td>14.37%</td>

                                                <td>12.22%</td>

                                                <td>13.81%</td>

                                                <td>9.71%</td>

                                        </tr>

                                        <tr>
                                            <td>Market Value</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>21.43%</td>

                                                <td>14.34%</td>

                                                <td>12.20%</td>

                                                <td>13.81%</td>

                                                <td>9.70%</td>

                                        </tr>

                                        <tr>
                                            <td>S&amp;P 500 Index</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.04%</td>

                                                <td>-0.04%</td>

                                                <td>-0.04%</td>

                                                <td>21.68%</td>

                                                <td>14.54%</td>

                                                <td>12.37%</td>

                                                <td>13.97%</td>

                                                <td>9.85%</td>

                                        </tr>

                                    <tr class="sub-head">
                                        <th>Fund After Tax</th>
                                        <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                    </tr>

                                        <tr>
                                            <td>Return after Taxes on Distributions</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>-0.05%</td>

                                                <td>20.94%</td>

                                                <td>13.87%</td>

                                                <td>11.69%</td>

                                                <td>13.31%</td>

                                                <td>9.17%</td>

                                        </tr>

                                        <tr>
                                            <td>Return after Taxes on Distributions and Sale of Fund Shares</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.03%</td>

                                                <td>-0.03%</td>

                                                <td>-0.03%</td>

                                                <td>13.05%</td>

                                                <td>11.21%</td>

                                                <td>9.65%</td>

                                                <td>11.50%</td>

                                                <td>8.36%</td>

                                        </tr>

                                        <tr>
                                            <td>S&amp;P 500 Index</td>
                                            <td>Jan 31 2020</td>

                                                <td>-0.04%</td>

                                                <td>-0.04%</td>

                                                <td>-0.04%</td>

                                                <td>21.68%</td>

                                                <td>14.54%</td>

                                                <td>12.37%</td>

                                                <td>13.97%</td>

                                                <td>9.85%</td>

                                        </tr>

                                </tbody>
                            </table>
                            <table class="tab-panel tab-end-ann" data-tab-name="tab-panel-qtr">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>As Of</th>

                                            <th>1 Month</th>

                                            <th>QTD</th>

                                            <th>YTD</th>

                                            <th>1 Year</th>

                                            <th>3 Year</th>

                                            <th>5 Year</th>

                                            <th>10 Year</th>

                                            <th>Since Inception<br />Jan 22 1993</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="sub-head">
                                        <th>Fund Before Tax</th>
                                        <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                    </tr>

                                        <tr>
                                            <td>NAV</td>
                                            <td>Dec 31 2019</td>

                                                <td>3.00%</td>

                                                <td>9.03%</td>

                                                <td>31.25%</td>

                                                <td>31.25%</td>

                                                <td>15.11%</td>

                                                <td>11.55%</td>

                                                <td>13.40%</td>

                                                <td>9.74%</td>

                                        </tr>

                                        <tr>
                                            <td>Market Value</td>
                                            <td>Dec 31 2019</td>

                                                <td>2.93%</td>

                                                <td>8.98%</td>

                                                <td>31.09%</td>

                                                <td>31.09%</td>

                                                <td>15.04%</td>

                                                <td>11.54%</td>

                                                <td>13.40%</td>

                                                <td>9.74%</td>

                                        </tr>

                                        <tr>
                                            <td>S&amp;P 500 Index</td>
                                            <td>Dec 31 2019</td>

                                                <td>3.02%</td>

                                                <td>9.07%</td>

                                                <td>31.49%</td>

                                                <td>31.49%</td>

                                                <td>15.27%</td>

                                                <td>11.70%</td>

                                                <td>13.56%</td>

                                                <td>9.88%</td>

                                        </tr>

                                    <tr class="sub-head">
                                        <th>Fund After Tax</th>
                                        <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                            <th></th>

                                    </tr>

                                        <tr>
                                            <td>Return after Taxes on Distributions</td>
                                            <td>Dec 31 2019</td>

                                                <td>2.88%</td>

                                                <td>8.90%</td>

                                                <td>30.68%</td>

                                                <td>30.68%</td>

                                                <td>14.60%</td>

                                                <td>11.02%</td>

                                                <td>12.91%</td>

                                                <td>9.20%</td>

                                        </tr>

                                        <tr>
                                            <td>Return after Taxes on Distributions and Sale of Fund Shares</td>
                                            <td>Dec 31 2019</td>

                                                <td>1.86%</td>

                                                <td>5.43%</td>

                                                <td>18.86%</td>

                                                <td>18.86%</td>

                                                <td>11.80%</td>

                                                <td>9.09%</td>

                                                <td>11.13%</td>

                                                <td>8.39%</td>

                                        </tr>

                                        <tr>
                                            <td>S&amp;P 500 Index</td>
                                            <td>Dec 31 2019</td>

                                                <td>3.02%</td>

                                                <td>9.07%</td>

                                                <td>31.49%</td>

                                                <td>31.49%</td>

                                                <td>15.27%</td>

                                                <td>11.70%</td>

                                                <td>13.56%</td>

                                                <td>9.88%</td>

                                        </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-panel tab-view-as charts" data-tab-name="tab-panel-charts">
                            <div class="chart-container tab-panel tab-end-ann" data-tab-name="tab-panel-mth">
                                <p class="as-of">as of Jan 31 2020</p>
                                <div class="chart-holder" data-chart-source="data-point-ann-mon" data-chart-type="PERF-BAR" data-hide-diff="true"></div>
                            </div>
                            <div class="chart-container tab-panel tab-end-ann" data-tab-name="tab-panel-qtr">
                                <p class="as-of">as of Dec 31 2019</p>
                                <div class="chart-holder" data-chart-source="data-point-ann-qtr" data-chart-type="PERF-BAR" data-hide-diff="true"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="disclosure">
                    <p><strong><em>Performance quoted represents past performance, which is no guarantee of future results. Investment return and principal value will fluctuate, so you may have a gain or loss when shares are sold. Current performance may be higher or lower than that quoted. Performance of an index is not illustrative of any particular investment.� It is not possible to invest directly in an index. Returns greater than one year and since inception are annualized.</em></strong></p><p>The market price used to calculate the Market Value return is the midpoint between the highest bid and the lowest offer on the exchange on which the shares of the Fund are listed for trading, as of the time that the Fund\'s NAV is calculated. If you trade your shares at another time, your return may differ.</p>

                        <p>Gross Expense Ratio: 0.0945%</p>

                </div>
            </div>
        </div>
    </div>



        <input type="hidden" id="data-point-ann-qtr" value="{&#34;fund-perf-ann-net-total-qtr-before-tax&#34;:{&#34;label&#34;:&#34;NAV&#34;,&#34;asOfDate&#34;:&#34;as of Dec 31 2019&#34;,&#34;asOfDateSimple&#34;:&#34;Dec 31 2019&#34;,&#34;attrs&#34;:{&#34;mo1&#34;:{&#34;label&#34;:&#34;1 Month&#34;,&#34;value&#34;:&#34;3.00%&#34;},&#34;qtd&#34;:{&#34;label&#34;:&#34;QTD&#34;,&#34;value&#34;:&#34;9.03%&#34;},&#34;ytd&#34;:{&#34;label&#34;:&#34;YTD&#34;,&#34;value&#34;:&#34;31.25%&#34;},&#34;yr1&#34;:{&#34;label&#34;:&#34;1 Year&#34;,&#34;value&#34;:&#34;31.25%&#34;},&#34;yr3&#34;:{&#34;label&#34;:&#34;3 Year&#34;,&#34;value&#34;:&#34;15.11%&#34;},&#34;yr5&#34;:{&#34;label&#34;:&#34;5 Year&#34;,&#34;value&#34;:&#34;11.55%&#34;},&#34;yr10&#34;:{&#34;label&#34;:&#34;10 Year&#34;,&#34;value&#34;:&#34;13.40%&#34;},&#34;inception&#34;:{&#34;label&#34;:&#34;Since Inception&lt;br/>Jan 22 1993&#34;,&#34;value&#34;:&#34;9.74%&#34;}}},&#34;index-perf-ann-net-total-qtr&#34;:{&#34;label&#34;:&#34;S&amp;P 500 Index&#34;,&#34;asOfDate&#34;:&#34;as of Dec 31 2019&#34;,&#34;asOfDateSimple&#34;:&#34;Dec 31 2019&#34;,&#34;attrs&#34;:{&#34;mo1&#34;:{&#34;label&#34;:&#34;1 Month&#34;,&#34;value&#34;:&#34;3.02%&#34;},&#34;qtd&#34;:{&#34;label&#34;:&#34;QTD&#34;,&#34;value&#34;:&#34;9.07%&#34;},&#34;ytd&#34;:{&#34;label&#34;:&#34;YTD&#34;,&#34;value&#34;:&#34;31.49%&#34;},&#34;yr1&#34;:{&#34;label&#34;:&#34;1 Year&#34;,&#34;value&#34;:&#34;31.49%&#34;},&#34;yr3&#34;:{&#34;label&#34;:&#34;3 Year&#34;,&#34;value&#34;:&#34;15.27%&#34;},&#34;yr5&#34;:{&#34;label&#34;:&#34;5 Year&#34;,&#34;value&#34;:&#34;11.70%&#34;},&#34;yr10&#34;:{&#34;label&#34;:&#34;10 Year&#34;,&#34;value&#34;:&#34;13.56%&#34;},&#34;inception&#34;:{&#34;label&#34;:&#34;Since Inception&lt;br/>Jan 22 1993&#34;,&#34;value&#34;:&#34;9.88%&#34;}}}}"/>
        <input type="hidden" id="data-point-ann-mon" value="{&#34;fund-perf-ann-net-total-mon-before-tax&#34;:{&#34;label&#34;:&#34;NAV&#34;,&#34;asOfDate&#34;:&#34;as of Jan 31 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Jan 31 2020&#34;,&#34;attrs&#34;:{&#34;mo1&#34;:{&#34;label&#34;:&#34;1 Month&#34;,&#34;value&#34;:&#34;-0.05%&#34;},&#34;qtd&#34;:{&#34;label&#34;:&#34;QTD&#34;,&#34;value&#34;:&#34;-0.05%&#34;},&#34;ytd&#34;:{&#34;label&#34;:&#34;YTD&#34;,&#34;value&#34;:&#34;-0.05%&#34;},&#34;yr1&#34;:{&#34;label&#34;:&#34;1 Year&#34;,&#34;value&#34;:&#34;21.47%&#34;},&#34;yr3&#34;:{&#34;label&#34;:&#34;3 Year&#34;,&#34;value&#34;:&#34;14.37%&#34;},&#34;yr5&#34;:{&#34;label&#34;:&#34;5 Year&#34;,&#34;value&#34;:&#34;12.22%&#34;},&#34;yr10&#34;:{&#34;label&#34;:&#34;10 Year&#34;,&#34;value&#34;:&#34;13.81%&#34;},&#34;inception&#34;:{&#34;label&#34;:&#34;Since Inception&lt;br/>Jan 22 1993&#34;,&#34;value&#34;:&#34;9.71%&#34;}}},&#34;index-perf-ann-net-total-mon&#34;:{&#34;label&#34;:&#34;S&amp;P 500 Index&#34;,&#34;asOfDate&#34;:&#34;as of Jan 31 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Jan 31 2020&#34;,&#34;attrs&#34;:{&#34;mo1&#34;:{&#34;label&#34;:&#34;1 Month&#34;,&#34;value&#34;:&#34;-0.04%&#34;},&#34;qtd&#34;:{&#34;label&#34;:&#34;QTD&#34;,&#34;value&#34;:&#34;-0.04%&#34;},&#34;ytd&#34;:{&#34;label&#34;:&#34;YTD&#34;,&#34;value&#34;:&#34;-0.04%&#34;},&#34;yr1&#34;:{&#34;label&#34;:&#34;1 Year&#34;,&#34;value&#34;:&#34;21.68%&#34;},&#34;yr3&#34;:{&#34;label&#34;:&#34;3 Year&#34;,&#34;value&#34;:&#34;14.54%&#34;},&#34;yr5&#34;:{&#34;label&#34;:&#34;5 Year&#34;,&#34;value&#34;:&#34;12.37%&#34;},&#34;yr10&#34;:{&#34;label&#34;:&#34;10 Year&#34;,&#34;value&#34;:&#34;13.97%&#34;},&#34;inception&#34;:{&#34;label&#34;:&#34;Since Inception&lt;br/>Jan 22 1993&#34;,&#34;value&#34;:&#34;9.85%&#34;}}}}"/>

        <input type="hidden" id="data-diff-translation" value="Difference"/>

</div>


</div>
    </div>




    <div id="holdings" class="holdings aem-Grid aem-Grid--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">











            <div class="comp-table top-holdings aem-Grid aem-Grid--12" data-fundComponent="true">
                <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


                    <h2 class="ssmp-d-mobile-none"><span>Top Holdings<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p>Subject to change.</p></div></div></div></span></h2>
                    <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Top Holdings<div class="info"><svg class=\'ssmpsvg icon_info\'><use xlink:href=\'#icon_info\'></use></svg><div class="tooltip"><div class="content"><p>Subject to change.</p></div></div></div></span></div>
                    <div class="main-content">
                        <div class="ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none">
                            <div class="table-title">
                                <div><a href="javascript:void(0)">Fund Top Holdings</a><span class="date">as of Feb 24 2020</span></div>

                                <div><a href="javascript:void(0)">Index Top Holdings</a><span class="date">as of Feb 24 2020</span></div>
                            </div>
                        </div>
                        <div class="aem-Grid aem-Grid--12">




    <div class="aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="multicolumndatatable fundcomps aem-GridColumn aem-GridColumn--default--12">









            <div class="fund-top-holdings " data-fundComponent="true">




                <h3>Fund Top Holdings <span class="date">as of Feb 24 2020</span></h3>


        <table class="data-table card-table-mobile ">
            <thead>
                <tr>
                    <th class="label">Name</th>





                        <th>Shares Held</th>

                    <th class="weight">Weight</th>
                </tr>

            </thead>
            <tbody>

                    <tr>
                        <td class="label" data-label="Name:">Microsoft Corporation</td>





                            <td data-label="Shares Held:">84,859,160</td>

                        <td class="weight" data-label="Weight:">4.88%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Apple Inc.</td>





                            <td data-label="Shares Held:">46,459,036</td>

                        <td class="weight" data-label="Weight:">4.66%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Amazon.com Inc.</td>





                            <td data-label="Shares Held:">4,632,785</td>

                        <td class="weight" data-label="Weight:">3.13%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Facebook Inc. Class A</td>





                            <td data-label="Shares Held:">26,768,242</td>

                        <td class="weight" data-label="Weight:">1.81%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Berkshire Hathaway Inc. Class B</td>





                            <td data-label="Shares Held:">21,757,948</td>

                        <td class="weight" data-label="Weight:">1.62%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Alphabet Inc. Class A</td>





                            <td data-label="Shares Held:">3,332,975</td>

                        <td class="weight" data-label="Weight:">1.59%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Alphabet Inc. Class C</td>





                            <td data-label="Shares Held:">3,324,552</td>

                        <td class="weight" data-label="Weight:">1.59%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">JPMorgan Chase &amp; Co.</td>





                            <td data-label="Shares Held:">34,888,504</td>

                        <td class="weight" data-label="Weight:">1.55%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Johnson &amp; Johnson</td>





                            <td data-label="Shares Held:">29,275,620</td>

                        <td class="weight" data-label="Weight:">1.44%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Visa Inc. Class A</td>





                            <td data-label="Shares Held:">19,041,548</td>

                        <td class="weight" data-label="Weight:">1.27%</td>
                    </tr>

            </tbody>
        </table>




                <div>
                    <span class="download">Download All Holdings:

                    <a href="/library-content/products/fund-data/etfs/us/holdings-daily-us-en-spy.xlsx">Daily</a>

                    </span><br/>
                    <span class="download-confirm"></span>
                </div>
            </div>









</div>


</div>
    </div>


    <div class="aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--tablet--6 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="multicolumndatatable fundcomps aem-GridColumn aem-GridColumn--default--12">










            <div class="index-top-holdings d-xs-none ">




                <h3>Index Top Holdings <span class="date">as of Feb 24 2020</span></h3>


        <table class="data-table card-table-mobile ">
            <thead>
                <tr>
                    <th class="label">Name</th>





                    <th class="weight">Weight</th>
                </tr>

            </thead>
            <tbody>

                    <tr>
                        <td class="label" data-label="Name:">Microsoft Corporation</td>





                        <td class="weight" data-label="Weight:">4.88%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Apple Inc.</td>





                        <td class="weight" data-label="Weight:">4.66%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Amazon.com Inc.</td>





                        <td class="weight" data-label="Weight:">3.13%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Facebook Inc. Class A</td>





                        <td class="weight" data-label="Weight:">1.81%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Berkshire Hathaway Inc. Class B</td>





                        <td class="weight" data-label="Weight:">1.62%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Alphabet Inc. Class A</td>





                        <td class="weight" data-label="Weight:">1.59%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Alphabet Inc. Class C</td>





                        <td class="weight" data-label="Weight:">1.59%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">JPMorgan Chase &amp; Co.</td>





                        <td class="weight" data-label="Weight:">1.55%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Johnson &amp; Johnson</td>





                        <td class="weight" data-label="Weight:">1.44%</td>
                    </tr>

                    <tr>
                        <td class="label" data-label="Name:">Visa Inc. Class A</td>





                        <td class="weight" data-label="Weight:">1.27%</td>
                    </tr>

            </tbody>
        </table>




            </div>








</div>


</div>
    </div>




                        </div>

                    </div>
                </div>
            </div>





</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">










            <div class="comp-chart holdings-chart sector_allocation aem-Grid aem-Grid--12" data-fundComponent="true">
                <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


                    <h2 class="ssmp-d-mobile-none"><span>Sector Allocation</span></h2>
                    <div class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Sector Allocation</span></div>
                    <div class="main-content">
                        <div class="ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none">
                            <div class="table-title">
                                <div><a href="javascript:void(0)">Fund Sector Breakdown</a><span class="date">as of Feb 24 2020</span></div>

                                <div><a href="javascript:void(0)">Index Sector Breakdown</a><span class="date">as of Feb 24 2020</span></div>
                            </div>
                        </div>
                        <div class="aem-Grid aem-Grid--12">





	<div class="aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="allocationbargraph fundcomps aem-GridColumn aem-GridColumn--default--12">








        <div class="fund-sector-breakdown " data-fundComponent="true">


                <h4>Fund Sector Breakdown <span class="date">as of Feb 24 2020</span></h4>


            <div class="main-content chart-treemap">


                <div class="chart-holder" data-chart-source="fund-sector-breakdown" data-chart-type="TREEMAP"></div>
                <table class="data-table  ">
                    <thead>
                    <tr>
                        <th class="label">Sector</th>
                        <th class="data">Weight</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td class="label">Information Technology</td>
                        <td class="data">24.12%</td>
                    </tr>

                    <tr>
                        <td class="label">Health Care</td>
                        <td class="data">13.91%</td>
                    </tr>

                    <tr>
                        <td class="label">Financials</td>
                        <td class="data">12.50%</td>
                    </tr>

                    <tr>
                        <td class="label">Communication Services</td>
                        <td class="data">10.47%</td>
                    </tr>

                    <tr>
                        <td class="label">Consumer Discretionary</td>
                        <td class="data">9.85%</td>
                    </tr>

                    <tr>
                        <td class="label">Industrials</td>
                        <td class="data">9.00%</td>
                    </tr>

                    <tr>
                        <td class="label">Consumer Staples</td>
                        <td class="data">7.22%</td>
                    </tr>

                    <tr>
                        <td class="label">Energy</td>
                        <td class="data">3.68%</td>
                    </tr>

                    <tr>
                        <td class="label">Utilities</td>
                        <td class="data">3.55%</td>
                    </tr>

                    <tr>
                        <td class="label">Real Estate</td>
                        <td class="data">3.15%</td>
                    </tr>

                    <tr>
                        <td class="label">Materials</td>
                        <td class="data">2.53%</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <input type="hidden" id="fund-sector-breakdown" value="{&#34;label&#34;:&#34;Fund Sector Breakdown&#34;,&#34;asOfDate&#34;:&#34;as of Feb 24 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 24 2020&#34;,&#34;attrArray&#34;:[{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Information Technology&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;24.12%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Health Care&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;13.91%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Financials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;12.50%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Communication Services&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;10.47%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Consumer Discretionary&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;9.85%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Industrials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;9.00%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Consumer Staples&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;7.22%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Energy&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.68%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Utilities&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.55%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Real Estate&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.15%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Materials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;2.53%&#34;}}]}"/>
        </div>












</div>


</div>
	</div>


	<div class="aem-GridColumn aem-GridColumn--default--6 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="allocationbargraph fundcomps aem-GridColumn aem-GridColumn--default--12">










        <div class="index-sector-breakdown d-xs-none" data-fundComponent="true">


                <h4>Index Sector Breakdown <span class="date">as of Feb 24 2020</span></h4>


            <div class="main-content chart-treemap">


                <div class="chart-holder" data-chart-source="index-sector-breakdown" data-chart-type="TREEMAP"></div>
                <table class="data-table  ">
                    <thead>
                    <tr>
                        <th class="label">Sector</th>
                        <th class="data">Weight</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td class="label">Information Technology</td>
                        <td class="data">24.11%</td>
                    </tr>

                    <tr>
                        <td class="label">Health Care</td>
                        <td class="data">13.91%</td>
                    </tr>

                    <tr>
                        <td class="label">Financials</td>
                        <td class="data">12.50%</td>
                    </tr>

                    <tr>
                        <td class="label">Communication Services</td>
                        <td class="data">10.47%</td>
                    </tr>

                    <tr>
                        <td class="label">Consumer Discretionary</td>
                        <td class="data">9.85%</td>
                    </tr>

                    <tr>
                        <td class="label">Industrials</td>
                        <td class="data">9.00%</td>
                    </tr>

                    <tr>
                        <td class="label">Consumer Staples</td>
                        <td class="data">7.22%</td>
                    </tr>

                    <tr>
                        <td class="label">Energy</td>
                        <td class="data">3.69%</td>
                    </tr>

                    <tr>
                        <td class="label">Utilities</td>
                        <td class="data">3.56%</td>
                    </tr>

                    <tr>
                        <td class="label">Real Estate</td>
                        <td class="data">3.17%</td>
                    </tr>

                    <tr>
                        <td class="label">Materials</td>
                        <td class="data">2.53%</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <input type="hidden" id="index-sector-breakdown" value="{&#34;label&#34;:&#34;Index Sector Breakdown&#34;,&#34;asOfDate&#34;:&#34;as of Feb 24 2020&#34;,&#34;asOfDateSimple&#34;:&#34;Feb 24 2020&#34;,&#34;attrArray&#34;:[{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Information Technology&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;24.11%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Health Care&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;13.91%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Financials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;12.50%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Communication Services&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;10.47%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Consumer Discretionary&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;9.85%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Industrials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;9.00%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Consumer Staples&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;7.22%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Energy&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.69%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Utilities&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.56%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Real Estate&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;3.17%&#34;}},{&#34;name&#34;:{&#34;label&#34;:&#34;Sector&#34;,&#34;value&#34;:&#34;Materials&#34;},&#34;weight&#34;:{&#34;label&#34;:&#34;Weight&#34;,&#34;value&#34;:&#34;2.53%&#34;}}]}"/>
        </div>











</div>


</div>
	</div>



                        </div>

                    </div>
                </div>
            </div>






</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="funddatasectioncontainer fundcomps aem-GridColumn aem-GridColumn--default--12">














</div>
<div class="allocationbargraph fundcomps aem-GridColumn aem-GridColumn--default--12">




















</div>


</div>
    </div>




                <div id="documents" class="documents aem-Grid aem-Grid--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="keydocuments fundcomps aem-GridColumn aem-GridColumn--default--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


    <h2 class="ssmp-d-mobile-none"><span>Fund Documents</span></h2>
    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Documents</span></p>
    <div class="aem-Grid aem-Grid--12">
        <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <div class="document-items fund-section" data-fundComponent="true">

                    <div>
                        <a href="/library-content/products/factsheets/etfs/us/factsheet-us-en-spy.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_factsheet.jpg" alt="image load fail"/></div><div class="doc-name">Factsheet</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/ps/SPDR_500-TRUST_PROSPECTUS.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_prospectus.jpg" alt="image load fail"/></div><div class="doc-name">Prospectus</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/apac/au/ar/annual-report-au-en-spy.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_annual-report.jpg" alt="image load fail"/></div><div class="doc-name">Annual Report</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/ar/SPDR-SP-500-ETF-Trust-Web-Ready.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_annual-report.jpg" alt="image load fail"/></div><div class="doc-name">Annual Report</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/sar/SPDR-SP-500-ETF-Trust_3.31.19-SAR-web-ready.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_semi-annual-report.jpg" alt="image load fail"/></div><div class="doc-name">Semi Annual Report</div></a>
                    </div>

                    <div>
                        <a href="/us/en/individual/etfs/resources/documents/dividend-distributions"><div class="img"><img src="/library-content/images/product/product_pages_dividend-distributions.jpg" alt="image load fail"/></div><div class="doc-name">ETF Historical Distributions</div></a>
                    </div>

            </div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="funddocsection aem-GridColumn aem-GridColumn--default--12">


</div>


</div>
        </div>
    </div>
</div>
<div class="keydocuments fundcomps aem-GridColumn aem-GridColumn--default--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


    <h2 class="ssmp-d-mobile-none"><span>Tax Documents</span></h2>
    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Tax Documents</span></p>
    <div class="aem-Grid aem-Grid--12">
        <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <div class="document-items fund-section" data-fundComponent="true">

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/tax-documents/SPDR_ICI_Tax_Summary_Primary.xlsx" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_tax-documents.jpg" alt="image load fail"/></div><div class="doc-name">SPDR ICI Tax Summary (Primary)</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/tax-documents/SPDR_ICI_Tax_Summary_Secondary.xls" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_tax-documents.jpg" alt="image load fail"/></div><div class="doc-name">SPDR ICI Tax Summary (Secondary)</div></a>
                    </div>

            </div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">



</div>
        </div>
    </div>
</div>
<div class="keydocuments fundcomps aem-GridColumn aem-GridColumn--default--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


    <h2 class="ssmp-d-mobile-none"><span>Information &amp; Schedules</span></h2>
    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Information &amp; Schedules</span></p>
    <div class="aem-Grid aem-Grid--12">
        <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <div class="document-items fund-section" data-fundComponent="true">

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/information-schedules/spdr-etf-listing.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_information-schedules.jpg" alt="image load fail"/></div><div class="doc-name">SPDR� ETF Listing</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/information-schedules/SPDR_Dividend_Distribution_Schedule.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_information-schedules.jpg" alt="image load fail"/></div><div class="doc-name">SPDR Dividend Distribution Schedule</div></a>
                    </div>

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/information-schedules/SPDR-ETF-2019-Capital-Gain-Estimate.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_information-schedules.jpg" alt="image load fail"/></div><div class="doc-name">SPDR ETFs 2019 Estimated Capital Gains</div></a>
                    </div>

            </div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">



</div>
        </div>
    </div>
</div>
<div class="keydocuments fundcomps aem-GridColumn aem-GridColumn--default--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


    <h2 class="ssmp-d-mobile-none"><span>Insights &amp; Investment Ideas</span></h2>
    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Insights &amp; Investment Ideas</span></p>
    <div class="aem-Grid aem-Grid--12">
        <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
            <div class="document-items fund-section" data-fundComponent="true">

                    <div>
                        <a href="/library-content/products/fund-docs/etfs/us/insights-investment-ideas/etf-liquidity-dashboard.pdf" target="_blank"><div class="img"><img src="/library-content/images/product/product_pages_insights-investment-ideas.jpg" alt="image load fail"/></div><div class="doc-name">ETF Liquidity Dashboard</div></a>
                    </div>

            </div>
        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">



</div>
        </div>
    </div>
</div>
<div class="keydocuments fundcomps aem-GridColumn aem-GridColumn--default--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>


    <h2 class="ssmp-d-mobile-none"><span>Education</span></h2>
    <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Education</span></p>
    <div class="aem-Grid aem-Grid--12">
        <div class="aem-GridColumn aem-GridColumn--default--9 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">

        </div>
        <div class="aem-GridColumn aem-GridColumn--default--3 aem-GridColumn--tablet--3 aem-GridColumn--phone--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">



</div>
        </div>
    </div>
</div>


</div>
                </div>




    <div id="how-to-buy" class="how-to-buy aem-Grid aem-Grid--12">

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

    <div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class=" comp-text aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>





                <h2 class="ssmp-d-mobile-none"><span>Purchase Information</span></h2>


                <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Purchase Information</span></p>


                <div class="content"><p><strong>Buying and Selling ETFs</strong></p><p>ETFs are flexible and easy to trade. Investors buy and sell them like stocks, typically through a brokerage account. Investors can also employ traditional stock trading techniques; including stop orders, limit orders, margin purchases, and short sales using ETFs. They are listed on major US Stock Exchanges.</p><p>ETFs are subject to risk similar to those of stocks including those regarding short-selling and margin account maintenance.</p><p>Ordinary brokerage commissions apply.</p></div>


        </div>
    </div>






</div>
<div class="fundcontent fundcomps aem-GridColumn aem-GridColumn--default--12">









    <div class=" comp-text aem-Grid aem-Grid--12" data-fundComponent="true">
        <div class="aem-GridColumn aem-GridColumn--default--12 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">


    <div>
        <div class="ssmp-separator--weight-md">
            <hr class="ssmp-separator"/>
        </div>
    </div>




                <h2 class="ssmp-d-mobile-none"></h2>



                <p class="comp-title ssmp-d-tablet-none ssmp-d-desktop-none ssmp-d-large-screen-none"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg><span>Fund Footnotes</span></p>


                <div class="content"><p>In general, ETFs can be expected to move up or down in value with the value of the applicable index. Although ETF shares may be bought and sold on the exchange through any brokerage account, ETF shares are not individually redeemable from the Fund. Investors may acquire ETFs and tender them for redemption through the Fund in Creation Unit Aggregations only. Please see the prospectus for more details.</p><p>After-tax returns are calculated based on NAV using the historical highest individual federal marginal income tax rates and do not reflect the impact of state and local taxes. Actual after-tax returns depend on the investor\'s tax situation and may differ from those shown. The after-tax returns shown are not relevant to investors who hold their fund shares through tax-deferred arrangements such as 401(k) plans or individual retirement accounts.</p><p>Unless otherwise noted all information contained herein is that of the SPDR S&amp;P 500 ETF Trust.</p><p>Performance of an index is not illustrative of any particular investment. It is not possible to invest directly in an index.</p><p>Holdings and sectors shown are as of the date indicated and are subject to change. This information should not be considered a recommendation to invest in a particular sector or to buy or sell any security shown. It is not known whether the sectors or securities shown will be profitable in the future.</p><p>As with all stocks, you may be required to deposit more money or securities into your margin account if the equity, including the amount attributable to your ETF shares, declines.</p><p><strong>All total return figures assume reinvestment of dividend and capital gains at net assets value; actual returns may differ.</strong></p><p>The shares of the SPDR S&amp;P 500 ETF Trust represent ownership in the SPDR S&amp;P 500�Trust, a unit investment trust.</p></div>


        </div>
    </div>






</div>


</div>
    </div>


        </div>

        <input class="compareFundsUrl" id="CompareFundsUrl" type="hidden" value="https://ssga.com/etfs/resources/fundcomparetool"/>


</div>


</div></div>
<div class="footer aem-GridColumn aem-GridColumn--default--12">
<div class="ssmp-footer">
    <div class="ssmp-footer__margins">
        <div class="ssmp-footer__contact-us">
            <p>Questions? Feel free to
                <a class="ssmp-footer__contact-us__link" target="_blank" href="#"></a>
            </p>
            <p class="ssmp-footer__contact-us__social-media">
                <span class="ssmp-footer__contact-us__link__twitter">
                    <svg class="ssmpsvg icon_twitter"><use xlink:href="#icon_twitter"></use></svg>
                    <a class="leave-site-link" href="#" target="_blank">Twitter</a>
                </span>
                <span class="ssmp-footer__contact-us__link__linkedin">
                    <svg class="ssmpsvg icon_linkedin"><use xlink:href="#icon_linkedin"></use></svg>
                    <a class="leave-site-link" href="#" target="_blank">LinkedIn</a>
                </span>
                <span class="ssmp-footer__contact-us__link__youtube">
                    <svg class="ssmpsvg video"><use xlink:href="#video"></use></svg>
                    <a class="leave-site-link" href="#" target="_blank">YouTube</a>
                </span>
                <span class="ssmp-footer__contact-us__link__blog">
                    <svg class="ssmpsvg icon_blog_white"><use xlink:href="#icon_blog_white"></use></svg>
                    <a href="#" target="_blank">SPDR Blog</a>
                </span>
            </p>
        </div>

        <div class="ssmp-footer__separator">
             <hr class="ssmp-separator"/>
        </div>

        <div class="ssmp-footer__disclaimer">
        	<div class="cmp-text--banner"><p style="text-align: left;"><b>View More Information About Our Firm: </b><a href="https://brokercheck.finra.org/firm/summary/30107" target="_blank"><b>FINRA\'s�BrokerCheck�<br />
 <br />
</b></a></p>
<p style="text-align: left;">ETFs trade like stocks, are subject to investment risk, fluctuate in market value and may trade at prices above or below the ETFs net asset value. Brokerage commissions and ETF expenses will reduce returns.<br />
�</p>
<p style="text-align: left;">Standard &amp; Poor\'s<sup>�</sup>, S&amp;P<sup>�</sup> and SPDR<sup>�</sup> are registered trademarks of Standard &amp; Poor\'s Financial Services LLC (S&amp;P); Dow Jones is a registered trademark of Dow Jones Trademark Holdings LLC (Dow Jones); and these trademarks have been licensed for use by S&amp;P Dow Jones Indices LLC (SPDJI) and sublicensed for certain purposes by State Street Corporation. State Street Corporation\'s financial products are not sponsored, endorsed, sold or promoted by SPDJI, Dow Jones, S&amp;P, their respective affiliates and third party licensors and none of such parties make any representation regarding the advisability of investing in such product(s) nor do they have any liability in relation thereto, including for any errors, omissions, or interruptions of any index.<br />
�</p>
<p style="text-align: left;"><b>Distributor</b>: State Street Global Advisors Funds Distributors, LLC, member <a></a><a href="http://www.finra.org/" target="_blank">FINRA</a>�, <a></a><a href="http://www.sipc.org/" target="_blank">SIPC</a>,� an indirect wholly owned subsidiary of State Street Corporation. References to State Street may include State Street Corporation and its affiliates. Certain State Street affiliates provide services and receive fees from the SPDR ETFs. ALPS Distributors, Inc., member FINRA, is the distributor for DIA, MDY and SPY, all unit investment trusts. ALPS Portfolio Solutions Distributor, Inc., member FINRA, is the distributor for Select Sector SPDRs. ALPS Distributors, Inc. and ALPS Portfolio Solutions Distributor, Inc. are not affiliated with State Street Global Advisors Funds Distributors, LLC.<br />
�</p>
<p style="text-align: left;"><b>THIS SITE IS INTENDED FOR U.S. INVESTORS ONLY.<br />
 �</b></p>
<p style="text-align: left;"><b>No Offer/Local Restrictions<br />
 �</b></p>
<p style="text-align: left;">Nothing contained in or on the Site should be construed as a solicitation of an offer to buy or offer, or recommendation, to acquire or dispose of any security, commodity, investment or to engage in any other transaction. SSGA Intermediary Business offers a number of products and services designed specifically for various categories of investors. Not all products will be available to all investors. The information provided on the Site is not intended for distribution to, or use by, any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation.<br />
�</p>
<p style="text-align: left;"><b>All persons and entities accessing the Site do so on their own initiative and are responsible for compliance with applicable local laws and regulations.</b> The Site is not directed to any person in any jurisdiction where the publication or availability of the Site is prohibited, by reason of that person\'s nationality, residence or otherwise. Persons under these restrictions must not access the Site.<br />
�</p>
<p style="text-align: left;"><b>Information for Non-U.S. Investors:<br />
 �</b></p>
<p style="text-align: left;">The products and services described on this web site are intended to be made available only to persons in the United States, and the information on this web site is only for such persons. Nothing on this web site shall be considered a solicitation to buy or an offer to sell a security to any person in any jurisdiction where such offer, solicitation, purchase or sale would be unlawful under the securities laws of such jurisdiction.<br />
�</p>
<p style="text-align: left;"><b>Before investing, consider the funds\' investment objectives, risks, charges and expenses. To obtain a prospectus or summary prospectus which contains this and other information, call 1-866-787-2257, <a></a><a href="/us/en/individual/etfs/fund-finder.html?tab=documents">download a prospectus or summary prospectus</a></b>�<b> now, or talk to your financial advisor. Read it carefully before investing.<br />
 �</b></p>
<p style="text-align: center;"><b>Not FDIC Insured * No Bank Guarantee * May Lose Value</b><span style="text-align: left;">� � � � � � � � � � � � � � � � � ��</span></p>
<p style="text-align: left;">2731941.3.1.AM.RTL<sup></sup></p>
</div>
        </div>

        <div class="ssmp-footer__bottom">
            <div class="aem-Grid aem-Grid--12">
                <div class="ssmp-footer__copyright aem-GridColumn aem-GridColumn--default--4 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
                    � 2020 %%State Street Corporation%%. All rights reserved.
                </div>
                <div class="ssmp-footer__disclosures aem-GridColumn aem-GridColumn--default--8 aem-GridColumn--tablet--12 aem-GridColumn--phone--12">
                    <!-- /* Will be populated by JavaScript*/ -->
                    <a class="ssmp-footer__disclosures__link ssmp-footer__disclosures__link__legal" target="_blank" href="#"></a>
                    <a class="ssmp-footer__disclosures__link ssmp-footer__disclosures__link__privacy" target="_blank" href="#"></a>
                    <a class="ssmp-footer__disclosures__link ssmp-footer__disclosures__link__1" target="_blank" href="#"></a>
                    <a class="ssmp-footer__disclosures__link ssmp-footer__disclosures__link__2" target="_blank" href="#"></a>
                    <a class="ssmp-footer__disclosures__link ssmp-footer__disclosures__link__sitemap" target="_blank" href="#"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div></div>

    <a class="to-top" href="#"><svg class="ssmpsvg caret-down"><use xlink:href="#caret-down"></use></svg></a>
</div>







<script type="text/javascript" src="/etc.clientlibs/ssmp-fund/clientlibs/clientlib-site/ssmp-fund-global.min.js"></script>








    <script type="text/javascript">_satellite.pageBottom();</script>






            </body>
        </html>


';
            $stack = [];
            $a = 0;
            $b = 0;
            while($b < strlen($document)) {
                if($document[$a] === '<') {

                }
            }
        }
    }
