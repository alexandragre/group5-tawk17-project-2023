<?php

class Template
{
    public static function header($title)
    {
        $home_path = getHomePath();
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&family=Public+Sans:wght@500;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="front-end/assets/css/style.css">
            <title>Sipper drink recipes website</title>
        </head>


            <nav class="navigation">
                <ul>
                <li class="icon-"><a href="index.html" class="sipper-logo">Sipper</a></li>
                <li class="icon-con1"><a href="#"><i class="fa fa-fw fa-user" style="font-size:22px"></i></a></li>
                <li class="icon-con2"><a href="#"><i class="fa fa-bell" style="font-size:22px"></i></a></li>
                </ul>
            </nav>

            <main>

    
       
    <?php }



    public static function footer()
    {
        ?>
        </main>
            <footer>
                Copyright 2025
            </footer>
        </body>

        </html>
<?php }
}