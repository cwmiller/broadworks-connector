<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointQueueCallDispositionCodeGetListRequest
 *
 * Get the list of Route Point Level and Organization Level Call Disposition Codes.
 *         The response is either GroupRoutePointQueueCallDispositionCodeGetListResponse or ErrorResponse.
 *
 * @see GroupRoutePointQueueCallDispositionCodeGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"307cc214f72f448b9a7e28f218444528:1058","type":"sequence"}]
 */
class GroupRoutePointQueueCallDispositionCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 307cc214f72f448b9a7e28f218444528:1058
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

