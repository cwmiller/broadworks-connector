<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberRangeUnassignListRequest
 *
 * Unassign a list of service provider number ranges from a group. The number ranges then become available for assignment to other groups.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6c3e6c5ded8862d72e92e5d067442775:413","type":"sequence"}]
 */
class GroupRouteListEnterpriseTrunkNumberRangeUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6c3e6c5ded8862d72e92e5d067442775:413
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6c3e6c5ded8862d72e92e5d067442775:413
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName numberRangeStart
     * @Type string
     * @Array
     * @Optional
     * @Group 6c3e6c5ded8862d72e92e5d067442775:413
     * @var string[]
     */
    private $numberRangeStart = array(
        
    );

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
     * Getter for numberRangeStart
     *
     * @return string[]
     */
    public function getNumberRangeStart()
    {
        return $this->numberRangeStart instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRangeStart;
    }

    /**
     * Setter for numberRangeStart
     *
     * @param string[] $numberRangeStart
     * @return $this
     */
    public function setNumberRangeStart(array $numberRangeStart)
    {
        $this->numberRangeStart = $numberRangeStart;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberRangeStart()
    {
        $this->numberRangeStart = null;
        return $this;
    }

    /**
     * Adder for numberRangeStart
     *
     * @param string $numberRangeStart
     * @return $this
     */
    public function addNumberRangeStart(string $numberRangeStart)
    {
        $this->numberRangeStart[] = $numberRangeStart;
        return $this;
    }


}

