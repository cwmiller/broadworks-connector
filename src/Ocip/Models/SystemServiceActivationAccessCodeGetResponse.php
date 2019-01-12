<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceActivationAccessCodeGetResponse
 *
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 *
 * @see SystemServiceActivationAccessCodeGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:14290","type":"sequence"}]
 */
class SystemServiceActivationAccessCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14290
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName terminatingAccessCode
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14290
     * @var string|null
     */
    private $terminatingAccessCode = null;

    /**
     * @ElementName redirectingAccessCode
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14290
     * @var string|null
     */
    private $redirectingAccessCode = null;

    /**
     * @ElementName clickToDialAccessCode
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:14290
     * @var string|null
     */
    private $clickToDialAccessCode = null;

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

