<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPasswordInfoGetResponse22
 *
 * Response to UserPasswordInfoGetRequest22.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode. 
 *         hasPassword
 *
 * @see UserPasswordInfoGetRequest22
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2723","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:2725","type":"choice"}]}]
 */
class UserPasswordInfoGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2723
     * @var bool|null
     */
    protected $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2725
     * @var int|null
     */
    protected $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2725
     * @var bool|null
     */
    protected $doesNotExpire = null;

    /**
     * @ElementName hasPassword
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2723
     * @var bool|null
     */
    protected $hasPassword = null;

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
     * Getter for hasPassword
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->hasPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hasPassword;
    }

    /**
     * Setter for hasPassword
     *
     * @param bool $hasPassword
     * @return $this
     */
    public function setHasPassword($hasPassword)
    {
        $this->hasPassword = $hasPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHasPassword()
    {
        $this->hasPassword = null;
        return $this;
    }
}

