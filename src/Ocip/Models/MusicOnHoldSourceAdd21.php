<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAdd21
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in HSS data mode and ignored in AS data mode:
 *           labeledMediaFiles
 *         The following elements are only used in AS data mode and ignored in HSS data mode:
 *           announcementMediaFiles
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3545","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:3548","type":"choice","optional":true}]}]
 */
class MusicOnHoldSourceAdd21
{
    /**
     * @ElementName audioFilePreferredCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3545
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended|null
     */
    protected $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3545
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3548
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles|null
     */
    protected $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3548
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles|null
     */
    protected $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3545
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource|null
     */
    protected $externalSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecExtended $audioFilePreferredCodec)
    {
        $this->audioFilePreferredCodec = $audioFilePreferredCodec;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFilePreferredCodec()
    {
        $this->audioFilePreferredCodec = null;
        return $this;
    }

    /**
     * Getter for messageSourceSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageSourceSelection()
    {
        $this->messageSourceSelection = null;
        return $this;
    }

    /**
     * Getter for labeledCustomSourceMediaFiles
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
    {
        $this->labeledCustomSourceMediaFiles = $labeledCustomSourceMediaFiles;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLabeledCustomSourceMediaFiles()
    {
        $this->labeledCustomSourceMediaFiles = null;
        return $this;
    }

    /**
     * Getter for announcementCustomSourceMediaFiles
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
    {
        $this->announcementCustomSourceMediaFiles = $announcementCustomSourceMediaFiles;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementCustomSourceMediaFiles()
    {
        $this->announcementCustomSourceMediaFiles = null;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource
     */
    public function getExternalSource()
    {
        return $this->externalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21ExternalSource $externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSource()
    {
        $this->externalSource = null;
        return $this;
    }
}

