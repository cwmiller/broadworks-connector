<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseLocalGatewayGetUsageRequest
 *
 * Get usage details of a local gateway under an enterprise.  
 *         The response is either EnterpriseLocalGatewayGetUsageResponse or an ErrorResponse.
 *
 * @see EnterpriseLocalGatewayGetUsageResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:524","type":"sequence"}]
 */
class EnterpriseLocalGatewayGetUsageRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:524
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName trunkGroupName
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:524
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $trunkGroupName = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for trunkGroupName
     *
     * @return string
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupName;
    }

    /**
     * Setter for trunkGroupName
     *
     * @param string $trunkGroupName
     * @return $this
     */
    public function setTrunkGroupName($trunkGroupName)
    {
        $this->trunkGroupName = $trunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupName()
    {
        $this->trunkGroupName = null;
        return $this;
    }


}

