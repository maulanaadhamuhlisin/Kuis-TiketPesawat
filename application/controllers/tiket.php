<?php
class Tiket extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index() {
        $data['pesawat'] = $this->m_data->tampil_data()->result();
        $this->load->view('tampil_data', $data);
    }

    function tambah() {
        $this->load->view('input_data');
    }

    function tambah_aksi() {
        $this->form_validation->set_rules('nama','Nama','required|alpha|min_length[5]|max_length[25]');

        if($this->form_validation->run()==TRUE)
        {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jumlah = $this->input->post('jumlah');

        $harga = 0;
        $totalBayar = 0;
        $nama_pesawat = '';

        // Periksa kode yang diberikan dan atur harga serta nama_pesawat sesuai
        switch ($kode) {
            case 'GRD':
                $nama_pesawat = 'Garuda';
                switch ($kelas) {
                    case 'Eksekutif':
                        $harga = 1500000;
                        break;
                    case 'Bisnis':
                        $harga = 900000;
                        break;
                    case 'Ekonomi':
                        $harga = 500000;
                        break;
                    default:
                        // Tangani kelas yang tidak valid
                        break;
                }
                break;

            case 'MPT':
                $nama_pesawat = 'Merpati';
                switch ($kelas) {
                    case 'Eksekutif':
                        $harga = 1200000;
                        break;
                    case 'Bisnis':
                        $harga = 800000;
                        break;
                    case 'Ekonomi':
                        $harga = 400000;
                        break;
                    default:
                        // Tangani kelas yang tidak valid
                        break;
                }
                break;

            case 'BTV':
                $nama_pesawat = 'Batavia';
                switch ($kelas) {
                    case 'Eksekutif':
                        $harga = 1000000;
                        break;
                    case 'Bisnis':
                        $harga = 700000;
                        break;
                    case 'Ekonomi':
                        $harga = 300000;
                        break;
                    default:
                        // Tangani kelas yang tidak valid
                        break;
                }
                break;

            default:
                // Tangani kode yang tidak valid
                break;
        }

        // Hitung totalBayar berdasarkan jumlah dan harga
        $totalBayar = $jumlah * $harga;

        // Tambahkan data ke dalam database (nomor tiket akan di-generate otomatis)
        $data = array(
            'nama' => $nama,
            'nama_pesawat' => $nama_pesawat,
            'kelas' => $kelas,
            'harga_tiket' => $harga,
            'jumlah_tiket' => $jumlah,
            'total' => $totalBayar
        );

        $this->m_data->input_data($data, 'pesawat');

        // Redirect setelah menambah data
        redirect('tiket/index');
        }else{
            $this->load->view('input_data');
        }
    }

    function edit($no_tiket) {
        $where=array('no_tiket'=>$no_tiket);
        $data['pesawat']=$this->m_data->edit_data($where,'pesawat')->result();
        $this->load->view('edit_data',$data);
    }

    function update() {
        $no_tiket=$this->input->post('no_tiket');
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jumlah = $this->input->post('jumlah');

        $harga = 0;
        $totalBayar = 0;
        $nama_pesawat = '';

            // Periksa kode yang diberikan dan atur harga serta nama_pesawat sesuai
            switch ($kode) {
                case 'GRD':
                    $nama_pesawat = 'Garuda';
                    switch ($kelas) {
                        case 'Eksekutif':
                            $harga = 1500000;
                            break;
                        case 'Bisnis':
                            $harga = 900000;
                            break;
                        case 'Ekonomi':
                            $harga = 500000;
                            break;
                        default:
                            // Tangani kelas yang tidak valid
                            break;
                    }
                    break;

                case 'MPT':
                    $nama_pesawat = 'Merpati';
                    switch ($kelas) {
                        case 'Eksekutif':
                            $harga = 1200000;
                            break;
                        case 'Bisnis':
                            $harga = 800000;
                            break;
                        case 'Ekonomi':
                            $harga = 400000;
                            break;
                        default:
                            // Tangani kelas yang tidak valid
                            break;
                    }
                    break;
        
                case 'BTV':
                    $nama_pesawat = 'Batavia';
                    switch ($kelas) {
                        case 'Eksekutif':
                            $harga = 1000000;
                            break;
                        case 'Bisnis':
                            $harga = 700000;
                            break;
                        case 'Ekonomi':
                            $harga = 300000;
                            break;
                        default:
                            // Tangani kelas yang tidak valid
                            break;
                    }
                    break;
                default:
                    // Tangani kode yang tidak valid
                    break;
            }
        
            // Hitung totalBayar berdasarkan jumlah dan harga
            $totalBayar = $jumlah * $harga;
        
            // Tambahkan data ke dalam database (nomor tiket akan di-generate otomatis)
            $data = array(
                'nama' => $nama,
                'nama_pesawat' => $nama_pesawat,
                'kelas' => $kelas,
                'harga_tiket' => $harga,
                'jumlah_tiket' => $jumlah,
                'total' => $totalBayar
            );

            $where=array(
                'no_tiket'=>$no_tiket
            );
            $this->m_data->update_data($where,$data,'pesawat');
            redirect('tiket');
    }

    function hapus($no_tiket) {
        $where=array('no_tiket'=>$no_tiket);
        $this->m_data->hapus_data($where,'pesawat');
        redirect('tiket');
    }
}
