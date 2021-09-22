<?php 
class Latihan1 extends CI_Controller {

    public function index()
    {
        echo "Contoh Class";
    }
    #Hanya menggunakan Controller
    public function biodata1()
        {
            echo "<h1>Perkenalkan</h1>";
            echo "<br>";
            echo "Nama : Dendi";

        }
    #Menggunakan Controller dan view
    public function biodata2()
        {
           $this->load->view('view_biodata');

        }
    #Menggunakan controller dan model
    public function biodata3()
    {
        $this->load->model('model_biodata');
        $bio = $this->model_biodata->biodata();

        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "Nama : " . $bio;
    }

    #Menggunakan controller model dan view

    public function biodata4()
    {
        $this->load->model('model_biodata', 'mod'); //model
        $data['bio'] = $this->mod->biodata();

        $data['title'] = "Form Biodata";

        $this->load->view('view_biodata', $data); //view 

        
    }
}