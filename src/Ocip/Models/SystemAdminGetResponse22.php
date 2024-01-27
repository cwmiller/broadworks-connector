<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetResponse22
 *
 * Response to the SystemAdminGetRequest22.
 *         The response contains the system or provisioning administrators profile information.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode. 
 *         accountDisabled
 *         lastAuthenticatedDate
 *
 * @see SystemAdminGetRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2201","type":"sequence"}]
 */
class SystemAdminGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName adminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemAdminType|null
     */
    protected $adminType = null;

    /**
     * @ElementName readOnly
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @ElementName accountDisabled
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @var bool|null
     */
    protected $accountDisabled = null;

    /**
     * @ElementName lastAuthenticatedDate
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2201
     * @var string|null
     */
    protected $lastAuthenticatedDate = null;

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

    /**
     * Getter for accountDisabled
     *
     * @return bool
     */
    public function getAccountDisabled()
    {
        return $this->accountDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountDisabled;
    }

    /**
     * Setter for accountDisabled
     *
     * @param bool $accountDisabled
     * @return $this
     */
    public function setAccountDisabled($accountDisabled)
    {
        $this->accountDisabled = $accountDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountDisabled()
    {
        $this->accountDisabled = null;
        return $this;
    }

    /**
     * Getter for lastAuthenticatedDate
     *
     * @return string
     */
    public function getLastAuthenticatedDate()
    {
        return $this->lastAuthenticatedDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastAuthenticatedDate;
    }

    /**
     * Setter for lastAuthenticatedDate
     *
     * @param string $lastAuthenticatedDate
     * @return $this
     */
    public function setLastAuthenticatedDate($lastAuthenticatedDate)
    {
        $this->lastAuthenticatedDate = $lastAuthenticatedDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastAuthenticatedDate()
    {
        $this->lastAuthenticatedDate = null;
        return $this;
    }
}

