<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;
use App\Models\M_lelang;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); 
    }

    //dashboard(udh)
    public function dashboard()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            echo view('header');
            echo view('menu', $data);
            echo view('dashboard');
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }


    //masyarakat(udh)

    public function masyarakat()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model ->join('masyarakat', 'level','masyarakat.id_level=level.id_level','id_user');
            echo view('header');
            echo view('menu',$data);
            echo view('masyarakat',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function hapus_masyarakat($id){
        $model = new M_lelang();
        $where=array('id_user'=>$id);
        $model->hapus('masyarakat',$where);
        return redirect()->to('home/masyarakat');
    }

    public function tambah_masyarakat()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            echo view ('header');
            echo view ('menu',$data);
            echo view('tambah_masyarakat');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_t_masyarakat()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('nama_lengkap');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('telp');
        $e = $this->request->getPost('level');
        
        $isi = array(
            'nama_lengkap' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $d,
            'id_level' => $e

        );
        $model ->tambah('masyarakat', $isi);
        
        return redirect()->to('home/masyarakat');
    }

    public function edit_masyarakat($id){
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_user'=>$id);

            $data['satu']=$model->getWhere('masyarakat',$where);

            echo view ('header');
            echo view ('menu',$data);
            echo view ('edit_masyarakat',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_edit_masyarakat()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('nama_lengkap');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('telp');
        $e = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_user'=>$id);

        $isi = array(
            'nama_lengkap' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $d,
            'id_level' => $e
            

        );
        $model ->edit('masyarakat', $isi, $where);
        
        return redirect()->to('home/masyarakat');
    }










    // petugas(udh)

    public function petugas()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model ->join('petugas', 'level','petugas.id_level=level.id_level','id_petugas');

            echo view('header');
            echo view('menu',$data);
            echo view('petugas',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function hapus_petugas($id){
        $model = new M_lelang();
        $where=array('id_petugas'=>$id);
        $model->hapus('petugas',$where);
        return redirect()->to('home/petugas');
    }

    public function tambah_petugas()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_petugas'=>session()->get('id'));
            $data['user']=$model->getWhere('petugas',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view('tambah_petugas');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_t_petugas()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('nama_petugas');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('level');
        
        $isi = array(
            'nama_petugas' => $a,
            'username' => $b,
            'password' => $c,
            'id_level' => $d,

        );
        $model ->tambah('petugas', $isi);
        
        return redirect()->to('home/petugas');
    }

    public function edit_petugas($id){
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_petugas'=>$id);

            $data['satu']=$model->getWhere('petugas',$where);

            echo view ('header');
            echo view ('menu',$data);
            echo view ('edit_petugas',$data);
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_edit_petugas()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('nama_petugas');
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where=array('id_petugas'=>$id);

        $isi = array(
            'nama_petugas' => $a,
            'username' => $b,
            'password' => $c,
            'telp' => $f
            

        );
        $model ->edit('petugas', $isi, $where);
        
        return redirect()->to('home/petugas');
    }

    //user for masyarakat dan petugas
    public function userall()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $where = [
                'id_user' => 'id_user'
            ];
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model ->joinnelson('data','masyarakat','petugas', 'level','data.id_user=masyarakat.id_user','data.id_petugas=petugas.id_petugas','data.id_level=level.id_level','id_data');

            echo view('header');
            echo view('menu',$data);
            echo view('userall',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }

    public function tambah_data()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $where=array('id_petugas'=>session()->get('id'));
            $data['user']=$model->getWhere('data',$where);
            echo view ('header');
            echo view ('menu', $data);
            echo view('tambah_user');
            echo view ('footer');
        }else{
            return redirect()->to('home/login');
        }
        
    }

    public function aksi_t_data()
    {
        $model = new M_lelang();
        $a = $this->request->getPost('id_user');
        $b = $this->request->getPost('level');
        
        $isi = array(
            'id_user' => $a,
            'id_level' => $b

        );
        $model ->tambah('data', $isi);
        
        return redirect()->to('home/userall');
    }


    //level(udh)

    public function level()
    {
        if (session()->get('level')>0){
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');
            $data ['manda'] = $model -> tampil('level', 'id_level');
            echo view('header');
            echo view('menu',$data);
            echo view('level',$data);
            echo view('footer');
        }else{
            return redirect()->to('home/login');
        }
    }




    //bagian session(udh)
    public function login()
    {
        echo view('header');
        echo view('login');
    }

    public function aksi_login()
    {
        $u=$this->request->getPost('username');
        $p=$this->request->getPost('password');

        $model = new M_lelang();
        $where=array(
            'username'=> $u,
            'password'=> $p
        );

        $model = new M_lelang();
        $cek = $model->getWhere('petugas',$where);
        $cek2 = $model->getWhere('masyarakat',$where);
        
        if ($cek>0){
           session()->set('id',$cek->id_petugas);
           session()->set('username',$cek->username);
           session()->set('level',$cek->id_level);
           return redirect()->to('home/dashboard');
       }elseif($cek2>0){
        session()->set('id',$cek2->id_user);
        session()->set('username',$cek2->username);
        session()->set('level',$cek2->id_level);
        return redirect()->to('home/dashboard');
    }else{
        return redirect()->to('home/login');
    }
}



    //reset pw

