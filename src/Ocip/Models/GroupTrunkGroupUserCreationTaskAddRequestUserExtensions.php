<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2964","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskAddRequestUserExtensions
{

    /**
     * @ElementName extension
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2964
     * @var string[]
     */
    private $extension = array(
        
    );

    /**
     * @ElementName extensionRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2964
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtensionRange[]
     */
    private $extensionRange = array(
        
    );

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

