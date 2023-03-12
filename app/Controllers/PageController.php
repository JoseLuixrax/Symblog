<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class PageController extends BaseController {


    public function aboutAction() {
        return $this->renderHTML('Page/about.html.twig');
    }

    public function contactAction() {
        return $this->renderHTML('Page/contact.html.twig');
    }

    public function contactActionSend($request) {
        $data = array();
        if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
        }
        return $this->renderHTML('Page/contact.txt.twig',$data);
    }

}
