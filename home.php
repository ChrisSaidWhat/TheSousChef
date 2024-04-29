<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>The Sous Chef - Home</title>
        <link href="../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <script crossorigin="anonymous"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="siteCSS/siteStyles.css" rel="stylesheet" type="text/css">
        <style>
            /*Custom Page Styling*/
            a {
                text-decoration: none !important;
            }

            iframe {
                position: fixed;
                z-index: 2;
                margin: 0;
            }
        </style>
        <script>
            //  code taken from ChatGPT to solve the problem of obstructing the ability to interact with nav due to ad
            window.addEventListener('message', function (event) {
                if (event.data === 'hideBanner') {
                    // hide the iframe when message received
                    document.getElementById('bannerFrame').style.display = 'none';
                }
            });
        </script>
    </head>
    <body>
        <iframe src="bannerAd/announcementAd.html" width="100%" scrolling="no" id="bannerFrame"></iframe>
        <div>
            <header class="position-relative z-1"><h1 class="display-1 m-0 pt-5 ps-3">The Sous Chef</h1>
            </header>
            <nav class="navbar navbar-expand-lg bg-warning z-0">
                <div class="container-fluid justify-content-end">
                    <button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler" data-bs-target="#navbarNavAltMarkup"
                            data-bs-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a aria-current="page" class="nav-link active" href="home.php">Home</a>
                            <a class="nav-link" href="recipes.php">Recipes</a>
                            <a class="nav-link" href="recipeRequest.php">Request A Recipe</a>
                            <a href="login.php">
                                <button class="btn btn-outline-light push-over" type="button">Sign In <i
                                            class="bi bi-person-badge"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div> <!-- end of header and nav div -->
        <div class="container-fluid my-5">
            <div class="row bg-success conform-row mb-5 py-5">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-4 col-xl-3 col-xxl-2 ps-0">
                    <img alt="A steaming pot of Gumbo." class="img-fluid" src="sousChefImages/welcomeCardGumbo.jpg">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-8 col-xl-6 col-xxl-5">
                    <h2 class="display-2">Welcome, Chef</h2>
                    <p>
                        Here at The Sous Chef&trade;, we believe you are the head chef of your own kitchen! Our job is
                        to help you cook a masterpiece everytime! On our site, you can browse recipes curated by our
                        culinary-trained
                        team of chefs and even suggest your own to be added as well. Whatever it is you're cooking
                        today, The Sous Chef&trade; can help!
                    </p>
                </div>
            </div> <!-- end of row 1 -->
            <div class="row flex-column justify-content-end align-content-end mb-5">
                <div class="col-xs-10 col-sm-9 col-md-8 col-lg-7 col-xl-5 col-xxl-5">
                    <div>
                        <svg class="size-lg z-0 position-relative svg-effect">
                            <rect class="size-lg"/>
                        </svg>
                        <a href="recipes.php"><h3 class="display-3 z-1 position-relative mb-0"><span
                                        class="salt-v">V</span>iew <span
                                        class="salt-t">T</span>op Recipe<span
                                        class="salt-s">s</span></h3></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 pe-0 mt-3 mb-4">
                    <img alt="A long table arrayed with food." class="img-cover"
                         src="sousChefImages/longTableFoodEdited.jpg">
                </div>
                <div class="col-sm-8 col-md-8 col-lg-7 col-xl-5 col-xxl-4 d-flex align-self-end">
                    <div>
                        <svg class="size-lg z-0 position-relative svg-effect">
                            <rect class="size-lg"/>
                        </svg>
                        <a href="archive.php"><h3 class="display-3 z-1 position-relative mb-0"><span
                                        class="salt-v">V</span>iew <span
                                        class="salt-a">A</span>ll Recipe<span class="salt-s">s</span></h3></a>
                    </div>
                </div>
            </div> <!-- end of row 2 -->
            <div class="row flex-column bg-success conform-row position-relative">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-6">
                    <h4 class="display-4 position-relative z-1 push-down">Submit A Recipe</h4>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-6 ps-0 position-relative z-0">
                    <img alt="Sushi on arranged fancifully on a wooden platter."
                         class="img-fluid" src="sousChefImages/requestCardSushi.jpg">
                    <a href="recipeRequest.php">
                        <button id="requestBtn" class="btn btn-outline-light z-1 position-absolute btnImg"
                                type="button">
                            Request A Recipe <i
                                    class="bi bi-plus-circle"></i></button>
                    </a>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-6">
                    <!-- Generator: Adobe Illustrator 28.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg id="chefAnimation" style="enable-background:new 0 0 300 396;" version="1.1"
                         viewBox="500 -75 1000 500" x="0px" xml:space="preserve"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
                        <style type="text/css">
                            .st0 {
                                fill: #010101;
                            }

                            .st1 {
                                fill: #F2EFE2;
                            }

                            .st2 {
                                fill: #F5F1E5;
                            }

                            .st3 {
                                fill: #F3F0E1;
                            }

                            .st4 {
                                fill: #F4F1E1;
                            }

                            .st5 {
                                fill: #9A9B9D;
                            }

                            .st6 {
                                fill: #F2EFE0;
                            }

                            .st7 {
                                fill: #969799;
                            }

                            .st8 {
                                fill: #939395;
                            }

                            .st9 {
                                fill: #97989A;
                            }

                            .st10 {
                                fill: #F0EDDF;
                            }

                            .st11 {
                                fill: #8D8C8F;
                            }

                            .st12 {
                                fill: #A7A6A7;
                            }

                            .st13 {
                                fill: #98969A;
                            }

                            .st14 {
                                fill: #919193;
                            }

                            .st15 {
                                fill: #949395;
                            }

                            .st16 {
                                fill: #979798;
                            }

                            .st17 {
                                fill: #878689;
                            }

                            .st18 {
                                fill: #8C8B8E;
                            }

                            .st19 {
                                fill: #878588;
                            }

                            .st20 {
                                fill: #B3B3B3;
                            }

                            .st21 {
                                fill: #1A1A18;
                            }

                            .st22 {
                                fill: #312E2E;
                            }

                            .st23 {
                                fill: #939390;
                            }

                            .st24 {
                                fill: #777578;
                            }

                            .st25 {
                                fill: #312F2F;
                            }

                            .st26 {
                                fill: #3C3937;
                            }

                            .st27 {
                                fill: #404044;
                            }

                            .st28 {
                                fill: #625F56;
                            }

                            .st29 {
                                fill: #625E59;
                            }

                            .st30 {
                                fill: #E2DFD3;
                            }

                            .st31 {
                                fill: #151315;
                            }

                            .st32 {
                                fill: #8B887E;
                            }

                            .st33 {
                                fill: #535257;
                            }

                            .st34 {
                                fill: #DAD4CA;
                            }

                            .st35 {
                                fill: #F5F2E5;
                            }

                            .st36 {
                                fill: #F4F1E4;
                            }

                            .st37 {
                                fill: #F7F3E7;
                            }

                            .st38 {
                                fill: #9F9FA1;
                            }

                            .st39 {
                                fill: #FFFFFF;
                            }

                            .st40 {
                                fill: #9B9A9D;
                            }

                            .st41 {
                                fill: #D14130;
                            }

                            .st42 {
                                fill: #9C9C9E;
                            }

                            .st43 {
                                fill: #FBFAF8;
                            }

                            .st44 {
                                fill: #ACABAE;
                            }

                            .st45 {
                                fill: #360706;
                            }

                            .st46 {
                                fill: #FBFBF9;
                            }

                            .st47 {
                                fill: #96959A;
                            }

                            .st48 {
                                fill: #320E0A;
                            }

                            .st49 {
                                fill: #FAC894;
                            }

                            .st50 {
                                fill: #9E9C9E;
                            }

                            .st51 {
                                fill: #DB905D;
                            }

                            .st52 {
                                fill: #C0BEBC;
                            }

                            .st53 {
                                fill: #1C1C1E;
                            }

                            .st54 {
                                fill: #020102;
                            }

                            .st55 {
                                fill: #A6A5A4;
                            }

                            .st56 {
                                fill: #716F6D;
                            }

                            .st57 {
                                fill: #323134;
                            }

                            .st58 {
                                fill: #090506;
                            }

                            .st59 {
                                fill: #523320;
                            }

                            .st60 {
                                fill: #F4B27A;
                            }

                            .st61 {
                                fill: #DF935C;
                            }

                            .st62 {
                                fill: #0C0808;
                            }

                            .st63 {
                                fill: #4C2C19;
                            }

                            .st64 {
                                fill: #5D3924;
                            }

                            .st65 {
                                fill: #080604;
                            }

                            .st66 {
                                fill: #F7F3E6;
                            }

                            .st67 {
                                fill: #9B9B9D;
                            }

                            .st68 {
                                fill: #909092;
                            }

                            .st69 {
                                fill: #F9F9F8;
                            }

                            .st70 {
                                fill: #9F9F9F;
                            }

                            .st71 {
                                fill: #A3A2A1;
                            }

                            .st72 {
                                fill: #B5B3B1;
                            }

                            .st73 {
                                fill: #3F3D3F;
                            }

                            .st74 {
                                fill: #484543;
                            }

                            .st75 {
                                fill: #959597;
                            }

                            .st76 {
                                fill: #A4A4A6;
                            }

                            .st77 {
                                fill: #A5A5A7;
                            }

                            .st78 {
                                fill: #CCCAC6;
                            }

                            .st79 {
                                fill: #9F9DA1;
                            }

                            .st80 {
                                fill: #737376;
                            }

                            .st81 {
                                fill: #D8D4CD;
                            }

                            .st82 {
                                fill: #969599;
                            }

                            .st83 {
                                fill: #676769;
                            }

                            .st84 {
                                fill: #2C2B2D;
                            }

                            .st85 {
                                fill: #4C4C4E;
                            }

                            .st86 {
                                fill: #595A5E;
                            }

                            .st87 {
                                fill: #030303;
                            }

                            .st88 {
                                fill: #FBC494;
                            }

                            .st89 {
                                fill: #F0E9DC;
                            }

                            .st90 {
                                fill: #F8BB8C;
                            }

                            .st91 {
                                fill: #F5F3E6;
                            }

                            .st92 {
                                fill: #F3B687;
                            }

                            .st93 {
                                fill: #FCFCFA;
                            }

                            .st94 {
                                fill: #FDFDFD;
                            }

                            .st95 {
                                fill: #EFEAE0;
                            }

                            .st96 {
                                fill: #F9C595;
                            }

                            .st97 {
                                fill: #F2EEE5;
                            }

                            .st98 {
                                fill: #FDFCFC;
                            }

                            .st99 {
                                fill: #D54331;
                            }

                            .st100 {
                                fill: #F4F2EC;
                            }

                            .st101 {
                                fill: #BA7443;
                            }

                            .st102 {
                                fill: #D73D2D;
                            }

                            .st103 {
                                fill: #FCC495;
                            }

                            .st104 {
                                fill: #FEFEFE;
                            }

                            .st105 {
                                fill: #B3B3B5;
                            }

                            .st106 {
                                fill: #F8BC8D;
                            }

                            .st107 {
                                fill: #301712;
                            }

                            .st108 {
                                fill: #F9BB8B;
                            }

                            .st109 {
                                fill: #C9824F;
                            }

                            .st110 {
                                fill: #2F0506;
                            }

                            .st111 {
                                fill: #E5A574;
                            }

                            .st112 {
                                fill: #E2E1E3;
                            }

                            .st113 {
                                fill: #E7E6E6;
                            }

                            .st114 {
                                fill: #B97242;
                            }

                            .st115 {
                                fill: #B06837;
                            }

                            .st116 {
                                fill: #D3D2D2;
                            }

                            .st117 {
                                fill: #D0854F;
                            }

                            .st118 {
                                fill: #F3EFE5;
                            }

                            .st119 {
                                fill: #B2B1B4;
                            }

                            .st120 {
                                fill: #87868A;
                            }

                            .st121 {
                                fill: #BBBBBF;
                            }

                            .st122 {
                                fill: #CBCBCE;
                            }

                            .st123 {
                                fill: #C07847;
                            }

                            .st124 {
                                fill: #F2F0F0;
                            }

                            .st125 {
                                fill: #908F93;
                            }

                            .st126 {
                                fill: #9F9FA2;
                            }

                            .st127 {
                                fill: #9B542B;
                            }

                            .st128 {
                                fill: #C58450;
                            }

                            .st129 {
                                fill: #413C3E;
                            }

                            .st130 {
                                fill: #D7D6D6;
                            }

                            .st131 {
                                fill: #EEA878;
                            }

                            .st132 {
                                fill: #311A11;
                            }

                            .st133 {
                                fill: #BBBABA;
                            }

                            .st134 {
                                fill: #F5C093;
                            }

                            .st135 {
                                fill: #BC7847;
                            }

                            .st136 {
                                fill: #F0EFEF;
                            }

                            .st137 {
                                fill: #C28050;
                            }

                            .st138 {
                                fill: #B0B1B6;
                            }

                            .st139 {
                                fill: #E4A170;
                            }

                            .st140 {
                                fill: #F0EAE6;
                            }

                            .st141 {
                                fill: #F0B887;
                            }

                            .st142 {
                                fill: #EDB789;
                            }

                            .st143 {
                                fill: #F6F6F7;
                            }

                            .st144 {
                                fill: #F5B98A;
                            }

                            .st145 {
                                fill: #AA6134;
                            }

                            .st146 {
                                fill: #B5B4B5;
                            }

                            .st147 {
                                fill: #CA8452;
                            }

                            .st148 {
                                fill: #ECA16D;
                            }

                            .st149 {
                                fill: #C78251;
                            }

                            .st150 {
                                fill: #ECB181;
                            }

                            .st151 {
                                fill: #170C09;
                            }

                            .st152 {
                                fill: #CC8351;
                            }

                            .st153 {
                                fill: #F6DBBE;
                            }

                            .st154 {
                                fill: #C27948;
                            }

                            .st155 {
                                fill: #911F18;
                            }

                            .st156 {
                                fill: #F5D9B3;
                            }

                            .st157 {
                                fill: #F6E6CF;
                            }

                            .st158 {
                                fill: #392217;
                            }

                            .st159 {
                                fill: #C7C6CB;
                            }

                            .st160 {
                                fill: #F9D8B2;
                            }

                            .st161 {
                                fill: #BFBEC1;
                            }

                            .st162 {
                                fill: #888E98;
                            }

                            .st163 {
                                fill: #5D5C60;
                            }

                            .st164 {
                                fill: #DC9A6A;
                            }

                            .st165 {
                                fill: #CC8957;
                            }

                            .st166 {
                                fill: #BE392B;
                            }

                            .st167 {
                                fill: #EFE4D4;
                            }

                            .st168 {
                                fill: #5D2924;
                            }

                            .st169 {
                                fill: #9F5A2F;
                            }

                            .st170 {
                                fill: #9F221C;
                            }

                            .st171 {
                                fill: #B8B7B8;
                            }

                            .st172 {
                                fill: #C57E4E;
                            }

                            .st173 {
                                fill: #EAE8E8;
                            }

                            .st174 {
                                fill: #68686F;
                            }

                            .st175 {
                                fill: #27272C;
                            }

                            .st176 {
                                fill: #636266;
                            }

                            .st177 {
                                fill: #3F2A20;
                            }

                            .st178 {
                                fill: #747374;
                            }

                            .st179 {
                                fill: #3F3E3F;
                            }

                            .st180 {
                                fill: #9D8A79;
                            }

                            .st181 {
                                fill: #616065;
                            }

                            .st182 {
                                fill: #6E4931;
                            }

                            .st183 {
                                fill: #312C2C;
                            }

                            .st184 {
                                fill: #BD7A51;
                            }

                            .st185 {
                                fill: #650F0C;
                            }

                            .st186 {
                                fill: #342114;
                            }

                            .st187 {
                                fill: #5C3D27;
                            }

                            .st188 {
                                fill: #535152;
                            }

                            .st189 {
                                fill: #E19F6E;
                            }

                            .st190 {
                                fill: #38383A;
                            }

                            .st191 {
                                fill: #545253;
                            }

                            .st192 {
                                fill: #C8C7C7;
                            }

                            .st193 {
                                fill: #97241B;
                            }

                            .st194 {
                                fill: #868584;
                            }

                            .st195 {
                                fill: #39383D;
                            }

                            .st196 {
                                fill: #613824;
                            }

                            .st197 {
                                fill: #3C2113;
                            }

                            .st198 {
                                fill: #5F351D;
                            }

                            .st199 {
                                fill: #3B3836;
                            }

                            .st200 {
                                fill: #797B7F;
                            }

                            .st201 {
                                fill: #9D7257;
                            }

                            .st202 {
                                fill: #303033;
                            }

                            .st203 {
                                fill: #8B8B8E;
                            }

                            .st204 {
                                fill: #D9B393;
                            }

                            .st205 {
                                fill: #534B47;
                            }

                            .st206 {
                                fill: #B0A8A9;
                            }

                            .st207 {
                                fill: #2A1F19;
                            }

                            .st208 {
                                fill: #7F7F7F;
                            }

                            .st209 {
                                fill: #654734;
                            }

                            .st210 {
                                fill: #322218;
                            }

                            .st211 {
                                fill: #ADAAA6;
                            }

                            .st212 {
                                fill: #7A7675;
                            }

                            .st213 {
                                fill: #848485;
                            }

                            .st214 {
                                fill: #313133;
                            }

                            .st215 {
                                fill: #B0AEAF;
                            }

                            .st216 {
                                fill: #EDEBE8;
                            }

                            .st217 {
                                fill: #F6CA9B;
                            }

                            .st218 {
                                fill: #656365;
                            }

                            .st219 {
                                fill: #E1C6B2;
                            }

                            .st220 {
                                fill: #737273;
                            }

                            .st221 {
                                fill: #D4D4D4;
                            }

                            .st222 {
                                fill: #464649;
                            }

                            .st223 {
                                fill: #463023;
                            }

                            .st224 {
                                fill: #E5B589;
                            }

                            .st225 {
                                fill: #302C2B;
                            }

                            .st226 {
                                fill: #9B9A99;
                            }

                            .st227 {
                                fill: #6F5F5A;
                            }

                            .st228 {
                                fill: #847F7F;
                            }

                            .st229 {
                                fill: #030202;
                            }

                            .st230 {
                                fill: #1F0F0A;
                            }

                            .st231 {
                                fill: #2B1811;
                            }

                            .st232 {
                                fill: #44271C;
                            }

                            .st233 {
                                fill: #4D3422;
                            }

                            .st234 {
                                fill: #77553B;
                            }

                            .st235 {
                                fill: #714B32;
                            }

                            .st236 {
                                fill: #835533;
                            }

                            .st237 {
                                fill: #7E4E2D;
                            }

                            .st238 {
                                fill: #623E28;
                            }

                            .st239 {
                                fill: #664938;
                            }

                            .st240 {
                                fill: #474544;
                            }

                            .st241 {
                                fill: #343233;
                            }

                            .st242 {
                                fill: #939491;
                            }

                            .st243 {
                                fill: #2D2D2A;
                            }

                            .st244 {
                                fill: #262725;
                            }

                            .st245 {
                                fill: #393A3A;
                            }

                            .st246 {
                                fill: #664329;
                            }

                            .st247 {
                                fill: #624129;
                            }

                            .st248 {
                                fill: #5B3D26;
                            }

                            .st249 {
                                fill: #AF8461;
                            }

                            .st250 {
                                fill: #5C0F0C;
                            }

                            .st251 {
                                fill: #A8221B;
                            }

                            .st252 {
                                fill: #503121;
                            }

                            .st253 {
                                fill: #4C2D1E;
                            }

                            .st254 {
                                fill: #686767;
                            }

                            .st255 {
                                fill: #A2A0A1;
                            }

                            .st256 {
                                fill: #666668;
                            }

                            .st257 {
                                fill: #424042;
                            }

                            .st258 {
                                fill: #B4B0AC;
                            }

                            .st259 {
                                fill: #2E170F;
                            }

                            .st260 {
                                fill: #4C4C4F;
                            }

                            .st261 {
                                fill: #4F4F50;
                            }

                            .st262 {
                                fill: #6E6E6E;
                            }

                            .st263 {
                                fill: #858485;
                            }

                            .st264 {
                                fill: #6A6968;
                            }

                            .st265 {
                                fill: #5A5959;
                            }

                            .st266 {
                                fill: #656567;
                            }

                            .st267 {
                                fill: #757374;
                            }

                            .st268 {
                                fill: #080202;
                            }

                            .st269 {
                                fill: #724F33;
                            }

                            .st270 {
                                fill: #B88A61;
                            }

                            .st271 {
                                fill: #69696F;
                            }

                            .st272 {
                                fill: #FDDAB7;
                            }

                            .st273 {
                                fill: #673A1E;
                            }

                            .st274 {
                                fill: #593920;
                            }

                            .st275 {
                                fill: #35363B;
                            }

                            .st276 {
                                fill: #56575E;
                            }

                            .st277 {
                                fill: #807F83;
                            }

                            .st278 {
                                fill: #36373C;
                            }

                            .st279 {
                                fill: #727277;
                            }

                            .st280 {
                                fill: #717276;
                            }

                            .st281 {
                                fill: #808086;
                            }

                            .st282 {
                                fill: #CAC9CE;
                            }

                            .st283 {
                                fill: #67666B;
                            }

                            .st284 {
                                fill: #505052;
                            }

                            .st285 {
                                fill: #17161B;
                            }

                            .st286 {
                                fill: #434348;
                            }

                            .st287 {
                                fill: #343437;
                            }

                            .st288 {
                                fill: #3C3B40;
                            }

                            .st289 {
                                fill: #63646C;
                            }

                            .st290 {
                                fill: #515258;
                            }

                            .st291 {
                                fill: #DEDFE1;
                            }

                            .st292 {
                                fill: #606367;
                            }

                            .st293 {
                                fill: #6C7074;
                            }

                            .st294 {
                                fill: #3B3D41;
                            }

                            .st295 {
                                fill: #DE9E6B;
                            }

                            .st296 {
                                fill: #444348;
                            }

                            .st297 {
                                fill: #141112;
                            }

                            .st298 {
                                fill: #5D3F2B;
                            }

                            .st299 {
                                fill: #794B27;
                            }

                            .st300 {
                                fill: #4C4E52;
                            }

                            .st301 {
                                fill: #7D7D82;
                            }

                            .st302 {
                                fill: #5B5E62;
                            }

                            .st303 {
                                fill: #F8C191;
                            }

                            .st304 {
                                fill: #714220;
                            }

                            .st305 {
                                fill: #D4D5D5;
                            }

                            .st306 {
                                fill: #6D6C6E;
                            }

                            .st307 {
                                fill: #353333;
                            }

                            .st308 {
                                fill: #8F8F91;
                            }

                            .st309 {
                                fill: #DCD9D7;
                            }

                            .st310 {
                                fill: #CDCCCD;
                            }

                            .st311 {
                                fill: #BAB8B9;
                            }

                            .st312 {
                                fill: #B5B5B7;
                            }

                            .st313 {
                                fill: #8A8B8F;
                            }

                            .st314 {
                                fill: #B8B8BB;
                            }

                            .st315 {
                                fill: #B5B6B9;
                            }

                            .st316 {
                                fill: #FBC79B;
                            }

                            .st317 {
                                fill: #BA7948;
                            }

                            .st318 {
                                fill: #B97746;
                            }

                            .st319 {
                                fill: #E8523D;
                            }

                            .st320 {
                                fill: #A7A7A9;
                            }

                            .st321 {
                                fill: #B57343;
                            }

                            .st322 {
                                fill: #AF6B3C;
                            }

                            .st323 {
                                fill: #CB8A5B;
                            }

                            .st324 {
                                fill: #B56E3D;
                            }

                            .st325 {
                                fill: #B56D3D;
                            }

                            .st326 {
                                fill: #ECB180;
                            }

                            .st327 {
                                fill: #AF683A;
                            }

                            .st328 {
                                fill: #AD683E;
                            }

                            .st329 {
                                fill: #72523D;
                            }

                            .st330 {
                                fill: #352C27;
                            }

                            .st331 {
                                fill: #AFAEAF;
                            }

                            .st332 {
                                fill: #F8C092;
                            }

                            .st333 {
                                fill: #F9DFBB;
                            }

                            .st334 {
                                fill: #F7B985;
                            }

                            .st335 {
                                fill: #F9C79B;
                            }

                            .st336 {
                                fill: #E9A775;
                            }

                            .st337 {
                                fill: #F9C38F;
                            }

                            .st338 {
                                fill: #E7A474;
                            }

                            .st339 {
                                fill: #D9976B;
                            }

                            .st340 {
                                fill: #DE9C6C;
                            }

                            .st341 {
                                fill: #C07F50;
                            }

                            .st342 {
                                fill: #D09367;
                            }

                            .st343 {
                                fill: #DDA377;
                            }

                            .st344 {
                                fill: #DD9464;
                            }

                            .st345 {
                                fill: #2D170F;
                            }

                            .st346 {
                                fill: #7D4D30;
                            }

                            .st347 {
                                fill: #CA7D4F;
                            }

                            .st348 {
                                fill: #E9AE81;
                            }

                            .st349 {
                                fill: #5E3926;
                            }

                            .st350 {
                                fill: #B26942;
                            }

                            .st351 {
                                fill: #4C3120;
                            }

                            .st352 {
                                fill: #5E3E2C;
                            }

                            .st353 {
                                fill: #C1997F;
                            }

                            .st354 {
                                fill: #412A1E;
                            }

                            .st355 {
                                fill: #FCF6E6;
                            }

                            .st356 {
                                fill: #B5835B;
                            }

                            .st357 {
                                fill: #835B3C;
                            }

                            .st358 {
                                fill: #6D3E30;
                            }

                            .st359 {
                                fill: #29160D;
                            }

                            .st360 {
                                fill: #FBC89B;
                            }

                            .st361 {
                                fill: #73411F;
                            }

                            .st362 {
                                fill: #512812;
                            }

                            .st363 {
                                fill: #F9CCA1;
                            }

                            .st364 {
                                fill: #F0BD92;
                            }

                            .st365 {
                                fill: #F8C59B;
                            }

                            .st366 {
                                fill: #71482B;
                            }

                            .st367 {
                                fill: #8A5D43;
                            }

                            .st368 {
                                fill: #563220;
                            }

                            .st369 {
                                fill: #433932;
                            }

                            .st370 {
                                fill: #FBFCFC;
                            }

                            .st371 {
                                fill: #D7BBA2;
                            }

                            .st372 {
                                fill: #E1CFC3;
                            }

                            .st373 {
                                fill: #2D1E1C;
                            }

                            .st374 {
                                fill: #527373;
                            }

                            .st375 {
                                fill: #F5BB8D;
                            }

                            .st376 {
                                fill: #ECEADD;
                            }

                            .st377 {
                                fill: #322A26;
                            }

                            .st378 {
                                fill: #BA7A48;
                            }

                            .st379 {
                                fill: #97999B;
                            }

                            .st380 {
                                fill: #F4F2E9;
                            }

                            .st381 {
                                fill: #8E8E90;
                            }

                            .st382 {
                                fill: #D8D2C5;
                            }

                            .st383 {
                                fill: #FAC799;
                            }

                            .st384 {
                                fill: #AC6D3F;
                            }

                            .st385 {
                                fill: #945831;
                            }

                            .st386 {
                                fill: #B36B3B;
                            }

                            .st387 {
                                fill: #90532F;
                            }

                            .st388 {
                                fill: #BC7745;
                            }

                            .st389 {
                                fill: #E9A97A;
                            }

                            .st390 {
                                fill: #E5AC7D;
                            }

                            .st391 {
                                fill: #CECBC7;
                            }

                            .st392 {
                                fill: #AEA9A8;
                            }

                            .st393 {
                                fill: #754227;
                            }

                            .st394 {
                                fill: #321D12;
                            }

                            .st395 {
                                fill: #4B2E1F;
                            }

                            .st396 {
                                fill: #53341E;
                            }

                            .st397 {
                                fill: #56524D;
                            }

                            .st398 {
                                fill: #4D3022;
                            }

                            .st399 {
                                fill: #603C28;
                            }

                            .st400 {
                                fill: #5A5757;
                            }

                            .st401 {
                                fill: #3E281C;
                            }

                            .st402 {
                                fill: #8F6E4C;
                            }

                            .st403 {
                                fill: #A7683F;
                            }

                            .st404 {
                                fill: #2D2D2F;
                            }

                            .st405 {
                                fill: #2C180F;
                            }

                            .st406 {
                                fill: #DD9B67;
                            }

                            .st407 {
                                fill: #7A502D;
                            }

                            .st408 {
                                fill: #704B35;
                            }

                            .st409 {
                                fill: #6D442B;
                            }

                            .st410 {
                                fill: #5E3B29;
                            }

                            .st411 {
                                fill: #5F3D2A;
                            }

                            .st412 {
                                fill: #5A3424;
                            }

                            .st413 {
                                fill: #4B2E1C;
                            }

                            .st414 {
                                fill: #646464;
                            }

                            .st415 {
                                fill: #5F3B28;
                            }

                            .st416 {
                                fill: #FEE7BC;
                            }

                            .st417 {
                                fill: #AF845A;
                            }
                        </style>
                        <g id="chef">
                            <g id="chefHat">
                                <path class="st0" d="M772.3,76.6c-1.6-2.6-3.7-4.7-6.1-6.6c-4.3-3.4-9.2-5.8-14.4-7.5c-1.5-0.5-2.5-1.4-3.4-2.7
			c-1.7-2.7-4-4.8-6.9-6.1c-7.1-3.4-14.3-3.3-21.6-0.7c-0.8,0.3-1.1,0.1-1.4-0.6c-1.1-2-2.8-3.6-4.9-4.6c-4.7-2.4-9.8-2.7-14.9-2.1
			c-2.9,0.4-5.7,1.1-8.4,2.1c-2.6,1-5.3,1.9-7.9,2.9c-0.5,0.2-1,0.3-1.5-0.1c-2.4-1.8-5.1-2.8-7.9-3.7c-5.7-1.7-11.6-2.4-17.5-1.7
			c-2.9,0.3-5.9,0.9-8.6,2.1c-5.7,2.5-10.9,6-15.4,10.4c-1,1-2.2,1.7-3.6,2c-2.1,0.4-4.2,1-6.1,1.8c-4.6,1.9-8.8,4.3-12.1,8.1
			c-1.2,1.3-2.5,2.4-3.9,3.4c-4.7,3.1-8.5,7-11.2,11.8c-2.9,5.1-3.7,10.5-1.8,16.2c3,9.2,9.5,14.9,18.7,17.5
			c1.7,0.5,3.4,0.8,5.1,1.1c4.5,0.8,9,0.9,13.4-0.6c0.5-0.2,1.1-0.4,1.7-0.3c0.1,1.1,0.2,2.2,0.3,3.2c0.3,3.4,0.6,6.8,0.8,10.2
			c0.1,1.9,0.2,3.9,0.3,5.8c0,0.3,0,0.5-0.2,0.7c0.1,0.6,0.2,1.2,0.3,1.8c0.1,0.7,0.2,1.3,0.1,2c0.5,1.9,0.7,3.6,0.7,5.3
			c0.5,0,0.9-0.1,1.4-0.2c0.2-0.1,0.3-0.1,0.4-0.1c1-0.1,2-0.2,3-0.4c0.3-0.3,0.5-0.7,0.8-1c0.1-0.5,0.4-0.9,1.1-1.2
			c6.7-4,14-5.4,21.7-5.4c1.9,0,3.9-0.2,5.8-0.4c4.6-0.5,9.1-1.1,13.7-1.3c4.1-0.2,8.1-0.5,12.2-0.7c2.4-0.4,4.9-0.1,7.3-0.2
			c0.7,0,1.4,0.1,2.1,0.3c0,0,0.1,0,0.1,0c0.4,0,0.7,0,1,0.1c1.2-0.2,2-0.2,2.5,0.2c0.8-0.2,1.7-0.3,2.6-0.3c0.2,0,0.3,0,0.5,0
			c0.8-0.2,1.6-0.3,2.5-0.3c1.6,0,3,0.3,4.3,0.8c0.3,0,0.7-0.1,1.1-0.1c1,0,2,0.1,2.9,0.4c0.7-0.1,1.5-0.2,2.3-0.2
			c0.6,0,1.1,0,1.7,0.1c0.8-0.2,1.6-0.2,2.4-0.2c0.9,0,1.8,0.1,2.6,0.3c1.7-1.7,4-2.9,7-3c-0.3-1-0.4-2-0.4-3c-0.2-1-0.2-2-0.1-3
			c-0.3-0.1-0.3-0.3-0.3-0.9c-0.2-3.8-0.1-7.7,0.2-11.5c0.1-0.7,0.4-1,1.1-1.1c3.4-0.3,6.7-0.9,10.1-1.5c3.4-0.6,6.9-1.3,10-2.9
			c9.4-4.7,15.4-12,16.9-22.5C775.2,84.6,774.6,80.4,772.3,76.6z"/>
                                <path class="st1" d="M733.3,126.6c0.2,2,0.4,4.1,0.6,6.1c0.1,1.3,0.1,1.3-1.2,1.6c-3.1,0.6-6.2,0.7-9.3,0.6
			c-7-0.2-14.1-0.4-21.1-0.7c-5.9-0.2-11.8,0.2-17.7,0.4c-7.1,0.2-14.1,1.1-21.2,1.8c-4.2,0.4-8.4,0.8-12.5,1.7
			c-4.8,1.1-9.3,2.6-13.2,5.7c-0.2,0.1-0.3,0.2-0.5,0.3c-0.4,0.3-0.7,0.2-0.8-0.3c-0.2-1-0.3-1.9-0.3-2.9c-0.2-3.8-0.2-7.7-0.6-11.5
			c-0.3-3.2-0.6-6.4-0.8-9.6c0-0.8-0.2-1.5,0.1-2.3c0.8-0.9,2-1.2,3.1-1.6c6-2.5,12-4.9,18.4-6.3c6.3-1.4,12.7-1.5,19.1-1.1
			c3.8,0.3,7.5,1,11,2.6c1.8,2.1,4.3,1.4,6.5,1.6c1.9,0.2,3.8,0.5,5.8,0.1c0.4-0.1,0.8,0,1.1,0.2c1.7,1,3.4,0.5,5.1,0
			c1.9-0.6,3.9-0.6,5.9-0.5c2.2,0,4.2,0.5,6.3,1.2c0.7,0.2,1.3,0.5,2,0.8c1.7,0.9,3.4,1.9,5.3,2.3c1.3,0.3,2.6,1.1,3.7,2
			c1.2,1,2.6,1.5,4.1,1.6c0.5,0,1,0,1.3,0.5C733.3,122.8,733.1,124.7,733.3,126.6z"/>
                                <path class="st2" d="M623.2,111.7c-1.9-0.3-3.7-1-5.4-2c-1.5-0.8-2.9-1.7-4.4-2.5c-1.1-0.2-1.9-1.1-2.7-1.5
			c0.6,0.6,1.8,0.9,2.3,1.9c1.3,1.2,2.8,2.3,4.4,3.2c0,0.5-0.2,0.5-0.6,0.3l-0.1-0.1l-0.1,0c-0.3-0.2-0.6,0-0.9-0.2
			c-0.4-0.1-0.8,0.1-1.1-0.4c-2.4-0.4-4.4-1.9-6.5-3c-0.1-0.1,0.1,0-0.1-0.1c-0.1,0,0,0,0.1,0.1c1.5,0.9,3,1.7,4.6,2.5
			c0.5,0.2,1,0.4,1.3,0.9c2,1.1,4.2,1.5,6.4,2c0.6,0.2,1.2,0.4,1.8,0.5c0.2,0.3,0.6,0,0.9,0.3l0,0c-0.6,1.2-1.7,0.9-2.6,0.8
			c-0.8-0.1-1.6-0.1-2.4-0.2c-0.1,0-0.3,0-0.4-0.1c-0.5-0.2-1-0.2-1.4-0.2c-0.1,0-0.3,0-0.4-0.1c-0.3-0.1-0.7-0.1-1-0.2
			c-2.3-0.4-4.5-1-6.6-1.9c1.4,0.6,3,1.1,4.2,2.1c0,0.2,0,0.4-0.2,0.5c-0.4,0.2-0.7-0.1-1.1-0.2c0.3,0.1,0.6,0.3,0.3,0.7
			c-0.1,0.2-0.3,0.1-0.5,0c-0.9,0.1-1.5-0.5-2.3-0.9c-4.6-2.2-8.7-5.2-11.2-9.8c-3.4-6.2-3.4-12.4,0.3-18.5c1.2-2,2.7-3.9,4.3-5.7
			c1.4-1.6,3.2-2.7,5.1-3.8c0.2,0.8-0.4,1.4-0.1,2.1c0.7-0.4,1.1-0.9,1.5-1.5c0.5-0.7,0.9-1.5,1.4-2.2c3.7-5.6,9.1-8.7,15.2-10.8
			c1.7-0.5,3.4-0.9,5.1-1.3c2.6-0.7,5.1-0.4,7.6,0.3c4.7,1.4,8.9,3.7,12.9,6.5c2,1.4,4,2.9,6,4.4c1,0.7,1,0.8,0.5,1.9
			c-2.4,5.2-3.4,10.7-2.9,16.4c0.2,2.6,0.8,5.1,2.1,7.4c0.3,0.7,0.1,1.4-0.4,1.8c-1.8,1.9-3.8,3.3-6.6,3.1c-1.7-0.4-2.8-1.5-3.7-2.8
			c-1-1.3-1.7-2.7-2.5-4.1c-1.1-2.1-2.1-4.2-3.5-6.2c-0.6-0.3-0.8-0.9-1.1-1.4c0.3,0.7,0.7,1.3,0.8,2c1.5,3.8,2.8,7.8,5,11.3
			c-0.2,0.9-0.9,0.7-1.5,0.7c-3.1,0.2-6.2-0.2-9.2-1.2c-0.5-0.2-1-0.4-1.6-0.5c0.4,0.6,0.4,1.1,0.1,1.7c-0.2,0.5-0.8,0.5-1.2,0.6
			c-0.4,0.1-0.9,0-1.3-0.1c-0.9-0.3-1.5-1.1-2.1-1.7c-2.4-2.1-4.6-4.5-6.5-7c-0.3-0.4-0.7-0.9-1.1-1.2c2,3.9,4.6,7.4,7.7,10.6
			c0.2,0.5,0.4,0.9,0.7,1.3c1.1,2,0,3.8-2.3,4c-1.5,0.1-2.8-0.4-4.2-0.7c0.5,0.7,1.7,0.9,1.8,2.1c0,0-0.1,0.1-0.1,0.1
			C623.4,111.8,623.3,111.8,623.2,111.7z"/>
                                <path class="st3" d="M657,97.2c-1-1.9-1.4-3.9-1.6-6c-0.6-6.5,0.7-12.5,3.7-18.2c0.7-2.1,2.2-3.7,3.6-5.4c0.4-0.5,0.8-1,1.2-1.5
			c-0.5,0.4-0.8,0.9-1.2,1.4c-1.2,1.3-2.1,2.7-3.1,4.1c-0.2,0.4-0.5,0.7-0.9,0.9c-0.2,0.2-0.3,0.4-0.5,0.6c-2.2-1.8-4.4-3.6-6.3-5.7
			c-0.4-0.5-0.8-1-1.2-1.4c-1.7-2.8-3.4-5.5-5.4-6.7c1.9,1.1,3.5,3.8,5,6.6c0.1,0.3,0.2,0.5,0,0.8c0,0-0.1,0-0.1,0
			c0,0-0.1,0-0.1-0.1c-5-3.5-10.6-5.7-17-6.7c1.6-0.9,2.5-2,3.6-3c5.4-4.5,11.3-7.9,18.4-8.8c6.2-0.8,12.4-0.2,18.3,2
			c2.9,1,5.6,2.5,8,4.4c0.3,0.2,0.6,0.4,0.8,0.6c2,1.1,3.6,2.6,4.7,4.7c0,0.2,0,0.5,0.3,0.6c1,1.8,1.8,3.6,2.4,5.6
			c1.5,5,1,9.8-0.7,14.6c-2.2,6-5.7,11.1-11.3,14.5c-0.9,0.6-1.9,0.9-3,1.1c-0.9,0.1-1.8,0.1-2.2-0.9c-0.2-2-0.3-3.9-1-5.9
			c-0.3,0.2-0.2,0.4-0.2,0.6c0,0.2,0,0.4,0,0.6c0,1.6,0,3.2-0.3,4.8c-0.2,0.9-0.4,1.7-1.1,2.3c-2.3-0.1-3.5-1-4-3.1
			c-0.5-2-1.4-3.8-1.8-5.8c-0.4,1.4-0.2,2.9-0.5,4.4c-0.6,2.6-2,3.8-4.6,3.9C658.3,97.2,657.6,97.4,657,97.2z"/>
                                <path class="st4" d="M698.3,90.7c0.4-1.3,0.1-2.6,0-4c-0.7-0.7-0.8-1.7-0.9-2.6c-0.8-5.3-1.7-10.6-3-15.8c-0.6-2.6-1.5-5-2.8-7.3
			c-0.4-0.7-0.8-1.3-1.8-1.2c-0.7,0-1.2-0.6-1.7-1c-1.4-1.1-2.6-2.5-3.9-3.7c-0.3-0.3-0.8-0.7-0.4-1.4c2.3-1,4.6-2,7-2.9
			c3.3-1.2,6.7-2.1,10.3-2.3c3.1-0.2,6.2,0.2,9.1,1.4c3.6,1.4,6,3.9,7.6,7.4c0.3,0.2,0,0.6,0.4,0.8v0c0.2,0.3,0,0.7,0.3,0.9l0,0
			c0.2,0.2,0,0.7,0.3,0.9l0,0c0.9,3.9,1.5,7.9,1.3,11.9c-0.3,6.6-2.8,12.4-6.8,17.6c-2,2.6-4.6,4-8.1,3.6c-2-0.2-3.9-0.6-5.8-1.2
			C698.9,91.5,698.3,91.4,698.3,90.7z"/>
                                <path class="st5" d="M750.8,69.8c0.3,0.1,0.7,0.2,0.6-0.4c0-0.6-0.1-1.1-0.2-1.7c-0.1-0.5-0.3-1-0.1-1.5c1.4-0.2,2.4,0.6,3.4,1.6
			c4.9,4.9,7,10.9,7,17.8c0,2.2,0,4.5,0.5,6.7c0.5,2.7,3.2,3.8,5.6,2.6c1.1-0.6,1.9-1.6,3.1-2c-0.3,1.7-1,3.3-1.9,4.8
			c-3.5,5.9-8.5,10-15.1,12.1c-5.5,1.7-11.2,2.5-16.9,2.9c-0.1,0-0.2,0-0.4-0.1c0.1-0.8,0.2-1.6,0-2.4c0.6-0.3,1.2-0.1,1.7-0.1
			c5,0.2,9.8-0.5,14.3-2.7c1.4-0.7,2.8-1.4,4.1-2.3c0.5-0.4,1-0.7,1.4-1.4c-0.9-0.1-1.5,0.3-2.1,0.6c-3.4,1.6-6.8,2.7-10.5,3.2
			c-3,0.4-6,0.5-9,0.3c-1.3-0.1-1.9-0.9-2.4-2.1c10.6,0.2,18.4-4.4,24.2-12.9c0.4-1.3,1-2.5,1.5-3.6c-0.6,0.9-0.6,2.3-1.7,3
			c-5.7,7.8-13.5,11.2-23.3,11.3c5.6-2.2,9.3-6.1,12.2-10.9c2.9-4.8,4.5-9.9,4.4-15.9c-0.6,0.9-0.6,1.7-0.7,2.3
			c-1.2,6.3-3.9,11.9-8.1,16.7c-2.2,2.5-4.9,4.6-8.1,5.9c-1.5,0.6-3,0.9-4.5,0.8c-3.3-0.2-6.4-0.8-9.2-2.7c-0.6-0.4-1.3-0.8-2.1-1.3
			c1.7-1.5,2.2-3.6,3.1-5.4c1-0.7,2.2-0.4,3.2-0.6c4.5-0.8,7.9-3,10-7.2c0.4-0.7,0.8-0.8,1.5-0.5c3.7,1.6,7.6,0.7,10.4-2.4
			c2.4-2.8,3.8-5.9,3.7-9.7C750.2,71.7,749.7,70.5,750.8,69.8z"/>
                                <path class="st6" d="M750.8,69.8c-0.4,1.1-0.2,2.2-0.2,3.3c0,2.8-0.9,5.3-2.4,7.7c-1.7,2.6-4,4.3-7,5.1c-1.9,0.5-3.7,0.3-5.4-0.9
			c-0.2-0.1-0.3-0.2-0.4-0.2c-2.1,4.7-5.7,7.2-10.6,8.1c-1.1,0.2-2.2,0.2-3.3,0.2c0.2-1.2,0.4-2.3,0.6-3.5c0.4-0.8-0.2-1.6-0.2-2.4
			c0-1.5,0.4-2.8,0.5-4.3c0-0.7-0.1-1.4,0.2-2.1c0.5-5.1,0.2-10.3-0.5-15.4c-0.4-2.6-1-5.2-1.8-7.8c-0.2-0.5-0.2-0.8,0.4-1.1
			c5.3-2.5,10.7-2.7,16.3-1.3c3.1,0.8,5.6,2.4,7.7,4.7c2,2.2,3.5,4.6,4.8,7.2C749.9,68.1,750.3,68.9,750.8,69.8z"/>
                                <path class="st7" d="M672.5,95.3c0.8,0.6,1.8,0.6,2.8,0.4c1.9-0.5,3.6-1.6,5-2.9c5.1-4.5,8.2-10.2,9.6-16.9c1-4.9,0.1-9.5-2.1-14
			c-0.2-0.5-0.7-1-0.5-1.6c1.2,0.9,1.8,2.2,2.4,3.5c1.5,3,2.5,6.2,2.8,9.6c0.7,6.4,0.5,12.7-0.9,19c-0.6,2.5-1.5,4.9-3.1,7
			c-2.4,3.2-5.6,4.8-9.5,5c-2.1,0.1-4.2,0-6.2-0.2c-3.1-0.3-6.2-1-9.4-0.4c0.2-0.6,0.6-0.6,1-0.7c1.4-0.5,2.7-1,4-1.7
			C670.8,100.1,672.3,98.2,672.5,95.3z"/>
                                <path class="st8" d="M698.3,90.7c0.1,0.2,0.3,0.4,0.6,0.4c3,1,6,1.7,9.1,1.4c1.2-0.1,2.2-0.7,3.1-1.5c1.1-1,2.2-2.1,3-3.4
			c2.2-3.3,4-6.8,4.8-10.7c0.8-3.6,0.8-7.3,0.5-11c-0.2-2.1-0.9-4.1-0.7-6.2c0.5,0.6,0.6,1.3,0.7,2c1.1,4.6,1.8,9.2,1.6,14
			c-0.4,7.1-2.4,13.7-7,19.2c-3.1,3.8-7.1,6.5-11.6,8.2c-2.4,0.9-5,0.9-7.5,0.6c-1.5-0.2-2.5-1.1-3.3-2.3c-0.3-0.5-0.3-0.9,0-1.3
			c0.1-0.1,0.2-0.2,0.3-0.3C694.6,97.1,696.8,94.1,698.3,90.7z"/>
                                <path class="st9" d="M733.3,126.6c-0.4-0.6-0.3-1.3-0.3-2c0-1.3,0-2.6-0.1-3.9c-0.6-1-0.2-2.1-0.3-3.1c0.1-2.4-3.5-5.8-5.4-6.3
			c-0.9-0.2-1.7,0.2-2.5,0.5c-0.5,0.2-0.9,0.5-1.4,0.8c-0.2,0.1-0.3,0.2-0.5,0.3c-1.7,1.4-3.3,1.3-5.3,0.3
			c-4.8-2.4-9.8-4.5-15.2-5.4c-2.4-0.4-2.6-0.3-3.6,2c-0.7,1.8-1.8,2.8-3.9,2.5c-0.7-0.1-1.5,0-2.2,0c-0.5,0-1,0-1.2-0.6
			c1-0.9,2.1-0.2,3.3-0.5c-1.1-0.4-0.7-1-0.3-1.7c0.6-0.9,1.8-1.5,1.7-2.9c0-0.5,0.5-0.3,0.8-0.4c0.9-0.1,1.8,0.1,2.7-0.1
			c3.7-0.4,6.9-2.2,9.9-4.4c1.1-0.8,2.1-1.1,3.4-0.9c1.6,0.3,3.3,0.2,4.9,0.3c0.9,0,1.8,0.2,2.7,0.7c4.8,2.6,8.8,6,11.6,10.8
			c0.7,1.3,1.2,2.5,1.1,4C733.2,120,733.3,123.3,733.3,126.6z"/>
                                <path class="st10" d="M770.7,92.7c-1.1,1.5-2.7,2.3-4.4,3c-0.5,0.2-1,0.1-1.5,0c-2.6-0.8-3.4-2.7-3.5-5.2c0-3.2-0.2-6.4-0.6-9.5
			c-0.5-4.4-2.3-8.3-5.3-11.5c-0.6-0.7-1.2-1.4-1.8-2c-0.7-0.7-1.4-1.2-2.4-1.2c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.3,0-0.4,0.3-0.3
			c2.4,1,4.8,2.1,7.1,3.2c3,1.5,5.8,3.3,8.1,5.8C771.6,79.9,772.7,86,770.7,92.7z"/>
                                <path class="st11" d="M699.8,106.2c-0.4,0.4-1,0.2-1.5,0.3c-0.6,0.1-1.1-0.1-1.8,0.1c0.7,1,0.2,1.5-0.7,2.1
			c-0.6,0.4-0.8,1.3-1.4,1.7c0.2,0.7,0.8,0.3,1.1,0.5c0.2,0.1,0.4,0.2,0.4,0.5c-0.1,0.2-0.3,0.2-0.5,0.2c-1.3,0-2.5,0-3.8,0
			c-1.9,0.8-3.7,0.5-5.5-0.3c-2-0.6-4-1.5-6.1-1.9c-2.1-0.4-4.1-0.6-6.2-0.7c-4.8-0.3-9.7-0.1-14.5,0.6c-3.8,0.5-7.5,1.7-11.2,2.9
			c-4.6,1.5-9,3.6-13.5,5.2c0.8-1,1.5-2,2.3-3c0.4-0.5,1-0.8,1.6-1c2.9-1.3,5.7-2.7,8.5-4.2c0.7-0.4,1.4-0.7,2-1.2
			c0.7-0.7,1.5-0.9,2.5-0.7c1.7,0.3,3.3,0,4.9-0.5c4.9-1.8,9.9-1.5,14.9-0.9c1.8,0.2,3.6,0.5,5.3,0.6c2.2,0.2,4.5,0.2,6.6-0.5
			c1.4-0.4,2.8-0.5,4.3-0.4C691.6,106,695.7,106.3,699.8,106.2z"/>
                                <path class="st12" d="M688.2,58.4c0.3,0,0.5,0.3,0.7,0.5c0.4,0.5,0.8,0.8,1.5,0.5c0.5-0.2,0.8,0.1,1,0.5c1.7,2.8,2.9,5.7,3.6,8.8
			c0.6,2.9,1.4,5.7,1.8,8.6c0.4,2.7,0.9,5.3,1.3,8c0.1,0.5,0.4,0.9,0.3,1.4c-0.3,0.3-0.4,0.7-0.4,1.1c-0.2,3-1.8,5.4-3.6,7.6
			c-0.3,0.4-0.6,0.9-1.2,1.1c0.4-1.7,1-3.4,1.3-5.1c1.6-9.5,1-18.8-3.1-27.7c-0.6-1.4-1.5-2.7-2.5-3.9
			C688.6,59.3,687.8,59.1,688.2,58.4z"/>
                                <path class="st13" d="M629.6,104.4c0.4-0.2,0.8-0.3,1.2-0.3c1.1,0,1.1-0.1,1.1-1.2c0-0.4,0-0.7,0-1.2c1.2,0.4,2.4,0.7,3.6,1.1
			c2.7,0.8,5.4,0.7,8.2,0.7c0.2,0,0.4-0.1,0.5-0.3c1,1.2,2.1,2.4,3.5,3.4c-2.6,1.3-5.2,2.5-8.1,2.1
			C635.9,108.1,632.4,107,629.6,104.4z"/>
                                <path class="st14" d="M657,97.2c0.5-0.4,1.2-0.4,1.8-0.4c0.7,0,1.5-0.1,2.1-0.3c1-0.4,1.7-1,2-2.1c0.3-1,0.5-2.1,0.5-3.1
			c0.1-1.2,0.2-2.4,0.3-3.6c0.6,0,0.5,0.4,0.5,0.6c0.6,2.4,1.7,4.6,2.2,7.1c0.2,0.7,0.6,1.2,1.3,1.5c0.7,0.3,1.5,0.5,2.1,0.9
			c-1.9,2-4.2,3.1-6.8,3.4C660.2,101.5,657.8,99.7,657,97.2z"/>
                                <path class="st15" d="M623.2,111.7c0.4-0.3,0.1-0.5-0.2-0.6c-0.9-0.6-1.5-1.3-2.3-2.2c1.3,0.3,2.4,0.7,3.6,0.9
			c1.3,0.3,2.6,0.5,3.6-0.8c0.7-0.8,0.8-1.1,0.3-2.1c-0.2-0.4-0.4-0.9-0.8-1.2c-0.4-0.4,0.1-0.5,0.2-0.7c0.3,0,0.4,0.2,0.6,0.3
			c2.4,2.1,5.2,3.5,8.2,4.6c1.1,0.4,2.2,0.7,3.5,0.6c-0.2,0.5-0.6,0.5-0.9,0.6c-4.4,1.4-9,2-13.6,1
			C624.6,112,623.8,112.2,623.2,111.7z"/>
                                <path class="st16" d="M722.6,80.8c0,1.5,0,3-0.2,4.6c-0.1,0.9-0.1,1.8-0.1,2.7c0,0.5,0.1,1.1-0.3,1.5c0-0.3-0.1-0.6-0.2-1
			c-0.6,1.9-1.1,3.8-1.9,5.5c-0.7,1.5-1.5,2.8-2.7,4c-0.3,0.3-0.7,0.6-0.7,0.9c-0.1,0.9-0.6,0.9-1.3,0.9c-0.8,0-1.6,0-2.4,0
			c-0.1-0.6,0.3-0.7,0.5-0.9c4.9-4.7,7.8-10.3,8.8-17C722.3,81.5,722.3,81.1,722.6,80.8z"/>
                                <path class="st17" d="M617.4,114c0.9-0.1,1.8,0.1,2.7,0.1c1,0.1,1.9,0.1,2.8-0.4c2,0.2,4,0.4,6,0.7c1.8,0.2,3.7,0.3,5.5,0
			c0.2,0,0.4-0.1,0.5,0.1c0,0.1,0,0.1,0,0.1c-4.9,2.1-10,3.2-15.4,2.4c0,0-0.1,0-0.1-0.1c0.4-0.5,1-0.4,1.6-0.4
			c0.9,0-0.3-0.5,0.2-0.6c0.2-0.1,0.3-0.2,0.6-0.2c-1.1-0.5-2.2-0.8-3.3-1.1C618,114.6,617.4,114.7,617.4,114z"/>
                                <path class="st18" d="M649.1,104.4c1.7-0.4,3.3-0.9,4.8-1.9c1.1-0.8,2-1.7,2.2-3.1c1.2,1.8,2.9,2.9,5.4,3.3
			c-3.3,1.3-6.2,2.7-9.6,2.3C651,104.9,650,104.9,649.1,104.4z"/>
                                <path class="st19" d="M734.5,113.3c-2.1-3.7-4.8-7-8.5-9.6c3,0.1,5.3,1,6.7,3.5c0.9,1.5,1.8,3,2.1,4.8
			C734.9,112.3,735.2,112.8,734.5,113.3z"/>
                                <path class="st20" d="M621.2,116.1c0.3,0.5,0.9,0.1,1.4,0.6c-1.1,0.6-2.2,0-3.2,0.3c0,0-0.1,0-0.1,0l-0.1,0
			c-0.6-0.4-1.2,0-1.8-0.3c-2.3-0.3-4.6-0.8-6.7-1.8c0.8,0.1,0-0.8,0.4-0.8c0.4,0,0.8,0.4,1.1-0.1c0.4-0.3,0.8-0.3,1.2-0.2
			c2.3,0.8,4.7,1.4,7.1,1.8C620.7,115.7,621,115.8,621.2,116.1z"/>
                                <path class="st21" d="M688.2,58.4c0,0.6,0.6,0.9,0.6,1.4c-0.6-0.2-1.2-0.6-1.8,0.1c-1.5-1.6-3-3.2-4.7-4.7c1,0,1-1,1.5-1.5
			c-0.2,0.5,0.2,0.8,0.5,1.1C685.7,56,686.9,57.2,688.2,58.4z"/>
                                <path class="st22" d="M650.1,66.7c0.2-0.2,0.1-0.3,0-0.5c-1.6-3-3.3-5.8-6.3-7.6c-0.1,0,0-0.2-0.1-0.3c2,0.2,5.1,3.5,7.3,7.6
			c0.2,0.7,1.3,1.1,0.5,2.1C651,67.6,650.4,67.3,650.1,66.7z"/>
                                <path class="st23" d="M651.5,68c0.2-0.8-0.6-1.3-0.5-2.1c0.9,0.6,1.3,1.6,2.1,2.3c1.2,1.1,2.4,2.2,3.6,3.3c0.6,0.5,1.1,1,1.5,1.7
			c-0.1,0.2-0.3,0.4-0.4,0.2C655.8,71.4,653.4,70,651.5,68z"/>
                                <path class="st24"
                                      d="M689.8,101.9c0.4,1,1.3,1.4,2,2.4c-1.6,0.1-3.1,0.1-4.8,0C688,103.4,688.9,102.6,689.8,101.9z"/>
                                <path class="st25" d="M607.8,107.3c0.7,0,1.1,0.5,1.7,0.7c1.7,0.8,3.4,1.6,5.1,2.4c-0.3,0.1-0.6,0.1-0.7,0.4
			c-2-0.7-3.7-1.7-5.5-2.9C608.1,107.8,607.7,107.7,607.8,107.3L607.8,107.3z"/>
                                <path class="st26" d="M662.9,67.7c-1.4,1.6-2.5,3.5-3.7,5.3c-0.1-0.1-0.3-0.3-0.4-0.4c1.1-1.9,2.4-3.6,3.9-5.2
			C662.8,67.3,663,67.4,662.9,67.7z"/>
                                <path class="st27"
                                      d="M757.8,92.2c0.6-1.2,1.2-2.4,1.8-3.6c-0.2,1.5-0.6,3-1.5,4.2C758.1,92.5,758.1,92.3,757.8,92.2z"/>
                                <path class="st28"
                                      d="M613,107.6c-1.1-0.8-2.2-1.6-3.3-2.4c1.4,0.4,2.6,1.1,3.7,2C613.3,107.4,613.1,107.5,613,107.6z"/>
                                <path class="st29"
                                      d="M639.2,91.9c-0.6-0.8-0.9-1.7-1.3-2.7c0.6,0.6,1.2,1.3,1.5,2.1C639.2,91.4,639.3,91.7,639.2,91.9z"/>
                                <path class="st25"
                                      d="M616.8,111.1c0.2-0.1,0.5,0.1,0.6-0.3c0.4-0.1,0.6,0.1,0.7,0.5C617.6,111.5,617.2,111.5,616.8,111.1z"/>
                                <path class="st17"
                                      d="M617.3,116.7c0.6,0,1.3-0.2,1.8,0.3C618.5,117,617.9,117,617.3,116.7z"/>
                                <path class="st25"
                                      d="M615.6,110.8c0.3-0.1,0.6,0,0.9,0.2C616.2,111.2,615.9,111.2,615.6,110.8z"/>
                                <path class="st17"
                                      d="M622.9,113.7c-0.4,0.1-0.6,0-0.9-0.3C622.4,113.4,622.7,113.4,622.9,113.7z"/>
                                <path class="st5"
                                      d="M751.4,65.7c-0.1,0.1-0.2,0.2-0.3,0.3c-0.2-0.2-0.3-0.4-0.1-0.6C751.2,65.3,751.4,65.4,751.4,65.7z"/>
                                <path class="st8"
                                      d="M718.8,59.8c-0.4-0.2-0.4-0.5-0.3-0.9C718.8,59.1,718.9,59.4,718.8,59.8z"/>
                                <path class="st8"
                                      d="M718.5,58.9c-0.4-0.2-0.4-0.5-0.3-0.9C718.6,58.2,718.6,58.6,718.5,58.9z"/>
                                <path class="st8"
                                      d="M718.2,58c-0.4-0.1-0.4-0.5-0.4-0.8C718.3,57.4,718.3,57.7,718.2,58z"/>
                                <path class="st30" d="M686.2,111.4c1.8,0.3,3.7,0.4,5.5,0.3c1.7,0.5,3.4,0.2,5.2,0.2c0.4,0,0.5-0.3,0.7-0.6
			c0.5-0.8,0.9-1.6,1.2-2.5c0.5-1.5,0.6-1.5,2.2-1.5c2.1,0.1,4.2,0.6,6.2,1.2c4,1.2,7.9,2.9,11.7,4.8c1,0.5,1.8,0.5,2.7-0.1
			c0.6-0.4,1.1-0.9,1.9-1.1c1.3,0.2,2.7,0.4,3.5,1.7c0.2,0.3,0.4,0.5,0.8,0.3c0.7-0.3,1.3,0.1,1.7,0.5c1,1.1,2.3,1.8,3.5,2.4
			c0.1,1.2,0,2.3,0,3.5c-0.8-0.1-1.6,0-2.4-0.2c-1-0.3-1.9-0.6-2.7-1.3c-1.1-1-2.4-1.6-3.8-2.1c-0.8-0.3-1.8-0.3-2.6-0.8
			c-1.1-0.5-2.1-1.1-3.1-1.7c-0.3-0.2-0.6-0.4-0.9-0.5c-1.6-0.4-3.2-0.8-4.9-1.2c-0.4-0.1-0.8,0-1.2,0c-0.2,0-0.4,0.2-0.5,0.1
			c-1-0.7-2.1-0.2-3.1-0.2c-1.1,0-2.1,0.1-3.1,0.5c-1,0.5-2.1,0.5-3.1,0.6c-0.5,0.1-1,0-1.4-0.3c-0.8-0.6-1.7-0.7-2.6-0.4
			c-0.7,0.2-1.3,0.2-2,0c-0.4-0.1-0.9-0.1-1.3-0.1c-1.3-0.1-2.5,0.2-3.7-0.3c-0.1,0-0.3-0.1-0.4,0
			C688.5,113.3,687.2,112.8,686.2,111.4z"/>
                                <path class="st31" d="M621.2,116.1c-2.7-0.3-5.2-1-7.8-1.8c-0.4-0.1-0.8-0.4-1.3-0.2c-1.6-0.5-3-1.3-4.4-2.3
			c2.3,0.6,4.6,1.2,7,1.8c0.3,0.2,0.6,0,0.9,0.2c0.1,0,0.2,0,0.3,0c0.4,0.3,1-0.1,1.5,0.3l0,0c0.9,0.4,1.8,0.5,2.7,0.8
			c0.7,0.2,1.4,0.5,2,1.1C621.8,116.2,621.5,115.9,621.2,116.1z"/>
                                <path class="st17"
                                      d="M617.4,114c-0.5,0.1-1,0.1-1.5-0.3C616.4,113.7,617,113.6,617.4,114z"/>
                                <path class="st25" d="M607.8,107.3c-0.3,0.2-0.5-0.1-0.6-0.4C607.4,107,607.7,107,607.8,107.3
			C607.8,107.3,607.8,107.3,607.8,107.3z"/>
                                <path class="st17"
                                      d="M615.7,113.7c-0.3,0.1-0.7,0-0.9-0.2C615.1,113.4,615.4,113.4,615.7,113.7z"/>
                                <path class="st32"
                                      d="M662.9,67.7c0-0.1-0.1-0.2-0.3-0.3c0.6-0.9,1.4-1.5,2.2-2.2C664.3,66.2,663.7,67,662.9,67.7z"/>
                                <path class="st33" d="M751.6,93c-1.3,2.8-3.3,5-6,6.6C747.8,97.5,749.9,95.5,751.6,93z"/>
                                <path class="st34" d="M733,117.2c-1.1,0-2-0.5-2.8-1.3c-0.5-0.5-0.9-1-1.5-1.4c-0.2-0.1-0.6-0.4-0.8-0.1c-0.6,1.2-0.8,0.2-1.1-0.2
			c-0.5-0.7-0.9-1.3-1.9-1.3c-0.5,0-1-0.5-1.5-0.8c0.7-0.7,1.6-0.9,2.4-1.3c0.8-0.3,1.6-0.1,2.3,0.3
			C730.5,112.7,732.4,114.5,733,117.2z"/>
                                <path class="st34" d="M724.6,114.4c0,0.2-0.1,0.3-0.3,0.2c-0.1-0.1-0.2-0.2-0.2-0.3c0-0.1,0.1-0.3,0.3-0.2
			C724.5,114.2,724.5,114.3,724.6,114.4z"/>
                            </g>
                            <g id="ChefTorso">
                                <g>
                                    <g>
                                        <path class="st0" d="M675.2,324.5c1-0.9,2.3-1.2,3.6-1.2c6.4,0.1,12.7-0.2,19-0.5c4.6-0.2,9.1-0.6,13.5-1.7
					c3.2-0.8,6-0.2,8.1,2.5c2.7,3.1,5.5,6.1,8.1,9.4c1.6,2,3.3,3.9,5.3,5.5c2.5,0.4,5,0.9,7.4,1.4c0.2-3,0.6-6,1.2-9
					c0.3-1.5,0.6-2.9,1-4.4c0-0.4-0.1-0.8-0.1-1.3c-0.1-1.6,0.1-3.2,0.3-4.7c0-0.1,0-0.1,0-0.2c-0.1-1.3,0-2.5,0.2-3.8
					c-0.1-0.7-0.2-1.5-0.2-2.2c-0.1-2.2,0.2-4.3,0.7-6.3c-0.1-0.8-0.2-1.5-0.2-2.3c-0.2-3.6,0.7-7,2.2-10.2c-0.2-1-0.3-2.1-0.3-3.1
					c-0.1-3.1,0.4-6.1,1.6-8.8c0-0.3-0.1-0.7-0.1-1c-0.2-4,0.8-7.7,2.6-11.1c-0.1-0.6-0.1-1.2-0.2-1.9c-0.1-2.3,0.2-4.6,0.8-6.7
					c0-3.6,1-7.1,2.7-10.2c-0.1-0.8-0.2-1.6-0.2-2.4c-0.1-1.2,0-2.3,0.1-3.5c0-1.4,0.2-2.8,0.5-4.2c-0.2-1-0.3-2.1-0.4-3.2
					c-0.1-1.4,0-2.8,0.2-4.1c-0.2-0.8-0.4-1.6-0.5-2.4c-0.1-0.2-0.1-0.4-0.2-0.6c-0.7-3.6-1.5-7.2-2.6-10.7
					c-0.8-2.6-4.2-7.5-5.7-9.7c-1.5,0.3-0.8,3-2.3,3.3c0.1,0.6,0.1,1.2,0.1,1.8c0.3,6.2-2.4,12-6.6,16.3c-1.2,2.9-2.9,5.5-5.1,7.7
					c-1.1,1.4-2.4,2.7-3.8,3.8c-0.9,1.1-1.8,2.1-2.8,3c-2.4,4.2-6.1,7.6-10.4,9.8c-0.4,1.8-0.4,3.7-0.7,5.5c-0.3,1.9-1,3.8-1.1,5.7
					c0,0.5-0.1,0.9-0.3,1.3c0,0.2-0.1,0.3-0.1,0.5c0,0.2-0.1,0.4-0.1,0.6c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1
					c-0.1,0.8-0.2,1.7-0.2,2.5c0,0.1,0,0.2,0,0.3c0.1,0.7-0.3,1.4-1,1.6c-0.6,0.2-1.2-0.1-1.5-0.6c-0.3,0-0.6-0.2-0.9-0.4
					c-0.1-0.1-0.3-0.2-0.4-0.3c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1-0.1c-0.3-0.2-0.7-0.5-1-0.8c-0.6-0.5-1-1.1-1.5-1.8
					c-0.2-0.2-0.3-0.5-0.5-0.8c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.6c-0.1-0.1-0.2-0.1-0.3-0.3c-1.1-1.1-2.1-2.3-3-3.5
					c-1-1.1-2-2.1-3.1-3.1c-1-0.9-1.8-2-2.3-3.2c-0.5-0.5-0.8-1.2-0.9-1.9c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2-0.1-0.3-0.1-0.5-0.2
					c-0.4,0-0.7,0-1.1,0c-2.9,0-5.7-0.5-8.2-1.5c-0.9,0.9-1.8,1.7-2.6,2.7c-1.5,1.7-2.7,3.7-4.2,5.4c-1.5,1.8-3.4,3.2-5.3,4.5
					c-2,1.3-4.2,2.5-6.5,3.1c-0.2,0-0.3,0-0.5,0c-0.8,0.1-1.7-0.3-1.7-1.3c0-1.1-0.1-2.2-0.1-3.2c-0.2-0.4-0.3-0.9-0.3-1.3
					c-0.1-0.2-0.1-0.4-0.1-0.6c0-1.3,0.2-2.7,0.5-4.1c-0.1-0.6-0.1-1.3,0-2c0.8-4.6,1.4-9.1,2.4-13.7c0.1-0.6,0.3-1.3,0.5-1.9
					c0.1-0.4,0.3-0.8,0.5-1.2c-0.9-1.7-1.6-3.5-2.1-5.4c-0.2,0-0.5,0-0.7,0c-1.9,0-3.8-0.2-5.6-0.7c-1.1,2.4-2.6,4.5-4.4,6.5
					c-1,2.4-2.4,4.6-4.1,6.6c-0.9,1.5-1.9,3-3.1,4.3c-0.8,3.1-2.4,5.9-4.4,8.4c-0.3,3-1.3,5.8-2.7,8.4c-0.4,1.2-0.9,2.4-1.4,3.5
					c-0.3,2.1-0.8,4.1-1.7,6c-0.1,1.7-0.4,3.3-0.9,4.8c-0.2,2.3-0.8,4.5-1.7,6.6c0.1,2.9-0.4,5.8-1.5,8.4c0,1.4-0.2,2.8-0.5,4.1
					c0,0.2,0,0.4,0,0.7c0.1,1.5,0,3-0.3,4.4c0,1.3-0.2,2.5-0.5,3.8c-0.1,1.3-0.3,2.5-0.6,3.7c0,0.2,0,0.4-0.1,0.7
					c14.1,3.8,28.3,7.6,42.5,11"/>
                                        <path class="st35" d="M742.1,277.8c-7.8-0.2-15.5-0.3-23.3-0.3c-2.2-0.3-2.6-0.1-3.4,2.1c-0.5,1.4-1.4,2.3-2.5,3.1
					c-0.8,0.6-1.7,1.2-2.4,1.9c-0.8,0.9-1.5,0.8-2.4,0.1c-2.1-1.7-4.5-3-7.1-4c-1.8-0.8-3.7-1.3-5.4-2.1c-1.7-0.8-3.2-0.7-4.7,0.1
					c-1.5,0.7-2.9,1.5-4.5,2.1c-4.6,1.6-9.3,3.2-14,4.5c-2.2,0.6-4.3,1.4-5.7,3.4c-0.8,1.1-1.2,1-1.8-0.3c-1.2-2.5-1.6-5.2-2.1-7.9
					c-0.3-1.9-0.1-4-0.9-5.9c-0.8-0.4-1.7-0.8-1.9-2c-0.2-1.3-0.3-1.3-1.6-1.3c-0.4,0-0.8-0.2-1.1,0.2c0,0.2,0,0.4,0,0.7
					c0.3,4.4-2.1,7.8-6.3,9c-3.2,0.9-6.4-0.6-7.5-3.5c-0.2-0.6-0.3-1.2-0.5-1.8c-0.8-0.2-1.6-0.2-2.4-0.3c-0.4,0.5-0.4,1.1-0.6,1.6
					c-1.4,4.5-2.3,9.2-3.3,13.9c-1.5,7.2-2.6,14.4-3.6,21.7c-0.3,2.3-0.3,2.3,1.9,2.9c0.1,0,0.3,0.1,0.4,0.1
					c8,2.1,15.8,4.8,23.8,6.7c3.4,0.8,6.8,1.8,10.3,2.6c0.7,0.1,1.1,0.2,1.3-0.6c0.3-0.8,0.9-1.4,1.5-1.9c2.1-1.9,4.5-2.7,7.3-2.6
					c5.9,0.3,11.7,0.4,17.6-0.2c3.7-0.4,7.4-0.6,11-1.2c2-0.3,4-0.8,6-0.9c1.7-0.2,3.4-0.1,5.2-0.2c2.4-0.2,4.7,0.5,6.9,1.4
					c1.4,0.6,2.7,1.3,4,2c1.8,1.1,3.6,2.2,5.7,2.9c0.8,0.3,1.7,0.5,2.5-0.1l0,0c0.3-0.6-0.1-1.2,0.2-1.8c0.3-2.8,0.6-5.6,0.9-8.4
					c0.6-5.9,1.2-11.8,1.9-17.7c0.6-5.4,1.3-10.9,2.1-16.3C744.1,277.8,744.4,277.8,742.1,277.8z"/>
                                        <path class="st36" d="M631.1,305.3c0,0.3,0,0.5,0,0.8c0.4-3.1,0.9-6.1,1.5-9.1c-0.3,1.2-0.6,2.4-1.1,3.5c0,1.4-0.2,2.8-0.5,4.1
					C631,304.9,631,305.1,631.1,305.3z"/>
                                        <path class="st36"
                                              d="M634.3,287.9c-0.3,1.5-0.8,2.9-1.4,4.3c0,1.4,0,2.7-0.3,4C633.2,293.4,633.8,290.6,634.3,287.9z"/>
                                        <path class="st37" d="M749.7,236.6c0.3,0.5,0.2,1,0.2,1.6c0.2,4.3-0.2,8.6-0.7,12.9c-0.6,5.2-1.4,10.3-2.6,15.4
					c-0.7,2.9-1.5,5.8-2.2,8.7c-0.1,0.6-0.4,0.6-0.9,0.6c-6.6-0.4-13.2-0.4-19.8-0.3c-1,0.2-2,0.1-3,0.1c0.1-0.7,0.5-0.7,0.8-0.9
					c3.6-1.7,6.4-4.3,8.4-7.7c0.7-1.2,0.9-2.4,0.9-3.8c0-0.1,0.1-0.3,0.1-0.4c1.6-2.7,3.3-5.4,5.1-8c1.5-2.1,2.8-4.4,4-6.8
					c0.3-0.5,0.5-1,0.5-1.6c1.4-2.9,1.9-6.3,4-8.9c0.7-0.8,1.4-1.6,2.4-2.1c1.2-0.7,1.6-0.5,2.2,0.8
					C749.4,236.5,749.3,236.8,749.7,236.6z"/>
                                        <path class="st38" d="M718.8,277.5c0,0-0.1,0-0.1,0c-0.6,0.1-1.5-0.1-1.7,0.2c-0.5,0.8-1.3,1.5-1.4,2.5
					c-0.1,0.5-0.3,0.9-0.7,1.2c-1.5,1.6-3.4,2.8-5.1,4.4c-0.4,0.4-0.7,0.3-1.1-0.1c-2.7-2.5-6-4-9.4-5.3c-1.5-0.6-3.1-1.2-4.6-1.8
					c-0.7-0.3-1.4-0.3-2.1-0.1c-0.8,0.3-1.5,0.6-2.3,1c-2.7,1.4-5.5,2.4-8.4,3.3c-3.1,0.9-6.1,1.9-9.1,2.9c-0.4,0.1-0.7,0.2-1.1,0.3
					c-1.7,0.4-3.2,1.1-4.2,2.6c-0.4,0.5-0.8,0.9-1.3,1.4c-0.4,0.4-0.7,0.3-0.9-0.1c-0.5-0.9-1-1.8-1.3-2.8c-1-2.9-1.4-5.8-1.7-8.8
					c-0.1-1.2-0.4-2.3-0.3-3.5c2.7,0.2,5.1-0.7,7.5-1.9c1.2-0.6,2.3-0.7,3.7-0.3c3.1,1,6.3,1.5,9.4,2.2c0.3,0.1,0.7,0,1,0.3
					c-0.1,0.2-0.3,0.2-0.5,0.2c0.1,0.1,0.3,0,0.3,0.1c1.6,1.5,3.8,1.3,5.7,1.6c0.7,0.1,1.6,0.3,2-0.7c3.5,0.2,7.1,0.5,10.6,0.7
					c1.4,0.1,2.8,0.2,4.2,0.2c0.9,0,1.7,0.2,2.4,0.9c0.3,0.3,0.7,0.6,1,0.8c1.1,0.7,1.9,0.7,2.3-0.5c0.5-1.4,1.3-1.5,2.6-1.3
					C715.7,277.3,717.3,277,718.8,277.5z"/>
                                        <path class="st39" d="M643.1,276c-0.9,0.5-1.7,0.3-2.4-0.3c0.7-3.1,2-6.1,3-9.1c3.4-9.5,8.8-17.8,15-25.6
					c0.4-0.5,0.8-1.1,1.2-1.6c0.2-0.3,0.5-0.5,1-0.4c1.5,0.1,1.6,0.1,1.9,1.7c0.1,0.5,0,1.1,0.3,1.4c0.9,1,0.5,1.9,0.2,2.9
					c-1,3.5-2,7-2.5,10.6c-0.6,4.1-0.7,8.2-0.9,12.3c0,0.6,0,1.1,0,1.7c-1.2,0.1-2.3-0.1-3.3-0.3c-0.4-0.1-0.9-0.2-1.2-0.6
					c-1.9-2.1-5.9-1.9-8.5-0.2c-2.2,1.5-3.3,3.7-3.7,6.3C643.2,275.3,643.1,275.6,643.1,276z"/>
                                        <path class="st40" d="M683,261.4c-0.2-0.5,0.3-0.8,0.6-1.1c0.7-0.6,1.1-1.7,1.9-1.9c0.7-0.2,1.6,0.4,2.5,0.6
					c0.8,0.2,1.5,0.3,2.3,0.4c0.7,0,1.1,0.3,1.3,0.9c1.5,3.8,4,6.8,6.7,9.8c1.6,1.8,3.3,3.2,5.2,4.7c0.3,0.2,0.7,0.3,0.7,0.7
					c-10.5,0-20.6-2.6-30.9-4.1c-0.1-0.5,0.3-0.7,0.5-0.8c2.5-1.9,4.6-4.3,6.6-6.7c0.5-0.6,1.1-1.2,1.6-1.9c0.2-0.2,0.4-0.3,0.6-0.2
					c1.6,0.4,3.1,1.4,4.8,1.7c1.5,0.2,3,0.5,4.5,0.6c-2.7-0.2-5.4-0.8-7.9-1.9C683.6,262,683.2,261.8,683,261.4z"/>
                                        <path class="st41"
                                              d="M711.4,268.5c0.2-0.9,0.4-1.7,0.6-2.6c0.1-0.8,0.3-1.6,0.4-2.4C712.1,265.2,711.6,266.8,711.4,268.5z"/>
                                        <path class="st41"
                                              d="M712.5,263.1c0.3-1.8,0.5-3.5,0.7-5.3c0,0,0,0,0,0C712.7,259.5,712.7,261.3,712.5,263.1z"/>
                                        <path class="st42" d="M714.4,317.7c4.2-1,8.4-1,12.4,1c2,1,4,2.1,6,3.2c1.8,1,3.6,2.2,5.8,2c0,2.7-0.5,5.3-0.7,8
					c-0.1,2-0.3,4-0.5,5.9c-0.4,0.2-0.7-0.2-0.9-0.3c-3.1-2.1-5.5-5-7.8-8c-2.1-2.8-4.5-5.3-6.7-8C720,319,717.5,317.7,714.4,317.7z
					"/>
                                        <path class="st43" d="M736,239c1.1-1.9,2.5-3.6,3.5-5.7c1.2-2.7,2.1-5.5,2.6-8.4c0.1-0.3,0.1-0.7,0.2-1c0-0.1,0.1-0.3,0.3-0.3
					c1.4,5.7,0.7,11.1-1.6,16.4c-1.5,3.4-3.4,6.5-5.7,9.4c-3.3,4.3-7.1,8.2-11,12c-0.7-0.1-0.4-0.7-0.4-1c0.1-1.1-0.3-1.8-1.4-2.1
					c-0.5-0.1-1.1-0.2-0.8-1c0.5-0.5,1-1,1.5-1.4C728.2,250.8,732.2,245,736,239z"/>
                                        <path class="st44" d="M731.3,262.9c0.3,3.1-1.4,5.3-3.2,7.5c-1.4,1.6-3.1,2.9-4.9,4c-0.6,0.4-1.2,0.7-2.1,0.9
					c0.9,0.3,1.8,0,2.7,0.2c-0.6,0.3-1.2,0.2-1.9,0.2c-2.9-0.2-5.9-0.4-8.9-0.5c0.3-1.7,0.9-3.3,1.3-4.9c0.2-0.6,0.8-0.7,1.2-1
					c2.5-1.4,4.9-3,7.2-4.7c1.8-1.3,3.3-3,5-4.4c1,0.4,1.4,1.2,1.6,2.1c-0.2,0.8-0.8,1.2-1.3,1.6c-3.4,3.1-6.7,6.4-10.5,9.1
					c3.9-2.7,7.3-6.1,10.8-9.3c0.4-0.4,0.7-0.8,1.2-1C730.1,262.6,730.7,262.6,731.3,262.9z"/>
                                        <path class="st45" d="M699.5,266.9c-0.8-0.9-1.6-1.7-2.5-2.6c1.5,1.9,3.1,3.7,4.9,5.4c0.2,0.2,0.3,0.4,0.5,0.5
					C701.4,269.2,700.4,268.1,699.5,266.9z"/>
                                        <path class="st46" d="M749.7,236.6c0,0.3-0.1,0.7-0.1,1c-0.5,0-0.5-0.3-0.5-0.6c0-0.4-0.1-0.9-0.3-1.2c-0.2-0.4-0.4-0.6-0.9-0.3
					c-1.8,0.9-3.1,2.3-3.9,4.1c-0.2,0.5-0.4,1.1-0.8,1.5c-0.2,0.2-0.4,0.5-0.4,0.8c0,1.8-1.2,3.1-1.8,4.7c-0.9,2.5-2.3,4.7-3.8,6.8
					c-0.4,0.4-0.8,0.8-1,1.2c-0.8,1.3-1.7,2.6-2.8,3.6c-1.2,0.4-2.1,1.2-3.2,1.7c-0.9,0.4-1,0.4-1.5-0.5c1.8-2,3.6-4.1,5.5-6.1
					c4.4-4.7,7.7-10,9.5-16.3c0.1-0.2,0.1-0.4,0.2-0.5c0.2-0.3,0.1-0.7,0.2-1c0.2-2.1,0.5-4.2,0.4-6.4c-0.1-2.3-0.5-4.6-1.3-6.8
					c-0.2-0.6-0.3-1.2-0.3-1.8c0.1-1.3,0-2.7,0-4.4c0.7,0.7,1,1.3,1.3,1.9c2.5,4.7,3.9,9.7,4.9,14.9c0.1,0.7,0.4,1.4,0.3,2.1
					c0.3,0.4,0,0.9,0.3,1.2C749.8,236.2,749.8,236.4,749.7,236.6z"/>
                                        <path class="st47" d="M721.6,257.3c0,0.4,0.2,0.6,0.6,0.7c2,0.5,2.3,0.9,1.9,3.1c0,0.1,0.1,0.3,0.1,0.4
					c-1.6,1.9-3.7,3.3-5.7,4.6c-1.2,0.8-2.4,1.5-3.7,2.3c0.3-1.9,0.7-3.6,0.8-5.4c0.1-1.4,0.8-2.2,1.9-2.8
					C719,259.4,720.4,258.4,721.6,257.3z"/>
                                        <path class="st48" d="M723.6,247.9c-0.3,0.5-0.6,1-0.9,1.5c2.3-1.8,4.1-4,5.9-6.4c0,0,0-0.1,0.1-0.1c-0.7,0.7-1.4,1.4-2.2,2
					C725.5,246,724.6,247,723.6,247.9z"/>
                                        <path class="st49" d="M647.3,278.1c-1-0.3-1.4-1.1-1.6-2c-0.9-3.5,2.6-7.2,6.1-6.4c1,0.2,2,0.7,2.4,1.9c0.1,0.6,0.2,1.2-0.1,1.8
					c-0.9,0.8-1.9,1.3-3.1,1.5c-0.2,0-0.4,0-0.6,0c-0.2,0,0,0-0.1,0c-0.8-0.2-1.7-0.8-2.4,0.3c-0.7,1,0,1.8,0.6,2.5
					C648.2,278.2,647.8,278.3,647.3,278.1z"/>
                                        <path class="st50" d="M736,239c-0.3,1.3-1.1,2.2-1.8,3.3c-2.7,4.6-6,8.9-9.9,12.6c-0.4,0.4-0.7,0.8-1.2,1c0-0.4,0.3-0.6,0.5-0.9
					c4.3-4.8,8-10.1,11.8-15.4C735.5,239.4,735.6,239.1,736,239z"/>
                                        <path class="st51" d="M650.2,274.6c0.2,0,0.5,0,0.7,0c1.3,0.4,2.1-0.4,2.8-1.3c0.4-0.5,0.3-1.2,0.4-1.7c0.6,0.9,0.5,1.8,0.2,2.8
					c-0.7,2.5-3,4.2-5.4,4.2c-0.6,0-1.2-0.1-1.6-0.5c0.4-0.1,0.8-0.1,1-0.6C649.5,276.9,650,275.8,650.2,274.6z"/>
                                        <path class="st37" d="M728.7,259.3c0.3,0.4,0.6,0.7,1,0.4c0.7-0.5,1.6-0.7,2.2-1.3c0.4-0.4,0.9-0.4,1.4-0.4c0.3,0.7,0,1.4-0.3,2
					c-0.6,1-1.2,1.9-1.7,3c0,0,0,0,0,0c-0.6,0.4-1.2,0-1.8,0c-0.1-0.1-0.1-0.2-0.1-0.2c0-0.1,0-0.1,0-0.1c0,0,0-0.1,0-0.1
					c0-0.1,0.2-0.2,0.2-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0-0.1,0-0.2,0c-0.5-0.7-1-1.4-1.5-2.1C728,259.9,728.3,259.5,728.7,259.3
					z"/>
                                        <path class="st52" d="M691.1,276.3c0.1,0.2,0.4,0.3,0.6,0.4c-1,0.9-2.2,0.9-3.4,0.6c-0.9-0.2-1.9-0.1-2.9-0.3
					c-0.6-0.2-1.2-0.3-1.5-0.9c-0.3-0.5-0.8-0.5-1.2-0.8c0.3-0.2,0.7,0,1-0.2c1.9,0.3,3.9,0.6,5.8,0.9c0.4,0.3,0.9,0,1.2,0.2
					C690.8,276.3,690.9,276.3,691.1,276.3z"/>
                                        <path class="st53" d="M683,261.4c1.5,0.6,3,1.3,4.7,1.6c1.6,0.3,3.1,0.7,4.7,1.1c-3.4,0-6.8-0.1-9.7-2.4
					C682.7,261.7,682.8,261.5,683,261.4z"/>
                                        <path class="st42"
                                              d="M738.6,323.8c-0.1-0.6-0.1-1.2,0.2-1.8C738.9,322.7,738.9,323.3,738.6,323.8z"/>
                                        <path class="st37"
                                              d="M749.7,236.1c-0.4-0.3-0.3-0.8-0.3-1.2C749.7,235.2,749.7,235.6,749.7,236.1z"/>
                                        <path class="st38"
                                              d="M690.6,276.3c-0.4,0.1-0.9,0.2-1.2-0.2C689.8,276,690.2,276,690.6,276.3z"/>
                                        <path class="st37"
                                              d="M744.1,235.4c0.1,0.4,0.1,0.7-0.2,1C743.8,236,743.9,235.7,744.1,235.4z"/>
                                        <path class="st54" d="M727.8,295c-2.3-0.3-4.3-1.3-5.4-3.5c-2-4-0.9-9.3,4.5-10.9c0.7-0.2,1.4-0.3,2.1-0.4
					c3.8-0.4,6.9,1.8,7.7,5.1c0.3,0.4,0,0.8,0.2,1.2c0,0.2,0,0.3,0,0.5C737.3,292.3,733.3,295.7,727.8,295z"/>
                                        <path class="st55" d="M727.8,295c1.8,0,3.4-0.3,5-1.1c2.4-1.2,3.7-3.2,4.1-5.8c0.1-0.3,0-0.7,0.2-1c1.1,3.8-0.9,8.3-5.8,8.5
					C730.1,295.6,728.9,295.5,727.8,295z"/>
                                        <path class="st55"
                                              d="M737.1,286.6c-0.2-0.4-0.3-0.8-0.2-1.2C737.3,285.7,737.2,286.1,737.1,286.6z"/>
                                        <path class="st44" d="M731.3,262.9c-0.1-0.5,0.2-0.8,0.4-1.2c0.8-1.2,1.4-2.4,1.6-3.8c0.9-1.2,1.8-2.3,2.6-3.5
					c0.1-0.1,0.2-0.1,0.3-0.1c0.2,0.2,0.1,0.5,0.3,0.6c-1.6,2.5-3.4,4.9-4.8,7.5C731.7,262.7,731.5,262.8,731.3,262.9z"/>
                                        <path class="st56" d="M736.5,255c-0.2-0.1-0.2-0.3-0.3-0.5c0-0.5,0.3-0.8,0.6-1.2c1.5-2.2,2.7-4.5,4.1-6.8
					c0.5,0.3,0.2,0.6,0,0.8C739.6,250,738.3,252.6,736.5,255z"/>
                                        <path class="st57" d="M729.6,262.6c0,0.1-0.1,0.2-0.1,0.3c-2.8,2.6-5.6,5.2-8.5,7.7c-0.9,0.8-1.8,1.5-2.8,2.1
					c-0.4,0.2-0.8,0.6-1.6,0.6c0.5-0.4,0.9-0.7,1.2-0.9c4.1-3.1,7.8-6.5,11.4-10.1c0,0,0,0,0,0C729.5,262.2,729.7,262.3,729.6,262.6
					z"/>
                                        <path class="st37"
                                              d="M736.9,253.3c0,0.5-0.3,0.8-0.6,1.2c-0.1,0-0.2,0-0.3,0C736,253.8,736.4,253.5,736.9,253.3z"/>
                                        <path class="st58" d="M650.2,274.6c0,0,0,0.1,0,0.1c0.4,1.9,0,2.3-2,2.7c-1-0.2-1.3-0.8-1.2-1.8c0.2-1,1-1.7,2-1.5
					C649.5,274.2,649.9,274.4,650.2,274.6z"/>
                                        <path class="st59" d="M653.8,273.3c0.1,0.1,0.2,0.2,0.1,0.3c-0.6,0.8-1.5,1.3-2.5,1.5c-0.4,0.1-0.5-0.2-0.5-0.5
					C652,274.4,652.9,274,653.8,273.3z"/>
                                        <path class="st44"
                                              d="M729.6,262.6c-0.1-0.2-0.2-0.3-0.4-0.3c0.4-0.4,0.7-0.9,1.4-1.1C730.4,261.8,729.9,262.2,729.6,262.6z"/>
                                        <path class="st60" d="M725.6,290.9c-1.5-1.3-1.7-3-1.2-4.7c1-3.5,5.7-4.2,7.9-2.5c1.7,1.3,1.9,3,1.3,5c-0.5,0.1-0.6-0.4-0.8-0.6
					c-0.9-0.3-1.7,0.7-2.7,0.2c-0.5-0.2-0.8-0.7-1.1-1.1c-0.2-0.1-0.4-0.7-0.6,0c-0.1,0.2-0.3,0.3-0.4,0.3c-1.8,0.4-1.9,0.5-1.7,2.6
					C726.2,290.4,726.1,290.9,725.6,290.9z"/>
                                        <path class="st61" d="M728,287.1c0.1-0.1,0.2-0.2,0.4-0.3c0.3-0.5,0.6,0,0.9-0.1c0.3,0.4,0.6,0.8,0.8,1.2
					c0.5,0.4,0.9,0.2,1.5,0.1c0.5-0.1,0.9-0.6,1.4-0.4c0.2,0.3,0.3,0.6,0.5,0.8c-0.5,2.2-2.2,3.6-4.4,3.6c-1.4,0-2.7-0.2-3.7-1.3
					c0.2-0.3,0.4-0.6,0.6-0.9c0.4-0.1,0.7,0.2,1.1,0.2c0.7,0.1,1.3,0,1.6-0.6c0.4-0.6,0.1-1.1-0.3-1.6
					C728.3,287.7,728,287.5,728,287.1z"/>
                                        <path class="st62" d="M728,287.1c0.3,0.2,0.6,0.4,0.8,0.6c0.7,0.6,0.8,1.5,0.4,2.2c-0.4,0.6-1.1,0.9-2,0.7
					c-0.4-0.1-0.7-0.5-1.1-0.7C725.4,288,726,287.2,728,287.1z"/>
                                        <path class="st63" d="M733.1,287.7c-0.7,0.5-1.6,0.9-2.5,0.9c-0.6,0-0.4-0.3-0.4-0.6c1,0,1.8-0.6,2.7-0.8
					C733.5,287,733.1,287.5,733.1,287.7z"/>
                                        <path class="st64" d="M729.3,286.8c-0.3,0.4-0.6,0-0.9,0.1c-0.3-0.2-0.5-0.5-0.2-0.8c0.3-0.3,0.5,0,0.7,0.2
					C729,286.4,729.2,286.6,729.3,286.8z"/>
                                    </g>
                                    <g>
                                        <path class="st0" d="M766.1,319.3c0.2-1.8,0.5-3.5,1.2-5.2c1.8-4.5,4.1-8.8,6.5-13c1.1-1.7,2.2-3.4,3.3-5.1
					c6.8-11.3,15.7-21.2,28.1-27.6c-0.2-0.2-0.4-0.4-0.6-0.6c-7.7-6.6-16.1-12.3-25.1-17.1c-8.6-4.7-17.1-9.6-25.5-14.6
					c-0.5-0.3-0.8-0.6-1.1-1c-0.9,1.5-2,3-3.3,4.3c0,6.6-0.6,12.5-1.7,19c-1.1,6.8-3.2,13.5-3.3,20.4c0,0.9-0.4,1.6-1,2
					c-0.1,0.7-0.2,1.3-0.2,2c-0.4,4.6-0.1,9.1-1.1,13.7c-0.2,0.8-0.5,1.6-0.9,2.2c-0.2,1.6-0.6,3.2-0.9,4.8c0,0.3,0,0.6,0,0.9
					c0,1.2-0.3,2.2-0.7,3.1c-0.3,2.2-0.6,4.4-1.1,6.6c0,1.4,0,2.9,0,4.3c0,0.7-0.1,1.4-0.3,2c0,0.2,0,0.4,0,0.5
					c-0.2,1.1-0.3,2.2-0.3,3.3c-0.1,1.2,0,2.4-0.1,3.7c0,1.3,0,2.5-0.1,3.8c-0.1,1.2-0.3,2.4-0.3,3.6c0,0.2-0.1,0.4-0.1,0.6
					c0.1,0.1,0.1,0.3,0.1,0.4c0,0.2,0,0.3,0,0.5c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.1,0.2,0,0.3,0,0.5c0.5,0.8,1,1.6,1.4,2.5
					c7.7,0,15.3,0.6,22.9,1.3c0.7-4.3-0.4-9.1,1.3-13.2C763.9,325.1,765,322.2,766.1,319.3z"/>
                                        <path class="st65" d="M700.9,366.9C700.9,366.9,700.9,367,700.9,366.9C700.9,367,700.9,367,700.9,366.9
					C701,366.9,700.9,367,700.9,366.9z"/>
                                        <path class="st65" d="M755.2,369.6"/>
                                        <path class="st35"
                                              d="M743.3,282.8c0.1-0.7,0.2-1.5,0.3-2.2c0.1-0.7,0.2-1.1,0.2-1.4C743.6,280.4,743.4,281.6,743.3,282.8z"/>
                                        <path class="st66" d="M775.1,298.5c-0.5,0.8-1.2,1.4-1.4,2.3c-0.3,0.7-0.5,1.4-0.8,2c-0.9,2-1.8,4-2.5,6.1
					c3-6.6,6.5-13.1,10.7-19.1C779,292.6,777,295.5,775.1,298.5z"/>
                                        <path class="st66" d="M800.5,270.8c-1.2,0.5-2.2,1.3-3.3,2.2c-1,0.8-2,1.7-2.9,2.6c2.3-1.9,4.7-3.6,7.2-5.1
					C801.2,270.5,800.9,270.6,800.5,270.8z"/>
                                        <path class="st35" d="M755.6,312.7c0-0.4,0.1-0.8,0.1-1.2c0.2-2.4,0.5-4.7,1.5-6.9c1.7-3.8,3.7-7.4,6.2-10.7
					c1.7-2.2,3.4-4.3,5.3-6.3c0.7-0.2,0.9-0.9,1.3-1.2c-0.3,0.4-0.8,0.8-1,1.5c-1.4,1.8-2.5,3.7-3.6,5.7c-1.6,3.4-3.1,6.8-4.4,10.3
					c-0.4,1-0.8,1.9-0.8,2.9c0.7,2.7,2.1,5.1,2.9,7.7c0.1,0.4,0.4,0.8,0.9,0.2c0.3-1.2,0.8-2.4,1.3-3.5c1.8-4,4-7.9,6.2-11.7
					c0.3-0.5,0.5-1,0.8-1.5c4.6-7.7,9.9-15,16.7-21c1.5-1.4,3-2.9,5.1-3.6c2.2-1.5,4.3-3.1,7-3.9c-0.3-0.3-0.5-0.5-0.8-0.7
					c-5.8-4.5-11.8-8.8-18.2-12.6c-8.3-4.9-16.9-9.4-25.1-14.3c-1.3-0.8-2.6-1.4-3.9-2.1c-0.1,0.2-0.1,0.3-0.2,0.3
					c-0.1,4.6-0.6,9.2-1.2,13.8c-0.6,4.2-1.1,8.5-2.2,12.6c-1.5,5.7-2.8,11.5-3.4,17.4c-0.7,6.5-1.6,12.9-2.4,19.3
					c-0.7,5.4-1.2,10.9-1.5,16.4c-0.3,2.6,0,5.2,0.7,7.7c0.2,0.9,0.8,1.6,1.8,1.4c3.3-0.7,6.5-1.7,7.8-5.2
					C753.8,320.1,755,316.5,755.6,312.7z"/>
                                        <path class="st67" d="M754.5,337.2c0-0.2,0-0.5,0-0.7c0.2-5.7,0.4-11.4,0.7-17.2c0.1-2.2,0.4-4.3,0.3-6.5
					c-0.5,1.5-0.9,3-1.4,4.5c-0.6,1.9-1.1,3.8-1.8,5.7c-1.3,3.7-4.5,4.7-7.9,5.5c-0.5,0.1-0.9-0.1-1.1-0.7c-0.3-0.9-0.6-1.8-0.6-2.8
					c0-0.4,0.1-0.9-0.1-1.3c-0.5-0.7-0.4-1.6-0.4-2.4c0-0.5,0.1-1.1,0-1.6c-0.1,0.4-0.2,0.8-0.2,1.1c-0.3,3.3-0.6,6.6-0.9,9.9
					c-0.2,2.2-0.4,4.4-0.5,6.5c0,0.4-0.2,1,0.5,1c2.1,0,4.2,0.2,6.2,0.1c2-0.1,4.1-0.1,6.1-0.1C754.4,338.2,754.4,338.3,754.5,337.2
					z"/>
                                        <path class="st68" d="M763.1,321c0.1-1.3,0.1-2.6,0.4-3.9c0.3-1-0.3-1.9-0.6-2.8c-0.8-2.5-2.1-4.9-2.6-7.5c0.1-0.8-0.5-1-1-1.2
					c-0.4,0.5-0.5,1.2-0.5,1.8c-0.2,3.6-0.6,7.3-0.7,10.9c-0.1,3.2-0.3,6.3-0.4,9.5c-0.1,3.3-0.2,6.6-0.3,9.9c0,0.6,0,1.1,0.8,1.2
					c1.2,0.1,5.2,0.8,6.4,1.2c0.3-3.8-3-8.3-1.7-11.8C762.8,325.9,762.9,323.4,763.1,321z"/>
                                        <path class="st69" d="M755.1,341.9c1.2,0.5,2.4,1,3.6,1.5c0.7,0.3,1.4,0.6,2.1,0.9c0-0.1,0.1-0.2,0.1-0.4
					c0.2-0.4,0.3-0.8,0.4-1.3c-0.1,0-0.3-0.1-0.4-0.1C759,342,757.1,341.7,755.1,341.9z"/>
                                        <path class="st70"
                                              d="M768.9,321.7c0-0.1,0-0.2,0-0.3C768.9,321.5,768.9,321.6,768.9,321.7z"/>
                                        <path class="st71" d="M772,299.2c2.3-3.7,4.9-7.1,7.7-10.4c2.9-3.4,5.8-6.9,8.9-10.2c1.8-1.8,3.6-3.5,5.5-5.2
					c-0.5-0.4-0.9-0.1-1.3,0.2c-1.4,0.9-2.7,2-4,3.2c-6.5,5.7-11.5,12.6-16,19.9c-0.5,0.9-1.1,1.8-1.2,2.9
					C771.7,299.5,771.9,299.3,772,299.2z"/>
                                        <path class="st72" d="M759.9,306.4c0.3,0.1,0.4,0.3,0.4,0.5c0,0.1,0.1,0.2,0.2,0.1c0-0.7,0.3-1.3,0.5-1.9
					c1.1-2.8,2.2-5.6,3.4-8.3c0.4-1,1.1-1.8,1-3c-0.4,0.3-0.6,0.8-0.9,1.3c-1.3,2.4-2.7,4.8-3.8,7.4c-0.5,1.1-1.1,2.2-1.4,3.3
					C759.4,306,759.5,306.3,759.9,306.4z"/>
                                        <path class="st73" d="M763.1,315.8c0.2,0.4,0.4,0.9,0.4,1.4c0.4-0.7,0.3-1.6,0.5-2.4c-0.2,0.1-0.4,0.4-0.5-0.1
					c-0.2-0.9-0.6-1.7-0.9-2.6c-0.7-1.7-1.4-3.5-2.1-5.2c-0.1,0-0.2,0-0.2-0.1c-0.2,0.6,0,1.1,0.2,1.7
					C761.3,311,762.1,313.4,763.1,315.8z"/>
                                        <path class="st74"
                                              d="M770.9,285.3c-0.8,0.8-1.6,1.5-2.2,2.3c0.1,0.1,0.2,0.2,0.4,0.4C770.4,286.7,770.7,286.2,770.9,285.3z"/>
                                    </g>
                                </g>
                                <g>
                                    <path class="st0" d="M657.2,236.5c-0.5-0.3-0.9-0.6-1.4-1c-1.2-0.4-2.3-0.9-3.4-1.6c-0.7,0.1-1.5,0.2-2.3,0.2c-0.1,0-0.2,0-0.2,0
				c-0.1,0.4-0.5,0.4-0.9,0.5c-9.9,2.7-19.6,5.9-29.3,9.3c-7.9,2.9-15.4,6.3-21.6,12.3c-1.1,1.1-2.4,2-3.8,3
				c-3.5,4.7-7.7,31.7-8.4,47.8c0.9,0.2,1.8,0.4,2.7,0.6c10.4,2.1,20.6,4.7,30.9,7.4c5.1,1.4,10.3,2.7,15.4,4.1
				c-1-4.3-1.6-8.7-1.6-12.8c0-6.9,1.4-13.8,4-20.2c0.4-8.8,3.6-18.1,8.5-26c3-7.5,7.4-14.4,12.6-19.6c0.1-0.1,0.2-0.1,0.2-0.2
				C658,239.1,657.5,237.8,657.2,236.5z"/>
                                    <path class="st36" d="M652.4,237.6c-12.4,3.4-24.7,7.3-36.7,12.2c-3.8,1.5-7.6,3.2-10.8,5.9c-3.4,2.8-6.7,5.7-10.2,8.5
				c-1.1,0.9-1.6,2-1.8,3.3c-0.4,2.8-0.8,5.6-1.2,8.4c-0.3,2.1-0.8,4.2-0.8,6.3c0.9,1.7,2.5,2.8,3.8,4.1c2.2,2.3,2.2,2.3,5,0.5
				c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.9-0.3-1.7-0.2-2.6c0.5,0.5,0.4,1.2,0.8,1.7c0.8,0.7,1.9,0.9,2.8,0.6c0.8-0.2,0.4-1.3,0.5-2
				c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6,0-2.3c0.2-2.6,0.2-5.2,1.2-7.6c0.5-1.3,1.2-2.5,2.7-2.9c0.8,0.7,0.4,1.7,0.5,2.5
				c-0.2,2.3-0.3,4.6,0.1,6.9c0.5,2.9,0.7,3,3.5,2c0.7-0.2,1.3-0.7,1.9-1.1c2.2-1.6,4.3-3.2,6.8-4.3c0.5-0.2,0.9-0.5,1.5-0.3
				c0.3,0.3,0.3,0.7,0.1,1.1c-1.2,2.8-1.8,5.7-2.7,8.6c-0.2,0.3-0.1,0.8-0.2,1.1c-1.5,4.9-1.4,10-0.8,15c0.5,4.7,3.8,8,8.4,8.8
				c0.2,0,0.5,0,0.7-0.2c0.3-0.8,0.3-1.7,0.4-2.6c1.1-8.2,2.6-16.3,4.3-24.4c2.1-10.1,5.7-19.7,10.2-29c2.9-6,6.8-11.4,10.9-16.6
				c0.3-0.4,0.8-0.7,0.8-1.3C653.5,237.1,653,237.4,652.4,237.6z"/>
                                    <path class="st75" d="M612.2,282.1c1.7-1.2,3.4-2.4,5.1-3.6c1-0.7,2.1-1.3,3.2-1.7c0.5-0.2,1.1-0.6,1.6,0c-1.1,0-1.5,0.8-1.8,1.6
				c-1.3,2.8-2.5,5.7-3.8,8.5c-1.1,2.4-1.6,5-2.6,7.4c-0.4,0.2-0.1,0.6-0.3,0.9l0,0c-0.5,1.8-1.5,3.5-2.3,5.2
				c-0.2,0.4-0.4,0.8-0.9,0.9c-1.1,1.7-2.2,3.5-3.3,5.2c-0.6,1-1.5,1.4-2.7,1.3c-0.5-0.1-0.8-0.2-0.7-0.7c0.2-0.9,0.1-1.9,0.5-2.8
				c0,0,0.1,0.1,0.1,0.1c0,0.1,0,0.2,0.1,0.2c0.9-1.1,1.6-2.2,1.8-3.7c0.5-4.9,1.7-9.7,3-14.4C609.7,284.7,610.4,283,612.2,282.1z"
                                    />
                                    <path class="st76" d="M602,293.7c-0.7-2.4-1.4-4.8-2-7.2c-0.4,0-0.7,0.1-1.1,0.3c-0.5,0.3-1.1,0.6-1.6,0.9
				c-0.5,0.3-0.7,0.2-1.1-0.3c-1.6-2-3.4-3.6-5.2-5.3c-0.3,1.8-0.6,3.7-0.9,5.5c-0.4,1,0,1.9,0.8,2.6c1.1,1,1.9,2.1,2.8,3.3
				c0.3,0.7,1.2,1,0.9,2c1.7,3,3,6.2,3.2,9.7c0.1,1,0.4,1.3,1.3,1.4c0.3,0,0.6,0.1,0.8,0.2c0.7,0.2,0.9,0.1,1-0.7
				c0.4-2.3,0.8-4.7,1.3-7C602.5,297.3,602.6,295.5,602,293.7z"/>
                                    <path class="st8" d="M619.4,286.4c0.2,1-0.2,1.9-0.4,2.9c-0.6,3.7-0.6,7.4-0.5,11.1c0.1,1.9,0.4,3.7,1.2,5.5
				c0.8,1.7,2,2.9,3.6,3.6c1.4,0.6,2.8,1.1,4.2,1.7c0.1,0.7-0.1,1.4-0.3,2.1c-0.4,0.3-0.8,0-1.1-0.1c-3.7-0.9-7.5-1.8-11.2-2.7
				c-1.3-0.3-1.4-0.4-1.2-1.7c1-5.8,1.9-11.6,3.8-17.2C618.3,290,618.7,288.2,619.4,286.4z"/>
                                    <path class="st77" d="M589.7,292.1c-0.1,0.4-0.2,0.7-0.2,1c-0.2,3.4-0.5,6.9-0.6,10.3c-0.1,1.1,0,1.1,1.1,1.3
				c2.3,0.4,4.6,0.8,7,1.2C596.1,300.8,592.5,293.9,589.7,292.1z"/>
                                    <path class="st78" d="M612.2,282.1c-2.1,2-2.8,4.7-3.4,7.4c-0.5,1.9-0.8,3.9-1.3,5.8c-0.5,2.2-0.7,4.5-1.1,6.7
				c-0.1,0.8-0.4,1.4-1,1.9c-0.4,0.4-0.8,0.7-1,1.5c-0.1-0.5-0.1-0.8-0.2-1.1c0,0,0,0,0,0c0.4-0.4,0-1,0.3-1.5
				c0.4-2.9,0.9-5.8,1.5-8.7c0.9-4.3,1.3-8.6,1.7-12.9c0.2-2,0.3-4.1,0.4-6.1c0-0.5,0-1,0.2-1.4c0.2,0.6,0.1,1.2,0.1,1.9
				c-0.2,2.3,0.4,4.5,0.9,6.7c0.2,0.9,0.3,0.9,1.2,0.5C611,282.3,611.5,282,612.2,282.1z"/>
                                    <path class="st79" d="M603.4,283.8c0-2.6,0.1-5.2,0.6-7.8c0.3-1.4,0.8-2.8,1.6-4c0.4-0.5,0.9-0.9,1.4-1.2
				c0.3-0.1,0.6-0.2,0.7,0.2c-0.6,0.3-0.5,0.9-0.6,1.4c-1,5.6-2,11.2-2.9,16.8c0,0.2-0.1,0.4-0.2,0.5c-0.8-1-0.9-2.1-0.6-3.2
				C603.6,285.6,603.7,284.7,603.4,283.8z"/>
                                    <path class="st80" d="M610.4,301.3c0.8-1.6,1.6-3.3,2.5-4.9c0.2-0.4,0.3-0.9,0.8-1.2c0,0.5,0,1-0.1,1.4c-0.7,2.8-1.4,5.5-2.2,8.3
				c-0.5-0.3-0.4,0.2-0.5,0.4c-0.8,1.2-1.3,2.6-2.8,3.1c-0.7-0.7-0.1-1.4,0.2-2c0.7-1.4,1.5-2.8,2.2-4.2
				C610.5,301.9,611,301.6,610.4,301.3z"/>
                                    <path class="st81" d="M603.4,283.8c0.2,0.2,0.2,0.4,0.2,0.7c0,1.8,0.1,3.5,0.4,5.3c-0.3,1.6-0.6,3.2-0.9,4.8
				c-0.9-2.7-1.8-5.3-2.5-7.9c-0.1-0.3-0.2-0.6-0.2-1c0.9,0.1,1.8-0.1,2.7,0.6C603.6,285.3,603.3,284.5,603.4,283.8z"/>
                                    <path class="st82" d="M608.1,308.4c1-1.1,2-2.3,2.7-3.6c0.3-0.6,0.5-0.2,0.6,0.2c-0.3,1.2-0.6,2.4-0.8,3.6
				c-0.1,0.6-0.4,0.7-0.9,0.5C609.1,308.8,608.5,308.8,608.1,308.4z"/>
                                    <path class="st83" d="M593.8,293.4c-1.2-0.8-1.9-2.1-2.9-3.2c-0.8-0.9-1-0.7-1.2,0.3c0.1,0.2,0.1,0.4,0.2,0.5
				c1.8,1.1,3.2,2.8,4.5,4.4c0.2-0.3,0.6-0.5,0.3-0.9C594.4,294.2,594.2,293.7,593.8,293.4z"/>
                                    <path class="st84" d="M591,289.8c-0.8-0.6-1-1.3-0.9-2.2c-0.6,0.9-0.2,1.9-0.3,2.9c0.1-0.2,0.3-0.5,0.4-0.8c1,1.2,1.8,2.5,3,3.5
				c0.2,0.2,0.3,0.5,0.7,0.2C593,292.1,592.1,290.8,591,289.8z"/>
                                    <path class="st75"
                                          d="M604.6,302.7c0.1,0.5,0.2,1.1-0.3,1.5C604.2,303.7,604.3,303.2,604.6,302.7z"/>
                                    <path class="st80"
                                          d="M613.6,295.2c0-0.3,0-0.7,0.3-0.9C614,294.7,613.9,295,613.6,295.2z"/>
                                    <path class="st85"
                                          d="M595.7,293.9c0.9,0.8,1.6,1.7,1.8,2.9C596.6,296,596.2,294.9,595.7,293.9z"/>
                                    <path class="st86"
                                          d="M615.3,308.4c0.9-2.9,1.4-5.9,2.2-8.9C617.2,302.6,617,305.7,615.3,308.4z"/>
                                </g>
                            </g>
                            <g id="chefsHead">
                                <g id="Chef_Head_00000114063050780688047490000007152750774321368509_">
                                    <path class="st0" d="M756.8,162.6c-0.4-2.4-1.3-4.7-2.6-6.8c-1.1-1.8-2.2-3.6-3.4-5.2c-1-1.3-1-2.4-0.4-4c1.8-4.2,1.3-8.3-1.4-12
				c-0.6-0.8-1.2-1.6-2.1-2c-3.6-1.5-7.3-2.3-11.2-2.2c-0.8,0-1,0-1.1-0.5c-0.7,1.4-0.6,2.8,1.8,4.8c-34,6-70-3-102,12
				c0-2.5-1.4-5.1-3.1-7.6c0,0,0,0,0,0c0,0.7-0.2,1-1,1.1c-3.6,0.2-6.6,1.9-8.9,4.6c-2.4,2.7-3.7,5.8-3.6,9.6
				c0.2,4.6,1.9,8.6,4.1,12.4c2.1,3.6,5.3,6.3,8.5,8.9c0.8,1.1,2.3,1.8,2.2,3.5c0,0.4,0.4,0.6,0.7,0.6c0.4,0,0.5-0.3,0.6-0.5
				c0.2-0.8,0.6-1.5,0.6-2.4c0-0.4-0.2-0.7-0.3-1c-0.5-0.9-0.5-2-0.9-3c-0.3-0.9-0.8-1.4-1.8-1.1c-0.7-0.1-1.2-0.5-1.7-0.8
				c-3.9-2.8-6.1-6.7-7.5-11.1c-0.7-2.3-1.4-4.7-1-7.1c0.7-4.6,3.9-7.3,8-9c0.4-0.2,0.8-0.3,1.2,0.1c0.9,0.8,0.8,3.3-0.1,4
				c-1.4,1-2.6,2.3-3.8,3.5c-0.3,0.3-0.7,0.7-0.4,1.1c0.3,0.4,0.8,0.2,1.2,0c1.7-0.8,3.4-1.7,4.9-2.9c0.2-0.2,0.4-0.3,0.7-0.4
				c1.4-0.6,1.4-0.6,1.7,0.8c0.2,0.6,0.1,1.1,0.1,1.7c0,1,0.2,2,0.4,3c0.2,0.5,0.2,1.1,0.3,1.6c0.2,0.8,0.3,1.5,0.6,2.3
				c0.3,0.7,0.1,1.5,0.6,2.1c0.3,0.4,0.7,0.7,1.3,0.4c0.4-0.2,0.4-0.6,0.4-1c-0.2-2.2,0.2-4.5-0.1-6.7c0.1-1.6-0.2-3.1-0.3-4.7
				c-0.1-1,0-1.9,1.2-2.3c6.7-4,14-5.4,21.7-5.4c1.9,0,3.9-0.2,5.8-0.4c4.6-0.5,9.1-1.1,13.7-1.3c4.1-0.2,8.1-0.5,12.2-0.7
				c2.4-0.4,4.9-0.1,7.3-0.2c0.9,0,1.7,0.1,2.5,0.5c2.8-0.7,4.1-0.3,3.9,2.4c0.3,1.4,0.5,2.8,0.8,4.2c0.2,0.4,0.2,0.9,0.2,1.3
				c0.7,3.4,2.4,6.5,3.5,9.8c0.1,0.2,0.3,0.5,0.4,0.8c0.4,0.8,0.7,1.6,1.2,2.4c0.5,0.5,0.7,1.1,0.9,1.7c0.2,0.5,0.6,1,0.8,1.5
				c1.9,3.6,1.9,3.6-1.3,6.2c-0.9,0.7-1.7,1.4-2.6,2c-0.2,0.1-0.4,0.3-0.6,0.4c-0.6,0.3-1,1.1-1.8,0.5c-1.8,0.3-3.5-0.2-5-0.9
				c-1.8-0.9-3.6-1.8-5.5-2.6c-4.4-1.3-8.7-1.4-12.9,0.4c-3.7,1.6-6.3,4.1-6.4,8.5c0,0.7-0.4,1-0.9,1.3c-1.2,0.7-2.3,1.4-3.4,2.2
				c-1.3,2-2.9,2.9-5.1,1.5c-2-0.3-3.9,0-5.9,0.3c-0.6-0.1-0.5-0.5-0.6-0.9c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.3-0.1-0.6-0.2-0.9
				c-0.1-0.3-0.2-0.6-0.6-0.8c-0.4,0.1-0.5,0.5-0.5,0.8c0,0.1,0,0.3,0.1,0.4c0.1,0.3,0.2,0.6,0.2,1c0,0.2,0.1,0.4,0.1,0.6
				c0.2,0.6,0,1.1-0.2,1.6c-0.6,0.4-1-0.1-1.4-0.3c-1.2-0.6-2.5-1.2-3.8-1.4c-5.6-1-11-0.4-16,2.6c-2.4,1.5-4.1,3.5-4.6,5.9
				c0.1-0.6,0.2-1.2,0.4-1.9c-0.1-0.7-0.4-1.1-1.1-1.1c-0.4,0-0.8,0.2-1.1,0.4c0,0.6-0.1,1.1-0.4,1.6c0,0.5,0,0.9,0,1.4
				c0,0.4,0,0.8,0,1.1c0,0.4,0,0.8,0,1.2c0.1,0.5,0.2,1.1,0.1,1.7c0.6,1.1,0.7,2.5,0.4,3.7c0.4,0.7,0.7,1.4,0.7,2.2
				c0.1,0.1,0.2,0.2,0.3,0.4c1.4,1.8,3.1,3.4,5,4.7c1.3,0.9,2,2.2,2.3,3.7c0.8,3.5,1,7.1,1.2,10.7c0.1,2.7,0.4,5.4,1,8.1
				c0.9,3.8,3.2,5.9,6.9,6.5c0.2,0,0.5,0.1,0.7,0.1c1.9,0.4,3.7,1.1,5.2,2.1c9.3,2.7,5,20.7,2.8,31.6c0.3,2.4,1.3,2.6,2,3.3
				c1.4,1.2,2.9,2.2,4.6,3.1c0.9,0.1,1.9,0.1,2.8,0.2c0.3,0,0.5-0.1,0.8-0.1c8-3,12-17,20-13c3,2,6.2,3.5,10.4,9.4
				c2.3,1.1,6.7,4,8.8,5.2c1.1-0.1,2-0.7,2-1.7c0.3-4.6,1.8-8,3.8-12c17.7-14,26.7-31.4,28.7-51.5c-0.1-0.1-0.2-0.2-0.3-0.3
				c-0.8-0.7-1.3-1.5-1.6-2.5c-0.4-1.5-1.2-2.8-2.1-4c-1.2-1.5-2.4-3-3.9-4.2c-0.5-0.4-0.7-0.9-0.6-1.5c0.2-1.5,0.2-2.9,0-4.4
				c-0.1-1,0-1.2,1-1.5c1-0.3,1.9-0.7,2.8-1.2c1.8-1,3.1-2.6,3.3-4.6c0.2-2.3,1-4.2,2.7-5.7c0.3-0.3,0.6-0.7,0.8-1
				c0.9-1.2,1.9-2.3,3.1-3.3c1.2-1,2.2-2.2,3.2-3.4c1.9-2.4,3.1-5.1,4.6-7.8C756.9,165.8,757.1,164.2,756.8,162.6z M660.8,201.7
				c0,0.9-0.7,1.4-1.2,1.9c-3.2,2.8-6.9,4.1-11.1,3.7c-5.4-0.5-11.8-4-13.3-10.9c-0.2-1.1-0.3-2.1-0.4-3.2c0.1,1,0.3,2,0.7,3
				c0.3,0.7,0.5,1.4,0.8,2c1.7,4.7,5.4,7,9.9,8.3c0.4,0,0.7,0.1,1.1,0.2c0.3,0.1,0.6,0.1,0.9,0.1c0.4,0,0.9,0,1.2-0.4
				c0-0.1,0-0.3-0.1-0.4c-0.4-0.2-0.9-0.2-1.3-0.4c-0.1,0-0.3-0.1-0.4-0.1c-0.3-0.1-0.6-0.2-0.9-0.4c-0.8-0.4-1.5-0.8-2.3-1.3
				c-0.9-0.6-1.6-1.2-1.9-2.3c-0.4-1.5-1.1-2.8-2.1-3.9c-0.7-0.8-1.1-1.8-1.1-2.9c-0.1-1.9,0.4-3.6,0.8-5.4c0.2-0.8,0.7-1.5,1.5-1.9
				c1.2-0.6,2.4-1.3,3.6-1.8c4.5-1.9,9-1.9,13.3,0.7c1.4,1,2.7,2,3.2,3.6c0.7,2.4,0.7,5,0.7,7.5c0,1.3-1.1,2.1-1.5,3.3
				C660.7,201.1,660.8,201.4,660.8,201.7z"/>
                                    <path class="st0"
                                          d="M665.8,275.8c0,0,0.1,0,0.1,0c-1.6-0.8-3.1-1.8-4.6-3.1C662.7,274.1,664.1,275.3,665.8,275.8z"/>
                                    <path class="st87" d="M634.3,198.2c-0.2-0.7-0.2-1.4-0.3-2.2c0-0.3-0.1-0.5-0.1-0.8c0-1.1,0.1-2.2,0-3.2c0-0.3-0.2-0.4-0.4-0.5
				c0-0.1-0.1-0.2-0.1-0.3c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0-0.1,0c0-0.1,0-0.2-0.1-0.3c-0.1-0.2-0.1-0.5-0.1-0.8
				c0,0.1-0.1,0.2-0.1,0.3c-0.1,1.6-0.1,3.2,0,4.8c0,0.1,0,0.2,0.1,0.3c0,1.8,0.1,3.6,0.8,5.2c0.1,0.2,0.2,0.5,0.3,0.7
				c0.4,0.5,1.2,0.1,0.9-0.5c0,0,0,0,0,0c0.3-0.1,0.5-0.4,0.3-0.7C634.7,199.5,634.5,198.8,634.3,198.2z"/>
                                    <path class="st87" d="M659.6,181.1c-0.7-3-2.5-5.2-5.2-6.7c-3.4-1.8-6.8-2.4-10.5-1.1c-0.7,0.2-1.4,0.4-2-0.3
				c-0.8-1-1.8-1.9-2.5-3c-0.7-1.1-0.6-1.4,0.7-1.7c0.7-0.2,1.4-0.3,2.2-0.3c2.1,0,4.2-0.2,6.2-0.3c2.5-0.1,4.9-0.3,7.4,0.2
				c0.4,0.1,0.9,0.5,1.2,0.1c0.3-0.4,0-1-0.3-1.3c-0.9-0.9-1.1-1.9-0.8-3c0.1-0.5,0.1-1.1,0-1.6c-0.2-2.5-1.7-3.9-4.2-3.9
				c-3.8-0.1-7.6,0.2-11.3,0.9c-0.2,0-0.4,0.1-0.6,0.1c-0.2,0-0.5,0.2-0.7-0.1c-0.1-0.3-0.1-0.6-0.2-0.9c-0.1-0.5-0.1-1-0.1-1.5
				c-0.4-1,0.2-2.3-0.9-3.1c0,0.6-0.1,1.2,0,1.7c0.1,0.9,0.3,1.9,0,2.8c-0.3,0.8-0.4,1.6,0.1,2.3c0.2,0.2,0.2,0.5-0.1,0.7
				c-0.3,0.2-0.5,0-0.8-0.2c-0.4-0.3-0.5-0.7-0.5-1.2c0-0.4,0.1-0.9-0.3-1.2c-0.3,1.6-1.1,2.9-2.1,4.1c-0.6,0.8-0.9,2-0.6,2.9
				c0.8,2.2-0.2,3.6-1.7,4.9c-0.2,0.4-0.5,0.7-0.6,1.2c0,0.3,0,0.6,0.2,0.8c0.6-0.3,1-0.4,1.3,0.4c0.5,1.1,0.3,2.4,1,3.4
				c0.5-0.4,0.4-1,0.3-1.5c-0.2-1-0.1-1.9,0.3-2.8c1-0.8,1.8-0.9,2.8-0.1c0.6,0.5,1.1,1.1,1.6,1.7c1.3,1.7,1.3,1.7,0,3.3
				c-0.2,0.3-0.4,0.7-0.6,1c-0.3,0.5-0.5,1.1-0.7,1.7c-0.1,0.6-0.5,0.5-0.9,0.3c-0.8-0.5-1.4-1.1-1.8-2c-0.2-0.3-0.2-0.9-0.8-0.8
				c0.1,0.9-0.7,1.6-0.6,2.5c0,0.1-0.1,0.3-0.3,0.2c-0.1,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.1-0.4,0-0.5c0.3-0.7,0-1.2-0.6-1.6
				c-0.3-0.2-0.5-0.5-0.6-0.8c-0.3-0.5-0.7-0.7-1.3-0.8c0,0.1,0,0.2,0,0.3c0.8,1.5,1.6,3,2,4.3c-0.5-0.7-0.7-1.6-1.3-2.5
				c0.1,0.3,0.1,0.6,0.1,0.9c0.5,0.4,0.9,1,1,1.8c0.1,0.4,0.1,0.9,0.2,1.3c0.5,0.6,0.8,1.4,0.8,2.3c0.8,1.3,0.7,3.1-0.3,4.2
				c0,0.2,0,0.4,0,0.6c0.2-0.4,0.7-0.6,1.2-0.6c0.6-0.1,0.6,0.5,0.7,0.9c0.3,0,0.5-0.1,0.6-0.3c1.3-2.2,2.9-4,5.3-5.1
				c0.2-0.1,0.3-0.3,0.3-0.5c0-0.4-0.3-0.6-0.6-0.9c-1.2-1.6-0.5-4,1.1-5.2c1.9-1.4,3.9-2.2,6.3-2.2c1.2,0,2.4,0.5,3.6,0.4
				c0.1,0,0.2-0.2,0.3-0.2c0.3-0.1,0,0.2,0.1,0.2c0.2,0.4,0.6,0.6,1,0.8c2.2,1,3.6,2.7,4.7,4.9c0.1,0.2,0.3,0.5,0.1,0.6
				c-0.3,0.2-0.7-0.1-1-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.3-0.1-0.6-0.2-0.8-0.3c-0.1,0-0.2-0.1-0.3-0.1c-0.4-0.1-0.5-0.4-0.7-0.8
				c-1.1-2.1-3-2.5-5.1-2.1c-1.7,0.3-3.3,1.1-3.7,3.1c0.3,0.9,1,0.7,1.7,0.8c1.3,0,2.6,0.1,3.9,0c2.6-0.1,5.1,0.4,7.4,1.6
				c0.3,0.2,0.7,0.3,1.1,0.2c0.1-0.1,0.2-0.2,0.2-0.4C660.1,182.7,659.8,181.9,659.6,181.1z"/>
                                    <path class="st88"
                                          d="M660.7,179.4c0-0.2-0.1-0.3-0.2-0.5C660.6,179,660.6,179.2,660.7,179.4z"/>
                                    <path class="st88"
                                          d="M684.7,166.2c-1.3,0.6-2.6,1.4-3.8,2.5C681.8,167.9,683.1,166.9,684.7,166.2z"/>
                                    <path class="st88"
                                          d="M680.9,166.7c-0.4,0.3-0.8,0.6-1.2,0.9C680.1,167.3,680.5,167,680.9,166.7z"/>
                                    <path class="st88"
                                          d="M671.4,165.9c0.2,1.1,0.4,2.1,0.7,3.1c0-0.4,0-0.9-0.2-1.3C671.7,167.1,671.5,166.5,671.4,165.9z"/>
                                    <path class="st88" d="M670.7,161.1C670.7,161.2,670.7,161.2,670.7,161.1c0-0.3,0-0.8,0-1.2C670.6,160.2,670.7,160.7,670.7,161.1z
				"/>
                                    <path class="st88"
                                          d="M676.4,167c0.2-0.2,0.3-0.4,0.5-0.6C676.7,166.6,676.6,166.8,676.4,167z"/>
                                    <path class="st88"
                                          d="M692,147.2C692,147.2,692,147.3,692,147.2C692,147.3,692,147.2,692,147.2z"/>
                                    <path class="st88"
                                          d="M689.1,147.9c0.8-0.2,1.6-0.4,2.4-0.5c-0.7,0.1-1.5,0.3-2.2,0.5C689.3,147.8,689.2,147.8,689.1,147.9z"/>
                                    <path class="st88" d="M700,149.5c1,1.4,1.9,2.9,3,4.3c0.5,0.6,1,1.3,1.5,2c-1.3-1.7-2.6-3.5-3.8-5.3
				C700.5,150.1,700.2,149.8,700,149.5z"/>
                                    <path class="st88" d="M707.8,155.8c-0.1-0.3-0.3-0.5-0.5-0.7c-0.1-0.2,0.2,0,0.2-0.1c0.4-0.9-0.1-1.8,0-2.6
				c-1-1.2-2.7-1.6-3.9-2.6c-1-0.9-1.5-2-2.1-3.1c-1.1-2-2.8-3-5.1-3c-1.7,0-3.5,0.1-5.2,0.5c-5.8,1.3-11.5,3.1-17.4,3.8
				c-3,0.4-5.9,1.6-8.9,2.1c-4.1,0.7-8.2,0.6-12.3,0.7c-3.7,0-7.2,0.8-10.3,2.9c-1,0.7-1.6,1.9-2.7,2.4c-1.1,1.5-0.8,2.8,0.6,3.2
				c0.2,0,0.5,0,0.7-0.1c3.9-0.7,7.9-0.9,11.9-0.7c0.8,0,1.3,0.3,1.8,1c1.2,1.6,1.5,3.4,0.7,5.2c-0.2,0.6-0.3,0.9,0.3,1.3
				c0.6,0.4,1,1,1.2,1.8c-0.6-0.5-1.3-0.7-2-0.7c-4.4,0-8.8,0.3-13.2,0.5c-1.2,0.1-2.5,0.3-3.6,1.1c1.1,1.9,2.6,3.4,3.9,5.1
				c0.5,0.6,1,0.3,1.4,0.1c3-1.2,6-1.1,8.9,0c3.9,1.5,6.5,4.1,7.1,8.4c0.1,0.5,0.4,0.9,0.5,1.3c0.9,0.2,1.5,0.1,1.3-1
				c0-0.2-0.1-0.4-0.1-0.5c-0.2-0.3,0-0.7-0.2-0.9c-0.1-0.1-0.1-0.1-0.1-0.2c-0.1-0.5-0.1-1.1-0.1-1.6c-0.1-0.2-0.1-0.4-0.2-0.5
				c0.1,0.1,0.2,0.3,0.2,0.5c0.1,0.2,0.2,0.5,0.5,0.6c0,0.3,0.2,0.6,0.3,0.8c0.2,0.3,0,0.7,0.3,0.9l0,0c0.4,0.4-0.1,1,0.3,1.4
				c0.3,0.3,0.7,0.2,1.1,0.1c1.8-0.4,3.7-0.5,5.6-0.3c0.8,0.3,1.2-0.1,1.3-0.9c0.1-0.8,0-1.6,0.1-2.5c0.2-3,0.6-6,1.6-8.8
				c0.2-0.6,0.3-1.2,0.3-1.7c-0.2-1-0.5-2.1-0.7-3.1c-0.4-1.6-0.6-3.1-0.7-4.7c0,0,0,0,0-0.1c0-0.5-0.1-0.9,0-1.2c0,0.4,0,0.8,0,1.2
				c0.1,1.6,0.4,3.1,0.7,4.7c0.1,0.6,0.3,1.2,0.5,1.8c0.1,0.5,0.2,0.9,0.2,1.3c0.3,1.2,0.5,2.4,0.8,3.6c0.5,2.5,1.5,4.8,0.4,7.4
				c-0.2,0.5-0.4,1.3,0.6,1.5c1.5-1.1,3.1-2.1,4.9-3c-0.5-0.7-0.5-1.5-0.3-2.3c0.5-2.2,1.5-4.1,3.5-5.4c2.6-1.7,5.5-2.7,8.6-2.8
				c2.3-0.1,4.5,0.4,6.8,0.9c0.1-0.1,1.7-0.6,2.1-0.7c0.4-0.1,0.8,0,0.7-0.7c-2.1-1-4.4-1.4-6.7-1.9c-3.5-0.7-6.2-0.6-8.6,0.4
				c-1.6,0.7-2.9,1.7-3.8,2.5c-0.2,0.1-0.3,0.3-0.5,0.4c0.1-0.1,0.3-0.3,0.5-0.4c1.2-1.1,2.5-2,3.8-2.5c0,0,0,0,0,0
				c0.3-0.1,0.7-0.3,0.8-0.7c-0.2-0.7-0.8-0.4-1.3-0.4c-1.3,0.4-2.4,0.9-3.4,1.6c-0.4,0.3-0.8,0.6-1.2,0.9c-0.9,0.7-1.6,1.5-2.3,2.4
				c0.6-0.9,1.4-1.7,2.3-2.4c0.4-0.3,0.8-0.6,1.2-0.9c0.5-0.3,0.9-0.7,1.4-1c-1-0.5-2.3-0.1-3.3-0.9c-0.1-0.1-0.4,0.1-0.5,0.3
				c-0.5,0.5-1.1,0.9-1.6,1.4c-0.2,0.2-0.4,0.4-0.5,0.6c0.2-0.2,0.3-0.4,0.5-0.6c0.2-0.2,0.5-0.4,0.7-0.7c0.2-0.2,0.3-0.4,0.2-0.6
				c-0.2-0.2-0.4-0.2-0.7-0.1c-0.9,0.4-1.5,1-2,1.8c1.1-1.6,1-2.2-0.5-3.9c-2.7-3.3-1.4-7.4,2.7-8.1c5.1-0.9,10.1-2.4,15.2-3.2
				c3.5-0.5,6.4,0.4,8.4,3.6c0.7,1.2,1.3,2.4,1.8,3.6c0.2,0.4,0.2,0.9,0.3,1.3c0.1,0.2,0.2,0.4,0.4,0.6c0.8-0.3,0.6-0.9,0.6-1.5
				c-0.1-0.8,0-1.4,0.8-1.8c0.3-0.1,0.5-0.4,0.4-0.7c-0.3-0.4-0.5-0.7-0.8-1.1c-0.5-0.6-1-1.3-1.5-2c-1.1-1.4-2-2.9-3-4.3
				c-1.3-1.7-2.9-2.8-5.3-2.6c-0.9,0.1-1.8,0.2-2.6,0.3c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.4,0.1c-0.8,0.2-1.6,0.3-2.4,0.5
				c-1.6,0.4-3.1,0.8-4.7,1.3c-0.3,0.1-0.5,0.1-0.8,0.2c-2.3,0.6-4.6,1.2-6.9,1.8c-1,0.2-2,0.5-3,0.7c-0.3,0.1-0.7,0.1-1,0.2
				c-0.8,0.2-1.6,0.4-2.4,0.5c-2.5,0.5-4.9,1-7.4,1.3c-0.1,0-0.2,0-0.3,0c-0.8,0.1-1.6,0.2-2.4,0.2c-1.3,0.1-2.5,0.1-3.8,0
				c-0.9,0-1.7,0-2.6,0c-0.6,0-1.1,0-1.7,0.1c-0.2,0-0.3,0-0.5,0c-0.1,0-0.3,0-0.4,0c-0.1,0-0.3,0-0.4,0c-1.6,0.2-3.2,0.7-4.8,1.6
				c1.6-0.9,3.2-1.4,4.8-1.6c0.1,0,0.3,0,0.4,0c0.1,0,0.3,0,0.4,0c0.2,0,0.3,0,0.5,0c0.4,0,0.8,0,1.1-0.1c2.3-0.1,4.7,0.1,7,0
				c0.9-0.1,1.8-0.2,2.7-0.3c3.3-0.5,6.5-1.1,9.8-1.8c0.3-0.1,0.7-0.1,1-0.2c1-0.2,2-0.5,3-0.7c2.6-0.6,5.1-1.3,7.7-2
				c1.6-0.4,3.1-0.9,4.7-1.3c0.1,0,0.2,0,0.2-0.1c0.7-0.2,1.4-0.3,2.2-0.5c0.1,0,0.2,0,0.4-0.1c0,0,0.1,0,0.1,0
				c0.8-0.1,1.6-0.3,2.4-0.3c2.3-0.2,4,0.4,5.4,2.4c0.1,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.5,0.6,0.7,1c1.2,1.8,2.5,3.6,3.8,5.3
				c0.8,0.9,1.6,1.8,2.8,2.2C708.6,157.5,707.6,156.5,707.8,155.8z"/>
                                    <path class="st88"
                                          d="M651.3,154.2c-0.1,0-0.3,0-0.4,0C651,154.2,651.1,154.2,651.3,154.2z"/>
                                    <path class="st88"
                                          d="M673.8,151.8c-0.3,0.1-0.7,0.1-1,0.2C673.1,151.9,673.5,151.8,673.8,151.8z"/>
                                    <path class="st88"
                                          d="M683.7,149.3c0.3-0.1,0.5-0.1,0.8-0.2c-2.6,0.7-5.1,1.3-7.7,2C679.1,150.5,681.4,150,683.7,149.3z"/>
                                    <path class="st88"
                                          d="M662.8,153.8c0.1,0,0.2,0,0.3,0c-0.9,0.1-1.8,0.2-2.7,0.3C661.2,154,662,153.9,662.8,153.8z"/>
                                    <path class="st88"
                                          d="M652.2,154.1c-0.2,0-0.3,0-0.5,0C651.9,154.1,652.1,154.1,652.2,154.1z"/>
                                    <path class="st89" d="M702,233.4c-0.4,4.9-1.9,9.5-4.1,13.8c-0.2,0.4-0.4,0.7-1,0.7c-4.5,0.5-9.1,1-13.6,1.4c-0.1,0-0.2,0-0.3,0
				c-1.2-0.2-1.9-0.7-1.6-2.1c0.2-0.8-0.4-1.6-0.5-2.4c-0.1-1.2,0.5-2.2,0.8-3.3c0-0.5,0.4-0.6,0.7-0.9c0.3-0.3,0.8-0.3,1.2-0.4
				c0.9-0.2,1.4-0.7,1.5-1.7c0-0.4-0.1-0.8-0.6-0.9c-0.4-0.1-0.6,0.3-0.7,0.6c-0.1,0.7-0.7,1-1.3,1.3c-0.5-0.1-0.6-0.4-0.6-0.8
				c-0.1,0.3,0.1,0.9-0.3,1c-0.5,0.1-0.6-0.4-0.8-0.7c-0.2-0.1-0.3,0-0.5,0c-0.3-0.1-0.3-0.3-0.4-0.5c0-0.1,0-0.2,0-0.3
				c0-0.2,0-0.3-0.2-0.3c-0.2,0.1-0.4,0.2-0.5,0.4c-0.1,0.2-0.2,0.4-0.5,0.5c-0.2,0-0.4,0-0.5,0c-0.2,0-0.4,0-0.5,0.1
				c-0.2,0.2,0,0.4,0,0.7c0,0.3,0,0.5-0.3,0.7c-1.3-0.8-1.6-1.9-0.5-2.9c1.2-1.1,2.3-2.3,4.1-2.7c-0.6-0.7-1.3-0.5-1.9-0.7
				c-0.8-0.3-1.7-0.5-2.3-1.2c-0.3-0.3-0.7-0.9-0.1-1.1c0.7-0.2-0.3-0.4,0.1-0.5c1.4,0,2.7,0,4.1,0c1.3,0.1,2.5,0,3.5-0.9
				c1.9-0.9,3.9-1.6,5.7-2.9c1.8-1.3,3.5-2.7,5.2-4.2c0.4-0.4,0.9-0.7,1.3-1.1c1.9,0.5,3,2,4.1,3.3c0.7,0.8,0.3,2,0.5,2.9
				c0.3-1.3,0-2.7,0.8-3.9c0.4,1.3,0.4,2.5,0.2,3.8c0,0.5,0,0.9-0.1,1.4c-0.3,0.6,0,1.2-0.2,1.8c0,0.2,0,0.3-0.1,0.5
				C702,232.4,702.3,232.9,702,233.4z"/>
                                    <path class="st90" d="M647.8,206l-0.1-0.1l-0.1,0c-0.3-0.2-0.6,0-0.9-0.3c-1.1-0.4-2.2-1-3.2-1.7c-0.8-0.6-1.3-1.3-1.5-2.2
				c-0.3-1.2-0.8-2.3-1.6-3.2c-1.6-1.7-1.8-3.7-1.5-5.8c0.1-1,0.4-2,0.6-3c0.1-1,0.7-1.8,1.6-2.3c1.2-0.7,2.5-1.5,3.9-2
				c0.8,0.3,1.7,0.1,2.4,0.7c0,0.2,0,0.4-0.3,0.4c0,0,0.1,0,0.1,0c1.8-0.8,3.7-0.8,5.6-0.8c0.5,0,1,0,1.4-0.2
				c1.5-0.2,2.9,0.3,4.4,0.6c2.1,1.3,3.6,2.9,3.7,5.5c0.1,1.7,0.3,3.5,0.4,5.2c0.1,0.8-0.2,1.4-0.5,2.1c-0.4,0.7-0.8,1.3-1.3,2
				c-1.8,2.9-4.5,4.6-7.8,5.3c-1.2,0.3-2.5,0.8-3.8-0.1l0,0C648.8,205.9,648.3,206.2,647.8,206z"/>
                                    <path class="st91" d="M680.7,238.9c0.1-0.1,0.2-0.2,0.3-0.3c0.5,0.9,0.7,1.9,0.9,2.9c0.3,0,0.6-0.1,0.8,0.3
				c0.1,0.4-0.1,0.5-0.4,0.6c-0.7,0.2-0.7,0.6-0.8,1.2c-0.1,1.1,0,2,0.3,3c0.2,0.6,0.1,1.3-0.1,2c0.5,0.3,1.2,0.2,1.4,0.8
				c-2.9,0.5-5.8,0.6-8.7,0.5c-0.9,0-1.6-0.3-2-1.1c-0.9-1.9-1.8-3.9-2.7-5.8c-1.2-1.3-1.2-3-2-4.3c0.6,1.5,1.4,3.1,1.7,4.9
				c0,0.4,0.1,0.8,0.2,1.2c-0.4,0.4-0.7,0.1-1-0.1c-0.8-0.6-1.5-1.4-2.1-2.2c-0.8-1.1-1.5-2.2-2.3-3.3c-1.1-1.3-2-2.6-1.9-4.4
				c3-1.2,2.6-3.9,2.9-6.3c0.1-1.1,0-2.2,0.7-3.2c1.2,1,2.4,2,3.7,2.8c2.4,1.5,5,2.4,7.7,3c0.2,0.4,0.6,0.2,0.9,0.4
				c-0.3,0.3-0.8,0-1.1,0.5c0.7,1.2,2,1.4,3.2,1.7c0.3,0.1,0.6,0,0.9,0c0.5,0.1,0.8,0.4,0.7,0.9c0,0.5-0.4,0.5-0.7,0.5
				c-1.1-0.1-1.7,0.9-2.5,1.4c-0.3,0.2-0.5,0.5-0.7,0.7c-1.3,1.1-1.3,1.6-0.1,2.9c0.8-0.3,0.3-1.3,0.9-1.7c0.1,0.1,0.2,0.2,0.3,0.3
				c0.5,0.5,0.4,1.4,0.9,1.9c0.2,0.1,0.3,0.3,0.6,0.3C680.8,240.2,680.1,239.5,680.7,238.9z"/>
                                    <path class="st40"
                                          d="M689.5,265.2c0.2,0,0.4,0.1,0.6,0.1C689.9,265.2,689.7,265.2,689.5,265.2z"/>
                                    <path class="st41" d="M709.6,275.4c0.1,0,0.1,0,0.2,0c0.7-2.7,1.5-5.4,2-8.2c0-0.2,0.1-0.5,0.1-0.7
				C710.3,269,709.8,272.1,709.6,275.4z"/>
                                    <path class="st41" d="M713.1,253.9c0-1.1-0.1-2.2-0.1-3.3c-0.3-0.6,0.1-1.2-0.5-2.1c-1.5,2.4-2.8,5-5.7,5.8
				c-2.5,0.8-4.9,2-6.8,3.9c-1.1,1.4-2.2,2.9-2.6,4.6c0,0.4,0.1,0.8,0.3,1.1c1.5,2.8,3.2,5.5,5.2,7.9c1.4,1.4,3,2.5,4.6,3.7
				c0.7,0,1.4-0.1,2.1-0.1c0.2-3.3,0.7-6.4,2.4-8.9C712.7,262.4,713.3,258.2,713.1,253.9z"/>
                                    <path class="st41" d="M709.8,275.4c-0.1,0-0.1,0-0.2,0c0,0.3,0,0.6-0.1,1c0-0.1,0.1-0.2,0.1-0.3
				C709.7,275.9,709.7,275.6,709.8,275.4z"/>
                                    <path class="st41" d="M709.5,276.4c0-0.3,0-0.6,0.1-1c-0.7,0-1.4,0.1-2.1,0.1c0.4,0.3,0.8,0.6,1.2,0.9
				C709.2,276.9,709.4,276.9,709.5,276.4z"/>
                                    <path class="st92" d="M677.8,195.5c-1.2-1.8-1.9-3.9-2.2-6c-0.1-0.6-0.3-1.3,0.1-2c1.9-0.9,4.2,0.4,5,2.7c0.2,0.7,0.1,1.5,1,1.9
				c1.3,0.5,2.7,0.7,4,0.3c0.7-0.2,1-1.4,1.9-1.7c1.1-1,2.2-1.9,3.4-2.7c2.1-1.3,4.1-0.8,6.1,0.4c0.2,0,0-0.3,0-0.1
				c0,0.1-0.1,0.1-0.1,0c-2.4-1.5-4.7-1.5-7,0.3c-0.1,0.1-0.3,0.2-0.5,0.2c-0.6-0.1-1.1,0-1.7-0.1c-0.4-0.1-0.8-0.2-0.9-0.6
				c-0.1-0.5,0.3-0.6,0.6-0.8c0.3-0.2,0.7-0.3,0.9-0.7c2.8-1.4,6.3-1.8,9.8-1.2c-4.7-0.5-6.8-0.4-10.9,1.6c-0.9,0-1.7-0.2-1.7-1.3
				c0.4-1,1.4-1.2,2.2-1.7c0.1-0.1,0.3-0.1,0.4-0.2c2.4-0.8,4.8-1,7.2-1.1c1.4-0.1,2.8-0.4,4.2-0.3c0.3,0,0.7-0.1,0.9,0.2
				c1.4,2.5,2.4,5.1,2.7,8c0.1,0.6,0.4,1.4-0.7,0.8c-0.8-0.4-1,0.2-1.5,0.7c-1.9,1.7-3.6,3.7-6,4.7c-1.2,0.5-2.5,0.5-3.9,0.4
				c-1-0.1-2.3,0.8-3.7,0.5c-0.5-0.1-1.1-0.2-1.6-0.2c-0.6,0-1.2-0.1-1.8,0.2c0.1,1.3,1.3,1.5,2.1,1.9c0.3,0.2,0.7,0.3,0.7,0.7
				c-0.1,0.4-0.5,0.4-0.8,0.4c-2.9-0.5-5.4-2-7.5-4C678.1,196.4,677.9,196,677.8,195.5z"/>
                                    <path class="st93"
                                          d="M631.4,166.9c0.1-0.2,0.1-0.4,0.1-0.7C631.5,166.4,631.4,166.7,631.4,166.9z"/>
                                    <path class="st93"
                                          d="M630,163.8c0,0.1,0,0.1,0,0.2c0-0.1,0.1-0.2,0.1-0.3C630.1,163.7,630,163.8,630,163.8z"/>
                                    <path class="st93" d="M636.4,158.4c-0.2-0.7-0.4-1.3-0.6-2c-0.9-0.1-1.4,0.6-2,1c-1.5,1.1-2.9,2.4-4.7,2.9c-1-1.6-0.9-1.3,0.7-2
				c1-0.4,2.1-0.7,3-1.3c0.6-0.5,1.3-0.9,1.4-1.8c-0.1-0.8-0.7-0.8-1.3-0.7c-0.4,0.1-0.8,0.4-1.2,0.3c-0.4,0-0.8,0.2-1.5,0.5
				c0.8-0.7,1.1-1.5,1.5-2.1c0.4-0.8,0.9-1.6,1-2.5c0.1-0.5,0.3-1.1-0.5-1.2c-1.8,1.3-3.8,2.5-6.1,3.4c0.5-0.9,1-1.3,1.5-1.8
				c1.2-1.2,2.5-2.3,3.9-3.3c0.3-0.2,0.7-0.4,0.4-0.9c-0.4-0.9-0.6-1.8-0.7-2.8c-0.1-0.6-0.4-0.7-0.9-0.6c-0.3,0.1-0.6,0.1-0.8,0.2
				c-1.4,0.6-2.9,1.2-4.1,2.2c-2.9,2.4-4.7,5.3-4.4,9.2c0.5,5,2.2,9.6,5.5,13.6c1.4,1.7,3,3.2,5.2,4c0-0.3,0-0.5,0-0.8
				c0-0.7-0.5-1.2-0.8-1.8c-0.9-1.8-1.8-3.7-1-5.7c0-0.1,0-0.1,0-0.2c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1
				c0.9-1.6,2.3-2.5,3.7-3.5c-1.5,1-2.9,2-3.8,3.6c-0.1,0.1-0.1,0.2-0.1,0.3c-0.2,0.9-0.6,1.7,0.1,2.6c0.6-0.7,0.5-1.8,1.1-2.5
				c0,0,0-0.1,0-0.1s0,0.1,0,0c-0.6,0.8-0.6,1.8-1.1,2.7c-0.2,0.6-0.2,1.2,0.5,1.3c0.6,0.1,0.6-0.6,0.7-1c0,0,0,0,0-0.1
				c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0-0.4,0.1-0.7c0,0.2-0.1,0.4-0.1,0.7c0,0.2,0,0.5-0.1,0.7c-0.1,0.5-0.1,1.1-0.1,1.6
				c0,0.8-0.3,1.9,1.1,2.2c0.5-1.2,1.6-1.7,2.6-2.4c-1.5-2.7-1.3-5.1,0.9-7.2c0.5-0.5,0.7-1,0.5-1.7
				C636.4,159.1,636.3,158.8,636.4,158.4z"/>
                                    <path class="st94"
                                          d="M649.4,226.1c-0.1,0.6-0.1,1.3-0.1,1.9c0-0.9,0.1-1.7,0.1-2.6C649.5,225.6,649.5,225.8,649.4,226.1z"/>
                                    <path class="st94"
                                          d="M650.2,231.4c-0.1-0.1-0.1-0.2-0.2-0.3C650.1,231.2,650.1,231.3,650.2,231.4z"/>
                                    <path class="st94"
                                          d="M661.5,231.5c0-0.7,0.1-1.4,0.2-2.1C661.6,230.1,661.5,230.8,661.5,231.5z"/>
                                    <path class="st94"
                                          d="M649.6,223.6c0,0.3,0,0.5,0,0.8c0-0.6,0-1.1,0.1-1.7C649.5,223,649.5,223.3,649.6,223.6z"/>
                                    <path class="st94" d="M663.6,224.1c-3.3,0.2-6.5-0.5-9.6-1.5c-3.3-1.1-6.2-2.9-8.5-5.6c-0.2-0.2-0.2-0.6-0.7-0.4
				c0.1,3.4,0.3,6.8,1,10.1c0.3,1.3,0.6,2.6,1.1,3.7c0.4,0.9,0.9,1.7,1.9,2c0.4,0.3,0.8,0,1.2,0.2c0.2,0,0.3,0,0.5,0
				c0.2-0.5-0.2-0.8-0.4-1.2c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.1-0.2-0.2-0.3c-0.4-0.8-0.7-1.6-0.7-2.4c0-0.2,0-0.5,0-0.7
				c0-0.6,0-1.2,0.1-1.9c0-0.2,0-0.5,0-0.7c0-0.3,0-0.6,0-0.9c0-0.3,0-0.5,0-0.8c-0.1-0.3,0-0.6,0.1-0.9c0-0.1,0-0.2,0-0.3
				c0-0.1,0-0.2,0.1-0.3c0-0.1,0-0.2,0-0.4c0.1,0.1,0.1,0.2,0,0.4c0,0.2,0,0.4-0.1,0.6c0,0.6-0.1,1.1-0.1,1.7c0,0.3,0,0.6,0,0.9
				c0,0.9-0.1,1.7-0.1,2.6c0,1.1,0.2,2.1,0.6,3.1c0.1,0.1,0.1,0.2,0.2,0.3c0.3,0.5,0.6,1,1.1,1.4c1.7,1.8,3.6,3.2,5.9,4.1
				c0.5-0.1,0.8,0.4,1.2,0.5c1.6,0.5,3.3,1,4.9,1.5c0.3-0.6,0.3-0.6-0.1-1.4c-1.1-2-1.7-4-1.6-6.1c0-0.7,0.1-1.4,0.2-2.1
				c0.1-0.3,0.1-0.6,0.2-0.9c0-0.1,0-0.1,0-0.1c-0.2,0,0.1-0.1,0.1,0.2c-0.1,0.3-0.2,0.6-0.3,0.9c-0.2,0.7-0.2,1.4-0.2,2.1
				c0,0.6,0.1,1.1,0.3,1.7c0.1,0.3,0.2,0.7,0.3,1.1c0.1,0.2,0.2,0.4,0.4,0.5c0.9,0,2.2-1,2.6-1.8c0.4-0.9,0.2-1.9,0.4-2.9
				c0.3-1.6,0.3-3.2,0.5-4.9C665.4,224.2,664.7,224,663.6,224.1z"/>
                                    <path class="st94"
                                          d="M649.7,221.7c0,0.1,0,0.2,0,0.4C649.7,221.9,649.8,221.8,649.7,221.7z"/>
                                    <path class="st95"
                                          d="M721.3,204.9c0.1,1,0.2,2.1,0.2,3C721.6,207.1,721.4,206,721.3,204.9z"/>
                                    <path class="st95"
                                          d="M720.3,199.1c0.2,0.9,0.4,1.8,0.6,2.7C720.7,200.9,720.6,200,720.3,199.1z"/>
                                    <path class="st95" d="M720.3,216.4c0,1.8-0.2,3.7-0.8,5.4c-0.1,0.3-0.3,0.5-0.1,1c3.2-3.6,6.2-7.3,8.6-11.4
				c2.2-3.7,3.4-7.7,3.6-12c0.1-2-0.2-4-0.5-5.9c-0.2-0.3,0-0.6-0.3-0.9c-0.3-0.3-0.4-0.7-0.3-1.1c-0.2-1.2,0-2.6-1.2-3.5
				c-0.3-0.1-0.2-0.4-0.3-0.6c-0.5-0.2-0.2,0.4-0.5,0.5c0,0.1-0.1,0.1-0.1,0.2c-1.2,1.9-1.7,4.1-2.7,6.1c-0.1,0.2-0.1,0.5,0.1,0.7
				c0.6,1.5,1.3,3,1.9,4.5c0.5,1.3,0.9,2.7,0.6,4.2c-0.9-2.8-2.2-5.5-3.4-8.1c-0.4-0.7-0.7-0.3-0.9,0.1c-0.5,1.1-1,2.1-0.8,3.4
				c0,0.1,0,0.2,0.1,0.3c0.3,0.4,0,0.8,0.2,1.2c0.2,1,0.3,1.9,0.5,2.9c0.5,3.3,0.8,6.5,0.4,9.8c-0.1,1.1-0.3,2.2-1,3.1
				c0.4-4.4,0-8.7-1-13c-0.5-2.2-0.8-4.5-1.4-6.7c-0.8,0-1,0.4-1.1,1.1c0.2,0.5,0.3,1,0.4,1.5c0.3,0.9,0.5,1.8,0.6,2.7
				c0.2,1,0.3,2.1,0.4,3.1c0.1,1.1,0.3,2.1,0.2,3c-0.1-1-0.1-2-0.2-3c-0.1-0.6-0.2-1.1-0.2-1.7c-0.1-0.5-0.1-0.9-0.2-1.4
				c-0.2-0.9-0.4-1.8-0.6-2.7c-0.2-0.6-0.5-1.3-0.9-1.8c-0.2-0.1-0.5-0.2-0.7,0.1c-0.5,2.3-0.3,4.6-0.1,6.8
				C719.7,208.2,720.4,212.2,720.3,216.4z"/>
                                    <path class="st96" d="M697.2,138.2c-1.5,0-3.1-0.1-4.6,0.1c-0.3,0-0.7,0-1,0c-7.7,0.5-15.4,0.7-23.1,1.7
				c-4.5,0.6-9.1,0.6-13.6,0.9c-5.7,0.5-11,2.2-15.9,5.2c-0.4,1-0.2,2.1-0.4,3.1c-0.1,0.5-0.3,1.1,0.4,1.4c0.6,0.2,0.8-0.4,1.1-0.7
				c1.4-1.3,3-2.4,5.1-1.8c2.2-0.4,4.2-1.2,6.3-1.6c5.7-1.1,11.4-1.8,17-2.9c3.8-0.7,7.5-1.3,11.4-1.6c2.6-0.2,5.2-0.3,7.8-0.7
				c3.5-0.5,7-1.8,10.6-1.5C698.5,138.8,698.2,138.2,697.2,138.2z"/>
                                    <path class="st97" d="M709.2,232.8c0.2,0,0.4,0,0.5,0c0.3-0.1,0.6-0.3,0.9-0.4c4.8-2.9,7.7-7,8-12.7c0.3-5.8-0.2-11.4-2.4-16.9
				c-0.8,0.1-1.5,0.7-2.4,0.6c-0.3-0.1-0.4,0.3-0.2,0.6c0.1,1,0.7,1.8,1,2.7c1.6,4.7,2,9.6,1.5,14.5c-0.2,1.8-0.5,3.6-1.5,5.4
				c0-0.3-0.1-0.5,0-0.6c0-0.2,0-0.5,0.1-0.7c0.8-5.5,0.6-10.9-0.7-16.3c-0.4-1.5-0.8-3-1.9-4.6c0.2,2.6-0.5,4.6-1.5,6.5
				c-0.5,0.8-0.5,1.6-0.3,2.5c0.9,3.8,0.6,7.7,0.4,11.6c-0.2-2-0.3-4.1-0.5-6.1c-0.1-1.8-0.3-3.6-0.8-5.3c-1.1,0.4-2.1,2-2.1,3.3
				c0.1,0.4,0.1,0.9,0.2,1.3c0.5,2.2,0.9,4.4,1.1,6.6C708.6,227.4,709.4,230,709.2,232.8z"/>
                                    <path class="st98" d="M651.5,219.1c-2.9-1.1-5-3.2-6.9-5.5c-0.5-0.6-0.9-1.3-1.2-2c-0.5-0.9-0.7-2-1-3c0.4-0.3,0.7,0,1.1,0.1
				c6.4,2.2,12.2,1.3,17.1-3.7c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1,0,0.1,0c0.3,0.9,0.3,0.9-0.3,2.2c0.5-0.1,0.6-0.6,1.2-0.7
				c1.5,2.4,3.6,4,6.4,4.7c-0.3,0.9-0.6,1.8-0.6,2.8c0,0.3,0,0.8-0.6,0.7c-0.4-0.4-0.3-0.9-0.3-1.5c0-0.2,0.1,0,0-0.1
				c0-0.1-0.1-0.1-0.2,0.1c-0.7,0.7-0.9,1.7-1.2,2.6c-0.3,0.8-0.5,1.6-1.1,2.2c-0.7-0.1-1.4-0.3-1.8-1c0.2-1.4,0.8-2.7,1-3.8
				c-0.7,1.7-0.7,3.9-2,5.6c-0.5,0.3-0.7-0.1-0.6-0.4c0.1-0.4-0.2-0.7-0.3-1.1c0.3-1.3,0.9-2.5,1.4-3.8c0.1-0.2-0.2-0.1,0-0.1
				c0,0,0,0.1,0,0.1c-0.9,2.1-1.3,4.4-3.1,6c-0.6,0.2-1-0.1-1.3-0.6c0.3-1.3,1.5-2.1,1.9-3.3c-0.6,1-1.2,1.9-2,2.7
				c-0.4,0.4-0.8,0.8-1.4,0.7c-0.7-0.2-1.1-0.6-1.3-1.3c0.7-1,1.8-1.5,2.4-2.5c-1.1,1.3-2.4,2.6-4.2,3.3
				C652.3,218.3,652.3,219.5,651.5,219.1z"/>
                                    <path class="st99" d="M664.1,273.5c1.6-0.3,3.2-0.9,4.6-1.7c3.4-2,6.1-4.6,8.6-7.6c-0.1-0.9-0.9-0.9-1.5-1.1
				c-2.1-0.7-3.5-2.1-3.8-4.4c-0.1-0.7-0.2-1.4-0.8-1.8c-0.4-0.4-0.8-0.7-1.2-1.1c-1.9-1.7-3.9-3.2-4.8-5.7
				c-0.4,0.4-0.4,0.8-0.5,1.1c-0.6,2.3-1,4.6-1.4,7c-0.7,4.7-0.9,9.5-0.7,14.2C662.7,273.6,662.9,273.8,664.1,273.5z"/>
                                    <path class="st100"
                                          d="M721.4,145.8C721.4,145.8,721.4,145.8,721.4,145.8C721.4,145.8,721.4,145.8,721.4,145.8z"/>
                                    <path class="st100" d="M745.7,135.2c-0.3,0.6-0.6,1.1-0.9,1.6c-0.8,1.6-2,2.8-3.6,3.6c-1,0.5-2,0.9-3.1,1.2
				c-4.6,1.1-9.1,0.1-13.6-0.9c-0.3-0.1-0.6-0.4-0.8-0.6c0.7-0.3,1.5,0.1,2.3-0.4c-0.5-0.8-1.1-0.6-1.7-0.7c-1.7-0.1-3.4,0.2-5-0.1
				c-3.4-0.3-6.9-0.6-10.4-0.5c0.3,1.3-0.1,2.6,0.2,3.8c0.7,0.8,1.9,1,2.6,1.8c0.1,0.1,0.2,0.2,0.3,0.2c0.3,0.2,0.6,0.5,0.9,0.7
				c0.1,0.1,0.2,0.2,0.3,0.2c1.4,1.1,2.8,2.4,4.6,2.8c0.3,0.1,0.6,0.1,0.8,0.1c0.4,0,0.9,0.1,1.3,0.2c0.5,0.1,0.9,0.1,1.3-0.2
				c0-1-0.9-0.4-1.3-0.8c0.8,0.1,1.6,0.1,2.2-0.5c0-0.5-0.4-0.7-0.7-0.8c0,0,0,0-0.1,0c-0.1,0-0.2-0.1-0.2-0.1c0,0-0.1,0-0.1,0
				c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0.1,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0.5,0.2,1,0.1,1.5,0.4
				l0,0c0.3,0.2,0.6,0,0.9,0.2c2.9,0.5,5.9,0.3,8.7-0.5c0.1-0.7-0.5-0.6-0.9-0.7c-0.8-0.3-1.7-0.5-2.1-0.6c3.1,0.9,6.1-0.2,9-1.7
				c-0.8,0.5-1.7,0.8-2.7,1.2c-0.2,0.1-0.6,0.3-0.3,0.6c0.1,0.2,0.4,0.1,0.5,0c3.1-1,5.8-2.7,8.2-4.7c0.8-0.7,1.4-1.6,1.8-2.6
				C746.4,136.7,746.5,135.9,745.7,135.2z"/>
                                    <path class="st100" d="M721,145.6C721,145.6,721.1,145.6,721,145.6C721.1,145.6,721.1,145.6,721,145.6
				C721,145.6,721,145.6,721,145.6z"/>
                                    <path class="st101" d="M747.8,169.3c-0.1,2.1-0.7,4-1.7,5.8c-1.5,2.8-3.5,5.2-5.6,7.6c-0.4,0.5-0.6,1.2-1.4,1.5
				c-0.5-1.1-0.8-2.4-2.4-2.9c2.3-1.1,3.6-2.6,3.9-4.9c0.3-2.2-0.3-4.1-1.9-5.7c-0.2-0.6-0.1-0.9,0.6-0.9c1.6,0.8,2.7,2,3,3.9
				c0.3-1.5,0-2.3-1.1-3.5c-1.5-1.6-3.1-2.9-4.9-4.1c-0.8-0.5-0.8-0.5-0.2-1.2c1.9-1.9,3.9-3.4,6.7-3.1c1,0.1,1.9,0.2,2.5,1.2
				c1.1,0.7,1,1.9,1.2,2.9c0.1,0.4-0.1,1.1,0.8,0.8c0.4-0.1,0.5,0.3,0.5,0.7C747.9,168.1,748,168.7,747.8,169.3z"/>
                                    <path class="st45"
                                          d="M696.4,254.6c-0.2,0-0.4,0-0.6,0C696,254.6,696.2,254.6,696.4,254.6z"/>
                                    <path class="st45"
                                          d="M697.3,266.2c0.8,1,1.7,2,2.6,3C699.5,268,698.5,267,697.3,266.2z"/>
                                    <path class="st45" d="M712.8,245.7c0-0.7-0.1-1.3-0.3-2c-0.3-1.1-0.5-1.2-1.4-0.4c-1.4,1.4-3,2.4-4.7,3.4c-2.6,1.5-5.6,2-8.3,3.4
				c-0.5,0.3-1,0.4-1.5,0.5c-2,0.4-4,0.7-6,0.9c-0.8,0.1-1,0.3-0.7,1.1c0.4,1.1,0.8,2.2,1.2,3.3c0.7,2.5,2,4.8,3.5,7
				c0.8,1.2,1.7,2.3,2.6,3.5c1.3,0.8,2.3,1.7,2.6,3c0.6,0.6,1.2,1.2,1.8,1.8c0.3,0.3,0.6,0.8,1.2,0.8c-0.3-0.7-0.6-1.3-1-1.9
				c-1.5-2.3-3.2-4.5-4.2-7.1c0-1.2-1.2-2-1-3.3c0.6-0.4,1.3-0.5,2-0.8c0.5-0.2,0.9-0.6,0.5-1.1c-0.8-0.8-0.6-1.9-1-2.8
				c-0.5-0.3-1.1-0.3-1.6-0.3c-0.2,0-0.4,0-0.6,0c-0.6,0.1-1.1,0.2-1.6,0.2c0.3-0.1,0.7-0.2,1.1-0.2c0.2,0,0.4,0,0.5,0
				c0.2,0,0.4,0,0.6,0c2.2-0.2,4.3-1.1,6.2-2.3c2.8-1.7,5.3-3.9,7.8-6c0.3-0.3,0.6-1,1.3-0.5c0.2,0.3,0.3,0.6,0.2,0.9
				c-0.8,2.6-1.9,5.1-4.3,6.7c-0.4,0.3-0.9,0.4-1.2,0.8c-0.4,0.6,0,0.6,0.5,0.5c2.9-0.9,4.3-3.2,5.7-5.8c0.3,0.7,0.1,1.2,0.4,1.7
				C713.4,248.9,712.7,247.3,712.8,245.7z"/>
                                    <path class="st102" d="M726.1,245.3c1-0.4,1.8-0.9,2.4-1.8c0.7-0.9,1.4-1.7,2.1-2.6c1.4-1.7,2.4-3.6,3.7-5.3
				c0.7-0.4,1-1.1,1.4-1.8c2-3.4,2.8-7.2,3.3-11c0-0.7,0-1.5,0.1-2.2c0.2-1.6,0.3-3.3-0.1-4.9c-0.3-1.3-0.5-2.5-0.8-3.8
				c-0.4-1.2-0.7-2.5-1.7-3.5c0.3,1.6,0.6,3.2,0.6,4.9c-0.1,2.9-0.6,5.8-1.5,8.6c-2.6,8.1-6.6,15.5-11.7,22.3
				C724.2,245.4,725.1,245.3,726.1,245.3z"/>
                                    <path class="st103" d="M688.3,187c0.2,0.2,0.1,0.4-0.1,0.5c-0.4,0.2-0.8,0.2-1.1,0.6c0.1,0.4,0.4,0.4,0.7,0.4
				c0.6,0.1,1.1-0.2,1.7,0.2c-0.3,1.1-1.3,1.6-1.8,2.5c-0.6,0.3-1.5,0.3-1.3,1.4c0.1,0.5-0.4,0.6-0.7,0.5c-0.5-0.2-1,0-1.5,0
				c-1.2,0.1-2.2-0.4-3.3-0.8c-0.3-0.1-0.4-0.4-0.4-0.7c0.2-2-1.5-2.8-2.6-4c-0.3-0.3-0.6-0.3-0.9-0.1c-0.4,0.2-0.9,0.1-1.3,0.1
				c0.3-0.9,0.6-1.8,0.9-2.7c0.3-0.9,0.8-1.7,1.6-2.2c1.3-0.9,2.6-1.6,4.1-2c2.9-0.8,5.9-0.3,8.8-0.5c0.5,0,0.9,0,1,0.6
				c0,0.6-0.3,0.9-0.9,1c-0.5,0.1-1.2-0.1-1.5,0.5c-0.1,0.3-0.4,0.4-0.7,0.4c-1.9,0.3-3.7,1-5.3,2.1c-0.6-0.4-0.8-1-1.3-1.3
				c0.4,0.4,0.8,0.8,1.2,1.3c2.4-1.5,5.1-2.1,7.8-2.8c1.5-0.3,3-0.8,4.6-0.8c0,0,0,0,0.1-0.1c0,0,0-0.1,0-0.1
				c0.5-0.7,1.2-0.3,1.8-0.4c1,0.2,1.8,0.9,2.6,1.5c0,0.6-0.5,0.5-0.8,0.5c-2.2,0.2-4.3,0.3-6.5,0.6c-1.8,0.2-3.5,0.6-5.2,1.2l0,0
				c-0.8,0.4-1.7,0.5-2.1,1.4c0.1,0.7,0.7,0.8,1.2,1.2c0.2,0.5-0.3,0.4-0.4,0.5C687.1,187.5,687.5,186.5,688.3,187z"/>
                                    <path class="st104" d="M693.5,176.2c-0.7-0.2-1.4-0.7-2-1.2c-2.5-2.1-5.7-1.7-7.5,1.1c-0.2,0.4-0.5,0.7-0.9,0.8
				c-1.2,0.3-2.4,0.7-3.7,1c-0.2-0.7,0.1-1.1,0.3-1.6c2-4,5.4-6.1,9.8-6.5c5.4-0.5,10.1,1.2,14.2,4.7c0.1,0.1,0.2,0.2,0.3,0.3
				c0.7,0.5,0.5,0.9-0.1,1.3c-0.3,0.2-0.6,0-0.9,0.3c-0.2,0-0.4,0-0.6,0c-0.3,0.3-0.8,0.4-1.2,0.4c-1.9,0-3.9,0-5.8,0
				C694.8,176.9,694.1,176.7,693.5,176.2z"/>
                                    <path class="st105" d="M721.8,178.5c-0.8-2.3-1.3-4.7-1.4-7.1c-0.1-1,0.3-1.8,1-2.5c0.5-0.4,0.9-0.8,1.4-1.2
				c1.4-1.1,3.1-1.8,4.6-3.1c0.5,1.4,0.5,2.6,0.6,3.9c0.4,3.6,0.8,7.1,0.8,10.7c0,0.5,0,1.1-0.1,1.6c-0.2,0.4-0.5,0.7-1,0.8
				C725.3,181.7,723.3,180.5,721.8,178.5z"/>
                                    <path class="st106" d="M670.5,187.9c0.3-0.1,0.4,0.1,0.6,0.3c-0.2,0.7-0.1,1.4,0.1,2.1c0.6,2.4,0.2,4.9,0.3,7.3
				c-0.3,1.9-0.9,2-3.1,0.9c-0.1,1.7,0.4,3.4,0.5,5.1c0.1,0.8,0.3,1.6,0.4,2.4c0.1,1.3-0.4,1.8-1.7,1.7c-1-0.1-1.9-0.7-3-0.7
				c-1.3-1.1-2.3-2.3-2.3-4c0.4-0.5,1.3-0.1,1.5-0.9c-0.3,0.3-0.7,0.7-1.2,0.2c-0.3-1.2,0-2.1,1.1-2.7c1.1-0.6,0.8-1.6,0.9-2.5
				c1.1-1.9,0.8-4,0.7-6.1c-0.2-3.1,1.4-4.4,4.3-3.3C670,187.9,670.2,188.1,670.5,187.9z"/>
                                    <path class="st107" d="M715.2,247c0.2,0.9,0.6,1,1.3,0.5c1.3-1,2.5-2,3.7-3c3-2.6,5.5-5.8,7.6-9.1c2.1-3.3,4-6.7,5.6-10.3
				c1.5-3.4,2.5-6.9,2.4-10.7c0-0.7,0.1-1.5,0-2.2c-0.2-1.6-0.5-3.1-1.8-4.3c-0.2-0.2-0.3-0.4-0.6-0.1c-0.2,0.2,0,0.3,0.1,0.5
				c1.4,2.7,1.5,5.6,1.1,8.6c-0.5,3.7-2.1,6.9-4,10c-1.8,2.9-3.7,5.6-5.9,8.2c-2.2,2.6-4.5,5.1-7.4,6.9c-0.6,0.4-1.2,0.8-1.9,1.1
				c-0.8,0.3-0.9,0.9-0.8,1.7C714.7,245.4,714.9,246.2,715.2,247z"/>
                                    <path class="st108" d="M686.3,222.8c1.3-0.3,2.7-0.6,4-0.9c0.3-0.2,0.7,0,0.9-0.3l0,0c0.7-0.1,1.6-0.6,2,0.5
				c-0.8,0.2-1.3,0.9-1.9,1.4c-2.9,2.6-6.2,4.2-10,5c-3.1,0.7-6.1,0-8.9-1.2c-2-0.8-3.8-1.9-5.4-3.6c1.5-0.6,2.8-1.4,4.1-2.2
				c2.7,0.7,5.5,0.9,8.1,2c0.8,0.3,1.7,0.3,2.6,0.3c0.1,0,0.4,0.1,0.4,0C683.2,222.3,684.9,223.3,686.3,222.8z"/>
                                    <path class="st109" d="M733.4,179.7c0,1.1,0,2.1,0,3.1c0.5,0.3,0.6-0.1,0.8-0.2c0.7-0.5,1.4-0.5,2.2-0.1c0.4,0.2,0.7,0.5,1.1,0.7
				c1.3,0.7,2,1.7,1.9,3.3c-0.1,1.7-0.7,3.1-2.1,4.1c-0.9,0.6-1.8,0.8-2.8,1c-0.5,0.1-1,0.2-1.6,0.3c-1.7,0.4-1.7,0.4-2-1.5
				c-0.8-1-0.9-2.1-1.1-3.3c0-0.1,0-0.2-0.1-0.2c-0.2-0.5-0.2-1,0-1.5c0.2-1.4,0.4-2.7,0.6-4.1c0.3-2.2,0-4.4,0.2-6.7
				c0.8,0.4,1.6,0.7,2.4,0.9c0,0.1,0.1,0.2,0,0.3c0.2,0.3,0,0.6,0.2,0.9c0,0.2,0,0.4,0.1,0.5C733.5,178.1,733.1,178.9,733.4,179.7z"
                                    />
                                    <path class="st110" d="M668.4,250.8c0.8,0.7,1.5,1.5,2.2,2.2c0.6,0.6,1.1,1.2,1.7,1.7c0.7,0.6,0.6,1.1-0.1,1.6
				c0.1,0.4,0.9,0.7,0,1.1c-0.2,0.6,0.4,0.8,0.7,1.1c1.7,1.7,3.7,2.9,5.7,4.1c1-1.2,1.9-2.4,2.9-3.5c1.5-1.5,2.3-3.4,3.1-5.3
				c0.4-1,0-1.6-1.1-1.6c-2.5,0-4.9,0-7.4,0c-0.8,0-1.6-0.2-2.7-0.2c1.7,2,4,2.4,6,3.4c-0.2,0.4-0.5,0.4-0.8,0.3
				c-2-0.7-3.9-1.3-5.5-2.7c-0.7-0.7-1.2-1.7-2.1-2.1c-0.6,0.1-0.8-0.6-1.2-0.8c-0.4-0.3-0.7-0.8-1.3-0.4c-0.1,0.2-0.3,0.3-0.5,0.3
				C667.7,250.4,668.2,250.6,668.4,250.8z"/>
                                    <path class="st111" d="M685.9,200.4c0.2,0,0.4,0,0.6-0.1c0.1-0.3-0.2-0.2-0.3-0.3c-0.7-0.3-1.4-0.5-2-0.8
				c-0.5-0.3-0.6-1.2-1.3-1.8c1.6-0.4,3-0.4,4.4-0.1c0.7,0.2,1.3,0.2,2,0.1c1,0,1-0.2,0.8-1.2c0.1,0,0.3,0,0.4,0.1
				c0.6,0.3,1.2,1,2,0.8c1.3-0.3,2.6-0.4,3.6-1.3c0.8-0.7,1.9-1.1,2.3-2.2c0.1-0.2,0.5-0.4,0.8-0.5c0.7-0.3,1.2-0.7,1.5-1.4
				c0.6-1.1,1.1-1.2,2.1-0.3c0.4-0.2,0.1-0.5,0.3-0.7c0.5,1.2,0.2,2.4,0.2,3.6c-0.2,1.9-1.4,3.1-2.7,4.2c-3.5,2.9-7.6,3.7-12,3
				C687.8,201.3,686.5,201.6,685.9,200.4z"/>
                                    <path class="st112" d="M685.7,204.7c1.2-0.2,2.3,0.4,3.5,0.6c0.5,0.4,1,0,1.5,0.3c0.1,0,0.2,0,0.2,0c0.6,0.7,1.5,0.7,2.3,0.8
				c1.1,0.2,2.2,0.3,3.3,0.4c1,0.3,2,0.1,3,0.2c0.4,0,0.9,0.1,1,0.5c0,0.6-0.6,0.6-1,0.6c-0.8,0-1.6,0.4-2,0.2
				c0.9,0,2.1-0.2,3.3-0.3c0.8-0.1,1.9-0.6,2.1,0.9c-0.1,0.1-0.2,0.2-0.4,0.3c-1.5,0.3-2.9,0.1-4.4,0.1c-1.2,0-2.3-0.3-3.4-0.7
				c-0.2-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.3-0.1-0.4-0.1c0.2,0,0.4,0.1,0.6,0.2c0.8,0.5,1.8,0.3,2.5,1c-0.2,0.9-1.1,0.7-1.7,1.1
				c-1.6-0.1-2.5-1.5-3.7-2c2.3,2,5.4,3,8.4,4.3c0.5,0.2,1,0.3,1.4,0.8c0.1,0.3,0,0.6-0.2,0.8c-1.8,0.8-3.6,0.1-5.3-0.4
				c-1.9-0.5-3.6-1.6-5-3c-0.6-0.5-1.2-1-1.7-1.5c0.3,0.4,1,0.8,1.4,1.3c0.6,0.5,1.2,0.9,1.4,1.7c-0.1,0.5-0.5,0.6-0.9,0.7
				c-1.6-0.9-2.6-2.3-3.7-3.7c0,0,0,0,0,0s0,0.1,0.1,0.1c1,1.4,2.2,2.6,3.4,3.7c0.4,0.5,0.4,0.8-0.4,0.8c-0.4,0-0.8-0.3-1.1-0.6
				c-0.4-0.5-0.5,0.2-0.7,0.1c-1.3-0.1-1.8-1.2-2.4-1.9c0.8,1.4,2.4,2.1,3.4,3.5c-0.4,0.8-1.3,0.6-1.9,1.1c-1.7-0.8-2.5-2.3-3.5-3.8
				c-0.3-0.8-1-1.6-1-2.5c0.7-1.2,1.2-2.5,2.3-3.4C686.1,205.8,685.2,205.2,685.7,204.7z"/>
                                    <polygon class="st113" points="711.9,143.8 711.9,143.8 711.9,143.8 			"/>
                                    <path class="st113" d="M748.6,140.6c-0.1-1.7-0.3-2.1-1.2-3.3c-0.9,3.6-3.4,5.6-6.4,7.1c-4.1,2-8.5,3.1-13.1,3.6
				c-1.6,0.1-3.3-0.2-4.8,0.2c-2,0.5-3.8,0.1-5.6-0.4c-1.8-0.6-3-1.9-4.4-3c-0.4-0.3-0.8-0.6-1.2-0.9c-0.5-0.4-1.1-0.8-1.7-1.1
				c-1-0.5-1.2-0.1-1,0.8c0.1,1.1,0.3,2.1,0.6,3.1c0.4,0.5,0.9,0.9,1.5,1.2c3.8,2.2,8,2.8,12.2,3.3c1.1-0.6,2.2-1.6,3.6-1.1
				c4.9,0,9.5-1.3,13.8-3.5c1.3-0.8,2.7-1.5,3.8-2.6c1.1-1.1,1.1-1.1,2.2-0.4c0.5-0.4,0.5-1.1,0.8-1.7c0-0.3,0-0.6,0.2-0.9
				c-0.2,0.5-0.1,1.1-0.4,1.5c0,0.1,0,0.3,0,0.4c0.3,0.6,0.6,0.3,0.8-0.1C748.9,142.2,748.8,141.4,748.6,140.6z"/>
                                    <path class="st113"
                                          d="M713.1,144.7C713.1,144.7,713.1,144.7,713.1,144.7C713.1,144.7,713.1,144.7,713.1,144.7L713.1,144.7z"/>
                                    <path class="st114"
                                          d="M715,236.4c0.1-0.2,0.2-0.5,0.4-0.7C715.2,235.9,715.1,236.1,715,236.4z"/>
                                    <path class="st114"
                                          d="M721.5,227.7c-0.2,0.7-0.5,1.5-0.8,2.2C721,229.2,721.2,228.4,721.5,227.7z"/>
                                    <path class="st114"
                                          d="M721.7,226.8c0,0.1-0.1,0.2-0.1,0.4C721.7,227.1,721.7,227,721.7,226.8z"/>
                                    <path class="st114" d="M712.6,239c0.7-0.3,0.8-1,1.3-1.4c0.5-0.4,0.8-0.8,1.1-1.3c0.1-0.2,0.2-0.5,0.4-0.7
				c0.3-0.7,0.5-1.3,0.7-1.9c-0.1,0.7-0.4,1.3-0.7,1.9c-0.1,0.2-0.2,0.5-0.4,0.7c-0.3,0.6-0.6,1.2-0.7,1.9c-0.1,0.3-0.2,0.6-0.3,1
				c-0.1,0.3-0.2,0.6,0,0.8c0.3,0.3,0.5,0,0.8-0.1c3.2-1.8,5.9-4.2,7.5-7.6c1.4-3,1.7-6.1,1.7-9.3c0-0.3,0.2-0.7-0.3-0.9
				c-0.4,0.4-0.8,0.7-1.2,1.1c-0.1,1.3-0.4,2.5-0.7,3.7c0,0.1-0.1,0.2-0.1,0.4c0,0.2-0.1,0.3-0.1,0.5c-0.2,0.7-0.5,1.5-0.8,2.2
				c-0.6,1.6-1.3,3.1-2,4.6c0.2,0-0.2,0.1-0.1-0.1c0.1-0.3,0.3-0.5,0.4-0.8c0.6-1.2,1.2-2.5,1.7-3.8c0.3-0.7,0.5-1.4,0.8-2.2
				c0.1-0.2,0.1-0.3,0.1-0.5c0-0.1,0.1-0.2,0.1-0.4c0.2-0.8,0.4-1.5,0.5-2.3c0-0.3,0.3-0.8-0.4-0.8c-0.9,1-1.5,2.1-2.2,3.3
				c-1.6,2.8-3.7,5.2-6.5,6.9c-0.8,0.5-1.5,1-2.3,1.5c-0.4,0.2-0.6,0.5-0.2,0.9C711.3,237.3,711.8,238.3,712.6,239z"/>
                                    <path class="st115" d="M732.9,175.6c-1.5,0.4-1.5,0.4-2.3-0.7c0,1.8,0,3.4,0,5c0,0.5,0.2,1.1-0.3,1.5c0.3-4.4-0.4-8.8-0.6-13.2
				c-0.2-3.4-0.1-3.7,2.5-6.1c2-1.8,4.4-3,7-3.6c3.6-0.8,7.7,2.1,8.5,5.6c0.4,1.6,0.6,3.3,0.1,5c0-0.6,0-1.1,0-1.7
				c0-0.3,0-0.6-0.4-0.6c-0.4,0-0.4,0.3-0.5,0.6c0,0.1-0.1,0.2-0.3,0.5c-0.4-1.8-0.3-3.5-1.1-5c0.4-0.3,0.1-0.5-0.1-0.7
				c-1.2-1.5-2.9-1.8-4.6-1.4c-2.7,0.6-5,1.9-6.8,4c-1.2,1.4-1.5,3.1-1.6,4.9c-0.1,1.6,0.1,3.2,0.4,4.8
				C732.8,174.8,732.9,175.2,732.9,175.6z"/>
                                    <path class="st116" d="M667,214.4c0.7-0.3,0.3-1,0.3-1.4c0-0.8,0.2-1.5,0.9-1.8c0.2-0.1,0.4,0,0.6,0c0.3,2.3,0.1,4.4-0.6,6.4
				c0.6-1.3,0.7-2.9,0.8-4.4c0.1-0.7-0.2-1.3,0.2-2c0.3,0,0.6,0,0.9-0.1c0.6-0.1,0.8,0.2,0.8,0.8c0,0.7,0.1,1.4,0.1,2
				c0.1,1,0.4,1.9,1,2.7c0.6,0.6,0.3,1-0.2,1.5c-1.6,1.6-3.5,2.7-5.7,3.3c-2.3,0.6-4.6,0.4-6.9,0c-2.4-0.4-4.8-1.1-7.1-2
				c-0.2-0.1-0.3-0.2-0.5-0.3c0.1,0,0.4-0.1,0.4-0.1c-0.2-0.8,0.4-0.7,0.8-0.8c0.8,0.4,1.3-0.8,2.1-0.5c0.4,0.4,0.7,0.9,1.2,1.1
				c0,0.1,0,0.3-0.2,0.4c0,0,0.1,0,0.2,0c0.4-0.1,0.7-0.7,1.2-0.4c0.4,0.1,0.7,0.6,1.2,0.6c0.7-0.1,0.8-0.8,1.1-1.2
				c0.3-0.3,0.4-0.9,1-0.9c0.1,0.2,0.8,0.1,0.4,0.7c-0.2,0.2-0.1,0.5,0.1,0.7c0.3,0.4,0,0.7-0.3,1.1c0.6-0.8,0.8-1.6,1.2-2.4
				c0.1-0.2,0.2-0.6,0.6-0.5c0.5,0.3,1.2,0.2,1.4,0.9c0.2,0.8-0.5,1.3-0.8,1.9c0.9-1.3,1.7-2.6,1.8-4.2c0.3-1,0.2-2.1,1.4-2.7
				c0.7,1.3-0.1,2.5-0.1,3.8c0,0.8-0.4,1.7-0.7,2.3c0.4-1,0.8-2.1,0.8-3.4C666.5,215.2,666.3,214.6,667,214.4z"/>
                                    <path class="st117" d="M711.6,196.5c-0.1,0.2-0.1,0.5-0.2,0.7c0,0.2,0,0.5-0.3,0.4c-1.3-0.5-1.4,0.7-1.9,1.2
				c-2.3,2.6-5.3,3.8-8.7,3.9c0-0.6,0.4-0.5,0.7-0.7c1.7-1.1,2.9-2.5,3.7-4.4c1.1-3,1.2-6,0.2-9c-0.4-1.4-1-2.7-1.4-4.1
				c-0.3-0.7-0.5-1.4-0.8-2.3c0.6,0.1,0.7,0.5,0.9,0.7c1.7,2.5,3.3,5,5.2,7.4c0.4,0.5,1,0.9,1.3,1.6c0.1,1,1,1.6,1.3,2.5
				C711.7,195.1,712.2,195.8,711.6,196.5z"/>
                                    <path class="st118" d="M706.7,217.3c0.3,3.2,0.7,6.5,1,9.7c0.1,1.5,0.2,3,0.3,4.5c0.2,1.7-0.5,3-1.8,4.1c-1.3,1-2.6,2-4,3
				c-0.1-0.9,0.2-1.6,0.4-2.4c1.2-4.4,1.3-8.8,0.8-13.3c-0.1-0.6-0.1-1.3-0.1-1.9c0.6-1.5,1.4-2.9,2.4-4.2c0.2-0.3,0.4-0.6,0.8-0.4
				C707,216.7,706.8,217,706.7,217.3z"/>
                                    <path class="st119" d="M738.7,150.4c-0.2-0.7-0.8-0.5-1.3-0.4c-0.6,0.2-1.2,0.5-1.8,0.4c-0.5,0-1,0.3-1.5,0.4
				c-1.1,0.3-2.1,0.8-3.2,0.3c-2.4-0.1-4.8-0.3-7.3-0.2c-1.4,0-2.7-0.4-4-0.6c-2.5-0.4-4.9-1-7.1-2.2c-0.8-0.5-1.6-1-2.6-1.3
				c0.2,1.8,0.8,3.4,1.8,4.9c0.5,0.4,1,1.1,1.7,1.1c0.7,0.7,1.4,1.2,2.3,1.5c0.5-0.1,0.8-0.6,0.8-1.7c-1.3-0.7-2.7-1-3.2-1.5
				c7,3.2,14.8,4.1,22.9,1.4c0.4-0.2,1-0.3,1.2-0.8c-0.3-0.8,0.4-0.4,0.6-0.5C738.3,151.1,738.9,151,738.7,150.4z"/>
                                    <path class="st120" d="M716.3,155.5c0.6,0.1,1.1,0.4,1.6,0.7c4.1,2.3,8.4,2.9,12.9,1.6c4.2-1.2,8.3-2.6,12.1-4.8
				c1.7-1,3.1-2.3,4.5-3.7c0.3,0.5,0,0.7-0.1,1c-1,2.1-2.6,3.8-4.2,5.4c-0.4,0.4-0.8,0.5-1.3,0.5c-1.9-0.1-3.7,0.3-5.4,1.1
				c-3.8,1.7-7.8,2.4-11.8,3c-0.6,0.1-1,0.2-1.4,0.8c-0.5,0.8-1.4,1.4-2.1,2c-0.5,0.4-1,0.5-1.5,0c-0.2-0.2-0.4-0.4-0.6-0.6
				c-0.5-1-1.8-1.3-2.4-2.2c-0.3-0.5-1-1,0-1.5c1.2,0.3,2.3,0.5,3.4,0.8c-0.7-0.5-1.8-0.1-2.5-0.9c0.1-0.3,0.3-0.4,0.6-0.6
				c0.5-0.1,0.9,0.4,1.4,0.3c0.2,0,0-0.2,0,0c0,0.1,0,0.1-0.1,0c-1-0.4-2.1-0.4-2.8-1.4C716.5,156.6,716,156.1,716.3,155.5z"/>
                                    <path class="st121" d="M710.2,206.2c-0.6-0.2-1,0.3-1.4,0.6c-3.1,2-6.4,2.9-10.1,2.4c-0.6-0.1-1.3-0.3-1.9,0.2
				c-0.5,0.5-1.4,0.2-1.8,0.9c1.9,1.9,4.5,2.2,6.7,3.1c-0.1,0.1-0.4-0.2-0.6,0.1c-0.1,0.2-0.2,0.4-0.3,0.6c0.4,0.3,0.8,0.2,1.1,0.2
				c-3.3,0.9-6.4,0-9.3-1.9c-0.3-0.2-0.6-0.4-0.9,0c-0.2,0.3-0.6,0.4-0.9,0.6c-0.1,0.1-0.2,0.1-0.2,0.3c0,0.1,0.4,0.6-0.2,0.4
				c-0.4-0.1-0.8-0.5-1.2-0.8c-0.6-0.5-0.4,0.4-0.7,0.4c0,0.7,0.6,1,1.1,1.3c1.9,1.1,4,2,6.2,2.4c0.6,0.1,1.2,0.1,1.8-0.2
				c2.4-0.7,4.8-1.6,7.1-2.8c2.3-1.2,4-3,4.9-5.5C709.8,207.7,710,207,710.2,206.2z"/>
                                    <path class="st122" d="M685.7,204.7c0.7,1.2,0.1,2-0.8,2.7c-0.3,0.2-0.7,0.5-0.6,0.9c0.1,0.8-0.6,1-1,1.4
				c-0.1,0.2-0.2,0.3-0.5,0.4c-0.7,0-1.4,0.1-2.1,0.1c-0.8,0-1.3,0.3-1.2,1.2c0.5,2.4,2.2,4.1,3.7,6c0.4,0.4,0.9,0.7,0.8,1.4
				c-0.2,0.1-0.4,0.2-0.6,0.2c-1.1-0.3-1.7-1.3-2.3-2c0.1,0.3,0.4,0.5,0.3,1c-0.1,0.1-0.2,0.1-0.4,0.1c-1.4-0.8-2-2.4-3-3.3
				c0.6,1.1,1.9,2,2.5,3.4c-0.1,0.1-0.2,0.2-0.4,0.2c-1.9-0.6-2.8-2.2-3.8-3.8c1.2,2.1,2.6,3.8,5.1,4.2c0.7,0.2,1.3,0.5,1.9,0.9
				c0.2,0.2,0.7,0.3,0.5,0.7c-0.2,0.3-0.6,0.2-0.9,0.1c-0.2,0-0.4,0-0.5,0c-0.4-0.3-0.9,0-1.2-0.2c-2.1-0.4-4.1-1.3-5.9-2.3
				c-0.8-0.4-1.4-1.1-1.9-1.8c-0.3-0.6,0-0.7,0.4-0.5c0.4,0.2,0.7,0.7,1,1c0.1,0.1,0.1-0.3,0-0.1c-1.7-1.4-2.1-3.3-2.2-5.3
				c2.1-1,4.1-2.2,6.4-2.4c0.9-0.1,1.7-0.3,2.5-0.6C683.7,207.7,685.1,206.7,685.7,204.7z"/>
                                    <path class="st123" d="M720.9,196.6c-0.4,0.2-0.7,0.5-0.9,0.9c-0.3,0.3-0.5,0.3-0.8,0c-0.1-0.2-0.3-0.2-0.5-0.2
				c0,0.4,0,1.1-0.1,1.1c-0.9-0.4-0.9,0.9-1.5,0.7c-0.5-0.7-0.8-1.6-1.1-2.4c-0.9-2.2-2.3-3.9-3.9-5.6c0.8-0.6,1.5,0.3,2.3,0.2
				c0.3-1,0.7-1.9,1.5-2.6c1.1-0.9-0.5-1.2-0.4-1.9c0-0.2,0.2-0.4,0.4-0.5c0.1,0,0.2,0,0.3,0c1.1,0.9,1.7,0.4,2-0.8
				c0.2-0.3,0.1-0.7,0.2-1.1c0.1-0.5,0.2-1,0.1-1.5c-0.1-0.5-0.1-0.9,0.5-1.2c1.2-0.3,1.3,0.6,1.6,1.4c0.2,2.6,0.1,5.3-0.2,7.9
				C720.2,193,720.5,194.8,720.9,196.6z"/>
                                    <path class="st124" d="M635,189.4c0.2-0.4,0.5-0.7,0.7-1.1c1.3-2.2,3-3.9,5.4-4.8c1.3-1.4,3-1.6,4.8-1.6c0.6,0,1.1,0.1,1.7,0
				c1.8,0,3.6-0.1,5.4,0c2.2,0.1,4.2,0.6,6.1,1.6c0.3,0.1,0.6,0.5,1,0.3c0.5,0,0.9,0.2,1.2,0.7c0,0.5,0,1.1-0.8,0.7
				c-0.4-0.2-0.8-0.4-1.2-0.6c-2.3-1.3-4.9-1.9-7.5-2c-4.1-0.1-8,0.8-11.6,2.8c-0.7,0.4-1.3,0.8-1.9,1.3c-2.7,2.1-3.6,4.8-2.8,8.1
				c0.6,2.4,1.6,4.6,2.9,6.6c0.4,0.6,0.9,1.2,1.5,1.6c1.9,1.6,4.1,2.7,6.6,3.2c0.3,0.2,0.6,0.1,0.9,0.2c0.3,0,0.5,0.1,0.8,0.1
				c4.6,0.3,8.7-0.8,11.9-4.4c0.3-0.3,0.5-1,1.2-0.5c0,0.6,0,1.2-0.5,1.7c-4,3.6-8.7,5.3-14.1,4.1c-4-0.9-7.6-2.7-9.9-6.3
				c-1.7-2.7-2.4-5.7-2.3-8.9C634.4,191.2,634.9,190.3,635,189.4z"/>
                                    <path class="st125" d="M715.7,154.3c0.1-0.1,0.2-0.1,0.4-0.2c-0.5-0.7,0.1-0.9,0.5-1.3c0.5-0.6,1.1-0.1,1.6,0
				c6,1.5,12,1.6,18-0.4c1.3-0.3,2.4-1.4,3.8-1.3c0.7,0.3,0.6,0.9,0.5,1.4c-0.9,0.8-2.1,1.1-3.2,1.6c-3,1.3-6.1,2.4-9.4,2.8
				c-3.6,0.4-6.9-0.1-10.2-1.7C717.1,155.1,716.3,154.9,715.7,154.3z"/>
                                    <path class="st48" d="M716.3,260.3c0.6,0.3,1.1-0.4,1.5-0.7c4.1-3.2,7.3-7,10-11.4c0.9-1.4,1.5-3.1,2.5-4.4
				c1.3-1.7,2.6-3.4,3.7-5.2c1.4-2.3,2.5-4.8,3.6-7.3c0.8-1.8,0.9-3.8,1.2-5.8c0.2-0.9,0.4-1.8,0.2-2.7c-0.1,0.2-0.2,0.3-0.2,0.5
				c-0.6,4-1.8,7.8-4,11.2c-0.2,0.3-0.3,0.7-0.5,1c0.3,0.2,0.3,0.4,0.2,0.7c-0.7,1.7-1.8,3.2-3,4.6c-0.6,0.8-1.2,1.5-1.7,2.3
				c-1.9,3-3.9,6-6.6,8.4c-1.8,1.6-3.8,3-6.2,3.5c-0.4,0.1-0.7,0.2-0.6,0.6c0.1,1-0.4,1.9-0.3,2.9
				C716.1,259.3,715.7,260,716.3,260.3z"/>
                                    <path class="st126" d="M727.9,181.4c0.2-0.3,0.6-0.4,0.9-0.6c0.1,1.9-0.2,3.8-0.4,5.8c-0.1,0.5-0.4,1,0.1,1.5
				c-0.3,1.7-1.1,3.3-1.8,4.8c-0.3,0.7-0.7,1.2-0.8,2c-1-1.8-2.1-3.4-3.1-5.5c0.9,0.2,1,0.8,1.6,1c-0.3-1.2-1.4-2-1.3-3.4
				c0.8,0.3,1.1,1.2,1.9,1.7c-0.4-1.4-1.8-2.2-2.1-3.5c-0.1-0.3-0.2-0.7,0.1-0.9c0.3-0.1,0.6,0.1,0.8,0.3c0.5,0.6,1,1.1,1.3,1.5
				c-0.7-0.8-1.6-1.7-2.4-2.7c-0.6-1.2-0.6-2.5-1-3.7c-0.2-0.8,0.2-0.8,0.7-0.4c0.6,0.4,1.2,1,1.9,1.3
				C725.4,181.2,726.6,181.8,727.9,181.4z"/>
                                    <path class="st127" d="M724.6,230.6c2.1-2.6,3.8-5.4,5.3-8.3c1.5-2.9,1.2-5.6,0-8.8c-1.5,2.1-2.9,4-4,6c-0.4,0.7-0.6,1.5-0.7,2.4
				c-0.1,1.5-0.4,3-0.5,4.5c-0.1,1.5-0.5,2.9-0.8,4.4C724.3,230.9,724.4,230.8,724.6,230.6z"/>
                                    <path class="st128" d="M668.7,182.9c0.5-0.1,1-0.2,0.9-0.9c0-0.4,0-0.8,0-1.2c-0.1-3.1,0.6-6.1,1.2-9.2c0-0.2,0.1-0.5,0.2-0.7
				c1-1.4,0.8-2.8,0.2-4.3c-0.8-2.4-1-4.9-0.7-7.7c0.3,2,0.5,3.8,0.8,5.5c0.1,0.4,0.1,0.8,0.2,1.1c0.9,3.5,1.4,7.1,2.5,10.6
				c0.4,1.2-0.2,2.4-0.5,3.5c-0.2,0.6-0.5,1.2,0.1,1.7c-0.5,0.7-1.2,1.2-1.6,2c-0.2,0.4-0.6,0.6-1.1,0.4
				C670.3,183.5,669.5,183.3,668.7,182.9z"/>
                                    <path class="st47"
                                          d="M716.1,262.6c0.4-0.3,0.7-0.6,1-0.9C716.7,262,716.4,262.2,716.1,262.6z"/>
                                    <path class="st48" d="M717.3,254.1c1.4-0.5,2.5-1.4,3.7-2.2c3-2,5.2-4.6,7.3-7.5c0.2-0.3,0.2-0.6,0.1-1c-0.8,0.5-1.5,1-2.3,1.5
				c-1.3,0.3-2.6,1-4.1,0.6c-1.9,0.9-3.5,2.3-5.5,2.9c-0.5,0.2-0.6,0.6-0.7,1.2c-0.1,1.3,0.4,2.6,0.3,3.9
				C716.2,254.3,716.5,254.4,717.3,254.1z"/>
                                    <path class="st129" d="M748.6,151.4c0.9,0.6,1.2,1.3,1.6,1.9c1.3,2.1,2.7,4.2,3.6,6.6c1.1,2.9,1,5.7-0.8,8.3
				c-1.1,1.6-2.3,3.2-3.5,4.9c-0.2-0.5,0.1-0.8,0.2-1.1c1.1-2.4,1.2-4.8,0.6-7.4c-0.2-1-0.5-2.1-0.7-3.1c-0.2-1-0.4-2-0.3-3
				c0.1-1.6-0.2-3.2-1-4.6c-0.2-0.4-0.7-0.9,0-1.2c0.6-0.3,0.8,0.3,1.1,0.7c0.9,1.5,1.9,3,2.7,4.6c1,1.8,1.6,3.7,1.4,5.9
				c0,0.4,0,0.8,0.1,1.2c0.9-2,0.4-4-0.4-5.9c-1-2.2-2.3-4.3-3.6-6.3C749.1,152.5,748.8,152.1,748.6,151.4z"/>
                                    <path class="st130" d="M743.5,135.1c-1-0.1-1.9-0.1-2.9,0.1c-3.3,0.5-6.5,1.5-9.8,2.2c-0.2,0-0.4,0-0.5,0.3
				c1.8-0.1,3.5-0.1,5.2-0.3c1.7-0.2,3.4-0.5,5.2-0.7c-1.2,1.3-2.7,1.6-4.2,1.9c-2.1,0.3-4.2,0.3-6.2,0.2c-3.7,0-7.4,0-11,0.1
				c0.3,0.4,0.8,0.3,1.2,0.3c1.3,0,2.5,0,3.8,0c0.5,0,1.1-0.1,1.5,0.4c-1.1,0.2-2.2,0-3.3,0c0.7,0.4,1.3,1,2.1,1
				c0-0.2-0.7-0.6,0.1-0.6c1.1,0,2.2,0.1,3.3,0.3c2.5,0.3,4.9,0.5,7.4,0.4c2.3-0.1,4.6-0.6,6.6-1.9c1-0.7,1.7-1.6,2.1-2.7
				C744.3,135.5,744.1,135.2,743.5,135.1z"/>
                                    <path class="st121"
                                          d="M707.9,206.2c-0.1,0-0.1,0.1-0.2,0.1C707.8,206.3,707.9,206.2,707.9,206.2z"/>
                                    <path class="st121" d="M710.4,205.3c0-0.2,0-0.4,0-0.5c-0.5-0.1-0.8,0.3-1.1,0.6c-0.4,0.3-0.9,0.6-1.4,0.8
				c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.3,0.1-0.4,0.2c-0.2,0.1-0.3,0.2-0.5,0.2c-1.5,0.7-2.9,1.1-3.6,1c1.1-0.2,2.3-0.5,3.6-1
				c0.2-0.1,0.3-0.2,0.5-0.2c0.1-0.1,0.3-0.1,0.4-0.2c0.1,0,0.1-0.1,0.2-0.1c0.9-0.5,1.7-1.1,2.5-2c0.2-1.6,0.4-3.2,0.6-4.8
				c-0.4-0.1-0.5,0.1-0.6,0.3c-1.6,3-4.4,4.4-7.5,5.2c-2,0.5-4.1,0.8-6.2,0.8c-1.9,0-3.9,0-5.8,0c0,0.4,0,0.8,0.5,0.9
				c0.5,0.1,1,0.4,1.5,0.3c0.4-0.2,0.8-0.1,1.3,0c1,0.1,2,0.2,3.1,0.2c1.2-0.2,2.4,0,3.7-0.1c1.7-0.2,3.3-0.5,4.9-1.2
				c0.5-0.2,1-0.4,1.5-0.7c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.1,0.1,0,0,0.1c-0.5,0.3-1,0.5-1.6,0.7c-2.8,1.1-5.6,1.3-8.6,1.2
				c-0.3,0-0.6,0.1-0.9,0.2c0.5,0.4,1,0.2,1.5,0.2c0.7,0,1.5,0,2.2,0c-1.2,0.2-2.3,0.5-3.6,0.7c1.3,0.5,2.3,0.6,3.6,0.4
				c0.7-0.2,1.4-0.1,2.2-0.1c0.4,0,0.5,0.2,0.6,0.5c0.1,0.1,0.3,0.3,0.5,0.2C706.1,208.6,708.6,207.6,710.4,205.3z"/>
                                    <path class="st121"
                                          d="M707.4,206.5c-0.2,0.1-0.3,0.2-0.5,0.2C707.1,206.6,707.2,206.6,707.4,206.5z"/>
                                    <path class="st121"
                                          d="M705.9,205.7c-1.6,0.6-3.2,1-4.9,1.2c-1.2,0.1-2.5-0.1-3.7,0.1C700.3,207.1,703.1,206.8,705.9,205.7z"/>
                                    <path class="st131" d="M672.6,199.9c1.9-0.3,3.7-0.1,5.3,0.8c1.4,0.8,3,1.1,4.4,1.9c0.6,0.4,1.6,0.6,1.5,1.4
				c0,0.8-0.9,1.2-1.6,1.6c-1.4,0.7-2.9,1-4.5,1c-0.7,0-1.4,0.1-1.9,0.5c-0.4,0.1-0.4-0.2-0.5-0.5c-0.8-2-1.4-4.1-3-5.7
				C671.8,200.5,671.7,200,672.6,199.9z"/>
                                    <path class="st132" d="M711.1,159.4c-1.2-0.4-2.3-1.1-3.6-1.5c-0.6-0.3-1.1-0.7-1.6-1.2c-1.5-1.4-2.8-3-3.8-4.7
				c-0.7-1.1-1.4-2.2-2.2-3.3c-1.4-1.8-3.2-2.5-5.4-2.2c-2.1,0.3-4.2,0.7-6.3,1.2c-5.9,1.7-11.9,3.2-17.9,4.4
				c-5.3,1.1-10.6,1.9-16,1.6c-0.6,0-1.2,0-1.7,0c-1.4,0.1-2.8,0.2-4.2,0.6c-1.3,0.4-2.5,1.1-3.4,2.2c2.1-1.5,4.5-2,6.9-2.2
				c1.5-0.1,3-0.1,4.5-0.1c2.8,0,5.6,0,8.4-0.5c7.2-1.3,14.2-2.9,21.2-4.9c2.8-0.8,5.7-1.6,8.7-1.8c1.8-0.1,3.2,0.5,4.4,1.8
				c1,1.1,1.9,2.3,2.7,3.6c1,1.5,2.2,2.9,3.3,4.4c0.6,1.1,1.6,1.7,2.6,2.3c1.9,0.8,3.8,1.8,5.9,1.9c-0.2-0.6-0.4-1.3-0.9-1.7
				C712.2,159.9,711.7,159.5,711.1,159.4z"/>
                                    <path class="st133" d="M709.1,212.8c-0.3,0-0.4,0.2-0.6,0.4c-2.5,2.2-5.1,4.3-8.2,5.8c-1.4,0.7-2.4,1.8-3.4,2.9
				c0.1,0.6,0.4,0.9,1.1,1c0.9,0.1,1.7,0.5,1.6,1.7c0,0.2,0.1,0.4,0.3,0.4c1.3,0,1.2,0.9,1.1,1.7c0,0.9,0.1,1.8,0.9,2.5
				c-0.1-1.6,0.5-3.1,0.4-4.6c0.3,1.2,0,2.3,0.2,3.5c0.3-0.5,0.2-1,0.2-1.6c0-1.7,0-3.5,0-5.2c0-0.4,0-0.8,0.1-1.4
				c0.3,0.5,0.2,0.9,0.5,1.1c0.6-0.2,0.7-0.8,0.9-1.2c0.6-1.2,1.3-2.3,2.2-3.3c0.1,0.3,0.1,0.6,0.2,0.8c0.2-0.2,0.3-0.4,0.5-0.6
				c0.6-1.2,1.1-2.4,2.1-3.3C709.4,213.2,709.3,213,709.1,212.8z"/>
                                    <path class="st134" d="M715.7,186.7c0.2,0.4,0.6,0.5,0.9,0.8c0.7,0.6,0.8,0.7,0,1.3c-0.7,0.5-1.2,1.2-1.6,2c-0.1,0.3-0.2,0.6,0,1
				c-1.1,0-1.9-0.7-2.8-0.7c-2.5-1.7-4.3-4.1-6.1-6.5c-0.3-0.4-0.6-0.8-0.9-1.1c0.5-0.9,1.5-0.6,2.1-0.5c2.8,0.4,5.4,1.5,7.8,2.9
				C715.4,186.1,715.6,186.4,715.7,186.7z"/>
                                    <path class="st135" d="M711.5,241.2c0.3-0.2,0.5-0.5,0.2-0.9c-0.7-1.2-1.3-2.4-2-3.6c-0.2-0.4-0.5-0.4-0.8-0.1
				c-0.7,0.7-1.5,1.4-2.4,1.8c-2.7,1.4-4.1,3.8-5.1,6.7c3.5-1,6.6-2.4,9.6-3.8C711.2,241.4,711.4,241.3,711.5,241.2z"/>
                                    <path class="st136" d="M703.8,176.8c0.7-0.2,1.3-0.4,2-0.7c0.3-0.2,0.6-0.2,0.6,0.3c-1.6,0.9-3.2,1.6-4.9,2.3
				c-0.8,0.3-1.6,0.5-2.4,0.1c-3.9-1.7-7.9-1.8-12-1.2c-3.1,0.5-6.1,1.5-8.9,3c-1.5,0.8-2.9,1.8-3.7,3.4c-0.1,0.3-0.3,0.5-0.5,0.7
				c-0.3,0.4-0.7,0.2-1,0c-0.3-0.2-0.1-0.5,0.1-0.8c0.8-1.3,1.8-2.5,3.2-3.3c5.1-3,10.6-4.2,16.4-4.2
				C696.4,176.9,700.1,176.7,703.8,176.8z"/>
                                    <path class="st137" d="M707.8,159c1.6,0.6,3.2,1.4,5,1.8c0.3,0.1,0.6,0.3,0.9,0.5c0.8,1.5,1.5,2.9,2.3,4.4c0.3,0.6,0.2,1-0.2,1.4
				c-0.9,0.8-1.7,1.7-2.7,2.4c-0.4,0-0.9-0.1-0.9-0.5c-0.1-1.1-0.9-0.8-1.5-0.8c-1.8,0.1-3.5-0.1-5.2-0.7c-0.4-0.1-0.7-0.2-1-0.5
				c-0.2-0.1-0.4-0.3-0.3-0.6c0.1-0.2,0.3-0.2,0.5-0.2c0.3,0,0.6,0,0.9,0.1c1.4,0.5,2.8,0.5,4.3,0.6c1.3,0,2.4,0,3.3-1.1
				c0.1-0.1,0.2-0.3,0.3-0.4c-0.1,0-0.2,0-0.3,0c-0.6,0-1.2,0-1.7-0.1c-0.4-0.1-0.9-0.1-0.8-0.6c0.1-0.4,0.5-0.6,0.9-0.6
				c0.4,0,0.8,0.2,1.3,0.1c-1.4-0.5-2.9-0.9-4.3-1.5c-0.6-0.2-1-0.6-0.9-1.3c0.1-0.5,0.6-0.1,0.9-0.3c0-0.5-0.6-0.6-0.8-0.9
				C707.1,159.5,707.1,159.2,707.8,159z"/>
                                    <path class="st138" d="M681,217.9c0.1,0,0.3,0,0.4,0c1-0.1,1.3,1.3,2.4,1.2c0.3,0,0.6-0.1,1,0c-1-1.3-2.4-2.3-3.2-3.7
				c0.1-0.2,0.2-0.4,0.4-0.4c1,0.1,1.3,1.1,1.9,1.7c1.1,1.1,2.1,2.2,3.6,2.7c-1.4-0.4-2.4-1.4-3.3-2.4c0-0.3,0.1-0.5,0.3-0.7
				c0.1-0.1,0.3-0.1,0.4-0.1c1.1,0.7,1.9,1.7,3.1,2.3c0.2,0.1,0.1-0.2,0-0.1c0,0-0.1,0-0.1,0c-0.3-0.1-0.5-0.3-0.5-0.6
				c0-0.3,0.2-0.5,0.4-0.7c0.8-0.3,1.2,0.4,1.8,0.6c0.5,0.1,0.9,0.5,1.3,0.4c-1.1-0.5-2.6-0.5-3.2-2.1c0.4-0.7,1.1-0.7,1.8-0.9
				c0.2-0.2,0.5-0.2,0.8-0.1c1.8,0.9,3.7,1.7,5.8,1.9c0.2,0,0.5,0.1,0.4,0.5c-2.5,1-5,2-7.6,2.7c-1.6,0.4-3.3,0.8-5,0.7
				c-0.3,0-0.6,0-0.8-0.2c0.2,0,0.4-0.1,0.6-0.1c-0.4-0.3-0.7-0.5-1-0.9c-0.3-0.3-1-0.1-1.2-0.6c-0.3-0.4-1.1-0.1-1.2-0.8
				c0.1,0,0.3-0.1,0.4-0.1C680.6,218,680.8,218,681,217.9z"/>
                                    <path class="st139" d="M664.8,207.1c0.3-0.4,0.6-0.6,1.1-0.3c0.6,0.4,1.3,0.6,2.1,0.6c1.1,0,1.3-0.2,1.1-1.3
				c-0.1-0.7-0.2-1.3-0.3-2c-0.2-1.6-0.5-3.2-0.8-4.8c-0.1-0.7,0-1.4,0.9-1.7c0.2,0.8,0.6,1.6,1.7,1.4c0.7-0.2,0.5-0.7,0.6-1.2
				c0.9,0.3,0.6,0.9,0.3,1.5c-0.3,0.2-0.6,0.4-0.8,0.5c-0.1,1.4,0.5,2.7,1.1,4c0.6,1.3,0.9,2.7,0.5,4.1c-0.1,0.5-0.2,1-0.7,1.2
				C668.9,209.3,666.7,208.6,664.8,207.1z"/>
                                    <path class="st140" d="M700.6,199.8c-2.2,2.2-4.9,3.3-8,3.4c-6.1,0.2-11.3-2.1-15.6-6.2c-2.2-2-3.1-4.9-3.7-7.7
				c-0.1-0.7-0.2-1.5,0.6-2.4c0.2,3.4,1.2,6.2,3,8.7c3.2,3.1,6.9,5.3,11.4,6c3.8,0.6,7.5,0.6,10.8-1.7c0.4-0.2,0.7-0.5,1.2-0.4
				C700.5,199.4,700.6,199.5,700.6,199.8z"/>
                                    <path class="st141" d="M710.4,180.3c-0.3-0.1-0.5-0.3-0.8-0.4c-0.3-0.2-0.7,0-0.9-0.3l0,0c-0.3-0.3-0.8,0-1.2-0.3
				c-0.5,0-0.9-0.1-1.7-0.2c0.9-0.7,1.7-1.2,2.5-1.6c1.6-0.7,3.1-1.4,4.7-2.2c0.7-0.3,1.2-0.6,1.9,0c0.1,0.1,0.5,0.1,0.7,0.2
				c0.1,0.3-0.1,0.4-0.3,0.5l0,0c-0.9,0.8-2.1,0.7-3.2,1.2c1.4-0.7,2.9-0.8,4.4-0.9c0.1,0,0.1-0.1,0.2-0.1c0.4-0.1,0.6,0.1,0.6,0.4
				c0,0.8-0.8,0.5-1.2,0.8c1.4,0.6,1.6,0.8,0.9,1.8c-1.7,0.3-3.5,0.7-5.1,1.2C711.4,180.7,710.8,181,710.4,180.3z"/>
                                    <path class="st142" d="M718.6,185.5c-0.1,0.2-0.2,0.3-0.2,0.5c-0.7,1.8-0.6,1.8-2.1,0.6c-0.1-0.1-0.2-0.1-0.4-0.2
				c-2.9-1.7-6.1-2.8-9.3-3.8c-0.5,0-0.9-0.1-1.4-0.1c-0.3-0.2-0.7,0-0.9-0.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.2-0.5-0.3-0.4-0.6
				c0.1-0.3,0.5-0.2,0.7-0.3c1.8-0.7,3.6-0.5,5.4-0.1c2.7,0.7,5.4,1.5,7.8,3.1C718,184.4,718.6,184.7,718.6,185.5z"/>
                                    <path class="st143" d="M628.9,160.8c-0.3-0.6-0.3-1.3-1.1-1.7c0.8-1,2-1.1,2.9-1.6c0.7-0.3,1.3-0.5,2-0.9
				c0.7-0.2,1.4-0.6,1.4-1.5c-0.2-0.8-0.7-0.6-1.2-0.4c-0.4,0.2-0.7,0.6-1.2,0.1c0-0.9,1.2-0.8,1.3-1.5c-0.4,0.4-0.9,1.1-1.6,0.9
				c-0.5-0.1,0-0.7,0-1c0.5-1.4,1.5-2.6,1.4-4.2c0.6-0.4,1.2-0.8,1.9-0.9c0.2,0.6,0.1,1.1,0.2,1.7c0.2,0.6-0.1,1.2,0.2,1.8
				c0.1,1,0.3,2.1,0.4,3.1c0.3,0.9-0.1,1.4-0.8,2c-1.5,1.3-3.3,2.3-4.9,3.5C629.6,160.6,629.3,160.8,628.9,160.8z"/>
                                    <path class="st144" d="M697.2,169c0.4-0.5-0.3-0.4-0.3-0.7c0-0.2-0.1-0.4,0-0.5c0.1-0.2,0.3-0.2,0.5-0.1c0.6,0.2,1.2,0.1,1.8,0.4
				c0.3,0.1,0.6,0,0.8-0.2c0.5-0.4,0.9-0.2,1.4,0c2.1,1,4.3,1.9,6.7,2.2c0.7,0.1,1.4,0.1,1.5,1c0.1,1-0.6,1.3-1.4,1.4
				c-1.8,0.5-3.5,0.2-5.1-0.6C701.1,170.8,699.2,169.8,697.2,169z"/>
                                    <path class="st145" d="M738.1,175.6c0-0.9-0.5-1.2-1-1.6c-0.7-0.5-1.4-0.8-2.3-0.9c-0.4-0.1-0.8-0.2-0.7-0.7
				c0-0.5,0.3-0.7,0.7-0.8c1.3-0.2,2.4,0,3.3,1c2.1,2.3,1,6.9-1.9,8c-0.8,0.3-1,0.2-1-0.6c0-1.4,0-2.8-0.4-4.2
				c-0.2-0.6,0.1-0.9,0.7-1C736.5,174.7,737.2,175.2,738.1,175.6z"/>
                                    <path class="st146" d="M711.6,196.5c0.1-1.4-0.6-2.6-1.5-3.6c-0.4-0.4-0.5-0.7,0.1-1c3.1,3,5,6.7,6.1,10.8
				c-0.6,0.7-1.3,1.2-2.3,0.8c-0.2-0.1-0.2,0.3-0.3,0.4c-0.8-1.4-1.7-2.8-1.8-4.5c-0.1-0.6,0.1-1.2-0.1-1.8
				C711.6,197.2,711.6,196.8,711.6,196.5z"/>
                                    <path class="st147" d="M671.4,209.1c0.7-1.8,0.7-3.6-0.2-5.4c-0.4-0.7-0.6-1.5-0.8-2.3c-0.1-0.5-0.3-1.1,0.3-1.6
				c0.3,0.4,0.7,0.2,1,0.2c0.3,0,0.6-0.2,1-0.1c-0.1,0.2-0.7,0.4-0.2,0.8c2,1.7,2.5,4.2,3.4,6.5
				C674.7,208.5,673.1,208.9,671.4,209.1z"/>
                                    <path class="st148" d="M686.3,222.8c-0.4,0.5-1,0.3-1.5,0.3c-0.6,0-1.1,0-1.7,0c-0.2,0.4,0.2,0.8-0.1,1.1c-1.9,0.1-3.7,0-5.5-0.7
				c-1.4-0.6-3-0.9-4.5-0.9c-0.9,0-1.5-0.3-2-0.9c0.7-0.7,1.4-1.3,2-2.1c0.5-0.5,0.8-0.4,1.3-0.1c2.3,1.6,4.7,2.8,7.5,3.2
				C683.4,223,684.8,222.8,686.3,222.8z"/>
                                    <path class="st149"
                                          d="M706.7,149.1c0.1,0.2,0.3,0.3,0.4,0.5C707,149.4,706.9,149.2,706.7,149.1z"/>
                                    <path class="st149" d="M707.8,146.8c-0.5-1.1-1-2.1-2.3-2.4c-0.6,0.3-0.9,0.7-1,1.3c0.4,1.4,1.3,2.4,2.2,3.4
				c0.2,0.1,0.3,0.3,0.4,0.5c0.1,0.1,0.2,0.2,0.2,0.3c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.2-0.3-0.3-0.4-0.5c-0.1-0.1-0.2-0.1-0.4-0.1
				c-0.7,0.5-0.9,1.2-0.7,2c0.9,0.9,2.3,1.1,3.2,2c-0.4-0.1-0.6-1-1.4-0.4c-0.6,0.8-0.2,1.5,0.1,2.3c0.9,1.4,2.2,1.7,3.7,1.7
				c-0.3-1-0.6-2-1-3C709.2,151.4,708.5,149.1,707.8,146.8z"/>
                                    <path class="st150" d="M703.3,142c0.4,0.2,0.7,0.8,1.4,0.8c0.6-0.2,0.3-0.6,0.1-0.9c-0.4-0.7-0.5-1.4-0.6-2.2
				c-0.3-0.5-0.6-1-1.3-0.8c-0.3-0.5-0.7-0.8-1.3-0.8c-3-0.1-6-0.2-8.9,0.2c1.3,0,2.7,0,4,0c0.9,0,1.4,0.5,1.6,1.5
				c0,0.6,0.5,0.8,0.9,1c1.8,1.2,3.4,2.6,4.8,4.3c0.2,0.2,0.4,0.6,0.8,0.4c0.3-0.4,0.6-0.8,0.9-1.2C705.3,143,703.8,142.8,703.3,142
				z"/>
                                    <path class="st151" d="M700.2,199.4c-4.6,3.6-9.7,3.4-14.9,1.7c-3-1-5.8-2.5-7.9-5c-0.2-0.2-0.3-0.5-0.5-0.7c0.3,0,0.6,0.4,0.9,0
				c1.9,2.3,4.5,3.8,7.3,4.8c0.3,0.1,0.6,0.1,0.8,0.1c4.9,1.5,9.7,1.3,14-1.8c1.6-1.1,2.8-2.6,3.5-4.3c0.3,0.8,0.4,1.6-0.3,2.4
				c-0.8,0.4-1,1.4-1.7,1.9C701.1,198.9,700.8,199.4,700.2,199.4z"/>
                                    <path class="st152" d="M671.4,199.3c-0.1-0.5,0.2-1.1-0.3-1.5c0-1.4,0-2.9,0-4.3c0-1.4,0-2.7-0.6-4c-0.2-0.5-0.2-0.6,0.5-1
				c0.1,0,0.1-0.2,0.1-0.3c0.5,0.3,0.5,0.8,0.6,1.2c0.4,2.6,1.5,4.9,2.7,7.1c0.4,0.8,1.2,1.4,1.8,2.3
				C674.5,198.9,673,198.9,671.4,199.3z"/>
                                    <path class="st153" d="M689.5,182.1c-0.1-0.1-0.2-0.1-0.4-0.2c0.6-0.1,0.9-0.9,1.6-0.5c0.3,0.2,0.7,0,0.9-0.3
				c0.1-0.2,0.1-0.4,0-0.5c-0.1-0.1-0.3-0.1-0.4-0.1c-2.1,0.4-4.2,0-6.3,0.2c-0.7,0-1.4-0.1-2.1,0.2c-0.2,0.1-0.5,0-0.6-0.2
				c1.5-0.9,3.3-1.1,5-1.4c3.3-0.7,6.5-0.3,9.7,0.8c0.3,0.1,0.7,0.2,0.9,0.5c-0.2,0.3-0.5,0.3-0.9,0.3c-0.3,0-0.7,0-0.9,0.3
				c-1.7,0.3-3.5,0.6-5.2,1C690.3,182.2,689.9,182.4,689.5,182.1z"/>
                                    <path class="st154" d="M717.1,179.2c0.6-0.8-0.3-0.9-0.6-1.2c-0.3-0.2-0.7,0.1-1.2-0.2c0.3-0.7,1-0.7,1.6-0.8
				c0.1,0,0.3,0,0.3-0.2c-0.1-0.2-0.3-0.3-0.4-0.4c-0.3-1.1-1.3-1.3-2.3-1.9c1.3-0.7,2.4-1.3,3.7-2c0.6,2.8,1,5.5,1.9,8.1
				c0.3,0.9,0.1,1.4-1,1.1c-0.6-0.1-1.2-0.1-1.6-0.5c-0.2-0.5,0-1.2-0.4-1.7C717,179.4,717,179.3,717.1,179.2z"/>
                                    <path class="st155" d="M676,263.6c0.5,0.1,0.9,0.2,1.3,0.6c0.6-0.3,0.8-1.1,1.4-1.5c0-0.7-0.6-0.8-1-1.1c-2-1.1-3.7-2.5-5.3-4.2
				c-0.4-0.2-0.7-0.6-1.2-0.6c0.2,0.4,0.3,0.9,0.3,1.4C671.7,261.1,673.3,262.8,676,263.6z"/>
                                    <path class="st156" d="M643.6,147.4c-1.4,0.9-3.5,0.7-4.1,2.8c-0.1,0.2-0.3,0.3-0.5,0.2c-0.1-0.1-0.2-0.2-0.2-0.3
				c0-0.2,0.1-0.5,0.1-0.7c0.2-1.1,0.2-2.1,0-3.2c-0.8,0-1.2,0.3-1.2,1.1c0,0.5-0.1,1.1-0.1,1.6c0.1,1.5,0.2,3.1,0.3,4.6
				c0.2,1.1,0.4,2.2,0.6,3.3c0.3,0.5,0,1,0.2,1.5c0,0.4-0.1,0.8,0.1,1.1c0.3,0.2,0.6,0.1,0.9,0c0.2,0,0.3,0,0.5-0.1
				c-0.2-0.3-0.9-0.2-0.8-0.7c0.1-0.8-0.3-1.8,0.4-2.5c0.3-0.1,0.5-0.3,0.5-0.6c-0.8-1.4-1.2-2.8-0.7-4.4c1.2-1.1,2.7-1.7,4.1-2.4
				c0.4-0.2,0.9-0.3,1.1-0.8C644.5,147.5,644.1,147.2,643.6,147.4z"/>
                                    <path class="st157" d="M658.6,186.2c-1,0.2-1.9-0.1-2.9-0.2c-0.5-0.1-1-0.1-1.5-0.1c-2.3,0-4.6,0.3-7,0.3
				c-0.8-0.1-1.8,0.2-2.4-0.7C649.5,183.4,654.1,183.3,658.6,186.2z"/>
                                    <path class="st158" d="M717.1,179.2c0,0.1,0,0.1,0,0.2c-0.8,1.3-2.2,1.1-3.4,1.3c1.3,0,2.6-0.7,3.7,0.2c0.5,0.4,1.2,0.3,1.8,0.4
				c0.9,0.3,0.9,0.2,1-0.8c0.4,0.8,0.6,1.7,0.5,2.6c-0.3-0.8-0.7-1.5-1.8-1.1c-2.2-0.3-4.3-0.1-6.5-0.4c1.8,0.2,3.4,0.9,4.9,1.8
				c0.5,0.3,1.2,0.5,1.3,1.3c0,0.3,0.6,0.5,0.1,0.8c-1.3-1.3-3-2.1-4.7-2.7c-1.3-0.5-2.6-0.9-4-1.3c-1.8-0.6-3.7-0.2-5.6-0.3
				c-0.2-0.3-0.5-0.2-0.8-0.3c-0.4-0.1-0.4-0.3-0.1-0.6c2.1-0.1,4.2,0,6.3,0.3c0.2-0.1,0.4,0,0.6-0.3c0.5,0.1,1,0,1.5-0.2
				C713.6,179.7,715.3,179.1,717.1,179.2z"/>
                                    <path class="st159" d="M740.5,152.7c-0.4-0.4,0-0.9-0.4-1.3c0-0.3,0.2-0.5,0.5-0.7c2.9-1.3,4.7-3.6,6-6.5
				c0.5-0.4,0.3-1.4,1.1-1.6c0.1,0.1,0,0.5,0.3,0.3c0.7-0.6,0.5-1.5,0.6-2.3c0.4,2.4,0.2,4.6-1.3,6.6
				C745.6,149.6,743.2,151.3,740.5,152.7z"/>
                                    <path class="st160" d="M670.5,187.9c-0.6,0.5-1.1,0-1.6-0.2c-1.9-0.5-3.5,0.9-3.2,2.9c0.3,1.6,0.1,3.3,0.1,4.9
				c0,0.7-0.5,1.3-1.1,1.6c-0.3-2.1-0.5-4.1-1-6.2c-0.5-2-0.5-2.6,2.1-3.7c0.2-0.1,0.4-0.1,0.6-0.1c0.4-0.2,0.8,0,1.2-0.2
				c0.2,0,0.4,0,0.7,0c0.3,0.2,0.6,0,0.8,0.2C669.6,187.5,670,187.7,670.5,187.9z"/>
                                    <path class="st161" d="M716.3,155.5c0.1,0.5,0.6,0.9,0.3,1.5c-0.6,0.4-1-0.1-1.4-0.4c0.8,0.8,2.1,0.8,2.8,1.9
				c-0.1,0.2-0.4,0.2-0.6,0.3c-0.4,0.3-0.7,0-1.1,0c0,0-0.2-0.2-0.2,0.1c0,0.1,0.1,0.2,0.1,0.3c-0.1,0.3-0.1,0.6,0.2,0.9
				c0.7,0.7,1.4,1.3,2.3,1.8c0.3,0.2,0.6,0.4,0.2,0.8c-2.2-1.1-3.7-2.9-4.7-5.1c-0.7-1.5-1.6-2.9-2.1-4.4c-0.1-0.2,0-0.4,0.2-0.4
				c0.4,0,0.6,0.3,0.7,0.6C714,154.1,715.1,154.8,716.3,155.5z"/>
                                    <path class="st162" d="M706.4,176.5c-0.1-0.4-0.4-0.3-0.6-0.3c3.9-2.2,7.6-4.7,11.4-7c0.5-0.2,0.8-0.5,1.2-0.8
				c0.3-0.2,0.7-0.5,0.8,0.2c-1.7,1.8-3.6,3.2-5.7,4.3C711.1,174.1,708.7,175.3,706.4,176.5z"/>
                                    <path class="st163" d="M719.2,168.6c-0.3-0.4-0.6-0.1-0.8,0.1c-0.4,0.3-0.7,0.5-1.2,0.4c2.5-2.5,5.3-4.7,8.2-6.9
				c0.7-0.6,1-0.5,1.3,0.2c0.3,0.6-0.1,0.8-0.4,1c-1.9,1.3-3.8,2.6-5.7,4C720.1,167.9,719.7,168.4,719.2,168.6z"/>
                                    <path class="st164" d="M708.1,172.4c0.2-0.2,0.5-0.4,0.7-0.5c0.5-0.3,0.5-0.7,0.4-1.1c-0.1-0.4-0.5-0.4-0.8-0.4
				c-2.5-0.1-4.7-1.2-7-2.1c-0.1,0-0.2-0.2-0.3-0.3c-0.1-0.2-0.2-0.4,0-0.6c2,0.7,4,1.6,6.2,1.9c1.5,0.2,2.7-0.1,3.4-1.5
				c0.5,0,0.9,0,1.6-0.1c-0.2,0.8,0.1,1.4,0.8,1.7c-0.8,0.7-1.6,1.5-2.6,2c-0.3-0.1-0.5,0.1-0.6,0.4c-0.3,0.4-0.7,0.5-1.1,0.8
				C708.3,173.1,708.4,172.3,708.1,172.4z"/>
                                    <path class="st165" d="M712.8,159.6c0,0.3,0,0.7-0.4,0.5c-1.7-0.5-3.4-1.1-4.8-2.2c-0.1-0.7,0-1.4,0.1-2.1c1.5,0.2,2.8,0.8,4,1.5
				C712,158,712.4,158.8,712.8,159.6z"/>
                                    <path class="st166" d="M671,250.9c0,0.2,0.1,0.6-0.3,0.4c-0.4-0.2-0.7-0.5-1-0.8c-0.4-0.3-0.7-0.8-1.3-0.8
				c-1.6-1.5-2.3-3.6-3-5.7c0.4,0.4,0.8,0.8,1.2,1.2c0.4,0.4,0.9,0.7,1.4,1.1c0.5,0.4,1,0.8,1.4,1.2c0.5,0.5,0.6,1.2,0.9,1.8
				C670.6,249.8,670.6,250.4,671,250.9z"/>
                                    <path class="st167" d="M634.1,176.2c-0.1-0.9-0.1-1.9-0.2-2.8c0-0.7,0-1.3,0.6-1.8c1-0.2,0.7,0.7,1,1.1c0.6,2.4,1,4.9,1.6,7.3
				c-0.1,0.1-0.2,0.2-0.4,0.2c-1.2-0.7-1.8-1.9-2.3-3.1C634.4,176.7,634.3,176.5,634.1,176.2z"/>
                                    <path class="st168" d="M686.2,258.6c1.3,0.4,2.5,0.9,4.2,0.9c-0.8-1.4-0.3-3.3-2.5-3.5c-1-0.1-1-0.3-1.5,0.7
				c-0.2,0.4-0.3,0.8-0.5,1.2C685.8,258.3,685.9,258.5,686.2,258.6z"/>
                                    <path class="st169" d="M739.3,169.8c-0.4,0.2-0.5,0.5-0.6,0.9c-1.2-0.7-2.5-1.2-4-1.2c-0.6,0-0.8-0.3-0.6-0.8
				c0.2-0.8,0.5-1.7,1.2-2.4C736.7,167.4,738.2,168.4,739.3,169.8z"/>
                                    <path class="st170" d="M666.6,250.2c0.8,1.6,1.9,2.9,3.1,4.1c1.2,0.1,1.3,0,1.1-1.4c-0.8-1.1-1.9-1.9-2.9-2.9
				c-0.7-0.7-1.4-1.4-1.8-2.3c-0.3-0.1-0.4,0-0.3,0.3C665.9,248.7,666.2,249.5,666.6,250.2z"/>
                                    <path class="st171" d="M736.7,144.1c0.9-0.4,1.8-0.8,2.6-1.5c-1.3,0.1-2.4,1-3.7,1.2c-1.3,0.3-2.5,0.6-3.8,0.6
				c-1.3,0-2.4-0.4-3.7-0.4c0.3,0.3,0.7,0.5,1.1,0.7c1.1,0.6,2.3,0.6,3.4,1.2c1.3-0.2,2.4-0.5,3.5-1.1c-0.1-0.1-0.5-0.1-0.3-0.3
				C736,144.3,736.4,144.2,736.7,144.1z"/>
                                    <path class="st172" d="M703.9,139.8c-0.3,0.8,0.2,1.4,0.4,2c0.1,0.3,0.6,0.4,0.3,0.8c0.6,1.3,1.6,2.3,2.9,2.9
				c-0.3-1.5-0.3-3-0.9-4.4C705.9,140.4,705.3,139.4,703.9,139.8z"/>
                                    <path class="st173" d="M671,184.8c-0.7,0.5-1.2,0.3-1.8,0.2c-2-0.3-4-0.3-6,0.6c-0.3,0.1-0.7,0.5-1,0c-0.2-0.3,0.2-1.4,0.6-1.5
				c0.6-0.2,1.1-0.3,1.7-0.4C666.7,183.5,668.7,184,671,184.8z"/>
                                    <path class="st174" d="M710.4,205.3c-1.3,1.1-2.8,2.1-4.4,2.8c-1,0.4-2,0.9-3.2,0.8c-0.1,0-0.2,0-0.3,0c-1.6,0.3-3.1,0.2-4.7,0
				c-1.2,0-2.3-0.3-3.4-0.7c-0.3-0.1-0.4,0-0.3,0.3c0.8,0.5,1.7,0.7,2.6,0.9c0.7-0.1,1.3,0,2,0.1c1.2,0.2,2.5,0.2,3.7,0
				c2.9-0.4,5.4-1.5,7.7-3.4C710.5,206,710.5,205.7,710.4,205.3z"/>
                                    <path class="st175" d="M696.4,217.3c-0.1-0.1-0.2-0.2-0.3-0.2c-2.3-0.1-4.3-1-6.3-2c-0.1,0-0.2,0-0.3,0c-1.8-1.2-3.1-2.8-4.3-4.6
				c1.2,0.9,2.1,2.1,3.4,2.8c2.7,2.1,5.7,3.3,9.1,3.5C697.3,217.1,696.9,217.3,696.4,217.3z"/>
                                    <path class="st176" d="M743.8,133.4c-1.2-0.3-2.5-0.5-3.7-0.6c-1.4-0.1-2.7-0.1-4,0.3c-0.2,0.1-0.5,0.2-0.5,0.5
				c0,0.3,0.3,0.3,0.6,0.3c0.3,0,0.7,0,1,0c1.4-0.2,2.8-0.1,4.2,0c1,0.1,2,0,3,0C744.3,133.5,744,133.4,743.8,133.4z"/>
                                    <path class="st53" d="M682.4,263.1c0.2,0.1,0.4,0.3,0.5,0.4c0.2-0.2,0.4-0.3,0.6-0.4c-0.3-0.1-0.5-0.2-0.8-0.3
				C682.7,262.9,682.5,263,682.4,263.1z"/>
                                    <path class="st177" d="M661.2,201.6c-0.6-0.1-0.8,0.5-1.1,0.8c-2.2,2.3-4.7,3.8-7.9,4.3c-1.4,0.2-2.8,0.3-4.2-0.1
				c0.4-0.2,0.9,0.1,1.3-0.4c0.9,0,1.8,0,2.8-0.1c2.8-0.3,5-1.6,7.1-3.4c0.6-0.5,1.1-1.2,1.8-1.7C661,201.2,661.2,201.3,661.2,201.6
				z"/>
                                    <path class="st178" d="M725,195.5c-0.2,0-0.4-0.2-0.5,0c-0.4,1.2-1.1,2.2-1.3,3.5c-0.3-2.3-0.7-4.6-0.6-7.3
				C723.8,192.9,724.2,194.3,725,195.5z"/>
                                    <path class="st179" d="M663.5,237.7c-0.4-1-1-1.9-1.1-2.9c0-0.2-0.1-0.3-0.1-0.5c-0.2-0.3,0-0.7-0.2-1c-0.5-1.9-0.2-3.8,0.1-5.6
				c-1.2,2.7-1.7,5.4-0.2,8.2c0.5,0.9,1.2,1.8,1.2,3c0.2,0.4,0.6,0.2,0.9,0.3C664.1,238.6,663.7,238.2,663.5,237.7z"/>
                                    <path class="st180" d="M717.1,199c0.4-0.4,0.4-1.2,1.4-1c0.3,0.1,0-0.6,0.3-0.8c0.2,2.3,0.3,4.6-0.1,7
				C717.9,202.5,717.5,200.8,717.1,199z"/>
                                    <path class="st181" d="M727.9,147.9c-1.7,0.4-3.5,0.2-5.1,0.7c-2,0.5-3.8-0.1-5.7-0.7c0-0.6,0.3-0.4,0.6-0.3
				c0.3,0,0.5,0.1,0.8,0.1c0.4,0.2,0.8,0,1.2,0.2c0.5,0,0.9,0,1.4,0c0.8-0.6,1.8-0.4,2.7-0.3c0.5,0.1,0.9,0.3,1.4,0.1
				C726.2,147.5,727.1,147.9,727.9,147.9z"/>
                                    <path class="st182" d="M687.7,184.4c1.5-1.1,3.2-1.3,4.9-1.5c2.3-0.3,4.6-0.4,6.9-0.6c0.3,0,0.6,0.1,0.8-0.3
				c0.3,0.1,0.3,0.4,0.3,0.6c-2.5,0.3-5.1,0.6-7.6,0.8C691.1,183.6,689.4,184.1,687.7,184.4z"/>
                                    <path class="st183" d="M748.6,159.8c-0.8-0.5-0.9-1.2-1-1.7c-0.2-1-0.5-2.1-0.8-3.1c0-0.1-0.1-0.3-0.1-0.4c0-0.3,0.1-0.6,0.4-0.7
				c0.3-0.1,0.5,0.1,0.7,0.4c0.5,0.9,0.8,1.9,0.9,2.9C748.7,157.9,748.6,158.7,748.6,159.8z"/>
                                    <path class="st184" d="M704.4,138.3c-0.2,0-0.4,0-0.6,0c-0.6-0.2-0.8,0.3-1,0.6c0.4,0.3,0.8,0.6,1.1,1c0.4-0.1,0.6,0.1,0.9,0.3
				c0.6,0.4,1.2,0.7,1.8,1.1C707,138.9,706.7,138.5,704.4,138.3z"/>
                                    <path class="st185" d="M672.3,256.4c0.4-0.1,0.9,0.2,1.1-0.4c0.2-0.5-0.1-0.8-0.5-1.1c-0.7-0.7-1.3-1.4-2.1-2
				c-0.3,0.6,0,1.5-1.1,1.4C670.4,255.1,671.4,255.7,672.3,256.4z"/>
                                    <path class="st186" d="M721.8,223.7c0.2,0.1,0.3,0.3,0.2,0.5c-0.3,1-0.3,2.1-0.7,3.1c-0.8,2.2-1.6,4.3-2.7,6.4
				c-0.2,0.4-0.5,0.8-0.4,1.4c2-2.4,4-7.9,4.2-11.9C722.1,223.2,721.9,223.4,721.8,223.7z"/>
                                    <path class="st187" d="M706.6,182.7c0.3,0,0.6,0,0.9,0c3,0.8,5.9,1.9,8.5,3.8c-0.1,0.1-0.2,0.2-0.3,0.3c-2.8-1.8-5.9-3.1-9.3-3.5
				c-0.4-0.1-1-0.4-1.3,0.3c-0.4-0.2-0.6-0.5,0-0.6C705.6,182.7,706.2,183.1,706.6,182.7z"/>
                                    <path class="st188" d="M703.8,176.8c-0.1,0.1-0.2,0.2-0.4,0.2c-3.5,0.1-6.9,0.2-10.4-0.3c-0.1,0-0.3-0.1-0.4-0.2
				c0.3-0.2,0.7,0,0.9-0.3c3,0.5,6,0.2,9.1,0.3C702.9,176.9,703.4,176.6,703.8,176.8z"/>
                                    <path class="st189"
                                          d="M693.2,222.2c-0.6-0.4-1.3-0.5-2-0.5c2-0.9,4-1.9,5.9-3.1C696.1,220.1,694.7,221.2,693.2,222.2z"/>
                                    <path class="st190" d="M672.8,211.2c0.2,0.5,0.3,1,0.5,1.5c0.4,1.5,1,3,2.2,4.2c-0.9-0.1-1.2-0.6-1.7-1c-0.3-0.3-0.2,0.1-0.3,0.2
				c-0.8-1.3-1.2-2.7-1.2-4.1C672.2,211.5,672.3,211.2,672.8,211.2z"/>
                                    <path class="st191" d="M650.6,232.7c-0.4-0.7-0.9-1.4-1.2-2.1c-0.3-0.8-0.5-1.5-0.3-2.4c0.3-1.2,0.1-2.4,0.2-3.6
				c0-0.8-0.1-1.6,0.2-2.4c0.4,0.3,0,0.9,0.3,1.3c0.1,0.7,0,1.5-0.1,2.2c-0.4,2.3-0.1,4.4,1.2,6.4c0.2,0.2,0.3,0.5,0.4,0.8
				C651.1,232.7,650.9,232.7,650.6,232.7z"/>
                                    <path class="st174"
                                          d="M710.4,204.2c-2.4,2-5.2,2.9-8.1,3.7c3.1,0.1,5.8-1.1,8.1-3.1C710.5,204.6,710.5,204.4,710.4,204.2z"/>
                                    <path class="st192" d="M722.1,146.5c-0.7,0.5-1.6,0.2-2.3,0.7c0.4,0.6,1.1,0.3,1.4,0.7c1.4,0,2.7,0.3,4.1-0.2
				c-1.1-0.2-2-0.6-2.9-1.2C722.3,146.4,722.2,146.4,722.1,146.5z"/>
                                    <path class="st193" d="M722.9,246.1c1.2-0.1,2.4-0.3,3.3-1.1c-0.9,0.1-1.7-0.1-2.3-0.8c-0.7,0.3-1.1,1.1-1.8,1.4
				C722.1,246.1,722.5,246.2,722.9,246.1z"/>
                                    <path class="st194" d="M628.9,160.8c2-1.5,4-2.7,6-4.2c0.6-0.5,0.8-1,0.8-1.7c0.4,0.5,0.2,1,0.2,1.5c-1.9,1.5-3.8,2.9-5.9,4.2
				C629.7,160.7,629.4,161.4,628.9,160.8z"/>
                                    <path class="st195" d="M727.9,181.4c-0.8,0.4-1.2,0.4-2.2,0.1c-1.4-0.4-2.5-1.2-3.6-2.2c-0.5-0.4-0.4,0.1-0.5,0.3
				c-0.4-0.4-0.4-0.8,0.1-1.2c0.5,0.4,1,0.7,1.5,1.1C724.7,180.7,726.2,181.4,727.9,181.4z"/>
                                    <path class="st183" d="M747.2,158.4c-0.7-0.4-1.1-0.7-1.5-1c-0.9-0.7-0.9-0.7-0.2-1.5c0.7-0.7,0.9-0.7,1.2,0.3
				C746.8,156.8,746.9,157.5,747.2,158.4z"/>
                                    <path class="st196" d="M704.6,142.7c-0.8-0.4-1.3-1.1-2.4-1.5c1.1,1.4,2.4,2.2,3.4,3.3c0.9,0.7,1.6,1.6,2.3,2.4
				c0-0.4,0.1-0.8-0.3-1.2C706.4,144.7,705.5,143.7,704.6,142.7z"/>
                                    <path class="st168" d="M688.4,255.7c0.1,0,0.3-0.1,0.4-0.2c0.3-0.5-0.1-0.9-0.2-1.4c-0.1-0.4-0.4-0.6-0.7-0.7
				c-0.4,0-0.5,0.1-0.6,0.3C686.8,254.6,687.5,255.7,688.4,255.7z"/>
                                    <path class="st197"
                                          d="M714.2,238.3c1.3-1.9,2-3.8,1.8-5.1c-0.6,1.6-1.4,3.1-2.2,4.5C714.2,237.8,714.2,238,714.2,238.3z"/>
                                    <path class="st198" d="M711.6,157.3c-1.4-0.4-2.7-0.9-4-1.5c-0.3-0.4-0.8-0.6-1.1-1c0.4-0.3,0.7,0.2,1.1,0.2
				c1.1,0.9,2.5,1.2,3.7,1.7C711.6,156.8,711.6,157,711.6,157.3z"/>
                                    <path class="st199"
                                          d="M669.3,243.6c-0.9-1.7-1.4-3.4-1.8-5.3c0.8,1.5,1.6,3,2.1,4.7C669.4,243.1,669.4,243.4,669.3,243.6z"/>
                                    <path class="st200" d="M669.1,211.2c0,1.7,0.1,3.5-0.3,5.2c-0.1,0.6-0.2,1.2-0.9,1.8c0.5-2.4,1-4.7,0.9-7
				C668.9,211.2,669,211.2,669.1,211.2z"/>
                                    <path class="st201" d="M709.8,180.6c0,0-0.1,0.1-0.1,0.1c-2-0.1-4-0.1-6.1-0.2c-0.1,0-0.1-0.1-0.2-0.2c1.1-0.4,2.3-0.3,3.4-0.3
				c0.4,0.2,0.8,0,1.2,0.2C708.7,180.2,709.2,180.7,709.8,180.6z"/>
                                    <path class="st202" d="M722.7,183.4c1.4,1,2.3,2.3,3.5,3.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.9-0.9-1.9-1.8-2.8-2.7
				c-0.3,0.3-0.1,0.6-0.2,0.8C722.5,184.7,722.7,184,722.7,183.4z"/>
                                    <path class="st203" d="M716.8,162.4c0.7,0.6,1.4,1.1,2.1,1.7c0.2,0.1,0.4,0.3,0.3,0.6c-0.1,0.3-0.5,0.5-0.8,0.5
				c-0.3,0.1-0.4-0.1-0.6-0.3C717.4,164.1,717.2,163.2,716.8,162.4z"/>
                                    <path class="st204"
                                          d="M703.8,173.1c1.2,0.3,2.2,0.5,3.3,0.4C705.7,175.6,705.4,175,703.8,173.1z"/>
                                    <path class="st205" d="M729,163.7c-0.5-0.6-0.2-1.4-0.8-1.8c0.4-0.3,0.7-0.4,1-0.4c0.5,0,0.2,1,0.9,0.7
				C730.1,162.9,729.4,163.1,729,163.7z"/>
                                    <path class="st206" d="M700.2,199.4c0.9-1,1.9-1.8,2.6-2.9c0.1-0.2,0.3-0.2,0.4,0.1c-0.7,1.2-1.4,2.4-2.6,3.2
				C700.5,199.6,700.4,199.5,700.2,199.4z"/>
                                    <path class="st207" d="M729.7,187.2c0.6,1,0.9,2.1,1.1,3.3c-0.3,0.2-0.2,0.6-0.3,0.9c-0.4-1.2-0.8-2.3-1.2-3.5
				C729.6,187.8,729.6,187.5,729.7,187.2z"/>
                                    <path class="st154"
                                          d="M716.6,176.5c-1.5,0.5-3.2,0.5-4.7,1.1c1-0.9,2.3-1.1,3.5-1.4C715.7,176.7,716.2,176.3,716.6,176.5z"/>
                                    <path class="st208" d="M632.9,149.1c0.4,0.7,0.2,1.4-0.1,2.1c-0.3,0.8-0.7,1.5-1.1,2.3c-0.2,0-0.4,0-0.2-0.3
				c0.2-0.9,0.7-1.5,0.9-2.4c0.1-0.5,0.5-1-0.1-1.4C632.5,149.1,632.7,149,632.9,149.1z"/>
                                    <path class="st91" d="M684.8,230.1c0.3,0.1,0.8-0.1,0.8,0.4c0,0.3-0.3,0.5-0.7,0.4c-0.6-0.2-1.2,0.1-1.8,0.3
				c-0.6,0.1-1.2,0.4-1.8-0.2c0,0,0.1-0.1,0.1-0.1l0.1,0c0.4-0.2,0.9,0,1.3-0.2c0.1-0.1,0.1-0.1,0.2,0c0.3-0.2,0.7,0,1-0.3l0,0
				C684.2,230.2,684.6,230.4,684.8,230.1L684.8,230.1z"/>
                                    <path class="st209" d="M662.7,202.4c0.4,0.1,0.6,0,0.8-0.3c0.2-0.3,0.3-0.8,0.8-0.9c-0.1,1.6-0.3,1.8-1.9,1.9
				C662.4,202.8,662.6,202.6,662.7,202.4z"/>
                                    <path class="st210"
                                          d="M660.9,180.9c-0.5-1-0.6-2.1-0.9-3.1c0.7,0.6,1.1,1.3,1.2,2.2C660.8,180.2,661,180.6,660.9,180.9z"/>
                                    <path class="st211" d="M709,142.1c0,0.5,0,1.1,0.2,1.5c0.1-0.3,0.1-0.6,0.2-0.8c1,0.1,1.6,0.9,2.5,1.1
				C711.2,142.8,710.1,142.4,709,142.1z"/>
                                    <path class="st212" d="M720,144.9c0.8,0.9,1.5,1.2,2.1,1.6c0.1,0,0.2,0,0.3,0c0.1-0.2,0.4-0.2,0.6-0.3c-0.4-0.4-0.9-0.4-1.4-0.6
				C721.1,145.4,720.7,145.2,720,144.9z"/>
                                    <path class="st125" d="M713.1,153.2c-0.4,0.1-0.5-0.8-0.9-0.2c-0.4-0.3-0.1-0.9-0.5-1.3c0.7,0.2,1.3,0.5,1.7,1.1
				C713.2,152.9,713.1,153,713.1,153.2z"/>
                                    <path class="st210" d="M661.2,184.4c-0.4-0.2-0.8-0.5-1.2-0.7c0,0,0,0,0,0c0.6-0.1,1.4,0,1.3-1
				C661.9,183.2,661.2,183.8,661.2,184.4z"/>
                                    <path class="st115"
                                          d="M733.4,179.7c-0.5-0.7-0.2-1.6-0.2-2.4C733.6,178.1,733.5,178.9,733.4,179.7z"/>
                                    <path class="st117"
                                          d="M711.7,197.6c0.3,0.6,0.2,1.2,0.1,1.8C711.6,198.8,711.5,198.2,711.7,197.6z"/>
                                    <path class="st133"
                                          d="M702.3,231.4c-0.1-0.6-0.2-1.3,0.2-1.8C702.6,230.2,702.6,230.8,702.3,231.4z"/>
                                    <path class="st110" d="M666.1,247.6c-0.1,0.1-0.2,0.2-0.3,0.3c-0.2-0.1-0.2-0.3-0.3-0.5c0-0.2,0-0.4,0.2-0.5
				c0.2,0,0.3,0.2,0.3,0.4C666.1,247.4,666.1,247.5,666.1,247.6z"/>
                                    <path class="st213"
                                          d="M635.2,151.7c-0.3-0.6-0.3-1.2-0.2-1.8C635.3,150.5,635.3,151.1,635.2,151.7z"/>
                                    <path class="st214"
                                          d="M658.4,237.4c-0.4-0.3-0.5-1-1.2-0.5C657.4,237.3,657.9,237.4,658.4,237.4z"/>
                                    <path class="st210"
                                          d="M661.8,181.7c0.3,0.4,0.3,0.9,0.3,1.4C661.6,182.8,661.8,182.2,661.8,181.7z"/>
                                    <path class="st177"
                                          d="M647.8,206c0.5,0,1,0,1.5,0.2C648.8,206.3,648.2,206.4,647.8,206z"/>
                                    <path class="st207"
                                          d="M729.7,185.5c0,0.5,0,1,0,1.5C729.2,186.5,729.3,186,729.7,185.5z"/>
                                    <path class="st133"
                                          d="M702,233.4c-0.1-0.5-0.2-1.1,0.2-1.5C702.3,232.4,702.3,232.9,702,233.4z"/>
                                    <path class="st121"
                                          d="M690.7,205.6c-0.5,0.1-1.1,0.2-1.5-0.3C689.7,205.3,690.2,205.3,690.7,205.6z"/>
                                    <path class="st158"
                                          d="M707.5,179.4c0.4-0.1,0.8-0.1,1.2,0.3C708.3,179.7,707.9,179.8,707.5,179.4z"/>
                                    <path class="st126"
                                          d="M729,187.3c-0.2,0.2-0.2,0.5-0.5,0.5c0-0.2,0-0.4,0-0.6C728.7,187.1,728.9,186.9,729,187.3z"/>
                                    <path class="st144"
                                          d="M709.8,171.8c-0.1-0.5,0-0.6,0.6-0.4C710.2,171.6,710,171.7,709.8,171.8z"/>
                                    <path class="st191"
                                          d="M649,232.5c0.4-0.1,0.8,0,1.2,0.2C649.7,232.8,649.3,232.9,649,232.5z"/>
                                    <path class="st106"
                                          d="M667.6,187c-0.4,0.3-0.8,0.2-1.2,0.2C666.8,187,667.2,186.9,667.6,187z"/>
                                    <path class="st89"
                                          d="M682.8,230.7c-0.4,0.4-0.8,0.3-1.3,0.2C681.9,230.7,682.3,230.7,682.8,230.7z"/>
                                    <path class="st215" d="M636.4,192.3c-0.1,0-0.3-0.1-0.3-0.3c0-0.2,0.2-0.3,0.4-0.3c0.2,0,0.2,0.1,0.2,0.3
				C636.8,192.2,636.6,192.3,636.4,192.3z"/>
                                    <path class="st178"
                                          d="M723.3,199.2c0.3,0.4,0.3,0.8,0.2,1.2C723.2,200.1,723.2,199.6,723.3,199.2z"/>
                                    <path class="st158"
                                          d="M708.1,180.2c-0.4,0-0.8,0.1-1.2-0.2C707.3,180,707.8,179.9,708.1,180.2z"/>
                                    <path class="st138"
                                          d="M681.2,220.3c0.4-0.1,0.9-0.2,1.2,0.2C682,220.6,681.6,220.5,681.2,220.3z"/>
                                    <path class="st154"
                                          d="M715.4,176.2c0.1-0.2,0.2-0.3,0.3-0.5c0.2,0,0.3,0.2,0.2,0.4C715.8,176.2,715.6,176.2,715.4,176.2z"/>
                                    <path class="st115"
                                          d="M733.1,176.8c-0.3-0.2-0.3-0.6-0.2-0.9C733.1,176.1,733.2,176.5,733.1,176.8z"/>
                                    <path class="st188"
                                          d="M703.2,176.5c0.3-0.2,0.6-0.3,0.9-0.3C703.8,176.6,703.5,176.6,703.2,176.5z"/>
                                    <path class="st158"
                                          d="M708.7,179.7c0.3,0,0.7,0,0.9,0.3C709.3,180,708.9,180,708.7,179.7z"/>
                                    <path class="st210"
                                          d="M661.5,180.8c0.3,0.2,0.3,0.6,0.3,0.9C661.4,181.5,661.5,181.2,661.5,180.8z"/>
                                    <path class="st210"
                                          d="M661.2,182.1c-0.2-0.3-0.3-0.6-0.2-0.9C661.3,181.4,661.3,181.7,661.2,182.1z"/>
                                    <path class="st187"
                                          d="M704.3,182.3c0.3,0.1,0.6,0,0.9,0.3C704.9,182.7,704.5,182.7,704.3,182.3z"/>
                                    <path class="st106"
                                          d="M669.1,187.3c-0.3,0-0.6,0.1-0.8-0.2C668.6,187,668.8,187,669.1,187.3z"/>
                                    <path class="st37"
                                          d="M743.9,236.7c-0.2,0.3-0.3,0.6-0.2,1C744,237.4,744,237.1,743.9,236.7z"/>
                                    <path class="st89"
                                          d="M683.9,230.4c-0.2,0.4-0.6,0.3-1,0.3C683.2,230.4,683.6,230.4,683.9,230.4z"/>
                                    <path class="st89"
                                          d="M684.8,230.1c-0.2,0.4-0.5,0.3-0.9,0.3C684.2,230.2,684.5,230.1,684.8,230.1z"/>
                                    <path class="st189"
                                          d="M691.2,221.7c-0.2,0.4-0.6,0.3-0.9,0.3C690.6,221.7,690.9,221.6,691.2,221.7z"/>
                                    <path class="st177"
                                          d="M646.6,205.7c0.3,0,0.7,0,0.9,0.3C647.2,206,646.9,206,646.6,205.7z"/>
                                    <path class="st177"
                                          d="M647.2,206.5c-0.3,0.1-0.6,0-0.9-0.2C646.7,206.1,647,206.1,647.2,206.5z"/>
                                    <path class="st212"
                                          d="M723,146.2c0.2,0.3,0.6,0.3,0.9,0.2C723.6,146.2,723.3,146.1,723,146.2z"/>
                                    <path class="st207"
                                          d="M731.1,193.4c-0.2-0.3-0.3-0.6-0.3-0.9C731.2,192.8,731.2,193.1,731.1,193.4z"/>
                                    <path class="st104" d="M640.5,182.9c-1.3-1.2-1.4-3.3-0.1-4.8c1.8-2.1,4.1-3.1,6.9-3.3c1.6-0.1,3.1,0.2,4.6,0.6
				c0.1-0.1,0.2-0.1,0.2,0.1c1.9,0.9,3.7,1.9,4.9,3.7c0.4,0.6,1,1.2,1.1,2c-0.1,1.1-0.9,0.8-1.5,0.7l0,0c-0.3-0.3-0.7-0.1-1-0.3
				l-0.1,0l-0.1-0.1c-0.3-0.2-0.7-0.2-0.8-0.6c-1.7-3.6-7-2.9-8.5,0.3c-0.2,0.3-0.5,0.5-0.9,0.5c-0.4,0-0.8,0.2-1.2,0.3
				C642.8,182.1,641.8,183.2,640.5,182.9z"/>
                                    <path class="st216" d="M637.6,165.7c-0.2,0.4-0.5,0.7-0.7,1.1c-0.1,0.2-0.3,0.4-0.6,0.3c-0.2-0.1-0.2-0.4-0.1-0.7
				c0.2-0.6,0.4-1.2,0.7-1.9c-0.7,0.4-0.7,1.2-1.3,1.7c-0.4-0.6-0.2-1.2,0-1.8c0.5-1.2,1.3-2.3,2.5-3c1.8-1,3.8-1.5,5.8-1.7
				c1.9-0.2,3.8-0.4,5.7-0.5c0.8-0.1,1.6-0.2,2.3,0.2c0.2,0.3,0.3,0.6,0.6,0.9l0,0c0,0.9-0.9,0.2-1.2,0.6l0,0
				c-1.5,0.8-3.2,0.5-4.8,0.9c-2,0.4-4,1.1-6,1.6C639.2,163.9,638.6,165,637.6,165.7z"/>
                                    <path class="st0" d="M646.3,165.4c1.2-0.1,2.3,0.1,3.5-0.2c1-0.3,2.2-0.1,3.3,0c0.4,0,0.7,0.2,0.7,0.6c0,0.5-0.4,0.4-0.7,0.5
				c-1.9,0.8-3.9,0.3-5.8,0.6c-2.1,0.3-4.2,0.1-6.2,0.2c-0.6,0-1.1,0-1.6-0.5c0.5-0.6,1.3-0.4,1.6-1c0.9-0.5,1.9-0.7,2.9-0.8
				C644.8,165.1,645.7,164.8,646.3,165.4z"/>
                                    <path class="st217" d="M635.2,172.7c-0.4-0.3,0-1.1-0.7-1.2c0.9-0.9,1.9-0.7,2.9-0.2c0.5,0.2,0.8,0.6,1.2,1c0.8,1,1.5,2,2.6,2.7
				c-0.7,0.7-1.2,1.3-1.8,1.9c-1.4,0.4-2.7-0.3-3.2-1.6C635.8,174.5,635.9,173.5,635.2,172.7z"/>
                                    <path class="st218" d="M646.3,165.4c-0.8-0.1-1.6,0.2-2.3-0.3c0-0.9,0.7-1.1,1.3-1.3c1.5-0.6,3.1-0.9,4.8-1.1
				c0.2-0.1,0.5,0.2,0.6-0.2c-0.1-0.1-0.2-0.1-0.3-0.2c-0.9-0.3-1.7-0.3-2.6-0.1c-2.3,0.5-4.5,1-6.8,1.6c-1.2,0.3-2,1.1-2.5,2.2
				c-0.6,0.7-0.5-0.3-0.9-0.3c0.4-1.2,1.2-2,2.3-2.4c3.5-1.2,7.2-2.1,10.9-2.3c0.1,0,0.3,0,0.4,0c0.2,0.2,0.4,0.5,0.6,0.7
				c0.3,0.5,0.7,1,0.3,1.6c-0.2,0-0.4,0-0.7-0.1c0.4,0.7,0.9,1,1.6,1.4c-1.2,0.2-1.6-1.2-2.7-0.9c0,0.4,0.6,0.4,0.7,0.9
				C649.5,165,647.8,164.9,646.3,165.4z"/>
                                    <path class="st219" d="M633.4,183.4c0.1,0.3,0.1,0.6,0.1,0.9c0.1,0.1,0.1,0.2,0.2,0.3c1.2,0,2.3-0.1,3.5-0.2c0.5,0,1-0.1,1.3-0.9
				C636.7,183.5,635,183.4,633.4,183.4z"/>
                                    <path class="st220" d="M651,162.1c0,0.1,0,0.2,0,0.3c0.3,0.6-0.3,0.4-0.5,0.6c-1.6,0.1-3.2,0.5-4.7,1c-0.7,0.2-1.4,0.4-1.8,1.1
				c-0.9,0.4-1.9,0.5-2.9,0.6c-0.7,0-1.4,0-2.1,0c1.7-1.1,3.4-2.6,5.5-2.8C646.7,162.6,648.8,161.9,651,162.1z"/>
                                    <path class="st221" d="M651,162.1c-0.5,0.3-1.1,0.4-1.7,0.3c-0.6,0-1.2,0.2-1.8,0.4c-0.4,0.1-0.8,0.3-1.3,0.2
				c-1.6-0.3-2.9,0.2-4.2,1.1c-0.8,0.5-1.5,1.5-2.7,1.2c-0.1,0-0.2,0.2-0.3,0.3c-0.2,0.1-0.4,0.3-0.5,0.4c0-1,0.5-1.9,1.6-2.3
				c1-0.4,2.1-0.6,3.2-0.9c1.6-0.4,3.2-0.8,4.8-1.1C649.1,161.6,650,161.7,651,162.1z"/>
                                    <path class="st222" d="M631.7,171.6c-1-1.3-1.7-2.7-2.2-4.3c-0.4-1.4-0.4-2.7,0.5-3.9c0.3,0,0.5,0,0.4,0.4
				c-0.4,0.9-0.6,1.9,0,2.9l0,0c0,0.4-0.1,0.9,0.3,1.4c0.5-1,0.4-2.1,1.3-3.2c-0.1,1.1-0.2,2-0.3,2.9c-0.1,0.9,0,1.7,0.2,2.6
				c0.1,0.2,0.2,0.5,0.5,0.4C632.3,171.1,631.9,171.2,631.7,171.6z"/>
                                    <path class="st0" d="M635.8,170.6c-0.7-0.3-1.4-0.2-2,0.6c-0.2,0.3-0.5,0.1-0.6-0.3c-0.1-0.6,0.1-1,0.7-1.1
				c0.8-0.2,1.4-0.5,1.4-1.5c0-0.6,0.6-0.6,1.1-0.7c0.6,0,1.1,0,1.3,0.6C638.3,169.7,637.5,170.7,635.8,170.6z"/>
                                    <path class="st223" d="M635.2,172.7c0-0.1,0-0.3,0.1-0.4c0.1-0.2,0.2,0,0.3,0.1c0.2,0.7,0.5,1.5,0.6,2.2c0.2,1.1,0.7,2,1.9,2.2
				c0.4,0.1,0.7,0.5,1.2,0.3c-0.1,0.4-0.2,0.7-0.5,0.9c-1.6-0.4-1.6-0.4-1.4,1.1c0,0.4,0.3,0.9-0.4,0.9c-0.5-1.2-1-2.4-1-3.8
				C635.9,175,635.5,173.9,635.2,172.7z"/>
                                    <path class="st0" d="M636.3,183.2c-0.4,0-1,0.1-1.4-0.2c-0.3-0.2-0.7-0.3-0.6-0.7c0.1-0.4,0.3-0.9,0.7-0.8
				c0.7,0.2,1.4-0.1,2.1-0.1c0.5,0,1,0.1,0.9,0.7c-0.1,0.5-0.1,1.1-0.9,1.1C636.9,183.2,636.7,183.2,636.3,183.2z"/>
                                    <path class="st224" d="M637,180c0.4-0.1,0.3-0.4,0.2-0.7c-0.2-0.6-0.5-1.3-0.5-2c0.7-0.2,1.4,0.1,2.1,0.3c0,0,0,0.3,0.1,0.4
				c-0.5,0.8-0.5,1.7-0.8,2.6c-0.5,0.2-0.8-0.4-1.2-0.3C636.7,180,636.8,180,637,180z"/>
                                    <path class="st225" d="M645.2,181.5c0.4,0.2,0.6-0.2,0.9-0.3c0.1,0.3,0.2,0.5,0.6,0.5c0.3,0,0.6,0.1,1,0.1
				c-1,0.3-2.1,0.2-3.1,0.5c-1.2,0.3-2.3,0.8-3.4,1.2c-0.2-0.2-0.4-0.3-0.6-0.5c0.2,0,0.5,0,0.5-0.1c0.8-0.9,2-0.7,3-1.1
				C644.4,181.5,644.9,181.7,645.2,181.5z"/>
                                    <path class="st226" d="M652.2,163.4c0-0.5-0.4-1-0.3-1.6c0.2,0,0.5,0.1,0.7,0.1c0.4,0,0.8,0.1,1,0.5c0.2,0.5-0.2,1.1-0.4,1.4
				C652.8,164.3,652.5,163.7,652.2,163.4z"/>
                                    <path class="st0" d="M647.5,174.4c-0.3,0-0.8,0.1-0.8-0.4c0-0.6,0.4-0.7,0.9-0.7c0.1,0,0.3,0,0.4,0c0.4,0,0.9-0.1,0.8,0.5
				c0,0.5-0.4,0.6-0.8,0.6C647.9,174.4,647.8,174.4,647.5,174.4z"/>
                                    <path class="st0" d="M655.2,163.2c0.1,0.4-0.2,0.5-0.4,0.6c-0.3,0.2-0.5,0-0.7-0.3c-0.1-0.2-0.2-0.5-0.2-0.7
				c0-0.5,0.1-1.2,0.7-1.2c0.5,0,0.4,0.6,0.4,1C655.1,162.8,655.2,163,655.2,163.2z"/>
                                    <path class="st124"
                                          d="M656.5,181.8c0.6,0,1.2-0.1,1.5-0.7c0.3,0.3,0.4,0.7,0.5,1.2C657.8,182.4,657.1,182.1,656.5,181.8z"/>
                                    <path class="st0"
                                          d="M645.3,174.4c-0.4,0-0.7,0.6-1.1,0.5C644.5,174.2,644.5,174.2,645.3,174.4z"/>
                                    <path class="st227"
                                          d="M635.5,181.2c-0.6-0.4-0.7-0.9-0.7-1.6C635.4,180.1,635.7,180.4,635.5,181.2z"/>
                                    <path class="st0" d="M652.1,175.4c0,0-0.1,0-0.1,0l-0.1-0.1c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.1-0.5,0.2-0.6
				c0.1-0.1,0.3-0.1,0.4-0.1c0.2,0.2,0.2,0.4,0,0.7C652.3,175.2,652.2,175.3,652.1,175.4z"/>
                                    <path class="st0" d="M634.8,164.6c0.2,0,0.4,0,0.4,0.3c0.1,0.3-0.1,0.5-0.4,0.5c-0.2,0-0.4-0.1-0.4-0.3
				C634.5,164.8,634.5,164.6,634.8,164.6z"/>
                                    <path class="st0" d="M636.3,186.2c0,0.2-0.1,0.4-0.3,0.4c-0.3,0.1-0.5-0.1-0.5-0.4c0-0.2,0.2-0.3,0.4-0.3
				C636,185.9,636.2,186,636.3,186.2z"/>
                                    <path class="st218"
                                          d="M651.3,161.1c0.2-0.5,1-0.1,1.2-0.6c0.4,0.2,0.6,0.4,0.1,0.6C652.2,161.2,651.7,161.2,651.3,161.1z"/>
                                    <path class="st88"
                                          d="M638.5,156.7c0.4,0.4,0.2,1,0.2,1.5C638.5,157.7,638.5,157.2,638.5,156.7z"/>
                                    <path class="st228"
                                          d="M652.5,160.4c-0.6,0-0.5-0.5-0.6-0.9C652.5,159.6,652.4,160.1,652.5,160.4z"/>
                                    <path class="st124"
                                          d="M654.5,180.9c0.3,0.2,0.7,0.2,0.8,0.6C655,181.5,654.5,181.5,654.5,180.9z"/>
                                    <path class="st124"
                                          d="M655.6,181.5c0.4-0.1,0.7-0.1,1,0.3C656.2,181.8,655.8,181.8,655.6,181.5z"/>
                                    <path class="st88"
                                          d="M638.8,159.3c0.3,0,0.6,0,0.9,0C639.4,159.5,639.1,159.8,638.8,159.3z"/>
                                    <path class="st144" d="M710.7,167.8c0.2,0.5,0.3,0.9-0.3,1.2c-0.8,0.4-1.6,0.9-2.6,0.7c-2.1-0.3-4-1-6-1.7
				c-0.3-0.1-0.5-0.4-0.8-0.6c-2,0.1-3.7-0.8-5.6-1.2c-3.1-0.5-6.1-1.5-9.3-0.6c-0.3,0.1-0.6,0-0.8-0.2c-0.4-0.5-0.8,0.2-1.2,0
				c-0.7-0.3-1.3,0.6-2,0.3c-0.4-0.4-0.7,0-1.1,0.1c-1.1,0.3-1.1,0.3-1.8-0.8c-1.3,0.9-2.5,1.8-3.5,3.1c0.1-1.3,1.3-1.7,1.9-2.8
				c-0.8,0.3-1.3,0.7-1.8,1.1c-0.5,0.5-0.7,1.2-1.5,1.7c0-0.7,0.3-1,0.5-1.4c0.8-1.3,0.8-1.6-0.2-3c-0.1-0.1-0.1-0.1-0.2-0.2
				c0.3-0.4,0.8-0.4,1.3-0.5c4.7-0.5,9.4-1,14.1-1.4c2.6-0.2,5.1,0.3,7.6,0.9c1.1,0.3,2.2,0.5,3.3,0.5c1.1,0,2-0.3,2.2-1.6
				c0-0.2,0.2-0.5,0.4-0.6c0.5-0.5,0.3-1.2,0.2-1.8c-0.2-1.2-0.2-1.2,0.9-1.7c0.2-0.1,0.4-0.2,0.6-0.3c0.9,0.7,1.7,1.3,2.6,2
				c-0.6,0.5-0.2,0.8,0.2,1.1c0.8,0.6,0.8,0.6,0.6,1.5c-0.4,0.1-0.5-0.5-1-0.4c0.1,0.5,0.2,0.9,0.8,1c1.4,1.2,3.2,1.2,4.7,2.1
				c-0.5,0.4-1,0.3-1.5,0.1c-0.3-0.1-0.6-0.2-1,0.3c0.9,0.4,1.9-0.1,2.7,0.4c-2.2,0.8-4.4,0.9-6.5,0.9c1.5,0.2,3.2-0.3,5-0.5
				c0.5-0.1,1-0.3,1.5,0.2c0.2,0.4-0.2,0.3-0.3,0.5c-0.1,0.2-1,0-0.2,0.6c0.1,0.1-0.4,0.3-0.7,0.3c-2.1,0-4.3,0.3-6.3-0.4
				c-0.5-0.1-0.9-0.3-1.4-0.3C706.3,167.6,708.5,167.9,710.7,167.8z"/>
                                    <path class="st229" d="M703.5,160.7c0,0.1,0,0.2,0,0.3c0.5,2-0.8,2.4-2.3,2.4c-1.1,0-2.1-0.2-3.1-0.5c-4-1.2-8-1.1-12.1-0.6
				c-2.5,0.3-5,0.5-7.5,0.8c-1.3,0.1-2.6,0.5-3.9,0.3c-1.5-1.3-2.1-2.9-1.6-4.8c0.5-2,1.6-3.5,3.8-4c1.2-0.2,2.5-0.5,3.7-0.7
				c3-0.5,6-1.2,8.9-2c2.3-0.6,4.5-0.9,6.9-0.4c1.6,0.3,3,1.1,4.1,2.4c1.3,1.5,2.2,3.3,2.8,5.2c0.2,0.4,0,0.9,0.2,1.2
				C703.4,160.4,703.5,160.6,703.5,160.7z"/>
                                    <path class="st230" d="M694.7,142.5c-1,0.2-2.1,0.5-3.1,0.7c-5.5,1.3-10.9,3.2-16.5,3.9c-3.5,0.5-6.8,1.9-10.3,2.4
				c-4.5,0.7-9.1,0.7-13.6,0.7c-2.2,0-4.3,0.4-6.4,1.3c-1.1,0.5-2.3,1-2.9,2.2c0,0.3,0.1,0.5,0.5,0.4c2.4-1.6,5.1-2.4,7.9-2.8
				c2.8-0.4,5.7-0.2,8.6-0.3c1.8-0.1,3.7,0,5.5-0.4c4.5-1,9-2.3,13.6-2.9c3.7-0.5,7.3-1.7,11-2.6c2.4-0.5,4.7-1.1,7.2-1.2
				c2.5-0.1,4.3,0.9,5.4,3.2c0.3,0.5,0.5,1,0.8,1.5c0.3,0.6,0.7,1.3,1.5,1.5c0.3,0.1,0.4-0.2,0.5-0.4c-0.1-1.3-0.8-2.5-1.4-3.6
				C701.2,143.2,698.1,141.8,694.7,142.5z"/>
                                    <path class="st231" d="M685.4,165.4c2.5-0.7,5.1-0.5,7.6,0.1c2.7,0.6,5.5,1.1,8.1,2c0,0.2,0,0.3,0,0.5c-0.4-0.1-0.7-0.3-1.1-0.2
				c-2.3-0.5-4.5-1.2-6.8-1.6c-1.8-0.3-3.6-0.6-5.5-0.3c-2.5,0.4-4.7,1.5-6.6,3.1c-0.8,0.6-1.5,1.3-2.3,1.9
				C680.4,168.3,682.7,166.6,685.4,165.4z"/>
                                    <path class="st232"
                                          d="M657.8,174.4c-4.8-3-9.5-4.5-14.8-1.8C645.5,169.3,654.7,170.3,657.8,174.4z"/>
                                    <path class="st233"
                                          d="M658.8,161.2c0.5,0.6,0.6,1.3,0.7,2c0.3,1.8,0.6,3.6,0.5,5.4C659,166.3,658.7,163.8,658.8,161.2z"/>
                                    <path class="st234" d="M667.5,162.2c-1.6-3,0.5-6.1,3.4-7.3c-0.5,0.8-1.1,1-1.5,1.4c-0.6,0.5-1,1-1.4,1.7c-0.3,0.6-0.4,1.3-0.4,2
				C667.5,160.7,667.5,161.3,667.5,162.2z"/>
                                    <path class="st235"
                                          d="M682.2,165.6c0.7,0,1.2-0.7,2-0.3c-3.2,0.9-5.5,3-7.4,5.6C677.7,168.4,679.9,166.9,682.2,165.6z"/>
                                    <path class="st236"
                                          d="M651.3,169.4c0.4-0.5,0.9-0.6,1.5-0.5c2.4,0.4,4.2,1.7,5.5,3.7C656.3,170.8,654.3,169.2,651.3,169.4z"/>
                                    <path class="st237" d="M703.8,150.2c0.1-0.1,0.2-0.2,0.3-0.3c0.8-0.1,1.3,0.3,1.7,0.9c0.8,0.8,2,1,2.8,1.7
				c0.2,0.1,0.4,0.2,0.5,0.5c-0.7,0.3-1-0.6-1.6-0.4C706.4,151.7,704.9,151.2,703.8,150.2z"/>
                                    <path class="st238"
                                          d="M640.3,170.3c1.2-1.5,2.6-2.2,4.6-2.2C643.2,168.8,641.8,169.6,640.3,170.3z"/>
                                    <path class="st239" d="M642,153.7c0.1,0.1,0.2,0.2,0.3,0.3c-0.6,0.7-1.3,1.4-1.9,2c-0.2,0.2-0.4,0.3-0.5,0
				c0.1-0.2,0.2-0.4,0.4-0.6C640.5,154.6,640.8,153.8,642,153.7z"/>
                                    <path class="st144"
                                          d="M703.4,160.2c-0.2-0.4-0.3-0.8-0.2-1.2C703.6,159.4,703.4,159.8,703.4,160.2z"/>
                                    <path class="st240" d="M682.8,239.5c0,0,0-0.1,0-0.1c-0.1-0.6,0.8,0,0.7-0.6c0-0.4,0.1-0.8,0.2-1.1c0.2-0.6,1.1-0.7,1.5-0.2
				c0.6,0.6,0.6,1.7,0,2.4c-0.6,0.6-1,1.6-2.1,0.9c0,0-0.2,0.2-0.3,0.3C682.3,240.5,682.6,240,682.8,239.5z"/>
                                    <path class="st241" d="M682.8,239.5c0.4,0.5-0.3,1,0,1.5c-0.2,0.4-0.7,0.1-0.9,0.5c-0.6,0.1-0.8-0.3-0.7-0.8c0-0.7,0-1.4-0.2-2.1
				c0.6,0,0.4,0.8,0.8,1c0.3-0.5-0.1-1,0.2-1.5C682.4,238.5,682.3,239.2,682.8,239.5z"/>
                                    <path class="st242" d="M680.4,241.2c-0.2-0.1-0.4-0.2-0.6-0.4c-0.5-0.9-0.7-1.8-0.5-2.9c0.1-0.6,0.5-0.5,0.9-0.3
				c0.3,0.1,0.4,0.3,0.4,0.6l-0.1,0l-0.1,0C680,239.3,681.1,240.3,680.4,241.2z"/>
                                    <path class="st243" d="M678.7,238.3c-0.1,0.7-0.2,1.5,0,2.2c-0.5,0-0.7-0.2-0.9-0.5c0-0.3,0-0.6,0-0.9c-0.1-0.2-0.2-0.4,0.1-0.5
				C678.1,238.5,678.3,238.1,678.7,238.3z"/>
                                    <path class="st244" d="M680.4,241.2c-0.1-0.7-0.2-1.3-0.3-2c0-0.3-0.1-0.7,0.3-0.9c0.1,0.2,0.1,0.5,0.3,0.6
				c0,0.6,0.3,1.1,0.4,1.7C681.1,241,681.1,241.6,680.4,241.2z"/>
                                    <path class="st245"
                                          d="M679.3,238c0.1,1,0.6,1.9,0.5,2.9c-0.9-0.5-0.9-1.4-0.8-2.3C679.1,238.4,679.2,238.2,679.3,238z"/>
                                    <path class="st91" d="M680.5,238.3c-0.1-0.2-0.2-0.4-0.4-0.6c0-0.2,0-0.4,0.3-0.4c0.2,0,0.3,0.2,0.3,0.4
				C680.7,237.9,680.7,238.1,680.5,238.3z"/>
                                    <path class="st91" d="M684.7,249c-0.1,0-0.1-0.1-0.2-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1,0,0.1,0.1,0.2,0.1
				C684.8,249,684.7,249,684.7,249z"/>
                                    <path class="st91"
                                          d="M677.9,238.7c0,0.2-0.1,0.3-0.1,0.5c-0.2-0.2-0.3-0.4-0.2-0.6C677.7,238.4,677.8,238.6,677.9,238.7z"/>
                                    <path class="st91" d="M680.8,231.4c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1-0.1-0.2-0.1c0.1,0,0.1-0.1,0.2-0.1
				C680.7,231.3,680.7,231.4,680.8,231.4z"/>
                                    <path class="st246" d="M656.2,192c-0.6,0.1-1-0.2-1.4-0.4c-2.5-1.2-5-1.2-7.5-0.4c-1.4,0.4-2.6,1.1-3.8,1.8
				c-0.7,0.4-1.5,0.7-2.4,1.1c2.7-2.5,7.3-4.1,10.7-3.8C653.5,190.3,654.9,190.8,656.2,192z"/>
                                    <path class="st247" d="M643.7,195.4c0.9-1,1.9-1.8,3-2.5c1.8-1.2,3.8-1.5,5.8-0.8c1.2,0.4,2.4,0.9,3.6,1.9
				c-0.9,0.1-1.4-0.4-2-0.6c-1.7-0.8-3.3-1.2-5.2-0.8c-1.1,0.3-2,0.8-3,1.5c-0.7,0.5-1.3,1.1-2.1,1.5
				C643.7,195.5,643.6,195.5,643.7,195.4z"/>
                                    <path class="st248" d="M643.7,190.2c0.8-1,2-1.4,3.2-1.8c3.1-1,6.2-0.9,9.3-0.2c0.2,0,0.4,0.1,0.5,0.2c0.1,0,0.1,0.1,0.2,0.3
				c-1,0.1-1.9-0.2-2.9-0.3c-3.4-0.4-6.6,0.1-9.7,1.6C644.2,190.1,644,190.2,643.7,190.2L643.7,190.2z"/>
                                    <path class="st249" d="M647.2,186.1c2.3-0.4,4.6-0.4,7-0.3c-0.2,0.3-0.5,0.3-0.8,0.3c-2,0-4.1,0.1-6.1,0.5
				c-0.4,0.1-0.8,0.1-1.4-0.1C646.4,186.3,646.9,186.5,647.2,186.1z"/>
                                    <path class="st247"
                                          d="M643.8,195.5c-0.2,0.4-0.6,0.6-1,0.7c0.1-0.5,0.5-0.7,0.9-0.9C643.7,195.4,643.8,195.5,643.8,195.5z"/>
                                    <path class="st248" d="M643.7,190.2c-0.1,0.3-0.3,0.5-0.7,0.5C643.1,190.3,643.4,190.2,643.7,190.2
				C643.7,190.2,643.7,190.2,643.7,190.2z"/>
                                    <path class="st250" d="M706.7,254.3c0-0.1,0.2-0.1,0.2-0.1c2-1,3.4-2.6,4.3-4.6c0.4-0.9,0.8-1.8,1.2-2.8c0.2-0.5,0.3-1.1-0.5-1.2
				c-0.5-0.1-0.7,0.4-1,0.6c-3.4,3.4-7,6.5-11.7,8.1c-0.3,0.1-0.6,0.2-0.9,0.3c-0.1,0.1-0.2,0.1-0.3,0.2c0,0.6,0,1.2,0,1.9
				c0,0.7,1.1,0.7,1,1.4c-1,0.5-2.1,0.5-3.1,1.1c1.7,0.7,3-0.2,4.3-0.9c1.9-1.5,3.9-3,6.4-3.5c0.1,0,0.2-0.2,0.4-0.2
				C706.9,254.6,706.5,254.7,706.7,254.3z"/>
                                    <path class="st251"
                                          d="M700.2,258.4c-1.5,0.1-2.8,0.9-4.3,0.9c0.4,1.3,1,2.4,1.7,3.5C698.3,261.2,699.3,259.8,700.2,258.4z"/>
                                    <path class="st252" d="M688.3,187c-0.8,0.1-1.5,0.8-2.4,0.9c0-0.7,0.8-0.5,0.9-0.9c0.3-0.1,0.6-0.3,0.9-0.4
				c3.4-1.9,7-2.1,10.6-1.2c-2.2,0-4.5-0.1-6.7,0.4C690.6,186.1,689.4,186.3,688.3,187z"/>
                                    <path class="st253" d="M687.7,191.2c0.4-1,0.9-1.8,1.8-2.5c0.3,0,0.5-0.3,0.7-0.4c2-1.6,4.1-1.6,6.2-0.4c0.5,0.3,1,0.5,1.5,1.2
				c-0.8-0.4-1.4-0.6-2-0.9c-1.9-0.9-3.7-0.7-5.4,0.5C689.5,189.4,688.6,190.3,687.7,191.2z"/>
                                    <path class="st182"
                                          d="M685.6,185.8c-0.2,0-0.4,0.3-0.8,0.2c0.8-0.9,1.7-1.5,2.9-1.7C687.1,185,686.2,185.1,685.6,185.8z"/>
                                    <path class="st213" d="M631.5,153.1c0.1,0.1,0.2,0.2,0.2,0.3c-0.1,0.2-0.1,0.4-0.3,0.8c1.1-0.3,1.6-1.3,2.6-1.7
				c-0.7,1.1-1.6,1.6-2.3,2.3c-0.6,0.1-1.1,0.7-1.9,0.7C630.5,154.7,631,153.9,631.5,153.1z"/>
                                    <path class="st254" d="M630.4,163.8c-0.1-0.2-0.2-0.3-0.4-0.4c1.1-2,3-2.9,4.8-4.1c0.1,0.6-0.4,0.7-0.6,0.9
				c-0.2,0.2-0.5,0.4-0.8,0.6C632.2,161.5,631.1,162.4,630.4,163.8z"/>
                                    <path class="st255" d="M634.1,155.2c0.2-0.1,0.5-0.3,0.9-0.5c-0.5,1.1-1.2,1.7-2,2.2c-0.1,0.1-0.3,0-0.3-0.2
				C633.2,156.3,633.7,155.8,634.1,155.2z"/>
                                    <path class="st222"
                                          d="M631.5,163.7c-0.3,1-0.8,1.9-1.2,2.9c0,0,0,0,0,0C630.2,165.4,630.5,164.4,631.5,163.7L631.5,163.7z"/>
                                    <path class="st222" d="M631.5,163.6c0-0.2,0-0.4,0.2-0.4c0,0,0.2,0.1,0.2,0.1C631.8,163.5,631.8,163.7,631.5,163.6
				C631.5,163.7,631.5,163.6,631.5,163.6z"/>
                                    <path class="st214"
                                          d="M657.2,236.2c-2.8-3.8-4.1-7.9-3.2-12.8C651.3,226.9,654.2,234.2,657.2,236.2z"/>
                                    <path class="st256"
                                          d="M660.3,226.3c-0.4,2.1-0.6,4.2-0.9,6.5C658.8,231.1,659.1,228.6,660.3,226.3z"/>
                                    <path class="st257"
                                          d="M649.8,223.4c-0.4-0.4-0.2-0.8-0.3-1.3c0-0.4-0.1-0.8,0.4-1.1C650,221.9,649.9,222.7,649.8,223.4z"/>
                                    <path class="st91"
                                          d="M662.3,234.3c-0.3-0.3-0.2-0.6-0.2-1C662.4,233.6,662.4,234,662.3,234.3z"/>
                                    <path class="st258" d="M721.3,208.3c0,0.3,0,0.6,0.6,0.5c0-3.9-0.8-7.7-1.8-11.4c-0.3,0-0.5,0-0.8,0c1.1,2,1.6,4.2,1.6,6.5
				C720.9,205.4,721.3,206.9,721.3,208.3z"/>
                                    <path class="st259" d="M698.2,139.8c-0.8-0.3-1.7-0.4-2.6-0.2c-0.7,0.1-1.4,0.3-2.1,0.4c-3,0.6-6,1.2-9,1.4
				c-2.3,0.2-4.6,0.2-6.8,0.5c-7.6,0.9-15,2.5-22.6,3.6c-3.5,0.5-6.8,1.5-10.2,2.4c-1.9,0.8-3.9,1.6-5.5,3c0.1,0.9,0.3,1,1.4,0.3
				c4.3-2.7,9.2-3.9,14.2-4.6c10.2-1.5,20.2-3.8,30.5-4.3c3.4-0.2,6.7-1.1,10.1-1.6c1.7-0.2,3.1,0.2,4.3,1.4
				c0.6,0.6,1.2,1.2,1.9,1.8c0.6,0.6,1.1,1.4,2,1.6c0.3,0,0.5-0.1,0.4-0.5C702.5,142.8,700.4,141.2,698.2,139.8z"/>
                                    <path class="st260" d="M667,214.4c-0.4,1.4-0.3,2.9-0.8,4.3c-0.2,0.6-0.4,1.2-1,1.5c-0.1,0.1-0.3,0.1-0.4,0
				c1.3-2.2,1.7-4.6,1.7-7.2c0.1-0.3,0-0.7,0.5-0.9C667,212.8,667,213.6,667,214.4z"/>
                                    <path class="st261" d="M662.7,217c-0.4,0.8-0.7,1.5-1.1,2.3c-0.3,0.5-0.6,1.1-1.4,1.3c0.3-0.8,1-1.1,1.1-1.8c1-1.9,1.6-4,2.2-6.2
				c0.2,1,0.1,1.5-0.3,2.9C662.9,216,662.6,216.4,662.7,217z"/>
                                    <path class="st262" d="M660.6,217.3c-0.6,0.6-0.8,1.4-1.5,1.9c-0.2,0.2-0.4,0.5-0.7,0.1c1.6-1.9,2.4-4.2,3.4-6.4
				C661.7,214.4,661,215.8,660.6,217.3z"/>
                                    <path class="st263"
                                          d="M657.3,210.4c-1.7,1.7-3.6,3-6.1,3.2C653.3,212.7,655.3,211.6,657.3,210.4z"/>
                                    <path class="st264" d="M654.8,217.7c-0.5,0.2-0.9,0.5-1.4,0.7c-0.3,0.1-0.6,0.2-0.7-0.3c2.1-0.8,3.5-2.4,5.1-3.9
				C657.1,215.7,656.1,216.8,654.8,217.7z"/>
                                    <path class="st265" d="M657.3,218.7c-0.6,0.3-1.1,0.9-2,0.8c0.1-0.4,0.5-0.4,0.7-0.7c1-0.7,1.8-1.6,2.5-2.5
				c0.3-0.4,0.4-0.9,0.9-1l0,0C659.2,216.7,658.2,217.7,657.3,218.7z"/>
                                    <path class="st266" d="M665,215.6c0.1,0,0.3,0,0.4-0.1c-0.5,1.9-0.9,3.8-2.7,4.9c0,0-0.1,0-0.3,0c0.5-1,1.4-1.6,1.7-2.6
				C664.4,217.1,664.7,216.4,665,215.6z"/>
                                    <path class="st267"
                                          d="M655.2,214.5c-1.2,1.7-2.8,2.4-5,2.1C652,216.4,653.5,215.6,655.2,214.5z"/>
                                    <path class="st265" d="M659.5,215.3c-0.1-0.4,0.2-0.5,0.4-0.8C659.9,214.9,659.9,215.2,659.5,215.3
				C659.4,215.2,659.5,215.3,659.5,215.3z"/>
                                    <path class="st211" d="M713.1,144.7c1.1,1.4,2.4,2.5,4.1,3.2c0.1-0.4,0.4-0.3,0.6-0.3c-1.3-0.5-2.5-1.3-3.6-2.2
				C713.8,145.1,713.5,144.7,713.1,144.7z"/>
                                    <path class="st211"
                                          d="M711.9,143.8c0.3,0.4,0.6,0.8,1.2,0.9C712.8,144.2,712.5,143.9,711.9,143.8z"/>
                                    <path class="st192"
                                          d="M719.8,147.9c-0.4,0.1-0.8,0.1-1.2-0.2C719,147.6,719.4,147.5,719.8,147.9z"/>
                                    <path class="st268" d="M711.9,245.6c-0.2-0.9-0.3-1-0.9-0.4c-2.1,2.1-4.4,3.9-6.8,5.6c-2.8,2-5.7,3.6-9.3,3.6
				c-0.7,0-1.4,0.2-2.4,0.6c0.8,0.4,1.5,0.4,2,0.2c1.1-0.3,2.2-0.2,3.3-0.2c0.1,0,0.2,0,0.3,0c0.2-0.3,0.6,0,0.9-0.3
				c1.8-0.5,3.4-1.2,4.9-2.3C706.8,250.3,709.7,248.3,711.9,245.6z"/>
                                    <path class="st269" d="M689.5,182.1c0.4,0,0.7,0,1.1-0.1c0.3-0.1,0.6-0.2,0.6,0.3c-1.4,0.4-2.9,0.7-4.3,1.1
				c-1.1,0.3-2.1,0.8-2.9,1.6c-0.4,0.4-0.6,0.2-0.6-0.3l0,0c1.5-1.4,3.4-2,5.4-2.3C689,182.3,689.3,182.3,689.5,182.1z"/>
                                    <path class="st270" d="M691.2,182.3c-0.1-0.2-0.4-0.2-0.6-0.3c1.7-0.5,3.5-0.8,5.3-0.8c-0.2,0.6-0.7,0.2-1,0.3
				C693.6,181.8,692.4,182,691.2,182.3z"/>
                                    <path class="st269" d="M683.4,184.6c-0.8-0.6-1.4-1.4-2.1-2.2C682.3,182.7,682.8,183.3,683.4,184.6
				C683.3,184.7,683.4,184.6,683.4,184.6z"/>
                                    <path class="st271"
                                          d="M724.6,178.5c-0.9-0.3-1.6-0.8-2.1-1.6c0.9,0.3,1.5,0.9,2.2,1.4C724.8,178.4,724.8,178.5,724.6,178.5z"/>
                                    <path class="st272" d="M681.5,224.6c1.1-0.1,2.1,0.1,3.2-0.3c0.3-0.1,0.6,0,0.9,0c0.2,0,0.5,0,0.6,0.3c0.1,0.3-0.2,0.5-0.4,0.5
				c-0.7,0.2-1.4,0.4-2.1,0.5c-1.1,0.2-2.3,0.5-3.4,0.4c-0.5,0-1-0.1-1.4-0.4c-0.2-0.1-0.4-0.3-0.3-0.6c0.1-0.3,0.3-0.4,0.5-0.4
				C679.9,224.6,680.7,224.6,681.5,224.6z"/>
                                    <path class="st273"
                                          d="M733.8,187.2c0.4-1.3,1.5-2.1,2.4-3C735.7,185.5,734.6,186.2,733.8,187.2z"/>
                                    <path class="st274"
                                          d="M737,185.9c0.3,1-0.3,1.6-1.2,2C736.2,187.3,736.6,186.6,737,185.9z"/>
                                    <path class="st275" d="M700.9,214.1c0.5,0,1,0,1.8,0c-1.1,0.7-2.1,0.8-3,0.8c-2.4,0.1-4.5-0.7-6.6-1.9c-0.4-0.2-0.7-0.7-1.2-0.6
				c-0.6-0.4-0.9-1.1-1.4-1.5c-0.1-0.3,0-0.4,0.3-0.3c1.9,1.6,3.9,2.8,6.3,3.3C698.3,214.2,699.5,214.4,700.9,214.1z"/>
                                    <path class="st276" d="M695,210.3c2.1,1.3,4.5,2.1,6.8,2.9c0.2,0.1,0.4,0.1,0.6,0.2c-0.5,0.3-0.9,0.1-1.3,0.2
				c-4.9-1.6-8.6-3.6-10.7-5.8C692.1,208.5,693.3,209.8,695,210.3z"/>
                                    <path class="st277" d="M693,206.8c0.4-0.4,0.9-0.3,1.4-0.2c2.2,0.3,4.3,0.2,6.5,0c2.7-0.1,5.1-1,7.4-2.3c0.1,0,0.2,0,0.4,0
				c-0.1,0.4-0.5,0.6-0.8,0.8c-2.3,1.3-4.7,2-7.3,2c-1.4,0-2.7,0-4.1,0.1C695.3,207.2,694.1,207,693,206.8z"/>
                                    <path class="st278" d="M687.7,215.9c0.6,0.8,1.5,1.1,2.3,1.5c0.5,0.2,1,0.3,1.5,0.8c-1.6,0.2-2.6-0.7-3.7-1.2
				c-1.9-0.9-2.9-2.6-3.7-4.5c0-0.2,0.1-0.4,0.4-0.3C685.4,213.5,686.3,214.9,687.7,215.9z"/>
                                    <path class="st279" d="M690.9,213c-0.1,0.1-0.2,0.2-0.2,0.3c-1.1-0.9-2.2-1.9-3-3.1c-0.2-0.3-0.6-0.6-0.4-1l0,0
				C688.5,210.3,689.5,211.8,690.9,213z"/>
                                    <path class="st280"
                                          d="M690.6,210.6c-0.2,0-0.3,0.1-0.3,0.3c-0.9-0.7-1.7-1.5-2.3-2.5C689.1,209,689.9,209.7,690.6,210.6z"/>
                                    <path class="st281" d="M684.5,212.1c-0.1,0.1-0.2,0.2-0.3,0.3c-1-0.5-1.4-1.3-1.2-2.3c0.1-0.1,0.2-0.1,0.3-0.2
				C683.7,210.6,684.2,211.2,684.5,212.1z"/>
                                    <path class="st121"
                                          d="M702.6,208.9c-1.6,0.4-3.1,0.4-4.7,0C699.4,208.9,701,208.9,702.6,208.9z"/>
                                    <path class="st121"
                                          d="M694.4,208.2c-0.1,0.1-0.2,0.2-0.3,0.3c-0.5,0-1-0.2-1.4-0.8C693.5,207.7,694,207.9,694.4,208.2z"/>
                                    <path class="st279" d="M687.1,209.1c-0.3-0.1-0.4-0.3-0.4-0.6C687,208.6,687.1,208.9,687.1,209.1
				C687.1,209.1,687.1,209.1,687.1,209.1z"/>
                                    <path class="st282"
                                          d="M737,149.8c0,0,0.1,0,0.1-0.1C737.1,149.7,737,149.7,737,149.8z"/>
                                    <path class="st282" d="M746.8,143.5c-0.2-0.2-0.2-0.5-0.1-0.8c0.1-0.2,0.2-0.4,0-0.5c-0.2-0.2-0.5-0.1-0.7,0.1
				c-0.1,0.1-0.2,0.2-0.3,0.3c-1.3,1.5-2.9,2.6-4.6,3.6c-0.1,0.2-0.2,0.4-0.3,0.4c-4.3,2.1-8.7,3.5-13.5,3.2c-0.7,0-1.4,0-2.2,0
				c-0.5,0-0.8,0.1-0.7,0.7c0.1,0.5-0.5,0.3-0.7,0.4c0.1,0.1,0.2,0.2,0.3,0.2c1.6,0,3.1,0.4,4.7,0.4c0.9,0,1.7,0,2.6,0
				c0.4,0.2,0.8,0,1.1-0.1c1.6-0.4,3.2-1,4.7-1.6c0,0,0.1,0,0.1-0.1c1.4-0.6,2.8-1.3,4.1-2.1c-0.6,0.4-1.3,0.7-1.9,1.1
				c-0.7,0.4-1.4,0.7-2.2,1c0,0-0.1,0-0.1,0.1c-0.4,0.2-0.8,0.5-1.2,0.9c0.4,0.4,0.7,0.1,1.1,0c0.4-0.2,0.8-0.3,1.2-0.4
				c0.2-0.1,0.3,0.1,0.4,0.3c0,0.2,0,0.3-0.2,0.3c-0.4,0.2-0.9,0.3-1.3,0.6c-0.3,0.2,0.2,0.2,0.2,0.3c0.6,0.4,1-0.1,1.5-0.3
				c3.5-1.5,6.4-3.6,8-7.2C746.8,144,747.1,143.8,746.8,143.5z"/>
                                    <path class="st283" d="M741,146.1c-4.3,2.3-9,3.5-13.9,3.6c0.3,0.4,0.7,0.2,1.1,0.2c1.9,0.1,3.7-0.1,5.5-0.6
				c2.4-0.6,4.8-1.3,6.9-2.6C740.8,146.7,741.4,146.6,741,146.1z"/>
                                    <path class="st284" d="M746.6,144.1c0.1-0.2,0.1-0.4,0.2-0.6c0.3-0.6,0.6-1.1,0.7-1.7c0.5-0.1,0.4,0.2,0.3,0.5c0,0.1,0,0.2,0,0.3
				c-0.5,0.5-0.4,1.3-0.9,1.7C746.7,144.4,746.7,144.3,746.6,144.1z"/>
                                    <path class="st159"
                                          d="M747.8,142.4c-0.1-0.2,0-0.5-0.3-0.5c-0.1-0.5,0.3-0.8,0.3-1.4C748.1,141.6,748.1,141.6,747.8,142.4z"/>
                                    <path class="st195" d="M736.4,152.6c-1.8,0.8-3.8,1.1-5.7,1.4c-4.6,0.7-9,0.2-13.4-1c-0.2-0.1-0.5-0.1-0.7-0.1
				c-1.9-0.6-3.7-1.4-5-3.1c4.1,2.8,8.7,3.5,13.5,3.9c3.6,0.3,7.2-0.1,10.6-1.3c0.1,0,0.3,0,0.4,0
				C736.2,152.4,736.4,152.4,736.4,152.6z"/>
                                    <path class="st285" d="M746.6,144.1c-0.7,1-1.3,2.1-2.2,3.1c-2,2.1-4.5,3.5-7.2,4.5c-0.4,0.2-0.8,0.4-1.2,0.6
				c0.1,0.1,0.2,0.2,0.3,0.3c1.2-0.4,2.5-0.8,3.7-1.3c1.7-0.8,3.3-1.8,4.6-3.2c1-1.1,1.5-2.4,2.2-3.7
				C746.8,144.3,746.7,144.2,746.6,144.1z"/>
                                    <path class="st286" d="M731.2,151.5c3.3-0.8,6.4-2.1,9.4-3.8c0.4-0.2,0.8-0.6,1.3-0.5c-1.8,1.6-3.9,2.6-6,3.4
				c-1,0.3-2.1,0.6-3.1,0.9C732.2,151.7,731.7,151.9,731.2,151.5z"/>
                                    <path class="st287" d="M718,158.5c-2.5-1.1-2.8-1.3-3.8-2.6c0.9,0.4,1.5,1,2.3,1.1c0.9,0.7,1.9,1,2.9,1.6
				C718.9,158.9,718.5,158.4,718,158.5z"/>
                                    <path class="st288" d="M716.3,159c-0.4-0.3-0.8-0.6-1.2-1.2c0.9,0.3,1.5,0.8,2.3,0.9c0.3,0.3,0.8,0.2,1.2,0.3
				c0.5,0.2,1.1,0.1,1.6,0.8C718.8,159.8,717.5,159.4,716.3,159z"/>
                                    <path class="st289"
                                          d="M706.2,211.3c-2.6,1.2-5.2,0.7-7.7-0.2C701.1,211.6,703.6,211.7,706.2,211.3z"/>
                                    <path class="st290"
                                          d="M702.1,210.4c1,0,2.1,0,3.1,0C704.1,210.7,703,210.7,702.1,210.4z"/>
                                    <path class="st291" d="M683,210c0.3,0.8,0.6,1.7,1.2,2.3c1,1.7,2,3.3,3.6,4.6c0,0.2-0.1,0.5-0.3,0.6c-1.1,0.1-1.7-0.7-2.4-1.4
				c-1.3-1.1-2.2-2.5-2.8-3.9c0.3,1.4,1.7,2.4,2.2,3.9c0,0.2,0,0.4-0.2,0.5c-1.2,0-1.3-1.4-2.1-1.9c-0.1-0.1-0.4-0.5-0.2,0.1
				c-0.1,0.1-0.2,0.2-0.3,0.4c-1.3-0.9-1.8-2.3-2.4-3.7c-0.3-1.2-0.2-1.5,0.9-1.7C681.1,209.8,682.1,209.5,683,210z"/>
                                    <path class="st86" d="M679.2,211.6c0.8,1.2,1.6,2.5,2.4,3.7c1.1,1.5,2.5,2.7,4,4.1c-0.7,0-1.4,0-2,0c-0.1-0.1-0.1-0.2-0.1-0.3
				c0.1-0.2,0.4,0,0.5-0.3c-1.7-1.8-3.4-3.5-4.4-5.8C679.4,212.5,679,212.1,679.2,211.6z"/>
                                    <path class="st292" d="M680.1,218.2c0.2,0.3,0.6,0.2,0.9,0.4c0.2,0.1,0.6,0,0.4,0.4c-2.8-0.5-4.3-2.4-5.2-4.9
				C677.3,215.7,678.3,217.3,680.1,218.2z"/>
                                    <path class="st293"
                                          d="M681,217.9c-0.1,0.2-0.3,0.2-0.4,0.2c-1.2-1.4-2.5-2.7-3.2-4.4C678.6,215,679.6,216.6,681,217.9z"/>
                                    <path class="st294" d="M683.6,219.1c0,0.1,0,0.2,0,0.2c-1.1,0.1-1.5-1-2.3-1.4c-0.4-0.6-0.8-1.3-1.3-1.9c1.3,0.7,2,2.1,3.3,2.8
				C683.4,218.9,683.6,218.9,683.6,219.1z"/>
                                    <path class="st138"
                                          d="M683.6,219.1c-0.1-0.1-0.2-0.2-0.3-0.3c0.2,0,0.4,0,0.7,0C684.2,219.3,683.7,218.9,683.6,219.1z"/>
                                    <path class="st295" d="M718.6,184.7c-2-1.5-4.4-2.3-6.7-3.1c2.4,0,4.8-0.7,7,0.5c-0.1,0.3-0.2,0.5,0,0.8
				C719.3,183.6,719,184.2,718.6,184.7z"/>
                                    <path class="st296"
                                          d="M722.9,180.7c1.3,0.7,2.6,1.4,3.9,2.1c-1.6-0.2-3-0.8-4.1-1.9C722.8,180.9,722.9,180.8,722.9,180.7z"/>
                                    <path class="st297" d="M750.1,156c1.4,2.7,1.9,5.5,1.2,8.5c-0.1,0-0.2,0-0.4,0c0-0.9,0-1.8,0-2.7c0-1-0.1-2-0.3-3
				c-0.3-0.9-0.6-1.8-0.9-2.7C749.9,156.1,750,156,750.1,156z"/>
                                    <path class="st123"
                                          d="M715,189.3c-1.6-1.3-3.4-2.3-4.9-3.7C712,186.6,713.7,187.6,715,189.3z"/>
                                    <path class="st298" d="M713.4,165.7c-1.4,0.2-2.9,0.4-4.3,0.5c-1,0.1-2,0.2-2.9-0.4c2.4,0.1,4.8-0.7,7.2-0.8
				C713.7,165.3,713.4,165.5,713.4,165.7z"/>
                                    <path class="st299" d="M713.1,164.3c-1.2-0.2-2.3-0.4-3.4-1c-0.5-0.3-1-0.5-1.3-1.1c1.3,0.4,2.5,1.1,3.9,1.4
				c0.5,0.1,1.1,0,1.6,0.3C713.6,164.3,713.3,164.2,713.1,164.3z"/>
                                    <path class="st300" d="M682,214.9c-0.2-0.4-0.4-0.7-0.6-1.1c1.1,0.8,1.8,2.1,2.9,2.9c0.9,1.1,2.1,1.8,3.4,2.5
				c-0.8,0.2-1.3,0-1.9-0.4C684.3,217.7,683.2,216.3,682,214.9z"/>
                                    <path class="st301" d="M684.5,216.2c-1.3-1.4-2.2-3-2.8-4.8c0.8,0.7,1,1.6,1.6,2.4c0.6,0.8,1.2,1.5,1.7,2.3
				c-0.1,0.1-0.2,0.1-0.4,0C684.6,216.2,684.6,216.2,684.5,216.2z"/>
                                    <path class="st302" d="M684.7,216.1c0.1,0,0.2,0,0.4,0c0.7,0.6,1.5,1.1,2.4,1.4c0.3,0.5,1.1,0.4,1.5,1.3
				C687.1,218.3,685.8,217.4,684.7,216.1z"/>
                                    <path class="st303" d="M703.7,145.3c-0.3-0.3-0.6-0.6-0.9-0.9c-1.3-1.3-2.5-2.7-4.2-3.6c-0.7-0.4-1.5-0.7-2.4-0.6
				c-0.8,0.1-1.6,0.2-2.4,0.4c-2.8,0.5-5.6,1.1-8.5,1.3c-3.2,0.2-6.5,0.3-9.7,0.8c-7.7,1.2-15.3,2.4-22.9,3.8
				c-4.4,0.8-8.8,2-12.6,4.6c-0.2,0.1-0.3,0.2-0.5,0.2c-0.4,0-0.2-0.3-0.2-0.5c-0.2,0.1-0.3,0.2-0.3,0.4c-0.2,1.3,0.3,2.5,0.4,3.7
				c0,0.5,0.6,0.2,0.8,0.5c0.7-0.5,1-1.3,1.8-1.7c1.3-1.4,3-2.1,4.8-2.6c2-0.5,4.1-0.7,6.2-0.7c2.8,0,5.5-0.1,8.3-0.1
				c1.9,0,3.7-0.3,5.4-0.8c2.3-0.7,4.6-1.4,7-1.8c4.1-0.6,8.1-1.5,12.1-2.6c2.9-0.8,5.8-1.5,8.7-2.2c4-1,7.1,1.4,8.3,4.1
				c0.4,1,0.9,2,1.3,2.9c0.6,0.3,1.1,0.6,1.7,0.9c0-0.7,0.5-1.1,0.6-1.7C705.9,147.6,704.9,146.4,703.7,145.3z"/>
                                    <path class="st304" d="M704.1,145c-0.1,0.1-0.2,0.2-0.3,0.4c0.9,1.3,1.7,2.5,2.6,3.8c0.7,0.3,0.8,1.3,1.8,1.6
				c-1.3-1.8-2.5-3.4-3.6-5.1C704.3,145.5,704.4,145,704.1,145z"/>
                                    <path class="st141"
                                          d="M717.4,180.9c-1.3-0.1-2.7-0.1-4.3,0c1.4-0.8,2.9-0.8,4-1.6C717.9,179.9,718,180.4,717.4,180.9z"/>
                                    <path class="st124"
                                          d="M645.2,181.5c-0.4,0.3-0.8,0.3-1.2,0.3C644.4,181.3,644.8,181.4,645.2,181.5z"/>
                                    <path class="st221" d="M650.5,163c0.2-0.2,0.3-0.4,0.5-0.6c0.2,0.1,0.4,0.2,0.4,0.3c0,0.4-0.3,0.2-0.5,0.3
				C650.8,163,650.7,163,650.5,163z"/>
                                    <path class="st305" d="M688.8,153.4c0.4-0.3,0.8-0.2,1.3-0.2c1.9,0,3.9,0,5.8,0c1.2,0.1,2.1,0.7,2.9,1.7c0.4,0.5,0.8,1.1,1.1,1.6
				c0.2,0.1,0.3,0.3,0.1,0.4c-0.7,0.3-1.4,0-2.1,0.4c-0.8,0.5-1.1-0.6-1.6-1c-0.1-0.1-0.3-0.3-0.4-0.4c-0.8-0.5-1.5-1-2.2-1.1
				c0.6,0.2,1.4,0.6,2.2,1.1c0.4,0.4,1,0.7,0.8,1.4c-0.1,0.2-0.3,0.3-0.6,0.4c-1.6-0.4-2.9-1.5-4.5-1.8c-2.9-0.5-5.8-0.4-8.7,0.4
				c-2.4,0.6-4.8,1.2-7.2,1.8c-0.3,0.1-0.9,0.5-1-0.3c0.3-0.3,0.6-0.7,0.9-0.9c0.5-0.3,0.4-0.5,0-0.8c-0.2-0.1,0-0.3,0.2-0.4
				c1.2,0.1,2.3-0.5,3.5-0.6c1.1-0.2,2.2-0.3,3.3-0.4c0.2,0,0.1-0.2,0.1-0.1c0,0,0,0-0.1,0.1c-0.3,0-0.7,0.1-0.9-0.1
				c0.5-0.3,1-0.3,1.5-0.2c2,0.2,3.9-0.6,5.9-0.7C689,153.6,688.8,153.6,688.8,153.4z"/>
                                    <path class="st306" d="M699.9,161.3c-0.5-0.1-1-0.5-1.4-0.7c-0.4-0.2-0.7-1.1-1.2-0.1c0,0-0.3-0.1-0.4-0.1
				c-0.7-0.3-1-0.4-1.9-0.2c-0.7,0.2-1.3,0.1-2,0.1c-3.1,0-6.1,0-9.1,0.5c-0.4,0.1-0.8,0-1.2-0.1c-0.9-0.2-1.7-0.2-2.6,0
				c-0.6,0.1-1.2,0.4-1.3-0.5c-0.1,0-0.3,0.1-0.4,0.1c-0.2-0.2-0.2-0.4-0.2-0.6c0.3-0.9,1.2-1.1,1.9-1.5c0.3-0.1,0.7-0.3,0.9,0.1
				c0.2,0.4-0.2,0.6-0.4,0.8c0.6-0.2,1.1-0.1,1.6,0c1.9,0.6,3.9,0.1,5.9,0.4c0.2,0,0-0.3,0-0.1c0,0,0,0.1-0.1,0.1
				c-1.8-0.3-3.7,0.3-5.5-0.5c0.3-0.7,1-0.7,1.5-0.6c2.4,0.2,4.9-0.5,7.4,0.4c-0.3-0.4-0.7-0.6-1-0.9c-0.2-0.8,0.3-0.7,0.7-0.6
				c0.5,0.1,1,0.4,1.3,0.8c0.6,0.6,1,0.2,1.4-0.3c1.5,0.3,2.8,1.1,4.2,1.5C699.5,160,699.9,160.4,699.9,161.3z"/>
                                    <path class="st307" d="M699.9,161.3c-0.4-0.9-1.2-1.4-2-1.9c-0.4,0-0.7-0.2-0.9-0.5c-0.1-0.3,0.1-0.6-0.1-0.8
				c-0.2-0.3-0.2-0.6-0.3-0.9c-0.2-0.5-0.5-0.8-0.9-1.1c-0.1-0.3-0.1-0.4,0.2-0.3c0.4,0.3,0.8,0.6,1.1,0.9c0.4,0.4,0.8,1,1.2,0
				c0.2-0.3,0.8-0.1,1.2-0.1c0.2,0,0.4,0.4,0.5-0.1c1,0.7,1.2,1.9,1.4,3c0.1,0.5-0.5,0.6-0.5,1.1c-0.9-0.3-1-1.4-1.7-1.8
				c0.6,0.6,1,1.4,1.7,2C700.7,161.3,700.2,161.1,699.9,161.3z"/>
                                    <path class="st308" d="M674.6,157.9c0.1,0.2,0.3,0.2,0.5,0.1c2.5-0.9,5.1-1.4,7.6-2c0.1,0,0.1,0.1,0.2,0.1
				c0.6,0.6,0.5,1.1-0.3,1.1c-1.6,0-3,0.5-4.4,1.3c-0.2,0-0.4-0.1-0.5-0.3c0.2,0.1-0.2-0.2,0-0.1c0,0,0-0.2,0-0.3
				c-0.8,0.5-1.7,0.9-2.5,1.2c-0.2,0-0.3,0-0.5,0.1c-0.2,0-0.3-0.3-0.4-0.4C674.3,158.4,674.4,158.1,674.6,157.9z"/>
                                    <path class="st309" d="M681.5,154.6c0.3,0.1,0.7-0.1,1,0.2c-1.9,0.3-3.8,0.6-5.6,1.1c-0.4,0.1-0.8,0.2-1.2-0.2
				C677.6,154.9,679.6,154.8,681.5,154.6z"/>
                                    <path class="st309" d="M695.9,153.2c-0.2,0.2-0.4,0.3-0.6,0.3c-1.5,0-3,0-4.6,0c-0.2,0-0.5-0.1-0.6-0.3
				C692,152.8,693.9,152.6,695.9,153.2z"/>
                                    <path class="st309" d="M688.8,153.4c0.2,0,0.5,0.1,1,0.2c-2,0.6-3.9,0.8-5.6,1c-0.4,0.1-0.8,0.1-1.1-0.3
				C685,154,686.8,153.6,688.8,153.4z"/>
                                    <path class="st310" d="M675.2,159c0.7-1,1.9-1,2.9-1.5c0.1,0.4-0.2,0.5-0.3,0.7c-0.1,0.9-0.5,1.6-1.3,2.1
				c-0.4-0.2-0.4-0.4-0.2-0.7c0-0.1,0-0.2,0.1-0.3c0.1-0.3,0-0.4-0.3-0.4c-0.2,0.3-0.4,0.6-0.6,0.9c-0.6,0-0.4-0.3-0.3-0.6
				C675.2,159.2,675.2,159.1,675.2,159z"/>
                                    <path class="st311" d="M700.8,160.7c-0.2,0-0.4,0-0.5-0.1c-0.8-0.9-1.5-1.7-2.2-2.7c1.5,0.3,2.1,1.4,2.7,2.6
				C700.8,160.6,700.8,160.6,700.8,160.7z"/>
                                    <path class="st306" d="M676.6,160.2c0.3-0.8,0.8-1.4,1.2-2c0.2,0,0.3,0.2,0.3,0.3c0.2,0.6-0.2,1-0.4,1.5
				c-0.2,0.3-0.2,0.8-0.8,0.8c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.1-0.1-0.1-0.2C676.6,160.2,676.6,160.2,676.6,160.2z"/>
                                    <path class="st312"
                                          d="M675.2,159.2c0,0.2,0.1,0.5,0.3,0.6c0,0.6-0.2,1.2-0.7,1.9C674.6,160.7,674.8,160,675.2,159.2z"/>
                                    <path class="st308" d="M677,160.8c0.4-0.2,0.2-0.7,0.5-0.9c0.3-0.1,0.5-0.4,0.9-0.3c0,0.2,0,0.4,0,0.6c-0.3,0.3-0.6,0.6-0.9,0.8
				C677.2,161.1,677,161.1,677,160.8z"/>
                                    <path class="st312" d="M676.6,160.2c0,0.1,0,0.2,0.1,0.4c-0.1,0.3-0.2,0.7-0.7,0.7c0-0.6,0-1.1,0.3-1.6
				C676.4,159.8,676.4,160,676.6,160.2z"/>
                                    <path class="st312"
                                          d="M676.1,158.9c0-0.2,0.2-0.5,0.4-0.4c0.4,0.2,0.2,0.5-0.1,0.8C676.3,159.1,676.3,159,676.1,158.9z"/>
                                    <path class="st305"
                                          d="M674.3,158.7c0.1,0.1,0.3,0.3,0.4,0.4c-0.1,0.2-0.3,0.6-0.5,0.5C673.9,159.3,674.2,159,674.3,158.7z"/>
                                    <path class="st45"
                                          d="M699.1,254.6c-0.3,0-0.7-0.1-0.9,0.3C698.5,254.9,698.9,255,699.1,254.6z"/>
                                    <path class="st113"
                                          d="M726.7,150.4c-0.6,0.5-1.1,0.5-1.6,0.1C725.7,150.2,726.1,150.2,726.7,150.4z"/>
                                    <path class="st308" d="M697,158.1c0.5,0.2,0,0.4,0,0.6c-0.8,0.1-1.5-0.4-2.1-0.8c-3.4-2.1-7.1-2.4-10.9-1.6c-0.2,0-0.4,0-0.6,0
				c-0.2,0-0.5-0.1-0.6-0.3c0,0,0,0,0,0c4.2-1.3,8.3-1.4,12.3,0.9c0.4,0.2,0.8,0.4,1.2,0.6C696.5,157.7,696.9,157.7,697,158.1z"/>
                                    <path class="st313"
                                          d="M695.9,155.8c-0.1,0.1-0.2,0.2-0.2,0.3c-0.9-0.5-1.7-1-2.7-1.3C694.1,154.6,695,155.1,695.9,155.8z"/>
                                    <path class="st314"
                                          d="M697,158.1c-0.3-0.2-0.6-0.3-0.8-0.6c0.1-0.1,0.2-0.2,0.3-0.3C696.8,157.4,697,157.7,697,158.1z"/>
                                    <path class="st307" d="M697.6,156c-0.2-0.1-0.4-0.2-0.4-0.5c0,0,0.2-0.1,0.2,0c0.1,0.1,0.3,0.3,0.4,0.4
				C697.8,156,697.7,156,697.6,156z"/>
                                    <path class="st312" d="M682.8,156.1c0.2,0,0.4,0,0.6,0c0.2,0.1,0.4,0.2,0.6,0.2c1.6-0.1,3.2-0.2,4.8,0.2c0.6,0.2,1.2,0.4,1.5,1
				c0.7,0.4,1.4,0.9,1.9,1.7c-0.9-0.2-1.7-0.4-2.5-0.5c-2.4-0.2-4.9-0.1-7.3,0c0-0.1,0-0.1-0.1-0.2c0.5-0.9,1.5-0.7,2.4-0.9
				c-1.1,0.1-2.2,0.1-2.8,1.3c0,0.1-0.1,0.2-0.1,0.3c-0.8-0.1-1.4,0.1-2.2,0.7c0.2-0.8,0.9-1.1,1.1-1.8c-1,0.4-1.9,0.7-2.5,1.5
				c-0.3,0-0.4,0.6-0.9,0.3c0.1-0.5,0.4-1,0.6-1.4c1.3-1.4,3-1.6,4.9-1.5C682.9,156.6,682.5,156.4,682.8,156.1z"/>
                                    <path class="st314" d="M683.7,156.4c-0.1-0.1-0.2-0.2-0.4-0.3c1.3-0.2,2.6-0.5,4-0.6c2.6-0.1,5,0.5,7.2,1.8
				c0.8,0.5,1.7,0.9,2.5,1.4c0.3,0.2,0.5,0.4,0.8,0.6c-0.4,0.4-0.7,0-1-0.1c-0.6-0.2-1-0.8-1.8-0.7c-0.3,0.1-0.8-0.5-1.2-0.8
				c-1.3,0-2.4-0.7-3.6-1C688.1,156.4,685.9,156.7,683.7,156.4z"/>
                                    <path class="st308" d="M683.7,156.4c1.9,0,3.8-0.1,5.7,0c1.6,0,3.1,0.4,4.5,1.4c-0.1,0.1-0.2,0.1-0.2,0.2c0,0.2,0.4,0.4,0.2,0.6
				c-0.2,0.2-0.5,0.3-0.8,0.1c-0.5-0.3-1-0.7-1.5-0.9c-0.4-0.2-0.7-0.8-1.3-0.3c-1.6-0.8-3.4-0.9-5.1-0.9
				C684.7,156.6,684.2,156.9,683.7,156.4z"/>
                                    <path class="st315" d="M681.9,159.2c0-0.1,0-0.1,0-0.2c0-0.6,0.2-0.5,0.6-0.3c0,0,0,0,0,0c0.4,0.5,1,0.3,1.5,0.3
				c1.6,0,3.1,0,4.9,0.3c-0.5,0.3-0.9,0.4-1.4,0.4C685.6,159.5,683.7,159.6,681.9,159.2z"/>
                                    <path class="st306" d="M682.5,158.7c-0.2,0-0.5,0.1-0.6,0.3c-0.2,0-0.6,0-0.3-0.4c0.4-0.5,1-0.8,1.6-1c0.8-0.2,1.6-0.4,2.5-0.3
				c-0.5,0.5-1.1,0.4-1.6,0.5C683.5,157.9,682.8,157.9,682.5,158.7z"/>
                                </g>
                                <path class="st111" d="M704.3,192.8c-0.1-0.9-0.2-1.7-0.8-2.4c-0.3-0.4-0.9-0.2-0.9,0.2c-0.4,0.2-0.4,1,0.2,1c0.1,0,0.1,0,0.2,0
			c0.2,0.4,0.3,0.9,0.3,1.3c-0.3-0.2-0.8-0.1-0.8,0.4c0,0.5,0,1.1,0,1.6c-1.6,2.4-4,4.4-6.8,5.4c-2.5,0.9-5.1,0.6-7.7,0.1
			c-0.7-0.3-1.4-0.5-2.2-0.4c-0.5,0-0.7,0.9-0.1,1c0.6,0.1,1.3,0.3,1.9,0.4c0.3,0.1,0.6,0.3,0.9,0.4c0.8,0.3,1.6,0.5,2.5,0.6
			c1.8,0.2,3.6,0,5.3-0.6c1.2-0.4,2.5-1,3.5-1.8c0.2,0.2,0.5,0.3,0.7,0c0.4-0.5,0.8-1,1.3-1.4c0.5-0.4,1-0.8,1.2-1.4
			c0.1-0.3,0.3-0.6,0.3-1c0.2-0.3,0.5-0.5,0.6-0.8C704.4,194.6,704.3,193.7,704.3,192.8z"/>
                                <path class="st92" d="M685.2,199.7c-0.1-0.1-0.3-0.1-0.4-0.1c-0.2-0.1-0.3-0.3-0.4-0.4c-0.3-0.4-0.6-0.8-1-1
			c-0.2-0.2-0.3-0.3-0.5-0.5c-1.2-1.4-2.1-3.1-3-4.7c-0.5-0.9-1.1-1.8-1.6-2.7c-0.6-0.9-1.4-1.7-1.9-2.7c-0.1-0.1-0.3-0.3-0.4-0.2
			c0,0-0.1,0-0.1,0c0-0.2-0.2-0.4-0.5-0.4c0,0,0,0,0,0c-0.4-0.4-1.1-0.6-1.7-0.1c-1,0.9-0.6,2.7-0.3,3.8c0.3,1.4,0.7,2.9,1.4,4.1
			c0.4,0.7,0.9,1.1,1.6,1.5c1.5,1.9,3.4,3.5,5.6,4.7c0.1,0.1,0.3,0.1,0.4,0c0.3,0.2,0.6,0.4,1,0.6c0.4,0.2,0.6,0.2,1,0.1
			c0.3-0.1,0.7-0.1,0.9-0.4c0.3-0.3,0.3-0.6,0.2-0.9c0-0.1,0.1-0.2,0.1-0.2C685.5,200,685.4,199.8,685.2,199.7z M679.9,195.2
			c0.6,1.1,1.3,2.1,2.1,3.1c-0.2,0-0.4-0.1-0.6-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0-0.1-0.1-0.2-0.1c-0.9-0.7-1.7-1.5-2.5-2.4
			c-0.1-0.1-0.3-0.3-0.4-0.4c-0.2-0.3-0.3-0.6-0.5-0.9c-0.5-1.2-0.9-2.8-0.9-4.1v0c0.4,0.5,0.7,1.1,1.1,1.6
			C678.5,192.7,679.2,194,679.9,195.2z"/>
                                <path class="st111" d="M701.1,198.2c-0.6,0.3-1.1,0.8-1.6,1.3c-0.5,0.5-1.1,0.8-1.7,1.2c-1.3,0.7-2.7,1.1-4.1,1.4
			c-0.9,0.2-1.7,0.3-2.6,0.3c0-0.2-0.1-0.5-0.4-0.6c-1.1-0.2-2.1-0.3-3.2-0.5c0-0.1,0.1-0.2,0.1-0.3c0.1-0.4-0.4-0.8-0.7-0.6
			c-0.2,0.1-0.4,0.3-0.6,0.4c0-0.1-0.1-0.1-0.1-0.1c-0.1-0.4-0.7-0.5-0.9-0.1c-0.2,0.4-0.4,0.6-0.7,0.8c0,0,0,0,0,0
			c-0.1,0-0.2-0.1-0.3-0.1c-0.5-0.2-0.9,0.7-0.4,0.9c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c2,0.9,4.1,1.2,6.3,1.1
			c1.2,0.1,2.4,0,3.6,0c1.5-0.1,2.7-0.4,3.9-1.3c1.3-1,2.5-2,3.7-3C702.2,198.6,701.6,198,701.1,198.2z"/>
                                <path class="st152" d="M671.7,190c0.1-0.1,0.2-0.2,0.2-0.4c0-2.3,0.1-4.6,0-6.9c0-0.6-0.8-0.6-1-0.2c-0.1,0-0.1,0-0.2,0.1
			c-0.1,0.1-0.3,0.2-0.5,0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1-0.1c-0.4-0.3-1,0.3-0.7,0.7c0.1,0.1,0.2,0.2,0.3,0.3c0,0.3,0,0.6,0,0.9
			c-0.1,0.4-0.2,0.8-0.3,1.3c-0.1,0.8,0.1,1.6,0.3,2.4c0.4,1.7,0.9,3.4,1.6,5c0.2,0.5,1,0.5,1-0.1C672,192.1,671.9,191.1,671.7,190z
			"/>
                                <path class="st103" d="M682.1,180.4c-0.5,0-1,0.1-1.5,0.3c-0.7-1.2-1.6-2.3-2.6-3.2c-0.2-0.2-0.5-0.2-0.7,0
			c-0.2,0.2-0.2,0.5,0,0.7c0.1,0.1,0.3,0.3,0.4,0.4c-0.2,0-0.4,0.1-0.5,0.4c-0.2,0-0.4,0.1-0.5,0.3c-0.1,0-0.2,0.1-0.3,0.2
			c-0.3-0.3-0.8-0.1-0.8,0.3c-0.3-0.2-0.7,0-0.8,0.3c-0.2,0-0.5,0.2-0.5,0.4c-0.3-0.2-0.8,0.1-0.8,0.6c0,0.2,0.1,0.3,0.1,0.5
			c0,0-0.1,0.1-0.1,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0.2,0,0.3-0.1,0.5c-0.2,0.6-0.4,1.1-0.4,1.7
			c0,0.7,0.2,1.5,0.5,2.1c0,0,0,0.1,0,0.1c0,0.4,0.3,0.5,0.6,0.5c0.1,0.1,0.2,0.3,0.3,0.3c0.3,0.2,0.6,0.2,0.8,0.1c0,0,0,0,0,0
			c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0c0,0,0,0.1,0.1,0.1c0.4,0.4,1.1-0.1,0.8-0.6c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1,0-0.2
			c0.2-0.3,0.4-0.6,0.5-0.8c0.2-0.3,0-0.6-0.2-0.7c0.6-0.5,1.2-1,1.8-1.5c0.6-0.4,1.2-0.9,1.8-1.2c0.1,0,0.1-0.1,0.2-0.1
			c0.1,0.2,0.5,0.3,0.7,0.2c0.2-0.1,0.3-0.4,0.2-0.6c0.3-0.1,0.6-0.3,0.9-0.3C682.7,181.3,682.7,180.3,682.1,180.4z"/>
                                <path class="st0" d="M705,175.2c-0.2,0-0.3,0-0.5,0.1c-0.4,0.2-0.8,0.6-1.1,0.9c-0.5,0.5-1.2,0.5-1.9,0.5c-1.5,0-2.9,0-4.3,0.2
			c-1.4,0-2.8,0.3-4.2,0.5c-0.9,0.1-1.8,0.2-2.7,0.3c0.1-0.1,0.2-0.1,0.3-0.2c0.8,0,1.6-0.2,2.4-0.4c0.4-0.1,0.5-0.9,0-1
			c-0.7-0.1-1.4-0.2-2.1,0c-0.2,0.1-0.4,0.2-0.6,0.4c-0.4-0.1-0.8-0.1-1.1-0.2c-1.2-0.3-2.4-0.1-3.6,0c-0.3,0-0.4,0.3-0.3,0.6
			c-0.1,0-0.2-0.1-0.4-0.1c-0.6-0.3-1.1,0.6-0.5,0.9c0.5,0.2,1,0.4,1.5,0.4c-0.8,0-1.5,0.1-2.3,0.1c-1.2,0-2.8,0.4-3.8-0.4
			c-0.1-0.3-0.1-0.7-0.2-1c-0.1-0.2-0.3-0.4-0.5-0.4c-0.2,0-0.4,0.1-0.5,0.4c0,0.2-0.1,0.3-0.1,0.5c-0.1,0.1-0.2,0.3-0.1,0.6
			c0,0,0,0.1,0.1,0.1c0,0,0,0.1,0,0.1c0.1,0.5,0.4,0.8,0.9,0.9c0.8,0.4,1.7,0.7,2.6,0.9c0.3,0.1,0.6-0.1,0.6-0.3c0-0.1,0-0.2,0-0.3
			c1.6,0,3.1-0.1,4.7-0.2c1.7-0.1,3.4-0.3,5.2-0.5c1.3-0.2,2.6-0.4,4-0.5c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0
			c1.8,0.1,3.5,0.1,5.3-0.1c1.2-0.2,2.9-0.5,3.5-1.8C705.7,175.9,705.5,175.2,705,175.2z"/>
                                <path class="st104" d="M683.8,176.3c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.1-0.3-0.1c-0.2,0-0.4,0.1-0.5,0.4c0,0.1,0,0.2,0,0.3
			c0,0-0.1,0-0.1,0c-0.2,0-0.3-0.1-0.5-0.1c-0.1,0-0.3,0.1-0.4,0.1c-0.1,0.1-0.2,0.2-0.1,0.4c-0.6,0-1.1,0-1.7,0
			c-0.2,0-0.5,0.2-0.5,0.4c0,0.2,0.1,0.5,0.4,0.5c0.8,0.2,1.7,0.3,2.5,0.3c0.2,0,0.4-0.1,0.5-0.3c0,0,0,0,0.1-0.1c0,0,0.1,0,0.1,0.1
			c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.4,0.2,0.5,0.1c0.1,0,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.2,0.1-0.3C684,177.2,684,176.7,683.8,176.3z"
                                />
                                <g>
                                    <polygon class="st104"
                                             points="693.6,177.2 693.6,177.2 693.6,177.2 693.6,177.2 			"/>
                                    <path class="st104" d="M703.7,175.1c-0.7,0.4-1.4,0.8-2.3,0.9c-0.8,0.1-1.6,0-2.4,0c-1.6,0-3.2,0-4.8,0c-0.1-0.3-0.1-0.7-0.2-1
				c-0.1-0.4-0.6-0.5-0.8-0.2c-0.2,0.2-0.3,0.5-0.2,0.7c0,0.2,0.1,0.4,0.1,0.6c0,0.1,0,0.2,0,0.2c0,0.1,0,0.3,0,0.4
				c0,0.1,0.1,0.2,0.2,0.3c0.1,0.1,0.1,0.1,0.2,0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1,0.1
				c0.1,0.1,0.3,0.1,0.4,0.1c0.2-0.1,0.3-0.2,0.3-0.3c1.7,0,3.4,0,5.1,0c0.8,0,1.6,0,2.5-0.1c0.8-0.1,1.5-0.5,2.3-0.9
				C704.8,175.6,704.3,174.7,703.7,175.1z"/>
                                </g>
                                <path class="st153" d="M700.6,178.5c-1-0.3-2.1,0-3.2-0.2c-0.3-0.2-0.6-0.3-1-0.3c-0.3,0-0.6,0.4-0.5,0.7c-0.9-0.1-1.8-0.1-2.7,0
			c-1.9,0.1-3.8,0.1-5.7,0.2c-0.2,0-0.4,0.1-0.4,0.3c-1.9,0.3-3.9,0.5-5.8,0.6c-0.2-0.1-0.4-0.3-0.6-0.4c-0.1,0-0.1-0.1-0.2-0.1
			c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2-0.1-0.6,0.1-0.6,0.3c-0.1,0.3,0.1,0.5,0.3,0.6c0.1,0,0.1,0,0.2,0.1c0,0.2,0.1,0.5,0.4,0.6
			c0.2,0,0.4,0.1,0.6,0.1c0.1,0,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c2-0.1,3.9-0.3,5.9-0.6
			c0,0.2,0.1,0.4,0.4,0.4c0.5,0.1,0.9,0.2,1.4,0.4c0.1,0.1,0.2,0.2,0.4,0.2c0,0,0,0,0,0l0.6,0.3c0,0,0.1,0,0.1,0
			c0.1,0.2,0.2,0.3,0.4,0.3c0.5,0,0.9-0.1,1.3-0.3c0.2-0.1,0.3-0.2,0.3-0.4c0.3,0,0.6,0,1,0c0.9,0,1.9-0.1,2.8-0.2
			c0.8-0.1,1.8-0.1,2.6-0.4c0.7-0.3,1.3-0.9,2-1.1C701,179.3,701.1,178.6,700.6,178.5z M695.2,180.1
			C695.2,180.1,695.1,180.1,695.2,180.1c-1,0.1-2,0.1-3,0.1c-0.4,0-0.9-0.1-1.2,0c-0.1,0-0.2,0.1-0.3,0.2c0,0,0,0,0,0
			c-0.2-0.1-0.3-0.2-0.5-0.2c0,0-0.3,0-0.4,0.1c0,0-0.1,0-0.1-0.1c0,0-0.1,0-0.1-0.1c0,0,0,0-0.1,0c-0.3-0.1-0.5-0.2-0.8-0.3
			c1.4,0,2.8-0.1,4.2-0.1c0.8,0,1.6-0.1,2.4,0C695.2,179.7,695.1,179.9,695.2,180.1z"/>
                                <path class="st117" d="M707.6,198.8c-1.4,0.9-2.9,1.7-4.5,2.3c0.9-0.7,1.6-1.5,2.2-2.4c0.3-0.4,0.3-0.8,0.2-1.3
			c0-0.3-0.1-0.6-0.1-0.8c0.1-0.2,0.2-0.3,0.3-0.5c0.7-1.4,0.8-3,0.2-4.5c0,0,0,0,0,0c0-0.8,0-1.6-0.1-2.5c0-0.2-0.1-0.4-0.3-0.5
			c-0.1-0.6-0.3-1.2-0.6-1.8c-0.6-1.5-1.6-2.9-1.8-4.6c-0.1-0.6-1-0.6-1-0.1c0,0-0.1,0-0.1,0c0-0.6-0.9-0.6-1,0
			c-0.2,1.3,0.4,2.4,1,3.5c0.1,0.2,0.1,0.3,0.2,0.5c0.4,1.5,0.6,3,0.9,4.5c0.1,0.4,0.5,0.4,0.8,0.3c0,0.3,0,0.6,0.1,0.8
			c0,0.2,0.1,0.5,0.3,0.6c0,0.9-0.1,1.8-0.3,2.6c-0.4,1.2-1.3,2.1-2.1,3c-0.9,0.9-1.8,1.8-2.8,2.6c-0.2,0.1-0.2,0.4-0.1,0.5
			c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c-0.2,0.1-0.3,0.2-0.5,0.3c0,0,0,0-0.1,0.1c-0.2,0-0.3,0-0.5,0.1
			c-0.5,0.1-0.9,0.3-1.3,0.6c-0.5,0.3-0.2,1.1,0.4,0.9c1-0.4,2.1-0.2,3.2-0.4c1-0.1,2-0.4,2.9-0.8c1.9-0.8,3.8-1.6,5.5-2.8
			C708.6,199.3,708.1,198.4,707.6,198.8z"/>
                                <path class="st134" d="M713.5,190.9c-1-0.3-1.9-0.5-2.8-1c0.1-0.2,0.1-0.4-0.1-0.5c-1.2-1-2.3-2.2-3.2-3.5c-0.1-0.4-0.1-0.8,0-1.2
			c0-0.2-0.1-0.4-0.2-0.4c0,0,0,0,0,0c0.4-0.1,0.6-0.5,0.4-0.9c-0.2-0.3-0.5-0.4-0.8-0.5c-0.3-0.1-0.6-0.2-0.8-0.2
			c-0.5-0.1-1-0.2-1.5-0.3c-0.2-0.1-0.3-0.3-0.5-0.5c-0.2-0.2-0.5-0.2-0.7,0c-0.2,0.1-0.3,0.4-0.1,0.6c0.1,0.1,0.1,0.2,0.2,0.3
			c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2c0,0.1,0.1,0.3,0.2,0.4c0.1,0.1,0.1,0.1,0.2,0.2c0,0,0,0,0,0.1
			c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.3,0.2,0.5,0.5,0.5c0,0,0,0,0,0c0.3,0.5,0.5,1,0.9,1.5c0.3,0.4,0.6,0.8,1,1.1c0,0.1,0,0.3,0,0.4
			c0.7,1.2,1.6,2.4,2.6,3.4c0.5,0.5,1,0.9,1.8,0.9c0.8,0,1.6-0.1,2.4-0.1C713.9,191.9,714,191.1,713.5,190.9z"/>
                                <path class="st187" d="M713.9,185.2c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.1-0.1-0.1-0.2-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0,0,0-0.1,0
			c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0,0-0.1c-0.5-0.4-1.1-0.7-1.7-0.9
			c-0.7-0.3-1.4-0.5-2.2-0.7c-0.4-0.1-0.7-0.2-1.1-0.3c-0.1-0.1-0.2-0.3-0.4-0.2c-0.2,0-0.4,0-0.6,0c-0.3-0.1-0.6-0.1-0.9-0.2
			c-0.5-0.1-0.9-0.3-1.4-0.2c-0.6,0.1-0.6,0.9,0,1c0.4,0,0.8,0.1,1.1,0.2c0.1,0,0.2,0.1,0.3,0.1c0.3,0.1,0.6,0.1,0.9,0.1
			c0.6,0.1,1.2,0.2,1.7,0.4c0.6,0.2,1.3,0.4,1.9,0.6c0.6,0.2,1.2,0.4,1.7,0.8c0.2,0.2,0.4,0.1,0.6,0.1c0,0.1,0.1,0.1,0.2,0.2
			c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0,0.2,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
			c0,0,0.1,0,0.1,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1c0-0.1,0.1-0.2,0.1-0.3
			C713.9,185.3,713.9,185.3,713.9,185.2z"/>
                                <path class="st141" d="M713.6,174.8c-0.3-0.1-0.5-0.1-0.7-0.1c-0.5,0-1-0.1-1.5,0c-0.7,0.1-1.2,0.4-1.8,0.8
			c-0.7,0.4-1.4,0.9-2.2,1.3c-0.4,0.2-0.9,0.3-1.3,0.5c-0.1,0-0.1,0-0.2,0c-1.4,0.4-2.7,1-4,1.6c-0.5,0.2-0.2,0.9,0.3,0.9
			c0.1,0,0.3,0,0.4,0c0,0.2,0.2,0.4,0.5,0.4c2.5,0.2,4.9,0.3,7.4,0.4c0.6,0,0.7-0.9,0.1-1c-0.9-0.2-1.9-0.3-2.8-0.5
			c0.2,0,0.4,0,0.7,0c0.5,0,0.6-0.5,0.4-0.8c0.7-0.5,1.3-0.9,2-1.4c0.4-0.2,0.7-0.5,1.1-0.7c0.1,0,0.7-0.5,1-0.7c0.1,0,0.3,0,0.4,0
			C713.8,175.7,714.1,175,713.6,174.8z"/>
                                <path class="st103" d="M704.1,181.1c-0.4-0.6-0.9-1.1-1.6-1.4c-0.1-0.1-0.2-0.1-0.4,0c0-0.1,0-0.3-0.1-0.4c0,0,0,0,0,0
			c0-0.1,0-0.1,0-0.2c0,0,0.1-0.1,0.1-0.1c0.2-0.2,0.2-0.5,0-0.7c-0.2-0.2-0.5-0.2-0.7,0c0,0,0,0,0,0c-0.4-0.3-1-0.3-1.4-0.4
			c-0.8-0.1-1.6-0.2-2.4-0.2c-0.6,0-0.6,1,0,1c0.3,0,0.6,0,0.9,0c0,0.1,0.1,0.3,0.2,0.4c0.3,0.2,0.5,0.4,0.8,0.5c0,0,0,0,0,0
			c-0.4,0.2-1,0.4-1.5,0.5c-0.5,0.2-0.4,1,0.1,1c0,0,0.1,0,0.1,0c0,0.2,0.2,0.4,0.5,0.4c0.1,0,0.1,0,0.2,0c-0.1,0.2,0.1,0.6,0.3,0.6
			l0.7,0.1c0.1,0.4,0.3,0.7,0.5,1c0,0,0,0,0.1,0c-0.1,0.5,0.6,0.9,0.9,0.4c0.2-0.3,0.4-0.6,0.6-0.8c0.1-0.1,0.2-0.2,0.4-0.4
			c0.1,0,0.1-0.1,0.2-0.1c0.3,0.1,0.6-0.1,0.6-0.4c0.1,0,0.1,0,0.2-0.1c0.1,0,0.1,0,0.2,0C704,181.9,704.3,181.5,704.1,181.1z"/>
                                <path class="st141" d="M712.3,174.4c-1.1-0.3-2.1,0-3.1,0.4c-1,0.4-1.9,0.8-2.9,1.3c-0.2-0.2-0.5-0.4-0.8-0.4
			c-0.3,0-0.5,0.3-0.5,0.6c-0.6,0.3-1.1,0.6-1.7,0.9c-0.7,0.3-1.5,0.6-2.4,0.7c0,0-0.1,0-0.1,0c-0.4,0-0.7,0.6-0.4,0.9
			c0.7,0.6,1.5,0.6,2.4,0.5c0.2,0,0.4-0.2,0.5-0.4c0.7-0.1,1.3-0.3,2-0.6c0.3-0.2,0.8-0.5,1-0.9c0.2,0.1,0.4,0.2,0.6,0.2
			c0.2,0,0.5,0,0.7-0.1c0.3-0.1,0.4-0.4,0.6-0.6c0.2-0.2,0.6-0.2,0.9-0.3c0.4-0.1,0.8-0.2,1.2-0.3c0.7-0.2,1.5-0.6,2.1-0.9
			C712.8,175.2,712.7,174.6,712.3,174.4z"/>
                                <path class="st154" d="M718.4,172.6c-0.2-0.3-0.3-0.7-0.5-1c-0.1-0.5-0.3-1-0.4-1.6c-0.1-0.5-0.3-0.9-0.5-1.3
			c-0.2-0.6-0.3-1.2-0.3-1.8c0-0.5-0.6-0.7-0.9-0.3c-0.3,0.5-0.6,0.9-0.9,1.4c-0.2-0.1-0.4-0.1-0.6-0.1c-0.3,0-0.5,0.2-0.5,0.5
			c-0.3-0.1-0.7,0.1-0.7,0.5c0,0.2,0,0.5,0,0.7c0,0.3,0.2,0.5,0.5,0.5c0.2,0.4,0.3,0.8,0.3,1.3c0,0.2,0.1,0.5,0.1,0.7
			c-1.2,0.5-2.3,1-3.4,1.5c-0.5,0.3-0.2,1.1,0.4,0.9c0.1,0.2,0.2,0.3,0.4,0.3c0.2,0,0.5,0,0.7-0.1c0,0.4,0.3,0.6,0.7,0.7
			c0.9,0.2,1.9,0.3,2.8,0.5c0,0.1,0,0.1,0,0.1c0,0.1,0,0.3,0,0.4c0.1,0.2,0.2,0.3,0.4,0.4c0.3,0.2,0.8,0.2,1.1-0.2
			c0.2-0.3,0.1-0.9,0-1.2c-0.1-0.2-0.1-0.3-0.2-0.4c0.1,0,0.3-0.1,0.3-0.2c0.2,0,0.3-0.1,0.4-0.3l0.1-0.5c0,0,0,0,0,0
			c0.1-0.1,0.2-0.2,0.3-0.3c0.2,0,0.4-0.1,0.4-0.3C718.4,173.1,718.5,172.9,718.4,172.6z"/>
                                <path class="st164" d="M713.8,171.5c0-0.4-0.1-0.8-0.2-1.1c-0.1-0.2-0.2-0.4-0.3-0.6c0,0,0,0,0-0.1c0-0.2-0.1-0.4-0.1-0.5
			c-0.1-0.2-0.3-0.4-0.5-0.4c-0.3,0-0.4,0.2-0.4,0.5c-0.1-0.1-0.1-0.1-0.2-0.2c-0.2-0.2-0.5-0.2-0.7,0c-0.2,0.2-0.2,0.5,0,0.7
			c0.2,0.2,0.3,0.4,0.5,0.5c-0.2,0-0.3,0.2-0.4,0.3c0,0,0,0-0.1,0c-0.2-0.1-0.4-0.2-0.5-0.1c0-0.1,0-0.1,0-0.2c-0.1-0.5-0.9-0.5-1,0
			c-0.1,0.4-0.2,1-0.1,1.4c-0.1,0-0.2-0.1-0.3,0c-0.5,0.1-1,0.4-1.4,0.7c-0.5,0.3-0.2,1,0.4,0.9c0.2,0,0.3-0.1,0.5-0.1
			c-0.1,0.3-0.1,0.6-0.1,1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0.2,0.1,0.5,0.4,0.6c0.1,0,0.3,0,0.4-0.1
			c0.5,0,1.1-0.2,1.3-0.7c0.1-0.1,0.1-0.3,0.1-0.4c0.5-0.1,1-0.4,1.3-0.6c0.1-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.4-0.1,0.6-0.2
			c0.1,0,0.2-0.1,0.4-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0C714.5,172.3,714.4,171.5,713.8,171.5z"/>
                                <path class="st141" d="M709,174.7C709,174.7,709,174.6,709,174.7c0-0.2-0.1-0.4-0.1-0.5c0-0.2,0.1-0.5,0-0.7
			c0-0.1-0.1-0.2-0.2-0.3c0-0.1-0.1-0.2-0.2-0.2c-0.1-0.1-0.2-0.1-0.2-0.2c0.1-0.3-0.2-0.7-0.6-0.6c-0.5,0.1-1,0.2-1.5,0.2
			c-0.2-0.1-0.3-0.1-0.5-0.1c0,0-0.1,0-0.1,0c-0.2-0.1-0.4-0.1-0.6-0.2c-0.1,0-0.1,0-0.2,0c-0.1-0.1-0.3-0.1-0.4-0.2
			c-0.2-0.1-0.5-0.1-0.7,0.2c-0.1,0.1-0.1,0.3,0,0.5c-0.2,0.2-0.2,0.6,0.1,0.8c0.3,0.1,0.4,0.5,0.6,0.8c0.2,0.2,0.3,0.4,0.5,0.5
			c0.2,0.1,0.3,0.3,0.4,0.4c0,0.1,0,0.2,0,0.4c0,0.3-0.1,0.5-0.2,0.8c-0.1,0.2-0.1,0.5,0.2,0.7c0.3,0.1,0.5,0,0.7-0.2
			c0.1-0.1,0.2-0.3,0.3-0.4c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.3,1.3-0.6c0.1-0.1,0.2-0.1,0.3-0.2c0.2,0,0.5,0,0.7,0
			C709.1,175.5,709.3,175,709,174.7z"/>
                                <path class="st0" d="M679.4,199.6c-1.8-1.8-3.5-3.8-4.7-6c-0.7-1.3-1.3-2.7-1.6-4.2c0-0.6-0.1-1.3-0.1-1.9c0-0.1,0-0.2-0.1-0.3
			c0-0.3,0-0.6,0.1-1c0-0.3-0.2-0.5-0.5-0.5c0,0,0,0,0,0c0-0.6-1-0.7-1,0c0,2-0.4,4.2,0.6,6c1,1.9,2.2,3.7,3.3,5.5
			c0.2,0.3,0.5,0.3,0.7,0.1c0.8,1.1,1.7,2,2.7,3C679.2,200.8,679.9,200.1,679.4,199.6z"/>
                                <path class="st88" d="M669.8,182.5c0-0.5-0.6-0.6-0.9-0.3c0.1-0.6,0.1-1.1,0.1-1.7c0-0.5-0.7-0.7-0.9-0.3
			c-0.3,0.5-0.3,1.1-0.3,1.6c-0.1-0.2-0.4-0.2-0.5-0.1c0-0.2-0.1-0.4-0.3-0.6c-0.3-0.3-0.7-0.1-0.8,0.2c-0.2,0.4-0.3,0.9-0.5,1.3
			c-0.2-0.1-0.4-0.1-0.6,0c-0.1,0-0.2,0-0.3,0c0-0.6-1-0.6-1,0c0,0.8,0,1.6,0,2.4c0,0.6,0.1,1.2,0.5,1.7c0.5,0.5,1.3,0.4,2,0.5
			c0.6,0,1.2,0,1.7,0.1c0,0,0,0,0.1,0c0.2,0,0.4,0.1,0.5,0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0.4,0.1,0.7-0.2,0.6-0.6
			c-0.2-0.7,0.1-1.4,0.2-2.1C669.8,184,669.8,183.2,669.8,182.5z"/>
                                <path class="st160" d="M668.4,187.4c-1.1-0.6-2.4-0.6-3.7-0.8c-0.3-0.1-0.4-0.1-0.5-0.4c-0.1-0.3-0.1-0.7-0.2-1
			c-0.1-0.7-0.2-1.5-0.3-2.2c0-0.3-0.4-0.4-0.7-0.3c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0
			c0,0-0.1,0-0.1,0c-0.3,0.1-0.4,0.4-0.3,0.6c0,0.1,0,0.3,0,0.4c-0.3,0.8-0.3,1.6,0,2.4c0.2,0.6,0.5,1.2,0.7,1.8
			c0.3,0.7,0.6,1.3,0.9,2c0.1,0.2,0.5,0.3,0.7,0.2c0.2-0.1,0.2-0.3,0.2-0.5c0-0.1,0.1-0.2,0.1-0.3c0-0.5-0.1-0.9-0.1-1.4
			c1.1,0.2,2.2,0.3,3.3,0.3C668.6,188.3,668.8,187.6,668.4,187.4z"/>
                                <path class="st0" d="M718.4,166.2c-0.1-0.3-0.5-0.4-0.7-0.3c-0.1-0.5-1-0.5-1,0.1c0,0.6,0.1,1.2,0.3,1.8c-0.1,0.8,0.2,1.6,0.5,2.3
			c0.1,0.2,0.2,0.5,0.3,0.7c0,0.1,0,0.2,0.1,0.3c0,0.1,0.1,0.2,0.2,0.2c0.2,0.4,0.3,0.7,0.5,1.1c0.1,0.2,0.4,0.3,0.6,0.2
			c0.2-0.1,0.3-0.3,0.4-0.5c0-0.4,0-0.8,0-1.2c0.3,0,0.6-0.1,0.5-0.5C719.9,168.9,718.9,167.6,718.4,166.2z"/>
                                <path class="st105" d="M727.4,164.7c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.2,0-0.3-0.1-0.4c0-0.1,0-0.1,0.1-0.2
			c0-0.3-0.1-0.5-0.3-0.6c-0.2-0.6-0.6-1.4-1.2-1.2c-0.2,0-0.4,0.2-0.5,0.4c-0.3,0.3-0.6,0.7-0.9,1c-0.4,0.4-0.7,0.8-1.1,1.2
			c-0.6,0.7-1.3,1.4-2,1.9c-0.7,0.5-1.4,1-1.7,1.8c-0.1,0.2-0.1,0.3,0,0.4c0,0.1,0,0.2,0,0.3c0.3,0.8,0.5,1.6,0.8,2.4
			c0.2,0.5,1,0.4,1-0.1c0-0.7,0.1-1.4,0.4-2.1c0.3,0.2,0.6,0.3,1,0.3c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.2,0.2-0.3
			c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2,0-0.5-0.1-0.7-0.2c0,0,0,0-0.1,0c0.5-0.3,0.9-0.6,1.4-1c0,0,0,0,0,0
			c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1
			c0-0.1,0.1-0.2,0.1-0.3V167c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c0.6-0.2,1.1-0.4,1.6-0.7c0.1,0,0.1-0.1,0.2-0.2c0.3,0,0.6,0,0.9,0
			c0.2,0,0.5-0.2,0.5-0.5C727.5,165.1,727.4,164.9,727.4,164.7z"/>
                                <path class="st120" d="M730.4,158.6c-0.9,0.3-1.9,0.7-2.8,1.2c0,0-0.1,0-0.1,0c-0.8,0.1-1.6,0.1-2.3,0.2c-0.5-0.1-1.2,0-1.6,0.2
			c-0.2,0.1-0.3,0.5-0.2,0.7c-0.3,0.2-0.6,0.5-0.9,0.7c-0.3,0.3-0.9,0.7-1.3,1.1c-0.1,0-0.1-0.1-0.2-0.1c0,0,0-0.1,0.1-0.1
			c0.3-0.5-0.5-1-0.9-0.5c-0.6,1-1.3,2-2.1,2.9c-0.2,0.2-0.2,0.4-0.1,0.6c0,0,0,0.1,0,0.1c0,0,0,0,0,0c0,0.3,0.1,0.6,0.2,0.8
			c0,0.1,0,0.2,0,0.2c0,0.4,0.4,0.6,0.7,0.4c0.1,0,0.2,0,0.3-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.1,0.3-0.2
			c0.5-0.4,1-0.9,1.4-1.3c0.7-0.6,1.4-1.1,2.1-1.7c0.1-0.1,0.1-0.1,0.1-0.2c2.1-1.6,4.5-2.8,7-3.7
			C731.3,159.4,731,158.4,730.4,158.6z"/>
                                <path class="st88" d="M661.3,182.5c0-0.2-0.2-0.5-0.4-0.5c-0.2,0-0.5,0.1-0.5,0.4c0,0,0,0,0,0c0,0-0.1,0-0.2,0
			c-0.3,0-0.5,0.2-0.5,0.5c0.1,1.1,0,2.1-0.2,3.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.5-0.3-1.1,0.4-0.6,0.8c0.3,0.2,0.6,0.4,0.8,0.7
			c0,0.3,0.2,0.4,0.4,0.5c0.1,0.1,0.1,0.2,0.1,0.4c0,0.3,0.2,0.5,0.5,0.5c0.3,0,0.5-0.2,0.5-0.5c0-0.1,0-0.2,0-0.2
			c0.4,0,0.7-0.7,0.2-0.9c0,0,0,0,0,0c0.1-0.5,0.2-1,0.3-1.5c0,0,0-0.1,0-0.1c0-0.1,0.1-0.1,0.1-0.2c0.1-0.4,0.1-0.8,0.1-1.2
			C661.4,183.5,661.4,183,661.3,182.5z"/>
                                <path class="st157" d="M659.9,186.8c0-0.1-0.1-0.1-0.1-0.2c0-0.1,0-0.2-0.1-0.3c-0.3-0.4-0.6-0.7-1-0.9c0-0.1-0.1-0.2-0.3-0.3
			c-0.7-0.2-1.4-0.4-2.2-0.6c-0.5-0.2-1-0.5-1.5-0.6c-0.9-0.3-2-0.3-3-0.3c-1.1,0-2.1,0-3.2,0.3c-0.6,0.1-0.4,1.1,0.3,1
			c1-0.2,1.9-0.2,2.9-0.2c0.2,0,0.4,0,0.6,0c0,0.2,0.2,0.4,0.5,0.4c0.9,0,1.7,0.1,2.5,0.3c0,0.2,0.1,0.4,0.4,0.5c0.1,0,0.1,0,0.2,0
			c0,0.1,0,0.2,0,0.3c0.1,0.3,0.3,0.4,0.6,0.3c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0.1,0.3,0c0.8-0.1,1.4,0.4,1.9,0.8
			C659.5,187.7,660.2,187.3,659.9,186.8z"/>
                                <path class="st87" d="M658.6,181.8c-1.5,0.7-3.2,0.7-4.8,0.7c-0.3,0-0.6,0-0.8,0c0.7-0.2,1.3-0.7,1.9-1.1c0.2-0.1,0.2-0.3,0.1-0.4
			c0-0.1,0-0.2,0-0.3c-0.1-0.3-0.3-0.4-0.6-0.3c0,0,0,0,0,0c-0.1,0-0.1-0.1-0.2-0.1c-0.1-0.1-0.2-0.3-0.4-0.4
			c-0.3-0.2-0.6-0.4-0.9-0.6c-0.6-0.3-1.4-0.5-2.1-0.4c-0.3,0-0.5,0.2-0.5,0.5c0,0.3,0.2,0.5,0.5,0.5c0.7,0,1.3,0.1,1.9,0.4
			c0.2,0.1,0.4,0.3,0.6,0.5c-1,0.3-2,0.5-3,0.7c-0.3,0.1-0.7,0.1-1.1,0.2c-0.4-0.1-0.8-0.2-1.2-0.3c-0.6-0.3-1.2-0.7-1.9-0.7
			c-0.4,0-0.6,0.4-0.4,0.7c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.3,0.2,0.5,0.5,0.5c-0.1,0,0,0,0,0c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.3,0.2
			c0.2,0.1,0.5,0.2,0.7,0.3c0.1,0,0.2,0.1,0.3,0.1c-1.2,0-2.4,0.1-3.5,0c-1.1-0.1-2.3-0.2-3.2-0.9c0-0.1-0.1-0.2-0.1-0.3
			c-0.4-0.4-0.8-0.8-1.3-1.2c-0.1-0.1-0.3-0.1-0.4-0.1c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0.1,0.2,0.2,0.3
			c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.3,0.2,0.4,0.4c0,0.1,0,0.3,0.1,0.4c1,1,2.3,1.4,3.7,1.6c1.7,0.2,3.5,0.1,5.2,0
			c1.9-0.1,3.8-0.1,5.7-0.2c1.7-0.1,3.5-0.1,5.1-0.8C659.7,182.5,659.2,181.6,658.6,181.8z"/>
                                <path class="st104" d="M650.3,177.6c-1.2,0.1-2.4,0.5-3.3,1.2c-0.5,0.4-0.9,0.8-1.3,1.2c-0.3,0.4-0.5,0.8-0.6,1.3c0,0-0.1,0-0.1,0
			c-0.1,0-0.3,0-0.4,0.1c-0.3,0-0.6,0-0.8,0.1c-0.4,0-0.8,0-1.1,0c-0.2,0-0.4,0-0.6-0.1c-0.3,0-0.5,0.1-0.6,0.3
			c-0.1,0.2,0.1,0.6,0.3,0.6c0.1,0.2,0.3,0.3,0.5,0.3c0.6,0,1.2,0,1.7,0.1c0.3,0.1,0.6,0.1,0.9,0.2c0.3,0,0.6,0,0.9,0
			c0.5,0,0.6-0.6,0.3-0.9c0.1-0.2,0-0.4,0.1-0.6c0-0.2,0.2-0.4,0.3-0.6c0.9-1.3,2.4-2.1,4-2.3C650.9,178.5,650.9,177.5,650.3,177.6z
			"/>
                                <path class="st104" d="M658.4,181.6c-0.1-0.3-0.4-0.5-0.7-0.5c-0.3,0-0.5,0.1-0.8,0.1c-0.2,0-0.5,0.1-0.7,0.1c-0.1,0-0.1,0-0.2,0
			c0-0.2-0.1-0.3-0.3-0.4c0,0,0,0,0,0c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.1-0.1-0.2-0.2-0.3c0-0.1-0.1-0.1-0.1-0.1
			c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-0.2,0.2-0.1,0.4c0,0.1,0,0.3,0.1,0.4
			c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.2c-0.4,0.5-1,0.7-1.6,1c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.2,0.4,0.5,0.4
			c0.4,0,0.8-0.2,1.2-0.3c0.4-0.1,0.7,0,1.1-0.1c0.4,0,0.8-0.1,1.2-0.1c0.4-0.1,0.8-0.3,1.2-0.3
			C658.3,182.1,658.4,181.8,658.4,181.6z"/>
                                <path class="st87" d="M648.8,179.3c-0.2-0.2-0.4-0.3-0.7-0.2c-1.1,0.5-2.1,1.2-3,2.1c-0.1,0.1-0.2,0.4-0.1,0.5
			c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0,0.3c0,0.1,0.1,0.2,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1c-0.7,0-1.5-0.1-2.2-0.2
			c-1.3-0.2-2.5-0.8-3.5-1.7c-0.5-0.4-1.2,0.3-0.7,0.7c1.1,1,2.4,1.7,3.8,2c1.6,0.3,3.2,0.2,4.7,0.3c0.6,0,0.6-1,0-1
			c-0.1,0-0.3,0-0.4,0c0,0,0,0,0-0.1c0-0.2,0-0.4-0.2-0.6c-0.2-0.1-0.4-0.3-0.6-0.4c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1
			c0,0,0.1-0.1,0,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1-0.1c0.1-0.1,0.2-0.2,0.4-0.3c0.5-0.3,1-0.6,1.5-0.9
			C648.9,179.8,649,179.5,648.8,179.3z"/>
                                <path class="st87" d="M658.7,181.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1,0-0.3,0-0.4,0.1c-0.1,0.1-0.2,0.2-0.4,0.3
			c-0.1,0.1-0.2,0.1-0.3,0.2c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0-0.2,0-0.3,0.1c-0.2,0.1-0.4,0.1-0.7,0.2c-0.3,0-0.5,0.1-0.8,0.2
			c-0.3,0.1-0.6,0.1-0.8,0.2c0.1-0.1,0.1-0.3,0.2-0.5c0-0.1,0-0.2,0-0.3c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.2-0.2-0.3-0.4-0.4
			c-0.1,0-0.1-0.1-0.2-0.1c-0.1-0.1-0.1-0.1-0.2-0.2c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.3,0.1-0.4,0.1c-0.1,0.1-0.2,0.2-0.1,0.4
			c0,0.1,0,0.3,0.1,0.4c0.1,0,0.1,0.1,0.1,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0
			c-0.1-0.1-0.2-0.1-0.4,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.2-0.1,0.4,0,0.6c-1.1,0.1-2.1,0.1-3.2,0c-0.6,0-0.6,1,0,1
			c1.4,0.1,2.9,0,4.3-0.1c0.7,0,1.3-0.1,1.9-0.3c0.5-0.2,1.1-0.2,1.6-0.4c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.2
			c0.2-0.1,0.3-0.2,0.5-0.4c0.1,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.2C658.7,181.6,658.7,181.4,658.7,181.3z"/>
                                <path class="st87" d="M686.6,177.7c-0.1-0.2-0.4-0.5-0.6-0.3c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0
			c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.1,0-0.2-0.1-0.3-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0
			c-0.1-0.1-0.1-0.1-0.2-0.2c-0.2-0.2-0.5-0.2-0.7,0c-0.2,0.2-0.2,0.5,0,0.7c0,0,0.1,0,0.1,0.1c0.3,0.3,0.7,0.5,1,0.7
			c0.4,0.2,1,0.5,1.5,0.3c0.1,0,0.2-0.1,0.3-0.2C686.7,178,686.7,177.8,686.6,177.7z"/>
                                <path class="st87" d="M693.8,176.7c-0.1-0.1-0.2-0.2-0.4-0.3c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.1-0.2-0.2-0.4-0.1c0,0,0,0,0,0
			c-0.4-0.3-0.7-0.5-1.1-0.7c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.2-0.1,0.6,0.2,0.7c0.1,0.1,0.3,0.2,0.4,0.2
			c0,0,0,0.1-0.1,0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0.1,0.2,0.2,0.3
			c0.1,0.1,0.2,0.1,0.4,0.1c0.2,0,0.3-0.1,0.4-0.1c0.2,0.1,0.3,0.2,0.5,0.3c0.2,0.1,0.5,0.1,0.6-0.1c0.2,0.1,0.5,0,0.6-0.2
			C694,177.1,694,176.8,693.8,176.7z"/>
                                <path class="st88" d="M642.3,173.3c-0.4-0.1-0.6-0.4-0.9-0.7c-0.3-0.4-0.6-0.8-0.9-1.2c-0.5-0.7-1.1-1.5-1.6-2.3
			c0.2,0,0.3-0.1,0.5-0.1c0.2,0,0.3,0,0.5,0c0.3,0,0.5-0.2,0.5-0.5c0-0.3-0.2-0.5-0.5-0.5c-0.6,0-1.2,0.1-1.8,0.3
			c-0.1,0-0.2,0.1-0.3,0.2c-0.3,0.1-0.4,0.4-0.3,0.7c0.2,0.5,0.4,1.1,0.7,1.6c0.2,0.5,0.6,0.9,1,1.3c0.1,0.1,0.2,0.1,0.3,0.1
			c0,0,0,0,0,0c0.4,0.6,0.8,1.1,1.3,1.7c0.2,0.2,0.4,0.5,0.8,0.5c0.4,0.1,0.7,0,1-0.3C642.8,173.9,642.7,173.5,642.3,173.3z"/>
                                <path class="st217" d="M642.4,173.5c-0.4-0.1-0.8,0-1.2,0.1c-0.4,0.1-0.6-0.3-0.9-0.5c-0.2-0.3-0.3-0.5-0.6-0.7
			c-0.3-0.4-0.6-0.9-0.9-1.3c-0.2-0.3-0.5-0.6-0.8-0.8c-0.1-0.3-0.2-0.6-0.3-0.9c0.1-0.1,0.1-0.4,0.1-0.5c-0.1-0.2-0.4-0.4-0.6-0.3
			c0,0-0.1,0-0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0,0,0c0,0,0,0,0,0c-0.1,0-0.2,0-0.4,0.1
			c-0.1,0.1-0.2,0.2-0.2,0.3c-0.6,0.4-1.1,0.9-1.4,1.6c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.1-0.1,0.1-0.2,0.2c-0.2,0.2-0.2,0.5,0,0.7
			c0,0,0,0,0,0c0.1,0.3,0.5,0.5,0.8,0.2c0.2-0.2,0.5-0.4,0.8-0.5c0.1,0.1,0.3,0.2,0.5,0.2c0.6-0.1,1.1,0.5,1.4,0.8
			c0.2,0.2,0.4,0.4,0.6,0.6c0.1,0.2,0.3,0.4,0.4,0.6c0.1,0.1,0.1,0.2,0.2,0.3c0.2,0.6,0.6,1,1.2,1.2c0.3,0.1,0.6-0.1,0.9-0.2
			c0.3-0.1,0.6-0.3,0.9-0.5C643.1,174.2,642.8,173.6,642.4,173.5z"/>
                                <path class="st217" d="M639.9,175.9c0,0-0.1-0.1-0.2-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.2,0.1-0.5-0.1-0.6c-0.2-0.1-0.5-0.2-0.7,0
			c-0.5,0.6-0.9,1.1-1.4,1.7c0-0.4,0-0.9,0-1.3c0-0.6-0.9-0.7-1-0.1c-0.1,0.5-0.2,0.9-0.2,1.4c0,0.1,0,0.1,0,0.2c0,0.3,0,0.6,0,0.9
			c0,0.2,0.2,0.4,0.4,0.5c0,0,0,0,0,0.1c0.1,0.4,0.7,0.5,0.9,0.1c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1c0.2,0.1,0.5,0,0.6-0.2
			c0.1-0.2,0.1-0.3,0.2-0.5c0-0.1,0.1-0.1,0.1-0.2c0,0,0.1-0.1,0,0c0,0,0.1-0.1,0.1-0.1c0.2-0.3,0.5-0.5,0.7-0.8
			C640.1,176.4,640.1,176.1,639.9,175.9z"/>
                                <path class="st88" d="M660.2,185c0.1-0.1,0.1-0.3,0.1-0.4c-0.1-0.4-0.1-0.7-0.2-1.1c0-0.1-0.1-0.2-0.3-0.3c0,0,0,0,0,0
			c0,0,0.1,0,0.1-0.1c0.2-0.1,0.3-0.5,0.2-0.7c-0.1-0.2-0.4-0.3-0.7-0.2c-0.6,0.3-1.2,0.5-1.8,0.7c-0.6,0.1-1.1,0.2-1.6,0.5
			c-0.2,0-0.3,0.1-0.5,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.5,0.3-0.5,0.5
			c0,0.3,0.2,0.5,0.5,0.5c0.2,0,0.3,0,0.5,0c1,0.2,2,0.4,2.9,0.7c0,0.1,0.1,0.2,0.1,0.3c0.2,0.3,0.6,0.6,1,0.5
			c0.4-0.1,0.7-0.5,0.6-0.9C660.3,185.1,660.2,185,660.2,185z"/>
                                <path class="st157" d="M659.7,184.7c0.1-0.6,0.1-1.1,0.1-1.7c0,0,0-0.1,0-0.1c0,0,0.1-0.1,0.1-0.1c0.4-0.5-0.3-1.2-0.7-0.7
			c-0.1,0.1-0.2,0.2-0.3,0.4c-0.7,0.2-1.3,0.4-1.9,0.7c0,0,0,0,0,0l0,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0.1c-0.1,0-0.3,0-0.4,0
			c-0.2,0-0.4,0.1-0.4,0.3c-0.4-0.1-0.8,0-1.2,0.1c-0.2,0.1-0.3,0.3-0.3,0.5c-1.6,0.5-3.3,0.7-4.9,0.9c0.1-0.2,0-0.5-0.3-0.6
			c-0.1,0-0.2,0-0.3-0.1c0-0.2-0.2-0.4-0.5-0.4c-1.3,0.1-2.6-0.3-3.9-0.6c-1.3-0.3-2.5-0.4-3.8-0.5c-0.3,0-0.5,0.2-0.5,0.5
			c-0.4,0-0.7,0.7-0.3,0.9c0.4,0.2,0.8,0.4,1.2,0.6c0.1,0,0.1,0.1,0.2,0.1c0.4,0.2,0.8,0.3,1.2,0.5c0,0,0,0,0,0c0,0,0,0,0,0
			c0.3,0.1,0.5,0.1,0.8,0.2c0,0.1,0,0.1,0.1,0.2c-0.1,0-0.2,0.1-0.2,0.1c-0.4,0.2-0.2,0.9,0.3,0.9c0.2,0,0.3,0,0.5,0
			c0,0,0.1,0,0.1,0c1-0.1,2-0.3,2.9-0.8c0.5,0,1,0.1,1.5,0c2.6-0.2,5.2-0.6,7.6-1.5c0.2,0.3,0.8,0.5,1.1,0.6c0.2,0.1,0.4,0,0.5-0.1
			c0,0.3,0.1,0.7,0.1,1c0.1,0.4,0.6,0.4,0.8,0.2c0,0.3,0,0.6,0.1,0.9c0.1,0.5,0.8,0.5,1,0C659.9,186.5,659.9,185.6,659.7,184.7
			C659.7,184.8,659.7,184.8,659.7,184.7z"/>
                                <path class="st224" d="M641,185.2c-0.2-0.3-0.3-0.5-0.5-0.8c0,0,0,0,0.1,0c0.3-0.1,0.4-0.3,0.4-0.6c0-0.2-0.2-0.4-0.4-0.5
			c-0.2-0.1-0.3-0.3-0.5-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0-0.2-0.1-0.3-0.2-0.5c-0.2-0.3-0.5-0.5-0.8-0.7c-0.2-0.2-0.5-0.5-0.7-0.7l0,0
			c-0.1-0.4-0.3-0.7-0.5-1c0,0,0,0,0,0c0.1-0.4,0.1-0.8,0.1-1.1c0-0.1-0.1-0.3-0.2-0.4c0.1,0,0.3,0.1,0.4,0.1c0.2,0,0.5,0,0.6-0.3
			c0.1-0.2,0-0.5-0.2-0.6c-0.2-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.5-0.3-0.7-0.6c-0.3-0.4-0.8,0-0.9,0.4c-0.1,0.6-0.1,1.3-0.1,1.9
			c0,0.6,0,1.2,0.2,1.8c0.1,0.3,0.3,0.6,0.4,0.9c0.1,0.7,0.4,1.4,0.6,1.9c0.3,0.6,0.7,1.1,1,1.6c0.4,0.5,0.8,1,0.9,1.6
			c0.2,0.6,1.1,0.4,1-0.3c-0.1-0.4-0.3-0.8-0.6-1.2c0.1,0.1,0.3,0.2,0.4,0.3C640.5,186.2,641.3,185.7,641,185.2z"/>
                                <path class="st90" d="M662,199.9c0.2-0.3,0.3-0.7,0.4-1.1c0-0.3-0.2-0.5-0.5-0.5c-0.3,0-0.5,0.2-0.5,0.5c0,0.1-0.1,0.2-0.1,0.3
			c-0.1,0.1-0.2,0.3-0.3,0.4c-0.2,0.3-0.4,0.5-0.5,0.8c-0.1,0.3-0.2,0.5-0.3,0.8c0,0,0,0,0,0.1c-0.4-0.1-0.8,0-1.1,0.3
			c-0.1,0-0.2,0.1-0.3,0.3c-0.3,1.1-1.3,1.7-2.2,2.2c-0.6,0.3-1.3,0.7-1.9,1c0-0.3-0.1-0.6-0.5-0.6c-1.9-0.1-3.8-0.2-5.6,0.6
			c-0.4-0.1-0.9-0.2-1.3-0.2c-0.3-0.8-1.5-1-2.4-1.2c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3-0.6-0.6-1.1-0.9-1.7c-0.1-0.2-0.2-0.5-0.4-0.7
			c0.3,0,0.6-0.4,0.4-0.7c-0.4-0.8-0.9-1.6-1.5-2.3c-0.3-0.3-0.9-0.1-0.9,0.4c0,0,0,0.1,0,0.1c-0.1,0-0.1-0.1-0.2-0.1
			c-0.1-0.1-0.1-0.2-0.1-0.4c0.3,0,0.6-0.4,0.4-0.8c-0.2-0.5-0.4-1-0.6-1.5c-0.1-0.9-0.3-1.8-0.6-2.6c-0.1-0.2-0.2-0.3-0.4-0.3
			c0.1-0.1,0.2-0.1,0.2-0.3c0.2-1.1,0.4-2.1,0.5-3.2c0,0,0,0,0,0c0.1-0.2,0.3-0.5,0.4-0.7c0.2,0.1,0.5-0.1,0.6-0.3
			c0.1-0.3,0.2-0.7,0.2-1c0.3-0.1,0.7-0.2,1-0.3c0.2-0.1,0.3-0.2,0.3-0.3c0.2,0.1,0.4,0.1,0.6,0c0.3-0.1,0.5-0.5,0.4-0.8
			c-0.1-0.4-0.4-0.4-0.8-0.5c-0.7-0.1-1.3-0.7-2-0.4c-0.4,0.1-0.5,0.5-0.7,0.8c-0.1,0.2-0.2,0.5-0.4,0.7c-0.1-0.4-0.6-0.6-0.9-0.2
			c-0.1,0.2-0.3,0.4-0.4,0.6c-0.9,0.5-1.5,1.6-2,2.4c-0.7,1.3-1.4,2.8-1.2,4.4c0.1,0.5,0.2,1.1,0.5,1.6c-0.2,1.2,0,2.4,0.8,3.4
			c0.4,1.4,1.1,2.7,2.4,3.6c0.4,0.5,0.8,1,1.2,1.4c0,0.1,0.1,0.2,0.3,0.3c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0c0,0.1,0.1,0.1,0.2,0.2
			c0.6,0.3,1.2,0.6,1.9,0.8c0,0.1,0,0.2,0.1,0.3c1.1,1.6,2.9,2,4.7,2c0.1,0.2,0.2,0.3,0.4,0.3c0.2,0,0.4,0,0.6,0
			c0,0.2,0.2,0.4,0.5,0.4c1.3,0.1,2.5,0,3.7-0.3c0.2,0,0.4,0,0.6-0.1c1.4-0.1,2.5-0.5,3.6-1.3c0.2-0.1,0.4-0.3,0.6-0.4
			c0.5-0.3,0.9-0.6,1.4-0.9c0.6-0.4,1.3-0.8,1.8-1.2c0.5-0.4,1.1-0.9,0.9-1.7c0,0,0,0,0,0c0,0,0,0,0-0.1c0.1-0.3,0.2-0.7,0.3-1
			c0-0.1,0-0.2,0-0.2c0,0,0,0,0,0C661.6,200.5,661.8,200.2,662,199.9z M653.1,205.9c-0.9,0.3-1.7,0.1-2.6-0.2c0.3,0,0.5-0.1,0.8-0.1
			c0.9-0.1,1.7,0,2.6,0C653.6,205.7,653.3,205.8,653.1,205.9z"/>
                                <path class="st157" d="M644.4,206c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.2-0.4-0.2c-0.8-0.1-1.4-0.6-2.1-1.1
			c-0.2-0.2-0.5-0.3-0.8-0.5c-0.2-0.3-0.5-0.6-0.7-0.9c-0.6-0.8-1.1-1.5-1.7-2.3c-0.1-0.1-0.2-0.3-0.3-0.4c0,0,0,0,0,0
			c-0.5-0.7-0.9-1.3-1.4-2c-0.2-0.6-0.4-1.1-0.5-1.7c-0.3-1.2-0.5-2.4-0.5-3.7c0.1-0.1,0.1-0.2,0.1-0.3c0.1-0.6,0-1.3,0-2
			c0-0.1,0.1-0.2,0.1-0.4c0-0.1,0.1-0.3,0.2-0.4c0-0.1,0.1-0.1,0.1-0.2c0.3-0.3,0.5-0.7,0.8-1c0.2,0.1,0.3,0.1,0.5,0
			c0.3-0.2,0.4-0.5,0.5-0.8c0.1-0.2,0.1-0.5,0.2-0.7c0,0,0-0.1,0,0c0,0,0-0.1,0-0.1c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3
			c0.2-0.2,0.3-0.5,0.4-0.8c0-0.2,0-0.4-0.2-0.5c-0.2-0.2-0.5-0.3-0.7-0.1c-0.6,0.5-1,1-1.5,1.6c-0.6,0.6-1.1,1.2-1.4,1.9
			c-0.2,0.4-0.2,0.8-0.3,1.2c-0.7,1.2-0.9,2.7-0.8,4c0.1,1.3,0.6,2.7,1.1,3.9c0.3,0.6,0.6,1.2,1,1.8c0,0.1,0,0.1,0.1,0.2
			c0,0.1,0.1,0.3,0.1,0.4c0,0.3,0.2,0.4,0.4,0.5c0.1,0.2,0.2,0.4,0.3,0.6c0.4,0.6,0.8,1.3,1.2,1.9c0.4,1.1,1.4,1.8,2.3,2.4
			c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.3,0.4,0.5,0.7,0.6c0.2,0.1,0.3,0,0.4-0.1c0.1,0,0.3,0.1,0.4,0.1c0,0.1,0.1,0.3,0.3,0.3
			c0.5,0.2,1.1,0.2,1.6,0.2c0.2,0,0.5-0.2,0.5-0.4C644.8,206.3,644.7,206,644.4,206z"/>
                                <path class="st224" d="M639.2,184.7c-0.4-0.2-0.7-0.3-1.1-0.4c0-0.1,0-0.1,0-0.2c0-0.2-0.1-0.5-0.2-0.7c-0.1-0.1-0.2-0.1-0.3-0.2
			c0.1-0.1,0.1-0.2,0.1-0.4c-0.1-0.4-0.3-0.7-0.5-1c0,0,0,0,0,0c-0.1-0.9-0.5-1.7-1.2-2.2c0,0,0,0-0.1,0c-0.6-0.8-1-1.7-1.5-2.6
			c0-0.9,0.1-1.8,0.1-2.7c0-0.6,0-1.3,0.1-1.9c0-0.1,0.1-0.2,0.1-0.3c0.2-0.2,0.4-0.5,0.5-0.7c0-0.1,0.1-0.2,0.1-0.2
			c0.3-0.3,0.6-0.6,0.9-0.9c0.2-0.2,0.2-0.5,0-0.7c-0.2-0.2-0.5-0.2-0.7,0c-0.7,0.6-1.4,1.4-1.9,2.2c0,0.1-0.1,0.1-0.1,0.2
			c-0.1,0.1-0.3,0.3-0.4,0.5c-0.5,0.6-0.6,1.3-0.6,2.1c0,0.1,0,0.2,0,0.2c0,0.1-0.1,0.1-0.1,0.2c-0.3,1.5,0,2.9,0.6,4.2
			c-0.1,0.2-0.1,0.3,0.1,0.5c0.5,0.6,0.6,1.4,1.1,2c-0.1,0.1-0.1,0.2-0.1,0.4c0.1,0.6,0.4,1.1,0.7,1.6c0,0,0,0.1,0.1,0.1
			c0.2,0.7,0.4,1.3,0.9,1.9c0.3,0.4,0.7,0.6,1.1,0.6c0.1,0.1,0.3,0.2,0.6,0.3c0.3,0.1,0.6-0.2,0.6-0.5c0,0,0,0,0,0
			c0.1,0,0.2,0,0.3-0.1c0.2-0.1,0.3-0.1,0.5-0.1C639.5,185.7,639.7,185,639.2,184.7z"/>
                                <path class="st87" d="M636.3,185.6c-0.2-0.2-0.4-0.5-0.6-0.7c0,0,0,0,0-0.1c-0.2-0.2-0.3-0.5-0.4-0.8c0,0,0,0,0-0.1
			c0,0,0-0.1,0-0.1c-0.1-0.3-0.1-0.5-0.3-0.8c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.1
			c-0.5-1.5-0.9-3.1-1.9-4.2c-0.1-0.2-0.3-0.2-0.5-0.1c-0.3-1.2-0.7-2.3-1.1-3.5c-0.2-0.5-0.9-0.4-1,0c-0.1,0.1-0.2,0.1-0.2,0.3
			c-0.2,0.9,0.1,1.7,0.5,2.4c0.3,0.5,0.5,1,0.7,1.5c0,0,0,0.1,0,0.1c1.5,3.3,2,6.9,1.6,10.5c-0.1,0.6,0.9,0.6,1,0
			c0.1-0.7,0.1-1.5,0.1-2.2c0.1,0.1,0.1,0.2,0.2,0.3c0.3,0.4,0.9,0,0.8-0.5c-0.2-0.6-0.3-1.2-0.5-1.9c0.1-0.1,0.1-0.2,0.2-0.3
			c0.2,0.4,0.5,0.7,0.8,1C636.1,186.8,636.8,186.1,636.3,185.6z M633.2,181.9c-0.1-0.3-0.2-0.7-0.3-1c0-0.1,0-0.3,0-0.4
			c0.2,0.5,0.4,0.9,0.6,1.4C633.4,181.9,633.3,181.9,633.2,181.9z"/>
                                <path class="st87" d="M641.4,207.4c-1.4-1.9-3-3.5-4.6-5.2c-0.4-0.5-1.1,0.2-0.7,0.7c1.5,1.6,3.1,3.2,4.5,5
			c0.2,0.2,0.4,0.3,0.7,0.2C641.5,208,641.6,207.6,641.4,207.4z"/>
                                <path class="st92" d="M704,187c-0.2-0.6-0.4-1.2-0.6-1.8c-0.2-0.6-0.6-1.2-0.6-1.9c0-0.4-0.5-0.6-0.9-0.4
			c-0.1,0.1-0.3,0.2-0.4,0.4c0,0,0,0,0,0c-0.2,0.2-0.4,0.3-0.6,0.5c0,0,0,0-0.1,0.1c0,0,0,0,0,0c0,0-0.1,0.1-0.1,0.1
			c-0.2,0.2-0.1,0.5,0.1,0.6c0,1,0.2,1.9,0.5,2.8c0.3,1,0.6,1.9,1,2.8c0.1,0.3,0.4,0.4,0.6,0.3c0,0.5,0.8,0.7,1,0.2
			C704.4,189.6,704.3,188.3,704,187z"/>
                                <path class="st103" d="M705.1,185.6c-0.5-1.1-1-2.3-0.8-3.5c0-0.3-0.1-0.5-0.3-0.6c-0.2-0.1-0.6,0.1-0.6,0.3c0,0.1,0,0.3,0,0.4
			c-0.2-0.2-0.4-0.3-0.7-0.3c-0.2,0-0.4,0.2-0.5,0.4c-0.2,0-0.5,0.1-0.6,0.4c0,0.1,0,0.1,0,0.1c-0.5-0.1-0.9,0.7-0.4,0.9
			c0.5,0.3,1,0.6,1.5,0.9c0.2,0.5,0.5,1,0.9,1.4c0.1,0.1,0.2,0.1,0.2,0.1c0.1,0.1,0.3,0.2,0.5,0.2c0,0,0.1,0,0.1-0.1
			c0.2,0.1,0.4,0.1,0.6,0C705.1,186.1,705.2,185.8,705.1,185.6z"/>
                                <path class="st111" d="M705.4,191.5c-0.1-0.5-0.2-0.9-0.2-1.4c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2-0.2-0.3c-0.2-0.2-0.4-0.4-0.7-0.6
			c-0.2-0.2-0.6-0.2-0.8,0.1c-0.3,0.6-0.8,1.1-1.4,1.5c-0.4,0.3-0.2,0.9,0.2,0.9c0,0.1,0,0.2,0,0.3c0,0.2,0.1,0.4,0.1,0.5
			c0.1,0.3,0.4,0.3,0.7,0.2c-0.2,0.5-0.3,1.1-0.4,1.6c-0.3,0.5-0.7,1-1.1,1.4c-0.4,0.5-0.9,1.1-0.6,1.8c0.2,0.4,0.7,0.5,0.9,0.1
			c0.3-0.6,0.9-1,1.4-1.4c0.6-0.4,1.1-0.9,1.4-1.6c0.3-0.6,0.5-1.3,0.6-2C705.5,192.2,705.5,191.9,705.4,191.5z"/>
                                <path class="st103" d="M708.4,190.2c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2-0.3-0.4-0.5-0.6-0.8
			c0-0.1-0.1-0.1-0.2-0.2c-0.2-0.5-0.4-1-0.7-1.5c-0.3-0.4-0.6-0.7-0.9-1.1c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.5-0.3-0.7-0.2
			c0,0-0.1,0-0.1,0.1c0,0,0,0,0,0c-0.3-0.2-0.8,0.1-0.8,0.4c0,0.5,0.2,1.1,0.4,1.5c0,0,0,0,0,0.1c-0.2,0.8-0.2,1.5,0.2,2.2
			c0.2,0.4,0.6,0.8,1,1c-0.1,0.3,0.1,0.7,0.4,0.7c0.2,0,0.4,0.1,0.6,0.2c0.3,0.1,0.5,0.1,0.8,0.1c0.5-0.1,0.8-0.5,1.3-0.7
			C708.5,190.7,708.5,190.4,708.4,190.2z"/>
                                <path class="st134" d="M708.4,190.2c0,0,0-0.1,0-0.1c0.1-0.1,0.2-0.3,0-0.5c-0.5-0.6-0.9-1.3-1.3-2c-0.2-0.3-0.4-0.7-0.6-1
			c-0.2-0.3-0.3-0.7-0.6-1c-0.2-0.2-0.4-0.3-0.6-0.3c-0.1-0.3-0.2-0.5-0.4-0.8c0,0,0,0,0,0c0.6-0.3,0.1-1.1-0.5-0.9
			c-0.9,0.5-1,1.4-0.9,2.3c-0.1,0.3,0,0.6,0.1,0.9c0.1,0.2,0.3,0.2,0.4,0.2c-0.1,0.7,0,1.4,0.2,2.1c-0.1,0.2-0.2,0.4,0,0.7
			c0.2,0.2,0.4,0.4,0.6,0.6c0.1,0.1,0.3,0.1,0.4,0c0,0,0,0,0.1,0c-0.4,0.2-0.3,0.8,0.3,0.9c0.2,0,0.3,0,0.5,0
			c0.8,0.1,1.7,0.2,2.3-0.5C708.6,190.7,708.6,190.4,708.4,190.2z"/>
                                <path class="st187" d="M705.2,182.5c-1.5-0.3-3.1-0.3-4.7-0.2c-0.3,0-0.5,0.2-0.5,0.5c0,0.3,0.2,0.5,0.5,0.5c1.5-0.1,3,0,4.4,0.2
			c0.3,0,0.5-0.1,0.6-0.3C705.6,182.8,705.4,182.5,705.2,182.5z"/>
                                <path class="st187" d="M711.3,181.3c-3.1-1.3-6.3-1.5-9.6-1.2c-2.3,0-4.7,0.1-6.9,0.9c-0.6,0.2-0.4,1.1,0.3,1
			c2.2-0.4,4.4-0.7,6.6-0.9c0.7,0,1.5,0,2.2,0.1c0.2,0,0.3-0.1,0.4-0.2c2.3,0,4.5,0.4,6.7,1.3C711.6,182.5,711.9,181.6,711.3,181.3z
			"/>
                            </g>
                            <g id="chefArmGlasses">
                                <g id="ChefLeftArm">
                                    <path class="st0" d="M635.2,198.9c0-0.4,0.1-0.7,0.1-1.1c-0.4-0.8-0.6-1.6-0.6-2.5c-0.5-0.4-0.8-0.9-1.1-1.5
				c0,0.2-0.1,0.4-0.1,0.5c-0.1,0.5-0.1,1,0,1.4c0.3,1.3-0.2,2.3-1.2,3.1c-1,0.8-1.6,2-2.7,2.6c-0.5,0.3-0.6,0.9-0.6,1.4
				c0,0.3,0,0.7,0.3,0.9c0.3,0.2,0.6,0,0.9-0.3c0.5-0.5,1-1,1.7-0.9c0.7-0.2,1.1-0.7,1.5-1.3c0.3-0.4,0.5-0.6,0.8-0.6
				C634.4,200.2,634.7,199.5,635.2,198.9z"/>
                                    <path class="st0" d="M596.9,252c-0.1-0.9,0.1-1.6,0.7-2.2c1.6-1.5,2.9-3.2,3.9-5c0.6-1.1,1.5-1.8,2.6-2.2
				c1.5-0.5,2.9-1.3,4.4-1.9c4.4-1.8,8.5-4.3,11.8-7.8c3-3.3,5.2-6.9,5.6-11.4c0.2-2.5,0-5,0.4-7.5c-0.3-1.1-0.3-2.2,0.5-3.1
				c0.2-0.2,0.3-0.5,0.3-0.8c0-0.4,0-0.8-0.4-1c-0.5-0.2-0.7,0.2-0.9,0.5c-0.8,1.3-1.7,2.6-1.8,4.2c-0.1,0.9-0.4,1.6-1.1,2.1
				c-0.9,1.3-0.5,2.7-0.5,4.1c0,2.8-0.8,5.3-2.3,7.5c-3.6,5.5-9.1,8.4-15,10.7c-0.8,0.3-1.4,0-1.7-0.7c-0.7-1.4-1-2.8-0.1-4.1
				c0.6-0.9,0.7-1.8,0.2-2.7c-0.4-0.7-0.5-1.4-0.4-2.1c0.1-1.7-0.1-3.3-0.4-4.9c-0.2-1.2,0-2.2,0.7-3.1c1.2-1.5,2.2-3.1,2.9-4.9
				c0.2-0.6,0.6-1.2,1.1-1.7c0.5-0.4,1.1-0.3,1.5,0.1c0.5,0.4-0.1,0.8-0.3,1.1c-1.3,1.5-1.7,3.3-2.6,5c-0.2,0.4-0.5,0.9,0,1.2
				c0.5,0.3,0.7-0.3,1-0.6c0.3-0.3,0.4-0.8,0.6-1.2c0.5-1.1,1-2.2,1.7-3.2c1.2-1.8,1.5-1.9,3.2-0.5c0.8,0.6,1.2,0.5,1.4-0.5
				c0.1-0.7,0.3-1.3,0.9-1.8c1-0.9,1.8-2.1,2.5-3.2c0.5-1,1-2,1.3-3c0.6-1.9,1.2-3.8,1.8-5.7c0-0.3,0-0.6,0-0.9
				c-0.1-1.7-0.7-2.2-2.4-2.1c-0.8,0.1-1.6,0.2-2.4,0.4c-0.5,0.1-0.9,0.4-0.9,0.9c0,0.6,0.4,0.8,0.9,1.1c0.5,0.2,1.1,0.1,1.5,0.5
				c0.4,0.9-0.1,1.3-0.8,1.7c-2.5,1.3-4.8,3-6.8,5c-0.7,0.7-1.3,0.9-2.2,0.5c-0.4-0.2-0.9-0.2-1.4-0.4c-1.3-0.5-2.7-2.1-2.5-3
				c0.2-1.1,0.5-2.3,1.2-3.3c0.4-0.4,1.3-0.6,1-1.5c-0.3-0.7-0.5-1.4-1.4-1.4c-0.9,0-1.3,0.6-1.5,1.3c-0.2,0.8-0.9,1-1.3,1.4
				c-0.3,0.3-0.4,0.7-0.3,1.1c0.2,0.7,0.5,1.4,0.2,2.1c-0.4,1.1-0.3,2.2,0,3.3c0.1,0.4,0.4,0.8,0.7,1c0.8,0.5,0.7,1,0,1.5
				c-0.3,0.2-0.7,0.5-0.3,0.9c0.5,0.2,1-0.1,1.4-0.2c0.9-0.4,1.8-0.2,2.7,0c0.9,0.3,1.2,0.7,0.6,1.6c-0.6,1-1,2.1-1.6,3.1
				c-0.6,1.1-1.2,2.2-2.4,3.2c-0.2-2.7-2.3-5-0.7-7.7c0-0.1-0.1-0.2-0.1-0.2c-1.2,0.4-1.7-0.2-2.2-1.2c-1.4-3-3.4-5.7-6.8-7
				c0.7-0.2,1.5,0.1,1.9-0.8c-2.3-0.4-4.5-0.9-6.8-0.2c-1,0.4-2,1.1-3,1.4c-0.3,0.1-0.6,0.2-0.8,0.4c0,0.2,0,0.3,0.1,0.4
				c0.7,0.4,1.5,0.2,2.2,0.3c0.2,0,0.4-0.1,0.7-0.1c1.7-0.3,3.3-0.6,5,0.2c3.4,1.5,5.7,4.1,7,7.4c1.3,3.4,2.4,6.8,2.4,10.5
				c0,2.4,0.4,4.8,0.4,7.2c0,2.5-1,4.5-3,6c-3.1,2.4-6.4,4.5-10.5,5.1c-0.5,0.1-1.3,0.2-1.2,0.8c0,0.7,0.8,0.8,1.4,0.7
				c3.2,0,6-1.2,8.2-3.2c-0.6,0.7-1.4,1.6-1.8,2.7c-1.2,3.3-2.8,6.3-4.1,9.5c-1.5,3.6-2.5,7.4-3.3,11.2c-0.2,1-0.5,1.3-1.5,0.6
				c-1.8-1.2-3.7-2.1-5.7-2.8c-0.3-0.1-0.5-0.2-0.8-0.4c-3.4-1.1-5.9-3.3-6.9-6.9c-0.3-1.2-0.7-2.3-1-3.5c-0.9-3.7-0.6-7.1,2.1-10.1
				c1.1-1.2,2-2.5,2.8-3.9c0.6-0.9,1.2-1.9,1.3-3.1c-0.1-4.9,0.3-9.8-0.2-14.7c0-0.4,0.1-0.8,0.2-1.1c0.6-2.6,0.3-5.2,0.2-7.8
				c0-0.2-0.1-0.5-0.3-0.7c-0.7-1.2-1.1-2.5-1-3.8c0-1.4,0.4-2.8,0.2-4.2c-0.1-0.8-0.2-1.8-1.1-2.1c-0.9-0.3-1.1,0.8-1.6,1.2
				c-0.4,0.4-0.3,1-0.3,1.5c-0.1,1.8,0.2,3.5,0.8,5.1c1.2,3.1,1.1,6.3,0.9,9.5c-0.2,3.2-0.5,6.4-0.4,9.6c0,1.5,0,2.9,0,4.4
				c0,1-0.3,1.7-1.3,2.2c-4.4,2.4-8.5,5.2-12.3,8.5c-5.7,4.9-11.1,10.1-16.3,15.6c-5.2,5.6-10,11.6-13.6,18.5
				c-1.7,3.2-3.5,6.4-4.9,9.8c-0.7,1.9-1.4,3.7-2.1,5.6c-0.1,0.2-0.2,0.3-0.2,0.5c-0.3,1.3-0.8,2.4-1.3,3.7c1.3,0.3,2.7,0.5,4,0.8
				c3.3,0.6,6.7,1.1,10,2c3.5,1,7,1.6,10.5,2.3c9.4,1.9,18.8,3.5,28,6.2c5.1,1.5,10.2,2.7,15.4,3.7c-0.4-15.6,5.5-32.7,6.3-50.2"/>
                                    <path class="st65" d="M541.8,323.7c-2.5-3.1-4.9-6.4-7.4-9.5c-3.3-4.1-6.9-8-10.4-12c-1-1.1-1.8-2.2-2.8-3.3
				c-0.4,1.6-0.7,3.2-0.7,4.8c0,0,0,0,0,0c0.3,0.4,0.5,0.8,0.3,1.3c-0.5,1.5-0.2,3,0.7,4.3c0.3,0.4,0.5,0.8,0.8,1.2
				c0.7,0.9,0.9,1.9,0.6,3c-0.1,0.5-0.2,1-0.3,1.4c-0.7,4-0.5,7.9,1,11.7c0.9,2.3,2.4,4.3,4,6.2c3.1,3.8,7,6.4,11.8,7.4
				c3.4,0.7,6.7,1,10.1,0.8c0.7,0,1.2,0.1,1.7,0.7c0.5,0.7,1.1,1.3,1.7,2c1-0.8,2-1.5,3-2.2C551.2,335.5,546.6,329.5,541.8,323.7z"
                                    />
                                    <path class="st87" d="M633.8,194.7c0-0.1,0-0.2,0-0.2c-0.1-0.2-0.3-0.5-0.4-0.7c-1.3-0.8-0.8-2.3-1.6-3.2c0,0,0.1,0,0.1,0
				c-0.2-0.2-0.3-0.3-0.5-0.5c-0.3-0.3-0.5-0.6-0.6-0.9c-1-0.3-1.9-0.8-3-1.1c-2.9-1-2.2-4.9,0.7-5.2c1.5-0.2,3-0.2,4.5-0.2
				c0.2-0.1,0.3-0.3,0.5-0.4c0-0.1,0-0.2,0.1-0.3c-0.4-1.1-0.8-2.3-0.9-3.5c-0.1-0.2-0.2-0.4-0.3-0.6c-0.5-0.5-1-1-1.5-1.5
				c0,0,0,0,0,0c-0.3-0.2-0.5-0.4-0.8-0.6c-1.9-1.5-3.9-2.7-6.5-2.4c-0.5,0.1-0.8-0.3-1.1-0.5c-1.4-1.1-2.9-2-4.7-2.5
				c-0.2,0.7,0.5,0.9,0.8,1.4c-0.6,0.1-1-0.1-1.5-0.4c-1.1-0.6-1.2-0.6-0.1-1.4c-0.8-0.5-1.7-0.8-2.7-0.9c-2.5-1-4.9-1.2-7.3,0.1
				c-0.3,0.1-0.5,0.2-0.8,0.2c-0.1,0.6,0.4,0.5,0.7,0.6c0.7,0.1,1.3,0,2-0.2c-0.9,0.6-1.7,1.5-2.9,1.6c-0.3,0.6,0.3,0.8,0.6,0.9
				c0.7,0.4,1.4,0.8,2.2,1.1c2.3,0.9,4.4,2.2,5.9,4.1c2.4,2.9,5.6,5.2,8,8.2c0.3,0.2,0.3,0.5,0.3,0.8c0,0.2,0,0.4,0.1,0.6
				c0.1,0.3,0.2,0.5,0.6,0.5c0.8-1,1.6-0.6,2.3,0.2c1.2,1.3,2.1,2.9,3.2,4.3c-2.4-0.5-4.8-0.5-7.2-0.6c-1.2,0-2.2-0.6-3.1-1.5
				c-1.6-1.6-2.5-3.6-3.8-5.4c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.4-0.1-0.8-0.3-1.2c-0.1-0.1-0.1-0.2-0.3-0.3c-0.4,0-0.5,0.4-0.6,0.6
				c-0.5,0.2-0.6-0.2-0.7-0.5c-1.4-2-3-3.6-4.9-5.1c-1.6-1.2-3-2.7-4.1-4.4c-0.7-1-1.6-1.4-2.8-1.4c-2,0-3.6,1.1-5.1,2.2
				c-3,2.2-5.4,5.2-9.3,6c-0.3,0.1-0.7,0.2-0.5,0.7c0.4,0.4,1,0.4,1.8,0.4c-1.4,1-2.8,1.5-4.2,1.9c-0.2,0.1-0.5,0.2-0.6,0
				c-0.7-1.5-2.2-2.6-2.1-4.5c0.1-1,0-2-0.9-2.8c-0.6,1.9-0.5,3.7,0.4,5.4c0.3,0.5,0.6,1,0.9,1.5c0.6,0.9,0.6,1-0.5,1.4
				c-0.8,0.3-1.7,0.6-2.5,1.1c-1.4,0.8-2.3,1.9-2.7,3.4c1.2-0.1,1.5-1.3,2.3-1.7c-0.3,0.6-0.5,1.3,0.4,1.8c0.7-0.2,1-1,1.7-1.3
				c2.6-1.3,5-3.1,7.7-4.3c3.4-1.4,6.4-3.5,9-6.2c0.9-0.8,2-1.1,3.1-1.5c1.3-0.5,2.2-0.1,3,1c0.9,1.2,2,2.3,3.1,3.2
				c1.2,1.1,2.5,2.1,3.6,3.3c2.4,2.8,4,6.1,6.3,9c0.7,0.9,1.4,1.8,2.3,2.5c0.7,0.5,0.8,1.2,0.1,1.8c-0.3,0.3-0.6,0.5-0.8,0.8
				c-0.1,0.1-0.2,0.2-0.3,0.3c-1.6,1.6-1.9,1.6-3.2,0.1c-0.3-0.5-0.8-0.9-1.3-1.3c-1.1-1.2-2.5-2.1-3.1-3.8
				c-1.1-3.1-3.1-5.7-5.5-7.9c-0.8-0.8-1.7-1.5-2.9-1.4c-0.2,0-0.4,0.1-0.6,0.2c-0.5,0.6-0.9,1.4-1.9,1.1c0.3-0.4,0.7-0.7,0.1-1.2
				c-0.5-0.2-1-0.2-1.5-0.1c-0.5,0.3-1,1.1-1.6,0.1c-0.2-0.1-0.4-0.2-0.6-0.2c-1.9,0.3-3.4,1.2-5,2.3c-3.4,2.2-6.7,4.7-9.9,7.1
				c-0.6,0.8-1.3,0.8-2.2,0.6c-0.3,0.5-0.2,1-0.2,1.6c0.1,0.9-0.3,1.6-0.7,2.3c-0.2,0.3-0.4,0.6-0.8,0.6c-0.5,0-0.4-0.5-0.4-0.8
				c-0.1-0.3-0.1-0.7-0.4-0.9c-0.7,1.3-1.5,2.7-2,4.1c0.4-0.2,0.7-0.3,0.9-0.6c0.5-0.6,0.7-0.5,1,0.2c0.6,1.4,0.5,2.8,0.2,4.3
				c-0.3,1.7-0.1,3.4,0.7,4.8c0.5,0.9,0.6,1.7,0.6,2.5c0,1.3,0,2.6,0,3.9c0,0.8,0,1.6-0.4,2.4c-0.3,0.4-0.3,1-0.1,1.4
				c0.3,0.9,0.2,1.7,0.2,2.6c0,4,0,8,0,12.1c0.9-0.4,0.7-1.2,0.7-1.9c0-4.4-0.2-8.7,0.1-13.1c0.3-4.8,0.4-9.6-0.7-14.3
				c-0.7-3,0.4-5.3,2.7-7.3c3.7-3.3,8-5.9,12-9c1.3-1,2.8-1.8,4.4-2.2c3-0.7,5.8-0.5,7.9,2.1c1.1,1.3,2.1,2.7,2.9,4.2
				c1.4,3,3.5,5.5,6.1,7.7c0.3,0.2,0.7,0.4,0.6,0.9c-0.1,0.6-0.5,0.8-1,0.9c-1.5,0.5-3,0.3-4.4-0.4c-1.6-0.8-3-2-4.2-3.3
				c-0.4-0.3-0.8-0.5-1.2-0.8c-1.6-1.2-3.1-2.5-4-4.3c-0.2-0.5-0.3-1-0.8-1.3c-0.4,0-0.5,0.3-0.5,0.6c0.1,1.1-0.1,2.2,0.6,3.2
				c0.4,0.7,0.9,1.4,1.3,2.1c0.1,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.5,0.2-0.8,0c-0.3-0.2-0.4-0.5-0.5-0.8c-0.8-1.5-1.3-3.1-2.1-4.6
				c-0.2-0.3-0.2-0.7-0.7-0.8c-0.5,0.2-0.5,0.7-0.4,1.1c0.2,1.5,0.4,3.1,1.3,4.4c0.2,0.3,0.4,0.5,0.5,0.9c0,0.1,0.1,0.2,0.2,0.4
				c0.3,0.7,0.4,1.4,0.1,2.1c-0.5,1.2-0.8,2.4-1.5,3.5c-0.2,0.2-0.3,0.6,0,0.8c0.2,0.2,0.5,0.1,0.7,0c0.6-0.5,0.8,0,1.1,0.4
				c0.5,0.9,1.3,1.7,1.7,2.7c0.6,1.4,1.4,1.6,2.6,0.9c0-0.2,0.1-0.4,0-0.6c-0.4-1.1-0.2-2.1,0.2-3.2c0.3-0.7-0.1-1.4-0.6-1.9
				c-0.8,0.3-0.7,1.2-0.9,1.8c-0.2,0.6-0.4,0.8-0.9,0.2c-0.8-1-1.2-2.2-0.9-3.5c0.3-1.2,1.4-1.4,2.3-1.7c0.8-0.3,1.1-0.1,0.8,0.8
				c-0.2,0.5-0.6,0.9-0.2,1.5c0.7-0.3,1.6-0.4,1.5-1.6c0-0.6,0.4-1,1-1c0.6-0.1,0.8,0.3,1,0.8c0.3,0.9,0.4,0.9-0.6,1.2
				c-0.1,0-0.2,0.2-0.3,0.3c1.1,0.5,1.9,1.4,3.2,1.5c0.3-0.2,0.1-0.6,0.4-0.7c0.1,0.3-0.3,0.6-0.1,1c1.8,1,5.1,0.8,6.7-0.6
				c0.8-0.7,1.6-1.3,2.7-1.2c0.3,0,0.6-0.1,0.8-0.3c-0.3-0.5-0.8-0.6-1.4-0.6c-0.3,0-0.7,0-1-0.2c-0.2-0.2-0.5-0.4-0.4-0.7
				s0.3-0.5,0.6-0.5c1-0.2,2.1-0.3,3.1-0.5c0.8-0.1,1.3,0.4,1.3,1.2c0,0.6,0,1.2,0.1,1.7c1.3-0.2,1.3-1.6,2-2.3
				c0.8-1,1.6-1.9,2.4-2.9c2.1-2.6,2.9-2.9,6.1-1.8c0.1,0,0.3,0.1,0.4,0.1c2.2,0.9,2.4,1.6,0.8,3.3c-1,1.1-1.8,2.3-2.9,3.2
				c-1.7,2.4-3.3,4.8-4.2,7.6c0,0.1-0.1,0.2-0.1,0.4c-0.1,0.3-0.2,0.6-0.4,0.8c-0.2,0.2-0.2,0.4-0.3,0.7c0,0.3-0.1,0.6-0.3,0.9
				c-0.1,0.1-0.1,0.2-0.2,0.4c-0.3,1.2-0.9,2.4-0.2,3.7c0.8-0.4,1.3-0.9,1.2-1.9c0-0.5,0.2-0.9,0.3-1.4c0.1-1,1.4-3,2.2-3.5
				c0.2,0.5,0.2,1-0.1,1.3c-1,1-1.1,2.2-0.6,3.5c0.1,0,0.3,0,0.4-0.1c0.7-2,1.8-4,2.1-6.2c0,0,0-0.1-0.1-0.1
				c1.2-0.8,1.5-2.3,2.5-3.3c0.4-0.5,1.1-0.8,1-1.7c-0.8-0.4-1.3-0.1-1.7,0.5c-0.2,0.3-0.3,0.7-0.9,0.7c0-1,0-1.7,1-2.3
				c1.1-0.7,1.6-2,2.8-2.7c0.1-0.1,0.2-0.2,0.2-0.4c0.3-0.9,0.9-1.8,0.4-2.9C633.6,195.2,633.8,194.9,633.8,194.7z M614.5,169.7
				c-0.1,0.1-0.5,0-0.5-0.1c0-0.2,0.2-0.3,0.4-0.4C614.4,169.3,614.7,169.5,614.5,169.7z M618.8,198.4c1-1.4,2.1-2.6,3.3-3.6
				c0.1,0,0.1,0,0.2-0.1c0.6,0,1.1-0.4,1.7-0.2C623.1,195.8,620.3,197.9,618.8,198.4z M627.7,206.1c0.2,0.6,0.4,1,0.7,1.3
				C627.9,207.1,627.4,207,627.7,206.1z"/>
                                    <path class="st0" d="M586.2,180.4c0.7,0,1.4,0.5,2-0.2c0.1-0.1,0.4-0.1,0.5,0.1c0,0.1,0,0.3-0.1,0.4c-0.1,0.2-0.3,0.4-0.5,0.5
				c-1.2,0.5-2.1,1.6-3.5,1.5c-0.5,0-0.7,0.4-1,0.7c-0.3,0.2-0.7,0.3-0.8-0.1c-0.2-1.3-1.3-2-1.7-3.1c-0.2-0.4-0.4-0.7-0.4-1.2
				c0.1-1.2-0.1-2.4-0.6-3.5c0.4-1.5,1.5-2.5,3-2.9c0.9-0.3,1.8-0.5,2.7-0.6c3.1-0.5,6-1.5,9.1-2c1.1-0.2,2.1-0.5,3.1-1.1
				c1.3-0.8,2.9-1.1,4.4-1.4c0.2-0.2,0.3-0.2,0.5,0c1.2,0.5,2.6,0.8,3.5,2c0.1,0.2,0.3,0.4,0.6,0.3c0.3-0.1,0.7-0.3,1-0.2
				c0.8,0.3,1.3,0,1.7-0.6c0.4-0.4,0.8-0.4,1.3-0.3c-0.1,1.3-0.1,1.3-1.2,1.4c-0.7,0-1.3,0.1-1.4,0.9c0,0.4-0.3,0.5-0.7,0.5
				c-0.5,0-1.1,0-1.6,0c-0.8,0.3-1.3-0.2-1.9-0.6c-1.3-0.9-2.6-1-4-0.2c-1.5,0.8-3.1,1.2-4.7,1.4c-3.7,0.6-7.2,1.9-10.7,3.1
				c-1.5,0.5-2.2,1.5-2.2,2.8c0,1.8,0.8,2.5,2.6,2.4C585.5,180.2,585.9,180.1,586.2,180.4z"/>
                                    <path class="st0" d="M575.8,188.3c0.9-0.9,1.7-1.9,3.1-2.8c-0.6,1.1-1.2,1.9-0.5,2.8c0.6,1.4,0.7,2.9,0,4.3c0,0.7,0,1.3,0.1,2
				c0.2,0.9-0.9,2.7-1.7,3.1c-0.7,0.3-1,0.2-1-0.6c0-0.5,0-1.1,0-1.6c0-1.4,0-2.9-0.2-4.3C575.3,190.2,575.2,189.2,575.8,188.3z"/>
                                    <path class="st0" d="M618,170.2c0.4,0.6,0.9,1.1,1.5,1.5c-1.2,0.7-2.2-0.1-3.1-0.5c-0.4-0.2-0.8-0.5-0.6-1c0.2-0.5,0.6-0.3,1-0.3
				c0.1,0,0.3,0,0.4,0C617.5,169.9,617.7,170,618,170.2z"/>
                                    <path class="st36"
                                          d="M596.4,269c0.1-0.5,0.3-1,0.4-1.4C596.6,268,596.5,268.5,596.4,269z"/>
                                    <path class="st316"
                                          d="M582.8,204.2c-0.1,0-0.2-0.1-0.3-0.1C582.6,204.1,582.7,204.1,582.8,204.2z"/>
                                    <path class="st316"
                                          d="M597.4,190.2c0-0.5-0.1-1-0.1-1.5C597.3,189.2,597.3,189.7,597.4,190.2z"/>
                                    <path class="st316" d="M610.5,198.3c-0.8-0.5-1.3-1.2-1.6-2c-0.8-1.7-2-3.2-2.7-5c-0.8-1.9-2.3-3.3-3.9-4.6
				c-1.9-1.5-3.9-2.1-6.2-1.7c-1.3,0.1-2.4,0.7-3.4,1.4c-4.3,2.9-8.6,6-12.7,9.3c-0.8,0.7-1.6,1.4-2.3,2.2c-1.1,1.2-1.6,2.6-1.4,4.3
				c0.1,1.6,0.4,3.2,0.8,4.7c0.4,1.6,0.5,3.2,0.4,4.8c-0.3,6.4-0.6,12.9-0.3,19.3c0,0.7,0.1,1.5-0.3,2.1c0,0.5-0.3,0.9-0.6,1.3
				c-1.1,2-2.4,3.9-3.9,5.6c-1.9,2.2-2.4,4.8-2.1,7.6c0.2,2.1,0.9,4.2,1.5,6.2c1.1,3.6,3.6,5.7,7.1,6.6c0.1,0.1,0.2,0.1,0.3,0
				c0,0,0.1-0.1,0.1-0.1c-0.9-1.2,0-2,0.5-3c0.7-1.4,1.9-2.7,1.6-4.5c-0.2-1,0-1.9,0.1-2.9c0.9-2.4,0.2-4.5-1.3-6.4
				c1.6,0.3,1.8,0.1,1.5-1.3c-0.1-0.3-0.1-0.7-0.3-1c-0.8-1.9-0.4-3.6,0.5-5.3c0.7-1.4,1.5-1.7,2.6-0.7c2.3,2,7.8,1.9,10.6-0.1
				c2-1.4,3.3-3.2,2.7-5.8c-0.1-0.4-0.1-0.8,0.1-1.1c0.5-1,0.4-2,0.4-3c0.1-3.5-0.6-6.8-1.1-10.2c-0.6-3.6-2.6-6.3-5.8-8
				c-0.7-0.4-1.6-0.8-2-1.6c-0.6-1.2-1.6-1.5-2.8-1.2c-0.2,0-0.3,0.1-0.5,0.1c-1.1,0.2-2.2,0.2-3.2-0.2c-0.1,0-0.2-0.1-0.3-0.1
				c0.1,0,0.2,0.1,0.3,0.1c0.3,0.1,0.5,0.1,0.8-0.1l0,0c0.3-0.2,0.6-0.2,0.9,0c1-0.5,1.9-0.9,2.9-1.4c0.5-1-0.7-1.2-0.8-1.9
				c2.1-1,4.2-2.1,4.8-4.7c0-0.4-0.4-0.6-0.5-1c0.2,0.4,0.5,0.5,0.8,0.5c2.2-0.7,3.4-2.1,3.1-4.5c0-0.1,0.1,0.2,0.1,0
				c0.1,0.2,0.2,0.4,0.4,0.6c0.1,0.3-0.1,0.6,0.3,0.8c1.6,0.6,2,0.4,2-1.3c0-0.3,0-0.6-0.1-0.9c-0.1-0.5-0.1-1-0.1-1.5
				c0-0.1,0-0.1,0-0.2c0-0.3,0.1-0.6,0.1-0.8c0,0,0,0-0.1,0c-0.2,0.1,0-0.2,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0.1
				c-0.1,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.1,0,0.2c0,0.5,0,1,0.1,1.5c0.1,0.3,0.2,0.7,0.5,1c0.1,0.6,0.4,1.1,0.7,1.7
				c1,1.8,2.4,3,4,4.1c1.2,0.2,0.6-0.6,0.5-1c-0.4-1.4-0.8-2.9-1.1-4.4c0-0.1,0-0.1-0.1-0.1c-0.2,0.1,0.1-0.1,0.1,0.1
				c0.4,2,0.8,4.1,1.7,6c0,0.1,0,0.3,0.1,0.4c1.3,1.1,2.4,2.5,4,3.1c1,0.4,1.2-0.7,1.8-0.9c0.4-0.2,0.7-0.4,1.1-0.7
				C611.2,199,611,198.7,610.5,198.3z"/>
                                    <path class="st316" d="M597.4,187.7c0,0.3,0,0.6-0.1,0.8C597.3,188.3,597.4,188,597.4,187.7C597.4,187.7,597.4,187.7,597.4,187.7
				z"/>
                                    <path class="st317" d="M601.2,223.2c-0.1-0.3-0.2-0.6-0.1-0.9c0.6-1.7-0.1-3.2-0.5-4.8c-0.5-2.3-1.2-4.5-2.3-6.6
				c-1.5-3-3.7-5.3-6.8-6.6c-1.7-0.7-3.4-0.6-5.1,0c1.1-0.1,2,0.2,2.4,1.2c0.4,1.1,1.6,1.1,2.1,2c3,1.2,4.8,3.5,5.5,6.6
				c0.9,4,1.5,8.1,1.4,12.2c0,0.6-0.1,1.3-0.4,1.8c-0.4,0.6-0.5,1.1,0,1.7c0.3,0.5,0.2,1.1,0,1.7c-0.6,1.5-1.4,2.7-2.8,3.6
				c-0.9,0.5-2,0.9-3,1.1c-2.6,0.4-5.1,0.5-7.3-1.5c-0.8-0.7-2.2-0.5-2.6,0.5c-0.9,2-2,3.9-0.8,6.2c0.3,0.6,0.5,1.4,0.5,2.2
				c-0.9,0-1.3-0.9-2.3-1c0.6,1,1.1,1.9,1.6,2.8c0.7,1.2,1.1,2.4,0.4,3.7c-0.2,0.3-0.2,0.6-0.1,1c1.4,2.7,1.6,5.4-0.1,8.1
				c-0.5,0.8-0.9,1.8-1.3,2.7c0.4,0.3,0.9,0.4,1.3,0.6c1.8,0.8,3.6,1.6,5.2,2.8c0.7,0.6,0.9,0.5,1.1-0.4c0.9-4.2,1.8-8.3,3.5-12.3
				c0.9-2,1.9-3.9,2.7-6c1-2.5,2-5,3.8-7c0-0.1,0-0.2,0.1-0.5c-3.1,2.7-6.4,4.6-10.7,3.8c0.7-0.5,1.3-0.5,1.9-0.6
				c4.3-0.7,7.7-3,10.9-5.7c1.5-1.3,2.4-3,2.4-5C601.7,228.1,601.9,225.6,601.2,223.2z"/>
                                    <path class="st318" d="M623.8,211.9c-0.3,1.3-0.8,2.7-0.6,4.1c-0.3,0.8-0.2,1.5-0.1,2.3c0.4,5.8-2.3,10.3-6.5,14
				c-2.6,2.2-5.5,3.9-8.6,5.2c-0.8,0.3-1.6,0.7-2.4,1c-1.1,0.5-1.5,0.4-2.2-0.6c-1-1.4-1.1-3.5-0.1-4.9c0.5-0.7,0.7-1.4,0.1-2.1
				c-0.4-0.5-0.5-1.1-0.5-1.8c0-2.1-0.1-4.3-0.6-6.4c-0.2-0.7,0.1-1.3,0.5-1.9c1.4-1.8,2.5-3.8,3.5-5.8c1.1-2.3,1.2-2.2,3.9-1.1
				c-0.9,1.1-2,2-2.5,3.4c-0.5,1.2-1,2.5-1.7,4c0.9-0.8,1.1-1.6,1.5-2.4c0.7-1.5,1.3-2.9,2.4-4.1c0.9-1,1.6-1,2.5,0.1
				c0.3,0.4,0.5,0.8,1.2,1.1c-0.4-1.6,0.5-2.4,1.5-3.3c0.8-0.8,1.3-1.8,2-2.7c1.2,0.8,0.4,1.9,0.3,2.8c-0.7,0.8-1.1,1.7-1.4,2.7
				c-0.8,2.3-2.7,3.6-4.7,4.7c-1.5,0.8-2.7,1.8-3.5,3.4c-0.6,1.2-0.7,2.3,0,3.5c0.2,0.4,0.4,0.9,0.7,1.3c1,1.9,1.8,2.1,3.7,0.9
				c2.3-1.4,3.6-3.7,4.9-6c0.3-0.5,0.5-1.2,1.3-1c0.7,1,0.5,2.1,0.4,2.6c0.1-0.7,0.5-1.9-0.6-2.9c-0.3-1.7,0.6-3,1.2-4.5
				c0.8-1.4,2.1-2.5,1.9-4.3c0-0.4,0.2-0.7,0.3-1.1C622.3,210.8,622.6,210.7,623.8,211.9z"/>
                                    <path class="st319" d="M538.4,290c-0.3,0.4-0.4,1-0.5,1.5c-0.2,0.9,0.2,2.2-1.5,2.1c-0.6-0.2-1.3-0.4-1.9-0.6
				c-1.4-0.4-1.4-0.4-1-1.8c0.7-2.1,1.4-4.2,2.3-6.3c3.4-7.7,7.8-14.9,13.1-21.4c4.3-5.4,9.2-10.4,14.3-15.1
				c1.6-1.4,3.1-2.9,4.7-4.4c0,0.8,0,1.4,0,2c-0.2,0.8-0.6,1.5-1.3,2c-2.9,2-5,4.7-7.3,7.2c-0.6,0.6-1.1,1.2-1.6,1.8
				c-0.3,1-1.4,1.5-2,2.3c-2.4,3-4.8,6.1-6.9,9.3c-0.3,0.4-0.5,0.8-1,1c-1.3,1.6-2.3,3.4-3.2,5.3c-0.2,0.9-0.7,1.6-1.2,2.3
				c-0.3,0.2-0.4,0.6-0.5,0.9c0,0.3-0.2,0.6-0.4,0.8c-0.2,0.1-0.3,0.3-0.3,0.6c0.1,0.4-0.1,0.6-0.4,0.9c-1,1.9-1.7,3.8-2.3,5.8
				c0.2,0.4-0.2,0.6-0.3,0.9c-0.2,0.2-0.3,0.4-0.2,0.6C539.1,288.5,538.8,289.3,538.4,290z"/>
                                    <path class="st320" d="M592.5,273.5c0.8-5.4,1.2-10.9,1.2-16.4c0-1.7-0.1-3.5-0.7-5.1c-0.5,1-0.6,2.1-0.7,3.1
				c-0.3,3.6-0.2,7.3-0.7,10.9c-0.6,4.7-1.5,9.4-2.4,14.1c-1.4,7.5-2.2,15-3,22.5c-0.2,2.3-0.2,2.3,2,2.7c0.6,0.1,0.8,0,0.8-0.6
				c0.4-4.1,0.9-8.2,1.2-12.3C590.6,286,591.5,279.8,592.5,273.5z"/>
                                    <path class="st321" d="M587.4,202.6c0-0.5-0.3-0.7-0.6-1c-0.3-0.4-0.8-0.7-1-1.2c2.6-0.6,4.3-2.1,5.3-4.5
				c0.4-0.3,0.7-0.1,0.9,0.1c1.2,1.2,2.7,1.9,4.2,2.5c0.8,0.3,1.1,0.9,0.8,1.7c-0.5,1.4-0.8,2.9-1.8,4.1c0.7,0,0.8-0.7,1.4-0.8
				c0.8,1.9,2.3,3.3,3.2,5.3c0.3-0.8,0.9-0.7,1.5-0.4c0.6,0.6,1.3,0.9,1.8,1.7c-0.5,0.7-1.4,0.7-1.7,1.4l0,0
				c-0.7-0.1-0.9,0.6-1.6,0.9c-1-2-2-3.9-3.3-5.6c-1.3-1.8-3.4-2.7-5.4-3.9c1-0.3,1.8,0.1,2.6-0.2
				C591.6,202.6,589.5,202,587.4,202.6z"/>
                                    <path class="st322" d="M601.4,211.6c0.4,0,0.8-0.2,1.1-0.4c1.5-0.9,2.9-0.2,4.3,0.4c0.3,0.2,0.6,0.4,0.3,0.8
				c-1.4,1.8-2,4-3.3,5.8c-0.5,0.6-0.9,1.2-1.5,1.8c-0.5-1.1-0.7-2.2-1-3.2c-0.2-0.9-0.4-1.8-0.7-2.7c-0.3-0.9-0.2-1.6,0.6-2.1
				C601.2,211.9,601.3,211.7,601.4,211.6C601.4,211.6,601.4,211.6,601.4,211.6z"/>
                                    <path class="st323" d="M623.8,211.9c-0.8,0.5-0.7-0.4-1.1-0.8c-0.6,1-1.3,2-0.9,3.2c0.1,0.3,0,0.6-0.2,0.8
				c-0.7,0.6-1.1,1.3-1.4,2.2c0,0.1-0.3,0.2-0.4,0.3c-0.5-0.8,0.1-1.5,0.4-2.2c0.5-1.5,0.5-1.6-1.1-1.9c-0.7-0.1-1.4-0.1-1.9-0.6
				c0-0.5-0.1-1,0.2-1.5c0.2-0.5,0-1-0.2-1.5c0.4-0.9,0.8-1.9,1.3-2.8c0.3-0.5,0.7-0.9,1.4-0.7c0.4,0.3,0.4,0.7,0.5,1.1
				c0,0.3,0,0.6,0.1,0.9c0.6,1,1.8,0.7,2.6,1.2c0.3,0.2,0.5-0.2,0.6-0.5c0.2-0.4,0.2-0.9,0.5-1.3c0.2-0.2,0.3-0.3,0.6-0.1
				c0.3,0.5,0.3,1.1,0.2,1.7l0,0c-0.3,0.2-0.1,0.6-0.3,0.8c-0.2,0.2-0.2,0.4-0.3,0.7C623.8,211.2,624.1,211.6,623.8,211.9
				L623.8,211.9z"/>
                                    <path class="st324" d="M608,212.4c2.1-3.1,5.1-4.8,8.4-6.4c-0.4,1.8-1.2,3.2-1.9,4.7c-0.4,0.8-0.9,1.6-1.3,2.4
				c-0.2,0.3-0.3,0.7-0.7,0.6C611,213.3,609.6,212.8,608,212.4z"/>
                                    <path class="st325" d="M594.7,247.1c0.6-4.2,2.1-7.3,4.8-9.8c0,1.1,0.3,2,0.8,2.9c0.1,0.2,0.3,0.4,0.1,0.6
				c-1.3,1.3-2,3.1-3.2,4.5C596.6,246.1,595.9,246.8,594.7,247.1z"/>
                                    <path class="st318" d="M624.7,209.6c-0.2-0.6-0.4-1.2-0.3-1.8c-0.5-0.7,0.9-1.8-0.3-2.1c-1.2-0.3-2.6-0.5-3.7,0.5
				c-0.2,0.2-0.4,0.4-0.7,0.5c-0.6,0-1,0.4-1.4,0.6c0.5-1.8,0.9-3.7,1.8-5.4c0.8-0.6,1-1.7,1.7-2.4c0.5,0.2,1.1,0.2,1.5,0.6
				c0.1,0.2,0.1,0.4,0,0.6c-0.3,0.5-0.8,0.6-1.3,0.9c-0.6,0.4-0.9,0.9-0.7,1.6c0.1,0.7,0.7,0.9,1.3,0.9c0.6,0,1.2,0,1.7,0.1
				c0.8,0.2,1.4,0,1.9-0.7c0.4-0.6,0.9-1.1,1.4-1.4c0.6,0,0-0.6,0.4-0.7c0.5-0.1,0.9,0,1.1,0.5C627.3,204.2,625.9,206.8,624.7,209.6
				z"/>
                                    <path class="st326" d="M581,250c0.8,0.5,1.1,1.3,1.2,2.2c0.4,1.9,0.4,3.6-0.6,5.3c-0.5,0.8-0.9,1.7-1.3,2.6
				c-0.2,0.3-0.3,0.7-0.8,0.7c-0.2,0-0.4-0.1-0.6-0.3c0-0.1,0.1-0.2,0.1-0.2c-0.1-0.4-0.8-0.3-0.8-0.8c0.1-0.5,0.3-1,0.6-1.4
				c0.8-0.9,1-2.2,1.9-3.1c0.4-0.4,0.3-1.1,0.2-1.7C580.8,252.2,580.9,251.1,581,250z"/>
                                    <path class="st327" d="M601,202.8c-0.6,1-0.4,2.2-0.9,3.2c-2-0.8-3-3.9-1.8-5.6c0.1-0.2,0.2-0.3,0.4-0.4c0.8-0.3,1.6-0.7,2.4-0.9
				c0.8-0.2,1.2,0.2,0.9,1c-0.2,0.6-0.5,1.3-0.7,1.9C601.1,202.2,601,202.5,601,202.8z"/>
                                    <path class="st328" d="M602.1,234.4c-0.2,2.4,0,3.3,1.2,4.8c0,0.1,0,0.2-0.1,0.2c-1.6,1.1-2,0.8-2.6-1.1
				C600.2,236.8,600.7,235.5,602.1,234.4z"/>
                                    <path class="st329"
                                          d="M585.9,204.3c-1.6,0.4-3.1,0.5-4.9-0.5c1-0.1,1.8-0.1,2.5,0.2C584.3,204.5,585.2,204.1,585.9,204.3z"/>
                                    <path class="st330" d="M536.4,293.6c0.5,0,0.9-0.2,1-0.7c0.1-0.5,0.3-0.9,0.4-1.4c0.4,0.8-0.1,1.5-0.3,2.3
				C537.1,293.8,536.7,293.9,536.4,293.6z"/>
                                    <path class="st331"
                                          d="M571.1,237.9c-0.1-0.3-0.4-0.3-0.6-0.3c0.4-0.4,0.9-0.8,1.7-0.9C571.8,237.2,571.5,237.6,571.1,237.9z"/>
                                    <path class="st330"
                                          d="M540.4,294.4c0.3,0,0.7-0.1,0.9,0.3C541,294.7,540.7,294.7,540.4,294.4z"/>
                                    <path class="st329"
                                          d="M583.6,204c0.3-0.3,0.6-0.3,0.9,0C584.2,204.1,583.9,204.1,583.6,204z"/>
                                    <path class="st303" d="M586.2,180.4c-0.6,0.1-1.2,0.2-1.8,0.3c-0.4,0.1-0.8,0-1.2-0.3c-1.7-1.6-1.2-4.6,0.9-5.4
				c4.2-1.6,8.4-3.2,13-3.5c0.5,0,1-0.3,1.5-0.5c0.6-0.3,1.1-0.6,1.7-0.8c1.4-0.7,2.8-0.6,4.1,0.3c0.6,0.4,1.2,0.7,1.7,1
				c0.8,0.7,1.7,1.1,2.6,1.4c3.3,1.3,6,3.3,8,6.2c0.3,0.4,0.6,0.8,1,1.1c2,1.6,3.7,3.5,5.5,5.4c0.4,0.2,0.1,0.6,0.3,0.9
				c0,0.2,0,0.3,0,0.5c-0.1,1.6-1.3,2.2-2.7,2.5c-1.1,0.3-1.9-0.1-2.5-0.9c-0.8-0.9-1.4-2-2.2-2.9c-0.4-0.4-0.7-0.8-1.2-1
				c0-0.2-0.1-0.4-0.1-0.5c-0.3-0.4,0-0.8-0.3-1.2c0-0.1,0-0.2,0-0.3c-0.5-1.3-0.8-2.6-1.1-4c0.3,1.6,1,3.2,0.8,4.9
				c0,0.5-0.3,0.6-0.6,0.4c-0.3-0.2-0.5-0.6-0.7-0.9c-1.5-2.3-3.5-4.1-5.7-5.7c-1.3-0.9-2.4-2.1-3.1-3.4c-1-2-2.9-2.1-4.6-1.4
				c-1.3,0.5-2.5,1.3-3.6,2.2c-1.1,0.9-2.2,1.8-3.2,2.7c-1.4,1.3-3,2.2-4.8,2.7C587.2,179.9,586.6,180,586.2,180.4z"/>
                                    <path class="st332" d="M612.7,196.1c-1.6-1.2-2.8-2.6-3.6-4.5c-1.2-3.1-3.2-5.7-5.9-7.8c-0.5-0.4-1.1-0.7-1.8-0.8
				c-0.9-0.2-1.9-0.1-2.8-0.1c-1.5,0-2.1-0.6-2.3-1.9c-0.1-1.6,0.1-3.1,0.4-4.7c1.1-1,2.5-1.4,3.9-1.8c0.8-0.2,1.4,0,1.9,0.6
				c0.9,1,1.9,2,2.9,3c0.3,0.3,0.6,0.6,0.9,0.9c1.2,2,3,3.5,4.4,5.4c0.4,0.5,1.2,1.1,0.3,1.8c-0.1,0.1-0.2,0.1-0.2,0.1
				c0.1,0,0.2-0.1,0.4-0.2c1-0.2,2.7,1.4,2.5,2.5c-0.1,0.4-0.4,0.4-0.8,0.5c-0.6,0.2-1.3-0.1-1.7,0.4c0.1-0.1,0.3-0.2,0.4-0.2
				c2.3-0.4,2.4-0.4,2.5,1.9c0,0.3,0.1,0.6,0.2,0.8c0.5,1.1,1.5,1.9,2,3c0.4,0.9,0.2,1.4-0.8,1.4
				C614.6,196.5,613.6,196.6,612.7,196.1z"/>
                                    <path class="st333" d="M596.7,176.3c0.4,1.3,0.3,2-0.5,3.2c0.5,0.1,0.6-0.6,1.1-0.5c0.1,0,0.2,0.1,0.1,0.2
				c-0.3,0.5-0.7,0.9-0.9,1.4c0.2,0.3,0,0.4-0.2,0.5c-1.4-0.5-1.4-0.5-1.1-1.6c-0.4,0.5-0.8,1-1.2,1.5c-0.5,0.4-1,0.7-1.6,1
				c-3.9,2.3-7.3,5.2-10.6,8.2c-0.7,0.6-0.6,1.6-1.2,2.2c-0.5,0.4-1,0.9-1.4,1.3c-0.5-0.3-0.3-0.9-0.6-1.2c-0.1-1.4-0.2-2.9,0-4.3
				c0.4-0.8,1.1-1.3,1.8-1.8c3.4-1.9,6.8-3.8,10.4-5.5c2-1,3.9-2.4,5.4-4.1C596.1,176.7,596.3,176.4,596.7,176.3z"/>
                                    <path class="st334" d="M621.6,179L621.6,179l-0.2,0c-0.6-0.4-1.4,0.1-2-0.3c-0.2-0.2-0.5-0.4-0.6-0.6c-0.3-0.4-0.4-0.9-1.1-0.8
				c-0.1,0-0.4-0.3-0.5-0.5c-1.5-2.2-3.7-3.7-6.1-4.7c-0.5-0.2-1.1-0.4-1.5-0.9c0.8-0.6,1.6-0.7,2.5-0.6c0.7,0.1,1.4,0.2,2,0.4
				c4.2,1.6,8.2,3.6,10.9,7.4c0.3,0.7,0.7,1.4,0.5,2.2c-0.3,0.8-0.9,0.5-1.3,0.2C623.4,180.1,622.5,179.6,621.6,179z"/>
                                    <path class="st335" d="M623.2,200c-0.3,0-0.6,0-0.9,0c-0.5,0-0.6-0.2-0.6-0.6c1-1.5,2.2-2.8,3.4-4.1c1.2-1.3,2.6-1.7,4.3-1.1
				c0.5,0.2,1.1,0.3,1.6,0.6c0.5,0.1,0.1,0.5,0.3,0.8c0.9,1.4,0.8,1.2-0.6,1.8c-1.2,0.5-2.2,0.8-3.2,0.4c0,0,0.2,0.1,0.4,0.1
				c0.8,0.2,1.9,0,2,1c0.1,1-0.9,1.5-1.6,2.1c-0.3,0.3-0.7,0.5-1.2,0.5C625.8,201.2,624.4,200.8,623.2,200z"/>
                                    <path class="st336" d="M614.9,184.4c0.6-0.4,0.9-0.1,1.2,0.4c0.6,0.9,1.4,1.7,2,2.7c0.2,0.3,0.5,0.5,0.6,0.8
				c0.5,0.7,1.2,0.9,2,0.6c1.5,0.4,2.2-0.6,3.1-1.5c0.6-1.3,0.9-1.4,2-0.7c0.2,0.1,0.3,0.2,0.5,0.4c1.4,1.7,2.7,3.5,4.1,5.6
				c-2.9-0.7-5.6-0.9-8.2-1c-1.6,0-2.8-0.7-3.7-2c-0.8-1.1-1.6-2.2-2.3-3.3C615.6,185.7,615.2,185.1,614.9,184.4z"/>
                                    <path class="st337" d="M580.4,192.5c0.1-0.2,0.2-0.5,0.2-0.7c-0.3-0.7,0.2-1,0.6-1.5c1.4-1.6,3.1-2.8,4.7-4.1
				c1.5-1.2,3-2.5,4.6-3.5c1.7-1.1,3.6-1.9,4.8-3.7c0.4,0.6-0.5,0.9-0.1,1.2c0.3,0.3,0.7,0.5,1,0.8c0.5,1.5,0.4,1.6-1,2
				c-2.6,0.8-4.8,2.2-7,3.8C585.6,188.6,583,190.6,580.4,192.5z"/>
                                    <path class="st338" d="M607.8,201.1c0.4,0,0.7-0.2,0.9-0.6c0.2-0.4,0.4-0.6,0.9-0.6c0.4,0,1,0.1,0.9-0.7c0-0.2,0.6-0.3,0.2-0.4
				c-1.4-0.5-1.8-1.8-2.4-2.9c-0.3-0.6-0.6-1.2-1-1.7c-0.3-0.4-0.6-1-0.8-1.5c-0.9-2.8-2.9-4.8-5.2-6.3c-1.5-1-3.2-1.4-5-1.3
				c1.5-0.5,3-0.4,4.4-0.3c0.6,0,1.1,0.4,1.5,0.8c2,1.5,3.6,3.4,4.7,5.7c1.2,2.4,2.6,4.6,4.6,6.5c0.7,0.7,1.4,1.4,2.3,1.9
				c0.4,0.2,0.5,0.5,0.2,0.9c-0.3,0.4-0.7,0.9-1.2,1C611,202,609.3,202.2,607.8,201.1z"/>
                                    <path class="st339" d="M613.9,192.1c-0.5-0.8,0.1-1.7-0.3-2.6c-1.3-0.2-2.4,0-3.4,0.9c0.3-0.8,0.7-1.2,1.5-1.2
				c0.6,0,1.1-0.1,1.6-0.4c-0.4-0.8-0.6-1.7-1.3-2.2c-0.9-0.7-1.5,0.7-2.5,0.5c0.3-0.7,1.1-0.6,1.5-1.2c-0.6-1.3-1.7-2.3-2.7-3.3
				c-0.9-1-1.9-2-2.1-3.3c2,1.3,3.6,3,5,5c1.7,2.5,3.3,5,5,7.5c-0.5,0.8-1.3,0.1-1.9,0.4C614.2,192,614.1,192.1,613.9,192.1z"/>
                                    <path class="st340" d="M627.2,201.1c1.2-0.2,1.6-1.3,2.5-1.9c0.3-0.2,0-0.4-0.1-0.6c-0.3-0.3-0.6-0.4-1-0.4
				c-0.8-0.1-1.5-0.4-2.3-0.8c0.7-0.1,1.2,0,1.7,0c0.8,0.1,1.6,0.5,2.2-0.4c0.3-0.4,1-0.4,1.6-0.1c-0.1-0.9-0.8-1.5-0.7-2.3
				c0.2,0.1,0.5,0.1,0.7,0.2c1.8,0.9,1.9,1.6,0.6,3.1c-1.1,1.3-2.2,2.5-3.3,3.7c-0.4-0.2-0.8-0.4-1.2-0.3
				C627.5,201.6,627.3,201.5,627.2,201.1z"/>
                                    <path class="st0" d="M622.1,194.7c-0.1,0-0.3,0-0.4,0c-1.3-0.1-2.1-0.8-2.4-2c-0.1-0.3,0.1-0.5,0.3-0.6c0.2-0.1,0.5-0.1,0.7-0.1
				c2.2,0,4.4-0.1,6.5,0.3c0.5,0.1,0.8,0.2,0.7,0.7c-0.1,0.5-0.4,0.5-0.8,0.3c-0.5-0.3-1-0.1-1.5,0.1c-0.8,0.3-1.5,0.7-2.3,0.7
				c-0.2,0-0.4,0.3-0.5,0.5C622.3,194.7,622.2,194.7,622.1,194.7z"/>
                                    <path class="st341" d="M591.4,195.3c1.5-0.4,2.3-1.6,3.1-2.8c0.2-0.4,0.1-0.7,0.1-1.1c0-0.5-0.3-0.9,0-1.5
				c0.6,0.5,0.5,1.1,0.7,1.7c-0.5,1.1,0.1,2.2,0.2,3.2c0.1,0.8,0.5,1.6,1,2.2c0.3,0.2,0,0.6,0.3,0.9l0,0c0.1,0.3-0.1,0.5-0.4,0.4
				C594.4,197.8,592.5,197.2,591.4,195.3z"/>
                                    <path class="st342" d="M595.5,192.4c0.2-0.1,0.4-0.2,0.7-0.1c1,0.2,1.2,0,1-0.9c-0.3-1.3-0.3-2.6,0.3-3.9c0,1.3,0.3,2.5,0.3,3.8
				c-0.1,0.1-0.2,0.1-0.2,0.2c0,1.5,0,3,1.1,4.3c0.5,0.6,0.9,1.3,1.4,2c0,0.3-0.2,0.3-0.4,0.4c-1.4,0.5-1.5,0.5-2.2-0.9
				C596.8,195.6,596.2,194,595.5,192.4z"/>
                                    <path class="st332" d="M614.2,191.8c0.1-0.4,0.2-0.7,0.6-0.4c0.5,0.3,1,0.2,1.5,0.1c1,1,1.9,2,2.9,3.1c0.4,0.4,0.5,0.8,0,1.2
				c-0.5,0.4-0.8,1.1-1.5,1.3c-0.9-0.6-1.8-1.2-1.1-2.4c0.3-0.5-0.2,0-0.1-0.1C615.2,194,614.5,193.1,614.2,191.8z"/>
                                    <path class="st343" d="M621.6,179c1,0,1.7,0.5,2.3,1.1c0.4,0.3,0.6,0.9,1.3,0.6c1,0.8,1.1,1.1,0.9,1.7c-0.1,0-0.3,0.1-0.4,0
				c-1.1-0.1-2.3,0.2-3.3-0.3c-1-0.5-1.5-1.8-2.4-2.7C620.5,178.9,621.2,179.4,621.6,179z"/>
                                    <path class="st344" d="M630.5,180.6c-0.7-0.9-1.4-1.8-2.1-2.8c-0.4-0.5-0.8-1-0.8-2c2.4,1.5,4,3.5,5.4,5.9
				C631.8,182.1,631.3,181,630.5,180.6L630.5,180.6z"/>
                                    <path class="st0" d="M629,182.2c0.1,0.2,0.2,0.3,0.3,0.4c0.4,0,0.8-0.1,1.3-0.1c0.3-0.2,0.2-0.6,0.1-0.9c-0.1-0.3-0.2-0.6-0.1-1
				c-0.7,0.1-1.3,0-1.7-0.8c-0.3-0.5-0.8-0.8-1.4-0.9c0,0.6-0.2,1.2,0.3,1.5C628.4,181,628.7,181.5,629,182.2z"/>
                                    <path class="st345" d="M591.4,195.3c1.3,1.3,3,2.1,4.8,2.8c0.2,0.1,0.4,0,0.5-0.2c0.7,0.7,0.8,1.5,0.3,2.3c-0.1-0.5,0-1-0.7-1.2
				c-2-0.6-3.6-1.7-5.2-3c-0.4-0.5-0.8-0.9-1.3-1.6C590.6,194.5,590.9,195,591.4,195.3z"/>
                                    <path class="st346" d="M614.2,191.8c0.7,1.2,1.4,2.3,2.8,2.8c-0.2,0.4-0.8,0.7-0.2,1.3c0.3,0.4,0.8,0.7,0.9,1.2c0,0,0,0,0,0
				c-1.3,0.3-2.6,0-3.8,0.3c-0.2-0.5-0.7-0.8-1.1-1.2c1.2,0.1,2.3,0.1,3.5,0c-0.3-1.7-1.8-2.6-2.3-4
				C614,192,614.1,191.9,614.2,191.8z"/>
                                    <path class="st347" d="M626.1,182.4c0-0.1,0.1-0.3,0.1-0.4c-0.8-0.1-0.7-0.9-1-1.3c0.1-0.8-0.4-1.5-0.3-2.4c1.1,0.8,1.7,2,2.6,3
				c0.3,0.3,0.3,0.7-0.2,0.8C627,182.2,626.5,182.3,626.1,182.4z"/>
                                    <path class="st348" d="M613.9,197.3c0.9-0.9,2-0.6,3-0.5c0.3,0,0.5,0.2,0.8,0.2c-0.1,0.3-0.3,0.5-0.5,0.7
				c-1.3,1.2-1.8,1.2-3.1-0.1C614,197.5,613.9,197.4,613.9,197.3z"/>
                                    <path class="st349" d="M602.5,197c0.4,0,0.5-0.1,0.3-0.5c-0.4-1.3-0.9-2.6-1-3.9c0-0.5-0.2-1,0.3-1.6c0.3,2.4,1.2,4.4,1.5,6.6
				C603.2,197.5,602.8,197.5,602.5,197z"/>
                                    <path class="st350"
                                          d="M624.6,175.2c1.9-0.1,2.1,0.1,2.2,1.6c0,0.4,0.2,0.8,0.3,1.2C626,177.4,625.4,176.4,624.6,175.2z"/>
                                    <path class="st0"
                                          d="M600.8,183.1c-0.6,1.5-0.8,1.7-3.1,1.2c0.4-0.6,1.4-0.3,1.4-1.2C599.6,182.8,600.2,182.8,600.8,183.1z"/>
                                    <path class="st351" d="M600.8,183.1c-0.6-0.1-1.2-0.1-1.7,0c-0.6,0-1.2,0-1.8,0c-0.5,0.2-1,0.3-1.5,0c-0.2,0-0.4,0-0.6-0.1
				c1.2-0.3,0.7-1.3,1-2c0.1-0.1,0.2-0.2,0.2-0.3c0.4,0.1,0.3,0.4,0.4,0.7c0.5,1.5,0.5,1.5,2,1.4c0.9,0,1.7-0.3,2.6,0.2
				C601.2,183,601,183.1,600.8,183.1z"/>
                                    <path class="st352" d="M614.1,183.4c-0.3-1.4-0.6-2.8-0.9-4.2c-0.1-0.5-0.2-1.1-0.4-1.9c0.7,1,1.6,3.9,1.6,5.2
				C614.1,182.7,614.3,183.1,614.1,183.4z"/>
                                    <path class="st0" d="M600.2,173.7c-0.3,0-0.6,0-0.7-0.2c-0.1-0.3,0.2-0.5,0.4-0.7c0.4-0.3,0.9-0.2,1.4-0.4
				c0.3-0.1,0.5,0.2,0.6,0.5c0.1,0.4-0.1,0.5-0.4,0.5C600.9,173.5,600.5,173.6,600.2,173.7z"/>
                                    <path class="st353"
                                          d="M629.3,189.6c1.3,0.5,2.1,1.4,2.3,2.8C630.6,191.7,629.9,190.7,629.3,189.6z"/>
                                    <path class="st354"
                                          d="M623.7,187.4c-0.7,1.7-1.4,2.1-3.1,1.5c1.4-0.2,2.3-0.9,2.8-2.1C623.6,187,623.5,187.2,623.7,187.4z"/>
                                    <path class="st0" d="M628.5,207.5c-0.5-0.1-1.1,0.2-1.3-0.3c-0.3-0.6,0.1-1.1,0.5-1.7C628.2,206.1,628.3,206.9,628.5,207.5
				C628.5,207.5,628.5,207.5,628.5,207.5z"/>
                                    <path class="st0"
                                          d="M616.8,189.5c-1.2-0.4-1.2-0.4-1-1.6C616.7,188.1,616.6,188.8,616.8,189.5z"/>
                                    <path class="st0" d="M614.5,169c0.1,0.4,0.5,0.5,0.6,0.8c-0.4,0.1-0.8,0.2-1.2,0.2c-0.3,0-0.6-0.2-0.6-0.5
				c-0.1-0.4,0.3-0.5,0.6-0.5C614,169,614.3,169,614.5,169C614.5,169,614.5,169,614.5,169z"/>
                                    <path class="st354" d="M624.4,185.9c-0.6-0.2-0.7-0.5-0.6-0.9c0-0.3,0.2-0.5,0.5-0.4c0.4,0.1,0.7,0.4,0.6,0.8
				C624.9,185.7,624.6,185.8,624.4,185.9z"/>
                                    <path class="st0" d="M607.4,203.2c-0.1,0-0.2,0-0.3-0.1c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.3-0.7,0.1-0.9c0.4-0.2,0.6,0.1,0.9,0.3
				c0.4,0.4,0,0.6-0.2,0.8C607.7,203,607.6,203.1,607.4,203.2z"/>
                                    <path class="st0"
                                          d="M595.8,183c0.5-0.1,1-0.5,1.5,0c0,0.6-0.4,0.9-0.9,0.8C595.8,183.8,595.8,183.4,595.8,183z"/>
                                    <path class="st0"
                                          d="M615.3,187c-0.6-0.3-1.2-0.5-1.5-1.1C614.9,185.7,614.9,185.7,615.3,187z"/>
                                    <path class="st0" d="M621.4,172.8c-0.1,0.3-0.2,0.5-0.5,0.5c-0.4,0-0.6-0.3-0.5-0.7c0-0.3,0.2-0.4,0.5-0.3
				C621.2,172.3,621.3,172.6,621.4,172.8z"/>
                                    <path class="st0" d="M582,184.3c-0.1,0.4-0.3,0.7-0.8,0.7c-0.2,0-0.2-0.1-0.2-0.3c0-0.5,0.3-0.7,0.7-0.7
				C581.9,184,582,184,582,184.3z"/>
                                    <path class="st343"
                                          d="M619.4,178.6c0.7,0.1,1.4-0.3,2,0.3C620.8,178.9,620,179.2,619.4,178.6z"/>
                                    <path class="st0" d="M593.7,177.4c0.2,0,0.3,0,0.3,0.2c0,0.2-0.1,0.4-0.3,0.4c-0.2,0-0.4,0-0.4-0.3
				C593.3,177.5,593.6,177.5,593.7,177.4z"/>
                                    <path class="st0"
                                          d="M598.1,174.1c0.2-0.3,0.4-0.4,0.7-0.3c0,0,0.1,0.2,0.1,0.2C598.7,174.4,598.4,174.3,598.1,174.1z"/>
                                    <path class="st0" d="M624.9,183.1c-0.1,0.1-0.1,0.2-0.2,0.2c-0.2,0.1-0.2-0.1-0.2-0.2c0-0.1,0.1-0.3,0.2-0.3
				C624.8,182.8,624.9,182.9,624.9,183.1z"/>
                                    <path class="st0" d="M623.9,174.4c-0.1,0.2-0.2,0.2-0.4,0.1c-0.1,0-0.2-0.2-0.2-0.3c0-0.1,0.2-0.1,0.2-0.1
				C623.8,174.1,623.9,174.2,623.9,174.4z"/>
                                    <path class="st352"
                                          d="M614.5,182.7c0.3,0.4,0.3,0.8,0.3,1.2C614.3,183.6,614.4,183.1,614.5,182.7z"/>
                                    <path class="st318"
                                          d="M624.4,210.4c0-0.3,0-0.6,0.3-0.8C624.7,209.9,624.7,210.2,624.4,210.4z"/>
                                    <path class="st354"
                                          d="M623.5,186.3c-0.2-0.2-0.3-0.6-0.3-0.9C623.6,185.6,623.5,185.9,623.5,186.3z"/>
                                    <path class="st345"
                                          d="M596.7,197.9c-0.3-0.2-0.3-0.5-0.3-0.9C596.7,197.2,596.7,197.6,596.7,197.9z"/>
                                    <path class="st318"
                                          d="M623.8,211.9c0-0.3,0-0.7,0.3-0.9C624.2,211.4,624.1,211.6,623.8,211.9z"/>
                                    <path class="st355" d="M591.5,189.6c-1,1.5-2.5,2.5-4,3.3c-1.5,0.8-2.8,1.7-4,2.9c-1.4,1.5-2.9,2.9-4.5,4.1
				c-0.2,0.2-0.4,0.7-0.8,0.3c-0.3-0.3-0.2-0.6,0-0.9c1.1-1.7,2.4-3.2,4-4.6c1.4-1.2,3-1.9,4.6-2.7
				C588.4,191.3,590,190.5,591.5,189.6z"/>
                                    <path class="st356"
                                          d="M604.1,192.6c0.7,2.2,1.4,4.3,2.7,6.3C605.4,198.3,604.1,195.3,604.1,192.6z"/>
                                    <path class="st357" d="M610.4,199.2c0.3,0,0.6,0.1,0.6,0.5c0,0.3-0.2,0.4-0.5,0.4c-0.3,0-0.7,0.1-0.9-0.2
				C609.8,199.7,610.1,199.5,610.4,199.2z"/>
                                    <path class="st358" d="M547.7,269.6c2.1-3.5,4.5-6.7,7.1-9.9c0.8-1,1.7-2,2.8-2.7c0.1,0.7-0.2,1.2-0.6,1.7c-2,2.8-4,5.5-6,8.3
				c-0.6,0.8-1,1.6-1.7,2.3C548.8,269.8,548.3,270,547.7,269.6z"/>
                                    <path class="st330"
                                          d="M543.3,277.2c0.3-0.8,0.7-1.6,1.2-2.3c0.1,0.1,0.2,0.3,0.2,0.3C544.2,275.8,544.1,276.7,543.3,277.2z"/>
                                    <path class="st330"
                                          d="M538.4,290c0-0.8,0.4-1.5,0.7-2.3C539.3,288.7,539,289.5,538.4,290z"/>
                                    <path class="st330"
                                          d="M542.5,278.9c0-0.3,0.2-0.6,0.4-0.8C543.2,278.6,542.8,278.7,542.5,278.9z"/>
                                    <path class="st330"
                                          d="M539.3,287.1c0-0.3,0.1-0.6,0.3-0.9C540.1,286.7,539.6,286.9,539.3,287.1z"/>
                                    <path class="st330"
                                          d="M541.8,280.4c0-0.3,0.2-0.6,0.4-0.9C542.7,280.1,542.2,280.2,541.8,280.4z"/>
                                    <path class="st359" d="M586.1,245.6c-1.6-0.1-2.9-1-4.3-1.5c2.2,2.4,4.8,2.6,7.8,1.6c-2.4,4.2-3.9,7.7-3.6,9
				c1.8-3.3,2.9-6.8,4.8-10.2C589.2,245.3,587.7,245.8,586.1,245.6z"/>
                                    <path class="st360" d="M617.1,213c1,0,2,0.3,3,0.3c0.7,0,0.9,0.3,0.8,1c-0.2,0.6-0.4,1.3-0.7,1.9c-0.2,0.5-0.5,0.9-0.5,1.5
				c-0.7,1.4-1.3,2.8-1.4,4.4c0.1,0.1,0.1,0.1,0,0.2c0,0-0.1,0.1-0.1,0.1c-0.2,0.2-0.5,0.3-0.5,0.5c-0.4,1.3-1.4,2.2-2,3.3
				c-1.1,2-2.8,3.3-4.8,4.2c-0.9,0.4-1.8,0.1-2.3-0.7c-0.6-1.1-1.1-2.2-1.6-3.3c-0.3-0.6-0.2-1.3,0-2c0.7-1.8,1.7-3.3,3.5-4.1
				c1.7-0.8,2.9-2,4.2-3.3c0.6-0.5,0.7-1.2,0.9-1.9C616,214.3,616,213.3,617.1,213z"/>
                                    <path class="st361" d="M618.2,222.4c0-0.1,0-0.2,0-0.2c0.9,0.5,0.8,1.4,0.8,2.2c0,0.5-0.2,1-0.3,1.6c-0.4-0.6-0.2-1.2-0.2-1.8
				C618.5,223.6,618.6,222.9,618.2,222.4z"/>
                                    <path class="st362"
                                          d="M595,200.4c-1.3-0.5-2.7-0.9-3.7-2.5c1.5,0.8,2.6,1.5,3.8,2.1C595.1,200.2,595,200.3,595,200.4z"/>
                                    <path class="st363" d="M619.7,206.6c0.3-1.1,1.1-1.5,2.2-1.4c0.9,0.1,1.7,0,2.6,0.1c0.5,0,0.8,0.3,0.5,0.9
				c-0.2,0.5-0.4,1.1-0.7,1.6c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.4,0.3c-0.4,0.1-0.8,0.1-1.2,0.1
				c-0.8-0.2-1.9,0.5-2.5-0.7C619.9,207.4,619.8,207,619.7,206.6z"/>
                                    <path class="st364" d="M623.8,208.1c0.1,0,0.2,0,0.3,0c0,0.6-0.2,1.2-0.4,1.8c-0.2,0.6-0.7,0.7-1.1,0.3c-0.5-0.5-1.1-0.5-1.7-0.6
				c-0.5-0.1-1.3-0.2-0.8-1.1c0.7-0.4,1.5-0.1,2.2-0.2C622.7,208.1,623.3,208.6,623.8,208.1z"/>
                                    <path class="st318" d="M622.6,208.4c-0.9,0-1.7,0.1-2.6,0.1c-0.3-0.2-0.4-0.4-0.1-0.6c0.8,0.5,1.8,0.1,2.6,0.3
				C622.7,208.2,622.8,208.2,622.6,208.4C622.7,208.3,622.7,208.4,622.6,208.4z"/>
                                    <path class="st365" d="M627.8,202c-0.5,0.7-1.2,1.2-1.6,2c-0.3,0.5-0.7,0.6-1.3,0.5c-0.9-0.2-1.8-0.3-2.7-0.3
				c-0.8,0-1.1-0.5-1.3-1.1c-0.3-0.8-0.1-1.5,0.6-1.9c0.5-0.3,1.1-0.5,1.7-0.8C624.9,200.5,626.4,201.1,627.8,202z"/>
                                    <path class="st366" d="M627.8,202c-1.5-0.5-3.1-1.1-4.6-1.6c0-0.2,0-0.3,0-0.5c0.8-0.1,1.5,0.4,2.2,0.6c0.6,0.2,1.2,0.4,1.8,0.5
				c0.2,0.2,0.4,0.2,0.6,0.3C628,201.6,628.7,201.9,627.8,202z"/>
                                    <path class="st367"
                                          d="M628.9,196c0.4-0.2,0.7-0.3,1,0.1c0.1,0.1,0,0.2-0.1,0.2C629.4,196.5,629.1,196.4,628.9,196z"/>
                                    <path class="st368"
                                          d="M623.9,190.2c0.5-0.6,1.2-0.8,1.8-1.3C625.7,190,625.4,190.2,623.9,190.2z"/>
                                    <path class="st323"
                                          d="M622.6,208.4c0-0.1,0-0.1,0-0.2c0.4,0,0.8,0,1.2,0C623.6,209.1,623.1,208.5,622.6,208.4z"/>
                                    <polygon points="522.9,293.6 521.2,298.8 554.9,342.1 585.6,307.1 			"/>
                                    <path class="st330" d="M572.2,259.4c3.3,3,7.7,3.7,11.8,4.9c3,0.8,2.9,0.4,1.3,3.2c-2,3.5-4.3,6.8-6.6,10.1
				c-1.9,2.7-3.8,5.5-5.2,8.5c-1.9,4.1-3.9,8.2-5.4,12.5c-0.3,1-0.4,1-1.5,0.9c-0.1,0-0.3,0-0.4,0c-2.8-0.9-5.8-1.2-8.6-1.9
				c-2.5-0.6-5.1-0.8-7.7-1.3c-2.7-0.5-5.5-0.9-8.2-1.7c0.3-0.5,0.7-0.6,1.1-0.9c0.7-0.4,1.3-1,1.6-1.8c0.3-0.8,1-1.4,1.5-2.1
				c0.7-1,1.5-2,1.7-3.3c0.1-0.4,0.2-0.8,0.5-1c2.7-2.2,3.9-5.4,5.9-8c2.2-2.9,3.5-6.3,5.7-9.2c0.7-0.9,1.3-1.9,2.3-2.6
				c0.7-0.5,1.3-1,1.8-1.7C565.9,261.2,568.8,259.9,572.2,259.4z"/>
                                    <path d="M522.6,294l-1.4,4.7L522.6,294z"/>
                                    <path class="st369" d="M572.2,259.4c-0.6,0.5-1.3,0.7-2.1,0.9c-1.4,0.3-2.9,0.7-4,1.8c-1.4,1.4-2.8,2.8-4.3,4.1
				c-1,0.8-1.8,1.8-2.2,3.1c-0.3,0.8-1,1.4-1.6,2.1c-0.3,0.4-0.6,0.7-0.7,1.2c0,0.5-0.4,0.9-0.6,1.3c-0.6,1.5-1.7,2.6-2.6,3.9
				c-0.8,1.1-1.4,2.3-2.3,3.4c-0.1,0.1-0.2,0.2-0.2,0.2c-0.1,2-1.9,2.7-3,3.9c-0.3,0.3-0.7,0.5-0.7,1c-0.2,2.1-1.7,3.4-2.9,5
				c-0.1,0.2-0.4,0.4-0.4,0.6c-0.2,1.8-1.7,2.2-3,2.7c-0.1,0-0.2,0-0.3,0c-0.2-0.3-0.6,0-0.9-0.3c-1,0-2-0.2-2.9-0.6
				c-0.4-0.8,0.3-1.6,0.1-2.4c0-0.6,0.1-1.1,0.5-1.5c0.7-0.6,0.6-1.5,0.6-2.3c0-0.3,0-0.5,0.2-0.7c0.3-0.3,0.4-0.6,0.3-1
				c0.5-2,1.2-3.8,2.2-5.6c0.3-0.3,0.5-0.5,0.5-0.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.5,0.4-0.8c0.1-0.4,0.3-0.7,0.6-1
				c0.6-0.7,1.1-1.3,1.1-2.3c0.8-1.9,1.7-3.8,3.3-5.2c0.9,0.1,1.5-0.4,2-1.1c2.3-3.2,4.5-6.5,6.9-9.6c0.4-0.5,0.6-1.1,0.8-1.7
				c2.1-2.9,4.5-5.6,7.2-7.9c1.2-1,2.3-2,3.2-3.2c0,3.8,1.1,7.3,2.5,10.8C570.7,257.8,571.3,258.7,572.2,259.4z"/>
                                    <path class="st369" d="M524,319.6c0.7-0.6-0.2-0.2-0.2-1c0-0.3-0.5-0.5-0.3-0.7c0.3-0.3-0.5-0.1-0.6-0.5c0.5-2,1.2-3.8,2.2-5.6
				c0.3-0.3,0.5-0.5,0.5-0.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.5,0.4-0.8c0.1-0.4,0.3-0.7,0.6-1c0.6-0.7,1.1-1.3,1.1-2.3
				c0.8-1.9,1.7-3.8,3.3-5.2c0.9,0.1,1.5-0.4,2-1.1c2.3-3.2,4.5-6.5,6.9-9.6c0.4-0.5,0.6-1.1,0.8-1.7c2.1-2.9,4.5-5.6,7.2-7.9
				c1.2-1,2.3-2,3.2-3.2c0,3.8,1.1,7.3,2.5,10.8c0.4,1,1,2,1.9,2.7c-0.6,0.5-1.3,0.7-2.1,0.9c-1.4,0.3-2.9,0.7-4,1.8
				c-1.4,1.4-2.8,2.8-4.3,4.1c-1,0.8-1.8,1.8-2.2,3.1c-0.3,0.8-1,1.4-1.6,2.1c-0.3,0.4-0.6,0.7-0.7,1.2c0,0.5-0.4,0.9-0.6,1.3
				c-0.6,1.5-1.7,2.6-2.6,3.9c-0.8,1.1-1.4,2.3-2.3,3.4c-0.1,0.1-0.2,0.2-0.2,0.2c-0.1,2-1.9,2.7-3,3.9c-0.3,0.3-0.7,0.5-0.7,1
				c-0.2,2.1-1.7,3.4-2.9,5c-0.1,0.2-0.4,0.4-0.4,0.6c-0.2,1.8-1.7,2.2-3,2.7c-0.1,0-0.2,0-0.3,0c-0.2-0.3-0.6,0-0.9-0.3
				c-1,0,1.1-3.3,0.2-3.7"/>
                                    <path class="st330" d="M554.3,293.3c4.2,0.4,9.6,2.1,12.3,4.3c2.8,2.9-0.5,6.6-2.1,9.3c-4.2,6-8.3,12.1-11.3,18.8
				c-1.2,2.7-2.7,5.6-5.4,6.9c-2,1-4.4,0.9-6.6,0.6c-4.2-0.7-8.5-1.4-11.9-3c-8.8-3.7,0.6-12.4,3.4-17.3
				c5.5-7.5,10.7-19.7,21.4-19.6L554.3,293.3z"/>
                                    <path class="st319" d="M523.7,321c-2,2.4-2.4-1.2-2-4.8c0.3-2.7,2.1-8.4,3.6-12.2c4.8-11.8,11.2-25.3,18.7-35.3
				c2.6-3.2,4-5.8,6.8-7.6c2.3-0.3-2.9,6.6-6.5,15.8c-4.1,9.8-9.8,22.1-14,31C526.8,315.1,525.1,319.2,523.7,321L523.7,321z"/>
                                    <path class="st370" d="M523.5,308.5c-0.6-0.3-1.2-0.8-1.2-1.5c0.2-1.6,1-2.9,1.5-4.5c4.8-12.1,12-29.5,18.3-37.9
				c8.2-9.7,19-20.2,29.2-27.9c3.7-2.3-1.5,4.8-2.3,6.1c-4.2,6.1-10.2,10.4-15.8,15.8c-0.9,0.9-1.7,1.9-2.3,3
				c-2.5,5.6-7.5,10.3-11.1,15.8c-5.1,9-10.3,20.1-13.9,29.6"/>
                                </g>
                                <g id="ChefsGlasses">
                                    <g id="Chef_Head_00000182487671867587816610000006743658769373214381_">
                                        <path class="st0" d="M729.7,163.1c-0.5-0.3-1-0.4-1.7-0.4c-1.7,0-3.8,1.5-5.5,2.5c-0.2,0.1-0.3,0.3-0.5,0.4
					c-2.7,1.7-5.3,3.4-7.6,5.4c-1.3,1.1-2.6,1.8-4.1,1.9c0,0,0,0,0,0c-1.1,1.6-2.8,2.8-5.3,2.8c-0.4,0.1-0.7,0.1-1.1,0.1
					c-0.4,0-0.8,0-1.2-0.1c-0.9,0.4-1.8,0.6-3,0.5c-3.6-0.1-7.1-0.2-10.6,0.4c-1.9,0.3-3.8,0.7-5.8,0.8c-0.3,0-1.9,0.2-2.2,0
					c-0.5,0.1-1,0.3-1.6,0.4c0,0.1,0,0.2,0,0.3c0,0.7-0.4,1-0.9,1.3c-1.2,0.7-2.3,1.4-3.4,2.2c-1,1.6-2.2,2.4-3.7,2.1
					c-0.4,0.1-0.9,0.1-1.4,0.1c-0.5,0-0.9,0-1.4-0.1c-0.8,0.3-1.7,0.5-2.7,0.5c-0.2,0-0.4,0-0.5,0c-0.2,0-0.4,0-0.7,0
					c-0.8,0-1.6-0.1-2.3-0.3c0,0.3-0.1,0.6-0.3,0.9c-0.6,0.4-1-0.1-1.4-0.3c-1.2-0.6-2.5-1.2-3.8-1.4c-5.6-1-11-0.4-16,2.6
					c-2.4,1.5-4.1,3.5-4.6,5.9c0.1-0.6,0.2-1.2,0.4-1.9c-0.1-0.7-0.4-1.1-1.1-1.1c-0.7,0-1.2,0.4-1.5,1c-0.2,0.5-0.3,1-0.1,1.4
					c0.3,1,0.2,2,0,3c0.2,0.6,0.3,1.3,0.2,2c0.6,1.1,0.7,2.5,0.4,3.7c0.2,0.2,0.3,0.5,0.4,0.8c0.6,0.3,1.1,0.8,1.5,1.4
					c3.5,5.3,9.6,7.2,15.7,6.8l7.8-1.6c0.4-1.5,1.5-2.7,3.4-2.8c0.2-0.9,0.7-1.8,1.5-2.4c0-0.3,0-0.6,0.1-0.9c0-0.7,0.2-1.3,0.4-1.8
					c-0.4-2.8-0.7-5.6-0.8-8.4c-0.1-4.1,4.8-5,7-2.8c1.3,0.6,2.2,1.7,2.3,3.5c0.1,3.2,3,6.9,5.5,9.3c2.1,0,3.7,0.8,4.8,2.1
					c1.7,0.2,2.9,0.9,3.9,1.9c2.5-1,5.2-1.6,7.9-1.6c1.7,0,3.3,0.2,4.8,0.6c0.3-0.3,0.6-0.6,1-0.8c0.4-1.1,1.2-2.1,2.4-2.9
					c0.3-0.9,0.7-1.7,1.3-2.4c0.2-0.3,0.3-0.5,0.5-0.7c0-1,0-2.1-0.1-3.1c-0.2-0.6-0.2-1.3-0.1-1.9c-0.1-1.9-0.1-3.7-0.2-5.6
					c0-0.1,0-0.3,0-0.4c-1.6-2.1-0.9-5.8,2.1-6.5c0.5-0.8,1.3-1.3,2.3-1.5c0.7-0.7,1.6-1.2,2.5-1.3c0.4-0.3,0.8-0.5,1.3-0.6
					c0.2-0.1,0.3-0.2,0.5-0.3c1.1-0.7,2.3-1.4,3.5-2.1c0.4-0.2,0.7-0.3,1.1-0.4c0.5-0.5,1.1-0.8,1.6-1.1c0.2-1,0.8-1.8,1.6-2.4
					c0.4-1.5,1.6-2.7,3.6-2.8c1-0.9,2-1.8,3.2-2.3c0.2-0.1,0.4-0.2,0.5-0.2C729.5,164.2,729.5,163.7,729.7,163.1z M662.2,202.4
					c0,0.9-0.7,1.4-1.2,1.9c-3.2,2.8-6.9,4.1-11.1,3.7c-5.4-0.5-11.8-4-13.3-10.9c-0.2-1.1-0.3-2.1-0.4-3.2c0.1,1,0.3,2,0.7,3
					c0.3,0.7,0.5,1.4,0.8,2c1.7,4.7,5.4,7,9.9,8.3c0.4,0,0.7,0.1,1.1,0.2c0.3,0.1,0.6,0.1,0.9,0.1c0.4,0,0.9,0,1.2-0.4
					c0-0.1,0-0.3-0.1-0.4c-0.4-0.2-0.9-0.2-1.3-0.4c-0.1,0-0.3-0.1-0.4-0.1c-0.1,0-0.3-0.1-0.4-0.1c-1.4-0.1-2.6-0.5-3.6-1.2
					c-2.1-0.5-3.5-2-4.2-3.8c-0.3-0.4-0.6-0.9-0.8-1.3c-0.3-0.5-0.6-1.1-0.7-1.7c-2-2.8-1.7-7.1,0.8-9.5c0.8-1.1,1.9-1.9,3.4-2.3
					c0.6-0.4,1.2-0.7,1.9-0.9c0.7-0.4,1.5-0.6,2.4-0.7c0.7-0.2,1.5-0.4,2.3-0.4c0.2,0,0.3,0,0.5,0c0.2,0,0.4,0,0.6,0
					c0.2,0,0.4,0,0.5,0c0.2,0,0.4,0,0.7,0c0.1,0,0.3,0,0.4,0c0.2,0,0.4,0,0.6,0c0,0,0,0,0,0c0,0,0,0,0,0c1.1,0,2.1,0.2,2.9,0.6
					c0.4,0,0.7,0.1,1,0.2c2.6,0.5,4.2,2.2,4.9,4.3c0.3,0.4,0.5,0.9,0.7,1.4c0.7,2.4,0.7,5,0.7,7.5c0,1.3-1.1,2.1-1.5,3.3
					C662.1,201.8,662.2,202.1,662.2,202.4z M703.4,193.5c0,0.9-0.2,1.8-0.6,2.6c-0.6,1.6-1.7,3.1-3.4,3.8c-0.9,0.7-2.1,1.1-3.6,1.2
					c-1,0.3-2.2,0.4-3.4,0.4c-0.1,0-0.2,0-0.2,0c-5.6-0.2-11.9-3.9-14.4-8.1c-0.6-1-0.9-2.1-0.9-3.2c-0.6-3.4,1.1-7.4,5.1-8.1
					c0.7-0.5,1.4-0.8,2.2-1.1c0.9-0.4,1.9-0.7,3.1-0.7c0.1,0,0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0.9-0.4,1.9-0.6,3-0.6
					c0.5,0,1,0.1,1.4,0.1c0.5-0.1,1-0.1,1.5-0.1c0.9,0,1.7,0.1,2.4,0.4c0.8,0.1,1.4,0.3,2.1,0.6c2.8,0.7,4.4,3.1,4.7,5.6
					c0.3,0.9,0.4,1.9,0.4,2.9c0.1,0.3,0.1,0.7,0.2,1C703.8,191.2,703.7,192.4,703.4,193.5z"/>
                                        <path class="st87" d="M642.1,183.2C642.1,183.2,642.1,183.2,642.1,183.2c-2.2,0.8-4.6,0.3-7.1-0.2c-0.4,0.1-0.9,0.1-1.4,0.1
					c-0.7,0-1.3-0.1-1.9-0.2c-0.7,0.7-1.6,1.1-2.9,1.1c-0.3,0-0.6,0-0.9-0.1c-0.3,0.5-0.8,1-1.3,1.3c0.1,0.6,0,1.1-0.1,1.7
					c0.2,0.6,0.3,1.3,0.3,1.9c0.7,0.4,1.2,0.9,1.8,1.5c0.6,0,1,0.2,1.5,0.4c1,0.1,1.8,0.5,2.4,1.1c0-0.1-0.1-0.2-0.1-0.2
					c1.7,0.2,1.8,0.2,1.8,1.6v1.1c0.1,0.3,0.2,0.7,0.2,1.1c0.2-1.3,0.6-2.5,0.1-3.9c-0.1-0.4-0.1-1,0-1.4c0.2-0.7,0.8-0.8,1.3-0.9
					c0.6-0.1,0.6,0.5,0.7,0.9c0.3,0,0.5-0.1,0.6-0.3c1.3-2.2,2.9-4,5.3-5.1c0.2-0.1,0.3-0.3,0.3-0.5
					C642.6,183.7,642.3,183.5,642.1,183.2z"/>
                                        <path class="st124" d="M661.4,202.8c-3.2,3.6-7.3,4.7-11.9,4.4c-0.3,0-0.5-0.1-0.8-0.1c-0.3-0.2-0.6,0-0.9-0.2
					c-2.4-0.6-4.6-1.6-6.6-3.2c-0.6-0.5-1.1-1-1.5-1.6c-1.3-2.1-2.3-4.3-2.9-6.6c-0.8-3.3,0.2-6,2.8-8.1c0.6-0.5,1.2-0.9,1.9-1.3
					c3.6-2,7.5-2.9,11.6-2.8c2.7,0.1,5.2,0.7,7.5,2c0.4,0.2,0.8,0.4,1.2,0.6c0.8,0.4,0.8-0.1,0.8-0.7c-0.2-0.5-0.7-0.7-1.2-0.7
					c-0.4,0.3-0.8-0.1-1-0.3c-1.9-1-3.9-1.6-6.1-1.6c-1.8,0-3.6,0-5.4,0c-0.6,0.2-1.1,0-1.7,0c-1.8,0-3.5,0.3-4.8,1.6
					c-2.4,1-4.1,2.6-5.4,4.8c-0.2,0.4-0.5,0.7-0.7,1.1c-0.2,1-0.6,1.8-0.7,2.8c-0.1,3.2,0.6,6.2,2.3,8.9c2.3,3.6,5.9,5.4,9.9,6.3
					c5.4,1.2,10-0.4,14.1-4.1c0.6-0.5,0.6-1.1,0.5-1.7C661.9,201.8,661.7,202.5,661.4,202.8z"/>
                                        <path class="st136" d="M705.3,177.5c0.7-0.2,1.3-0.4,2-0.7c0.3-0.2,0.6-0.2,0.6,0.3c-1.6,0.9-3.2,1.6-4.9,2.3
					c-0.8,0.3-1.6,0.5-2.4,0.1c-3.9-1.7-7.9-1.8-12-1.2c-3.1,0.5-6.1,1.5-8.9,3c-1.5,0.8-2.9,1.8-3.7,3.4c-0.1,0.3-0.3,0.5-0.5,0.7
					c-0.3,0.4-0.7,0.2-1,0c-0.3-0.2-0.1-0.5,0.1-0.8c0.8-1.3,1.8-2.5,3.2-3.3c5.1-3,10.6-4.2,16.4-4.2
					C697.8,177.6,701.5,177.4,705.3,177.5z"/>
                                        <path class="st140" d="M678.4,197.7c4.1,3.8,8.9,6.1,14.5,6.2c1-0.2,2.1-0.2,3.1-0.2c0,0,0,0,0.1,0c2.2-0.4,4.2-1.5,5.9-3.1
					c0.1-0.3-0.1-0.4-0.4-0.5c-0.5,0-0.8,0.2-1.2,0.4c-3.3,2.3-7,2.3-10.8,1.7c-4.5-0.7-8.1-3-11.4-6c-1.8-2.5-2.9-5.3-3-8.7
					c-0.9,0.9-0.8,1.7-0.6,2.4C675.2,192.8,676.2,195.6,678.4,197.7z"/>
                                        <path class="st151" d="M701.6,200.1c-4.6,3.6-9.7,3.4-14.9,1.7c-3-1-5.8-2.5-7.9-5c-0.2-0.2-0.3-0.5-0.5-0.7
					c0.3,0,0.6,0.4,0.9,0c1.9,2.3,4.5,3.8,7.3,4.8c0.3,0.1,0.6,0.1,0.8,0.1c4.9,1.5,9.7,1.3,14-1.8c1.6-1.1,2.8-2.6,3.5-4.3
					c0.3,0.8,0.4,1.6-0.3,2.4c-0.8,0.4-1,1.4-1.7,1.9C702.6,199.5,702.3,200.1,701.6,200.1z"/>
                                        <path class="st162" d="M707.8,177.2c-0.1-0.4-0.4-0.3-0.6-0.3c3.9-2.2,7.6-4.7,11.4-7c0.5-0.2,0.8-0.5,1.2-0.8
					c0.3-0.2,0.7-0.5,0.8,0.2c-1.7,1.8-3.6,3.2-5.7,4.3C712.6,174.8,710.2,176,707.8,177.2z"/>
                                        <path class="st163" d="M727.7,162.7c-0.3,0-0.5,0.1-0.8,0.1c-0.1,0-0.1,0.1-0.2,0.1c-2.9,2.1-5.6,4.4-8.2,6.9
					c0.5,0.1,0.9-0.1,1.2-0.4c0.2-0.2,0.4-0.6,0.8-0.1c0.6-0.2,0.9-0.7,1.4-1c1.8-1.4,3.7-2.7,5.7-4c0.4-0.3,0.7-0.4,0.4-1
					C728,163,727.9,162.8,727.7,162.7z"/>
                                        <path class="st173" d="M672.4,185.5c-0.7,0.5-1.2,0.3-1.8,0.2c-2-0.3-4.1-0.3-6,0.6c-0.3,0.1-0.7,0.5-1,0
					c-0.2-0.3,0.2-1.4,0.6-1.5c0.6-0.2,1.1-0.3,1.7-0.4C668.1,184.2,670.2,184.7,672.4,185.5z"/>
                                        <path class="st177" d="M662.6,202.3c-0.6-0.1-0.8,0.5-1.1,0.8c-2.2,2.3-4.7,3.8-7.9,4.3c-1.4,0.2-2.8,0.3-4.2-0.1
					c0.4-0.2,0.9,0.1,1.3-0.4c0.9,0,1.8,0,2.8-0.1c2.8-0.3,5-1.6,7.1-3.4c0.6-0.5,1.1-1.2,1.8-1.7
					C662.4,201.9,662.7,202,662.6,202.3z"/>
                                        <path class="st188" d="M705.3,177.5c-0.1,0.1-0.2,0.2-0.4,0.2c-3.5,0.1-6.9,0.2-10.4-0.3c-0.1,0-0.3-0.1-0.4-0.2
					c0.3-0.2,0.7,0,0.9-0.3c3,0.5,6,0.2,9.1,0.3C704.4,177.6,704.9,177.3,705.3,177.5z"/>
                                        <path class="st206" d="M701.6,200.1c0.9-1,1.9-1.8,2.6-2.9c0.1-0.2,0.3-0.2,0.4,0.1c-0.7,1.2-1.4,2.4-2.6,3.2
					C701.9,200.3,701.8,200.2,701.6,200.1z"/>
                                        <path class="st177"
                                              d="M649.3,206.6c0.5,0,1,0,1.5,0.2C650.2,207,649.7,207.1,649.3,206.6z"/>
                                        <path class="st188"
                                              d="M704.6,177.2c0.3-0.2,0.6-0.3,0.9-0.3C705.3,177.3,705,177.3,704.6,177.2z"/>
                                        <path class="st177"
                                              d="M648.1,206.3c0.3,0,0.7,0,0.9,0.3C648.6,206.7,648.3,206.7,648.1,206.3z"/>
                                        <path class="st177"
                                              d="M648.7,207.1c-0.3,0.1-0.6,0-0.9-0.2C648.1,206.8,648.4,206.8,648.7,207.1z"/>
                                        <path class="st219" d="M627.6,184.4c0,0-0.1,0.1-0.1,0.1c0.2,0.3,0.5,0.4,0.7,0.4c3.5,0.4,6.9,0.5,10.4,0.2c0.5,0,1-0.1,1.3-0.9
					C635.7,184.1,631.7,183.9,627.6,184.4z"/>
                                        <path class="st371" d="M627.4,187.3c-0.3-0.3-0.7-0.5-0.8-1c0.7,0.1,1.3,0.6,2,0.5c0.1-0.1,0.2-0.1,0.2,0
					c1.2,0.4,2.4,0.4,3.7,0.5c0.9,0,1.8,0.1,2.7,0.1c0.3,0,0.6-0.1,0.7,0.3c0,0.3-0.3,0.4-0.6,0.5c-0.4,0.2-0.8,0.2-1.2,0
					c-0.5,0-0.9-0.1-1.4-0.1c-0.9-0.3-1.8,0-2.7-0.1c-0.5,0-1.1-0.1-1.5-0.4l-0.1-0.1l-0.1,0C628.1,187.4,627.7,187.6,627.4,187.3z"
                                        />
                                        <path class="st0" d="M636.3,183.7c0.5,0.3,1,0.2,1.4,0.2c0.4,0,0.6,0,0.8,0c0.3,0,0.5-0.1,0.6-0.2c-1.1,0-2.3-0.2-3.5-0.4
					C635.8,183.4,636.1,183.5,636.3,183.7z"/>
                                        <path class="st372" d="M632.9,189.1c0.1,0.1,0.1,0.1,0.2,0c0.3,0.2,0.7,0,1,0.2c0.1,0.6,0,1-0.7,0.9c-1.9-0.2-3.7-0.8-5.2-1.9
					c-0.4-0.3,0.1-0.4,0.4-0.4c0.8-0.1,1.4,0,2,0.5l0,0c0.3,0.3,0.8,0,1.2,0.3c0.1,0.1,0.1,0.1,0.2,0
					C632.3,189.1,632.7,188.9,632.9,189.1z"/>
                                        <path class="st225" d="M648.1,182.4c-0.3,0-0.5-0.2-0.6-0.5c-0.3,0-0.5,0.4-0.9,0.3c-0.4,0.3-0.8,0-1.2,0.3
					c-1,0.4-2.2,0.2-3,1.1c-0.1,0.1-0.4,0.1-0.5,0.1c0.2,0.2,0.4,0.3,0.6,0.5c1.1-0.4,2.2-0.8,3.4-1.2c1-0.3,2.1-0.2,3.1-0.5
					C648.7,182.4,648.4,182.4,648.1,182.4z"/>
                                        <path class="st0" d="M628.8,186.8l-0.1,0l-0.1-0.1c-0.5-0.7-0.5-1,0.1-1.3c0,0,0.1-0.1,0.1-0.1c0.6-0.1,1.3-0.2,1.8,0.3
					c0.1,0.2,0.2,0.3,0.1,0.5c-0.3,0.5-0.9,0.6-1.4,0.5C629.1,186.8,629,186.8,628.8,186.8z"/>
                                        <path class="st373" d="M630.6,188.6c-0.7,0-1.4-0.1-2-0.5c0-0.1,0-0.3,0-0.4c1.4,0.1,2.8,0.2,4.2,0.5
					C632,188.5,631.2,187.9,630.6,188.6z"/>
                                        <path class="st0" d="M637.7,186.9c0,0.2-0.1,0.4-0.3,0.4c-0.3,0.1-0.5-0.1-0.5-0.4c0-0.2,0.2-0.3,0.4-0.3
					C637.5,186.6,637.6,186.7,637.7,186.9z"/>
                                        <path class="st373"
                                              d="M634.1,188.3c0.4,0,0.8,0,1.2,0C634.9,188.6,634.5,188.6,634.1,188.3z"/>
                                        <path class="st373"
                                              d="M631.8,188.8c-0.4,0-0.8,0-1.2-0.3C631,188.5,631.5,188.4,631.8,188.8z"/>
                                        <path class="st373"
                                              d="M627.4,187.3c0.3,0.1,0.7,0,0.9,0.3C628,187.7,627.6,187.7,627.4,187.3z"/>
                                        <path class="st373"
                                              d="M632.9,189.1c-0.3,0-0.7,0-0.9-0.3C632.4,188.8,632.7,188.8,632.9,189.1z"/>
                                        <path class="st373"
                                              d="M634.1,189.4c-0.3,0-0.7,0.1-1-0.2C633.5,189.1,633.9,189,634.1,189.4z"/>
                                        <path class="st124"
                                              d="M646.7,182.1c-0.4,0.3-0.8,0.3-1.2,0.3C645.8,182,646.2,182.1,646.7,182.1z"/>
                                    </g>
                                    <path class="st0" d="M728.9,162.3c-0.7-0.5-1.6-0.2-2.4,0.1c-0.8,0.3-1.6,0.7-2.4,1.2c-0.9,0.6-1.8,1.2-2.7,1.9
				c-0.8,0.6-1.6,1.5-2.6,2c-0.6,0.3-0.1,1.1,0.5,0.9c0.7-0.3,1.3-0.9,1.9-1.4c0.7-0.6,1.3-1.1,2-1.6c1.3-0.9,2.8-2,4.4-2.2
				c0.5-0.1,0.7,0.1,1.1,0.5c0.1,0.1,0.3,0.3,0.3,0.4c0,0.2-0.4,0.3-0.5,0.4c-0.7,0.5-1.4,1-2.1,1.4c-0.7,0.4-1.4,0.8-2.1,1.2
				c-0.7,0.4-1.3,0.9-2,1.4c-1.3,1-2.6,2.1-3.4,3.6c-0.1,0.3,0,0.5,0.2,0.6c-0.7,0.3-1.4,0.6-2.1,1c-1.7,0.8-3.3,1.6-4.9,2.4
				c-1.5,0.8-3.1,1.7-4.6,2.6c-1.3,0.8-2.5,1.7-3.3,3c-0.4,0.5,0.5,1,0.9,0.5c1-1.5,2.5-2.4,3.9-3.2c1.7-1,3.3-1.9,5.1-2.7
				c1.7-0.9,3.4-1.7,5.2-2.5c0.9-0.4,1.9-1,2.3-1.9c0.3-0.3,0.5-0.7,0.7-1c0.7-0.6,1.4-1.1,2.1-1.7c1.8-0.9,3.5-2.2,4.8-3.7
				c0.1-0.1,0.1-0.2,0.1-0.4c0,0,0,0,0,0c0.3-0.2,0.6-0.5,0.7-0.9C730.2,163.4,729.4,162.7,728.9,162.3z"/>
                                    <path class="st0" d="M716.7,169.2c-1.2,0.8-2.4,1.6-3.7,2.3c-0.5,0.3-0.9,0.6-1.4,0.9c-0.3,0.2-0.6,0.3-0.9,0.5
				c-0.3,0.2-0.7,0.4-1.1,0.4c-0.2,0-0.4,0.2-0.5,0.4c-0.3,0.1-0.7,0.3-1,0.5c-1.1,0.6-2,1.1-3.3,1.3c-2.5,0.4-5.2,0.4-7.7,0.2
				c-0.1,0-0.2,0-0.2,0.1c-2.8,0.1-5.7,0.2-8.5,0.5c-1.3,0.1-2.5,0.2-3.8,0.6c-1.3,0.4-2.6,1.1-4,0.8c-0.4-0.1-0.7,0.3-0.6,0.6
				c-2.7,1.1-5.1,3-7.2,5c-0.1,0.1-0.2,0.3-0.1,0.5c-2.9-1-6.2-0.2-9.3,0.1c-0.1,0-0.1,0-0.1,0c-0.3-0.2-0.6-0.4-0.8-0.6
				c0-0.1-0.1-0.2-0.3-0.3c-3.9-1.8-8.3-2.6-12.6-2.2c-2.1,0.2-4.2,0.6-6.2,1.3c-0.5,0.2-1,0.4-1.5,0.6c-1.3-0.3-2.7-0.2-4-0.2
				c-1,0-1.9,0-2.9,0c-0.8,0-1.6,0-2.4,0.1c-1,0-2,0.1-2.9,0.3c-0.7,0-1.5,0.1-2.1,0.5c-1.3,0.8-1.4,2.3-1.2,3.7
				c0.2,1.7,1.2,2.7,2.6,3.5c1.5,0.9,3.1,1.6,4.7,2.2c0.1,1.8,0.7,3.7,1.2,5.4c0.3,1.1,0.7,2.2,1.3,3.2c0.2,0.8,0.6,1.5,1.2,2.1
				c0.9,0.9,1.8,1.8,2.8,2.5c1.9,1.5,4,2.5,6.4,3.1c2.4,0.5,4.9,0.6,7.3,0.5c2.6-0.2,4.9-1,7-2.4c1.1-0.7,2.1-1.4,2.9-2.5
				c0.6-0.8,1-1.7,1.4-2.7c0.2-0.3,0.4-0.6,0.6-1c0.5-1.1,0.5-2.5,0.6-3.7c0.1-2.6-0.1-5.2-0.4-7.8c0.3-0.7,0.8-1.4,1.4-1.6
				c1.1-0.3,2.5-0.4,3.7,0c1,0.3,1.8,1,2.3,1.9c0.5,1,0.5,2.1,0.8,3.2c0.9,3.1,2.8,5.8,5.2,7.8c-0.1,0.2-0.1,0.5,0.2,0.6
				c0.4,0.2,0.9,0.4,1.3,0.6c0.1,0.1,0.3,0.2,0.4,0.3c0,0,0,0,0.1,0c1.9,1.3,4.1,2.1,6.4,2.6c0.1,0,0.1,0.1,0.2,0.1
				c3.9,0.4,7.8,0.7,11.6,0c0.9-0.2,1.8-0.4,2.6-0.7c0.7-0.3,1.3-0.9,1.7-1.6c1-1.4,2-3,2.4-4.7c0.3-1.1,0.3-2.2,0.3-3.2
				c0-0.8,0-1.6-0.1-2.4c0-3.3-0.4-6.6-1.1-9.8c-0.1-0.4-0.6-0.4-0.8-0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.3,1.4,0.3,2.5,0.7,3.7
				c0.1,0.8,0.2,1.7,0.3,2.5c-0.1,1.4-0.4,2.8-0.3,4.2c0.1,1.6,0.2,3.2-0.2,4.7c-0.2,0.4-0.3,0.8-0.5,1.2c-0.6,1.2-1.5,2.2-2.5,3
				c-0.1,0.1-0.1,0.2-0.2,0.3c-1.2,0.7-2.5,0.9-3.8,1c-1.4,0.1-2.9,0.2-4.3,0.3c-1.4,0.1-2.8,0.3-4.2,0.2c-1.6-0.1-3.1-0.8-4.6-1.4
				c-1.1-0.4-2.2-0.9-3.3-1.4c0,0-0.1,0-0.1-0.1c-0.1-0.1-0.2-0.2-0.3-0.2c-1.2-0.9-2.4-2-3.3-3.3c-0.1-0.1-0.2-0.1-0.3-0.2
				c-1-1.3-1.7-2.7-2.2-4.2c-0.6-1.7-0.5-3.6-1.8-4.9c-1.3-1.3-3.1-1.8-4.9-1.6c-0.9,0.1-1.9,0.2-2.5,0.9c-0.1,0.1-0.2,0.3-0.3,0.4
				c-0.1-0.1-0.3-0.1-0.5,0c-0.7,0.4-0.8,1.1-0.8,1.8c0,0.1,0,0.1,0,0.2c-0.1,0.2-0.2,0.5-0.2,0.7c-0.1,0.6,0,1.1,0.1,1.7
				c0,1.5,0,2.9,0.2,4.4c0,0.2,0.2,0.3,0.4,0.3c0,1.1-0.1,2.1-0.3,3.2c0,0.1,0,0.2,0,0.3c-0.1,0.3-0.2,0.6-0.3,0.9
				c-0.1,0.1-0.2,0.3-0.3,0.4c-0.4,0.5-0.6,1.1-0.9,1.7c-0.1,0.1,0,0.3,0,0.4c-0.1,0.2-0.2,0.3-0.3,0.5c0,0-0.1,0-0.1,0
				c-0.1,0-0.2,0.1-0.4,0.1c-0.5,0.4-0.9,0.8-1.4,1.1c-0.1,0.1-0.1,0.2-0.1,0.4c0,0,0,0,0,0.1c-1.8,1.2-3.8,2.1-6.1,2.4
				c-4.3,0.5-9,0-12.7-2.4c-1-0.7-2-1.5-2.9-2.4c-0.2-0.2-0.4-0.4-0.7-0.6c0-0.1-0.1-0.1-0.1-0.2c-0.4-0.5-0.8-1.1-1.1-1.7
				c0-0.2-0.1-0.4,0-0.6c0-0.3-0.2-0.5-0.5-0.5c-0.3-0.8-0.6-1.6-0.8-2.4c-0.5-1.9-1.2-3.8-1.1-5.8c0-0.6-0.7-0.6-0.9-0.2
				c-1.2-0.4-2.4-0.9-3.5-1.5c-1.2-0.7-2.4-1.4-2.8-2.8c-0.3-1.2-0.4-2.8,0.9-3.3c0.1,0,0.2-0.1,0.3-0.1c0,0,0,0,0,0
				c1.2,0,2.4-0.1,3.6-0.1c0.2,0,0.3-0.1,0.4-0.3c0.5,0,0.9,0,1.4,0c0.1,0,0.3-0.1,0.3-0.1c0.5,0,1,0,1.4,0c1.2,0.1,2.3,0.3,3.5,0.4
				c1,0.1,1.8,0,2.7-0.3c0,0,0.1,0,0.1,0.1c0.1,0.1,0.3,0.2,0.4,0.2c0.3,0.2,0.6,0,0.7-0.3c3-1.3,6.3-1.3,9.6-1.3
				c1.2,0,2.4,0,3.7,0.1c0.5,0.1,0.9,0.3,1.3,0.5c0.5,0.2,1,0.4,1.5,0.6c1.1,0.3,2.2,0.8,3.2,1.3c0.2,0.1,0.3,0.1,0.5,0
				c0.2,0.1,0.4,0.1,0.5,0c3.4-0.3,7.2-1.5,10.3,0.5c0.5,0.3,1-0.5,0.5-0.9c-0.3-0.2-0.6-0.3-0.8-0.4c0,0,0.1,0,0.1-0.1
				c2.9-2.9,6.6-5.6,10.9-5.7c0.3,0,0.5-0.3,0.5-0.5c1.1-0.3,2.1-0.4,3.2-0.5c2.9-0.3,5.9-0.4,8.8-0.5c0.1,0,0.1,0,0.2,0
				c2.6,0.2,5.2,0.1,7.7-0.2c1.2-0.2,2.2-0.5,3.2-1.1c0.4-0.3,0.9-0.5,1.4-0.7c0.1,0,0.1,0,0.2,0c0.2-0.1,0.4-0.2,0.6-0.3
				c0.5-0.1,0.9-0.3,1.4-0.4c0.3-0.1,0.4-0.3,0.3-0.6c0,0,0.1,0,0.1-0.1c0.8-0.4,1.5-0.9,2.4-1.2c0.2-0.1,0.4-0.3,0.4-0.5
				c0.8-0.5,1.6-1,2.4-1.6C717.7,169.8,717.2,168.9,716.7,169.2z"/>
                                </g>
                            </g>
                            <g id="chefArmPaper">
                                <g id="ChefRightArm">
                                    <polygon class="st0" points="829,331.6 829,331.6 829,331.6 			"/>
                                    <path class="st0"
                                          d="M826.4,321.4C826.4,321.4,826.4,321.4,826.4,321.4C826.4,321.4,826.4,321.4,826.4,321.4L826.4,321.4z"/>
                                    <path class="st0" d="M838.6,365.5c-2.4-10.1-5.6-20-8.1-30c-0.2-0.6-0.2-1.3-0.8-1.7c-0.1-0.1-0.1-0.1,0-0.2
				c-0.2-0.3,0-0.6-0.2-0.9c-0.1-0.1-0.1-0.1-0.1-0.2c-0.2-0.3,0-0.7-0.3-0.9c-0.3-0.3,0-0.8-0.3-1.2l0,0c-0.3-0.3,0-0.8-0.3-1.2
				c-0.6-1.5-0.9-3-1.2-4.6c-0.2-0.3,0-0.6-0.3-0.9c-0.1-0.1-0.1-0.2,0-0.2c-0.2-0.3,0-0.7-0.3-0.9c-0.1-0.1-0.1-0.1,0-0.2
				c-0.2-0.3,0-0.7-0.3-0.9c0,0,0,0,0,0l0,0c0,0,0,0,0,0c-0.2-0.3,0-0.7-0.3-0.9c-0.8-1.9-1.1-4-1.7-6c-1-3.6-1.9-7.3-3.1-10.9
				c-1.5-4.4-3.2-8.8-5.1-13.2c-2.1-4.8-4.1-9.8-6.6-14.4c-1.3-2.4-2.5-5.6-4.4-7.6c-4.7,0.1-9.3,2-12.6,4.7c-19,15-38,42-28,67
				c-9.3-2.8-18.6-0.4-27.9-3.3c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.2,0.4-0.1,0.8-0.4,1c-0.3,0.2-0.9,0.2-1.1-0.1
				c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.4-0.3c-0.2-0.2-0.4-0.4-0.6-0.7c-0.4-0.5-0.8-0.8-1.3-1.2
				c-0.5-0.4-0.9-0.8-1.3-1.3c-0.2-0.3-0.4-0.6-0.5-0.9c0,0,0,0,0,0c-1.2-1-2.3-2.1-3.2-3.4c0,0,0,0,0-0.1c-0.2-0.1-0.4-0.3-0.6-0.6
				c-0.2-0.4-0.4-0.8-0.7-1.2c-0.1-0.2-0.2-0.4-0.4-0.6c-0.1-0.1-0.1-0.2-0.2-0.3c0,0,0,0,0,0c0,0,0,0,0,0c-0.6-0.7-1.3-1.4-1.9-2.1
				c-0.6-0.6-1.2-1.3-1.8-1.9c-0.4-0.5-0.7-0.9-1-1.5c-0.3-0.2-0.6-0.4-0.7-0.5c-0.5-0.3-1-0.9-1.5-1.3c-0.1,0-0.3-0.1-0.4-0.2
				c-0.2-0.1-0.4-0.2-0.6-0.3c0,0-0.1,0-0.1,0c-0.5-0.2-0.9-0.4-1.4-0.6l-1.7-0.1c-5.3,0.7-11.3,0.7-16.5,1.4
				c-0.8,0.1-1.6,0.2-2.4,0.3c-1.3,0.2-2.5,0.3-3.8,0.3c-0.1,0-0.1,0-0.2,0c-4.4,0.3-8.8,0.4-13.1,0.4c-0.6,0-0.8,0.2-1.6,0.3
				c-0.6,0.1-0.8,0.4-1.7,0.7c-1.7,0.6-2.5,1.1-3.7,2c-0.1,0.2-0.2,0.4-0.3,0.5c-0.1,0.3-0.1,0.5-0.2,0.8c0.1,0.5,0.1,1,0.1,1.5
				c0,0.3,0,0.6,0,0.9c0.1,0.7,0.3,1.4,0.4,2.1c5.4,1.3,10.8,2.5,16.2,3.6c-0.5,0-1,0-1.5,0c-3.9,0-7.8,0.4-11.7,1.1
				c-0.2,1.3-1.4,2.6-2.3,4c0.2,0,0.5-0.1,0.7-0.1c-1.3,1.8-1.5,2.4-0.8,4.4c0.8,2.4,2,4.5,4.6,5.4c0.8,0.2,1.3,0.7,1.1,1.6
				c-0.2,1.1,0.5,1.8,1.3,2.4c0.5,0.4,1.2,0.7,1.8,1c0.6,0.3,1,0.7,0.7,1.4c-0.1,0.4-0.1,0.7-0.2,1.1c0,0.1-0.1,0.3-0.1,0.4
				c0.2,3.6,2.5,5.7,5.4,7.5c1.9,1.2,4.1,1.8,6.3,2.2c2.5,0.4,4.9,1.3,7.4,1.3c0.6-0.2,1-0.5,0.9-1.2c-0.1-0.6-0.6-0.8-1.1-0.9
				c-0.6-0.1-1.2-0.3-1.7-0.6c-0.6-0.3-1.2-0.4-1.8-0.6c-2.7-0.8-5.6-1-8.2-2.2c-0.2-0.1-0.4-0.1-0.5-0.2c-2.2-1-3.7-2.6-3.8-5.2
				c0-1.5,0.4-1.8,1.7-1.2c2.2,1,4.4,1.8,6.8,2.1c2.7,0.4,5.4,1.2,7.9,2.3c1.3,0.4,2.5,1.4,4,0.9c0.4-0.3,0.9-0.5,1.4-0.8
				c0.9-1.1-0.3-1.1-0.7-1.2c-1.6-0.3-3.1-0.8-4.6-1.4c-3-1.2-5.8-2.8-9.2-2.6c-0.5,0-0.9-0.2-1.4-0.4c-1.2-0.5-2.6-0.8-3.8-1.4
				c-0.4-0.2-1-0.3-1.2-0.8c-0.4-1-1-1.1-2-1c-1,0.1-2.2-0.8-2.1-1.6c0.1-1.2,1.2-0.9,1.9-1c0.7-0.1,1.3,0,2,0
				c1.3,0,2.6,0.1,3.9-0.3c0.1,0,0.3-0.1,0.4-0.1c0.6-0.2,1.2-0.1,1.8-0.2c0.1,0,0.3-0.1,0.4-0.1c0.7-0.1,1.5-0.1,2.2,0
				c2.3-0.3,4.5-0.2,6.8,0c2.3,0.2,4.5,0.1,6.8,0c0.5,0,1.2-0.1,1.3-0.7c0.1-0.6-0.5-0.8-0.9-1c-1-0.6-1.7-1.5-2.2-2.6
				c-0.2-0.5-0.3-1-0.9-1.3c-0.9,0.8,0,1.8-0.3,2.7c-0.4,0-0.4-0.3-0.5-0.5c-0.1-0.1-0.2-0.2-0.3-0.2c-0.4,0.1-0.5,0.4-0.7,0.6
				c-1.1,0.4-2.2,0.2-3.3,0.1c-0.3-0.1-0.6-0.1-0.9-0.2c-0.2-0.1-0.3-0.2-0.5-0.2c-0.4,0-0.6,0.3-1,0.2c-0.1,0-0.2,0-0.4,0
				c-0.3,0-0.6,0-0.9,0c-0.5,0.1-1,0.1-1.5,0.2c-2.2,0.1-4.3,0.3-6.5,0.5c-0.7,0.2-1.4,0.2-2.2,0.3c-0.7,0-1.3,0-1.7-0.6
				c-1.1-1.7-1.2-3.4-0.5-5.3c0.6-1.8,1.7-2.8,3.6-2.7c0.8-0.1,1.6-0.2,2.4-0.3c3.9-0.4,7.9-0.4,11.8-1.2c1.5-0.3,3-0.8,4.6-0.9
				c1.7,0.2,3.3-0.3,4.9-0.6c0.3-0.1,0.7-0.1,0.7-0.6c0-0.4-0.5-0.4-0.8-0.5c-0.4-0.1-0.9,0-1.3,0c-0.7,0-0.9-0.3-0.7-1
				c0.4-1,1.2-1.7,1.5-2.8c0-0.4-0.1-0.6-0.5-0.6c-0.9,0.1-1.4,0.9-1.9,1.5c-0.9,0.9-1.9,1.6-3.3,2c1.1-1.7,2.2-3.3,2.8-5.1
				c0.1-0.4,0.3-0.9-0.1-1.1c-0.5-0.3-0.7,0.3-0.9,0.5c-0.9,1.2-1.7,2.5-2.6,3.7c-0.8,1.1-1.7,2.3-3.2,2.6c-1.7,0.3-3.4,0.5-5.1,0.6
				c-0.6,0-1.3,0.1-1.6-0.4c-1.3-1.6-3.2-1.8-4.9-2.3c-1.1-0.3-2-0.6-2.4-1.8c-0.1-0.3-0.4-0.6-0.7-0.6c-0.4,0.1-0.3,0.4-0.3,0.7
				c0.1,0.7-0.2,0.9-0.8,0.7c-3.2-0.8-6.4-1.6-9.6-2.3c-1-0.2-1.1-0.7-0.3-1.4c1-0.9,2.3-1.2,3.6-1.2c6.4,0.1,12.7-0.2,19-0.5
				c4.6-0.2,9.1-0.6,13.5-1.7c3.2-0.8,6-0.2,8.1,2.5c2.7,3.1,5.5,6.1,8.1,9.4c2.4,3,5.1,5.7,8.3,7.8c2.1,1.2,4.4,1.9,6.5,3.2
				c0.4,0.1,0.8,0.3,0.9,0.8c0.1,0.4,0.3,0.7,0.6,0.9c0.4,0.3,0.7,0.6,0.9,1.1c0.3,0.5,0.7,0.9,0.9,1.5c0.6,1,0.9,2.2,1.8,3.1
				c1.4,0.6,1.5,2,2,3.2c0.2,0.5,0.5,1.2,1.2,1.1c0.8-0.1,0.8-0.9,0.7-1.5c-1.2-2.4-2.4-4.9-4-7.1c-1.3-1.8-2.1-3.8-3.5-5.5
				c-0.4-0.4-0.2-0.9,0.4-0.9c2.1,0,4.4-0.6,6.3,0.3c5.1,2.3,10.4,3.9,15.1,7.5c5.4,4.1,10.5,8.4,14.9,13.6c1.3,1.6,2.5,3.2,3.9,4.7
				c0.6,0.6,1.3,1,2.2,1c2.2,0,4.4,0.1,6.5-0.1c0.4-0.1,0.7-0.3,0.7-0.8c-0.2-1.8-1.5-3.1-2.4-4.6c-3.5-5.5-7.9-10.3-12.8-14.6
				c-0.4-0.3-0.8-0.5-1.1-1c0.4-0.4,0.9-0.3,1.3-0.4c5.4-1.2,10.8-1.8,16.4-1.7c6,0.1,11.4,1.7,16,5.8c0.6,0.4,1.3,0.8,1.6,1.6
				c0.3,0.5,0.6,0.9,1.2,0.9c1.3-0.4,0.8-1.2,0.4-1.9c-1-1.8-2.5-3-3.9-4.3c-1.5-1.1-3.2-2-4.1-2.3c2,0.4,4.9,0.6,7.6,1.7
				c0.3,0.1,0.7,0.1,1,0.2c0.1,0,0.3,0.1,0.4,0.1c0.9,0.1,1.8,0.8,2.6-0.2c-0.1-0.3-0.4-0.5-0.6-0.6c-0.3-0.1-0.7-0.3-1-0.5
				c-3.3-1.6-6.8-2.2-10.4-2.3c-4.8-0.1-9.4-1.4-14.2-1.3c0.3-0.1,0.6-0.2,0.9-0.3c1-0.4,1.9-0.9,2.9-1.4c3.7-1.8,7.5-2.8,11.6-2.1
				c1.5,0.2,3,0.7,4.6,0.8c0.3,0,0.6-0.1,0.7-0.5c-0.1-0.5-0.6-0.7-1-1c-5.2-2.1-10.3-2.2-15.5,0.2c-3.3,1.5-6.6,3.1-10.1,3.9
				c-3.4,0.6-6.8,0.9-10.2,1.6c-2,0.5-3.5,0-5.4-0.7c-3-1.1-3.4-3.2-3.6-5.8c0-0.4,0-0.8-0.1-1.2c0-0.2,0-0.3-0.1-0.5
				c-0.2-0.7-0.2-1.4-0.1-2.1c-0.3-2.5-0.3-5-0.3-7.5c0-0.4,0-0.9-0.1-1.3c-0.3-3.5-0.2-7,1.2-10.4c1.8-4.5,4.1-8.8,6.5-13
				c2.6-4.2,5.4-8.3,8.5-12.2c4.6-5.8,9.6-11.1,15.3-15.7c1-0.8,2-1.6,3.1-2.1c0.8-0.4,1.5-0.3,2.1,0.4c0.7,0.8,1.4,1.6,1.9,2.5
				c2.9,4.9,5.3,10,7.4,15.3c0.9,2.2,1.7,4.4,2.6,6.6c0.3,0.4,0.5,1,0.7,1.4c4.7,11.7,7.5,23.9,10.7,36.1c1.2,4.9,2.2,9.8,3.7,14.7
				c0.1,0.3,0.3,0.7,0.4,1c0,0.1,0.1,0.3,0.1,0.4c0.1,0.3,0.1,0.7,0.2,1c0,0.1,0.1,0.3,0.1,0.4c1.5,5.4,3.3,10.8,4.7,16.3
				c0.1,0.4,0.2,0.7,0.6,1c1.7,1,2.9,0.7,3.6-0.9C839,366.9,838.8,366.2,838.6,365.5z"/>
                                    <path class="st65" d="M700.4,367.4c-1.6,2,1,2.3,0.4,2.2c3.6,0.8,7.5,1.2,9.8,3.2c27.4,0,54.8,0,82.2,0c0.5,0,1.1-0.1,1.6,0.1
				h44.9v-3.8c-0.5-0.4,0.3-1.2-0.6-1.5c0,0.3-0.2,0.5-0.4,0.7c-0.9,0.5-1.9,0.6-2.8,0c-0.9,0.5-1.9,0.4-2.8,0.4
				c-11.9,0-23.8,0-35.8,0c-1.4,0-2.7,0-3.9-0.8c0,0.4-0.2,0.6-0.6,0.7c-0.5,0.4-1.1,0.3-1.7,0.3c-4.7,0.1-9.4-0.2-14.1-0.2
				c-5.7,0.1-11.4,0-17,0c-1.5,0-2.2-0.4-2.9-1.8c-1.8-3.4-3.4-6.9-5.1-10.3c-0.2-0.5-0.3-1.2-1.1-1.2c0,0.2,0,0.4,0,0.6
				c0,0.3-0.1,0.6-0.4,0.7c-0.3,0-0.5-0.2-0.6-0.5c-0.2-0.6-0.5-1.3-0.7-1.9c-0.3-1-0.8-1.7-1.8-2c-0.4,1.1,0.6,1.8,0.7,2.8
				c0.5,1.5,1.1,3,1.6,4.5c1.1,2.8,1.6,5.7,1.6,8.8c-0.5,0.7-1.2,0.5-1.9,0.5c-9.7,0-19.4,0-29,0c-0.6,0-1.3,0.1-1.9-0.1
				c-0.3-0.1-0.5-0.1-0.8-0.1c-0.4,0-0.9,0-1.3,0c-1,0-1.9,0-2.9,0c-0.6,0.2-1.2,0.5-1.8,0.4c0.7-0.1,1.8,0.1,1.3-1.4
				c-0.7-0.5-1.5-0.6-2.3-0.8c-2.5-0.8-5.1-0.8-7.6-1.3c-0.6-0.1-1.1-0.2-1.7-0.3c-0.9-0.1-1.8-0.7-2.6,0c0.5,0.5,1.2,0.5,1.8,0.6
				c0.4,0.1,0.9,0.1,1,0.6c0.1,0.6-0.3,0.8-0.8,0.9C700.2,367.3,700.3,367.3,700.4,367.4C700.4,367.4,700.4,367.4,700.4,367.4"/>
                                    <path class="st374"
                                          d="M828.7,330.4c-0.3-0.3-0.3-0.8-0.3-1.2C828.9,329.5,828.7,330,828.7,330.4z"/>
                                    <path class="st374"
                                          d="M829,331.6c-0.3-0.3-0.3-0.8-0.3-1.2C829.2,330.7,829,331.2,829,331.6z"/>
                                    <path class="st374"
                                          d="M829.6,333.6c-0.2-0.3-0.3-0.6-0.2-0.9C829.7,333,829.6,333.3,829.6,333.6z"/>
                                    <path class="st374"
                                          d="M829.3,332.5c-0.3-0.3-0.3-0.6-0.3-0.9C829.4,331.8,829.3,332.1,829.3,332.5z"/>
                                    <path class="st374"
                                          d="M827.3,324.6c-0.2-0.3-0.3-0.6-0.3-0.9C827.3,323.9,827.3,324.3,827.3,324.6z"/>
                                    <path class="st374"
                                          d="M827,323.5c-0.2-0.3-0.3-0.6-0.3-0.9C827.1,322.8,827,323.1,827,323.5z"/>
                                    <path class="st374"
                                          d="M826.7,322.3c-0.3-0.3-0.3-0.6-0.3-0.9C826.8,321.6,826.7,322,826.7,322.3z"/>
                                    <path class="st374"
                                          d="M826.4,321.4c-0.3-0.2-0.3-0.6-0.3-0.9C826.5,320.7,826.4,321,826.4,321.4z"/>
                                    <path class="st66" d="M813.5,310.6c-0.5-1.8,0-3.7-0.4-5.5c-0.3-1.2-0.6-2.3-0.4-3.6c0.1-0.7-0.2-1.3-0.7-1.8
				c-0.4-0.4-0.7-0.8-0.4-1.3c0.9-1.4,0.1-2.5-0.4-3.8c-0.6-1.7-1.9-3.2-1.2-5.1c1.3,0.6,1.3,0.6,1.9,0.1c0-0.1,0-0.2,0-0.3
				c-2-5-4.2-9.9-7-14.5c-0.6-1.1-1.3-2.2-2.2-3.1c-1.1-1.1-1.2-1.1-2.7-0.5c-1.2,0.5-2.2,1.3-3.3,2.2c-8.8,7.3-16.1,15.9-22.2,25.5
				c-0.5,0.8-1.2,1.4-1.4,2.3c-0.3,0.7-0.5,1.4-0.8,2c-1.7,3.6-3.1,7.4-4,11.3c-0.6,2.5,0,5,0.1,7.5c0,0.2,0,0.3,0.1,0.5
				c0.5,2.9,0.9,5.7,1.6,8.6c0.5,2,1,3.9,2.4,5.5c1.5,1.8,3.5,2.5,5.7,3c2.1,0.4,3.9,1.2,5.5,2.6c0.5,0.4,1,0.7,1.7,0.5
				c1.5-0.2,3-0.8,4.4-1.4c2.6-1.1,5.1-2.2,7.8-3.2c3-1.2,6-1.4,9.1-0.7c1.5,0.3,2.9,0.9,4.3,1.2c0.3-0.4,0.1-0.8-0.2-1
				c-0.9-0.6-0.8-1.3,0-1.9c0.7-0.5,0.8-1.1,0.3-1.7c-0.3-0.4-0.4-0.7,0-1.1c0.6-0.6,0.7-1.4,0.4-2.2c-0.2-0.4-0.1-0.8,0.2-1.1
				c0.5-0.6,0.6-1.2,0.4-1.9c-0.1-0.5,0-0.8,0.3-1.2c0.7-1.1,0.8-2.3,0.5-3.6c-0.4-1.8-0.8-3.7-0.1-5.6c0.3-0.7,0.9-1.7,0.4-2.5
				c-0.8-1.2-0.5-2.1,0.1-3.1C813.4,311.4,813.6,311,813.5,310.6z"/>
                                    <path class="st375"
                                          d="M702.9,342.5c0.1,0.2,0.1,0.5,0.2,0.9C703.2,343,703.1,342.7,702.9,342.5z"/>
                                    <path class="st375" d="M721.6,343.6c0.6-1,0.8-2.1,0.5-3.2c-0.4-1.6-0.9-3.2-1.8-4.6c-0.5-0.8-1-1.5-0.4-2.5c0.2-0.3,0.2-0.7,0-1
				c-0.8-1.1-0.8-2.4-1.2-3.6c-0.3-0.9-0.2-1.6,0.4-2.3c0.1-0.1,0.2-0.2,0.2-0.4c0.2-0.4,0.2-0.9,0-1.3c-1.7-2.7-4.2-3.5-7.3-3.1
				c-0.6,0.1-1.2,0.2-1.7,0.3c-3.6,0.9-7.4,1.3-11.1,1.5c-6.6,0.4-13.2,0.6-19.8,0.6c-0.8,0-1.6,0-2.3,0.1c-1.6,0.1-2.7,1-3.6,2.2
				c-0.4,0.5-0.3,0.8,0.3,0.9c0.2,0.1,0.5,0.1,0.7,0.2c3.4,0.8,6.8,1.5,10.2,2.4c0.4,0.1,0.9,0.3,1.4,0l2.6,0.8
				c0.7,0.1,1.3,0.4,2,0.5c1.1,0.2,2,0.6,2.7,1.6c0.4,0.5,0.8,0.7,1.5,0.7c1.2-0.1,2.3-0.2,3.5-0.3c3.5-0.3,3.9-0.6,5.9-3.4
				c0.1-0.2,0.3-0.4,0.4-0.6c0.4-0.6,0.8-1.1,1.2-1.7c0.4-0.5,0.7-1.1,1.1-1.7c0.1,0.1,0.2,0.1,0.2,0.2c-1,2.3-2.2,4.4-3.8,6.6
				c1.9-0.4,3.4-1.2,4.6-2.4c0.6-0.6,1.1-1.2,1.8-1.7c0.4-0.1,0.7-0.3,0.8-0.7c0-0.1,0.2,0-0.1,0.2c-0.3,0.2-0.2,0.7-0.5,1
				c-1,1.1-1.7,2.5-2.2,3.9c1.1,0.7,2.4-0.2,3.6,0.5c-0.4,0.1-0.7,0.2-1,0.2c-1.4,0.1-2.7,0.8-4.1,0.5c-1.6,0.5-3.1,0.9-4.7,1.5
				c-0.5,0.2-1.2,0.4-1.2,0.9c0.1,2.1-1.2,3.3-2.4,4.6c0.2,1.3,0.5,2.6,1.3,3.7c1.2,0.5,2.5,0.3,3.8,0.3c0.1,0,0.2-0.2,0.3-0.3
				c-0.2-0.5,0-1.1,0-1.6c-0.1-0.3-0.1-0.7-0.2-0.9c0.2,0.2,0.2,0.5,0.2,0.9c0.1,0.2,0.1,0.5,0.3,0.7c0,0.1,0.1,0.2,0.1,0.2
				c0.2,0.2,0,0.7,0.3,0.9c1.1,0.3,1.1,0.3,0.9-0.7c-0.1-0.7-0.5-1.5-0.3-2.4c0.6,1,0.8,2.1,1.4,3c0.6,0.9,1.8,1,2.5,1.8
				c-0.5,0.3-0.9,0.2-1.3,0.3c-2.3,0.2-4.6,0.2-6.8,0c-2.3-0.3-4.5-0.2-6.8,0c-0.7,0.3-1.6-0.1-2.3,0.2l0,0c-0.5,0.4-1.1,0-1.5,0.3
				c0,2.2,1.1,3.9,2,5.8c0.5,0.4,1,0.3,1.5,0.2c1.4-0.3,2.8-0.2,4.1,0.4c0.4,0.2,0.9,0.2,1.4,0.2c1.6-0.3,3.1-0.1,4.5,0.6
				c0.7,0.3,1.4,0.4,2.1,0.3c2.6-0.4,5.2-0.7,7.9-0.7c0.1,0.4-0.2,0.7-0.1,1c0.2,0.9-0.4,1.4-0.8,2c-0.3,0.6-0.7,1.2,0.4,1.5
				c0.7-0.2,1-0.8,1.5-1.2c0.6-0.7,1.3-1.3,1.9-2c0.9-1,1.6-2.3,3-2.8c0.6-0.2,0.8-0.9,0.5-1.5c-0.4-0.7-0.1-1.4,0.1-2.1
				c0.2-0.5,0.4-0.9,0.3-1.4c-0.1-0.3-0.2-0.7,0-0.8C720.9,346.3,720.8,344.8,721.6,343.6z"/>
                                    <path class="st376" d="M829,349.2c-0.7-1.5-1.4-3.1-1.6-4.8c-0.1-0.5-0.2-0.9-0.5-1.4c-0.7-1.1-1.1-2.4-1.4-3.7
				c-0.8-3.3-2-6.5-2.7-9.8c-0.6-2.9-2.5-5.4-2.6-8.5c0-0.4-0.2-1-0.8-1c-0.7,0-0.8,0.6-0.9,1.1c-0.3,1.2-0.1,2.4-0.2,3.6
				c-0.6-1.1-0.2-2.3-0.2-3.4c-0.1-4,1.3-8.1,0-12.1c-0.1-0.2,0-0.4,0-0.6c0.3-1.7-0.2-3.3-1-4.8c-1.3-2.5-2.1-5.1-2.6-7.8
				c-0.7-2.2-1.5-4.4-2.6-6.5c-0.2,0.2-0.4,0.2-0.6,0.1c-0.7-0.3-1.3-0.7-1.9-1.1c0.3,0.6,0.3,1.3,0.2,1.9c-0.1,0.9-0.4,1.7,0.6,2.2
				c0.3,0.1,0.3,0.5,0.3,0.8c0,0.5,0.2,0.8,0.4,1.2c0.5,1.2,1.6,2.3,0.3,3.7c-0.3,0.3-0.4,1.1,0.2,1.4c1.1,0.5,1.2,1.5,0.9,2.5
				c-0.2,0.7-0.1,1.2,0.1,1.8c0.4,1.1,0.8,2.2,0.5,3.4c-0.2,0.7-0.2,1.2,0.1,1.8c0.4,1.1,0.3,2-0.5,3c-0.6,0.7-0.5,1.8,0.3,2.5
				c0.3,0.3,0.2,0.6,0.1,0.9c-0.5,1-0.6,2.1-0.9,3.1c-0.3,1.5,0.1,3,0.5,4.5c0.3,1.1,0.2,2.2-0.6,3c-0.5,0.5-0.7,0.9-0.3,1.5
				c0.4,0.6,0.2,1.1-0.3,1.5c-0.3,0.3-0.6,0.5-0.7,0.9c0.9,0.9,0.9,1.8,0.1,2.4c-0.8,0.6-0.8,0.6-0.1,1.3c0.7,0.7,0.7,0.9-0.2,1.4
				c-1,0.6-1,1.8,0,2.3c0.4,0.2,0.6,0.5,0.6,0.9c0.3,0.2,0.6,0.4,0.9,0.5c0.7,0.8,1.8,1,2.6,1.5c-1-0.4-2-1.1-3.3-1.2
				c-0.2-0.1-0.5-0.1-0.7-0.2c-4.1-1.1-8.1-1.4-12.2-0.1c-2.2,0.7-4.3,1.7-6.3,2.9c0.1,0.7,0.7,0.6,1.1,0.6
				c4.2,0.1,8.2,1.3,12.3,1.6c3.6,0.2,7.2,0.8,10.5,2.3c0.2,0.3,0.6,0,0.8,0.4c0.1,0.3,0.4,0.3,0.6,0.3c0.2,0.2,0.3,0.3,0.3,0.6
				c-1.9,0.3-3.8,0.2-5.7-0.2c-0.8-0.2-1.8-0.7-2.2,0.6c1.1,1.1,2.3,2.1,3.3,3.4c0.4,0.5,0.8,1.1,0.9,1.8c0.1,0.5-0.3,0.5-0.6,0.5
				c-0.2,0.4-0.5,0.4-0.9,0.2c-1.1-0.5-1.9,0-2.4,1c-1.2,2.3-1.4,4.8-1.8,7.3c0,0.1,0.1,0.1,0.2,0.2c3.7,0.5,7.3,0.7,10.9-0.1
				c6-1.2,9.4-4.8,10.3-10.9C829.8,350.8,829.4,350,829,349.2z"/>
                                    <path class="st377" d="M792.3,368.6c0,0.3-0.1,0.5-0.4,0.5c-0.4,0-0.8,0-1.2,0c-10.7,0-21.4,0-32.1,0c-1.1,0-1.7-0.3-2.1-1.4
				c-1-2.4-2.5-4.5-3.5-6.9c-0.8-1.9-1.8-3.6-2.6-5.5c-0.7-1.4-1.5-2.7-2.2-4.1c-0.5-0.9-1-1.9-1.8-2.6c-0.2-0.2-0.4-0.5-0.5-0.7
				c-0.9-1.8-1.9-3.6-3.3-5.1c-0.2-0.3-0.5-0.7-0.3-1c0.2-0.4,0.6-0.4,1-0.4c1.8,0,3.7,0,5.5,0c1.1,0,2,0.6,3,1.1
				c2.2,1,4.5,1.8,6.7,2.7c1.5,0.7,3.1,1.3,4.3,2.4c2.5,2.2,5.5,3.8,8,6c2.5,2.2,4.8,4.5,7.1,6.9c1.7,1.8,3.2,3.8,4.7,5.7
				c0.2,0.2,0.4,0.5,0.5,0.7c1,1.3,2.2,1.9,3.9,1.7C788.8,368.5,790.6,368.6,792.3,368.6z"/>
                                    <path class="st378"
                                          d="M726,335.2c-0.1-0.2-0.3-0.4-0.4-0.6c0.9,1.5,1.8,3,2.5,4.5C727.5,337.7,726.8,336.4,726,335.2z"/>
                                    <path class="st378"
                                          d="M719.9,327.1c0.7,0.7,1.4,1.5,2,2.3C721.3,328.5,720.6,327.7,719.9,327.1z"/>
                                    <path class="st378"
                                          d="M739.3,353.8c-0.1-0.3-0.3-0.6-0.6-0.8C739,353.2,739.1,353.5,739.3,353.8z"/>
                                    <path class="st378" d="M747.7,354.9c-0.1-1-0.6-1.7-0.9-2.6c-0.6-1-1.1-2-1.7-2.9c-1.3-1.3-2.6-2.6-3.9-3.9
				c-0.2-0.2-0.5-0.4-0.8-0.6c-1.8-0.9-3.5-2-5.2-3c-3-2.4-5.8-5-8.2-8c-2.4-3.1-5.1-6.1-7.8-9c-0.1,0.4-0.2,0.8-0.2,1.2
				c0.3,0.3,0.6,0.7,0.9,1c0.8,0.7,1.4,1.5,2,2.3c1.4,1.7,2.6,3.4,3.7,5.2c0.1,0.2,0.3,0.4,0.4,0.6c0.8,1.3,1.5,2.5,2.1,3.9
				c-0.8-1.6-1.6-3.1-2.5-4.5c-0.7-1.1-1.4-2.2-2.2-3.2c-0.5-0.7-1-1.4-1.5-2c-0.6-0.8-1.3-1.5-2-2.3c-0.3-0.3-0.6-0.5-1-0.8
				c-0.9,0.5-1.1,1.4-0.7,2.2c0.4,0.9,0.5,1.8,0.7,2.7c0.1,0.3,0.1,0.7,0.4,0.9c0.6,0.5,0.5,1.1,0,1.6c-0.5,0.5-0.3,1,0.1,1.6
				c0.5,0.6,1.1,1.1,1.2,2c0.1,0.7,0.4,1.4,0.7,2c0.5,1.1,0.7,2.2,0.3,3.4c-0.3,1-1.4,1.7-1.1,3c0,0.2-0.2,0.4-0.4,0.6
				c-0.3,0.3-0.5,0.6-0.8,0.8c-0.6,0.5-0.2,0.8,0.1,1.2c0.4,1-0.5,2-0.1,3c0.5,1.3-0.2,2-1.1,2.4c-1,0.5-1.7,1.1-2.2,2
				c-0.5,1-1.3,1.8-2.4,2.2c-0.5,0.3-0.9,0.7-1.2,1.2c0,0.4-0.2,0.7-0.6,0.9c-1.7,1-3.5,1.7-5.4,2.2c-1.7,0.5-1.7,0.5-1.9-1.3
				c0-0.1-0.1-0.3-0.2-0.4c-0.2,0.2-0.4,0.5-0.8,0.2c-0.9-0.5-2-0.7-2.9-1c-0.6-0.3-1.1-0.1-1.6,0.2c-1.1,0.7-2.3,1.2-3.4,2
				c-1.1,0.7-1.7,0.6-2.6-0.2c-1.4-1.2-3.7-0.8-4.6,0.7c1.8,0.9,3.7,1.4,5.6,1.7c1.5,0.2,2.9,0.6,4.3,1.2c1.5,0,2.8,0.6,4.3,0.6
				c0.7,0.2,1.4,0,2.1,0c2.5,0.1,4.9-1.7,7.4-0.4c0.2,0.1,0.4,0,0.6,0c0.8-0.2,1.1-0.8,1.1-1.6c0.1-1.4,0.4-1.5,1.5-0.7
				c0.5,0.4,1.1,0.7,1.8,0.4c1.5-0.5,2.9-1.1,3.5-2.8c1-1.6,1.6-3.3,2.2-5.1c-0.5,1.5-0.9,3-1.8,4.4c-0.2,0.3-0.4,0.7-0.1,1
				c0.3,0.3,0.6,0.1,0.9,0c0.4-0.2,0.8-0.4,1.1-0.7c1.6-1.7,3.6-3,4.9-5c1.5,0.2,3,0.4,4.4-0.5c0.4-0.4,0-1.1,0.6-1.5
				c0.5,0.1,0.9,0.4,1.1,0.8c0.1,0.1,0.1,0.2,0.2,0.3c0.3,0.2,0.5,0.4,0.8,0c0.1-0.3,0.3-0.4,0.7-0.4c0.5,0.1,1,0.2,1.5,0.4
				c0.7,0.2,1.5,1.1,2.1,0.3c0.2-0.3,0.2-0.6,0-0.9c-0.2-0.3-0.4-0.6-0.6-0.8c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.1-0.3-0.2-0.4-0.4
				c0.3,0.2,0.5,0.5,0.7,0.8c0.2,0.3,0.4,0.5,0.6,0.8c0.5,0.7,1.1,1.2,2.3,1c0.1,0,0.2,0.1,0.2,0.2c0.6,0.6,1.2,1.1,1.9,1.5
				c0.6,0.4,1.7,0.2,1.5,1.4c0,0,0.2,0.1,0.2,0.1c0.8,0.2,1.5,0,2.2-0.5c0.6-0.5,0.6-1,0.3-1.7C747.8,355.5,748,355.1,747.7,354.9z"
                                    />
                                    <path class="st379" d="M808.3,362.5c1.4,0.1,2.9,0,4.3,0.1c3.2,0.2,6.4-0.1,9.4-1.2c3.8-1.4,5.9-4.2,6.9-8
				c0.2-0.6,0.2-1.1,0.3-1.7c0.2-0.4,0.8-0.4,0.9-0.9c0.4,0.6,0.5,1.3,0.7,1.9c1.5,4.9,3,9.9,4.3,15c0.1,0.2,0.2,0.4,0.3,0.6
				c0,0.4,0.2,0.8-0.5,0.8c-0.2,0-0.5,0-0.7,0c-13.1,0-26.2,0-39.3,0.1c-1,0-1.8-0.1-2.1-1.2c-0.5-1.6-1.7-2.8-2.4-4.3
				c0.3-0.9,1-1.1,1.8-1.3c5-0.1,10,0,15-0.2C807.7,362.2,808.1,362.2,808.3,362.5z"/>
                                    <path class="st104" d="M792,362.8c-0.6,0.2-1.1,0.5-1.5,0.9c-0.6-0.3-0.7-0.9-1-1.4c-3.1-4.6-6.8-8.6-10.9-12.3
				c-0.2-0.2-0.4-0.4-0.6-0.6c-0.6-0.7-0.1-1,0.5-1.3c0.6-0.2,1.2-0.1,1.9-0.1c5.8,0,11.5,0,17.3,0c1.9,0,3.8-0.1,5.6,0.3
				c1.8,0.4,2.1,1,1.3,2.6c-1,2.1-1.4,4.5-2.3,6.7c-0.5,1.2-0.8,2.5-1.1,3.8c-0.3,0.9-0.8,1.2-1.7,1.2c-2,0-4.1,0-6.1,0
				C793,362.6,792.5,362.4,792,362.8z"/>
                                    <path class="st380" d="M792,362.8c0.4-0.5,0.9-0.3,1.3-0.3c1.9,0,3.9,0,5.8,0c1.3,0,1.2-0.1,1.6-1.3c0.7-2,1.1-4.1,2-6.1
				c0.4-0.9,0.7-1.9,0.8-2.9c0.1-0.7,0.3-1.2,0.8-1.8c0.7-0.8,0.4-1.6-0.7-1.7c-1.8-0.1-3.5-0.5-5.3-0.4c-4.1,0.2-8.2,0.1-12.4,0.1
				c-2.4,0-4.8,0-7.1,0c-0.6,0-1.2,0-0.9,1c-0.8-0.5-1.5-1-2.3-1.4c0.2-0.5,0.7-0.4,1-0.5c3.4-0.7,6.8-1.6,10.3-1.8
				c4.7-0.3,9.3-0.4,13.9,0.5c3.9,0.8,7.1,2.7,10,5.4c0.5,0.5,1,1,1.5,1.6c0.3,0.3,0.6,0.6,0.8,0.8c0.1,0.2,0.4,0.4,0.4,0.6
				c0,0.2-0.3,0.3-0.6,0.3c-0.2,0-0.4-0.1-0.6-0.1c-1.4-0.6-1.4-0.6-2.2,0.7c-0.4,0.7-0.6,1.5-0.8,2.3c-0.3,1.6-0.5,3.2-1.2,4.7
				c-1.1,0.2-2.2,0.2-3.3,0.2C800.7,362.7,796.4,362.7,792,362.8z"/>
                                    <path class="st381" d="M778.6,339.3c-1.1-0.2-2.1-0.6-3.2-0.9c-0.4-0.1-0.8-0.3-1.1-0.6c-1.4-1.3-2.7-2.6-3.2-4.6
				c-0.8-2.8-1.3-5.6-1.8-8.5c-0.1-0.8-0.1-1.5-0.5-2.2c-0.2,0.2-0.4,0.5-0.4,0.8c0,2.4-0.1,4.8,0.1,7.3c0.2,1.9,0.3,3.7,0.4,5.6
				c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.4-2.4-0.4-4.8-0.7-7.2c-0.1-0.6,0.2-1.5-0.5-1.6c-0.9-0.1-0.9,0.9-1,1.5
				c-0.2,2.5-0.3,5-0.7,7.4c-0.1,1.8,0.4,3.5,0.6,5.3c0.1,0.5,0.5,0.7,0.9,0.8c1.5,0.6,2.9,1.3,4.2,2.2c0.5,0.3,0.9,0.4,1.5,0.2
				c1.9-0.6,3.9-0.8,5.8-1.1c2.2-0.3,4.4-0.6,6.6-1.1c-0.5-0.1-0.9-0.2-1.3-0.6C782.5,340.6,780.7,339.7,778.6,339.3z"/>
                                    <polygon class="st382" points="830.2,350.8 830.2,350.8 830.2,350.8 			"/>
                                    <path class="st382" d="M830.2,350.8c-0.3-0.3,0-0.8-0.3-1.2l0,0c-0.3-0.3-0.1-0.6-0.2-0.9c-0.6-2.3-1.1-4.5-1.7-6.8
				c-1.4-5.7-2.9-11.4-4.3-17.1c-2.2-8.9-4.6-17.6-8-26.1c-0.4-0.9-0.6-1.8-1.2-2.6c0,0.6-0.1,1.2,0,1.8c0.3,2.1,1.2,4,2.1,5.8
				c0.7,1.4,1.4,2.8,1.1,4.4c-0.2,1.1,0,2.1,0.3,3.1c0.3,0.9,0.4,1.9,0.2,2.9c-0.3,2.2-0.6,4.4-0.6,6.6c0,0.8,0.1,1.7-0.1,2.4
				c-0.2,0.8,0.1,1.4,0.3,2.1c0.1,0.3,0.2,0.6,0.6,0.5c0.3-0.1,0.3-0.4,0.4-0.7c0.1-1.1-0.4-2.2,0-3.3c0.2-0.5-0.2-1.4,0.5-1.4
				c0.5,0,0.6,0.9,0.6,1.4c0.1,1.5,0.4,3,1.1,4.4c0.6,1.2,1.1,2.4,1.4,3.6c0.6,2.6,1,5.2,2.1,7.6c0.2,3,2.2,5.4,2.5,8.4
				c0,0,0,0.1,0.1,0.1c0.5,1.4,1,2.8,1.8,4.1c0.3,0.5,0.3,1,0.3,1.5C829.7,351.5,830.3,351.5,830.2,350.8z"/>
                                    <path class="st69" d="M754.5,342.4c2-0.2,4,0.1,5.9,0.6c3.3,1,6.3,2.4,9.2,4.3c2.1,1.4,4.3,2.5,6.2,4.1c4.8,4,9,8.5,11.7,14.3
				c0.2,0.4,0.7,0.7,0.2,1.1c-0.4,0.4-1.3,0.3-1.8-0.2c-1.2-1.4-2.3-2.8-3.4-4.2c-3.3-4.2-7.1-8-11.3-11.3c-4-3.1-8.4-5.4-13-7.3
				C756.9,343.4,755.7,342.9,754.5,342.4z"/>
                                    <path class="st383" d="M706.1,334.2c-0.2,0.5-0.8,0.6-1.2,0.7c-1.2,0.3-2.3,0.8-3.4,1.2c-1.1,0.3-1.3,0.8-1.1,2
				c0.2,1.1-0.5,2.2-1.5,2.4c-0.5,0.1-0.5,0.5-0.8,0.7c-0.4,0.8,0.3,1.5,0.4,2.3c0.1,0.4,0.6,1-0.2,1.3c-0.1-0.1-0.2-0.3-0.3-0.4
				c-0.6-0.5-0.8-1.2-0.9-1.9c0,0.5,0.3,0.9,0.4,1.4c0.1,0.5,0.1,1-0.7,0.8l0,0c-1-0.6-1.1-1.7-1.5-2.6c-0.1,0.9,0.8,1.6,0.6,2.6
				c-0.4,0.5-1,0.3-1.4,0.3c-0.6,0.2-1.2,0.2-1.8,0c0.1-0.8,0.9-0.5,1.2-1c-0.7-0.9-1.6-1.3-2.7-1.6c-1.9-0.4-4-0.5-5.6-1.8
				c-0.3-1.5-0.3-2.9,1.1-4c3-0.5,6-0.6,8.9-0.8c3.1-0.2,6.1-0.8,9.2-1.4C705.1,334.2,705.6,334,706.1,334.2z"/>
                                    <path class="st384" d="M698.5,354c0.2,0,0.5,0,0.7,0c1.4-0.6,2.5,0.2,3.7,0.6c0.9,0.4,1.8,0.5,2.6,0.2c0.9-0.3,1.7-0.3,2.6-0.3
				c0.6,0,1.3,0,1.8-0.3c0.3-0.1,0.5-0.2,0.8-0.1c1,0.3,2,0.2,3.1-0.5c-0.4,0.9-0.6,1.5-0.9,2.1c-0.5,1.3-1.5,2.1-2.6,2.8
				c-1.1,0.7-2.5,1.1-3.7,1.5c-0.4,0.1-0.8,0.2-1.2-0.2c0.1-0.1,0.3-0.3,0.4-0.4c0-0.1,0-0.2-0.2-0.2c-2.2-0.2-4.2-1-6.2-1.9
				c-1.2-0.6-2.6-0.8-3.8-1.4c-1.3-0.5-2.5-0.7-3.9-0.7c-0.7,0-1.4-0.2-2.1-0.6c-1.3-1.9-0.7-4.2-1.3-6.3c-0.1-0.2,0.2-0.4,0.4-0.6
				l0,0c0.2-0.1,0.4-0.2,0.6,0.1c-0.1,0.8,0.5,1.4,0.8,2.1c0.4,1.1,0.7,2.3,1.2,3.4c0.3,0.7,0.9,1.1,1.7,1
				C695,354.2,696.7,354.2,698.5,354z"/>
                                    <path class="st385" d="M700.5,359.5c-0.3,0.1-0.7,0-1,0.2c-1.5,1.2-3.4,1.7-4.9,3c-0.4,0.3-0.7,0.2-1-0.1
				c-0.2-0.2-0.4-0.4-0.6-0.6c-1-0.9-2.2-1.2-3.4-0.6c-0.5,0.2-1,0.3-1.4,0.7c-3.9-1.3-5-4.2-4.4-7.2c0.1-0.6,0.4-0.7,0.9-0.5
				c0.8,0.4,1.7,0.8,2.5,1.1c2,0.9,4,1.3,6.1,1.7C695.9,357.7,698.3,358.3,700.5,359.5z"/>
                                    <path class="st70"
                                          d="M768.4,322.1c0-0.1,0-0.2,0-0.3C768.3,321.9,768.3,322,768.4,322.1z"/>
                                    <path class="st70" d="M772.7,301.7c-2.3,3.9-4.4,8-6.2,12.2c-0.7,1.6-1.3,3.3-1.4,5.2c-0.2,4,0,8.1,0.2,12.1
				c0,0.9,0.2,1.8,0.2,2.8c0.3,0.7,0,1.4,0.2,2.1c0,0.1,0,0.2,0,0.2c0.3-1.2,0.9-2.4,0.9-3.7c0-0.9,0-1.7,0-2.6
				c0-0.9,0.2-1.7,0.7-2.5c0.1,0.8,0.1,1.6,0.1,2.4c0,0.8,0.3,1.5,0.3,2.3c0,0.8-0.1,1.6,0.2,2.4c0.2,0.7,0.2,1.5,0.6,2.3
				c0-0.3,0.1-0.5,0.1-0.7c0.2-0.3,0.3-0.6,0.2-0.9c-0.1-0.4-0.2-0.8-0.2-1.2c-0.3-4.1-0.3-8.1-0.4-12.1c0-0.1,0-0.2,0-0.3
				c0,0,0-0.1,0-0.1c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.3c0,0.1,0.1,0.2,0.3,0.1c0.2-0.9,0.1-1.8-0.1-2.6c-0.4-2.3-0.1-4.4,0.5-6.6
				c1-3.4,2.2-6.7,3.6-10c0.3-0.6,0.5-1.2,0.3-1.8C773,301.4,772.8,301.5,772.7,301.7z"/>
                                    <path class="st386" d="M680.5,338.3c0.7-0.6,1.4-1.1,2.6-1c-1.8,3-2.4,6,0,9.1c-2.3,0.1-4.3,0-6.2-0.5c-1.3-0.3-2-1.4-2.2-2.6
				c-0.3-1.3-0.1-2.6,1.1-3.5c1.2-1,2.6-1.6,4.1-2c0.4,0.6-0.1,1-0.4,1.4c-0.8,1.4-1.3,2.8-1,4.1
				C678.4,341.4,678.7,339.6,680.5,338.3z"/>
                                    <path class="st387" d="M688.9,347.8c-0.1,0.3-0.3,0.6-0.1,0.8c0.7,0.9,0.4,1.9,0.4,2.9c0,0.4-0.1,0.9,0.2,1.2
				c0.5,0.6,0.5,1.2,0.4,1.9c-1.5-0.4-2.9-1-4.3-1.6c-0.7-0.3-1.4-0.8-1.2-1.9c-0.8,0.6-1.4,0.7-2.1,0.3c-0.7-0.4-1.5-0.8-1.7-1.6
				c-0.3-0.8-0.1-1.3,0.7-1.6c0.4-0.1,0.8-0.1,1.1-0.1c1.2,0,2.4,0,3.6,0C686.9,348.2,687.9,348,688.9,347.8z"/>
                                    <path class="st388" d="M686.6,336.5c-0.7,1.3-1,2.6-0.9,4c0.8,1.1,1,2.5,1.3,3.8c0.1,0.4,0.2,0.8,0.4,1.2
				c-0.9,0.3-1.8,0.2-2.7,0.4c-0.6,0.2-1-0.3-1.3-0.7c-0.9-1.3-1.2-2.8-1-4.4c0.2-1.3,0.8-2.4,1.4-3.5c0.2-0.4,0.5-0.6,0.9-0.6
				C685.4,336.7,686,336.6,686.6,336.5z"/>
                                    <path class="st389" d="M687.5,345.6c-0.2-0.1-0.7,0-0.7-0.3c-0.1-1.4-0.7-2.7-1-4.1c0-0.2,0-0.4,0-0.6c0.7,0.3,1.4,0.6,2.2,0.6
				c0.6,0,1.1,0.2,1.6,0.5c0.6,0.3,1.2,0.5,1.8,0.4c0.8-0.1,1.5,0.2,2,0.8c0.3,0.3,0.7,0.5,1,0.8c0.2,0.2,0.3,0.4,0.3,0.6
				c-0.1,0.3-0.3,0.3-0.5,0.4c-0.4,0-0.8-0.1-1.2,0.2c0.6,0.1,1.1,0.1,1.6,0.1C692.2,345.4,689.8,345.5,687.5,345.6z"/>
                                    <path class="st390" d="M705.4,359.8c2.4-0.4,4.7-1.2,6.4-3c0.4-0.4,0.8-0.7,1.1-1.1c0.4,0.3,0.4,0.6,0.1,0.9
				c-0.3,0.5-0.7,0.9-1,1.4c-0.3,0.4-0.3,0.8,0.3,0.9c0.1,0.3,0.6,0.2,0.8,0.6c-2.5,1.2-4.9,2.5-7.6,3.1c-0.3,0.1-0.6,0.1-0.9,0.1
				c-0.6,0-0.7-0.3-0.7-0.8c0-0.5,0.5-1,0.3-1.5C704.6,360,705,359.9,705.4,359.8z"/>
                                    <path class="st391" d="M818.2,347.6c0.6,0.5,0.4,0.8-0.2,0.8c-0.7,0.1-1.3,0-2,0c-1.5,0-2.9,0.1-4.4-0.5
				c-0.6-0.2-1.3-0.4-1.8,0.3c-1.7-1.1-3.3-2.1-5.2-2.8c3.1-0.1,6.1,0.6,9.1,1.5c0.2,0.3,0.6,0,0.9,0.3l0,0
				C815.7,347.8,816.9,347.9,818.2,347.6z"/>
                                    <path class="st392" d="M792,342.1c0.2,0.2,0.4,0.3,0.6,0.3c3.2,0,6.2,0.7,9.2,1.3c1.2,0.3,2.4,0.2,3.5,0.7
				c-1.3,0.2-2.6-0.1-3.9-0.3c-3.8-0.5-7.7-0.9-11.6-1.2C790.7,342.6,791.2,342,792,342.1z"/>
                                    <path class="st393" d="M745.1,349.3c-0.7-0.3-1-1.2-1.9-1.1c-0.1,0-0.2-0.3-0.3-0.5c-0.9-1.3-2-2.3-3.4-3
				c-1.5-0.8-3.1-1.5-4.3-2.9c2,0.8,4,1.6,5.8,2.7c0.3,0.2,0.5,0.5,0.9,0.5c0.5,0.1,0.8,0.5,0.9,0.9c0,0.4,0.2,0.6,0.5,0.8
				c0.4,0.3,0.7,0.7,0.9,1.2C744.4,348.4,745.1,348.7,745.1,349.3z"/>
                                    <path class="st73" d="M762.9,317.6c0.4-0.7,0.3-1.6,0.5-2.4c-0.1,0.1-0.3,0.2-0.4,0.2c-0.1,0.4-0.2,0.9-0.3,1.4
				C762.9,317,762.9,317.3,762.9,317.6z"/>
                                    <path class="st394" d="M680.5,338.3c-0.2,0.3-0.4,0.7-0.6,1c-0.9,1.4-1.4,2.9-0.9,4.6c0.1,0.2,0.1,0.5-0.1,0.8
				c-0.8-1-0.8-2.1-0.6-3.3c0.2-1,0.5-2,1.2-2.8c0.2-0.3,0.5-0.5,0.4-0.9C680.2,337.7,680.2,338.2,680.5,338.3z"/>
                                    <path class="st395"
                                          d="M695.9,344.7c-0.6-1.1-1.1-2.3-1.1-3.6c0.9,1.1,1.3,2.4,1.9,3.6C696.5,344.8,696.2,344.9,695.9,344.7z"/>
                                    <path class="st396" d="M698.2,344.8c0.1-0.8-0.4-1.5-0.5-2.3c-0.1-0.4-0.2-0.8-0.2-1.3c0-0.2,0.3-0.2,0.4-0.1
				c0.3,1.3,0.9,2.5,1.1,3.8C698.8,344.9,698.4,345.1,698.2,344.8z"/>
                                    <path class="st397"
                                          d="M811.2,339.5c1.3,0.7,2.6,1.2,4.1,1.6c-1-0.8-2.1-1.5-3.4-1.9C811.8,339.5,811.4,339.4,811.2,339.5z"/>
                                    <path class="st398" d="M696.7,344.7c0.3,0,0.6,0,0.5-0.4c-0.2-0.6-0.4-1.3-0.6-1.9c-0.1-0.4-0.2-0.7-0.1-1.2
				c0.7,0.3,0.6,1,0.8,1.6c0.2,0.5,0.5,1,0.6,1.6C697.6,344.6,697.4,345.5,696.7,344.7z"/>
                                    <path class="st399"
                                          d="M703.1,345c-0.5-1.1-0.5-2.3-0.4-3.5c0.6,0.8,0.6,1.7,0.7,2.7C703.1,344.3,703.3,344.7,703.1,345z"/>
                                    <path class="st400" d="M818.2,347.6c0,0.2,0.1,0.5-0.2,0.5c-1.2-0.2-2.5,0-3.6-0.8c0.5-0.1,0.9,0.1,1.4,0.2
				c0.5,0.1,1,0.3,1.5-0.1C817.7,347.2,817.9,347.5,818.2,347.6z"/>
                                    <path class="st401"
                                          d="M709.8,329.1c0.6-0.6,1.2-1.3,1.3-2.2c-0.5,0.6-1,1.1-1.5,1.7C709.8,328.8,709.8,328.9,709.8,329.1z"/>
                                    <path class="st376"
                                          d="M812.5,353.1c-0.6-0.4-1.2-0.8-1.5-1.6C811.6,352,812.2,352.4,812.5,353.1z"/>
                                    <path class="st387"
                                          d="M693.3,347.3c-0.7,0.4-1.5,0.3-2.3,0.2C691.7,347.1,692.5,347.3,693.3,347.3z"/>
                                    <path class="st387"
                                          d="M689.5,347.9c-0.2,0-0.4,0-0.6-0.1c0.6-0.5,1.3-0.3,2-0.3C690.5,348.1,690,347.8,689.5,347.9z"/>
                                    <path class="st381"
                                          d="M765.8,336c0-0.7,0.3-1.5-0.2-2.1C765.5,334.6,765.5,335.3,765.8,336z"/>
                                    <path class="st65"
                                          d="M744.2,347.9c-0.4-0.3-0.8-0.6-0.9-1.2C743.9,346.9,744.2,347.3,744.2,347.9z"/>
                                    <path class="st65"
                                          d="M742.8,345.9c-0.4-0.2-0.7-0.5-0.9-0.9C742.5,345,742.8,345.3,742.8,345.9z"/>
                                    <path class="st379"
                                          d="M830.2,350.8c-0.4-0.3-0.3-0.7-0.3-1.2C830.2,350,830.3,350.4,830.2,350.8z"/>
                                    <path class="st399"
                                          d="M703.5,344.4c0.3,0.2,0.3,0.6,0.3,0.9C703.4,345,703.4,344.7,703.5,344.4z"/>
                                    <path class="st400"
                                          d="M815.9,346.7c0.3,0,0.6,0,0.8,0.4C816.4,347.1,816.1,347,815.9,346.7z"/>
                                    <path class="st400"
                                          d="M814.5,347.3c-0.4,0.1-0.6,0-0.9-0.3C813.9,346.9,814.2,347,814.5,347.3z"/>
                                    <path class="st379"
                                          d="M829.9,349.6c-0.3-0.2-0.3-0.6-0.2-0.9C829.9,349,830,349.3,829.9,349.6z"/>
                                    <path class="st402"
                                          d="M681.6,356.1c0-0.3-0.1-0.7,0.2-0.9C681.9,355.5,681.8,355.8,681.6,356.1z"/>
                                    <path class="st403" d="M751.3,368.2c-0.1-4.8-1.6-9.1-3.5-13.4c0,0.3,0,0.7,0.1,1c0.2,1,0.1,1.3-0.8,1.7
				c-0.5,0.3-1.1,0.3-1.7,0.1c0.1-0.3,0.3-0.4,0.5-0.5c0.2-0.1,0.4-0.3,0.3-0.6c-0.1-0.3-0.4-0.3-0.6-0.1c-0.6,0.3-1.1,0-1.6-0.3
				c-0.8-0.5-1.4-1-2-1.7c-0.4-0.4-0.7-0.7-1.2-0.1c-0.3,0.3-0.5,0.1-0.7-0.1c-0.2-0.4-0.5-0.7-0.7-1.1c-0.4-0.6-1-1.2-1.6-1.6
				c-0.2-0.1-0.4-0.1-0.5,0.1c-0.1,0.2,0,0.4,0.1,0.5c0.2,0.2,0.5,0.3,0.7,0.5c0.7,0.6,1.1,1.3,1.2,2.3c-1.3-0.4-2.4-1.3-3.7-1.1
				c-0.2,0.6,0.2,0.9,0.5,1.2c0.2,0.2,0.4,0.4,0.6,0.6c0.5,0.4,0.9,0.8,1.4,1.2c0.3,0.2,0.6,0.4,0.9,0.6c0.1,0.1,0.2,0.2,0.4,0.3
				c0.3,0.2,0.5,0.3,0.7,0.4c0.1,0,0.2,0,0.3-0.1c0.3-0.1,0.4-0.4,0.5-0.6c0-0.1,0.1-0.3,0.1-0.5c0-0.1,0-0.3,0-0.4
				c0,0.1,0.1,0.2,0,0.4c0,0,0,0,0,0.1c0,0.2,0,0.4-0.1,0.5c-0.1,0.6-0.4,0.8-0.9,0.7c-0.3,0-0.5-0.2-0.7-0.4c0,0,0,0-0.1,0
				c-0.4-0.3-0.8-0.5-1.2-0.8c-0.5-0.4-1-0.7-1.4-1.2c-0.3-0.3-0.6-0.6-0.9-0.9c-0.2-0.2-0.4-0.6-0.8-0.4c-0.2,0.3-0.4,0.1-0.6,0
				c-0.2,0.8-0.1,1.7,0.4,2.3c1.4,1.9,3.1,3.4,4.9,4.8c-1.9-1.4-3.5-2.9-4.9-4.8c-0.5-0.7-0.7-1.6-0.4-2.6c-0.1-0.8-1-0.8-1.4-1.2
				c-0.6,0.4-0.3,1.1-0.3,1.6c0,0.3,0,0.6,0,0.9c0,0.4-0.1,0.7-0.2,1c-0.1,0.4-0.2,0.8-0.3,1.1c0-0.4,0.1-0.7,0.3-1.1
				c0.1-0.3,0.1-0.7,0.2-1c0-0.3-0.1-0.5-0.3-0.8c-1.3,0.2-2.7,1-4,0.1c-0.2-0.1-0.5,0-0.6,0.2c0.1,0.9-0.2,1.6-0.9,2
				c-1,0.5-1.7,1.3-2.4,2.1c-0.7,0.8-1.5,1.3-2.4,1.9c-0.7,0.4-1.2,0.4-1.6-0.4c-0.4,1.2-1.4,1.8-2.5,2.3c-1.5,0.7-1.7,0.7-2.8-0.6
				c-0.4-0.5-0.7-0.5-1.1,0c-0.4,0.6-0.7,1.2-0.5,1.9c0.2,0.6-0.2,0.8-0.6,0.9c-0.4,0.2-0.9,0.4-1.1-0.2c-0.3-0.9-0.8-0.7-1.5-0.4
				c-1.3,0.5-2.7,1.1-4.2,0.6c-0.4-0.1-0.8,0-1.1,0.2c-0.7,0.6-1.6,0.5-2.4,0.5c0.3,0.2,0.6,0.2,0.9,0.3c1.2,0.2,2.5,0.3,3.7,0.5
				c1.8,0.2,3.5,0.8,5.3,1.3c0.4,0.3-0.1,0.8,0.3,1.2c1.1,0.1,2.2,0.1,3.2,0c0.9-0.9,1.8-1.7,2.9-2.2c-0.4,0.3-1.1,0.6-1.6,1
				c-0.4,0.3-0.9,0.7-0.2,1.2c0.2,0,0.4,0,0.6,0c0.3,0.2,0.7,0.1,1,0.1c10.4,0,20.9,0,31.3,0c0.3,0,0.6,0,0.9,0
				C751.4,368.9,751.4,368.6,751.3,368.2z"/>
                                    <path class="st403"
                                          d="M739.3,357.6c0.2,0.2,0.4,0.3,0.7,0.4C739.8,357.9,739.6,357.7,739.3,357.6z"/>
                                    <path class="st403"
                                          d="M732.6,355.4c0,0.4-0.1,0.7-0.2,1C732.5,356.1,732.6,355.7,732.6,355.4z"/>
                                    <path class="st403"
                                          d="M738.1,356.7c-0.5-0.4-1-0.7-1.4-1.2C737.1,356,737.6,356.4,738.1,356.7z"/>
                                    <path class="st403"
                                          d="M740.9,356.7c0,0.2-0.1,0.4-0.1,0.5C740.9,357.1,740.9,356.9,740.9,356.7z"/>
                                    <path class="st0" d="M834.6,369.7c-0.6,1-1.6,1.5-2.7,1.7c-1.2,0.3-2.5,0.5-3.7,0.6c-0.9,0.1-1.8,0-2.7,0.3c-0.3,0.1-0.7,0-1-0.1
				c-0.5-0.2-1-0.2-1.6,0c-0.3,0.1-0.7,0.1-1,0.1c-4-0.3-8,0.2-11.9,0c-2.1-0.1-4.1-0.2-6.2-0.5c-1.1-0.1-2.3-0.1-3.4-0.4
				c-1.1-0.2-2-0.7-2.5-1.7c0.1-0.1,0.1-0.1,0.1-0.2c0,0,0.1-0.1,0.1-0.1c12-0.2,23.9,0,35.9-0.1
				C834.3,369.5,834.5,369.4,834.6,369.7z"/>
                                    <path class="st402" d="M717.7,368.9c10.5,0,21.1,0,31.6,0c0.4,0,0.9,0,1.3,0c0.4,0,0.6-0.2,0.7-0.6c0.3,0.4,0.4,0.7-0.2,0.8
				c-0.2,0-0.5,0-0.7,0c-10.4,0-20.8,0-31.2,0C718.6,369.1,718.1,369.2,717.7,368.9z"/>
                                    <path class="st402" d="M716,368.9c0-0.6,0.4-0.9,0.8-1.2c1-0.6,1.9-1.3,3.1-1.7c-0.2,0.7-0.7,0.9-1.1,1.1c-0.6,0.3-1.1,0.6-1.6,1
				c-0.3,0.3-0.2,0.5-0.1,0.8C716.8,368.9,716.4,369,716,368.9z"/>
                                    <path class="st402" d="M712.8,368.9c0-0.4,0.2-0.9-0.3-1.2c0.1,0.8-0.5,0.8-1.1,0.9c-0.5,0.1-1.2-0.1-1.6,0.4
				C710.8,369,711.8,369.3,712.8,368.9z"/>
                                    <path class="st0"
                                          d="M796,369.5c-0.6,0.4-1,0.7-1.5,0.1C795,369.4,795.4,369.4,796,369.5z"/>
                                    <path class="st404" d="M768.7,322.5c0-0.1,0-0.2,0-0.3c-0.4-0.4-0.1-1-0.5-1.5c-0.1,4.7,0,9.2,0.3,13.7c0.2,0.3,0,0.6,0.2,0.9
				c0,0.3,0.1,0.6,0.1,0.9c0.3,0.2,0.1,0.7,0.6,1c-0.1-2.3-0.3-4.4-0.4-6.6C768.7,327.9,768.7,325.2,768.7,322.5z"/>
                                    <path class="st405" d="M718.9,326.1c1.3,0.7,2.2,1.8,3.1,3c2.5,3.2,4.9,6.5,6.4,10.3c0.1,0.2,0.3,0.4,0,0.9
				c-1.4-2.6-2.7-5.1-4.4-7.4c-1.7-2.3-3.3-4.5-5.2-6.6C718.9,326.2,718.9,326.2,718.9,326.1z"/>
                                    <path class="st390" d="M719.5,348.2c0.5,0.4,0.2,1,0.3,1.5c0,0.6-0.3,1.3,0.2,1.9c0.3,0.4-0.7,2-1.5,2.3
				c-1.2,0.4-1.8,1.2-2.4,2.3c-0.4,0.9-1.1,1.9-2.4,1.6c1.2-1.4,2.6-2.7,3.6-4.3c0.2-0.4,0.7-0.3,1-0.4c0.8-0.3,1.1-0.8,0.6-1.5
				c-0.5-0.8,0.1-1.5,0.2-2.2C719.2,349,719.5,348.6,719.5,348.2z"/>
                                    <path class="st406" d="M698.5,354c-0.4,0.4-1,0.3-1.5,0.4c-1.4,0.2-2.7,0.5-4.1,0.5c-1.4,0-1.4,0-1.4-1.5
				c0.8,0.4,1.5,0.1,2.2-0.1c1-0.2,1.9,0,2.8,0.3C697.2,353.9,697.8,354,698.5,354z"/>
                                    <path class="st407"
                                          d="M694.3,331.3c0.6-1.2,0.4-2.3,0.4-3.4C694,329.3,693.9,330.2,694.3,331.3z"/>
                                    <path class="st408" d="M707.5,345c-0.3,0-0.5-0.3-0.5-0.6c0-0.2,0.2-0.4,0.3-0.3c0.3,0.1,0.4,0.4,0.4,0.6
				C707.8,344.9,707.7,345,707.5,345z"/>
                                    <path class="st409" d="M727.6,354.9c0.2,0,0.4,0.1,0.4,0.3c-0.1,0.8-0.5,1.6-1.2,1.9c-0.8,0.4-1.4,1-2,1.6
				c-0.7,0.8-1.6,1.4-2.4,2.1c-0.3,0.3-0.7,0.5-1.2,0.5c-0.7,0.1-1-0.2-1-0.9c1.1-1.4,1.5-3.1,2.1-4.8c0.1-0.4,0.3-0.8,0.4-1.3
				c0.4,0.8,0.4,0.8-0.4,3.3c-0.4,1-0.9,2-1.7,3.2c1.6-0.3,2.6-1.1,3.4-2.1c0.7-0.8,1.3-1.7,2.3-2.1
				C727.2,356.3,727.1,355.4,727.6,354.9z"/>
                                    <path class="st410" d="M734.4,354.3c0.2,2.1,1.4,3.5,3,4.8c1.1,0.9,2.2,1.9,3.2,2.9c-1.2-0.4-2.3-1-3.1-1.9
				c-0.9-1-1.8-1.9-2.7-2.9c-0.9-1-0.7-2.1-0.9-3.2c0-0.1,0.3,0,0.5,0C734.3,354.1,734.3,354.2,734.4,354.3z"/>
                                    <path class="st411" d="M735.5,353.7c0.5,1,1.3,1.8,2.2,2.4c0.5,0.3,0.9,0.7,1.4,1c0.4,0.2,0.7,0.8,1.1,0.5
				c0.5-0.3,0.5-0.9,0.5-1.4c0-0.3-0.3-0.6,0.1-1c0.6,1.4,0.4,2.5-0.4,3.6c-2-1.4-3.9-2.8-5.5-4.5c-0.1-0.2-0.4-0.4-0.2-0.6
				C735,353.3,735.2,353.7,735.5,353.7z"/>
                                    <path class="st405"
                                          d="M737.1,346.5c-2.2-2.2-4.8-3.8-7.5-5.3C732.8,341.9,735.1,343.9,737.1,346.5z"/>
                                    <path class="st412" d="M732.9,352.8c0,1.8,0.1,3.6-0.6,5.4c-0.1,0.2-0.1,0.5-0.5,0.5c-0.2-1.4,0.6-2.8,0.5-4.2
				c0-0.5,0-1.1,0.1-1.6C732.4,352.5,732.6,352.6,732.9,352.8z"/>
                                    <path class="st413"
                                          d="M727.5,346.3c1.5-0.4,3.4,0.3,5.4,1.9C730.8,347.9,729.4,346.5,727.5,346.3z"/>
                                    <path class="st414"
                                          d="M765.6,324.2c0.5-1.7,0.6-3.5,0.6-5.3C765.5,320.7,765.4,322.5,765.6,324.2z"/>
                                    <path class="st381"
                                          d="M768.7,335.3c0.1-0.3,0-0.7-0.2-0.9C768.4,334.7,768.4,335.1,768.7,335.3z"/>
                                    <path class="st415" d="M735.3,358.8c0.5,0.5,0.7,1.3,0.7,1.9c0.1,0.7,0.4,1.1,1,1.5c0.5,0.3,1,0.7,1.6,1c0.9,0.5,1.4,1.2,1.1,2.3
				c1.4,0.1,2.3,0.9,3.2,1.6c-0.8,0.1-1.4-0.2-2-0.5c-1.2-0.6-1.4-0.7-2.3,0.4c-0.9,1.1-1.5,1.3-3-0.1c-1.2-1.1-2.2-2.4-3.6-3.4
				c0.6-0.3,0.9,0.1,1.2,0.4c0.9,0.9,1.8,1.8,2.7,2.7c1,1,1.4,1,2.7-0.5c0.7-0.8,0.5-1.8-0.5-2.5c-0.2-0.2-0.5-0.4-0.7-0.5
				c-1-0.6-1.7-1.3-1.9-2.5c-0.1-0.6-0.4-1.2-0.6-1.7C735.1,358.9,735.2,358.8,735.3,358.8z"/>
                                    <path class="st410"
                                          d="M732.9,361.6c0-1.6,1.1-2.6,1.2-4c0.5,0.7,0.6,0.7-0.1,2C733.7,360.2,733.6,360.9,732.9,361.6z"/>
                                </g>
                                <g id="ChefsPaper">
                                    <path class="st0" d="M521.9,291.4c-1.3-0.1-0.6,0-1.3-0.1c-1.1-0.2-2.2-0.4-3.3-0.6c-1.9-0.3-3.7-0.7-5.6-1v2.6
				c0.4,0.4,0.8,0.5,1.3,0.6c3.8,0.9,7.6,1.8,11.4,2.4c3.3,0.6,6.7,1.1,10,2c3.5,1,7,1.6,10.5,2.3c9.4,1.9,18.8,3.5,28,6.2
				c5.6,1.6,11.3,2.9,17,4.1c10.4,2.1,20.6,4.7,30.9,7.4c21.2,5.6,42.2,11.6,63.6,16c-2-1.6-2.2-2.2-8-3.9
				c-10.7-1.4-21.1-4.1-31-7.9c-5.4-1.5-7.2-1.7-11.2-2.7c-20-5.7-37.8-11.3-58.8-15.3c-2,0-5-1.9-7-1.9"/>
                                    <path class="st0" d="M703.6,358.7c-1.3-0.3-2.5-0.7-3.7-1.2c-3-1.2-5.8-2.8-9.2-2.6c-0.5,0-0.9-0.2-1.4-0.4
				c-1.2-0.5-2.6-0.8-3.8-1.4c-0.3-0.2-0.8-0.3-1-0.6c-0.2,0-0.5-0.1-0.7-0.2c-0.5-0.2-0.9-0.5-1.4-0.7c0,0,0,0,0,0c0,0,0,0-0.1,0
				c0,0,0,0,0,0c0,0,0,0,0,0c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1,0-0.1-0.1-0.2-0.1c-0.8-0.2-1.5-0.9-1.5-1.6c0.1-1.2,1.2-0.9,1.9-1
				c0.7-0.1,1.3,0,2,0c1.3,0,2.6,0.1,3.9-0.3c0.1,0,0.3-0.1,0.4-0.1c0.6-0.2,1.2-0.1,1.8-0.2c0.1,0,0.3-0.1,0.4-0.1
				c0.7-0.1,1.5-0.1,2.2,0c0.9-0.1,1.8-0.2,2.7-0.2c-0.5-0.9-1.1-1.9-1.5-2.9c-0.2,0-0.3,0-0.5,0.1c-2.2,0.1-4.3,0.3-6.5,0.5
				c-0.7,0.2-1.4,0.2-2.2,0.3c-0.3,0-0.7,0-1,0c-1.6,0.3-3.2,0.4-4.9,0c-0.8-0.1-1.6-0.2-2.5-0.5c-2.2-0.6-3.1-4.3-0.7-5.3
				c1.8-0.7,3.5-1.3,5.4-1.8c1-0.3,1.9-0.3,2.8-0.3c0.6-0.4,1.3-0.6,2.2-0.6c0.8-0.1,1.6-0.2,2.4-0.3c0.7-0.1,1.3-0.1,2-0.2
				c-0.1-0.4-0.3-0.8-0.4-1.2c-1.6-0.4-3.1-0.9-4.6-1.5c-0.1,0-0.1,0-0.2,0c-6.3,0-12.5,1.1-18.6,2.5c-4,0.9-8,2.1-11.6,4.1
				c-0.5,0.5-1.3,1-0.8,1.8c0.5,0.8,1.3,0.6,2.1,0.4c1.2-0.3,2.3-0.8,3.5-1.1c4-1.2,8-2.2,12.2-2.7c-1.3,1.8-1.5,2.4-0.8,4.4
				c0.8,2.4,2,4.5,4.6,5.4c0.8,0.2,1.3,0.7,1.1,1.6c-0.2,1.1,0.5,1.8,1.3,2.4c0.5,0.4,1.2,0.7,1.8,1c0.6,0.3,1,0.7,0.7,1.4
				c-0.1,0.4-0.1,0.7-0.2,1.1c0,0.1-0.1,0.3-0.1,0.4c0.2,3.6,2.5,5.7,5.4,7.5c1.9,1.2,4.1,1.8,6.3,2.2c2.5,0.4,4.9,1.3,7.4,1.3
				c0.6-0.2,1-0.5,0.9-1.2c-0.1-0.6-0.6-0.8-1.1-0.9c-0.6-0.1-1.2-0.3-1.7-0.6c-0.6-0.3-1.2-0.4-1.8-0.6c-2.7-0.8-5.6-1-8.2-2.2
				c-0.2-0.1-0.4-0.1-0.5-0.2c-2.2-1-3.7-2.6-3.8-5.2c0-1.5,0.4-1.8,1.7-1.2c2.2,1,4.4,1.8,6.8,2.1c2.7,0.4,5.4,1.2,7.9,2.3
				c1.3,0.4,2.5,1.4,4,0.9c0.1-0.1,0.3-0.2,0.5-0.3C704,359.9,703.8,359.3,703.6,358.7z"/>
                                    <path class="st416" d="M682.5,332.6c-3.9-0.9-7.8-1.7-11.7-2.6c-7.8-1.7-15.5-4-23.2-6c-4.2-1.1-8.4-2.1-12.5-3.2
				c-0.5,0-1.1-0.1-1.6-0.3c-0.5-0.2-1-0.4-1.5-0.5c-2.5-0.6-4.9-1.3-7.4-2c-9.3-2.6-18.5-5-27.9-7c-6.6-1.5-13.3-2.7-19.9-4.4
				c-5.2-1.4-10.5-2.9-15.8-4c-6.3-1.3-12.5-2.6-18.8-3.8c-4.7-0.9-9.2-2.3-13.9-3.1c-5.6-0.9-11-2.1-16.5-3.4v1.5
				c1.3,1.3,3,2.2,4.5,3.3c6.7,1.9,13.4,3.9,20.1,5.9c19.5,5.8,38.9,11.7,58.6,17c14.8,4,29.3,9,43.7,14.2c5.7,2,11.2,4.3,16.8,6.6
				c2.2-1,4.5-2.1,6.8-2.8c6.8-1.9,13.7-3.2,20.7-3.7c1.2-0.1,2.5-0.1,3.7-0.1C685.2,333.7,683.8,333.2,682.5,332.6z"/>
                                    <path class="st416"
                                          d="M635,320.8c-1-0.3-2-0.5-3-0.8c0.5,0.2,1,0.4,1.5,0.5C633.9,320.6,634.5,320.7,635,320.8z"/>
                                    <path class="st65" d="M706.8,366.2c-1.6-0.2-3.2-0.3-4.8-0.7c-0.6-0.1-1.1-0.2-1.7-0.3c-0.9-0.1-1.8-0.7-2.6,0
				c0.5,0.5,1.2,0.5,1.8,0.6c0.4,0.1,0.9,0.1,1,0.6c0.1,0.6-0.3,0.8-0.8,0.9c0.1,0.7,0.8,0.7,1.2,0.8c0.9,0.3,1.9,0.5,2.7,0.5
				c-0.7-0.1-1.6-0.1-2.5-0.1c-3.3-0.2-6.5,0.3-9.7,0.3c-38.5,0-77,0-115.6,0c-1,0-1.9-0.1-2.9,0.1c-0.3,0-0.4,0.2-0.5,0.4
				c0,0,0,0-0.1,0c0-0.4-0.2-0.6-0.4-0.9c-2.5-3.8-4.9-7.7-7.5-11.5c-1.7-2.7-3.5-5.3-5.4-7.8c-6.3-8.4-12.8-16.8-19.4-25
				c-2.5-3.1-4.9-6.4-7.4-9.5c-3.3-4.1-6.9-8-10.4-12c-1.8-2.1-3.4-4.4-5.7-6c-1.4-1-2.8-2.2-4.4-2.9v2c0.1,0,0.3,0,0.4,0.1
				c2.1,2.8,4.1,5.5,6.2,8.3c0.3,0.4,0.5,0.8,0.3,1.3c0,0,0,0,0,0c10.4,11.7,21.7,22.4,29,36c0.6,0,1,0.2,1.4,0.7
				c1.5,1.8,3,3.6,4.5,5.5c4.5,6.1,8.9,12.4,13,18.7c0.5,0.8,0.9,1.6,1.7,2.2c0,0.4-0.1,0.6-0.3,0.6l3.9,3.6c46.4,0,92.9,0,139.3,0
				C709.4,370.8,708,368.5,706.8,366.2z"/>
                                    <path class="st417" d="M681,353.7c-0.8-0.2-1.5-0.8-2.3-1.2c-1-0.5-1.2-1.3-1.1-2.3c0.1-1.2,0.1-1.2-1-1.6c-1-0.4-2-0.8-2.8-1.6
				c-0.7-0.6-1-1.5-1.4-2.3c-1.4-2.9-1.5-4.5,0.8-6c0.1,0,0-0.2,0.1-0.3c-0.4-0.1-0.8,0-1.1,0c-5,0.7-9.9,1.9-14.7,3.6
				c-0.5,0.2-1,0.3-1.5,0.4c-0.5,0.1-1,0.2-1.3-0.4c-0.2-0.5,0.3-0.7,0.5-1c0.1-0.1,0.2-0.2,0.2-0.4c-0.2-0.6-0.8-0.7-1.2-0.9
				c-0.8-0.4-1.6-0.7-2.4-1c-10.7-4.3-21.5-8-32.4-11.8c-10.5-3.7-21.3-6.5-32.1-9.6c-10.2-2.9-20.4-5.7-30.5-8.8
				c-9.4-2.9-19-5.6-28.4-8.5c-4.1-1.2-8.2-2.3-12.3-3.5c0,0.1,0.1,0.2,0.1,0.3c4.8,5.3,9.5,10.8,14.2,16.2
				c3.1,3.6,5.8,7.4,8.7,11.1c7.9,9.9,15.8,19.7,23.1,30.1c0.6,0.9,1.3,1.8,2,2.7c0.5,0.7,1.2,0.5,1.9,0.5c9,0.1,18-0.4,27.1-0.3
				c27.7,0.1,55.4,0,83.1,0c1.1,0,2.1,0,3.2-0.2c0.6-0.1,1.2-0.3,1.6-0.9c0.2-0.3,0-0.6,0.2-0.9c0-0.1,0-0.3,0.1-0.4
				C682,354.3,681.9,353.9,681,353.7z"/>
                                    <polygon class="st417" points="681,356.2 681,356.2 681,356.2 			"/>
                                    <path class="st402" d="M564.2,357c0.7,0.3,1.4,0,2.1,0c3.2,0,6.3,0.1,9.5,0c17-0.6,34-0.2,51.1-0.3c17-0.1,34,0,50.9,0
				c1.1,0,2.2-0.2,3.3-0.6c0.1,3.8,2.5,6,5.6,7.7c1.5,0.8,3.1,1.4,4.8,1.7c2.8,0.5,5.5,1.1,8.2,1.7c1.5,0.6,3.2,0.8,4.8,1.1
				c0.7,0.1,1.3,0.4,1.9,0.6c-1,0-2,0-3,0c-25.6,0.5-51.1,0.2-76.7,0.3c-17.9,0-35.8,0-53.7,0c-0.2,0-0.4,0-0.6,0
				c-1.1-0.9-1.7-2.2-2.4-3.4c-1.7-2.8-3.6-5.4-5.4-8.1C564.4,357.6,564.2,357.4,564.2,357z"/>
                                    <path class="st320"
                                          d="M586,305.9c0.2,0,0.3,0,0.5,0c-0.8-0.2-1.5-0.4-2.3-0.5C584.4,305.6,585,305.7,586,305.9z"/>
                                    <path class="st77"
                                          d="M591.2,307.1c0.6,0.1,1.1,0.2,1.7,0.3c-0.9-0.2-1.8-0.5-2.7-0.7C590.3,307,590.5,307,591.2,307.1z"/>
                                    <path class="st330"
                                          d="M538.2,295c0.2,0.3,0.6,0.3,0.9,0.3C538.9,294.9,538.5,295,538.2,295z"/>
                                    <path class="st402"
                                          d="M681,356.2c0-0.3-0.1-0.7,0.2-0.9C681.3,355.6,681.3,355.9,681,356.2z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div> <!-- end of row 3 -->
        </div><!-- end of container-fluid -->
        <footer class="p-4 d-flex justify-content-end align-content-end">
            <p class="mb-0 copyright">&copy; <?php echo date("Y"); ?> All Rights Reserved, The Sous Chef Inc.</p>
        </footer>
        <iframe src="bannerAd/announcementAd.html" width="100%" scrolling="no"></iframe>
    </body>
</html>