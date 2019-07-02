<html>
<head>
  <script>
    var picked = '1';
    var num;
    var gone;
    function tab(n) {
      num = n;
      document.getElementById(picked + "o").className = "option";
      document.getElementById(picked + "d").className = "tab hidden";
      gone = setInterval(begone,300);
    }
    function begone() {
      clearInterval(gone);
      document.getElementById(picked + "d").className = "tab gone";
      document.getElementById(num + "o").className = "option selected";
      document.getElementById(num + "d").className = "tab";
      picked = num;
    }
  </script>
  <style>
  div.select {
    float: left;
    width: 100%;
  }
  div.tab {
    color: #666666;
    transition: 0.3s;
    display: block;
    opacity: 1;
    padding: 15px;
    padding-right: 0px;
  }
  div.hidden{
    transition: 0.3s;
    opacity: 0;
  }
  div.gone {
    display: none;
  }
    p.option {
      float: left;
      font-size: 20px;
      margin-left: 15px;
      margin-right: 15px;
      color: #666666;
      transition: 0.5s;
    	text-decoration: underline;
    	text-decoration-color: #cecece;
    }
    p.selected {
      transition: 0.5s;
      text-decoration-color: #FFA500 !important;
    }
    p.option:hover {
    	transition: 0.5s;
    	text-decoration-color: #FFA500;
    }
    p.desc {
      width: auto;
      margin: 0px;
      color: #666666;
      margin-bottom: 10px;
    }
    img.phoneShot {
      height: 85%;
      margin-left: 25px;
      float: right;
      box-shadow: 0px 1px 4px #a3a3a3;
    }
  </style>
</head>
<body>
  <div class="select">
    <a href="javascript:void(0)" onclick="tab('1')"><p id="1o" class="option selected">Overview</p></a>
    <a href="javascript:void(0)" onclick="tab('2')"><p id="2o" class="option">Phone App</p></a>
    <a href="javascript:void(0)" onclick="tab('3')"><p id="3o" class="option">Web client</p></a>
    <a href="javascript:void(0)" onclick="tab('4')"><p id="4o" class="option">Server</p></a>
  </div>
  <div id="1d" class = "tab">
    <p>
      To build on previous experience of creating a phone app and to learn more about websocket connections I decided to make an application
      for my website that could provide 'live chat' like functionality, this would then allow for me to respond and chat to anyone on my site
      from the phone app in real time.<br/>
      However while a user would be able to get notifications sent to my phone at any time I still wanted there to be a system that would allow
      for me to notifiy a user that I was unable to chat at that current time, this resulted in a request system being brought in so that when a
      user wants to start a chat a request notification will be sent to my phone requiring for me to accept that request before a chat begins.
      This will also allow me to decline chats if busy or for a request to timeout when I'm not around my phone and avoid wasting people's time.<br/>
      Once the request is accepted it acts like any normal chat system with one side sending a message and for it to appear on the other sides screen.
    </p>
  </div>
  <div id="2d" class = "tab hidden">
    <img class="phoneShot" src="./projects/BenM/base.png"/>
    <p class="desc">
      The phone app for my side of the messaging was built in React Native and utalized Google Firebase for its notifications and push messaging,
      this allowed for notifications of a incoming message to appear on my phone if the app wasn't open or for a notification handeler to intercept
      the notification and update the app if it was open when recieved. Thanks to these push notifications I only have to directly poll the server
      when booting the app.
    </p>
    <p class="desc">
      The main screen of the app is split into three tabs, the inital tab displays all active chats (chats where the user is still online) and is
      also where chat requests will appear as they come in to accept or decline. The second tab is where all inactive chats are kept and would allow
      for me to read through any previous chats had with users along with seeing any requests that were declined or timed out and seeing who made them.
    </p>
  </div>
  <div id="3d" class = "tab hidden">
    <p>blah blah blah</p>
  </div>
  <div id="4d" class = "tab hidden">
    <p>blah blah blah blah</p>
  </div>
</body>
</html>
