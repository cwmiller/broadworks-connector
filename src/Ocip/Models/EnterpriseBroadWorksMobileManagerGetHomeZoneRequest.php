<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 *
 * Get a home zone from the BroadWorks Mobile Manager.
 *         The response is either
 * EnterpriseBroadWorksMobileManagerGetHomeZoneResponse or ErrorResponse.
 *
 * @see EnterpriseBroadWorksMobileManagerGetHomeZoneResponse
 * @see ErrorResponse
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @var string|null
     */
    private $homeZoneId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @ElementName homeZoneId
     * @return string|null
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string|null $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }


}

