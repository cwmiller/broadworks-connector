<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
 *
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:615","type":"sequence"}]
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends SearchCriteria
{

    /**
     * @ElementName createdBySupervisor
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:615
     * @var bool|null
     */
    private $createdBySupervisor = null;

    /**
     * Getter for createdBySupervisor
     *
     * @return bool
     */
    public function getCreatedBySupervisor()
    {
        return $this->createdBySupervisor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->createdBySupervisor;
    }

    /**
     * Setter for createdBySupervisor
     *
     * @param bool $createdBySupervisor
     * @return $this
     */
    public function setCreatedBySupervisor($createdBySupervisor)
    {
        $this->createdBySupervisor = $createdBySupervisor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCreatedBySupervisor()
    {
        $this->createdBySupervisor = null;
        return $this;
    }


}

