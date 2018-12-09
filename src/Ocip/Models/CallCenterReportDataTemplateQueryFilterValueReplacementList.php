<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateQueryFilterValueReplacementList
 *
 * A list of call center reporting data template query filter values that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6680","type":"sequence"}]
 */
class CallCenterReportDataTemplateQueryFilterValueReplacementList
{

    /**
     * @ElementName filterValue
     * @Type string
     * @Array
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6680
     * @var string[]
     */
    private $filterValue = array(
        
    );

    /**
     * Getter for filterValue
     *
     * @return string[]
     */
    public function getFilterValue()
    {
        return $this->filterValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @param string[] $filterValue
     * @return $this
     */
    public function setFilterValue(array $filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilterValue()
    {
        $this->filterValue = null;
        return $this;
    }

    /**
     * Adder for filterValue
     *
     * @param string $filterValue
     * @return $this
     */
    public function addFilterValue(string $filterValue)
    {
        $this->filterValue[] = $filterValue;
        return $this;
    }


}

