<html lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TFH933QT"></script><!-- Google tag (gtag.js) new commit 20230525 --><!-- Optimize Page Speed 16 Jan 24

    --><head><style>body {transition: opacity ease-in 0.2s; } 
    body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
    </style>
        
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TFH933QT');</script>
    <!-- End Google Tag Manager -->
        
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    
        <!-- This site is optimized with the Yoast SEO plugin v22.6 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>{{getSetting()->title}}</title>
        <meta name="description" content="Mitubishi Fuso | Truk Terbaik di Indonesia">
        <link rel="canonical" href="{{getSetting()->meta_sitename}}">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{getSetting()->meta_title}}">
        <meta property="og:description" content="{{getSetting()->meta_deskripsi}}">
        <meta property="og:url" content="{{getSetting()->meta_sitename}}">
        <meta property="og:site_name" content="{{getSetting()->meta_sitename}}">
        {{-- <meta property="article:publisher" content="https://web.facebook.com/MitsubishiFUSOIndonesia">
        <meta property="article:modified_time" content="2024-04-06T05:43:27+00:00">
        <meta property="og:image" content="https://www.ktbfuso.co.id/wp-content/uploads/2023/02/fuso-office.webp">
        <meta property="og:image:width" content="1440">
        <meta property="og:image:height" content="980">
        <meta property="og:image:type" content="image/webp">
        <meta name="twitter:card" content="summary_large_image"> --}}
        <!-- / Yoast SEO plugin. -->
    
{{--     
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="alternate" type="application/rss+xml" title="KTB Fuso » Feed" href="https://www.ktbfuso.co.id/feed/">
    <link rel="alternate" type="application/rss+xml" title="KTB Fuso » Comments Feed" href="https://www.ktbfuso.co.id/comments/feed/"> --}}
    <link rel='stylesheet' id='leaflet-styles-css'  href='wp-content/themes/miratfuso/css/leaflet4868.css?ver=0.9.4.1658254206' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-styles-css'  href='wp-content/themes/miratfuso/css/markercluster345f.css?ver=0.9.4.1657487916' type='text/css' media='all' />
