<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuDeleteListRequest
 *
 * Delete a submenu form an auto attendant.
 *         The response is either SuccessResponse or ErrorResponse. 
 *         This request is only valid for Standard auto attendants.
 */
class GroupAutoAttendantSubmenuDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @var string[]
     */
    private $submenuId = array(
        
    );

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
     * @return string[]
     */
    public function getSubmenuId()
    {
        return $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @ElementName submenuId
     * @param string[] $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }

    /**
     * Adder for submenuId
     *
     * @ElementName submenuId
     * @param string $submenuId
     * @return $this
     */
    public function addSubmenuId($submenuId)
    {
        $this->submenuId []= $submenuId;
        return $this;
    }


}

