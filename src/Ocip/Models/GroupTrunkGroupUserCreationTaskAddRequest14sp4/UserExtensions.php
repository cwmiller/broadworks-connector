<?php

namespace CWM\BroadWorksConnector\Ocip\Models\GroupTrunkGroupUserCreationTaskAddRequest14sp4;

/**
 * UserExtensions
 */
class UserExtensions
{

    /**
     * @ElementName extension
     * @var string[]
     */
    private $extension = array(
        
    );

    /**
     * @ElementName extensionRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
     */
    private $extensionRange = array(
        
    );

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @return string[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string[] $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Adder for extension
     *
     * @ElementName extension
     * @param string $extension
     * @return $this
     */
    public function addExtension($extension)
    {
        $this->extension []= $extension;
        return $this;
    }

    /**
     * Getter for extensionRange
     *
     * @ElementName extensionRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[]
     */
    public function getExtensionRange()
    {
        return $this->extensionRange;
    }

    /**
     * Setter for extensionRange
     *
     * @ElementName extensionRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17[] $extensionRange
     * @return $this
     */
    public function setExtensionRange($extensionRange)
    {
        $this->extensionRange = $extensionRange;
        return $this;
    }

    /**
     * Adder for extensionRange
     *
     * @ElementName extensionRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange17 $extensionRange
     * @return $this
     */
    public function addExtensionRange($extensionRange)
    {
        $this->extensionRange []= $extensionRange;
        return $this;
    }


}