<link rel='stylesheet' id='markercluster-default-styles-css'  href='wp-content/themes/miratfuso/css/markercluster-defaultc2f0.css?ver=0.9.4.1657566660' type='text/css' media='all' />
    <script>
    window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"wpemoji":"https:\/\/www.ktbfuso.co.id\/wp-includes\/js\/wp-emoji.js?ver=6.5.2","twemoji":"https:\/\/www.ktbfuso.co.id\/wp-includes\/js\/twemoji.js?ver=6.5.2"}};
    /**
     * @output wp-includes/js/wp-emoji-loader.js
     */
    
    /**
     * Emoji Settings as exported in PHP via _print_emoji_detection_script().
     * @typedef WPEmojiSettings
     * @type {object}
     * @property {?object} source
     * @property {?string} source.concatemoji
     * @property {?string} source.twemoji
     * @property {?string} source.wpemoji
     * @property {?boolean} DOMReady
     * @property {?Function} readyCallback
     */
    
    /**
     * Support tests.
     * @typedef SupportTests
     * @type {object}
     * @property {?boolean} flag
     * @property {?boolean} emoji
     */
    
    /**
     * IIFE to detect emoji support and load Twemoji if needed.
     *
     * @param {Window} window
     * @param {Document} document
     * @param {WPEmojiSettings} settings
     */
    ( function wpEmojiLoader( window, document, settings ) {
        if ( typeof Promise === 'undefined' ) {
            return;
        }
    
        var sessionStorageKey = 'wpEmojiSettingsSupports';
        var tests = [ 'flag', 'emoji' ];
    
        /**
         * Checks whether the browser supports offloading to a Worker.
         *
         * @since 6.3.0
         *
         * @private
         *
         * @returns {boolean}
         */
        function supportsWorkerOffloading() {
            return (
                typeof Worker !== 'undefined' &&
                typeof OffscreenCanvas !== 'undefined' &&
                typeof URL !== 'undefined' &&
                URL.createObjectURL &&
                typeof Blob !== 'undefined'
            );
        }
    
        /**
         * @typedef SessionSupportTests
         * @type {object}
         * @property {number} timestamp
         * @property {SupportTests} supportTests
         */
    
        /**
         * Get support tests from session.
         *
         * @since 6.3.0
         *
         * @private
         *
         * @returns {?SupportTests} Support tests, or null if not set or older than 1 week.
         */
        function getSessionSupportTests() {
            try {
                /** @type {SessionSupportTests} */
                var item = JSON.parse(
                    sessionStorage.getItem( sessionStorageKey )
                );
                if (
                    typeof item === 'object' &&
                    typeof item.timestamp === 'number' &&
                    new Date().valueOf() < item.timestamp + 604800 && // Note: Number is a week in seconds.
                    typeof item.supportTests === 'object'
                ) {
                    return item.supportTests;
                }
            } catch ( e ) {}
            return null;
        }
    
        /**
         * Persist the supports in session storage.
         *
         * @since 6.3.0
         *
         * @private
         *
         * @param {SupportTests} supportTests Support tests.
         */
        function setSessionSupportTests( supportTests ) {
            try {
                /** @type {SessionSupportTests} */
                var item = {
                    supportTests: supportTests,
                    timestamp: new Date().valueOf()
                };
    
                sessionStorage.setItem(
                    sessionStorageKey,
                    JSON.stringify( item )
                );
            } catch ( e ) {}
        }
    
        /**
         * Checks if two sets of Emoji characters render the same visually.
         *
         * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
         * scope. Everything must be passed by parameters.
         *
         * @since 4.9.0
         *
         * @private
         *
         * @param {CanvasRenderingContext2D} context 2D Context.
         * @param {string} set1 Set of Emoji to test.
         * @param {string} set2 Set of Emoji to test.
         *
         * @return {boolean} True if the two sets render the same.
         */
        function emojiSetsRenderIdentically( context, set1, set2 ) {
            // Cleanup from previous test.
            context.clearRect( 0, 0, context.canvas.width, context.canvas.height );
            context.fillText( set1, 0, 0 );
            var rendered1 = new Uint32Array(
                context.getImageData(
                    0,
                    0,
                    context.canvas.width,
                    context.canvas.height
                ).data
            );
    
            // Cleanup from previous test.
            context.clearRect( 0, 0, context.canvas.width, context.canvas.height );
            context.fillText( set2, 0, 0 );
            var rendered2 = new Uint32Array(
                context.getImageData(
                    0,
                    0,
                    context.canvas.width,
                    context.canvas.height
                ).data
            );
    
            return rendered1.every( function ( rendered2Data, index ) {
                return rendered2Data === rendered2[ index ];
            } );
        }
    
        /**
         * Determines if the browser properly renders Emoji that Twemoji can supplement.
         *
         * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
         * scope. Everything must be passed by parameters.
         *
         * @since 4.2.0
         *
         * @private
         *
         * @param {CanvasRenderingContext2D} context 2D Context.
         * @param {string} type Whether to test for support of "flag" or "emoji".
         * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
         *
         * @return {boolean} True if the browser can render emoji, false if it cannot.
         */
        function browserSupportsEmoji( context, type, emojiSetsRenderIdentically ) {
            var isIdentical;
    
            switch ( type ) {
                case 'flag':
                    /*
                     * Test for Transgender flag compatibility. Added in Unicode 13.
                     *
                     * To test for support, we try to render it, and compare the rendering to how it would look if
                     * the browser doesn't render it correctly (white flag emoji + transgender symbol).
                     */
                    isIdentical = emojiSetsRenderIdentically(
                        context,
                        '\uD83C\uDFF3\uFE0F\u200D\u26A7\uFE0F', // as a zero-width joiner sequence
                        '\uD83C\uDFF3\uFE0F\u200B\u26A7\uFE0F' // separated by a zero-width space
                    );
    
                    if ( isIdentical ) {
                        return false;
                    }
    
                    /*
                     * Test for UN flag compatibility. This is the least supported of the letter locale flags,
                     * so gives us an easy test for full support.
                     *
                     * To test for support, we try to render it, and compare the rendering to how it would look if
                     * the browser doesn't render it correctly ([U] + [N]).
                     */
                    isIdentical = emojiSetsRenderIdentically(
                        context,
                        '\uD83C\uDDFA\uD83C\uDDF3', // as the sequence of two code points
                        '\uD83C\uDDFA\u200B\uD83C\uDDF3' // as the two code points separated by a zero-width space
                    );
    
                    if ( isIdentical ) {
                        return false;
                    }
    
                    /*
                     * Test for English flag compatibility. England is a country in the United Kingdom, it
                     * does not have a two letter locale code but rather a five letter sub-division code.
                     *
                     * To test for support, we try to render it, and compare the rendering to how it would look if
                     * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
                     */
                    isIdentical = emojiSetsRenderIdentically(
                        context,
                        // as the flag sequence
                        '\uD83C\uDFF4\uDB40\uDC67\uDB40\uDC62\uDB40\uDC65\uDB40\uDC6E\uDB40\uDC67\uDB40\uDC7F',
                        // with each code point separated by a zero-width space
                        '\uD83C\uDFF4\u200B\uDB40\uDC67\u200B\uDB40\uDC62\u200B\uDB40\uDC65\u200B\uDB40\uDC6E\u200B\uDB40\uDC67\u200B\uDB40\uDC7F'
                    );
    
                    return ! isIdentical;
                case 'emoji':
                    /*
                     * Four and twenty blackbirds baked in a pie.
                     *
                     * To test for Emoji 15.0 support, try to render a new emoji: Blackbird.
                     *
                     * The Blackbird is a ZWJ sequence combining 🐦 Bird and ⬛ large black square.,
                     *
                     * 0x1F426 (\uD83D\uDC26) == Bird
                     * 0x200D == Zero-Width Joiner (ZWJ) that links the code points for the new emoji or
                     * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
                     * 0x2B1B == Large Black Square
                     *
                     * When updating this test for future Emoji releases, ensure that individual emoji that make up the
                     * sequence come from older emoji standards.
                     */
                    isIdentical = emojiSetsRenderIdentically(
                        context,
                        '\uD83D\uDC26\u200D\u2B1B', // as the zero-width joiner sequence
                        '\uD83D\uDC26\u200B\u2B1B' // separated by a zero-width space
                    );
    
                    return ! isIdentical;
            }
    
            return false;
        }
    
        /**
         * Checks emoji support tests.
         *
         * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
         * scope. Everything must be passed by parameters.
         *
         * @since 6.3.0
         *
         * @private
         *
         * @param {string[]} tests Tests.
         * @param {Function} browserSupportsEmoji Reference to browserSupportsEmoji function, needed due to minification.
         * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
         *
         * @return {SupportTests} Support tests.
         */
        function testEmojiSupports( tests, browserSupportsEmoji, emojiSetsRenderIdentically ) {
            var canvas;
            if (
                typeof WorkerGlobalScope !== 'undefined' &&
                self instanceof WorkerGlobalScope
            ) {
                canvas = new OffscreenCanvas( 300, 150 ); // Dimensions are default for HTMLCanvasElement.
            } else {
                canvas = document.createElement( 'canvas' );
            }
    
            var context = canvas.getContext( '2d', { willReadFrequently: true } );
    
            /*
             * Chrome on OS X added native emoji rendering in M41. Unfortunately,
             * it doesn't work when the font is bolder than 500 weight. So, we
             * check for bold rendering support to avoid invisible emoji in Chrome.
             */
            context.textBaseline = 'top';
            context.font = '600 32px Arial';
    
            var supports = {};
            tests.forEach( function ( test ) {
                supports[ test ] = browserSupportsEmoji( context, test, emojiSetsRenderIdentically );
            } );
            return supports;
        }
    
        /**
         * Adds a script to the head of the document.
         *
         * @ignore
         *
         * @since 4.2.0
         *
         * @param {string} src The url where the script is located.
         *
         * @return {void}
         */
        function addScript( src ) {
            var script = document.createElement( 'script' );
            script.src = src;
            script.defer = true;
            document.head.appendChild( script );
        }
    
        settings.supports = {
            everything: true,
            everythingExceptFlag: true
        };
    
        // Create a promise for DOMContentLoaded since the worker logic may finish after the event has fired.
        var domReadyPromise = new Promise( function ( resolve ) {
            document.addEventListener( 'DOMContentLoaded', resolve, {
                once: true
            } );
        } );
    
        // Obtain the emoji support from the browser, asynchronously when possible.
        new Promise( function ( resolve ) {
            var supportTests = getSessionSupportTests();
            if ( supportTests ) {
                resolve( supportTests );
                return;
            }
    
            if ( supportsWorkerOffloading() ) {
                try {
                    // Note that the functions are being passed as arguments due to minification.
                    var workerScript =
                        'postMessage(' +
                        testEmojiSupports.toString() +
                        '(' +
                        [
                            JSON.stringify( tests ),
                            browserSupportsEmoji.toString(),
                            emojiSetsRenderIdentically.toString()
                        ].join( ',' ) +
                        '));';
                    var blob = new Blob( [ workerScript ], {
                        type: 'text/javascript'
                    } );
                    var worker = new Worker( URL.createObjectURL( blob ), { name: 'wpTestEmojiSupports' } );
                    worker.onmessage = function ( event ) {
                        supportTests = event.data;
                        setSessionSupportTests( supportTests );
                        worker.terminate();
                        resolve( supportTests );
                    };
                    return;
                } catch ( e ) {}
            }
    
            supportTests = testEmojiSupports( tests, browserSupportsEmoji, emojiSetsRenderIdentically );
            setSessionSupportTests( supportTests );
            resolve( supportTests );
        } )
            // Once the browser emoji support has been obtained from the session, finalize the settings.
            .then( function ( supportTests ) {
                /*
                 * Tests the browser support for flag emojis and other emojis, and adjusts the
                 * support settings accordingly.
                 */
                for ( var test in supportTests ) {
                    settings.supports[ test ] = supportTests[ test ];
    
                    settings.supports.everything =
                        settings.supports.everything && settings.supports[ test ];
    
                    if ( 'flag' !== test ) {
                        settings.supports.everythingExceptFlag =
                            settings.supports.everythingExceptFlag &&
                            settings.supports[ test ];
                    }
                }
    
                settings.supports.everythingExceptFlag =
                    settings.supports.everythingExceptFlag &&
                    ! settings.supports.flag;
    
                // Sets DOMReady to false and assigns a ready function to settings.
                settings.DOMReady = false;
                settings.readyCallback = function () {
                    settings.DOMReady = true;
                };
            } )
            .then( function () {
                return domReadyPromise;
            } )
            .then( function () {
                // When the browser can not render everything we need to load a polyfill.
                if ( ! settings.supports.everything ) {
                    settings.readyCallback();
    
                    var src = settings.source || {};
    
                    if ( src.concatemoji ) {
                        addScript( src.concatemoji );
                    } else if ( src.wpemoji && src.twemoji ) {
                        addScript( src.twemoji );
                        addScript( src.wpemoji );
                    }
                }
            } );
    } )( window, document, window._wpemojiSettings );
    </script>
    <style id="wp-emoji-styles-inline-css">
    
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://www.ktbfuso.co.id/wp-includes/css/dist/block-library/style.css?ver=6.5.2" media="all">
    <style id="classic-theme-styles-inline-css">
    /**
     * These rules are needed for backwards compatibility.
     * They should match the button element rules in the base theme.json file.
     */
    .wp-block-button__link {
        color: #ffffff;
        background-color: #32373c;
        border-radius: 9999px; /* 100% causes an oval, but any explicit but really high value retains the pill shape. */
    
        /* This needs a low specificity so it won't override the rules from the button element if defined in theme.json. */
        box-shadow: none;
        text-decoration: none;
    
        /* The extra 2px are added to size solids the same as the outline versions.*/
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
    
        font-size: 1.125em;
    }
    
    .wp-block-file__button {
        background: #32373c;
        color: #ffffff;
        text-decoration: none;
    }
    
    </style>
    <style id="global-styles-inline-css">
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
    :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
    :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
    .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
    </style>
    <link rel="stylesheet" id="ktb_fuso-style-css" href="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1" media="all">
    <link rel="stylesheet" id="main-css" href="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2" media="all">
    <script src="https://www.ktbfuso.co.id/wp-includes/js/jquery/jquery.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://www.ktbfuso.co.id/wp-includes/js/jquery/jquery-migrate.js?ver=3.4.1" id="jquery-migrate-js"></script>
    
    <!-- Google Analytics snippet added by Site Kit -->
    {{-- <script src="https://www.googletagmanager.com/gtag/js?id=GT-WBTXWSX" id="google_gtagjs-js" async=""></script>
    <script id="google_gtagjs-js-after">
    window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
    gtag('set', 'linker', {"domains":["www.ktbfuso.co.id"]} );
    gtag("js", new Date());
    gtag("set", "developer_id.dZTNiMT", true);
    gtag("config", "GT-WBTXWSX");
    </script> --}}
    
    <!-- End Google Analytics snippet added by Site Kit -->
    {{-- <link rel="https://api.w.org/" href="https://www.ktbfuso.co.id/wp-json/"><link rel="alternate" type="application/json" href="https://www.ktbfuso.co.id/wp-json/wp/v2/pages/6"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.ktbfuso.co.id/xmlrpc.php?rsd"> --}}
    <meta name="generator" content="WordPress 6.5.2">
    <link rel="shortlink" href="{{getSetting()->meta_sitename}}">
    {{-- <link rel="alternate" type="application/json+oembed" href="https://www.ktbfuso.co.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.ktbfuso.co.id%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://www.ktbfuso.co.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.ktbfuso.co.id%2F&amp;format=xml">
    <meta name="generator" content="Site Kit by Google 1.120.0"><link rel="icon" href="https://www.ktbfuso.co.id/wp-content/uploads/2024/02/cropped-FUSO_1_Square-1-32x32.webp" sizes="32x32"> --}}
    <link rel="icon" href="{{asset(getSetting()->favicon)}}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{asset(getSetting()->favicon)}}">
    <meta name="msapplication-TileImage" content="{{asset(getSetting()->favicon)}}">
        <style>
            .ourserv__col .services_modal {
                text-decoration: none;
            }
            .ourserv__content-figure {
              display: flex;
              height: 155px;
              align-items: center;
            }
            .footer__menu-custom {
                list-style: none;
                padding-left: 0;
            }
            .footer__menu-custom li:not(:last-child) {
                padding-bottom: 15px;
            }
            .footer__menu-custom li a {
                display: inline-block;
            }
            @media screen and (min-width: 800px) {
                .modal-dialog {
                    max-width: 750px;
                }
            }
            @media screen and (max-width: 767px) {
                .footer__menu-custom {
                    display: flex;
                    flex-wrap: wrap;
                }  
                .footer__menu-custom li {
                    width: 50%;
                }
            }
    
            .abouts .director {
                background-color: #f5f5f5;
                padding-top: 4rem;
            }
            .rm-bod-list {
                background-color: #ffffff;
                margin-bottom: 30px;
            }
            .rm-bod-list figure {
                margin-bottom: 0;
            }
            .rm-bod-content {
                border: 1px solid #cecece;
                padding: 20px;
            }
            .rm-bod-content h3 {
                font-size: 16px;
                margin-bottom: 0.25rem;
            }
            .rm-bod-content p {
                margin-bottom: 0;
                font-size: 14px;
            }
            @media screen and (max-width: 767px) {
                .abouts .director {
                    padding-top: 2rem;
                    padding-bottom: 1rem;
                }
                .rm-bod-list {
                    margin-bottom: 20px;
                }
            }
    
            /*dealer*/
            .mr-sort-dealer {
                position: relative;
                display: flex;
                align-items: center;
                max-width: 300px;
                margin-left: auto;
            }
            .mr-sort-dealer::after {
                content: '';
                width: 0; 
                height: 0; 
                border-left: 7px solid transparent;
                border-right: 7px solid transparent;
                border-top: 8px solid #000;
                position: absolute;
                right: 15px;
                top: 19px;
            }
            .mr-sort-dealer label {
                font-weight: 600;
                white-space: nowrap;
            }
            .mr-sort-dealer select {
                padding: 10px;
            }
            @media screen and (max-width: 767px) {
                .mr-sort-dealer {
                    max-width: 100%;
                    margin-top: 1.5rem;
                }
    
            }
    
            /* News */
            .rm-mobile-only {
              display: none;
            }
            .news__sidebar-panel {
                max-width: 416px;
            }
            .news__sidebar-panel h4 {
              font-weight: 700;
              margin-bottom: 1rem;
            }
            .news__sidebar-inner {
                background-color: #fff;
                border: 1px solid #eaeaea;
            }
            .news__sidebar-list {
                padding: 10px;
            }
            .news__sidebar-list:not(:last-child) {
                border-bottom: 1px solid #eaeaea;
            }
            .news__sidebar-list strong {
                display: inline-block;
                font-size: 14px;
                line-height: 1;
                margin-bottom: .4rem
            }
            .news__sidebar-list h5 {
                font-weight: 500;
                font-size: 13px;
                line-height: 1.46;
                margin: 0;
                text-overflow: ellipsis;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
            }
            .news__sidebar-list h5 a {
                color: #000;
                text-decoration: none;
                transition: .3s ease-in-out;
            }
            .news__sidebar-list h5 a:hover {
                color: #fe5e00;
            }
            .news__sidebar-view {
              margin-top: 1.25rem;
            }
            .news__sidebar-view a {
              font-weight: 700;
              color: #fe5e00;
              text-decoration: none;
            }
            @media screen and (max-width: 767px) {
              .news__sidebar-panel {
                position: static !important;
                height: 100% !important;
                max-width: 100% !important;
              }
              .rm-desktop-only {
                display: none;
              }
              .rm-mobile-only {
                display: block;
              }
            }
    
            /*Sparepart*/
            .rm-gallery {
              border-top: 1px solid #323232;
              padding-top: 70px;
              margin-top: 20px;
            }
            .rm-gallery__cat {
              padding-left: 0;
              display: flex;
              list-style: none;
              margin-top: 1.75rem;
              margin-bottom: 2.5rem;
              padding-bottom: 1rem;
              overflow-y: hidden;
            }
            .rm-gallery__cat li a {
              margin-right: 15px;
              white-space: nowrap;
            }
            .mr-gallery__pannel {
              margin-left: -8px;
              margin-right: -8px;
            }
            .mr-gallery__list {
              flex: 0 0 auto;
              width: 20%;
              padding-left: 8px;
              padding-right: 8px;
              padding-bottom: 16px;
            }
            .mr-gallery__inner {
              display: block;
              height: 100%;
              border: 1px solid #eaeaea;
              text-decoration: none;
            }
            .mr-gallery__content {
              position: relative;
              padding: 12px 15px 15px;
            }
            .mr-gallery__content span {
              font-weight: 700;
              display: inline-block;
              font-size: 14px;
              color: #fe5e00;
              margin-bottom: 0.5rem;
            }
            .mr-gallery__content h3 {
              font-size: 16px;
              line-height: 1.46;
              margin-bottom: 0;
            }
            .mr-gallery__content p {
              font-size: 14px;
              font-weight: 500;
              margin-top: .5rem;
              margin-bottom: 0;
              color: #333;
            }
            .mr-gallery__content svg {
              position: absolute;
              right: 15px;
              bottom: 15px;
            }
            .mr-gallery__inner:hover .mr-gallery__content svg {
              fill: #fe5e00;
            }
            @media screen and (max-width: 767px) {
              .rm-gallery {
                padding-top: 50px;
              }
              .mr-gallery__list {
                width: 50%;
              }
              .mr-gallery__content span {
                font-size: 12px;
                margin-bottom: 0.25rem;
              }
              .mr-gallery__content h3 {
                font-size: 14px;
              }
              .mr-gallery__content p {
                font-size: 12px;
              }
            }
            
            /* 20230727_184355 */
            /* Telematics */
            .fitur-bengkel {
              background-color: #333;
              color: #fff;
            }
            .fitur-bengkel h2 {
              color: #fff;
            }
            .fitur-bengkel figure {
              max-width: 600px;
              margin-left: auto;
              margin-right: auto;
            }
            .manfaat-bengkel {
              padding-bottom: 0;
            }
    
            @media screen and (min-width: 992px) {
              .fitur-bengkel .section__title--half {
                width: 60%;
              }
            }
    
            @media screen and (max-width: 767px) {
              .section__title.telematic {
                text-align: center
              }
            }
    
            
            /* Aplikasi Runner */
            .variant.runner {
              background-color: #fff;
              color: black;
            }
            ul li a {
                color: inherit;
                text-decoration: none;
            }
            .current,
            .current p {
                color: #fe5e00;
            }
            .runner-feature-menu-title {
                font-weight: 700;
                font-size: 14px !important;
            }
            .runner-feature-menu-mobile {
                border: 1px solid #D9D9D9;
                padding: 17px 10px 5px 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .runner-feature-title {
                font-size: 18px;
                color: black;
                font-weight: 800;
            }
            .border-removed {
                border: none !important; 
            }
            @media screen and (max-width: 767px) {
                .runner-feature-menu-title {
                    font-size: 9px !important;
                }
                .runner-feature-title {
                    font-weight: 700;
                }
            }
    
        /*10.10 update*/
        .product-details .other .other__wrapper {
          justify-content: center;
          min-height: 340px;
        }
        .product-details .other .other__wrapper img {
          margin-bottom: 80px;
        }
        .product-details .other .other__wrapper a {
          position: absolute;
          width: 100%;
          left: 0;
          padding: 25px;
          bottom: 0;
        }
            @media screen and (max-width: 767px) {
          .product-details .other .other__wrapper img {
            margin-bottom: 50px;
          }
            }
    
        /*MyFUSO*/
        .download__myfuso a {
          font-size: 24px;
        }
        .download__myfuso-google a {
          max-width: 250px;
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        </style>
        
    <script src="https://www.ktbfuso.co.id/wp-includes/js/twemoji.js?ver=6.5.2" defer=""></script><script src="https://www.ktbfuso.co.id/wp-includes/js/wp-emoji.js?ver=6.5.2" defer=""></script><style type="text/css" data-asas-style="">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }</style><style type="text/css" data-asas-style="">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }</style></head><body>?&gt;
        <link rel="shortcut icon" href="{{asset(getSetting()->favicon)}}" type="image/x-icon">
        {{-- <meta name="google-site-verification" content="8DKnnMQAKkeFJaapvM6Syc1zgaIaxvBsfqzbIc8NzWY"> --}}
        <!-- Added on Tue 25 Jan 2024 to have clickable breadcrumbs on product post -->
            
    
    
        
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFH933QT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) --> 
        
        
    <header id="header" class="header fixed-top">
        <div class="header__top py-3">
            <div class="container">
                <div class="header__top--content">
                    <span>
                        MITSUBISHI FUSO authorized dealer
                    </span>
                    <div class="header__top--socmed only__desktop">
                        <a href="{{getSetting()->facebook}}" class="socmed__link" target="_blank" aria-label="Facebook KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.93005 13.9981V8.53411H10.7734L11.0474 6.39478H8.93005V5.03211C8.93005 4.41478 9.10205 3.99211 9.98805 3.99211H11.1107V2.08478C10.5645 2.02624 10.0154 1.99797 9.46605 2.00011C7.83672 2.00011 6.71805 2.99478 6.71805 4.82078V6.39078H4.88672V8.53011H6.72205V13.9981H8.93005Z" fill="white"></path>
    </svg>
                        </a>
                        <a href="{{getSetting()->twitter}}" class="socmed__link" target="_blank" aria-label="Tiktok KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 449.45 515.38"><path fill="white" fill-rule="nonzero" d="M382.31 103.3c-27.76-18.1-47.79-47.07-54.04-80.82-1.35-7.29-2.1-14.8-2.1-22.48h-88.6l-.15 355.09c-1.48 39.77-34.21 71.68-74.33 71.68-12.47 0-24.21-3.11-34.55-8.56-23.71-12.47-39.94-37.32-39.94-65.91 0-41.07 33.42-74.49 74.48-74.49 7.67 0 15.02 1.27 21.97 3.44V190.8c-7.2-.99-14.51-1.59-21.97-1.59C73.16 189.21 0 262.36 0 352.3c0 55.17 27.56 104 69.63 133.52 26.48 18.61 58.71 29.56 93.46 29.56 89.93 0 163.08-73.16 163.08-163.08V172.23c34.75 24.94 77.33 39.64 123.28 39.64v-88.61c-24.75 0-47.8-7.35-67.14-19.96z"/></svg>
                        </a>
                        <a href="{{getSetting()->instagram}}" class="socmed__link" target="_blank" aria-label="Instagram KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_408_2377)">
    <path d="M9.95705 0.376274C10.6337 0.407385 11.1015 0.506829 11.5337 0.674607C11.9435 0.827835 12.3146 1.06949 12.6204 1.38238C12.9333 1.68821 13.1749 2.05923 13.3282 2.46905C13.4959 2.90183 13.5954 3.36905 13.6265 4.04572C13.6648 4.88461 13.6693 5.18016 13.6693 7.00016C13.6693 8.82016 13.6648 9.11572 13.6265 9.95461C13.5954 10.6313 13.4959 11.0991 13.3282 11.5318C13.1749 11.9415 12.9332 12.3123 12.6204 12.6179C12.3146 12.9308 11.9435 13.1725 11.5337 13.3257C11.1009 13.4935 10.6337 13.5929 9.95705 13.6241C9.11816 13.6624 8.82316 13.6668 7.0026 13.6668C5.18205 13.6668 4.88649 13.6624 4.04816 13.6241C3.37149 13.5929 2.90372 13.4935 2.47094 13.3257C2.06131 13.1724 1.69048 12.9308 1.38483 12.6179C1.07193 12.3121 0.830277 11.9411 0.677049 11.5313C0.509271 11.0985 0.409826 10.6313 0.378715 9.95461C0.340382 9.11683 0.335938 8.82127 0.335938 7.00016C0.335938 5.17961 0.340382 4.8835 0.378715 4.04572C0.409826 3.36905 0.509271 2.90127 0.677049 2.46905C0.830277 2.05923 1.07193 1.68821 1.38483 1.38238C1.69049 1.06956 2.06132 0.827908 2.47094 0.674607C2.90427 0.506829 3.37149 0.407385 4.04816 0.376274C4.88594 0.337941 5.18149 0.333496 7.0026 0.333496C8.82316 0.333496 9.11927 0.337941 9.95705 0.376274ZM7.0026 1.81516C5.2026 1.81516 4.92705 1.81905 4.11538 1.85627C3.60038 1.87961 3.29149 1.94516 3.0076 2.05572C2.76594 2.15016 2.61205 2.25016 2.43205 2.42961C2.25205 2.60961 2.15205 2.7635 2.05816 3.00516C1.94816 3.2885 1.88205 3.59794 1.85872 4.11294C1.82149 4.92461 1.8176 5.20016 1.8176 7.00016C1.8176 8.80016 1.82149 9.07572 1.85872 9.88738C1.88205 10.4024 1.9476 10.7113 2.05816 10.9946C2.1526 11.2368 2.2526 11.3907 2.43205 11.5707C2.61205 11.7507 2.76594 11.8507 3.0076 11.9446C3.29094 12.0546 3.60038 12.1207 4.11538 12.1441C4.9276 12.1813 5.20316 12.1852 7.0026 12.1852C8.8026 12.1852 9.0776 12.1813 9.88983 12.1441C10.4048 12.1207 10.7137 12.0552 10.9976 11.9446C11.2393 11.8502 11.3932 11.7502 11.5732 11.5707C11.7532 11.3907 11.8532 11.2368 11.947 10.9952C12.057 10.7118 12.1232 10.4024 12.1465 9.88738C12.1837 9.07516 12.1876 8.79961 12.1876 7.00016C12.1876 5.20072 12.1837 4.92516 12.1465 4.11294C12.1232 3.59794 12.0576 3.28905 11.947 3.00572C11.8685 2.78743 11.7405 2.59026 11.5732 2.42961C11.4125 2.26222 11.2153 2.13426 10.997 2.05572C10.7137 1.94572 10.4043 1.87961 9.88927 1.85627C9.0776 1.81905 8.80205 1.81516 7.00205 1.81516H7.0026ZM7.0026 10.4568C6.08584 10.4568 5.20662 10.0926 4.55837 9.44439C3.91012 8.79614 3.54594 7.91693 3.54594 7.00016C3.54594 6.0834 3.91012 5.20418 4.55837 4.55593C5.20662 3.90768 6.08584 3.5435 7.0026 3.5435C7.91937 3.5435 8.79858 3.90768 9.44684 4.55593C10.0951 5.20418 10.4593 6.0834 10.4593 7.00016C10.4593 7.91693 10.0951 8.79614 9.44684 9.44439C8.79858 10.0926 7.91937 10.4568 7.0026 10.4568ZM7.0026 8.97572C7.52655 8.97572 8.02904 8.76758 8.39953 8.39709C8.77002 8.0266 8.97816 7.52411 8.97816 7.00016C8.97816 6.47621 8.77002 5.97372 8.39953 5.60323C8.02904 5.23275 7.52655 5.02461 7.0026 5.02461C6.47865 5.02461 5.97616 5.23275 5.60567 5.60323C5.23519 5.97372 5.02705 6.47621 5.02705 7.00016C5.02705 7.52411 5.23519 8.0266 5.60567 8.39709C5.97616 8.76758 6.47865 8.97572 7.0026 8.97572ZM10.4593 4.28405C10.2628 4.28405 10.0744 4.206 9.93542 4.06707C9.79649 3.92813 9.71844 3.7397 9.71844 3.54322C9.71844 3.34674 9.79649 3.1583 9.93542 3.01937C10.0744 2.88044 10.2628 2.80238 10.4593 2.80238C10.6558 2.80238 10.8442 2.88044 10.9831 3.01937C11.1221 3.1583 11.2001 3.34674 11.2001 3.54322C11.2001 3.7397 11.1221 3.92813 10.9831 4.06707C10.8442 4.206 10.6558 4.28405 10.4593 4.28405Z" fill="white"></path>
    </g>
    <defs>
    <clipPath id="clip0_408_2377">
    <rect width="13.3333" height="13.3333" fill="white" transform="translate(0.335938 0.333496)"></rect>
    </clipPath>
    </defs>
    </svg>
                        </a>
                        <a href="{{getSetting()->youtube}}" class="socmed__link" target="_blank" aria-label="Youtube KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.8693 4.38174C12.7996 4.12203 12.6629 3.88518 12.4728 3.69491C12.2828 3.50464 12.0461 3.36762 11.7865 3.29756C10.8309 3.04053 7 3.04053 7 3.04053C7 3.04053 3.16914 3.04053 2.21348 3.29619C1.95374 3.36603 1.71695 3.50297 1.52688 3.69328C1.33682 3.88358 1.20017 4.12055 1.13066 4.38037C0.875 5.3374 0.875 7.3335 0.875 7.3335C0.875 7.3335 0.875 9.32959 1.13066 10.2853C1.27148 10.813 1.68711 11.2286 2.21348 11.3694C3.16914 11.6265 7 11.6265 7 11.6265C7 11.6265 10.8309 11.6265 11.7865 11.3694C12.3143 11.2286 12.7285 10.813 12.8693 10.2853C13.125 9.32959 13.125 7.3335 13.125 7.3335C13.125 7.3335 13.125 5.3374 12.8693 4.38174ZM5.7832 9.16553V5.50146L8.95508 7.31982L5.7832 9.16553Z" fill="white"></path>
    </svg>
                        </a>
                        <a href="{{getSetting()->linkedin}}" class="socmed__link" target="_blank" aria-label="LinkedIn KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.535937 11.3332H2.53594V3.93317H0.535937V11.3332ZM1.53594 0.666504C0.869271 0.666504 0.335938 1.19984 0.335938 1.8665C0.335938 2.53317 0.869271 3.0665 1.53594 3.0665C2.2026 3.0665 2.73594 2.53317 2.73594 1.8665C2.73594 1.19984 2.2026 0.666504 1.53594 0.666504ZM5.93594 5.0665V3.93317H3.93594V11.3332H5.93594V7.53317C5.93594 5.39984 8.66927 5.2665 8.66927 7.53317V11.3332H10.6693V6.79984C10.6693 3.19984 6.86927 3.33317 5.93594 5.0665Z" fill="white"></path>
    </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="header__mobile only__mobile">
            <a href="/" class="btn btn__mobile active" data-wpel-link="internal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_510_378)">
    <path d="M12 3L3 10.4985V21H8.9985V15H15V21H20.9985V10.4985L12 3Z" fill="#7E7E7E"></path>
    </g>
    <defs>
    <clipPath id="clip0_510_378">
    <rect width="24" height="24" fill="white"></rect>
    </clipPath>
    </defs>
    </svg>
                Beranda
            </a>
            <a href="https://www.ktbfuso.co.id#type" class="btn btn__mobile ">
                <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.05428 0.89502C1.83344 0.89502 0.84375 1.88471 0.84375 3.10555V16.9234H3.52649C3.56107 15.1017 5.04864 13.6356 6.87865 13.6356C8.70866 13.6356 10.1962 15.1017 10.2308 16.9234H19.5436V3.10555C19.5436 1.88471 18.5539 0.89502 17.3331 0.89502H3.05428Z" fill="#7E7E7E"></path>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3235 16.9883L28.0002 16.9883V8.34663C28.0002 8.00555 27.8428 7.68358 27.5735 7.47419L24.372 4.98411C23.79 4.53142 23.0737 4.28564 22.3363 4.28564H18.9478V16.9883L19.618 16.9883C19.618 15.1367 21.1191 13.6356 22.9708 13.6356C24.8225 13.6356 26.3235 15.1367 26.3235 16.9883ZM20.7749 8.70373V6.23782H22.7271L25.8095 8.70373H20.7749Z" fill="#7E7E7E"></path>
    <circle cx="6.87714" cy="16.9882" r="2.01166" fill="#7E7E7E"></circle>
    <circle cx="22.9716" cy="16.9882" r="2.01166" fill="#7E7E7E"></circle>
    </svg>
                Produk
            </a>
            <a href="/dealer" class="btn btn__mobile ">
                <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.18182 5.97015C6.8961 5.97015 5.84416 7.04478 5.84416 8.35821C5.84416 9.67164 6.8961 10.7463 8.18182 10.7463C9.46753 10.7463 10.5195 9.67164 10.5195 8.35821C10.5195 7.04478 9.46753 5.97015 8.18182 5.97015ZM8.18182 0C12.0039 0 16.3636 2.93731 16.3636 8.53731C16.3636 12.0955 13.874 15.8448 8.8948 19.7493C8.47402 20.0836 7.88961 20.0836 7.46883 19.7493C2.48961 15.8328 0 12.0955 0 8.53731C0 2.93731 4.35974 0 8.18182 0Z" fill="#7E7E7E"></path>
    </svg>
                Dealer
            </a>
            <a href="/contact-us" class="btn btn__mobile ">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.9782 14.7675L15.5182 13.2275C15.7256 13.0227 15.9881 12.8825 16.2736 12.8239C16.5592 12.7653 16.8557 12.7909 17.127 12.8975L19.0038 13.6469C19.278 13.7582 19.5131 13.9482 19.6795 14.1928C19.8459 14.4375 19.9361 14.726 19.9388 15.0219V18.4594C19.9372 18.6607 19.8949 18.8596 19.8145 19.0441C19.734 19.2286 19.617 19.3949 19.4705 19.533C19.3241 19.6711 19.1512 19.7781 18.9623 19.8476C18.7734 19.9172 18.5724 19.9477 18.3713 19.9375C5.21947 19.1194 2.56572 7.9819 2.06384 3.7194C2.04055 3.51008 2.06183 3.2982 2.1263 3.0977C2.19077 2.8972 2.29696 2.71262 2.43789 2.55611C2.57882 2.3996 2.75129 2.27469 2.94395 2.18962C3.13662 2.10455 3.34511 2.06124 3.55572 2.06253H6.87634C7.17266 2.06341 7.46194 2.15291 7.70698 2.31954C7.95201 2.48616 8.1416 2.72228 8.25134 2.99753L9.00072 4.8744C9.11089 5.14464 9.139 5.44134 9.08153 5.72746C9.02406 6.01358 8.88357 6.27642 8.67759 6.48315L7.13759 8.02315C7.13759 8.02315 8.02447 14.025 13.9782 14.7675Z" fill="#7E7E7E"></path>
    </svg>
                Hubungi
            </a>
            <a href="#" class="btn btn__mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg width="26" height="6" viewBox="0 0 26 6" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3ZM16 3C16 4.65685 14.6569 6 13 6C11.3431 6 10 4.65685 10 3C10 1.34315 11.3431 0 13 0C14.6569 0 16 1.34315 16 3ZM23 6C24.6569 6 26 4.65685 26 3C26 1.34315 24.6569 0 23 0C21.3431 0 20 1.34315 20 3C20 4.65685 21.3431 6 23 6Z" fill="#7E7E7E"></path>
    </svg>
                Lainnya
            </a>
        </div>
    
        <nav class="navbar navbar-expand-lg py-2">
            <div class="container">
                <a class="navbar-brand" href="/" data-wpel-link="internal">
                    <img src="{{asset(getSetting()->icon)}}" alt="Logo Fuso">
                    <img src="{{asset(getSetting()->icon2)}}" alt="Logo KTB">
                </a>
    
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item d-md-none">
                                <a class="nav-link active" aria-current="page" href="/" data-wpel-link="internal">Beranda</a>
                            </li>
    
                            <li id="navProduct" class="nav-item dropdown only__desktop">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Produk
                                </a>
    
                                <ul class="dropdown-menu">
        <li>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="filter-menu">
                            <li class="current" data-target="light">
                                <a href="/fuso/light-duty" data-wpel-link="internal">
                                    Light Duty
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
    <path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
    </svg>
                                </a>
    
                            </li>
                            <li data-target="medium">
                                <a href="/fuso/medium-duty" data-wpel-link="internal">
                                    Medium Duty
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
    <path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
    </svg>
                                </a>
                            </li>
                            <li data-target="tractor">
                                <a href="/fuso/tractor-head" data-wpel-link="internal">
                                    Tractor Head
                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28409 7.3403L6.28509 7.3413L7.34193 6.28444L2.05772 1.00012L1.00087 2.05698L5.22725 6.28344L0.998535 10.512L2.05541 11.5688L6.28409 7.3403Z" fill="white"></path>
    <path d="M6.28509 7.3413L5.93153 7.69485L6.28509 8.04841L6.63864 7.69485L6.28509 7.3413ZM6.28409 7.3403L6.63764 6.98675L6.2841 6.6332L5.93054 6.98674L6.28409 7.3403ZM7.34193 6.28444L7.69549 6.63799L8.04903 6.28444L7.69549 5.93089L7.34193 6.28444ZM2.05772 1.00012L2.41127 0.646572L2.05772 0.293009L1.70416 0.646572L2.05772 1.00012ZM1.00087 2.05698L0.647317 1.70343L0.293774 2.05698L0.647317 2.41053L1.00087 2.05698ZM5.22725 6.28344L5.58079 6.637L5.93436 6.28345L5.5808 5.92989L5.22725 6.28344ZM0.998535 10.512L0.644989 10.1584L0.291415 10.512L0.644989 10.8656L0.998535 10.512ZM2.05541 11.5688L1.70186 11.9224L2.05541 12.2759L2.40895 11.9224L2.05541 11.5688ZM6.63864 6.98775L6.63764 6.98675L5.93054 7.69386L5.93153 7.69485L6.63864 6.98775ZM6.98837 5.93089L5.93153 6.98775L6.63864 7.69485L7.69549 6.63799L6.98837 5.93089ZM1.70416 1.35367L6.98837 6.63799L7.69549 5.93089L2.41127 0.646572L1.70416 1.35367ZM1.35443 2.41053L2.41127 1.35367L1.70416 0.646572L0.647317 1.70343L1.35443 2.41053ZM5.5808 5.92989L1.35443 1.70343L0.647317 2.41053L4.87369 6.63699L5.5808 5.92989ZM1.35208 10.8656L5.58079 6.637L4.8737 5.92988L0.644989 10.1584L1.35208 10.8656ZM2.40895 11.2153L1.35208 10.1584L0.644989 10.8656L1.70186 11.9224L2.40895 11.2153ZM5.93054 6.98674L1.70186 11.2153L2.40895 11.9224L6.63764 7.69386L5.93054 6.98674Z" fill="white"></path>
    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10">
                        <div class="filter-item">
                            <div class="active" data-item="light">
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-economical.webp" alt="Economical">
                                            Economical
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(1,'Super Economial') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse                                                                                           
                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-power.webp" alt="Power">
                                            Power
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">

                                            @forelse (getLineup(1,'Super Power') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                                                                                                                            
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-speed.webp" alt="Speed">
                                            Speed
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(1,'Super Speed') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                                
                                            
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-capacity.webp" alt="Capacity">
                                            Capacity
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(1,'Super Capacity') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                                
                                            
    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-bus.webp" alt="Bus">
                                            Bus
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                              
                                            @forelse (getLineup(1,'Bus') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                                
                                            
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-item="medium">
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-4x2.webp" alt="4x2">
                                            4 x 2
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">

                                            @forelse (getLineup(2,'4x2') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-6x2.webp" alt="6x2">
                                            6 x 2
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(2,'6x2') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-6x4.webp" alt="6x4">
                                            6 x 4
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(2,'6x4') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-item="tractor">
                                <div class="row">
                                    <div class="col-lg-2 filter-type">
                                        <p>
                                            <img src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/public/assets/img/produk/logo-6x4a.webp" alt="6x4">
                                            6 x 4
                                        </p>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row filter-img">
                                            @forelse (getLineup(3,'Super Power') as $item)

                                            <div class="col-lg-3 filter-img-col">
                                                <img src="{{asset($item->thumbnail)}}" alt="{{$item->nama}}">
                                                <a href="/fuso/{{$item->kategori}}/{{$item->slug}}" class="stretched-link" data-wpel-link="internal">
                                                   {{$item->nama}}                                               </a>
                                            </div>
                                            @empty
                                                
                                            @endforelse     
                                                
                                            
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>                        </li>
    
                            <li class="nav-item dropdown only__mobile">
                                <a class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Produk
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/fuso/light-duty" data-wpel-link="internal">Light Duty</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/fuso/medium-duty" data-wpel-link="internal">Medium Duty</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/fuso/tractor-head" data-wpel-link="internal">Tractor Head</a>
                                    </li>
    
                                </ul>
                            </li>
    
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Layanan
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/layanan/purnajual" data-wpel-link="internal">Purnajual</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/layanan/service" data-wpel-link="internal">Service</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/layanan/sparepart" data-wpel-link="internal">Spareparts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/service/telematics" data-wpel-link="internal">Runner</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dealer" role="button" aria-expanded="false" data-bs-auto-close="outside">
                                    Dealer
                                </a>
                          
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Tentang
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/tentang-kami/sejarah-perusahaan" data-wpel-link="internal">Profil Perusahaan</a>
                                    </li>
            
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/list-karir">Karir</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navNews" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Berita SBM
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/berita?kategori=Siaran Pers" data-wpel-link="internal">Siaran Pers</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/berita?kategori=Fuso Update" data-wpel-link="internal">Fuso Update</a>
                                    </li>
    
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link " href="/contact-us">Hubungi Kami</a>
                            </li> --}}
                            <!-- Edited on 22 Feb 2024
                            <li class="nav-item">
                                <a class="nav-link " href="/liverycontest">Livery Contest</a>
                            </li>
                            -->
                        </ul>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn only__desktop only__large" id="btnSearch" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Search Button">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4714 2C17.8414 2 22.2094 6.368 22.2094 11.738C22.2094 14.2715 21.2371 16.5823 19.6461 18.3165L22.7768 21.4407C23.0698 21.7337 23.0708 22.2077 22.7778 22.5007C22.6318 22.6487 22.4388 22.7217 22.2468 22.7217C22.0558 22.7217 21.8638 22.6487 21.7168 22.5027L18.5483 19.343C16.8815 20.6778 14.7681 21.477 12.4714 21.477C7.10142 21.477 2.73242 17.108 2.73242 11.738C2.73242 6.368 7.10142 2 12.4714 2ZM12.4714 3.5C7.92842 3.5 4.23242 7.195 4.23242 11.738C4.23242 16.281 7.92842 19.977 12.4714 19.977C17.0134 19.977 20.7094 16.281 20.7094 11.738C20.7094 7.195 17.0134 3.5 12.4714 3.5Z" fill="#FE5E00"></path>
    </svg>
                        </button>
    
    
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="header__float">
            <a href="https://wa.me/{{getSetting()->whatsapp}}" target="_blank" class="btn btn__primary btn__float" data-wpel-link="external" rel="nofollow noopener noreferrer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_1132_2366)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 13.89 2.525 15.66 3.438 17.168L2.546 20.2C2.49478 20.3741 2.49141 20.5587 2.53624 20.7346C2.58107 20.9104 2.67245 21.0709 2.80076 21.1992C2.92907 21.3276 3.08958 21.4189 3.26542 21.4638C3.44125 21.5086 3.62592 21.5052 3.8 21.454L6.832 20.562C8.39068 21.5051 10.1782 22.0025 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM9.738 14.263C11.761 16.285 13.692 16.552 14.374 16.577C15.411 16.615 16.421 15.823 16.814 14.904C16.8636 14.7897 16.8816 14.6641 16.8661 14.5405C16.8507 14.4168 16.8023 14.2996 16.726 14.201C16.178 13.501 15.437 12.998 14.713 12.498C14.5618 12.3935 14.3761 12.3516 14.1947 12.381C14.0133 12.4105 13.8503 12.509 13.74 12.656L13.14 13.571C13.1085 13.6202 13.0593 13.6555 13.0026 13.6696C12.9459 13.6837 12.8859 13.6756 12.835 13.647C12.428 13.414 11.835 13.018 11.409 12.592C10.983 12.166 10.611 11.6 10.402 11.219C10.3761 11.1706 10.3686 11.1144 10.3809 11.0609C10.3932 11.0074 10.4245 10.9602 10.469 10.928L11.393 10.242C11.5249 10.1273 11.61 9.9682 11.6321 9.79486C11.6542 9.62153 11.6118 9.44611 11.513 9.302C11.065 8.646 10.543 7.812 9.786 7.259C9.68831 7.1882 9.57386 7.14406 9.45393 7.13091C9.334 7.11776 9.21271 7.13606 9.102 7.184C8.182 7.578 7.386 8.588 7.424 9.627C7.449 10.309 7.716 12.24 9.738 14.263Z" fill="white"></path>
    </g>
    <defs>
    <clipPath id="clip0_1132_2366">
    <rect width="24" height="24" fill="white"></rect>
    </clipPath>
    </defs>
    </svg>
    
                <span class="only__desktop">Hubungi Kami</span>
            </a>
        </div>
    
    </header>
    
    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-body">
                    <form class="d-flex" method="get" action="/berita">
                        <input id="fieldSearch" class="form-control me-2 search-field" type="text" name="search" value="" placeholder="Pencarian ..." aria-label="Search">
                        <button class="btn btn__primary" type="submit">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4714 2C17.8414 2 22.2094 6.368 22.2094 11.738C22.2094 14.2715 21.2371 16.5823 19.6461 18.3165L22.7768 21.4407C23.0698 21.7337 23.0708 22.2077 22.7778 22.5007C22.6318 22.6487 22.4388 22.7217 22.2468 22.7217C22.0558 22.7217 21.8638 22.6487 21.7168 22.5027L18.5483 19.343C16.8815 20.6778 14.7681 21.477 12.4714 21.477C7.10142 21.477 2.73242 17.108 2.73242 11.738C2.73242 6.368 7.10142 2 12.4714 2ZM12.4714 3.5C7.92842 3.5 4.23242 7.195 4.23242 11.738C4.23242 16.281 7.92842 19.977 12.4714 19.977C17.0134 19.977 20.7094 16.281 20.7094 11.738C20.7094 7.195 17.0134 3.5 12.4714 3.5Z" fill="#FE5E00"></path>
    </svg>
    
                        </button>
                    </form>
    
                </div>
    
            </div>
        </div>
    </div>
    @yield('content')
    
    
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row footer__row">
                <div class="col-md-12 col-lg-5 footer__col">
                    <div class="footer__title footer__logo">
                        <a href="/" data-wpel-link="internal">
                            <img src="{{getSetting()->icon3}}" alt="Logo KTB">
                        </a>
                    </div>
                    <div class="footer__via address">
                        {{-- <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_408_2447)">
    <path d="M8.9987 8.04134C7.57787 8.04134 6.41537 9.20384 6.41537 10.6247C6.41537 12.0455 7.57787 13.208 8.9987 13.208C10.4195 13.208 11.582 12.0455 11.582 10.6247C11.582 9.20384 10.4195 8.04134 8.9987 8.04134ZM8.9987 1.58301C13.2225 1.58301 18.0404 4.76051 18.0404 10.8184C18.0404 14.6676 15.2891 18.7234 9.78662 22.9472C9.32162 23.3088 8.67578 23.3088 8.21078 22.9472C2.70828 18.7105 -0.0429688 14.6676 -0.0429688 10.8184C-0.0429688 4.76051 4.77495 1.58301 8.9987 1.58301Z" fill="#FE5E00"></path>
    </g>
    <defs>
    <clipPath id="clip0_408_2447">
    <rect width="18" height="23" fill="white"></rect>
    </clipPath>
    </defs>
    </svg> --}}
    
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.9782 14.7675L15.5182 13.2275C15.7256 13.0227 15.9881 12.8825 16.2736 12.8239C16.5592 12.7653 16.8557 12.7909 17.127 12.8975L19.0038 13.6469C19.278 13.7582 19.5131 13.9482 19.6795 14.1928C19.8459 14.4375 19.9361 14.726 19.9388 15.0219V18.4594C19.9372 18.6607 19.8949 18.8596 19.8144 19.0441C19.734 19.2286 19.617 19.3949 19.4705 19.533C19.3241 19.6711 19.1512 19.7781 18.9623 19.8476C18.7734 19.9172 18.5724 19.9477 18.3713 19.9375C5.21947 19.1194 2.56572 7.9819 2.06384 3.7194C2.04055 3.51008 2.06183 3.2982 2.1263 3.0977C2.19077 2.8972 2.29696 2.71262 2.43789 2.55611C2.57882 2.3996 2.75129 2.27469 2.94395 2.18962C3.13662 2.10455 3.34511 2.06124 3.55572 2.06253H6.87634C7.17266 2.06341 7.46194 2.15291 7.70698 2.31954C7.95201 2.48616 8.1416 2.72228 8.25134 2.99753L9.00072 4.8744C9.11089 5.14464 9.139 5.44134 9.08153 5.72746C9.02406 6.01358 8.88357 6.27642 8.67759 6.48315L7.13759 8.02315C7.13759 8.02315 8.02447 14.025 13.9782 14.7675Z" fill="#FE5E00"></path>
        </svg>
    
                        <div class="via">
                            <p>
                                Whatsapp
                            </p>
                            <h4>
                                {{getSetting()->whatsapp}}
                            </h4>
    
                        </div>
                    </div>
                    <div class="footer__via">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.9782 14.7675L15.5182 13.2275C15.7256 13.0227 15.9881 12.8825 16.2736 12.8239C16.5592 12.7653 16.8557 12.7909 17.127 12.8975L19.0038 13.6469C19.278 13.7582 19.5131 13.9482 19.6795 14.1928C19.8459 14.4375 19.9361 14.726 19.9388 15.0219V18.4594C19.9372 18.6607 19.8949 18.8596 19.8144 19.0441C19.734 19.2286 19.617 19.3949 19.4705 19.533C19.3241 19.6711 19.1512 19.7781 18.9623 19.8476C18.7734 19.9172 18.5724 19.9477 18.3713 19.9375C5.21947 19.1194 2.56572 7.9819 2.06384 3.7194C2.04055 3.51008 2.06183 3.2982 2.1263 3.0977C2.19077 2.8972 2.29696 2.71262 2.43789 2.55611C2.57882 2.3996 2.75129 2.27469 2.94395 2.18962C3.13662 2.10455 3.34511 2.06124 3.55572 2.06253H6.87634C7.17266 2.06341 7.46194 2.15291 7.70698 2.31954C7.95201 2.48616 8.1416 2.72228 8.25134 2.99753L9.00072 4.8744C9.11089 5.14464 9.139 5.44134 9.08153 5.72746C9.02406 6.01358 8.88357 6.27642 8.67759 6.48315L7.13759 8.02315C7.13759 8.02315 8.02447 14.025 13.9782 14.7675Z" fill="#FE5E00"></path>
    </svg>
    
    
    
                        <div class="via">
                            <p>
                                Phone Number
                            </p>
                            <h4>
                                {{getSetting()->no_telp}}
                            </h4>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 footer__col">
                    <div class="footer__title">
                        <h4>
                            Menu
                        </h4>
                    </div>
                    <ul class="footer__menu-custom">
                        <li>
                            <a href="/tentang-kami/sejarah-perusahaan" data-wpel-link="internal">
                                Tentang KTB
                            </a>
                        </li>
                        <li>
                            <a href="/layanan/purnajual" data-wpel-link="internal">
                                Layanan
                            </a>
                        </li>
                        <li>
                            <a href="/dealer" data-wpel-link="internal">
                                Dealer
                            </a>
                        </li>
                        <li>
                            <a href="/berita?kategori=Siaran Pers" data-wpel-link="internal">
                                Berita SBM
                            </a>
                        </li>
                        <li>
                            <a href="/list-karir" data-wpel-link="internal">
                                Karir
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 footer__col">
                    <div class="footer__title">
                        <h4>
                            Produk
                        </h4>
                    </div>
                    <ul class="footer__menu-custom">
                        <li>
                            <a href="/fuso/light-duty" data-wpel-link="internal">
                                Light Duty
                            </a>
                        </li>
                        <li>
                            <a href="/fuso/medium-duty" data-wpel-link="internal">
                                Medium Duty
                            </a>
                        </li>
                        <li>
                            <a href="/fuso/tractor-head" data-wpel-link="internal">
                                Tractor Head
                            </a>
                        </li>
    
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 footer__col">
                    <div class="footer__title">
                        <h4>
                            Ikuti Kami
                        </h4>
                    </div>
                    <div class="footer__socmed">
                        <a href="{{getSetting()->facebook}}" target="_blank" aria-label="Facebook KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M13.397 20.9972V12.8012H16.162L16.573 9.59217H13.397V7.54817C13.397 6.62217 13.655 5.98817 14.984 5.98817H16.668V3.12717C15.8487 3.03936 15.0251 2.99696 14.201 3.00017C11.757 3.00017 10.079 4.49217 10.079 7.23117V9.58617H7.33203V12.7952H10.085V20.9972H13.397Z" fill="white"></path>
    </svg>
    
                        </a>
                        <a href="{{getSetting()->twitter}}" target="_blank" aria-label="Tiktok KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <img src="https://img.icons8.com/?size=30&id=118638&format=png&color=ffffff" alt="">
    
                        </a>

                        <a href="{{getSetting()->instagram}}" target="_blank" aria-label="Instagram KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_408_2463)">
    <path d="M14.4317 0.0641667C15.4467 0.110833 16.1483 0.26 16.7967 0.511667C17.4114 0.741509 17.9679 1.10399 18.4267 1.57333C18.896 2.03207 19.2585 2.5886 19.4883 3.20333C19.74 3.8525 19.8892 4.55333 19.9358 5.56833C19.9933 6.82667 20 7.27 20 10C20 12.73 19.9933 13.1733 19.9358 14.4317C19.8892 15.4467 19.74 16.1483 19.4883 16.7975C19.2584 17.4119 18.8959 17.9682 18.4267 18.4267C17.9679 18.896 17.4114 19.2585 16.7967 19.4883C16.1475 19.74 15.4467 19.8892 14.4317 19.9358C13.1733 19.9933 12.7308 20 10 20C7.26917 20 6.82583 19.9933 5.56833 19.9358C4.55333 19.8892 3.85167 19.74 3.2025 19.4883C2.58805 19.2584 2.03181 18.8959 1.57333 18.4267C1.10399 17.9679 0.741509 17.4114 0.511667 16.7967C0.26 16.1475 0.110833 15.4467 0.0641667 14.4317C0.00666667 13.175 0 12.7317 0 10C0 7.26917 0.00666667 6.825 0.0641667 5.56833C0.110833 4.55333 0.26 3.85167 0.511667 3.20333C0.741509 2.5886 1.10399 2.03207 1.57333 1.57333C2.03183 1.10409 2.58807 0.741617 3.2025 0.511667C3.8525 0.26 4.55333 0.110833 5.56833 0.0641667C6.825 0.00666667 7.26833 0 10 0C12.7308 0 13.175 0.00666667 14.4317 0.0641667ZM10 2.2225C7.3 2.2225 6.88667 2.22833 5.66917 2.28417C4.89667 2.31917 4.43333 2.4175 4.0075 2.58333C3.645 2.725 3.41417 2.875 3.14417 3.14417C2.87417 3.41417 2.72417 3.645 2.58333 4.0075C2.41833 4.4325 2.31917 4.89667 2.28417 5.66917C2.22833 6.88667 2.2225 7.3 2.2225 10C2.2225 12.7 2.22833 13.1133 2.28417 14.3308C2.31917 15.1033 2.4175 15.5667 2.58333 15.9917C2.725 16.355 2.875 16.5858 3.14417 16.8558C3.41417 17.1258 3.645 17.2758 4.0075 17.4167C4.4325 17.5817 4.89667 17.6808 5.66917 17.7158C6.8875 17.7717 7.30083 17.7775 10 17.7775C12.7 17.7775 13.1125 17.7717 14.3308 17.7158C15.1033 17.6808 15.5667 17.5825 15.9925 17.4167C16.355 17.275 16.5858 17.125 16.8558 16.8558C17.1258 16.5858 17.2758 16.355 17.4167 15.9925C17.5817 15.5675 17.6808 15.1033 17.7158 14.3308C17.7717 13.1125 17.7775 12.6992 17.7775 10C17.7775 7.30083 17.7717 6.8875 17.7158 5.66917C17.6808 4.89667 17.5825 4.43333 17.4167 4.00833C17.2988 3.6809 17.1069 3.38515 16.8558 3.14417C16.6149 2.89309 16.3191 2.70115 15.9917 2.58333C15.5667 2.41833 15.1025 2.31917 14.33 2.28417C13.1125 2.22833 12.6992 2.2225 9.99917 2.2225H10ZM10 15.185C8.62485 15.185 7.30603 14.6387 6.33365 13.6663C5.36127 12.694 4.815 11.3751 4.815 10C4.815 8.62485 5.36127 7.30603 6.33365 6.33365C7.30603 5.36127 8.62485 4.815 10 4.815C11.3751 4.815 12.694 5.36127 13.6663 6.33365C14.6387 7.30603 15.185 8.62485 15.185 10C15.185 11.3751 14.6387 12.694 13.6663 13.6663C12.694 14.6387 11.3751 15.185 10 15.185ZM10 12.9633C10.7859 12.9633 11.5397 12.6511 12.0954 12.0954C12.6511 11.5397 12.9633 10.7859 12.9633 10C12.9633 9.21408 12.6511 8.46034 12.0954 7.90461C11.5397 7.34887 10.7859 7.03667 10 7.03667C9.21408 7.03667 8.46034 7.34887 7.90461 7.90461C7.34887 8.46034 7.03667 9.21408 7.03667 10C7.03667 10.7859 7.34887 11.5397 7.90461 12.0954C8.46034 12.6511 9.21408 12.9633 10 12.9633ZM15.185 5.92583C14.8903 5.92583 14.6076 5.80876 14.3992 5.60036C14.1908 5.39196 14.0737 5.10931 14.0737 4.81458C14.0737 4.51986 14.1908 4.23721 14.3992 4.02881C14.6076 3.82041 14.8903 3.70333 15.185 3.70333C15.4797 3.70333 15.7624 3.82041 15.9708 4.02881C16.1792 4.23721 16.2962 4.51986 16.2962 4.81458C16.2962 5.10931 16.1792 5.39196 15.9708 5.60036C15.7624 5.80876 15.4797 5.92583 15.185 5.92583Z" fill="white"></path>
    </g>
    <defs>
    <clipPath id="clip0_408_2463">
    <rect width="20" height="20" fill="white"></rect>
    </clipPath>
    </defs>
    </svg>
    
                        </a>
                        <a href="{{getSetting()->youtube}}" target="_blank" aria-label="YouTube  KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M19.304 6.07236C19.1994 5.68279 18.9943 5.32753 18.7093 5.04212C18.4242 4.75672 18.0692 4.55119 17.6798 4.44609C16.2463 4.06055 10.5 4.06055 10.5 4.06055C10.5 4.06055 4.75371 4.06055 3.32021 4.44404C2.93061 4.54879 2.57542 4.75421 2.29032 5.03967C2.00523 5.32513 1.80026 5.68057 1.696 6.07031C1.3125 7.50586 1.3125 10.5 1.3125 10.5C1.3125 10.5 1.3125 13.4941 1.696 14.9276C1.90723 15.7192 2.53066 16.3427 3.32021 16.5539C4.75371 16.9395 10.5 16.9395 10.5 16.9395C10.5 16.9395 16.2463 16.9395 17.6798 16.5539C18.4714 16.3427 19.0928 15.7192 19.304 14.9276C19.6875 13.4941 19.6875 10.5 19.6875 10.5C19.6875 10.5 19.6875 7.50586 19.304 6.07236ZM8.6748 13.248V7.75195L13.4326 10.4795L8.6748 13.248Z" fill="white"></path>
    </svg>
    
                        </a>
                        <a href="{{getSetting()->linkedin}}" target="_blank" aria-label="LinkedIn KTB Fuso" data-wpel-link="external" rel="nofollow noopener noreferrer">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.3 16H3.3V4.9H0.3V16ZM1.8 0C0.8 0 0 0.8 0 1.8C0 2.8 0.8 3.6 1.8 3.6C2.8 3.6 3.6 2.8 3.6 1.8C3.6 0.8 2.8 0 1.8 0ZM8.4 6.6V4.9H5.4V16H8.4V10.3C8.4 7.1 12.5 6.9 12.5 10.3V16H15.5V9.2C15.5 3.8 9.8 4 8.4 6.6Z" fill="white"></path>
    </svg>
    
                        </a>
                    </div>
                </div>
            </div>
    
            <span class="copyright">
                Copyright © 2024, All Rights Reserved
            </span>
        </div>
    </footer>
    
      <script>
      jQuery(function ($) {
        $('.wpcf7-form').on('wpcf7:invalid', function () {
          $(this).find('#success-message').hide();
        });
    
        $('.wpcf7-form').on('wpcf7mailsent', function (event) {
          event.preventDefault();
    
          $(this).hide();
          $(this).find('#success-message').show();
        });
      });
      </script>
      <style id="core-block-supports-inline-css">
    /**
     * Core styles: block-supports
     */
    
    </style>
    <script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/js/navigation.js?ver=1.0.1" id="ktb_fuso-navigation-js"></script>
    <script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/js/scripts.js?ver=6.5.2" id="main-js"></script>
    <script type="text/javascript">
    window.addEventListener("load", function(event) {
    jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(function(){
    var form=jQuery(this); 
    var screen_width=""; var screen_height="";
     if(screen_width == ""){
     if(screen){
       screen_width=screen.width;  
     }else{
         screen_width=jQuery(window).width();
     }    }  
      if(screen_height == ""){
     if(screen){
       screen_height=screen.height;  
     }else{
         screen_height=jQuery(window).height();
     }    }
    form.append('<input type="hidden" name="vx_width" value="'+screen_width+'">');
    form.append('<input type="hidden" name="vx_height" value="'+screen_height+'">');
    form.append('<input type="hidden" name="vx_url" value="'+window.location.href+'">');  
    }); 
    
    });
    </script> 
    
    
    <template id="auto-clicker-autofill-popup">
      <style>
        @import url(https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css);
        @import url(https://fonts.googleapis.com/css?family=Poppins:300,400,500&subset=latin-ext);
        #body {
          background: white;
          border-radius: 5px;
          box-shadow: 0 30px 50px 0 rgb(44 49 59 / 20%);
          overflow: hidden;
          font-size: 14px;
          font-family: 'Poppins', sans-serif;
          min-width: 250px;
          max-width: 400px;
        }
        .modal-dialog {
          margin: auto;
        }
        .modal-content {
          border: none;
        }
        /*Header*/
        .modal-header {
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
          padding-top: 0.5em;
          padding-bottom: 0.5em;
          padding-left: 0;
          height: 47px;
          background: rgba(112.520718, 44.062154, 249.437846, 0.1);
          color: #fff;
          border: none;
        }
        .modal-header button.btn {
          color: #712cf9;
          width: 1em;
          height: 1em;
          display: flex;
          box-sizing: content-box;
          justify-content: center;
          align-items: center;
          padding: 0;
          --bs-btn-close-opacity: 1;
          --bs-btn-close-hover-opacity: 0.75;
          --bs-btn-close-focus-shadow: 0 0 0 0.25em rgba(13, 110, 253, 0.25);
          opacity: var(--bs-btn-close-opacity);
        }
        .modal-header button.btn svg {
          width: inherit;
          height: inherit;
        }
        .modal-header button.btn:focus {
          box-shadow: var(--bs-btn-close-focus-shadow);
        }
        .modal-header button.btn:hover {
          opacity: var(--bs-btn-close-hover-opacity);
        }
        .modal-header button.expand .bi-arrows-expand {
          display: block !important;
        }
        .modal-header button.expand .bi-dash-lg {
          display: none;
        }
        .modal-header .modal-title {
          padding-left: 2em;
          color: #712cf9;
          position: relative;
          font-size: 1em;
        }
        .modal-header .modal-title::before {
          content: '';
          position: absolute;
          left: 0.75em;
          top: calc(50% - 0.375em);
          display: block;
          width: 0.75em;
          height: 0.75em;
          border-radius: 50%;
          background: red;
          cursor: pointer;
          box-shadow: 0 0 0 rgba(255, 0, 0, 0.4);
          animation: pulse 2s infinite;
        }
        @-webkit-keyframes pulse {
          0% {
            -webkit-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
          }
          70% {
            -webkit-box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
          }
          100% {
            -webkit-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
          }
        }
        @keyframes pulse {
          0% {
            -moz-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
          }
          70% {
            -moz-box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
            box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
          }
          100% {
            -moz-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
          }
        }
        /*Body*/
        .modal-body {
          max-height: calc(100vh - 7em);
          overflow-y: auto;
          overflow-x: hidden;
          padding: 0.5em 0;
        }
        td div {
          vertical-align: middle;
          width: 180px;
          line-height: 24px;
        }
        tr button {
          visibility: hidden;
        }
        tr:hover button {
          visibility: visible;
        }
        /*Footer*/
        .modal-footer {
          padding: 0;
          --bs-bg-opacity: 1;
          background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
        }
        .modal-footer a {
          display: flex;
          align-items: center;
        }
        .modal-footer a svg {
          margin-right: 0.15em;
        }
        .modal-footer a:hover {
          color: #712cf9 !important;
        }
      </style>
      <div id="body" class="modal position-static d-block" data-bs-theme="light">
        <div class="modal-dialog">
          <div class="modal-content">
            <header class="modal-header">
              <h6 class="modal-title text-truncate">Auto Clicker - AutoFill</h6>
              <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn ms-2" aria-label="collapse">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-expand" style="display: none" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8ZM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2ZM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10Z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"></path>
                  </svg>
                </button>
                <button type="button" class="btn ms-2" data-bs-dismiss="modal" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                  </svg>
                </button>
              </div>
            </header>
            <main class="modal-body" id="collapse-main">
              <slot name="actions" hidden="">
                <table class="table table-sm table-hover mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name/Element</th>
                      <th scope="col">Value</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider"></tbody>
                </table>
              </slot>
              <slot name="no-actions">
                <div class="px-2">
                  <div class="card w-100">
                    <div class="card-body">
                      <h5 class="card-title mb-3 text-primary">Start filling form...</h5>
                      <hr>
                      <h6 class="card-subtitle mb-2 text-muted">If you have already filled form</h6>
                      <button type="button" auto-generate-config="" class="btn btn-sm btn-outline-secondary">Already Filled ?</button>
                    </div>
                  </div>
                </div>
              </slot>
            </main>
            <footer class="modal-footer justify-content-center" id="collapse-footer">
              <ul class="nav justify-content-between w-100">
                <li class="nav-item">
                  <a href="https://getautoclicker.com/docs/3.x/getting-started" class="nav-link px-2 text-muted" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-richtext" viewBox="0 0 16 16">
                      <path d="M7 4.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V7.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V7s1.54-1.274 1.639-1.208zM5 9a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"></path>
                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"></path>
                    </svg>
                    <span id="docs-text"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://discord.gg/ubMBeX3" class="nav-link px-2 text-muted" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                      <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"></path>
                    </svg>
                    <span id="chat-text"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://dev.getautoclicker.com/" class="nav-link px-2 text-muted" target="_blank" id="settings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                    </svg>
                    <span id="advance-text"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/sponsors/Dhruv-Techapps" class="nav-link px-2 text-muted" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart text-danger" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"></path>
                    </svg>
                    <span id="sponsor-text"></span>
                  </a>
                </li>
              </ul>
            </footer>
          </div>
        </div>
      </div>
    </template>
    <template id="auto-clicker-autofill-popup-tr">
      <tr>
        <td><div class="text-truncate"></div></td>
        <td><div class="text-truncate"></div></td>
        <td>
          <button type="button" class="btn-close" data-bs-dismiss="tr" aria-label="Close"></button>
        </td>
      </tr>
    </template>
    <script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/js/navigation.js?ver=1.0.1" id="ktb_fuso-navigation-js"></script>
    <script src="https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/js/scripts.js?ver=6.5.2" id="main-js"></script>
<script type='text/javascript' src='wp-content/themes/miratfuso/js/leafleta191.js?ver=0.9.4.1657484526' id='leaflet-scripts-js'></script>
<script type='text/javascript' src='wp-content/themes/miratfuso/js/markerclustererb84d.js?ver=0.9.4.1657479942' id='markerclusterer-scripts-js'></script>

@yield('script')
    </body>
    </html>