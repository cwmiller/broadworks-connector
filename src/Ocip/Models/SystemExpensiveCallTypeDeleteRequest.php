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
     * @Type string
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @return string
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }


}

