<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    // nama tabel
    private $_table = "tb_anggota";

    // nama kolom ditabel, harus sesuai hurufnya
    public $id_anggota;
    public $nik;
    public $nama;
    public $jml_anggotakeluarga;
    public $ttl;
    public $jenis_kelamin;
    public $pekerjaan;
    public $no_hp;
    public $alamat;

    public function rules()
    {
        // mengembalikan nilai array berisi rules untuk validasi
        return [
            ['field' => 'nik',
            'label' => 'Nik',
            'rules' => 'required'],
            
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'jml_anggotakeluarga',
            'label' => 'Jml_anggotakeluarga',
            'rules' => 'required'],
            
            ['field' => 'ttl',
            'label' => 'Ttl',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'Jenis_kelamin',
            'rules' => 'required'],
            
            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],
            
            ['field' => 'no_hp',
            'label' => 'No_hp',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // _table adalah nama tabel
		// untuk mengembalikan array yang berisi objek dari row
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        // mengembalikan sebuah objek
		// mengambil semua dari tb_data-rt yang dimana id_nama = id
        return $this->db->get_where($this->_table, ["id_anggota" => $id])->row();
    }

    public function save()
    {
        // mengambil data dari form
        $post = $this->input->post();
        $this->id_anggota = uniqid();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jml_anggotakeluarga = $post["jml_anggotakeluarga"];
        $this->ttl = $post["ttl"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->no_hp = $post["no_hp"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        // mengambil data dari form
        $post = $this->input->post();
        $this->id_anggota = $post["id"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jml_anggotakeluarga = $post["jml_anggotakeluarga"];
        $this->ttl = $post["ttl"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->no_hp = $post["no_hp"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('id_anggota' => $post['id']));
    }

    public function delete($id)
    {
        // menjalankan dengan memanggil db dan tabel kemudian mencari id yang sesuai
        return $this->db->delete($this->_table, array("id_anggota" => $id));
    }
}
