<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagModifyRequest
 *
 * Request to modify a static configuration tag.
 *         
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           tagValueToEncrypt
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7047","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7048","type":"choice"},{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7053","type":"choice"}]}]
 */
class SystemDeviceManagementTagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemDefaultTagSet
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7048
     * @var bool|null
     */
    private $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7048
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7047
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7053
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7053
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValueToEncrypt = null;

    /**
     * @ElementName isTagValueOverridable
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7047
     * @var bool|null
     */
    private $isTagValueOverridable = null;

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
     * Getter for tagValue
     *
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->tagValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @param string|null $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        if ($tagValue === null) {
            $this->tagValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagValue = $tagValue;
        }
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
     * @return string|null
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @param string|null $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        if ($tagValueToEncrypt === null) {
            $this->tagValueToEncrypt = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagValueToEncrypt = $tagValueToEncrypt;
        }
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

    /**
     * Getter for isTagValueOverridable
     *
     * @return bool
     */
    public function getIsTagValueOverridable()
    {
        return $this->isTagValueOverridable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTagValueOverridable;
    }

    /**
     * Setter for isTagValueOverridable
     *
     * @param bool $isTagValueOverridable
     * @return $this
     */
    public function setIsTagValueOverridable($isTagValueOverridable)
    {
        $this->isTagValueOverridable = $isTagValueOverridable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTagValueOverridable()
    {
        $this->isTagValueOverridable = null;
        return $this;
    }


}

