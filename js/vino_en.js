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

//initialize TVii object
var tvii = {
    clientUrl: window.location.origin,
    timeInterval: null,
    suggestInterval: null,
    naviInterval: null,
    scrollProgramListInterval: null,
    isUserOperationLocked: false,
    userSlot: vino.act_getCurrentSlotNo(),
    canRequestSolvTask: false,
    scrollPosition: null,
    isOlvRequesting: false,
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
    pc: {
    },
    olv: {
        uploadPost: function () {
            this.feeling_id = 0;
            this.community_id = 0;
            this.app_data = '';
            this.topic_tag = '';
            this.search_key = '';
            this.is_autopost = 0;
            this.is_spoiler = 0;
            this.is_app_jumpable = 0;
            this.body = '';
            this.painting = '';
            this.language_id = parseInt(tvii.olv.getParamPackProperty("language_id").trim());
        },
        uploadReply: function () {
            this.feeling_id = 0;
            this.community_id = 0;
            this.app_data = '';
            this.is_autopost = 0;
            this.is_spoiler = 0;
            this.body = '';
            this.painting = '';
            this.language_id = parseInt(tvii.olv.getParamPackProperty("language_id").trim());
        },
        uploadMessage: function () {
            this.feeling_id = 0;
            this.app_data = '';
            this.is_autopost = 0;
            this.number = 0;
            this.message_to_pid = '';
            this.body = '';
            this.painting = '';
            this.search_key = '';
        },
        getParamPackProperty: function (key) {
            var param = vino.olv_getParameterPack();
            var decodedParam = Base64.decode(param);
            decodedParam = decodedParam.substring(1, decodedParam.length - 1);
            var parts = decodedParam.split("\\").map(function (item) {
                return item.trim();
            });

            var keyValuePairs = [];
            for (var i = 0; i < parts.length; i += 2) {
                keyValuePairs.push({ key: parts[i], value: parts[i + 1] });
            }

            for (var i = 0; i < keyValuePairs.length; i++) {
                if (keyValuePairs[i].key === key) {
                    return keyValuePairs[i].value;
                }
            }
            return null;
        },
        sendPost: function (uploadPost, callbackSuccess, callbackError) {
            var formData = new FormData();
            if (isEmpty(uploadPost.body)) {
                formData.append("painting", uploadPost.painting);
            } else {
                formData.append("body", uploadPost.body);
            }

            for (var key in uploadPost) {
                if (key !== "body" && key !== "painting") {
                    formData.append(key, uploadPost[key]);
                }
            }

            function isEmpty(data) {
                return data === "";
            }

            var olvPostReq = new XMLHttpRequest();
            olvPostReq.open("POST", tvii.clientUrl + "/v1/miiverse/upload_post")
            olvPostReq.setRequestHeader('X-Nintendo-Olv-User-Agent', vino.olv_getUserAgent());
            olvPostReq.setRequestHeader('X-Nintendo-Olv-Url', vino.olv_getHostName());
            olvPostReq.setRequestHeader('X-Nintendo-ParamPack', vino.olv_getParameterPack());
            olvPostReq.setRequestHeader('X-Nintendo-ServiceToken', vino.olv_getServiceToken());
            olvPostReq.onreadystatechange = function () {
                if (olvPostReq.readyState === 4) {
                    if (olvPostReq.status === 200) {
                        if (typeof callbackSuccess === 'function') {
                            callbackSuccess();
                        }
                    } else {
                        vino.runOliveErrorDialog(1152004);
                        if (typeof callbackError === 'function') {
                            callbackError();
                        }
                    }
                }
            }
            olvPostReq.send(formData);
        },
        sendMessage: function (uploadMessage, callbackSuccess, callbackError) {
            var formData = new FormData();
            if (isEmpty(uploadMessage.body)) {
                formData.append("painting", uploadMessage.painting);
            } else {
                formData.append("body", uploadMessage.body);
            }

            for (var key in uploadMessage) {
                if (key !== "body" && key !== "painting") {
                    formData.append(key, uploadMessage[key]);
                }
            }

            function isEmpty(data) {
                return data === "";
            }
            var olvPostReq = new XMLHttpRequest();
            olvPostReq.open("POST", tvii.clientUrl + "/v1/miiverse/upload_message")
            olvPostReq.setRequestHeader('X-Nintendo-Olv-User-Agent', vino.olv_getUserAgent());
            olvPostReq.setRequestHeader('X-Nintendo-Olv-Url', vino.olv_getHostName());
            olvPostReq.setRequestHeader('X-Nintendo-ParamPack', vino.olv_getParameterPack());
            olvPostReq.setRequestHeader('X-Nintendo-ServiceToken', vino.olv_getServiceToken());
            olvPostReq.onreadystatechange = function () {
                if (olvPostReq.readyState === 4) {
                    if (olvPostReq.status === 200) {
                        if (typeof callbackSuccess === 'function') {
                            callbackSuccess();
                        }
                    } else {
                        vino.runOliveErrorDialog(1153028);
                        if (typeof callbackError === 'function') {
                            callbackError();
                        }
                    }
                }
            }
            olvPostReq.send(formData);
        },
        getPosts: function (query, callbackSuccess, callbackError) {
            tvii.isOlvRequesting = true;
            var olvPostReq = new XMLHttpRequest();
            olvPostReq.open("GET", tvii.clientUrl + "/v1/miiverse/get_post" + query)
            olvPostReq.setRequestHeader('X-Nintendo-Olv-User-Agent', vino.olv_getUserAgent());
            olvPostReq.setRequestHeader('X-Nintendo-Olv-Url', vino.olv_getHostName());
            olvPostReq.setRequestHeader('X-Nintendo-ParamPack', vino.olv_getParameterPack());
            olvPostReq.setRequestHeader('X-Nintendo-ServiceToken', vino.olv_getServiceToken());
            olvPostReq.onreadystatechange = function () {
                if (olvPostReq.readyState === 4) {
                    if (olvPostReq.status === 200 && olvPostReq.responseXML) {
                        if (typeof callbackSuccess === 'function') {
                            tvii.isOlvRequesting = false;
                            var miiResponse = olvPostReq.responseXML;
                            var postsContainer = miiResponse.getElementsByTagName('posts')[0];
                            var posts = postsContainer.getElementsByTagName('post');

                            var postObjects = [];

                            for (var i = 0; i < posts.length; i++) {
                                var post = posts[i];
                                var postObject = {};

                                var paintingTag = post.getElementsByTagName('painting')[0];

                                if (paintingTag) {
                                    postObject = {
                                        community_id: post.getElementsByTagName('community_id')[0].textContent,
                                        country_id: post.getElementsByTagName('country_id')[0].textContent,
                                        created_at: post.getElementsByTagName('created_at')[0].textContent,
                                        feeling_id: post.getElementsByTagName('feeling_id')[0].textContent,
                                        id: post.getElementsByTagName('id')[0].textContent,
                                        app_data: post.getElementsByTagName('app_data')[0] ? post.getElementsByTagName('app_data')[0].textContent : "",
                                        is_autopost: post.getElementsByTagName('is_autopost')[0].textContent,
                                        is_spoiler: post.getElementsByTagName('is_spoiler')[0].textContent,
                                        is_app_jumpable: post.getElementsByTagName('is_app_jumpable')[0].textContent,
                                        empathy_count: post.getElementsByTagName('empathy_count')[0].textContent,
                                        language_id: post.getElementsByTagName('language_id')[0].textContent,
                                        mii_face_url: post.getElementsByTagName('mii_face_url')[0].textContent,
                                        pid: post.getElementsByTagName('pid')[0].textContent,
                                        platform_id: post.getElementsByTagName('platform_id')[0].textContent,
                                        region_id: post.getElementsByTagName('region_id')[0].textContent,
                                        reply_count: post.getElementsByTagName('reply_count')[0].textContent,
                                        screen_name: post.getElementsByTagName('screen_name')[0].textContent,
                                        painting: {
                                            url: paintingTag.getElementsByTagName('url')[0].textContent
                                        },
                                    };
                                } else {
                                    postObject = {
                                        community_id: post.getElementsByTagName('community_id')[0].textContent,
                                        country_id: post.getElementsByTagName('country_id')[0].textContent,
                                        created_at: post.getElementsByTagName('created_at')[0].textContent,
                                        feeling_id: post.getElementsByTagName('feeling_id')[0].textContent,
                                        id: post.getElementsByTagName('id')[0].textContent,
                                        app_data: post.getElementsByTagName('app_data')[0] ? post.getElementsByTagName('app_data')[0].textContent : "",
                                        is_autopost: post.getElementsByTagName('is_autopost')[0].textContent,
                                        is_spoiler: post.getElementsByTagName('is_spoiler')[0].textContent,
                                        is_app_jumpable: post.getElementsByTagName('is_app_jumpable')[0].textContent,
                                        empathy_count: post.getElementsByTagName('empathy_count')[0].textContent,
                                        language_id: post.getElementsByTagName('language_id')[0].textContent,
                                        mii_face_url: post.getElementsByTagName('mii_face_url')[0].textContent,
                                        pid: post.getElementsByTagName('pid')[0].textContent,
                                        platform_id: post.getElementsByTagName('platform_id')[0].textContent,
                                        region_id: post.getElementsByTagName('region_id')[0].textContent,
                                        reply_count: post.getElementsByTagName('reply_count')[0].textContent,
                                        screen_name: post.getElementsByTagName('screen_name')[0].textContent,
                                        body: post.getElementsByTagName('body')[0].textContent,
                                    };
                                }

                                postObjects.push(postObject);
                            }

                            callbackSuccess(postObjects);
                        }
                    } else {
                        tvii.isOlvRequesting = false;
                        vino.runOliveErrorDialog(1155016);
                        if (typeof callbackError === 'function') {
                            callbackError();
                        }
                    }
                }
            }
            olvPostReq.send();
        },
        getMiisByPidQuery: function (pidQuery, callbackSuccess, callbackError) {
            var miisQ = new XMLHttpRequest();
            miisQ.open("GET", tvii.clientUrl + "/v1/miis?pids=" + pidQuery + "&type=pretendo");
            miisQ.onreadystatechange = function () {
                if (miisQ.readyState === 4) {
                    if (miisQ.status === 200 && miisQ.responseXML) {
                        var miisel = miisQ.responseXML;
                        var miis = miisel.getElementsByTagName("mii");
                        var miiObjects = [];
                        for (var i = 0; i < miis.length; i++) {
                            var mii = miis[i];
                            var normalFace;
                            var happyFace;
                            var likeFace;
                            var frustratedFace;
                            var puzzledFace;
                            var surprisedFace;
                            var wholeBody;
                            var imageEl = mii.getElementsByTagName("images")[0].getElementsByTagName("image");
                            for (var j = 0; j < imageEl.length; j++) {
                                var typeEl = imageEl[j].getElementsByTagName("type")[0];
                                if (typeEl) {
                                    var type = typeEl.textContent;
                                    var imageUrl = imageEl[j].getElementsByTagName("url")[0].textContent;

                                    switch (type) {
                                        case "normal_face":
                                            normalFace = imageUrl;
                                            break;
                                        case "happy_face":
                                            happyFace = imageUrl;
                                            break;
                                        case "like_face":
                                            likeFace = imageUrl;
                                            break;
                                        case "frustrated_face":
                                            frustratedFace = imageUrl;
                                            break;
                                        case "puzzled_face":
                                            puzzledFace = imageUrl;
                                            break;
                                        case "surprised_face":
                                            surprisedFace = imageUrl;
                                            break;
                                        case "whole_body":
                                            wholeBody = imageUrl;
                                            break;
                                        default:
                                            break;
                                    }
                                }
                            }
                            var miiObject = {
                                mii_name: mii.getElementsByTagName("name")[0].textContent,
                                mii_pid: mii.getElementsByTagName("pid")[0].textContent,
                                mii_user_id: mii.getElementsByTagName("user_id")[0].textContent,
                                expressions: {
                                    normal_face: normalFace,
                                    happy_face: happyFace,
                                    like_face: likeFace,
                                    surprised_face: surprisedFace,
                                    puzzled_face: puzzledFace,
                                    frustrated_face: frustratedFace,
                                    whole_body: wholeBody
                                }
                            };
                            miiObjects.push(miiObject);
                        }
                        callbackSuccess(miiObjects);
                    } else {
                        vino.runOliveErrorDialog(1159999);
                        if (typeof callbackError === 'function') {
                            callbackError();
                        }
                    }
                }
            };
            miisQ.send();
        },
        getCommunities: function (query, callbackSuccess, callbackError) {
            tvii.isOlvRequesting = true;
            var olvPostReq = new XMLHttpRequest();
            olvPostReq.open("GET", tvii.clientUrl + "/v1/miiverse/communities" + query)
            olvPostReq.setRequestHeader('X-Nintendo-Olv-User-Agent', vino.olv_getUserAgent());
            olvPostReq.setRequestHeader('X-Nintendo-Olv-Url', vino.olv_getHostName());
            olvPostReq.setRequestHeader('X-Nintendo-ParamPack', vino.olv_getParameterPack());
            olvPostReq.setRequestHeader('X-Nintendo-ServiceToken', vino.olv_getServiceToken());
            olvPostReq.onreadystatechange = function () {
                if (olvPostReq.readyState === 4) {
                    if (olvPostReq.status === 200 && olvPostReq.responseXML) {
                        if (typeof callbackSuccess === 'function') {
                            tvii.isOlvRequesting = false;
                            var communityResponse = olvPostReq.responseXML;
                            var communityContainer = communityResponse.getElementsByTagName('communities')[0];
                            var communities = communityContainer.getElementsByTagName('community');

                            var communityObjects = [];

                            for (var i = 0; i < communities.length; i++) {
                                var com = communities[i];
                                var comObject = {
                                    olive_community_id: com.getElementsByTagName('olive_community_id')[0].textContent,
                                    community_id: com.getElementsByTagName('community_id')[0].textContent,
                                    name: com.getElementsByTagName('name')[0].name,
                                    description: com.getElementsByTagName('description')[0].textContent,
                                    icon: com.getElementsByTagName('icon')[0].textContent,
                                    icon_3ds: com.getElementsByTagName('icon_3ds')[0].textContent,
                                    pid: com.getElementsByTagName('pid')[0].textContent,
                                    app_data: com.getElementsByTagName('app_data')[0].textContent,
                                    is_user_community: com.getElementsByTagName('is_user_community')[0].textContent
                                };
                                communityObjects.push(comObject);
                            }

                            callbackSuccess(communityObjects);
                        }
                    } else {
                        tvii.isOlvRequesting = false;
                        vino.runOliveErrorDialog(1155925);
                        if (typeof callbackError === 'function') {
                            callbackError();
                        }
                    }
                }
            }
            olvPostReq.send();
        },
        getDirectMessages: function (query, callbackSuccess, callbackError) {

        },
        requestNotifications: function (callbackSuccess, callbackError) {

        }
    },
    browse: {
        ajax: {
            get: function (url, data, headers, successCallback, errorCallback) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: data,
                    headers: headers,
                    success: function (data) {
                        successCallback(data);
                    },
                    error: function (xhr, status, error) {
                        errorCallback(xhr, status, error)
                    }
                });
            },
            post: function (url, data, headers, successCallback, errorCallback) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                    headers: headers,
                    success: function (data) {
                        successCallback(data);
                    },
                    error: function (xhr, status, error) {
                        errorCallback(xhr, status, error)
                    }
                });
            },
            hasJSONError: function (xhr) {
                return JSON.parse(xhr.responseText) && JSON.parse(xhr.responseText).success != 1;
            }
        },
        pjax: {
            go: function (url, replace, push) {
                $.pjax({
                    url: url,
                    container: '.wrapper',
                    timeout: 0,
                    replace: replace,
                    push: push
                });
            }
        },
        openMenu: function () {
            tvii.browse.pjax.go(tvii.clientUrl + '/menu');
        },
        openProgramPage: function (program) {
            tvii.browse.pjax.go(tvii.clientUrl + '/program' + '?program=' + program);
        },
        openActorPage: function (actor) {
            tvii.browse.pjax.go(tvii.clientUrl + '/actor' + '?actor=' + actor);
        },
        top: function (replace) {
            if (replace) {
                tvii.browse.pjax.go(tvii.clientUrl + '/', true, false);
            } else {
                tvii.browse.pjax.go(tvii.clientUrl + '/');
            }
        },
        openGuide: function () {
            tvii.browse.pjax.go(tvii.clientUrl + '/guide', true, false);
        }
    },
    utils: {
        buttonType: {
            32768: "a",
            16384: "b",
            8192: "x",
            4096: "y",
            32: "l",
            16: "r",
            128: "zl",
            64: "zr",
            8: "plus",
            4: "minus"
        },
        initButton: function () {
            function lerp(a, b, alpha) {
                return a + alpha * (b - a)
            }

            var lockW = null;

            var stickCheck = setInterval(function () {
                if (tvii.isUserOperationLocked) return;
                wiiu.gamepad.update();
                if (wiiu.gamepad.isDataValid === 0) return;

                switch (wiiu.gamepad.hold) {
                    case 1073741824:
                        vino.navi_reset();
                        document.body.scrollLeft += lerp(-15, -15, (wiiu.gamepad.lStickX));
                        break;
                    case 536870912:
                        vino.navi_reset();
                        document.body.scrollLeft += lerp(-15, 15, (wiiu.gamepad.lStickX));
                        break;
                    case 268435456:
                        vino.navi_reset();
                        document.body.scrollTop += lerp(-15, -15, (wiiu.gamepad.lStickY));
                        break;
                    case 134217728:
                        vino.navi_reset();
                        document.body.scrollTop += lerp(15, 15, (wiiu.gamepad.lStickY));
                        break;
                }
            }, 5);

            var inputCheck = setInterval(function () {
                if (tvii.isUserOperationLocked) return;
                wiiu.gamepad.update();
                if (wiiu.gamepad.isDataValid === 0) {
                    lockW = null;
                    return;
                }

                if (wiiu.gamepad.hold != lockW) {
                    lockW = wiiu.gamepad.hold;
                    $('.accesskey-' + tvii.utils.buttonType[lockW] + ':visible').trigger('click');
                    $('.accesskey-' + tvii.utils.buttonType[lockW] + '.hidden').trigger('click');
                };

            }, 0);

        },
        prepareSound: function () {
            var els = $("[data-sound]");
            if (!els.length) return;
            els.on("click", playSound)

            function playSound(e) {
                vino.soundPlayVolume($(e.currentTarget).attr('data-sound'), 25);
            }
        },
        prepareTouchEffect: function () {
            var elt = $("a:not([no_touch]), input:not([no_touch]), textarea:not([no_touch]), button:not([no_touch])");
            if (!elt.length) return;
            elt.on("click", touchEffect)
            function touchEffect() {
                if (wiiu.gamepad.hold || vino.navi_getRect()) { return; }
                vino.lyt_startTouchEffect();
            }
        },
        prepareMouseEffect: function () {
            var elm = $("[navi_mouse]");
            if (!elm.length) return;
            elm.on("click", mouseEffect)
            function mouseEffect(e) {
                var mRect = this.getBoundingClientRect();
                vino.lyt_startTouchNodeEffect(mRect.left, mRect.top, mRect.width, mRect.height);
            }
        },
        prepareHover: function () {
            var elh = $("[data-hover]");
            if (!elh.length) return;

            var sel = null;

            elh.on("mousedown", function () {
                sel = $(this);
                if ($(this).attr("data-hover-sound") != null) {
                    vino.soundPlay($(this).attr("data-hover-sound"));
                } else {
                    vino.soundPlay('SE_COMMON_TOUCH_ON');
                }
                $(this).data("soundPlayed", true);

                $(this).addClass("hover");
            });

            elh.on("mouseout", function (evt) {
                if (sel && sel.length && !sel.is($(this))) {
                    return;
                };

                if (sel == null) {
                    $(this).removeClass("hover");
                    return;
                }

                $(this).removeClass("hover");
                $(this).data("soundPlayed", false);

                if ($(this).attr("data-hover-out-sound") != null) {
                    vino.soundPlay($(this).attr("data-hover-out-sound"));
                } else {
                    vino.soundPlay('SE_COMMON_TOUCH_CANCEL');
                }
                sel = null;
            });

            elh.on("mouseup", function () {
                sel = null;
                $(this).data("soundPlayed", false)
                $(this).removeClass("hover");
            });
        },
        setDateTimeInterval: function () {
            tvii.timeInterval = setInterval(timeUpdate, 1000);
            timeUpdate();

            function timeUpdate() {
                if (!$('.day-info').length) return;

                var now = new Date();

                var dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                var dayName = dayNames[now.getDay()];
                var day = now.getDate();
                var hours = now.getHours();
                var ampm = hours >= 12 ? 'pm' : 'am';

                hours = hours % 12;
                hours = hours ? hours : 12;

                var minutes = now.getMinutes();
                var seconds = now.getSeconds();

                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;

                $('.day-info .date-day-name').text(dayName);
                $('.day-info .date-day').text(day);
                $('.day-info .date-time').text(hours + ':' + minutes + ' ' + ampm);

                var dateClassSw = $('.day-info .date-day-name').text();

                switch (dateClassSw) {
                    case 'Sun':
                        $('.day-info .date-day-name').addClass('sun');
                        break;
                    case 'Mon':
                        $('.day-info .date-day-name').addClass('mon');
                        break;
                    case 'Tue':
                        $('.day-info .date-day-name').addClass('tue');
                        break;
                    case 'Wed':
                        $('.day-info .date-day-name').addClass('wed');
                        break;
                    case 'Thu':
                        $('.day-info .date-day-name').addClass('thu');
                        break;
                    case 'Fri':
                        $('.day-info .date-day-name').addClass('fri');
                        break;
                    case 'Sat':
                        $('.day-info .date-day-name').addClass('sat');
                        break;
                }
            };
        },
        setSuggestCheckInterval: function () {
            var cachedInput = "";
            var suggestReqInProg = false;
            // Set the interval to run getSuggest function
            tvii.suggestInterval = setInterval(getSuggest, 0);
            getSuggest();

            function getSuggest() {
                var input = vino.suggest_getString();

                if (vino.suggest_isOpening() && input !== cachedInput && !suggestReqInProg) {
                    suggestReqInProg = true;

                    tvii.browse.ajax.get(
                        tvii.clientUrl + "/v1/recommend?query=" + encodeURIComponent(input),
                        {}, {},
                        function (data) {
                            var sugXML = data;
                            var matches = sugXML.getElementsByTagName("name");
                            if (!matches) {
                                vino.suggest_reset();
                                cachedInput = input;
                                suggestReqInProg = false;
                                return;
                            }
                            var suggestions = [];

                            for (var i = 0; i < Math.min(matches.length, 10); i++) {
                                var matchText = matches[i].textContent;
                                suggestions.push(matchText);
                            }

                            while (suggestions.length < 10) {
                                suggestions.push("");
                            }

                            vino.suggest_set(
                                suggestions[0],
                                suggestions[1],
                                suggestions[2],
                                suggestions[3],
                                suggestions[4],
                                suggestions[5],
                                suggestions[6],
                                suggestions[7],
                                suggestions[8],
                                suggestions[9]
                            );
                            cachedInput = input;
                            suggestReqInProg = false;
                        },
                        function () {
                            vino.suggest_reset();
                            cachedInput = input; // Update the cached input
                            suggestReqInProg = false; // Reset request in progress flag
                        }
                    )
                }
            }
        },
        destroyAllIntervals: function () {
            clearInterval(tvii.timeInterval)
            clearInterval(tvii.suggestInterval)
            clearInterval(tvii.naviInterval)
            clearInterval(tvii.scrollProgramListInterval)
        },
        destroyAllEventListeners: function () {
            $(window).off("scroll");
            $("body").off("scroll");
        },
        setNaviTargetScrollInterval: function () {

            tvii.naviInterval = setInterval(function () {
                if (wiiu.gamepad.tpTouch == 1 && vino.navi_getRect()) {
                    vino.navi_reset();
                }
                checkNaviBox()
            }, 0);

            var prevNaviBoxCoordinates = null;

            function checkNaviBox() {
                var naviBoxCoordinates = vino.navi_getRect();
                if (!naviBoxCoordinates) return;
                if (naviBoxCoordinates && naviBoxCoordinates !== prevNaviBoxCoordinates) {
                    var coordinatesArray = naviBoxCoordinates.split(',').map(function (item) {
                        return Number(item);
                    });
                    var x = coordinatesArray[0];
                    var y = coordinatesArray[1];
                    var width = coordinatesArray[2];
                    var height = coordinatesArray[3];
                    var scrollThreshold = 30;
                    var scrollSpeed = 40;

                    if (x < scrollThreshold && window.scrollBy) {
                        window.scrollBy(-scrollSpeed, 0);
                    } else if (x + width > window.innerWidth - scrollThreshold && window.scrollBy) {
                        window.scrollBy(scrollSpeed, 0);
                    }

                    if (y < scrollThreshold && window.scrollBy) {
                        window.scrollBy(0, -scrollSpeed);
                    } else if (y + height > window.innerHeight - scrollThreshold && window.scrollBy) {
                        window.scrollBy(0, scrollSpeed);
                    }
                    prevNaviBoxCoordinates = naviBoxCoordinates;
                }
            }
        },
        setNaviTargetResetInterval: function () {
            tvii.naviInterval = setInterval(function () {
                if (wiiu.gamepad.tpTouch == 1 && vino.navi_getRect()) {
                    vino.navi_reset();
                }
            }, 0);
        },
        back: function () {
            $(window).trigger('tvii:back', { page: window.location.pathname });
            history.back();
        },
        prepare: function () {
            vino.lyt_setIsEnableClientLoadingIcon(true);
            vino.lyt_setIsEnableWhiteMask(false);
            vino.video_enableOnTV(true);

            //Enable IR right away, we do not need the DLC check since it was Japan only.
            vino.ir_enableCodeset(1);
            tvii.utils.resetLoadingIconPosition();
            tvii.utils.initButton();

            //if were on account creation, we dont really need to set anything else
            if (window.location.pathname.match(/^\/create$/)) {
                return;
            }

            tvii.utils.requestProfileUpdateWithCallback(function (data) {
                $(".loading-el").removeClass("loading-el");
                sessionStorage.setItem("profileUpdateDone", "true");
                if (window.location.pathname === '/') {
                    vino.lyt_drawFixedFrame(455, 211, 383, 86);
                }
            }, function () {
                alert("Could not update profile, Nintendo TVii will now close.")
                vino.exit();
            });

            tvii.utils.setActivityInterval();

            tvii.utils.getRandomTopBarColor();
            tvii.utils.setLoadingScreenBG();
            //if TVii was returned from the Internet Browser (jumped from the app), redirect to the original page
            tvii.utils.checkReturnedFlagAndRedirect();
        },
        getRandomTopBarColor: function () {
            var barColors = ['blue', 'red', 'green', 'purple', 'pink'];
            if (!sessionStorage.getItem('vino_top_bar_color')) {
                var randomIndex = Math.floor(Math.random() * barColors.length);
                var topBarColor = barColors[randomIndex];
                sessionStorage.setItem('vino_top_bar_color', topBarColor);
            }
        },
        setTopBarColor: function () {
            $('.top-bar').addClass(sessionStorage.getItem('vino_top_bar_color'));
        },
        checkReturnedFlagAndRedirect: function () {
            if (vino.ls_getItem('is_returned_redirect_url') && vino.isReturnedFromOtherApplication()) {
                var url = vino.ls_getItem('is_returned_redirect_url');
                vino.ls_removeItem('is_returned_redirect_url');
                tvii.browse.pjax.go(url + '&returned=true')
            }
        },
        jumpToBrowserAndSetReturnedFlag: function (url) {
            vino.ls_setItem('is_returned_redirect_url', url);
            vino.jumpToBrowser(url, true);
        },
        setTabMenuTips: function () {
            var tipsArray = [
                "When you are using a program, open the  HOME Menu and launch this app to quickly check and then return to your suspended program.",
                "Use the  stick to scroll the page, and use  to highlight some of the selectable options that you can pick pressing  over it.",
                "You can share and see comments on Miiverse about programs currently streaming by selecting a program and touching the Miiverse icon.",
                "Every time the app is restarted, the color of the top bar changes, and the tips shown in the Popular and My Favorites page too.",
                "You can report any issues you have with Nintendo TVii within the Manual in the Menu button, which is on the top right corner.",
                "Nintendo TVii loads movies, shows and live events no matter the rating, so enable Parental Controls if you need to hide programs shown.",
                "Did you know you can recommend programs to your friends using Miiverse as a message by selecting it on the Miiverse menu on a program?",
                "You can see programs your friends have favorited by touching the All Programs tab and filtering the programs as 'Favorited by Friends'.",
                "It is recommended to read the Manual in the Menu button on the top right corner to learn what Nintendo TVii offers and how to use it.",
            ];

            var tipContentElement = $('.daily-tip .tip-content');
            var randomIndex = Math.floor(Math.random() * tipsArray.length);
            tipContentElement.text(tipsArray[randomIndex]);
        },
        requestProfileUpdateWithCallback: function (callbackSuccessEx, callbackErrorEx) {
            vino.loading_setIconAppear(true);
            var updateForm = new FormData();
            updateForm.append("mii_country", vino.info_getCountry())
            updateForm.append("mii_language", vino.info_getLanguage())
            updateForm.append("mii_name", vino.act_getName(tvii.userSlot))
            updateForm.append("mii_img", vino.act_getMiiImage(tvii.userSlot))
            updateForm.append("mii_friends", vino.fp_getFriendList())

            tvii.browse.ajax.post(
                tvii.clientUrl + "/v1/me/update",
                updateForm, {},
                function (data) {
                    $("body").attr("updated", "true");
                    callbackSuccessEx(data);
                    vino.loading_setIconAppear(false);
                },
                function (xhr) {
                    $("body").attr("updated", "false");
                    callbackErrorEx(xhr);
                    vino.loading_setIconAppear(false);
                }
            )
        },
        setActivityInterval: function () {
            var onlineInterval = setInterval(setProfileOnline, 120000);
            setProfileOnline();
            function setProfileOnline() {
                tvii.browse.ajax.post(
                    tvii.clientUrl + "/v1/me/activity",
                    {},
                    {},
                    function () {
                        console.log("Still active.")
                    },
                    function () {
                        console.log("Error posting activity.")
                    }
                );
            }

        },
        setLoadingScreenBG: function () {
            if (vino.title_getImageCount() >= 1 &&
                !vino.title_hasImage("vino_blue") &&
                !vino.title_hasImage("vino_orange") &&
                !vino.title_hasImage("vino_pink")
            ) {
                vino.title_clearImage();
                vino.title_setFixedImage(tvii.clientUrl + "/img/title/blue.png", "vino_blue", "", "", "", 2);
                vino.title_setFixedImage(tvii.clientUrl + "/img/title/orange.png", "vino_orange", "", "", "", 2);
                vino.title_setFixedImage(tvii.clientUrl + "/img/title/pink.png", "vino_pink", "", "", "", 2);
            }
        },
        resetLoadingIconPosition: function () {
            vino.loading_setIconRect(360, 160, 120, 120);
        },
        lockUserOperation: function (lock) {
            tvii.isUserOperationLocked = lock;
            console.log("Lock User Operation: " + lock)
            $('body').css('pointer-events', lock ? 'none' : 'auto');
        }
    }
};

