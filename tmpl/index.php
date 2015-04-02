<?php
/**
 * Part of sms-official-site project.
 *
 * @copyright  Copyright (C) 2011 - 2015 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * animationStart
 *
 * @param array &$namespace
 *
 * @return int
 */
$animationStart = function(array &$namespace)
{
	if (empty($namespace['current']))
	{
		$namespace['current'] = 1 ;
	}

	return $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']);
};

/**
 * animationEnd
 *
 * @param array &$namespace
 *
 * @return int
 */
$animationEnd = function(array &$namespace)
{
	$return = $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']) + $namespace['duration'];

	$namespace['current']++;

	return $return;
};
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"           content="width=device-width, initial-scale=1, maximum-scale=2.0">
        <meta name="keywords"           content="知恩思資訊股份有限公司, SMS台灣分部, 知恩思" />
        <meta name="generator"          content="The Time Machine" />
        <meta name="description"        content="我們是知恩思資訊股份有限公司，日商 SMS 在台灣的分公司，致力於為高齡化社會中的3個領域
                                                 醫療・長照・銀髮族(active senior) 和3種服務對象 企業・從業者・消費者
                                                 提供所需的信息服務與平台，以此為社會長期持續創造價值。" />

        <meta property="og:image"       content="http://bm-sms.com.tw/images/sms-logo-white.jpg"/>
        <meta property="og:url"         content="http://bm-sms.com.tw"/>
        <meta property="og:title"       content="SMS Taiwan 知恩思資訊股份有限公司"/>
        <meta property="og:site_name"   content="SMS Taiwan"/>
        <meta property="og:type"        content="website"/>
        <meta property="og:description" content="我們是知恩思資訊股份有限公司，日商 SMS 在台灣的分公司，致力於為高齡化社會中的3個領域
                                                 醫療・長照・銀髮族(active senior) 和3種服務對象 企業・從業者・消費者
                                                 提供所需的信息服務與平台，以此為社會長期持續創造價值。"/>

        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

        <title>SMS Taiwan 知恩思資訊資訊股份有限公司</title>

        <?php if ($debug): ?>
        <link href='http://fonts.googleapis.com/css?family=Cuprum:400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/main.css" />
        <?php else: ?>
        <link rel="stylesheet" href="css/main.min.css" />
        <?php endif; ?>

        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <?php if ($debug): ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/jquery-scrollspy.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/uikit.js"></script>
        <script src="js/gmap3.min.js"></script>
        <script src="js/main.js"></script>
        <?php else: ?>
        <script src="js/main.min.js"></script>
        <?php endif; ?>

    </head>
    <body id="top"  sr-scrollspy="{repeat: true}">
        <!--HEADER START-->
        <header id="sr-header">
            <nav id="sr-nav" class="uk-">
                <div class="uk-container uk-container-center">
                    <button id="mobile-menu-button" class="uk-button uk-visible-small uk-navbar-toggle uk-float-left" data-uk-offcanvas="{target:'#mobile-menu'}"></button>
                    <div class="ul-navbar uk-visible-small uk-navbar-center">
                        <h1 id="sr-logo" class="uk-navbar-brand">
                            <a href="#top">
                                SMS Taiwan
                            </a>
                        </h1>
                    </div>

                    <div class="ul-navbar uk-hidden-small">
                        <h1 id="sr-logo" class="uk-navbar-brand">
                            <a href="#top">
                                SMS Taiwan
                            </a>
                        </h1>

                        <ul id="sr-nav" class="uk-navbar-nav uk-float-right">
                            <li><a href="#about">About</a></li>
                            <li><a href="#features" >Features</a></li>
                            <li><a href="#works" >Works</a></li>
                            <li><a href="#members" >Members</a></li>
<?php /*
                            <li><a href="#recruiting" >Recruiting</a></li>
*/ ?>
                            <li><a href="#contact" >Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div id="mobile-menu" class="uk-offcanvas">
                    <div class="uk-offcanvas-bar">
                        <ul id="sr-nav" class="uk-nav uk-nav-offcanvas uk-nav-parent-icon">
                            <li class="uk-parent"><a href="#about" data-uk-offcanvas="{target:'#mobile-menu'}">About</a></li>
                            <li><a href="#features" >Features</a></li>
                            <li><a href="#works" >Works</a></li>
                            <li><a href="#members" >Members</a></li>
