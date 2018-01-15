<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeGetListRequest
 *
 * Get the list of Call Center Level and Organization Level Call Disposition Codes.
 *         The response is either
 * GroupCallCenterQueueCallDispositionCodeGetListResponse or ErrorResponse.
 */
class GroupCallCenterQueueCallDispositionCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

