<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeGetListRequest21
 *
 * Get a list of system service access codes.
 *         The response is either
 * SystemBroadWorksMobilityServiceAccessCodeGetListResponse21 or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeGetListResponse21
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceAccessCodeListName
     * @Type string
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

