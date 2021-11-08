public function get_agen(){
$query = $this->db->get('product')->result();
return $query;
}