<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHolidayScheduleGetListResponse
 *
 * Response to the SystemHolidayScheduleGetListRequest.
 *         The response contains all the system holiday schedule names.
 */
class SystemHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName holidayScheduleName
     * @var string[]
     */
    private $holidayScheduleName = array(
        
    );

    /**
     * Getter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @return string[]
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string[] $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }

    /**
     * Adder for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string $holidayScheduleName
     * @return $this
     */
    public function addHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName []= $holidayScheduleName;
        return $this;
    }


}

