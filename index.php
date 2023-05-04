<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
        <link rel="stylesheet" href="./css/style.css">
    <title>esercizio</title>
</head>



<body>  
    
    
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <form action="">
            <select name="" id="">
                <option value="qualsiasi">Qualsiasi</option>
                <option value="parcheggio">Con il parcheggio</option>
                <option value="no-parcheggio">Senza parcheggio</option>
            </select>
        </form>
        
        <ul class="d-flex justify-content-center align-items-center">    
            <?php foreach ($hotels as $hotel) { ?>
                <li >
                    <ul class="d-flex flex-column justify-content-center align-items-center card text-center">
                        <li><span class="fw-bold">Nome:</span> <?php echo $hotel['name'] ?></li>
                        <li><span class="fw-bold">Descrizione:</span> <?php echo $hotel['description'] ?></li>
                        <li><span class="fw-bold">Voto:</span> <?php echo $hotel['vote'] ?></li>
                        <li><span class="fw-bold">Distanza dal centro:</span> <?php echo $hotel['distance_to_center'] ?></li>
                    </ul>                   
                </li>
            <?php } ?>
       </ul>
    </div>
       
</body>

</html>