<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList
 *
 * A list of Service Provider Communication Barring Hierarchical Call Me Now Rules that replaces a previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4974","type":"sequence"}]
 */
class ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList
{
    /**
     * @ElementName rule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4974
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    protected $rule = [
        
    ];

    /**
     * Getter for rule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    public function getRule()
    {
        return $this->rule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rule;
    }

    /**
     * Setter for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[] $rule
     * @return $this
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRule()
    {
        $this->rule = null;
        return $this;
    }

    /**
     * Adder for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }
}

