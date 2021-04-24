<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polling extends CI_Controller
{
    public $table = 'polling';

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
        // $count_opsi = $this->MY_Model->count('id_result', 'result_polling', array('id' => 2))->i;
        // echo ($count_opsi);
        // die();
        // $data['list_opsi']  = $this->getListOpsi(array('id_judul' => 1));
        $data['content']    = 'polling';
        // var_dump($data['list_opsi']->result_array());
        $this->load->view('templates/default', $data); ////asd
    }
    function tambah()
    {
        $id_judul   = $this->MY_Model->count_data($this->table) + 1;
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
        $this->MY_Model->tambah($form_data, $this->table);

        //record opsi
        for ($i = 0; $i < $count; $i++) {
            $id_opsi    = $this->MY_Model->count_data($this->table) + 1;
            $form_data  = array(
                'id'            => $id_opsi,
                'id_judul'      => $id_judul,
                'nm_opsi'       => $nm_opsi[$i],
                'created_date'  => $now,
            );
            $this->MY_Model->tambah($form_data, $this->table);
        }
        redirect('admin/polling');
    }
    function hapus()
    {
        $id_judul   = $this->input->post('id_judul');
        $where      = array('id' => $id_judul);
        $form_data  = array('expired_date' => $this->common_variable->getTimeNow());
        $this->MY_Model->update($form_data, $where, $this->table);
        redirect('admin/polling');
    }
    function edit()
    {
        $id_judul   = $this->input->post('id_judul');
        $id_opsi    = $this->input->post('id_opsi');
        $judul      = $this->input->post('judul');
        $nm_opsi    = $this->input->post('nm_opsi');
        $count      = count($nm_opsi);
        $now        = $this->common_variable->getTimeNow();
        $where      = array('id' => $id_judul);

        //update judul
        $form_data  = array(
            'judul_polling' => $judul,
            'last_update'  => $now,
        );
        $this->MY_Model->update($form_data, $where, $this->table);

        //record opsi
        for ($i = 0; $i < $count; $i++) {
            $where      = array('id' => $id_opsi[$i]);
            $form_data  = array(
                'nm_opsi'       => $nm_opsi[$i],
                'last_update'   => $now,
            );
            $this->MY_Model->update($form_data, $where, $this->table);
        }
        redirect('admin/polling');
    }
    function getListPolling()
    {
        $orderby = 'id';
        $where  = array('is_judul' => 1, 'expired_date' => null);
        return $this->MY_Model->getListOrderby($this->table, $where, $orderby);
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
    function getListOpsi($where)
    {
        return $this->MY_Model->getListOrderby($this->table, $where, 'id');
    }
}
