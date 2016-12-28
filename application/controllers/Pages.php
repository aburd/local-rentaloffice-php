<?php
class Pages extends CI_Controller {
  public function view($page = 'home')
  {
    if( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
      // Whoops, 404
      show_404();
    }
    $data['title'] = ucfirst($page); // capitalize the first letter

    // Load this as a static resource basically
    if($page == 'home'){
      $this->load->view('pages/'.$page, $data);  
    }
    else {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);
    }
  }
}
?>
