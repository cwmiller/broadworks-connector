<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyUnassignTagSetListRequest
 *
 * Request to unassign a list of Tag Sets to a device family. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7746","type":"sequence"}]
 */
class SystemDeviceFamilyUnassignTagSetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:7746
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $deviceFamilyName = null;

    /**
     * @ElementName tagSetName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:7746
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $tagSetName = [
        
    ];

    /**
     * Getter for deviceFamilyName
     *
     * @return string
     */
    public function getDeviceFamilyName()
    {
        return $this->deviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyName;
    }

    /**
     * Setter for deviceFamilyName
     *
     * @param string $deviceFamilyName
     * @return $this
     */
    public function setDeviceFamilyName($deviceFamilyName)
    {
        $this->deviceFamilyName = $deviceFamilyName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyName()
    {
        $this->deviceFamilyName = null;
        return $this;
    }

    /**
     * Getter for tagSetName
     *
     * @return string[]
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string[] $tagSetName
     * @return $this
     */
    public function setTagSetName(array $tagSetName)
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
     * Adder for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function addTagSetName(string $tagSetName)
    {
        $this->tagSetName[] = $tagSetName;
        return $this;
    }
}

