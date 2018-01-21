<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PasswordForSystemAdministrator
 *
 * Password to be generated for a System or Provisioning administrator. If the
 * administratorId is
 *         not included, or included but is not an exiting administrator for the
 *         service provider, a password will be generated
 *         based on only the rules applicable for a new user.
 */
class PasswordForSystemAdministrator
{

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

