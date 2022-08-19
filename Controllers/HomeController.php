<?php

namespace Controllers;

class HomeController extends Controller{

    public function index()
    {
        return $this->views('site.index');
    }

    public function show(int $id)
    {
        return $this->views('site.show', compact('id'));
    }
}