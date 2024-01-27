<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16427","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
{
    /**
     * @ElementName extension
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16427
     * @MinLength 2
     * @MaxLength 6
     * @var string[]
     */
    protected $extension = [
        
    ];

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16427
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange[]
     */
    protected $extensionRange = [
        
    ];

    /**
     * Getter for extension
     *
     * @return string[]
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string[] $extension
     * @return $this
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Adder for extension
     *
     * @param string $extension
     * @return $this
     */
    public function addExtension(string $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * Getter for extensionRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange[]
     */
    public function getExtensionRange()
    {
        return $this->extensionRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange[] $extensionRange
     * @return $this
     */
    public function setExtensionRange(array $extensionRange)
    {
        $this->extensionRange = $extensionRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionRange()
    {
        $this->extensionRange = null;
        return $this;
    }

    /**
     * Adder for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange $extensionRange
     * @return $this
     */
    public function addExtensionRange($extensionRange)
    {
        $this->extensionRange[] = $extensionRange;
        return $this;
    }
}

