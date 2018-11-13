<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactVirtualOnNetCallTypeName
 *
 * Criteria for searching for a particular fully specified Virtual On-Net Call Type
 * Name.
 */
class SearchCriteriaExactVirtualOnNetCallTypeName extends SearchCriteria
{

    /**
     * @ElementName virtualOnNetCallTypeName
     * @Type string
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

