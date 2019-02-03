<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringIncomingRuleList
 *
 * A list of Communication Barring Incoming Rules that replaces a
 *                 previously configured list. By convention, an element of this type
 *                 may be set nill to clear the list.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:44777","type":"sequence"}]
 */
class ReplacementCommunicationBarringIncomingRuleList
{

    /**
     * @ElementName rule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule
     * @Array
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44777
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    public function getRule()
    {
        return $this->rule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rule;
    }

    /**
     * Setter for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }


}

