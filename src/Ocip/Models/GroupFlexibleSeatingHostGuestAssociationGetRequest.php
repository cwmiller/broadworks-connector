<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGuestAssociationGetRequest
 *
 * Request the flexible seating host guest association details.
 *         The response is either a GroupFlexibleSeatingHostGuestAssociationGetResponse or an ErrorResponse.
 * accessLevel is always set to Group for a Service Provider
 *
 * @see GroupFlexibleSeatingHostGuestAssociationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:275","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGuestAssociationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 43afb2158d313a1d1a148124d7caba1e:275
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

