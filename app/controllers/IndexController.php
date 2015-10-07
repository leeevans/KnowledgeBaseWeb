<?php

use \Concept;
use \ConceptLookup;

class IndexController extends ControllerBase
{

public function eventsuggestionAction($filtercondition)
    {
      $this->view->disable();
      $suggestion = Concept::find(array(
					"conditions" => "vocabulary_id = 'SNOMED' and concept_class_id = 'Clinical Finding' and upper(concept_name) like ?1 and standard_concept = 'S'","order"=>"concept_name",
					"bind"=>array(1=>strtoupper($filtercondition).'%')));
      $results = $suggestion->toArray();
      echo(json_encode($results));
    }

    public function drugsuggestionAction($filtercondition)
    {
      $this->view->disable();
      $suggestion = Concept::find(array(
					"conditions" => "vocabulary_id = 'RxNorm' and upper(concept_name) like ?1","order"=>"concept_name",
					"bind"=>array(1=>strtoupper($filtercondition).'%')));
      $results = $suggestion->toArray();
      echo(json_encode($results));
    }

    public function indexAction()
    {

      $lookup = new ConceptLookup();
      
      $test = $lookup->getName("40125178");

      //$this->view->lookup = $lookup;

      if($this->request->isPost()){
	$concept_id = $this->request->getPost("query","int");
	$searchtype = $this->request->getPost("SearchType","string");

	//echo("concept_id:".$concept_id);
	//echo("searchtype:".$searchtype);

	$myconcept = Concept::findFirstByConceptId($concept_id);
	
	$this->view->myconcept = $myconcept;
	$this->view->SearchType = $searchtype;
	
	
	if($searchtype == 'Drug'){
	  $json = file_get_contents("http://api.ohdsi.org/WebAPI/CS1/evidence/drug/".$concept_id);
	}else if($searchtype == 'Event'){
	  $json = file_get_contents("http://api.ohdsi.org/WebAPI/CS1/evidence/hoi/".$concept_id);
	}
	$obj = json_decode($json);

	$this->view->results = $obj;
      }
    }

}

