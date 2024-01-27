<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactVirtualOnNetCallTypeName
 *
 * Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1424","type":"sequence"}]
 */
class SearchCriteriaExactVirtualOnNetCallTypeName extends SearchCriteria
{
    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1424
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $virtualOnNetCallTypeName = null;

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

