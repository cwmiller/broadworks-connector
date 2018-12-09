<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialableCallerIDCriteriaGetResponse
 *
 * Response to the ServiceProviderDialableCallerIDCriteriaGetRequest.
 *         The response contains the Dialable Caller ID Criteria information.
 *
 * @see ServiceProviderDialableCallerIDCriteriaGetRequest
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:2725","type":"sequence"}]
 */
class ServiceProviderDialableCallerIDCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var string|null
     */
    private $prefixDigits = null;

    /**
     * @ElementName matchCallType
     * @Type string
     * @Array
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var string[]
     */
    private $matchCallType = array(
        
    );

    /**
     * @ElementName matchAlternateCallIndicator
     * @Type string
     * @Array
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var string[]
     */
    private $matchAlternateCallIndicator = array(
        
    );

    /**
     * @ElementName matchLocalCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @Type bool
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2725
     * @var bool|null
     */
    private $matchOtherCategory = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @return string
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @param string $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixDigits()
    {
        $this->prefixDigits = null;
        return $this;
    }

    /**
     * Getter for matchCallType
     *
     * @return string[]
     */
    public function getMatchCallType()
    {
        return $this->matchCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @param string[] $matchCallType
     * @return $this
     */
    public function setMatchCallType(array $matchCallType)
    {
        $this->matchCallType = $matchCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchCallType()
    {
        $this->matchCallType = null;
        return $this;
    }

    /**
     * Adder for matchCallType
     *
     * @param string $matchCallType
     * @return $this
     */
    public function addMatchCallType(string $matchCallType)
    {
        $this->matchCallType[] = $matchCallType;
        return $this;
    }

    /**
     * Getter for matchAlternateCallIndicator
     *
     * @return string[]
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @param string[] $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator(array $matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchAlternateCallIndicator()
    {
        $this->matchAlternateCallIndicator = null;
        return $this;
    }

    /**
     * Adder for matchAlternateCallIndicator
     *
     * @param string $matchAlternateCallIndicator
     * @return $this
     */
    public function addMatchAlternateCallIndicator(string $matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator[] = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for matchLocalCategory
     *
     * @return bool
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchLocalCategory;
    }

    /**
     * Setter for matchLocalCategory
     *
     * @param bool $matchLocalCategory
     * @return $this
     */
    public function setMatchLocalCategory($matchLocalCategory)
    {
        $this->matchLocalCategory = $matchLocalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchLocalCategory()
    {
        $this->matchLocalCategory = null;
        return $this;
    }

    /**
     * Getter for matchNationalCategory
     *
     * @return bool
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNationalCategory;
    }

    /**
     * Setter for matchNationalCategory
     *
     * @param bool $matchNationalCategory
     * @return $this
     */
    public function setMatchNationalCategory($matchNationalCategory)
    {
        $this->matchNationalCategory = $matchNationalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNationalCategory()
    {
        $this->matchNationalCategory = null;
        return $this;
    }

    /**
     * Getter for matchInterlataCategory
     *
     * @return bool
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInterlataCategory;
    }

    /**
     * Setter for matchInterlataCategory
     *
     * @param bool $matchInterlataCategory
     * @return $this
     */
    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $this->matchInterlataCategory = $matchInterlataCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInterlataCategory()
    {
        $this->matchInterlataCategory = null;
        return $this;
    }

    /**
     * Getter for matchIntralataCategory
     *
     * @return bool
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchIntralataCategory;
    }

    /**
     * Setter for matchIntralataCategory
     *
     * @param bool $matchIntralataCategory
     * @return $this
     */
    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $this->matchIntralataCategory = $matchIntralataCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchIntralataCategory()
    {
        $this->matchIntralataCategory = null;
        return $this;
    }

    /**
     * Getter for matchInternationalCategory
     *
     * @return bool
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchInternationalCategory;
    }

    /**
     * Setter for matchInternationalCategory
     *
     * @param bool $matchInternationalCategory
     * @return $this
     */
    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $this->matchInternationalCategory = $matchInternationalCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchInternationalCategory()
    {
        $this->matchInternationalCategory = null;
        return $this;
    }

    /**
     * Getter for matchPrivateCategory
     *
     * @return bool
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchPrivateCategory;
    }

    /**
     * Setter for matchPrivateCategory
     *
     * @param bool $matchPrivateCategory
     * @return $this
     */
    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $this->matchPrivateCategory = $matchPrivateCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchPrivateCategory()
    {
        $this->matchPrivateCategory = null;
        return $this;
    }

    /**
     * Getter for matchEmergencyCategory
     *
     * @return bool
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchEmergencyCategory;
    }

    /**
     * Setter for matchEmergencyCategory
     *
     * @param bool $matchEmergencyCategory
     * @return $this
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $this->matchEmergencyCategory = $matchEmergencyCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchEmergencyCategory()
    {
        $this->matchEmergencyCategory = null;
        return $this;
    }

    /**
     * Getter for matchOtherCategory
     *
     * @return bool
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchOtherCategory;
    }

    /**
     * Setter for matchOtherCategory
     *
     * @param bool $matchOtherCategory
     * @return $this
     */
    public function setMatchOtherCategory($matchOtherCategory)
    {
        $this->matchOtherCategory = $matchOtherCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchOtherCategory()
    {
        $this->matchOtherCategory = null;
        return $this;
    }


}

