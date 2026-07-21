<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceReadRI
 *
 * Contains the music on hold user source configuration.
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           urlSource
 *
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:430","type":"sequence"}]
 */
class MusicOnHoldUserSourceReadRI
{
    /**
     * @ElementName messageSourceSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelectionRI
     * @Group 3a0309eb8d406fefc891f554ef114669:430
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelectionRI|null
     */
    protected $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRICustomSource
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:430
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRICustomSource|null
     */
    protected $customSource = null;

    /**
     * @ElementName urlSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRIUrlSource
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:430
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRIUrlSource|null
     */
    protected $urlSource = null;

    /**
     * Getter for messageSourceSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelectionRI
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelectionRI $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelectionRI $messageSourceSelection)
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
     * Getter for customSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRICustomSource
     */
    public function getCustomSource()
    {
        return $this->customSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRICustomSource $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRICustomSource $customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomSource()
    {
        $this->customSource = null;
        return $this;
    }

    /**
     * Getter for urlSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRIUrlSource
     */
    public function getUrlSource()
    {
        return $this->urlSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->urlSource;
    }

    /**
     * Setter for urlSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRIUrlSource $urlSource
     * @return $this
     */
    public function setUrlSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadRIUrlSource $urlSource)
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

