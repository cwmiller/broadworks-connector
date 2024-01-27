<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyGetRequest
 *
 * Request the data associated with Privacy for a service instance.
 *         The response is either a GroupServiceInstancePrivacyGetResponse.
 *         Replaced by: GroupServiceInstancePrivacyGetRequest17sp4
 *
 * @see GroupServiceInstancePrivacyGetResponse
 * @see GroupServiceInstancePrivacyGetRequest17sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:13059","type":"sequence"}]
 */
class GroupServiceInstancePrivacyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:13059
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

