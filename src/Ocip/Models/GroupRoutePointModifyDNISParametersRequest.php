<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyDNISParametersRequest
 *
 * Modify the setting that are configured for all the DNIS in a Route Point.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointModifyDNISParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName displayDNISNumber
     * @var bool|null
     */
    private $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @var bool|null
     */
    private $displayDNISName = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for displayDNISNumber
     *
     * @ElementName displayDNISNumber
     * @return bool|null
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @ElementName displayDNISNumber
     * @param bool|null $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @ElementName displayDNISName
     * @return bool|null
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @ElementName displayDNISName
     * @param bool|null $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }


}

