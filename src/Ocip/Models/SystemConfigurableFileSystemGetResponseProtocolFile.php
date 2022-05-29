<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolFile
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7805","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponseProtocolFile
{

    /**
     * @ElementName replicated
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7805
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

