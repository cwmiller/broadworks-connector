<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHolidayScheduleModifyRequest
 *
 * Modify a holiday schedule in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:13408","type":"sequence"}]
 */
class GroupHolidayScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var string|null
     */
    private $holidayScheduleName = null;

    /**
     * @ElementName newHolidayScheduleName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var string|null
     */
    private $newHolidayScheduleName = null;

    /**
     * @ElementName holiday01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday01 = null;

    /**
     * @ElementName holiday02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday02 = null;

    /**
     * @ElementName holiday03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday03 = null;

    /**
     * @ElementName holiday04
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday04 = null;

    /**
     * @ElementName holiday05
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday05 = null;

    /**
     * @ElementName holiday06
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday06 = null;

    /**
     * @ElementName holiday07
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday07 = null;

    /**
     * @ElementName holiday08
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday08 = null;

    /**
     * @ElementName holiday09
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday09 = null;

    /**
     * @ElementName holiday10
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday10 = null;

    /**
     * @ElementName holiday11
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday11 = null;

    /**
     * @ElementName holiday12
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday12 = null;

    /**
     * @ElementName holiday13
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday13 = null;

    /**
     * @ElementName holiday14
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday14 = null;

    /**
     * @ElementName holiday15
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday15 = null;

    /**
     * @ElementName holiday16
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday16 = null;

    /**
     * @ElementName holiday17
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday17 = null;

    /**
     * @ElementName holiday18
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday18 = null;

    /**
     * @ElementName holiday19
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday19 = null;

    /**
     * @ElementName holiday20
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Holiday
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:13408
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday20 = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for holidayScheduleName
     *
     * @return string
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @param string $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayScheduleName()
    {
        $this->holidayScheduleName = null;
        return $this;
    }

    /**
     * Getter for newHolidayScheduleName
     *
     * @return string
     */
    public function getNewHolidayScheduleName()
    {
        return $this->newHolidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newHolidayScheduleName;
    }

    /**
     * Setter for newHolidayScheduleName
     *
     * @param string $newHolidayScheduleName
     * @return $this
     */
    public function setNewHolidayScheduleName($newHolidayScheduleName)
    {
        $this->newHolidayScheduleName = $newHolidayScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewHolidayScheduleName()
    {
        $this->newHolidayScheduleName = null;
        return $this;
    }

    /**
     * Getter for holiday01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday01()
    {
        return $this->holiday01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday01;
    }

    /**
     * Setter for holiday01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday01
     * @return $this
     */
    public function setHoliday01(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday01)
    {
        if ($holiday01 === null) {
            $this->holiday01 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday01 = $holiday01;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday01()
    {
        $this->holiday01 = null;
        return $this;
    }

    /**
     * Getter for holiday02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday02()
    {
        return $this->holiday02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday02;
    }

    /**
     * Setter for holiday02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday02
     * @return $this
     */
    public function setHoliday02(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday02)
    {
        if ($holiday02 === null) {
            $this->holiday02 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday02 = $holiday02;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday02()
    {
        $this->holiday02 = null;
        return $this;
    }

    /**
     * Getter for holiday03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday03()
    {
        return $this->holiday03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday03;
    }

    /**
     * Setter for holiday03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday03
     * @return $this
     */
    public function setHoliday03(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday03)
    {
        if ($holiday03 === null) {
            $this->holiday03 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday03 = $holiday03;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday03()
    {
        $this->holiday03 = null;
        return $this;
    }

    /**
     * Getter for holiday04
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday04()
    {
        return $this->holiday04 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday04;
    }

    /**
     * Setter for holiday04
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday04
     * @return $this
     */
    public function setHoliday04(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday04)
    {
        if ($holiday04 === null) {
            $this->holiday04 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday04 = $holiday04;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday04()
    {
        $this->holiday04 = null;
        return $this;
    }

    /**
     * Getter for holiday05
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday05()
    {
        return $this->holiday05 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday05;
    }

    /**
     * Setter for holiday05
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday05
     * @return $this
     */
    public function setHoliday05(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday05)
    {
        if ($holiday05 === null) {
            $this->holiday05 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday05 = $holiday05;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday05()
    {
        $this->holiday05 = null;
        return $this;
    }

    /**
     * Getter for holiday06
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday06()
    {
        return $this->holiday06 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday06;
    }

    /**
     * Setter for holiday06
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday06
     * @return $this
     */
    public function setHoliday06(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday06)
    {
        if ($holiday06 === null) {
            $this->holiday06 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday06 = $holiday06;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday06()
    {
        $this->holiday06 = null;
        return $this;
    }

    /**
     * Getter for holiday07
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday07()
    {
        return $this->holiday07 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday07;
    }

    /**
     * Setter for holiday07
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday07
     * @return $this
     */
    public function setHoliday07(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday07)
    {
        if ($holiday07 === null) {
            $this->holiday07 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday07 = $holiday07;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday07()
    {
        $this->holiday07 = null;
        return $this;
    }

    /**
     * Getter for holiday08
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday08()
    {
        return $this->holiday08 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday08;
    }

    /**
     * Setter for holiday08
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday08
     * @return $this
     */
    public function setHoliday08(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday08)
    {
        if ($holiday08 === null) {
            $this->holiday08 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday08 = $holiday08;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday08()
    {
        $this->holiday08 = null;
        return $this;
    }

    /**
     * Getter for holiday09
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday09()
    {
        return $this->holiday09 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday09;
    }

    /**
     * Setter for holiday09
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday09
     * @return $this
     */
    public function setHoliday09(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday09)
    {
        if ($holiday09 === null) {
            $this->holiday09 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday09 = $holiday09;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday09()
    {
        $this->holiday09 = null;
        return $this;
    }

    /**
     * Getter for holiday10
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday10()
    {
        return $this->holiday10 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday10;
    }

    /**
     * Setter for holiday10
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday10
     * @return $this
     */
    public function setHoliday10(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday10)
    {
        if ($holiday10 === null) {
            $this->holiday10 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday10 = $holiday10;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday10()
    {
        $this->holiday10 = null;
        return $this;
    }

    /**
     * Getter for holiday11
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday11()
    {
        return $this->holiday11 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday11;
    }

    /**
     * Setter for holiday11
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday11
     * @return $this
     */
    public function setHoliday11(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday11)
    {
        if ($holiday11 === null) {
            $this->holiday11 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday11 = $holiday11;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday11()
    {
        $this->holiday11 = null;
        return $this;
    }

    /**
     * Getter for holiday12
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday12()
    {
        return $this->holiday12 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday12;
    }

    /**
     * Setter for holiday12
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday12
     * @return $this
     */
    public function setHoliday12(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday12)
    {
        if ($holiday12 === null) {
            $this->holiday12 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday12 = $holiday12;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday12()
    {
        $this->holiday12 = null;
        return $this;
    }

    /**
     * Getter for holiday13
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday13()
    {
        return $this->holiday13 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday13;
    }

    /**
     * Setter for holiday13
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday13
     * @return $this
     */
    public function setHoliday13(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday13)
    {
        if ($holiday13 === null) {
            $this->holiday13 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday13 = $holiday13;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday13()
    {
        $this->holiday13 = null;
        return $this;
    }

    /**
     * Getter for holiday14
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday14()
    {
        return $this->holiday14 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday14;
    }

    /**
     * Setter for holiday14
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday14
     * @return $this
     */
    public function setHoliday14(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday14)
    {
        if ($holiday14 === null) {
            $this->holiday14 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday14 = $holiday14;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday14()
    {
        $this->holiday14 = null;
        return $this;
    }

    /**
     * Getter for holiday15
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday15()
    {
        return $this->holiday15 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday15;
    }

    /**
     * Setter for holiday15
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday15
     * @return $this
     */
    public function setHoliday15(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday15)
    {
        if ($holiday15 === null) {
            $this->holiday15 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday15 = $holiday15;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday15()
    {
        $this->holiday15 = null;
        return $this;
    }

    /**
     * Getter for holiday16
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday16()
    {
        return $this->holiday16 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday16;
    }

    /**
     * Setter for holiday16
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday16
     * @return $this
     */
    public function setHoliday16(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday16)
    {
        if ($holiday16 === null) {
            $this->holiday16 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday16 = $holiday16;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday16()
    {
        $this->holiday16 = null;
        return $this;
    }

    /**
     * Getter for holiday17
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday17()
    {
        return $this->holiday17 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday17;
    }

    /**
     * Setter for holiday17
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday17
     * @return $this
     */
    public function setHoliday17(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday17)
    {
        if ($holiday17 === null) {
            $this->holiday17 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday17 = $holiday17;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday17()
    {
        $this->holiday17 = null;
        return $this;
    }

    /**
     * Getter for holiday18
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday18()
    {
        return $this->holiday18 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday18;
    }

    /**
     * Setter for holiday18
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday18
     * @return $this
     */
    public function setHoliday18(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday18)
    {
        if ($holiday18 === null) {
            $this->holiday18 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday18 = $holiday18;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday18()
    {
        $this->holiday18 = null;
        return $this;
    }

    /**
     * Getter for holiday19
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday19()
    {
        return $this->holiday19 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday19;
    }

    /**
     * Setter for holiday19
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday19
     * @return $this
     */
    public function setHoliday19(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday19)
    {
        if ($holiday19 === null) {
            $this->holiday19 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday19 = $holiday19;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday19()
    {
        $this->holiday19 = null;
        return $this;
    }

    /**
     * Getter for holiday20
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday20()
    {
        return $this->holiday20 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holiday20;
    }

    /**
     * Setter for holiday20
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday20
     * @return $this
     */
    public function setHoliday20(\CWM\BroadWorksConnector\Ocip\Models\Holiday $holiday20)
    {
        if ($holiday20 === null) {
            $this->holiday20 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holiday20 = $holiday20;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoliday20()
    {
        $this->holiday20 = null;
        return $this;
    }


}

