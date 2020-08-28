<?php

  require_once(__DIR__ . '/Room.php');
  $rooms = [
    [
      'id' => 1,
      'room_number' => 100,
      'floor' => 1,
      'beds' => 2,
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2018-05-28 13:33:11'
    ],
    [
      'id' => 2,
      'room_number' => 101,
      'floor' => 1,
      'beds' => 3,
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2018-05-28 13:33:11'
    ],
    [
      'id' => 3,
      'room_number' => 102,
      'floor' => 1,
      'beds' => 1,
      'created_at' => '2018-05-28 13:33:11',
      'updated_at' => '2018-05-28 13:33:11'
    ]
  ];

  try{
    foreach ($rooms as $room) {
      $stanza = new Room($room['id'],$room['room_number'],$room['floor'],$room['beds'],$room['created_at'],$room['updated_at']);
      $room_information = $stanza->getStringInformation();
?>

      <div class="stanza">

        <ul>
          <li> Id: <?php echo $room_information['id'] ?> </li>
          <li> Numero stanza: <?php echo $room_information['room_number'] ?> </li>
          <li> Piano: <?php echo $room_information['floor'] ?> </li>
          <li> Numero letti: <?php echo $room_information['beds'] ?> </li>
          <li> Creata: <?php echo $room_information['created_at'] ?> </li>
          <li> Ultimo aggiornamento: <?php echo $room_information['updated_at'] ?> </li>

        </ul>

      </div>

<?php
    }
  } catch(Exception $e){
    echo '<div style ="color:red;"> Errore: ' . $e->getMessage() . '</div>';
  }
?>
