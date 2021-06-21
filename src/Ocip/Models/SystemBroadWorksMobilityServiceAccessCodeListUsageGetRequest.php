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
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1428","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1428
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceAccessCodeListName = null;

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

