<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPortalPasscodeGetInfoResponse
 *
 * Response to UserPortalPasscodeGetInfoRequest.
 */
class UserPortalPasscodeGetInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName passcode
     * @var string|null
     */
    private $passcode = null;

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
     * Getter for passcode
     *
     * @ElementName passcode
     * @return string|null
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @ElementName passcode
     * @param string|null $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }


}

