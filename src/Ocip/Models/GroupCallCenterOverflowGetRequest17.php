<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterOverflowGetRequest17
 *
 * Get a call center's overflow settings.
 *         The response is either a GroupCallCenterOverflowGetResponse17 or an
 * ErrorResponse.
 */
class GroupCallCenterOverflowGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }


}

