<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyGetRequest
 *
 * Request the data associated with Privacy for a service instance.
 *                 The response is either a GroupServiceInstancePrivacyGetResponse.
 *                 Replaced by: GroupServiceInstancePrivacyGetRequest17sp4
 *
 * @see GroupServiceInstancePrivacyGetResponse
 * @see GroupServiceInstancePrivacyGetRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20186","type":"sequence"}]
 */
class GroupServiceInstancePrivacyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20186
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

