<?php include_once( "config.php"); ?>
  <!DOCTYPE HTML>
  <!--[if lt IE 7]>
    <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
    <!--[if IE 7]>
      <html class="lt-ie10 lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>
        <html class="lt-ie10 lt-ie9">
        <![endif]-->
        <!--[if IE 9]>
          <html class="lt-ie10">
          <![endif]-->
          <!--[if gt IE 9]>
            <!-->
            <html manifest="/static/manifest.appcache" itemscope itemtype="http://schema.org/Product">
            <!--<![endif]-->
            
            <head>
              <meta charset="utf-8">
              <title>
                DragonBound - Clone
              </title>
              <meta property="og:type" content="game"/>
              <meta property="og:title" content="DragonBound Clone - Next generation HTML5 online massive multi-player game!"/>
              <meta property="og:url" content="http://<? echo $url_web;?>"/>
              <meta property="og:description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too."/>
              <meta property="og:image" content="http://<? echo $url_web;?>/static/images/icon2_200x200.png"/>
              <meta property="og:site_name" content="<? echo $url_web;?>"/>
              <meta property="fb:app_id" content="<? echo $fb_api;?>"/>
              <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
              <meta itemprop="name" content="DragonBoundClone">
              <meta itemprop="description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too.">
              <meta itemprop="image" content="http://<? echo $url_web;?>/static/images/icon2_200x200.png">
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
              </script>
              <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js">
              </script>
              <script src="/static/js/avatars.js?<? echo $ver;?>">
              </script>
              <script src="/static/js/DragonBound.compiled.js?<? echo $ver;?>">
              </script>
              <link rel="stylesheet" href="/static/css/DragonBound.min.css?<? echo $ver;?>"/>
              <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css"/>
              <style id="DragonTheme">
              </style>
              <script type="text/javascript">
                /* <![CDATA[ */

                (function(b) {
                  (function(a) {
                    "__CF" in b && "DJS" in b.__CF ? b.__CF.DJS.push(a) : "addEventListener" in b ? b.addEventListener("load", a, !1) : b.attachEvent("onload", a)
                  })(function() {
                    "FB" in b && "Event" in FB && "subscribe" in FB.Event && (FB.Event.subscribe("edge.create", function(a) {
                      _gaq.push(["_trackSocial", "facebook", "like", a])
                    }), FB.Event.subscribe("edge.remove", function(a) {
                      _gaq.push(["_trackSocial", "facebook", "unlike", a])
                    }), FB.Event.subscribe("message.send", function(a) {
                      _gaq.push(["_trackSocial", "facebook", "send", a])
                    }));
                    "twttr" in b && "events" in twttr && "bind" in twttr.events && twttr.events.bind("tweet", function(a) {
                      if (a) {
                        var b;
                        if (a.target && a.target.nodeName == "IFRAME") a: {
                          if (a = a.target.src) {
                            a = a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);
                            b = 0;
                            for (var c; c = a[b]; ++b) if (c.indexOf("url") === 0) {
                              b = unescape(c.split("=")[1]);
                              break a
                            }
                          }
                          b = void 0
                        }
                        _gaq.push(["_trackSocial", "twitter", "tweet", b])
                      }
                    })
                  })
                })(window); /* ]]> */
                
              </script>
            </head>
            
            <body>
              <script type="text/javascript">
                //<![CDATA[
                try {
                  (function(a) {
                    var b = "http://",
                        c = "<? echo $url_web;?>",
                        d = "/cl/",
                        e = "test.php",
                        f = new a;
                    f.src = [b, c, d, e].join("")
                  })(Image)
                } catch (e) {}
                //]]>
                
              </script>
              <div id="fb-root">
              </div>
              <div id="updater">
              </div>
              <div id="ranking_panel">
                <div id="ranking_title">
                  DragonBound
                </div>
                <div id="ranking_title2">
                </div>
                <div id="ranking_btns">
                  <div id="ranking_btn_type1" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_type2" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_ranks" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_howto" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_contact" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_terms" class="ranking_btn NoSelect">
                  </div>
                  <div id="ranking_btn_privacy" class="ranking_btn NoSelect">
                  </div>
                </div>
                <div id="ranking_data">
                </div>
              </div>
              <div id="chargeWindow">
                <div id="chargeWindowSellers">
                  <span id="charge_myinfo_btn" class="seller_button opacity_button">
                  </span>
                  <span id="charge_pin_btn" class="seller_button opacity_button">
                  </span>
                  <span id="charge_bitcoin_btn" class="seller_button opacity_button">
                  </span>
                  <br>
                  <span id="ultimatepay_btn" class="seller_button opacity_button">
                  </span>
                  <span id="paymentwall_btn" class="seller_button opacity_button buttonGlow">
                  </span>
                  <span id="resellers_btn" class="seller_button opacity_button">
                  </span>
                </div>
                <div id="chargeWindowPayment">
                </div>
                <div id="chargeWindowClose" class="buttonClose opacity_button">
                </div>
              </div>
              <div id="DragonVideo">
                <video id="localVideo">
                </video>
                <div id="remotesVideos">
                </div>
              </div>
              <div id="container">
                <div class="DialogLayer hide">
                  <div id="myDialog">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                      </div>
                      <div class="AlertBoxContent blackShadow">
                      </div>
                      <div class="AlertBoxOK buttonOK">
                      </div>
                      <div class="AlertBoxCancel buttonCancel">
                      </div>
                      <div id="dialog_graphic">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="BrokerScreen">
                  <div class="AlertBoxBackground">
                  </div>
                  <div id="BrokerWindow">
                    <div id="BrokerTitle" class="blackShadow">
                    </div>
                    <div id="BrokerChannels">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel0">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel1">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel2">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel3">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel4">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel5">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel6">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel7">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel8">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel9">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel10">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel11">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel12">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel13">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel14">
                    </div>
                    <div id="BrokerTotalPlayers" class="blackShadow">
                    </div>
                    <div class="NoSelect opacity_button" id="BrokerLogout">
                    </div>
                    <div id="BrokerRefresh" class="opacity_button NoSelect">
                    </div>
                  </div>
                </div>
                <div id="friendsList" class="NoSelect hide">
                  <div class="scrollbar">
                    <div class="track">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview" id="friendsListHtml">
                    </div>
                  </div>
                </div>
                <div id="guildMembersList" class="NoSelect hide">
                  <div class="scrollbar">
                    <div class="track">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview" id="guildMembersListHtml">
                    </div>
                  </div>
                </div>
                <div id="OptionsDialog" class="ui-widget-content NoSelect">
                  <div class="opacity_button" id="OptionsLeave">
                  </div>
                  <div class="opacity_button" id="OptionsOK">
                  </div>
                  <div class="opacity_button CheckboxOn" id="OptionsMusic">
                  </div>
                  <div class="opacity_button CheckboxOn" id="OptionsEffects">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsGraphicsHigh">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsGraphicsLow">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsBackgroundOn">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsBackgroundOff">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsShootingModeDrag">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsShootingModeSlice">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsLangEN">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangPR">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangFI">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangES">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangVN">
                  </div>
                  <div class="" id="OptionsLangBeta">
                    BETA
                  </div>
                  <div class="opacity_button" id="OptionsTheme">
                    [Change Graphics BETA]
                  </div>
                </div>
                <div id="DragonThemeDialog" title="Change Graphics [BETA]">
                  <table>
                    <tr>
                      <td>
                        Lobby BG
                      </td>
                      <td>
                        <input id="theme_lobby_bg">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Room BG
                      </td>
                      <td>
                        <input id="theme_room_bg">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Shop BG
                      </td>
                      <td>
                        <input id="theme_shop_bg">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Ranks
                      </td>
                      <td>
                        <input id="theme_ranks">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        BG Full
                      </td>
                      <td>
                        <input id="theme_bg_full">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Lobby Stuff
                      </td>
                      <td>
                        <input id="theme_lobby_stuff">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Room Stuff
                      </td>
                      <td>
                        <input id="theme_room_stuff">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Game Stuff
                      </td>
                      <td>
                        <input id="theme_game_stuff">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <nobr>
                          Scores Stuff&nbsp;
                        </nobr>
                      </td>
                      <td>
                        <input id="theme_scores_stuff">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Shop Stuff
                      </td>
                      <td>
                        <input id="theme_shop_stuff">
                      </td>
                    </tr>
                  </table>
                  <br>
                  DragonBound Theme (set of graphics):
                  <br>
                  <textarea id="themeFull">
                  </textarea>
                </div>
                <div id="chat_divs">
                </div>
                <div class="screen" id="channelScreen">
                  <div id="tournament_waiting" class="anim_ease">
                  </div>
                  <div id="dialog_change_name_div">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <label for="display_name" id="display_name_label">
                        </label>
                        <input type="text" value="" id="display_name" maxlength="15"/>
                        <br>
                        <div id="NameChangeLittle">
                        </div>
                        <br>
                        <input type="checkbox" checked id="can_show_photo"/>
                        <label for="can_show_photo" id="can_show_photo_label">
                        </label>
                        <br>
                        <br>
                        <button id="changePassword" class="glow_button_anim">
                          Set Password Login
                        </button>
                        <div id="dialog_change_name_ok" class="buttonOK">
                        </div>
                        <div id="dialog_change_name_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="dialog_join_room_div">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <p>
                          <label for="join_room_input" id="join_room1">
                          </label>
                          <input type="text" value="" id="join_room_input" maxlength="10" class="input_field"/>
                        </p>
                        <br>
                        <p>
                          <label for="join_password_input" id="join_room2">
                          </label>
                          <input type="text" value="" id="join_password_input" maxlength="10" class="input_field"/>
                        </p>
                        <div id="dialog_join_room_ok" class="buttonOK">
                        </div>
                        <div id="dialog_join_room_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="text" id="channelInput" value="" maxlength="150">
                  <div id="channel">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="CanSelect overview" id="channelTextHtml">
                      </div>
                    </div>
                  </div>
                  <div id="playersList" class="NoSelect">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview" id="channelPlayersListHtml">
                      </div>
                      <div class="overview hide" id="channelFriendsListHtml">
                      </div>
                    </div>
                  </div>
                  <div id="FacebookLike" class="NoSelect fb-like" data-href="http://DragonBound.net" data-send="true" data-layout="button_count" data-width="360" data-show-faces="false" data-font="verdana" data-colorscheme="dark">
                  </div>
                  <div id="Tweeter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://dragonbound.net" data-text="DragonBound.net - Next generation HTML5 online massive multi-player game!">Tweet</a>
                  </div>
                  <div id="GooglePlus">
                    <div class="g-plusone" data-size="medium" data-href="http://dragonbound.net">
                    </div>
                  </div>
                  <div id="myInfoBox">
                  </div>
                  <div id="myRank2" class="rank rank0">
                  </div>
                  <div id="myName2" class="blackShadow NoSelect">
                  </div>
                  <div id="myGP2" class="blackShadow NoSelect">
                  </div>
                  <div id="myGold2" class="blackShadow NoSelect">
                  </div>
                  <div id="myCash2" class="blackShadow NoSelect">
                  </div>
                  <div id="myPhotoDiv">
                    <img id="myPhotoImage2" src="/static/images/fb_boy.gif" alt="My Photo"/>
                  </div>
                  <div id="channel_player">
                  </div>
                  <div id="channelName" class="blackShadow NoSelect">
                  </div>
                  <div id="tournament_info" class="blackShadow NoSelect">
                  </div>
                  <div id="roomsList">
                    <div class="room" id="room0">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                    <div class="room" id="room1">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                    <div class="room" id="room2">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                    <div class="room" id="room3">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                    <div class="room" id="room4">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                    <div class="room" id="room5">
                      <div class="roomNumber blackShadow">
                      </div>
                      <div class="roomTitle blackShadow">
                      </div>
                      <div class="numPlayers whiteShadow">
                      </div>
                      <div class="maxPlayers whiteShadow">
                      </div>
                      <div class="status">
                      </div>
                      <div class="roomMap">
                      </div>
                      <div class="gameMode">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember">
                      </div>
                      <div class="roomBuddy">
                      </div>
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonCreateRoom">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonMyInfo">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonShop">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonCharge2">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonJoin">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonQuickJoin">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListUp">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListDown">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonRanking">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton blackShadow" id="facebook_post">
                    <div class="event_button_text">
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton blackShadow" id="event_button">
                    <div class="event_button_text">
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonOptions">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonChannels">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonAllBuddyList">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_all">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_waiting">
                  </div>
                  <div class="NoSelect opacity_button iconModeNormal" id="filter_normal">
                  </div>
                  <div class="NoSelect opacity_button iconModeBoss" id="filter_boss">
                  </div>
                  <div class="NoSelect opacity_button iconModeSame" id="filter_same">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_friends">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_guild">
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonStart1v1">
                    Start 1v1 Game
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonCreateTeam">
                    Create Team
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonJoinTeam">
                    Join Team
                  </div>
                  <div id="lobbyButtonMobile" class="NoSelect buttonMobile hide glow_button">
                  </div>
                  <div id="dialogCreateRoom" class="ui-widget-content">
                    <input type="text" id="createRoomTitle" value="Hello World" maxlength="30">
                    <div id="CreateRoomPrivateCheckbox" class="checkboxOff opacity_button">
                    </div>
                    <div id="CreateRoomPassword" class="hide">
                      <input type="text" id="createRoomPasswordInput" value="" maxlength="10">
                    </div>
                    <div id="CreateRoomNumPlayersPrev" class="buttonPrev opacity_button">
                    </div>
                    <div id="CreateRoomNumPlayersNext" class="buttonNext opacity_button">
                    </div>
                    <div id="CreateRoomPlayers" class="players4vB">
                    </div>
                    <div id="CreateRoomModePrev" class="buttonPrev opacity_button">
                    </div>
                    <div id="CreateRoomModeNext" class="buttonNext opacity_button">
                    </div>
                    <div id="CreateRoomMode" class="gameModeBoss">
                    </div>
                    <div id="CreateRoomModeIcon" class="iconModeBoss">
                    </div>
                    <div id="CreateRoomModeText">
                    </div>
                    <div id="dialogCreateRoomButtonCancel" class="buttonCancel">
                    </div>
                    <div id="dialogCreateRoomButtonOK" class="buttonOK">
                    </div>
                    <div id="dialogCreateLocked">
                    </div>
                    <div id="dialogCreateMessage">
                    </div>
                  </div>
                </div>
                <div class="screen" id="roomScreen">
                  <div id="team_search">
                  </div>
                  <div id="roomOverly">
                    <div id="roomInfoBG">
                    </div>
                    <div id="roomItemsBG" class="TBG">
                    </div>
                    <div id="roomInfo1" class="blackShadow">
                      Game Mode:
                    </div>
                    <div id="roomInfo2" class="blackShadow">
                      Players:
                    </div>
                    <div id="roomInfo3" class="blackShadow">
                      Avatars:
                    </div>
                    <div id="roomInfo4" class="blackShadow">
                      Max Wind:
                    </div>
                    <div id="roomInfo5" class="blackShadow">
                      ^ Using Items ^
                    </div>
                    <div id="roomInfo6" class="blackShadow">
                      Available Items:
                    </div>
                  </div>
                  <div id="roomNumber" class="blackShadow">
                  </div>
                  <div id="roomTitle" class="blackShadow">
                  </div>
                  <div id="roomButtonBack">
                  </div>
                  <div id="roomButtonReady" class="opacity_button">
                  </div>
                  <div id="roomButtonStart" class="opacity_button">
                  </div>
                  <div id="roomButtonChangeTeam">
                  </div>
                  <div id="roomButtonMobile" class="buttonMobile">
                  </div>
                  <div id="DragonVideoControls">
                    <div id="roomButtonVideoChat" class="opacity_button">
                      VideoChat
                    </div>
                    <div id="videoChannelDiv" class="blackShadow">
                      <nobr>
                        CH:
                        <input id="VideoChannelInput">
                      </nobr>
                    </div>
                    <div id="DrgaonVideoBeta" class="blackShadow">
                      BETA
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom0">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom2">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom4">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom6">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom1">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom3">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom5">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom7">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div id="vortex0" class="vortex">
                  </div>
                  <div id="vortex1" class="vortex">
                  </div>
                  <div id="vortex2" class="vortex">
                  </div>
                  <div id="vortex3" class="vortex">
                  </div>
                  <div id="vortex4" class="vortex">
                  </div>
                  <div id="vortex5" class="vortex">
                  </div>
                  <div id="vortex6" class="vortex">
                  </div>
                  <div id="vortex7" class="vortex">
                  </div>
                  <div id="add_bot_button" class="opacity_button">
                  </div>
                  <div id="itemSlot0" class="itemDual">
                  </div>
                  <div id="itemSlot1">
                  </div>
                  <div id="itemSlot2" class="itemDual">
                  </div>
                  <div id="itemSlot3">
                  </div>
                  <div id="itemSlot4" class="itemTeleport">
                  </div>
                  <div id="itemSlot5">
                  </div>
                  <div id="itemDual" class="itemDual">
                  </div>
                  <div id="itemTeleport" class="itemTeleport">
                  </div>
                  <div id="room_timer">
                    <div id="room_timer_text">
                    </div>
                  </div>
                  <div id="room_game_mode">
                  </div>
                  <div id="room_players">
                  </div>
                  <div id="room_avatars" class="blackShadow">
                  </div>
                  <div id="room_wind" class="blackShadow">
                  </div>
                  <div id="room_change_title_button" class="opacity_button">
                  </div>
                  <div id="room_item_buddy_tab" class="opacity_button">
                  </div>
                  <div id="friendsListExtra">
                  </div>
                  <div id="guildRoomTabExtra">
                  </div>
                  <div id="room_options_button" class="opacity_button">
                  </div>
                  <div id="room_map">
                  </div>
                  <div id="gp_team_a" class="blackShadow">
                  </div>
                  <div id="gp_team_b" class="blackShadow">
                  </div>
                  <div id="gp_rate" class="blackShadow">
                  </div>
                  <div id="no_win_bonus" class="blackShadow">
                  </div>
                  <div id="RoomS1Disabled" class="NoSelect imgS1 grayscale">
                  </div>
                  <div id="RoomRandomTeams" class="NoSelect blackShadow">
                    Random Teams
                  </div>
                  <input type="text" id="roomInput" value="" maxlength="150">
                  <div id="roomChat">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="CanSelect overview" id="roomChatHtml">
                      </div>
                    </div>
                  </div>
                  <div id="dialog_change_title_div" class="hide">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <br>
                        <p>
                          <label for="room_change_title_input">
                          </label>
                          <input type="text" value="" id="room_change_title_input" maxlength="30" class="input_field"/>
                        </p>
                        <div id="dialog_change_title_ok" class="buttonOK">
                        </div>
                        <div id="dialog_change_title_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="playerInfoDialog">
                    <div id="infoLoading" class="blackShadow">
                    </div>
                    <div id="infoKey1" class="blackShadow">
                    </div>
                    <div id="infoKey2" class="blackShadow">
                    </div>
                    <div id="infoKey3" class="blackShadow">
                      GP
                    </div>
                    <div id="infoKey4" class="blackShadow">
                    </div>
                    <div id="infoKey5" class="blackShadow">
                    </div>
                    <div id="infoKey6" class="blackShadow">
                    </div>
                    <div id="infoKey7" class="blackShadow">
                    </div>
                    <div id="infoKey8" class="blackShadow">
                    </div>
                    <div id="infoKey9" class="blackShadow">
                    </div>
                    <div id="infoName" class="blackShadow">
                    </div>
                    <div id="infoRanking" class="blackShadow">
                    </div>
                    <div id="infoGender" class="blackShadow">
                    </div>
                    <div id="infoGP" class="blackShadow">
                    </div>
                    <div id="infoWinRate" class="blackShadow">
                    </div>
                    <div id="infoDamage" class="blackShadow">
                    </div>
                    <div id="infoWin" class="blackShadow">
                    </div>
                    <div id="infoLose" class="blackShadow">
                    </div>
                    <div id="infoGuild" class="blackShadow">
                    </div>
                    <div id="infoGuildJob" class="blackShadow">
                    </div>
                    <div id="infoRank" class="rank rank0">
                    </div>
                    <div id="infoImageDiv">
                      <div id="infoImageDiv2">
                        <img id="infoImage" src="/static/images/fb_boy.gif" alt="Photo">
                      </div>
                    </div>
                    <div id="infoAddBuddy" class="opacity_button">
                    </div>
                    <div id="infoGuildInvite" class="opacity_button">
                    </div>
                    <div id="infoChat" class="opacity_button">
                    </div>
                    <div id="infoClose" class="opacity_button">
                    </div>
                  </div>
                  <div id="dialog_room_options" class="hide NoSelect">
                    <div id="RoomOptionsNumPlayersPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsNumPlayersNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsPlayers" class="NoSelect">
                    </div>
                    <div id="RoomOptionsModePrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsModeNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsMode" class="NoSelect">
                    </div>
                    <div id="RoomOptionsModeIcon" class="NoSelect iconModeBoss">
                    </div>
                    <div id="RoomOptionsModeLocked" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsMessage" class="NoSelect">
                    </div>
                    <div id="RoomOptionsMapPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsMapNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsMapName" class="NoSelect">
                    </div>
                    <div id="RoomOptionsMapImage" class="NoSelect">
                    </div>
                    <div id="RoomOptionsAvatars" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsAvatarsPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsAvatarsNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsAvatarsGP" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsWind" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsWindPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsWindNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsWindGP" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsRandomTeams" class="NoSelect grayscale blackShadow glow_button">
                      [ ] Random Teams
                    </div>
                    <div id="RoomOptionsRandomTeamsRank" class="NoSelect rank rank7">
                    </div>
                    <div id="RoomOptionsRandomTeamsLock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsTele" class="NoSelect itemTeleport glow_button">
                    </div>
                    <div id="RoomOptionsTeleRank" class="NoSelect rank rank11">
                    </div>
                    <div id="RoomOptionsTeleLock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsS1" class="NoSelect imgS1 glow_button">
                    </div>
                    <div id="RoomOptionsS1Rank" class="NoSelect rank rank9">
                    </div>
                    <div id="RoomOptionsS1Lock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsCustomMap" class="NoSelect opacity_button">
                      <a href="/static/images/custom_maps.png" target=_blank>(Drag PNG for custom map)</a>
                    </div>
                    <div id="RoomOptionsCancel" class="NoSelect buttonCancel">
                    </div>
                    <div id="RoomOptionsOK" class="NoSelect buttonOK">
                    </div>
                  </div>
                  <div id="select_bot_div">
                  </div>
                </div>
                <div class="screen" id="gameScreen">
                  <div id="game_back">
                    <div id="map_bg">
                    </div>
                    <div id="ss_shot_background">
                    </div>
                    <div id="camera">
                      <canvas id="ground_canvas">
                      </canvas>
                      <div id="thor">
                        <div id="thor_rotate">
                          <div id="thor_laser">
                          </div>
                        </div>
                        <div id="thor_lvl" class="blackShadow">
                        </div>
                        <div id="thor_damage" class="blackShadow">
                        </div>
                      </div>
                      <div id="game_objects">
                      </div>
                    </div>
                  </div>
                  <div id="game_front">
                    <div id="turn_timer">
                    </div>
                    <div id="gameui">
                      <div id="powerBar">
                      </div>
                      <div id="walkBar">
                      </div>
                      <div id="powerMarkArea">
                        <div id="powerMark">
                        </div>
                      </div>
                      <canvas id="MyAngle" width="39" height="13">
                      </canvas>
                      <div class="UIGoldDigit" id="UIGoldDigit0">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit1">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit2">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit3">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit4">
                      </div>
                      <div id="btnShot1" class="Pressed">
                      </div>
                      <div id="btnShot2">
                      </div>
                      <div id="btnShotSS">
                      </div>
                      <div id="btnPass" class="opacity_button">
                      </div>
                      <div id="btnEsc" class="opacity_button">
                      </div>
                      <div id="gameItemSlot0">
                      </div>
                      <div id="gameItemSlot1">
                      </div>
                      <div id="gameItemSlot2">
                      </div>
                      <div id="gameItemSlot3">
                      </div>
                      <div id="gameItemSlot4">
                      </div>
                      <div id="gameItemSlot5">
                      </div>
                      <div id="last_power_mark">
                      </div>
                      <div id="weatherSlot0">
                      </div>
                      <div id="weatherSlot1">
                      </div>
                      <div id="weatherSlot2">
                      </div>
                      <div id="weatherSlot3">
                      </div>
                      <div id="weatherSlot4">
                      </div>
                      <div id="slice_drag_button">
                      </div>
                      <div id="LastAngleDigit-" class="LastAngleDigit LastAngleDigit-">
                      </div>
                      <div id="LastAngleDigit1">
                      </div>
                      <div id="LastAngleDigit2">
                      </div>
                      <div id="message_over_items">
                      </div>
                      <div id="all_chat">
                      </div>
                      <div id="team_chat">
                      </div>
                    </div>
                    <div id="turns_list">
                      <div class="turn_list_title blackShadow">
                      </div>
                      <div class="turn_line" id="turn_line0">
                        <div class="turn_line_number turn_line_number0">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line1">
                        <div class="turn_line_number turn_line_number1">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line2">
                        <div class="turn_line_number turn_line_number2">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line3">
                        <div class="turn_line_number turn_line_number3">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line4">
                        <div class="turn_line_number turn_line_number4">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        div class="turn_line_delay blackShadow">
                      </div>
                    </div>
                    <div class="turn_line" id="turn_line5">
                      <div class="turn_line_number turn_line_number5">
                      </div>
                      <div class="turn_line_rank">
                      </div>
                      <div class="turn_line_name blackShadow">
                      </div>
                      <div class="turn_line_delay blackShadow">
                      </div>
                    </div>
                    <div class="turn_line" id="turn_line6">
                      <div class="turn_line_number turn_line_number6">
                      </div>
                      <div class="turn_line_rank">
                      </div>
                      <div class="turn_line_name blackShadow">
                      </div>
                      <div class="turn_line_delay blackShadow">
                      </div>
                    </div>
                    <div class="turn_line" id="turn_line7">
                      <div class="turn_line_number turn_line_number7">
                      </div>
                      <div class="turn_line_rank">
                      </div>
                      <div class="turn_line_name blackShadow">
                      </div>
                      <div class="turn_line_delay blackShadow">
                      </div>
                    </div>
                  </div>
                  <input type="text" id="gameInput" value="" maxlength="150">
                  <div id="gameChat">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="CanSelect overview" id="gameChatHtml">
                      </div>
                    </div>
                  </div>
                  <canvas id="wind_meter2" width="54" height="54">
                  </canvas>
                  <div id="game_replay">
                  </div>
                  <div id="touch_ui">
                    <div id="btnShoot">
                    </div>
                    <div id="btnRight">
                    </div>
                    <div id="btnLeft">
                    </div>
                    <div id="btnUp">
                    </div>
                    <div id="btnDown">
                    </div>
                  </div>
                  <div id="game_over">
                    <div id="scores_lose_a">
                    </div>
                    <div id="scores_lose_b">
                    </div>
                    <div class="score" id="score0">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score1">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score2">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score3">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score4">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score5">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score6">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                    <div class="score" id="score7">
                      <div class="score_me">
                      </div>
                      <div class="score_rank">
                      </div>
                      <div class="score_name blackShadow">
                      </div>
                      <div class="score_gp blackShadow">
                      </div>
                      <div class="score_gold blackShadow">
                      </div>
                      <div class="score_bonus_gp blackShadow">
                      </div>
                      <div class="score_bonus_gold blackShadow">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="screen NoSelect" id="shopScreen">
                <div id="shopOverly">
                  <div id="shopTitle" class="blackShadow NoSelect">
                    Items Shop
                  </div>
                  <div id="shopMyBox">
                  </div>
                  <div id="shopInvBox" class="TBGnBorder">
                  </div>
                  <div id="shopInvTitle" class="blackShadow NoSelect">
                    My Items
                  </div>
                </div>
                <div id="buttonShopExit" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopBuy" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopHead" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopBody" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopEyes" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopFlag" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopBackground" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopForeground" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopExItem" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopPrev" class="opacity_button NoSelect shopButton">
                </div>
                <div id="buttonShopNext" class="opacity_button NoSelect shopButton">
                </div>
                <div id="shop_player">
                </div>
                <div id="shop_my_cash" class="cashShadow">
                </div>
                <div id="shop_my_gold" class="goldShadow">
                </div>
                <div id="shop_my_stats">
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                </div>
                <div id="shop_my_items_container">
                  <div class="scrollbar">
                    <div class="track">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview NoSelect" id="shop_my_items">
                    </div>
                  </div>
                </div>
                <div id="shop_my_items_number">
                  <div class="digit0 stat_font stat_font9">
                  </div>
                  <div class="digit1 stat_font stat_font8">
                  </div>
                  <div class="digit2 stat_font stat_font7">
                  </div>
                  <div class="digit3 stat_font stat_font6">
                  </div>
                </div>
                <div id="shop_item0" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item1" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item2" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item3" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item4" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item5" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item6" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item7" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_item8" class="shop_item">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div class="shop_item_stat shop_item_stat0">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat1">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat2">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat3">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat4">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat5">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat6">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_stat shop_item_stat7">
                    <div class="stat_icon">
                    </div>
                    <div class="stat_digit1 stat_font">
                    </div>
                    <div class="stat_digit2 stat_font">
                    </div>
                  </div>
                  <div class="shop_item_cash cashShadow">
                  </div>
                  <div class="shop_item_gold goldShadow">
                  </div>
                </div>
                <div id="shop_buy_dialog" class="ui-widget-content">
                  <div class="shop_item_icon">
                  </div>
                  <div class="shop_item_name blackShadow">
                  </div>
                  <div class="shop_item_image NoSelect">
                  </div>
                  <div id="buy_cash_week" class="buy_option cashShadow">
                    Can't buy
                  </div>
                  <div id="buy_cash_month" class="buy_option cashShadow">
                    Can't buy
                  </div>
                  <div id="buy_cash_perm" class="buy_option cashShadow">
                    Can't buy
                  </div>
                  <div id="buy_gold_week" class="buy_option goldShadow">
                    Can't buy
                  </div>
                  <div id="buy_gold_month" class="buy_option goldShadow">
                    Can't buy
                  </div>
                  <div id="buy_gold_perm" class="buy_option goldShadow">
                    Can't buy
                  </div>
                  <div id="buy_period">
                  </div>
                  <div id="buy_period_next_btn" class="opacity_button shopButton">
                  </div>
                  <div id="buy_period_prev_btn" class="opacity_button shopButton">
                  </div>
                  <div id="buy_gold_btn" class="opacity_button shopButton">
                  </div>
                  <div id="buy_cash_btn" class="opacity_button shopButton">
                  </div>
                  <div id="buy_cancel_btn" class="opacity_button shopButton">
                  </div>
                </div>
              </div>
              </div>
            </body>
            
            </html>