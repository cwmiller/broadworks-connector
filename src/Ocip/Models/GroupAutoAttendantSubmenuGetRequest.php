<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetRequest
 *
 * Request to get an Auto Attendant submenu instance.
 *         The response is either GroupAutoAttendantSubmenuGetResponse or ErrorResponse.
 *         This request is only valid for Standard auto attendants.
 *         
 *         Replaced by: GroupAutoAttendantSubmenuGetRequest20 in AS data mode
 *         Replaced by: GroupAutoAttendantSubmenuGetRequestXS in XS data mode
 *
 * @see GroupAutoAttendantSubmenuGetResponse
 * @see ErrorResponse
 * @see GroupAutoAttendantSubmenuGetRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:4419","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4419
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4419
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