tvii.router.connect("^/$", function () {
    if (sessionStorage.getItem("profileUpdateDone") == "true") {
        $(".loading-el").removeClass("loading-el");
        vino.lyt_drawFixedFrame(455, 211, 383, 86);
    }

    tvii.utils.setDateTimeInterval();
    tvii.utils.prepareSound();
    tvii.utils.prepareTouchEffect();
    tvii.utils.setTabMenuTips();
    tvii.utils.setTopBarColor();
    tvii.utils.prepareHover();
    tvii.utils.prepareMouseEffect();
    tvii.utils.setNaviTargetResetInterval();

    $(".exitbtn").on("click", function () {
        vino.lyt_reset();
        vino.exit();
    })

    $(".menubtn").on("click", function () {
        tvii.browse.openMenu();
    })

    $(".label.guide").on("click", function () {
        tvii.browse.openGuide();
    })

    $(".scr-prev").on("click", function () {
        if (!$(".live-program").length) {
            return;
        }
        var prev = $(".live-program.selected").prev();

        if (prev.length > 0 || !$(".live-program:first-child").hasClass("selected")) {
            clearInterval(tvii.scrollProgramListInterval)
            vino.soundPlayVolume("SE_PROGRAM_SLIDE_SPEED", 25);
            $(".live-program").removeClass("selected");
            prev.addClass("selected");
            changePreview(prev);
            scrollToProgram(prev);
        }
    })

    $(".scr-next").on("click", function () {
        if (!$(".live-program").length) {
            return;
        }
        var next = $(".live-program.selected").next();
        if (next.length > 0) {
            clearInterval(tvii.scrollProgramListInterval)
            vino.soundPlayVolume("SE_PROGRAM_SLIDE_SPEED", 25);
            $(".live-program").removeClass("selected");
            next.addClass("selected");
            changePreview(next);
            scrollToProgram(next);
        }
    })

    $(".scr-next").on("click", function () {
        if (!$(".live-program").length) {
            return;
        }
        vino.lyt_decideFixedFrame();
        vino.soundPlayVolume("SE_APPEAR_DETAIL", 25);
        tvii.browse.openProgramPage($(".live-program.selected").attr('data-program-id'));
    })

    function changePreview(program) {
        vino.loading_setIconRect(180, 120, 100, 100);
        vino.loading_setIconAppear(true);
        var streamingI = program.attr('data-streaming');
        var ThisShowName = program.attr('data-program-name');
        var ThisShowYear = program.attr('data-program-year');
        var ThisShowAge = program.attr('data-program-rating');
        var ThisShowDescription = program.attr('data-program-description');

        $('.program-preview .show-title').text(ThisShowName);
        $('.program-preview .show-services').text(streamingI);
        $('.program-preview .show-rating').text(ThisShowAge);
        $('.program-preview .show-year').text(ThisShowYear);
        $('.program-preview .show-description').text(ThisShowDescription);
        vino.loading_setIconAppear(false);
    }

    var liveProgram = $(".live-program");

    liveProgram.on('click', function () {
        vino.lyt_startTouchEffect();
        if ($(this).hasClass('selected')) {
            vino.lyt_decideFixedFrame();
            vino.soundPlayVolume("SE_APPEAR_DETAIL", 25);
            tvii.browse.openProgramPage($(this).attr('data-program-id'));
        } else {
            clearInterval(tvii.scrollProgramListInterval)
            vino.soundPlayVolume("SE_PROGRAM_SLIDE_SPEED", 25);
            changePreview($(this));
            scrollToProgram($(this));
        }

        var allLivePrograms = $('.live-program');
        allLivePrograms.removeClass("selected");

        $(this).addClass('selected');
    });

    function snapToCenter() {
        var programHeight = $('.live-program').outerHeight();
        var scrollTop = $(window).scrollTop();
        var centerIndex = Math.round(scrollTop / programHeight);
        var targetScrollTop = centerIndex * programHeight;

        targetScrollTop = Math.min(targetScrollTop, $(document).height() - $(window).height());

        if (targetScrollTop !== scrollTop) {
            $('body, html').scrollTop(targetScrollTop);
        }

        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            vino.soundPlayVolume("SE_LIST_SCROLL_END", 20);
        }

        if ($(window).scrollTop() === 0) {
            vino.soundPlayVolume("SE_LIST_SCROLL_END", 20);
        }
    }

    function scrollToProgram(program) {
        if (program && program.offset().top !== undefined) {
            var windowHeight = $(window).height();
            var programTop = program.offset().top;

            // Calculate the target scroll position
            var targetScrollTop;
            if (programTop < windowHeight / 2) {
                // If the program is near the top of the screen, scroll to the top
                targetScrollTop = 0;
            } else if (programTop > $(document).height() - windowHeight / 2) {
                // If the program is near the bottom of the screen, scroll to the bottom
                targetScrollTop = $(document).height() - windowHeight;
            } else {
                // Scroll so that the program is centered vertically on the screen
                targetScrollTop = programTop - windowHeight / 2 + program.outerHeight() / 2;
            }

            // Scroll to the target position
            $('body, html').scrollTop(targetScrollTop);
        }
    }

    function handleScroll() {
        vino.soundPlayVolume("SE_LIST_SCROLL", 15);

        handleScrollEnd();

        function handleScrollEnd() {
            clearInterval(tvii.scrollProgramListInterval)
            tvii.scrollProgramListInterval = setTimeout(function () {
                snapToCenter();
            }, 200);
        }
    }

    $(window).on('scroll', handleScroll);

    var firstChild = $('.scroll-programs > :nth-child(2)');
    var firstLoad = $('header.top-bar');

    if (firstLoad.attr('data-page-first-load') == "0") {
        firstChild.addClass('selected');
        firstLoad.attr('data-page-first-load', '1')

        var bootYear = firstChild.attr('data-program-year');
        var bootAge = firstChild.attr('data-program-rating');
        var bootStreaming = firstChild.attr('data-streaming');
        var bootThisShowName = firstChild.attr('data-program-name');
        var bootThisShowDescription = firstChild.attr('data-program-description');

        $('.program-preview .show-services').text(bootStreaming);
        $('.program-preview .show-title').text(bootThisShowName);
        $('.program-preview .show-year').text(bootYear);
        $('.program-preview .show-rating').text(bootAge);
        $('.program-preview .show-description').text(bootThisShowDescription);
    } else {
        var selectedP = $(".live-program.selected")
        changePreview(selectedP);
        scrollToProgram(selectedP);
        vino.lyt_drawFixedFrame(455, 211, 383, 86);
    }
});

