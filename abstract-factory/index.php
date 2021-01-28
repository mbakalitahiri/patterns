<?php

abstract class AbstractMembershipCustomerFactory {
    abstract function notify();
    abstract function setType();
    abstract function getType();
}
class ShortMembershipCustomer extends  AbstractMembershipCustomerFactory {
    private $type;
    private $firstname;
    private $lastname;
    private $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstname = $firstName;
        $this->lastname = $lastName;
        $this->email = $email;
        $this->setType =  $this->setType();

    }

    public function getType()
    {
        return $this->type;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }


    public function getLastname()
    {
        return $this->lastname;
    }


    public function getEmail()
    {
        return $this->email;
    }



    public function setType()
    {
        $this->type = "short";
    }
    public function notify()
    {
        // notify by email
        mail($this->email,"Welcome to Fintech","Hi, dear member");
    }
}

class AnualMembershipCustomer extends  AbstractMembershipCustomerFactory {
    private $type;
    private $firstname;
    private $lastname;
    private $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstname = $firstName;
        $this->lastname = $lastName;
        $this->email = $email;
        $this->setType =  $this->setType();
    }


    public function getType()
    {
        return $this->type;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }


    public function getLastname()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }



    public function setType()
    {
        $this->type = "anual";
    }
    public function notify()
    {
        // TODO: Implement notify() method.
    }
}

abstract class AbstractFactoryCustomerManager{

    public function create(AbstractMembershipCustomerFactory $abstractCustomer ) {
         switch ($abstractCustomer->getType()){
            case "anual" :
                return new AnualMembershipCustomer($abstractCustomer->getFirstName,$abstractCustomer->getLastName,$abstractCustomer->getEmail);
                break;
            case "short" :
                return new ShortMembershipCustomer($abstractCustomer->getFirstName,$abstractCustomer->getLastName,$abstractCustomer->getEmail);
                break;
        }
    }
}

class CustomerManager extends  AbstractFactoryCustomerManager {
    public function create(AbstractMembershipCustomerFactory $abstractCustomer)
    {
        return parent::create($abstractCustomer);
    }
}


$manager = new CustomerManager();
$anual = $manager->create( new AnualMembershipCustomer("myName","MyLastName", "mb@hotmail.com"));
$short = $manager->create(new ShortMembershipCustomer("myName","MyLastName", "mb@amehotmail.com"));

print $short->getType();