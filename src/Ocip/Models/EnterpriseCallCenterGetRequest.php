<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterGetRequest
 *
 * Request the enterprise level data associated with Call Center.
 *                 The response is either an EnterpriseCallCenterGetResponse or an
 *                 ErrorResponse.
 *
 *                 Replaced by EnterpriseCallCenterGetRequest17sp4.
 *
 * @see EnterpriseCallCenterGetResponse
 * @see ErrorResponse
 * @see EnterpriseCallCenterGetRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:24230","type":"sequence"}]
 */
class EnterpriseCallCenterGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24230
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

