


    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css" media="screen">
      html, body, #flashclient                { height:50%;}
      body                                    { margin:0; padding:0; }
      #altContent                             { /* style alt content */ }
    </style>
    <script type="text/javascript" src="http://104.155.215.138/client/swfobject/swfobject.js"></script>

    <script type="text/javascript">
      swfobject.registerObject("ChatModule", "11", "expressInstall.swf");
      swfobject.registerObject("BigBlueButton", "11", "expressInstall.swf");
      swfobject.registerObject("WebcamPreviewStandalone", "11", "expressInstall.swf");
      swfobject.registerObject("WebcamViewStandalone", "11", "expressInstall.swf");
    </script>
    <script src="http://104.155.215.138/client/lib/jquery-1.5.1.min.js" language="javascript"></script>
    <script src="http://104.155.215.138/client/lib/bigbluebutton.js" language="javascript"></script>
    <script src="http://104.155.215.138/client/lib/bbb_localization.js" language="javascript"></script>
    <script src="http://104.155.215.138/client/lib/bbb_blinker.js" language="javascript"></script>
    <script src="http://104.155.215.138/client/lib/bbb_deskshare.js" language="javascript"></script>
    <script type="text/javascript" src="http://104.155.215.138/client/lib/bbb_api_bridge.js"></script>
    <script type="text/javascript" src="http://104.155.215.138/client/lib/bbb_api_cam_preview.js"></script>
    <script type="text/javascript" src="http://104.155.215.138/client/lib/bbb_api_cam_view.js"></script>
    <script type="text/javascript" src="http://211.27.251.176/moodle/mod/streamline/3rd-party.js"></script>
  
    <script>
      window.chatLinkClicked = function(url) {
        window.open(url, '_blank');
        window.focus();
      }
      window.displayBBBClient = function() {
        var bbbc = document.getElementById("flashclient");
        var wcpc = document.getElementById("webcampreviewclient");
        wcpc.style.display = "none";
        bbbc.style.display = "block";
      }
      window.displayWCClient = function() {
        console.log("Displaying webcam preview client");
        var wcpc = document.getElementById("webcampreview");
        wcpc.style.display = "block";
      }
      window.onload = function() {
         registerListeners();
      }
    </script>


    <div id="flashclient" style="background-color:#EEEEEE;height:900px;width:1200px;float:left;">
 

       <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="50%" height="50%" id="BigBlueButton" name="BigBlueButton" align="middle">
          <param name="movie" value="http://104.155.215.138/client/BigBlueButton.swf?v=216" />
          <param name="quality" value="high" />
          <param name="allowfullscreen" value="true" />
          <param name="bgcolor" value="#869ca7" />
          <param name="wmode" value="window" />
          <param name="allowScriptAccess" value="always" />
         
            <object type="application/x-shockwave-flash" data="http://104.155.215.138/client/BigBlueButton.swf?v=VERSION" width="70%" height="90%" align="middle">
              <param name="quality" value="high" />
              <param name="bgcolor" value="#869ca7" />
              <param name="allowScriptAccess" value="always" />
              
                <a href="http://www.adobe.com/go/getflashplayer">
                  <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                </a>
             
           </object>
       
        </object>
<!--
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="50%" height="50%" id="ChatModule" name="ChatModule" align="middle">
	<param name="url" value="http://104.199.138.224/client/ChatModule.swf?v=VERSION" />
	<param name="uri" value="rtmp://104.199.138.224/bigbluebutton" />
	<param name="dependsOn" value="UsersModule" />
	<param name="privateEnabled" value="true" />
	<param name="fontSize" value="12" />
	<param name="colorPickerIsVisible" value="true" />
</object>

-->

    </div>

    <div id="update-display"/>
    <div id="notifications" aria-live="polite" role="region" aria-label="Chat Notifications"></div>