tvii.router.connect("^/guide$", function () {
    tvii.utils.setDateTimeInterval();
    tvii.utils.prepareSound();
    tvii.utils.prepareTouchEffect();
    tvii.utils.setTabMenuTips();
    tvii.utils.setTopBarColor();
    tvii.utils.prepareHover();
    tvii.utils.prepareMouseEffect();
    tvii.utils.setNaviTargetResetInterval();

    $(".exitbtn").on("click", function () {
        vino.lyt_reset();
        vino.exit();
    })

    $(".menubtn").on("click", function () {
        tvii.browse.openMenu();
    })

    $(".label.popular").on("click", function () {
        tvii.browse.top(true);
    })

    vino.loading_setIconAppear(true);

    //New guide code TODO
    vino.loading_setIconAppear(false);
});

// Favorites page code
tvii.router.connect("^/create", function () {
    tvii.utils.setNaviTargetScrollInterval();
    tvii.utils.resetLoadingIconPosition();
    tvii.utils.setSuggestCheckInterval();
    tvii.utils.prepareSound();
    tvii.utils.prepareTouchEffect();
    tvii.utils.prepareMouseEffect();

    vino.soundStopAll();
    vino.soundPlayVolume("SE_APP_START_SUB", 25);

    $("[data-swap]").off("click", swapScreens)
    $("[data-swap]").on("click", swapScreens)

    $("[data-finish-setup]").off("click", createAccount)
    $("[data-finish-setup]").on("click", createAccount)

    function createAccount() {
        tvii.utils.lockUserOperation(true);
        vino.loading_setIconAppear(true);
        var favoritedPrograms = $("[program-id-favorite][data-favorited='true']");

        var values = favoritedPrograms.map(function () {
            return $(this).attr("program-id-favorite");
        }).get();

        var userFavoritedValues = values.join(",");
        var date = $('select[name="d"]').val() + "/" + $('select[name="m"]').val() + "/" + $('select[name="y"]').val();
        var newUserForm = new FormData();
        newUserForm.append("pid", vino.act_getPid(tvii.userSlot))
        newUserForm.append("mii_language", vino.info_getLanguage())
        newUserForm.append("mii_country", vino.info_getCountry())
        newUserForm.append("mii_name", vino.act_getName(tvii.userSlot))
        newUserForm.append("mii_img", vino.act_getMiiImage(tvii.userSlot))
        newUserForm.append("mii_friends", vino.fp_getFriendList())
        newUserForm.append("mii_birthday", date)
        newUserForm.append("mii_first_time_favorites", userFavoritedValues)
        newUserForm.append("mii_user_bio", $("textarea.brief_bio").val())

        tvii.browse.ajax.post(tvii.clientUrl + "/v1/create", newUserForm, {}, function () {
            tvii.utils.lockUserOperation(false);
            vino.loading_setIconAppear(false);

            $("#set-4").addClass("none");
            $("#set-5").removeClass("none");
            window.scrollTo(0, 0);

        }, function () {
            tvii.utils.lockUserOperation(false);
            vino.loading_setIconAppear(false);
            alert("An error ocurred creating your account.\nPlease try again.");
        });
    }

    $("input.recommend").off("change", getSearchedShows)
    $("input.recommend").on("change", getSearchedShows)

    function getSearchedShows() {
        vino.loading_setIconAppear(true);
        var search = $("input.recommend").val();

        vino.loading_setIconAppear(true);

        tvii.browse.ajax.get(
            tvii.clientUrl + "/v1/recommend?query=" +
            encodeURIComponent(search),
            {},
            {},
            function (XMLResponse) {
                var data = XMLResponse;
                var suggestElement = data.querySelector('suggest');

                var matchElements = suggestElement.querySelectorAll('match');

                for (var i = 0; i < matchElements.length; i++) {
                    var name = matchElements[i].querySelector('name').textContent;
                    var type = matchElements[i].querySelector('type').textContent;
                    var genre = '';

                    if (type == 'program') {
                        genre = matchElements[i].querySelector('genre').textContent;
                    }
                    var id = matchElements[i].querySelector('id').textContent;

                    var programA = document.createElement('a');
                    programA.classList.add("program")
                    programA.setAttribute("href", "javascript:void(0)")
                    programA.setAttribute("navi_target", "")
                    programA.setAttribute("navi_no_reset", "")
                    programA.setAttribute("data-favorited", "false")
                    programA.setAttribute("program-id-favorite", id)

                    var nameSpan = document.createElement('span');
                    nameSpan.classList.add("program-name")
                    nameSpan.textContent = name;
                    var genreSpan = document.createElement('span');
                    genreSpan.classList.add("program-genre")
                    genreSpan.textContent = genre;

                    programA.appendChild(nameSpan);
                    programA.appendChild(genreSpan);

                    var container = document.querySelector("#set-3 .programs-list-js-add");
                    var existingElement = container.querySelector('[program-id-favorite="' + programA.getAttribute('program-id-favorite') + '"]');
                    if (!existingElement && container.children.length < 30) {
                        container.appendChild(programA);
                    }


                }

                $(".setup-modal .programs .program").off("click", setUpToggleFavorite)
                $(".setup-modal .programs .program").on("click", setUpToggleFavorite)
                vino.loading_setIconAppear(false);
            },
            function () {
                vino.loading_setIconAppear(false);
            }
        )
    }

    function setUpToggleFavorite() {
        var show = this;
        vino.lyt_startTouchEffect();
        var mRect = show.getBoundingClientRect();
        vino.lyt_startTouchNodeEffect(mRect.left, mRect.top, mRect.width, mRect.height);
        if (show.getAttribute("data-favorited") == "true") {
            vino.soundPlayVolume("SE_NO_FAVORITE", 25)
            show.setAttribute("data-favorited", "false")
            show.classList.remove("checked");
        } else {
            vino.soundPlayVolume("SE_FAVORITE", 25)
            show.setAttribute("data-favorited", "true")
            show.classList.add("checked");
        }
    }

    function swapScreens(evt) {
        var screenHide = $(evt.target).attr("data-hide");
        var screenShow = $(evt.target).attr("data-show");
        $(screenHide).addClass("none");
        $(screenShow).removeClass("none");
        window.scrollTo(0, 0);
    }
});

