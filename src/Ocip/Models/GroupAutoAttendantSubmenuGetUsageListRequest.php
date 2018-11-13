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
 *
 * @see GroupAutoAttendantSubmenuGetUsageListResponse
 * @see ErrorResponse
 */
class GroupAutoAttendantSubmenuGetUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @Type string
     * @var string|null
     */
    private $submenuId = null;

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

    /**
     * Getter for submenuId
     *
     * @return string
     */
    public function getSubmenuId()
    {
        return $this->submenuId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @param string $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubmenuId()
    {
        $this->submenuId = null;
        return $this;
    }


}

