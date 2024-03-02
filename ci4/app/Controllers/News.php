<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
		'news'  => $model->getNews(),
		'title' => 'greed',
		'pageTitle' => 'LAYER 4 :: GREED',
		'nextPage' => 'wrath',
		];
		
		return view('templates/header', $data)
            . view('greed/index')
            . view('templates/footer', $data);
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);
	
	if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }
		
		$data['pageTitle'] = $data['news']['title'];
        $data['title'] = 'greed';

        return view('templates/header_inner', $data)
            . view('greed/view')
            . view('templates/footer_inner', $data);
	}
	
	public function new()
    {
        helper('form');

		$data['pageTitle'] = 'CREATING ARTICLE...';
        $data['title'] = 'greed';
		
        return view('templates/header_inner', $data)
            . view('greed/create')
            . view('templates/footer_inner', $data);
    }
	
	public function create()
    {
        helper('form');

        $data = $this->request->getPost(['title', 'body', 'image']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[256]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[3]',
			'image' => 'permit_empty|max_length[512]|valid_url_strict',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
			'image' => $post['image'],
            'body'  => $post['body'],
        ]);
		
		$data['pageTitle'] = 'ARTICLE CREATED';
        $data['title'] = 'greed';

        return view('templates/header_inner', $data)
            . view('greed/success')
            . view('templates/footer_inner', $data);
    }
}