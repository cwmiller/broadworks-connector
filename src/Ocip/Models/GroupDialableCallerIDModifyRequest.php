<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialableCallerIDModifyRequest
 *
 * Modify the group's Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupDialableCallerIDModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useGroupCriteria
     * @var bool|null
     */
    private $useGroupCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @var string|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaPriorityOrder
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    private $criteriaPriorityOrder = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useGroupCriteria
     *
     * @ElementName useGroupCriteria
     * @return bool|null
     */
    public function getUseGroupCriteria()
    {
        return $this->useGroupCriteria;
    }

    /**
     * Setter for useGroupCriteria
     *
     * @ElementName useGroupCriteria
     * @param bool|null $useGroupCriteria
     * @return $this
     */
    public function setUseGroupCriteria($useGroupCriteria)
    {
        $this->useGroupCriteria = $useGroupCriteria;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @return string|null
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @param string|null $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

    /**
     * Getter for criteriaPriorityOrder
     *
     * @ElementName criteriaPriorityOrder
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }

    /**
     * Setter for criteriaPriorityOrder
     *
     * @ElementName criteriaPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[] $criteriaPriorityOrder
     * @return $this
     */
    public function setCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        return $this;
    }

    /**
     * Adder for criteriaPriorityOrder
     *
     * @ElementName criteriaPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     * @return $this
     */
    public function addCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder []= $criteriaPriorityOrder;
        return $this;
    }


}

