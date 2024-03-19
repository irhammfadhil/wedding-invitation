<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Andasia';
            src: url({{asset('Andasia.ttf')}}) format('truetype');
            /* Add other font properties here if needed */
        }
        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #blank-screen {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000; /* Adjust the color as needed */
            display: none;
        }
       .welcome {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .welcome h2 {
            text-align: center;
            font-size: 40px;
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }
        .welcome-text {
            font-family: 'Andasia', sans-serif;
        }

    </style>
    <script>

        $(document).ready(function() {
            // This code will execute when the DOM is fully loaded
            // Place your code here
            $(".welcome-text").hide();
            
            function fetchData() {
                $('#text').text("");
                $(".welcome-text").hide();
                setTimeout(function() {
                    $.ajax({
                        url: '{{ route('display-attendance-ajax') }}', // URL of your Laravel route
                        method: 'GET',
                        success: function(response) {
                            console.log(response);
                            if(response.count > 0) {
                                $(".welcome-text").show();
                                // Call the updateView function with the new data
                                $('#text').text(response.data);
                                var video = document.getElementById("background-video");
                                var blankScreen = document.getElementById("blank-screen");
                                video.pause();
                                blankScreen.style.display = "block"; // Show the blank screen
                                setTimeout(function() {
                                    console.log('played');
                                    video.play();
                                    blankScreen.style.display = "none"; // Show the blank screen
                                }, 4000); // Pause for 1 second
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching data:', error);
                        }
                    });
                }, 2000); // 2 seconds timeout
            }
            
            // Call fetchData function or any other function you want to execute after DOM ready
            fetchData();
            
            setInterval(fetchData, 10000); // Refresh every 5 seconds (adjust as needed)
        });
        
    </script>
</head>
<body>
    <video id="background-video" autoplay loop>
      <source src="{{asset('video.mp4')}}" type="video/mp4">
    </video>
    <div id="blank-screen">
        
    </div>
    <div class="welcome">
        <h2 class="welcome-text">Selamat Datang</h2>
        <h2 id="text"></h2>
    </div>
</body>
</html>
