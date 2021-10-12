<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="michelAdam.php">Michel Adam</a>
        <a href="kashiff_khan.php">Kashiff Khan</a>
        <a href="fashiontv.php">Fashion TV</a>
        <a href="channels.php">Channels</a>
        <a href="ftvsog.php">FTV SOG</a>
        <a href="sogcourses.php">Courses</a>
        <a href="franchise.php">Franchise</a>
    </div>
    <div id="nav" class="">
        <img src="/assets//media//images/logo.png" alt="logo" class="logo">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="bar">&#9776; </span>
    </div>
</header>

<style type="text/css">
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 9999;
        top: 0;
        right: 0px;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #bar {
        margin-right: 25px;
        margin-top: 10px;
    }

    #nav {
        transition: margin-left .5s;
        /*padding: 10px;*/
        /*border: 1px solid red;*/
        display: flex;
        color: #fff;
        width: 100%;
        justify-content: space-between;
        background-color: #060000;
        z-index: 1000;
    }

    .logo {
        width: auto;
        height: 60px;
        margin: 5px 20px;
        /*border: 1px solid green;*/
    }


    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    @media screen and (min-device-width: 360px) and (max-device-width: 700px) {

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0px;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #bar {
            margin-right: 25px;
        }

        #nav {
            transition: margin-left .5s;
            display: flex;
            color: #fff;
            width: 100%;
            justify-content: space-between;
            background-color: #060000;
        }

        .logo {
            width: 5%;
            height: 50px;
            /*border: 1px solid green;*/
        }
    }
</style>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("nav").style.marginRight = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("nav").style.marginLeft = "0";
    }
</script>