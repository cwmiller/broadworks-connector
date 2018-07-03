<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingAddTranslationRequest
 *
 * Request to add a digit routing table entry to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemRoutingAddTranslationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digits
     * @var string|null
     */
    private $digits = null;

    /**
     * @ElementName routeName
     * @var string|null
     */
    private $routeName = null;

    /**
     * Getter for digits
     *
     * @ElementName digits
     * @return string|null
     */
    public function getDigits()
    {
        return $this->digits;
    }

    /**
     * Setter for digits
     *
     * @ElementName digits
     * @param string|null $digits
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * Getter for routeName
     *
     * @ElementName routeName
     * @return string|null
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @ElementName routeName
     * @param string|null $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }


}

