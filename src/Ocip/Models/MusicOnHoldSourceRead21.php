<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceRead21
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in HSS data mode and not returned
 * in AS data mode:
 *           labeledCustomSourceMediaFiles
 *         The following elements are only used in AS data mode and not returned in
 * HSS data mode:
 *           announcementMediaFiles
 */
class MusicOnHoldSourceRead21
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
     * @ElementName labeledCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\LabeledCustomSourceMediaFiles|null
     */
    private $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\AnnouncementCustomSourceMediaFiles|null
     */
    private $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\ExternalSource|null
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
     * Getter for labeledCustomSourceMediaFiles
     *
     * @ElementName labeledCustomSourceMediaFiles
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\LabeledCustomSourceMediaFiles|null
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @ElementName labeledCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\LabeledCustomSourceMediaFiles|null $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles($labeledCustomSourceMediaFiles)
    {
        $this->labeledCustomSourceMediaFiles = $labeledCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\AnnouncementCustomSourceMediaFiles|null
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @ElementName announcementCustomSourceMediaFiles
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\AnnouncementCustomSourceMediaFiles|null $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles($announcementCustomSourceMediaFiles)
    {
        $this->announcementCustomSourceMediaFiles = $announcementCustomSourceMediaFiles;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @ElementName externalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\ExternalSource|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @ElementName externalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead21\ExternalSource|null $externalSource
     * @return $this
     */
    public function setExternalSource($externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }


}

