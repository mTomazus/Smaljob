<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/trongate.css">
        <!-- don't change anything above here -->
        <!-- add your own stylesheet below here -->
        <title>Document</title>
    </head>
    <body style="font-family: 'Marcellus', serif;">
        
        <main class="">
            <div class="page">
                <div>
                    <h4>Meistras į namus Klaipėdoje.</h4>
                    <h1>Nedideli darbai</h1>
                    <h2>Smulkius namų darbus atliekame kokybiškai ir greitai.</h2>
                    <h3>Skylių gręžimas, paveikslų ar lentynų kabinimas, buitinės technikos montavimas, baldų surinkimas!</h3>
                    <h4>Atvykimas ir 1 val. darbas 25 Eurai </h4>
                </div>
            </div>
            <div class="page bg-dark">
                <div class=container>
                    <?= Template::display($data) ?>
                </div>
            </div>

        </main>

    </body>
    <style>
        .page {
            height: 100vh;
            display:grid;
            align-content: center;
            text-align: center!important;
        }
        h1 {
            font-size:3rem;
        }
        h4 {
            text-transform: uppercase;
            margin: 0;
            color: #cd9d74;
        }
        .bg-dark {
            background-color:#cd9d74;
        }
    </style>
</html>