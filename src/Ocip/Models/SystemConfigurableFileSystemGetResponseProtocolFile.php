<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolFile
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9672","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponseProtocolFile
{
    /**
     * @ElementName replicated
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9672
     * @var bool|null
     */
    protected $replicated = null;

    /**
     * Getter for replicated
     *
     * @return bool
     */
    public function getReplicated()
    {
        return $this->replicated instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replicated;
    }

    /**
     * Setter for replicated
     *
     * @param bool $replicated
     * @return $this
     */
    public function setReplicated($replicated)
    {
        $this->replicated = $replicated;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReplicated()
    {
        $this->replicated = null;
        return $this;
    }
}

