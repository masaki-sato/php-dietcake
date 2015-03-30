<?php
class HelloController extends AppController
{
    public function index()
    {
        $message = Hello::getMessage();

        $langs = array('ruby', 'python', 'go', 'hack');

        $this->set(get_defined_vars());
    }
}
