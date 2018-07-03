<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSecurityClassificationCustomizationGetAvailableListResponse
 *
 * Response to
 * EnterpriseSecurityClassificationCustomizationGetAvailableListRequest.
 *         Returns the available group security classifications.
 *         Contains a table with column headings:
 *         "SystemSecurityClassification", "CustomizedSecurityClassification"
 *
 * @see EnterpriseSecurityClassificationCustomizationGetAvailableListRequest
 */
class EnterpriseSecurityClassificationCustomizationGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setSecurityClassificationNameTable($securityClassificationNameTable)
    {
        $this->securityClassificationNameTable = $securityClassificationNameTable;
        return $this;
    }


}

