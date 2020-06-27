<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function index()
  {
    $indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
    $prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'), true);

    $data = array(
      'title' => 'Perkembangan Covid-19 Di Indonesia',
      'indo' => $indo,
      'prov' => $prov,
      'isi' => 'v_home',
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function global()
  {
    $global = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
    $positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), true);
    $sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
    $meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
    $data = array(
      'title' => 'Perkembangan Covid-19 Global',
      'global' => $global,
      'positif' => $positif,
      'sembuh' => $sembuh,
      'meninggal' => $meninggal,
      'isi' => 'v_global',
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function pemetaan()
  {
    $lokasi = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
    $data = array(
      'title' => 'Pemetaan Covid-19 Global',
      'lokasi' => $lokasi,
      'isi' => 'v_pemetaan',
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }
}

/* End of file Home.php */
