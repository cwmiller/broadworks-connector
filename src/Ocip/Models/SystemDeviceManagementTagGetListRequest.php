<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagGetListRequest
 *
 * Request to get the list of custom configuration tags managed by the Device Management System.
 *         The response is either SystemDeviceManagementTagGetListResponse or ErrorResponse.
 *
 * @see SystemDeviceManagementTagGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7298","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7299","type":"choice"}]}]
 */
class SystemDeviceManagementTagGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemDefaultTagSet
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7299
     * @var bool|null
     */
    private $systemDefaultTagSet = null;

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7299
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $tagSetName = null;

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


}

