<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceActivationAccessCodeGetResponse
 *
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 *
 * @see SystemServiceActivationAccessCodeGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16201","type":"sequence"}]
 */
class SystemServiceActivationAccessCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16201
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName terminatingAccessCode
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16201
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $terminatingAccessCode = null;

    /**
     * @ElementName redirectingAccessCode
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16201
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $redirectingAccessCode = null;

    /**
     * @ElementName clickToDialAccessCode
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16201
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $clickToDialAccessCode = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for terminatingAccessCode
     *
     * @return string
     */
    public function getTerminatingAccessCode()
    {
        return $this->terminatingAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingAccessCode;
    }

    /**
     * Setter for terminatingAccessCode
     *
     * @param string $terminatingAccessCode
     * @return $this
     */
    public function setTerminatingAccessCode($terminatingAccessCode)
    {
        $this->terminatingAccessCode = $terminatingAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatingAccessCode()
    {
        $this->terminatingAccessCode = null;
        return $this;
    }

    /**
     * Getter for redirectingAccessCode
     *
     * @return string
     */
    public function getRedirectingAccessCode()
    {
        return $this->redirectingAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingAccessCode;
    }

    /**
     * Setter for redirectingAccessCode
     *
     * @param string $redirectingAccessCode
     * @return $this
     */
    public function setRedirectingAccessCode($redirectingAccessCode)
    {
        $this->redirectingAccessCode = $redirectingAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingAccessCode()
    {
        $this->redirectingAccessCode = null;
        return $this;
    }

    /**
     * Getter for clickToDialAccessCode
     *
     * @return string
     */
    public function getClickToDialAccessCode()
    {
        return $this->clickToDialAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clickToDialAccessCode;
    }

    /**
     * Setter for clickToDialAccessCode
     *
     * @param string $clickToDialAccessCode
     * @return $this
     */
    public function setClickToDialAccessCode($clickToDialAccessCode)
    {
        $this->clickToDialAccessCode = $clickToDialAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClickToDialAccessCode()
    {
        $this->clickToDialAccessCode = null;
        return $this;
    }
}

