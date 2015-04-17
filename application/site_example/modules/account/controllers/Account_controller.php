<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2013
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

class Account_controller extends Base_Controller {

    public function __construct() {

        parent::__construct();
    $this->load->library(array('session', 'config'));
       $this->lang->load('welcome');
        $this->registry->set('nav', 'home');
    }


    public function index() {
         $this->load->library('facebook');
        $this->load->helper('url');
        $data['user'] = array();

        if ($this->facebook->logged_in())
        {
            $user = $this->facebook->user();

            if ($user['code'] === 200)
            {
                unset($user['data']['permissions']);
                $data['user'] = $user['data'];
            }

        }

        $this->template
            ->prepend_title('Facebook Login')
            ->set_canonical_url(site_url())
            ->set('user', $user)
            ->set('user', $user)
            ->build('facebook');
    }



}
