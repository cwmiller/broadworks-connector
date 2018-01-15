<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringResponse
 *
 * Response to the UserExecutiveGetFilteringRequest.
 *         Contains the filtering setting and a table of filtering criteria.
 *         The criteria table's column headings are: "Is Active", "Criteria Name",
 * "Time Schedule", "Calls From", 
 *         "Filter", "Holiday Schedule", "Calls To Type", "Calls To Number" and
 * "Calls To Extension".      
 *         The "Filter" column can contain "true" or "false".
 *         The possible values for the "Calls To Type" column are the following or
 * a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           - Mobility        
 *         The possible values for the "Calls To Number" column are the following
 * or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type,
 * when the number is available. i.e. Alternate 1 may have extension, but no
 * number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the
 * following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when
 * the extension is available. i.e. Primary may have number, but no extension.
 *           - For Mobility Calls To Type, this is always blank.
 *           - When no extension is available a blank space is provided instead.
 */
class UserExecutiveGetFilteringResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableFiltering
     * @var bool|null
     */
    private $enableFiltering = null;

    /**
     * @ElementName filteringMode
     * @var string|null
     */
    private $filteringMode = null;

    /**
     * @ElementName simpleFilterType
     * @var string|null
     */
    private $simpleFilterType = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for enableFiltering
     *
     * @ElementName enableFiltering
     * @return bool|null
     */
    public function getEnableFiltering()
    {
        return $this->enableFiltering;
    }

    /**
     * Setter for enableFiltering
     *
     * @ElementName enableFiltering
     * @param bool|null $enableFiltering
     * @return $this
     */
    public function setEnableFiltering($enableFiltering)
    {
        $this->enableFiltering = $enableFiltering;
        return $this;
    }

    /**
     * Getter for filteringMode
     *
     * @ElementName filteringMode
     * @return string|null
     */
    public function getFilteringMode()
    {
        return $this->filteringMode;
    }

    /**
     * Setter for filteringMode
     *
     * @ElementName filteringMode
     * @param string|null $filteringMode
     * @return $this
     */
    public function setFilteringMode($filteringMode)
    {
        $this->filteringMode = $filteringMode;
        return $this;
    }

    /**
     * Getter for simpleFilterType
     *
     * @ElementName simpleFilterType
     * @return string|null
     */
    public function getSimpleFilterType()
    {
        return $this->simpleFilterType;
    }

    /**
     * Setter for simpleFilterType
     *
     * @ElementName simpleFilterType
     * @param string|null $simpleFilterType
     * @return $this
     */
    public function setSimpleFilterType($simpleFilterType)
    {
        $this->simpleFilterType = $simpleFilterType;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable($criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

