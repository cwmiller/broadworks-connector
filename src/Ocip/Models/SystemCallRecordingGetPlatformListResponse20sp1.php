<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListResponse20sp1
 *
 * Response to SystemCallRecordingGetPlatformListRequest20sp1.
 *          Contains the default system Call Recording platform and a table with columns headings "Name", "Net Address", "Port", 
 *          "Transport Type", "Media Stream", "Description", "Schema Version", "Support Video Rec".  
 *          The system default recording platform also appears in the table with the other platforms.
 *          
 *          The port can be empty if it is not defined in the recording platform.
 *          The possible values for "Support Video Rec" can be either true or false.
 *          Schema version values include: 1.0, 2.0, 3.0
 * 		 
 * 		 Replaced by SystemCallRecordingGetPlatformListResponse22 in AS data mode.
 *
 * @see SystemCallRecordingGetPlatformListRequest20sp1
 * @see SystemCallRecordingGetPlatformListResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:24597","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformListResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefault
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24597
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $systemDefault = null;

    /**
     * @ElementName callRecordingPlatformTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24597
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callRecordingPlatformTable = null;

    /**
     * Getter for systemDefault
     *
     * @return string
     */
    public function getSystemDefault()
    {
        return $this->systemDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemDefault;
    }

    /**
     * Setter for systemDefault
     *
     * @param string $systemDefault
     * @return $this
     */
    public function setSystemDefault($systemDefault)
    {
        $this->systemDefault = $systemDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemDefault()
    {
        $this->systemDefault = null;
        return $this;
    }

    /**
     * Getter for callRecordingPlatformTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallRecordingPlatformTable()
    {
        return $this->callRecordingPlatformTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callRecordingPlatformTable;
    }

    /**
     * Setter for callRecordingPlatformTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callRecordingPlatformTable
     * @return $this
     */
    public function setCallRecordingPlatformTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callRecordingPlatformTable)
    {
        $this->callRecordingPlatformTable = $callRecordingPlatformTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallRecordingPlatformTable()
    {
        $this->callRecordingPlatformTable = null;
        return $this;
    }


}

