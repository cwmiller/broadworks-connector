<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceReadRIV2
 *
 * Contains the music on hold source configuration.
 *         The following elements are only used in XS data mode and not returned in AS data mode:
 *           labeledCustomSourceMediaFiles
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           announcementMediaFiles
 *           authenticationUserName
 *           urlSource
 *         The following element is only used in AS data mode:
 *           authenticationRequired, value "false" is returned in XS data mode
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4527","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4530","type":"choice","optional":true}]}]
 */
class MusicOnHoldSourceReadRIV2
{
    /**
     * @ElementName audioFilePreferredCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecRI
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4527
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecRI|null
     */
    protected $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4527
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2LabeledCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4530
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2LabeledCustomSourceMediaFiles|null
     */
    protected $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2AnnouncementCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4530
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2AnnouncementCustomSourceMediaFiles|null
     */
    protected $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2ExternalSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4527
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2ExternalSource|null
     */
    protected $externalSource = null;

    /**
     * @ElementName urlSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2UrlSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4527
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2UrlSource|null
     */
    protected $urlSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecRI
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecRI $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodecRI $audioFilePreferredCodec)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2LabeledCustomSourceMediaFiles
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2LabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2AnnouncementCustomSourceMediaFiles
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2AnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2ExternalSource
     */
    public function getExternalSource()
    {
        return $this->externalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2ExternalSource $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2ExternalSource $externalSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2UrlSource
     */
    public function getUrlSource()
    {
        return $this->urlSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlSource;
    }

    /**
     * Setter for urlSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2UrlSource $urlSource
     * @return $this
     */
    public function setUrlSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIV2UrlSource $urlSource)
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

