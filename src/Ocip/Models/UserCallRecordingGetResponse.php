<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetResponse
 *
 * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 */
class UserCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recordingOption
     * @var string|null
     */
    private $recordingOption = null;

    /**
     * Getter for recordingOption
     *
     * @ElementName recordingOption
     * @return string|null
     */
    public function getRecordingOption()
    {
        return $this->recordingOption;
    }

    /**
     * Setter for recordingOption
     *
     * @ElementName recordingOption
     * @param string|null $recordingOption
     * @return $this
     */
    public function setRecordingOption($recordingOption)
    {
        $this->recordingOption = $recordingOption;
        return $this;
    }


}

