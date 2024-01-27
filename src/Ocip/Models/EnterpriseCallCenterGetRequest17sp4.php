<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterGetRequest17sp4
 *
 * Request the enterprise level data associated with Call Center.
 *         The response is either an EnterpriseCallCenterGetResponse17sp4 or an
 *         ErrorResponse.
 *         
 *         Replaced by: EnterpriseCallCenterGetResponse23 in AS data mode
 *
 * @see EnterpriseCallCenterGetResponse17sp4
 * @see ErrorResponse
 * @see EnterpriseCallCenterGetResponse23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:438","type":"sequence"}]
 */
class EnterpriseCallCenterGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:438
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

