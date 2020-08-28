<?php
class Room{
  protected $id;
  protected $room_number;
  protected $floor;
  protected $beds;
  protected $created_at;
  protected $updated_at;


  public function __construct($id,$room_number,$floor,$beds,$created_at,$updated_at)
  {

      $this->setId($id);
      $this->setRoomNumber($room_number);
      $this->setFloor($floor);
      $this->setBeds($beds);
      $this->created_at = $created_at;
      $this->updated_at = $updated_at;

  }
  public function getStringInformation()
  {
    return[
      'id' => $this->id,
      'room_number' => $this->room_number,
      'floor' => $this->floor,
      'beds' => $this->beds,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at
    ];
  }

  protected function setRoomNumber($room_number){
    if (is_int($room_number)) {
      $this->room_number = $room_number;
    }
    else {
      throw new Exception("Error Processing Room Number");
    }
  }

  protected function setId($id){
    if (is_int($id)) {
      $this->id = $id;
    }
    else {
      throw new Exception("Error Processing ID");
    }
  }


  protected function setFloor($floor){
    if (is_int($floor)) {
      $this->floor = $floor;
    }
    else {
      throw new Exception("Error Processing Floor");
    }
  }

  protected function setBeds($beds){
    if (is_int($beds)) {
      $this->beds = $beds;
    }
    else {
      throw new Exception("Error Processing Beds");
    }
  }

}


 ?>
