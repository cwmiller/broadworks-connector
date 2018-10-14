<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceRead22
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in XS data mode and not returned in
 * AS data mode:
 *           labeledCustomSourceMediaFiles
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode:
 *           announcementMediaFiles
 */
class MusicOnHoldSourceRead22
{

    /**
     * @ElementName audioFilePreferredCodec
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    private $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22LabeledCustomSourceMediaFiles|null
     */
    private $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22AnnouncementCustomSourceMediaFiles|null
     */
    private $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22ExternalSource|null
     */
    private $externalSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $audioFilePreferredCodec)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22LabeledCustomSourceMediaFiles|null
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @ElementName labeledCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22LabeledCustomSourceMediaFiles|null $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
    {
        $this->labeledCustomSourceMediaFiles = $labeledCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22AnnouncementCustomSourceMediaFiles|null
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22AnnouncementCustomSourceMediaFiles|null $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
    {
        $this->announcementCustomSourceMediaFiles = $announcementCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @ElementName externalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22ExternalSource|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @ElementName externalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22ExternalSource|null $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22ExternalSource $externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }


}

