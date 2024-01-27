<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPortalPasscodeGetInfoResponse
 *
 * Response to UserPortalPasscodeGetInfoRequest.
 *
 * @see UserPortalPasscodeGetInfoRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3271","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:3273","type":"choice"}]}]
 */
class UserPortalPasscodeGetInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3271
     * @var bool|null
     */
    protected $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3273
     * @var int|null
     */
    protected $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3273
     * @var bool|null
     */
    protected $doesNotExpire = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3271
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $passcode = null;

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
     * Getter for passcode
     *
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @param string $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscode()
    {
        $this->passcode = null;
        return $this;
    }
}

