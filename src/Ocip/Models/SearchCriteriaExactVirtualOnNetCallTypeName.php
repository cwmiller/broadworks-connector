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
     * @var string|null
     */
    private $virtualOnNetCallTypeName = null;

    /**
     * Getter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @return string|null
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName;
    }

    /**
     * Setter for virtualOnNetCallTypeName
     *
     * @ElementName virtualOnNetCallTypeName
     * @param string|null $virtualOnNetCallTypeName
     * @return $this
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $this->virtualOnNetCallTypeName = $virtualOnNetCallTypeName;
        return $this;
    }


}

