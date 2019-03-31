<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformListResponse22V2
 *
 * Response to SystemCallRecordingGetPlatformListRequest22V2.
 *          Contains the default system Call Recording platform, default reseller Call Recording Platform (when applicable) and a table with columns headings    
 * 		 "Name", "Net Address", "Port", "Transport Type", "Media Stream", "Description", "Schema Version", "Support Video Rec", "Reseller Id", "Route".
 *          The system default recording platform also appears in the table with the other platforms.
 *          
 *          The port can be empty if it is not defined in the recording platform.
 *          The possible values for "Support Video Rec" can be either true or false.
 *          Schema version values include: 1.0, 2.0, 3.0
 *
 * @see SystemCallRecordingGetPlatformListRequest22V2
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:194","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformListResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemDefault
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:194
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $systemDefault = null;

    /**
     * @ElementName resellerDefault
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:194
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $resellerDefault = null;

    /**
     * @ElementName callRecordingPlatformTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:194
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
     * Getter for resellerDefault
     *
     * @return string
     */
    public function getResellerDefault()
    {
        return $this->resellerDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerDefault;
    }

    /**
     * Setter for resellerDefault
     *
     * @param string $resellerDefault
     * @return $this
     */
    public function setResellerDefault($resellerDefault)
    {
        $this->resellerDefault = $resellerDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerDefault()
    {
        $this->resellerDefault = null;
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

