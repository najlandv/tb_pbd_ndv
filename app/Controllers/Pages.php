<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\PelangganModel;
use App\Models\PenjualModel;
use App\Models\PemesananModel;
use App\Models\PembayaranModel;
use App\Models\PengirimanModel;
use App\Models\KategoriModel;


class Pages extends BaseController
{
    protected $BarangModel;
    protected $PelangganModel;
    protected $PenjualModel;
    protected $PemesananModel;
    protected $PembayaranModel;
    protected $PengirimanModel;
    protected $KategoriModel;

    public function __construct()
    {

        $this->BarangModel = new BarangModel();
        $this->PelangganModel = new PelangganModel();
        $this->PenjualModel = new PenjualModel();
        $this->PemesananModel = new PemesananModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->PengirimanModel = new PengirimanModel();
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'barang' => $this->BarangModel->getBarang(),
            'kategori' => $this->KategoriModel->getKategori(),
            'pengiriman' => $this->PengirimanModel->getPengiriman(),
            'pembayaran' => $this->PembayaranModel->getPembayaran(),
            'pelanggan' => $this->PelangganModel->getPelanggan(),
            'pemesanan' => $this->PemesananModel->getPemesanan()

        ];
        // dd($data);
    
        // Cek apakah pengguna login dan merupakan admin
        if (logged_in() && in_groups('admin')) {
            return view('pages/dashboard', $data);
        } else {
            return view('pages/home', $data);
        }
    }

    public function homeKategori($id) {
        $data = [
            'barang' => $this->BarangModel->getBarang()->where('idKategori', $id)
            
        ];
        dd($data);
        // return view('pages/homeKategori', $data);
    }





    public function detail($id) {
        $pelanggan = $this->PelangganModel->findAll();
        $pembayaran = $this->PembayaranModel->findAll();
        $pengiriman = $this->PengirimanModel->findAll();
        $data = [
            'barang' => $this->BarangModel->getBarang($id),
            'pelanggan' => $pelanggan,
            'pembayaran' => $pembayaran,
            'pengiriman' => $pengiriman
        ];

        // dd($data);
        return view('pages/detail', $data);
    }

    public function pelanggan()
    {
        $pelanggan = $this->PelangganModel->findAll();
        $data = [
            'pelanggan' => $pelanggan
        ];

        return view('pages/pelanggan', $data);
    }
    public function listBarang()
    {
        $barang = $this->BarangModel->findAll();
        $data = [
            'barang' => $barang
        ];

        return view('pages/listBarang', $data);
    }
    public function listKategori()
    {
        $kategori = $this->KategoriModel->findAll();
        $data = [
            'kategori' => $kategori
        ];

        return view('pages/listKategori', $data);
    }

    public function editKategori($id)
    {
        $data = [
            'kategori' => $this->KategoriModel->getKategori($id)
        ];
    
        return view('pages/editKategori', $data);
    }

    public function updateKategori($idKategori)
    {
        $data = [
            'idKategori' => $this->request->getVar('idKategori'),
            'namaKategori' => $this->request->getVar('namaKategori')
        ];
    
        // Periksa apakah ID Kategori diubah
        if ($idKategori !== $data['idKategori']) {
            // Hapus entri lama
            $this->KategoriModel->delete($idKategori);
            // Tambahkan entri baru dengan ID yang diperbarui
            $this->KategoriModel->insert($data);
        } else {
            // Update entri yang ada
            $this->KategoriModel->update($idKategori, $data);
        }
    
        return redirect()->to('/pages/listKategori');
    }



public function hapusKategori($id)
{
    $this->KategoriModel->delete($id);

    return redirect()->to('/pages/listKategori');
}



public function editBarang($id)
{
    $data = [

        'barang' => $this->BarangModel->getBarang($id),
        'kategori' => $this->KategoriModel->findAll() // Untuk dropdown kategori
    ];

    return view('pages/editBarang', $data);
}

public function updateBarang($id)
{
    $data = [
        
        'namaBarang' => $this->request->getVar('namaBarang'),
        'idKategori' => $this->request->getVar('idKategori'),
        'hargaBarang' => $this->request->getVar('hargaBarang')
    ];
// dd($data);
    $this->BarangModel->update($id, $data);

    return redirect()->to('/pages/listBarang');
}

