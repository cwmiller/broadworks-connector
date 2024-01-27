<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallRecordingGetRequest
 *
 * Get the Call Recording attributes for a enterprise.
 *         The response is either a EnterpriseCallRecordingGetResponse or an ErrorResponse.
 *
 * @see EnterpriseCallRecordingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:54","type":"sequence"}]
 */
class EnterpriseCallRecordingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 0731150ec7515df8cd710f04d8f62f66:54
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

