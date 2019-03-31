<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForServiceProviderAdministrator
 *
 * Password to be generated for a service provider administrator. If the administratorId is not included, 
 *         or included but is not an exiting administrator for the service provider, a password will be generated
 *         based on only the rules applicable for a new user.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:805","type":"sequence"}]
 */
class PasswordForServiceProviderAdministrator
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:805
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName administratorId
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:805
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $administratorId = null;

    /**
     * @ElementName generatePassword
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:805
     * @var bool|null
     */
    private $generatePassword = null;

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
     * Getter for administratorId
     *
     * @return string
     */
    public function getAdministratorId()
    {
        return $this->administratorId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->administratorId;
    }

    /**
     * Setter for administratorId
     *
     * @param string $administratorId
     * @return $this
     */
    public function setAdministratorId($administratorId)
    {
        $this->administratorId = $administratorId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdministratorId()
    {
        $this->administratorId = null;
        return $this;
    }

    /**
     * Getter for generatePassword
     *
     * @return bool
     */
    public function getGeneratePassword()
    {
        return $this->generatePassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generatePassword;
    }

    /**
     * Setter for generatePassword
     *
     * @param bool $generatePassword
     * @return $this
     */
    public function setGeneratePassword($generatePassword)
    {
        $this->generatePassword = $generatePassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeneratePassword()
    {
        $this->generatePassword = null;
        return $this;
    }


}

