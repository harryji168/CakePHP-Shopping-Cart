<?php
App::uses('AppController', 'Controller');

class ProductsController extends AppController {

	public function index() {
		$this->set('products', $this->Product->find('all'));
	}
	
	public function view($id) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		
		$product = $this->Product->read(null,$id);
		$this->set(compact('product'));
	}
	
}