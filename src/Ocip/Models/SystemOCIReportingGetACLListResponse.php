<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetACLListResponse
 *
 * Response to SystemOCIReportingACLListGetRequest.
 *         Contains a table with one row per access control list entry.
 *         The table columns are "Net Address", "Description" and "Restrict Messages".
 *
 * @see SystemOCIReportingACLListGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13741","type":"sequence"}]
 */
class SystemOCIReportingGetACLListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName ociReportingACLTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13741
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $ociReportingACLTable = null;

    /**
     * Getter for ociReportingACLTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getOciReportingACLTable()
    {
        return $this->ociReportingACLTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ociReportingACLTable;
    }

    /**
     * Setter for ociReportingACLTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $ociReportingACLTable
     * @return $this
     */
    public function setOciReportingACLTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $ociReportingACLTable)
    {
        $this->ociReportingACLTable = $ociReportingACLTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOciReportingACLTable()
    {
        $this->ociReportingACLTable = null;
        return $this;
    }


}

