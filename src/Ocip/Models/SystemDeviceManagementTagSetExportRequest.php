<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetExportRequest
 *
 * Request to export a custom tag set.
 *         Tag set name should be unique through out the system including all the reseller level tag sets.
 *         The response is either a SystemDeviceManagementTagSetExportResponse or an ErrorResponse.
 *
 * @see SystemDeviceManagementTagSetExportResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8293","type":"sequence"}]
 */
class SystemDeviceManagementTagSetExportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8293
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

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

