<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom until Full Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 200vh; /* Make sure the page is scrollable */
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .zoom-box {
            width: 300px;
            height: 300px;
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.1s ease-out; /* Smooth transition */
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5 pt-6">
        <div id="zoom" class="zoom-box">
            <h1>Zoom In Effect</h1>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function() {
        //   $(window).scroll(function() {
        //     var scroll = $(window).scrollTop();
        //     $("#zoom").css({
        //         width: (100 + scroll / 5) + "%"
        //     })
        // })
        // });
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                var scale = 1 + (scroll / 10); // Scale changes more gradually
                $("#zoom").css({
                    transform: "scale(" + scale + ")"
                });
            });
        });
    </script>
</body>
</html>
