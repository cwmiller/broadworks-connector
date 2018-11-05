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
 */
class SystemServiceActivationAccessCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName terminatingAccessCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $terminatingAccessCode = null;

    /**
     * @ElementName redirectingAccessCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $redirectingAccessCode = null;

    /**
     * @ElementName clickToDialAccessCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTerminatingAccessCode()
    {
        return $this->terminatingAccessCode;
    }

    /**
     * Setter for terminatingAccessCode
     *
     * @ElementName terminatingAccessCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $terminatingAccessCode
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRedirectingAccessCode()
    {
        return $this->redirectingAccessCode;
    }

    /**
     * Setter for redirectingAccessCode
     *
     * @ElementName redirectingAccessCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $redirectingAccessCode
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getClickToDialAccessCode()
    {
        return $this->clickToDialAccessCode;
    }

    /**
     * Setter for clickToDialAccessCode
     *
     * @ElementName clickToDialAccessCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $clickToDialAccessCode
     * @return $this
     */
    public function setClickToDialAccessCode($clickToDialAccessCode)
    {
        $this->clickToDialAccessCode = $clickToDialAccessCode;
        return $this;
    }


}

