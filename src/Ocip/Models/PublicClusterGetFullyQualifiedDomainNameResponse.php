<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PublicClusterGetFullyQualifiedDomainNameResponse
 *
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 *
 * @see PublicClusterGetFullyQualifiedDomainNameRequest
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName publicClusterFQDN
     * @var string|null
     */
    private $publicClusterFQDN = null;

    /**
     * Getter for publicClusterFQDN
     *
     * @ElementName publicClusterFQDN
     * @return string|null
     */
    public function getPublicClusterFQDN()
    {
        return $this->publicClusterFQDN;
    }

    /**
     * Setter for publicClusterFQDN
     *
     * @ElementName publicClusterFQDN
     * @param string|null $publicClusterFQDN
     * @return $this
     */
    public function setPublicClusterFQDN($publicClusterFQDN)
    {
        $this->publicClusterFQDN = $publicClusterFQDN;
        return $this;
    }


}

