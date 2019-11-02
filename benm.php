<html>
<head>
    <title>BenM chat</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background: #e6e6e6;
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
            transition: 2s;
            margin-top: 5px;
            width: 10vw;
            margin-left: 5px;
        }
    </style>
    <script>
        function register() {
            document.getElementById("reg").className = "registration left";
            document.getElementById("icon").className = "waitIcon";
            document.getElementById("wait").className = "waiting center";
            fading = setInterval(tips,2000);
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
            //tips();
            accepted();
        }

        function accepted() {
            clearInterval(fading);
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
    </script>
</head>
<body>
    <div id="icon" class="regIcon">
        <?php
            echo file_get_contents("./projects/BenM/icon.svg");
        ?>
    </div>
    <div id="reg" class="registration center">
        <p class="regTitle">Welcome,</p>
        <p class="regDesc">Please fill out your name to continue</p>
        <p class="name">Name</p>
        <input type="text" id="name"/>
        <button class="btn" type="button" onclick="register()"><span>Start chat</span></button>
    </div>
    <div id="wait" class="waiting right">
        <p id="tips" class="waitingTips hidden">Lets see who's home</p>
    </div>
    <div id="declined" class="declined right">
        <p class="declinedTitle">Ben isn't available right now,</p>
        <p class="declinedDesc">would you like to leave a message?</p>
        <textarea rows="4" cols="50" id="leftMsg"></textarea>
        <button class="btn" type="button" onclick="register()" style="margin-top: 20px; width:60%;"><span>Send</span></button>
    </div>
    <div id="accepted" class="accepted right">
        <p>CONGRATS</p>
    </div>
</body>
</html>
