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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:48033","type":"sequence","children":[{"id":"d8f04177e438f303b41c211e518706bf:48035","type":"choice"}]}]
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48033
     * @var bool|null
     */
    protected $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:48035
     * @var int|null
     */
    protected $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48035
     * @var bool|null
     */
    protected $doesNotExpire = null;

    /**
     * @ElementName password
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:48033
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $password = null;

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

