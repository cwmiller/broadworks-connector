<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PublicClusterGetFullyQualifiedDomainNameResponse
 *
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 *
 * @see PublicClusterGetFullyQualifiedDomainNameRequest
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:473","type":"sequence"}]
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName publicClusterFQDN
     * @Type string
     * @Optional
     * @Group d83be92ebac098705e715f24f025a9a9:473
     * @var string|null
     */
    private $publicClusterFQDN = null;

    /**
     * Getter for publicClusterFQDN
     *
     * @return string
     */
    public function getPublicClusterFQDN()
    {
        return $this->publicClusterFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicClusterFQDN;
    }

    /**
     * Setter for publicClusterFQDN
     *
     * @param string $publicClusterFQDN
     * @return $this
     */
    public function setPublicClusterFQDN($publicClusterFQDN)
    {
        $this->publicClusterFQDN = $publicClusterFQDN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicClusterFQDN()
    {
        $this->publicClusterFQDN = null;
        return $this;
    }


}

