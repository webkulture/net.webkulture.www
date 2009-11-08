<?php

/**
 * IndexController is the default controller for this application
 * 
 * Notice that we do not have to require 'Zend/Controller/Action.php', this
 * is because our application is using "autoloading" in the bootstrap.
 *
 * @see http://framework.zend.com/manual/en/zend.loader.html#zend.loader.load.autoload
 */
class UiController extends Zend_Controller_Action 
{
	
	public function init()
	{
		//var_dump($this);
		//$this->indexAction();
	}
	
    /**
     * The "index" action is the default action for all controllers. This 
     * will be the landing page of your application.
     *
     * Assuming the default route and default router, this action is dispatched 
     * via the following urls:
     *   /
     *   /ui/
     *   /ui/index
     *
     * @return void
     */
    public function indexAction() 
    {
        		
    }

	public function uiAction()
	{
		$this->view->headLink()->appendStylesheet('css/main.css');
	}
}