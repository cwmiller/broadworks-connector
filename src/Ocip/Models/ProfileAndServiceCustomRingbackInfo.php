<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCustomRingbackInfo
 *
 * This is the configuration parameters for Custom Ringback service
 * 			
 * 			The criteria table's column headings are: "Is Active", "Criteria Name", 
 * 			"Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule".
 * 			
 * 			The "Calls From" column is a string containing call numbers
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4392","type":"sequence"}]
 */
class ProfileAndServiceCustomRingbackInfo
{
    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4392
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

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

