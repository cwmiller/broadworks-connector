<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSAvpCodeMapGetListResponse
 *
 * Response to SystemGETSAvpCodeMapGetListRequest. 
 *         The table columns are: "AVP Code" and "Vendor ID".
 *
 * @see SystemGETSAvpCodeMapGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10822","type":"sequence"}]
 */
class SystemGETSAvpCodeMapGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName avpCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10822
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

