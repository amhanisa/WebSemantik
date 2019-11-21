<?php
defined('BASEPATH') or exit('No direct script access allowed');

use BorderCloud\SPARQL\SparqlClient;

class Page extends CI_Controller
{

	public function index()
	{
		// $endpoint = "http://localhost:3030/tenagakerja/sparql";
		// $sc = new SparqlClient();
		// $sc->setEndpointRead($endpoint);
		$q = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
		PREFIX owl: <http://www.w3.org/2002/07/owl#>
		PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
		PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
		PREFIX : <http://www.filkom.ub.ac.id/>
		SELECT ?subject 
			WHERE { ?subject a :LabRiset}";
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

		include("httpful.phar");

		$sparql = "PREFIX ub: <http://ub.ac.id#>
		SELECT ?nama
	WHERE {ub:filkom ub:ketua ?dekan . ?dekan ub:nama ?nama}";

		$url = 'http://localhost:3030/tenagakerja/query?query=' . urlencode($q);
		$res = \Httpful\Request::get($url)->expectsJson()->send();
		$arr = json_decode($res);

		print_r($arr);
		echo '<br>';
		// echo $arr->results->bindings[0]->nama->value;
		// $this->load->view('template/header');
		// $this->load->view('pages/index');
		// $this->load->view('template/footer');
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
		$this->load->view('template/header');
		$this->load->view('pages/riset');
		$this->load->view('template/footer');
	}

	public function pembelajaran()
	{
		$this->load->view('template/header');
		$this->load->view('pages/pembelajaran');
		$this->load->view('template/footer');
	}

	public function akademikprodi()
	{
		$this->load->view('template/header');
		$this->load->view('pages/akademikprodi');
		$this->load->view('template/footer');
	}

	public function keuangan()
	{
		$this->load->view('template/header');
		$this->load->view('pages/keuangan');
		$this->load->view('template/footer');
	}

	public function umumperlengkapan()
	{
		$this->load->view('template/header');
		$this->load->view('pages/umumperlengkapan');
		$this->load->view('template/footer');
	}

	public function kemahasiswaan()
	{
		$this->load->view('template/header');
		$this->load->view('pages/kemahasiswaan');
		$this->load->view('template/footer');
	}

	public function kerjasamakehumasan()
	{
		$this->load->view('template/header');
		$this->load->view('pages/kerjasamakehumasan');
		$this->load->view('template/footer');
	}

	public function kepegawaian()
	{
		$this->load->view('template/header');
		$this->load->view('pages/kepegawaian');
		$this->load->view('template/footer');
	}

	public function persuratan()
	{
		$this->load->view('template/header');
		$this->load->view('pages/persuratan');
		$this->load->view('template/footer');
	}

	public function sekretaris()
	{
		$this->load->view('template/header');
		$this->load->view('pages/sekretaris');
		$this->load->view('template/footer');
	}

	public function bppm()
	{
		$this->load->view('template/header');
		$this->load->view('pages/bppm');
		$this->load->view('template/footer');
	}

	public function psik()
	{
		$this->load->view('template/header');
		$this->load->view('pages/psik');
		$this->load->view('template/footer');
	}

	public function gjm()
	{
		$this->load->view('template/header');
		$this->load->view('pages/gjm');
		$this->load->view('template/footer');
	}

	public function ruangbaca()
	{
		$this->load->view('template/header');
		$this->load->view('pages/ruangbaca');
		$this->load->view('template/footer');
	}
}
