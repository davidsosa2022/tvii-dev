if (typeof vino === 'undefined') {
    console.log('Initialize API emulation');
    if (typeof wiiu === 'undefined') { window.wiiu = {}, window.wiiu.gamepad = { update: function () { } }; }

    $(document).on('keyup', function (event) {
        wiiu.gamepad.hold = 0;
    });

    var debugConsole = {
        nnid: "prodtest1",
        name: "Vino Debug",
        mii: "AwEAQBs8xqsHR9PC3MXz5YXEaBemLwAAVllEAGEAdgBpAGQAIABKAG8AYQBxAExRABBXAAJoRBgTZEUUgRIZZg4AACkAaGdQYgBpAGcAIABzAGEAbAB0AHkAAAAAAC96",
        pid: 1530610731,
        country: "US",
        language: "EN",
        fl: "1088553492,1236925795,1166356730,1409518437,1088392656,1090934832,1573645812,1672254576,1746347141,1112166243,1773702389,1541552688,1679086960,1609011959,1371173300,1426703823,1381149235,1338603408,1122156854,1309239659,1427220684,1498872945,1468960081,1029645862,1092713399,1413957266,1106036020,1637587789,1391350154,1672305136,1098860494"
    };

    window.vino = {
        requestGarbageCollect: function () {
            console.log('Requested Garbage collection');
        },
        title_getImageCount: function () {
            return 0;
        },
        title_hasImage: function (img) {
            return false;
        },
        title_setFixedImage: function (url, id, n, n, n, type) {
            return true;
        },
        soundStopAll: function () {
            console.log("Stop all sounds")
        },
        ls_getItem: function (key) {
            return localStorage.getItem(key);
        },
        ls_setItem: function (key, value) {
            localStorage.setItem(key, value);
            return true;
        },
        ls_removeItem: function (key) {
            localStorage.removeItem(key);
        },
        ls_clear: function () {
            localStorage.clear();
        },
        ls_key: function (index) {
            return localStorage.key(index);
        },
        ls_length: function () {
            return localStorage.length;
        },
        lyt_setIsEnableClientLoadingIcon: function (show) {
            console.log((show ? 'Show' : 'Hide') + ' blue loading icon');
        },
        lyt_setIsEnableWhiteMask: function (withmask) {
            console.log((withmask ? 'With' : 'Without') + ' white mask');
        },
        lyt_startTouchEffect: function () {
            console.log('Show touch effect');
        },
        lyt_reset: function () {
            console.log('Reset lyt');
        },
        lyt_decideFixedFrame: function () {
            console.log('Decide lyt');
        },
        lyt_drawFixedFrame: function (one, two, three, four) {
            console.log('Drew frame at ' + one, two, three, four);
        },
        lyt_startTouchNodeEffect: function (one, two, three, four) {
            console.log('Show touch mouse effect at ' + one, two, three, four);
        },
        video_enableOnTV: function (bool) {
            console.log('Enable video on TV is ' + bool);
        },
        emulate_touch: function (one, two, three) {
            console.log('Emulate touch at ' + one, two, three);
        },
        emulate_inputDelay: function (one) {
            console.log('Emulate input delay in ' + one + ' seconds');
        },
        exit: function () {
            console.log('Exit app');
        },
        exitForce: function () {
            console.log('Forcing exit app');
        },
        isReturnedFromOtherApplication: function () {
            console.log('App was not returned from other application');
            return false;
        },
        runOliveErrorDialog: function (errorCode) {
            alert('115-' + errorCode + '\n\n' + 'An Miiverse error occurred.');
        },
        runErrorDialog: function (errorCode) {
            alert('119-9' + errorCode + '\n\n' + 'An Vino error occurred.');
        },
        olv_getErrorCodeOnInitialize: function () {
            alert('115-5004' + '\n\n' + 'The Miiverse service has ended.');
        },
        runSingleButtonDialog: function (msg, btnStr) {
            alert(msg + "\n\n[ " + btnStr + " ]");
        },
        runTwoButtonDialog: function (msg, lBtnStr, rBtnStr) {
            if (confirm(msg + "\n\n[ " + lBtnStr + " (Cancel) ]  [ " + rBtnStr + " (OK) ]")) {
                return false;
            }
        },
        info_getCountry: function () {
            return debugConsole.country;
        },
        info_getLanguage: function () {
            return debugConsole.language;
        },
        loading_setIconRect: function (one, two, three, four) {
            console.log('Set loading icon position at ' + one, two, three, four);
        },
        loading_setIconAppear: function (show) {
            console.log((show ? 'Show' : 'Hide') + ' loading icon.');
        },
        loading_setIconVisibility: function (show) {
            console.log((show ? 'Instantly show' : 'Instantly hide') + ' loading icon.');
        },
        soundPlay: function (soundLabel) {
            console.log('Played sound effect ' + soundLabel);
        },
        soundPlayVolume: function (soundLabel, vol) {
            console.log('Played sound effect ' + soundLabel + ' with volume ' + vol);
        },
        ir_enableCodeset: function (one) {
            console.log('Enabled IR codeset ' + one);
        },
        ir_send: function (one, two) {
            console.log('Sent IR code ' + one);
        },
        navi_reset: function () {
            console.log('Reset navi position');
        },
        navi_getRect: function () {
            return;
        },
        navi_setMoveMethod: function (one) {
            console.log('Set move method ' + one);
        },
        navi_setBaseVisibilityOnKeyEvent: function (bool) {
            console.log('Base visibility is ' + bool);
        },
        navi_set: function (one, two, three, four) {
            console.log('Navi set at ' + one, two, three, four);
        },
        act_getCurrentSlotNo: function () {
            console.log('Returned account slot "1"');
            return 1;
        },
        act_getMiiImage: function (slot) {
            console.log('Returned Mii image from ' + slot);
            return "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/normal_face.png";
        },
        act_getMiiImageEx: function (slot, expression) {
            console.log('Returned Mii image from ' + slot + ' with expression ' + expression);
            var imageUrl;
            switch (expression) {
                case 7:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/body.png";
                    break;
                case 2:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/smile_open_mouth.png";
                    break;
                case 3:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/wink_left.png";
                    break;
                case 4:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/surprised_open_mouth.png";
                    break;
                case 5:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/frustrated.png";
                    break;
                case 6:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/sorrow.png";
                    break;
                default:
                    imageUrl = "https://pretendo-cdn.b-cdn.net/mii/" + debugConsole.pid + "/normal_face.png";
                    break;
            }
            return imageUrl;
        },
        act_getMiiData: function (slot) {
            console.log('Returned Mii data from ' + slot);
            return debugConsole.mii;
        },
        act_getNum: function () {
            console.log('Returned number of accounts');
            return 1;
        },
        act_getName: function (slot) {
            console.log('Returned Mii name from ' + slot);
            return debugConsole.name;
        },
        act_getPid: function (slot) {
            console.log('Returned account PID from ' + slot);
            return debugConsole.pid;
        },
        act_getAgeDivision: function (slot) {
            console.log('Returned account age division from ' + slot);
            return 1;
        },
        apd_isEnabled: function () {
            console.log('APD is enabled on console');
            return true;
        },
        apd_getPeriod: function () {
            console.log('Return APD period');
            return 6200;
        },
        apd_enable: function () {
            console.log('APD has been enabled');
            return true;
        },
        apd_disable: function () {
            console.log('APD has been disabled');
            return false;
        },
        memo_open: function (state) {
            console.log((state ? 'Open with reset' : 'Open without reset') + ' memo UI');
            return true;
        },
        memo_reset: function () {
            console.log('Memo UI was reset');
            return true;
        },
        memo_isFinish: function () {
            console.log('Memo UI finished');
            return true;
        },
        memo_getImagePng: function () {
            console.log('Return memo UI image');
            return 'https://i.ibb.co/rwr9J38/descarga.png';
        },
        memo_getImageTgaRaw: function () {
            console.log('Return memo UI raw image');
            return 'DARA';
        },
        memo_getImageTgaCompressed: function () {
            console.log('Return memo UI compressed image');
            return 'DARA';
        },
        fp_getFriendList: function () {
            console.log('Return friend list');
            return debugConsole.fl;
        },
        fp_getFriendName: function (PID) {
            console.log('Get friend name of ' + PID);
            return 'David Joaq';
        },
        jumpToTitle: function (TID, bool) {
            console.log('Jump to app ' + TID);
        },
        checkTitleExist: function (TID) {
            console.log("TID " + TID + " does exist.")
            return true;
        },
        jumpToMiiverse: function (bool) {
            console.log('Jump to Miiverse is ' + bool);
        },
        jumpToMiiversePostId: function (postid, bool) {
            console.log('Jump to post ' + postid + ' on Miiverse is ' + bool);
        },
        jumpToEShop: function (TID, bool) {
            console.log('Jump to eShop page of TID ' + TID + ' is ' + bool);
        },
        jumpToVod: function (url, TID, bool) {
            console.log('Jump to VOD app of TID ' + TID + ' with URL ' + url + ' is ' + bool);
            window.location.href = url;
        },
        jumpToBrowser: function (url, bool) {
            console.log((bool ? 'Jump' : 'Did not jump') + ' to URL ' + url);
            window.location.href = url;
        },
        jumpToSettingsTvRemote: function (bool) {
            console.log((bool ? 'Jump' : 'Did not jump') + ' to TV Remote Settings');
        },
        olv_isEnabled: function () {
            console.log('Miiverse is enabled');
            return true;
        },
        olv_getPostingResult: function () {
            console.log('Post was successful');
            return 1;
        },
        olv_getHostName: function () {
            console.log('Miiverse host name ' + 'https://api.olv.pretendo.cc');
            return 'https://api.olv.pretendo.cc';
        },
        olv_getUserAgent: function () {
            console.log('Miiverse user agent ' + 'WiiU/POLV-5.0.3/353');
            return 'WiiU/POLV-5.0.3/305';
        },
        olv_getServiceToken: function () {
            console.log('Return service token');
            return '837vCg+l8rgFmGSHhZXRH22xr7YUxPhQ95FvhWr3JmoYBsWxUfIYZHFF+J6NYy9eUVnEhv8y3YFw2BrZZ3UEunQfHf7omFk0t4kWywIZYQcaZUDx367u7uSwW+34xF4+/IPQFGLtCh6moWe97yHcOMR374iAmzb1uTDM2cRgDco=';
        },
        olv_getParameterPack: function () {
            console.log('Return param pack');
            return 'XHRpdGxlX2lkXDE0MDc1ODEzMTA0OTcwMzRcYWNjZXNzX2tleVwzNDczXHBsYXRmb3JtX2lkXDFc cmVnaW9uX2lkXDJcbGFuZ3VhZ2VfaWRcMVxjb3VudHJ5X2lkXDQ5XGFyZWFfaWRcMzZcbmV0d29y a19yZXN0cmljdGlvblwwXGZyaWVuZF9yZXN0cmljdGlvblwwXHJhdGluZ19yZXN0cmljdGlvblwx N1xyYXRpbmdfb3JnYW5pemF0aW9uXDFcdHJhbnNmZXJhYmxlX2lkXDExMDU5OTY0MDc3OTU4MjI1 MzQ3XHR6X25hbWVcQW1lcmljYS9OZXdfWW9ya1x1dGNfb2Zmc2V0XC0xNDQwMFw=';
        },
        olv_postText: function (body, topicTag, feelingID, spoiler, searchkey1, searchkey2, searchkey3, searchkey4, searchkey5) {
            console.log('Post to Miiverse with message ' + '"' + body + '"' + ' with topic ' + topicTag + ' with feeling ID ' + feelingID + ' with spoilers ' + spoiler + ' with search key ' + searchkey1 + ' with search key ' + searchkey2 + ' with search key ' + searchkey3 + ' with search key ' + searchkey4 + ' with search key ' + searchkey5);
        },
        olv_postTextFixedPhrase: function (body, topicTag, feelingID, spoiler, searchkey1, searchkey2, searchkey3, searchkey4, searchkey5) {
            console.log('Post to Miiverse fixed phrase with message ' + '"' + body + '"' + ' with topic ' + topicTag + ' with feeling ID ' + feelingID + ' with spoilers ' + spoiler + ' with search key ' + searchkey1 + ' with search key ' + searchkey2 + ' with search key ' + searchkey3 + ' with search key ' + searchkey4 + ' with search key ' + searchkey5);
        },
        olv_postImage: function (painting, topicTag, feelingID, spoiler, searchkey1, searchkey2, searchkey3, searchkey4, searchkey5) {
            console.log('Post to Miiverse with drawing ' + '"' + painting + '"' + ' with topic ' + topicTag + ' with feeling ID ' + feelingID + ' with spoilers ' + spoiler + ' with search key ' + searchkey1 + ' with search key ' + searchkey2 + ' with search key ' + searchkey3 + ' with search key ' + searchkey4 + ' with search key ' + searchkey5);
        },
        olv_postImageFixedPhrase: function (painting, topicTag, feelingID, spoiler, searchkey1, searchkey2, searchkey3, searchkey4, searchkey5) {
            console.log('Post to Miiverse fixed phrase with drawing ' + '"' + painting + '"' + ' with topic ' + topicTag + ' with feeling ID ' + feelingID + ' with spoilers ' + spoiler + ' with search key ' + searchkey1 + ' with search key ' + searchkey2 + ' with search key ' + searchkey3 + ' with search key ' + searchkey4 + ' with search key ' + searchkey5);
        },
        suggest_isOpening: function () {
        },
        suggest_set: function (sug1, sug2, sug3, sug4, sug5, sug6, sug7, sug8, sug9, sug10) {
            console.log('Set suggestion strings ' + '"' + sug1 + '", ' + '"' + sug2 + '", ' + '"' + sug3 + '", ' + '"' + sug4 + '", ' + '"' + sug5 + '", ' + '"' + sug6 + '", ' + '"' + sug7 + '", ' + '"' + sug8 + '", ' + '"' + sug9 + '", ' + '"' + sug10 + '"');
            return true;
        },
        suggest_reset: function () {
            console.log('Reset suggestion strings');
            return true;
        },
        suggest_getString: function () {
        },
        pc_checkPIN: function () {
            console.log('PIN is true, perentl conrol allowed');
            return true;
        },
        pc_isControlled: function () {
            console.log('Parental Controls are disabled');
            return false;
        },
        pc_getMiiverseControlLevel: function () {
            console.log('No Miiverse Control Settings');
            return 0;
        },
        pc_isControlledNetworkCommunication: function () {
            console.log('No Network Communication Settings');
            return false;
        },
        pc_isControlledFriendReg: function () {
            console.log('No Friend Settings');
            return false;
        },
        pc_isControlledBrowser: function () {
            console.log('No Browser Settings');
            return false;
        },
        ng_checkText: function (message) {
            console.log(message + ' does not contain any blacklisted words.');
            return true;
        },
        ng_checkWord: function (message) {
            console.log(message + ' is not a blacklisted word.');
            return true;
        }

    };
}

