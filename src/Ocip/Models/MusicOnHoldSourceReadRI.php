<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceReadRI
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
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4466","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4469","type":"choice","optional":true}]}]
 */
class MusicOnHoldSourceReadRI
{
    /**
     * @ElementName audioFilePreferredCodec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4466
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec22|null
     */
    protected $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4466
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelectionRI|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName labeledCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRILabeledCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4469
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRILabeledCustomSourceMediaFiles|null
     */
    protected $labeledCustomSourceMediaFiles = null;

    /**
     * @ElementName announcementCustomSourceMediaFiles
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIAnnouncementCustomSourceMediaFiles
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4469
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIAnnouncementCustomSourceMediaFiles|null
     */
    protected $announcementCustomSourceMediaFiles = null;

    /**
     * @ElementName externalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIExternalSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4466
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIExternalSource|null
     */
    protected $externalSource = null;

    /**
     * @ElementName urlSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIUrlSource
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4466
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIUrlSource|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRILabeledCustomSourceMediaFiles
     */
    public function getLabeledCustomSourceMediaFiles()
    {
        return $this->labeledCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->labeledCustomSourceMediaFiles;
    }

    /**
     * Setter for labeledCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRILabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles
     * @return $this
     */
    public function setLabeledCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRILabeledCustomSourceMediaFiles $labeledCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIAnnouncementCustomSourceMediaFiles
     */
    public function getAnnouncementCustomSourceMediaFiles()
    {
        return $this->announcementCustomSourceMediaFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementCustomSourceMediaFiles;
    }

    /**
     * Setter for announcementCustomSourceMediaFiles
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIAnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles
     * @return $this
     */
    public function setAnnouncementCustomSourceMediaFiles(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIAnnouncementCustomSourceMediaFiles $announcementCustomSourceMediaFiles)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIExternalSource
     */
    public function getExternalSource()
    {
        return $this->externalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIExternalSource $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIExternalSource $externalSource)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIUrlSource
     */
    public function getUrlSource()
    {
        return $this->urlSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlSource;
    }

    /**
     * Setter for urlSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIUrlSource $urlSource
     * @return $this
     */
    public function setUrlSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceReadRIUrlSource $urlSource)
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

