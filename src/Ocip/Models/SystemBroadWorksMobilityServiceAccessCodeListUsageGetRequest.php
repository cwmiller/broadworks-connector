<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest
 *
 * Get all the Mobile Networks using a given Service Access Code list.
 *         The response is either
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCodeListName
     * @var string|null
     */
    private $serviceAccessCodeListName = null;

    /**
     * Getter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @return string|null
     */
    public function getServiceAccessCodeListName()
    {
        return $this->serviceAccessCodeListName;
    }

    /**
     * Setter for serviceAccessCodeListName
     *
     * @ElementName serviceAccessCodeListName
     * @param string|null $serviceAccessCodeListName
     * @return $this
     */
    public function setServiceAccessCodeListName($serviceAccessCodeListName)
    {
        $this->serviceAccessCodeListName = $serviceAccessCodeListName;
        return $this;
    }


}

