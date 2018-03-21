<?php
namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

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

        $this->addInputFilter();

    }

    public function addInputFilter()
    {

        $inputFilter = new InputFilter();

        $this->setInputFilter($inputFilter);

        $inputFilter->add([
            'name'=> 'name',
            'required' => true,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags']
            ]
        ]);

        $inputFilter->add([
            'name'=> 'author',
            'required' => true,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags']
            ]
        ]);


    }

    public function save($entityManager)
    {

        $post = $this->getData();

        try {
            $books = new \Entities\TbBooks();

            $books->setName($post['name'])
                  ->setAuthor($post['author']);

            $entityManager->persist($books);
            $entityManager->flush();

            return true;

        } catch(\Exception $e) {
            return false;
        }

    }

}
