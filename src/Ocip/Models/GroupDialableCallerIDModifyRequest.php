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
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3797","type":"sequence"}]
 */
class GroupDialableCallerIDModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3797
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3797
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useGroupCriteria
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3797
     * @var bool|null
     */
    private $useGroupCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3797
     * @var \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaPriorityOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3797
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    private $criteriaPriorityOrder = array(
        
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
     * Getter for useGroupCriteria
     *
     * @return bool
     */
    public function getUseGroupCriteria()
    {
        return $this->useGroupCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupCriteria;
    }

    /**
     * Setter for useGroupCriteria
     *
     * @param bool $useGroupCriteria
     * @return $this
     */
    public function setUseGroupCriteria($useGroupCriteria)
    {
        $this->useGroupCriteria = $useGroupCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupCriteria()
    {
        $this->useGroupCriteria = null;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy(\CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsScreeningFailurePolicy()
    {
        $this->nsScreeningFailurePolicy = null;
        return $this;
    }

    /**
     * Getter for criteriaPriorityOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaPriorityOrder;
    }

    /**
     * Setter for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[] $criteriaPriorityOrder
     * @return $this
     */
    public function setCriteriaPriorityOrder(array $criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaPriorityOrder()
    {
        $this->criteriaPriorityOrder = null;
        return $this;
    }

    /**
     * Adder for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     * @return $this
     */
    public function addCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder[] = $criteriaPriorityOrder;
        return $this;
    }


}

