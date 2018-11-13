<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementVirtualOnNetCallTypeNameList
 *
 * A list of Virtual On-Net Call Types that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 */
class ReplacementVirtualOnNetCallTypeNameList
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Array
     * @var string[]
     */
    private $virtualOnNetCallTypeName = array(
        
    );

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @return string[]
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @param string[] $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName(array $virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallTypeName()
    {
        $this->virtualOnNetCallTypeName = null;
        return $this;
    }

    /**
     * Adder for virtualOnNetCallTypeName
     *
     * @param string $virtualOnNetCallTypeName
     * @return $this
     */
    public function addVirtualOnNetCallTypeName(string $virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName[] = $virtualOnNetCallTypeName;
        return $this;
    }


}

