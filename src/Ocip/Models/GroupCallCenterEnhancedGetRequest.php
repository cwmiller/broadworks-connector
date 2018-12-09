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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:3418","type":"sequence"}]
 */
class GroupCallCenterEnhancedGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:3418
     * @var string|null
     */
    private $serviceUserId = null;

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

