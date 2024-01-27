<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseLocalGatewayGetUsageResponse
 *
 * Response to EnterpriseLocalGatewayGetUsageRequest.
 *         Returns the group ID and group name where the local gateway belongs to, a boolean value to indicate if the local gateway is 
 *         used in the enterprise call processing policy.
 *         It also returns an OCITable containing the groups using the given local gateway. 
 *         Column headings are: "Group Id", "Group Name" and "Group External Id".  
 *         The following columns are only populated in AS data mode
 *         "Group External Id"
 *
 * @see EnterpriseLocalGatewayGetUsageRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:545","type":"sequence"}]
 */
class EnterpriseLocalGatewayGetUsageResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName gatewayGroupId
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:545
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $gatewayGroupId = null;

    /**
     * @ElementName gatewayGroupName
     * @Type string
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:545
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $gatewayGroupName = null;

    /**
     * @ElementName usedByEnterprise
     * @Type bool
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:545
     * @var bool|null
     */
    protected $usedByEnterprise = null;

    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:545
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupTable = null;

    /**
     * Getter for gatewayGroupId
     *
     * @return string
     */
    public function getGatewayGroupId()
    {
        return $this->gatewayGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->gatewayGroupId;
    }

    /**
     * Setter for gatewayGroupId
     *
     * @param string $gatewayGroupId
     * @return $this
     */
    public function setGatewayGroupId($gatewayGroupId)
    {
        $this->gatewayGroupId = $gatewayGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGatewayGroupId()
    {
        $this->gatewayGroupId = null;
        return $this;
    }

    /**
     * Getter for gatewayGroupName
     *
     * @return string
     */
    public function getGatewayGroupName()
    {
        return $this->gatewayGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->gatewayGroupName;
    }

    /**
     * Setter for gatewayGroupName
     *
     * @param string $gatewayGroupName
     * @return $this
     */
    public function setGatewayGroupName($gatewayGroupName)
    {
        $this->gatewayGroupName = $gatewayGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGatewayGroupName()
    {
        $this->gatewayGroupName = null;
        return $this;
    }

    /**
     * Getter for usedByEnterprise
     *
     * @return bool
     */
    public function getUsedByEnterprise()
    {
        return $this->usedByEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usedByEnterprise;
    }

    /**
     * Setter for usedByEnterprise
     *
     * @param bool $usedByEnterprise
     * @return $this
     */
    public function setUsedByEnterprise($usedByEnterprise)
    {
        $this->usedByEnterprise = $usedByEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsedByEnterprise()
    {
        $this->usedByEnterprise = null;
        return $this;
    }

    /**
     * Getter for groupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupTable()
    {
        $this->groupTable = null;
        return $this;
    }
}

