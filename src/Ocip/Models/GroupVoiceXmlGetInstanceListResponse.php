<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceXmlGetInstanceListResponse
 *
 * Response to the GroupVoiceXmlGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupVoiceXmlGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voiceXmlTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $voiceXmlTable = null;

    /**
     * Getter for voiceXmlTable
     *
     * @ElementName voiceXmlTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getVoiceXmlTable()
    {
        return $this->voiceXmlTable;
    }

    /**
     * Setter for voiceXmlTable
     *
     * @ElementName voiceXmlTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $voiceXmlTable
     * @return $this
     */
    public function setVoiceXmlTable($voiceXmlTable)
    {
        $this->voiceXmlTable = $voiceXmlTable;
        return $this;
    }


}

