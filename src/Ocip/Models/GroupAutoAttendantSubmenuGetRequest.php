<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetRequest
 *
 * Request to get an Auto Attendant submenu instance.
 *         The response is either GroupAutoAttendantSubmenuGetResponse or
 * ErrorResponse.
 *         This request is only valid for Standard auto attendants.
 */
class GroupAutoAttendantSubmenuGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

