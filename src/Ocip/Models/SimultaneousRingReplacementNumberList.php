<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SimultaneousRingReplacementNumberList
 *
 * A list of Simultaneous Ring numbers that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3801","type":"sequence"}]
 */
class SimultaneousRingReplacementNumberList
{

    /**
     * @ElementName simultaneousRingNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3801
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    private $simultaneousRingNumber = array(
        
    );

    /**
     * Getter for simultaneousRingNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    public function getSimultaneousRingNumber()
    {
        return $this->simultaneousRingNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simultaneousRingNumber;
    }

    /**
     * Setter for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[] $simultaneousRingNumber
     * @return $this
     */
    public function setSimultaneousRingNumber(array $simultaneousRingNumber)
    {
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimultaneousRingNumber()
    {
        $this->simultaneousRingNumber = null;
        return $this;
    }

    /**
     * Adder for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber $simultaneousRingNumber
     * @return $this
     */
    public function addSimultaneousRingNumber($simultaneousRingNumber)
    {
        $this->simultaneousRingNumber[] = $simultaneousRingNumber;
        return $this;
    }


}