<?php /*
							<li><a href="#recruiting" >Recruiting</a></li>
*/ ?>
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
                            <h1 class="sr-banner-title" data-500-end="bottom: 2500px;" data-0-start="bottom: 0px;">
                                Create Value Contribution to Aged Society.
                            </h1>
                            <h2 data-500-end="bottom: 1700px;" data-0-start="bottom: 0px;">
                                Senior Marketing System in Taiwan
                                <!--知恩思資訊-->
                            </h2>
                            <h3 data-500-end="bottom: 1300px;" data-0-start="bottom: 0px;">
                                Provide suitable information media for aged society
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
                        <article>
                            <div class="uk-width-large-2-3 uk-container-center">
                                <p class="uk-text-center">
                                    <img src="images/about/sms-logo-380.png" alt="SMS" style="margin: 0 30px;"
                                        width="300" height="180"
                                        data-100="left:-300px;opacity:0;" data-500="left:0px; opacity:1;"
                                    />

                                    <img src="images/about/ihealth-logo-300.png" alt="iHealth" style="margin: 0 30px;"
                                        data-100="right:-300px;opacity:0;" data-500="right:0px; opacity:1;"
                                    />
                                </p>
                                <div class="uk-grid uk-text-justify" data-500="opacity:0;" data-700="opacity:1;">
                                    <div class="uk-width-large-3-5">
                                        <h3>
                                            SMS Taiwan Co. Ltd
                                        </h3>
                                        <p>
                                            We are the subsidiary of Japan listed SMS Co. Ltd in Taiwan.
                                            We dedicated elderly services to medical, long-term, and active seniors.
                                            SMS also sustainable creates value for the society and provides essential
                                            health related information platform for professions and public in Taiwan.
                                        </p>
                                        <p>
                                            Dispensing and delivery chronic diseases prescriptions to nursing homes
                                            and individual users are the mainly service in Taiwan. People are able
                                            to pass a copy or image of their prescriptions through fax, smart phone, and network service.
                                            Pharmacists will deliver medicines according to the refilling dates,
                                            assigned location and convenient time to the patients or the careers.
                                        </p>
                                        <p>
                                            Due to the human progressive society, low birth rate, aging and health manpower training
                                            has become the challenge of the future society. In order to eliminating the medical information
                                            barriers and improving the quality of life for the publics, SMS will strive to provide information
                                            as an important bridge to professionals and end users.  We are looking forward to contribute to the
                                            society continuously to make people healthier.
                                        </p>
                                    </div>
                                    <div class="uk-width-large-2-5">
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
                                <div data-1200="opacity:0;" data-1400="opacity:1;">
                                    <h2 class="uk-text-center">SMS Story: What is Aging Society (高齡化社會)</h2>
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
                        <article>
                            <?php
                                $feature_img = array(
                                    'begin'    => 400,
                                    'add'      => -50,
                                    'duration' => -130,
                                    'current'  => 1,
                                );

                                $feature_text = array(
                                    'begin'    => 350,
                                    'add'      => -100,
                                    'duration' => -150,
                                    'current'  => 1,
                                );

                                $actionStart = 'opacity:0; transform: scale(0);';
                                $actionEnd   = 'opacity:1; transform: scale(1);';
                            ?>

                            <div class="uk-grid">
                                <div class="uk-width-large-1-3">
                                    <p class="uk-text-center">
                                        <img
                                            src="images/features/joomla-orange.png" width="150" height="150" alt=""
                                            data-anchor-target="#features"
                                            data-<?php echo $animationStart($feature_img); ?>-top-top="<?php echo $actionStart; ?>"
                                            data-<?php echo $animationEnd($feature_img); ?>-top-top="<?php echo $actionEnd; ?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?php echo $animationStart($feature_text); ?>-top-top="opacity: 0; top: 100px;"
                                        data-<?php echo $animationEnd($feature_text); ?>-top-top="opacity: 1; top: 0px;"
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
                                            data-<?php echo $animationStart($feature_img); ?>-top-top="<?php echo $actionStart; ?>"
                                            data-<?php echo $animationEnd($feature_img); ?>-top-top="<?php echo $actionEnd; ?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?php echo $animationStart($feature_text); ?>-top-top="opacity: 0; top: 100px;"
                                        data-<?php echo $animationEnd($feature_text); ?>-top-top="opacity: 1; top: 0px;"
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
                                            data-<?php echo $animationStart($feature_img); ?>-top-top="<?php echo $actionStart; ?>"
                                            data-<?php echo $animationEnd($feature_img); ?>-top-top="<?php echo $actionEnd; ?>"
                                        />
                                    </p>
                                    <div
                                        class="feature-text"
                                        data-anchor-target="#features"
                                        data-<?php echo $animationStart($feature_text); ?>-top-top="opacity: 0; top: 100px;"
                                        data-<?php echo $animationEnd($feature_text); ?>-top-top="opacity: 1; top: 0px;"
                                    >
                                        <h3 class="uk-text-center">
                                            國際視野
                                            <br />
                                            <small>International Vision</small>
                                        </h3>
                                        <p class="uk-text-justify">
                                            SMS 是跨國公司，而我們將成為日本總公司的大東亞 IT 總部，不只要負責各個國家系統開發與維護，
                                            將來也有機會組成跨語言、跨種族的團隊，一起改變世界，成為亞洲的醫療資訊重鎮。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div
                                id="sr-tech-wrap"
                                data-anchor-target="#features"
                                data-<?php echo $animationStart($feature_text); ?>-top-top="opacity: 0; top: 100px;"
                                data-<?php echo $animationEnd($feature_text); ?>-top-top="opacity: 1; top: 0px;"
                            >
                                <div class="uk-grid">
                                    <div class="uk-width-large-1">
                                        <p class="uk-text-center-left">
                                            除此之外，我們也涉略多種領域的技術，如 Symfony, Yii,
                                            Mootools 等，跟進世界潮流與趨勢。
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

                                    <!--MYSQL-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/mysql.png" alt="php"/>
                                        </p>
                                    </div>

                                    <!--AMAZON-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/amazon.png" alt="php"/>
                                        </p>
                                    </div>

                                    <!--AZURE-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/azure.png" alt="php"/>
                                        </p>
                                    </div>

                                    <!--SYMFONY-->
                                    <div class="uk-width-large-1-6" data-1150="opacity:0;" data-1350="opacity:1;">
                                        <p class="uk-text-center">
                                            <img src="images/tech/symfony.png" alt="php"/>
                                        </p>
                                    </div>

                                    <!--MOOTOOLS-->
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
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.ihealth.com.tw" target="_blank">
                                        <img src="images/works/ihealth.png" alt="works">
                                    </a>
                                </div>
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.cocoyaku.com.tw/" target="_blank">
                                        <img src="images/works/cocoyaku.png" alt="works">
                                    </a>
                                </div>
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.paycare.com.tw" target="_blank">
                                        <img src="images/works/paycare.png" alt="works">
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.bamahome.com.tw/" target="_blank">
                                        <img src="images/works/bamahome.png" alt="works">
                                    </a>
                                </div>
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.ddicheck.com" target="_blank">
                                        <img src="images/works/ddi.png" alt="works">
                                    </a>
                                </div>
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.carejob.com.tw/" target="_blank">
                                        <img src="images/works/carejob-logo.png" alt="works">
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="works-thumb uk-width-large-1-3">
                                    <a href="http://www.surelife.com.tw/" target="_blank">
                                        <img src="images/works/surelife.jpg" alt="works">
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
                            <!-- Row 1 -->
                            <div class="uk-grid">
                                <?php
                                    $members = array(
                                        'begin'     => 400,
                                        'add'       => -65,
                                        'duration'  => -80,
                                        'current'   => 1,
                                    );
                                ?>

                                <!--AVATAR [Johnny]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/ihealth" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/johnny-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Johnny Wang
                                        </h3>
                                        <small>
                                            CEO & President
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Asika]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://about.asika.tw" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/asika-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>Simon Asika</h3>
                                        <small>
                                            CTO & Lead Developer
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Lucia]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/lucia.yu.98" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/lucia-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Lucia Yu
                                        </h3>
                                        <small>
                                            Special Assistant
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Pearl]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                    >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://fb.me/shihpearl" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/pearl-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Pearl Shih
                                        </h3>
                                        <small>
                                            Marketing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Peggy]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                    >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://about.me/peggylo" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/peggy-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Peggy Lo
                                        </h3>
                                        <small>
                                            Marketing
                                        </small>
                                    </figcaption>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="uk-grid">
                                <?php
                                    $members = array(
                                        'begin'     => 100,
                                        'add'       => -65,
                                        'duration'  => -80,
                                        'current'   => 1,
                                    );
                                ?>

                                <!--AVATAR [Leo]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://www.plurk.com/GourryMK2" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/leo-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Leo Tsun
                                        </h3>
                                        <small>
                                            Software Developer
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Michael]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://coding.memory-forest.com/" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/michael-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Michael Chen
                                        </h3>
                                        <small>
                                            Software Developer
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Benson]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="http://llwbenson.er-webs.com/" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/benson-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Benson Lu
                                        </h3>
                                        <small>
                                            Front-End Engineer
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [OMO]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="https://www.facebook.com/profile.php?id=100000851917870" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/omo-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Omo Lee
                                        </h3>
                                        <small>
                                            Marketing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Steven]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="https://www.facebook.com/bingsheng.chen" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/steven-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Steven Chen
                                        </h3>
                                        <small>
                                            Software developer
                                        </small>
                                    </figcaption>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="uk-grid">
                                <?php
                                    $members = array(
                                        'begin'     => -200,
                                        'add'       => -65,
                                        'duration'  => -80,
                                        'current'   => 1,
                                    );
                                ?>

                                <!--AVATAR [Di Di]-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/di-di-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Di Di
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Duo Duo]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                    >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/duo-duo-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Duo Duo
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Do Do]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/do-do-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Do Do
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Big Eye]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
								>
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/eye-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Big Eye
                                        </h3>
                                        <small>
                                            Heling
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Hua Hua]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                    >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/hua-hua-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Hua Hua
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>


