<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInventoryReportModifyRequest
 *
 * Modify the system level data associated with Inventory Report.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInventoryReportModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }


}

