<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingAddTargetListRequest
 *
 * Add target(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:106","type":"sequence"}]
 */
class GroupGroupPagingAddTargetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 8ede928f2a9c1318573ba9c7a105655c:106
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName targetUserId
     * @Type string
     * @Array
     * @Group 8ede928f2a9c1318573ba9c7a105655c:106
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $targetUserId = [
        
    ];

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
     * Getter for targetUserId
     *
     * @return string[]
     */
    public function getTargetUserId()
    {
        return $this->targetUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->targetUserId;
    }

    /**
     * Setter for targetUserId
     *
     * @param string[] $targetUserId
     * @return $this
     */
    public function setTargetUserId(array $targetUserId)
    {
        $this->targetUserId = $targetUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTargetUserId()
    {
        $this->targetUserId = null;
        return $this;
    }

    /**
     * Adder for targetUserId
     *
     * @param string $targetUserId
     * @return $this
     */
    public function addTargetUserId(string $targetUserId)
    {
        $this->targetUserId[] = $targetUserId;
        return $this;
    }
}

