<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetResponse
 *
 * Response to the TutorialFlagGetRequest.
 *
 * @see TutorialFlagGetRequest
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:504","type":"sequence"}]
 */
class TutorialFlagGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTutorial
     * @Type bool
     * @Group d83be92ebac098705e715f24f025a9a9:504
     * @var bool|null
     */
    private $enableTutorial = null;

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

