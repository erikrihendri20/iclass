<?php

namespace App\Controllers;

use App\Models\Materi_Model;
use App\Models\Tingkatan_Model;

class Materi extends BaseController
{
	public function index()
	{
		$model = new Materi_Model();
		$db = \Config\Database::connect();

		if (session('kode-kelas') == '0') {
			session()->setFlashdata('salah', '<script>Swal.fire({icon: "error", title: "", text: "Maaf, kamu belum tergabung kedalam kelas."});</script>');
			return redirect()->to(base_url().'/peserta');
		}

		$kelas = $db->table('kelas')->where('id', session('kode-kelas'))->get()->getResultArray()[0]['nama'];

		if ((session('jurusan')=='intensif' || session('jurusan')=='tryout')) {
			if (session('kode-paket')!='7') {
				$data['materis'] = $model->findAll();
			} else {
				$data['materis'] = $model->like('kelas', 'skd')->findAll();
			}
		} else {
		    $data['materis'] = $model->like('kelas', session('jurusan'))->findAll();
		}

		$tingkatans = [];
		$ts = $db->table('tingkatan')->where('username', session('username'))->get()->getResultArray();
		foreach ($ts as $t) {
			$tingkatans[$t['materi']] = $t;
		}
		for ($i=0; $i<sizeof($data['materis']); $i++) {
			if (array_key_exists($data['materis'][$i]['materi'], $tingkatans)) {
				$selesaid = (!empty($tingkatans[$data['materis'][$i]['materi']]['dasar'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['dasar'])) : 0;
				$selesais = (!empty($tingkatans[$data['materis'][$i]['materi']]['sedang'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['sedang'])) : 0;
				$selesair = (!empty($tingkatans[$data['materis'][$i]['materi']]['rumit'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['rumit'])) : 0;
				$selesai = $selesaid+$selesais+$selesair;
				$data['materis'][$i]['selesai'] = $selesai;
			} else {
				$data['materis'][$i]['selesai'] = 0;
			}
			$total = $data['materis'][$i]['dasar']+$data['materis'][$i]['sedang']+$data['materis'][$i]['rumit'];
			$data['materis'][$i]['selesai'] = floor($data['materis'][$i]['selesai']/$total*100);
		}

		$data['materiPilihan'] = $data['materis'][0];

		if (array_key_exists($data['materiPilihan']['materi'], $tingkatans)) {
			$selesaid = (!empty($tingkatans[$data['materiPilihan']['materi']]['dasar'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['dasar'])) : 0;
			$selesais = (!empty($tingkatans[$data['materiPilihan']['materi']]['sedang'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['sedang'])) : 0;
			$selesair = (!empty($tingkatans[$data['materiPilihan']['materi']]['rumit'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['rumit'])) : 0;
			$selesai = $selesaid+$selesais+$selesair;
			$data['materiPilihan']['selesai'] = $selesai;
		} else {
			$data['materiPilihan']['selesai'] = 0;
		}
		$total = $data['materiPilihan']['dasar']+$data['materiPilihan']['sedang']+$data['materiPilihan']['rumit'];
		$data['materiPilihan']['selesai'] = floor($data['materiPilihan']['selesai']/$total*100);

		unset($data['materis'][0]);
		$data['materis'] = array_values($data['materis']);

		$data['submateris'] = $db->table('submateri')->where('materi', $data['materiPilihan']['materi'])->get()->getResultArray();

		$kelas = (session('kode-kelas')!='0') ? $db->table('kelas')->where('id', session('kode-kelas'))->get()->getResultArray()[0]['nama'] : 'Belum ada kelas';
		$rekamanKelas = $db->table('rekaman')->where('materi', $data['materiPilihan']['materi'])->like('kelas', $kelas)->get()->getResultArray();
		if (!empty($rekamanKelas)) {
			$data['rekaman'] = $rekamanKelas;
		} else {
			$data['rekaman'] = [];
		}
		$data['rekamanPart'] = 1;

		$tingkatan = new Tingkatan_Model();
		$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		if (empty($data['tingkatan'])) {
			$tingkat = [
				'username' => session('username'),
				'dasar' => '1',
				'sedang' => '0',
				'rumit' => '0',
				'materi' => $data['materiPilihan']['materi']
			];
			$tingkatan->insert($tingkat);
			$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		}
		$data['dasar'] = ((string)sizeof(explode(',', $data['tingkatan']['dasar']))==$data['materiPilihan']['dasar']) ? true : false;
		$data['sedang'] = ((string)sizeof(explode(',', $data['tingkatan']['sedang']))==$data['materiPilihan']['sedang']) ? true : false;
		$data['rumit'] = ((string)sizeof(explode(',', $data['tingkatan']['rumit']))==$data['materiPilihan']['rumit']) ? true : false;
		
		$data['sedang'] = ($data['tingkatan']['sedang'] == '0') ? false : $data['sedang'];
		$data['rumit'] = ($data['tingkatan']['rumit'] == '0') ? false : $data['rumit'];
		$data['part'] = 1;
		
		if ($data['materiPilihan']['materi']=='Suku Banyak' && $data['dasar']==true) {
		    $data['rumit']==true;
		}
		$data['css'] = 'materi.css';
		$data['active'] = 'materi';
		$data['title'] = 'Materi';
		return view('peserta/materi', $data);
	}

	public function materi($id = NULL, $part=1, $rekaman=null, $bagian=null)
	{
		$model = new Materi_Model();
		$db = \Config\Database::connect();

		if (session('kode-kelas') == '0') {
			session()->setFlashdata('salah', '<script>Swal.fire({icon: "error", title: "", text: "Maaf, kamu belum tergabung kedalam kelas."});</script>');
			return redirect()->to(base_url().'/peserta');
		}

		$kelas = $db->table('kelas')->where('id', session('kode-kelas'))->get()->getResultArray()[0]['nama'];

        if ((session('jurusan')=='intensif' || session('jurusan')=='tryout')) {
			if (session('kode-paket')!='7') {
				$data['materis'] = $model->findAll();
			} else {
				$data['materis'] = $model->like('kelas', 'skd')->findAll();
			}
		} else {
		    $data['materis'] = $model->like('kelas', session('jurusan'))->findAll();
		}

		$tingkatans = [];
		$ts = $db->table('tingkatan')->where('username', session('username'))->get()->getResultArray();
		foreach ($ts as $t) {
			$tingkatans[$t['materi']] = $t;
		}
		for ($i=0; $i<sizeof($data['materis']); $i++) {
			if (array_key_exists($data['materis'][$i]['materi'], $tingkatans)) {
				$selesaid = (!empty($tingkatans[$data['materis'][$i]['materi']]['dasar'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['dasar'])) : 0;
				$selesais = (!empty($tingkatans[$data['materis'][$i]['materi']]['sedang'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['sedang'])) : 0;
				$selesair = (!empty($tingkatans[$data['materis'][$i]['materi']]['rumit'])) ? sizeof(explode(',', $tingkatans[$data['materis'][$i]['materi']]['rumit'])) : 0;
				$selesai = $selesaid+$selesais+$selesair;
				$data['materis'][$i]['selesai'] = $selesai;
			} else {
				$data['materis'][$i]['selesai'] = 0;
			}
			$total = $data['materis'][$i]['dasar']+$data['materis'][$i]['sedang']+$data['materis'][$i]['rumit'];
			$data['materis'][$i]['selesai'] = floor($data['materis'][$i]['selesai']/$total*100);
		}
		$data['tingkatans'] = $tingkatans;

		$data['materiPilihan'] = $model->where('id', $id)->first();

		if (array_key_exists($data['materiPilihan']['materi'], $tingkatans)) {
			$selesaid = (!empty($tingkatans[$data['materiPilihan']['materi']]['dasar'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['dasar'])) : 0;
			$selesais = (!empty($tingkatans[$data['materiPilihan']['materi']]['sedang'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['sedang'])) : 0;
			$selesair = (!empty($tingkatans[$data['materiPilihan']['materi']]['rumit'])) ? sizeof(explode(',', $tingkatans[$data['materiPilihan']['materi']]['rumit'])) : 0;
			$selesai = $selesaid+$selesais+$selesair;
			$data['materiPilihan']['selesai'] = $selesai;
		} else {
			$data['materiPilihan']['selesai'] = 0;
		}
		$total = $data['materiPilihan']['dasar']+$data['materiPilihan']['sedang']+$data['materiPilihan']['rumit'];
		$data['materiPilihan']['selesai'] = floor($data['materiPilihan']['selesai']/$total*100);

		$data['submateris'] = $db->table('submateri')->where('materi', $data['materiPilihan']['materi'])->get()->getResultArray();

		$kelas = (session('kode-kelas')!='0') ? $db->table('kelas')->where('id', session('kode-kelas'))->get()->getResultArray()[0]['nama'] : 'Belum ada kelas';
		$rekamanKelas = $db->table('rekaman')->where('materi', $data['materiPilihan']['materi'])->like('kelas', $kelas)->get()->getResultArray();
		if (!empty($rekamanKelas)) {
			$data['rekaman'] = $rekamanKelas;
		} else {
			$data['rekaman'] = [];
		}
		$data['rekamanPart'] = 1;

		$tingkatan = new Tingkatan_Model();
		$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		if (empty($data['tingkatan'])) {
			$tingkat = [
				'username' => session('username'),
				'dasar' => '1',
				'sedang' => '0',
				'rumit' => '0',
				'materi' => $data['materiPilihan']['materi']
			];
			$tingkatan->insert($tingkat);
			$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		}
		$data['dasar'] = ((string)sizeof(explode(',', $data['tingkatan']['dasar']))==$data['materiPilihan']['dasar']) ? true : false;
		if ($data['materiPilihan']['sedang']=="0") {
			$data['sedang']=$data['dasar'];
		} elseif ($data['tingkatan']['sedang']=="0") {
			$data['sedang'] = false;
		} else {
			$data['sedang'] = ((string)sizeof(explode(',', $data['tingkatan']['sedang']))==$data['materiPilihan']['sedang']) ? true : false;
		}
		$data['rumit'] = ((string)sizeof(explode(',', $data['tingkatan']['rumit']))==$data['materiPilihan']['rumit']) ? true : false;

		$data['rumit'] = ($data['tingkatan']['rumit'] == '0') ? false : $data['rumit'];
		$data['part'] = $part;
		
		if ($data['materiPilihan']['materi']=='Suku Banyak' && $data['dasar']==true) {
		    $data['rumit']==true;
		}

		$data['css'] = 'materi.css';
		$data['active'] = 'materi';
		$data['title'] = 'Materi';

		if ($rekaman!=null) {
			session()->setFlashdata('rekaman', "<script>tukarBagianRekaman('".$bagian."')</script>");
		}
		return view('peserta/materi', $data);
	}

	public function rekaman($id = NULL, $part=1)
	{
		$model = new Materi_Model();
		$db = \Config\Database::connect();

		if (session('kode-kelas') == '0') {
			session()->setFlashdata('salah', '<script>Swal.fire({icon: "error", title: "", text: "Maaf, kamu belum tergabung kedalam kelas."});</script>');
			return redirect()->to(base_url().'/peserta');
		}

		$kelas = $db->table('kelas')->where('id', session('kode-kelas'))->get()->getResultArray()[0]['nama'];
		$id = $model->where('materi', $db->table('rekaman')->where('id', $id)->get()->getResultArray()[0]['materi'])->first()['id'];

		if (session('jurusan') != 'intensif') {
			$data['materis'] = $model->where('id !=', $id)->like('kelas', session('jurusan'))->findAll();
		} else {
			if (session('kode-paket')!='7') {
				$data['materis'] = $model->where('id !=', $id)->findAll();
			} else {
				$data['materis'] = $model->where('id !=', $id)->like('kelas', 'skd')->findAll();
			}
		}

		$data['materiPilihan'] = $model->where('id', $id)->first();
		$data['submateris'] = $db->table('submateri')->where('materi', $data['materiPilihan']['materi'])->get()->getResultArray();
		$rekamanKelas = $db->table('rekaman')->where('materi', $data['materiPilihan']['materi'])->like('kelas', $kelas)->get()->getResultArray();
		if (!empty($rekamanKelas)) {
			$data['rekaman'] = $rekamanKelas;
		} else {
			$data['rekaman'] = [];
		}
		$data['rekamanPart'] = $part;

		$tingkatan = new Tingkatan_Model();
		$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		if (empty($data['tingkatan'])) {
			$tingkat = [
				'username' => session('username'),
				'dasar' => '1',
				'sedang' => '0',
				'rumit' => '0',
				'materi' => $data['materiPilihan']['materi']
			];
			$tingkatan->insert($tingkat);
			$data['tingkatan'] = $tingkatan->where('username', session('username'))->where('materi', $data['materiPilihan']['materi'])->first();
		}
		$data['dasar'] = ((string)sizeof(explode(',', $data['tingkatan']['dasar']))==$data['materiPilihan']['dasar']) ? true : false;
		$data['sedang'] = ((string)sizeof(explode(',', $data['tingkatan']['sedang']))==$data['materiPilihan']['sedang']) ? true : false;
		$data['rumit'] = ((string)sizeof(explode(',', $data['tingkatan']['rumit']))==$data['materiPilihan']['rumit']) ? true : false;

		$data['sedang'] = ($data['tingkatan']['sedang'] == '0') ? false : $data['sedang'];
		$data['rumit'] = ($data['tingkatan']['rumit'] == '0') ? false : $data['rumit'];
		$data['part'] = $part;
		
		if ($data['materiPilihan']['materi']=='Suku Banyak' && $data['dasar']==true) {
		    $data['rumit']==true;
		}

		$data['css'] = 'materi.css';
		$data['active'] = 'materi';
		$data['title'] = 'Materi';

		session()->setFlashdata('rekaman', "tukarBagianRekaman('".$part."');");

		return view('peserta/materi', $data);
	}

	public function cek($materi, $tingkat, $bagian) {
		$tingkatan = new Tingkatan_Model();
		$model = new Materi_Model();
		$m = $model->where('materi', $materi)->first();
		$dasar = $tingkatan->where('username', session('username'))->where('materi', $materi)->first();
		switch ($tingkat) {
			case 'dasar':
				if (strpos($dasar['dasar'], $bagian) !== false && $m['dasar']!=1) {
					return "locked";
				} elseif ($m['dasar']==1) {
					$return = (sizeof(explode(',', $dasar['dasar'])) == (int)$m['dasar']) ? "unlocked" : "locked";
					return $return;
				} else {
					$dasar = ($dasar['dasar'] != '0') ? $dasar['dasar'].','.$bagian : $bagian;
					$tingkatan->where('username', session('username'))->where('materi', $materi)->set('dasar', $dasar)->update();
					$return = (sizeof(explode(',', $dasar)) == (int)$m['dasar']) ? "unlocked" : "locked";
					return $return;
				}
				break;
			case 'sedang':
				if (strpos($dasar['sedang'], $bagian) !== false && $m['sedang']!=1) {
					return "locked";
				} elseif ($m['sedang']==1) {
					$return = (sizeof(explode(',', $dasar['sedang'])) == (int)$m['sedang']) ? "unlocked" : "locked";
					return $return;
				} else {
					$dasar = ($dasar['sedang'] != '0') ? $dasar['sedang'].','.$bagian : $bagian;
					$tingkatan->where('username', session('username'))->where('materi', $materi)->set('sedang', $dasar)->update();
					$return = (sizeof(explode(',', $dasar)) == (int)$m['sedang']) ? "unlocked" : "locked";
					return $return;
				}
				break;
			case 'rumit':
				if (strpos($dasar['rumit'], $bagian) !== false && $m['rumit']!=1) {
					return "locked";
				} elseif ($m['rumit']==1) {
					$return = (sizeof(explode(',', $dasar['rumit'])) == (int)$m['rumit']) ? "unlocked" : "locked";
					return $return;
				} else {
					$dasar = ($dasar['rumit'] != '0') ? $dasar['rumit'].','.$bagian : $bagian;
					$tingkatan->where('username', session('username'))->where('materi', $materi)->set('rumit', $dasar)->update();
					$return = (sizeof(explode(',', $dasar)) == (int)$m['rumit']) ? "unlocked" : "locked";;
					return $return;
				}
				break;
		}
	}

	public function gantiKelas ($kelas) {
		$model = new Materi_Model();
		$materi = $model->like('kelas', $kelas)->findAll();

		return json_encode($materi);
	}
}
