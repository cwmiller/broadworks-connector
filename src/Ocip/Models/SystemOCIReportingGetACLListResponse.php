<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetACLListResponse
 *
 * Response to SystemOCIReportingACLListGetRequest.
 *         Contains a table with one row per access control list entry.
 *         The table columns are "Net Address", "Description" and "Restrict
 * Messages".
 *
 * @see SystemOCIReportingACLListGetRequest
 */
class SystemOCIReportingGetACLListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName ociReportingACLTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $ociReportingACLTable = null;

    /**
     * Getter for ociReportingACLTable
     *
     * @ElementName ociReportingACLTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getOciReportingACLTable()
    {
        return $this->ociReportingACLTable;
    }

    /**
     * Setter for ociReportingACLTable
     *
     * @ElementName ociReportingACLTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $ociReportingACLTable
     * @return $this
     */
    public function setOciReportingACLTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $ociReportingACLTable)
    {
        $this->ociReportingACLTable = $ociReportingACLTable;
        return $this;
    }


}

