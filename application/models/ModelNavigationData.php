<?php
class modelNavigationData extends CI_Model
{
  public function getData()
  {
    $query = $this->db->get('navigation_data');
    return $query->result();
  }
}
?>
