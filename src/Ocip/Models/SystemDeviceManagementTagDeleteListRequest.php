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
 */
class SystemDeviceManagementTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemDefaultTagSet
     * @var bool|null
     */
    private $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName tagName
     * @var string[]
     */
    private $tagName = array(
        
    );

    /**
     * Getter for systemDefaultTagSet
     *
     * @ElementName systemDefaultTagSet
     * @return bool|null
     */
    public function getSystemDefaultTagSet()
    {
        return $this->systemDefaultTagSet;
    }

    /**
     * Setter for systemDefaultTagSet
     *
     * @ElementName systemDefaultTagSet
     * @param bool|null $systemDefaultTagSet
     * @return $this
     */
    public function setSystemDefaultTagSet($systemDefaultTagSet)
    {
        $this->systemDefaultTagSet = $systemDefaultTagSet;
        return $this;
    }

    /**
     * Getter for tagSetName
     *
     * @ElementName tagSetName
     * @return string|null
     */
    public function getTagSetName()
    {
        return $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @ElementName tagSetName
     * @param string|null $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * Getter for tagName
     *
     * @ElementName tagName
     * @return string[]
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @ElementName tagName
     * @param string[] $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * Adder for tagName
     *
     * @ElementName tagName
     * @param string $tagName
     * @return $this
     */
    public function addTagName($tagName)
    {
        $this->tagName []= $tagName;
        return $this;
    }


}

