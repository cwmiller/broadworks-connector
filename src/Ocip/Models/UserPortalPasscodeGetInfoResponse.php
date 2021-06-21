<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPortalPasscodeGetInfoResponse
 *
 * Response to UserPortalPasscodeGetInfoRequest.
 *
 * @see UserPortalPasscodeGetInfoRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3265","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:3267","type":"choice"}]}]
 */
class UserPortalPasscodeGetInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3265
     * @var bool|null
     */
    private $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3267
     * @var int|null
     */
    private $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3267
     * @var bool|null
     */
    private $doesNotExpire = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3265
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $passcode = null;

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

