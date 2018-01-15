<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallGetRequest
 *
 * Get a call center's bounced call settings.
 *         The response is either a GroupCallCenterBouncedCallGetResponse or an
 * ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterBouncedCallGetRequest17
 */
class GroupCallCenterBouncedCallGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

