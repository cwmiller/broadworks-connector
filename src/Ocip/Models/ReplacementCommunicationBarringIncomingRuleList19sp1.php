<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringIncomingRuleList19sp1
 *
 * A list of Communication Barring Incoming Rules that replaces a
 *         previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringIncomingRuleList19sp1
{

    /**
     * @ElementName rule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[]
     */
    public function getRule()
    {
        return $this->rule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rule;
    }

    /**
     * Setter for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1 $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }


}

