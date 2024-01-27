<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPriorityAlertGetCriteriaResponse
 *
 * Response to the UserPriorityAlertGetCriteriaRequest.
 *
 * @see UserPriorityAlertGetCriteriaRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46330","type":"sequence"}]
 */
class UserPriorityAlertGetCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:46330
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDn
     * @Group d8f04177e438f303b41c211e518706bf:46330
     * @var \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDn|null
     */
    protected $fromDnCriteria = null;

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDn $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\PriorityAlertCriteriaFromDn $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }
}

