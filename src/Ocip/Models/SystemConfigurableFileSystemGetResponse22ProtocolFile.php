<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse22ProtocolFile
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9712","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponse22ProtocolFile
{
    /**
     * @ElementName replicated
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9712
     * @var bool|null
     */
    protected $replicated = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:9712
     * @var bool|null
     */
    protected $secure = null;

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

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
        return $this;
    }
}

