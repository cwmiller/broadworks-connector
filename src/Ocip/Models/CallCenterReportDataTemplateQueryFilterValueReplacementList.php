<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateQueryFilterValueReplacementList
 *
 * A list of call center reporting data template query filter values that replaces
 * a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class CallCenterReportDataTemplateQueryFilterValueReplacementList
{

    /**
     * @ElementName filterValue
     * @var string[]
     */
    private $filterValue = array(
        
    );

    /**
     * Getter for filterValue
     *
     * @ElementName filterValue
     * @return string[]
     */
    public function getFilterValue()
    {
        return $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @ElementName filterValue
     * @param string[] $filterValue
     * @return $this
     */
    public function setFilterValue(array $filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }

    /**
     * Adder for filterValue
     *
     * @ElementName filterValue
     * @param string $filterValue
     * @return $this
     */
    public function addFilterValue(string $filterValue)
    {
        $this->filterValue []= $filterValue;
        return $this;
    }


}

