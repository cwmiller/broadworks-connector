<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSAvpCodeMapGetListResponse
 *
 * Response to SystemGETSAvpCodeMapGetListRequest. 
 *         The table columns are: "AVP Code" and "Vendor ID".
 *
 * @see SystemGETSAvpCodeMapGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:9158","type":"sequence"}]
 */
class SystemGETSAvpCodeMapGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName avpCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:9158
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $avpCodeTable = null;

    /**
     * Getter for avpCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvpCodeTable()
    {
        return $this->avpCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->avpCodeTable;
    }

    /**
     * Setter for avpCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $avpCodeTable
     * @return $this
     */
    public function setAvpCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $avpCodeTable)
    {
        $this->avpCodeTable = $avpCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvpCodeTable()
    {
        $this->avpCodeTable = null;
        return $this;
    }


}

