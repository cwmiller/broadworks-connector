<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForSystemAdministrator
 *
 * Password to be generated for a System or Provisioning administrator. If the administratorId is
 *         not included, or included but is not an exiting administrator for the
 *         service provider, a password will be generated
 *         based on only the rules applicable for a new user.
 *
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:821","type":"sequence"}]
 */
class PasswordForSystemAdministrator
{

    /**
     * @ElementName administratorId
     * @Type string
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:821
     * @var string|null
     */
    private $administratorId = null;

    /**
     * @ElementName generatePassword
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:821
     * @var bool|null
     */
    private $generatePassword = null;

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

