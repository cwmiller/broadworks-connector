<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolFile
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:5872","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponseProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:5872
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

