<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest
 *
 * Delete a list of home zones from the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @Type string
     * @Array
     * @var string[]
     */
    private $homeZoneId = array(
        
    );

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
     * @return string[]
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @param string[] $homeZoneId
     * @return $this
     */
    public function setHomeZoneId(array $homeZoneId)
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

    /**
     * Adder for homeZoneId
     *
     * @param string $homeZoneId
     * @return $this
     */
    public function addHomeZoneId(string $homeZoneId)
    {
        $this->homeZoneId[] = $homeZoneId;
        return $this;
    }


}

