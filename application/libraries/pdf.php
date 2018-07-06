 <?php defined('BASEPATH') OR exit ('no direct script access allowed');

    use Dompdf\Dompdf;

Class pdf extends Dompdf {
    public function __construct()
    {
        parent::__construct
    }

    protect function ci()
    {
        return get_instance();
    }

    public function load_view($view, $data = [], $filename = 'laporan.pdf')
    {
        $html = $this->cd()->load->view($view, $data);
        $this->loadHtml($html);
        $this->render();
        $this->stream()$filename, (['Attachment' => false ]);
    }
}