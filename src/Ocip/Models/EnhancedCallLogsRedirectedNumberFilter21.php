<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsRedirectedNumberFilter21
 *
 * Filter criteria based on the transferred/forwarded number.
 */
class EnhancedCallLogsRedirectedNumberFilter21
{

    /**
     * @ElementName redirectedCall
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21|null
     */
    private $redirectedCall = null;

    /**
     * @ElementName includeServiceInvocationBasicCallType
     * @var string[]
     */
    private $includeServiceInvocationBasicCallType = array(
        
    );

    /**
     * @ElementName includeServiceInvocationCallCategory
     * @var string[]
     */
    private $includeServiceInvocationCallCategory = array(
        
    );

    /**
     * @ElementName includeServiceInvocationConfigurableCallType
     * @var string[]
     */
    private $includeServiceInvocationConfigurableCallType = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationDialedNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationCalledNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    private $searchCriteriaServiceInvocationNetworkTranslatedNumber = array(
        
    );

    /**
     * Getter for redirectedCall
     *
     * @ElementName redirectedCall
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21|null
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall;
    }

    /**
     * Setter for redirectedCall
     *
     * @ElementName redirectedCall
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsRedirectedCallSelection21|null $redirectedCall
     * @return $this
     */
    public function setRedirectedCall($redirectedCall)
    {
        $this->redirectedCall = $redirectedCall;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationBasicCallType
     *
     * @ElementName includeServiceInvocationBasicCallType
     * @return string[]
     */
    public function getIncludeServiceInvocationBasicCallType()
    {
        return $this->includeServiceInvocationBasicCallType;
    }

    /**
     * Setter for includeServiceInvocationBasicCallType
     *
     * @ElementName includeServiceInvocationBasicCallType
     * @param string[] $includeServiceInvocationBasicCallType
     * @return $this
     */
    public function setIncludeServiceInvocationBasicCallType($includeServiceInvocationBasicCallType)
    {
        $this->includeServiceInvocationBasicCallType = $includeServiceInvocationBasicCallType;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationBasicCallType
     *
     * @ElementName includeServiceInvocationBasicCallType
     * @param string $includeServiceInvocationBasicCallType
     * @return $this
     */
    public function addIncludeServiceInvocationBasicCallType($includeServiceInvocationBasicCallType)
    {
        $this->includeServiceInvocationBasicCallType []= $includeServiceInvocationBasicCallType;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationCallCategory
     *
     * @ElementName includeServiceInvocationCallCategory
     * @return string[]
     */
    public function getIncludeServiceInvocationCallCategory()
    {
        return $this->includeServiceInvocationCallCategory;
    }

    /**
     * Setter for includeServiceInvocationCallCategory
     *
     * @ElementName includeServiceInvocationCallCategory
     * @param string[] $includeServiceInvocationCallCategory
     * @return $this
     */
    public function setIncludeServiceInvocationCallCategory($includeServiceInvocationCallCategory)
    {
        $this->includeServiceInvocationCallCategory = $includeServiceInvocationCallCategory;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationCallCategory
     *
     * @ElementName includeServiceInvocationCallCategory
     * @param string $includeServiceInvocationCallCategory
     * @return $this
     */
    public function addIncludeServiceInvocationCallCategory($includeServiceInvocationCallCategory)
    {
        $this->includeServiceInvocationCallCategory []= $includeServiceInvocationCallCategory;
        return $this;
    }

    /**
     * Getter for includeServiceInvocationConfigurableCallType
     *
     * @ElementName includeServiceInvocationConfigurableCallType
     * @return string[]
     */
    public function getIncludeServiceInvocationConfigurableCallType()
    {
        return $this->includeServiceInvocationConfigurableCallType;
    }

    /**
     * Setter for includeServiceInvocationConfigurableCallType
     *
     * @ElementName includeServiceInvocationConfigurableCallType
     * @param string[] $includeServiceInvocationConfigurableCallType
     * @return $this
     */
    public function setIncludeServiceInvocationConfigurableCallType($includeServiceInvocationConfigurableCallType)
    {
        $this->includeServiceInvocationConfigurableCallType = $includeServiceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * Adder for includeServiceInvocationConfigurableCallType
     *
     * @ElementName includeServiceInvocationConfigurableCallType
     * @param string $includeServiceInvocationConfigurableCallType
     * @return $this
     */
    public function addIncludeServiceInvocationConfigurableCallType($includeServiceInvocationConfigurableCallType)
    {
        $this->includeServiceInvocationConfigurableCallType []= $includeServiceInvocationConfigurableCallType;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationDialedNumber
     *
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationDialedNumber()
    {
        return $this->searchCriteriaServiceInvocationDialedNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationDialedNumber
     *
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationDialedNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationDialedNumber($searchCriteriaServiceInvocationDialedNumber)
    {
        $this->searchCriteriaServiceInvocationDialedNumber = $searchCriteriaServiceInvocationDialedNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationDialedNumber
     *
     * @ElementName searchCriteriaServiceInvocationDialedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationDialedNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationDialedNumber($searchCriteriaServiceInvocationDialedNumber)
    {
        $this->searchCriteriaServiceInvocationDialedNumber []= $searchCriteriaServiceInvocationDialedNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationCalledNumber
     *
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationCalledNumber()
    {
        return $this->searchCriteriaServiceInvocationCalledNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationCalledNumber
     *
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationCalledNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationCalledNumber($searchCriteriaServiceInvocationCalledNumber)
    {
        $this->searchCriteriaServiceInvocationCalledNumber = $searchCriteriaServiceInvocationCalledNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationCalledNumber
     *
     * @ElementName searchCriteriaServiceInvocationCalledNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationCalledNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationCalledNumber($searchCriteriaServiceInvocationCalledNumber)
    {
        $this->searchCriteriaServiceInvocationCalledNumber []= $searchCriteriaServiceInvocationCalledNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[]
     */
    public function getSearchCriteriaServiceInvocationNetworkTranslatedNumber()
    {
        return $this->searchCriteriaServiceInvocationNetworkTranslatedNumber;
    }

    /**
     * Setter for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI[] $searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @return $this
     */
    public function setSearchCriteriaServiceInvocationNetworkTranslatedNumber($searchCriteriaServiceInvocationNetworkTranslatedNumber)
    {
        $this->searchCriteriaServiceInvocationNetworkTranslatedNumber = $searchCriteriaServiceInvocationNetworkTranslatedNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceInvocationNetworkTranslatedNumber
     *
     * @ElementName searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaOutgoingDNorSIPURI $searchCriteriaServiceInvocationNetworkTranslatedNumber
     * @return $this
     */
    public function addSearchCriteriaServiceInvocationNetworkTranslatedNumber($searchCriteriaServiceInvocationNetworkTranslatedNumber)
    {
        $this->searchCriteriaServiceInvocationNetworkTranslatedNumber []= $searchCriteriaServiceInvocationNetworkTranslatedNumber;
        return $this;
    }


}

