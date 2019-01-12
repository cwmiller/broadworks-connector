<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetListRequest
 *
 * Get a list of Auto Attendant Submenus.
 *         The response is either GroupAutoAttendantSubmenuGetListResponse or ErrorResponse. 
 *         This request is only valid for Standard auto attendants.
 *
 * @see GroupAutoAttendantSubmenuGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:481","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:481
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

