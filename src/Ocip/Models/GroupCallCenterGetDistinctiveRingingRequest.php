<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDistinctiveRingingRequest
 *
 * Get the distinctive ringing configuration values for call center.
 *         The response is either a GroupCallCenterGetDistinctiveRingingResponse 
 *         or an ErrorResponse.
 */
class GroupCallCenterGetDistinctiveRingingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

