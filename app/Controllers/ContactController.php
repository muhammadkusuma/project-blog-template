<?php

namespace App\Controllers;

use App\Models\ContactModel;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact_form');
    }

    public function store()
    {
        $model = new ContactModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        $model->insert($data);

        return redirect()->to('/')->with('success', 'Your message has been sent. Thank you!');
    }
}
