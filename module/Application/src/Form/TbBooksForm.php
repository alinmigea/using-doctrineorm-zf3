<?php
namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;

class TbBooksForm extends Form
{
    protected $captcha;

    public function __construct()
    {
        parent::__construct();


        $this->add([
            'name' => 'name',
            'options' => [
                'label' => 'Book name',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
            'type'  => 'Text',
        ]);

        $this->add([
            'name' => 'author',
            'options' => [
                'label' => 'Book author',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
            'type'  => 'Text',
        ]);

        $this->add([
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => [
                'class' => 'btn btn-primary',
                'value' => 'Submit',
            ],
        ]);

    }
}
