
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <style>
        /* Add your custom styles here */

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px; /* Fix for safari gap */
            min-height: 100px;
            max-height: 150px;
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
        body {
            margin: 0;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
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
        .section{
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
        }

        .masthead {
            position: relative;
            text-align: center;
            background: linear-gradient(137deg, #0066ff, #ff6b00 95%);
            height: 0px;
            padding: 56px 0px;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            --bs-gutter-x: 0;
            margin-right: calc(var(--bs-gutter-x) * -1);
            margin-left: calc(var(--bs-gutter-x) * -1);
        }

        .col-xl-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        .features-icons{
            background:( #0066ff );
        }
        .content {
            position: relative;
            height: 20vh;
            text-align: center;
            background-color: white;
        }
    </style>
</head>

<body>
    <header class="text-center text-white masthead">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5" style="font-size: 33px; margin: -40px; font-family: Lato, sans-serif;">Goldman Sachs Group Inc (GS)</h1>
                    <h1 style="margin-top: -41px; height: 54.6px; font-size: 27px; font-style: italic; font-family: Lato, sans-serif; color: rgba(255,255,255,0.9);">Industry : Banking</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons" style="font-family: Lato, sans-serif;">
       <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Scores</h2>
                    <p class="w-lg-50" style="font-size: 26px;">Today Score : 325.51 </p>
                    <p class="w-lg-50" style="font-size: 26px;">Prediction Score : 320.78 </p>
                    <p class="w-lg-50" style="font-size: 26px;">3 latest news corelated to $GS:</p>
                    <a href="https://www.insidermonkey.com/blog/goldman-sachs-bdc-inc-nysegsbd-q3-2023-earnings-call-transcript-1220173/"><p class="w-lg-50" style="font-size: 26px;">1) Goldman Sachs BDC, Inc. (NYSE:GSBD) Q3 2023 Earnings Call Transcript</p>
                    <a href="https://finance.yahoo.com/news/goldmans-consumer-retreat-isnt-over-151159789.html"><p class="w-lg-50" style="font-size: 26px;">2) Goldman’s consumer retreat isn’t over</p>
                    <a href="https://www.youtube.com/watch?v=2Ux0M8_R2-k&ab_channel=CNBCTelevision"><p class="w-lg-50" style="font-size: 26px;">3) Inflation is now at a place that would allow the Fed to cut rates, says Goldman Sachs' Jan Hatzius</p>
                    

                </div>
            </div>
            
            </div>
        </div>
    </section>
    <section class="showcase"></section>
    

<!-- Add this PNG to the bottom of the page -->
<img src="/views/img/GRAPH.png" alt="Graph Image" style="width: 100%; height: auto; max-width: 100%; max-height: 100vh;">

<script src="assets/bootstrap/css/bootstrap.min.css"></script>
    <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        (function($) {
            $.fn.counter = function(options) {
                // Counter logic
            };
        }(jQuery));

        // Add your remaining JavaScript code here
        $('#score-counter').counter({
            start: 0,
            end: 1483,
            duration: 4000
        });

        $(document).ready(function() {
            $('.score-graph').each(function() {
                $(this).find('.score-graph-bar').animate({
                    width: $(this).attr('data-percent')
                }, 4000);
            });
        });
    </script>
</body>

</html>/