<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementVirtualOnNetCallTypeNameList
 *
 * A list of Virtual On-Net Call Types that replaces a previously 
 *         configured list. By convention, an element of this type may be set 
 *         to nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3403","type":"sequence"}]
 */
class ReplacementVirtualOnNetCallTypeNameList
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3403
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

