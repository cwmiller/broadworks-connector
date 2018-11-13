<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterStrandedCallGetRequest20
 *
 * Get a call center's stranded call settings.
 *         The response is either a GroupCallCenterStrandedCallGetResponse20 or an
 * ErrorResponse.
 *
 * @see GroupCallCenterStrandedCallGetResponse20
 * @see ErrorResponse
 */
class GroupCallCenterStrandedCallGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

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

