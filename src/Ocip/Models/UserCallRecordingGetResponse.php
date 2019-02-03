<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetResponse
 *
 * Response to the UserCallRecordingGetRequest.
 *                 The response contains the user's Call Recording option information.
 *
 * @see UserCallRecordingGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:32472","type":"sequence"}]
 */
class UserCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recordingOption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecordingOption
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32472
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecordingOption|null
     */
    private $recordingOption = null;

    /**
     * Getter for recordingOption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecordingOption
     */
    public function getRecordingOption()
    {
        return $this->recordingOption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingOption;
    }

    /**
     * Setter for recordingOption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecordingOption $recordingOption
     * @return $this
     */
    public function setRecordingOption(\CWM\BroadWorksConnector\Ocip\Models\RecordingOption $recordingOption)
    {
        $this->recordingOption = $recordingOption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingOption()
    {
        $this->recordingOption = null;
        return $this;
    }


}

