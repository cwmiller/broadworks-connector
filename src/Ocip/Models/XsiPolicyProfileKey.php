<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiPolicyProfileKey
 *
 * The system Xsi policy profile key.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5855","type":"sequence"}]
 */
class XsiPolicyProfileKey
{
    /**
     * @ElementName name
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5855
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5855
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel|null
     */
    protected $level = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileLevel $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }
}

