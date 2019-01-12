<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListResponse
 *
 * Response to SystemCallRecordingGetPlatformListRequest.
 *          Contains the default system Call Recording platform and a table with columns headings "Name", "Net Address", "Port", 
 *          "Transport Type", "Media Stream", "Description", "Schema Version", "Support Video Rec".  
 *          The system default recording platform also appears in the table with the other platforms.
 *          
 *          The possible values for "Support Video Rec" can be either true or false.
 *          Schema version values include: 1.0, 2.0, 3.0
 *          
 *          Replaced by: SystemCallRecordingGetPlatformListResponse20sp1 in AS data mode
 *
 * @see SystemCallRecordingGetPlatformListRequest
 * @see SystemCallRecordingGetPlatformListResponse20sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:33198","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefault
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33198
     * @var string|null
     */
    private $systemDefault = null;

    /**
     * @ElementName callRecordingPlatformTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33198
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callRecordingPlatformTable = null;

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

