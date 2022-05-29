<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedGetRequest
 *
 * Request to get the Call Center Enhanced configuration data for a
 *         Call Center.
 *         The response is either GroupCallCenterEnhancedGetResponse or
 *         ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetInstanceResponse16
 *
 * @see GroupCallCenterEnhancedGetResponse
 * @see ErrorResponse
 * @see GroupCallCenterGetInstanceResponse16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4821","type":"sequence"}]
 */
class GroupCallCenterEnhancedGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4821
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

