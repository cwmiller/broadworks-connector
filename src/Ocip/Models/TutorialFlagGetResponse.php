<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetResponse
 *
 * Response to the TutorialFlagGetRequest.
 *
 * @see TutorialFlagGetRequest
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:489","type":"sequence"}]
 */
class TutorialFlagGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableTutorial
     * @Type bool
     * @Group ef3c4f453d01f7ce750331de83ebc765:489
     * @var bool|null
     */
    protected $enableTutorial = null;

    /**
     * Getter for enableTutorial
     *
     * @return bool
     */
    public function getEnableTutorial()
    {
        return $this->enableTutorial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTutorial;
    }

    /**
     * Setter for enableTutorial
     *
     * @param bool $enableTutorial
     * @return $this
     */
    public function setEnableTutorial($enableTutorial)
    {
        $this->enableTutorial = $enableTutorial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTutorial()
    {
        $this->enableTutorial = null;
        return $this;
    }
}

