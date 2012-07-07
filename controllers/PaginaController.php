<?php

/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

use app\models\Projectos;
use app\models\Paginas;
use app\models\Biarq;
use app\models\Galeria;
use app\models\Mensagens;
use app\libraries\Email\Email as Email;
use li3_swiftmailer\mailer\Transports;
use li3_swiftmailer\mailer\Message;

/**
 * This controller is used for serving static pages by name, which are located in the `/views/pages`
 * folder.
 *
 * A Lithium application's default routing provides for automatically routing and rendering
 * static pages using this controller. The default route (`/`) will render the `home` template, as
 * specified in the `view()` action.
 *
 * Additionally, any other static templates in `/views/pages` can be called by name in the URL. For
 * example, browsing to `/pages/about` will render `/views/pages/about.html.php`, if it exists.
 *
 * Templates can be nested within directories as well, which will automatically be accounted for.
 * For example, browsing to `/pages/about/company` will render
 * `/views/pages/about/company.html.php`.
 */
class PaginaController extends \lithium\action\Controller {

    public function _init() {


        parent::_init();

        $menus = Paginas::find('all', array(
                    'order' => array('ordem' => 'ASC')
                ));

        $this->set(compact('menus'));
        $site = Biarq::find('first', array(
                   'conditions' => array('_id' => 1)
                ));
        $this->set(compact('site'));
    }

    public function index() {
        /* @var $Projectos \lithium\data\Model */






        $projectos = Projectos::find('all', array(
                    'conditions' => array('featured' => TRUE)
                ));


        $galeria = Galeria::find('first', array(
                    'conditions' => array('_id' => 1)
                ));


        return compact('projectos', 'galeria');
    }

    public function ver($nome, $id) {
        $pagina = Paginas::find('first', array(
                    'conditions' => array('_id' => $id
                    )
                ));

        return compact('pagina');
    }

    public function enviarmail() {



        if ($this->request->data) {
            $sms = Mensagens::create();
            $sms->email = $this->request->data['email'];
            $sms->nome = $this->request->data['nome'];

            $sms->telemovel = $this->request->data['telemovel'];
            $sms->texto = $this->request->data['texto'];
            $sms->save();

             $site = Biarq::find('first', array(
                   'conditions' => array('_id' => 1)
                ));
           
/*
    

            $mailer = Transports::adapter('default');
            $message = Message::newInstance()
                    ->setSubject('Formulario Biarq.com')
                    ->setFrom(array($this->request->data['email'] => $this->request->data['nome']))
                    ->setTo(array(
                         $site->Email_Formulario=> 'Biarq'
                        
                    ))
                    ->setBody($this->request->data['texto']);
            


 */
            
        }
        $this->redirect('Pagina::index');
    }
     public function index2() {
        /* @var $Projectos \lithium\data\Model */






        $projectos = Projectos::find('all', array(
                    'conditions' => array('featured' => TRUE)
                ));


        $galeria = Galeria::find('first', array(
                    'conditions' => array('_id' => 1)
                ));


        return compact('projectos', 'galeria');
    }


}

?>