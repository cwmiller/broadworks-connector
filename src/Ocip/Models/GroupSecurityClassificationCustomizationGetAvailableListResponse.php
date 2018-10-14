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
 */
class GroupSecurityClassificationCustomizationGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName securityClassificationNameTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $securityClassificationNameTable = null;

    /**
     * Getter for securityClassificationNameTable
     *
     * @ElementName securityClassificationNameTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSecurityClassificationNameTable()
    {
        return $this->securityClassificationNameTable;
    }

    /**
     * Setter for securityClassificationNameTable
     *
     * @ElementName securityClassificationNameTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $securityClassificationNameTable
     * @return $this
     */
    public function setSecurityClassificationNameTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $securityClassificationNameTable)
    {
        $this->securityClassificationNameTable = $securityClassificationNameTable;
        return $this;
    }


}

