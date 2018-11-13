<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse
 *
 * Response to UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest.
 *         Replaced By: UserPortalPasscodeGetInfoResponse
 *
 * @see UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest
 * @see UserPortalPasscodeGetInfoResponse
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @var bool|null
     */
    private $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @var int|null
     */
    private $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @var bool|null
     */
    private $doesNotExpire = null;

    /**
     * @ElementName password
     * @Type string
     * @var string|null
     */
    private $password = null;

    /**
     * Getter for isLoginDisabled
     *
     * @return bool
     */
    public function getIsLoginDisabled()
    {
        return $this->isLoginDisabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isLoginDisabled;
    }

    /**
     * Setter for isLoginDisabled
     *
     * @param bool $isLoginDisabled
     * @return $this
     */
    public function setIsLoginDisabled($isLoginDisabled)
    {
        $this->isLoginDisabled = $isLoginDisabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsLoginDisabled()
    {
        $this->isLoginDisabled = null;
        return $this;
    }

    /**
     * Getter for expirationDays
     *
     * @return int
     */
    public function getExpirationDays()
    {
        return $this->expirationDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expirationDays;
    }

    /**
     * Setter for expirationDays
     *
     * @param int $expirationDays
     * @return $this
     */
    public function setExpirationDays($expirationDays)
    {
        $this->expirationDays = $expirationDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpirationDays()
    {
        $this->expirationDays = null;
        return $this;
    }

    /**
     * Getter for doesNotExpire
     *
     * @return bool
     */
    public function getDoesNotExpire()
    {
        return $this->doesNotExpire instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doesNotExpire;
    }

    /**
     * Setter for doesNotExpire
     *
     * @param bool $doesNotExpire
     * @return $this
     */
    public function setDoesNotExpire($doesNotExpire)
    {
        $this->doesNotExpire = $doesNotExpire;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoesNotExpire()
    {
        $this->doesNotExpire = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }


}

