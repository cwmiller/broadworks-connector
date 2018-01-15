<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringCallTypeList
 *
 * A list of Communication Barring Call Types that replaces a previously
 *         configured list. By convention, an element of this type may be set 
 *         nill to clear the list.
 */
class ReplacementCommunicationBarringCallTypeList
{

    /**
     * @ElementName callType
     * @var string[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return string[]
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param string[] $callType
     * @return $this
     */
    public function setCallType($callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * Adder for callType
     *
     * @ElementName callType
     * @param string $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType []= $callType;
        return $this;
    }


}