var tvii = tvii || {
    clientUrl: location.origin,
    userSlot: vino.act_getCurrentSlotNo(),
    templates: {
        templateList: [
            {
                template_query: "programs",
                template_file: "programs.html"
            },
            {
                template_query: "settings",
                template_file: "settings.html"
            },
            {
                template_query: "home",
                template_file: "home.html"
            }
        ],
        requestAll: function () {
            var templateLoadCount = 0;

            for (var i = 0; i < tvii.templates.templateList.length; i++) {
                (function (temToLoad) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", tvii.clientUrl + "/templates/" + temToLoad.template_file);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4) {
                            if (xhr.status == 200) {
                                var tem = {
                                    template_name: temToLoad.template_query,
                                    template_html: xhr.responseText
                                }

                                sessionStorage.setItem("template_" + tem.template_name, JSON.stringify(tem))

                                templateLoadCount++;
                                if (templateLoadCount >= tvii.templates.templateList.length) {
                                    $(document).trigger("tvii:templates:loaded");
                                    sessionStorage.setItem("temLoaded", "true");
                                }
                            }
                        }
                    };
                    xhr.send();
                })(tvii.templates.templateList[i]);
            }

        },
        get: function (templateName) {
            return JSON.parse(sessionStorage.getItem("template_" + templateName)).template_html;
        }
    },
    router: {
        routes: [],
        connect: function (regex, handler) {
            this.routes.push({ regex: new RegExp(regex), handler: handler });
        },
        checkRoutes: function (url) {
            var matchFound = false;
            for (var i = 0; i < this.routes.length; i++) {
                var route = this.routes[i];
                var match = url.match(route.regex);
                if (match) {
                    matchFound = true;
                    route.handler.apply(null, match.slice(1));
                    break;
                }
            }
        }
    },
    utils: {
        startInitialLoading: function () {
            vino.loading_setIconRect(360, 160, 120, 120);
            vino.loading_setIconAppear(true);

            $(document).on("tvii:templates:loaded", function () {
                $(document).off("tvii:templates:loaded")
                $(document).trigger("tvii:initialize");
            })
            tvii.templates.requestAll();
        },
        endInitialLoading: function () {
            vino.loading_setIconAppear(false);
            $(".wrapper").removeClass("none");
        },
        hasInitalizedBefore: function () {
            if (sessionStorage.getItem("temLoaded") != "true" && window.location.search != "/us/index.html") {
                vino.requestGarbageCollect();
                window.location.href = "/";
            }
        },
        getQuery: function (param, isSearch) {
            var queryString;

            if (isSearch) {
                // Use window.location.search if isSearch is true
                queryString = window.location.search.substring(1);
            } else {
                // Use the manual query parameter if isSearch is false
                queryString = param;
                param = param.split('?')[1]; // Extract the query part from the manual query string
            }

            var params = queryString.split('&');

            for (var i = 0; i < params.length; i++) {
                var pair = params[i].split('=');
                if (pair[0] === param) {
                    return decodeURIComponent(pair[1]);
                }
            }

            return null;
        },
        changePage: function (pageQuery, replace) {
            if (replace) {
                window.history.replaceState({}, '', pageQuery);
            } else {
                window.history.pushState({}, '', pageQuery);
            }
            tvii.utils.clearWrapper();
            tvii.utils.showWrapper(false);
            tvii.utils.replaceWrapper(tvii.templates.get(tvii.utils.getQuery("page", true)));
            $(document).trigger("tvii:pagechange");
            tvii.router.checkRoutes(location.search);
            tvii.utils.showWrapper(true);
        },
        clearWrapper: function () {
            $(".wrapper").html();
        },
        replaceWrapper: function (html) {
            $(".wrapper").html(html)
        },
        showWrapper: function (show) {
            if (show) {
                $(".wrapper").removeClass("none");
            } else {
                $(".wrapper").addClass("none");
            }
        },
        initPageLinks: function () {
            $('a').on("click", function () {
                var link = $(this);
                if (link.attr("data-url") != null) {
                    tvii.utils.changePage(link.attr("data-url"), false)
                }
            })
        }
    }
};

