<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModify
 *
 * Contains the music on hold source configuration.
 */
class MusicOnHoldSourceModify
{

    /**
     * @ElementName audioFilePreferredCodec
     * @var string|null
     */
    private $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @var string|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\CustomSource|null
     */
    private $customSource = null;

    /**
     * @ElementName externalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\ExternalSource|null
     */
    private $externalSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @return string|null
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @param string|null $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec($audioFilePreferredCodec)
    {
        $this->audioFilePreferredCodec = $audioFilePreferredCodec;
        return $this;
    }

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return string|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param string|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection($messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @ElementName customSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\CustomSource|null
     */
    public function getCustomSource()
    {
        return $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @ElementName customSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\CustomSource|null $customSource
     * @return $this
     */
    public function setCustomSource($customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @ElementName externalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\ExternalSource|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @ElementName externalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify\ExternalSource|null $externalSource
     * @return $this
     */
    public function setExternalSource($externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }


}

