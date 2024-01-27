<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterBouncedCallGetRequest
 *
 * Get a call center's bounced call settings.
 *         The response is either a GroupCallCenterBouncedCallGetResponse or an ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterBouncedCallGetRequest17
 *
 * @see GroupCallCenterBouncedCallGetResponse
 * @see ErrorResponse
 * @see GroupCallCenterBouncedCallGetRequest17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:4772","type":"sequence"}]
 */
class GroupCallCenterBouncedCallGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4772
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

