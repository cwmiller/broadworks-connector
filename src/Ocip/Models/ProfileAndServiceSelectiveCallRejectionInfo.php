<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSelectiveCallRejectionInfo
 *
 * This is the configuration parameters for Selective Call Rejection service
 *         	
 *         	The criteria table's column headings are:
 *         	"Is Active", "Criteria Name", "Time Schedule", "Calls From",
 * "Blacklisted", "Holiday Schedule"
 *         	
 *         	The "Calls From" column is a string containing call numbers
 */
class ProfileAndServiceSelectiveCallRejectionInfo
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

