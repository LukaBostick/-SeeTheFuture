<!-- resources/views/waves.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$SeeTheFuture</title>
    
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

            #topRightButton {
    position: fixed; /* Fixed position */
    top: 10px; /* 10px from the top */
    right: 10px; /* 10px from the right */
    z-index: 1000; /* Ensure it's above other elements */
    /* Add more styling as needed */

    display: block;
    width: 270px;
    height: 50px;
    line-height: 50px;
    margin: 1em auto;
    text-align: center;
    color: #FFF;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 50em;
    background: linear-gradient(60deg, rgba(0, 201, 255, 1) 0%, rgba(255, 134, 0, 1) 100%);
    box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
    text-decoration: none;
}

#h2center {
    position: fixed; /* Fixed position */
    top: 151px; /* 10px from the top */
    align-self: center /* 10px from the right */
    z-index: 1000; /* Ensure it's above other elements */
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    letter-spacing: 2px;
    font-size: 28px;
    /* Add more styling as needed */
}

        body {
            margin: 0;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
            color: white;
        }

        .logo {
            width: 120px;
            display: inline-block;
            vertical-align:;
            float: left;
        }

        .inner-header {
            height: 85vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /* Flexbox for containers */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            top: -200px;    
            position : relative;

        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px; /* Fix for safari gap */
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */
        .parallax > use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /* Shrinking for mobile */
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>


<!--LOGO, AUTO --!>
</head>
<body>

<div class="header">

    <!-- Content before waves -->
    <div class="inner-header flex">
        <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 28.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg class = "logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 595.3 841.9" style="enable-background:new 0 0 595.3 841.9;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#4A9CD6;}
            .st1{fill:#192150;}
            .st2{fill:#2B4CA0;}
            .st3{fill:#1D2856;}
            .st4{fill:#261616;}
        </style>
        <g id="Layer_2">
            <circle class="st0" cx="291.9" cy="415.1" r="262.3"/>
        </g>
        <g id="Layer_1">
            <path class="st0" d="M265.7,170.3c21,0,42,0,63.6,0.4c5,1.2,9.5,2,14,2.9c28.3,5.6,55.2,14.7,80.5,28.9
                c27.8,15.6,51.6,35.8,72,59.9c14.8,17.5,26.9,36.9,36.2,58c9,20.3,15.6,41.2,18.8,63.1c0.4,3,1.9,5.9,2.8,8.8
                c0,9.3,0,18.5-0.3,28.1c-2.1-1.4-4-3-5.8-4.7c-40.1-39.7-80.2-79.5-120.4-119.2c-2-2-4.3-3.5-6.8-5.4c-0.6-0.1-1-0.1-1.2,0.1
                c-15.4,8.8-30.9,17.6-46.2,26.6c-1.3,0.8-2.3,3.2-2.3,4.9c-0.2,7.9,0,15.8-0.1,23.8c-0.1,11.1,1.6,9.7-10.2,10
                c-4.4,0.1-8.7,0.9-13.4,1.3c-1.8-1.4-3.4-2.6-4.8-4c-10-9.9-20-19.8-30-29.6c-1.7-1.7-4-2.7-6.3-4.3c-8.9-14.4-21-24.9-36.7-30.4
                c-34.1-11.9-68.7-12.7-102.6,0.1c-33.7,12.8-50.9,46-42.7,79.8c4.3,17.7,15,31,30,41.5c1,1.7,1.7,3.3,2.8,4.4
                c28.8,28.5,57.7,57,86.1,85.7c-10.3,0.8-20.2,1.5-30.3,1.9c-14.7-14.7-29.1-29.1-43.7-43.5c-1.2-1.2-3.1-1.8-4.8-3
                c-2.4-0.7-4.7-1.6-7-1.4c-13.1,1.1-26.1,2.6-39.2,3.6c-4.5,0.3-5.4,2-4.7,6.2c4.1,25.6,14.5,47.7,35.6,64.3c0.5,0.4,0.8,0.7,1,1
                c-0.1,0,0-0.1,0.2,0.1c0.4,0.4,0.7,0.7,0.9,0.8c-0.1-0.1,0-0.2,0.1,0.1c1.8,2.4,3.3,4.5,5.1,6.4c45.1,44.8,90.3,89.5,135.4,134.3
                c1.9,1.9,3.5,3.9,5.3,5.9c-10,0-20,0-30.6-0.4c-3.5-1.1-6.5-2.1-9.5-2.5c-29.9-4.4-57.8-14.3-84.2-28.9
                c-31-17.2-57.1-39.9-78.8-67.8c-26-33.5-42.3-71.2-49.1-113c-0.5-3.2-1.9-6.2-2.8-9.3c0-20.8,0-41.6,0.4-63
                c0.8-1.6,1.4-2.6,1.6-3.6c3.2-25.4,10.6-49.5,21.4-72.6c15.6-33.1,37.7-61.4,65.7-85.3c15-12.8,31.2-23.9,48.8-32.9
                c26.2-13.4,53.8-22.3,83.1-26C263.7,172,264.7,170.9,265.7,170.3z"/>
            <path class="st1" d="M420.7,287.4c2.2,1.8,4.5,3.4,6.5,5.3c40.2,40.1,80.3,80.2,120.4,120.3c1.8,1.8,3.7,3.4,5.8,5.2
                c0.3,11.5,0.3,22.9,0,34.9c-0.8,2.2-1.5,3.7-1.7,5.3c-3.7,25.8-11.1,50.4-22.3,73.8c-17,35.4-41.1,65.3-71.7,89.8
                c-35.1,28.1-74.8,45.7-119.2,52.7c-3,0.5-5.8,1.8-8.8,2.7c-10.7,0-21.4,0-32.5,0c-2.2-2-3.9-4.1-5.8-5.9
                c-45.2-45.2-90.3-90.3-135.5-135.5c-1.9-1.9-3.4-4.1-4.8-6.4c17.1,10.5,35.9,15.1,55.6,16.3c23.3,1.4,46.4,0.4,68.3-8.6
                c31.1-12.8,47.7-36.6,48.9-70.1c1.2-33.5-13.4-58.6-44.6-71.7c-17.2-7.2-35.7-11.4-53.6-17c-12.5-3.9-25.1-7.7-37.5-12
                c-3.5-1.2-6.9-3.5-9.6-6.1c-9.7-8.9-8.6-23.6,2.3-31c14.9-10,31.6-10.2,48.6-8.1c17.6,2.1,28.3,12.1,32.9,29
                c0.3,1.3,0.9,2.6,0.9,3.9c0.2,3.1,1.9,3.7,4.7,3.6c5.5-0.3,11-0.4,16.5-0.6c10.6-0.5,21.2-1,32.2-1.6c-0.5-14.3-3.8-27.2-10.6-39.1
                c2,1.4,4.3,2.4,6.1,4.1c10.1,9.9,20,20,30,29.9c1.4,1.4,3,2.6,4.9,4.4c0.4,12.8,0.4,25.1,0.4,37.8c6.5,0,12.2,0.2,17.8-0.1
                c4.2-0.2,5.4,1.2,5.3,5.4c-0.2,25.3-0.2,50.7,0,76c0.1,11.3,0.3,22.7,1.2,33.9c1.4,15.9,8.1,28.4,24.3,34c20.3,7,40.4,4.6,60.1-2.5
                c1.1-0.4,2.3-2.4,2.2-3.6c-1.1-11.7-2.6-23.5-3.9-35.5c-5.7,1.4-10.9,3.1-16.3,3.9c-10.8,1.7-16.6-3.1-17.3-13.8
                c-0.1-2.2-0.2-4.3-0.2-6.5c0-28.7-0.1-57.3-0.1-86c0-1.6,0.2-3.2,0.4-5.3c11.3,0,22.2,0,33.3,0c0-13.4,0-26.3,0-39.7
                c-11.3,0-22.3,0-33.6,0C420.7,330.6,420.7,309,420.7,287.4z"/>
            <path class="st2" d="M305.8,316.2c7,12.1,10.3,25,10.9,39.3c-11,0.5-21.6,1.1-32.2,1.6c-5.5,0.3-11,0.3-16.5,0.6
                c-2.8,0.2-4.5-0.5-4.7-3.6c-0.1-1.3-0.6-2.6-0.9-3.9c-4.5-16.9-15.3-26.9-32.9-29c-17-2-33.7-1.8-48.6,8.1c-11,7.3-12.1,22-2.3,31
                c2.8,2.5,6.1,4.9,9.6,6.1c12.4,4.3,25,8.1,37.5,12c17.9,5.6,36.4,9.8,53.6,17c31.2,13.1,45.8,38.2,44.6,71.7
                c-1.2,33.5-17.7,57.3-48.9,70.1c-21.9,9-45,10-68.3,8.6c-19.7-1.2-38.5-5.8-55.7-16.6c-0.4-0.1-0.5,0.1-0.4-0.1
                c-0.3-0.4-0.6-0.6-1-0.7c0,0,0,0.1-0.1-0.2c-0.4-0.4-0.8-0.6-1.1-0.8c-20.9-16.6-31.3-38.9-35.4-64.8c-0.7-4.3,0.2-5.9,4.7-6.3
                c13.1-1,26.1-2.5,39.2-3.6c2.2-0.2,4.5,0.7,7,1.8c1.5,5.1,2.4,9.5,3.9,13.7c7.5,20.4,24.5,32.9,44.7,33.1
                c9.9-0.7,19.8-1.3,30.5-2.2c4.9-2.2,9.7-3.5,13.1-6.4c4.6-3.9,9.2-8.4,12.1-13.7c8-14.8,2.5-30.2-13.9-36.8
                c-13.7-5.4-28.2-9-42.4-12.8c-20.1-5.4-40.3-10.5-58.3-21.6c-14.9-10.3-25.6-23.7-29.9-41.6c-8.2-34.2,9-67.7,42.7-80.6
                c33.9-13,68.5-12.2,102.6-0.1C284.9,291,296.9,301.7,305.8,316.2z"/>
            <path class="st2" d="M420.4,287.3c0.3,21.7,0.3,43.4,0.3,65.6c11.3,0,22.2,0,33.6,0c0,13.4,0,26.3,0,39.7c-11.1,0-22,0-33.3,0
                c-0.1,2.1-0.4,3.7-0.4,5.3c0,28.7,0,57.3,0.1,86c0,2.2,0.1,4.3,0.2,6.5c0.7,10.7,6.5,15.5,17.3,13.8c5.4-0.8,10.6-2.5,16.3-3.9
                c1.4,12,2.8,23.8,3.9,35.5c0.1,1.2-1.2,3.2-2.2,3.6c-19.8,7.1-39.8,9.5-60.1,2.5c-16.1-5.6-22.9-18.1-24.3-34
                c-1-11.3-1.2-22.6-1.2-33.9c-0.2-25.3-0.1-50.7,0-76c0-4.1-1.1-5.6-5.3-5.4c-5.6,0.3-11.3,0.1-17.8,0.1c0-12.7,0-25-0.1-37.7
                c4.3-0.9,8.6-1.7,13-1.8c11.8-0.3,10.1,1.1,10.2-10.1c0.1-8-0.1-16,0.1-24c0.1-1.7,1-4.1,2.3-4.9c15.3-9.1,30.8-18,46.2-26.9
                C419.5,287.2,419.8,287.2,420.4,287.3z"/>
            <path class="st3" d="M153.8,408.2c17.9,10.8,38.1,15.8,58.2,21.2c14.3,3.8,28.8,7.4,42.4,12.8c16.4,6.5,21.9,21.9,13.9,36.8
                c-2.8,5.2-7.4,9.8-12.1,13.7c-3.4,2.9-8.2,4.1-12.8,6.2c-29.2-28.7-58.1-57.4-86.9-86.2C155.4,411.5,154.8,409.9,153.8,408.2z"/>
            <path class="st3" d="M212.4,501c-20,0-37-12.5-44.5-32.8c-1.5-4.2-2.5-8.6-3.8-13.3c1.5,0.5,3.3,1.1,4.6,2.3
                C183.3,471.6,197.7,486.2,212.4,501z"/>
            <path class="st4" d="M148.7,527.5c0.1,0.1,0.4,0.3,0.9,0.7C149.5,528.2,149.2,527.9,148.7,527.5z"/>
            <path class="st4" d="M149.8,528.5c0.1,0,0.5,0.2,0.9,0.6C150.5,529.2,150.3,528.9,149.8,528.5z"/>
        </g>
        </svg>


        <h1>Welcome to <i>$<u>SeeTheFuture</i></u></h1>
        <h2 id="h2center"> Ahead in Stocks, Ahead in Life – Predict with <i>$see</i>!</h2>
        
        
        <button> <a href="https://animated-space-invention-q66gxqqpvwg249jp-8001.app.github.dev/auto" id="topRightButton">Autommate Your Stocks </a></button>


        
    </div>
    
<div>
    
    </div>

    <!--form container -->
  <div>
  <!-- Design by foolishdeveloper.com -->
    
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -242px;
    top: 89px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -220px;
    bottom: 111px;
}
form{
    height: 200px;
    width: 750px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 85px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #333333;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}


input#search-bar{
  margin: 0 auto;
  width: 100%;
  height: 45px;
  padding: 0 20px;
  font-size: 1rem;
  border: 2px solid #f2f2f2;
  outline: none;
  &:focus{
    border: 2px solid #D0CFCE;
    transition: 0.35s ease;
    color: #D0CFCE;
    &::-webkit-input-placeholder{
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &::-moz-placeholder {
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &:-ms-placeholder {
     transition: opacity 0.45s ease; 
  	 opacity: 0;
     }    
   }
 }

.search-icon{
  position: relative;
  float: right;
  width: 30px;
  height: 30px;
  top: -39px;
  right: 10px;
  
}

menu {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap; /* Allow items to wrap in the container */
    gap: 10px; /* Add some space between the buttons */
    width: 100%;
    position: relative; /* Change to relative */
    top: -500%;
    transform: translateY(-50%);
}



menu button {
    transition: all 450ms cubic-bezier(.4,.25,.3,1.3);
    width: 60px;
    height: 60px;
    position: relative; /* Change to relative */
    margin: auto; /* Center within the li */
    display: flex;
    justify-content: center;
    align-items: center;
    color: #23a2f6;
    border: 3px solid #87CEFA;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    background : #F8F8FF;
}

menu button span {
	transition: all 400ms cubic-bezier(.4,.25,.3,1.3) 1ms;
	position: absolute;
	top: 50%;
	left: 50%;
	font-size: 30px;
	font-weight: 900;
	line-height: 55px;
	vertical-align: middle;
}

menu button span:first-of-type {
	font-size: 2.5rem;
	transform: translate(-50%,-50%);
}
		
menu button span:last-of-type {
	transform: translate(-50%,50%);
}

menu button:hover {
	width: 170px;
	border-radius: 10px;
}

.no {
  display: block
}

#searchResults div {
            border: 1px solid #ddd;
            padding: 5px;
            margin-top: 2px;
            cursor: pointer;
        }

        #searchResults div:hover {
            background-color: #f0f0f0;
        }
		
menu button:hover span:first-of-type {transform: translate(-50%,-150%)}
menu button:hover span:last-of-type {transform: translate(-50%,-50%)}

menu button span.offset-1 {margin-top: -1px}
menu button span.offset-3 {margin-top: -3px}
menu button span.offset-10 {margin-top: -10px}



    </style>
 


</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3></h3>
 
        <label for="u"></label>
        <body>
  <form class="search-container">
    <input type="text" id="search-bar" placeholder="Start Typing Company Name">
    <div id="searchResults"></div>
    <a href="#"><img class="search-icon" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/70-512.png">
        <menu>
            <li class="no">
                <button onclick="redirectToURL()">
                    <span>⭐</span>
                    <span>ALL</span>
                </button>
            </li>
            <li class="no">
                <button onclick="redirectToURL()">
                    <span>♻️</span>
                    <span>Green</span>
                </button>
            </li>
            <li class="no">
                <button onclick="redirectToURL()">
                    <span>👩🏽</span>
                    <span>Women</span>
                </button>
            </li>
            <li class="no">
                <button onclick="redirectToURL()">
                    <span>🗽</span>
                    <span>Minority</span>
                </button>
            </li>
            <li class="no">
                <button onclick="redirectToURL()">
                    <span>🏳️‍🌈</span>
                    <span>LGBTQIA+</span>
                </button>
            </li>
        
            <script>
                function redirectToURL() {
                    href = 'https://animated-space-invention-q66gxqqpvwg249jp-8000.app.github.dev/stock';
                }
            </script>
        </menu>


</form>
<!-- <script>
    document.addEventListener('DOMContentLoaded', (event) => {
    const stocks = ["AAPL", "GOOGL", "MSFT", "AMZN", "FB", "TSLA"];

    function predictiveSearch(query) {
        query = query.toLowerCase();
        return stocks.filter(stock => stock.toLowerCase().startsWith(query));
    }

    function handleResultClick(event) {
        const searchBar = document.getElementById('search-bar');
        searchBar.value = event.target.textContent;
        // Hide the search results after selection
        document.getElementById('searchResults').innerHTML = '';
    }

    document.getElementById('search-bar').addEventListener('input', function() {
        const query = this.value;
        const results = predictiveSearch(query);

        const resultsContainer = document.getElementById('searchResults');
        resultsContainer.innerHTML = ''; // Clear previous results

        results.forEach(stock => {
            const div = document.createElement('div');
            div.textContent = stock;
            div.addEventListener('click', handleResultClick);
            resultsContainer.appendChild(div);
        });
    });
});
</script> -->
  


    
  </form>
</body>
</body>
    </div>
   <!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->
</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends--><!-- resources/views/waves.blade.php -->