<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetRoutePointListResponse
 *
 * Response to the SystemRoutePointExternalSystemGetRoutePointListRequest.
 *
 * @see SystemRoutePointExternalSystemGetRoutePointListRequest
 */
class SystemRoutePointExternalSystemGetRoutePointListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @var string[]
     */
    private $serviceUserId = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Adder for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId($serviceUserId)
    {
        $this->serviceUserId []= $serviceUserId;
        return $this;
    }


}

