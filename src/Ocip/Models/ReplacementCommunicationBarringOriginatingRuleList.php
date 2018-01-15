<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringOriginatingRuleList
 *
 * A list of Communication Barring Originating Rules that replaces a
 *         previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringOriginatingRuleList
{

    /**
     * @ElementName rule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

