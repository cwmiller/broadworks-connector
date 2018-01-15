<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceActivationAccessCodeGetResponse
 *
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 */
class SystemServiceActivationAccessCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName terminatingAccessCode
     * @var string|null
     */
    private $terminatingAccessCode = null;

    /**
     * @ElementName redirectingAccessCode
     * @var string|null
     */
    private $redirectingAccessCode = null;

    /**
     * @ElementName clickToDialAccessCode
     * @var string|null
     */
    private $clickToDialAccessCode = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for terminatingAccessCode
     *
     * @ElementName terminatingAccessCode
     * @return string|null
     */
    public function getTerminatingAccessCode()
    {
        return $this->terminatingAccessCode;
    }

    /**
     * Setter for terminatingAccessCode
     *
     * @ElementName terminatingAccessCode
     * @param string|null $terminatingAccessCode
     * @return $this
     */
    public function setTerminatingAccessCode($terminatingAccessCode)
    {
        $this->terminatingAccessCode = $terminatingAccessCode;
        return $this;
    }

    /**
     * Getter for redirectingAccessCode
     *
     * @ElementName redirectingAccessCode
     * @return string|null
     */
    public function getRedirectingAccessCode()
    {
        return $this->redirectingAccessCode;
    }

    /**
     * Setter for redirectingAccessCode
     *
     * @ElementName redirectingAccessCode
     * @param string|null $redirectingAccessCode
     * @return $this
     */
    public function setRedirectingAccessCode($redirectingAccessCode)
    {
        $this->redirectingAccessCode = $redirectingAccessCode;
        return $this;
    }

    /**
     * Getter for clickToDialAccessCode
     *
     * @ElementName clickToDialAccessCode
     * @return string|null
     */
    public function getClickToDialAccessCode()
    {
        return $this->clickToDialAccessCode;
    }

    /**
     * Setter for clickToDialAccessCode
     *
     * @ElementName clickToDialAccessCode
     * @param string|null $clickToDialAccessCode
     * @return $this
     */
    public function setClickToDialAccessCode($clickToDialAccessCode)
    {
        $this->clickToDialAccessCode = $clickToDialAccessCode;
        return $this;
    }


}

