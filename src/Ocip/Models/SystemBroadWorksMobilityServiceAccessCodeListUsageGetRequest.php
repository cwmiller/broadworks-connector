<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest
 *
 * Get all the Mobile Networks using a given Service Access Code list.
 *         The response is either SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1427","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1427
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

