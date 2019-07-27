<style>
    div.screen {
        box-shadow: 1px 1px 3px #28303a;
        position: absolute;
        height: 400px;
        width: 650px;
        background: #28303a;
        border-radius: 20px;
        bottom: 230px;
        left: 500px;
        padding: 0px;
    }
    div.innerScreen {
        box-shadow: inset 0px 0px 6px 0px #28303a;
        padding: 0px;
        background: #333d4a;
        width: 93%;
        height: 88%;
        border-radius: 3px;
        margin-left: 3.5%;
        margin-top: 3.5%;
    }
    div.stand {
        box-shadow: inset 7px 0px 15px -10px #6b7785, inset -7px 0px 15px -10px #6b7785;
        background: #212830;
        width: 75px;
        height: 100px;
        position: absolute;
        left: 790px;
        bottom: 160px;
        border-radius: 0px;
    }
    div.base {
        filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
        border-bottom: 75px solid #28303a;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        height: 0;
        width: 150px;
        position: absolute;
        bottom: 125px;
        left: 730px;
        border-radius: 23px;
    }
    div.desk {
        filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
        border-bottom: 175px solid #755b28;
        border-left: 100px solid transparent;
        border-right: 120px solid transparent;
        width: 1430px;
        height: 0px;
        position: absolute;
        left: 0px;
        bottom: 30px;
    }
    div.deskFront {
        background: #634d22;
        width: 1650px;
        height: 30px;
        position: absolute;
        bottom: 0px;
    }
    div.pcSide {
        clip-path: polygon(0 70%, 0 0, 100% 25%, 100% 100%);
        background: #28303a;
        width: 125px;
        height: 600px;
        position: absolute;
        left: 1300px;
        bottom: 40px;
    }
    div.pcWindow {
        clip-path: polygon(0 65%, 0 0, 100% 25%, 100% 100%);
        margin-top: 5px;
        margin-left: 5px;
        height: 475px;
        width: 120px;
        background: white;
        opacity: 0.1;
    }
    div.pcFront {
        background: #2e3742;
        width: 193px;
        height: 450px;
        position: absolute;
        left: 1425px;
        bottom: 40px;
    }
    div.pcTop {
        clip-path: polygon(33% 100%, 0 0, 50% 0, 85% 100%);
        background: #313b47;
        width: 375px;
        height: 150px;
        position: absolute;
        left: 1300px;
        bottom: 489px;
    }
    div.pcBack {
        background: #2e3742;
        width: 130px;
        height: 315px;
        position: absolute;
        left: 0px;
    }
    div.powerBut {
        width: 10px;
        height: 10px;
        background: transparent;
        border: 2px solid white;
        margin-left: 160px;
        margin-top: 20px;
        border-radius: 5px;
        animation: fade 3s infinite;
    }
    @keyframes fade {
        from, to {
            opacity: 0.8;
        }
        70% {
            opacity: 0.05;
        }
    }
    div.gpuSide {
        background: #858585;
        clip-path: polygon(0 0, 90% 85%, 90% 100%, 0 15%);
        width: 150px;
        height: 175px;
        position: absolute;
        left: 75px;
        top: 200px;
    }
    div.gpuTop {
        background: #949494;
        clip-path: polygon(33% 100%, 0 0, 50% 0, 85% 100%);
        width: 150px;
        height: 55px;
        position: absolute;
        left: 75px;
        top: 200px;
    }
    div.leg {
        background: #28303a;
        clip-path: polygon(30% 0, 100% 70%, 100% 100%, 85% 100%, 0 15%, 0 0);
        height: 60px;
        width: 40px;
        position: absolute;
    }
    div.leg1 {
        filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
        bottom: 45px;
        left: 1380px;
    }
    div.leg2 {
        filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
        bottom: 130px;
        left: 1320px;
    }
    div.frame {
        background: #3da1cc;
        width: 600px;
        height: 400px;
        position: absolute;
        bottom: 725px;
        left: 225px;
        box-shadow: 2px 2px 2px 0px #ada8a8;
    }
</style>
<div class="desk"></div>
<div class="deskFront"></div>
<div class="leg leg1"></div>
<div class="leg leg2"></div>
<div class="pcSide">
    <div class="pcBack"></div>
    <div class="gpuSide"></div>
    <div class="gpuTop"></div>
    <div class="pcWindow"></div>
</div>
<div class="pcFront">
    <div class="powerBut"></div>
</div>
<div class="pcTop"></div>
<div class="base"></div>
<div class="stand"></div>
<div class="screen">
    <div class="innerScreen"></div>
</div>
