<html>
	<head>
		<?php
			session_start();
			$id = session_id();
			$projects = scandir("projects/");
			//https://realfavicongenerator.net/, for when you have an actual icon
		?>
		<title>Ben R F</title>
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#4287f5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Blinker|Fira+Sans|Roboto&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="stuff.js"></script>
		<script>
			window.onscroll = scrollCheck;
			window.onfocus = resume;
			window.onblur = pause;
		</script>
	</head>
	<body id="b" onload="start()">
		<div id="header" class="header attached">
			<a href="javascript:void(0)" onclick="sTo(0)"> <p id="t1" class="title attachedT">Ben Ramsay Foster</p> </a>
			<a href="javascript:void(0)" onclick="sTo(3)"> <p id="t2" class="header c attachedH">Contact</p> </a>
			<a href="javascript:void(0)" onclick="sTo(2)"> <p id="t3" class="header p attachedH">Projects</p> </a>
			<a href="javascript:void(0)" onclick="sTo(1)"> <p id="t4" class="header a attachedH">About</p> </a>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<div id="main" class="typingLock">
			<p id="cmd2" class="cmd"></p>
		  <p id="cmd1" class="cmd"><b id="bl" class="blink"> _</b></p>
		</div>
		<div class="aboutLock">
			<div class="about">
				<p class="about">
					As a computer science student I find myself coding in a variety of languages and context's, from creating a phone app for the elderly to track
					their energy usage to encrypting messages in python. While all aspects of computer science are intresting and all have their own
					appeal and depth that someone can get lost in trying to perfect, I continuosly look to challenge myself in different ways with new challenges that
					will leave me pulling out my hair trying to perfect the efficiency or the functionality. By doing this I not only expand my knowledge of a
					certain programming enviroment but I can discover new ways of solving problems that I may not have thought of beforehand.
				</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<div class="project" style="background: #4192cc; height: 375px;">
			<div class="desc">
				<div class="icon">
					<?php
						echo file_get_contents("./projects/BenM (client)/icon.svg");
					?>
				</div>
				<p class="projectTitle">BenM</p>
				<p class="projectDescription">
					A web application that allows for a site owner to offer live chat functionality on their website using their mobile phone. Using NodeJS for websockets between the
					Javascript web client and the React Native phone app allowing for easier and more accessible communication with potential customers.
				</p>
				<div class="projectLinks">
					<div class="projectLink">
						<p class="projectButtonTag">Try it out</p>
					</div>
				</div>
			</div>
			<div class="drawing">
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
									<div class="windowTabs">
										<div class="windowMini"></div>
										<div class="windowClose"></div>
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
				<div class="phoneDrawing">
					<div class="phoneScreen">
						<div class="drawnMsgP recievedP">Hey</div>
						<div class="drawnMsgP sentP">Hi there, how can I help?</div>
						<div class="drawnMsgP recievedP">I just had a question about your previous work experience</div>
						<div class="msgBarP">
							<div class="msgInput"></div>
						</div>
					</div>
					<div class="phoneButton"></div>
				</div>
		</div>
			</div>
			<div class="project" style="background: #686e70; height: 375px; box-shadow: inset 0px 0px 8px 0px #545354;">
				<div class="screepsDrawing">
					<div class="rock" style="width: 50px; height: 325px; top: 25px; left: -25px;"></div>
					<div class="rock" style="width: 50px; height: 100px; top: 75px; left: -5px;"></div>
					<div class="rock" style="width: 75px; height: 100px; top: 125px; left: -5px;"></div>
					<div class="rock" style="width: 75px; height: 75px; top: 250px; left: -25px;"></div>

					<div class="rock" style="width: 50px; height: 175px; top: 400px; left: -20px;"></div>
					<div class="rock" style="width: 75px; height: 150px; top: 425px; left: -20px;"></div>
					<div class="rock" style="width: 50px; height: 50px; top: 475px; left: 25px;"></div>

					<div class="rock" style="width: 175px; height: 40px; top: -20px; left: 75px;"></div>
					<div class="rock" style="width: 75px; height: 65px; top: -20px; left: 175px;"></div>
					<div class="rock" style="width: 35px; height: 100px; top: -20px; left: 175px;"></div>
					<div class="rock" style="width: 200px; height: 50px; top: -20px; left: 200px;"></div>
					<div class="rock" style="width: 35px; height: 75px; top: -20px; left: 325px;"></div>

					<div id="screep1" class="screep" style="left: -22.5px; top: 2.5px"></div>
					<div id="screep2" class="screep" style="left: -47.5px; top: 350px"></div>
					<div id="screep3" class="screep" style="left: 27.5px; top: -45.5px"></div>
				</div>
				<div class="stats">
					<div class="innerStat">
						<?php
							$stats = array("Rooms owned","Units","Average unit cost","Average room level");
							foreach ($stats as $s) {
								echo '<div class="stat">';
									echo '<p class="statLabel">'.$s.'</p>';
									echo '<p class="stat">0</p>';
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="desc" style="padding-left: 650px;">
					<div class="icon">
						<?php
							echo file_get_contents("./projects/Screeps/icon.svg");
						?>
					</div>
					<p class="projectTitle">Screeps</p>
					<p class="projectDescription" style="max-width: 80%;">
						An online MMO based around programming units using Javascript. Requires solutions to be scalable and robust to deal with both other players
						and AI opponents. A good passtime to keep occupied between projects and to introduce new problems to solve without compromising previous work.
					</p>
				</div>
			</div>
		</div>
		<div id="contact" class="contactLock">
			<div class="details">
				<div class="detail">
					<img class="detail" src="./icons/mail.png"/>
				</div>
				<div class="detail">
					<!-- <img class="detail" src="./icons/mail.png"/> -->
				</div>
				<div class="detail">
					<!-- <img class="detail" src="./icons/mail.png"/> -->
				</div>
				<div class="detail">
					<!-- <img class="detail" src="./icons/mail.png"/> -->
				</div>
			</div>
		</div>
	</body>
</html>
