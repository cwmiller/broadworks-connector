<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetRoutePointListResponse
 *
 * Response to the SystemRoutePointExternalSystemGetRoutePointListRequest.
 *
 * @see SystemRoutePointExternalSystemGetRoutePointListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15387","type":"sequence"}]
 */
class SystemRoutePointExternalSystemGetRoutePointListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15387
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $serviceUserId = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId(array $serviceUserId)
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

    /**
     * Adder for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId(string $serviceUserId)
    {
        $this->serviceUserId[] = $serviceUserId;
        return $this;
    }
}

