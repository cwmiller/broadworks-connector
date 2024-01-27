<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsRedirectedNumberFilter23
 *
 * Filter criteria based on the transferred/forwarded number.
 *
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:416","type":"sequence","children":[{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:417","type":"choice"}]}]
 */
class EnhancedCallLogsRedirectedNumberFilter23
{
    /**
     * @ElementName redirectedCall
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection23
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection23|null
     */
    protected $redirectedCall = null;

    /**
     * @ElementName includeServiceInvocationBasicCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[]
     */
    protected $includeServiceInvocationBasicCallType = [
        
    ];

    /**
     * @ElementName includeServiceInvocationCallCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCategory[]
     */
    protected $includeServiceInvocationCallCategory = [
        
    ];

    /**
     * @ElementName includeServiceInvocationConfigurableCallType
     * @Type string
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $includeServiceInvocationConfigurableCallType = [
        
    ];

    /**
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    protected $searchCriteriaServiceInvocationDialedNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    protected $searchCriteriaServiceInvocationCalledNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    protected $searchCriteriaServiceInvocationNetworkTranslatedNumber = [
        
    ];

    /**
     * Getter for redirectedCall
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection23
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectedCall;
    }

    /**
     * Setter for redirectedCall
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection23 $redirectedCall
     * @return $this
     */
    public function setRedirectedCall(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection23 $redirectedCall)
    {
        $this->redirectedCall = $redirectedCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectedCall()
    {
        $this->redirectedCall = null;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationBasicCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[]
     */
    public function getIncludeServiceInvocationBasicCallType()
    {
        return $this->includeServiceInvocationBasicCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeServiceInvocationBasicCallType;
    }

    /**
     * Setter for includeServiceInvocationBasicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[] $includeServiceInvocationBasicCallType
     * @return $this
     */
    public function setIncludeServiceInvocationBasicCallType(array $includeServiceInvocationBasicCallType)
    {
        $this->includeServiceInvocationBasicCallType = $includeServiceInvocationBasicCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeServiceInvocationBasicCallType()
    {
        $this->includeServiceInvocationBasicCallType = null;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationBasicCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallType $includeServiceInvocationBasicCallType
     * @return $this
     */
    public function addIncludeServiceInvocationBasicCallType($includeServiceInvocationBasicCallType)
    {
        $this->includeServiceInvocationBasicCallType[] = $includeServiceInvocationBasicCallType;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationCallCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCategory[]
     */
    public function getIncludeServiceInvocationCallCategory()
    {
        return $this->includeServiceInvocationCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeServiceInvocationCallCategory;
    }

    /**
     * Setter for includeServiceInvocationCallCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory[] $includeServiceInvocationCallCategory
     * @return $this
     */
    public function setIncludeServiceInvocationCallCategory(array $includeServiceInvocationCallCategory)
    {
        $this->includeServiceInvocationCallCategory = $includeServiceInvocationCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeServiceInvocationCallCategory()
    {
        $this->includeServiceInvocationCallCategory = null;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationCallCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCategory $includeServiceInvocationCallCategory
     * @return $this
     */
    public function addIncludeServiceInvocationCallCategory($includeServiceInvocationCallCategory)
    {
        $this->includeServiceInvocationCallCategory[] = $includeServiceInvocationCallCategory;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationConfigurableCallType
     *
     * @return string[]
     */
    public function getIncludeServiceInvocationConfigurableCallType()
    {
        return $this->includeServiceInvocationConfigurableCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeServiceInvocationConfigurableCallType;
    }

    /**
     * Setter for includeServiceInvocationConfigurableCallType
     *
     * @param string[] $includeServiceInvocationConfigurableCallType
     * @return $this
     */
    public function setIncludeServiceInvocationConfigurableCallType(array $includeServiceInvocationConfigurableCallType)
    {
        $this->includeServiceInvocationConfigurableCallType = $includeServiceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeServiceInvocationConfigurableCallType()
    {
        $this->includeServiceInvocationConfigurableCallType = null;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationConfigurableCallType
     *
     * @param string $includeServiceInvocationConfigurableCallType
     * @return $this
     */
    public function addIncludeServiceInvocationConfigurableCallType(string $includeServiceInvocationConfigurableCallType)
    {
        $this->includeServiceInvocationConfigurableCallType[] = $includeServiceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationDialedNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationDialedNumber()
    {
        return $this->searchCriteriaServiceInvocationDialedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceInvocationDialedNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationDialedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationDialedNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationDialedNumber(array $searchCriteriaServiceInvocationDialedNumber)
    {
        $this->searchCriteriaServiceInvocationDialedNumber = $searchCriteriaServiceInvocationDialedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceInvocationDialedNumber()
    {
        $this->searchCriteriaServiceInvocationDialedNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationDialedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationDialedNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationDialedNumber($searchCriteriaServiceInvocationDialedNumber)
    {
        $this->searchCriteriaServiceInvocationDialedNumber[] = $searchCriteriaServiceInvocationDialedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationCalledNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationCalledNumber()
    {
        return $this->searchCriteriaServiceInvocationCalledNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceInvocationCalledNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationCalledNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationCalledNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationCalledNumber(array $searchCriteriaServiceInvocationCalledNumber)
    {
        $this->searchCriteriaServiceInvocationCalledNumber = $searchCriteriaServiceInvocationCalledNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceInvocationCalledNumber()
    {
        $this->searchCriteriaServiceInvocationCalledNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationCalledNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationCalledNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationCalledNumber($searchCriteriaServiceInvocationCalledNumber)
    {
        $this->searchCriteriaServiceInvocationCalledNumber[] = $searchCriteriaServiceInvocationCalledNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationNetworkTranslatedNumber()
    {
        return $this->searchCriteriaServiceInvocationNetworkTranslatedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceInvocationNetworkTranslatedNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationNetworkTranslatedNumber(array $searchCriteriaServiceInvocationNetworkTranslatedNumber)
    {
        $this->searchCriteriaServiceInvocationNetworkTranslatedNumber = $searchCriteriaServiceInvocationNetworkTranslatedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceInvocationNetworkTranslatedNumber()
    {
        $this->searchCriteriaServiceInvocationNetworkTranslatedNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationNetworkTranslatedNumber($searchCriteriaServiceInvocationNetworkTranslatedNumber)
    {
        $this->searchCriteriaServiceInvocationNetworkTranslatedNumber[] = $searchCriteriaServiceInvocationNetworkTranslatedNumber;
        return $this;
    }
}

