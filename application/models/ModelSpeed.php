<?php
class modelSpeed extends CI_Model
{
  public function getData()
  {
    $query = $this->db->get('speed');
    $result = $query->result();
    return $result[0];
  }
}
?>
