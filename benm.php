<html>
<head>
    <title>BenM chat</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f4f3f0;
            overflow: hidden;
        }
        div.left {
            position: absolute;
            left: -150%;
            transition: 1s;
        }
        div.center {
            position: absolute;
            left: 0%;
            transition: 1.5s;
        }
        div.right {
            position: absolute;
            left: 150%;
            transition: 1.5s;
        }
        div.registration {
            width: 80%;
            padding-left: 10%;
            padding-right: 10%;
            height: 60%;
            margin: auto;
        }
        div.regIcon {
            margin-top: 30px;
            width: 20vw;
            margin-left: 25px;
        }
        p.regTitle {
            font-size: 25px;
            font-family: 'Roboto', sans-serif;
            color: #424242;
            margin-bottom: 0px;
            font-weight: bold;
        }
        p.regDesc {
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
            color: #696969;
            margin-top: 10px;
        }
        #name {
            transition: 0.5s;
            height: 10%;
            width: calc(100% - 20px);
            margin-left: 10px;
            margin-top: 5px;
            font-size: 100%;
            padding-left: 5px;
            border: 0px;
            border-bottom: 1.25px solid #a1a1a1;
            background-color: transparent;
            outline: none;
            color: #696969;
            font-family: 'Lato', sans-serif;
        }
        #name:hover {
            border-bottom: 1.35px solid #878787;
        }
        #name:focus, #name:focus{
            transition: 0.5s;
            outline: none;
            border-bottom: 1.35px solid #878787;
        }
        p.name {
            margin: 0px;
            margin-left: 10px;
            margin-top: 45%;
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
            color: #424242;
        }
        .btn {
          cursor: pointer;
          position: relative;
          display: block;
          margin: 24px auto;
          margin-top: 70px;
          width: 90%;
          padding: 0;
          overflow: hidden;
          border-width: 0;
          outline: none;
          border-radius: 2px;
          background-color: #4287f5;
          color: #ecf0f1;
          transition: background-color .3s;
          font-family: 'Lato', sans-serif;
          font-weight: bold;
          font-size: 15px;
        }
        .btn:hover, .btn:focus {
          background-color: #3770cc;
        }
        .btn > * {
          position: relative;
        }
        .btn span {
          display: block;
          padding: 15px 30px;
        }
		div.MSG {
			width: 100%;
			float: left;
			transform: rotate(180deg);
		}
		p.MSGtext {
			font-size: 20px;
			font-family: 'Roboto', sans-serif;
			padding: 0px;
			margin: 0px;
		}
		div.sentMSG {
			display: inline-block;
			background-color: #4286f4;
			border-radius: 25px 25px 0px 25px;
			padding-left: 15px;
			padding-right: 15px;
			padding-top: 8px;
			padding-bottom: 8px;
			float: right;
			margin-right: 8px;
			margin-top: 5px;
		}
		p.sentText {
			color: white;
			text-align: right;
		}
		div.recievedMSG {
			display: inline-block;
			background-color: #d6d6d6;
			border-radius: 25px 25px 25px 0px;
			padding-left: 15px;
			padding-right: 15px;
			padding-top: 8px;
			padding-bottom: 8px;
			float: left;
			margin-left: 8px;
			margin-top: 5px;
		}
		p.recievedText {
			color: black;
			text-align: right;
		}
        div.waitIcon {
            transition: 2s;
            margin-top: 25%;
            width: 35vw;
            margin-left: calc(50% - 17.5vw);
        }
        div.waiting {
            width: 100%;
            text-align: center;
        }
        p.waitingTips {
            font-size: 23px;
            font-family: 'Roboto', sans-serif;
            color: #696969;
            margin-top: 120px;
            transition: 1.5s;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        p.hidden {
            transition: 1s;
            opacity: 0;
        }
        div.declined {
            width: 100%;
            text-align: center;
        }
        p.declinedTitle {
            margin-top: 70px;
            font-size: 23px;
            font-family: 'Roboto', sans-serif;
            color: #424242;
            margin-bottom: 0px;
            font-weight: bold;
        }
        p.declinedDesc {
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
            color: #696969;
            margin-top: 10px;
        }
        #leftMsg {
            width: 70%;
            height: 100px;
            font-size: 100%;
            border: 0px;
            border-radius: 8px;
            padding: 8px;
            font-family: 'Roboto', sans-serif;
            transition: 1s;
        }
        #leftMsg:hover {
            box-shadow: inset 0px 0px 1px 0px #9c9c9c;
            transition: 1s;
        }
        #leftMsg:focus {
            outline: none;
            box-shadow: inset 0px 0px 3px 1px #9c9c9c;
            transition: 1s;
        }
        div.acceptedIcon {
            transition: 1s;
            margin-top: 10px;
            width: 10vw;
            margin-left: 5px;
        }
        div.accepted {
            width: 100%;
            height: 100%;
            top: 0px;
        }
        div.topBar {
            width: 100%;
            height: 10%;
        }
        div.msgBox {
            background: white;
            box-shadow: inset 0px 0px 3px 1px #9c9c9c;
            width: 100%;
            height: 80%;
			transform: rotate(180deg);
			padding-top: 8px;
        }
        input.msg {
            transition: 0.5s;
            height: 30px;
            width: 70%;
            margin: 0px;
            margin-left: 15px;
            margin-top: 13px;
            font-size: 100%;
            padding: 0px;
            padding-left: 5px;
            border: 0px;
            border-bottom: 1.25px solid #a1a1a1;
            background-color: transparent;
            outline: none;
            color: #424242;
            font-family: 'Roboto', sans-serif;
            float: left;
        }
        input.msg:hover {
            border-bottom: 1.35px solid #878787;
        }
        input.msg:focus {
            transition: 0.5s;
            outline: none;
            border-bottom: 1.35px solid #878787;
        }
        div.sendIcon {
            margin-top: 10px;
            margin-right: 30px;
            height: 40px;
            width: 40px;
            float: right;
            fill: #595959;
            opacity: 0.6;
        }
        div.sendIcon:hover {
            transition: 0.5s;
            opacity: 1;
        }
    </style>
    <script>
        var server;
        function register() {
            connection = new WebSocket('ws://whispering-brook-72870.herokuapp.com/');
            connection.onopen = () => {
                console.log("connection made");
                connection.send(JSON.stringify({status: '0',name: document.getElementById("name").value}));
            }
            connection.onmessage = e => { recieve(e); }
            document.getElementById("reg").className = "registration left";
            document.getElementById("icon").className = "waitIcon";
            document.getElementById("wait").className = "waiting center";
            fading = setInterval(tips,2000);
        }

        function recieve(e) {
            var message = JSON.parse(e.data);
            if (message.status == "3") {
              accepted();
            } else if (message.status == "4") {
              declined();
              connection.close();
            } else if (message.status == "7") {
              write(false,message.message)
            }
        }

        var fading;
        var count = 0;
        var tipOptions = ["Maybe he's in another castle","Its like waiting for a bus", "I'm sure he won't be long"];
        function tips() {
            clearInterval(fading);
            document.getElementById("tips").className = "waitingTips";
            fading = setInterval(hideTip,5000);
        }

        function hideTip() {
            clearInterval(fading);
            document.getElementById("tips").className = "waitingTips hidden";
            fading = setInterval(nextTip,1500);
        }

        function nextTip() {
            clearInterval(fading);
            document.getElementById("tips").innerHTML  = tipOptions[count];
            count++;
            if (count >= tipOptions.length) {
                count = 0;
            }
            tips();
        }

        function accepted() {
            clearInterval(fading);
            document.getElementById("reg").className = "registration left";
            document.getElementById("wait").className = "waiting left";
            document.getElementById("icon").className = "acceptedIcon";
            document.getElementById("accepted").className = "accepted center";
        }

        function declined() {
            clearInterval(fading);
            document.getElementById("wait").className = "waiting left";
            document.getElementById("icon").className = "waitIcon";
            document.getElementById("declined").className = "declined center";
        }

        function send() {
            var box = document.getElementById("msg");
            connection.send(JSON.stringify({status: "6",msg: box.value}));
            write(true,box.value);
            box.value = "";
            return false;
        }

        function message() {
            console.log("DO SOMETHING!");
        }

        function write(sent,msgText) {
            console.log(sent + ", " + msg);
			var msg = document.createElement("div");
			msg.className = "MSG";
			if (sent) {
				var sentM = document.createElement("div");
				sentM.className = "sentMSG";
				var text = document.createElement("p");
				text.className = "MSGtext sentText";
				text.innerHTML = msgText;
				sentM.appendChild(text);
				msg.appendChild(sentM);
			} else {
				var recievedM = document.createElement("div");
				recievedM.className = "recievedMSG";
				var text = document.createElement("p");
				text.className = "MSGtext recievedText";
				text.innerHTML = msgText;
				recievedM.appendChild(text);
				msg.appendChild(recievedM);
			}
			var outerBox = document.getElementById("msgBox");
			outerBox.insertBefore(msg,outerBox.firstChild);
        }
    </script>
