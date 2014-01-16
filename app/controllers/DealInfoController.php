<?php

class DealInfoController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
    	// Current page to show
    	// In a controller this can be:
    	// $this->request->getQuery('page', 'int'); // GET
    	// $this->request->getPost('page', 'int'); // POST
    	$currentPage = $_GET["page"]? (int) $_GET["page"] : 1;
    	$total_count = 1000; // 9357최대개수
    	//$first_limit = !$currentPage?0:($currentPage-1)*10;
    	$limit = 10;
    	
    	//The data set to paginate   
    	// $this->view->deals = $deals = DealInfo::find(array('deal_status = 0', 'order' => 'deal_id desc limit '.$first_limit.', '.$perpage));
    	//if(!$currentPage){$currentPage = 1;}
    	
		// Create a Model paginator, show 10 rows by page starting from $currentPage
		$paginator = new \Phalcon\Paginator\Adapter\Model(
				array(
						"data" => DealInfo::find(array('deal_status = 0','limit' => $total_count, 'order' => 'deal_id desc')),
						"limit"=> $limit,
						"page" => $currentPage
				)
		);

		// Get the paginated results
		$this->view->page = $paginator->getPaginate();		
    }

    public function showAction($deal_id, $page=1)
    {
    	$deals = DealInfo::find(array('deal_id = ?0', 'bind' => array($deal_id)));
    	
    	$this->view->deals = $deals; 
    	$this->view->page = $page;
    }
}

?>