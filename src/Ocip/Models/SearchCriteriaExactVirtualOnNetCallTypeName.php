<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactVirtualOnNetCallTypeName
 *
 * Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1375","type":"sequence"}]
 */
class SearchCriteriaExactVirtualOnNetCallTypeName extends SearchCriteria
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:1375
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @return string
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @param string $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
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


}

