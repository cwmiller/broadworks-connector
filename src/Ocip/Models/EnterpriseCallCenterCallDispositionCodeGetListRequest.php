<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeGetListRequest
 *
 * Get the list of Call Center Call Disposition Codes.
 *         The response is either EnterpriseCallCenterCallDispositionCodeGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterCallDispositionCodeGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:808","type":"sequence"}]
 */
class EnterpriseCallCenterCallDispositionCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:808
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

