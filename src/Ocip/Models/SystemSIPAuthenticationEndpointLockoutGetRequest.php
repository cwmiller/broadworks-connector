<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationEndpointLockoutGetRequest
 *
 * Request to get sip authentication endpoint lockout data in the system.
 *          The response is either a
 * SystemSIPAuthenticationEndpointLockoutGetResponse or an ErrorResponse.
 */
class SystemSIPAuthenticationEndpointLockoutGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactOrganizationType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    private $searchCriteriaExactOrganizationType = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaLinePortUserPart
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    private $searchCriteriaLinePortUserPart = array(
        
    );

    /**
     * @ElementName searchCriteriaLinePortDomain
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    private $searchCriteriaLinePortDomain = array(
        
    );

    /**
     * @ElementName searchCriteriaUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

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
     * Getter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId []= $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactOrganizationType
     *
     * @ElementName searchCriteriaExactOrganizationType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null
     */
    public function getSearchCriteriaExactOrganizationType()
    {
        return $this->searchCriteriaExactOrganizationType;
    }

    /**
     * Setter for searchCriteriaExactOrganizationType
     *
     * @ElementName searchCriteriaExactOrganizationType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactOrganizationType|null $searchCriteriaExactOrganizationType
     * @return $this
     */
    public function setSearchCriteriaExactOrganizationType($searchCriteriaExactOrganizationType)
    {
        $this->searchCriteriaExactOrganizationType = $searchCriteriaExactOrganizationType;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId []= $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return $this->searchCriteriaLinePortUserPart;
    }

    /**
     * Setter for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[] $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart = $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function addSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart []= $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * Getter for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return $this->searchCriteriaLinePortDomain;
    }

    /**
     * Setter for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[] $searchCriteriaLinePortDomain
     * @return $this
     */
    public function setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain = $searchCriteriaLinePortDomain;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain
     * @return $this
     */
    public function addSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain []= $searchCriteriaLinePortDomain;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName []= $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName []= $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId []= $searchCriteriaUserId;
        return $this;
    }


}

