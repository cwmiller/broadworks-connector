<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuDeleteListRequest
 *
 * Delete a submenu form an auto attendant.
 *         The response is either SuccessResponse or ErrorResponse. 
 *         This request is only valid for Standard auto attendants.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"481f6171444d5c316baa2066a7396d29:397","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 481f6171444d5c316baa2066a7396d29:397
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName submenuId
     * @Type string
     * @Array
     * @Group 481f6171444d5c316baa2066a7396d29:397
     * @var string[]
     */
    private $submenuId = array(
        
    );

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
     * @return string[]
     */
    public function getSubmenuId()
    {
        return $this->submenuId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @param string[] $submenuId
     * @return $this
     */
    public function setSubmenuId(array $submenuId)
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

    /**
     * Adder for submenuId
     *
     * @param string $submenuId
     * @return $this
     */
    public function addSubmenuId(string $submenuId)
    {
        $this->submenuId[] = $submenuId;
        return $this;
    }


}

