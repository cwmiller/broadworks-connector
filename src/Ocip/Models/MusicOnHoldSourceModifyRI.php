<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceModifyRI
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in HSS data mode and ignored in AS data mode:
 *           labeledMediaFiles
 *         The following elements are only used in AS data mode and ignored in HSS data mode:
 *           announcementMediaFiles
 *           authenticationRequired
 *           authenticationUserName
 *           authenticationPassword
 *           urlSource
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4109","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4112","type":"choice","optional":true}]}]
 */
class MusicOnHoldSourceModifyRI
{
    /**
     * @ElementName audioFilePreferredCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4109
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    protected $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4109
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRILabeledCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4112
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRILabeledCustomSourceMediaFiles|null
     */
    protected $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIAnnouncementCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4112
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIAnnouncementCustomSourceMediaFiles|null
     */
    protected $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIExternalSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4109
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIExternalSource|null
     */
    protected $externalSource = null;

    /**
     * @ElementName urlSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIUrlSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4109
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIUrlSource|null
     */
    protected $urlSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22 $audioFilePreferredCodec)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI $messageSourceSelection)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRILabeledCustomSourceMediaFiles
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRILabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRILabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIAnnouncementCustomSourceMediaFiles
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIAnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIAnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIExternalSource
     */
    public function getExternalSource()
    {
        return $this->externalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIExternalSource $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIExternalSource $externalSource)
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

    /**
     * Getter for urlSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIUrlSource
     */
    public function getUrlSource()
    {
        return $this->urlSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlSource;
    }

    /**
     * Setter for urlSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIUrlSource $urlSource
     * @return $this
     */
    public function setUrlSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModifyRIUrlSource $urlSource)
    {
        $this->urlSource = $urlSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrlSource()
    {
        $this->urlSource = null;
        return $this;
    }
}

