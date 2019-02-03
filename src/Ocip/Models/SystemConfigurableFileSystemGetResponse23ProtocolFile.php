<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse23ProtocolFile
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6284","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponse23ProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6284
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

