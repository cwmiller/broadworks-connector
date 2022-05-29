<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSecurityClassificationCustomizationGetAvailableListResponse
 *
 * Response to GroupClassificationCustomizationGetAvailableListRequest.
 *         Returns the available group security classifications.
 *         Contains a table with column headings:
 *         "SystemSecurityClassification", "CustomizedSecurityClassification"
 *
 * @see GroupClassificationCustomizationGetAvailableListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7708","type":"sequence"}]
 */
class GroupSecurityClassificationCustomizationGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName securityClassificationNameTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7708
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $securityClassificationNameTable = null;

    /**
     * Getter for securityClassificationNameTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSecurityClassificationNameTable()
    {
        return $this->securityClassificationNameTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassificationNameTable;
    }

    /**
     * Setter for securityClassificationNameTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $securityClassificationNameTable
     * @return $this
     */
    public function setSecurityClassificationNameTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $securityClassificationNameTable)
    {
        $this->securityClassificationNameTable = $securityClassificationNameTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationNameTable()
    {
        $this->securityClassificationNameTable = null;
        return $this;
    }


}

