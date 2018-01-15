<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnAddListRequest
 *
 * Adds DNs to a service provider. It is possible to add either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDnAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName phoneNumber
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * @ElementName dnRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $dnRange = array(
        
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
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }

    /**
     * Getter for dnRange
     *
     * @ElementName dnRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getDnRange()
    {
        return $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @ElementName dnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $dnRange
     * @return $this
     */
    public function setDnRange($dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * Adder for dnRange
     *
     * @ElementName dnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange
     * @return $this
     */
    public function addDnRange($dnRange)
    {
        $this->dnRange []= $dnRange;
        return $this;
    }


}

