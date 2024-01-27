<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeGetListRequest21
 *
 * Get a list of system service access codes.
 *         The response is either SystemBroadWorksMobilityServiceAccessCodeGetListResponse21 or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1317","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1317
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceAccessCodeListName = null;

    /**
     * Getter for serviceAccessCodeListName
     *
     * @return string
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @param string $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccessCodeListName()
    {
        $this->serviceAccessCodeListName = null;
        return $this;
    }
}

