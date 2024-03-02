<?php

namespace App\Controllers;

use App\Models\GuestsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Wrath extends BaseController
{
    public function index()
    {
		helper('form');
		
        $data = [
		'title' => 'wrath',
		'pageTitle' => 'LAYER 5 :: WRATH',
		'nextPage' => 'heresy',
		];
		
		return view('templates/header', $data)
            . view('wrath/index')
            . view('templates/footer', $data);
    }

    public function list()
    {
        $model = model(GuestsModel::class);

		$data = [
		'guest' => $model->guestList(),
		'title' => 'wrath',
		'pageTitle' => 'Guest List',
		];

        return view('templates/header_inner', $data)
            . view('wrath/list')
            . view('templates/footer_inner', $data);
	}

	
	public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'gender', 'website', 'comment']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[75]|alpha_numeric_space',
			'email' => 'required|max_length[70]|valid_email',
            'comment'  => 'permit_empty|max_length[5000]',
			'website' => 'permit_empty|max_length[120]|valid_url_strict',
			'gender' => 'required'
        ])) {
            // The validation fails, so returns the form.
            return $this->index();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestsModel::class);

        $model->save([
            'name' => $post['name'],
			'email' => $post['email'],
			'gender' => $post['gender'],
			'website' => $post['website'],
            'comment'  => $post['comment'],
        ]);
		
		$data['pageTitle'] = 'Thank you!';
        $data['title'] = 'wrath';
		$data['nextPage'] = 'heresy';

        return view('templates/header', $data)
			. view('wrath/index')
            . view('wrath/success')
            . view('templates/footer', $data);
    }
}