// Menu code
tvii.router.connect("^/menu$", function () {
    tvii.utils.setSuggestCheckInterval();
    tvii.utils.prepareSound();
    tvii.utils.prepareTouchEffect();
    tvii.utils.prepareMouseEffect();
    tvii.utils.prepareHover();
    tvii.utils.setNaviTargetResetInterval();

    $(".back_button").on("click", function () {
        tvii.utils.back();
    })
});

tvii.router.connect("^/program$", function () {
    tvii.utils.setDateTimeInterval();
    tvii.utils.setTopBarColor();
    tvii.utils.prepareSound();
    tvii.utils.prepareTouchEffect();
    tvii.utils.prepareMouseEffect();
    tvii.utils.prepareHover();
    tvii.utils.setNaviTargetResetInterval();

    $(window).on('scroll', function () {
        updateButtonVisibility();
        if (vino.navi_getRect() && wiiu.gamepad.tpTouch === 1) {
            vino.navi_reset();
        }
    });

    $(".back_white_button:not(.miiverse-back)").on("click", function () {
        tvii.utils.back();
    })
    $(".before_page_button").on("click", function () { scrollLeftPPage() })
    $(".next_page_button").on("click", function () { scrollRightPPage() })
    $(".toppagebtn").on("click", function () { tvii.browse.top() })

    prepareMiiverseModal();

    var scrollAmount = 430;
    var scrollThreshold = 430;
    var scrollBackAmount = 464;
    var fadeDuration = 100;
    var isAnimating = false;

    function updateButtonVisibility() {
        var scrollLeft = $(window).scrollLeft();
        var maxScrollLeft = $(document).width() - $(window).width();

        if (scrollLeft < scrollThreshold) {
            $('.before_page_button').fadeOut(fadeDuration);
            $('.next_page_button').fadeIn(fadeDuration);
        } else if (scrollLeft >= maxScrollLeft) {
            $('.before_page_button').fadeIn(fadeDuration);
            $('.next_page_button').fadeOut(fadeDuration);
        } else {
            $('.before_page_button').fadeIn(fadeDuration);
            $('.next_page_button').fadeIn(fadeDuration);
        }
    }

    function scrollLeftPPage() {
        if (isAnimating) return;
        vino.soundPlayVolume("SE_MOVEPAGE_PLAY", 25);
        isAnimating = true;

        var scrollLeft = $(window).scrollLeft();
        var maxScrollLeft = $(document).width() - $(window).width();
        if (scrollLeft >= maxScrollLeft) {
            $('html, body').animate({ scrollLeft: '-=' + scrollBackAmount }, 600, function () {
                isAnimating = false;
                updateButtonVisibility();
            });
        } else {
            $('html, body').animate({ scrollLeft: 0 }, 600, function () {
                isAnimating = false;
                updateButtonVisibility();
            });
        }
    }

    function scrollRightPPage() {
        if (isAnimating) return;
        vino.soundPlayVolume("SE_MOVEPAGE_PLAY", 25);
        isAnimating = true;

        var scrollLeft = $(window).scrollLeft();
        var maxScrollLeft = $(document).width() - $(window).width();
        if (scrollLeft >= scrollThreshold) {
            $('html, body').animate({ scrollLeft: maxScrollLeft }, 600, function () {
                isAnimating = false;
                updateButtonVisibility();
            });
        } else {
            $('html, body').animate({ scrollLeft: '+=' + scrollAmount }, 600, function () {
                isAnimating = false;
                updateButtonVisibility();
            });
        }
    }

    updateButtonVisibility();
});

