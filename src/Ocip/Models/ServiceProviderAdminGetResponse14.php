<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetResponse14
 *
 * Response to the ServiceProviderAdminGetRequest14.
 *         The response contains the service provider administrators profile information.
 *         Replaced by ServiceProviderAdminGetResponse21sp1.
 *
 * @see ServiceProviderAdminGetRequest14
 * @see ServiceProviderAdminGetResponse21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6075","type":"sequence"}]
 */
class ServiceProviderAdminGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6075
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6075
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:6075
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName language
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6075
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName administratorType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType
     * @Group 240b50f54d060859e5e275082fdf49f9:6075
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminType|null
     */
    protected $administratorType = null;

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
}

