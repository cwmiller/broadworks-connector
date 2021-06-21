<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse23V2ProtocolFile
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6624","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponse23V2ProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6624
     * @var bool|null
     */
    private $replicated = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6624
     * @var bool|null
     */
    private $secure = null;

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