function toggleFavorite() {

}

function prepareMiiverseModal() {
    var pageType = /\/program/.test(window.location.pathname) ? $(".program-content") : $(".actor-content");
    var searchKey = $("header.miiverse-with-attributes-top-bar").attr("data-miiverse-search-key");
    var topicTag = $("header.miiverse-with-attributes-top-bar").attr("data-miiverse-topic-tag");
    var appData = $("header.miiverse-with-attributes-top-bar").attr("data-miiverse-app-data");
    var canClosePostApplet = true;
    //set distinct_pid to 1 after debug
    var queryPoll = '?language_id=254&with_mii=1&limit=50&distinct_pid=0&search_key=' + searchKey + "(P)";
    var query = '?language_id=254&with_mii=1&limit=50&distinct_pid=0&search_key=' + searchKey;

    setUpPostModal();

    function appendNormalPosts(posts) {
        $(".miiverse-posts .post-list").html("")
        tvii.utils.lockUserOperation(false);
        if (!posts || posts.length < 1) {
            var errorDiv = $("<span>");
            errorDiv.addClass("message");
            errorDiv.text("There are no posts.");
            $('.miiverse-posts .post-list').append(errorDiv);
            $('.miiverse-posts .loading_miiverse').removeClass('show');
            return;
        };
        for (var i = 0; i < posts.length; i++) {
            var post = posts[i];

            var postDiv = $('<div>');
            postDiv.addClass("post");
            postDiv.attr("data-miiverse-post-id", post.id);
            postDiv.attr("data-miiverse-is-spoiler", post.is_spoiler);

            var postMii = $('<img>');
            postMii.addClass("user-mii")
            postMii.attr("src", post.mii_face_url);

            var postUsername = $('<span>');
            postUsername.addClass("username");
            postUsername.text(post.screen_name);

            var postDate = $("<span>");
            postDate.addClass("post-date")
            postDate.text(post.created_at);

            if (post.body) {
                var postBody = $("<p>");
                postBody.addClass("body");
                postBody.text(post.body);
            } else {
                var postMemo = $("<p>");
                postMemo.addClass("memo")

                var postPainting = $("<img>");
                postPainting.addClass("painting");
                postPainting.attr("src", post.painting.url);
            }

            var postMeta = $("<div>")
            postMeta.addClass("post-meta")

            var replyCount = $("<span>")
            replyCount.addClass("reply-count")
            replyCount.text(post.reply_count);

            var empathyCount = $("<span>")
            empathyCount.addClass("yeah-count")
            empathyCount.text(post.empathy_count)

            var jumpToPost = $("<button>");
            jumpToPost.addClass("jump-miiverse")
            jumpToPost.on("click", function () {
                vino.soundPlayVolume("SE_WAVE_OK_SUB", 25);
                if (vino.runTwoButtonDialog("Do you want to close Nintendo TVii and\nsee this post on Miiverse?", "Cancel", "OK") == 0) {
                    vino.jumpToMiiversePostId($(this).parent().parent().attr("data-miiverse-post-id"), false);
                }
            });

            var yeahButton = $("<button>");
            yeahButton.addClass("yeah-button");
            yeahButton.text("Yeah!");
            yeahButton.on("click", function () {
                vino.soundPlayVolume("SE_WAVE_MII", 25);

            });

            postDiv.append(postMii)
            postDiv.append(postUsername)
            postDiv.append(postDate)
            if (post.body) {
                postDiv.append(postBody);
            } else {
                postMemo.append(postPainting);
                postDiv.append(postMemo);
            }
            postMeta.append(replyCount)
            postMeta.append(empathyCount)
            postMeta.append(jumpToPost)
            postMeta.append(yeahButton)
            postDiv.append(postMeta)

            $(".miiverse-posts .post-list").append(postDiv);
        }

        var seeMoreButton = $("<a>");
        seeMoreButton.attr("href", "javascript:void(0)")
        seeMoreButton.addClass("jump-miiverse-button")
        seeMoreButton.text("See more on Miiverse")
        seeMoreButton.off("click");
        seeMoreButton.on("click", function () {
            vino.soundPlayVolume("SE_WAVE_OK", 25);
            vino.jumpToMiiverse(true);
        })
        $(".miiverse-posts .post-list").append(seeMoreButton);
        $('.miiverse-posts .loading_miiverse').removeClass('show');
    }

    function appendPollPosts(posts) {
        $(".miiverse-posts .post-list").html("")
        tvii.utils.lockUserOperation(false);
        if (!posts || posts.length < 1) {
            var errorDiv = $("<span>");
            errorDiv.addClass("message");
            errorDiv.text("There are no posts.");
            $('.miiverse-posts .post-list').append(errorDiv);
            $('.miiverse-posts .loading_miiverse').removeClass('show');
            return;
        };
        for (var i = 0; i < posts.length; i++) {
            var post = posts[i];

            var postDiv = $('<div>');
            postDiv.addClass("post");
            postDiv.addClass("poll-post");
            postDiv.attr("data-miiverse-poll-id", post.id);

            var postMii = $('<img>');
            postMii.addClass("user-mii")
            postMii.attr("src", post.mii_face_url);

            var postUsername = $('<span>');
            postUsername.addClass("username");
            postUsername.text(post.screen_name);

            var postDate = $("<span>");
            postDate.addClass("post-date")
            postDate.text(post.created_at);

            if (post.body) {
                var postBody = $("<p>");
                postBody.addClass("body");
                postBody.text(post.body);
            } else {
                var postMemo = $("<p>");
                postMemo.addClass("memo")

                var postPainting = $("<img>");
                postPainting.addClass("painting");
                postPainting.attr("src", post.painting.url);
            }

            var pollAppData = JSON.parse(Base64.decode(post.app_data));

            if (pollAppData.type == "time") {
                var timeLeftMarquee = $("<marquee>");
                timeLeftMarquee.addClass("poll-time-left");

                var label1 = $("<label>");
                label1.attr("for", "o1");
                label1.text(pollAppData.option_1);

                var label2 = $("<label>");
                label2.attr("for", "o2");
                label2.text(pollAppData.option_2);

                var option1 = $("<input>");
                option1.attr("type", "radio");
                option1.attr("id", "o1");
                option1.attr("value", "1");
                option1.attr("name", "choice");

                var option2 = $("<input>");
                option2.attr("type", "radio");
                option2.attr("id", "o2");
                option2.attr("value", "2");
                option2.attr("name", "choice");

                function updatePollLeftTime() {
                    var timeLimit = new Date(pollAppData.time_limit);
                    var curTime = new Date();

                    var dif = timeLimit - curTime;

                    if (dif <= 0) {
                        timeLeftMarquee.text("Time limit reached.");
                        option1.prop('disabled', true);
                        option2.prop('disabled', true);
                        label1.addClass("disabled");
                        label2.addClass("disabled");
                        return;
                    }

                    var days = Math.floor(dif / (1000 * 60 * 60 * 24));
                    var hours = Math.floor(dif / (1000 * 60 * 60)) % 24;
                    var minutes = Math.floor(dif / (1000 * 60)) % 60;
                    var seconds = Math.floor(dif / 1000) % 60;

                    timeLeftMarquee.text("Time left: " + days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds");
                }

                updatePollLeftTime();

                var pollLeftTimeInterval;
                clearInterval(pollLeftTimeInterval);
                pollLeftTimeInterval = setInterval(updatePollLeftTime, 1000);

                label1.append(option1);
                label2.append(option2);
            }

            var postMeta = $("<div>")
            postMeta.addClass("post-meta")

            var replyCount = $("<span>")
            replyCount.addClass("reply-count")
            replyCount.text(post.reply_count);

            var empathyCount = $("<span>")
            empathyCount.addClass("yeah-count")
            empathyCount.text(post.empathy_count)

            var jumpToPost = $("<button>");
            jumpToPost.addClass("jump-miiverse")
            jumpToPost.on("click", function () {
                if (vino.runTwoButtonDialog("Do you want to close Nintendo TVii and\nsee this post on Miiverse?", "Cancel", "OK") == 0) {
                    vino.jumpToMiiversePostId($(this).parent().parent().attr("data-miiverse-post-id"), false);
                }
            });

            var yeahButton = $("<button>");
            yeahButton.addClass("yeah-button");
            yeahButton.text("Yeah!")

            postDiv.append(postMii)
            postDiv.append(postUsername)
            postDiv.append(postDate)
            if (post.body) {
                postDiv.append(postBody);
            } else {
                postMemo.append(postPainting);
                postDiv.append(postMemo);
            }
            postMeta.append(replyCount)
            postMeta.append(empathyCount)
            postMeta.append(jumpToPost)
            postMeta.append(yeahButton)
            if (pollAppData.type == "time") {
                postDiv.append(label1);
                postDiv.append(label2);
                postDiv.append(timeLeftMarquee);
            }
            postDiv.append(postMeta)

            $(".miiverse-posts .post-list").append(postDiv);
        }

        $('.miiverse-posts .loading_miiverse').removeClass('show');
    }

    function errorHandler() {
        var errorDiv = $("<span>");
        errorDiv.addClass("message");
        errorDiv.text("An error ocurred\nloading posts.");
        $('.miiverse-posts .post-list').append(errorDiv);
        tvii.utils.lockUserOperation(false);
        $('.miiverse-posts .loading_miiverse').removeClass('show');
    }

    function toggleTab() {
        if (tvii.isOlvRequesting) { return; }
        tvii.utils.lockUserOperation(true);
        var tab = $(this);
        $(".miiverse-posts .tab-header .tab").removeClass("selected");
        if (tab.attr("data-miiverse-tab") == "posts") {
            $('.miiverse-posts .loading_miiverse').addClass('show');
            $(".miiverse-posts .post-list").html("");
            tvii.olv.getPosts(query, appendNormalPosts, errorHandler);
        } else if (tab.attr("data-miiverse-tab") == "polls") {
            $('.miiverse-posts .loading_miiverse').addClass('show');
            $(".miiverse-posts .post-list").html("");
            tvii.olv.getPosts(queryPoll, appendPollPosts, errorHandler);
        } else if (tab.attr("data-miiverse-tab") == "recommend") {
            $('.miiverse-posts .loading_miiverse').addClass('show');
            $(".miiverse-posts .post-list").html("");

            function loadFriends() {
                var friends = vino.fp_getFriendList();
                if (!friends) {
                    var errorDiv = $("<span>");
                    errorDiv.addClass("message");
                    errorDiv.text("You do not have any friends\non your Friend List.");
                    $('.miiverse-posts .post-list').append(errorDiv);
                    $('.miiverse-posts .loading_miiverse').removeClass('show');
                    tvii.utils.lockUserOperation(false);
                    return;
                }

                var friendsUrl = "";
                if (friends.indexOf(",") !== -1) {
                    var friendIds = friends.split(",");

                    for (var i = 0; i < friendIds.length; i++) {
                        friendsUrl += friendIds[i].trim();
                        if (i < friendIds.length - 1) {
                            friendsUrl += ",";
                        }
                    }
                } else {
                    friendsUrl = friends;
                }

                tvii.olv.getMiisByPidQuery(friendsUrl, handleFriendList, friendListFail)


                function recommendShow() {
                    tvii.utils.lockUserOperation(true);
                    $('.miiverse-posts .loading_miiverse').addClass('show');
                    vino.soundPlayVolume("SE_CMN_TOUCH_ON", 25);
                    var recBut = $(this);
                    if (recBut.hasClass("checked") || recBut.hasClass("adding")) { return; }
                    var showName = $("header.miiverse-with-attributes-top-bar").attr("data-miiverse-topic-tag");
                    var showId = $("header.miiverse-with-attributes-top-bar").attr("data-miiverse-search-key");
                    recBut.addClass("adding");
                    var recAutopost = new tvii.olv.uploadMessage();
                    var recAutopostAppData = Base64.encode(JSON.stringify({ program_name: showName, program_id: showId }));
                    recAutopost.is_autopost = 1;
                    recAutopost.search_key = "vino_friend_rec";
                    recAutopost.message_to_pid = recBut.attr("data-miiverse-user-pid");
                    recAutopost.body = "I recommend you this program: " + showName + " - Start Nintendo TVii for details.";
                    recAutopost.app_data = recAutopostAppData;
                    tvii.olv.sendMessage(recAutopost, onSendSuccess, onSendFail);

                    function onSendSuccess() {
                        recBut.removeClass("adding");
                        recBut.addClass("checked");
                        vino.soundPlayVolume("SE_FAVORITE", 25);
                        tvii.utils.lockUserOperation(false);
                        $('.miiverse-posts .loading_miiverse').removeClass('show');
                    }

                    function onSendFail() {
                        recBut.removeClass("adding");
                        vino.soundPlayVolume("SE_NO_FAVORITE", 25);
                        tvii.utils.lockUserOperation(false);
                        $('.miiverse-posts .loading_miiverse').removeClass('show');
                    }
                }

                function handleFriendList(flist) {
                    var postList = $(".miiverse-posts .post-list");
                    vino.loading_setIconAppear(true);
                    function loadAndAppendMiis(flist, index) {
                        if (index >= flist.length) {
                            vino.loading_setIconAppear(false);
                            return;
                        }

                        var friendMii = flist[index];
                        var recomDiv = $("<div>").addClass("recommend-mii-list");
                        var friendName = $("<span>").text(friendMii.mii_name);
                        var friendImg = $("<img>").addClass("mii-img").attr("src", friendMii.expressions.normal_face);

                        var recomButton = $("<a>").text("Send")
                            .addClass("recommend-button")
                            .attr("href", "javascript:void(0)")
                            .attr("data-miiverse-user-pid", friendMii.mii_pid);

                        recomButton.on("click", recommendShow);

                        recomDiv.append(friendImg, friendName, recomButton);

                        postList.append(recomDiv);

                        $(friendImg).on('load', function () {
                            loadAndAppendMiis(flist, index + 1);
                            $(friendImg).off('load');
                        });
                    }

                    // Example usage: start loading and appending Miis from index 0
                    loadAndAppendMiis(flist, 0);
                    $('.miiverse-posts .loading_miiverse').removeClass('show');
                    tvii.utils.lockUserOperation(false)
                }

                function friendListFail() {
                    var errorDiv = $("<span>");
                    errorDiv.addClass("message");
                    errorDiv.text("An error ocurred loading your Friend List.");
                    $('.miiverse-posts .post-list').append(errorDiv);
                    $('.miiverse-posts .loading_miiverse').removeClass('show');
                    tvii.utils.lockUserOperation(false)
                }

            }

            loadFriends();

        } else if (tab.attr("data-miiverse-tab") == "doodle") {
            $('.miiverse-posts .loading_miiverse').addClass('show');
            $(".miiverse-posts .post-list").html("");
            tvii.olv.getCommunities(doodleCommunityQuery, getDoodlesFromDoodleSubcommunity, errorHandler);
        } else if (tab.attr("data-miiverse-tab") == "reviews") {
            $('.miiverse-posts .loading_miiverse').addClass('show');
            $(".miiverse-posts .post-list").html("");
            tvii.olv.getCommunities(reviewCommunityQuery, getReviewsFromReviewSubcommunity, errorHandler);
        }
        tab.addClass("selected");
    }

    function openPostModal() {
        $(".miiverse-posts .posts-top-bar").addClass("none")
        $(".miiverse-posts .tab-header").addClass("none")
        $(".miiverse-posts .post-button").addClass("none")
        $(".miiverse-posts .back_white_button.miiverse-back").addClass("none")
        $(".miiverse-posts .post-list").addClass("none")
        vino.soundPlayVolume("SE_REMOTE_FINISH2", 25);
        $(".miiverse-posts .post-list").html("");
        $(".miiverse-posts .tab-header .tab").removeClass("selected");
        $(".miiverse-posts .tab-header .tab:first-child").addClass("selected");
        $(".miiverse-posts .post-input-modal").removeClass("none")
    }

    function setUpPostModal() {
        $(".feeling-buttons li").on('click', toggleFeeling)
        $(".miiverse-posts .cancel-post").on('click', closePostModal)
        $(".miiverse-posts .confirm-post").on('click', confirmPost)

        $(".miiverse-posts .post-confirm-modal .confirm-cancel-post").on('click', cancelPostConfirmation)
        $(".miiverse-posts .post-confirm-modal .confirm-finish-post").on('click', finishPostConfirmation)

        function cancelPostConfirmation() {
            canClosePostApplet = true;
            $(".miiverse-posts .post-confirm-modal").addClass("none");
        }

        function finishPostConfirmation() {
            var checkedPostType = $(".miiverse-posts .textarea-menu li label.checked").attr("id");
            var isSpoilerChecked = $(".miiverse-posts .spoiler-button.checkbox-button").find('input').prop('checked');

            $('.miiverse-posts .loading_miiverse').addClass('show');
            tvii.utils.lockUserOperation(true);

            var post = new tvii.olv.uploadPost();
            if (checkedPostType == "text") {
                post.body = $(".miiverse-posts .textarea-text-input").val();
            } else if (checkedPostType == "memo") {
                post.body = "";
                post.painting = vino.memo_getImageTgaCompressed();
            }

            post.is_spoiler = isSpoilerChecked ? 1 : 0;
            post.is_autopost = 0;
            post.feeling_id = parseInt($(".feeling-buttons li.checked").find("input").val(), 10)
            post.search_key = searchKey;
            post.topic_tag = topicTag;

            //todo: add User Description to appdata
            var postAppData = {
                description: appData
            }

            post.app_data = Base64.encode(JSON.stringify(postAppData));
            post.is_app_jumpable = 0;
            post.community_id = 0;

            tvii.olv.sendPost(post, onPostSuccess, onPostFailure);

            function onPostSuccess() {
                $(".miiverse-posts .textarea-text-input").val("");
                $(".miiverse-posts .textarea-text-preview").text("");
                vino.memo_reset();
                var bgImage = "url(" + vino.memo_getImagePng() + ")";
                $(".textarea-memo-preview").css("background-image", bgImage);
                alert("The content you entered\nwas sent successfully.");
                tvii.utils.lockUserOperation(false);
                canClosePostApplet = true;
                $('.miiverse-posts .loading_miiverse').removeClass('show');
                $(".miiverse-posts .post-confirm-modal").addClass("none");
                closePostModal();
            }

            function onPostFailure() {
                tvii.utils.lockUserOperation(false);
                canClosePostApplet = true;
                $('.miiverse-posts .loading_miiverse').removeClass('show');
                $(".miiverse-posts .post-confirm-modal").addClass("none");
            }
        }

        $(".miiverse-posts .textarea-menu li label").on('click', changePostType)
        $(".miiverse-posts .textarea-memo").on('click', openMemo)
        $(".miiverse-posts .spoiler-button.checkbox-button").on('click', toggleSpoiler)
        var hasOpenedFirstTime;

        function openMemo() {
            var memoInterval;
            if (!hasOpenedFirstTime) {
                vino.memo_reset();
                hasOpenedFirstTime = true;
            }
            vino.memo_open(false);
            memoInterval = setInterval(function () {
                if (vino.memo_isFinish()) {
                    var bgImage = "url(" + vino.memo_getImagePng() + ")";
                    $(".textarea-memo-preview").css("background-image", bgImage);
                    clearInterval(memoInterval)
                }
            }, 0)
        }

        function changePostType() {
            var label = $(this);
            if (label.attr('id') == "text") {
                $(".miiverse-posts .textarea-menu li label").removeClass("checked");
                label.addClass("checked");
                $('.textarea-text-input').prop('disabled', false);
                $('.textarea-memo-value').prop('disabled', true);
                $(".textarea-text").removeClass("none");
                $(".textarea-memo").addClass("none");
                $(".textarea-text-input").trigger('focus');
            } else if (label.attr('id') == "memo") {
                $(".miiverse-posts .textarea-menu li label").removeClass("checked");
                label.addClass("checked");
                $('.textarea-text-input').prop('disabled', true);
                $('.textarea-memo-value').prop('disabled', false);
                openMemo();
                $(".textarea-text").addClass("none");
                $(".textarea-memo").removeClass("none");
            }
        }

        function toggleSpoiler() {
            var isChecked = $(this).find('input').prop('checked');
            console.log(isChecked)
            if (isChecked) {
                vino.soundPlayVolume("SE_WAVE_CHECKBOX_CHECK_TOUCH_OFF", 25);
                $(this).addClass("checked");
            } else {
                vino.soundPlayVolume("SE_WAVE_CHECKBOX_UNCHECK_TOUCH_OFF", 25);
                $(this).removeClass("checked");
            }
        }

        $('.textarea-text-input').off('change')
        $('.textarea-text-input').on('change', function () {
            syncTextAreas($(this).val());
        });

        $('.textarea-text-input').off('input')
        $('.textarea-text-input').on('input', function () {
            syncTextAreas($(this).val());
        });

        function syncTextAreas(value) {
            var preview = $('.textarea-text-preview');

            if (value.length > 0) {
                preview.removeClass("placeholder");
                preview.text(value);
            } else {
                preview.addClass("placeholder");
                preview.text(preview.attr("data-placeholder"));
            }
        }

        function confirmPost() {
            var checkedPostType = $(".miiverse-posts .textarea-menu li label.checked").attr("id");

            if ($(".miiverse-posts .textarea-text-input").val().length < 1 && checkedPostType == "text") {
                alert("Please input some text on this post.");
                return;
            }

            switch ($(".feeling-buttons li.checked").find("input").val()) {
                case "0":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 1))
                    break;
                case "1":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 2))
                    break;
                case "2":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 3))
                    break;
                case "3":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 4))
                    break;
                case "4":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 5))
                    break;
                case "5":
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 6))
                    break;
                default:
                    $(".miiverse-posts .post-confirm-modal .message-content .mii-img").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 1))
                    break;
            }
            var isSpoilerChecked = $(".miiverse-posts .spoiler-button.checkbox-button").find('input').prop('checked');

            if (checkedPostType == "text") {
                $(".miiverse-posts .post-confirm-modal .message-content .user-text").removeClass("none")
                $(".miiverse-posts .post-confirm-modal .message-content .user-text").text($(".miiverse-posts .textarea-text-input").val());
                $(".miiverse-posts .post-confirm-modal .message-content .user-memo").addClass("none");
            } else if (checkedPostType == "memo") {
                $(".miiverse-posts .post-confirm-modal .message-content .user-text").addClass("none")
                $(".miiverse-posts .post-confirm-modal .message-content .user-memo").removeClass("none")
                $(".miiverse-posts .post-confirm-modal .message-content .user-memo .memo").attr("src", vino.memo_getImagePng())
            }

            if (isSpoilerChecked) {
                $(".miiverse-posts .post-confirm-modal .spoilers-status").text("Spoilers: Yes")
            } else {
                $(".miiverse-posts .post-confirm-modal .spoilers-status").text("Spoilers: No")
            }

            canClosePostApplet = false;
            $(".miiverse-posts .post-confirm-modal").removeClass("none");
        }

        function toggleFeeling() {
            vino.soundPlayVolume("SE_WAVE_MII_FACE", 25);
            var feeling = $(this);
            $(".feeling-buttons li").removeClass("checked");
            feeling.addClass("checked");
            switch (feeling.find("input").val()) {
                case "0":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 1))
                    break;
                case "1":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 2))
                    break;
                case "2":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 3))
                    break;
                case "3":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 4))
                    break;
                case "4":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 5))
                    break;
                case "5":
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 6))
                    break;
                default:
                    $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 1))
                    break;
            }
        }

        $(".user-icon .mii").attr("src", vino.act_getMiiImageEx(tvii.userSlot, 1))
        $(".post-input-modal .modal-content .username").text(vino.act_getName(tvii.userSlot));
        $(".post-input-modal .modal-content .nnid").text("");
        $(".post-input-modal .modal-content .topic-tag").text(topicTag);
    }

    function closePostModal() {
        if (!canClosePostApplet) { return; }
        if ($(".miiverse-posts .textarea-text-input").val().length > 1 || vino.memo_isFinish() && vino.memo_getImagePng()) {
            if (vino.runTwoButtonDialog("Cancel this post?", "No", "Yes") == 1) {
                return;
            }
        }

        $(".miiverse-posts .textarea-text-input").val("");
        $(".miiverse-posts .textarea-text-preview").text($(".textarea-text-preview").attr("data-placeholder"));
        vino.memo_reset();
        var bgImage = "url(" + vino.memo_getImagePng() + ")";
        $(".textarea-memo-preview").css("background-image", bgImage);

        $(".miiverse-posts .post-confirm-modal").addClass("none");
        $(".miiverse-posts .post-input-modal").addClass("none")
        $(".miiverse-posts .posts-top-bar").removeClass("none")
        $(".miiverse-posts .tab-header").removeClass("none")
        $(".miiverse-posts .post-button").removeClass("none")
        $(".miiverse-posts .back_white_button.miiverse-back").removeClass("none")
        $(".miiverse-posts .post-list").removeClass("none");
        $('.miiverse-posts .loading_miiverse').addClass('show');
        tvii.utils.lockUserOperation(true);
        tvii.olv.getPosts(query, appendNormalPosts, errorHandler);
    }

    $(".miiverse-posts .post-button").on("click", openPostModal);

    $(".miiverse-posts .tab-header .tab").on("click", toggleTab);

    $(".miiverse-button").on("click", function () { openMiiverseModal() })
    $(".back_white_button.miiverse-back").on("click", function () { closeMiiverseModal() })

    function openMiiverseModal() {
        if (!vino.olv_isEnabled() && vino.olv_getErrorCodeOnInitialize()) {
            vino.runOliveErrorDialog(vino.olv_getErrorCodeOnInitialize())
            return;
        }

        $(".miiverse-posts .post-list").html("");
        tvii.scrollPosition = window.scrollX;
        pageType.addClass("none");
        $("body").addClass("miiverse");
        $(".menu-buttons").css("display", "none")
        $(".miiverse-posts").css("display", "block")
        $('.miiverse-posts .loading_miiverse').addClass('show');

        tvii.utils.lockUserOperation(true);
        tvii.olv.getPosts(query, appendNormalPosts, errorHandler);
    }

    function closeMiiverseModal() {
        $(".miiverse-posts .tab-header .tab").removeClass("selected");
        $(".miiverse-posts .tab-header .tab:first-child").addClass("selected");
        $("body").removeClass("miiverse");
        $(".miiverse-posts").css("display", "none")
        $(".miiverse-posts .post-list").html("")
        $(".menu-buttons").css("display", "block")
        pageType.removeClass("none");
        window.scrollTo(tvii.scrollPosition, 0);
    }

}


$(window).on('load', function () {
    tvii.utils.prepare();
    tvii.router.checkRoutes(window.location.pathname);
});

$(document).on("pjax:beforeSend", function (xhr, options) {
    console.log(xhr)
    console.log(options)
    vino.loading_setIconAppear(false);
    tvii.utils.lockUserOperation(true);
    tvii.utils.resetLoadingIconPosition();
    vino.loading_setIconAppear(true);
    vino.lyt_reset();
    tvii.utils.destroyAllIntervals();
    tvii.utils.destroyAllEventListeners();
})

$(window).on("popstate", function () {
})

$(window).on("tvii:back", function (path) {
    console.log(path)
})

$(document).on("pjax:error", function (event) {
})

$(document).on("pjax:end", function () {
    tvii.router.checkRoutes(window.location.pathname);
    tvii.utils.lockUserOperation(false);
    vino.loading_setIconAppear(false);
    vino.requestGarbageCollect();
})

$(window).on("beforeunload", function (e) {
    alert("about to unload")
});