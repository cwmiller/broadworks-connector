<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupListRequest
 *
 * Get a list of Find-me/Follow-me alerting groups within a group.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupListResponse or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"c81ec650475acb5cc7b075c4582c12ba:220","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group c81ec650475acb5cc7b075c4582c12ba:220
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

