<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse
 *
 * Response to UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest.
 *         Replaced By: UserPortalPasscodeGetInfoResponse
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isLoginDisabled
     * @var bool|null
     */
    private $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @var int|null
     */
    private $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @var bool|null
     */
    private $doesNotExpire = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * Getter for isLoginDisabled
     *
     * @ElementName isLoginDisabled
     * @return bool|null
     */
    public function getIsLoginDisabled()
    {
        return $this->isLoginDisabled;
    }

    /**
     * Setter for isLoginDisabled
     *
     * @ElementName isLoginDisabled
     * @param bool|null $isLoginDisabled
     * @return $this
     */
    public function setIsLoginDisabled($isLoginDisabled)
    {
        $this->isLoginDisabled = $isLoginDisabled;
        return $this;
    }

    /**
     * Getter for expirationDays
     *
     * @ElementName expirationDays
     * @return int|null
     */
    public function getExpirationDays()
    {
        return $this->expirationDays;
    }

    /**
     * Setter for expirationDays
     *
     * @ElementName expirationDays
     * @param int|null $expirationDays
     * @return $this
     */
    public function setExpirationDays($expirationDays)
    {
        $this->expirationDays = $expirationDays;
        return $this;
    }

    /**
     * Getter for doesNotExpire
     *
     * @ElementName doesNotExpire
     * @return bool|null
     */
    public function getDoesNotExpire()
    {
        return $this->doesNotExpire;
    }

    /**
     * Setter for doesNotExpire
     *
     * @ElementName doesNotExpire
     * @param bool|null $doesNotExpire
     * @return $this
     */
    public function setDoesNotExpire($doesNotExpire)
    {
        $this->doesNotExpire = $doesNotExpire;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

