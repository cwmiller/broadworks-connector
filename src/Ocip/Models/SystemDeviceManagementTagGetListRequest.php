<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagGetListRequest
 *
 * Request to get the list of custom configuration tags managed by the Device
 * Management System.
 *         The response is either SystemDeviceManagementTagGetListResponse or
 * ErrorResponse.
 */
class SystemDeviceManagementTagGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

