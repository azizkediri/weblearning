<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require __DIR__.'/../../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Firebase {

    protected $config	= array();
    protected $serviceAccount;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();

        // $this->serviceAccount = ServiceAccount::fromJsonFile($this->CI->config->item('fir-e2693-firebase-adminsdk-atepy-62115cfb53.json'));
        $this->serviceAccount = ServiceAccount::fromJsonFile( __DIR__ . '/../config/fir-e2693-firebase-adminsdk-atepy-62115cfb53.json');
    }

    
    public function init()
    {
        return $firebase = (new Factory)->withServiceAccount($this->serviceAccount)->create();
    }
}