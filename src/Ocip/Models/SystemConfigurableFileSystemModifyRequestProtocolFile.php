<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemModifyRequestProtocolFile
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6745","type":"sequence"}]
 */
class SystemConfigurableFileSystemModifyRequestProtocolFile
{
    /**
     * @ElementName replicated
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6745
     * @var bool|null
     */
    protected $replicated = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6745
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

