<?php
class modelMusic extends CI_Model
{
  public function getData()
  {
    $query = $this->db->get('music');
    return $query->result();
  }
}
?>
