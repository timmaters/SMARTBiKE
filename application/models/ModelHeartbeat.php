<?php
class modelHeartbeat extends CI_Model
{
  public function getData()
  {
    $query = $this->db->get('heartbeat');
    $result = $query->result();
    return $result[0];
  }
}
?>
