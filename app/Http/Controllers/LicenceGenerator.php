<?php

namespace App\Http\Controllers;


require_once(dirname(__FILE__).'/simple_html_dom.php');


class LicenceGenerator extends Controller
{
    /**
     * Serve Open Source Licences from https://choosealicense.org
     *
     * @param  int  $id
     * @return Response
     */
    
    protected $licenses = [];
        
    public function list_all($use=1)
    {
        
        $html = file_get_html('https://choosealicense.com/licenses/');


        foreach ($html->find('.license-overview .license-overview-heading .license-overview-name a') as $element){
            $this->licenses [$element->innertext] = 'https://choosealicense.com/'.$element->href; 
        }
        if($use){
            $count=1;
            echo '<h1>List of Open Source Licences<br></h1><br><br>';
            echo 'To use this API, just enter the <b style="text-decoration: underline">ID</b> of the licence after the base url.<br><br>For example for the <b>GPL</b> Licence:<br>';
            echo '<code style="font-size:1.5rem;background:lightgrey;width:100%">GET https://openlicences.herokuapp.com/2</code>';
            echo '<h3>ID | Licence Type</h3>';
            foreach ($this->licenses as $key => $value) {
                echo '<a href="'.$count.'" >'.$count.') '.$key.'</a><br>';
                $count+=1;
            }
        }
    }
    
    public function show_licence($id,$type='text')
    {
        $this->list_all(0);
        if($id <= sizeof($this->licenses)){
            $keys = array_keys($this->licenses);
            $link = $this->licenses[$keys[$id]];
            $html = file_get_html($link,$stripRN=false);
            $e = $html->find('pre',0);
            
            if( $type == 'text'){
                $var=html_entity_decode ($e->innertext);
            }
            elseif ( $type == 'html'){
                $var=($e->outertext);
            }
            echo $var;

        }
        else{
            abort(404);
        }
    }
}