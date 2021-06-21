<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiApplicationIdGetListResponse
 *
 * Response to the SystemXsiApplicationIdGetListRequest
 *         Contains a table with column headings: "Xsi Application Id", "Description".
 *
 * @see SystemXsiApplicationIdGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19362","type":"sequence"}]
 */
class SystemXsiApplicationIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName xsiApplicationIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19362
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $xsiApplicationIdTable = null;

    /**
     * Getter for xsiApplicationIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getXsiApplicationIdTable()
    {
        return $this->xsiApplicationIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiApplicationIdTable;
    }

    /**
     * Setter for xsiApplicationIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $xsiApplicationIdTable
     * @return $this
     */
    public function setXsiApplicationIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $xsiApplicationIdTable)
    {
        $this->xsiApplicationIdTable = $xsiApplicationIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiApplicationIdTable()
    {
        $this->xsiApplicationIdTable = null;
        return $this;
    }


}

