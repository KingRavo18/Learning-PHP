<?php
    // include() = Copies the content of a file (php/html/text)
    //             and includes it in your php file.
    //             Sections of our website become reusable
    //             Chnages only need to be made in one place 

    include("19.header.html");

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        This is the home page<br>
        Stuff about your home page can go here
    </body>
    </html>
<?php
    include("19.footer.html");
?>