</head>
<body>
    <div id="icon" class="regIcon">
        <?php
            echo file_get_contents("./icon.svg");
        ?>
    </div>
    <div id="reg" class="registration center">
        <p class="regTitle">Welcome,</p>
        <p class="regDesc">Please fill out your name to continue</p>
        <p class="name">Name</p>
        <input type="text" id="name"/>
		<script>
			document.getElementById("name").addEventListener("keyup", function(event) {
			  if (event.keyCode === 13) {
				event.preventDefault();
				register();
			  }
			});
		</script>
        <button class="btn" type="button" onclick="register()"><span>Start chat</span></button>
    </div>
    <div id="wait" class="waiting right">
        <p id="tips" class="waitingTips hidden">Lets see who's home</p>
    </div>
    <div id="declined" class="declined right">
        <p class="declinedTitle">Ben isn't available right now,</p>
        <p class="declinedDesc">would you like to leave a message?</p>
        <textarea rows="4" cols="50" id="leftMsg"></textarea>
        <button class="btn" type="button" onclick="message()" style="margin-top: 20px; width:60%;"><span>Send</span></button>
    </div>
    <div id="accepted" class="accepted right">
        <div class="topBar">

        </div>
        <div id="msgBox" class="msgBox">
        </div>
        <div class="msgChin">
            <input id="msg" class="msg"/>
			<script>
				document.getElementById("msg").addEventListener("keyup", function(event) {
				  if (event.keyCode === 13) {
					event.preventDefault();
					send();
				  }
				});
			</script>
        </div>
        <a href="javascript:void(0)" onclick="send()">
            <div class="sendIcon">
                <?php
                    echo file_get_contents("send.svg");
                ?>
            </div>
        </a>
    </div>
</body>
</html>
