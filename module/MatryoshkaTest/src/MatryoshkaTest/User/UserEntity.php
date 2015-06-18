<?php
namespace MatryoshkaTest\User;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Matryoshka\Model\Object\IdentityAwareTrait;


/**
 * Class UserEntity
 */
class UserEntity extends AbstractActiveRecord
{
    use IdentityAwareTrait;

    /**
     * @var
     */
    protected $firstName;

    /**
     * @var
     */
    protected $lastName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
} 