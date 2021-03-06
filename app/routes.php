<?php

//display form
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'search_form.html');
})->setName('display_search_form');


//display bib route
$app->get('/bib[/{oclcnumber}]', function ($request, $response, $args){
    //return $this->view->render($response, 'bib.html');

	if (isset($args['oclcnumber'])){
        $oclcnumber = $args['oclcnumber'];
    } elseif ($request->getParam('oclcnumber')) {
        $oclcnumber = $request->getParam('oclcnumber');
    } else {
        $this->logger->addInfo("No OCLC Number present");
        return $this->view->render($response, 'error.html', [
                'error' => 'No OCLC Number present',
                'error_message' => 'Sorry you did not pass in an OCLC Number'
        ]);
    }
    $bib = Bib::find($oclcnumber, $_SESSION['accessToken']);
    
    if (is_a($bib, "Bib")){
        
        return $this->view->render($response, 'bib.html', [
                'bib' => $bib
        ]);
    }else {
        // catch the error
    	$this->logger->addInfo("API Call failed " . $bib->getStatus() . " " . $bib->getMessage());
        return $this->view->render($response, 'error.html', [
            'error' => $bib->getStatus(),
            'error_message' => $bib->getMessage(),
            'oclcnumber' => $args['oclcnumber']
    	]);
    }


})->setName('display_bib')->add($auth_mw);

