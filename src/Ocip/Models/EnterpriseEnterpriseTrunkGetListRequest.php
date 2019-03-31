<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetListRequest
 *
 * Request to get the list of all enterprise trunks defined in an enterprise.
 *         The response is either a EnterpriseEnterpriseTrunkGetListResponse or an ErrorResponse.
 *
 * @see EnterpriseEnterpriseTrunkGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:280","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:280
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

