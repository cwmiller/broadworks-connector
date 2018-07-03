<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListResponse20sp1
 *
 * Response to SystemCallRecordingGetPlatformListRequest20sp1.
 *          Contains the default system Call Recording platform and a table with
 * columns headings "Name", "Net Address", "Port", 
 *          "Transport Type", "Media Stream", "Description", "Schema Version",
 * "Support Video Rec".  
 *          The system default recording platform also appears in the table with
 * the other platforms.
 *          
 *          The port can be empty if it is not defined in the recording platform.
 *          The possible values for "Support Video Rec" can be either true or
 * false.
 *          Schema version values include: 1.0, 2.0, 3.0
 *
 * @see SystemCallRecordingGetPlatformListRequest20sp1
 */
class SystemCallRecordingGetPlatformListResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefault
     * @var string|null
     */
    private $systemDefault = null;

    /**
     * @ElementName callRecordingPlatformTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callRecordingPlatformTable = null;

    /**
     * Getter for systemDefault
     *
     * @ElementName systemDefault
     * @return string|null
     */
    public function getSystemDefault()
    {
        return $this->systemDefault;
    }

    /**
     * Setter for systemDefault
     *
     * @ElementName systemDefault
     * @param string|null $systemDefault
     * @return $this
     */
    public function setSystemDefault($systemDefault)
    {
        $this->systemDefault = $systemDefault;
        return $this;
    }

    /**
     * Getter for callRecordingPlatformTable
     *
     * @ElementName callRecordingPlatformTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallRecordingPlatformTable()
    {
        return $this->callRecordingPlatformTable;
    }

    /**
     * Setter for callRecordingPlatformTable
     *
     * @ElementName callRecordingPlatformTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callRecordingPlatformTable
     * @return $this
     */
    public function setCallRecordingPlatformTable($callRecordingPlatformTable)
    {
        $this->callRecordingPlatformTable = $callRecordingPlatformTable;
        return $this;
    }


}

