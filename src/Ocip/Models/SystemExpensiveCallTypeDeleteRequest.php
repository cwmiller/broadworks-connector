<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeDeleteRequest
 *
 * Delete an alternate call indicator from the list of expensive alternate call
 * indicators.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemExpensiveCallTypeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string|null
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string|null $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }


}

