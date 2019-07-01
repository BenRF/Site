<html>
<head>
  <script>
    var picked = '1';
    function tab(num) {
      document.getElementById(picked + "o").className = "option";
      document.getElementById(picked + "d").className = "tab hidden";
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
    transition: 1s;
    padding: 15px;
  }
  div.hidden {
    transition: 1s;
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
    <p>blah</p>
  </div>
  <div id="2d" class = "tab hidden">
    <p>blah blah</p>
  </div>
  <div id="3d" class = "tab hidden">
    <p>blah blah blah</p>
  </div>
  <div id="4d" class = "tab hidden">
    <p>blah blah blah blah</p>
  </div>
</body>
</html>
