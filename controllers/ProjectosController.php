<?php

/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use app\models\Biarq;
use app\models\Projectos;
use app\models\Paginas;
use app\models\Galeria;

class ProjectosController extends \lithium\action\Controller {

	public function _init() {

		parent::_init();
		$menus = Paginas::find('all', array(
			'order' => array('ordem' => 'ASC')
		));

		$site = Biarq::find('first');
		$this->set(compact('site', 'menus'));
	}

	public function ver($slug, $id) {


		$projecto = Projectos::find('first', array(
			'conditions' => array('_id' => $id)
		));
		return compact('projecto');
	}

	public function index() {
		$projectos = Projectos::find('all', array(
			'order' => array('ordem' => 'ASC')
		));
		$projectosrss = Projectos::find('all', array(
			'order' => array('created' => 'ASC')
		));

		return compact('projectos', 'projectosrss');
	}
}

?>