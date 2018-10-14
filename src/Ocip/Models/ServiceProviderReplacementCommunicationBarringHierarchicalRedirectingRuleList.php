<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList
 *
 * A list of Service Provider Communication Barring Hierarchical Redirecting Rules
 * that replaces a previously configured list. By convention, an element of this
 * type 
 *         may be set nill to clear the list.
 */
class ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList
{

    /**
     * @ElementName rule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[] $rule
     * @return $this
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Adder for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

