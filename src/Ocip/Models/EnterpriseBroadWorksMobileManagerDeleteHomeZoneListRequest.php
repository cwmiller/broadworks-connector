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
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:157","type":"sequence"}]
 */
class EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:157
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @Type string
     * @Array
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:157
     * @var string[]
     */
    protected $homeZoneId = array(
        
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