public function fpw()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model -> tampil('petugas', 'id_petugas');
        $where=array('id_petugas'=>session()->get('id')); 
        echo view('header');
        echo view('menu', $data);
        echo view('fpw', $data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }
}

public function aksi_reset($id)
{
    $model = new M_lelang();

    $where= array('id_petugas'=>$id);

    $isi = array(

        'password' => md5('1')      

    );
    $model->edit('petugas', $isi,$where);

    return redirect()->to('home/fpw');



}


    //logout(udh)
public function logout()
{
    session()->destroy();
    return redirect()->to('home/login');
}















    //lelang(udh)

public function lelang()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model->joinnelson(
            'lelang', 'barang', 'petugas', 'masyarakat', 'lelang.id_barang=barang.id_barang',
            'lelang.id_petugas=petugas.id_petugas', 'lelang.id_user=masyarakat.id_user', 'lelang.id_lelang'
        );
        echo view('header');
        echo view('menu',$data);
        echo view('lelang', $data);
        echo view('footer');
    }else{
        return redirect()->to('home/login');
    }
}

public function tambah_lelang()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        echo view ('header');
        echo view ('menu',$data);
        echo view('tambah_lelang');
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_t_lelang()
{
    $model = new M_lelang();
    $a = $this->request->getPost('id_barang');
    $b = $this->request->getPost('tgl_lelang');
    $c = $this->request->getPost('harga_akhir');
    $d = $this->request->getPost('id_user');
    $e = $this->request->getPost('id_petugas');
    $f = $this->request->getPost('status');

    $isi = array(
        'id_barang' => $a,
        'tgl_lelang' => $b,
        'harga_akhir' => $c,
        'id_user' => $d,
        'id_petugas' => $e,
        'status' => $f


    );
    $model ->tambah('lelang', $isi);

    return redirect()->to('home/lelang');
}

public function hapus_lelang($id){
    $model = new M_lelang();
    $where=array('id_lelang'=>$id);
    $model->hapus('lelang',$where);
    return redirect()->to('home/lelang');
}

public function edit_lelang($id){
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $where=array('id_lelang'=>$id);

        $data['satu']=$model->getWhere('lelang',$where);

        echo view ('header');
        echo view ('menu',$data);
        echo view ('edit_lelang',$data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_edit_lelang()
{
    $model = new M_lelang();
    $a = $this->request->getPost('id_barang');
    $b = $this->request->getPost('tgl_lelang');
    $c = $this->request->getPost('harga_akhir');
    $d = $this->request->getPost('id_user');
    $e = $this->request->getPost('id_petugas');
    $f = $this->request->getPost('status');
    $id = $this->request->getPost('id');

    $where=array('id_lelang'=>$id);

    $isi = array(
        'id_barang' => $a,
        'tgl_lelang' => $b,
        'harga_akhir' => $c,
        'id_user' => $d,
        'id_petugas' => $e,
        'status' => $f


    );
    $model ->edit('lelang', $isi, $where);

    return redirect()->to('home/lelang');
}









    //barang (udh)

public function barang()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model -> tampil('barang', 'id_barang');
        echo view('header');
        echo view('menu', $data);
        echo view('barang', $data);
        echo view('footer');
    }else{
        return redirect()->to('home/login');
    }
}

