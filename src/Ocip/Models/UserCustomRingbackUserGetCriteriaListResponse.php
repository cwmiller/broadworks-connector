<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaListResponse
 *
 * Response to the UserCustomRingbackUserGetCriteriaListRequest.
 *         The criteria table's column headings are: "Is Active", "Criteria Name", 
 *         "Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule", "Calls To Type", "Calls To Number" and "Calls To Extension".
 *         The following columns are only returned in AS data mode:       
 *           "Calls To Type", "Calls To Number" and "Calls To Extension"
 *           
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
 * @see UserCustomRingbackUserGetCriteriaListRequest
 * @Groups [{"id":"80acd3e6f38b9682dcefe7cd473392c3:186","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 80acd3e6f38b9682dcefe7cd473392c3:186
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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

