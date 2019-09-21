var conn;
var msgs;
var stage = 0;
function setup() {
  msgs = [];
  conn = new WebSocket("ws://localhost:8080");

  conn.onopen = () => {
    console.log("connection made");
    conn.send(JSON.stringify({status: '0',name: document.getElementById("name").value}));
    document.getElementById("register").className = "register msgLeft";
    document.getElementById("waiting").className = "waiting msgCenter";
    stage = 1;
  }

  conn.onerror = error => {
    console.log(`WebSocket error: ${error}`);
  }

  conn.onmessage = e => {
    var message = JSON.parse(e.data);
    if (message.status == "3") {
      accepted();
    } else if (message.status == "4") {
      rejected();
    } else if (message.status == "7") {
      recieveMsg(message.message);
    }
  }
}

function rejected() {
  console.log("Connection denied");
  document.getElementById("waiting").className = "waiting msgLeft";
  document.getElementById("rejected").className = "rejected msgCenter";
  conn.close();
}

function accepted() {
  console.log("Connection accepted");
  document.getElementById("waiting").className = "waiting msgLeft";
  document.getElementById("approved").className = "approved msgCenter";
  document.getElementById("innerBox").className = "innerBox bigBox";
  document.getElementById("chin").className = "msgChin";
  document.getElementById("actions").className = "benmActions shownActions";
}

function sendMsg() {
    var box = document.getElementById("benMmsg");
    conn.send(JSON.stringify({status: "6",msg: box.value}));
    var row = document.createElement("div");
    row.className = "benmRow";
    var msg = document.createElement("div");
    msg.className = "benmmsg benmsent";
    var t = document.createElement("p");
    t.className = "benmmsg";
    t.innerHTML = box.value;
    msg.appendChild(t);
    row.appendChild(msg);
    document.getElementById("msgs").appendChild(row);
    console.log("SENT: " + box.value);
    box.value = "";
    return false;
}

//<div class="benmRow">
//  <div class="benmmsg benmsent">
//    <p class="benmmsg">Hey there</p>
//  </div>
//</div>

function recieveMsg(m) {
  var row = document.createElement("div");
  row.className = "benmRow";
  var msg = document.createElement("div");
  msg.className = "benmmsg benmrecieved";
  var t = document.createElement("p");
  t.className = "benmmsg";
  t.innerHTML = m;
  msg.appendChild(t);
  row.appendChild(msg);
  document.getElementById("msgs").appendChild(row);
  console.log("BEN: " + m);
}
