<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForServiceProviderAdministrator
 *
 * Password to be generated for a service provider administrator. If the
 * administratorId is not included, 
 *         or included but is not an exiting administrator for the service
 * provider, a password will be generated
 *         based on only the rules applicable for a new user.
 */
class PasswordForServiceProviderAdministrator
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName administratorId
     * @var string|null
     */
    private $administratorId = null;

    /**
     * @ElementName generatePassword
     * @var bool|null
     */
    private $generatePassword = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for administratorId
     *
     * @ElementName administratorId
     * @return string|null
     */
    public function getAdministratorId()
    {
        return $this->administratorId;
    }

    /**
     * Setter for administratorId
     *
     * @ElementName administratorId
     * @param string|null $administratorId
     * @return $this
     */
    public function setAdministratorId($administratorId)
    {
        $this->administratorId = $administratorId;
        return $this;
    }

    /**
     * Getter for generatePassword
     *
     * @ElementName generatePassword
     * @return bool|null
     */
    public function getGeneratePassword()
    {
        return $this->generatePassword;
    }

    /**
     * Setter for generatePassword
     *
     * @ElementName generatePassword
     * @param bool|null $generatePassword
     * @return $this
     */
    public function setGeneratePassword($generatePassword)
    {
        $this->generatePassword = $generatePassword;
        return $this;
    }


}

