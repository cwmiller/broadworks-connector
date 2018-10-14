<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetResponse
 *
 * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 *
 * @see UserCallRecordingGetRequest
 */
class UserCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recordingOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecordingOption|null
     */
    private $recordingOption = null;

    /**
     * Getter for recordingOption
     *
     * @ElementName recordingOption
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecordingOption|null
     */
    public function getRecordingOption()
    {
        return $this->recordingOption;
    }

    /**
     * Setter for recordingOption
     *
     * @ElementName recordingOption
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecordingOption|null $recordingOption
     * @return $this
     */
    public function setRecordingOption(\CWM\BroadWorksConnector\Ocip\Models\RecordingOption $recordingOption)
    {
        $this->recordingOption = $recordingOption;
        return $this;
    }


}

