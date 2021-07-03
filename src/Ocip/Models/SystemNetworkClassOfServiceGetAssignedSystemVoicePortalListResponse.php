<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListResponse
 *
 * Response to the
 *         SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListRequest.
 *         The response contains a table of system voice portals that have
 *         the given Network Class of Service assigned. The column headings are
 *         "System Voice Portal Id" and "Name".
 *
 * @see SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12439","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemVoicePortalTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12439
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemVoicePortalTable = null;

    /**
     * Getter for systemVoicePortalTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSystemVoicePortalTable()
    {
        return $this->systemVoicePortalTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemVoicePortalTable;
    }

    /**
     * Setter for systemVoicePortalTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemVoicePortalTable
     * @return $this
     */
    public function setSystemVoicePortalTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemVoicePortalTable)
    {
        $this->systemVoicePortalTable = $systemVoicePortalTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemVoicePortalTable()
    {
        $this->systemVoicePortalTable = null;
        return $this;
    }


}

