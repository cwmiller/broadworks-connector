<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIAddACLEntryRequest
 *
 * Add an entry to the SMDI access control list.
 *                 The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6467","type":"sequence"}]
 */
class SystemSMDIAddACLEntryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName netAddress
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6467
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6467
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

