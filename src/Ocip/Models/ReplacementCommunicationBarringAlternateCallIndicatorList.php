<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringAlternateCallIndicatorList
 *
 * A list of Communication Barring Alternate Call Indicator that replaces
 *         a previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3821","type":"sequence"}]
 */
class ReplacementCommunicationBarringAlternateCallIndicatorList
{

    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3821
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $alternateCallIndicator = array(
        
    );

    /**
     * Getter for alternateCallIndicator
     *
     * @return string[]
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string[] $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator(array $alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }

    /**
     * Adder for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function addAlternateCallIndicator(string $alternateCallIndicator)
    {
        $this->alternateCallIndicator[] = $alternateCallIndicator;
        return $this;
    }


}