<?php /*
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
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
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
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
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Front-End Engineer
                                        </small>
                                    </figcaption>
                                </div>
*/ ?>
                            </div>

                            <!-- Row 4 -->
                            <div class="uk-grid">
                                <?php
                                $members = array(
                                    'begin'     => -500,
                                    'add'       => -65,
                                    'duration'  => -80,
                                    'current'   => 1,
                                );
                                ?>

                                <!--AVATAR [La La]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/la-la-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            La La
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Larva]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/larva-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Red & Yellow
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [mao mao]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/mao-mao-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Mao Mao
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Ha Ha]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/ha-ha-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Ha Ha
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

                                <!--AVATAR [Pi Pi]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/pi-pi-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Pi Pi
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

<?php /*
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
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
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Front-End Engineer
                                        </small>
                                    </figcaption>
                                </div>
*/ ?>
                            </div>

                            <!-- Row 4 -->
                            <div class="uk-grid">
                                <?php
                                $members = array(
                                    'begin'     => -800,
                                    'add'       => -65,
                                    'duration'  => -80,
                                    'current'   => 1,
                                );
                                ?>

                                <!--AVATAR [Moritann]-->
                                <div class="member-info uk-width-large-1-5"
                                     data-anchor-target="#members"
                                     data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                     data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/moritann-avatar.jpg" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Moritann
                                        </h3>
                                        <small>
                                            Healing
                                        </small>
                                    </figcaption>
                                </div>

