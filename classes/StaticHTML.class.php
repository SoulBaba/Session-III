<?php

class StaticHTML {

    //Variablen
    private $head;
    private $foot;

    //Getter
    public function head()  {
        return        
        '<!DOCTYPE html>
        <html lang="de">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title></title>
        </head>
        <body>
        ';
    }
    
    public function foot()  {
        return ('
        </body>
        </html>');

    }

}


?>
