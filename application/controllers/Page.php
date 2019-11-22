<?php
defined('BASEPATH') or exit('No direct script access allowed');

use BorderCloud\SPARQL\SparqlClient;

class Page extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		include("httpful.phar");
	}

	public function index()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT ?nama
			WHERE{
				?subject rdfs:subClassOf :StafTataUsaha .
				?entity rdf:type ?subject .
				?entity :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;
		// var_dump($result);

		$query2 = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject rdfs:subClassOf :TenagaKependidikan .
				?entity rdf:type ?subject .
				?entity :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query2);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result2 = $arr->results->bindings;
		// var_dump($result2);

		foreach ($result2 as $r) {
			array_push($result, $r);
		}
		// var_dump($result);
		$data["title"] = "Data Seluruh Staf";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function viewtambahanggota()
	{
		$this->load->view('template/header');
		$this->load->view('pages/viewtambahanggota');
		$this->load->view('template/footer');
	}

	public function edit()
	{
		$this->load->view('template/header');
		$this->load->view('pages/edit');
		$this->load->view('template/footer');
	}

	public function riset()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?subject ?nama
			WHERE{
				?subject a :StafLaboratorium .
				?subject :stafLaboratorium ?lab . 
				?lab a :LabRiset .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		var_dump($result);
		$data["title"] = "Data Staf Lab Riset";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function pembelajaran()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafLaboratorium .
				?subject :stafLaboratorium ?lab . 
				?lab a :LabPembelajaran .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Lab Pembelajaran";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function akademikprodi()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafAkademik .
				?subject :stafAkademik ?prodi . 
				?prodi a :Prodi .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Prodi";
		$data["result"] = $result;

		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function keuangan()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafKeuangan .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Keuangan";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index.php', $data);
		$this->load->view('template/footer');
	}

	public function umumperlengkapan()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafUmumPerlengkapan .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Umum Perlengkapan";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function kemahasiswaan()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafKemahasiswaan .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Kemahasiswaan";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function kerjasamakehumasan()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafKerjasamaKehumasan .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Kerjasama Kehumasan";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function kepegawaian()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafKepegawaian .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Kepegawaian";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function persuratan()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafPersuratan .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Persuratan";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function sekretaris()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :Sekretaris .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Sekretaris";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function bppm()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafBPTIK .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf BPPM";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function psik()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafPSIK .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf PSIK";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function gjm()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafGJM .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf GJM";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	public function ruangbaca()
	{
		$query = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT DISTINCT ?nama
			WHERE{
				?subject a :StafRuangBaca .
				?subject :nama ?nama
			}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($query);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);
		$result = $arr->results->bindings;

		$data["title"] = "Data Staf Ruang Baca";
		$data["result"] = $result;
		$this->load->view('template/header');
		$this->load->view('pages/index', $data);
		$this->load->view('template/footer');
	}

	// $endpoint = "http://localhost:3030/tenagakerja/sparql";
	// $sc = new SparqlClient();
	// $sc->setEndpointRead($endpoint);
	// $rows = $sc->query($q, 'rows');
	// $err = $sc->getErrors();
	// if ($err) {
	// 	print_r($err);
	// 	throw new Exception(print_r($err, true));
	// }

	// foreach ($rows["result"]["variables"] as $variable) {
	// 	printf($variable);
	// 	echo "\n";
	// }
	// echo "\n";

	// foreach ($rows["result"]["rows"] as $row) {
	// 	foreach ($rows["result"]["variables"] as $variable) {
	// 		printf($row[$variable]);
	// 		echo '|';
	// 	}
	// 	echo "\n";
	// }
}
