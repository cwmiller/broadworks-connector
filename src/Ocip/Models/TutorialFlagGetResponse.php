<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetResponse
 *
 * Response to the TutorialFlagGetRequest.
 */
class TutorialFlagGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTutorial
     * @var bool|null
     */
    private $enableTutorial = null;

    /**
     * Getter for enableTutorial
     *
     * @ElementName enableTutorial
     * @return bool|null
     */
    public function getEnableTutorial()
    {
        return $this->enableTutorial;
    }

    /**
     * Setter for enableTutorial
     *
     * @ElementName enableTutorial
     * @param bool|null $enableTutorial
     * @return $this
     */
    public function setEnableTutorial($enableTutorial)
    {
        $this->enableTutorial = $enableTutorial;
        return $this;
    }


}

