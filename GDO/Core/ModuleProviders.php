<?php
namespace GDO\Core;

/**
 * Official registered gdo6 module mapping.
 * Installer can spit out repo urls for modules.
 * Some modules have multiple providers, like gdo6-session-db and gdo6-session-cookie.
 * Both provide Module_Session.
 * 
 * You can generate providers and dependenices with providers.php and provider_dependenciews.php
 * 
 * @author gizmore
 * @version 6.10.6
 * @since 6.10.0
 */
final class ModuleProviders
{
    const GIT_PROVIDER = 'https://github.com/gizmore/';

    /**
     * Get URL for a module.
     * @param string $moduleName
     * @param number $which
     * @return string
     */
    public static function getGitUrl($moduleName, $which=1)
    {
        $git = self::GIT_PROVIDER;
        $which = (int)$which;
        $providers = self::$PROVIDERS[$moduleName];
        if (is_array($providers))
        {
            if ( ($which < 1) || ($which > count($providers)) )
            {
                throw new GDOException("Invalid provider choice!");
            }
            return $git . $providers[$which-1];
        }
        return $git . $providers;
    }
    
    public static $PROVIDERS = [
    	'Account' => 'gdo6-account',
    	'ActivationAlert' => 'gdo6-activation-alert',
    	'Address' => 'gdo6-address',
    	'Admin' => 'gdo6-admin',
    	'Alcoholicers' => 'gdo6-alcoholicers',
    	'AmPHP' => 'gdo6-amphp',
    	'Angular' => 'gdo6-angular',
    	'Audio' => 'gdo6-audio',
    	'Avatar' => 'gdo6-avatar',
    	'Backup' => 'gdo6-backup',
    	'Bananas' => '',
    	'BananasChili' => '',
    	'BananasPiotr' => '',
    	'BasicAuth' => 'gdo6-basic-auth',
    	'BBCode' => 'gdo6-bbcode',
    	'Birthday' => 'gdo6-birthday',
    	'Blog' => 'gdo6-blog',
    	'Bootstrap' => 'gdo6-bootstrap',
    	'Bootstrap3' => 'gdo6-bootstrap3',
    	'Bootstrap5' => 'gdo6-bootstrap5',
    	'Bootstrap5Theme' => 'gdo6-bootstrap5-theme',
    	'BootstrapTheme' => 'gdo6-bootstrap-theme',
    	'Buzzerapp' => 'gdo6-buzzerapp',
    	'Category' => 'gdo6-category',
    	'CKEditor' => 'gdo6-ckeditor',
    	'Comment' => 'gdo6-comment',
    	'Contact' => 'gdo6-contact',
    	'CORS' => 'gdo6-cors',
    	'CountryCoordinates' => 'gdo6-country-coordinates',
    	'Cronjob' => 'gdo6-cronjob',
    	'Currency' => 'gdo6-currency',
    	'DevExtreme' => 'gdo6-dev-extreme',
    	'Diary' => 'gdo6-diary',
    	'Docs' => 'gdo6-docs',
    	'Dog' => 'gdo6-dog',
    	'DogAuth' => 'gdo6-dog-auth',
    	'DogBlackjack' => 'gdo6-dog-blackjack',
    	'DogGreetings' => 'gdo6-dog-greetings',
    	'DogIRC' => 'gdo6-dog-irc',
    	'DogIRCAutologin' => 'gdo6-dog-irc-autologin',
    	'DogIRCSpider' => 'gdo6-dog-irc-spider',
    	'DogShadowdogs' => 'gdo6-dog-shadowdogs',
    	'DogTick' => 'gdo6-dog-tick',
    	'DogWebsite' => 'gdo6-dog-website',
    	'Download' => 'gdo6-download',
    	'DSGVO' => 'gdo6-dsgvo',
    	'Facebook' => 'gdo6-facebook',
    	'Favicon' => 'gdo6-favicon',
    	'Follower' => 'gdo6-follower',
    	'FontAwesome' => 'gdo6-font-awesome',
    	'FontRoboto' => 'gdo6-font-roboto',
    	'FontTitillium' => 'gdo6-font-titillium',
    	'Forum' => 'gdo6-forum',
    	'Friends' => 'gdo6-friends',
    	'Gallery' => 'gdo6-gallery',
    	'gdo6-captcha' => 'gdo6-captcha',
    	'gdo6-recaptcha2' => 'gdo6-recaptcha2',
    	'gdo6-session-cookie' => 'gdo6-session-cookie',
    	'gdo6-session-db' => 'gdo6-session-db',
    	'Geo2Country' => 'gdo6-geo2country',
    	'GoogleTranslate' => 'gdo6-google-translate',
    	'Guestbook' => 'gdo6-guestbook',
    	'Helpdesk' => 'gdo6-helpdesk',
    	'HVSC' => 'gdo6-hvsc',
    	'ImportGWF3' => 'gdo6-import-gwf3',
    	'Instagram' => 'gdo6-instagram',
    	'Invite' => 'gdo6-invite',
    	'IP2Country' => 'gdo6-ip2country',
    	'ITMB' => 'gdo6-itmb',
    	'JPGraph' => 'gdo6-jpgraph',
    	'JQuery' => 'gdo6-jquery',
    	'JQueryAutocomplete' => 'gdo6-jquery-autocomplete',
    	'JQueryMobile' => 'gdo6-jquery-mobile',
    	'JQueryUI' => 'gdo6-jquery-ui',
    	'LanguageEditor' => 'gdo6-language-editor',
    	'Licenses' => 'gdo6-licenses',
    	'Links' => 'gdo6-links',
    	'LinkUUp' => '',
    	'LoadOnClick' => 'gdo6-load-on-click',
    	'Login' => 'gdo6-login',
    	'LoginAs' => 'gdo6-login-as',
    	'Logs' => 'gdo6-logs',
    	'MailGPG' => 'gdo6-mail-gpg',
    	'Maintenance' => 'gdo6-maintenance',
    	'Maps' => 'gdo6-maps',
    	'Markdown' => 'gdo6-markdown',
    	'Material' => 'gdo6-material',
    	'Math' => 'gdo6-math',
    	'Memberlist' => 'gdo6-memberlist',
    	'Memorized' => 'gdo6-memorized',
    	'Mettwitze' => 'gdo6-mettwitze',
    	'Mibbit' => 'gdo6-mibbit',
    	'Moment' => 'gdo6-moment',
    	'Nasdax' => 'gdo6-nasdax',
    	'News' => 'gdo6-news',
    	'Normalize' => 'gdo6-normalize',
    	'OnlineUsers' => 'gdo6-online-users',
    	'OpenTimes' => 'gdo6-opentimes',
    	'Pagecounter' => 'gdo6-pagecounter',
    	'Payment' => 'gdo6-payment',
    	'PaymentBank' => 'gdo6-payment-bank',
    	'PaymentCredits' => 'gdo6-payment-credits',
    	'PaymentPaypal' => 'gdo6-payment-paypal',
    	'PaypalDonation' => 'gdo6-paypal-donation',
    	'PhpMyAdmin' => 'gdo6-pma',
    	'PM' => 'gdo6-pm',
    	'Poll' => 'gdo6-poll',
    	'Prism' => 'gdo6-prism',
    	'Profile' => 'gdo6-profile',
    	'Push' => 'gdo6-push',
    	'Python' => 'gdo6-python',
    	'QRCode' => 'gdo6-qrcode',
    	'Quotes' => 'gdo6-quotes',
    	'RandomOrg' => 'gdo6-random-org',
    	'Ranzgruppe' => 'gdo6-ranzgruppe',
    	'Recovery' => 'gdo6-recovery',
    	'Register' => 'gdo6-register',
    	'Security' => 'gdo6-security',
    	'Sevenzip' => 'gdo6-sevenzip',
    	'Shoutbox' => 'gdo6-shoutbox',
    	'SID' => 'gdo6-sid',
    	'Sitemap' => 'gdo6-sitemap',
    	'Slaytags' => 'gdo6-slaytags',
    	'SPG' => '',
    	'SPGSparkasse' => '',
    	'Statistics' => 'gdo6-statistics',
    	'Tag' => 'gdo6-tag',
    	'TBS' => 'gdo6-tbs',
    	'TBSBBMessage' => 'gdo6-tbs-bbmessage',
    	'TCPDF' => 'gdo6-tcpdf',
    	'TestMethods' => 'gdo6-test-methods',
    	'Tests' => 'gdo6-tests',
    	'ThemeSwitcher' => 'gdo6-theme-switcher',
    	'ThreeJS' => 'gdo6-three-js',
    	'TinyMCE' => 'gdo6-tinymce',
    	'Todo' => 'gdo6-todo',
    	'Tradestation' => '',
    	'Usergroup' => 'gdo6-usergroup',
    	'Vote' => 'gdo6-vote',
    	'W3CValidator' => 'gdo6-w3c-validator',
    	'Website' => 'gdo6-website',
    	'Websocket' => 'gdo6-websocket',
    	'WeChall' => 'gdo6-wechall',
    	'Whois' => 'gdo6-whois',
    	'Wombat' => 'gdo6-wombat',
    	'ZIP' => 'gdo6-zip',
    ];
    
