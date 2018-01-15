<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetListResponse
 *
 * Response to SystemSystemVoicePortalGetListRequest.
 *         The column headings are "Default", "System Voice Portal Id", "Name",
 * "Network Voice Portal Number", "System Voice Portal Number" and "Language".
 *         The possible values for "Default" are true, false.
 */
class SystemSystemVoicePortalGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemVoicePortalsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemVoicePortalsTable = null;

    /**
     * Getter for systemVoicePortalsTable
     *
     * @ElementName systemVoicePortalsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSystemVoicePortalsTable()
    {
        return $this->systemVoicePortalsTable;
    }

    /**
     * Setter for systemVoicePortalsTable
     *
     * @ElementName systemVoicePortalsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $systemVoicePortalsTable
     * @return $this
     */
    public function setSystemVoicePortalsTable($systemVoicePortalsTable)
    {
        $this->systemVoicePortalsTable = $systemVoicePortalsTable;
        return $this;
    }


}

