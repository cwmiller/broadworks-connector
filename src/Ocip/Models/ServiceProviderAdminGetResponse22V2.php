<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetResponse22V2
 *
 * Response to the ServiceProviderAdminGetRequest22V2.
 *         The response contains the service provider administrators profile information.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode. 
 *         accountDisabled
 *         lastAuthenticatedDate
 *         Replaced by: ServiceProviderAdminGetResponse22V3
 *
 * @see ServiceProviderAdminGetRequest22V2
 * @see ServiceProviderAdminGetResponse22V3
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6146","type":"sequence"}]
 */
class ServiceProviderAdminGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName administratorType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    protected $administratorType = null;

    /**
     * @ElementName locale
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MaxLength 20
     * @var string|null
     */
    protected $locale = null;

    /**
     * @ElementName encoding
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $encoding = null;

    /**
     * @ElementName accountDisabled
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @var bool|null
     */
    protected $accountDisabled = null;

    /**
     * @ElementName lastAuthenticatedDate
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6146
     * @var string|null
     */
    protected $lastAuthenticatedDate = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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
     * Getter for administratorType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     */
    public function getAdministratorType()
    {
        return $this->administratorType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->administratorType;
    }

    /**
     * Setter for administratorType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $administratorType
     * @return $this
     */
    public function setAdministratorType(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType $administratorType)
    {
        $this->administratorType = $administratorType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdministratorType()
    {
        $this->administratorType = null;
        return $this;
    }

    /**
     * Getter for locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locale;
    }

    /**
     * Setter for locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocale()
    {
        $this->locale = null;
        return $this;
    }

    /**
     * Getter for encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->encoding;
    }

    /**
     * Setter for encoding
     *
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEncoding()
    {
        $this->encoding = null;
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

