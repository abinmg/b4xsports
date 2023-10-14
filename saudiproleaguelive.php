<html><head><style>
      body {
        font-family: Ubuntu, Bold 700 Italic;
        font-size: 19px;
        background-color: #00000000;
      }

      #channel-list {
        list-style: none;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
      }

      #channel-list li {
        cursor: pointer;
        padding: 10px;
        border-bottom: 1px solid #000000;
        transition: background-color 0.2s ease-in-out;
        display: flex;
        align-items: center;
      }

      #channel-list li:hover {
        background-color: #1a73e8;
      }

      .channel-icon {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        display: inline-block;
      }

      .my-iframe {
        position: relative;
        padding-top: 56.25%;
        height: 0;
        margin-top: 20px;
        border: 3px solid #00539CFF;
      }

      .my-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
      }
    </style>

    <marquee><b>🛑 ALERT🛑 WAIT 20 SEC TO LOAD LIVE PROPERLY🛑 : Join Our WhatsApp Group For Daily Live Links <a href="https://chat.whatsapp.com/L6d14MGUysZIZ5wE00qhTT" target="_blank">@b4xsports.</a></b></marquee>
    <div class="my-iframe" id="iframe-container">
      <iframe allow="encrypted-media" allowfullscreen="" class="cf" frameborder="0" height="330" name="search_iframe" rel="nofollow" sandbox="allow-forms allow-same-origin allow-scripts" scrolling="no" src="https://b4xsportsliveweb.000webhostapp.com/football/SaudiProLeague/Spotv.php" width="100%"></iframe>
    </div>
  
  
  
<ul id="channel-list">
        
         <li data-src="https://b4xsportsliveweb.000webhostapp.com/football/SaudiProLeague/ssc1live.php">
        <img src="https://freepngimg.com/download/play_button/25417-1-play-button-free-download.png" alt="Server 1" class="channel-icon">
     SSC 1
      </li>
  
  <li data-src="https://b4xsportsliveweb.000webhostapp.com/football/SaudiProLeague/sscextra1live.php">
        <img src="https://freepngimg.com/download/play_button/25417-1-play-button-free-download.png" alt="Server 1" class="channel-icon">
     SSC EXTRA 1
      </li>
      
       <li data-src="https://b4xsportsliveweb.000webhostapp.com/football/SaudiProLeague/Spotv.php">

        <img src="https://freepngimg.com/download/play_button/25417-1-play-button-free-download.png" alt="Server 1" class="channel-icon">

     SPOTV
      </li>

      
    </ul>

   

    <script>
      const channelList = document.getElementById("channel-list");
      const iframeContainer = document.getElementById("iframe-container");
      let currentIframe = null;

      channelList.addEventListener("click", (event) => {
        if (event.target.tagName === "LI") {
          const src = event.target.getAttribute("data-src");
          iframeContainer.innerHTML = `<iframe src="${src}" allowfullscreen></iframe>`;
          if (currentIframe !== null) {
            currentIframe.remove();
          }
          currentIframe = iframeContainer.firstChild;
        }
      });
    </script>
  

