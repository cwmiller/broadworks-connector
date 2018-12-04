<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemModifyRequestProtocolFile
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:5909","type":"sequence"}]
 */
class SystemConfigurableFileSystemModifyRequestProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:5909
     * @var bool|null
     */
    private $replicated = null;

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

