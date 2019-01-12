<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 *
 * Get a home zone from the BroadWorks Mobile Manager.
 *         The response is either EnterpriseBroadWorksMobileManagerGetHomeZoneResponse or ErrorResponse.
 *
 * @see EnterpriseBroadWorksMobileManagerGetHomeZoneResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:273","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:273
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:273
     * @var string|null
     */
    private $homeZoneId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @return string
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @param string $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneId()
    {
        $this->homeZoneId = null;
        return $this;
    }


}