$(window).on("load", function () {
    tvii.utils.hasInitalizedBefore();
    //if has not initalized, redirect to main page (/)
    tvii.utils.startInitialLoading();
    $(document).off("load");
})


$(document).on("tvii:initialize", function () {
    tvii.utils.endInitialLoading();
    tvii.utils.changePage("?page=home", true);
    $(document).off("tvii:initialize");
});

$(document).on("tvii:pagechange", function () {
    vino.requestGarbageCollect();
    tvii.utils.initPageLinks();
})

$(window).on("popstate", function () {
    tvii.utils.changePage(location.search, true)
});

tvii.router.connect("^[?&]page=home(?:&|$)", function () {
    $(".mii-icon img").attr("src", vino.act_getMiiImage(tvii.userSlot));

    $(".mii-icon").on("click", function () {
        vino.soundPlay("SE_A_DECIDE_TOUCH_OFF");
    })

    $(".home-buttons a").on("click", function () {
        vino.soundPlay("SE_A_DECIDE_TOUCH_OFF");
    })

    $(".exit-button").on("click", function () {
        vino.soundPlay("SE_COMMON_FINISH_TOUCH_OFF");
        vino.exit();
    })
});

tvii.router.connect("^[?&]page=settings(?:&|$)", function () {
    $(".back-button").on("click", function () {
        vino.soundPlay("SE_A_CLOSE_TOUCH_OFF");
        history.back();
    })

    $(".mii-body img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 7));
    $(".mii-body span").text(vino.act_getName(tvii.userSlot));

    var $scrollArea = $('.settings-container');
    var isMouseDown = false;
    var startX, scrollLeft;
    var lastScrollLeft, scrollVelocity = 0;
    var friction = 0.95; // Inertia friction factor
    var inertiaInterval; // Interval ID for inertia

    $scrollArea.on('mousedown', function (e) {
        isMouseDown = true;
        startX = e.pageX;
        scrollLeft = $scrollArea.scrollLeft();
        lastScrollLeft = scrollLeft; // Track the last scroll position for velocity calculation
        scrollVelocity = 0; // Reset scroll velocity on mousedown
        $scrollArea.css('cursor', 'grabbing');
        clearInterval(inertiaInterval); // Stop any previous inertia interval
    });

    $(document).on('mouseup', function () {
        if (isMouseDown) {
            isMouseDown = false;
            $scrollArea.css('cursor', 'grab');
            // Smooth scrolling inertia
            inertiaInterval = setInterval(function () {
                if (Math.abs(scrollVelocity) > 0.1) { // Continue scrolling if velocity is significant
                    $scrollArea.scrollLeft($scrollArea.scrollLeft() + scrollVelocity);
                    scrollVelocity *= friction;
                } else {
                    clearInterval(inertiaInterval); // Stop inertia when velocity is low
                }
            }, 20); // Update every 20ms for smooth scrolling
        }
    });

    $scrollArea.on('mousemove', function (e) {
        if (isMouseDown) {
            var x = e.pageX;
            var walk = (x - startX) * 2; // Scroll speed
            $scrollArea.scrollLeft(scrollLeft - walk);
            scrollVelocity = $scrollArea.scrollLeft() - lastScrollLeft; // Update velocity based on scroll change
            lastScrollLeft = $scrollArea.scrollLeft(); // Update last scroll position
        }
    });
});

tvii.router.connect("^[?&]page=programs(?:&|$)", function () {

    $(".back-button").on("click", function () {
        vino.soundPlay("SE_A_CLOSE_TOUCH_OFF");
        history.back();
    })

    $(".tab-label").on("click", function () {
        vino.soundPlay("SE_A_TAB_TOUCH_OFF");
    })

    var $scrollArea = $('.program-container');
    var isMouseDown = false;
    var startX, scrollLeft;
    var lastScrollLeft, scrollVelocity = 0;
    var friction = 0.95; // Inertia friction factor
    var inertiaInterval; // Interval ID for inertia

    $scrollArea.on('mousedown', function (e) {
        isMouseDown = true;
        startX = e.pageX;
        scrollLeft = $scrollArea.scrollLeft();
        lastScrollLeft = scrollLeft; // Track the last scroll position for velocity calculation
        scrollVelocity = 0; // Reset scroll velocity on mousedown
        $scrollArea.css('cursor', 'grabbing');
        clearInterval(inertiaInterval); // Stop any previous inertia interval
    });

    $(document).on('mouseup', function () {
        if (isMouseDown) {
            isMouseDown = false;
            $scrollArea.css('cursor', 'grab');
            // Smooth scrolling inertia
            inertiaInterval = setInterval(function () {
                if (Math.abs(scrollVelocity) > 0.1) { // Continue scrolling if velocity is significant
                    $scrollArea.scrollLeft($scrollArea.scrollLeft() + scrollVelocity);
                    scrollVelocity *= friction;
                } else {
                    clearInterval(inertiaInterval); // Stop inertia when velocity is low
                }
            }, 20); // Update every 20ms for smooth scrolling
        }
    });

    $scrollArea.on('mousemove', function (e) {
        if (isMouseDown) {
            var x = e.pageX;
            var walk = (x - startX) * 2; // Scroll speed
            $scrollArea.scrollLeft(scrollLeft - walk);
            scrollVelocity = $scrollArea.scrollLeft() - lastScrollLeft; // Update velocity based on scroll change
            lastScrollLeft = $scrollArea.scrollLeft(); // Update last scroll position
        }
    });
});