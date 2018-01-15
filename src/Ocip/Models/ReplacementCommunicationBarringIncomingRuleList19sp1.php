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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule19sp1 $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

