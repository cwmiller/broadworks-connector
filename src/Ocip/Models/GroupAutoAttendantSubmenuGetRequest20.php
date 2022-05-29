<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetRequest20
 *
 * Request to get an Auto Attendant submenu instance.
 *         The response is either GroupAutoAttendantSubmenuGetResponse20 or ErrorResponse.
 *         This request is only valid for Standard auto attendants.
 *
 * @see GroupAutoAttendantSubmenuGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:516","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:516
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @Type string
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:516
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $submenuId = null;

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

