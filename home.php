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
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto&display=swap" rel="stylesheet">
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
					He is Ben.
				</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<?php
			// $p = scandir("./projects");
			// $count = 0;
			// foreach ($p as $project) {
			// 	if ($count > 1) {
			// 		$col = file_get_contents("./projects/".$project."/col.txt");
			// 		echo '<a href="https://github.com/BenRF/BenM-app-">';
			// 		echo '<div class="card">';
			// 			echo '<div class="title">';
			// 				echo file_get_contents("./projects/".$project."/icon.svg");
			// 				echo '<p class="projectTitle" style="color: '.$col.'">'.$project.'</p>';
			// 			echo '</div>';
			// 			echo '<img src="./projects/'.$project.'/base.jpg" class="card"/>';
			// 			echo '<p class="projectDesc">'. file_get_contents("./projects/".$project."/desc.txt") .'</p>';
			// 		echo '</div>';
			// 		echo '</a>';
			// 	}
			// 	$count = $count + 1;
			// }
			?>
			<div class="project" style="background: #4192cc;height: auto;">
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
				<div class="phoneDrawing">
					<div class="phoneScreen"></div>
				</div>
		</div>
			</div>
			<div class="project" style="background: #818fa2;">
				<div class="desc">
				<div class="icon">
					<?php
						echo file_get_contents("./projects/website/icon.svg");
					?>
				</div>
				<p class="projectTitle">Site</p>
				<p class="projectDescription">
					My personal site to act as a digital portfolio.
				</p>
			</div>
			</div>
		</div>
		<div id="contact" class="contactLock">
			<p>ADD CONTACT DETAILS HERE</p>
			<!-- <div id="benMApp" class="benM">
				<div class="msg">
					<input class="msg" type="text"/>
				</div>
			</div>
			<div class="details">
				<div class="detail">
					<img class="detail" src="icons/mail.png" height="80" width="80">
					<a href="mailto:benramsayfoster@gmail.com"><p class="detail link2" style="color: #e75a4d !important;">benramsayfoster@gmail.com</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/git.png" height="80" width="80">
					<a href="https://github.com/BenRF"><p class="detail link">BenRF</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/discord.png" height="80" width="80">
					<p class="detail" style="color: #7289da !important;">B3athunter #9950</p>
				</div>
			</div> -->
		</div>
	</body>
</html>
