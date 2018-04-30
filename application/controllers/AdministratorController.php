<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_level') != 0 && !$this->session->userdata('user_log')) {
      redirect('404_notfound');
    }
  }

  function index()
  {
    $data['content'] = 'home';
    $data['pageActive'] = 'dashboard';
    $data['title'] = 'Dashboard';

    $this->load->view('layouts/app_dashboard', $data);
  }

  function news()
  {
    $data['content'] = 'news';
    $data['pageActive'] = 'news';
    $data['title'] = 'News';

    $this->db->order_by('news_id', 'desc');
    $data['data'] = array(
      'news' => $this->db->get('news')
    );

    $this->load->view('layouts/app_dashboard', $data);
  }

  public function news_create()
  {
    $data['content'] = 'news_add';
    $data['pageActive'] = 'news';
    $data['title'] = 'News Add';

    $this->load->view('layouts/app_dashboard', $data);
  }

  public function news_restore()
  {
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $category = $this->input->post('category');
    $entry = date('Y-m-d H:i:s');
    $poster = 'default.png';

    $confUp['upload_path'] = './upload/poster/';
    $confUp['allowed_types'] = 'png|jpg|jpeg';

    $this->load->library('upload', $confUp);

    if ($this->upload->do_upload('poster')) {
      $poster = $this->upload->data('file_name');
    }

    $insert = $this->db->insert('news', [
      'news_user_id' => $this->session->userdata('user_id'),
      'news_title' => $title,
      'news_description' => $description,
      'news_poster' => $poster,
      'news_entry' => $entry,
      'news_category' => $category
    ]);

    if ($insert) {
      ?>
        <script type="text/javascript">
          alert('Berhasil ditambahkan');
          window.location = "<?php echo base_url('administrator/news'); ?>";
        </script>
      <?php
    }
    else {
      ?>
      <script type="text/javascript">
        alert('Gagal Ditambahkan');
        window.location = "<?php echo base_url('administrator/news/add'); ?>";
      </script>
      <?php
    }

  }

  public function news_edit($id)
  {
    $data['content'] = 'news_edit';
    $data['pageActive'] = 'news';
    $data['title'] = 'News Edit';
    $data['data'] = array(
      'news' => $this->db->get_where('news', ['news_id' => $id])->row()
    );
    $this->load->view('layouts/app_dashboard', $data);
  }

  public function news_update($id)
  {
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $category = $this->input->post('category');
    $entry = date('Y-m-d H:i:s');
    $poster = $this->input->post('poster_then');

    $confUp['upload_path'] = './upload/poster/';
    $confUp['allowed_types'] = 'png|jpg|jpeg';

    $this->load->library('upload', $confUp);

    if ($this->upload->do_upload('poster')) {
      $poster = $this->upload->data('file_name');
    }

    $this->db->where('news_id', $id);
    $update = $this->db->update('news', [
      'news_user_id' => $this->session->userdata('user_id'),
      'news_title' => $title,
      'news_description' => $description,
      'news_poster' => $poster,
      'news_entry' => $entry,
      'news_category' => $category
    ]);

    if ($update) {
      ?>
        <script type="text/javascript">
          alert('Berhasil diupdate');
          window.location = "<?php echo base_url('administrator/news'); ?>";
        </script>
      <?php
    }
    else {
      ?>
      <script type="text/javascript">
        alert('Gagal Diupdate');
        window.location = "<?php echo base_url('administrator/news/edit' . $id); ?>";
      </script>
      <?php
    }
  }

  public function news_delete($id)
  {
    $this->db->delete('news', ['news_id' => $id]);

    ?>
    <script type="text/javascript">
      alert('Berhasil Dihapus');
      window.location = "<?php echo base_url('administrator/news'); ?>";
    </script>
    <?php
  }

}
