<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointModifyDNISParametersRequest
 *
 * Modify the setting that are configured for all the DNIS in a Route Point.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:787","type":"sequence"}]
 */
class GroupRoutePointModifyDNISParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group a27224a048c30ff69eab9209dec841cc:787
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName displayDNISNumber
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:787
     * @var bool|null
     */
    private $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @Type bool
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:787
     * @var bool|null
     */
    private $displayDNISName = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for displayDNISNumber
     *
     * @return bool
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @param bool $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISNumber()
    {
        $this->displayDNISNumber = null;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @return bool
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @param bool $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISName()
    {
        $this->displayDNISName = null;
        return $this;
    }


}

