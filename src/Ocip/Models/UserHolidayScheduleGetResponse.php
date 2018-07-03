<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetResponse
 *
 * Response to the UserHolidayScheduleGetRequest.
 *         The response contains the user?s holiday schedule information.
 *
 * @see UserHolidayScheduleGetRequest
 */
class UserHolidayScheduleGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName holidayScheduleName
     * @var string|null
     */
    private $holidayScheduleName = null;

    /**
     * @ElementName holiday01
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday01 = null;

    /**
     * @ElementName holiday02
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday02 = null;

    /**
     * @ElementName holiday03
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday03 = null;

    /**
     * @ElementName holiday04
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday04 = null;

    /**
     * @ElementName holiday05
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday05 = null;

    /**
     * @ElementName holiday06
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday06 = null;

    /**
     * @ElementName holiday07
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday07 = null;

    /**
     * @ElementName holiday08
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday08 = null;

    /**
     * @ElementName holiday09
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday09 = null;

    /**
     * @ElementName holiday10
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday10 = null;

    /**
     * @ElementName holiday11
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday11 = null;

    /**
     * @ElementName holiday12
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday12 = null;

    /**
     * @ElementName holiday13
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday13 = null;

    /**
     * @ElementName holiday14
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday14 = null;

    /**
     * @ElementName holiday15
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday15 = null;

    /**
     * @ElementName holiday16
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday16 = null;

    /**
     * @ElementName holiday17
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday17 = null;

    /**
     * @ElementName holiday18
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday18 = null;

    /**
     * @ElementName holiday19
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday19 = null;

    /**
     * @ElementName holiday20
     * @var \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    private $holiday20 = null;

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
     * Getter for holiday01
     *
     * @ElementName holiday01
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday01()
    {
        return $this->holiday01;
    }

    /**
     * Setter for holiday01
     *
     * @ElementName holiday01
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday01
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday02()
    {
        return $this->holiday02;
    }

    /**
     * Setter for holiday02
     *
     * @ElementName holiday02
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday02
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday03()
    {
        return $this->holiday03;
    }

    /**
     * Setter for holiday03
     *
     * @ElementName holiday03
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday03
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday04()
    {
        return $this->holiday04;
    }

    /**
     * Setter for holiday04
     *
     * @ElementName holiday04
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday04
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday05()
    {
        return $this->holiday05;
    }

    /**
     * Setter for holiday05
     *
     * @ElementName holiday05
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday05
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday06()
    {
        return $this->holiday06;
    }

    /**
     * Setter for holiday06
     *
     * @ElementName holiday06
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday06
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday07()
    {
        return $this->holiday07;
    }

    /**
     * Setter for holiday07
     *
     * @ElementName holiday07
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday07
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday08()
    {
        return $this->holiday08;
    }

    /**
     * Setter for holiday08
     *
     * @ElementName holiday08
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday08
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday09()
    {
        return $this->holiday09;
    }

    /**
     * Setter for holiday09
     *
     * @ElementName holiday09
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday09
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday10()
    {
        return $this->holiday10;
    }

    /**
     * Setter for holiday10
     *
     * @ElementName holiday10
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday10
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday11()
    {
        return $this->holiday11;
    }

    /**
     * Setter for holiday11
     *
     * @ElementName holiday11
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday11
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday12()
    {
        return $this->holiday12;
    }

    /**
     * Setter for holiday12
     *
     * @ElementName holiday12
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday12
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday13()
    {
        return $this->holiday13;
    }

    /**
     * Setter for holiday13
     *
     * @ElementName holiday13
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday13
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday14()
    {
        return $this->holiday14;
    }

    /**
     * Setter for holiday14
     *
     * @ElementName holiday14
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday14
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday15()
    {
        return $this->holiday15;
    }

    /**
     * Setter for holiday15
     *
     * @ElementName holiday15
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday15
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday16()
    {
        return $this->holiday16;
    }

    /**
     * Setter for holiday16
     *
     * @ElementName holiday16
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday16
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday17()
    {
        return $this->holiday17;
    }

    /**
     * Setter for holiday17
     *
     * @ElementName holiday17
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday17
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday18()
    {
        return $this->holiday18;
    }

    /**
     * Setter for holiday18
     *
     * @ElementName holiday18
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday18
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday19()
    {
        return $this->holiday19;
    }

    /**
     * Setter for holiday19
     *
     * @ElementName holiday19
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday19
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Holiday|null
     */
    public function getHoliday20()
    {
        return $this->holiday20;
    }

    /**
     * Setter for holiday20
     *
     * @ElementName holiday20
     * @param \CWM\BroadWorksConnector\Ocip\Models\Holiday|null $holiday20
     * @return $this
     */
    public function setHoliday20($holiday20)
    {
        $this->holiday20 = $holiday20;
        return $this;
    }


}

