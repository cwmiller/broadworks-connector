<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaListResponse
 *
 * Response to the UserCustomRingbackUserGetCriteriaListRequest.
 *         The criteria table's column headings are: "Is Active", "Criteria Name", 
 *         "Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule", "Calls
 * To Type", "Calls To Number" and "Calls To Extension".
 *        The possible values for the "Calls To Type" column are the following or a
 * combination of them separated by comma:
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
class UserCustomRingbackUserGetCriteriaListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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

