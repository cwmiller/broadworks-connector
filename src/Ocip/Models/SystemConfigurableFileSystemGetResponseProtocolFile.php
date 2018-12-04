<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolFile
 *
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:5872","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponseProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:5872
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

