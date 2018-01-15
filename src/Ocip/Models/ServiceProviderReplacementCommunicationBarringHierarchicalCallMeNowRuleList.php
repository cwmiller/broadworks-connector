<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList
 *
 * A list of Service Provider Communication Barring Hierarchical Call Me Now Rules
 * that replaces a previously configured list. By convention, an element of this
 * type 
 *         may be set nill to clear the list.
 */
class ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList
{

    /**
     * @ElementName rule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[] $rule
     * @return $this
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Adder for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

