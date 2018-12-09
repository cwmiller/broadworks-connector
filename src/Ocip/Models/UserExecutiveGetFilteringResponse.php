<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringResponse
 *
 * Response to the UserExecutiveGetFilteringRequest.
 *         Contains the filtering setting and a table of filtering criteria.
 *         The criteria table's column headings are: "Is Active", "Criteria Name", "Time Schedule", "Calls From", 
 *         "Filter", "Holiday Schedule", "Calls To Type", "Calls To Number" and "Calls To Extension".      
 *         The "Filter" column can contain "true" or "false".
 *         The possible values for the "Calls To Type" column are the following or a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           - Mobility        
 *         The possible values for the "Calls To Number" column are the following or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type, when the number is available. i.e. Alternate 1 may have extension, but no number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when the extension is available. i.e. Primary may have number, but no extension.
 *           - For Mobility Calls To Type, this is always blank.
 *           - When no extension is available a blank space is provided instead.
 *
 * @see UserExecutiveGetFilteringRequest
 * @Groups [{"id":"bcf25f15fde8fb6d519675293110ce09:250","type":"sequence"}]
 */
class UserExecutiveGetFilteringResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableFiltering
     * @Type bool
     * @Group bcf25f15fde8fb6d519675293110ce09:250
     * @var bool|null
     */
    private $enableFiltering = null;

    /**
     * @ElementName filteringMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode
     * @Group bcf25f15fde8fb6d519675293110ce09:250
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode|null
     */
    private $filteringMode = null;

    /**
     * @ElementName simpleFilterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType
     * @Group bcf25f15fde8fb6d519675293110ce09:250
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType|null
     */
    private $simpleFilterType = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bcf25f15fde8fb6d519675293110ce09:250
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for enableFiltering
     *
     * @return bool
     */
    public function getEnableFiltering()
    {
        return $this->enableFiltering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFiltering;
    }

    /**
     * Setter for enableFiltering
     *
     * @param bool $enableFiltering
     * @return $this
     */
    public function setEnableFiltering($enableFiltering)
    {
        $this->enableFiltering = $enableFiltering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFiltering()
    {
        $this->enableFiltering = null;
        return $this;
    }

    /**
     * Getter for filteringMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode
     */
    public function getFilteringMode()
    {
        return $this->filteringMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filteringMode;
    }

    /**
     * Setter for filteringMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode $filteringMode
     * @return $this
     */
    public function setFilteringMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode $filteringMode)
    {
        $this->filteringMode = $filteringMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilteringMode()
    {
        $this->filteringMode = null;
        return $this;
    }

    /**
     * Getter for simpleFilterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType
     */
    public function getSimpleFilterType()
    {
        return $this->simpleFilterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simpleFilterType;
    }

    /**
     * Setter for simpleFilterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType $simpleFilterType
     * @return $this
     */
    public function setSimpleFilterType(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType $simpleFilterType)
    {
        $this->simpleFilterType = $simpleFilterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimpleFilterType()
    {
        $this->simpleFilterType = null;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }


}

