<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetListResponse
 *
 * Response to SystemSystemVoicePortalGetListRequest.
 *         The column headings are "Default", "System Voice Portal Id", "Name", "Network Voice Portal Number", "System Voice Portal Number" and "Language".
 *         The possible values for "Default" are true, false.
 *
 * @see SystemSystemVoicePortalGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:16261","type":"sequence"}]
 */
class SystemSystemVoicePortalGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemVoicePortalsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:16261
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemVoicePortalsTable = null;

    /**
     * Getter for systemVoicePortalsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSystemVoicePortalsTable()
    {
        return $this->systemVoicePortalsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemVoicePortalsTable;
    }

    /**
     * Setter for systemVoicePortalsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemVoicePortalsTable
     * @return $this
     */
    public function setSystemVoicePortalsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemVoicePortalsTable)
    {
        $this->systemVoicePortalsTable = $systemVoicePortalsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemVoicePortalsTable()
    {
        $this->systemVoicePortalsTable = null;
        return $this;
    }


}

