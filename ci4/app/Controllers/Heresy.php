<?php

namespace App\Controllers;

use App\Models\HeresyModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Heresy extends BaseController
{
    public function index()
    {
        $model = model(HeresyModel::class);

        $data = [
		'images'  => $model->getImages(),
		'title' => 'heresy',
		'pageTitle' => 'LAYER 6 :: HERESY',
		'nextPage' => 'violence',
		];
		
		return view('templates/header', $data)
            . view('heresy/index')
            . view('templates/footer', $data);
    }
	
	public function upload()
    {
        helper('form');

		$data['pageTitle'] = 'UPLOADING IMAGE...';
        $data['title'] = 'heresy';
		
        return view('templates/header_inner', $data)
            . view('heresy/upload')
            . view('templates/footer_inner', $data);
    }
	
	public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'alias', 'title', 'caption', 'image']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
			'name' => 'required|max_length[75]|alpha_numeric_space',
			'email' => 'permit_empty|max_length[70]|valid_email',
			'alias' => 'permit_empty|max_length[40]|alpha_numeric_space',
            'title' => 'required|max_length[120]|min_length[3]',
            'caption'  => 'permit_empty|max_length[120]|min_length[3]',
			'image' => 'required|max_length[512]|valid_url_strict',
        ])) {
            // The validation fails, so returns the form.
            return $this->upload();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(HeresyModel::class);

        $model->save([
			'name' => $post['name'],
			'email' => $post['email'],
            'alias' => $post['alias'],
			'title' => $post['title'],
			'caption' => $post['caption'],
			'image' => $post['image'],
        ]);
		
		$data['pageTitle'] = 'UPLOAD COMPLETE';
        $data['title'] = 'heresy';

        return view('templates/header_inner', $data)
            . view('heresy/success')
            . view('templates/footer_inner', $data);
    }
}