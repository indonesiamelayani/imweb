<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polling extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        $this->load->library('common_variable');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['list_poll']  = $this->getListPolling();
        $data['content']    = 'polling';
        // var_dump($data['list_poll']->result_array());
        $this->load->view('templates/default', $data); ////asd
    }
    function tambah()
    {
        $table      = 'polling';
        $id_judul   = $this->MY_Model->count_data($table) + 1;
        $judul      = $this->input->post('judul');
        $nm_opsi    = $this->input->post('nm_opsi');
        $count      = count($nm_opsi);
        $now        = $this->common_variable->getTimeNow();

        //record judul
        $form_data  = array(
            'id'            => $id_judul,
            'judul_polling' => $judul,
            'created_date'  => $now,
            'is_judul'      => 1,
        );
        $this->MY_Model->tambah($form_data, $table);

        //record opsi
        for ($i = 0; $i < $count; $i++) {
            $id_opsi    = $this->MY_Model->count_data($table) + 1;
            $form_data  = array(
                'id'            => $id_opsi,
                'id_judul'      => $id_judul,
                'nm_opsi'       => $nm_opsi[$i],
                'created_date'  => $now,
            );
            $this->MY_Model->tambah($form_data, $table);
        }
        redirect('admin/polling');
    }
    function getListPolling()
    {
        $table  = 'polling';
        $orderby = 'id';
        $where  = array('is_judul' => 1);
        return $this->MY_Model->getListOrderby($table, $where, $orderby);
    }
    function getOpsi()
    {
        $jml = $this->input->post('jml_opsi');
        for ($i = 1; $i <=   $jml; $i++) { ?>
            <div class='col-md-6'>
                <div class='form-group' style="margin: 10px;">
                    <label class='control-label' for='example-email'>Opsi <?php echo $i ?> :</label>
                    <input type='text' name='nm_opsi[]' class='form-control' required>
                </div>
            </div>
<?php
        }
    }
}
