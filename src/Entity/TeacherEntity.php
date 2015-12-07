<?php

namespace Teacher\Entity;

use Common\Entity\EntityInterface;

class TeacherEntity implements EntityInterface
{
    /** @var int */
    private $id;

    /** @var int  */
    private $classroomId;

    /** @var string */
    private $username;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $email;

    /** @var string */
    private $country;

    /** @var string */
    private $state;

    /** @var string */
    private $organizationName;

    /** @var string */
    private $grade;

    /** @var string */
    private $lastModified;

    /** @var array */
    private $students = array();

    /**
     * @return bool
     */
    public function isValid()
    {
        return !!$this->id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getClassroomId()
    {
        return $this->classroomId;
    }

    /**
     * @param int $classroomId
     */
    public function setClassroomId($classroomId)
    {
        $this->classroomId = $classroomId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @return bool
     */
    public function hasStudents()
    {
        return !empty($this->students);
    }

    /**
     * @param string $lastModified
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @param array $students
     */
    public function setStudents(array $students = array())
    {
        $this->students = $students;
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }
}
