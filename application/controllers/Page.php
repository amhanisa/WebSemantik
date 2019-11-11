<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/index');
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
