<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringIncomingRuleList
 *
 * A list of Communication Barring Incoming Rules that replaces a
 *         previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringIncomingRuleList
{

    /**
     * @ElementName rule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

