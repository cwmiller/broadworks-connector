<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeTagSetGetResponse
 *
 * Response to ServiceProviderDeviceTypeGetRequest.
 *
 * @see ServiceProviderDeviceTypeGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:2687","type":"sequence"}]
 */
class ServiceProviderDeviceTypeTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2687
     * @var string|null
     */
    private $tagSetName = null;

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

