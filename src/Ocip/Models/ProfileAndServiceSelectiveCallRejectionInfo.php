<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSelectiveCallRejectionInfo
 *
 * This is the configuration parameters for Selective Call Rejection service
 *         	
 *         	The criteria table's column headings are:
 *         	"Is Active", "Criteria Name", "Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule"
 *         	
 *         	The "Calls From" column is a string containing call numbers
 *
 * @Groups [{"id":"489b2153267470be8e945bf6b778e0d0:3717","type":"sequence"}]
 */
class ProfileAndServiceSelectiveCallRejectionInfo
{

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 489b2153267470be8e945bf6b778e0d0:3717
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

