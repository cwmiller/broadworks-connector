<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDataTemplateQueryFilterValueReplacementList
 *
 * A list of call center reporting data template query filter values that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7422","type":"sequence"}]
 */
class CallCenterReportDataTemplateQueryFilterValueReplacementList
{

    /**
     * @ElementName filterValue
     * @Type string
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:7422
     * @MinLength 1
     * @MaxLength 160
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

