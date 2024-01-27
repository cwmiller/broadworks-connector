<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest
 *
 * Get a list of users that currently have the specified Security Classification assigned.
 *         The response is either SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse or ErrorResponse.
 *
 * @see SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:167","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName securityClassification
     * @Type string
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $securityClassification = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaTrunkGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName
     * @Array
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    protected $searchCriteriaTrunkGroupName = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = [
        
    ];

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    protected $searchCriteriaServiceProviderId = [
        
    ];

    /**
     * @ElementName searchCriteriaExactOrganizationType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType
     * @Optional
     * @Group 435c279b3e6710f4ada60ed66a93d278:167
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    protected $searchCriteriaExactOrganizationType = null;

    /**
     * Getter for securityClassification
     *
     * @return string
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @param string $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassification()
    {
        $this->securityClassification = null;
        return $this;
    }

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
     * Getter for searchCriteriaTrunkGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[]
     */
    public function getSearchCriteriaTrunkGroupName()
    {
        return $this->searchCriteriaTrunkGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaTrunkGroupName;
    }

    /**
     * Setter for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName[] $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function setSearchCriteriaTrunkGroupName(array $searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName = $searchCriteriaTrunkGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaTrunkGroupName()
    {
        $this->searchCriteriaTrunkGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaTrunkGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTrunkGroupName $searchCriteriaTrunkGroupName
     * @return $this
     */
    public function addSearchCriteriaTrunkGroupName($searchCriteriaTrunkGroupName)
    {
        $this->searchCriteriaTrunkGroupName[] = $searchCriteriaTrunkGroupName;
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
}

