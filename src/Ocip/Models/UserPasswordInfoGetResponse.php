<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPasswordInfoGetResponse
 *
 * Response to UserPasswordInfoGetRequest.
 *          Replaced by: UserPasswordInfoGetResponse22
 *
 * @see UserPasswordInfoGetRequest
 * @see UserPasswordInfoGetResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:18514","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:18516","type":"choice"}]}]
 */
class UserPasswordInfoGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isLoginDisabled
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:18514
     * @var bool|null
     */
    protected $isLoginDisabled = null;

    /**
     * @ElementName expirationDays
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:18516
     * @var int|null
     */
    protected $expirationDays = null;

    /**
     * @ElementName doesNotExpire
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:18516
     * @var bool|null
     */
    protected $doesNotExpire = null;

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
}

