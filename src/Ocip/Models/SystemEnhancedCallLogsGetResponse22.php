<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsGetResponse22
 *
 * Response to SystemEnhancedCallLogsGetRequest22.
 */
class SystemEnhancedCallLogsGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxNonPagedResponseSize
     * @var int|null
     */
    private $maxNonPagedResponseSize = null;

    /**
     * @ElementName eclQueryApplicationURL
     * @var string|null
     */
    private $eclQueryApplicationURL = null;

    /**
     * @ElementName eclQueryDataRepositoryURL
     * @var string|null
     */
    private $eclQueryDataRepositoryURL = null;

    /**
     * Getter for maxNonPagedResponseSize
     *
     * @ElementName maxNonPagedResponseSize
     * @return int|null
     */
    public function getMaxNonPagedResponseSize()
    {
        return $this->maxNonPagedResponseSize;
    }

    /**
     * Setter for maxNonPagedResponseSize
     *
     * @ElementName maxNonPagedResponseSize
     * @param int|null $maxNonPagedResponseSize
     * @return $this
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize)
    {
        $this->maxNonPagedResponseSize = $maxNonPagedResponseSize;
        return $this;
    }

    /**
     * Getter for eclQueryApplicationURL
     *
     * @ElementName eclQueryApplicationURL
     * @return string|null
     */
    public function getEclQueryApplicationURL()
    {
        return $this->eclQueryApplicationURL;
    }

    /**
     * Setter for eclQueryApplicationURL
     *
     * @ElementName eclQueryApplicationURL
     * @param string|null $eclQueryApplicationURL
     * @return $this
     */
    public function setEclQueryApplicationURL($eclQueryApplicationURL)
    {
        $this->eclQueryApplicationURL = $eclQueryApplicationURL;
        return $this;
    }

    /**
     * Getter for eclQueryDataRepositoryURL
     *
     * @ElementName eclQueryDataRepositoryURL
     * @return string|null
     */
    public function getEclQueryDataRepositoryURL()
    {
        return $this->eclQueryDataRepositoryURL;
    }

    /**
     * Setter for eclQueryDataRepositoryURL
     *
     * @ElementName eclQueryDataRepositoryURL
     * @param string|null $eclQueryDataRepositoryURL
     * @return $this
     */
    public function setEclQueryDataRepositoryURL($eclQueryDataRepositoryURL)
    {
        $this->eclQueryDataRepositoryURL = $eclQueryDataRepositoryURL;
        return $this;
    }


}

