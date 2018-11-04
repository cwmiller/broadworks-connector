<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleModifyRequest
 *
 * Modify a holiday schedule for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserHolidayScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName holidayScheduleName
     * @var string|null
     */
    private $holidayScheduleName = null;

    /**
     * @ElementName newHolidayScheduleName
     * @var string|null
     */
    private $newHolidayScheduleName = null;

    /**
     * @ElementName holiday01
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday01 = null;

    /**
     * @ElementName holiday02
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday02 = null;

    /**
     * @ElementName holiday03
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday03 = null;

    /**
     * @ElementName holiday04
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday04 = null;

    /**
     * @ElementName holiday05
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday05 = null;

    /**
     * @ElementName holiday06
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday06 = null;

    /**
     * @ElementName holiday07
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday07 = null;

    /**
     * @ElementName holiday08
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday08 = null;

    /**
     * @ElementName holiday09
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday09 = null;

    /**
     * @ElementName holiday10
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday10 = null;

    /**
     * @ElementName holiday11
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday11 = null;

    /**
     * @ElementName holiday12
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday12 = null;

    /**
     * @ElementName holiday13
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday13 = null;

    /**
     * @ElementName holiday14
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday14 = null;

    /**
     * @ElementName holiday15
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday15 = null;

    /**
     * @ElementName holiday16
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday16 = null;

    /**
     * @ElementName holiday17
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday17 = null;

    /**
     * @ElementName holiday18
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday18 = null;

    /**
     * @ElementName holiday19
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday19 = null;

    /**
     * @ElementName holiday20
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holiday20 = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @return string|null
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string|null $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }

    /**
     * Getter for newHolidayScheduleName
     *
     * @ElementName newHolidayScheduleName
     * @return string|null
     */
    public function getNewHolidayScheduleName()
    {
        return $this->newHolidayScheduleName;
    }

    /**
     * Setter for newHolidayScheduleName
     *
     * @ElementName newHolidayScheduleName
     * @param string|null $newHolidayScheduleName
     * @return $this
     */
    public function setNewHolidayScheduleName($newHolidayScheduleName)
    {
        $this->newHolidayScheduleName = $newHolidayScheduleName;
        return $this;
    }

    /**
     * Getter for holiday01
     *
     * @ElementName holiday01
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday01()
    {
        return $this->holiday01;
    }

    /**
     * Setter for holiday01
     *
     * @ElementName holiday01
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday01
     * @return $this
     */
    public function setHoliday01($holiday01)
    {
        $this->holiday01 = $holiday01;
        return $this;
    }

    /**
     * Getter for holiday02
     *
     * @ElementName holiday02
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday02()
    {
        return $this->holiday02;
    }

    /**
     * Setter for holiday02
     *
     * @ElementName holiday02
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday02
     * @return $this
     */
    public function setHoliday02($holiday02)
    {
        $this->holiday02 = $holiday02;
        return $this;
    }

    /**
     * Getter for holiday03
     *
     * @ElementName holiday03
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday03()
    {
        return $this->holiday03;
    }

    /**
     * Setter for holiday03
     *
     * @ElementName holiday03
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday03
     * @return $this
     */
    public function setHoliday03($holiday03)
    {
        $this->holiday03 = $holiday03;
        return $this;
    }

    /**
     * Getter for holiday04
     *
     * @ElementName holiday04
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday04()
    {
        return $this->holiday04;
    }

    /**
     * Setter for holiday04
     *
     * @ElementName holiday04
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday04
     * @return $this
     */
    public function setHoliday04($holiday04)
    {
        $this->holiday04 = $holiday04;
        return $this;
    }

    /**
     * Getter for holiday05
     *
     * @ElementName holiday05
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday05()
    {
        return $this->holiday05;
    }

    /**
     * Setter for holiday05
     *
     * @ElementName holiday05
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday05
     * @return $this
     */
    public function setHoliday05($holiday05)
    {
        $this->holiday05 = $holiday05;
        return $this;
    }

    /**
     * Getter for holiday06
     *
     * @ElementName holiday06
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday06()
    {
        return $this->holiday06;
    }

    /**
     * Setter for holiday06
     *
     * @ElementName holiday06
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday06
     * @return $this
     */
    public function setHoliday06($holiday06)
    {
        $this->holiday06 = $holiday06;
        return $this;
    }

    /**
     * Getter for holiday07
     *
     * @ElementName holiday07
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday07()
    {
        return $this->holiday07;
    }

    /**
     * Setter for holiday07
     *
     * @ElementName holiday07
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday07
     * @return $this
     */
    public function setHoliday07($holiday07)
    {
        $this->holiday07 = $holiday07;
        return $this;
    }

    /**
     * Getter for holiday08
     *
     * @ElementName holiday08
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday08()
    {
        return $this->holiday08;
    }

    /**
     * Setter for holiday08
     *
     * @ElementName holiday08
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday08
     * @return $this
     */
    public function setHoliday08($holiday08)
    {
        $this->holiday08 = $holiday08;
        return $this;
    }

    /**
     * Getter for holiday09
     *
     * @ElementName holiday09
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday09()
    {
        return $this->holiday09;
    }

    /**
     * Setter for holiday09
     *
     * @ElementName holiday09
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday09
     * @return $this
     */
    public function setHoliday09($holiday09)
    {
        $this->holiday09 = $holiday09;
        return $this;
    }

    /**
     * Getter for holiday10
     *
     * @ElementName holiday10
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday10()
    {
        return $this->holiday10;
    }

    /**
     * Setter for holiday10
     *
     * @ElementName holiday10
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday10
     * @return $this
     */
    public function setHoliday10($holiday10)
    {
        $this->holiday10 = $holiday10;
        return $this;
    }

    /**
     * Getter for holiday11
     *
     * @ElementName holiday11
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday11()
    {
        return $this->holiday11;
    }

    /**
     * Setter for holiday11
     *
     * @ElementName holiday11
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday11
     * @return $this
     */
    public function setHoliday11($holiday11)
    {
        $this->holiday11 = $holiday11;
        return $this;
    }

    /**
     * Getter for holiday12
     *
     * @ElementName holiday12
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday12()
    {
        return $this->holiday12;
    }

    /**
     * Setter for holiday12
     *
     * @ElementName holiday12
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday12
     * @return $this
     */
    public function setHoliday12($holiday12)
    {
        $this->holiday12 = $holiday12;
        return $this;
    }

    /**
     * Getter for holiday13
     *
     * @ElementName holiday13
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday13()
    {
        return $this->holiday13;
    }

    /**
     * Setter for holiday13
     *
     * @ElementName holiday13
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday13
     * @return $this
     */
    public function setHoliday13($holiday13)
    {
        $this->holiday13 = $holiday13;
        return $this;
    }

    /**
     * Getter for holiday14
     *
     * @ElementName holiday14
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday14()
    {
        return $this->holiday14;
    }

    /**
     * Setter for holiday14
     *
     * @ElementName holiday14
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday14
     * @return $this
     */
    public function setHoliday14($holiday14)
    {
        $this->holiday14 = $holiday14;
        return $this;
    }

    /**
     * Getter for holiday15
     *
     * @ElementName holiday15
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday15()
    {
        return $this->holiday15;
    }

    /**
     * Setter for holiday15
     *
     * @ElementName holiday15
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday15
     * @return $this
     */
    public function setHoliday15($holiday15)
    {
        $this->holiday15 = $holiday15;
        return $this;
    }

    /**
     * Getter for holiday16
     *
     * @ElementName holiday16
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday16()
    {
        return $this->holiday16;
    }

    /**
     * Setter for holiday16
     *
     * @ElementName holiday16
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday16
     * @return $this
     */
    public function setHoliday16($holiday16)
    {
        $this->holiday16 = $holiday16;
        return $this;
    }

    /**
     * Getter for holiday17
     *
     * @ElementName holiday17
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday17()
    {
        return $this->holiday17;
    }

    /**
     * Setter for holiday17
     *
     * @ElementName holiday17
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday17
     * @return $this
     */
    public function setHoliday17($holiday17)
    {
        $this->holiday17 = $holiday17;
        return $this;
    }

    /**
     * Getter for holiday18
     *
     * @ElementName holiday18
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday18()
    {
        return $this->holiday18;
    }

    /**
     * Setter for holiday18
     *
     * @ElementName holiday18
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday18
     * @return $this
     */
    public function setHoliday18($holiday18)
    {
        $this->holiday18 = $holiday18;
        return $this;
    }

    /**
     * Getter for holiday19
     *
     * @ElementName holiday19
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday19()
    {
        return $this->holiday19;
    }

    /**
     * Setter for holiday19
     *
     * @ElementName holiday19
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday19
     * @return $this
     */
    public function setHoliday19($holiday19)
    {
        $this->holiday19 = $holiday19;
        return $this;
    }

    /**
     * Getter for holiday20
     *
     * @ElementName holiday20
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoliday20()
    {
        return $this->holiday20;
    }

    /**
     * Setter for holiday20
     *
     * @ElementName holiday20
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null|\CWM\BroadWorksConnector\Ocip\Nil $holiday20
     * @return $this
     */
    public function setHoliday20($holiday20)
    {
        $this->holiday20 = $holiday20;
        return $this;
    }


}