<?php /*
                                <!--AVATAR []-->
                                <div class="member-info uk-width-large-1-5"
                                    data-anchor-target="#members"
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
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
                                    data-<?php echo $animationStart($members); ?>-top-top="opacity:0; right: -300px;"
                                    data-<?php echo $animationEnd($members); ?>-top-top="opacity:1; right: 0px;"
                                >
                                    <figure class="uk-margin-bottom">
                                        <a href="#contact" class="uk-overlay" target="_blank">
                                            <img src="images/mambers/you.gif" alt="avatar" class="member-avatar" />
                                            <div class="uk-overlay-area"></div>
                                        </a>
                                    </figure>
                                    <figcaption>
                                        <h3>
                                            Join us!
                                        </h3>
                                        <small>
                                            Front-End Engineer
                                        </small>
                                    </figcaption>
                                </div>
*/ ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--TEAM END-->

<?php /*
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
                                Together We Can Change The World
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
                            <hr />
                            <div class="uk-grid">
                                <div class="uk-width-large-1">
                                    <h3>
                                        應徵方式
                                    </h3>
                                    <p>
                                        請備妥履歷、作品、自傳等資料，寄至 service@bm-sms.com.tw ，信件主旨請打：[應徵] 職位 - 姓名。
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </section>
        <!--RECRUIT END-->
*/ ?>

        <!--CONTRACT START-->
        <section id="contact" class="bg-white" sr-scrollspy="{repeat: true}" style="overflow: hidden;">
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
                                <i class="uk-icon-phone uk-icon-small"></i> Tel: +886-2-2756-0158 / Fax: +886-2-2742-2677
                            </p>
                            <p>
                                <i class="uk-icon-home uk-icon-small"></i> 台北市松山區基隆路一段40號10樓
                                <a href="http://goo.gl/WfLau0" target="_blank"><i class="uk-icon-map-marker"></i> Google map</a>
                            </p>
                            <p>
                                <i class="uk-icon-home uk-icon-small"></i> 10F., No.40, Sec. 1, Keelung Rd., Songshan Dist., Taipei City 10566, Taiwan (R.O.C.)
                                <a href="http://goo.gl/eb5s52" target="_blank"><i class="uk-icon-map-marker"></i> Google map</a>
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
                            Korea
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

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45319559-1', 'bm-sms.com.tw');
            ga('send', 'pageview');
        </script>
    </body>
</html>
