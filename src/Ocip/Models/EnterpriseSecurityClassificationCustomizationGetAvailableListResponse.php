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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $securityClassificationNameTable = null;

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

