<!DOCTYPE html>
<html>
<body>
   <title> Latihan- 2 PHP dan Array</title>
<body>
    <h1>Klasemen Sementara (HTML + PHP Array)</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>

<?php
    $racer_list = array(
    array(1,"Agus",6000,"Repsol Honda"),
    array(2,"Budi",5150,"Monster Yamaha"),
    array(3,"Charli",6000,"Redbull KTM"),
    array(4,"Dedi",5150,"Petronas"),
    array(5,"Edi",6000,"LCR"),
    array(6,"Farah",5150,"RNF Moto"),
    array(7,"Ganda",6000,"Ducati"),
    array(8,"Hari",5150,"Reale Avintia"),
    array(9,"Iyun",6000,"Suzuki"),
    array(10,"Joko",5150,"Pons Racing")
    );
    foreach ($racer_list as $racer) {
     echo ("<tr><td>" . $racer[0] ."</td><td>". $racer[1] ."</td><td>". $racer[2] ."</td><td>" . $racer[3] . "</td></tr>");
           }
       
?>

</body>
</html>