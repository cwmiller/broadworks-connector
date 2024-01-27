<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialableCallerIDCriteriaModifyRequest
 *
 * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9086","type":"sequence"}]
 */
class SystemDialableCallerIDCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName prefixDigits
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @MinLength 1
     * @MaxLength 10
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $prefixDigits = null;

    /**
     * @ElementName matchCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $matchCallType = null;

    /**
     * @ElementName matchAlternateCallIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $matchAlternateCallIndicator = null;

    /**
     * @ElementName matchLocalCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9086
     * @var bool|null
     */
    protected $matchOtherCategory = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * @return string|null
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @param string|null $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        if ($prefixDigits === null) {
            $this->prefixDigits = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->prefixDigits = $prefixDigits;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null
     */
    public function getMatchCallType()
    {
        return $this->matchCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList|null $matchCallType
     * @return $this
     */
    public function setMatchCallType(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
        if ($matchCallType === null) {
            $this->matchCallType = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchCallType = $matchCallType;
        }
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
     * Getter for matchAlternateCallIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList|null $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
        if ($matchAlternateCallIndicator === null) {
            $this->matchAlternateCallIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        }
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

