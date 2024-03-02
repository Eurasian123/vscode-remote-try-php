<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Pages extends BaseController
{
    // ...

    public function view($page)
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = strtolower($page);
		
		switch ($page) {
			case 'home':
				$data['pageTitle'] = 'Home';
				$data['nextPage'] = 'limbo';
				break;
			case 'about':
				$data['pageTitle'] = 'Personal Website';
				$data['nextPage'] = 'limbo';
				break;
			case 'limbo':
				$data['pageTitle'] = 'LAYER 1 :: LIMBO';
				$data['nextPage'] = 'lust';
				break;
			case 'lust':
				$data['pageTitle'] = 'LAYER 2 :: LUST';
				$data['nextPage'] = 'gluttony';
				break;
			case 'gluttony':
				$data['pageTitle'] = 'LAYER 3 :: GLUTTONY';
				$data['nextPage'] = 'greed';
				break;
			case 'contact':
				$data['pageTitle'] = 'Would you like some fish?';
				$data['nextPage'] = 'heresy';
				break;
			case 'heresy':
				$data['pageTitle'] = 'LAYER 6 :: HERESY';
				$data['nextPage'] = 'violence';
				break;
			case 'violence':
				$data['pageTitle'] = 'LAYER 7 :: VIOLENCE';
				$data['nextPage'] = 'fraud';
				break;
		};

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer', $data);
    }
	
}