<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetStatusListRequest
 *
 * Validates DNs given in the request  
 *         The response is GroupDnGetStatusListResponse.
 *
 * @see GroupDnGetStatusListResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5049","type":"sequence"}]
 */
class GroupDnGetStatusListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5049
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5049
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName dn
     * @Type string
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:5049
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $dn = [
        
    ];

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for dn
     *
     * @return string[]
     */
    public function getDn()
    {
        return $this->dn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dn;
    }

    /**
     * Setter for dn
     *
     * @param string[] $dn
     * @return $this
     */
    public function setDn(array $dn)
    {
        $this->dn = $dn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDn()
    {
        $this->dn = null;
        return $this;
    }

    /**
     * Adder for dn
     *
     * @param string $dn
     * @return $this
     */
    public function addDn(string $dn)
    {
        $this->dn[] = $dn;
        return $this;
    }
}

