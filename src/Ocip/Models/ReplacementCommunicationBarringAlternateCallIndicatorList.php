<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringAlternateCallIndicatorList
 *
 * A list of Communication Barring Alternate Call Indicator that replaces
 *         a previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringAlternateCallIndicatorList
{

    /**
     * @ElementName alternateCallIndicator
     * @var string[]
     */
    private $alternateCallIndicator = array(
        
    );

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string[]
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string[] $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator(array $alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * Adder for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function addAlternateCallIndicator(string $alternateCallIndicator)
    {
        $this->alternateCallIndicator []= $alternateCallIndicator;
        return $this;
    }


}

