<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsNumberFilter
 *
 * Filter criteria based on the called number or number called.
 */
class EnhancedCallLogsNumberFilter
{

    /**
     * @ElementName includeBasicCallType
     * @var string[]
     */
    private $includeBasicCallType = array(
        
    );

    /**
     * @ElementName includeCallCategory
     * @var string[]
     */
    private $includeCallCategory = array(
        
    );

    /**
     * @ElementName includeConfigurableCallType
     * @var string[]
     */
    private $includeConfigurableCallType = array(
        
    );

    /**
     * @ElementName searchCriteriaDialedNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaDialedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaCalledNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaCalledNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaNetworkTranslatedNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaNetworkTranslatedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaCallingPresentationNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaCallingPresentationNumber = array(
        
    );

    /**
     * Getter for includeBasicCallType
     *
     * @ElementName includeBasicCallType
     * @return string[]
     */
    public function getIncludeBasicCallType()
    {
        return $this->includeBasicCallType;
    }

    /**
     * Setter for includeBasicCallType
     *
     * @ElementName includeBasicCallType
     * @param string[] $includeBasicCallType
     * @return $this
     */
    public function setIncludeBasicCallType($includeBasicCallType)
    {
        $this->includeBasicCallType = $includeBasicCallType;
        return $this;
    }

    /**
     * Adder for includeBasicCallType
     *
     * @ElementName includeBasicCallType
     * @param string $includeBasicCallType
     * @return $this
     */
    public function addIncludeBasicCallType($includeBasicCallType)
    {
        $this->includeBasicCallType []= $includeBasicCallType;
        return $this;
    }

    /**
     * Getter for includeCallCategory
     *
     * @ElementName includeCallCategory
     * @return string[]
     */
    public function getIncludeCallCategory()
    {
        return $this->includeCallCategory;
    }

    /**
     * Setter for includeCallCategory
     *
     * @ElementName includeCallCategory
     * @param string[] $includeCallCategory
     * @return $this
     */
    public function setIncludeCallCategory($includeCallCategory)
    {
        $this->includeCallCategory = $includeCallCategory;
        return $this;
    }

    /**
     * Adder for includeCallCategory
     *
     * @ElementName includeCallCategory
     * @param string $includeCallCategory
     * @return $this
     */
    public function addIncludeCallCategory($includeCallCategory)
    {
        $this->includeCallCategory []= $includeCallCategory;
        return $this;
    }

    /**
     * Getter for includeConfigurableCallType
     *
     * @ElementName includeConfigurableCallType
     * @return string[]
     */
    public function getIncludeConfigurableCallType()
    {
        return $this->includeConfigurableCallType;
    }

    /**
     * Setter for includeConfigurableCallType
     *
     * @ElementName includeConfigurableCallType
     * @param string[] $includeConfigurableCallType
     * @return $this
     */
    public function setIncludeConfigurableCallType($includeConfigurableCallType)
    {
        $this->includeConfigurableCallType = $includeConfigurableCallType;
        return $this;
    }

    /**
     * Adder for includeConfigurableCallType
     *
     * @ElementName includeConfigurableCallType
     * @param string $includeConfigurableCallType
     * @return $this
     */
    public function addIncludeConfigurableCallType($includeConfigurableCallType)
    {
        $this->includeConfigurableCallType []= $includeConfigurableCallType;
        return $this;
    }

    /**
     * Getter for searchCriteriaDialedNumber
     *
     * @ElementName searchCriteriaDialedNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaDialedNumber()
    {
        return $this->searchCriteriaDialedNumber;
    }

    /**
     * Setter for searchCriteriaDialedNumber
     *
     * @ElementName searchCriteriaDialedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaDialedNumber
     * @return $this
     */
    public function setSearchCriteriaDialedNumber($searchCriteriaDialedNumber)
    {
        $this->searchCriteriaDialedNumber = $searchCriteriaDialedNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaDialedNumber
     *
     * @ElementName searchCriteriaDialedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaDialedNumber
     * @return $this
     */
    public function addSearchCriteriaDialedNumber($searchCriteriaDialedNumber)
    {
        $this->searchCriteriaDialedNumber []= $searchCriteriaDialedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaCalledNumber
     *
     * @ElementName searchCriteriaCalledNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaCalledNumber()
    {
        return $this->searchCriteriaCalledNumber;
    }

    /**
     * Setter for searchCriteriaCalledNumber
     *
     * @ElementName searchCriteriaCalledNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaCalledNumber
     * @return $this
     */
    public function setSearchCriteriaCalledNumber($searchCriteriaCalledNumber)
    {
        $this->searchCriteriaCalledNumber = $searchCriteriaCalledNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaCalledNumber
     *
     * @ElementName searchCriteriaCalledNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaCalledNumber
     * @return $this
     */
    public function addSearchCriteriaCalledNumber($searchCriteriaCalledNumber)
    {
        $this->searchCriteriaCalledNumber []= $searchCriteriaCalledNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaNetworkTranslatedNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaNetworkTranslatedNumber()
    {
        return $this->searchCriteriaNetworkTranslatedNumber;
    }

    /**
     * Setter for searchCriteriaNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaNetworkTranslatedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaNetworkTranslatedNumber
     * @return $this
     */
    public function setSearchCriteriaNetworkTranslatedNumber($searchCriteriaNetworkTranslatedNumber)
    {
        $this->searchCriteriaNetworkTranslatedNumber = $searchCriteriaNetworkTranslatedNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaNetworkTranslatedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaNetworkTranslatedNumber
     * @return $this
     */
    public function addSearchCriteriaNetworkTranslatedNumber($searchCriteriaNetworkTranslatedNumber)
    {
        $this->searchCriteriaNetworkTranslatedNumber []= $searchCriteriaNetworkTranslatedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallingPresentationNumber
     *
     * @ElementName searchCriteriaCallingPresentationNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaCallingPresentationNumber()
    {
        return $this->searchCriteriaCallingPresentationNumber;
    }

    /**
     * Setter for searchCriteriaCallingPresentationNumber
     *
     * @ElementName searchCriteriaCallingPresentationNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaCallingPresentationNumber
     * @return $this
     */
    public function setSearchCriteriaCallingPresentationNumber($searchCriteriaCallingPresentationNumber)
    {
        $this->searchCriteriaCallingPresentationNumber = $searchCriteriaCallingPresentationNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallingPresentationNumber
     *
     * @ElementName searchCriteriaCallingPresentationNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaCallingPresentationNumber
     * @return $this
     */
    public function addSearchCriteriaCallingPresentationNumber($searchCriteriaCallingPresentationNumber)
    {
        $this->searchCriteriaCallingPresentationNumber []= $searchCriteriaCallingPresentationNumber;
        return $this;
    }


}

