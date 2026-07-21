<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStirShakenCallerIdDispositionMappingGetResponse
 *
 * Response to SystemStirShakenCallerIdDispositionMappingModifyRequest.
 *         Contains a table of Caller Id Disposition mapping.
 *         The column headings are: "Verstat", "Attestation", "Disposition".
 *
 * @see SystemStirShakenCallerIdDispositionMappingModifyRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18434","type":"sequence"}]
 */
class SystemStirShakenCallerIdDispositionMappingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callerIdDispositionMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:18434
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callerIdDispositionMappingTable = null;

    /**
     * Getter for callerIdDispositionMappingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallerIdDispositionMappingTable()
    {
        return $this->callerIdDispositionMappingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callerIdDispositionMappingTable;
    }

    /**
     * Setter for callerIdDispositionMappingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callerIdDispositionMappingTable
     * @return $this
     */
    public function setCallerIdDispositionMappingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callerIdDispositionMappingTable)
    {
        $this->callerIdDispositionMappingTable = $callerIdDispositionMappingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallerIdDispositionMappingTable()
    {
        $this->callerIdDispositionMappingTable = null;
        return $this;
    }
}

