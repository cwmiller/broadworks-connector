<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterGetRequest
 *
 * Request the enterprise level data associated with Call Center.
 *         The response is either an EnterpriseCallCenterGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by EnterpriseCallCenterGetRequest17sp4.
 *
 * @see EnterpriseCallCenterGetResponse
 * @see ErrorResponse
 * @see EnterpriseCallCenterGetRequest17sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2253","type":"sequence"}]
 */
class EnterpriseCallCenterGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:2253
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

