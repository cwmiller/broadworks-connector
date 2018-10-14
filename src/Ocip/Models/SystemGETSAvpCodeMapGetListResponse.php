<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSAvpCodeMapGetListResponse
 *
 * Response to SystemGETSAvpCodeMapGetListRequest. 
 *         The table columns are: "AVP Code" and "Vendor ID".
 *
 * @see SystemGETSAvpCodeMapGetListRequest
 */
class SystemGETSAvpCodeMapGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName avpCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $avpCodeTable = null;

    /**
     * Getter for avpCodeTable
     *
     * @ElementName avpCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAvpCodeTable()
    {
        return $this->avpCodeTable;
    }

    /**
     * Setter for avpCodeTable
     *
     * @ElementName avpCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $avpCodeTable
     * @return $this
     */
    public function setAvpCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $avpCodeTable)
    {
        $this->avpCodeTable = $avpCodeTable;
        return $this;
    }


}

