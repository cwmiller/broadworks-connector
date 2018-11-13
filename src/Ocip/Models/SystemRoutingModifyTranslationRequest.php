<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingModifyTranslationRequest
 *
 * Request to modify a digit routing table entry in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemRoutingModifyTranslationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digits
     * @Type string
     * @var string|null
     */
    private $digits = null;

    /**
     * @ElementName routeName
     * @Type string
     * @var string|null
     */
    private $routeName = null;

    /**
     * Getter for digits
     *
     * @return string
     */
    public function getDigits()
    {
        return $this->digits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digits;
    }

    /**
     * Setter for digits
     *
     * @param string $digits
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigits()
    {
        $this->digits = null;
        return $this;
    }

    /**
     * Getter for routeName
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @param string $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteName()
    {
        $this->routeName = null;
        return $this;
    }


}

