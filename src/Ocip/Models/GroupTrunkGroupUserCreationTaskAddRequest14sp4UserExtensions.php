<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1493","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4UserExtensions
{
    /**
     * @ElementName extension
     * @Type string
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1493
     * @MinLength 2
     * @MaxLength 20
     * @var string[]
     */
    protected $extension = [
        
    ];

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1493
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
     */
    public function getExtensionRange()
    {
        return $this->extensionRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[] $extensionRange
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange
     * @return $this
     */
    public function addExtensionRange($extensionRange)
    {
        $this->extensionRange[] = $extensionRange;
        return $this;
    }
}

