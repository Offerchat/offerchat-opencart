<?php

class ControllerModuleOfferchat extends Controller {

  public function index(){
    $this->load->language('module/offerchat');
    $this->load->model('setting/setting');

    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
      $this->model_setting_setting->editSetting('offerchat', $this->request->post);
      $this->session->data['success'] = $this->language->get('text_success');
      $this->redirect(HTTPS_SERVER . 'index.php?route=extension/module&token=' . $this->session->data['token']);
    }

    $this->data['heading_title'] = $this->language->get('heading_title');

    if (isset($this->error['warning'])) {
      $this->data['error_warning'] = $this->error['warning'];
    } else {
      $this->data['error_warning'] = '';
    }

    if (isset($this->error['offerchat_code'])){
      $this->data['error_key'] = $this->error['offerchat_code'];
    } else {
      $this->data['error_key'] = "";
    }

    $this->document->breadcrumbs = array();

    $this->document->breadcrumbs[] = array(
        'href'      => HTTPS_SERVER . 'index.php?route=common/home&token=' . $this->session->data['token'],
        'text'      => $this->language->get('text_home'),
        'separator' => FALSE
    );

    $this->document->breadcrumbs[] = array(
        'href'      => HTTPS_SERVER . 'index.php?route=extension/module&token=' . $this->session->data['token'],
        'text'      => $this->language->get('text_module'),
        'separator' => ' :: '
    );

    $this->document->breadcrumbs[] = array(
        'href'      => HTTPS_SERVER . 'index.php?route=module/offerchat&token=' . $this->session->data['token'],
        'text'      => $this->language->get('heading_title'),
        'separator' => ' :: '
    );

    $this->data['action'] = HTTPS_SERVER . 'index.php?route=module/offerchat&token=' . $this->session->data['token'];

    $this->data['cancel'] = HTTPS_SERVER . 'index.php?route=extension/module&token=' . $this->session->data['token'];

    if (isset($this->request->post['offerchat_code'])) {
      $this->data['offerchat_code'] = $this->request->post['offerchat_code'];
    } else {
      $this->data['offerchat_code'] = $this->config->get('offerchat_code');
    }

    $this->template = 'module/offerchat.tpl';
    $this->children = array(
      'common/header',
      'common/footer'
    );

    $this->response->setOutput($this->render(TRUE), $this->config->get('config_compression'));


  }

  private function validate() {
    if (!$this->user->hasPermission('modify', 'module/offerchat')) {
      $this->error['warning'] = $this->language->get('error_permission');
    }

    if (!$this->request->post['offerchat_code']) {
      $this->error['offerchat_code'] = $this->language->get('error_ofc_key');
    }
    else if(trim($this->request->post['ofc_key'])==""){
      $this->error['offerchat_code'] = $this->language->get('error_ofc_key');
    }

    if (!$this->error) {
      return true;
    } else {
      return false;
    }
  }

}

?>