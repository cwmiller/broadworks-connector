<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceTagSetGetResponse
 *
 * Response to ServiceProviderAccessDeviceTagSetGetRequest.
 *         The response includes a tag set name defined in the access device.
 *
 * @see ServiceProviderAccessDeviceTagSetGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1223","type":"sequence"}]
 */
class ServiceProviderAccessDeviceTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1223
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