public function tambah_barang()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        echo view ('header');
        echo view ('menu',$data);
        echo view('tambah_barang');
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_t_barang()
{
    $model = new M_lelang();
    $a = $this->request->getPost('nama_barang');
    $b = $this->request->getPost('tgl');
    $c = $this->request->getPost('harga_awal');
    $d = $this->request->getPost('deskripsi_barang');

    $isi = array(
        'nama_barang' => $a,
        'tgl' => $b,
        'harga_awal' => $c,
        'deskripsi_barang' => $d


    );
    $model ->tambah('barang', $isi);

    return redirect()->to('home/barang');
}

public function hapus_barang($id){
    $model = new M_lelang();
    $where=array('id_barang'=>$id);
    $model->hapus('barang',$where);
    return redirect()->to('home/barang');
}

public function edit_barang($id){
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $where=array('id_barang'=>$id);

        $data['satu']=$model->getWhere('barang',$where);

        echo view ('header');
        echo view ('menu',$data);
        echo view ('edit_barang',$data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }

}

public function aksi_edit_barang()
{
    $model = new M_lelang();
    $a = $this->request->getPost('nama_barang');
    $b = $this->request->getPost('tgl');
    $c = $this->request->getPost('harga_awal');
    $d = $this->request->getPost('deskripsi_barang');
    $id = $this->request->getPost('id');

    $where=array('id_barang'=>$id);

    $isi = array(
        'nama_barang' => $a,
        'tgl' => $b,
        'harga_awal' => $c,
        'deskripsi_barang' => $d


    );
    $model ->edit('barang', $isi,$where);

    return redirect()->to('home/barang');
}








    //history(udh)

public function history()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $where = [
            'status' => 'ditutup'
        ];
        $data ['manda'] = $model->joinn(
            'lelang', 'barang', 'petugas', 'masyarakat', 'lelang.id_barang=barang.id_barang',
            'lelang.id_petugas=petugas.id_petugas', 'lelang.id_user=masyarakat.id_user', 'lelang.id_lelang', $where
        );
        echo view('header');
        echo view('menu',$data);
        echo view('history',$data);
        echo view('footer');
    }else{
        return redirect()->to('home/login');
    }
}

    //laporan(yaallah susahnya)


public function laporan()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $where=array('id_petugas'=>session()->get('id'));
        $data['user']=$model->getWhere('petugas',$where);
        echo view ('header');
        echo view ('menu',$data);
        echo view('laporan', $data);
        echo view ('footer');
    }else{
        return redirect()->to('home/login');
    }
}

//signup account(udh)
public function signup()
{
    if (session()->get('level')>0){
        $model = new M_lelang();
        $data['mn']=$model->tampil1('menu');
        $data ['manda'] = $model ->join('masyarakat', 'level','masyarakat.id_level=level.id_level','id_user');
        echo view('header');
        echo view('signup',$data);
    }else{
        return redirect()->to('home/login');
    }
}

public function aksi_signup()
{
    $model = new M_lelang();
    $a = $this->request->getPost('nama_lengkap');
    $b = $this->request->getPost('username');
    $c = $this->request->getPost('password');
    $d = $this->request->getPost('telp');
    $e = $this->request->getPost('level');

    $isi = array(
        'nama_lengkap' => $a,
        'username' => $b,
        'password' => $c,
        'telp' => $d,
        'id_level' => $e

    );
    $model ->tambah('masyarakat', $isi);

    return redirect()->to('home/login');
}

public function pdf()
{
    $model = new M_lelang();

    $data['manda']=$model->tampil1('barang');

    return view('pdf', $data);

}

