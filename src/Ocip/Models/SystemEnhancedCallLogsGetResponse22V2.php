<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsGetResponse22V2
 *
 * Response to SystemEnhancedCallLogsGetRequest22V2.
 *
 * @see SystemEnhancedCallLogsGetRequest22V2
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:249","type":"sequence"}]
 */
class SystemEnhancedCallLogsGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultSchema
     * @Type string
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:249
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultSchema = null;

    /**
     * @ElementName maxNonPagedResponseSize
     * @Type int
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:249
     * @MinInclusive 100
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxNonPagedResponseSize = null;

    /**
     * @ElementName eclQueryApplicationURL
     * @Type string
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:249
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $eclQueryApplicationURL = null;

    /**
     * @ElementName eclQueryDataRepositoryURL
     * @Type string
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:249
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $eclQueryDataRepositoryURL = null;

    /**
     * Getter for defaultSchema
     *
     * @return string
     */
    public function getDefaultSchema()
    {
        return $this->defaultSchema instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSchema;
    }

    /**
     * Setter for defaultSchema
     *
     * @param string $defaultSchema
     * @return $this
     */
    public function setDefaultSchema($defaultSchema)
    {
        $this->defaultSchema = $defaultSchema;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSchema()
    {
        $this->defaultSchema = null;
        return $this;
    }

    /**
     * Getter for maxNonPagedResponseSize
     *
     * @return int
     */
    public function getMaxNonPagedResponseSize()
    {
        return $this->maxNonPagedResponseSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxNonPagedResponseSize;
    }

    /**
     * Setter for maxNonPagedResponseSize
     *
     * @param int $maxNonPagedResponseSize
     * @return $this
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize)
    {
        $this->maxNonPagedResponseSize = $maxNonPagedResponseSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxNonPagedResponseSize()
    {
        $this->maxNonPagedResponseSize = null;
        return $this;
    }

    /**
     * Getter for eclQueryApplicationURL
     *
     * @return string
     */
    public function getEclQueryApplicationURL()
    {
        return $this->eclQueryApplicationURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eclQueryApplicationURL;
    }

    /**
     * Setter for eclQueryApplicationURL
     *
     * @param string $eclQueryApplicationURL
     * @return $this
     */
    public function setEclQueryApplicationURL($eclQueryApplicationURL)
    {
        $this->eclQueryApplicationURL = $eclQueryApplicationURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEclQueryApplicationURL()
    {
        $this->eclQueryApplicationURL = null;
        return $this;
    }

    /**
     * Getter for eclQueryDataRepositoryURL
     *
     * @return string
     */
    public function getEclQueryDataRepositoryURL()
    {
        return $this->eclQueryDataRepositoryURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eclQueryDataRepositoryURL;
    }

    /**
     * Setter for eclQueryDataRepositoryURL
     *
     * @param string $eclQueryDataRepositoryURL
     * @return $this
     */
    public function setEclQueryDataRepositoryURL($eclQueryDataRepositoryURL)
    {
        $this->eclQueryDataRepositoryURL = $eclQueryDataRepositoryURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEclQueryDataRepositoryURL()
    {
        $this->eclQueryDataRepositoryURL = null;
        return $this;
    }
}

