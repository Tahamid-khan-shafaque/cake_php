<?php
// src/Controller/PagesController.php

namespace App\Controller;

use App\Controller\AppController;

class PagesController extends AppController
{
    public function newPage()
    {
        // Action code goes here

        // You can pass data to the view if needed
        $data = 'Hello, My name is Tahamid Khan';
        $this->set('data', $data);
    }

    
}
