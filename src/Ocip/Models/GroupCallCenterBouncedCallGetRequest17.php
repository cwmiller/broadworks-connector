<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallGetRequest17
 *
 * Get a call center's bounced call settings.
 *         The response is either a GroupCallCenterBouncedCallGetResponse17 or an
 * ErrorResponse.
 *
 * @see GroupCallCenterBouncedCallGetResponse17
 * @see ErrorResponse
 */
class GroupCallCenterBouncedCallGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

