<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetListRequest
 *
 * Request to get the list of sip device types in the system.
 *         See Also: SystemDeviceTypeGetAvailableListRequest14sp3.
 *         The response is either SystemSIPDeviceTypeGetListResponse or
 * ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    private $searchCriteriaDeviceType = array(
        
    );

    /**
     * @ElementName searchCriteriaExactSignalingAddressType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null
     */
    private $searchCriteriaExactSignalingAddressType = null;

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[]
     */
    public function getSearchCriteriaDeviceType()
    {
        return $this->searchCriteriaDeviceType;
    }

    /**
     * Setter for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType[] $searchCriteriaDeviceType
     * @return $this
     */
    public function setSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType = $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceType
     *
     * @ElementName searchCriteriaDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceType $searchCriteriaDeviceType
     * @return $this
     */
    public function addSearchCriteriaDeviceType($searchCriteriaDeviceType)
    {
        $this->searchCriteriaDeviceType []= $searchCriteriaDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactSignalingAddressType
     *
     * @ElementName searchCriteriaExactSignalingAddressType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null
     */
    public function getSearchCriteriaExactSignalingAddressType()
    {
        return $this->searchCriteriaExactSignalingAddressType;
    }

    /**
     * Setter for searchCriteriaExactSignalingAddressType
     *
     * @ElementName searchCriteriaExactSignalingAddressType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSignalingAddressType|null $searchCriteriaExactSignalingAddressType
     * @return $this
     */
    public function setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType)
    {
        $this->searchCriteriaExactSignalingAddressType = $searchCriteriaExactSignalingAddressType;
        return $this;
    }


}

