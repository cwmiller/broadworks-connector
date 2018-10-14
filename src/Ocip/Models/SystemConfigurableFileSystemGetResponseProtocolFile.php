<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponseProtocolFile
 */
class SystemConfigurableFileSystemGetResponseProtocolFile
{

    /**
     * @ElementName replicated
     * @var bool|null
     */
    private $replicated = null;

    /**
     * Getter for replicated
     *
     * @ElementName replicated
     * @return bool|null
     */
    public function getReplicated()
    {
        return $this->replicated;
    }

    /**
     * Setter for replicated
     *
     * @ElementName replicated
     * @param bool|null $replicated
     * @return $this
     */
    public function setReplicated($replicated)
    {
        $this->replicated = $replicated;
        return $this;
    }


}

