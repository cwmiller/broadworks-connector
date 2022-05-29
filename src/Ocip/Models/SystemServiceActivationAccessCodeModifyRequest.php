<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceActivationAccessCodeModifyRequest
 *
 * Request to modify Service Activation Access Code system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16004","type":"sequence"}]
 */
class SystemServiceActivationAccessCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16004
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName terminatingAccessCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16004
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $terminatingAccessCode = null;

    /**
     * @ElementName redirectingAccessCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16004
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $redirectingAccessCode = null;

    /**
     * @ElementName clickToDialAccessCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16004
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getTerminatingAccessCode()
    {
        return $this->terminatingAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingAccessCode;
    }

    /**
     * Setter for terminatingAccessCode
     *
     * @param string|null $terminatingAccessCode
     * @return $this
     */
    public function setTerminatingAccessCode($terminatingAccessCode = null)
    {
        if ($terminatingAccessCode === null) {
            $this->terminatingAccessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->terminatingAccessCode = $terminatingAccessCode;
        }
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
     * @return string|null
     */
    public function getRedirectingAccessCode()
    {
        return $this->redirectingAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingAccessCode;
    }

    /**
     * Setter for redirectingAccessCode
     *
     * @param string|null $redirectingAccessCode
     * @return $this
     */
    public function setRedirectingAccessCode($redirectingAccessCode = null)
    {
        if ($redirectingAccessCode === null) {
            $this->redirectingAccessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->redirectingAccessCode = $redirectingAccessCode;
        }
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
     * @return string|null
     */
    public function getClickToDialAccessCode()
    {
        return $this->clickToDialAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clickToDialAccessCode;
    }

    /**
     * Setter for clickToDialAccessCode
     *
     * @param string|null $clickToDialAccessCode
     * @return $this
     */
    public function setClickToDialAccessCode($clickToDialAccessCode = null)
    {
        if ($clickToDialAccessCode === null) {
            $this->clickToDialAccessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->clickToDialAccessCode = $clickToDialAccessCode;
        }
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

