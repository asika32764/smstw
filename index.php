<?php
    // Debug
    $debug = 0;


    // LESS
    require "lessphp/lessc.inc.php";
    
    $path = 'less/main.less';
    $file  = 'css/main.css';
    
    if(file_exists($file)) {
        unlink($file);
    }
    
    $less = new lessc;
    $less->checkedCompile($path, $file);
    
    // Animation
    $namespace = array(
        'begin'     => 0,
        'add'       => 0,
        'duration'  => 70,
        'current'   => 1,
    );
    
    $animStart = function(&$namespace)
    {
        if(empty($namespace['current'])) $namespace['current'] = 1 ;
        
        return $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']);
    };
    
    $animEnd   = function(&$namespace)
    {
        $r = $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']) + $namespace['duration'];
        
        $namespace['current']++;
        
        return $r ;
    };
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <!--
            別看了，快加入我們吧～～～！！！
            service@bm-sms.com.tw
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
        
        <meta charset="UTF-8">
        <meta name="keywords"       content="知恩思資訊股份有限公司, SMS台灣分部, 知恩思" />
        <meta name="description"    content="我們是知恩思資訊股份有限公司，日商 SMS 在台灣的分公司，致力於為高齡化社會中的3個領域 醫療・長照・銀髮族(active senior) 和3種服務對象 企業・從業者・消費者 提供所需的信息服務與平台，以此為社會長期持續創造價值。" />
        <meta name="generator"      content="The Time Machine" />
        <meta property="og:image"   content="http://bm-sms.com.tw/images/sms-logo-white.jpg"/>
        <meta property="og:url"     content="http://bm-sms.com.tw"/>
        <meta property="og:title"   content="SMS Taiwan. Come join us, we are hiring!"/>
        <meta property="og:site_name" content="SMS Taiwan"/>
        <meta property="og:description" content="我們是知恩思資訊股份有限公司，日商 SMS 在台灣的分公司，致力於為高齡化社會中的3個領域 醫療・長照・銀髮族(active senior) 和3種服務對象 企業・從業者・消費者 提供所需的信息服務與平台，以此為社會長期持續創造價值。"/>
        <meta property="og:type"    content="website"/>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        
        <title>SMS Taiwan. Come join us, we are hiring!</title>
        
        <?php if($debug) : ?>
        
        <link href='http://fonts.googleapis.com/css?family=Cuprum:400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/main.css" />
        <?php else:?>
        
        <link rel="stylesheet" href="css/main.min.css" />
        <?php endif;?>
        <?php if($debug) : ?>
        
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/jquery-scrollspy.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/gmap3.min.js"></script>
        <script src="js/main.js"></script>
        <?php else:?>
        
        <script src="js/main.min.js"></script>
        <?php endif;?>
        
    </head>
    <body id="top"  sr-scrollspy="{repeat: true}">
        
        <!--HEADER START-->
        <header id="sr-header">
            <nav id="sr-nav" class="uk-grid">
                <div class="uk-container uk-container-center">
                    <div class="ul-navbar">
                        <h1 id="sr-logo" class="uk-navbar-brand">
                            <a href="#top">
                                LOGO
                            </a>
                        </h1>
                        
                        <ul id="sr-nav" class="uk-navbar-nav uk-float-right">
                            <li><a href="#about">About</a></li>
                            <li><a href="#features" >Features</a></li>
                            <li><a href="#works" >Works</a></li>
                            <li><a href="#members" >Members</a></li>
                            <li><a href="#recruiting" >Recruiting</a></li>
                            <li><a href="#contact" >Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--HEADER END-->
        
        
        
        <!--BANNER START-->
        <section id="sr-banner">
            <div id="sr-banner-inner" class="uk-grid">
                <div class="uk-container uk-container-center">
                    <div id="sr-banner-title-wrap" class="uk-width-large-5-6 uk-container-center uk-vertical-align uk-text-center">
                        
                        <div class="uk-vertical-align-middle">
                            <h1 class="sr-banner-title">
                                We are Hiring, Come Join Us!
                            </h1>
                            <h2>
                                Senior Marketing System in Taiwan
                                <!--知恩思資訊-->
                            </h2>
                            <h3>
                                Continue to create value contribution to aged society.
                                <!--Provide suitable information media for aged society -->
                                <!--提供適合高齡社會的資訊媒體，持續創造價值貢獻於社會。-->
                            </h3>
                        </div>
                        
                    </div>  
                </div>
            </div>
        </section>
        <!--BANNER END-->
        
        
        
        <!--ABOUT START-->
        <section id="about" sr-scrollspy="{repeat: true}">
            <div id="sr-about" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-1">
                        <header class="uk-text-center">
                            <h1 class="uk-heading-large">
                                About Us
                            </h1>
                            <h2 class="uk-article-lead">
                                SMS Taiwan CO. LTD.
                            </h2>
                        </header>
                        <article class="">
                            <div class="uk-width-large-2-3 uk-container-center">
                                <p class="uk-text-center">
                                    <img class="" src="images/about/sms-logo-380.png" alt="SMS" style="margin: 0 30px;"
                                        width="300" height="180"
                                        data-100="left:-300px;opacity:0;" data-500="left:0px; opacity:1;"
                                    />
                                    
                                    <img class="" src="images/about/ihealth-logo-300.png" alt="iHealth" style="margin: 0 30px;"
                                        data-100="right:-300px;opacity:0;" data-500="right:0px; opacity:1;"
                                    />
                                </p>
                                <div class="uk-grid uk-text-justify" data-500="opacity:0;" data-600="opacity:1;">
                                    <div class="uk-width-large-1-2">
                                        <p>
                                            It has survived not only five centuries, but also the leap into
                                            electronic typesetting, remaining essentially unchanged. It was popularised
                                            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker
                                            including versions of Lorem Ipsum.
                                        </p>    
                                    </div>
                                    <div class="uk-width-large-1-2">
                                        <h3>
                                            公司簡介
                                        </h3>
                                        <p>
                                            我們是知恩思資訊股份有限公司，日商 SMS 在台灣的分公司，致力於為高齡化社會中的3個領域
                                            <strong>醫療・長照・銀髮族(active senior)</strong> 和3種服務對象 <strong>企業・從業者・消費者</strong>
                                            提供所需的信息服務與平台，以此為社會長期持續創造價值。
                                        </p>
                                        <p>
                                            iHealth 是我們在台灣的服務品牌之一，也是目前的主力，主要提供長照機構與一般民眾的處方宅配，
                                            可由實體管道或網路系統上傳處方資訊，時間到後將由藥師親自配送至府上。
                                        </p>
                                        <p>
                                            隨著人類社會持續進步，少子化、高齡化與醫療人力的培訓逐漸成為未來社會的挑戰。
                                            為了下一代的醫療水準，以及高齡人口的生活品質，SMS 將努力作為重要的資訊提供橋樑，
                                            服務社會上每一個需要幫助的人們，讓人類擁有一個美好、健康的未來。
                                        </p>
                                    </div>
                                </div>
                                <hr />
                                <div data-1000="opacity:0;" data-1100="opacity:1;">
                                    <h2 class="uk-text-center">SMS Story: What is Ageing Society (高齡化社會)</h2>
                                    <p  class="uk-text-center">
                                        About our value, action and service. / 了解我們的價值，行動與服務。
                                    </p>
                                    <div id="sr-about-ppt" class="ajax-loader">
                                        <img src="images/about/ppt.png" alt="PPT" width="760" height="490" style="cursor: pointer;" />
                                    </div>  
                                </div>
                            </div>
                        </article>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--ABOUT END-->
        
        
        
        <!--FEATURES START-->
        <section id="features" class="bg-white" sr-scrollspy="{repeat: true}">
            <div id="sr-features" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-1">
                        <header class="uk-text-center">
                            <h1 class="uk-heading-large">
                                Our Features
                            </h1>
                            <h2 class="uk-article-lead">
                                World-Class Information Technology Team
                            </h2>
                        </header>
                        <article class="">
                            <?php
                                $feature_img = array(
                                    'begin'     => 400,
                                    'add'       => -50,
                                    'duration'  => -130,
                                    'current'   => 1,
                                );
                                
                                $feature_text = array(
                                    'begin'     => 350,
                                    'add'       => -100,
                                    'duration'  => -200,
                                    'current'   => 1,
                                );
                                
                                $actionStart = 'opacity:0; transform: scale(0);';
                                $actionEnd   = 'opacity:1; transform: scale(1);'
                            ?>
                            
                            <div class="uk-grid">
                                <div class="uk-width-large-1-3">
                                    <p class="uk-text-center">
                                        <img
                                            src="images/features/joomla-orange.png" width="150" height="150" alt=""
                                            data-anchor-target="#features"
                                            data-<?=$animStart($feature_img);?>-top-top="<?=$actionStart;?>"
                                            data-<?=$animEnd($feature_img);?>-top-top="<?=$actionEnd;?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?=$animStart($feature_text);?>-top-top="opacity: 0; top: 100px;"
                                        data-<?=$animEnd($feature_text);?>-top-top="opacity: 1; top: 0px;"
                                    >
                                        <h3 class="uk-text-center">
                                            專業技術
                                            <br />
                                            <small>Professional Technology</small>
                                        </h3>
                                        <p class="uk-text-justify">
                                            我們是世界級的 Joomla! CMS 與 Joomla!Framework 開發團隊，由前飛鳥工作室技術長Asika領軍，
                                            具有開發商業應用元件與網站的大量經驗，目前是國內唯一有能力在全球銷售 Joomla! 商用套件的團隊。
                                        </p>    
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3">
                                    <p class="uk-text-center">
                                        <img
                                            src="images/features/opensource-orange.png" width="150" height="150" alt=""
                                            data-anchor-target="#features"
                                            data-<?=$animStart($feature_img);?>-top-top="<?=$actionStart;?>"
                                            data-<?=$animEnd($feature_img);?>-top-top="<?=$actionEnd;?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?=$animStart($feature_text);?>-top-top="opacity: 0; top: 100px;"
                                        data-<?=$animEnd($feature_text);?>-top-top="opacity: 1; top: 0px;"
                                    >
                                        <h3 class="uk-text-center">
                                            開源精神
                                            <br />
                                            <small>Spirit of Open Source</small>
                                        </h3>
                                        <p class="uk-text-justify">
                                            我們使用 Open Source 軟體與工具進行研發，並秉持自由開源的精神，取之於斯，便應回饋於斯。
                                            我們鼓勵員工參與開源社群，分享經驗，甚至提交原始碼或發起新專案，建立工具給全世界使用。
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-3">
                                    <p class="uk-text-center">
                                        <img
                                            src="images/features/global-orange.png" width="150" height="150" alt=""
                                            data-anchor-target="#features"
                                            data-<?=$animStart($feature_img);?>-top-top="<?=$actionStart;?>"
                                            data-<?=$animEnd($feature_img);?>-top-top="<?=$actionEnd;?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?=$animStart($feature_text);?>-top-top="opacity: 0; top: 100px;"
                                        data-<?=$animEnd($feature_text);?>-top-top="opacity: 1; top: 0px;"
                                    >
                                        <h3 class="uk-text-center">
                                            國際視野
                                            <br />
                                            <small>International Vision</small>
                                        </h3>
                                        <p class="uk-text-justify">
                                            SMS 是跨國公司，而我們將成為日本總公司的大東亞 IT 作戰團隊，不只要負責各個國家系統開發與維護，
                                            將來也有機會組成跨語言、跨種族的團隊，一起改變世界，成為亞洲的醫療資訊重鎮。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div
                                id="sr-tech-wrap"
                                data-anchor-target="#features"
                                data-<?=$animStart($feature_text);?>-top-top="opacity: 0; top: 100px;"
                                data-<?=$animEnd($feature_text);?>-top-top="opacity: 1; top: 0px;"
                            >
                                <div class="uk-grid">
                                    <div class="uk-width-large-1">
                                        <p class="uk-text-center-left">
                                            除此之外，我們也涉略多種領域的技術，如 Symfony, Yii,
                                            Mootools, AngularJS 等，在這裡，您可以學到優美的開發技術與流程。
                                        </p>
                                    </div>
                                </div>
                                <div id="sr-tech" class="uk-grid">
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/php.png" alt="php"/>
                                        </p>
                                    </div>
                                    
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/mysql.png" alt="php"/>
                                        </p>
                                    </div>
                                    
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/amazon.png" alt="php"/>
                                        </p>
                                    </div>
                                    
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/azure.png" alt="php"/>
                                        </p>
                                    </div>
                                    
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/symfony.png" alt="php"/>
                                        </p>
                                    </div>
                                    
                                    <!--PHP-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/mootools.png" alt="php"/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--FEATURES END-->
        
        
        
        <!--PROJECT START-->
        <section id="works" sr-scrollspy="{repeat: true}">
            <div id="sr-works" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-1">
                        <header class="uk-text-center">
                            <h1 class="uk-heading-large">
                                What we do
                            </h1>
                            <h2 class="uk-article-lead">
                                Our Service and Products.
                            </h2>
                        </header>
                        <article class="uk-width-large-5-6 uk-container-center">
                            <?php
                                $works = array(
                                    'begin'     => 500,
                                    'add'       => 0,
                                    'duration'  => -500,
                                    'current'   => 1,
                                );
                            ?>
                            
                            <div class="uk-grid">
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="http://www.ihealth.com.tw" target="_blank">
                                        <img src="images/works/ihealth.png" alt="works">
                                    </a>
                                </div>
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="http://www.cocoyaku.com.tw/" target="_blank">
                                        <img src="images/works/cocoyaku.png" alt="works">
                                    </a>
                                </div>
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="http://www.pharmjob.com.tw/" target="_blank">
                                        <img src="images/works/pharmjob.png" alt="works">
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="http://www.bamahome.com.tw/" target="_blank">
                                        <img src="images/works/bamahome.png" alt="works">
                                    </a>
                                </div>
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="javasctipt: void(0);" target="_blank">
                                        <img src="images/works/ddi.png" alt="works">
                                    </a>
                                </div>
                                <div
                                    class="works-thumb uk-width-large-1-3"
                                >
                                    <a href="http://ext.asikart.com" target="_blank">
                                        <img src="images/works/asikart.png" alt="works">
                                    </a>
                                </div>
                            </div>
                        </article>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--PROJECT END-->
        
        
        
        <!--TEAM START-->
        <section id="members" class="bg-white" sr-scrollspy="{repeat: true}">
            <div id="sr-members" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-1">
                        <header class="uk-text-center">
                            <h1 class="uk-heading-large">
                                Members
                            </h1>
                            <h2 class="uk-article-lead">
                                A small team trying to do something big.
                            </h2>
                        </header>
                        <article>
                            <div class="uk-grid">
                                <?php
                                    $mambers = array(
                                        'begin'     => 400,
                                        'add'       => -65,
                                        'duration'  => -80,
                                        'current'   => 1,
                                    );
                                ?>
                                
                                <!--AVATAR [Johnny]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/eziospray" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/johnny-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Johnny Wang
                                        </h3>
                                        <small>
                                            CEO & Generals
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR [Infinity]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/infinity-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Infinity Lai
                                        </h3>
                                        <small>
                                            SR-ENGR & Philosopher
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR [Asika]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/eziospray" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/asika-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>Asika Simon</h3>
                                        <small>
                                            CTO & Artist
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR [Wayne]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/wayne-avatar.png" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Wayne Lin
                                        </h3>
                                        <small>
                                            Engineer & Storyteller
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR [Lucia]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/eziospray" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/lucia-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Lucia Yu
                                        </h3>
                                        <small>
                                            Special Assistant
                                        </small>
                                    </figcaption>
                                </div>
                            </div>
                            
                            <div class="uk-grid">
                                <?php
                                    $mambers = array(
                                        'begin'     => 325,
                                        'add'       => -65,
                                        'duration'  => -80,
                                        'current'   => 1,
                                    );
                                ?>
                                
                                
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Front-End Engineer
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Software Test Engineer
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Database & Software Engineer
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Product Manager
                                        </small>
                                    </figcaption>
                                </div>
                                
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?=$animStart($mambers);?>-top-top="opacity:0; right: -300px;"
                                    data-<?=$animEnd($mambers);?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption class="">
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            UI / UX Designer
                                        </small>
                                    </figcaption>
                                </div>
                                
                            </div>
                            
                        </article>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--TEAM END-->
        
        
        
        <!--RECRUIT START-->
        <section id="recruiting" sr-scrollspy="{repeat: true}">
            <div id="sr-example" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-1">
                        <header class="uk-text-center">
                            <h1 class="uk-heading-large">
                                Recruiting
                            </h1>
                            <h2 class="uk-article-lead">
                                We need you.
                            </h2>
                        </header>
                        <section id="jobs">
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2">
                                    <header>
                                        <h2>
                                            PHP Developer / PHP 後端工程師
                                        </h2>   
                                    </header>
                                    
                                    <article>
                                        <h3>工作能力需求</h3>
                                        <ul>
                                            <li>一年以上 PHP 網路系統開發經驗</li>
                                            <li>熟悉 PHP, MySQL, Ajax 與 HTML 等技術</li>
                                            <li>瞭解基本 Linux 指令</li>
                                            <li>擅於與團隊溝通，相互瞭解開發狀況</li>
                                            <li>邏輯性強，對新技術研究有熱情</li>
                                        </ul>
                                        
                                        <h3>加分技能</h3>
                                        <ul>
                                            <li>懂版本控制 Git</li>
                                            <li>瞭解 PHP 效能調校</li>
                                            <li>懂前端技術 HTML5, CSS3 等</li>
                                            <li>曾參與 Open source 專案</li>
                                            <li>擅長vps主機或雲端主機架設</li>
                                            <li>曾使用過 MVC 開發框架</li>
                                            <li>曾使用過 jQuery 以外的 JS 框架</li>
                                            <li>熟悉原生 Javascript 語言特性</li>
                                            <li>有過大流量網站維護經驗</li>
                                            <li>具備 Unit Test 單元測試經驗</li>
                                            <li>有 API 系統設計經驗</li>
                                            <li>具有英文或日文流暢溝通能力</li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="uk-width-large-1-2">
                                    <header>
                                        <h2>
                                            Front-End Engineer / 前端工程師
                                        </h2>   
                                    </header>
                                    
                                    <article>                                        
                                        <h3>工作能力需求</h3>
                                        <ul>
                                            <li>一年以上前端工程 (HTML, CSS, JS) 開發經驗</li>
                                            <li>熟悉 HTML, CSS, Javascript, JS Framework 等前端開發技術</li>
                                            <li>對 Javascript 物件導向設計能夠掌握</li>
                                            <li>對Web系統，UI 介面有基本的美感</li>
                                            <li>擅於與團隊溝通，相互瞭解開發狀況</li>
                                            <li>邏輯性強，對新技術研究有熱情</li>
                                        </ul>
                                        
                                        <h3>加分技能</h3>
                                        <ul>
                                            <li>懂版本控制 Git</li>
                                            <li>瞭解網頁執行效能調校</li>
                                            <li>懂後端技術 PHP, LAMP Server 等</li>
                                            <li>曾使用過前端框架如 Bootstrap, Pure, UIKit 等</li>
                                            <li>曾使用過模版引擎如 Smarty, Twig 等等</li>
                                            <li>曾獨立製作過CMS版型（WP, Drupal, Joomla 等）</li>
                                            <li>曾參與 Open source 專案</li>
                                            <li>曾使用過 jQuery 以外的 JS 框架，如 AngularJS, Mootools, Prototype 等</li>
                                            <li>熟悉原生 Javascript 語言特性</li>
                                            <li>熟悉 HTML5 動畫特效</li>
                                            <li>具有英文或日文流暢溝通能力</li>
                                        </ul>
                                    </article>
                                </div>
                            </div>
                            
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2">
                                    <header>
                                        <h2>
                                            PHP Test Engineer / PHP 測試工程師
                                        </h2>   
                                    </header>
                                    
                                    <article>
                                        <h3>工作能力需求</h3>
                                        <ul>
                                            <li>二年以上 PHP 網路系統開發經驗</li>
                                            <li>熟悉 PHP, MySQL, Ajax 與 HTML 等技術</li>
                                            <li>熟悉 Linux 指令</li>
                                            <li>熟悉 PHPUnit, PHPCS, Travis-CI 等等測試工具與版本佈建工具</li>
                                            <li>擅於與團隊溝通，相互瞭解開發狀況</li>
                                            <li>邏輯性強，對新技術研究有熱情</li>
                                            <li>懂版本控制 Git</li>
                                            <li>曾使用過 MVC 開發框架</li>
                                        </ul>
                                        
                                        <h3>加分技能</h3>
                                        <ul>
                                            <li>瞭解 PHP 效能調校</li>
                                            <li>懂前端技術 HTML5, CSS3 等</li>
                                            <li>曾參與 Open source 專案</li>
                                            <li>擅長vps主機或雲端主機架設</li>
                                            <li>曾使用過 jQuery 以外的 JS 框架</li>
                                            <li>熟悉原生 Javascript 語言特性</li>
                                            <li>有過大流量網站維護經驗</li>
                                            <li>有 API 系統設計經驗</li>
                                            <li>具有英文或日文流暢溝通能力</li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="uk-width-large-1-2">
                                    <header>
                                        <h2>
                                            SQL & Software Engineer / 資料庫與軟體工程師
                                        </h2>   
                                    </header>
                                    
                                    <article>                                        
                                        <h3>工作能力需求</h3>
                                        <ul>
                                            <li>二年以上 PHP 網路系統開發經驗</li>
                                            <li>熟悉 PHP, MySQL, Ajax 與 HTML 等技術</li>
                                            <li>熟悉 Linux 指令</li>
                                            <li>熟悉 MySQL 或各類 SQL 系統語法與特色，以及效能調校</li>
                                            <li>曾使用過 SQL Debug、Migrations 等工具</li>
                                            <li>曾使用過 PHP 的 ORM 或 ActiveRecord 等系統</li>
                                            <li>懂版本控制 Git</li>
                                            <li>擅於與團隊溝通，相互瞭解開發狀況</li>
                                            <li>邏輯性強，對新技術研究有熱情</li>
                                        </ul>
                                        
                                        <h3>加分技能</h3>
                                        <ul>
                                            <li>瞭解 PHP 效能調校</li>
                                            <li>懂前端技術 HTML5, CSS3 等</li>
                                            <li>曾參與 Open source 專案</li>
                                            <li>擅長vps主機或雲端主機架設</li>
                                            <li>曾使用過 MVC 開發框架</li>
                                            <li>曾使用過 jQuery 以外的 JS 框架</li>
                                            <li>熟悉原生 Javascript 語言特性</li>
                                            <li>有過大流量網站維護經驗</li>
                                            <li>具備 Unit Test 單元測試經驗</li>
                                            <li>有 API 系統設計經驗</li>
                                            <li>具有英文或日文流暢溝通能力</li>
                                        </ul>
                                    </article>
                                </div>
                            </div>
                        </section>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--RECRUIT END-->
        
        
        
        <!--CONTRACT START-->
        <section id="contact" class="bg-white" sr-scrollspy="{repeat: true}">
            <!--GOOGLE MAP-->
            <div id="contact-map">
                
            </div>
            
            <!--CONTACT BOX-->
            <div id="sr-contact" class="uk-container uk-container-center sr-container">
                <div id="sr-contact-grid" class="uk-grid">
                    <div id="sr-contact-body" class="uk-width-large-2-3"
                        data-anchor-target="#contact"
                        data-750-top-top="right: -700px;"
                        data-100-top-top="right[ease]: 0px;"
                    >
                        <header class="uk-text-left">
                            <h1 class="uk-heading-large">
                                Contact us
                            </h1>
                            <h2 class="uk-article-lead">
                                SMS Taiwan CO.,LTD. 知恩思資訊股份有限公司
                            </h2>
                        </header>
                        <article>
                            <p>
                                <i class="uk-icon-phone uk-icon-small"></i> Tel: +886-2-2756-0286 / Fax: +886-2-2760-5895
                            </p>
                            <p>
                                <i class="uk-icon-home uk-icon-small"></i> 台北市松山區南京東路五段356號15樓之1
                                <a href="http://goo.gl/2UkkNP" target="_blank"><i class="uk-icon-map-marker"></i> Google map</a>
                            </p>
                            <p>
                                <i class="uk-icon-home uk-icon-small"></i> 15F-1, 356 SEC. 5, Nan-Jing East Rd. Taipei, Taiwan 105
                                <a href="http://goo.gl/e4aD8p" target="_blank"><i class="uk-icon-map-marker"></i> Google map</a>
                            </p>
                            <p>
                                <i class="uk-icon-envelope uk-icon-small"></i> service@bm-sms.com.tw
                            </p>
                        </article>  
                    </div>
                </div>
                
            </div>
        </section>
        <!--CONTRACT END-->
        
        
        
        <!--FOOTER START-->
        <footer id="footer" class="bg-white">
            <div id="sr-footer" class="uk-container uk-container-center sr-container">
                <div class="uk-grid">
                    <div class="uk-width-large-2-5">
                            SMS Taiwan Copyright (C) SMS Consulting Service Co.,Ltd.
                    </div>
                    
                    <div class="uk-width-large-3-5 uk-text-right">
                            <a href="http://bm-sms.co.jp/" target="_blank">
                                Japan
                            </a>
                            |
                            <a href="http://cn.bm-sms.asia/" target="_blank">
                                China
                            </a>
                            |
                            <a href="http://kr.bm-sms.asia/" target="_blank">
                                Koera
                            </a>
                            |
                            <a href="http://id.bm-sms.asia/" target="_blank">
                                Indonesia
                            </a>
                            |
                            <a href="http://my.bm-sms.asia/" target="_blank">
                                Malaysia
                            </a>
                    </div>
                </div>
                
            </div>
        </footer>
        <!--FOOTER END-->
        
    </body> 
</html>