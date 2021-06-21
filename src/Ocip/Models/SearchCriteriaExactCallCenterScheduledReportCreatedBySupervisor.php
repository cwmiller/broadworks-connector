<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
 *
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:742","type":"sequence"}]
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends SearchCriteria
{

    /**
     * @ElementName createdBySupervisor
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:742
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

