<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminAddRequest
 *
 * Add a system or provisioning administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAdminAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName firstName
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName adminType
     * @var string|null
     */
    private $adminType = null;

    /**
     * @ElementName readOnly
     * @var bool|null
     */
    private $readOnly = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @ElementName firstName
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @ElementName firstName
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @ElementName lastName
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @ElementName lastName
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Getter for adminType
     *
     * @ElementName adminType
     * @return string|null
     */
    public function getAdminType()
    {
        return $this->adminType;
    }

    /**
     * Setter for adminType
     *
     * @ElementName adminType
     * @param string|null $adminType
     * @return $this
     */
    public function setAdminType($adminType)
    {
        $this->adminType = $adminType;
        return $this;
    }

    /**
     * Getter for readOnly
     *
     * @ElementName readOnly
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Setter for readOnly
     *
     * @ElementName readOnly
     * @param bool|null $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }


}

