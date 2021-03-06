<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{
    public function portfolio() {
	    $args = array(
	    	'post_type' => 'post',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}

	public function data() {
		$data['trailer'] = get_field('trailer');
		
		return $data;
	}
}
