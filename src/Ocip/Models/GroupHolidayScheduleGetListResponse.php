<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHolidayScheduleGetListResponse
 *
 * Response to the GroupHolidayScheduleGetListRequest.
 *         The response contains all the group's holiday schedule name.
 */
class GroupHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

