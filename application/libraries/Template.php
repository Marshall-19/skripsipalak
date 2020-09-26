<?php
class Template
{
    protected $_ci;

    public function __construct()
    {
        $this->_ci = &get_instance();
    }

    public function utama($content, $data = NULL)
    {

        $data['header'] = $this->_ci->load->view('template/header', $data, TRUE);
        $data['sidebar'] = $this->_ci->load->view('template/sidebar', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);

        $this->_ci->load->view('index', $data);
    }

    public function cek_login()
    {
        if ($this->_ci->session->userdata('nik') == '') {
            $this->_ci->session->set_flashdata('local', 'Jangan Coba Coba Akses Halaman Sebelum Login Karena IP Anda Telah Diamankan' . $_SERVER["REMOTE_ADDR"] . 'Perhatikan Baik Baik..!!');
            redirect('Admin');
        }
    }
}