    public static $DEPENDENCIES = [
    	'Account' => [],
    	'ActivationAlert' => [],
    	'Address' => [],
    	'Admin' => ['Login'],
    	'AmPHP' => [],
    	'Angular' => [],
    	'Audio' => ['File', 'Birthday'],
    	'Avatar' => ['File'],
    	'Backup' => ['ZIP'],
    	'Bananas' => ['Website', 'Register', 'Login', 'Admin', 'Account', 'Recovery', 'BootstrapTheme', 'Friends', 'Backup', 'Invite', 'PaymentCredits', 'PaymentPaypal', 'PaymentBank', 'Ca
ptcha', 'BasicAuth', 'Profile', 'News', 'RandomOrg'],
    	'BananasChili' => ['Bananas'],
    	'BananasPiotr' => ['BananasChili'],
    	'BasicAuth' => [],
    	'BBCode' => [],
    	'Birthday' => ['Profile', 'Friends'],
    	'Blog' => [],
    	'Bootstrap' => ['JQuery', 'Moment'],
    	'Bootstrap3' => ['JQuery'],
    	'Bootstrap5' => [],
    	'Bootstrap5Theme' => ['Bootstrap5'],
    	'BootstrapTheme' => ['Bootstrap', 'FontAwesome', 'Moment'],
    	'Buzzerapp' => [],
    	'Captcha' => [],
    	'Category' => [],
    	'CKEditor' => ['JQuery'],
    	'Classic' => [],
    	'CLI' => [],
    	'Comment' => ['Vote', 'File'],
    	'Contact' => ['Profile'],
    	'Core' => [],
    	'CORS' => [],
    	'Country' => [],
    	'CountryCoordinates' => [],
    	'Cronjob' => [],
    	'CSS' => [],
    	'Currency' => [],
    	'Date' => [],
    	'DevExtreme' => ['JQuery', 'BootstrapTheme'],
    	'Diary' => ['Website', 'Classic', 'Contact', 'News', 'Login', 'Admin', 'Birthday'],
    	'Docs' => [],
    	'Dog' => [],
    	'DogAuth' => ['Dog'],
    	'DogBlackjack' => [],
    	'DogGreetings' => ['Dog'],
    	'DogIRC' => ['DogAuth'],
    	'DogIRCAutologin' => ['DogAuth', 'DogIRC'],
    	'DogIRCSpider' => ['DogIRC'],
    	'DogShadowdogs' => ['DogAuth'],
    	'DogTick' => ['Dog', 'DogIRC'],
    	'DogWebsite' => ['Bootstrap5Theme', 'JQuery', 'Dog', 'DogAuth', 'Login', 'Register', 'Admin', 'DogIRC', 'DogTick', 'DogShadowdogs', 'DogIRCAutologin', 'DogIRCSpider', 'DogGreetings
', 'DogBlackjack', 'News', 'PM', 'Quotes', 'Shoutbox', 'Forum', 'Links', 'Download', 'Math', 'Contact', 'Todo', 'Perf', 'Website', 'Markdown'],
    	'Download' => ['Payment'],
    	'DSGVO' => [],
    	'Facebook' => [],
    	'Favicon' => [],
    	'File' => ['Cronjob'],
    	'Follower' => [],
    	'FontAwesome' => [],
    	'FontRoboto' => [],
    	'FontTitillium' => [],
    	'Forum' => ['File'],
    	'Friends' => [],
    	'Gallery' => ['File'],
    	'Geo2Country' => ['CountryCoordinates', 'Material', 'News'],
    	'Guestbook' => ['Admin'],
    	'Helpdesk' => ['Comment'],
    	'HVSC' => ['SID', 'Sevenzip', 'Login', 'Register', 'Recovery', 'Admin'],
    	'ImportGWF3' => [],
    	'Instagram' => [],
    	'Install' => [],
    	'Invite' => [],
    	'IP2Country' => [],
    	'ITMB' => ['JQueryMobile', 'Contact', 'FontRoboto', 'News', 'Forum', 'PM', 'Login', 'Register', 'Admin', 'Account', 'Avatar', 'Perf', 'Address', 'ActivationAlert', 'Recovery', 'CKE
ditor', 'Mibbit'],
    	'Javascript' => [],
    	'JPGraph' => [],
    	'JQuery' => [],
    	'JQueryAutocomplete' => ['JQuery'],
    	'JQueryMobile' => ['JQuery'],
    	'JQueryUI' => ['JQuery'],
    	'Language' => [],
    	'Licenses' => [],
    	'Links' => ['Vote', 'Tag', 'Cronjob'],
    	'LinkUUp' => ['Account', 'Profile', 'Websocket', 'Comment', 'Login', 'Recovery', 'Register', 'Avatar', 'Gallery', 'Admin', 'Contact', 'JPGraph', 'Facebook', 'Instagram', 'OpenTimes
', 'Friends', 'Address', 'Maps', 'QRCode', 'BootstrapTheme', 'JQueryAutocomplete', 'CORS', 'JPGraph'],
    	'LoadOnClick' => [],
    	'Login' => ['Captcha'],
    	'LoginAs' => ['Login'],
    	'Logs' => [],
    	'Mail' => [],
    	'MailGPG' => [],
    	'Maintenance' => [],
    	'Maps' => [],
    	'Markdown' => ['JQuery', 'FontAwesome'],
    	'Material' => ['Angular'],
    	'Math' => [],
    	'Memberlist' => [],
    	'Memorized' => [],
    	'Mettwitze' => ['BootstrapTheme', 'Comment', 'Vote', 'Login', 'Register', 'Admin', 'Recovery', 'Account', 'Profile', 'Sitemap'],
    	'Mibbit' => [],
    	'Moment' => [],
    	'Nasdax' => [],
    	'News' => ['Comment', 'Category', 'Mail'],
    	'Normalize' => [],
    	'OnlineUsers' => [],
    	'OpenTimes' => [],
    	'Pagecounter' => [],
    	'Payment' => ['Address', 'TCPDF'],
    	'PaymentBank' => ['Payment'],
    	'PaymentCredits' => ['Payment'],
    	'PaymentPaypal' => ['Payment'],
    	'PaypalDonation' => [],
    	'Perf' => [],
    	'PHPInfo' => [],
    	'PhpMyAdmin' => [],
    	'PM' => ['Account'],
    	'Poll' => [],
    	'Prism' => [],
    	'Profile' => ['Friends'],
    	'Push' => [],
    	'Python' => [],
    	'QRCode' => [],
    	'Quotes' => ['Vote'],
    	'RandomOrg' => [],
    	'Ranzgruppe' => ['Account', 'Admin', 'Audio', 'Avatar', 'Backup', 'Captcha', 'Classic', 'Comment', 'Contact', 'Favicon', 'FontTitillium', 'Gallery', 'Guestbook', 'Invite', 'JQueryAutocomplete', 'Login', 'Memberlist', 'News', 'Perf', 'Profile', 'Recovery', 'Register', 'User', 'Vote'],
    	'Recovery' => ['Captcha'],
    	'Register' => ['Cronjob'],
    	'Security' => [],
    	'Session' => [],
    	'Sevenzip' => [],
    	'Shoutbox' => [],
    	'SID' => [],
    	'Sitemap' => [],
    	'SPG' => ['Bootstrap', 'FontRoboto', 'FontAwesome', 'DevExtreme'],
    	'SPGSparkasse' => ['SPG', 'Admin', 'Login', 'Recovery', 'Captcha', 'PaymentBank', 'News', 'Register', 'LoginAs', 'DSGVO', 'Account', 'FontAwesome', 'Backup', 'Website'],
    	'Statistics' => [],
    	'Table' => [],
    	'Tag' => [],
    	'TBS' => ['Country', 'Language', 'Contact', 'Classic', 'Forum', 'News', 'Mibbit', 'OnlineUsers', 'Profile', 'PM', 'Login', 'Register', 'Recovery', 'Admin', 'Favicon', 'FontAwesome'
    		, 'Captcha', 'JQuery', 'JQueryAutocomplete', 'TBSBBMessage', 'LoadOnClick', 'Perf', 'Statistics', 'Python', 'Forum', 'LoginAs'],
    	'TBSBBMessage' => ['BBCode'],
    	'TCPDF' => [],
    	'TestMethods' => [],
    	'Tests' => [],
    	'ThemeSwitcher' => [],
    	'ThreeJS' => [],
    	'TinyMCE' => [],
    	'Todo' => [],
    	'Tradestation' => ['Account', 'Admin'],
    	'UI' => [],
    	'User' => [],
    	'Usergroup' => [],
    	'Vote' => [],
    	'W3CValidator' => [],
    	'Website' => [],
    	'Websocket' => [],
    	'WeChall' => ['News', 'Forum', 'Download', 'Links', 'Shoutbox', 'Usergroup', 'Tag', 'Vote', 'PM', 'Mibbit', 'Classic', 'Login', 'Register', 'Admin'],
    	'ZIP' => [],
    ];
}
    