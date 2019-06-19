<html>
	<head>
		<title>Ben R F</title>
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
			<a href="javascript:void(0)" onclick="sTo(0)"> <p class="title">Ben Ramsay Foster</p> </a>
			<a href="javascript:void(0)" onclick="sTo(3)"> <p class="header c">Contact</p> </a>
			<a href="javascript:void(0)" onclick="sTo(2)"> <p class="header p">Projects</p> </a>
			<a href="javascript:void(0)" onclick="sTo(1)"> <p class="header a">About</p> </a>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<div id="main" class="typingLock">
			<p id="typing" class="type"></p>
			<p id="typing1" class="type"></p>
			<p id="typing2" class="type"></p>
			<p id="typing3" class="type"></p>
		</div>
		<div id="about" class="aboutLock">
			<div class="about">
				<img class="self" src="./self.jpg"/>
				<p class="about">
					This block of text goes on and on and does not have any visual separation between what would normally make up a new paragraph. Instead, it will continue to have more text added to it and look like it has not been formatted. It just keeps going and going and going and will start new topics without separating them with paragraphs. You see, even though this is nice, let's talk about CSS (Cascading Style Sheets), often called style sheets, for a minute. Style sheets are often used to affect the appearance of Web pages. CSS code contains selectors and definitions for the various tags, classes, or ids that are used when marking up and HTML document. JavaScript, on the other hand, can add additional functionality to a Web page. Since it is a programming language, you can write code to perform any number of tasks. You could change the content within a block of text, change an image when the user places their mouse over a specific part of the page, validate form content, send alert messages, and more. It can be learned through books, tutorials, or classes that are offered in many place, especially on the Web. If you want to delve into server-side programming, you might look into PHP, ASP, Perl, Java, or other available languages. These allow you to save information into databases, handle feedback forms, create shopping carts, and more. Did you read all of this or give up?
				</div>
		</div>
		<div id="projects" class="projectLock">
			<div class="projectSelect">
				<a href="javascript:void(0)" onclick="pick('screeps')"><p id="screeps" class="project">Screeps</p></a>
				<a href="javascript:void(0)" onclick="pick('benm')"><p id="benm" class="project">BenM</p></a>
			</div>
			<div id="projectDisplay" class="projectDisplay"></div>
		</div>
		<div id="contact" class="contactLock">
			<div id="benMApp" class="benM">
				<div class="msg">
					<input class="msg" type="text"/>
				</div>
			</div>
			<div class="details">
				<div class="detail">
					<img class="detail" src="icons/phone.png" height="80" width="80">
					<p class="detail">07507764316</p>
				</div>
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
			</div>
		</div>
	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
	<!–– <script src="benM/benM.js"></script> ––>
	</body>
</html>
