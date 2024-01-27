<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringSelectiveCriteriaResponse21
 *
 * Response to the UserExecutiveGetFilteringSelectiveCriteriaRequest21.
 *
 * @see UserExecutiveGetFilteringSelectiveCriteriaRequest21
 * @Groups [{"id":"3a54ac906cb7002cc1a30fbb0efadb0a:289","type":"sequence"}]
 */
class UserExecutiveGetFilteringSelectiveCriteriaResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName filter
     * @Type bool
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:289
     * @var bool|null
     */
    protected $filter = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn|null
     */
    protected $fromDnCriteria = null;

    /**
     * @ElementName callToNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumber
     * @Array
     * @Optional
     * @Group 3a54ac906cb7002cc1a30fbb0efadb0a:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    protected $callToNumber = [
        
    ];

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
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for filter
     *
     * @return bool
     */
    public function getFilter()
    {
        return $this->filter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filter;
    }

    /**
     * Setter for filter
     *
     * @param bool $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilter()
    {
        $this->filter = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn $fromDnCriteria)
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

    /**
     * Getter for callToNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    public function getCallToNumber()
    {
        return $this->callToNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callToNumber;
    }

    /**
     * Setter for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[] $callToNumber
     * @return $this
     */
    public function setCallToNumber(array $callToNumber)
    {
        $this->callToNumber = $callToNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallToNumber()
    {
        $this->callToNumber = null;
        return $this;
    }

    /**
     * Adder for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber $callToNumber
     * @return $this
     */
    public function addCallToNumber($callToNumber)
    {
        $this->callToNumber[] = $callToNumber;
        return $this;
    }
}

