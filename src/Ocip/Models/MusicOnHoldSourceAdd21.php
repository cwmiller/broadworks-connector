<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAdd21
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in HSS data mode and ignored in AS
 * data mode:
 *           labeledMediaFiles
 *         The following elements are only used in AS data mode and ignored in HSS
 * data mode:
 *           announcementMediaFiles
 */
class MusicOnHoldSourceAdd21
{

    /**
     * @ElementName audioFilePreferredCodec
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended|null
     */
    private $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles|null
     */
    private $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles|null
     */
    private $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource|null
     */
    private $externalSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended|null
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended|null $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended $audioFilePreferredCodec)
    {
        $this->audioFilePreferredCodec = $audioFilePreferredCodec;
        return $this;
    }

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for labeledCustomSourceMediaFiles
     *
     * @ElementName labeledCustomSourceMediaFiles
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles|null
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @ElementName labeledCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles|null $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
    {
        $this->labeledCustomSourceMediaFiles = $labeledCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles|null
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles|null $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
    {
        $this->announcementCustomSourceMediaFiles = $announcementCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @ElementName externalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @ElementName externalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource|null $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource $externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }


}

