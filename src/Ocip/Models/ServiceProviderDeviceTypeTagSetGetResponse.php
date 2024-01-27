<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeTagSetGetResponse
 *
 * Response to ServiceProviderDeviceTypeGetRequest.
 *
 * @see ServiceProviderDeviceTypeGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3410","type":"sequence"}]
 */
class ServiceProviderDeviceTypeTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3410
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

