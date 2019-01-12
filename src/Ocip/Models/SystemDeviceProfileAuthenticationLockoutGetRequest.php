<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceProfileAuthenticationLockoutGetRequest
 *
 * Request to get device password authentication lockout data in the system.
 *          The response is either a SystemDeviceProfileAuthenticationLockoutGetResponse or an ErrorResponse.
 *
 * @see SystemDeviceProfileAuthenticationLockoutGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7202","type":"sequence"}]
 */
class SystemDeviceProfileAuthenticationLockoutGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactOrganizationType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    private $searchCriteriaExactOrganizationType = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    private $searchCriteriaDeviceName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7202
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    private $searchCriteriaExactDeviceType = null;

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderId()
    {
        $this->searchCriteriaServiceProviderId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId[] = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactOrganizationType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType
     */
    public function getSearchCriteriaExactOrganizationType()
    {
        return $this->searchCriteriaExactOrganizationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactOrganizationType;
    }

    /**
     * Setter for searchCriteriaExactOrganizationType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType $searchCriteriaExactOrganizationType
     * @return $this
     */
    public function setSearchCriteriaExactOrganizationType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType $searchCriteriaExactOrganizationType)
    {
        $this->searchCriteriaExactOrganizationType = $searchCriteriaExactOrganizationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactOrganizationType()
    {
        $this->searchCriteriaExactOrganizationType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->searchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId[] = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceName;
    }

    /**
     * Setter for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[] $searchCriteriaDeviceName
     * @return $this
     */
    public function setSearchCriteriaDeviceName(array $searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceName()
    {
        $this->searchCriteriaDeviceName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName $searchCriteriaDeviceName
     * @return $this
     */
    public function addSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName[] = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceType;
    }

    /**
     * Setter for searchCriteriaExactDeviceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceType()
    {
        $this->searchCriteriaExactDeviceType = null;
        return $this;
    }


}

