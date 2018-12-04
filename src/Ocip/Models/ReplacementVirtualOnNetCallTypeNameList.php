<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementVirtualOnNetCallTypeNameList
 *
 * A list of Virtual On-Net Call Types that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2998","type":"sequence"}]
 */
class ReplacementVirtualOnNetCallTypeNameList
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2998
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

