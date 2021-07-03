<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagAddRequest21sp2
 *
 * Request to add a static configuration tag.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *           Replaced by: SystemDeviceManagementTagAddRequest22
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemDeviceManagementTagAddRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:25756","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:25757","type":"choice"},{"id":"ab0042aa512abc10edb3c55e4b416b0b:25763","type":"choice"}]}]
 */
class SystemDeviceManagementTagAddRequest21sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemDefaultTagSet
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25757
     * @var bool|null
     */
    private $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25757
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25756
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName isTagValueEncrypted
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25756
     * @var bool|null
     */
    private $isTagValueEncrypted = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25763
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25763
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $tagValueToEncrypt = null;

    /**
     * Getter for systemDefaultTagSet
     *
     * @return bool
     */
    public function getSystemDefaultTagSet()
    {
        return $this->systemDefaultTagSet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemDefaultTagSet;
    }

    /**
     * Setter for systemDefaultTagSet
     *
     * @param bool $systemDefaultTagSet
     * @return $this
     */
    public function setSystemDefaultTagSet($systemDefaultTagSet)
    {
        $this->systemDefaultTagSet = $systemDefaultTagSet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemDefaultTagSet()
    {
        $this->systemDefaultTagSet = null;
        return $this;
    }

    /**
     * Getter for tagSetName
     *
     * @return string
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetName()
    {
        $this->tagSetName = null;
        return $this;
    }

    /**
     * Getter for tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagName()
    {
        $this->tagName = null;
        return $this;
    }

    /**
     * Getter for isTagValueEncrypted
     *
     * @return bool
     */
    public function getIsTagValueEncrypted()
    {
        return $this->isTagValueEncrypted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTagValueEncrypted;
    }

    /**
     * Setter for isTagValueEncrypted
     *
     * @param bool $isTagValueEncrypted
     * @return $this
     */
    public function setIsTagValueEncrypted($isTagValueEncrypted)
    {
        $this->isTagValueEncrypted = $isTagValueEncrypted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTagValueEncrypted()
    {
        $this->isTagValueEncrypted = null;
        return $this;
    }

    /**
     * Getter for tagValue
     *
     * @return string
     */
    public function getTagValue()
    {
        return $this->tagValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @param string $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagValue()
    {
        $this->tagValue = null;
        return $this;
    }

    /**
     * Getter for tagValueToEncrypt
     *
     * @return string
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @param string $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        $this->tagValueToEncrypt = $tagValueToEncrypt;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagValueToEncrypt()
    {
        $this->tagValueToEncrypt = null;
        return $this;
    }


}