public function exportToExcel() {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

        // Set header untuk kolom
    $sheet->setCellValue('A1', 'Nama Barang');
    $sheet->setCellValue('B1', 'Tanggal');
    $sheet->setCellValue('C1', 'Deskripsi');
    $sheet->setCellValue('D1', 'Nama Pembeli');
    $sheet->setCellValue('E1', 'Nama Petugas');
    $sheet->setCellValue('F1', 'Tanggal Lelang');
    $sheet->setCellValue('G1', 'Harga Akhir');
    $sheet->setCellValue('H1', 'Status');
    
        // Mengatur lebar kolom
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(15);
    $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(15);
    
        // Membuat judul tebal
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')->getFont()->setBold(true);
    
        // Ambil data dari tabel tb_lelang dengan JOIN ke tabel lainnya
    $query = $this->db->table('lelang')
    ->select('barang.nama_barang, barang.tgl, barang.deskripsi_barang, masyarakat.nama_lengkap, petugas.nama_petugas, lelang.tgl_lelang, lelang.harga_akhir, lelang.status')
    ->join('barang', 'barang.id_barang = lelang.id_barang')
    ->join('masyarakat', 'masyarakat.id_user = lelang.id_user')
    ->join('petugas', 'petugas.id_petugas = lelang.id_petugas')
    ->get();

    $data = $query->getResultArray();
    
        // Mengisi data ke dalam sheet
        $rowIndex = 2; // Mulai dari baris 2
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $rowIndex, $row['nama_barang']);
            $sheet->setCellValue('B' . $rowIndex, $row['tgl']);
            $sheet->setCellValue('C' . $rowIndex, $row['deskripsi_barang']);
            $sheet->setCellValue('D' . $rowIndex, $row['nama_lengkap']);
            $sheet->setCellValue('E' . $rowIndex, $row['nama_petugas']);
            $sheet->setCellValue('F' . $rowIndex, $row['tgl_lelang']);
            $sheet->setCellValue('G' . $rowIndex, $row['harga_akhir']);
            $sheet->setCellValue('H' . $rowIndex, $row['status']);

            $rowIndex++;
        }

        // Menambahkan border
        $lastColumn = $sheet->getHighestColumn();
        $lastRow = $sheet->getHighestRow();
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle('A1:' . $lastColumn . $lastRow)->applyFromArray($styleArray);

        // Setelah mengisi data, simpan spreadsheet ke dalam file atau kirim ke browser
        $writer = new Xlsx($spreadsheet);
        $filename = 'lelang.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }





    // public function bid($id)
    // {
    //     if (session()->get('id_level')>0) {
    //         $model = new M_lelang();
    //         $where = array('id_barang' => $id);
    //         $data['satu'] = $model->getWhere('barang', $where);

    //         echo view('header');
    //         echo view('bid', $data);
    //         echo view('footer');
    //     } else {
    //         return redirect()->to('home/login');
    //     }
    // }

    // 
    
    public function aksi_bbarang()
    {
        $model = new M_Lelang();

    // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'harga_akhir' => 'greater_than[' . $model->getPreviousHarga($this->request->getPost('id')) . ']',
            'id' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
        // Validasi gagal, mungkin tambahkan log atau kembalikan pesan kesalahan
            $errors = $validation->getErrors();
        // Handle kesalahan validasi, misalnya kirim pesan error kembali ke form
            return redirect()->back()->with('errors', $errors);
        }

        $a = $this->request->getPost('harga_akhir');
        $id = $this->request->getPost('id');
        $idUser = session()->get('id_user');

    // Mendapatkan data harga sebelumnya dari tb_lelang
        $previousHarga = $model->getPreviousHarga($id);

    // Pastikan hanya user yang berhasil lelang yang bisa memasukkan data ke tb_barang
        $whereLelang = ['id_barang' => $id];



        $isiLelang = [
            'harga_akhir' => $a,
            'id_user' => $idUser,
        ];

     // Jika harga yang dimasukkan lebih besar dari harga sebelumnya
        if ($a > $previousHarga) {
        // Perbarui data di tb_lelang
            $model->edit('lelang', $isiLelang, $whereLelang);


        }

        return redirect()->to('home/barang');
    }

    public function bid(){
        if (session()->get('id_level')>0) {
            $model = new M_lelang();
            $data['mn']=$model->tampil1('menu');

            echo view('header');
            echo view('menu');
            echo view('bid', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }



}
