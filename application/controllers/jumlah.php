public function index(){
$this->data['cats'] = $this->dish_model->get_agen();
$this->load->view('jumlah',$this->data);
}