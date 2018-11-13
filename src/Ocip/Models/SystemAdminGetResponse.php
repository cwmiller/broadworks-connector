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
     * @Type string
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName adminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null
     */
    private $adminType = null;

    /**
     * @ElementName readOnly
     * @Type bool
     * @var bool|null
     */
    private $readOnly = null;

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Getter for adminType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType
     */
    public function getAdminType()
    {
        return $this->adminType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminType;
    }

    /**
     * Setter for adminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType $adminType
     * @return $this
     */
    public function setAdminType(\CWM\BroadWorksConnector\Ocip\Models\SystemAdminType $adminType)
    {
        $this->adminType = $adminType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdminType()
    {
        $this->adminType = null;
        return $this;
    }

    /**
     * Getter for readOnly
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->readOnly;
    }

    /**
     * Setter for readOnly
     *
     * @param bool $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReadOnly()
    {
        $this->readOnly = null;
        return $this;
    }


}