public function hapusBarang($idBarang)
{
    $this->BarangModel->delete($idBarang);

    return redirect()->to('/pages/listBarang');
}



    public function penjual()
    {
        return view('pages/penjual');
    }

    public function pembayaran()
    {
        $data = [
            'pembayaran' => $this->PembayaranModel->findAll()
        ];
        return view('pages/pembayaran', $data);
    }

    public function pengiriman()
    {
        $data = [
            'pengiriman' => $this->PengirimanModel->findAll()
        ];
        return view('pages/pengiriman', $data);
    }


    // public function barang()
    // {
    //     session();
    //     $data = [
    //         'validation' => \Config\Services::validation(),
    //         'barang' => $this->BarangModel->findAll()
    //     ];
    //     return view('pages/barang', $data);
    // }

    public function barang()
    {
        session();

        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->findAll();
    
        // Ambil data kategori
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
    
        return view('pages/barang', $data);
    }
    

    public function kategori()
    {
        session();
        $data = [
            'validation'=>\Config\Services::validation(),
            'kategori'=> $this-> KategoriModel->findAll()
        ];
        return view('pages/kategori',$data);
    }

    public function aboutUs()
    {
        $penjual = $this->PenjualModel->findAll();
        $data = [
            'penjual' => $penjual
        ];
        return view('pages/aboutUs', $data);
    }


    public function notaPesanan($Id)
    {
        $penjual = $this->PenjualModel->findAll();
        $pemesanan = $this->PemesananModel->findAll();
        $pelanggan = $this->PelangganModel->findAll();
        $data = [
            'barang' => $this->BarangModel->getBarang($Id),
            'penjual' => $penjual,
            'pemesanan' => $pemesanan,
            'pelanggan' => $pelanggan
        ];
        return view('pages/notaPesanan', $data);
    }

    public function editPembayaran($id)
    {

        $data = [
            'pembayaran' => $this->PembayaranModel->getPembayaran($id)
        ];
        return view('pages/editPembayaran', $data);
    }

    public function editPengiriman($id)
    {

        $data = [
            'pengiriman' => $this->PengirimanModel->getPengiriman($id)
        ];
        return view('pages/editPengiriman', $data);
    }




    public function success()
    {
        return view('pages/success');
    }


    public function saveBarang()
    {

        helper(['form']);
        $rules = [
            'idBarang' => [
                'rules' => 'is_unique[barang.idBarang]',
                'errors' => [
                    'is_unique' => 'ID barang sudah terdaftar!!'
                ]
            ]
        ];


        if ($this->validate($rules)) {
            $fileBarang = $this->request->getFile('gambar');
            $fileBarang->move('img');
            $namaBarang = $fileBarang->getName();
            $BarangModel = new BarangModel();
            $data = [
                'idBarang' => $this->request->getVar('idBarang'),
                'idKategori' => $this->request->getVar('kategori'), 
                'namaBarang' => $this->request->getVar('namaBarang'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'caraPemakaian' => $this->request->getVar('caraPemakaian'),
                'komposisiBarang' => $this->request->getVar('komposisiBarang'),
                'klaimBarang' => $this->request->getVar('klaimBarang'),
                'tanyaJawab' => $this->request->getVar('tanyaJawab'),
                'noBpom' => $this->request->getVar('noBpom'),
                'hargaBarang' => $this->request->getVar('hargaBarang'),
                'gambar' => $namaBarang
            ];
            $BarangModel->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('pages/barang', $data);
        }
    }

    
    public function saveKategori(){

        helper(['form']);
        $rules = [
            'idKategori' => [
                'rules'=>'is_unique[kategori.idKategori]',
                'errors'=>[
                    'is_unique'=> 'ID kategori sudah terdaftar!!'
                ]
            ]
        ];
          
        if($this->validate($rules)){
            $KategoriModel = new KategoriModel();
            $data = [
                'idKategori' => $this->request->getVar('idKategori'),
                'namaKategori'=>$this->request->getVar('namaKategori'),
            ];
            $KategoriModel->save($data);
            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            echo view('pages/kategori', $data); // Ganti pages/kategori dengan view yang sesuai
        }      
        
    }

    public function savePelanggan()
    {

        $id = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $alamatPelanggan = $this->request->getPost('alamatPelanggan');

        $model = new PelangganModel();
        $model->update($id, [
            'email' => $email,
            'alamatPelanggan' => $alamatPelanggan
        ]);
        return redirect()->to('/pages/pelanggan');
    }

    public function savePenjual()
    {

        $this->PenjualModel->save([
            'namaPenjual' => $this->request->getVar('namaPenjual'),
            'alamatPenjual' => $this->request->getVar('alamatPenjual'),
            'emailPenjual' => $this->request->getVar('emailPenjual'),
            'socialMedia' => $this->request->getVar('socialMedia')
        ]);
        return redirect()->to('/pages/penjual');
    }


    public function savePesanan()
    {



        $this->PemesananModel->save([
            'jumlahBarang' => $this->request->getVar('jumlahBarang'),
            'metodePembayaran' => $this->request->getVar('metodePembayaran'),
            'metodePengiriman' => $this->request->getVar('metodePengiriman')
        ]);

        return redirect()->to('/pages/success');
    }


    public function savePembayaran()
    {

        $this->PembayaranModel->save([
            'metodePembayaran' => $this->request->getVar('metodePembayaran')
        ]);
        return redirect()->to('/pages/pembayaran');
    }
    public function saveEditPembayaran($id)
    {

        $this->PembayaranModel->save([
            'id' => $id,
            'metodePembayaran' => $this->request->getVar('metodePembayaran')
        ]);
        return redirect()->to('/pages/pembayaran');
    }

    public function saveEditPengiriman($id)
    {

        $this->PengirimanModel->save([
            'id' => $id,
            'metodePengiriman' => $this->request->getVar('metodePengiriman')
        ]);
        return redirect()->to('/pages/pengiriman');
    }

    public function savePengiriman()
    {

        $this->PengirimanModel->save([
            'metodePengiriman' => $this->request->getVar('metodePengiriman')
        ]);
        return redirect()->to('/pages/pengiriman');
    }



    public function delete($id)
    {

        $this->PembayaranModel->delete($id);

        return redirect()->to('/pages/pembayaran');
    }

    public function deletePengiriman($id)
    {

        $this->PengirimanModel->delete($id);

        return redirect()->to('/pages/pengiriman');
    }
}
