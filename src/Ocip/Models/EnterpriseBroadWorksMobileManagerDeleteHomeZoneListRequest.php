<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest
 *
 * Delete a list of home zones from the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @var string[]
     */
    private $homeZoneId = array(
        
    );

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
     * @return string[]
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string[] $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }

    /**
     * Adder for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string $homeZoneId
     * @return $this
     */
    public function addHomeZoneId($homeZoneId)
    {
        $this->homeZoneId []= $homeZoneId;
        return $this;
    }


}

