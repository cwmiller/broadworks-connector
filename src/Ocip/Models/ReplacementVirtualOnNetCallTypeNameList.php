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
     * @var string[]
     */
    private $virtualOnNetCallTypeName = array(
        
    );

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @return string[]
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @param string[] $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }

    /**
     * Adder for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @param string $virtualOnNetCallTypeName
     * @return $this
     */
    public function addVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName []= $virtualOnNetCallTypeName;
        return $this;
    }


}

