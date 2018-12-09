<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHolidayScheduleGetListResponse
 *
 * Response to the GroupHolidayScheduleGetListRequest.
 *         The response contains all the group's holiday schedule name.
 *
 * @see GroupHolidayScheduleGetListRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:8598","type":"sequence"}]
 */
class GroupHolidayScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName holidayScheduleName
     * @Type string
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:8598
     * @var string[]
     */
    private $holidayScheduleName = array(
        
    );

    /**
     * Getter for holidayScheduleName
     *
     * @return string[]
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @param string[] $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName(array $holidayScheduleName)
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
     * Adder for holidayScheduleName
     *
     * @param string $holidayScheduleName
     * @return $this
     */
    public function addHolidayScheduleName(string $holidayScheduleName)
    {
        $this->holidayScheduleName[] = $holidayScheduleName;
        return $this;
    }


}

