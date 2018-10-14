<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetResponse
 *
 * Response to the SystemAdminGetRequest.
 *         The response contains the system or provisioning administrators profile
 * information.
 *
 * @see SystemAdminGetRequest
 */
class SystemAdminGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName adminType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null
     */
    private $adminType = null;

    /**
     * @ElementName readOnly
     * @var bool|null
     */
    private $readOnly = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null
     */
    public function getAdminType()
    {
        return $this->adminType;
    }

    /**
     * Setter for adminType
     *
     * @ElementName adminType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null $adminType
     * @return $this
     */
    public function setAdminType(\CWM\BroadWorksConnector\Ocip\Models\SystemAdminType $adminType)
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

