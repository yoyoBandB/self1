<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <div class="container" style="width: 100%;">
            <!-- Add a placeholder for the Twitch embed -->
            <div id="twitch-embed"></div>

            <!-- Load the Twitch embed script -->
            <script src="https://embed.twitch.tv/embed/v1.js"></script>

            <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
            <script type="text/javascript">
                var embed = new Twitch.Embed('twitch-embed', {
                  width: 1000,
                height: 1000,
                muted: false,
                 channel: 'ggbb528'
               });

               embed.addEventListener(Twitch.Embed.VIDEO_READY, function() {
                 console.log('The video is ready');
               });
             </script>
        </div>
</body>
</html>