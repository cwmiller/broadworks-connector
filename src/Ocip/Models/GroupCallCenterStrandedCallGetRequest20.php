<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterStrandedCallGetRequest20
 *
 * Get a call center's stranded call settings.
 *         The response is either a GroupCallCenterStrandedCallGetResponse20 or an ErrorResponse.
 *
 * @see GroupCallCenterStrandedCallGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5790","type":"sequence"}]
 */
class GroupCallCenterStrandedCallGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:5790
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

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

