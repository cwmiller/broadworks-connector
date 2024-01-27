<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagDeleteListRequest
 *
 * Request to delete static configuration tags.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8099","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:8100","type":"choice"}]}]
 */
class SystemDeviceManagementTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemDefaultTagSet
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:8100
     * @var bool|null
     */
    protected $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8100
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:8099
     * @MinLength 1
     * @MaxLength 64
     * @var string[]
     */
    protected $tagName = [
        
    ];

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
     * @return string[]
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string[] $tagName
     * @return $this
     */
    public function setTagName(array $tagName)
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
     * Adder for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function addTagName(string $tagName)
    {
        $this->tagName[] = $tagName;
        return $this;
    }
}

