<style>
div.monitor {
	height: 85%;
	width: 60vh;
	position: absolute;
	top: 10px;
	left: calc(45% - 22.5vh);
}
div.phone {
	height: 60%;
	width: 20vh;
	left: calc(70% - 7.5vh);
	top: 40%;
	position: absolute;
}
div.screen {
		box-shadow: 1px 1px 3px #28303a;
		position: absolute;
		top: 0px;
		height: 70%;
		width: 90%;
		background: #28303a;
		border-radius: 20px;
		padding: 5%;
}
div.innerScreen {
		box-shadow: inset 0px 0px 6px 0px #28303a;
		padding: 0px;
		background: #dbdbdb;
		background-image: url("icons/wallpaper.jpg");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		width: 100%;
		height: 100%;
		border-radius: 3px;
		overflow: hidden;
}
div.stand {
		box-shadow: 0px 0px 2px 0px #28303a;
		background: #212830;
		width: 10%;
		height: 15%;
		position: absolute;
		left: 45%;
		bottom: 5%;
		border-radius: 0px;
}
div.base {
		filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
		border-bottom: 35px solid #28303a;
		border-left: 30px solid transparent;
		border-right: 30px solid transparent;
		height: 0;
		width: 16%;
		position: absolute;
		bottom: 0px;
		left: 35%;
		border-radius: 23px;
}
div.taskBar {
	margin-top: 8%;
	background: #808080;
	width: 99%;
	height: 4%;
	padding-left: 1%;
	padding-top: 1%;
}
div.windowStart {
	background: #d9d9d9;
	height: 50%;
	width: 5px;
	border-radius: 2px;
}
div.window {
	background: #dbdbdb;
	width: 50%;
	height: 70%;
	border-radius: 5px;
	margin-top: 8%;
	margin-left: 20%;
	overflow: hidden;
}
div.windowHeader {
	z-index: 1;
	background: #e3e3e3;
	width: 97%;
	height: 9%;
	padding-top: 4%;
	padding-left: 3%;
	box-shadow: 0px 0px 2px 0px #909cad;
}
div.headerBar {
	float: left;
	background: white;
	width: 70%;
	height: 60%;
	font-size: 50%;
	border-radius: 5px;
	padding-left: 5px;
}
div.headerButtons {
	float: left;
	background: white;
	border-radius: 5px;
	width: 15%;
	height: 60%;
	margin-left: 3%;
}
div.headerForward {
	font-size: 50%;
	width: calc(50% - 0.75px);
	text-align: center;
	float: left;
	padding: 0px;
}
div.headerBack {
	font-size: 50%;
	width: calc(50% - 0.75px);
	text-align: center;
	float: left;
	border-right: 1.5px solid #e3e3e3;
}
div.msgBarC {
    margin-top: 5px;
	background: #ededed;
	width: 100%;
	height: 10%;
	box-shadow: 0px 0px 2px 0px #909cad;
}
div.msgInput {
	width: 80%;
	height: 8.7px;
	border-bottom: 1.2px solid #ffa500;
	margin-top: 3px;
	margin-left: 5px;
}
div.chatC {
	z-index: 0.5;
	margin-top: 0%;
	width: calc(100% - 10px);
	height: 70%;
	padding: 5px;
	padding-top: 0px;
	overflow: hidden;
}
div.msgC {
	width: 100%;
	height: 30px;
}
div.sentC {
	float: right;
	margin-top: 3px;
	margin-left: 15px;
	padding: 3px;
	padding-left: 6px;
	padding-right: 6px;
	font-size: 70%;
	background: #4287f5;
	color: white;
	text-align: right;
	border-radius: 8px 8px 0px 8px;
}
div.recievedC {
	float: left;
	margin-top: 3px;
	padding: 3px;
	padding-left: 6px;
	padding-right: 6px;
	font-size: 70%;
	background: #bababa;
	text-align: left;
	border-radius: 8px 8px 8px 0px;
}
div.phoneDrawing {
	box-shadow: 0px 0px 5px 0px #28303a;
	background: #181d24;
	width: 80%;
	height: 70%;
	border-radius: 20px 20px 20px 20px ;
	padding-top: 15%;
	padding-left: 10%;
	padding-right: 10%;
	padding-bottom: 30%;
}
div.phoneScreen {
	box-shadow: inset 0px 0px 6px 0px #28303a;
	background: #dbdbdb;
	width: 100%;
	height: 100%;
	padding-top: 5px;
	overflow: hidden;
}
div.phoneButton {
	background: #1f252e;
	width: 20%;
	height: 23px;
	border-radius: 11.5px;
	box-shadow: inset 0px 0px 6px 0px #28303a;
	margin-top: 6%;
	margin-left: 40%;
}
div.drawnMsgP {
	position: relative;
	display: inline-block;
	font-size: 70%;
	margin: 3px;
	padding: 4px;
}
.sentP {
	background: #4287f5;
	color: white;
	text-align: right;
	margin-left: 10px;
	border-radius: 8px 8px 0px 8px;
}
.recievedP {
	background: #bababa;
	text-align: left;
	margin-right: 10px;
	border-radius: 8px 8px 8px 0px;
}
div.msgBarP {
	margin-top: 5%;
	width: 100%;
	height: 13%;
	background: #ededed;
	box-shadow: 0px 0px 2px 0px #909cad;
	padding-top: 8%;
}
div.msgInputP {
	width: 80%;
	height: 8.7px;
	border-bottom: 1.2px solid #ffa500;
	margin-left: 5px;
}
</style>
<div class="project">
    <div class="icon">
      <?php
        echo file_get_contents("./projects/BenM/icon.svg");
      ?>
    </div>
    <p class="projectTitle" style="color: #4287f5; ">BenM</p>
    <p class="projectDescription">
        A simple web app and phone app messenger bridging from a customers browser
        to the site owners phone allowing for an easier way of keeping in touch
        with potential customers. Using WebSockets in the nodeJS server allowing
        for the javascript client to message the React Native client seamlessly.
    </p>
    <div class="drawing">
        <div class="monitor">
            <div class="base"></div>
            <div class="stand"></div>
            <div class="screen">
                <div class="innerScreen">
                  <div class="window">
                    <div class="windowHeader">
                      <div class="headerBar">benrf.co.uk</div>
                      <div class="headerButtons">
                        <div class="headerBack"><</div>
                        <div class="headerForward">></div>
                      </div>
                    </div>
                    <div class="chatC">
                      <div class="msgC">
                        <div class="sentC">Hey</div>
                      </div>
                      <div class="msgC">
                        <div class="recievedC">Hi there, how can I help?</div>
                      </div>
                      <div class="msgC">
                        <div class="sentC">I just had a question about your previous work experience</div>
                      </div>
                    </div>
                    <div class="msgBarC">
                      <div class="msgInput"></div>
                    </div>
                  </div>
                  <div class="taskBar">
                    <div class="windowStart"></div>
                  </div>
                </div>
            </div>
        </div>
        <div class="phone">
            <div class="phoneDrawing">
              <div class="phoneScreen">
                <div class="drawnMsgP recievedP">Hey</div>
                <div class="drawnMsgP sentP">Hi there, how can I help?</div>
                <div class="drawnMsgP recievedP">I just had a question about your previous work experience</div>
                <div class="msgBarP">
                  <div class="msgInputP"></div>
                </div>
                </div>
                <div class="phoneButton"></div>
              </div>
            </div>
        </div>
    </div>
</div>
