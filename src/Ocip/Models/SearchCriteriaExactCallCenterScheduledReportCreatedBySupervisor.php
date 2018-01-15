<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
 *
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends SearchCriteria
{

    /**
     * @ElementName createdBySupervisor
     * @var bool|null
     */
    private $createdBySupervisor = null;

    /**
     * Getter for createdBySupervisor
     *
     * @ElementName createdBySupervisor
     * @return bool|null
     */
    public function getCreatedBySupervisor()
    {
        return $this->createdBySupervisor;
    }

    /**
     * Setter for createdBySupervisor
     *
     * @ElementName createdBySupervisor
     * @param bool|null $createdBySupervisor
     * @return $this
     */
    public function setCreatedBySupervisor($createdBySupervisor)
    {
        $this->createdBySupervisor = $createdBySupervisor;
        return $this;
    }


}

