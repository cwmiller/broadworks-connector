<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialableCallerIDModifyRequest
 *
 * Modify the service provider?s Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useServiceProviderCriteria
     * @var bool|null
     */
    private $useServiceProviderCriteria = null;

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
     * Getter for useServiceProviderCriteria
     *
     * @ElementName useServiceProviderCriteria
     * @return bool|null
     */
    public function getUseServiceProviderCriteria()
    {
        return $this->useServiceProviderCriteria;
    }

    /**
     * Setter for useServiceProviderCriteria
     *
     * @ElementName useServiceProviderCriteria
     * @param bool|null $useServiceProviderCriteria
     * @return $this
     */
    public function setUseServiceProviderCriteria($useServiceProviderCriteria)
    {
        $this->useServiceProviderCriteria = $useServiceProviderCriteria;
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

