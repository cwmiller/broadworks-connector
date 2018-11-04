<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsModifyRequest22
 *
 * Modify the system level data associated with Enhanced Call Logs.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemEnhancedCallLogsModifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxNonPagedResponseSize
     * @var int|null
     */
    private $maxNonPagedResponseSize = null;

    /**
     * @ElementName eclQueryApplicationURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $eclQueryApplicationURL = null;

    /**
     * @ElementName eclQueryDataRepositoryURL
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEclQueryApplicationURL()
    {
        return $this->eclQueryApplicationURL;
    }

    /**
     * Setter for eclQueryApplicationURL
     *
     * @ElementName eclQueryApplicationURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $eclQueryApplicationURL
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEclQueryDataRepositoryURL()
    {
        return $this->eclQueryDataRepositoryURL;
    }

    /**
     * Setter for eclQueryDataRepositoryURL
     *
     * @ElementName eclQueryDataRepositoryURL
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $eclQueryDataRepositoryURL
     * @return $this
     */
    public function setEclQueryDataRepositoryURL($eclQueryDataRepositoryURL)
    {
        $this->eclQueryDataRepositoryURL = $eclQueryDataRepositoryURL;
        return $this;
    }


}

