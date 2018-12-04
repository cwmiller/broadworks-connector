<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsRedirectedNumberFilter21sp1
 *
 * Filter criteria based on the transferred/forwarded number.
 *
 * @Groups [{"id":"1b1edb32782550c1a52523b734e3143d:381","type":"sequence","children":[{"id":"1b1edb32782550c1a52523b734e3143d:382","type":"choice"}]}]
 */
class EnhancedCallLogsRedirectedNumberFilter21sp1
{

    /**
     * @ElementName redirectedCall
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21sp1
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21sp1|null
     */
    private $redirectedCall = null;

    /**
     * @ElementName includeServiceInvocationBasicCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallType
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallType[]
     */
    private $includeServiceInvocationBasicCallType = array(
        
    );

    /**
     * @ElementName includeServiceInvocationCallCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCategory
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCategory[]
     */
    private $includeServiceInvocationCallCategory = array(
        
    );

    /**
     * @ElementName includeServiceInvocationConfigurableCallType
     * @Type string
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var string[]
     */
    private $includeServiceInvocationConfigurableCallType = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationDialedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationCalledNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI
     * @Array
     * @Group 1b1edb32782550c1a52523b734e3143d:382
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationNetworkTranslatedNumber = array(
        
    );

    /**
     * Getter for redirectedCall
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21sp1
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectedCall;
    }

    /**
     * Setter for redirectedCall
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21sp1 $redirectedCall
     * @return $this
     */
    public function setRedirectedCall(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21sp1 $redirectedCall)
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

