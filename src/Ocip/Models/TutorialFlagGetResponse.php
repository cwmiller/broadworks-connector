<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetResponse
 *
 * Response to the TutorialFlagGetRequest.
 *
 * @see TutorialFlagGetRequest
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:552","type":"sequence"}]
 */
class TutorialFlagGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableTutorial
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:552
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

