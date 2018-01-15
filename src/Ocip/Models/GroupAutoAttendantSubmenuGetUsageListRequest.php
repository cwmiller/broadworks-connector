<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetUsageListRequest
 *
 * Get a list of Auto Attendant Business Hours Menu,After Hours Menu,Holiday Menu
 * and Submenus that use this submenu.
 *         The response is either GroupAutoAttendantSubmenuGetUsageListResponse or
 * ErrorResponse. 
 *         This request is only valid for Standard auto attendants.
 */
class GroupAutoAttendantSubmenuGetUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @var string|null
     */
    private $submenuId = null;

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

    /**
     * Getter for submenuId
     *
     * @ElementName submenuId
     * @return string|null
     */
    public function getSubmenuId()
    {
        return $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @ElementName submenuId
     * @param string|null $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }


}

