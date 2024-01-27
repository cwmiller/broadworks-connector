<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInventoryReportModifyRequest
 *
 * Modify the system level data associated with Inventory Report.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d9fdc459bf0815ec7de2752c27ed25dd:110","type":"sequence"}]
 */
class SystemInventoryReportModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group d9fdc459bf0815ec7de2752c27ed25dd:110
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }
}

