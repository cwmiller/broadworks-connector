<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceListResponse
 *
 * Response to the GroupVoiceXmlGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 *
 * @see GroupVoiceXmlGetInstanceListRequest
 * @Groups [{"id":"f3e2fc6b9722da3741a8ba4a2c4a2d05:106","type":"sequence"}]
 */
class GroupVoiceXmlGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName voiceXmlTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3e2fc6b9722da3741a8ba4a2c4a2d05:106
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $voiceXmlTable = null;

    /**
     * Getter for voiceXmlTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getVoiceXmlTable()
    {
        return $this->voiceXmlTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceXmlTable;
    }

    /**
     * Setter for voiceXmlTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $voiceXmlTable
     * @return $this
     */
    public function setVoiceXmlTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $voiceXmlTable)
    {
        $this->voiceXmlTable = $voiceXmlTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceXmlTable()
    {
        $this->voiceXmlTable = null;
        return $this;
    }
}

