<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsNumberFilter
 *
 * Filter criteria based on the called number or number called.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:29","type":"sequence","children":[{"id":"d37849f5e289836ccd316323a7a3799a:30","type":"choice"}]}]
 */
class EnhancedCallLogsNumberFilter
{

    /**
     * @ElementName includeBasicCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[]
     */
    private $includeBasicCallType = array(
        
    );

    /**
     * @ElementName includeCallCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCategory[]
     */
    private $includeCallCategory = array(
        
    );

    /**
     * @ElementName includeConfigurableCallType
     * @Type string
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var string[]
     */
    private $includeConfigurableCallType = array(
        
    );

    /**
     * @ElementName searchCriteriaDialedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaDialedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaCalledNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaCalledNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaNetworkTranslatedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaNetworkTranslatedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaCallingPresentationNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group d37849f5e289836ccd316323a7a3799a:30
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaCallingPresentationNumber = array(
        
    );

    /**
     * Getter for includeBasicCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[]
     */
    public function getIncludeBasicCallType()
    {
        return $this->includeBasicCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeBasicCallType;
    }

    /**
     * Setter for includeBasicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[] $includeBasicCallType
     * @return $this
     */
    public function setIncludeBasicCallType(array $includeBasicCallType)
    {
        $this->includeBasicCallType = $includeBasicCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeBasicCallType()
    {
        $this->includeBasicCallType = null;
        return $this;
    }

    /**
     * Adder for includeBasicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType $includeBasicCallType
     * @return $this
     */
    public function addIncludeBasicCallType($includeBasicCallType)
    {
        $this->includeBasicCallType[] = $includeBasicCallType;
        return $this;
    }

    /**
     * Getter for includeCallCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCategory[]
     */
    public function getIncludeCallCategory()
    {
        return $this->includeCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeCallCategory;
    }

    /**
     * Setter for includeCallCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory[] $includeCallCategory
     * @return $this
     */
    public function setIncludeCallCategory(array $includeCallCategory)
    {
        $this->includeCallCategory = $includeCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeCallCategory()
    {
        $this->includeCallCategory = null;
        return $this;
    }

    /**
     * Adder for includeCallCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory $includeCallCategory
     * @return $this
     */
    public function addIncludeCallCategory($includeCallCategory)
    {
        $this->includeCallCategory[] = $includeCallCategory;
        return $this;
    }

    /**
     * Getter for includeConfigurableCallType
     *
     * @return string[]
     */
    public function getIncludeConfigurableCallType()
    {
        return $this->includeConfigurableCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeConfigurableCallType;
    }

    /**
     * Setter for includeConfigurableCallType
     *
     * @param string[] $includeConfigurableCallType
     * @return $this
     */
    public function setIncludeConfigurableCallType(array $includeConfigurableCallType)
    {
        $this->includeConfigurableCallType = $includeConfigurableCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeConfigurableCallType()
    {
        $this->includeConfigurableCallType = null;
        return $this;
    }

    /**
     * Adder for includeConfigurableCallType
     *
     * @param string $includeConfigurableCallType
     * @return $this
     */
    public function addIncludeConfigurableCallType(string $includeConfigurableCallType)
    {
        $this->includeConfigurableCallType[] = $includeConfigurableCallType;
        return $this;
    }

    /**
     * Getter for searchCriteriaDialedNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaDialedNumber()
    {
        return $this->searchCriteriaDialedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDialedNumber;
    }

    /**
     * Setter for searchCriteriaDialedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaDialedNumber
     * @return $this
     */
    public function setSearchCriteriaDialedNumber(array $searchCriteriaDialedNumber)
    {
        $this->searchCriteriaDialedNumber = $searchCriteriaDialedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDialedNumber()
    {
        $this->searchCriteriaDialedNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDialedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaDialedNumber
     * @return $this
     */
    public function addSearchCriteriaDialedNumber($searchCriteriaDialedNumber)
    {
        $this->searchCriteriaDialedNumber[] = $searchCriteriaDialedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaCalledNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaCalledNumber()
    {
        return $this->searchCriteriaCalledNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCalledNumber;
    }

    /**
     * Setter for searchCriteriaCalledNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaCalledNumber
     * @return $this
     */
    public function setSearchCriteriaCalledNumber(array $searchCriteriaCalledNumber)
    {
        $this->searchCriteriaCalledNumber = $searchCriteriaCalledNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCalledNumber()
    {
        $this->searchCriteriaCalledNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCalledNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaCalledNumber
     * @return $this
     */
    public function addSearchCriteriaCalledNumber($searchCriteriaCalledNumber)
    {
        $this->searchCriteriaCalledNumber[] = $searchCriteriaCalledNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaNetworkTranslatedNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaNetworkTranslatedNumber()
    {
        return $this->searchCriteriaNetworkTranslatedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaNetworkTranslatedNumber;
    }

    /**
     * Setter for searchCriteriaNetworkTranslatedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaNetworkTranslatedNumber
     * @return $this
     */
    public function setSearchCriteriaNetworkTranslatedNumber(array $searchCriteriaNetworkTranslatedNumber)
    {
        $this->searchCriteriaNetworkTranslatedNumber = $searchCriteriaNetworkTranslatedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaNetworkTranslatedNumber()
    {
        $this->searchCriteriaNetworkTranslatedNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaNetworkTranslatedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaNetworkTranslatedNumber
     * @return $this
     */
    public function addSearchCriteriaNetworkTranslatedNumber($searchCriteriaNetworkTranslatedNumber)
    {
        $this->searchCriteriaNetworkTranslatedNumber[] = $searchCriteriaNetworkTranslatedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallingPresentationNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaCallingPresentationNumber()
    {
        return $this->searchCriteriaCallingPresentationNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallingPresentationNumber;
    }

    /**
     * Setter for searchCriteriaCallingPresentationNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaCallingPresentationNumber
     * @return $this
     */
    public function setSearchCriteriaCallingPresentationNumber(array $searchCriteriaCallingPresentationNumber)
    {
        $this->searchCriteriaCallingPresentationNumber = $searchCriteriaCallingPresentationNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallingPresentationNumber()
    {
        $this->searchCriteriaCallingPresentationNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallingPresentationNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaCallingPresentationNumber
     * @return $this
     */
    public function addSearchCriteriaCallingPresentationNumber($searchCriteriaCallingPresentationNumber)
    {
        $this->searchCriteriaCallingPresentationNumber[] = $searchCriteriaCallingPresentationNumber;
        return $this;
    }


}

