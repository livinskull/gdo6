<?php
namespace GDO\Core;

/**
 * Official registered gdo6 module mapping.
 * Installer can spit out repo urls for modules.
 * Some modules have multiple providers, like gdo6-session-db and gdo6-session-cookie.
 * Both provide Module_Session.
 * 
 * @TODO: Explain how to generate provider list from the huge all-in-one-dev install.
 * @TODO: make the installers use this providers to automatically install module dependencies.
 * 
 * @author gizmore
 * @version 6.10.2
 * @since 6.10.0
 */
final class ModuleProviders
{
    const GIT_PROVIDER = 'https://github.com/gizmore/';
 
    public static $PROVIDERS = [
        'Account' => 'gdo6-account',
        'ActivationAlert' => 'gdo6-activation-alert',
        'Address' => 'gdo6-address',
        'Admin' => 'gdo6-admin',
        'AmPHP' => 'gdo6-amphp',
        'Angular' => 'gdo6-angular',
        'Audio' => 'gdo6-audio',
        'Avatar' => 'gdo6-avatar',
        'Backup' => 'gdo6-backup',
        'BBCode' => 'gdo6-bbcode',
        'Birthday' => 'gdo6-birthday',
        'Blog' => 'gdo6-blog',
        'Bootstrap' => 'gdo6-bootstrap',
        'Bootstrap3' => 'gdo6-bootstrap3',
        'BootstrapTheme' => 'gdo6-bootstrap-theme',
        'Buzzerapp' => 'gdo6-buzzerapp',
        'Captcha' => ['gdo6-captcha', 'gdo6-recaptcha2'],
        'Category' => 'gdo6-category',
        'CKEditor' => 'gdo6-ckeditor',
        'Comment' => 'gdo6-comment',
        'Contact' => 'gdo6-contact',
        'CORS' => 'gdo6-cors',
        'CountryCoordinates' => 'gdo6-country-coordinates',
        'Currency' => 'gdo6-currency',
        'Dog' => 'gdo6-dog',
        'DogAuth' => 'gdo6-dog-auth',
        'DogGreetings' => 'gdo6-dog-greetings',
        'DogIRC' => 'gdo6-dog-irc',
        'DogIRCAutologin' => 'gdo6-dog-irc-autologin',
        'DogIRCSpider' => 'gdo6-dog-irc-spider',
        'DogShadowdogs' => 'gdo6-dog-shadowdogs',
        'DogTick' => 'gdo6-dog-tick',
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
        'Geo2Country' => 'gdo6-geo2country',
        'GoogleTranslate' => 'gdo6-google-translate', 
        'Guestbook' => 'gdo6-guestbook',
        'Helpdesk' => 'gdo6-helpdesk',
        'ImportGWF3' => 'gdo6-import-gwf3',
        'Instagram' => 'gdo6-instagram',
        'Invite' => 'gdo6-invite',
        'IP2Country' => 'gdo6-ip2country',
        'JPGraph' => 'gdo6-jpgraph',
        'JQuery' => 'gdo6-jquery',
        'JQueryAutocomplete' => 'gdo6-jquery-autocomplete',
        'JQueryMobile' => 'gdo6-jquery-mobile',
        'JQueryUI' => 'gdo6-jquery-ui',
        'LanguageEditor' => 'gdo6-language-editor',
        'Licenses' => 'gdo6-licenses',
        'Links' => 'gdo6-links',
        'Login' => 'gdo6-login',
        'LoginAs' => 'gdo6-login-as',
        'Logs' => 'gdo6-logs',
        'MailGPG' => 'gdo6-mail-gpg',
        'Maintenance' => 'gdo6-maintenance',
        'Maps' => 'gdo6-maps',
        'Material' => 'gdo6-material',
        'Memberlist' => 'gdo6-memberlist',
        'Mettwitze' => 'gdo6-mettwitze',
        'Mibbit' => 'gdo6-mibbit',
        'Moment' => 'gdo6-moment',
        'Nasdax' => 'gdo6-nasdax',
        'News' => 'gdo6-news',
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
        'Ranzgruppe' => 'gdo6-ranzgruppe',
        'Recovery' => 'gdo6-recovery',
        'Register' => 'gdo6-register',
        'Session' => ['gdo6-session-cookie', 'gdo-session-db'],
        'Shoutbox' => 'gdo6-shoutbox',
        'Sitemap' => 'gdo6-sitemap',
        'Slaytags' => 'gdo6-slaytags',
        'Statistics' => 'gdo6-statistics',
        'Tag' => 'gdo6-tag',
        'TCPDF' => 'gdo6-tcpdf',
        'Tests' => 'gdo6-tests',
        'ThemeSwitcher' => 'gdo6-theme-switcher',
        'TinyMCE' => 'gdo6-tinymce',
        'Usergroup' => 'gdo6-usergroup',
        'Vote' => 'gdo6-vote',
        'Websocket' => 'gdo6-websocket',
        'WeChall' => 'gdo6-wechall',
        'Whois' => 'gdo6-whois',
        'Wombat' => 'gdo6-wombat',
        'ZIP' => 'gdo6-zip',
    ];
    
}
    