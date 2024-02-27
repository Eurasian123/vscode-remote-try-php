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
				$data['nextPage'] = 'limbo';
				break;
			case 'limbo':
				$data['nextPage'] = 'lust';
				break;
			case 'lust':
				$data['nextPage'] = 'gluttony';
				break;
			case 'gluttony':
				$data['nextPage'] = 'greed';
				break;
			case 'greed':
				$data['nextPage'] = 'wrath';
				break;
			case 'wrath':
				$data['nextPage'] = 'heresy';
				break;
			case 'contact':
				$data['nextPage'] = 'heresy';
				break;
			case 'heresy':
				$data['nextPage'] = 'violence';
				break;
			case 'violence':
				$data['nextPage'] = 'fraud';
				break;
		};

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer', $data);
    }
	
}