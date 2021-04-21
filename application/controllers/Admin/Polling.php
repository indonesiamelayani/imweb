<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polling extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('core/MY_Model');
        if ($_SESSION['username'] == null) redirect(base_url('login'));
    }
    public function index()
    {
        $data['content']    = 'polling';
        $this->load->view('templates/default', $data); ////asd
    }
    function getOpsi()
    {
        $jml = $this->input->post('jml_opsi');
        for ($i = 1; $i <=   $jml; $i++) { ?>
            <div class='col-md-6'>
                <div class='form-group' style="margin: 10px;">
                    <label class='control-label' for='example-email'>Opsi <?php echo $i ?> :</label>
                    <input type='text' name='pilihan[]' class='form-control' required>
                </div>
            </div>
<?php
        }
    }
}
