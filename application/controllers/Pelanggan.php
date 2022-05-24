<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_not_login();
        // check_admin();
        $this->load->model('pelanggan_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->pelanggan_m->get();
        $this->template->load('template', 'pelanggan/pelanggan_data', $data);
    }

    public function add()
    {
        $pelanggan = new stdClass();
        $pelanggan->id_pelanggan = null;
        $pelanggan->nama = null;
        $pelanggan->tlp = null;
        $pelanggan->jenis_kelamin = null;
        $pelanggan->alamat = null;
        $data = array(
            'page' => 'add',
            'row' => $pelanggan
        );
        $this->template->load('template', 'pelanggan/pelanggan_form', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->pelanggan_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->pelanggan_m->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>
            alert('Data berhasil disimpan');
            </script>";
        }
        echo "<script>
        window.location='" . site_url('pelanggan') . "';
        </script>";
    }

    public function edit($id)
    {
        $query = $this->pelanggan_m->get($id);
        if ($query->num_rows() > 0) {
            $pelanggan =  $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $pelanggan
            );
            $this->template->load('template', 'pelanggan/pelanggan_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('pelanggan') . "';</script>";
        }
    }

    public function del($id)
    {
        $this->pelanggan_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>
            alert('Data berhasil dihapus');
            </script>";
        }
        echo "<script>
        window.location='" . site_url('pelanggan') . "';
        </script>";
    }
}
