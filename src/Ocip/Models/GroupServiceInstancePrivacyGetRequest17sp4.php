<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceInstancePrivacyGetRequest17sp4
 *
 * Request the data associated with Privacy for a service instance.
 *         The response is either a GroupServiceInstancePrivacyGetResponse17sp4
 *         or an ErrorResponse.
 *
 * @see GroupServiceInstancePrivacyGetResponse17sp4
 * @see ErrorResponse
 * @Groups [{"id":"b87b6355d5858fdbeb8c1eb05dc1651a:47","type":"sequence"}]
 */
class GroupServiceInstancePrivacyGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:47
     * @MinLength 1
     * @MaxLength 161
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

