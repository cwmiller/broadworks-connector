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
     * @Type string
     * @Array
     * @var string[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @return string[]
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param string[] $callType
     * @return $this
     */
    public function setCallType(array $callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallType()
    {
        $this->callType = null;
        return $this;
    }

    /**
     * Adder for callType
     *
     * @param string $callType
     * @return $this
     */
    public function addCallType(string $callType)
    {
        $this->callType[] = $callType;
        return $this;
    }


}

