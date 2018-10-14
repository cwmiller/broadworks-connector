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
 */
class GroupGroupPagingAddTargetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName targetUserId
     * @var string[]
     */
    private $targetUserId = array(
        
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
     * Getter for targetUserId
     *
     * @ElementName targetUserId
     * @return string[]
     */
    public function getTargetUserId()
    {
        return $this->targetUserId;
    }

    /**
     * Setter for targetUserId
     *
     * @ElementName targetUserId
     * @param string[] $targetUserId
     * @return $this
     */
    public function setTargetUserId(array $targetUserId)
    {
        $this->targetUserId = $targetUserId;
        return $this;
    }

    /**
     * Adder for targetUserId
     *
     * @ElementName targetUserId
     * @param string $targetUserId
     * @return $this
     */
    public function addTargetUserId(string $targetUserId)
    {
        $this->targetUserId []= $targetUserId;
        return $this;
    }


}

